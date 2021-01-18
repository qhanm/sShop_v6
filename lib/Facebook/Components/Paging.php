<?php
namespace Lib\Facebook\Components;

class Paging
{
    /* @var Cursors $cursors **/
    public $cursors;

    public function __construct(array $paging = [])
    {
        if(isset($paging['cursors'])) $this->cursors = new Cursors($paging['cursors']);
    }
}
