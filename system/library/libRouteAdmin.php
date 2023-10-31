<?php

class LibRouteAdmin {
    public static $routeAdmin;

    public static function routeAdmin () {

        self::$routeAdmin = [

            'path' =>
                     [
                         '' => 'admin/adminHome',
                         'home' => 'admin/adminHome',
                         'loginUser' => '',
                         'registUser' => ''
                     ],

            'controller' =>
                           [
                               '' => 'adminHome',
                               'home' => 'adminHome',
                               'loginUser' => '',
                               'registrationUser' => ''
                           ],

            'action' =>
                       [
                           '' => 'index',
                           'home' => 'index',
                           'loginUser' => '',
                           'registUser' => '',
                           'notFound' => 'notFound'
                       ],


        ];
        return self::$routeAdmin;
    }


}