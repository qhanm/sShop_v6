<?php
namespace Lib\Facebook\Models;

use App\Models\Accounts\UserSetting;
use App\Models\FaceBooks\Video;
use App\Models\Logs\LogError;
use Facebook\FacebookResponse;
use Lib\Facebook\Api\FacebookRest;
use Lib\Facebook\Components\From;
use Lib\Facebook\Components\Paging;

class LiveVideo
{
    /* @var integer $id **/
    public $id;

    /* @var integer $seconds_left **/
    public $seconds_left;

    /* @var string $creation_time **/
    public $creation_time;

    /* @var integer $live_views **/
    public $live_views;

    /* @var string $status **/
    public $status;

    /* @var From $from **/
    public $from;

    public function __construct(array $video = [])
    {
        if (isset($video['id'])) $this->id = $video['id'];
        if (isset($video['seconds_left'])) $this->seconds_left = $video['seconds_left'];
        if (isset($video['creation_time'])) $this->creation_time = $video['creation_time'];
        if (isset($video['live_views'])) $this->live_views = $video['live_views'];
        if (isset($video['status'])) $this->status = $video['status'];
        if (isset($video['from'])) $this->from = new From($video['from']);
    }


    public static function syncLiveVideo(UserSetting $userSetting, $response = null)
    {
        try
        {
            if($response === null)
            {
                $response = FacebookRest::getUserLiveVideo($userSetting);
            }

            $videos = $response->getDecodedBody();

            $data = isset($videos['data']) ? $videos['data'] : [];
            $paging = isset($videos['paging']) ? $videos['paging'] : [];

            if(count($data) === 0) return true;

            foreach($data as $key => $liveVideo)
            {
                $objectLiveVideo = new self($liveVideo);

                $modelVideo = Video::query()->where('id', $objectLiveVideo->id)->first();

                if($modelVideo === null)
                {
                    $modelVideo = new Video();
                    $modelVideo->id = $objectLiveVideo->id;
                }

                $modelVideo->user_setting_id = $userSetting->id;
                $modelVideo->live_views = $objectLiveVideo->live_views;
                $modelVideo->status = $objectLiveVideo->status;
                $modelVideo->created_at = $objectLiveVideo->creation_time;
                $modelVideo->save();
            }

            if(!empty($paging))
            {
                $objectPaging = new Paging($paging);
                if(!empty($objectPaging->cursors->after))
                {
                    $objectFacebook = FacebookRest::prepare();
                    $newResponse = $objectFacebook->next($response->getGraphEdge());

                    if($newResponse !== null)
                    {
                        return self::syncLiveVideo($userSetting, $newResponse);
                    }
                }
            }

            $userSetting->fb_video_last_updated = date('Y-m-d H:i:s');
            $userSetting->save();
        }
        catch (\Exception $exception)
        {
            LogError::logException('sync live video', $exception, ['user_setting_id' => $userSetting->id]);
        }
    }
}
