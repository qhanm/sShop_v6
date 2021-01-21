<?php

namespace App\Models\FaceBooks;

use App\Components\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/***
 * Class Video
 * @package App\Models\FaceBooks
 * @property integer $id
 * @property integer $user_setting_id
 * @property string $live_views
 * @property string $status
 * @property string $creation_time
 * @property string $created_at
 * @property string $updated_at
 */
class Video extends Model
{
    use HasFactory;

    protected $table = 'video';

    protected $fillable = [
        'id',
        'user_setting_id',
        'live_views',
        'status',
        'creation_time',
    ];



}
