<?php

return [
    'id' => 4,
    'type' => 4,
    'style' => 1,
    'folder' => 'partners',
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
            'description' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],

        ],
        'nonTrans' => [
            'logo' => [
                'type' => 'image',
                'required' => '',
            ],
            'website_link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
        ],

    ],
];
