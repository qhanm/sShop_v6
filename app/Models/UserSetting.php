<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/***
 * Class UserSetting
 * @package App\Models
 * @property integer $id
 * @property integer $user_id
 * @property string $fb_access_token
 * @property string $fb_user_id
 */
class UserSetting extends \App\Components\Model
{
    protected $table = 'user_setting';

    protected $fillable = [
        'user_id',
        'fb_access_token',
        'fb_user_id'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
