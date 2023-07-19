<?php

namespace Controller\Crm;

class Crm {

    public static $urlroute;
    public $view;


    public function __construct() {

        self::index();   
    }



    public static function index() {
        
    }
    
    
    
    public function login() {

        require 'login_user.php';
    }
    
    
    
    
    public static function metod($urlroute) {

        self::$urlroute;
    }








}
?>