<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/***
 * Class UserSetting
 * @package App\Models
 * @property integer $id
 * @property integer $user_id
 * @property string $fb_access_token
 * @property string $fb_account_id
 * @property string $fb_avatar
 * @property string $fb_name
 */
class UserSetting extends \App\Components\Model
{
    protected $table = 'user_setting';

    protected $fillable = [
        'user_id',
        'fb_access_token',
        'fb_account_id',
        'fb_avatar',
        'fb_name',
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

}
