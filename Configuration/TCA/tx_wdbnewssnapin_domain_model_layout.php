<?php

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

defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:';

$configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

$tx_wdbnewssnapin_domain_model_layout = [
  'ctrl' => [
    'title'                    => $ll . 'tx_wdbnewssnapin_domain_model_layout.ctrl.title',
    'label'                    => 'title',
    'iconfile'                 => 'EXT:wdb_news_snapin/Resources/Public/Icons/tx_wdbnewssnapin_domain_model_layout.svg',
    'hideTable'                => false,
    'selicon_field'            => 'icon',
    'selicon_field_path'       => 'EXT:wdb_news_snapin/Resources/Public/Layout-Icons',
    'tstamp'                   => 'tstamp',
    'crdate'                   => 'crdate',
    'cruser_id'                => 'cruser_id',
    'delete'                   => 'deleted',
    'sortby'                   => 'sorting',
    'languageField'            => 'sys_language_uid',
    'transOrigPointerField'    => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'translationSource'        => 'l10n_source',
    'origUid'                  => 't3_origuid',
    'descriptionColumn'        => 'description',
    // 'editlock'                 => 'editlock',

    'rootLevel'                => -1,
    // 'is_static'                => true,
    'enablecolumns'            => [
        'disabled'                  => 'hidden',
        'endtime'                   => 'endtime',
        'fe_group'                  => 'fe_group',
        'starttime'                 => 'starttime',
    ],
  ],
  'columns' => [
    'sys_language_uid' => [
        'exclude' => true,
        'label'   => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
        'config'  => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => [
                [
                    'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                    -1,
                    'flags-multiple'
                ],
            ],
            'default' => 0,
        ],
    ],
    'l10n_parent' => [
        'displayCond' => 'FIELD:sys_language_uid:>:0',
        'label'       => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
        'config'  => [
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_news_domain_model_news',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
        ],
    ],
    'l10n_source' => [
        'config'  => [
            'type' => 'passthrough'
        ],
    ],
    'l10n_diffsource' => [
        'config'  => [
            'type' => 'passthrough',
            'default' => ''
        ],
    ],
    'hidden' => [
        'exclude' => true,
        'label'   => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
        'config'  => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => [
                [
                    0 => '',
                    1 => '',
                ],
            ],
        ],
    ],
    'cruser_id' => [
        'label'   => 'cruser_id',
        'config'  => [
            'type' => 'passthrough'
        ],
    ],
    'pid' => [
        'label'   => 'pid',
        'config'  => [
            'type' => 'passthrough'
        ],
    ],
    'crdate' => [
        'label'   => 'crdate',
        'config'  => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
        ],
    ],
    'tstamp' => [
        'label'   => 'tstamp',
        'config'  => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
        ],
    ],
    'sorting' => [
        'label'   => 'sorting',
        'config'  => [
            'type' => 'passthrough',
        ],
    ],
    'starttime' => [
        'exclude' => true,
        'label'   => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
        'config'  => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ],
    ],
    'endtime' => [
        'exclude' => true,
        'label'   => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
        'config'  => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ],
    ],
    'fe_group' => [
        'exclude' => true,
        'label'   => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
        'config'  => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => [
                [
                    'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                    -1,
                ],
                [
                    'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                    -2,
                ],
                [
                    'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                    '--div--',
                ],
            ],
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
        ],
    ],
    'title' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layout.title',
        'config'  => [
            'type' => 'input',
            'readOnly' => false,
            'eval' => 'required',
        ],
    ],
    'layout_key' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layout.layout_key',
        'config'  => [
            'type' => 'input',
            'readOnly' => false,
            'eval' => 'required,unique,alphanum_x,lower',
        ],
    ],
    'description' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layout.description',
        'config'  => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 4,
        ],
    ],
    'icon' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layout.icon',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', 0],
            ],
            'fileFolder' => 'EXT:wdb_news_snapin/Resources/Public/Layout-Icons/',
            'fileFolder_extList' => 'png,svg,gif',
            'fileFolder_recursions' => 10,
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
        ],
    ],
    'layout_area' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layout.layout_area',
        'config'  => [
            'type'             => 'inline',
            'foreign_table'    => 'tx_wdbnewssnapin_layout_layoutarea_mm',
            'foreign_field'    => 'uid_layout',
            'foreign_sortby'   => 'sorting_layout',
            'foreign_label'    => 'uid_layoutarea',
            'foreign_selector' => 'uid_layoutarea',
            'foreign_unique'   => 'uid_layoutarea',
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
    /*
    'news' => [
        'label'  => $ll . 'tx_wdbnewssnapin_domain_model_layout.news',
        'config' => [
            'type'                => 'inline',
            'foreign_table'       => 'tx_news_domain_model_news',
            'foreign_table_where' => ' AND tx_news_domain_model_news.sys_language_uid IN (0,-1)',
            'foreign_field'       => 'tx_wdbnewssnapin_layout',
            #'foreign_sortby'      => 'sorting_layout',
            'foreign_label'       => 'title',
            'foreign_selector'    => 'tx_wdbnewssnapin_layout',
            'minitems'            => 0,
            'maxitems'            => 1,
            'appearance'          => [
                'collapseAll'       => true,
                'expandSingle'      => true,
                'useCombination'    => 1,
                'useSortable'       => true,
                'enabledControls'   => [
                    'info'            => true,
                    'new'             => true,
                    'dragdrop'        => true,
                    'sort'            => true,
                    'hide'            => true,
                    'delete'          => true,
                    'localize'        => true,
                ],
            ],
        ],
    ],
    */
        /*
        'config'  => [
            'type'       => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_wdbnewssnapin_domain_model_layoutarea',
            'items' => [
                ['', 0],
            ],

            # 'foreign_table_where' => ' AND {#tx_my_foreign_table}.{#pid} = 0 ORDER BY tx_my_foreign_table.sorting',

            ###THIS_UID### Current element uid (zero if new).
            ###CURRENT_PID### The current page id (pid of the record).
            ###SITEROOT###
            ###PAGE_TSCONFIG_ID### A value you can set from Page TSconfig dynamically.
            ###PAGE_TSCONFIG_IDLIST### A value you can set from Page TSconfig dynamically.
            ###PAGE_TSCONFIG_STR### A value you can set from Page TSconfig dynamically.

            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],

            #    'showIconTable' => true,
            #    'fileFolder' => 'EXT:wdb_news_snapin/Resources/Public/Icons/',
            #    'fileFolder_extList' => 'png,jpg,jpeg,gif',
            #    'fileFolder_recursions' => 0,
            #    'size' => 1,
            #    'minitems' => 0,
            #    'maxitems' => 1,

        ],
        */
  ],
  'types' => [
    '0' => ['showitem' => 'title,layout_key,description,icon,layout_area'], // ,news
  ],
];

if ($configuration->getSetLayoutFieldsReadOnly() === true) {
    $tx_wdbnewssnapin_domain_model_layout['columns']['title']       ['config']['readOnly'] = true;
    $tx_wdbnewssnapin_domain_model_layout['columns']['layout_key']  ['config']['readOnly'] = true;
    $tx_wdbnewssnapin_domain_model_layout['columns']['description'] ['config']['readOnly'] = true;
    $tx_wdbnewssnapin_domain_model_layout['columns']['icon']        ['config']['readOnly'] = true;
}

// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wdbnewssnapin_domain_model_layout');

return $tx_wdbnewssnapin_domain_model_layout;
