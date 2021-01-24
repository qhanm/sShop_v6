<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Jobs\SyncVideo;
use App\Models\Logs\LogError;
use App\Models\Accounts\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Lib\Facebook\Api\FacebookRest;
use Lib\Facebook\Auth;
use Lib\Facebook\FacebookLib;
use Lib\Facebook\Graph;
use Lib\Facebook\Models\LiveVideo;
use Lib\Helpers\FileHelper;

class ConnectionController extends Controller
{
    public function index()
    {
        //dd(LogError::query()->get()->toArray());
        $userSettings = \Auth::user()->userSetting()->get();

        $renderUrlLogin = Auth::renderLoginUrl();
        return view('backend.connection.index', [
            'renderUrlLogin' => $renderUrlLogin,
            'userSettings' => $userSettings,
        ]);
    }

    public function callback(Request $request)
    {
        $isError = false;
        $accessToken = FacebookRest::getAccessToken($request);

        if($accessToken === false)
        {
            $isError = true;
        }
        else
        {
            $me = FacebookRest::getMe($accessToken->getValue());

            if($me === false)
            {
                $isError = true;
            }
            else
            {
                $me = json_decode($me);
                $avatar = Graph::getPicture($me->id, $accessToken->getValue());

                $path = FileHelper::createLink('avatars', $me->id . '.jpg');
                Storage::disk()->put($path, $avatar);

                $userSetting = UserSetting::query()->updateOrCreate(
                    ['user_id' => \Auth::user()->id, 'fb_account_id' => $me->id],
                    [
                        'fb_access_token' => $accessToken->getValue(),
                        'fb_account_id' => $me->id,
                        'fb_avatar' => FileHelper::createFullPathUrlUpload($path),
                        'fb_name' => $me->name
                    ],
                );

                SyncVideo::dispatch($userSetting)->delay(Carbon::now()->addSeconds(10));
            }
        }

        if($isError)
        {
            $request->session()->flash('getAccessTokenError', 'Login fail, please tries again');
        }

        return redirect()->route('admin.connection.index');
    }

    public function getUserVideos(string $fbAccountId)
    {
        $userSetting = \Auth::user()->userSetting()->where('fb_account_id', $fbAccountId)->first();
        $response = FacebookLib::getUserLiveVideo($userSetting);
        $fb = FacebookRest::prepare();
        //dd($fb->next($response->getGraphEdge()));
        //dd($response->getGraphEdge());
        LiveVideo::syncLiveVideo($userSetting, $response->getDecodedBody());
        dd($response->getDecodedBody());

    }

    public function deleteInfo()
    {
        return true;
    }
}
