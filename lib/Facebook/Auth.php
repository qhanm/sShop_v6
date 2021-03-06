<?php
namespace Lib\Facebook;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;

class Auth
{
    public static function prepare()
    {
        return new Facebook([
            'app_id' => '709945862992310',
            'app_secret' => '9c824112dfce46a550252a5e8c26c3fc',
            'graph_api_version' => 'v9.0',
        ]);
    }

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

    public static function getMe(string $accessToken)
    {
        try{
            $facebook = clone self::prepare();
            $response = $facebook->get('/me', $accessToken);
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            return $e;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            return $e;
        }

        return $response->getGraphUser();
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
            return $facebookResponseException;
        } catch (FacebookSDKException $facebookSDKException) {
            return $facebookSDKException;
        }

        return null;
    }

    public static function getUserLiveVideo(string $user_id, string $accessToken)
    {
        $facebook = clone self::prepare();

        try
        {
            return $facebook->get(
                $user_id . '/live_videos',
                $accessToken
            );
        } catch (FacebookResponseException $facebookResponseException) {
            return $facebookResponseException;
        } catch (FacebookSDKException $facebookSDKException) {
            return $facebookSDKException;
        }

        return null;
    }
}
