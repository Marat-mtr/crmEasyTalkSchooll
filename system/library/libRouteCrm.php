<?php

class LibRouteCrm {
    public static $routeCrm;


    public static function routeCrm() {
        self::$routeCrm = [

            'path' =>
                     [
                         ' ' => 'crm/crmhome',
                         'home' => 'crm/crmhome',
                         'notFound' => 'crm/crmhome',
                         'loginUser' => 'crm/account/users',
                         'registration_user' => 'crm/account/registrUser'
                     ],

            'controller' =>
                           [
                               '' => 'CrmHome',
                               'home' => 'CrmHome',
                               'notFound' => 'CrmHome',
                               'loginUser' => 'users',
                               'registration_user' => 'RegistrUser'
                             ],

            'action' =>
                       [
                           '' => 'index',
                           'home' => 'index',
                           'notFound' => 'notFound',
                           'loginUser' => 'loginUser',
                           'registration_user' => 'index'
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