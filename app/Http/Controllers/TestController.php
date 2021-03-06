<?php

namespace App\Http\Controllers;

use Facebook\Facebook;
use Illuminate\Http\Request;
use Lib\Helpers\RestApi;

class TestController extends Controller
{
    public function index()
    {
        //session_start();
        $fb = new Facebook([
            'app_id' => '709945862992310',
            'app_secret' => '9c824112dfce46a550252a5e8c26c3fc',
            'default_graph_version' => 'v2.3',
            //'persistent_data_handler'=>'session'
        ]);

        $helper = $fb->getRedirectLoginHelper();

        $permission = ['email', 'pages_show_list', 'user_videos'];

        $loginUrl = $helper->getLoginUrl(url('/') . '/callback', $permission);

        echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
    }

    public function callback(Request $request)
    {
        //session_start();
        $fb = new Facebook([
            'app_id' => '709945862992310',
            'app_secret' => '9c824112dfce46a550252a5e8c26c3fc',
            'default_graph_version' => 'v2.3',
            //'persistent_data_handler'=>'session'
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            if (isset($_GET['state'])) {
                $helper->getPersistentDataHandler()->set('state', $_GET['state']);
            }
            $accessToken = $helper->getAccessToken();
            dd($accessToken);
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }

        dd($_SERVER, $_GET, $_POST);
    }

    public function test2()
    {
        dd(RestApi::call('get', 'https://restapi.e-conomic.com/products', [
            'headers' => [
                'X-AppSecretToken' => 'SQ4FHqtYuMt5P3BjpMvNXD0QZhwXSGgNtiY4AfUxMP01',
                'X-AgreementGrantToken' => '1b8mCa78sUwcM4V6v66JGjCVfYpOWrH0oseFVFraRnM1'
            ],
            'query' => [
                'pageSize' => 2
            ]
        ]));
    }
}
