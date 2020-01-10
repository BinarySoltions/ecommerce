<?php

return [
    'default' => 'mmshopping',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],

        'mmshopping' => [
            'views_path' => 'resources/themes/mmshopping/views',
            'assets_path' => 'public/themes/mmshopping/assets',
            'name' => 'mmshopping',
            'parent' => 'default'
        ],

        // 'bliss' => [
        //     'views_path' => 'resources/themes/bliss/views',
        //     'assets_path' => 'public/themes/bliss/assets',
        //     'name' => 'Bliss',
        //     'parent' => 'default'
        // ]
    ]
];