<?php

namespace App\Models\FaceBooks;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/***
 * Class Video
 * @package App\Models\FaceBooks
 * @property integer $id
 * @property integer $user_setting_id
 * @property string $live_videos
 * @property string $status
 * @property string $creation_time
 * @property string $created_at
 * @property string $updated_at
 */
class Video extends \App\Components\Model
{
    use HasFactory;

    protected $table = 'video';

    protected $fillable = [
        'id',
        'user_setting_id',
        'live_videos',
        'status',
        'creation_time',
    ];



}
