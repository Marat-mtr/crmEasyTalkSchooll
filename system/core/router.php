<?php


/**
 * Роутінг
 */
class Router { 

   
//    public function __construct() {
//
//
//        spl_autoload_register(function($class){
//
//            if($class == 'CrmMain') {
//                $class = str_replace('\\', '/', DIR_APPLICATION. 'crm/'.  strtolower($class). '.php');
//                require $class;
//            }
//
//            if($class == 'Users') {
//                $class = str_replace('\\', '/', DIR_APPLICATION. 'crm/account/'.  strtolower($class). '.php');
//                require $class;
//                echo 'users';
//            }
//
//            if ($class == 'UserModel') {
//                $class = str_replace('\\', '/', DIR_APPLICATION. 'crm/account/'.  strtolower($class). '.php');
//                require $class;
//            }
//
//
//
//        });
//
//
//       self::index();
//
//    }



    public static function index() {

        
        $url = $_SERVER['QUERY_STRING'];
        $url = explode('/', $url);
        
       

        if($url[0] == 'common' || $url == ''){

            $a = new Common();
            $a -> index();
            if(isset($url[1])){
                echo '<br> action: <b> '. $url[1].  '<b>';        
            }
        

        }else if($url[0] == 'CrmMain') {
            new CrmMain();

       
        }else if($url[0] == 'admin') {
            
            Admin::index();
            if(isset($url[1]) && $url[1] == 'login') {
                echo '<br>action:'. $url[1]. '';
            }
            
    
        }else{
           
            Common::index();
            echo '<br> Некоректне посилання! <br>';
        }



        

        
        
    }





    public function queryUrl(){

    }



}