<?php

return [
    'id' => 6,
    'type' => 6,
    'style' => 1,
    'folder' => 'projects',
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
            'registration_description' => [
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
            'registration' => [
                'type' => 'text',
                'required' => ''
            ],

            'form_id' => [
                'type' => 'form',
                'required' => ''
            ],
            'start_date' => [
                'type' => 'date',
                'required' => '',
            ],

            'end_date' => [
                'type' => 'date',
                'required' => '',
            ]
        ],

    ],
];
