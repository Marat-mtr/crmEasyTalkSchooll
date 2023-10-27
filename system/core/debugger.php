<?php

class Debugger
{
    public function __construct()
    {
        echo 'debuger';
    }


    public static function debug($value)
    {
        echo '<pre>' . print_r($value, true) . '</pre>';
        $a = '';

    }


}