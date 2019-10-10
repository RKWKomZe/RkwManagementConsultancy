config.tx_extbase.persistence {

    classes {

        #===============================================

        RKW\RkwRegistration\Domain\Model\FrontendUser {
            subclasses {
                Tx_RkwManagementConsultancy_FrontendUser = RKW\RkwManagementConsultancy\Domain\Model\FrontendUser
            }
        }

        RKW\RkwManagementConsultancy\Domain\Model\FrontendUser {
            mapping {
                tableName = fe_users
                recordType =
            }
        }

        #===============================================

        TYPO3\CMS\Extbase\Domain\Model\BackendUser {
            subclasses {
                Tx_RkwManagementConsultancy_BackendUser = RKW\RkwManagementConsultancy\Domain\Model\BackendUser
            }
        }


        RKW\RkwManagementConsultancy\Domain\Model\BackendUser {
            mapping {
                tableName = be_users
                columns {
                    usergroup.mapOnProperty = backendUserGroups
                }
            }
        }
    }
}

plugin.tx_rkwmanagementconsultancy {
    view {
        templateRootPaths.0 = EXT:rkw_management_consultancy/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_rkwmanagementconsultancy.view.templateRootPath}
        partialRootPaths.0 = EXT:rkw_management_consultancy/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_rkwmanagementconsultancy.view.partialRootPath}
        layoutRootPaths.0 = EXT:rkw_management_consultancy/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_rkwmanagementconsultancy.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_rkwmanagementconsultancy.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
    settings {
        termsPid = {$plugin.tx_rkwmanagementconsultancy.settings.termsPid}
        terms2Pid = {$plugin.tx_rkwmanagementconsultancy.settings.terms2Pid}
#        storagePid = {$plugin.tx_rkwmanagementconsultancy.persistence.storagePid}
        programStoragePid = {$plugin.tx_rkwmanagementconsultancy.settings.programStoragePid}
        includeRkwRegistrationPrivacy = {$plugin.tx_rkwmanagementconsultancy.settings.includeRkwRegistrationPrivacy}
    }
}

plugin.tx_rkwmanagementconsultancy_request < plugin.tx_rkwmanagementconsultancy

#===============================================================
# Backend Module
#===============================================================
module.tx_rkwmanagementconsultancy_web_rkwmanagementconsultancybackend {
    persistence {
        storagePid = {$module.tx_rkwmanagementconsultancy_backend.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = EXT:rkw_management_consultancy/Resources/Private/Backend/Templates/
        templateRootPaths.1 = {$module.tx_rkwmanagementconsultancy_backend.view.templateRootPath}
        partialRootPaths.0 = EXT:rkw_management_consultancy/Resources/Private/Backend/Partials/
        partialRootPaths.1 = {$module.tx_rkwmanagementconsultancy_backend.view.partialRootPath}
        layoutRootPaths.0 = EXT:rkw_management_consultancy/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = {$module.tx_rkwmanagementconsultancy_backend.view.layoutRootPath}
    }
}
