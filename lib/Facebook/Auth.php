<?php
namespace Lib\Facebook;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;

class Auth
{
    protected $facebook;

    public function __construct()
    {
        $this->facebook = new Facebook([
            'app_id' => '709945862992310',
            'app_secret' => '9c824112dfce46a550252a5e8c26c3fc',
            'default_graph_version' => 'v2.3',
        ]);
    }

    public function renderLoginUrl()
    {
        $facebook = clone $this->facebook;
        $helper = $facebook->getRedirectLoginHelper();

        $permission = ['email'];

        return $helper->getLoginUrl(url('/') . '/callback', $permission);
    }

    public function getAccessToken(Request $request)
    {
        $facebook = clone $this->facebook;
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
    }
}
