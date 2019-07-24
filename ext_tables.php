<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'RKW Management Consultancy');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rkwmanagementconsultancy_domain_model_legalform', 'EXT:rkw_management_consultancy/Resources/Private/Language/locallang_csh_tx_rkwmanagementconsultancy_domain_model_legalform.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rkwmanagementconsultancy_domain_model_legalform');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rkwmanagementconsultancy_domain_model_supportprogramme', 'EXT:rkw_management_consultancy/Resources/Private/Language/locallang_csh_tx_rkwmanagementconsultancy_domain_model_supportprogramme.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rkwmanagementconsultancy_domain_model_supportprogramme');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rkwmanagementconsultancy_domain_model_consulting', 'EXT:rkw_management_consultancy/Resources/Private/Language/locallang_csh_tx_rkwmanagementconsultancy_domain_model_consulting.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rkwmanagementconsultancy_domain_model_consulting');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rkwmanagementconsultancy_domain_model_supportrequest', 'EXT:rkw_management_consultancy/Resources/Private/Language/locallang_csh_tx_rkwmanagementconsultancy_domain_model_supportrequest.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rkwmanagementconsultancy_domain_model_supportrequest');

    },
    $_EXTKEY
);
