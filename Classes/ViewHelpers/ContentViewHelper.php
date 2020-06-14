<?php

namespace WDB\WdbNewsSnapin\ViewHelpers;

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

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/*******************************************************************************************
 * ContentViewHelper
 *
 * This ViewHelper relies on a special field `layoutArea`.
 *
 * This ViewHelper isn't rendering anything but makes it easier to select the right
 * content-objects of the ObjectStorage. This keeps fluid-code cleaner and is less
 * confusing.
 *
 * param  string layoutArea
 * param  object ttContents   usually instance of ObjectStorage
 * return array  of filtered ttContent-objects
 *
 * Usage like this:
 *
 *    <f:variable name="cObjects"><newssnapin:content layoutArea="top-fit" ttContents="{newsItem.txWdbnewssnapinTtcontent}"/></f:variable>
 *
 * Afterwards the resulting array can be used in a loop:
 *
 *    <f:for each="{cObjects}" as="cObject">
 *        <f:cObject typoscriptObjectPath="tt_content.{cObject.CType}" data="{cObject}" />
 *    </f:for>
 *
 * A simpler example:
 *
 *    <f:for each="{cObjects}" as="cObject">
 *        <h1>{cObject.header}</h1>
 *        <div>{cObject.bodytext}</div>
 *    </f:for>
 *******************************************************************************************/
class ContentViewHelper extends AbstractViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('layoutArea', 'string', 'The layoutArea that shall be rendered', true);
        $this->registerArgument('ttContents', 'object', 'The content objects that shall be rendered in a object storage', true);
    }

    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $contenObjects = $arguments['ttContents'];
        $requestedTtcontent = [];
        if (!empty($contenObjects)) {
            foreach ($contenObjects as $contenObject) {
                if ($contenObject->getLayoutArea()->getAreaKey() === $arguments['layoutArea']) {
                    $requestedTtcontent[] = $contenObject->getTxWdbnewssnapinTtcontent();
                }
            }
        }
        return $requestedTtcontent;
    }
}
