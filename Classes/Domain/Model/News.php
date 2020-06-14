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
 * News
 *
 * IMPORTANT:
 * Changing styling in this class might break functionality even the styling is not standard conform
 */
class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation>
     */
    protected $txWdbnewssnapinTtcontent = null;

    /**
     * @var \WDB\WdbNewsSnapin\Domain\Model\Layout
     */
    protected $txWdbnewssnapinLayout = null;

    /**
     * __construct
     */
    public function __construct() {
        // Added by \WDB\WdbNewsSnapin\Domain\Model\News (EXT:wdb_news_snapin)
        $this->txWdbnewssnapinTtcontent = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the txWdbnewssnapinTtcontent
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation> $txWdbnewssnapinTtcontent
     */
    public function getTxWdbnewssnapinTtcontent() {
        return $this->txWdbnewssnapinTtcontent;
    }

    /**
     * Adds a txWdbnewssnapinTtcontent
     *
     * @param WDB\WdbNewsSnapin\Domain\Model\TtContent $txWdbnewssnapinSnapinToAdd   The txWdbnewssnapinTtcontent to add
     * @return void
     */
    public function addTxWdbnewssnapinTtcontent(\WDB\WdbNewsSnapin\Domain\Model\TtContent $txWdbnewssnapinTtcontentToAdd) {
        if ($this->txWdbnewssnapinTtcontent() === null) {
            $this->txWdbnewssnapinTtcontent = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        }
        $this->txWdbnewssnapinTtcontent->attach($txWdbnewssnapinTtcontentToAdd);
    }

    /**
     * Removes a txWdbnewssnapinTtcontent
     *
     * @param WDB\WdbNewsSnapin\Domain\Model\txWdbnewssnapinTtcontent $txWdbnewssnapinTtcontentToRemove   The txWdbnewssnapinTtcontent to be removed
     * @return void
     */
    public function removeTxWdbnewssnapinTtcontent(\WDB\WdbNewsSnapin\Domain\Model\TtContent $txWdbnewssnapinTtcontentToRemove) {
        $this->txWdbnewssnapinTtcontent->detach($txWdbnewssnapinTtcontentToRemove);
    }

    /**
     * Returns the txWdbnewssnapinTtcontent
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation> $txWdbnewssnapinTtcontent
     * @return void
     */
    public function setTxWdbnewssnapinTtcontent(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $txWdbnewssnapinTtcontent) {
        $this->txWdbnewssnapinTtcontent = $txWdbnewssnapinTtcontent;
    }

    /**
     * Returns the txWdbnewssnapinLayout
     *
     * @return \WDB\WdbNewsSnapin\Domain\Model\Layout
     */
    public function getTxWdbnewssnapinLayout() {
        return $this->txWdbnewssnapinLayout;
    }

    /**
     * Returns the txWdbnewssnapinLayout
     *
     * @param \WDB\WdbNewsSnapin\Domain\Model\Layout $txWdbnewssnapinLayout
     * @return void
     */
    public function setTxWdbnewssnapinLayout(\WDB\WdbNewsSnapin\Domain\Model\Layout $txWdbnewssnapinLayout) {
        $this->txWdbnewssnapinLayout = $txWdbnewssnapinLayout;
    }

    /**
     * ------------------
     * ADDITIONAL METHODS
     * ------------------
     */

    /**
     * Get id list of content elements
     *
     * @return string
     */
    public function getTtcontentIdList() {
        return $this->getIdsOfTtconent();
    }

    /**
     * Get translated id list of content elements
     *
     * @return string
     */
    public function getTranslatedTtcontentIdList() {
        return $this->getIdsOfTtconent(false);
    }

    /**
     * Collect id list of content elements
     *
     * @param bool $original
     * @return string
     */
    protected function getIdsOfTtconent($original = true) {
        $idList = [];
        $ttContent = $this->getTxWdbnewssnapinTtcontent();
        if ($ttContent) {
            foreach ($ttContent as $ttContent) {
                if ($ttContent->getColPos() >= 0) {
                    $idList[] = $original ? $ttContent->getUid() : $ttContent->_getProperty('_localizedUid');
                }
            }
        }
        return implode(',', $idList);
    }

    /**
     * @return string
     */
    public function getTableName() : string
    {
        return 'tx_news_domain_model_news';
    }
}
