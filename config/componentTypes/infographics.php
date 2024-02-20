<?php

return [
    'id' => 1,
    'type' => 1,
    'style' => 2,
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
            'number' => [
                'type' => 'number',
                'required' => 'required',
            ],

            'plus' => [
                'type' => 'checkbox',
                'required' => ''
            ]
        ],
    ],
];
