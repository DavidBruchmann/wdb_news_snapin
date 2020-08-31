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
 * TtContent
 */
class TtContent extends \GeorgRinger\News\Domain\Model\TtContent
{

	/**
	 * txWdbnewssnapinNews
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation>
	 */
	protected $txWdbnewssnapinNews = NULL;

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
	protected function initStorageObjects() : void
    {
		$this->txWdbnewssnapinNews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Set ObjectStorage 'txWdbnewssnapinNews'
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation> $txWdbnewssnapinNews
	 */
	public function setTxWdbnewssnapinNews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $txWdbnewssnapinNews = null) : void
    {
		$this->txWdbnewssnapinNews = $txWdbnewssnapinNews;
	}

	/**
	 * Add the defined $txWdbnewssnapinNewsToAdd to ObjectStorage 'txWdbnewssnapinNews'
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation $txWdbnewssnapinNewsToAdd
	 */
	public function addTxWdbnewssnapinNews(\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation $txWdbnewssnapinNewsToAdd) : void
    {
		$this->txWdbnewssnapinNews->attach($txWdbnewssnapinNewsToAdd);
	}

	/**
	 * Remove the defined $txWdbnewssnapinNewsToRemove from ObjectStorage 'txWdbnewssnapinNews'
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation $txWdbnewssnapinNewsToRemove
	 */
	public function removeTxWdbnewssnapinNews(\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation $txWdbnewssnapinNewsToRemove) : void
    {
		$this->txWdbnewssnapinNews->detach($txWdbnewssnapinNewsToRemove);
	}

	/**
	 * Return ObjectStorage 'txWdbnewssnapinNews'
	 *
	 * @return null | \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation> $txWdbnewssnapinNews
	 */
	public function getTxWdbnewssnapinNews() : ?\TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
		return $this->txWdbnewssnapinNews;
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
        return 'tt_content';
    }
}
