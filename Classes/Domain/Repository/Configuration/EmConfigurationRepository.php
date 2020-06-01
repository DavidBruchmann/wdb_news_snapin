<?php

namespace WDB\WdbNewsSnapin\Domain\Repository\Configuration;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * This file is part of the "wdb_news_snapin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Extension Manager Configuration Repository
 */
class EmConfigurationRepository
{
    public function getExtensionConfiguration($extension = 'wdb_news_snapin') : array
    {
        $configuration = [];
        try {
            $extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class);
            $configuration = $extensionConfiguration->get($extension);
        } catch (\Exception $exception) {
            // @TODO: write message in log
        }
        return $configuration;
    }
}