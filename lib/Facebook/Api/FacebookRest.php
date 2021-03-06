<?php
namespace Lib\Facebook\Api;

use App\Models\Accounts\UserSetting;
use App\Models\Logs\LogError;
use App\Models\Systems\Setting;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Lib\Helpers\RestApi;

class FacebookRest
{
    public static function prepare() {
        $settings = Setting::getSettingAppFacebook();

        $config = [];
        /* @var Setting $setting **/
        foreach($settings as $setting)
        {
            switch ($setting->meta_key)
            {
                case Setting::KEY_FB_APP_ID:
                    $config['app_id'] = $setting->meta_value;
                    break;
                case Setting::KEY_FB_APP_SECRET:
                    $config['app_secret'] = $setting->meta_value;
                    break;
                case Setting::KEY_FB_GRAPH_API_VERSION:
                    $config['graph_api_version'] = $setting->meta_value;
                    break;
            }
        }

        return new Facebook($config);
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param string $accessToken
     * @param array $options
     * @return \Facebook\FacebookResponse|false
     */
    public static function call(string $method, string $endpoint, string $accessToken, array $options = [])
    {
        $facebook = self::prepare();
        try{
            switch ($method)
            {
                case 'get':
                    return $facebook->get($endpoint, $accessToken);
            }
        } catch(FacebookResponseException $e) {
            LogError::logException($endpoint, $e);
            return false;
        } catch(FacebookSDKException $e) {
            LogError::logException($endpoint, $e);
            return false;
        }
    }

    /**
     * @return string
     */
    public static function renderLoginUrl()
    {
        $facebook = clone self::prepare();
        $helper = $facebook->getRedirectLoginHelper();

        $permission = [
            'email',
            'pages_show_list',
            'user_videos',
            'public_profile',
            'pages_show_list',
        ];
        return $helper->getLoginUrl(route('admin.connection.callback'), $permission);
    }

    public static function getAccessToken(Request $request)
    {
        $facebook = clone self::prepare();
        $helper = $facebook->getRedirectLoginHelper();

        try
        {
            if(!empty($request->get('state', null)))
            {
                $helper->getPersistentDataHandler()->set('state', $request->get('state'));
            }

            return $helper->getAccessToken();
        } catch (FacebookResponseException $facebookResponseException) {
            LogError::logException('getAccessToken', $facebookResponseException);
            return false;
        } catch (FacebookSDKException $facebookSDKException) {
            LogError::logException('getAccessToken', $facebookSDKException);
            return false;
        }
    }

    public static function getMe(string $accessToken)
    {
        $me = self::call('get', '/me', $accessToken);

        if($me instanceof \Exception){
            return $me;
        }

        return $me->getGraphUser();
    }

    public static function getUserLiveVideo(UserSetting $userSetting)
    {
        $fields = [
            'description',
            'seconds_left',
            'title',
            'creation_time',
            'published',
            'targeting',
            'content_tags',
            'from',
            'live_views',
            'secure_stream_url',
            'status'
        ];

        $filtering = [
            'since' => !empty($userSetting->fb_video_last_updated) ? $userSetting->fb_video_last_updated : strtotime(date('2015-01-01 00:00:00')),
            'until' => strtotime(date('Y-m-d H:i:s')),
        ];

        $query = http_build_query([
                    'fields' => implode(',', $fields)]
            ) . '&' . http_build_query($filtering);

        return self::call('get', sprintf('%s/live_videos?%s', $userSetting->fb_account_id, $query), $userSetting->fb_access_token);
    }

    public static function getPicture(int $user_id, string $access_token, int $width = 160, int $height = 160)
    {
        $query = http_build_query([
            'width' => $width,
            'height' => $height
        ]);
        return self::call('get', sprintf('%s/picture?%s', $user_id, $query), $access_token);
    }
}
