<?php
namespace App\Components;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class MongoModel extends Model
{
    protected $connection = 'mongodb';
}
