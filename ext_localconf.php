<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.RkwManagementConsultancy',
            'Request',
            [
                'SupportRequest' => 'new, requestForm, create'
            ],
            // non-cacheable actions
            [
                'SupportRequest' => 'new, requestForm, create'
            ]
        );

        /*
        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        request {
                            icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_request.svg
                            title = LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkw_management_consultancy_domain_model_request
                            description = LLL:EXT:rkw_management_consultancy/Resources/Private/Language/locallang_db.xlf:tx_rkw_management_consultancy_domain_model_request.description
                            tt_content_defValues {
                                CType = list
                                list_type = rkwmanagementconsultancy_request
                            }
                        }
                    }
                    show = *
                }
           }'
        );
        */

        /**
         * @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher
         */
        $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');

        $signalSlotDispatcher->connect(
            'RKW\\RkwManagementConsultancy\\Controller\\SupportRequestController',
            \RKW\RkwManagementConsultancy\Controller\SupportRequestController::SIGNAL_AFTER_REQUEST_CREATED_USER,
            'RKW\\RkwManagementConsultancy\\Service\\RkwMailService',
            'userMail'
        );

        $signalSlotDispatcher->connect(
            'RKW\\RkwManagementConsultancy\\Controller\\SupportRequestController',
            \RKW\RkwManagementConsultancy\Controller\SupportRequestController::SIGNAL_AFTER_REQUEST_CREATED_ADMIN,
            'RKW\\RkwManagementConsultancy\\Service\\RkwMailService',
            'adminMail'
        );


    },
    $_EXTKEY
);

