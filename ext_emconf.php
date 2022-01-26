<?php

$EM_CONF['wdb_news_snapin'] = [
    'title' => 'Snap-in for news',
    'description' => 'Snap-in for news',
    'category' => 'plugin',
    'author' => 'David Bruchmann',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.17-11.5.99',
            'news' => '7.0.0-9.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];