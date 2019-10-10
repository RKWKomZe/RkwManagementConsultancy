
plugin.tx_rkwmanagementconsultancy {
    view {
        # cat=plugin.tx_rkwmanagementconsultancy/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:rkw_management_consultancy/Resources/Private/Templates/
        # cat=plugin.tx_rkwmanagementconsultancy/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:rkw_management_consultancy/Resources/Private/Partials/
        # cat=plugin.tx_rkwmanagementconsultancy/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:rkw_management_consultancy/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_rkwmanagementconsultancy//a; type=string; label=Default storage PID
        storagePid =
    }
    settings {
        # cat=plugin.tx_rkwmanagementconsultancy//a; type=integer; label=Ajax type num
        ajaxTypeNum = 1563872060
        # cat=plugin.tx_rkwmanagementconsultancy; type=integer; label=PID for terms and conditions (AGB)
        termsPid =
        # cat=plugin.tx_rkwmanagementconsultancy; type=integer; label=PID for terms and conditions (AGB)
        terms2Pid =
        # cat=plugin.tx_rkwmanagementconsultancy; type=integer; label=PID for support programs
        programStoragePid =
        # cat=plugin.tx_rkwmanagementconsultancy; type=integer; label=Include RkwRegistration privacy
        includeRkwRegistrationPrivacy = 1
    }
}


module.tx_rkwmanagementconsultancy_backend {
    view {
        # cat=module.tx_rkwmanagementconsultancy_backend/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:rkw_management_consultancy/Resources/Private/Backend/Templates/
        # cat=module.tx_rkwmanagementconsultancy_backend/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:rkw_management_consultancy/Resources/Private/Backend/Partials/
        # cat=module.tx_rkwmanagementconsultancy_backend/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:rkw_management_consultancy/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_rkwmanagementconsultancy_backend//a; type=string; label=Default storage PID
        storagePid =
    }
}
