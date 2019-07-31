#
# Table structure for table 'tx_rkwmanagementconsultancy_domain_model_supportprogramme'
#
CREATE TABLE tx_rkwmanagementconsultancy_domain_model_supportprogramme (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	consulting int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_rkwmanagementconsultancy_domain_model_consulting'
#
CREATE TABLE tx_rkwmanagementconsultancy_domain_model_consulting (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	duration int(11) DEFAULT '0' NOT NULL,

	support_programme int(11) unsigned DEFAULT '0' NOT NULL,

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
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_rkwmanagementconsultancy_domain_model_supportrequest'
#
CREATE TABLE tx_rkwmanagementconsultancy_domain_model_supportrequest (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	is_start_up int(11) DEFAULT '0' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	zip int(11) DEFAULT '0' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	foundation_date varchar(255) DEFAULT '' NOT NULL,
	revenue varchar(255) DEFAULT '' NOT NULL,
	balance_sum varchar(255) DEFAULT '' NOT NULL,
	number_of_employees int(11) DEFAULT '0' NOT NULL,
	manager_name varchar(255) DEFAULT '' NOT NULL,
	sole_representation int(11) DEFAULT '0' NOT NULL,
	deduction_right int(11) DEFAULT '0' NOT NULL,
	business_purpose varchar(255) DEFAULT '' NOT NULL,
	company_shares varchar(255) DEFAULT '' NOT NULL,
	principle_bank varchar(255) DEFAULT '' NOT NULL,
	bic varchar(255) DEFAULT '' NOT NULL,
	iban varchar(255) DEFAULT '' NOT NULL,
	contact_person_name varchar(255) DEFAULT '' NOT NULL,
	contact_person_phone varchar(255) DEFAULT '' NOT NULL,
	contact_person_fax varchar(255) DEFAULT '' NOT NULL,
	contact_person_mobile varchar(255) DEFAULT '' NOT NULL,
	contact_person_email varchar(255) DEFAULT '' NOT NULL,
	start_up_foundation_date int(11) unsigned DEFAULT '0' NOT NULL,
	start_up_employment_status_before int(11) DEFAULT '0' NOT NULL,
	start_up_independent_work int(11) DEFAULT '0' NOT NULL,
	entire_consultation_phase int(11) DEFAULT '0' NOT NULL,
	consulting_date_from varchar(255) DEFAULT '' NOT NULL,
	consulting_date_up_to varchar(255) DEFAULT '' NOT NULL,
	consulting_description text NOT NULL,
	consultant_type int(11) DEFAULT '0' NOT NULL,
	consultant_company varchar(255) DEFAULT '' NOT NULL,
	consultant_name1 varchar(255) DEFAULT '' NOT NULL,
	consultant_name2 varchar(255) DEFAULT '' NOT NULL,
	consultant1_accreditation_number varchar(255) DEFAULT '' NOT NULL,
	consultant2_accreditation_number varchar(255) DEFAULT '' NOT NULL,
	consultant_fee varchar(255) DEFAULT '' NOT NULL,
	consultant_phone varchar(255) DEFAULT '' NOT NULL,
	consultant_email varchar(255) DEFAULT '' NOT NULL,
	early_start_desired int(11) DEFAULT '0' NOT NULL,
	send_documents_allowed int(11) DEFAULT '0' NOT NULL,
	support_programme int(11) unsigned DEFAULT '0',
	consulting int(11) unsigned DEFAULT '0',
	company_type int(11) unsigned DEFAULT '0',
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

#
# Table structure for table 'tx_rkwmanagementconsultancy_supportprogramme_consulting_mm'
#
CREATE TABLE tx_rkwmanagementconsultancy_supportprogramme_consulting_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
