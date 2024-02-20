<?php

return [
    'id' => 1,
    'type' => 1,
    'name' => 'main_banner_slider',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
            ],
            'desc' => [
                'type' => 'textarea',
                'required' => 'required',
            ],
            'button_name' => [
                'type' => 'textnorequired',
            ],
            'redirect_link' => [
                'type' => 'textnorequired',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
            ],
            'date' => [
                'type' => 'date',
                'required' => 'required',
                'validation' => 'required|max:20',
            ],
        ],
    ],
];
