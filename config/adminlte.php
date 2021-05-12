<?php

return [


    'title' => 'Fist Mile ERP System',
    'title_prefix' => '',
    'title_postfix' => '',


    'use_ico_only' => false,
    'use_full_favicon' => false,


    'logo' => '<b>FIRST MILE System </b>',
    'logo_img' => 'https://sv1.picz.in.th/images/2021/02/11/o138qN.png',
    // 'logo_img_class' => '',
    // 'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    // 'logo_img_alt' => 'FIRST MILE',


    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => false,
    'usermenu_profile_url' => true,


    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,


    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',


    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light ' ,
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',


    'sidebar_mini' => false,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-ligh',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => true,

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    'menu' => [
        [
            'text' => 'search',
            'search' => true,
            'topnav' => true,
        ],

        ['header' => 'MENU'],
        [
            'text' => 'Desh Board ',
            'url'  => '/home',
            'icon' => 'fas fa-fw fa-home',
            'can'  => ['payments-create', 'payments-read']
        ],
        [
            'text' => 'Project Building',
            'icon' => 'fas fa-fw fas fa-building',
            'can'  => ['building-create|building-read|building-update'],
            'submenu' => [
                [
                    'text' => 'Building Management',
                    'url'  => '/building',
                    'can'  => ['building-update']
                ],
                [
                    'text' => 'Building List Table ',
                    'url'  => '/building/list',
                    'can'  => ['building-read']
                ],
            ]
        ],
        [
            'text' => 'FM Manegement',
            'icon' => 'fas fa-fw far fa-address-book',
            'can'  => ['building-create|building-read|building-update'],
            'submenu' => [
                [
                    'text' => 'Planing Management',
                    'url'  => '/planning',
                    'can'  => ['building-create']
                ],
                [
                    'text' => 'Planing List Table',
                    'url'  => '/planning/list',
                    'can'  => ['building-create']
                ],
            ],

        ],
        // [
        //     'text' => 'Fm List',
        //     'icon' => 'fas fa-fw far fa-kaaba',
        //     'can'  => ['building-create|building-read|building-update'],
        //     'submenu' => [
        //         [
        //             'text' => 'Fm Management',
        //             'url'  => '/',
        //             'can'  => ['building-create']
        //         ],
        //         [
        //             'text' => 'Planing List Table',
        //             'url'  => '/',
        //             'can'  => ['building-create']
        //         ],
        //     ],

        // ],
        [
            'text' => 'Status Opertor',
            'url'  => '/progress',
            'icon' => 'fas fa-fw fa-poll-h',
            'can'  => ['building-create|building-read|building-update']
        ],
        [
            'text' => 'Resplice Opertor',
            'url'  => '/resplice',
            'icon' => 'fas fa-fw fa-calendar',
            'can'  => ['building-create|building-read|building-update']
        ],
        [
            'text' => 'Constarution',
            'url'  => '/constarution',
            'icon' => 'fas fa-fw fa-poll',
            'can'  => ['constarution-create', 'constarution-read'],
        ],
        [
            'text' => 'Building Payment',
            'url'  => '/payment',
            'icon' => 'fas fa-fw fa-calendar-check',
            'can'  => ['payments-create', 'payments-read']
        ],
        [
            'text' => 'Calendar',
            'url'  => '/calendar',
            'icon' => 'fas fa-fw fa-calendar-alt',
            'roles'  => ['superadministrator','administrator'],
        ],
        [
            'text' => 'Technician Opertor',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-poll-h',
            'can'  => ['technician-operator-create', 'technician-operator-read']
        ],

        ['header' => 'USER'],
        [
            'text' => 'User Information',
            'url'  => 'form/editprofile',
            'icon' => 'fas fa-fw fa-user',
            'can'  => ['profile-update', 'profile-read', 'password-update'],
        ],
        [
            'text' => 'User Role & Permission',
            'url'  => '/permission',
            'icon' => 'fas fa-eye',
            'roles'  => ['superadministrator','administrator'],
        ],
        [
            'text' => 'User Management',
            'url'  => '/usermanament',
            'icon' => 'fas fa-users',
            'roles'  => ['superadministrator','administrator'],
        ],
        [
            'text' => 'Logout',
            'url'  => 'logout',
            'icon' => 'fas fa-sign-out-alt',
        ],
    ],


    'filters' => [
        App\Filter\GateFilter::class,
        //JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],



    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                //js
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//code.jquery.com/jquery-3.5.1.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '/js/vfs_fonts.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://code.jquery.com/jquery-3.5.1.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//code.highcharts.com/highcharts.js',
                ],
                // [
                //     'type' => 'js',
                //     'asset' => false,
                //     'location' => '../plugins/jquery/jquery.min.js',
                // ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://www.jqueryscript.net/demo/Excel-like-Bootstrap-Table-Sorting-Filtering-Plugin/excel-bootstrap-table-filter-bundle.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://www.jqueryscript.net/demo/Excel-like-Bootstrap-Table-Sorting-Filtering-Plugin/excel-bootstrap-table-filter-bundle.js',
                ],
                // css
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//fonts.googleapis.com/icon?family=Material+Icons',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//www.jqueryscript.net/demo/Excel-like-Bootstrap-Table-Sorting-Filtering-Plugin/excel-bootstrap-table-filter-style.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css',
                ],
            ],
        ],
        'ContextMenu' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Fullcalendar' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/locale-all.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/{{color}}/pace-theme-{{theme}}.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'Toast' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css',
                ],
            ],
        ]
    ],


    'livewire' => true,
];
