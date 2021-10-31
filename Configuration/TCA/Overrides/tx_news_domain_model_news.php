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

$configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

$fields = [
    'tx_wdbnewssnapin_ttcontent' => [
        'exclude' => 1,
        'label'   => $ll . 'tx_news_domain_model_news.tx_wdbnewssnapin_ttcontent',
        /*
        # *******************************************************
        # * Tutorial in documentation of extension `irre_tutorial`
        # * 3.1.Reusing “select” type for 1:n relations
        # * -----------------------------------------------------
        # * ADVANTAGE   : Child records (tt_content) can be
        # *               created even if parent (news) is new
        # * DISADVANTAGE: relation can't have properties
        # * INFO:
        # * - requires field tx_wdbnewssnapin_ttcontent to be
        # *   NOT of type int BUT varchar, binary, blob or text
        # * - Relations are saved as comma-separated list
        # *******************************************************
        'config'  => [
            'type'             => 'inline',
            'foreign_table'    => 'tt_content',
            'maxitems'         => 9999,
        ],

        # *******************************************************
        # * Tutorial in documentation of extension `irre_tutorial`
        # * 3.2.Normalized data structure for 1:n relations
        # * -----------------------------------------------------
        # * ADVANTAGE   : Child records (tt_content) can be
        # *               created even if parent (news) is new
        # * DISADVANTAGE: relation can't have properties
        # * INFO:
        # * - Amount of connections is saved in this field
        # *   (tx_news_domain_model_news.tx_wdbnewssnapin_ttcontent)
        # *   which should be of type int
        # * - Relations are saved in child-record(s) in tt_content
        # *   in the fields 
        # *     `tx_wdbnewssnapin_news` and
        # *     `tx_wdbnewssnapin_table`
        # *******************************************************
        'config'  => [
            'type'                => 'inline',
            'foreign_table'       => 'tt_content',
            'foreign_field'       => 'tx_wdbnewssnapin_news',
            'foreign_table_field' => 'tx_wdbnewssnapin_table',
            'maxitems'            => 9999,
        ],
        */

        # *******************************************************
        # * Tutorial in documentation of extension `irre_tutorial`
        # * 3.3.Intermediate tables for m:n relations
        # * 3.3.1.Bidirectional asymmetric m:n relations
        # * -----------------------------------------------------
        # * ADVANTAGE:
        # *   - Child records (tt_content) can be created even
        # *     if parent (news) is new
        # *   - Relation can have properties
        # * INFO:
        # * - Amount of connections is saved in this field
        # *   (tx_news_domain_model_news.tx_wdbnewssnapin_ttcontent)
        # *   which should be of type int
        # * - Relations are saved in child-record(s) in tt_content
        # *   in the fields 
        # *     `tx_wdbnewssnapin_news` and
        # *     `tx_wdbnewssnapin_table`
        # *******************************************************
        'config'  => [
            'type'                => 'inline',
            'foreign_table'       => 'tx_wdbnewssnapin_news_ttcontent_mm',
            'foreign_field'       => 'uid_news',
            'foreign_sortby'      => 'sorting_ttcontent', // sorting_news
            'foreign_label'       => 'uid_ttcontent',
            'foreign_selector'    => 'uid_ttcontent',
            'foreign_unique'      => 'uid_ttcontent',
            'itemsProcFunc'       => 'WDB\WdbNewsSnapin\TCA\ItemsProcFunc\NewsTtcontentRelation->getNewTtcontentId',
            'maxitems'            => 9999,
            'appearance'       => [
                'collapseAll'     => true,
                'expandSingle'    => true,
                'newRecordLinkAddTitle' => false,
                'levelLinksPosition' => 'top',
                'useCombination'  => true,
                'useSortable'     => true,
                'showNewRecordLink' => true,
                'showPossibleRecordsSelector' => true,
                'showSynchronizationLink' => true,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => true,
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
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ],
        
        
        /*
        'config'  => [
            'type'             => 'inline',
              'foreign_table'    => 'tx_wdbnewssnapin_news_ttcontent_mm',
              #'foreign_table_where' => ' AND {#tt_content}.{#sys_language_uid} IN (0,-1)',
            'foreign_field'    => 'uid_news', // 'uid_news',
            # 'foreign_table_field' => '',
            'foreign_sortby'   => 'sorting_ttcontent',
            'foreign_label'    => 'uid_ttcontent',
            'foreign_selector' => 'uid_ttcontent',
            'maxitems'         => 9999,
            #'minitems'         => 0,
            'appearance'       => [
                
                #    'newRecordLinkAddTitle' => 1,
                #    'useCombination' => true,
                #    'collapseAll' => false,
                #    'levelLinksPosition' => 'top',
                #    'showSynchronizationLink' => 1,
                #    'showPossibleLocalizationRecords' => 1,
                #    'showAllLocalizationLink' => 1,
                
                'collapseAll'     => true,
                'expandSingle'    => true,
                'useCombination'  => true,
                'useSortable'     => true,
                  'showSynchronizationLink' => true,
                  'showAllLocalizationLink' => true,
                  'showPossibleLocalizationRecords' => true,
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
        */
    ],
    /*
    
        'content_elements' => [
            'exclude' => true,
            'label' => $ll . 'tx_news_domain_model_news.content_elements',
            'config' => [
                'type' => 'inline',
                'allowed' => 'tt_content',
                'foreign_table' => 'tt_content',
                'foreign_sortby' => 'sorting',
                'foreign_field' => 'tx_news_related_news',
                'minitems' => 0,
                'maxitems' => 99,
                'appearance' => [
                    'useXclassedVersion' => $configuration->getContentElementPreview(),
                    'collapseAll' => true,
                    'expandSingle' => true,
                    'levelLinksPosition' => 'bottom',
                    'useSortable' => true,
                    'showPossibleLocalizationRecords' => true,
                    'showRemovedLocalizationRecords' => true,
                    'showAllLocalizationLink' => true,
                    'showSynchronizationLink' => true,
                    'enabledControls' => [
                        'info' => false,
                    ]
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
    */
    'tx_wdbnewssnapin_layout'   => [
        'label'     => $ll . 'tx_news_domain_model_news.tx_wdbnewssnapin_layout',
        'onChange'  => 'reload',
        'config'    => [
            'type'                => 'select',
            'renderType'          => 'selectSingle',
            #'eval'                => 'required',
            'foreign_table'       => 'tx_wdbnewssnapin_domain_model_layout',
            'foreign_table_where' => ' AND {#tx_wdbnewssnapin_domain_model_layout}.{#sys_language_uid} IN (0,-1)',
            'itemsProcFunc'       => 'WDB\WdbNewsSnapin\TCA\ItemsProcFunc\NewsLayoutRelation->getLayoutItems',
            'items'               => [
                [0 => ''],
            ],
            'default' => 0,
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
        ],
    ],
];

// layout restriction based on settings in extension manager
$layoutRestrictionSetting = $configuration->getLayoutRestriction();
if ($layoutRestrictionSetting) {
    $layoutRestriction = '';
    switch ($layoutRestrictionSetting) {
        case 'root_level':
            $layoutRestriction = ' AND tx_wdbnewssnapin_domain_model_layout.pid=0 ';
            break;
        case 'current_pid':
            $layoutRestriction = ' AND tx_wdbnewssnapin_domain_model_layout.pid=###CURRENT_PID### ';
            break;
        case 'siteroot':
            $layoutRestriction = ' AND tx_wdbnewssnapin_domain_model_layout.pid IN (###SITEROOT###) ';
            break;
        case 'page_tsconfig':
            $layoutRestriction = ' AND tx_wdbnewssnapin_domain_model_layout.pid IN (###PAGE_TSCONFIG_IDLIST###) ';
            break;
        default:
            $layoutRestriction = '';
    }

    if (!empty($layoutRestriction)) {
        // prepend layout restriction at the beginning of foreign_table_where
        $fields['tx_wdbnewssnapin_layout']['config']['foreign_table_where'] =
            $layoutRestriction . $fields['tx_wdbnewssnapin_layout']['config']['foreign_table_where'];
    }
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'tx_wdbnewssnapin_layout,tx_wdbnewssnapin_ttcontent');
