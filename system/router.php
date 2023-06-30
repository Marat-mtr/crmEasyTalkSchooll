<?php


class Router
{
    
    /**
     * Таблиця маршрутів
     * @var array
     */
    protected static $routes = [];

    /**
     * Поточний маршрут
     * @var array
     */
    protected static $route = [];


    /**
     * добавляє маршрут в таблицю маршрутів
     * @param string $regex регулярний вираз маршрута
     * @param array $route маршрут ([controller, action, params])
     */
    public static function add($regex, $route =[])
    {
        self::$routes[$regex] = $route;
    }
    

    public static function getRoutes()
    {
        return self::$routes;
    }


    public static function getRoute()
    {
        return self::$route;
    }


    public static function matchRoute($url)
    {
        foreach(self::$routes as $key => $value)
        {
            if(preg_match("#$key#i", $url, $matches))   //#-дієзи , модіфікатор шаблона "і" який робить його регістронезалежним
            {
                Debuger::debug($matches);
                self::$route = $value;
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url)
    {
        if(self::matchRoute($url))
        {
            echo 'Ok';

        }else
        {
            http_response_code(404);
            include '404.html';
        }
    }




}