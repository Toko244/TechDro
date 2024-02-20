<?php

return [
    'id' => 9,
    'type' => 9,
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
            'file' => [
                'type' => 'file',
                'required' => 'required',
                'data-icon' => '-',
            ],
        ],
        'nonTrans' => [

        ],
    ],
];
