<?php

namespace WDB\WdbNewsSnapin\Domain\Model;

/*******************************************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2020 David Bruchmann , Webdevelopment Barlian Indonesia
 *
 *  All rights reserved
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 *******************************************************************************************/


/**
 * NewsTtcontentRelation
 */
class NewsTtcontentRelation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
     * txWdbnewssnapinSnapin
	 *
	 * @var \WDB\WdbNewsSnapin\Domain\Model\Ttcontent
	 */
	protected $txWdbnewssnapinTtcontent;

	/**
	 * txWdbnewssnapinSnapin
	 *
	 * @var \WDB\WdbNewsSnapin\Domain\Model\News
	 */
	protected $txWdbnewssnapinNews;

	/**
	 * ttcontentArea
	 *
	 * @var string # \WDB\WdbNewsSnapin\Domain\Model\News
	 */
    protected $ttcontentArea;

	/**
	 * ttcontentType
	 *
	 * @var string
	 */
    protected $ttcontentType;

	/**
	 * @return \WDB\WdbNewsSnapin\Domain\Model\Ttcontent
	 */
	public function getTxWdbnewssnapinTtcontent() {
		return $this->txWdbnewssnapinTtcontent;
	}

	/**
	 * @param \WDB\WdbNewsSnapin\Domain\Model\Ttcontent $txWdbnewssnapinTtcontent
	 */
	public function setTxWdbnewssnapinTtcontent($txWdbnewssnapinTtcontent) {
		$this->txWdbnewssnapinTtcontent = $txWdbnewssnapinTtcontent;
	}

	/**
	 * @return \WDB\WdbNewsSnapin\Domain\Model\News
	 */
	public function getTxWdbnewssnapinNews() {
		return $this->txWdbnewssnapinNews;
	}

	/**
	 * @param \WDB\WdbNewsSnapin\Domain\Model\News $txWdbnewssnapinNews
	 */
	public function setTxWdbnewssnapinNews($txWdbnewssnapinNews) {
		$this->txWdbnewssnapinNews = $txWdbnewssnapinNews;
	}

	/**
	 * @return string # \WDB\WdbNewsSnapin\Domain\Model\News
	 */
	public function ttcontentArea() {
		return $this->ttcontentArea;
	}

	/**
	 * @param string $ttcontentArea # \WDB\WdbNewsSnapin\Domain\Model\News $ttcontentArea
	 */
	public function setTtcontentArea($ttcontentArea) {
		$this->ttcontentArea = $ttcontentArea;
	}

	/**
	 * @return string
	 */
	public function ttcontentType() {
		return $this->ttcontentType;
	}

	/**
	 * @param string $ttcontentType
	 */
	public function setTtcontentType($ttcontentType) {
		$this->ttcontentType = $ttcontentType;
	}

}
