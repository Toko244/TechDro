<?php

return [
    'id' => 4,
    'type' => 4,
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
            'button_title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'redirect_link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],

        ],
        'nonTrans' => [
            'video_link' => [
                'type' => 'text',
                'required' => '',
            ]
        ],
    ],
];
