<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Logs\LogError;
use App\Models\Accounts\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Lib\Facebook\Auth;
use Lib\Facebook\Graph;
use Lib\Helpers\FileHelper;

class ConnectionController extends Controller
{
    public function index()
    {
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
        $accessToken = Auth::getAccessToken($request);

        if($accessToken instanceof \Exception)
        {
            // add log
            LogError::logException(LogError::FB_GET_ACCESS_TOKEN, $accessToken);
            $isError = true;
        }

        if($accessToken === null)
        {
            $isError = true;
        }
        else
        {
            $me = Graph::getMe($accessToken->getValue());

            if($me instanceof \Exception)
            {
                LogError::logException(LogError::FB_GET_ME, $me);
                $isError = true;
            }
            else
            {
                $me = json_decode($me);
                $avatar = Graph::getPicture($me->id, $accessToken->getValue());
                $path = FileHelper::createLink('avatars', $me->id . '.jpg');
                Storage::disk('public')->put($path, $avatar);
                UserSetting::query()->updateOrCreate(
                    ['user_id' => \Auth::user()->id, 'fb_account_id' => $me->id],
                    [
                        'fb_access_token' => $accessToken->getValue(),
                        'fb_account_id' => $me->id,
                        'fb_avatar' => url('/') . Storage::url($path),
                        'fb_name' => $me->name
                    ],
                );
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
        dd(Auth::getUserLiveVideo($fbAccountId, $userSetting->fb_access_token));
        //dd(Graph::getVideoByUser($fbAccountId, $userSetting->fb_access_token));
    }

    public function deleteInfo()
    {
        return true;
    }
}
