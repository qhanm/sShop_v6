<?php

namespace App\Models\Accounts;

use App\Components\Model;

/***
 * Class UserSetting
 * @package App\Models
 * @property integer $id
 * @property integer $user_id
 * @property string $fb_access_token
 * @property string $fb_account_id
 * @property string $fb_avatar
 * @property string $fb_name
 * @property string $fb_comment_last_updated
 * @property string $fb_video_last_updated
 * @property string $created_at
 * @property string $updated_at
 */
class UserSetting extends Model
{
    protected $table = 'user_setting';

    protected $fillable = [
        'user_id',
        'fb_access_token',
        'fb_account_id',
        'fb_avatar',
        'fb_name',
        'fb_comment_last_updated',
        'fb_video_last_updated'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
