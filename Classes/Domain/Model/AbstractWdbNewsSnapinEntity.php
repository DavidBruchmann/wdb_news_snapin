<?php

namespace WDB\WdbNewsSnapin\Domain\Model;

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

/**
 * AbstractWdbNewsSnapinEntity
 */
abstract class AbstractWdbNewsSnapinEntity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Return iconPath
     *
     * @return string
     */
    public function getIconPath() : string
    {
        return !empty($this->getTableConf()['selicon_field_path']) ? $this->getTableConf()['selicon_field_path'] : '';
    }

    /**
     * Return TCA-configuration-array for table with $this->getTableName()
     * configuration-array might be empty if tableName isn't available or no configuration set in TCA
     *
     * @return array
     */
    public function getTableConf() : array
    {
        return !empty($this->getTableName()) ? $GLOBALS['TCA'][$this->getTableName()] : [];
    }
}
