<?php

if (is_file('config.php')) 
{
    require_once 'config.php';
}



require 'system/startup.php';


Router::add('^$', ['controller' => 'Home', 'action' => 'index']);
Router::add('([a-z-]+)/([a-z-]+)');


Debuger::debug(Router::getRoutes());


if(Router::matchRoute($query))
{
    Debuger::debug(Router::getRoute());
    echo 'ok';
}




echo '<br>' . 'the end';






