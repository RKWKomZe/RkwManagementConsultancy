<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RKW.RkwManagementConsultancy',
            'Request',
            'RKW Management Consultancy'
        );

//        $pluginSignature = str_replace('_', '', $extKey) . '_calculator';
        $pluginSignature = str_replace('_', '', $extKey) . '_calculator';

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'RKW Management Consultancy');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rkwmanagementconsultancy_domain_model_supportprogramme', 'EXT:rkw_management_consultancy/Resources/Private/Language/locallang_csh_tx_rkwmanagementconsultancy_domain_model_supportprogramme.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rkwmanagementconsultancy_domain_model_supportprogramme');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rkwmanagementconsultancy_domain_model_supportrequest', 'EXT:rkw_management_consultancy/Resources/Private/Language/locallang_csh_tx_rkwmanagementconsultancy_domain_model_supportrequest.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rkwmanagementconsultancy_domain_model_supportrequest');

    },
    $_EXTKEY
);
