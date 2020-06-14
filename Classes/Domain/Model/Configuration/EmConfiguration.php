<?php

namespace WDB\WdbNewsSnapin\Domain\Model\Configuration;

use WDB\WdbNewsSnapin\Domain\Model\Configuration\AbstractEmConfiguration;

/**
 * This file is part of the "wdb_news_snapin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Extension Manager configuration
 */
class EmConfiguration extends AbstractEmConfiguration
{
    /** @var bool */
    protected $showNewsInLayoutArea = false;

    /** @var bool */
    protected $setLayoutFieldsReadOnly = false;

    /** @var bool */
    protected $setLayoutAreaFieldsReadOnly = false;

    /** @var bool */
    protected $uniqueLayoutAreaKeys = false;

    /** @var bool */
    protected $restrictNewsToSysfolder = false;

    /** @var string */
    protected $layoutRestriction = '';

    /** @var string */
    protected $layoutAreaRestriction = '';

    /** @var array */
    protected $_layoutRestrictionOptions = ['current_pid', 'sys_folder', 'siteroot', 'rootlevel'];  // 'page_tsconfig',

    /** @var array */
    protected $_layoutAreaRestrictionOptions = ['current_pid', 'sys_folder', 'siteroot', 'rootlevel'];  // 'page_tsconfig',

    /**
     * In each news-article layout-areas with corresponding content can be defined.
     * Bidirectional the news can be displayed inside the layoutArea-records,
     * this might be not recommended if many news are referenced there, that means
     * if many news use the same layout-area. This setting is related primary to the backend.
     * See at $uniqueLayoutAreaKeys to see how that setting has an impact on the amount.
     *
     * @param bool $showNewsInLayoutArea
     */
    public function setShowNewsInLayoutArea($showNewsInLayoutArea) : void
    {
        $this->showNewsInLayoutArea = (bool) $showNewsInLayoutArea;
    }

    /**
     * @return bool
     */
    public function getShowNewsInLayoutArea() : bool
    {
        return $this->showNewsInLayoutArea;
    }

    /**
     * Layouts and access to it can be defined in the TYPO3 backend, so
     * editors might not change values anyway.
     * Nevertheless it might be advised that even admins can't change values accidentially,
     * as the whole templates might depend on a complicated setup.
     * Therefore the fields can be made read-only.
     * It's advised to set the option $setLayoutAreaFieldsReadOnly accordingly.
     *
     * @param bool $setLayoutFieldsReadOnly
     */
    public function setSetLayoutFieldsReadOnly($setLayoutFieldsReadOnly) : void
    {
        $this->setLayoutFieldsReadOnly = (bool) $setLayoutFieldsReadOnly;
    }

    /**
     * @return bool
     */
    public function getSetLayoutFieldsReadOnly() : bool
    {
        return $this->setLayoutFieldsReadOnly;
    }

    /**
     * LayoutAreas and access to it can be defined in the TYPO3 backend, so
     * editors might not change values anyway.
     * Nevertheless it might be advised that even admins can't change values accidentially,
     * as the whole templates might depend on a complicated setup.
     * Therefore the fields can be made read-only.
     * It's advised to set the option $setLayoutFieldsReadOnly accordingly.
     *
     * @param bool $setLayoutAreaFieldsReadOnly
     */
    public function setSetLayoutAreaFieldsReadOnly($setLayoutAreaFieldsReadOnly) : void
    {
        $this->setLayoutAreaFieldsReadOnly = (bool) $setLayoutAreaFieldsReadOnly;
    }

    /**
     * @return bool
     */
    public function getSetLayoutAreaFieldsReadOnly() : bool
    {
        return $this->setLayoutAreaFieldsReadOnly;
    }

    /**
     * Layouts have a unique key in the whole installation.
     * LayoutAreas can be defined unique or repeating.
     * While a non-unique setting allows detailed icons related to the used layout,
     * it might be confusing for editors if layoutAreas are opened independent of layout or news-article.
     * A unique usage is advised if areas shall be shared between layouts for simplified
     * setup and usage. The extension includes example data for both settings.
     * A non-unique setting reduces the amount of assigned news per LayoutArea siginifiantly as
     * each LayoutArea will usually only assigned to one Layout.
     * 
     * @param bool $uniqueLayoutAreaKeys
     */
    public function setUniqueLayoutAreaKeys($uniqueLayoutAreaKeys) : void
    {
        $this->uniqueLayoutAreaKeys = (bool) $uniqueLayoutAreaKeys;
    }

    /**
     * @return bool
     */
    public function getUniqueLayoutAreaKeys() : bool
    {
        return $this->uniqueLayoutAreaKeys;
    }

    /**
     * News-records in the backend are allowed on every page, this leads to problems when
     * content for inclusion is created, as the content is displayed twice then.
     * The simplest way to avoid this misbehavior is to allow news-articles only in sys-folders,
     * then created content for inclusion is automatically there too.
     * 
     * @param bool $restrictNewsToSysfolder
     */
    public function setRestrictNewsToSysfolder($restrictNewsToSysfolder) : void
    {
        $this->restrictNewsToSysfolder = (bool) $restrictNewsToSysfolder;
    }

    /**
     * @return bool
     */
    public function getRestrictNewsToSysfolder() : bool
    {
        return $this->restrictNewsToSysfolder;
    }

    /**
     * Setting the option / restriction where Layouts can bs saved
     *
     * @param string $layoutRestriction
     */
    public function setLayoutRestriction($layoutRestriction) : void
    {
        if (in_array($layoutRestriction, $this->_layoutRestrictionOptions)) {
            $this->layoutRestriction = $layoutRestriction;
        }
        elseif ($layoutRestriction == 'none') {
            $this->layoutRestriction = '';
        }
        else {
            $this->_log('Warning: Option ' . $layoutRestriction . ' does not exist for variable `layoutRestriction` in EXT:wdb_news_snapin/ext_conf_template.txt');
        }
    }

    /**
     * @return string
     */
    public function getLayoutRestriction() : string
    {
        return $this->layoutRestriction;
    }

    /**
     * Setting the option / restriction where LayoutAreas can bs saved
     *
     * @param string $layoutAreaRestriction
     */
    public function setLayoutAreaRestriction($layoutAreaRestriction) : void
    {
        if (in_array($layoutAreaRestriction, $this->_layoutAreaRestrictionOptions)) {
            $this->layoutAreaRestriction = $layoutAreaRestriction;
        }
        elseif ($layoutAreaRestriction == 'none') {
            $this->layoutAreaRestriction = '';
        }
        else {
            $this->_log('Warning: Option ' . $layoutAreaRestriction . ' does not exist for variable `layoutAreaRestriction` in EXT:wdb_news_snapin/ext_conf_template.txt');
        }
    }

    /**
     * @return string
     */
    public function getLayoutAreaRestriction() : string
    {
        return $this->layoutAreaRestriction;
    }
}
