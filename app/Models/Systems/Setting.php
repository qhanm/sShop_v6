<?php

namespace App\Models\Systems;

use Illuminate\Support\Facades\Cache;

/***
 * Class Setting
 * @package App\Models\Systems
 * @property integer $id
 * @property string $meta_key
 * @property string $meta_value
 * @property string $free_text1
 */
class Setting extends \App\Components\Model
{
    const KEY_FB_APP_ID = 'fb_app_id';
    const KEY_FB_APP_SECRET = 'fb_app_secret';
    const KEY_FB_GRAPH_API_VERSION = 'fb_graph_api_version';

    const CACHE_KEY_GET_SETTING_APP_FACEBOOK = 'getSettingAppFacebook';

    protected $table = 'setting';

    public $timestamps = false;

    protected $fillable = [
        'meta_key',
        'meta_value',
        'free_text1'
    ];

    public static function getSettingAppFacebook()
    {
        return Cache::remember(self::CACHE_KEY_GET_SETTING_APP_FACEBOOK, 216000, function () {
            return self::query()->whereIn('meta_key', [
                self::KEY_FB_APP_ID,
                self::KEY_FB_APP_SECRET,
                self::KEY_FB_GRAPH_API_VERSION
            ])->get();
        });
    }
}
