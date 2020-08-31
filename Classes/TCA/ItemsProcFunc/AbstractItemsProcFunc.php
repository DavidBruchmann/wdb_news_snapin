<?php

namespace WDB\WdbNewsSnapin\TCA\ItemsProcFunc;

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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use WDB\WdbNewsSnapin\Domain\Model\Configuration\EmConfiguration;

abstract class AbstractItemsProcFunc
{
    /**
     * Returns path for icons based on table and configuration variable.
     * Path is with trailing slash and without concrete file.
     * If $altIconPath is not read, then it wasn't saved with the settings-form in install-tool.
     *
     * @param string $iconTable
     * @param string $confVariable
     *
     * @return string
     */
    protected function getIconPath($iconTable, $confVariable) : string
    {
        $configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(EmConfiguration::class);

        // selicon_field_path exists only in TYPO3 version 9 but not in version 10
        $iconPath       = $GLOBALS['TCA'][$iconTable]['ctrl']['selicon_field_path'];

        $iconPath       = $iconPath ? $iconPath : $this->defaultIconPath;
        $altIconPath    = $configuration->{'get' . ucfirst($confVariable)}();
        if ($altIconPath && $this->isValidPath($altIconPath)) {
            $iconPath = $altIconPath;
        }
        return rtrim($iconPath, '/') . '/';
    }

    protected function isValidPath($path) : bool
    {
        // TODO: validate $path;
        return true;
    }
}
