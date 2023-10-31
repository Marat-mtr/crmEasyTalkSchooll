<?php

class LibRouteCommon {
    public static $routeCommon;


    public static function routeCommon()
    {
        self::$routeCommon = [

            'path' =>
                     [
                         'home' => 'common/common',
                         'aboutUs' => 'common/aboutUs'
                     ],

            'controller' =>
                           [
                               'home' => 'common',
                               'aboutUs' => 'aboutUs'
                           ],

            'action' =>
                       [
                           'home' => 'index',
                           'notFound' => 'notFound',
                           'aboutUs' => 'index'
                       ],

            'model' =>
                      [

                      ],


        ];
        return self::$routeCommon;
    }


}