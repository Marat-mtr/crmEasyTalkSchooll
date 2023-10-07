<?php

$routeAdmin = [
    'admin' => [
        'home' => 'admin/mainAdmin',
        'login' => 'admin/login'
    ]
];



$routeCommon = [
    'common' => [
        'home' => 'common/home',
        'userslog' => 'common/users/login',
        'usersreg' => 'common/users/userRegist',
        'aboutUs'  => 'common/aboutUs',
        'noFound'  => 'common/noFound'
    ],
];



$routeCrm = [
    'crm' => ['controller' => 'index'],

];





?>