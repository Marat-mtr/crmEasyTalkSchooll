<?php
/**
 * Роутінг
 */
class Router {

    //private $urls = '';

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


        if ($url[0] == 'common' || $url[0] == '') {

            LibRouteCommon::routeCommon();
            foreach (LibRouteCommon::$routeCommon['path'] as $key => $value) {
                if (!empty($url[1] && $url[1] == $key)) {
                    $urls = $value;
                }
            }

            foreach (LibRouteCommon::$routeCommon['controller'] as $key => $value) {
                if (!empty($url[1]) && $url[1] == $key) {
                    $requireController = $value;
                }
            }

            foreach (LibRouteCommon::$routeCommon['action'] as $key => $value) {
                if (!empty($url[1]) && $url[1] == $key) {
                    $requireAction = $value;
                }
            }

        }else if ($url[0] == 'crm') {

            LibRouteCrm::routeCrm();
            foreach(LibRouteCrm::$routeCrm['path'] as $key => $value) {
                if(!empty($url[1]) && $url[1] == $key) {
                    $urls = $value;
                }
            }

            foreach (LibRouteCrm::$routeCrm['controller'] as $key => $value) {
                if (!empty($url[1]) && $url[1] == $key) {
                    $requireController = $value;
                }
            }

            foreach (LibRouteCrm::$routeCrm['action'] as $key => $value) {
                if (!empty($url[1]) && $url[1] == $key) {
                    $requireAction = $value;
                }
            }


        } else if ($url[0] == 'admin') {

            LibRouteAdmin::routeAdmin();
            foreach (LibRouteAdmin::$routeAdmin['path'] as $key => $value) {
                if (!empty($url[1]) && $url[1] == $key) {
                    $url = $value;
                }
            }

            foreach (LibRouteAdmin::$routeAdmin['controller'] as $key => $value) {
                if (!empty($url[1]) && $url[1] == $key) {
                    $requireController = $value;
                }
            }

            foreach (LibRouteAdmin::$routeAdmin['action'] as $key => $value) {
                if (!empty($url[1]) && $url[1] == $key) {
                    $requireAction = $value;
                }
            }

        } else {

            LibRouteCommon::routeCommon();
            $url = LibRouteCommon::$routeCommon['path']['notFound'];
            $requireController = LibRouteCommon::$routeCommon['controller']['notFound'] ;
            $requireAction = LibRouteCommon::$routeCommon['action']['notFound'];
        }


        $require_file = str_replace('\\', '/', DIR_APPLICATION . strtolower($urls) . '.php');
        if(isset($require_file)) {
            require $require_file;
        }

        echo Debugger::debug($requireController);
        echo Debugger::debug($requireAction);
        $a = new $requireController();
        $a -> $requireAction();




    }
 




}


