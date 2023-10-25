<?php

class LibRouteDefult
{
    protected static $routeAdmin;
    protected static $routeCommon;
    protected static $routeCrm;


    public static function routAdmin()
    {
        self::$routeAdmin =
            [ 'home' => 'admin/mainAdmin',
                'login' => 'admin/login',
                'menu' => 'admin/menu'
            ];
        return self::$routeAdmin;
    }


    public static function routeCommon()
    {
        self::$routeCommon = [

            'path' =>
                     [ '' => 'common/common',
                       'home' => 'crm/crmhome',
                     ],

            'controller' =>
                     [ '' => 'index',
                       'home' => '',
                     ],

            'action' =>
                       [ '' => 'index',
                        'home' => 'index',
                       ],

            'model' =>
                [

                ],
            ];
        return self::$routeCommon;
    }



    public static function routeCrm()
    {
        self::$routeCrm = [

            'path' =>
                        [ '' => 'crm/crmhome',
                          'home' => 'crm/crmhome',
                          'loginUser' => 'loginUserrr',
                          'registUser' => 'registration user'
                        ],

              'controller' =>
                             [ 'home' => 'crmHome',
                               'loginUser' => 'crm/users',
                               'registrationUser' => 'crm/users'
                             ],

              'action' =>
                         [ '' => 'index',
                           'home' => 'index',
                           'loginUser' => 'loginUserCrm',
                           'registUser' => ''
                         ],

              'model' =>
                         [

                         ],

            ];
        return self::$routeCrm;
    }





}