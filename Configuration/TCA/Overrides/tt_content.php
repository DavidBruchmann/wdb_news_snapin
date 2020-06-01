<?php

defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:';

// $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

$fields = [
    'tx_wdbnewssnapin_news' => [
        'exclude' => 1,
        'label'   => $ll . 'tt_content.newselements',
        'config'  => [
            'type'             => 'inline',
            'foreign_table'    => 'tx_wdbnewssnapin_news_ttcontent_mm',
            'foreign_field'    => 'uid_ttcontent',
            'foreign_sortby'   => 'sorting_news',
            'foreign_label'    => 'uid_news',
            'foreign_selector' => 'uid_news',
            'foreign_unique'   => 'uid_news',
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_wdbnewssnapin_news');
