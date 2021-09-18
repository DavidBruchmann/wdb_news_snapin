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
 * NewsTtcontentRelation
 */
class NewsTtcontentRelation extends \WDB\WdbNewsSnapin\Domain\Model\AbstractWdbNewsSnapinEntity
{

	/**
     * txWdbnewssnapinSnapin
	 *
	 * @var \WDB\WdbNewsSnapin\Domain\Model\TtContent
	 */
	protected $txWdbnewssnapinTtcontent;

	/**
	 * txWdbnewssnapinSnapin
	 *
	 * @var \WDB\WdbNewsSnapin\Domain\Model\News
	 */
	protected $txWdbnewssnapinNews;

	/**
	 * layoutArea
	 *
	 * @var \WDB\WdbNewsSnapin\Domain\Model\Layoutarea
	 */
    protected $layoutArea;

	/**
	 * Set txWdbnewssnapinTtcontent
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\TtContent $txWdbnewssnapinTtcontent
	 */
	public function setTxWdbnewssnapinTtcontent($txWdbnewssnapinTtcontent = null) : void
    {
		$this->txWdbnewssnapinTtcontent = $txWdbnewssnapinTtcontent;
	}

	/**
     * Return txWdbnewssnapinTtcontent
     *
	 * @return null | \WDB\WdbNewsSnapin\Domain\Model\TtContent
	 */
	public function getTxWdbnewssnapinTtcontent() : ?\WDB\WdbNewsSnapin\Domain\Model\TtContent
    {
		return $this->txWdbnewssnapinTtcontent;
	}

	/**
	 * Set txWdbnewssnapinNews
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\News $txWdbnewssnapinNews
	 */
	public function setTxWdbnewssnapinNews($txWdbnewssnapinNews = null) : void
    {
		$this->txWdbnewssnapinNews = $txWdbnewssnapinNews;
	}

	/**
     * Return txWdbnewssnapinNews
     *
	 * @return null | \WDB\WdbNewsSnapin\Domain\Model\News
	 */
	public function getTxWdbnewssnapinNews() : ?\WDB\WdbNewsSnapin\Domain\Model\News
    {
		return $this->txWdbnewssnapinNews;
	}

	/**
	 * Set layoutArea
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\Layoutarea $layoutArea
	 */
	public function setLayoutArea(\WDB\WdbNewsSnapin\Domain\Model\Layoutarea $layoutArea = null) : void
    {
        if (empty($layoutArea)) {
            // @TODO
        }
		$this->layoutArea = $layoutArea;
	}

	/**
     * Return layoutArea
     *
	 * @return null | \WDB\WdbNewsSnapin\Domain\Model\Layoutarea
	 */
	public function getLayoutArea() : ?\WDB\WdbNewsSnapin\Domain\Model\Layoutarea
    {
		return $this->layoutArea;
	}
}
