#
# Table structure for table 'tx_rkwmanagementconsultancy_domain_model_supportrequest'
#
CREATE TABLE tx_rkwmanagementconsultancy_domain_model_supportrequest (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	support_programme int(11) unsigned DEFAULT '0',

	name varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	zip int(11) DEFAULT '0' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
    foundation_date int(11) unsigned DEFAULT '0' NOT NULL,
	citizenship varchar(255) DEFAULT '' NOT NULL,
    birthdate int(11) unsigned DEFAULT '0' NOT NULL,
	foundation_location varchar(255) DEFAULT '' NOT NULL,
	company_type int(11) unsigned DEFAULT '0',
	balance varchar(255) DEFAULT '' NOT NULL,
	sales varchar(255) DEFAULT '' NOT NULL,
	employees_count int(11) DEFAULT '0' NOT NULL,
	manager varchar(255) DEFAULT '' NOT NULL,
    single_representative tinyint(1) unsigned DEFAULT '0' NOT NULL,
    pre_tax_deduction tinyint(1) unsigned DEFAULT '0' NOT NULL,
	business_purpose varchar(255) DEFAULT '' NOT NULL,
    insolvency_proceedings tinyint(1) unsigned DEFAULT '0' NOT NULL,
	chamber int(11) DEFAULT '0' NOT NULL,
	company_shares varchar(255) DEFAULT '' NOT NULL,
	principal_bank varchar(255) DEFAULT '' NOT NULL,
	bic varchar(255) DEFAULT '' NOT NULL,
	iban varchar(255) DEFAULT '' NOT NULL,
	contact_person_first_name varchar(255) DEFAULT '' NOT NULL,
	contact_person_last_name varchar(255) DEFAULT '' NOT NULL,
	contact_person_phone varchar(255) DEFAULT '' NOT NULL,
	contact_person_fax varchar(255) DEFAULT '' NOT NULL,
	contact_person_mobile varchar(255) DEFAULT '' NOT NULL,
	contact_person_email varchar(255) DEFAULT '' NOT NULL,
	pre_foundation_employment int(11) DEFAULT '0' NOT NULL,
	pre_foundation_self_employment int(11) DEFAULT '0' NOT NULL,

	consulting int(11) unsigned DEFAULT '0',
	consulting_days int(11) DEFAULT '0' NOT NULL,
	consulting_date_from int(11) unsigned DEFAULT '0' NOT NULL,
	consulting_date_to int(11) unsigned DEFAULT '0' NOT NULL,
	consulting_content text NOT NULL,

	consultant_type int(11) DEFAULT '0' NOT NULL,
	consultant_company varchar(255) DEFAULT '' NOT NULL,
	consultant_name1 varchar(255) DEFAULT '' NOT NULL,
	consultant1_accreditation_number varchar(255) DEFAULT '' NOT NULL,
	consultant_name2 varchar(255) DEFAULT '' NOT NULL,
	consultant2_accreditation_number varchar(255) DEFAULT '' NOT NULL,
	consultant_fee varchar(255) DEFAULT '' NOT NULL,
	consultant_phone varchar(255) DEFAULT '' NOT NULL,
	consultant_email varchar(255) DEFAULT '' NOT NULL,

    premature_start tinyint(1) unsigned DEFAULT '0' NOT NULL,
	send_documents int(11) DEFAULT '0' NOT NULL,
    bafa_support tinyint(1) unsigned DEFAULT '0' NOT NULL,

	privacy tinyint(4) unsigned DEFAULT '0' NOT NULL,
	terms tinyint(4) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

