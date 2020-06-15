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

$tx_wdbnewssnapin_domain_model_layoutarea = [
  'ctrl' => [
    'title'                    => $ll . 'tx_wdbnewssnapin_domain_model_layoutarea.ctrl.title',
    'label'                    => 'title',
    'iconfile'                 => 'EXT:wdb_news_snapin/Resources/Public/Icons/tx_wdbnewssnapin_domain_model_layoutarea.svg',
    'hideTable'                => false,
    'selicon_field'            => 'icon',
    'selicon_field_path'       => 'EXT:wdb_news_snapin/Resources/Public/Area-Icons',
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
    'languageField'            => 'sys_language_uid',
    'editlock'                 => 'editlock',
    'descriptionColumn'        => 'description',

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
        ]
    ],
    'l10n_parent' => [
        'displayCond' => 'FIELD:sys_language_uid:>:0',
        'label'       => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
        'config'  => [
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_wdbnewssnapin_domain_model_layoutarea',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
        ],
    ],
    'l10n_source' => [
        'config'  => [
            'type' => 'passthrough'
        ]
    ],
    'l10n_diffsource' => [
        'config'  => [
            'type' => 'passthrough',
            'default' => ''
        ]
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
                ]
            ],
        ]
    ],
    'cruser_id' => [
        'label'   => 'cruser_id',
        'config'  => [
            'type' => 'passthrough'
        ]
    ],
    'pid' => [
        'label'   => 'pid',
        'config'  => [
            'type' => 'passthrough'
        ]
    ],
    'crdate' => [
        'label'   => 'crdate',
        'config'  => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
        ]
    ],
    'tstamp' => [
        'label'   => 'tstamp',
        'config'  => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
        ]
    ],
    'sorting' => [
        'label'   => 'sorting',
        'config'  => [
            'type' => 'passthrough',
        ]
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
        ]
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
        ]
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
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layoutarea.title',
        'config'  => [
            'type' => 'input',
            'readOnly' => false,
            'eval' => 'required',
        ],
    ],
    'area_key' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layoutarea.area_key',
        'config'  => [
            'type' => 'input',
            'readOnly' => false,
            'eval' => 'required,alphanum_x,lower' . ($configuration->getUniqueLayoutAreaKeys() ? ',unique' : ''),
        ],
    ],
    'description' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layoutarea.description',
        'config'  => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
        ],
    ],
    'icon' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layoutarea.icon',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', 0],
            ],
            'fileFolder' => 'EXT:wdb_news_snapin/Resources/Public/Area-Icons',
            'fileFolder_extList' => 'png,svg,gif',
            'fileFolder_recursions' => 5,
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
        ],
    ],
    'layout' => [ // select
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layoutarea.layout',
        'config'  => [
            'type'             => 'inline',
            'foreign_table'    => 'tx_wdbnewssnapin_layout_layoutarea_mm',
            'foreign_field'    => 'uid_layoutarea',
            'foreign_sortby'   => 'sorting_layoutarea',
            'foreign_label'    => 'uid_layout',
            'foreign_selector' => 'uid_layout',
            'foreign_unique'   => 'uid_layout',
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
    /*
    'news' => [
        'exclude' => true,
        'label'   => $ll . 'tx_wdbnewssnapin_domain_model_layoutarea.news',
        //'displayCond' => 'FIELD:news_allowed:REQ:true',
        'config'  => [
            'type'             => 'inline',
            'foreign_table'    => 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm',
            'foreign_field'    => 'uid_layoutarea',
            'foreign_sortby'   => 'sorting_area',
            'foreign_label'    => 'uid_relation',
            'foreign_selector' => 'uid_relation',
            'foreign_unique'   => 'uid_relation',
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
    */
  ],
  'types' => [
    '0' => ['showitem' => 'title,area_key,icon,description,layout'],
  ],
];

if ($configuration->getShowNewsInLayoutArea() === true) {
    # $tx_wdbnewssnapin_domain_model_layoutarea['types']['0']['showitem'] .= ',news';
}
if ($configuration->getSetLayoutAreaFieldsReadOnly() === true) {
    $tx_wdbnewssnapin_domain_model_layoutarea['columns']['title'       ]['config']['readOnly'] = true;
    $tx_wdbnewssnapin_domain_model_layoutarea['columns']['area_key'    ]['config']['readOnly'] = true;
    $tx_wdbnewssnapin_domain_model_layoutarea['columns']['description' ]['config']['readOnly'] = true;
    $tx_wdbnewssnapin_domain_model_layoutarea['columns']['icon'        ]['config']['readOnly'] = true;
}

return $tx_wdbnewssnapin_domain_model_layoutarea;
