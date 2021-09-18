--
-- Table structure for table 'tx_news_domain_model_news'
--
CREATE TABLE tx_news_domain_model_news (
    `tx_wdbnewssnapin_layout` int(11) NOT NULL DEFAULT 0,
    `tx_wdbnewssnapin_ttcontent` int(11) NOT NULL DEFAULT 0,
);

--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    `tx_wdbnewssnapin_layout` int(11) NOT NULL DEFAULT 0,
    `tx_wdbnewssnapin_news` int(11) NOT NULL DEFAULT 0,
    `tx_wdbnewssnapin_table` varchar(100) NOT NULL DEFAULT '',
);

--
-- Table structure for table 'tx_wdbnewssnapin_domain_model_layout'
--
CREATE TABLE `tx_wdbnewssnapin_domain_model_layout` (
    `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `pid` int(11) NOT NULL DEFAULT 0,
    `tstamp` int(11) NOT NULL DEFAULT 0,
    `crdate` int(11) NOT NULL DEFAULT 0,
    `cruser_id` int(11) NOT NULL DEFAULT 0,
    `t3_origuid` int(11) NOT NULL DEFAULT 0,
    `sys_language_uid` int(11) NOT NULL DEFAULT 0,
    `l10n_parent` int(11) NOT NULL DEFAULT 0,
    `l10n_diffsource` mediumtext DEFAULT NULL,
    `l10n_source` int(11) NOT NULL DEFAULT 0,
    `l10n_state` text DEFAULT NULL,
    `deleted` smallint(6) NOT NULL DEFAULT 0,
    `hidden` smallint(6) NOT NULL DEFAULT 0,
    `starttime` int(11) NOT NULL DEFAULT 0,
    `endtime` int(11) NOT NULL DEFAULT 0,
    `sorting` int(11) NOT NULL DEFAULT 0,
    `fe_group` varchar(100) NOT NULL DEFAULT '0',
    `description` text DEFAULT NULL,
    `t3ver_oid` int(11) NOT NULL DEFAULT 0,
    `t3ver_id` int(11) NOT NULL DEFAULT 0,
    `t3ver_wsid` int(11) NOT NULL DEFAULT 0,
    `t3ver_label` varchar(30) NOT NULL DEFAULT '',
    `t3ver_state` smallint(6) NOT NULL DEFAULT 0,
    `t3ver_stage` smallint(6) NOT NULL DEFAULT 0,
    `t3ver_count` int(11) NOT NULL DEFAULT 0,
    `t3ver_tstamp` int(11) NOT NULL DEFAULT 0,
    `t3ver_move_id` int(11) NOT NULL DEFAULT 0,
    `editlock` smallint(6) NOT NULL DEFAULT 0,

    `title` varchar(255) NOT NULL DEFAULT '',
    `layout_key` varchar(255) NOT NULL DEFAULT '0',
    `icon` text DEFAULT NULL,
    `news` int(11) NOT NULL DEFAULT 0,
    `layout_area` int(11) NOT NULL DEFAULT 0,

    PRIMARY KEY (`uid`),
    KEY `parent` (`pid`,`deleted`,`hidden`),
    KEY `translation_source` (`l10n_source`)
);

--
-- Table structure for table 'tx_wdbnewssnapin_domain_model_layoutarea'
--
CREATE TABLE `tx_wdbnewssnapin_domain_model_layoutarea` (
    `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `pid` int(11) NOT NULL DEFAULT 0,
    `tstamp` int(11) NOT NULL DEFAULT 0,
    `crdate` int(11) NOT NULL DEFAULT 0,
    `cruser_id` int(11) NOT NULL DEFAULT 0,
    `t3_origuid` int(11) NOT NULL DEFAULT 0,
    `editlock` smallint(6) NOT NULL DEFAULT 0,
    `sys_language_uid` int(11) NOT NULL DEFAULT 0,
    `l10n_parent` int(11) NOT NULL DEFAULT 0,
    `l10n_diffsource` mediumtext DEFAULT NULL,
    `l10n_source` int(11) NOT NULL DEFAULT 0,
    `l10n_state` text DEFAULT NULL,
    `deleted` smallint(6) NOT NULL DEFAULT 0,
    `hidden` smallint(6) NOT NULL DEFAULT 0,
    `starttime` int(11) NOT NULL DEFAULT 0,
    `endtime` int(11) NOT NULL DEFAULT 0,
    `sorting` int(11) NOT NULL DEFAULT 0,
    `fe_group` varchar(100) NOT NULL DEFAULT '0',
    `description` text DEFAULT NULL,
    `t3ver_oid` int(11) NOT NULL DEFAULT 0,
    `t3ver_id` int(11) NOT NULL DEFAULT 0,
    `t3ver_wsid` int(11) NOT NULL DEFAULT 0,
    `t3ver_label` varchar(30) NOT NULL DEFAULT '',
    `t3ver_state` smallint(6) NOT NULL DEFAULT 0,
    `t3ver_stage` smallint(6) NOT NULL DEFAULT 0,
    `t3ver_count` int(11) NOT NULL DEFAULT 0,
    `t3ver_tstamp` int(11) NOT NULL DEFAULT 0,
    `t3ver_move_id` int(11) NOT NULL DEFAULT 0,

    `title` varchar(255) NOT NULL DEFAULT '',
    `area_key` varchar(255) NOT NULL DEFAULT '0',
    `news_allowed` smallint(6) NOT NULL DEFAULT 0,
    `layout` int(11) NOT NULL DEFAULT 0,
    `icon` text DEFAULT NULL,
    `news` int(11) NOT NULL DEFAULT 0,

    PRIMARY KEY (`uid`),
    KEY `parent` (`pid`,`deleted`,`hidden`),
    KEY `translation_source` (`l10n_source`)
);

--
-- Table structure for table 'tx_wdbnewssnapin_news_ttcontent_mm'
--
CREATE TABLE `tx_wdbnewssnapin_ttcontent_news_mm` (
    `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `pid` int(11) NOT NULL DEFAULT 0,
    `sys_language_uid` int(11) NOT NULL DEFAULT 0,
    `l10n_parent` int(11) NOT NULL DEFAULT 0,
    `l10n_diffsource` mediumtext DEFAULT NULL,
    `l10n_source` int(11) NOT NULL DEFAULT 0,
    `l10n_state` text DEFAULT NULL,
    `deleted` smallint(6) NOT NULL DEFAULT 0,
    `hidden` smallint(6) NOT NULL DEFAULT 0,

    `uid_news` int(11) NOT NULL DEFAULT 0,
    `uid_ttcontent` int(11) NOT NULL DEFAULT 0,
    `sorting_news` int(11) NOT NULL DEFAULT 0,
    `sorting_ttcontent` int(11) NOT NULL DEFAULT 0,
    `layout_area` int(11) NOT NULL DEFAULT 0,

    PRIMARY KEY (`uid`),
    KEY `parent` (`pid`),
    KEY `translation_source` (`l10n_source`)
);

--
-- Table structure for table 'tx_wdbnewssnapin_news_ttcontent_mm'
--
CREATE TABLE `tx_wdbnewssnapin_news_ttcontent_mm` (
    `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `pid` int(11) NOT NULL DEFAULT 0,
    `sys_language_uid` int(11) NOT NULL DEFAULT 0,
    `l10n_parent` int(11) NOT NULL DEFAULT 0,
    `l10n_diffsource` mediumtext DEFAULT NULL,
    `l10n_source` int(11) NOT NULL DEFAULT 0,
    `l10n_state` text DEFAULT NULL,
    `deleted` smallint(6) NOT NULL DEFAULT 0,
    `hidden` smallint(6) NOT NULL DEFAULT 0,

    `uid_news` int(11) NOT NULL DEFAULT 0,
    `uid_ttcontent` int(11) NOT NULL DEFAULT 0,
    `sorting_news` int(11) NOT NULL DEFAULT 0,
    `sorting_ttcontent` int(11) NOT NULL DEFAULT 0,
    `layout_area` int(11) NOT NULL DEFAULT 0,

    PRIMARY KEY (`uid`),
    KEY `parent` (`pid`),
    KEY `translation_source` (`l10n_source`)
);

--
-- Table structure for table 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm'
--
CREATE TABLE `tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm` (
    `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `pid` int(11) NOT NULL DEFAULT 0,
    `sys_language_uid` int(11) NOT NULL DEFAULT 0,
    `l10n_parent` int(11) NOT NULL DEFAULT 0,
    `l10n_diffsource` mediumtext DEFAULT NULL,
    `l10n_source` int(11) NOT NULL DEFAULT 0,
    `l10n_state` text DEFAULT NULL,
    `deleted` smallint(6) NOT NULL DEFAULT 0,
    `hidden` smallint(6) NOT NULL DEFAULT 0,

    `uid_relation` int(11) NOT NULL DEFAULT 0,
    `uid_layout` int(11) NOT NULL DEFAULT 0,
    `uid_layoutarea` int(11) NOT NULL DEFAULT 0,
    `sorting_relation` int(11) NOT NULL DEFAULT 0,
    `sorting_layoutarea` int(11) NOT NULL DEFAULT 0,
    `uid_area` int(11) NOT NULL DEFAULT 0,
    `sorting_area` int(11) NOT NULL DEFAULT 0,

    PRIMARY KEY (`uid`),
    KEY `parent` (`pid`),
    KEY `translation_source` (`l10n_source`)
);

--
-- Table structure for table 'tx_wdbnewssnapin_layout_layoutarea_mm'
--
CREATE TABLE `tx_wdbnewssnapin_layout_layoutarea_mm` (
    `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `pid` int(11) NOT NULL DEFAULT 0,
    `sys_language_uid` int(11) NOT NULL DEFAULT 0,
    `l10n_parent` int(11) NOT NULL DEFAULT 0,
    `l10n_diffsource` mediumtext DEFAULT NULL,
    `l10n_source` int(11) NOT NULL DEFAULT 0,
    `l10n_state` text DEFAULT NULL,
    `t3_origuid` int(10) UNSIGNED NOT NULL DEFAULT 0,
    `deleted` smallint(6) NOT NULL DEFAULT 0,
    `hidden` smallint(6) NOT NULL DEFAULT 0,

    `uid_layoutarea` int(11) NOT NULL DEFAULT 0,
    `uid_layout` int(11) NOT NULL DEFAULT 0,
    `sorting_layoutarea` int(11) NOT NULL DEFAULT 0,
    `sorting_layout` int(11) NOT NULL DEFAULT 0,

    PRIMARY KEY (`uid`),
    KEY `parent` (`pid`),
    KEY `translation_source` (`l10n_source`)
);
