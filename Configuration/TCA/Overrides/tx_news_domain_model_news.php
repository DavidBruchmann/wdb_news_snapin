<?php

defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:';

$configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

$fields = [
    'tx_wdbnewssnapin_ttcontent' => [
        'exclude' => 1,
        'label'   => $ll . 'tx_news_domain_model_news.contentelements',
        'config'  => [
            'type'             => 'inline',
            'foreign_table'    => 'tx_wdbnewssnapin_news_ttcontent_mm',
            'foreign_field'    => 'uid_news',
            'foreign_sortby'   => 'sorting_ttcontent',
            'foreign_label'    => 'uid_ttcontent',
            'foreign_selector' => 'uid_ttcontent',
            'foreign_unique'   => 'uid_ttcontent',
            'minitems'         => 0,
            'maxitems'         => 9999,
            'appearance'       => [
                'collapseAll'     => true,
                'expandSingle'    => true,
                'useCombination'  => 1,
                'useSortable'     => true,
                'enabledControls' => [
                    'info'           => true,
                    'new'            => true,
                    'dragdrop'       => true,
                    'sort'           => true,
                    'hide'           => true,
                    'delete'         => true,
                    'localize'       => true,
                ],
                # 'newRecordLinkAddTitle'           => 1,
                # 'newRecordLinkPosition'           => 'both',
                # 'levelLinksPosition'              => 'top',
                # 'showSynchronizationLink'         => 1,
                # 'showPossibleLocalizationRecords' => 1,
                # 'showAllLocalizationLink'         => 1,
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'tx_wdbnewssnapin_ttcontent');
