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

class NewsTtcontentRelation extends AbstractItemsProcFunc
{
    /**
     * @var string
     */
    protected $defaultIconPath = 'EXT:wdb_news_snapin/Resources/Public/Area-Icons';
    
    public function getNewTtcontentId(&$params)
    {
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(['func_get_args()' => func_get_args(), '$params' => $params, '$rows' => $rows, '$newItems' => $newItems],__METHOD__.':'.__LINE__);
    }

    /**
     * Alters the $params array without returning but changing it by reference
     *
     * If this function is failing, see https://forge.typo3.org/issues/91611
     *
     * @params array
     */
    public function getLayoutAreas(&$params) : void
    {
        $repository = GeneralUtility::makeInstance(NewsTtcontentRelationRepository::class);
        $iconTable  = 'tx_wdbnewssnapin_domain_model_layoutarea';
        $iconField  = $GLOBALS['TCA'][$iconTable]['ctrl']['selicon_field'];
        $iconPath   = $this->getIconPath($iconTable, 'layoutAreaIconPath');
        /*
        // selicon_field_path exists only in TYPO3 version 9 but not in version 10
        $iconPath   = $GLOBALS['TCA'][$iconTable]['ctrl']['selicon_field_path'];
        $iconPath   = $iconPath ? $iconPath : 'EXT:wdb_news_snapin/Resources/Public/Area-Icons';
        $iconPath   = rtrim($iconPath, '/') . '/';
        */
        $uidArray   = ArrayUtility::getParamsItemsUidArray($params['items']);
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

        #\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(['$params' => $params, '$rows' => $rows, '$newItems' => $newItems],__METHOD__.':'.__LINE__);

        $params['items'] = $newItems;
    }
}
