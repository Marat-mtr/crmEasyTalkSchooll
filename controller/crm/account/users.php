<?php

//namespace controller\crm\account;
//use system\core\Controller;
//use system\core\Debuger;

class Users extends Controller {


    public function __construct(){
        echo '<br>' . ' - require class Users.  actions: __construct.' . '<br>';

    }


    public function indexer() {
        echo '<br>' . ' - require class Users.  action: index. ' . '<br>';


    }

    public function loginUser () {
        echo ' - require class Users, action: LoginUsers';
    }




}
?>