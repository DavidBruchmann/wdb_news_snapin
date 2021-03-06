<?php

$EM_CONF['wdb_news_snapin'] = [
    'title' => 'Snap-in for news',
    'description' => 'Snap-in for news',
    'category' => 'plugin',
    'author' => 'David Bruchmann',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.17-10.4.99',
            'news' => '7.0.0-8.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];