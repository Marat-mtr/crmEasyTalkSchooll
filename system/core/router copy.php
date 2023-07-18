<?php




/**
 * Роутінг
 */
class Router {
    public $query;

   

    public function __construct() {

        //self::index();

        spl_autoload_register(function($class){

            $class = str_replace('\\', '/', 'controller/common/'. strtolower($class). '.php');
            require $class;
        });

    
    }
    
    
    
    public static function index() {
       
        $query = $_SERVER['QUERY_STRING'];
        echo '<br> class router loaded. '.  $query . '<br>';
        
    }


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
            if(preg_match("#$key#i", $url, $matches))   //#-дієзи , модіфікатор шаблона "і" який робить його регістронезалежним "#$key#i",
            {
                Debuger::debug($matches);
                self::$route = $value;
                return true;
            }
        }
        return false;
    }

    
    /**
     * перенаправляє URL по коректному маршруту
     * @param string $url вхідний URL
     * @return void  нічого невертає
     */
    public static function dispatch_wait($url){
        if(self::matchRoute($url))
        {
              $controller = self::$route['controller'];  
              $controller = str_replace('-', ' ', $controller);
              $controller = ucwords($controller);     // ucwords - перетворює на верхній регістр
              $controller = str_replace(' ', '', $controller);
              library($controller);
              if(class_exists($controller))
              {
                echo '<br> class_exists ', $controller, '  - OK <br>';
                $controller::index();
                Debuger::debug($controller);
              }
        }else
        {
            http_response_code(404);
            include '404.html';
        }
    }



    public static function dispatch($url){
        
       $url = strval($url);
        $url = str_replace('-', ' ', $url);
        $url = ucwords($url);
        $url = str_replace(' ', '', $url);
        
        library($url);

        if(class_exists($url)){
            $url::index();
            echo 'class <b>'. $url. '<b> loaded';
        }else if(!empty($url)) {
            library('notfound');
        }else {
            
        }

        
    }






}