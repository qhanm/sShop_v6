<?php
namespace Lib\Helpers;

class FileHelper
{
    public static function createFullPathUrlUpload($path)
    {
        return url('/') . '/uploads/' . $path;
    }

    public static function createLink($folder, $name){
        return sprintf('%s/%s/%s/%s', $folder, date('Y'), date('m'), $name);
    }
}
