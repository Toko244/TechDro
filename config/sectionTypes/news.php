<?php

return [
    'id' => 5,
    'type' => 5,
    'style' => 1,
    'folder' => 'news',
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
            'short_description' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],
            'full_text' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],
            // 'active' => [
            //     'type' => 'checkbox',
            //     'required' => ''
            // ],
        ],
        'nonTrans' => [
            'date' => [
                'type' => 'date',
                'required' => ''
            ]
        ],

    ],
];
