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

    }


    public function indexRouting () {


        //$url = $_SERVER['QUERY_STRING'];
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);


        if ($url[1] == 'common' || $url[1] == '') {

            LibRouteCommon::routeCommon();

            $path = LibRouteCommon::$routeCommon['path']['home'];
            $controller = LibRouteCommon::$routeCommon['controller']['home'];
            $action = LibRouteCommon::$routeCommon['action']['home'];


            foreach (LibRouteCommon::$routeCommon['path'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $path = $value;
                }
            }

            foreach (LibRouteCommon::$routeCommon['controller'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $controller = $value;
                }
            }

            foreach (LibRouteCommon::$routeCommon['action'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $action = $value;
                }
            }

        }else if ($url[1] == 'crm') {

            LibRouteCrm::routeCrm();

            $path = LibRouteCrm::$routeCrm['path']['home'];
            $controller = LibRouteCrm::$routeCrm['controller']['home'];
            $action = LibRouteCrm::$routeCrm['action']['home'];
            $pathExists = '';

            foreach(LibRouteCrm::$routeCrm['path'] as $key => $value) {
                if(!empty($url[2]) && $url[2] == $key) {
                    $path = $value;
                    $pathExists = true;
                }
            }

            if (!$pathExists && !empty($url[2])) {
                $action = LibRouteCrm::$routeCrm['action']['notFound'];
            }


            foreach (LibRouteCrm::$routeCrm['controller'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $controller = $value;
                }
            }

            foreach (LibRouteCrm::$routeCrm['action'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $action = $value;
                }
            }



        } else if ($url[1] == 'admin') {

            LibRouteAdmin::routeAdmin();

            $path = LibRouteAdmin::$routeAdmin['path']['home'];
            $controller = LibRouteAdmin::$routeAdmin['controller']['home'];
            $action = LibRouteAdmin::$routeAdmin['action']['home'];
            $pathExists = '';

            foreach (LibRouteAdmin::$routeAdmin['path'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $path = $value;
                    $pathExists = true;
                }
            }

            if (!$pathExists && !empty($url[2])) {
                $action = LibRouteAdmin::$routeAdmin['action']['notFound'];
            }



            foreach (LibRouteAdmin::$routeAdmin['controller'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $controller = $value;
                }
            }

            foreach (LibRouteAdmin::$routeAdmin['action'] as $key => $value) {
                if (!empty($url[2]) && $url[2] == $key) {
                    $action = $value;
                }
            }

        } else {

            LibRouteCommon::routeCommon();
            $path = LibRouteCommon::$routeCommon['path']['home'];
            $controller = LibRouteCommon::$routeCommon['controller']['home'] ;
            $action = LibRouteCommon::$routeCommon['action']['notFound'];
        }


        $require_file = str_replace('\\', '/', DIR_APPLICATION . strtolower($path) . '.php');
        if(is_file($require_file)) {
            require $require_file;
        }

        $a = new $controller();
        $a -> $action();

    }




}


