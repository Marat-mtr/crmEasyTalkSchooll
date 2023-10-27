<?php
/**
 * Роутінг
 */
class Router {

    public function __construct() {



        spl_autoload_register(function ($class) {

            $dirCore = str_replace('\\', '/', DIR_CORE. strtolower($class) . '.php');
            if (is_file($dirCore)) {
                require $dirCore;
            }

            $dirLib = str_replace('\\', '/', DIR_LIBRARY. strtolower($class) . '.php');
            if (is_file($dirLib)) {
                require $dirLib;
            }
        });

        spl_autoload_extensions('.php');



        $url = $_SERVER['QUERY_STRING'];
        $url = explode('/', $url);


        if ($url[0] == 'common') {

            echo "controller common";


        }else if ($url[0] == 'crm') {


            Libroutecrm::routeCrm();
            foreach(Libroutecrm::$routeCrm['path'] as $key => $value) {
                if(isset($url[1]) == $key) {
                    $urls = $value;
                }
            }

            foreach (Libroutecrm::$routeCrm['controller'] as $key => $value) {
                if (isset($url[1]) == $key) {
                    $requireController = $value;
                }
            }

            foreach (Libroutecrm::$routeCrm['action'] as $key => $value) {
                if (isset($url[1]) == $key) {
                    $requireAction = $value;
                }
            }



        } else if ($url[0] == 'admin') {



            LibrouteAdmin::routeAdmin();
            foreach (LibRouteAdmin::$routeAdmin['path'] as $key => $value) {
                if (isset($url[1]) == $key) {
                    $urls = $value;

                }
            }

            foreach (LibRouteAdmin::$routeAdmin['controller'] as $key => $value) {
                if (isset($url[1]) == $key) {
                    $requireController = $value;
                }
            }

            foreach (LibRouteAdmin::$routeAdmin['action'] as $key => $value) {
                if (isset($url[1]) == $key) {
                    $requireAction = $value;
                }
            }


        } else {
                new NotFound();
            }



        $require_file = str_replace('\\', '/', DIR_APPLICATION . strtolower($urls) . '.php');
        require $require_file;

        $a =  new $requireController();
        $a -> $requireAction();




    }
 




}


