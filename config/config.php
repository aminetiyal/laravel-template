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
        // Styles
        'styles' => [
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css',
        ],

        // Scripts
        'scripts' => [
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js',
            'https://adminlte.io/themes/v3/plugins/inputmask/min/jquery.inputmask.bundle.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js',
        ]
    ]
];
