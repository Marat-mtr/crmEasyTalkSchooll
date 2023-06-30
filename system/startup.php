<?php

if (is_file('config.php')) {
    require_once 'config.php';
}

require_once 'utf8.php';



function library($class) {
    if(is_file(str_replace('\\', '/', 'system/' . strtolower($class)) . '.php'))
    {
        require  str_replace('\\', '/', 'system/' . strtolower($class)) . '.php';
    }else
    {
        require  str_replace('\\', '/', 'system/library/' . strtolower($class)) . '.php';
    } 
}

spl_autoload_register('library');
spl_autoload_extensions('.php');
