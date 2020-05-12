<?php

namespace WDB\WdbNewsSnapin\Domain\Model;

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
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->txWdbnewssnapinNews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the txWdbnewssnapinNews
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation> $txWdbnewssnapinNews
	 */
	public function setTxWdbnewssnapinNews($txWdbnewssnapinNews) {
		$this->txWdbnewssnapinNews = $txWdbnewssnapinNews;
	}

	/**
	 * Adds the defined txWdbnewssnapinNews
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation $txWdbnewssnapinNewsToAdd
	 */
	public function addTxWdbnewssnapinNews($txWdbnewssnapinNewsToAdd) {
		$this->txWdbnewssnapinNews->attach($txWdbnewssnapinNewsToAdd);
	}

	/**
	 * Removes the defined txWdbnewssnapinNews
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation $txWdbnewssnapinNewsToRemove
	 */
	public function removeTxWdbnewssnapinNews($txWdbnewssnapinNewsToRemove) {
		$this->txWdbnewssnapinNews->detach($txWdbnewssnapinNewsToRemove);
	}

	/**
	 * Returns the txWdbnewssnapinNews
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation> $txWdbnewssnapinNews
	 */
	public function getTxWdbnewssnapinNews() {
		return $this->txWdbnewssnapinNews;
	}

}
