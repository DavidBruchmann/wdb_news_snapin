--
-- Table structure for table 'tx_news_domain_model_news'
--
CREATE TABLE tx_news_domain_model_news (
    tx_wdbnewssnapin_ttcontent int(11) unsigned DEFAULT '0' NOT NULL,
	tx_wdbnewssnapin_layout int(11) unsigned DEFAULT '0' NOT NULL
);

--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    tx_wdbnewssnapin_news varchar(255) DEFAULT '' NOT NULL
);

--
-- Table structure for table 'tx_wdbnewssnapin_domain_model_layout'
--
CREATE TABLE tx_wdbnewssnapin_domain_model_layout (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,
	editlock tinyint(4) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	l10n_source int(11) DEFAULT '0' NOT NULL,
    l10n_state text,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	fe_group varchar(100) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    layout_key varchar(255) DEFAULT '0' NOT NULL,
    description text,
    icon text,
	news int(11) unsigned DEFAULT '0' NOT NULL,
	layout_area int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid)
);

--
-- Table structure for table 'tx_wdbnewssnapin_domain_model_layoutarea'
--
CREATE TABLE tx_wdbnewssnapin_domain_model_layoutarea (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(30) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,
	editlock tinyint(4) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	l10n_source int(11) DEFAULT '0' NOT NULL,
    l10n_state text,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	starttime int(11) DEFAULT '0' NOT NULL,
	endtime int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	fe_group varchar(100) DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    area_key varchar(255) DEFAULT '0' NOT NULL,
    description text,
    news_allowed tinyint(4) DEFAULT '0' NOT NULL,
	layout int(11) unsigned DEFAULT '0' NOT NULL,
    icon text,
	news int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid)
);

--
-- Table structure for table 'tx_wdbnewssnapin_news_ttcontent_mm'
--
CREATE TABLE tx_wdbnewssnapin_news_ttcontent_mm (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	l10n_source int(11) DEFAULT '0' NOT NULL,
    l10n_state text,

	uid_news int(11) unsigned DEFAULT '0' NOT NULL,
	uid_ttcontent int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_news int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_ttcontent int(11) unsigned DEFAULT '0' NOT NULL,
    layout_area int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid)
);

--
-- Table structure for table 'tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm'
--
CREATE TABLE tx_wdbnewssnapin_news_ttcontent_relation_layoutarea_mm (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	l10n_source int(11) DEFAULT '0' NOT NULL,
    l10n_state text,

    uid_relation int(11) unsigned DEFAULT '0' NOT NULL,
	uid_layout int(11) unsigned DEFAULT '0' NOT NULL,
	uid_layoutarea int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_relation int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_layoutarea int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid)
);

--
-- Table structure for table 'tx_wdbnewssnapin_layout_layoutarea_mm'
--
CREATE TABLE tx_wdbnewssnapin_layout_layoutarea_mm (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumtext,
	l10n_source int(11) DEFAULT '0' NOT NULL,
    l10n_state text,

	uid_layoutarea int(11) unsigned DEFAULT '0' NOT NULL,
	uid_layout int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_layoutarea int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_layout int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid)
);
