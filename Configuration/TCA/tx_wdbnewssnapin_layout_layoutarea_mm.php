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

// $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

return [
  'ctrl' => [
    'title'                    => $ll . 'tx_wdbnewssnapin_layout_layoutarea_mm.ctrl.title',
    'label'                    => 'uid_layout',
    'label_alt'                => 'uid_layoutarea',
    'label_alt_force'          => true,
    'iconfile'                 => 'EXT:wdb_news_snapin/Resources/Public/Icons/tx_wdbnewssnapin_layout_layoutarea_mm.svg',
    'hideTable'                => true,
    # 'selicon_field'            => 'icon',
    # 'selicon_field_path'       => 'EXT:wdb_news_snapin/Resources/Public/Layout-Icons',
    # 'tstamp'                   => 'tstamp',
    # 'crdate'                   => 'crdate',
    # 'cruser_id'                => 'cruser_id',
    # 'delete'                   => 'deleted',
    # 'sortby'                   => 'sorting',
    'languageField'            => 'sys_language_uid',
    'transOrigPointerField'    => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'translationSource'        => 'l10n_source',
    'languageField'            => 'sys_language_uid',
    # 'origUid'                  => 't3_origuid',
    # 'editlock'                 => 'editlock',
    # 'descriptionColumn'        => 'description',

    'rootLevel'                => -1,
    // 'is_static'                => true,
    # 'enablecolumns'            => [
    #    'disabled'                  => 'hidden',
    #    'endtime'                   => 'endtime',
    #    'fe_group'                  => 'fe_group',
    #    'starttime'                 => 'starttime',
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
            'allowed' => 'tx_wdbnewssnapin_layout_layoutarea_mm',
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
    'uid_layout' => [
        'label'  => $ll . 'tx_wdbnewssnapin_layout_layoutarea_mm.uid_layout',
        'config' => [
            'type'                => 'select',
            'renderType'          => 'selectSingle',
            'foreign_table'       => 'tx_wdbnewssnapin_domain_model_layout',
            'foreign_table_where' => ' AND tx_wdbnewssnapin_domain_model_layout.sys_language_uid IN (0,-1)',
            'size'                => 1,
            'minitems'            => 0,
            'maxitems'            => 1,
        ],
    ],
    'uid_layoutarea'   => [
        'label'  => $ll . 'tx_wdbnewssnapin_layout_layoutarea_mm.uid_layoutarea',
        'config' => [
            'type'                => 'select',
            'renderType'          => 'selectSingle',
            'foreign_table'       => 'tx_wdbnewssnapin_domain_model_layoutarea',
            'foreign_table_where' => ' AND tx_wdbnewssnapin_domain_model_layoutarea.sys_language_uid IN (0,-1)',
            'size'                => 1,
            'minitems'            => 0,
            'maxitems'            => 1,
        ],
    ],
    /*
    'sorting_layoutarea' => [
        'label' => 'sorting_layoutarea',
        'config' => [
            'type' => 'passthrough',
        ]
    ],
    'sorting_layout' => [
        'label' => 'sorting_layout',
        'config' => [
            'type' => 'passthrough',
        ]
    ],
    */
  ],
  'types' => [
    '0' => ['showitem' => 'uid_layout,uid_layoutarea'],
  ],
];
