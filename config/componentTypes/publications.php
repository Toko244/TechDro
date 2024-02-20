<?php

return [
    'id' => 11,
    'type' => 11,
    'style' => 1,
    'section' => false,
    'manual' => true,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/publications',
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
