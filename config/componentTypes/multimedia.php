<?php

return [
    'id' => 8,
    'type' => 8,
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
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
                'required' => ''
            ]
        ],
    ],
];
