<?php

namespace WDB\WdbNewsSnapin\Domain\Model\Configuration;

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
use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use WDB\WdbNewsSnapin\Domain\Repository\Configuration\EmConfigurationRepository;

/**
 * Extension Manager configuration
 * Internal methods' names start with underscore '_', so there is no danger that they
 * correlate with variable-names.
 */
abstract class AbstractEmConfiguration
{

    /**
     * Fill the properties properly
     *
     * @param array $configuration em configuration
     */
    public function __construct(array $configuration = [])
    {
        $this->_init($configuration);
    }

    public function _init(array $configuration = []) : void
    {
        $configuration = $this->_getExtensionConfiguration($configuration);
        $this->_setProperties($configuration);
    }

    protected function _getExtensionConfiguration(array $configuration) : array
    {
        if (empty($configuration)) {
            $emConfigurationRepository = GeneralUtility::makeInstance(EmConfigurationRepository::class);
            $configuration = $emConfigurationRepository->getExtensionConfiguration();
        }
        return $configuration;
    }

    protected function _setProperties(array $configuration) : void
    {
        foreach ($configuration as $key => $value) {
            $this->_setProperty($key, $value);
        }
    }

    /**
     * @TODO: move messages into translation-files and adjust parameters in _log()::$beUserObj->writelog() accordingly
     */
    protected function _setProperty($property, $value) : void
    {
        if (is_string($property) && is_scalar($value)) {
            $setter = $this->_getSetterMethod($property);
            if (
                array_key_exists(lcfirst($property), get_class_vars(get_class($this)))
                && in_array($setter, get_class_methods($this))
            ) {
                $this->$setter($value);
            } else {
                $message = 'Method ' . $setter . ' never exists in ' . get_class($this)
                    . '. Check the definitions inside the file EXT:wdb_news_snapin/ext_conf_template.txt'
                    . '. Any wrong extension-settings might have to be removed manually from LocalConfiguration.php afterwards.';
                $this->_log($message);
            }
        } else {
            if (!is_string($property)) {
                $this->_log('$property is no string in ' . __FILE__ . ':' . __LINE__);
            }
            if (!is_scalar($value)) {
                $this->_log('value of property ' . $property . ' is no scalar in ' . __FILE__ . ':' . __LINE__);
            }
        }
    }

    // @TODO: this looks fishy:
    //  - severity / error levels are missing
    //  - location in code is not put out standardized
    //  - @see https://www.tiobe.com/articles/2020/severity-levels-for-codingstandards/
    //  - @see https://www.php.net/manual/en/errorfunc.constants.php
    protected function _log($message) : void
    {
        $beUserObj = $this->_getBackendUser();
        $beUserObj->writelog(4, 0, 1, 0, $message, []);
        throw new \Exception($message);
    }

    protected function _getBackendUser() : \TYPO3\CMS\Core\Authentication\BackendUserAuthentication
    {
        if (empty($GLOBALS['BE_USER'])) {
            // for writing a log-entry this is enough
            $beUserObj = GeneralUtility::makeInstance(BackendUserAuthentication::class);
            // if more is required:
            // $beUserObj->start();
        } else {
            $beUserObj = $GLOBALS['BE_USER'];
        }
        return $beUserObj;
    }

    protected function _getSetterMethod(string $property) : string
    {
        $setterMethod = 'set' . ucfirst($property);
        return $setterMethod;
    }

    // @TODO: is this required?
    protected function _getGetterMethod(string $property) : string
    {
        $getterMethod = 'get' . ucfirst($property);
        return $getterMethod;
    }
}
