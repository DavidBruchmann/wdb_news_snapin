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
 * Layoutarea
 */
class Layoutarea extends \WDB\WdbNewsSnapin\Domain\Model\AbstractWdbNewsSnapinEntity
{

    /**
     * @var string
     */
    protected $title = '';
    
    /**
     * @var string
     */
    protected $description = '';
    
    /**
     * @var string
     */
    protected $areaKey = '';
    
    /**
     * @var string
     */
    protected $icon = '';
    
    /**
     * @var string
     */
    protected $iconPath = '';

    /**
     * @var \WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation
     */
    protected $layout = null;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\News>
     */
    protected $news = null;

    /**
     * __construct
     */
    public function __construct()
    {
		$this->initStorageObjects();
        $this->iconPath = $GLOBALS['TCA'][$this->getTableName()]['ctrl']['selicon_field_path'];
    }

	/**
	 * Initializes all ObjectStorage properties
	 */
	protected function initStorageObjects() : void
    {
		$this->news = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

    /**
     * Set title
     *
     * @param string
     */
    public function setTitle($title) : void
    {
        $this->title = $title;
    }

    /**
	 * Return title
	 *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string
     */
    public function setDescription($description) : void
    {
        $this->description = $description;
    }

    /**
	 * Return description
	 *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * Set areaKey
     *
     * @param string
     */
    public function setAreaKey($areaKey) : void
    {
        $this->areaKey = $areaKey;
    }

    /**
	 * Return areaKey
	 *
     * return string
     */
    public function getAreaKey() : string
    {
        return $this->areaKey;
    }

    /**
     * Set icon
     *
     * @param string
     */
    public function setIcon($icon) : void
    {
        $this->icon = $icon;
    }

    /**
	 * Return icon
	 *
     * @return string
     */
    public function getIcon() : string
    {
        return $this->icon;
    }

    /**
     * Set layout
     *
     * @param \WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation
     */
    public function setLayout(\WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation $layout = null)
    {
        $this->layout = $layout;
    }

    /**
     * Return layout
     *
     * @return \WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation
     */
    public function getLayout() : ?\WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation
    {
        return $this->layout;
    }

    /**
     * Set ObjectStorage 'news'
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function setNews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $news = null) : void
    {
        $this->news = $news;
    }

	/**
	 * Add the defined $newsToAdd to ObjectStorage 'news'
	 *
	 * @param \GeorgRinger\News\Domain\Model\News $newsToAdd
	 */
    public function addNews(\GeorgRinger\News\Domain\Model\News $newsToAdd) : void
    {
        $this->news->attach($newsToAdd);
    }

	/**
	 * Remove the defined $newsToRemove from ObjectStorage 'news'
	 *
	 * @param \GeorgRinger\News\Domain\Model\News $newsToRemove
	 */
    public function removeNews(\GeorgRinger\News\Domain\Model\News $newsToRemove) : void
    {
        $this->news->detach($newsToRemove);
    }

    /**
     * Return ObjectStorage 'news'
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getNews() : ?\TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->news;
    }

    /**
     * ------------------
     * ADDITIONAL METHODS
     * ------------------
     */

    /**
	 * Return icon
	 *
     * @return string
     */
    public function getIconPath() : string
    {
        return $this->iconPath;
    }

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return 'tx_wdbnewssnapin_domain_model_layoutarea';
    }
}
