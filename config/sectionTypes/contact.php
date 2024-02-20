<?php

return [
    'id' => 8,
    'type' => 8,
    'folder' => 'contact',
    'style' => 1,
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
            'desc' => [
                'type' => 'textarea',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'address' => [
                'type' => 'text',
                'required' => '',
                'data-icon' => '-',
            ],
            'active' => [
                'type' => 'checkbox',
                'required' => ''
            ],
        ],
        'nonTrans' => [
            'mobile' => [
                'type' => 'text',
                'required' => ''
            ],
            'email' => [
                'type' => 'text',
                'required' => ''
            ],
            'image' => [
                'type' => 'image',
                'required' => ''
            ],
        ],
    ],
];
