--
-- Table structure for table 'tx_news_domain_model_news '
--
CREATE TABLE tx_news_domain_model_news (
        tx_wdbnewssnapin_ttcontent varchar(255) DEFAULT '' NOT NULL
);
--
-- Table structure for table 'tx_news_domain_model_news '
--
CREATE TABLE tt_content (
        tx_wdbnewssnapin_news varchar(255) DEFAULT '' NOT NULL
);

-- ########## SQL-Snippets for mm-TABLES ##########

--
-- Table structure for table 'tx_wdbnewssnapin_news_ttcontent_mm'
--
CREATE TABLE tx_wdbnewssnapin_news_ttcontent_mm (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	uid_news int(11) unsigned DEFAULT '0' NOT NULL,
	uid_ttcontent int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_news int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_ttcontent int(11) unsigned DEFAULT '0' NOT NULL,
    ttcontent_area varchar(255) DEFAULT '' NOT NULL,
    ttcontent_type varchar(255) DEFAULT '' NOT NULL,

	PRIMARY KEY (uid)
);

-- ########## SQL-Snippets for mm-TABLES with tt_content (for FlexForms) ##########

--
-- Table structure for table 'tx_wdbnewssnapin_ttcontent_news_ttcontent_mm'
--
-- CREATE TABLE tx_wdbnewssnapin_ttcontent_news_ttcontent_mm (
--	uid int(11) NOT NULL auto_increment,
--	pid int(11) DEFAULT '0' NOT NULL,
--	uid_ttcontent_local int(11) unsigned DEFAULT '0' NOT NULL,
--	uid_ttcontent_foreign int(11) unsigned DEFAULT '0' NOT NULL,
--	sorting int(11) unsigned DEFAULT '0' NOT NULL,
--
--	PRIMARY KEY (uid)
-- );

