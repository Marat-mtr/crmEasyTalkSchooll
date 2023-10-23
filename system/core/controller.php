<?php

//namespace System\Core;

namespace system\core;
class Controller
{
    //protected $mmm ;

    public function __construct()
    {
        echo '- require abstr class Controller. actions: __construct' . '<br>';

        $this->mmm = ['key1' => 'k1'];
        return $this;

    }


    public function indexs()
    {
        echo '<br>' . ' - require class Conntroller. actions: idex()' . '<br>';


    }


}

?>