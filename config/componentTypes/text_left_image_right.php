<?php

return [
    'id' => 2,
    'type' => 2,
    'style' => 1,
    'section' => false,
    'manual' => true,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/infographics',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],

            'description' => [
                'type' => 'textarea',
                'required' => 'required',
                'data-icon' => '-',
            ],
        ],
        'nonTrans' => [
            'image' => [
                'type' => 'image',
                'required' => ''
            ]
        ],
    ],
];
