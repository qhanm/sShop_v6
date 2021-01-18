<?php
namespace Lib\Facebook\Models;

use Lib\Facebook\Components\From;

class LiveVideo
{
    /* @var integer $id **/
    public $id;

    /* @var integer $seconds_left **/
    public $seconds_left;

    /* @var string $creation_time **/
    public $creation_time;

    /* @var integer $live_views **/
    public $live_views;

    /* @var string $status **/
    public $status;

    /* @var From $from **/
    public $from;

    public function __construct(array $video = [])
    {
        if (isset($video['id'])) $this->id = $video['id'];
        if (isset($video['seconds_left'])) $this->seconds_left = $video['seconds_left'];
        if (isset($video['creation_time'])) $this->creation_time = $video['creation_time'];
        if (isset($video['live_views'])) $this->live_views = $video['live_views'];
        if (isset($video['status'])) $this->status = $video['status'];
        if (isset($video['from'])) $this->from = new From($video['from']);
    }
}
