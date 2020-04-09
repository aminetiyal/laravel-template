<?php

return [
    'brand' => [
        'name' => config('app.name','AdminLTE'),
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
            'title' => 'Dashboard',
            'icon' => 'fas fa-tachometer-alt',
            'submenus' => [
                [
                    'title' => 'V1',
                    'link' => [
                        'type' => 'route',
                        'value' => 'menu1.menu1'
                    ],
                    'icon' => 'far fa-circle'
                ],
                [
                    'title' => 'V2',
                    'link' => [
                        'type' => 'route',
                        'value' => 'menu1.menu2'
                    ],
                    'icon' => 'far fa-circle',
                    'submenus' => [
                        [
                            'title' => 'Legacy',
                            'link' => [
                                'type' => 'route',
                                'value' => 'menu3.menu1'
                            ],
                            'icon' => 'far fa-circle'
                        ],
                        [
                            'title' => 'Test',
                            'link' => [
                                'type' => 'route',
                                'value' => 'menu3.menu2'
                            ],
                            'icon' => 'far fa-circle'
                        ],
                    ]
                ],
            ]
        ],
        [
            'title' => 'Widget',
            'link' => [
                'type' => 'route', // route, url
                'value' => 'menu2'
            ],
            'icon' => 'fas fa-th',
        ],
    ],

    // Assets to be loaded
    'assets' => [
        // Fonts
        'fonts' => [
            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        ],

        // Styles
        'styles' => [
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',
            'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
            'https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css',
            'https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
            'https://adminlte.io/themes/v3/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
            'https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
            'https://adminlte.io/themes/v3/plugins/select2/css/select2.min.css',
            'https://adminlte.io/themes/v3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
            'https://adminlte.io/themes/v3/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css',
            'https://adminlte.io/themes/v3/dist/css/adminlte.min.css',
        ],

        // Scripts
        'scripts' => [
            'https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js',
            'https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js',
            'https://adminlte.io/themes/v3/plugins/select2/js/select2.full.min.js',
            'https://adminlte.io/themes/v3/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js',
            'https://adminlte.io/themes/v3/plugins/moment/moment.min.js',
            'https://adminlte.io/themes/v3/plugins/inputmask/min/jquery.inputmask.bundle.min.js',
            'https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js',
            'https://adminlte.io/themes/v3/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
            'https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
            'https://adminlte.io/themes/v3/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
            'https://adminlte.io/themes/v3/dist/js/adminlte.min.js',
            'https://adminlte.io/themes/v3/dist/js/demo.js',
        ]
    ]
];
