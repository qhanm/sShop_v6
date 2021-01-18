<?php
namespace Lib\Facebook\Components;

class From
{
    /* @var integer $id **/
    public $id;

    /* @var string $name **/
    public $name;

    public function __construct(array $from = [])
    {
        if(isset($from['id'])) $this->id = $from['id'];
        if(isset($from['name'])) $this->name = $from['name'];
    }
}
