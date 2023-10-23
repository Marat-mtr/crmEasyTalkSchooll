<?php

//namespace controller\crm\account;
//use system\core\Controller;
//use system\core\Debuger;

class Users extends Controller {

    public function __construct(){
        $a = new UsersModel();
        $a -> infoUsers();
    }


    public function __construct(){
        echo '<br>' . ' - require class Users.  actions: __construct.  (exts Controller).' . '<br>';

    }


        echo '<br>' . ' - require class Users.  action: index.   (ext Controller). ' . '<br>';


    }




}
?>