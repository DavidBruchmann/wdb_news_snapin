<?php

namespace WDB\WdbNewsSnapin\Domain\Model;

/**
 * News
 *
 * Changing styling in this class might break functionality even the styling is not standard conform
 */
class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * txWdbnewssnapinSnapin
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation>
     */
    protected $txWdbnewssnapinTtcontent = NULL;

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
    public function removeTxWdbnewssnapinSnapin(\WDB\WdbNewsSnapin\Domain\Model\TtContent $txWdbnewssnapinTtcontentToRemove) {
        $this->txWdbnewssnapinTtcontent->detach($txWdbnewssnapinTtcontentToRemove);
    }

    /**
     * Returns the txWdbnewssnapinTtcontent
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation> $txWdbnewssnapinTtcontent
     * @return void
     */
    public function setTxWdbnewssnapinSnapin(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $txWdbnewssnapinTtcontent) {
        $this->txWdbnewssnapinTtcontent = $txWdbnewssnapinTtcontent;
    }

    /**
     * Get id list of content elements
     *
     * @return string
     */
    public function getSnapinIdList()
    {
        return $this->getIdOfSnapins();
    }

    /**
     * Get translated id list of content elements
     *
     * @return string
     */
    public function getTranslatedSnapinIdList()
    {
        return $this->getIdOfSnapins(false);
    }

    /**
     * Collect id list
     *
     * @param bool $original
     * @return string
     */
    protected function getIdOfSnapins($original = true)
    {
        $idList = [];
        $snapins = $this->getTxWdbnewssnapinSnapin();
        if ($snapins) {
            foreach ($snapins as $snapin) {
                if ($snapin->getColPos() >= 0) {
                    $idList[] = $original ? $snapin->getUid() : $snapin->_getProperty('_localizedUid');
                }
            }
        }
        return implode(',', $idList);
    }
}
