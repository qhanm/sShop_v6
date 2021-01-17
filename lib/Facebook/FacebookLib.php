<?php
namespace Lib\Facebook;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;

class FacebookLib
{
    public static function prepare()
    {
        return new Facebook([
            'app_id' => '709945862992310',
            'app_secret' => '9c824112dfce46a550252a5e8c26c3fc',
            'graph_api_version' => 'v9.0',
        ]);
    }

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
            return $e;
        } catch(FacebookSDKException $e) {
            return $e;
        }
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

    public static function getMe(string $accessToken)
    {
        $me = self::call('get', '/me', $accessToken);

        if($me instanceof \Exception){
            return $me;
        }

        return $me->getGraphUser();
    }

    public static function getUserLiveVideo(string $user_id, string $accessToken)
    {
        return self::call('get', sprintf('%s/live_videos', $user_id), $accessToken);
    }
}
