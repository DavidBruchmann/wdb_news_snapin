<?php

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_wdbnewssnapin_news_ttcontent_mm',
            'EXT:wdb_news_snapin/Resources/Private/Language/locallang_csh_tx_wdbnewssnapin_news_ttcontent_mm.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_news_domain_model_news',
            'EXT:wdb_news_snapin/Resources/Private/Language/locallang_csh_tx_news_domain_model_news.xlf'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tt_content',
            'EXT:wdb_news_snapin/Resources/Private/Language/locallang_csh_tt_content.xlf'
        );
    }
);
