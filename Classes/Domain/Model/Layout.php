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
 * Layout
 */
class Layout extends \WDB\WdbNewsSnapin\Domain\Model\AbstractWdbNewsSnapinEntity
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
    protected $layoutKey = '';

    /**
     * @var string
     */
    protected $icon = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation>
     */
    protected $layoutArea;

    /**
     * @var \GeorgRinger\News\Domain\Model\News
     */
    protected $news;

    /**
     * __construct
     */
    public function __construct()
    {
		$this->initStorageObjects();
    }

	/**
	 * Initialize all ObjectStorage properties
     *
	 * @return void
	 */
	protected function initStorageObjects()
    {
		$this->layoutArea = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Set layoutKey
     *
     * @param string
     */
    public function setLayoutKey($layoutKey) : void
    {
        $this->layoutKey = $layoutKey;
    }

    /**
	 * Return layoutKey
	 *
     * return string
     */
    public function getLayoutKey() : string
    {
        return $this->layoutKey;
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
     * Set news
     *
     * @param \GeorgRinger\News\Domain\Model\News
     */
    public function setNews(\GeorgRinger\News\Domain\Model\News $news = null) : void
    {
        $this->news = $news;
    }

    /**
	 * Return news
	 *
     * @return null | \GeorgRinger\News\Domain\Model\News
     */
    public function getNews() : ?\GeorgRinger\News\Domain\Model\News
    {
        return $this->news;
    }

	/**
	 * Set ObjectStorage 'layoutArea'
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\Layoutarea> $layoutArea
	 */
    public function setLayoutArea(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $layoutArea = null) : void
    {
        $this->layoutArea = $layoutArea;
    }

	/**
	 * Add layoutAreaToAdd to ObjectStorage 'layoutArea'
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\Layoutarea> $layoutAreaToAdd
	 */
    public function addLayoutArea(\WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation $layoutAreaToAdd) : void
    {
        $this->layoutArea->attach($layoutAreaToAdd);
    }

	/**
	 * Remove layoutAreaToRemove from ObjectStorage 'layoutArea'
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\Layoutarea> $layoutAreaToRemove
	 */
    public function removeLayoutArea(\WDB\WdbNewsSnapin\Domain\Model\LayoutLayoutareaRelation $layoutAreaToRemove) : void
    {
        $this->layoutArea->detach($layoutAreaToRemove);
    }

	/**
	 * Return ObjectStorage 'layoutArea'
	 *
	 * @return null | \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
    public function getLayoutArea() : ?\TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->layoutArea;
    }

    /**
     * ------------------
     * ADDITIONAL METHODS
     * ------------------
     */

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return 'tx_wdbnewssnapin_domain_model_layout';
    }
}
