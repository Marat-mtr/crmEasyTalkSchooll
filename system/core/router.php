<?php
/**
 * Роутінг
 */
class Router extends LibRouteDefult
{
    protected $url;
    public function __construct()
    {
        $this->index();
        $require_file = str_replace('\\', '/', DIR_APPLICATION . strtolower($this->url) . '.php');
        require $require_file;
        new CrmHome();

        spl_autoload_register(function ($class)
        {

        });

    }


    public function index()
    {
        $url = $_SERVER['QUERY_STRING'];
        $url = explode('/', $url);

        if ($url[0] == 'common' || $url[0] == '')
        {
            self::routeCommon();
            $this->url = self::$routeCommon['path']['home'];
            return $this->url;
        }




        if ($url[0] == 'crm')
               {
                   self::routeCrm();

                   foreach(self::$routeCrm['path'] as $key => $value)
                   {
                      if($url[1] == $key)
                      {
                        echo '<br>' . $value;
                      }
                   }
                  
                   $this->url = self::$routeCrm['path']['home'];
                   return $this->url;

               } else { echo 'not found';}


//                   if ($url[0] == 'admin')
//                      {
//
//                      } else {
//                              self::routeCommon();
//                              $this->url = self::$routeCommon['home'];
//                              return $this->url;
//                              echo '<br> + Некоректне посилання! <br>';
//                             }

    }




}


