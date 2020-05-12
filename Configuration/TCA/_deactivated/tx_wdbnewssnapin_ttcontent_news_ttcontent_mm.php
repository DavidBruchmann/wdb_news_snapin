<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Used in FlexForms in standard-pages, so even you don't allow the common tables on standard-pages
// the FlexForms are used to configure the behaviour of the extension, therefore the table-record is not related to data but to output
// so all data-related records are stored in system-folder(s) while output-related records are saved on standard-pages.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wdbnewssnapin_ttcontent_news_ttcontent_mm');

return [
	'ctrl' => array(
		'title'     => 'Relation table',
		'hideTable' => TRUE,
		'sortby'    => 'sorting',
	),
	'columns' => array(
		'uid_ttcontent_local' => Array(
			'label'  => 'Tt_content local',
			'config' => Array(
				'type'          => 'select',
				'foreign_table' => 'tt_content',
				# 'foreign_table_where' => ' AND tt_content.sys_language_uid IN (0,-1)',
				'size'          => 1,
				'minitems'      => 0,
				'maxitems'      => 1,
			),
		),
		'uid_news' => Array(
			'label'  => 'News',
			'config' => Array(
				'type'          => 'select',
				'foreign_table' => 'tx_news_domain_model_news',
				'foreign_table_where' => ' AND tx_news_domain_model_news.sys_language_uid IN (0,-1)',
				'size'          => 1,
				'minitems'      => 0,
				'maxitems'      => 1,
			),
		),
		'uid_ttcontent_foreign'   => Array(
			'label'  => 'Ttcontent foreign',
			'config' => Array(
				'type'                => 'select',
				'foreign_table'       => 'tt_content',
				'foreign_table_where' => ' AND tt_content.sys_language_uid IN (0,-1)',
				'size'                => 1,
				'minitems'            => 0,
				'maxitems'            => 1,
			),
		),
	),
	'types' => array(
		'0' => array('showitem' => 'uid_ttcontent,uid_news')
	),
	'palettes' => array()
];
