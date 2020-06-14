<?php

namespace WDB\WdbNewsSnapin\Domain\Repository;

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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Connection;

class NewsTtcontentRelationRepository
{
    /**
     * gets LayoutArea records, used to limit the records defined by TCA on base of the chosen Layout.
     * So the Layout determines which LayoutAreas to load.
     *
     * @param array   predefined array-structure by the system
     * @param string  table where icons are saved
     * @param string  $iconField like defined in ctrl-section of TCA
     * @param string  $iconPath like defined in ctrl-section of TCA
     * @param array   array of uids that are found by TYPO3 on base of TCA configuration
     *
     * @return array  array with limited amount of subarrays like defined in $params['items']
     *                 in the form [0:[0:title, 1:uid, 2:value], 1:[0:title, 1:uid, 2:value], ...]
     */
    public function getLayoutAreaRecords(array $params, $iconTable, $iconField, $iconPath, array $uidArray) : array
    {
        $newsTable = 'tx_news_domain_model_news';
        $relTable  = 'tx_wdbnewssnapin_layout_layoutarea_mm';
        $uidList   = implode(',', $uidArray);

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($iconTable);
        $result = $queryBuilder
            ->select(
                $iconTable . '.uid',
                $iconTable . '.title',
                $iconTable . '.' . $iconField
            )
            ->from($iconTable)
            ->from($relTable)
            ->from($newsTable)
            ->where(
                $queryBuilder->expr()->eq($newsTable . '.tx_wdbnewssnapin_layout', $relTable . '.uid_layout'),
                $queryBuilder->expr()->eq($newsTable . '.uid', $queryBuilder->createNamedParameter($params['row']['uid_news'][0], Connection::PARAM_INT)),
                $queryBuilder->expr()->eq($iconTable . '.uid', $relTable . '.uid_layoutarea'),
                $queryBuilder->expr()->in($iconTable . '.uid', $queryBuilder->createNamedParameter($uidArray, Connection::PARAM_INT_ARRAY))
            )
            ->add('orderBy', 'FIELD(' . $iconTable . '.uid, ' . $uidList . ')', true)
            ->execute();

        $rows = $result->fetchAll();
        return $rows;
    }
}
