<?php

declare(strict_types = 1);

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
	}

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
    }

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
    }

	WDB\WdbNewsSnapin\Domain\Model\Ttcontent::class => [
		'tableName' => 'tt_content',
    }

	WDB\WdbNewsSnapin\Domain\Model\News::class => [
		'tableName' => 'tx_news_domain_model_news',
    }
    
    
];
