<?php
defined('TYPO3_MODE') or die();

$fields = array(
        #'tx_wdbnewssnapin_snapincontent' => array(
        #        'exclude' => 1,
        #        'label' => 'My proxy',
        #        'config' => array(
        #                'type' => 'input',
        #                'size' => 15
        #        ),
        #),
		'tx_wdbnewssnapin_ttcontent' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tx_wdbnewssnapin_snapin',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_wdbnewssnapin_news_ttcontent_mm',
				'foreign_field' => 'uid_news',
                'foreign_sortby' => 'sorting_ttcontent',
				'foreign_label' => 'uid_ttcontent',
				'foreign_selector' => 'uid_ttcontent',
				'foreign_unique' => 'uid_ttcontent',
				# 'foreign_sortby' => 'sorting',
				'minitems' => 0,
				'maxitems' => 9999, // <<<<< can be adjusted (1-x) <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
#\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'tx_wdbnewssnapin_snapincontent');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'tx_wdbnewssnapin_ttcontent');
