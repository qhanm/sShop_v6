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
            'app_id' => '404833097446659',
            'app_secret' => '0e0fb49bae1eec0ac57686d56c56930e',
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
            'publish_video',
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
}
