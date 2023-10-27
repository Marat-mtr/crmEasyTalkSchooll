<?php

class LibRouteDefult
{
    protected static $routeCommon;



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







}