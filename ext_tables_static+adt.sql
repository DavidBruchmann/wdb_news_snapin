SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `tx_wdbnewssnapin_domain_model_layout`;
CREATE TABLE `tx_wdbnewssnapin_domain_model_layout` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `editlock` smallint(6) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumtext COLLATE utf8mb4_unicode_ci,
  `l10n_source` int(11) NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `deleted` smallint(6) NOT NULL DEFAULT '0',
  `hidden` smallint(6) NOT NULL DEFAULT '0',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `fe_group` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `layout_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `icon` text COLLATE utf8mb4_unicode_ci,
  `layout_area` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `news` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tx_wdbnewssnapin_domain_model_layout` (`uid`, `pid`, `tstamp`, `crdate`, `cruser_id`, `t3_origuid`, `editlock`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`, `l10n_source`, `l10n_state`, `deleted`, `hidden`, `starttime`, `endtime`, `sorting`, `fe_group`, `description`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `title`, `layout_key`, `icon`, `layout_area`, `news`) VALUES
(1, 0, 1591537893, 1591205629, 1, 0, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 156, '0', 'This Layout displays above the common news-article an area where individual content can be added.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top area in full width', 'top-full', 'LO-top-full.svg', 1, 0),
(2, 0, 1591282635, 1591207346, 1, 1, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 312, '', 'This Layout displays below the common news-article an area where individual content can be added.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Bottom area in full width', 'bot-full', 'LO-bot-full.svg', 1, 0),
(3, 0, 1591283178, 1591207426, 1, 2, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 368, '', 'This Layout displays left beside the common news-article an area where individual content can be added.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left beside in full height', 'left-full', 'LO-left-full.svg', 1, 0),
(4, 0, 1591283422, 1591206749, 1, 0, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 704, '0', 'This Layout displays right beside the common news-article an area where individual content can be added.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Right beside in full height', 'right-full', 'LO-right-full.svg', 1, 0),
(5, 0, 1591283621, 1591207892, 1, 5, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 1136, '', 'This Layout displays above the common news-article an area where individual content can be added.\r\nBelow the top area on the left side is a sidebar for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top area in full width, sidebar left beside news', 'top-full-left-fit', 'LO-top-full-left-fit.svg', 2, 0),
(6, 0, 1591283791, 1591207659, 1, 1, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 1280, '', 'This Layout displays above the common news-article an area where individual content can be added.\r\nBelow the top area on the right side is a sidebar for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top area in full width, sidebar right beside news', 'top-full-right-fit', 'LO-top-full-right-fit.svg', 2, 0),
(7, 0, 1591284073, 1591209299, 1, 6, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 1280, '', 'This Layout displays above the common news-article an area where individual content can be added.\r\nBelow the top area on the left and right side are sidebar for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top area in full width, sidebars left and right beside news', 'top-full-left-fit-right-fit', 'LO-top-full-left-fit-right-fit.svg', 3, 0),
(8, 0, 1591281396, 1591240448, 1, 10, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 2048, '', 'This Layout displays above and below the common news-article areas where individual content can be added.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top and bottom area in full width', 'top-full-bot-full', 'LO-top-full-bot-full.svg', 2, 0),
(9, 0, 1591284951, 1591240143, 1, 8, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 3072, '', 'This Layout displays above and below the common news-article areas where individual content can be added.\r\nBelow the top area and above the bottom area on the left is a sidebar for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top and bottom area in full width, sidebar left beside news', 'top-full-bot-full-left-fit', 'LO-top-full-bot-full-left-fit.svg', 3, 0),
(10, 0, 1591285198, 1591240291, 1, 9, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4096, '', 'This Layout displays above and below the common news-article areas where individual content can be added.\r\nBelow the top area and above the bottom area on the right is a sidebar for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top and bottom area in full width, sidebar right beside news', 'top-full-bot-full-right-fit', 'LO-top-full-bot-full-right-fit.svg', 3, 0),
(11, 0, 1591286058, 1591209449, 1, 7, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4352, '', 'This Layout displays above and below the common news-article areas where individual content can be added.\r\nBelow the top area and above the bottom area on the left and right side are sidebars for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Top and bottom area in full width, sidebars left and right beside news', 'top-full-bot-full-left-fit-right-fit', 'LO-top-full-bot-full-left-fit-right-fit.svg', 4, 0),
(12, 0, 1591286485, 1591240985, 1, 5, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4608, '', 'This Layout displays below the common news-article an area where individual content can be added.\r\nAbove the bottom area on the left side is a sidebar for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Bottom area in full width, sidebar left beside news', 'bot-full-left-fit', 'LO-bot-full-left-fit.svg', 2, 0),
(13, 0, 1591287359, 1591241161, 1, 12, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4608, '', 'This Layout displays below the common news-article an area where individual content can be added.\r\nAbove the bottom area on the right side is a sidebar for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Bottom area in full width, sidebar right beside news', 'bot-full-right-fit', 'LO-bot-full-right-fit.svg', 2, 0),
(14, 0, 1591287551, 1591241230, 1, 12, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4608, '', 'This Layout displays below the common news-article an area where individual content can be added.\r\nAbove the bottom area on the left and right sides are sidebars for individual content arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Bottom area in full width, sidebars left and right beside news', 'bot-full-left-fit-right-fit', 'LO-bot-full-left-fit-right-fit.svg', 3, 0),
(15, 0, 1591287870, 1591241429, 1, 5, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides a left sidebar in full height.\r\nOn the right side beside is a top area for individual content above the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left sidebar in full height, top area above news', 'left-full-top-fit', 'LO-left-full-top-fit.svg', 2, 0),
(16, 0, 1591288070, 1591241887, 1, 15, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides a left sidebar in full height.\r\nOn the right side beside is a bottom area for individual content below the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left sidebar in full height, bottom area below news', 'left-full-bot-fit', 'LO-left-full-bot-fit.svg', 2, 0),
(17, 0, 1591288442, 1591242026, 1, 15, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides a left sidebar in full height.\r\nOn the right side beside are top and bottom areas for individual content above and below the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left sidebar in full height, top and bottom areas enclose news', 'left-full-top-fit-bot-fit', 'LO-left-full-top-fit-bot-fit.svg', 3, 0),
(18, 0, 1591288583, 1591242262, 1, 15, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides sidebars in full height left and right beside the news.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left and right sidebars in full height', 'left-full-right-full', 'LO-left-full-right-full.svg', 2, 0),
(19, 0, 1591288790, 1591242427, 1, 15, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides left and right sidebars in full height.\r\nBetween is a top area for individual content above the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left and right sidebars in full height, top area above news', 'left-full-right-full-top-fit', 'LO-left-full-right-full-top-fit.svg', 3, 0),
(20, 0, 1591289009, 1591242588, 1, 19, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides left and right sidebars in full height.\r\nBetween is a bottom area for individual content below the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left and right sidebars in full height, bottom area below news', 'left-full-right-full-bot-fit', 'LO-left-full-right-full-bot-fit.svg', 3, 0),
(21, 0, 1591289354, 1591242696, 1, 20, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides left and right sidebars in full height.\r\nBetween are top and bottom area for individual content enclosing the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left and right sidebars in full height, top and bottom areas enclose news', 'left-full-right-full-top-fit-bot-fit', 'LO-left-full-right-full-top-fit-bot-fit.svg', 4, 0),
(22, 0, 1591289728, 1591242968, 1, 15, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides a right sidebar in full height.\r\nOn the left side beside is a top area for individual content above the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Right sidebar in full height, top area above news', 'right-full-top-fit', 'LO-right-full-top-fit.svg', 2, 0),
(23, 0, 1591289844, 1591243056, 1, 16, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides a right sidebar in full height.\r\nOn the left side beside is a bottom area for individual content below the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Right sidebar in full height, bottom area below news', 'right-full-bot-fit', 'LO-right-full-bot-fit.svg', 2, 0),
(24, 0, 1591290079, 1591243312, 1, 17, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 0, 0, 0, 0, 4864, '', 'This Layout provides a right sidebar in full height.\r\nOn the left side beside are top and bottom areas for individual content above and below the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Right sidebar in full height, top and bottom areas enclose news', 'right-full-top-fit-bot-fit', 'LO-right-full-top-fit-bot-fit.svg', 3, 0),
(25, 0, 1591243346, 1591243322, 1, 17, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:10:\"layout_key\";N;s:11:\"description\";N;s:4:\"icon\";N;s:5:\"areas\";N;}', 0, NULL, 1, 0, 0, 0, 4864, '', 'This Layout provides a left sidebar in full height.\r\nOn the right side beside are top and bottom areas for individual content above and below the news arranged.', 0, 0, 0, '', 0, 0, 0, 0, 0, 'Left sidebar in full height, top and bottom areas enclose news', 'left-full-top-fit-bot-fit1', 'LO-left-full-top-fit-bot-fit.svg', 0, 0);

DROP TABLE IF EXISTS `tx_wdbnewssnapin_domain_model_layoutarea`;
CREATE TABLE `tx_wdbnewssnapin_domain_model_layoutarea` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `news` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tstamp` int(11) NOT NULL DEFAULT '0',
  `crdate` int(11) NOT NULL DEFAULT '0',
  `cruser_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `t3ver_state` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_stage` smallint(6) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `t3_origuid` int(11) NOT NULL DEFAULT '0',
  `editlock` smallint(6) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumtext COLLATE utf8mb4_unicode_ci,
  `l10n_source` int(11) NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `deleted` smallint(6) NOT NULL DEFAULT '0',
  `hidden` smallint(6) NOT NULL DEFAULT '0',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `fe_group` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `area_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `news_allowed` smallint(6) NOT NULL DEFAULT '0',
  `icon` text COLLATE utf8mb4_unicode_ci,
  `layout` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tx_wdbnewssnapin_domain_model_layoutarea` (`uid`, `pid`, `title`, `news`, `tstamp`, `crdate`, `cruser_id`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `t3_origuid`, `editlock`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`, `l10n_source`, `l10n_state`, `deleted`, `hidden`, `starttime`, `endtime`, `sorting`, `fe_group`, `area_key`, `description`, `news_allowed`, `icon`, `layout`) VALUES
(1, 0, 'Top area in full width', 0, 1591282896, 1591261587, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'a:6:{s:5:\"title\";N;s:8:\"area_key\";N;s:4:\"icon\";N;s:11:\"description\";N;s:6:\"layout\";N;s:4:\"news\";N;}', 0, NULL, 0, 0, 0, 0, 2816, '0', 'top-full', '', 1, 'LO-top-full/A-top-full.svg', 1),
(2, 0, 'Top area in full width', 0, 1591282873, 1591261783, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'a:6:{s:5:\"title\";N;s:8:\"area_key\";N;s:4:\"icon\";N;s:11:\"description\";N;s:6:\"layout\";N;s:4:\"news\";N;}', 0, NULL, 0, 0, 0, 0, 2688, '0', 'top-full', '', 1, 'LO-top-full-bot-full/A-top-full.svg', 1),
(3, 0, 'Bottom area in full width', 0, 1591282740, 1591281396, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'a:5:{s:5:\"title\";N;s:8:\"area_key\";N;s:4:\"icon\";N;s:11:\"description\";N;s:6:\"layout\";N;}', 0, NULL, 0, 0, 0, 0, 2624, '0', 'bot-full', '', 0, 'LO-top-full-bot-full/A-bot-full.svg', 1),
(4, 0, 'Bottom area in full width', 0, 1591282635, 1591282635, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2592, '0', 'bot-full', '', 0, 'LO-bot-full/A-bot-full.svg', 0),
(5, 0, 'Left beside in full height', 0, 1591283178, 1591283178, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2576, '0', 'left-full', '', 0, 'LO-left-full/A-left-full.svg', 0),
(6, 0, 'Right beside in full height', 0, 1591283422, 1591283422, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2568, '0', 'right-full', '', 0, 'LO-right-full/A-right-full.svg', 0),
(7, 0, 'Top area in full width', 0, 1591283526, 1591283526, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2564, '0', 'top-full', '', 0, 'LO-top-full-left-fit/A-top-full.svg', 0),
(8, 0, 'Sidebar left beside news', 0, 1591283621, 1591283621, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2562, '0', 'left-fit', '', 0, 'LO-top-full-left-fit/A-left-fit.svg', 0),
(9, 0, 'Top area in full width', 0, 1591283755, 1591283755, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2561, '0', 'top-full', '', 0, 'LO-top-full-right-fit/A-top-full.svg', 0),
(10, 0, 'Sidebar right beside news', 0, 1591283791, 1591283791, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2560, '0', 'right-fit', '', 0, 'LO-top-full-right-fit/A-right-fit.svg', 0),
(11, 0, 'Top area in full width', 0, 1591283939, 1591283939, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2304, '0', 'top-full', '', 0, 'LO-top-full-left-fit-right-fit/A-top-full.svg', 0),
(12, 0, 'Sidebar left beside news', 0, 1591284016, 1591284016, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2176, '0', 'left-fit', '', 0, 'LO-top-full-left-fit-right-fit/A-left-fit.svg', 0),
(13, 0, 'Sidebar right beside news', 0, 1591284073, 1591284073, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2112, '0', 'right-fit', '', 0, 'LO-top-full-left-fit-right-fit/A-right-fit.svg', 0),
(14, 0, 'Top area in full width', 0, 1591284888, 1591284888, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2080, '0', 'top-full', '', 0, 'LO-top-full-bot-full-left-fit/A-top-full.svg', 0),
(15, 0, 'Bottom area in full width', 0, 1591284888, 1591284888, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2064, '0', 'bot-full', '', 0, 'LO-top-full-bot-full-left-fit/A-bot-full.svg', 0),
(16, 0, 'Sidebar left beside news', 0, 1591284951, 1591284951, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2056, '0', 'left-fit', '', 0, 'LO-top-full-bot-full-left-fit/A-left-fit.svg', 0),
(17, 0, 'Top area in full width', 0, 1591285101, 1591285101, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2052, '0', 'top-full', '', 0, 'LO-top-full-bot-full-right-fit/A-top-full.svg', 0),
(18, 0, 'Bottom area in full width', 0, 1591285147, 1591285147, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2050, '0', 'bot-full', '', 0, 'LO-top-full-bot-full-right-fit/A-bot-full.svg', 0),
(19, 0, 'Sidebar right beside news', 0, 1591285198, 1591285198, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2049, '0', 'right-fit', '', 0, 'LO-top-full-bot-full-right-fit/A-right-fit.svg', 0),
(20, 0, 'Top area in full width', 0, 1591285894, 1591285894, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 2048, '0', 'top-full', '', 0, 'LO-top-full-bot-full-left-fit-right-fit/A-top-full.svg', 0),
(21, 0, 'Bottom area in full width', 0, 1591286058, 1591286058, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1792, '0', 'bot-full', '', 0, 'LO-top-full-bot-full-left-fit-right-fit/A-bot-full.svg', 0),
(22, 0, 'Sidebar left beside news', 0, 1591286058, 1591286058, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1664, '0', 'left-fit', '', 0, 'LO-top-full-bot-full-left-fit-right-fit/A-left-fit.svg', 0),
(23, 0, 'Sidebar right beside news', 0, 1591286058, 1591286058, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1600, '0', 'right-fit', '', 0, 'LO-top-full-bot-full-left-fit-right-fit/A-right-fit.svg', 0),
(24, 0, 'Bottom area in full width', 0, 1591286418, 1591286418, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1568, '0', 'bot-full', '', 0, 'LO-bot-full-left-fit/A-bot-full.svg', 0),
(25, 0, 'Sidebar left beside news', 0, 1591286485, 1591286485, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1552, '0', 'left-fit', '', 0, 'LO-bot-full-left-fit/A-left-fit.svg', 0),
(26, 0, 'Bottom area in full width', 0, 1591287359, 1591287359, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1544, '0', 'bot-full', '', 0, 'LO-bot-full-right-fit/A-bot-full.svg', 0),
(27, 0, 'Sidebar right beside news', 0, 1591287359, 1591287359, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1540, '0', 'right-fit', '', 0, 'LO-bot-full-right-fit/A-right-fit.svg', 0),
(28, 0, 'Bottom area in full width', 0, 1591287463, 1591287463, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1538, '0', 'bot-full', '', 0, 'LO-bot-full-left-fit-right-fit/A-bot-full.svg', 0),
(29, 0, 'Sidebar left beside news', 0, 1591287551, 1591287551, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1537, '0', 'left-fit', '', 0, 'LO-bot-full-left-fit-right-fit/A-left-fit.svg', 0),
(30, 0, 'Sidebar right beside news', 0, 1591287551, 1591287551, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1536, '0', 'right-fit', '', 0, 'LO-bot-full-left-fit-right-fit/A-right-fit.svg', 0),
(31, 0, 'Left sidebar in full height', 0, 1591287870, 1591287870, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1280, '0', 'left-full', '', 0, 'LO-left-full-top-fit/A-left-full.svg', 0),
(32, 0, 'Top area above news', 0, 1591287870, 1591287870, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1152, '0', 'top-fit', '', 0, 'LO-left-full-top-fit/A-top-fit.svg', 0),
(33, 0, 'Left sidebar in full height', 0, 1591288070, 1591288070, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1088, '0', 'left-full', '', 0, 'LO-left-full-bot-fit/A-left-full.svg', 0),
(34, 0, 'Bottom area below news', 0, 1591288070, 1591288070, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1056, '0', 'bot-fit', '', 0, 'LO-left-full-bot-fit/A-bot-fit.svg', 0),
(35, 0, 'Left sidebar in full height', 0, 1591288442, 1591288442, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1040, '0', 'left-full', '', 0, 'LO-left-full-top-fit-bot-fit/A-left-full.svg', 0),
(36, 0, 'Top area above news', 0, 1591288442, 1591288442, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1032, '0', 'top-fit', '', 0, 'LO-left-full-top-fit-bot-fit/A-top-fit.svg', 0),
(37, 0, 'Bottom area below news', 0, 1591288442, 1591288442, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1028, '0', 'bot-fit', '', 0, 'LO-left-full-top-fit-bot-fit/A-bot-fit.svg', 0),
(38, 0, 'Left sidebar in full height', 0, 1591288583, 1591288583, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1026, '0', 'left-full', '', 0, 'LO-left-full-right-full/A-left-full.svg', 0),
(39, 0, 'Right sidebar in full height', 0, 1591288583, 1591288583, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1025, '0', 'right-full', '', 0, 'LO-left-full-right-full/A-right-full.svg', 0),
(40, 0, 'Left sidebar in full height', 0, 1591288742, 1591288742, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 1024, '0', 'left-full', '', 0, 'LO-left-full-right-full-top-fit-bot-fit/A-left-full.svg', 0),
(41, 0, 'Right sidebar in full height', 0, 1591288742, 1591288742, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 768, '0', 'right-full', '', 0, 'LO-left-full-right-full-top-fit/A-right-full.svg', 0),
(42, 0, 'Top area above news', 0, 1591288790, 1591288790, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 640, '0', 'top-fit', '', 0, 'LO-left-full-right-full-top-fit/A-top-fit.svg', 0),
(43, 0, 'Left sidebar in full height', 0, 1591289009, 1591289009, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 576, '0', 'left-full', '', 0, 'LO-left-full-right-full-bot-fit/A-left-full.svg', 0),
(44, 0, 'Right sidebar in full height', 0, 1591289009, 1591289009, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 544, '0', 'right-full', '', 0, 'LO-left-full-right-full-bot-fit/A-right-full.svg', 0),
(45, 0, 'Bottom area below news', 0, 1591289009, 1591289009, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 528, '0', 'bot-fit', '', 0, 'LO-left-full-right-full-bot-fit/A-bot-fit.svg', 0),
(46, 0, 'Left sidebar in full height', 0, 1591289354, 1591289354, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 520, '0', 'left-full', '', 0, 'LO-left-full-right-full-top-fit-bot-fit/A-left-full.svg', 0),
(47, 0, 'Right sidebar in full height', 0, 1591289354, 1591289354, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 516, '0', 'right-full', '', 0, 'LO-left-full-right-full-top-fit-bot-fit/A-right-full.svg', 0),
(48, 0, 'Top area above news', 0, 1591289354, 1591289354, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 514, '0', 'top-fit', '', 0, 'LO-left-full-right-full-top-fit-bot-fit/A-top-fit.svg', 0),
(49, 0, 'Bottom area below news', 0, 1591289354, 1591289354, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 513, '0', 'bot-fit', '', 0, 'LO-left-full-right-full-top-fit-bot-fit/A-bot-fit.svg', 0),
(50, 0, 'Right sidebar in full height', 0, 1591289728, 1591289728, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 512, '0', 'right-full', '', 0, 'LO-right-full-top-fit/A-right-full.svg', 0),
(51, 0, 'Top area above news', 0, 1591289728, 1591289728, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 256, '0', 'top-fit', '', 0, 'LO-right-full-top-fit/A-top-fit.svg', 0),
(52, 0, 'Right sidebar in full height', 0, 1591289844, 1591289844, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 128, '0', 'right-full', '', 0, 'LO-right-full-bot-fit/A-right-full.svg', 0),
(53, 0, 'Bottom area below news', 0, 1591289844, 1591289844, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 64, '0', 'bot-fit', '', 0, 'LO-right-full-bot-fit/A-bot-fit.svg', 0),
(54, 0, 'Right sidebar in full height', 0, 1591290079, 1591290079, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 32, '0', 'right-full', '', 0, 'LO-right-full-top-fit-bot-fit/A-right-full.svg', 0),
(55, 0, 'Top area above news', 1, 1591797367, 1591290079, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'a:6:{s:5:\"title\";N;s:8:\"area_key\";N;s:4:\"icon\";N;s:11:\"description\";N;s:6:\"layout\";N;s:4:\"news\";N;}', 0, NULL, 0, 0, 0, 0, 16, '0', 'top-fit', '', 0, 'LO-right-full-top-fit-bot-fit/A-top-fit.svg', 1),
(56, 0, 'Bottom area below news', 0, 1591548570, 1591290079, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, NULL, 0, 0, 0, 0, 24, '0', 'bot-fit', '', 0, 'LO-right-full-top-fit-bot-fit/A-bot-fit.svg', 0);

DROP TABLE IF EXISTS `tx_wdbnewssnapin_layout_layoutarea_mm`;
CREATE TABLE `tx_wdbnewssnapin_layout_layoutarea_mm` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `uid_layoutarea` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `uid_layout` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_layoutarea` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_layout` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumtext COLLATE utf8mb4_unicode_ci,
  `l10n_source` int(11) NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tx_wdbnewssnapin_layout_layoutarea_mm` (`uid`, `pid`, `uid_layoutarea`, `uid_layout`, `sorting_layoutarea`, `sorting_layout`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`, `l10n_source`, `l10n_state`) VALUES
(1, 0, 1, 1, 1, 1, 0, 0, NULL, 0, NULL),
(2, 0, 2, 8, 1, 1, 0, 0, NULL, 0, NULL),
(3, 0, 3, 8, 1, 2, 0, 0, NULL, 0, NULL),
(4, 0, 4, 2, 0, 1, 0, 0, NULL, 0, NULL),
(5, 0, 5, 3, 0, 1, 0, 0, NULL, 0, NULL),
(6, 0, 6, 4, 0, 1, 0, 0, NULL, 0, NULL),
(7, 0, 7, 5, 0, 1, 0, 0, NULL, 0, NULL),
(8, 0, 8, 5, 0, 2, 0, 0, NULL, 0, NULL),
(9, 0, 9, 6, 0, 1, 0, 0, 'a:2:{s:10:\"uid_layout\";N;s:14:\"uid_layoutarea\";N;}', 0, NULL),
(10, 0, 10, 6, 0, 2, 0, 0, NULL, 0, NULL),
(11, 0, 11, 7, 0, 1, 0, 0, NULL, 0, NULL),
(12, 0, 12, 7, 0, 2, 0, 0, NULL, 0, NULL),
(13, 0, 13, 7, 0, 3, 0, 0, NULL, 0, NULL),
(14, 0, 14, 9, 0, 1, 0, 0, NULL, 0, NULL),
(15, 0, 15, 9, 0, 2, 0, 0, NULL, 0, NULL),
(16, 0, 16, 9, 0, 3, 0, 0, NULL, 0, NULL),
(17, 0, 17, 10, 0, 1, 0, 0, NULL, 0, NULL),
(18, 0, 18, 10, 0, 2, 0, 0, NULL, 0, NULL),
(19, 0, 19, 10, 0, 3, 0, 0, NULL, 0, NULL),
(20, 0, 20, 11, 0, 1, 0, 0, NULL, 0, NULL),
(21, 0, 21, 11, 0, 2, 0, 0, NULL, 0, NULL),
(22, 0, 22, 11, 0, 3, 0, 0, NULL, 0, NULL),
(23, 0, 23, 11, 0, 4, 0, 0, NULL, 0, NULL),
(24, 0, 24, 12, 0, 1, 0, 0, NULL, 0, NULL),
(25, 0, 25, 12, 0, 2, 0, 0, NULL, 0, NULL),
(26, 0, 26, 13, 0, 1, 0, 0, NULL, 0, NULL),
(27, 0, 27, 13, 0, 2, 0, 0, NULL, 0, NULL),
(28, 0, 28, 14, 0, 1, 0, 0, NULL, 0, NULL),
(29, 0, 29, 14, 0, 2, 0, 0, NULL, 0, NULL),
(30, 0, 30, 14, 0, 3, 0, 0, NULL, 0, NULL),
(31, 0, 31, 15, 0, 1, 0, 0, NULL, 0, NULL),
(32, 0, 32, 15, 0, 2, 0, 0, NULL, 0, NULL),
(33, 0, 33, 16, 0, 1, 0, 0, NULL, 0, NULL),
(34, 0, 34, 16, 0, 2, 0, 0, NULL, 0, NULL),
(35, 0, 35, 17, 0, 1, 0, 0, NULL, 0, NULL),
(36, 0, 36, 17, 0, 2, 0, 0, NULL, 0, NULL),
(37, 0, 37, 17, 0, 3, 0, 0, NULL, 0, NULL),
(38, 0, 38, 18, 0, 1, 0, 0, NULL, 0, NULL),
(39, 0, 39, 18, 0, 2, 0, 0, NULL, 0, NULL),
(40, 0, 40, 19, 0, 1, 0, 0, NULL, 0, NULL),
(41, 0, 41, 19, 0, 2, 0, 0, NULL, 0, NULL),
(42, 0, 42, 19, 0, 3, 0, 0, NULL, 0, NULL),
(43, 0, 43, 20, 0, 1, 0, 0, NULL, 0, NULL),
(44, 0, 44, 20, 0, 2, 0, 0, NULL, 0, NULL),
(45, 0, 45, 20, 0, 3, 0, 0, NULL, 0, NULL),
(46, 0, 46, 21, 0, 1, 0, 0, NULL, 0, NULL),
(47, 0, 47, 21, 0, 2, 0, 0, NULL, 0, NULL),
(48, 0, 48, 21, 0, 3, 0, 0, NULL, 0, NULL),
(49, 0, 49, 21, 0, 4, 0, 0, NULL, 0, NULL),
(50, 0, 50, 22, 0, 1, 0, 0, NULL, 0, NULL),
(51, 0, 51, 22, 0, 2, 0, 0, NULL, 0, NULL),
(52, 0, 52, 23, 0, 1, 0, 0, NULL, 0, NULL),
(53, 0, 53, 23, 0, 2, 0, 0, NULL, 0, NULL),
(54, 0, 54, 24, 0, 1, 0, 0, NULL, 0, NULL),
(55, 0, 55, 24, 1, 2, 0, 0, NULL, 0, NULL),
(56, 0, 56, 24, 0, 3, 0, 0, NULL, 0, NULL);

DROP TABLE IF EXISTS `tx_wdbnewssnapin_news_ttcontent_mm`;
CREATE TABLE `tx_wdbnewssnapin_news_ttcontent_mm` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sorting_news` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_ttcontent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `uid_news` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `uid_ttcontent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `layout_area` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumtext COLLATE utf8mb4_unicode_ci,
  `l10n_source` int(11) NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm`;
CREATE TABLE `tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumtext COLLATE utf8mb4_unicode_ci,
  `l10n_source` int(11) NOT NULL DEFAULT '0',
  `l10n_state` text COLLATE utf8mb4_unicode_ci,
  `uid_relation` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `uid_area` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_relation` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_area` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `uid_layoutarea` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sorting_layoutarea` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `uid_layout` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `tx_wdbnewssnapin_domain_model_layout`
  ADD PRIMARY KEY (`uid`);

ALTER TABLE `tx_wdbnewssnapin_domain_model_layoutarea`
  ADD PRIMARY KEY (`uid`);

ALTER TABLE `tx_wdbnewssnapin_layout_layoutarea_mm`
  ADD PRIMARY KEY (`uid`);

ALTER TABLE `tx_wdbnewssnapin_news_ttcontent_mm`
  ADD PRIMARY KEY (`uid`);

ALTER TABLE `tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm`
  ADD PRIMARY KEY (`uid`);


ALTER TABLE `tx_wdbnewssnapin_domain_model_layout`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tx_wdbnewssnapin_domain_model_layoutarea`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tx_wdbnewssnapin_layout_layoutarea_mm`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tx_wdbnewssnapin_news_ttcontent_mm`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
