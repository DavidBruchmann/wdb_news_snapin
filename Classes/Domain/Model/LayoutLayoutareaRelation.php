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
class LayoutLayoutareaRelation extends \WDB\WdbNewsSnapin\Domain\Model\AbstractWdbNewsSnapinEntity
{

	/**
     * layout
	 *
	 * @var \WDB\WdbNewsSnapin\Domain\Model\Layout
	 */
	protected $layout;

	/**
     * layoutarea
	 *
	 * @var \WDB\WdbNewsSnapin\Domain\Model\Layoutarea
	 */
	protected $layoutarea;

	/**
     * txWdbnewssnapinTtcontent
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\Ttcontent>
	 */
	protected $txWdbnewssnapinTtcontent;

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
		$this->txWdbnewssnapinTtcontent = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Set layout
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\Layout $layout
	 */
    protected function setLayout(\WDB\WdbNewsSnapin\Domain\Model\Layout $layout) : void
    {
        $this->layout = $layout;
    }

	/**
	 * Return layout
	 *
	 * @return \WDB\WdbNewsSnapin\Domain\Model\Layout
	 */
    protected function getLayout() : \WDB\WdbNewsSnapin\Domain\Model\Layout
    {
        return $this->layout;
    }

	/**
	 * Set layoutarea
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\Layoutarea $layoutarea
	 */
    protected function setLayoutarea(\WDB\WdbNewsSnapin\Domain\Model\Layoutarea $layoutarea) : void
    {
        $this->layoutarea = $layoutarea;
    }

	/**
	 * Return layoutarea
	 *
	 * @return \WDB\WdbNewsSnapin\Domain\Model\Layoutarea
	 */
    protected function getLayoutarea() : \WDB\WdbNewsSnapin\Domain\Model\Layoutarea
    {
        return $this->layoutarea;
    }

	/**
	 * Set ObjectStorage 'txWdbnewssnapinTtcontent'
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\Ttcontent> $txWdbnewssnapinTtcontent
	 */
    protected function setTxWdbnewssnapinTtcontent(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $txWdbnewssnapinTtcontent) : void
    {
        $this->txWdbnewssnapinTtcontent = $txWdbnewssnapinTtcontent;
    }

	/**
	 * Add the defined $txWdbnewssnapinTtcontentToAdd to ObjectStorage 'txWdbnewssnapinTtcontent'
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\Ttcontent $txWdbnewssnapinTtcontentToAdd
	 */
    public function addTxWdbnewssnapinTtconten(\WDB\WdbNewsSnapin\Domain\Model\Ttcontent $txWdbnewssnapinTtcontentToAdd) : void
    {
        $this->txWdbnewssnapinTtcontent->attach($txWdbnewssnapinTtcontentToAdd);
    }

	/**
	 * Remove the defined $txWdbnewssnapinTtcontentToRemove from ObjectStorage 'txWdbnewssnapinTtcontent'
	 *
	 * @param \WDB\WdbNewsSnapin\Domain\Model\Ttcontent $txWdbnewssnapinTtcontentToRemove
	 */
    public function removeTxWdbnewssnapinTtconten(\WDB\WdbNewsSnapin\Domain\Model\Ttcontent $txWdbnewssnapinTtcontentToRemove) : void
    {
        $this->txWdbnewssnapinTtcontent->detach($txWdbnewssnapinTtcontentToRemove);
    }

	/**
	 * Return ObjectStorage 'txWdbnewssnapinTtcontent'
	 *
	 * @return \WDB\WdbNewsSnapin\Domain\Model\Ttcontent
	 */
    protected function getTxWdbnewssnapinTtcontent() : \TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->txWdbnewssnapinTtcontent;
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
        return 'tx_wdbnewssnapin_layout_layoutarea_mm';
    }
}
