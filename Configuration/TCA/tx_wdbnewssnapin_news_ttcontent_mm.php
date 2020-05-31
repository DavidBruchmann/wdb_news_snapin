<?php

defined('TYPO3_MODE') || die('Access denied.');

return [
	'ctrl' => [
		'title'     => 'Relation table',
		'label'     => 'Relation table',
		'hideTable' => true,
		# 'sortby'    => 'sorting',
	],
	'columns' => [
		'uid_news' => [
			'label'  => 'News',
			'config' => [
				'type'                => 'select',
				'foreign_table'       => 'tx_news_domain_model_news',
				'foreign_table_where' => ' AND tx_news_domain_model_news.sys_language_uid IN (0,-1)',
				'size'                => 1,
				'minitems'            => 0,
				'maxitems'            => 1,
			],
		],
		'uid_ttcontent'   => [
			'label'  => 'Ttcontent',
			'config' => [
				'type'                => 'select',
				'foreign_table'       => 'tt_content',
				'foreign_table_where' => ' AND tt_content.sys_language_uid IN (0,-1)',
				'size'                => 1,
				'minitems'            => 0,
				'maxitems'            => 1,
			],
		],
		'ttcontent_area'   => [
			'label'  => 'ttcontent_area',
			'config' => [
				'type'                => 'input',
			],
		],
		'ttcontent_type'   => [
			'label'  => 'ttcontent_type',
			'config' => [
				'type'                => 'input',
			],
		],
	],
	'types' => [
		'0' => ['showitem' => 'uid_news,uid_ttcontent,ttcontent_area,ttcontent_type']
	],
	'palettes' => array()
];
