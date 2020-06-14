<?php

namespace WDB\WdbNewsSnapin\Utility;

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

class ArrayUtility
{
    /**
     * Building array just with uids, used for SQL-query
     * items have a predefined structure like this:
     *    [[0:title, 1:uid, 2:value], [0:title, 1:uid, 2:value], ...]
     *
     * @param array $items
     *
     * @return array $uidArray
     */
    public static function getParamsItemsUidArray($items) : array
    {
        $uidArray = [];
        foreach ($items as $count => $itemData) {
            if (!empty($itemData[1])) {
                $uidArray[] = intval($itemData[1]);
            }
        }
        return $uidArray;
    }
}
