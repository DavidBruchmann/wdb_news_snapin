<?php

defined('TYPO3_MODE') or die();

/*******************************************************************************************
 * This file is part of the "wdb_news_snapin" Extension for TYPO3 CMS.
 *
 * Copyright:
 *   (c) 2020 David Bruchmann, Webdevelopment Barlian Indonesia <david.bruchmann@gmail.com>
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *******************************************************************************************/

$ll = 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:';

// $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

$fields = [
    'tx_wdbnewssnapin_layout' => [
        'exclude' => 1,
        'label'   => 'LAYOUT', // $ll . 'tt_content.newselements',

        'config'  => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_wdbnewssnapin_domain_model_layout',
            'itemsProcFunc'       => 'WDB\WdbNewsSnapin\TCA\ItemsProcFunc\NewsLayoutRelation->getLayoutItems',
            
            #'fileFolder' => 'EXT:wdb_news_snapin/Resources/Public/Layout-Icons',
            #'fileFolder_extList' => 'svg',
            #'fileFolder_recursions' => 5,
            
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
        ],
        /*
        */
    ],
    'tx_wdbnewssnapin_news' => [
        # *******************************************************
        # * 3.3.Intermediate tables for m:n relations
        # * 3.3.1.Bidirectional asymmetric m:n relations
        # * ADVANTAGE   : Child records (tt_content) can be
        # *               created even if parent (news) is new
        # * DISADVANTAGE: relation can't have properties
        # * INFO:
        # * - Amount of connections is saved in this field
        # *   (tx_news_domain_model_news.tx_wdbnewssnapin_ttcontent)
        # *   which should be int
        # * - Relations are saved in child-record(s) in tt_content
        # *   in the fields 
        # *     `tx_wdbnewssnapin_news` and
        # *     `tx_wdbnewssnapin_table`
        # *******************************************************
        /*
        'label'   => 'news',
        'config'  => [
            'type' => 'inline',
            'foreign_table'       => 'tx_wdbnewssnapin_news_ttcontent_mm',
            'foreign_field'       => 'uid_ttcontent',
            'foreign_sortby'      => 'sorting_news', // sorting_ttcontent
            'foreign_label'       => 'uid_news',
            'maxitems'            => 9999,
        ],
        */

        'config' => [
            'type' => 'passthrough'
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['news_pi1'] =  'tx_wdbnewssnapin_layout, pi_flexform'; // tx_wdbnewssnapin_news, 
/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
   'tt_content',
   'access',
   'tx_examples_noprint',
   'before:editlock'
);
*/


/*
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
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_wdbnewssnapin_news');
*/