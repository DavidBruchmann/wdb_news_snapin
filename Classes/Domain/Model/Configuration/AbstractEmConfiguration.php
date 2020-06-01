<?php

namespace WDB\WdbNewsSnapin\Domain\Model\Configuration;

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use WDB\WdbNewsSnapin\Domain\Repository\Configuration\EmConfigurationRepository;

/**
 * This file is part of the "wdb_news_snapin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Extension Manager configuration
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

    public function _init(array $configuration = [])
    {
        $configuration = $this->_getExtensionConfiguration($configuration);
        $this->_setProperties($configuration);
    }
    
    protected function _getExtensionConfiguration(array $configuration) : array
    {
        if (empty($configuration)) {
            $configuration = EmConfigurationRepository::getExtensionConfiguration();
        }
        return $configuration;
    }
    
    protected function _setProperties(array $configuration) : void
    {
        foreach ($configuration as $key => $value) {
            $this->_assignProperty($key, $value);
        }
    }
    
    protected function _setProperty($property, $value) : void
    {
        if (is_string($property) && is_scalar($value)) {
            $setter = $this->_getSetterMethod($property);
            if (
                property_exists(__CLASS__, $property)
                && in_array($setter, get_class_methods(__CLASS__))
            ) {
                $this->$setter($value);
            } else {
                // @TODO: write message in log + remove Exception
                throw new \Exception('Method' . $setter . 'never exists.');
            }
        } else {
            // @TODO: write message in log
        }
    }
    
    protected function _getSetterMethod(string $property) : string
    {
        return 'set' . GeneralUtility::underscoredToUpperCamelCase($property);
    }
    
    protected function _getGetterMethod(string $property) : string
    {
        return 'get' . GeneralUtility::underscoredToUpperCamelCase($property);
    }
}
