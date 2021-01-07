<?php
namespace Lib\Facebook;

use Lib\Helpers\RestApi;

class Graph
{
    protected static $baseUrl = 'https://graph.facebook.com/';

    public static function setUrl($url)
    {
        return self::$baseUrl . trim(ltrim($url, '/'));
    }

    public static function getMe(string $access_token)
    {
        $url = self::setUrl('me');
        return RestApi::call('get', $url, [
            'query' => [
                'access_token' => $access_token
            ]
        ]);
    }

    public static function getPicture(int $user_id, string $access_token, int $width = 160, int $height = 160)
    {
        $url = self::setUrl(sprintf('%d/picture', $user_id));
        return RestApi::call('get', $url, [
            'query' => [
                'access_token' => $access_token,
                'width' => $width,
                'height' => $height,
            ]
        ]);
    }

    public static function getVideoByUser(int $user_id, string $access_token)
    {
        $url = self::setUrl(sprintf('%d/live_videos', $user_id));
        return RestApi::call('get', $url, [
            'query' => [
                'access_token' => $access_token
            ]
        ]);
    }
}
