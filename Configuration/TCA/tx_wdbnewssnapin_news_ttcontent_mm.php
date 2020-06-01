<?php

defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:';

// $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

return [
	'ctrl' => [
		'title'     => $ll . 'tx_wdbnewssnapin_news_ttcontent_mm.ctrl.title', // Relation table
		'label'     => $ll . 'tx_wdbnewssnapin_news_ttcontent_mm.ctrl.label', // Relation table
		'hideTable' => true,
		# 'sortby'    => 'sorting',
	],
	'columns' => [
		'uid_news' => [
			'label'  => $ll . 'tx_wdbnewssnapin_news_ttcontent_mm.uid_news',
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
			'label'  => $ll . 'tx_wdbnewssnapin_news_ttcontent_mm.uid_ttcontent',
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
			'label'  => $ll . 'tx_wdbnewssnapin_news_ttcontent_mm.ttcontent_area',
			'config' => [
				'type'                => 'input',
			],
		],
		'ttcontent_type'   => [
			'label'  => $ll . 'tx_wdbnewssnapin_news_ttcontent_mm.ttcontent_type',
			'config' => [
				'type'                => 'input',
			],
		],
	],
	'types' => [
		'0' => ['showitem' => 'uid_news,uid_ttcontent,ttcontent_area,ttcontent_type'],
	],
	'palettes' => [],
];
