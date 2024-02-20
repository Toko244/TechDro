<?php

return [
    'id' => 11,
    'type' => 11,
    'style' => 1,
    'folder' => 'faq',
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

            // 'active' => [
            //     'type' => 'checkbox',
            // ],
        ],
        'nonTrans' => [
            // 'Published' => [
            //     'type' => 'checkbox',
            //     'required' => '',
            // ],
            // 'date' => [
            //     'type' => 'date',
            //     'required' => 'required',
            //     'validation' => 'required|max:20',
            // ],
        ],

    ],
];
