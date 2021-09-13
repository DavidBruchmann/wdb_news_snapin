<?php

declare(strict_types = 1);
# \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(['$this'=>$this]);die();
# EXT:wdb_news_snapin/Configuration/Extbase/Persistence/Classes.php
return [
    /*
    \TYPO3\CMS\Extbase\Domain\Model\FileMount::class => [
        'tableName' => 'sys_filemounts',
        'properties' => [
            'title' => [
                'fieldName' => 'title'
            ],
            'path' => [
                'fieldName' => 'path'
            ],
            'isAbsolutePath' => [
                'fieldName' => 'base'
            ],
        ],
    ],
    */
    //GeorgRinger\News\Domain\Model\News::txWdbnewssnapinTtcontent
    // tx_wdbnewssnapin_domain_model_newsttcontentrelation
	WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation::class => [
		'tableName' => 'tx_wdbnewssnapin_news_ttcontent_mm',
        'properties' => [
            'txWdbnewssnapinNews' => [
                'fieldName' => 'uid_news'
            ],
            'txWdbnewssnapinTtcontent' => [
                'fieldName' => 'uid_ttcontent'
            ],
            'layoutArea' => [
                'fieldName' => 'layout_area'
            ],
        ],
	],

	WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation::class => [
		'tableName' => 'tx_wdbnewssnapin_layout_layoutarea_mm',
        'properties' => [
            'layout' => [
                'fieldName' => 'uid_layout'
            ],
            'layoutArea' => [
                'fieldName' => 'uid_layoutarea'
            ],
        ],
	],

	WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelationLayoutareaRelation::class => [
		'tableName' => 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm',
        'properties' => [
            'relation' => [
                'fieldName' => 'uid_relation'
            ],
            'layout' => [
                'fieldName' => 'uid_layout'
            ],
            'layoutArea' => [
                'fieldName' => 'uid_layoutarea'
            ],
        ],
	],

	WDB\WdbNewsSnapin\Domain\Model\TtContent::class => [
		'tableName' => 'tt_content',
        'properties' => [
            'txWdbnewssnapinNews' => [
                'fieldName' => 'tx_wdbnewssnapin_news'
            ],
        ],
	],

	WDB\WdbNewsSnapin\Domain\Model\News::class => [
		'tableName' => 'tx_news_domain_model_news',
        'properties' => [
            'layout' => [
                'fieldName' => 'uid_layout'
            ],
            'layoutArea' => [
                'fieldName' => 'uid_layoutarea'
            ],
        ],
	],
    
    
];
