<?php

defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:wdb_news_snapin/Resources/Private/Language/locallang_db.xlf:';

// $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration::class);

return [
  'ctrl' => [
    'title'                    => $ll . 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm.ctrl.title',
    'label'                    => 'uid_relation',
    'iconfile'                 => 'EXT:wdb_news_snapin/Resources/Public/Icons/tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm.svg',
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
    # 'origUid'                  => 't3_origuid',
    # 'editlock'                 => 'editlock',
    # 'descriptionColumn'        => 'description',
    # 'enablecolumns'            => [
    #    'disabled'                  => 'hidden',
    #    'endtime'                   => 'endtime',
    #    'fe_group'                  => 'fe_group',
    #    'starttime'                 => 'starttime',
    # ],
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
            'allowed' => 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm',
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
    'uid_relation' => [
        'label'  => $ll . 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm.uid_relation',
        'config' => [
            'type'                => 'select',
            'renderType'          => 'selectSingle',
            'foreign_table'       => 'tx_wdbnewssnapin_news_ttcontent_mm',
            'foreign_table_where' => ' AND tx_wdbnewssnapin_news_ttcontent_mm.sys_language_uid IN (0,-1)',
            'size'                => 1,
            'minitems'            => 0,
            'maxitems'            => 1,
        ],
    ],
    'uid_layout' => [
        'label'  => $ll . 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm.uid_layout',
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
        'label'  => $ll . 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm.uid_layoutarea',
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
    // 'sorting_news'
    // 'sorting_layoutarea'
  ],
  'types' => [
    '0' => ['showitem' => 'uid_relation,uid_layout,uid_layoutarea'],
  ],
];
