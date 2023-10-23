<?php

use system\library\Model;

class UsersModel extends Model {

    public function __construct(){

    }


    public function index(){

    }



    public function infoUsers(){

        $this->connectBD();

        $row = $this->mysqls;
        while ($rows = $row->fetch_assoc()) {
            $i = 0;
            $i = $i + 1;
            echo $i . ' '.     '<b>id: </b>' . $rows['user_id'] . '.'.
                '<b>User name: </b>' . $rows['username'] . '.'.
                '<b>First name: </b>' . $rows['firstname']. '.'.
                '<b>Last name: </b>' . $rows['lastname']. '.'.
                '<b>email: </b>' . $rows['email'] . '.'.
                '<b>password: </b>' . $rows['password'] . '.'.
                '<b>image:</b>' . $rows['image'] . '.';
                '<b>data: </b>' . $rows['date_add'] . '.' . '<br>';
        }

    }







}