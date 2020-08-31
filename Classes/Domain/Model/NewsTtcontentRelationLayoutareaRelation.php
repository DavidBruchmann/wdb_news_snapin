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
 * Relation between NewsTtcontentRelation and Layoutarea
 */
class NewsTtcontentRelationLayoutareaRelation extends \WDB\WdbNewsSnapin\Domain\Model\AbstractWdbNewsSnapinEntity
{

    /**
     * @var \WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation
     */
    protected $relation;

    /**
     * @var \WDB\WdbNewsSnapin\Domain\Model\Layoutarea
     */
    protected $layoutArea;

    /**
     * @var \WDB\WdbNewsSnapin\Domain\Model\Layout
     */
    protected $layout;

    /**
     * Set relation
     *
     * @param \WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation
     */
    public function setRelation(\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation $relation = null) : void
    {
        $this->relation = $relation;
    }

    /**
     * Return relation
     *
     * @return null | \WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation
     */
    public function getRelation() : ?\WDB\WdbNewsSnapin\Domain\Model\NewsTtcontentRelation
    {
        return $this->relation;
    }

    /**
     * Set layoutArea
     *
     * @param \WDB\WdbNewsSnapin\Domain\Model\Layoutarea
     */
    public function setLayoutArea(\WDB\WdbNewsSnapin\Domain\Model\Layoutarea $layoutArea = null) : void
    {
        if (is_null($this->layoutArea)) {
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

    /**
     * Set layout
     *
     * @param \WDB\WdbNewsSnapin\Domain\Model\Layout $layout
     */
    public function setLayout(\WDB\WdbNewsSnapin\Domain\Model\Layout $layout = null) : void
    {
        $this->layout = $layout;
    }

    /**
     * Return layout
     *
     * @return null | \WDB\WdbNewsSnapin\Domain\Model\Layout
     */
    public function getLayout() : ?\WDB\WdbNewsSnapin\Domain\Model\Layout
    {
        return $this->layout;
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
        return 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm';
    }
}
