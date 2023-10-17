<?php

if (is_file('config.php')){
    require_once 'config.php';
}




require 'system/core/controller.php';
require 'system/core/model.php';
require 'model/crm/account/users.php';
require 'controller/crm/account/users.php';



require 'system/startup.php';


new Users();



echo '<br><br><br><br>' . 'the end';










