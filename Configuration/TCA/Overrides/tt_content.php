<?php
defined('TYPO3_MODE') or die();

$fields = array(
		'tx_wdbnewssnapin_news' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wdbnewssnapin_snapin',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_wdbnewssnapin_news_ttcontent_mm',
				'foreign_field' => 'uid_ttcontent',
                'foreign_sortby' => 'sorting_news',
				'foreign_label' => 'uid_news',
				'foreign_selector' => 'uid_news',
				'foreign_unique' => 'uid_news',
				'minitems' => 0,
				'maxitems' => 9999,
				'appearance' => array(
					'collapseAll'     => TRUE,
					'expandSingle'    => TRUE,
					'useCombination'  => 1,
					'useSortable'     => TRUE,
					'enabledControls' => array(
						'info' => true,
						'new' => true,
						'dragdrop' => true,
						'sort' => true,
						'hide' => true,
						'delete' => true,
						'localize' => true
					),
					# 'newRecordLinkAddTitle' => 1,
					# 'newRecordLinkPosition' => 'both',
					# 'levelLinksPosition' => 'top',
					# 'showSynchronizationLink' => 1,
					# 'showPossibleLocalizationRecords' => 1,
					# 'showAllLocalizationLink' => 1
				),
			),
		),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_wdbnewssnapin_news');
