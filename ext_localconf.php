<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'wdb_news_snapin';

/** ** seems not being working (tested in TYPO3 9.5) **
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['newssnapin'] = [
    'WDB\WdbNewsSnapin\ViewHelpers',
];
*/
