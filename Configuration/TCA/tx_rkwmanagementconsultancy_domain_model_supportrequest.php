<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'is_start_up,name,address,zip,city,foundation_date,revenue,balance_sum,number_of_employees,manager_name,sole_representation,deduction_right,business_purpose,company_shares,principle_bank,bic,iban,contact_person_name,contact_person_phone,contact_person_fax,contact_person_mobile,contact_person_email,start_up_foundation_date,start_up_employment_status_before,start_up_independent_work,entire_consultation_phase,consulting_date_from,consulting_date_up_to,consulting_description,consultant_type,consultant_company,consultant_name1,consultant1_accreditation_number,consultant_name2,consultant2_accreditation_number,consultant_fee,consultant_phone,consultant_email,early_start_desired,send_documents_allowed,support_programme,consulting,company_type',
        'iconfile' => 'EXT:rkw_management_consultancy/Resources/Public/Icons/tx_rkwmanagementconsultancy_domain_model_supportrequest.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, is_start_up, name, address, zip, city, foundation_date, revenue, balance_sum, number_of_employees, manager_name, sole_representation, deduction_right, business_purpose, company_shares, principle_bank, bic, iban, contact_person_name, contact_person_phone, contact_person_fax, contact_person_mobile, contact_person_email, start_up_foundation_date, start_up_employment_status_before, start_up_independent_work, entire_consultation_phase, consulting_date_from, consulting_date_up_to, consulting_description, consultant_type, consultant_company, consultant_name1, consultant1_accreditation_number, consultant_name2, consultant2_accreditation_number, consultant_fee, consultant_phone, consultant_email, early_start_desired, send_documents_allowed, support_programme, consulting, company_type',
    ],
    'types' => [
        '1' => [
            'showitem' => '
            sys_language_uid, l10n_parent, l10n_diffsource, hidden, 
            support_programme, is_start_up, name, address, zip, city, foundation_date, revenue, balance_sum, number_of_employees, company_type, manager_name, sole_representation, deduction_right, business_purpose, company_shares, principle_bank, bic, iban, contact_person_name, contact_person_phone, contact_person_fax, contact_person_mobile, contact_person_email, start_up_foundation_date, start_up_employment_status_before, start_up_independent_work, 
            
             --div--;LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.tab.typeOfConsultation,
            entire_consultation_phase, consulting_date_from, consulting_date_up_to, consulting_description, 
            
             --div--;LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.tab.consultant,
            consulting, consultant_type, consultant_company, consultant_name1, consultant1_accreditation_number, consultant_name2, consultant2_accreditation_number, consultant_fee, consultant_phone, consultant_email, 
            
            --div--;LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.tab.misc,
            early_start_desired, send_documents_allowed, 
            '
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_rkwmanagementconsultancy_domain_model_supportrequest',
                'foreign_table_where' => 'AND tx_rkwmanagementconsultancy_domain_model_supportrequest.pid=###CURRENT_PID### AND tx_rkwmanagementconsultancy_domain_model_supportrequest.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'is_start_up' => array(
            'exclude' => false,
            'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.is_start_up',
            'config'  => array(
                'type'    => 'check',
                'default' => 0,
            ),
        ),
	    'name' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
//			    'eval' => 'trim,required'
			],
	    ],
	    'address' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.address',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'zip' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int,required'
			]
	    ],
	    'city' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'foundation_date' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.foundation_date',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime, required',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'revenue' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.revenue',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'balance_sum' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.balance_sum',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'number_of_employees' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.number_of_employees',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'manager_name' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.manager_name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'sole_representation' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.sole_representation',
            'config'  => array(
                'type'    => 'check',
                'default' => 0,
            ),
	    ],
	    'deduction_right' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.deduction_right',
            'config'  => array(
                'type'    => 'check',
                'default' => 0,
            ),
	    ],
	    'business_purpose' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.business_purpose',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'company_shares' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.company_shares',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'principle_bank' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.principle_bank',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'bic' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.bic',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'iban' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.iban',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'contact_person_name' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.contact_person_name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'contact_person_phone' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.contact_person_phone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'contact_person_fax' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.contact_person_fax',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
        'contact_person_mobile' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.contact_person_mobile',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
	    'contact_person_email' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.contact_person_email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'start_up_foundation_date' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_foundation_date',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime, required',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'start_up_employment_status_before' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_employment_status_before',
	        'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.general.pleaseChoose', 0],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_employment_status_before.employed', 1],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_employment_status_before.unemployed', 2],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_employment_status_before.freelancer', 3],
                ]
			]
	    ],
	    'start_up_independent_work' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_independent_work',
	        'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.general.pleaseChoose', 0],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_independent_work.no', 1],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_independent_work.sideline', 2],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.start_up_independent_work.mainOccupation', 3],
                ]
			]
	    ],
        'entire_consultation_phase' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.entire_consultation_phase',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'trim'
            ],
        ],
	    'consulting_date_from' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consulting_date_from',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime, required',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'consulting_date_up_to' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consulting_date_up_to',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime, required',
                'checkbox' => 0,
                'default' => 0,
            ],
	    ],
	    'consulting_description' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consulting_description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim,required'
			]
	    ],
        'consulting' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rkw_feecalculator/Resources/Private/Language/locallang_db.xlf:tx_rkwfeecalculator_domain_model_program.consulting',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_rkwfeecalculator_domain_model_consulting',
            ],
        ],
        'consultant_type' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_type',
	        'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.general.pleaseChoose', 0],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_type.1', 1],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_type.2', 2],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_type.3', 3],
                ],
                'eval' => 'required'
			]
	    ],
	    'consultant_company' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_company',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'consultant_name1' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_name1',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
        'consultant1_accreditation_number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant1_accreditation_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
	    'consultant_name2' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_name2',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'consultant2_accreditation_number' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant2_accreditation_number',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'consultant_fee' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_fee',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'consultant_phone' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_phone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'consultant_email' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.consultant_email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'early_start_desired' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.early_start_desired',
            'config'  => array(
                'type'    => 'check',
                'default' => 0,
            ),
	    ],
	    'send_documents_allowed' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.send_documents_allowed',
	        'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.general.pleaseChoose', 0],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.send_documents_allowed.1', 1],
                    ['LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.send_documents_allowed.2', 2],
                ]
			]
	    ],
	    'support_programme' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.support_programme',
	        'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_rkwfeecalculator_domain_model_program',
                'minitems' => 1,
                'maxitems' => 1,
			],
	    ],
	    'company_type' => [
            'exclude' => false,
	        'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.company_type',
	        'config' => [
			    'type' => 'select',
                'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_rkwbasics_domain_model_companytype',
			],
	    ],
        'privacy' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.privacy',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'terms' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkwmanagementconsultancy_domain_model_supportrequest.terms',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
    ],
];
