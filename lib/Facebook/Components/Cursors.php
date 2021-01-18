<?php
namespace Lib\Facebook\Components;

class Cursors
{
    /* @var string $before **/
    public $before;

    /* @var string $after **/
    public $after;

    public function __construct(array $cursors = [])
    {
        if(isset($cursors['before'])) $this->before = $cursors['before'];
        if(isset($cursors['after'])) $this->after = $cursors['after'];
    }
}
