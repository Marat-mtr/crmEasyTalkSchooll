<?php

class Libroutecrm
{
    public static $routeCrm;


    public static function routeCrm()
    {
        self::$routeCrm = [

            'path' =>
                        [
                          '' => 'crm/crmhome',
                          'home' => 'crm/crmhome',
                          'loginUser' => 'loginUserrr',
                          'registUser' => 'registration user'
                        ],

            'controller' =>
                             [
                               '' => 'CrmHome',
                               'home' => 'CrmHome',
                               'loginUser' => 'crm/users',
                               'registrationUser' => 'crm/users'
                             ],

            'action' =>
                         [
                           '' => 'index',
                           'home' => 'index',
                           'loginUser' => 'loginUserCrm',
                           'registUser' => ''
                         ],

            'model' =>
                         [

                         ],

            'view' =>
                     [
                        'home' => 'index.html'
                     ]

            ];
        return self::$routeCrm;
    }





}