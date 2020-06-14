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

$fields = [
    'tx_wdbnewssnapin_ttcontent' => [
        'exclude' => 1,
        'label'   => $ll . 'tx_news_domain_model_news.tx_wdbnewssnapin_ttcontent',
        'config'  => [
            'type'             => 'inline',
            'foreign_table'    => 'tx_wdbnewssnapin_news_ttcontent_mm',
            'foreign_field'    => 'uid_news',
            'foreign_sortby'   => 'sorting_ttcontent',
            'foreign_label'    => 'uid_ttcontent',
            'foreign_selector' => 'uid_ttcontent',
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
    'tx_wdbnewssnapin_layout'   => [
        'label'     => $ll . 'tx_news_domain_model_news.tx_wdbnewssnapin_layout',
        'onChange'  => 'reload',
        'config'    => [
            'type'                => 'select',
            'renderType'          => 'selectSingle',
            'eval'                => 'required',
            'items'               => [
                [0 => ''],
            ],
            'foreign_table'       => 'tx_wdbnewssnapin_domain_model_layout',
            'foreign_table_where' => ' AND tx_wdbnewssnapin_domain_model_layout.sys_language_uid IN (0,-1)',
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
