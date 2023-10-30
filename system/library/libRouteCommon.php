<?php

class LibRouteCommon {
    public static $routeCommon;


    public static function routeCommon()
    {
        self::$routeCommon = [

            'path' =>
                     [ '' => 'common/common',
                       'home' => 'common/common',
                       'notFound' => 'common/common'
                     ],

            'controller' =>
                           [
                               '' => 'common',
                               'home' => 'common',
                               'notFound' => 'common'
                           ],

            'action' =>
                       [
                           '' => 'index',
                           'home' => 'index',
                           'notFound' => 'notFound'
                       ],

            'model' =>
                      [

                      ],


        ];
        return self::$routeCommon;
    }


}