<?php


/**
 * Роутінг
 */
class Router { 

   
    public function __construct() {

        spl_autoload_register(function($class){

            if($class == 'Controller' || $class == 'Model') {
                $class = str_replace('\\', '/', DIR_SYSTEM. 'core/'. strtolower($class). '.php');
                require $class;
            }


            if($class == 'Common') {
                $class = str_replace('\\', '/', DIR_APPLICATION. 'common/'.  strtolower($class). '.php');
                require $class;
            }

            if($class == 'Crm') {
                $class = str_replace('\\', '/', DIR_APPLICATION. 'crm/'.  strtolower($class). '.php');
                require $class;
            }

            if($class == 'Admin' || $class == 'Login') {
                $class = str_replace('\\', '/', DIR_APPLICATION. 'admin/'.  strtolower($class). '.php');
                require $class;
            }

            if($class == 'bdConnect') {
                $class = str_replace('\\', '/', DIR_MODEL.  strtolower($class). '.php');
                require $class;
            }


        });
          
        self::index(); 
        
    }



    public static function index() {

        
        $url = $_SERVER['QUERY_STRING'];
        $url = explode('/', $url);
        
       

        if($url[0] == 'common' || $url == ''){

            Common::index();
            if(isset($url[1])){
                echo '<br> action: <b> '. $url[1].  '<b>';        
            }
        

        }else if($url[0] == 'crm') {    
                   
            new Crm;           
            if(isset($url[1])) {
                $urlroute = $url[1]; 
                Crm::metod($urlroute);
            }
    
       
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








}