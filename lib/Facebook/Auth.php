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
            'default_graph_version' => 'v2.3',
        ]);
    }

    public static function renderLoginUrl()
    {
        $facebook = clone self::prepare();
        $helper = $facebook->getRedirectLoginHelper();

        $permission = ['email'];

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
}
