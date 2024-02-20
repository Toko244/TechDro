<?php

return [
    'id' => 1,
    'type' => 1,
    'style' => 1,
    'folder' => 'Home',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'small_title' => [
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
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'redirect_link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],

        ],
        'nonTrans' => [
            'image' => [
                'type' => 'image',
                'required' => ''
            ],

        ],

    ],
];
