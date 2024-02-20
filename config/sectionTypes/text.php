<?php

return [
    'id' => 2,
    'type' => 2,
    'style' => 1,
    'folder' => 'textpage',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'slug' => [
                'type' => 'text',
                'error_msg' => 'slug_is_required',
                'required' => 'required',
                'data-icon' => '-',
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

        ],

    ],
];
