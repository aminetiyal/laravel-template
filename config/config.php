<?php

return [
    'brand' => [
        //'name' => config('app.name','AdminLTE'),
        'logo' => 'https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png'
    ],

    'sidebar' => [
        'small-text' => true,
        'child-indent' => true,
    ],

    'footer' => [
        'copyright' => 'AdminLTE',
        'version' => '1.0.0'
    ],

    'routes' => [
        'dashboard' => 'home',
        'logout' => 'logout',
        'login' => 'login',
        'register' => 'register',
        'password_confirm' => 'password.confirm',
        'password_email' => 'password.email',
        'password_update' => 'password.update',
        'password_request' => 'password.request',
        'password_reset' => 'password.reset',
        'verification_resend' => 'verification.resend',
        'profile' => [
            'enabled' => false, // register profile routes before enabling this feature
            'index' => 'profile.index',
            'update' => 'profile.update',
            'updatePassword' => 'profile.updatePassword'
        ],
    ],
    /**
     *  [
     *      'title' => @string,
     *      'link' => [ ** link key Cannot be empty but can be removed **
     *          'type' => @enum: route | url
     *          'value' => @string
     *      ],
     *      'icon' => @string,
     *      'submenus' => @array of menus
     *  ],
     */
    'menu-items' => [
        [
            'type' => 'header',
            'title' => 'HEADER'
        ],
        [
            'title' => 'Menu One',
            'icon' => 'fas fa-tachometer-alt',
            'submenus' => [
                [
                    'title' => 'SubMenu One',
                    'link' => [
                        'type' => 'url',
                        'value' => ''
                    ],
                    'icon' => 'far fa-circle'
                ],
                [
                    'title' => 'SubMenu Two',
                    'link' => [
                        'type' => 'url',
                        'value' => ''
                    ],
                    'icon' => 'far fa-circle',
                    'submenus' => [
                        [
                            'title' => 'SubMenu One',
                            'link' => [
                                'type' => 'url',
                                'value' => ''
                            ],
                            'icon' => 'far fa-circle'
                        ],
                        [
                            'title' => 'SubMenu Two',
                            'link' => [
                                'type' => 'url',
                                'value' => ''
                            ],
                            'icon' => 'far fa-circle'
                        ],
                    ]
                ],
            ]
        ],
        [
            'title' => 'Menu Two',
            'link' => [
                'type' => 'url', // route, url
                'value' => ''
            ],
            'icon' => 'fas fa-th',
        ],
    ],

    // Assets to be loaded
    'assets' => [
        // Styles
        'styles' => [
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css',
            'https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
        ],

        // Scripts
        'scripts' => [
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js',
            'https://adminlte.io/themes/v3/plugins/inputmask/min/jquery.inputmask.bundle.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js',
            'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
            'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
        ]
    ]
];
