<?php

namespace WDB\WdbNewsSnapin\TCA\ItemsProcFunc;

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
use WDB\WdbNewsSnapin\Domain\Repository\NewsTtcontentRelationRepository;
use WDB\WdbNewsSnapin\Utility\ArrayUtility;

class NewsTtcontentRelation
{
    /**
     * Alters the $params array without returning but changing it by reference
     *
     * Currently this function is returning the correct data but has no impact due to issue:
     * https://forge.typo3.org/issues/91611
     *
     * @params array
     */
    public function getLayoutAreas(&$params) : void
    {
        $iconTable  = 'tx_wdbnewssnapin_domain_model_layoutarea';
        $iconField  = $GLOBALS['TCA'][$iconTable]['ctrl']['selicon_field'];
        $iconPath   = $GLOBALS['TCA'][$iconTable]['ctrl']['selicon_field_path'];
        $iconPath   = rtrim($iconPath, '/') . '/';

        $uidArray   = ArrayUtility::getParamsItemsUidArray($params['items']);
        $repository = GeneralUtility::makeInstance(NewsTtcontentRelationRepository::class);
        $rows       = $repository->getLayoutAreaRecords($params, $iconTable, $iconField, $iconPath, $uidArray);

        $newItems   = [];
        $newItems   = !empty($params['config']['items']) ? $params['config']['items'] : [];
        foreach ($rows as $key => $row) {
            $newItems[] = [
                $row['title'],
                $row['uid'],
                $iconPath . $row[$iconField],
            ];
        }

        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(['$params' => $params, '$rows' => $rows, '$newItems' => $newItems],__METHOD__.':'.__LINE__);

        unset($params['items']);
        $params['items'] = $newItems;
    }
}
