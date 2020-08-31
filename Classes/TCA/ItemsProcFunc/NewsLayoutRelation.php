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
use WDB\WdbNewsSnapin\Domain\Repository\NewsLayoutRelationRepository;
use WDB\WdbNewsSnapin\Utility\ArrayUtility;

/**
 * Class with ItemsProcFunc for News,
 * not required for TYPO3 version 9
 */
class NewsLayoutRelation extends AbstractItemsProcFunc
{
    /**
     * @var string
     */
    protected $defaultIconPath = 'EXT:wdb_news_snapin/Resources/Public/Layout-Icons';

    /**
     * Alters the $params array without returning but changing it by reference
     *
     * If this function is failing, see https://forge.typo3.org/issues/91611
     *
     * @TODO rename method to getLayoutItems()
     *
     * @params array
     */
    public function getLayout(&$params) : void
    {
        $repository = GeneralUtility::makeInstance(NewsLayoutRelationRepository::class);
        $iconTable  = 'tx_wdbnewssnapin_domain_model_layout';
        $iconField  = $GLOBALS['TCA'][$iconTable]['ctrl']['selicon_field'];
        $iconPath   = $this->getIconPath($iconTable, 'layoutIconPath');

        $uidArray   = ArrayUtility::getParamsItemsUidArray($params['items']);
        $rows       = $repository->getLayoutRecords($params, $iconTable, $iconField, $iconPath, $uidArray);

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
