<?php

return [
    'id' => 3,
    'type' => 3,
    'style' => 1,
    'folder' => 'blog',
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
            'author' => [
                'type' => 'user',
                'required' => ''
            ],
            // 'active' => [
            //     'type' => 'checkbox',
            //     'required' => ''
            // ],
        ],
        'nonTrans' => [
            'image' => [
                'type' => 'image',
                'required' => ''
            ],

            'date' => [
                'type' => 'date',
                'required' => ''
            ]
        ],

    ],
];
