<?php
namespace RKW\RkwManagementConsultancy\Controller;

/***
 *
 * This file is part of the "RKW Management Consultancy" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Maximilian Fäßler <maximilian@faesslerweb.de>, Fäßler Web UG
 *
 ***/
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
/**
 * SupportRequestController
 */
class SupportRequestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * supportProgrammeRepository
     *
     * @var \RKW\RkwManagementConsultancy\Domain\Repository\SupportProgrammeRepository
     * @inject
     */
    protected $supportProgrammeRepository = null;

    /**
     * consultingRepository
     *
     * @var \RKW\RkwManagementConsultancy\Domain\Repository\ConsultingRepository
     * @inject
     */
    protected $consultingRepository = null;

    /**
     * legalFormRepository
     *
     * @var \RKW\RkwManagementConsultancy\Domain\Repository\LegalFormRepository
     * @inject
     */
    protected $legalFormRepository = null;

    /**
     * supportRequestRepository
     *
     * @var \RKW\RkwManagementConsultancy\Domain\Repository\SupportRequestRepository
     * @inject
     */
    protected $supportRequestRepository = null;



    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        $this->view->assign('supportProgrammeList', $this->supportProgrammeRepository->findAll());
    }



    /**
     * action requestForm
     *
     * @param \RKW\RkwManagementConsultancy\Domain\Model\SupportProgramme $supportProgramme
     * @return void
     */
    public function requestFormAction(\RKW\RkwManagementConsultancy\Domain\Model\SupportProgramme $supportProgramme = null)
    {
        if (!$supportProgramme) {
            $this->addFlashMessage(
                \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate(
                    'tx_rkwmanagementconsultancy_controller_supportrequest.error.choose_support_programme', 'rkw_management_consultancy'
                ),
                '',
                \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR
            );
            $this->forward('new');
            //===
        }

        $this->view->assign('supportProgramme', $supportProgramme);
        $this->view->assign('consultingList', $this->consultingRepository->findBySupportProgramme($supportProgramme));
        $this->view->assign('legalFormList', $this->legalFormRepository->findAll());
    }



    /**
     * action create
     *
     * @param \RKW\RkwManagementConsultancy\Domain\Model\SupportRequest $newSupportRequest
     * @return void
     */
    public function createAction(\RKW\RkwManagementConsultancy\Domain\Model\SupportRequest $newSupportRequest)
    {
        if ($this->settings['includeRkwRegistrationPrivacy']) {
            // add privacy info
            $frontendUser = GeneralUtility::makeInstance('RKW\\RkwRegistration\\Domain\\Model\\FrontendUser');
            \RKW\RkwRegistration\Tools\Privacy::addPrivacyData($this->request, $frontendUser, $newSupportRequest, 'new support request');
        }

        $this->addFlashMessage(
            \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate(
                'tx_rkwmanagementconsultancy_controller_supportrequest.success.requestCreated', 'rkw_management_consultancy'
            )
        );
        $this->supportRequestRepository->add($newSupportRequest);
        $this->redirect('new');
    }
}
