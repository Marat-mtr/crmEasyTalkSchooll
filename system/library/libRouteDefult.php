<?php



$routeAdmin = [
    'admin' => ['home' => 'admin/mainAdmin',
'login' => 'admin/login',
'menu' => 'admin/menu'
       ]
     ];


$routeCommon = [
      'common' => [
          'home' => 'common/home',
      'userslog' => 'common/users/login',
      'usersreg' => 'common/users/userRegist',
       'aboutUs' => 'common/aboutUs',
       'noFound' => 'common/noFound'
      ],
    ];


$routeCrm = [
    'crm' => [
        'address' => [
                    'accounts' => ''

        ],

        'controller' => [
                    'accounts' => 'crm/users',
                   'loginUser' => 'crm/users',
            'registrationUser' => 'crm/users'
        ],

        'action'  => [
                    'accounst' => 'userInfoCrm',
                   'loginUser' => 'loginUserCrm',
                   'registUser' => ''

        ]
    ],
];



?>