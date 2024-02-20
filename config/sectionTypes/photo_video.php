<?php

return [
    'id' => 7,
    'type' => 7,
    'style' => 1,
    'folder' => 'contact',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'slug' => [
                'type' => 'slug',
                'error_msg' => 'slug_is_required',
                'required' => 'required',
                'data-icon' => '-',
            ],
            // 'active' => [
            //     'type' => 'checkbox',
            //     'required' => ''
            // ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
                'required' => ''
            ],
        ],
    ],
];
