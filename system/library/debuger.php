<?php

class Debuger 
{
    public function __construct()
    {
       echo '<br> class Debager <br>' ;
    }



    public static function debug($value)
    {
        echo '<pre>' . print_r($value, true) . '</pre>';
        $a = '';

    }





}