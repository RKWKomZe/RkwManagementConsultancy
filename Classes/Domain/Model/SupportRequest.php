<?php
namespace RKW\RkwManagementConsultancy\Domain\Model;
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * SupportRequest
 *
 * @author Maximilian Fäßler <maximilian@faesslerweb.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_RkwManagementConsultancy
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class SupportRequest extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * isStartUp
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $isStartUp = 0;

    /**
     * name
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * address
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $address = '';

    /**
     * zip
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $zip = 0;

    /**
     * city
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $city = '';

    /**
     * foundationDate
     *
     * @var string
     * @validate NotEmpty, \RKW\RkwManagementConsultancy\Validation\Validator\CustomDateValidator
     */
    protected $foundationDate = 0;

    /**
     * revenue
     *
     * @var string
     */
    protected $revenue = '';

    /**
     * balanceSum
     *
     * @var string
     */
    protected $balanceSum = '';

    /**
     * numberOfEmployees
     *
     * @var int
     */
    protected $numberOfEmployees = 0;

    /**
     * managerName
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $managerName = '';

    /**
     * soleRepresentation
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $soleRepresentation = 0;

    /**
     * deductionRight
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $deductionRight = 0;

    /**
     * businessPurpose
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $businessPurpose = '';

    /**
     * companyShares
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $companyShares = '';

    /**
     * principleBank
     *
     * @var string
     */
    protected $principleBank = '';

    /**
     * bic
     *
     * @var string
     */
    protected $bic = '';

    /**
     * iban
     *
     * @var string
     */
    protected $iban = '';

    /**
     * contactPersonFirstName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $contactPersonFirstName = '';

    /**
     * contactPersonLastName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $contactPersonLastName = '';

    /**
     * contactPersonPhone
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $contactPersonPhone = '';

    /**
     * contactPersonFax
     *
     * @var string
     */
    protected $contactPersonFax = '';

    /**
     * contactPersonMobile
     *
     * @var string
     */
    protected $contactPersonMobile = '';

    /**
     * contactPersonEmail
     *
     * @var string
     * @validate NotEmpty, EmailAddress
     */
    protected $contactPersonEmail = '';

    /**
     * startUpFoundationDate
     *
     * @var string
//     * @validate NotEmpty, \RKW\RkwManagementConsultancy\Validation\Validator\CustomDateValidator
     */
    protected $startUpFoundationDate = 0;

    /**
     * startUpEmploymentStatusBefore
     *
     * @var int
     */
    protected $startUpEmploymentStatusBefore = 0;

    /**
     * startUpIndependentWork
     *
     * @var int
     */
    protected $startUpIndependentWork = 0;

    /**
     * entireConsultationPhase
     *
     * @var int
     */
    protected $entireConsultationPhase = 0;

    /**
     * consultingDateFrom
     *
     * @var string
     * @validate NotEmpty, \RKW\RkwManagementConsultancy\Validation\Validator\CustomDateValidator
     */
    protected $consultingDateFrom = 0;

    /**
     * consultingDateUpTo
     *
     * @var string
     * @validate NotEmpty, \RKW\RkwManagementConsultancy\Validation\Validator\CustomDateValidator
     */
    protected $consultingDateUpTo = 0;

    /**
     * consultingDescription
     *
     * @var string
//     * @validate NotEmpty
     */
    protected $consultingDescription = '';

    /**
     * consultantType
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $consultantType = 0;

    /**
     * consultantCompany
     *
     * @var string
     */
    protected $consultantCompany = '';

    /**
     * consultantName1
     *
     * @var string
     */
    protected $consultantName1 = '';

    /**
     * consultantName2
     *
     * @var string
     */
    protected $consultantName2 = '';

    /**
     * consultant1AccreditationNumber
     *
     * @var string
     */
    protected $consultant1AccreditationNumber = '';

    /**
     * consultant2AccreditationNumber
     *
     * @var string
     */
    protected $consultant2AccreditationNumber = '';

    /**
     * consultantFee
     *
     * @var string
     */
    protected $consultantFee = '';

    /**
     * consultantPhone
     *
     * @var string
     */
    protected $consultantPhone = '';

    /**
     * consultantEmail
     *
     * @var string
     */
    protected $consultantEmail = '';

    /**
     * earlyStartDesired
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $earlyStartDesired = 0;

    /**
     * sendDocumentsAllowed
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $sendDocumentsAllowed = 0;

    /**
     * privacy
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $privacy = 0;

    /**
     * terms
     *
     * @var int
//     * @validate NotEmpty
     */
    protected $terms = 0;

    /**
     * supportProgramme
     *
     * @var \RKW\RkwFeecalculator\Domain\Model\Program
//     * @validate NotEmpty
     */
    protected $supportProgramme = null;

    /**
     * consulting
     *
     * @var \RKW\RkwFeecalculator\Domain\Model\Consulting
//     * @validate NotEmpty
     */
    protected $consulting = 0;

    /**
     * companyType
     *
     * @var \RKW\RkwBasics\Domain\Model\CompanyType
//     * @validate NotEmpty
     */
    protected $companyType = 0;

    /**
     * Returns the isStartUp
     *
     * @return int $isStartUp
     */
    public function getIsStartUp()
    {
        return $this->isStartUp;
    }

    /**
     * Sets the isStartUp
     *
     * @param int $isStartUp
     * @return void
     */
    public function setIsStartUp($isStartUp)
    {
        $this->isStartUp = $isStartUp;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the zip
     *
     * @return int $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param int $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Returns the foundationDate
     *
     * @return \DateTime
     */
    public function getFoundationDate()
    {
        return $this->foundationDate;
    }

    /**
     * Sets the foundationDate
     *
     * @param \DateTime $foundationDate
     * @return void
     */
    public function setFoundationDate($foundationDate)
    {
        $this->foundationDate = $foundationDate;
    }

    /**
     * Returns the revenue
     *
     * @return string $revenue
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Sets the revenue
     *
     * @param string $revenue
     * @return void
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * Returns the balanceSum
     *
     * @return string $balanceSum
     */
    public function getBalanceSum()
    {
        return $this->balanceSum;
    }

    /**
     * Sets the balanceSum
     *
     * @param string $balanceSum
     * @return void
     */
    public function setBalanceSum($balanceSum)
    {
        $this->balanceSum = $balanceSum;
    }

    /**
     * Returns the numberOfEmployees
     *
     * @return int $numberOfEmployees
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Sets the numberOfEmployees
     *
     * @param int $numberOfEmployees
     * @return void
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }

    /**
     * Returns the managerName
     *
     * @return string $managerName
     */
    public function getManagerName()
    {
        return $this->managerName;
    }

    /**
     * Sets the managerName
     *
     * @param string $managerName
     * @return void
     */
    public function setManagerName($managerName)
    {
        $this->managerName = $managerName;
    }

    /**
     * Returns the soleRepresentation
     *
     * @return int $soleRepresentation
     */
    public function getSoleRepresentation()
    {
        return $this->soleRepresentation;
    }

    /**
     * Sets the soleRepresentation
     *
     * @param int $soleRepresentation
     * @return void
     */
    public function setSoleRepresentation($soleRepresentation)
    {
        $this->soleRepresentation = $soleRepresentation;
    }

    /**
     * Returns the deductionRight
     *
     * @return int $deductionRight
     */
    public function getDeductionRight()
    {
        return $this->deductionRight;
    }

    /**
     * Sets the deductionRight
     *
     * @param int $deductionRight
     * @return void
     */
    public function setDeductionRight($deductionRight)
    {
        $this->deductionRight = $deductionRight;
    }

    /**
     * Returns the businessPurpose
     *
     * @return string $businessPurpose
     */
    public function getBusinessPurpose()
    {
        return $this->businessPurpose;
    }

    /**
     * Sets the businessPurpose
     *
     * @param string $businessPurpose
     * @return void
     */
    public function setBusinessPurpose($businessPurpose)
    {
        $this->businessPurpose = $businessPurpose;
    }

    /**
     * Returns the companyShares
     *
     * @return string $companyShares
     */
    public function getCompanyShares()
    {
        return $this->companyShares;
    }

    /**
     * Sets the companyShares
     *
     * @param string $companyShares
     * @return void
     */
    public function setCompanyShares($companyShares)
    {
        $this->companyShares = $companyShares;
    }

    /**
     * Returns the principleBank
     *
     * @return string $principleBank
     */
    public function getPrincipleBank()
    {
        return $this->principleBank;
    }

    /**
     * Sets the principleBank
     *
     * @param string $principleBank
     * @return void
     */
    public function setPrincipleBank($principleBank)
    {
        $this->principleBank = $principleBank;
    }

    /**
     * Returns the bic
     *
     * @return string $bic
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Sets the bic
     *
     * @param string $bic
     * @return void
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    /**
     * Returns the iban
     *
     * @return string $iban
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Sets the iban
     *
     * @param string $iban
     * @return void
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * Returns the contactPersonFirstName
     *
     * @return string $contactPersonFirstName
     */
    public function getContactPersonFirstName()
    {
        return $this->contactPersonFirstName;
    }

    /**
     * Sets the contactPersonFirstName
     *
     * @param string $contactPersonFirstName
     * @return void
     */
    public function setContactPersonFirstName($contactPersonFirstName)
    {
        $this->contactPersonFirstName = $contactPersonFirstName;
    }

    /**
     * Returns the contactPersonLastName
     *
     * @return string $contactPersonLastName
     */
    public function getContactPersonLastName()
    {
        return $this->contactPersonLastName;
    }

    /**
     * Sets the contactPersonLastName
     *
     * @param string $contactPersonLastName
     * @return void
     */
    public function setContactPersonLastName($contactPersonLastName)
    {
        $this->contactPersonLastName = $contactPersonLastName;
    }

    /**
     * Returns the contactPersonPhone
     *
     * @return string $contactPersonPhone
     */
    public function getContactPersonPhone()
    {
        return $this->contactPersonPhone;
    }

    /**
     * Sets the contactPersonPhone
     *
     * @param string $contactPersonPhone
     * @return void
     */
    public function setContactPersonPhone($contactPersonPhone)
    {
        $this->contactPersonPhone = $contactPersonPhone;
    }

    /**
     * Returns the contactPersonFax
     *
     * @return string $contactPersonFax
     */
    public function getContactPersonFax()
    {
        return $this->contactPersonFax;
    }

    /**
     * Sets the contactPersonFax
     *
     * @param string $contactPersonFax
     * @return void
     */
    public function setContactPersonFax($contactPersonFax)
    {
        $this->contactPersonFax = $contactPersonFax;
    }

    /**
     * Returns the contactPersonMobile
     *
     * @return string $contactPersonMobile
     */
    public function getContactPersonMobile()
    {
        return $this->contactPersonMobile;
    }

    /**
     * Sets the contactPersonMobile
     *
     * @param string $contactPersonMobile
     * @return void
     */
    public function setContactPersonMobile($contactPersonMobile)
    {
        $this->contactPersonMobile = $contactPersonMobile;
    }

    /**
     * Returns the contactPersonEmail
     *
     * @return string $contactPersonEmail
     */
    public function getContactPersonEmail()
    {
        return $this->contactPersonEmail;
    }

    /**
     * Sets the contactPersonEmail
     *
     * @param string $contactPersonEmail
     * @return void
     */
    public function setContactPersonEmail($contactPersonEmail)
    {
        $this->contactPersonEmail = $contactPersonEmail;
    }

    /**
     * Returns the startUpFoundationDate
     *
     * @return string $startUpFoundationDate
     */
    public function getStartUpFoundationDate()
    {
        return $this->startUpFoundationDate;
    }

    /**
     * Sets the startUpFoundationDate
     *
     * @param string $startUpFoundationDate
     * @return void
     */
    public function setStartUpFoundationDate($startUpFoundationDate)
    {
        $this->startUpFoundationDate = $startUpFoundationDate;
    }

    /**
     * Returns the startUpEmploymentStatusBefore
     *
     * @return int $startUpEmploymentStatusBefore
     */
    public function getStartUpEmploymentStatusBefore()
    {
        return $this->startUpEmploymentStatusBefore;
    }

    /**
     * Sets the startUpEmploymentStatusBefore
     *
     * @param int $startUpEmploymentStatusBefore
     * @return void
     */
    public function setStartUpEmploymentStatusBefore($startUpEmploymentStatusBefore)
    {
        $this->startUpEmploymentStatusBefore = $startUpEmploymentStatusBefore;
    }

    /**
     * Returns the startUpIndependentWork
     *
     * @return int $startUpIndependentWork
     */
    public function getStartUpIndependentWork()
    {
        return $this->startUpIndependentWork;
    }

    /**
     * Sets the startUpIndependentWork
     *
     * @param int $startUpIndependentWork
     * @return void
     */
    public function setStartUpIndependentWork($startUpIndependentWork)
    {
        $this->startUpIndependentWork = $startUpIndependentWork;
    }

    /**
     * Returns the entireConsultationPhase
     *
     * @return int $entireConsultationPhase
     */
    public function getEntireConsultationPhase()
    {
        return $this->entireConsultationPhase;
    }

    /**
     * Sets the entireConsultationPhase
     *
     * @param int $entireConsultationPhase
     * @return void
     */
    public function setentireConsultationPhase($startUpIndependentWork)
    {
        $this->startUpIndependentWork = $startUpIndependentWork;
    }

    /**
     * Returns the consultingDateFrom
     *
     * @return string $consultingDateFrom
     */
    public function getConsultingDateFrom()
    {
        return $this->consultingDateFrom;
    }

    /**
     * Sets the consultingDateFrom
     *
     * @param string $consultingDateFrom
     * @return void
     */
    public function setConsultingDateFrom($consultingDateFrom)
    {
        $this->consultingDateFrom = $consultingDateFrom;
    }

    /**
     * Returns the consultingDateUpTo
     *
     * @return int $consultingDateUpTo
     */
    public function getConsultingDateUpTo()
    {
        return $this->consultingDateUpTo;
    }

    /**
     * Sets the consultingDateUpTo
     *
     * @param int $consultingDateUpTo
     * @return void
     */
    public function setConsultingDateUpTo($consultingDateUpTo)
    {
        $this->consultingDateUpTo = $consultingDateUpTo;
    }

    /**
     * Returns the consultingDescription
     *
     * @return string $consultingDescription
     */
    public function getConsultingDescription()
    {
        return $this->consultingDescription;
    }

    /**
     * Sets the consultingDescription
     *
     * @param string $consultingDescription
     * @return void
     */
    public function setConsultingDescription($consultingDescription)
    {
        $this->consultingDescription = $consultingDescription;
    }

    /**
     * Returns the consultantType
     *
     * @return int $consultantType
     */
    public function getConsultantType()
    {
        return $this->consultantType;
    }

    /**
     * Sets the consultantType
     *
     * @param int $consultantType
     * @return void
     */
    public function setConsultantType($consultantType)
    {
        $this->consultantType = $consultantType;
    }

    /**
     * Returns the consultantCompany
     *
     * @return string $consultantCompany
     */
    public function getConsultantCompany()
    {
        return $this->consultantCompany;
    }

    /**
     * Sets the consultantCompany
     *
     * @param string $consultantCompany
     * @return void
     */
    public function setConsultantCompany($consultantCompany)
    {
        $this->consultantCompany = $consultantCompany;
    }

    /**
     * Returns the consultantName1
     *
     * @return string $consultantName1
     */
    public function getConsultantName1()
    {
        return $this->consultantName1;
    }

    /**
     * Sets the consultantName1
     *
     * @param string $consultantName1
     * @return void
     */
    public function setConsultantName1($consultantName1)
    {
        $this->consultantName1 = $consultantName1;
    }

    /**
     * Returns the consultantName2
     *
     * @return string $consultantName2
     */
    public function getConsultantName2()
    {
        return $this->consultantName2;
    }

    /**
     * Sets the consultantName2
     *
     * @param string $consultantName2
     * @return void
     */
    public function setConsultantName2($consultantName2)
    {
        $this->consultantName2 = $consultantName2;
    }

    /**
     * Returns the consultant1AccreditationNumber
     *
     * @return string $consultant1AccreditationNumber
     */
    public function getConsultant1AccreditationNumber()
    {
        return $this->consultant1AccreditationNumber;
    }

    /**
     * Sets the consultant1AccreditationNumber
     *
     * @param string $consultant1AccreditationNumber
     * @return void
     */
    public function setConsultant1AccreditationNumber($consultant1AccreditationNumber)
    {
        $this->consultant1AccreditationNumber = $consultant1AccreditationNumber;
    }

    /**
     * Returns the consultant2AccreditationNumber
     *
     * @return string $consultant2AccreditationNumber
     */
    public function getConsultant2AccreditationNumber()
    {
        return $this->consultant2AccreditationNumber;
    }

    /**
     * Sets the consultant2AccreditationNumber
     *
     * @param string $consultant2AccreditationNumber
     * @return void
     */
    public function setConsultant2AccreditationNumber($consultant2AccreditationNumber)
    {
        $this->consultant2AccreditationNumber = $consultant2AccreditationNumber;
    }

    /**
     * Returns the consultantFee
     *
     * @return string $consultantFee
     */
    public function getConsultantFee()
    {
        return $this->consultantFee;
    }

    /**
     * Sets the consultantFee
     *
     * @param string $consultantFee
     * @return void
     */
    public function setConsultantFee($consultantFee)
    {
        $this->consultantFee = $consultantFee;
    }

    /**
     * Returns the consultantPhone
     *
     * @return string $consultantPhone
     */
    public function getConsultantPhone()
    {
        return $this->consultantPhone;
    }

    /**
     * Sets the consultantPhone
     *
     * @param string $consultantPhone
     * @return void
     */
    public function setConsultantPhone($consultantPhone)
    {
        $this->consultantPhone = $consultantPhone;
    }

    /**
     * Returns the consultantEmail
     *
     * @return string $consultantEmail
     */
    public function getConsultantEmail()
    {
        return $this->consultantEmail;
    }

    /**
     * Sets the consultantEmail
     *
     * @param string $consultantEmail
     * @return void
     */
    public function setConsultantEmail($consultantEmail)
    {
        $this->consultantEmail = $consultantEmail;
    }

    /**
     * Returns the earlyStartDesired
     *
     * @return int $earlyStartDesired
     */
    public function getEarlyStartDesired()
    {
        return $this->earlyStartDesired;
    }

    /**
     * Sets the earlyStartDesired
     *
     * @param int $earlyStartDesired
     * @return void
     */
    public function setEarlyStartDesired($earlyStartDesired)
    {
        $this->earlyStartDesired = $earlyStartDesired;
    }

    /**
     * Returns the sendDocumentsAllowed
     *
     * @return int $sendDocumentsAllowed
     */
    public function getSendDocumentsAllowed()
    {
        return $this->sendDocumentsAllowed;
    }

    /**
     * Sets the sendDocumentsAllowed
     *
     * @param int $sendDocumentsAllowed
     * @return void
     */
    public function setSendDocumentsAllowed($sendDocumentsAllowed)
    {
        $this->sendDocumentsAllowed = $sendDocumentsAllowed;
    }

    /**
     * Returns the privacy
     *
     * @return int $privacy
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * Sets the privacy
     *
     * @param int $privacy
     * @return void
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
    }

    /**
     * Returns the terms
     *
     * @return int $terms
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Sets the terms
     *
     * @param int $terms
     * @return void
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
    }

    /**
     * Returns the supportProgramme
     *
     * @return \RKW\RkwFeecalculator\Domain\Model\Program $supportProgramme
     */
    public function getSupportProgramme()
    {
        return $this->supportProgramme;
    }

    /**
     * Sets the supportProgramme
     *
     * @param \RKW\RkwFeecalculator\Domain\Model\Program $supportProgramme
     * @return void
     */
    public function setSupportProgramme($supportProgramme)
    {
        $this->supportProgramme = $supportProgramme;
    }

    /**
     * Returns the consulting
     *
     * @return \RKW\RkwManagementConsultancy\Domain\Model\Consulting $consulting
     */
    public function getConsulting()
    {
        return $this->consulting;
    }

    /**
     * Sets the consulting
     *
     * @param \RKW\RkwManagementConsultancy\Domain\Model\Consulting $consulting
     * @return void
     */
    public function setConsulting($consulting)
    {
        $this->consulting = $consulting;
    }

    /**
     * Returns the companyType
     *
     * @return \RKW\RkwBasics\Domain\Model\CompanyType $companyType
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * Sets the companyType
     *
     * @param \RKW\RkwBasics\Domain\Model\CompanyType $companyType
     * @return void
     */
    public function setCompanyType($companyType)
    {
        $this->companyType = $companyType;
    }

    /**
     * Transforms date strings to DateTime object
     *
     * @return void
     */
    public function transformDates()
    {
        $this->foundationDate = $this->transformDate($this->foundationDate);
        $this->startUpFoundationDate = $this->transformDate($this->startUpFoundationDate);
        $this->consultingDateFrom = $this->transformDate($this->consultingDateFrom);
        $this->consultingDateUpTo = $this->transformDate($this->consultingDateUpTo);
    }

    /**
     * Transforms date string to DateTime object
     *
     * @param string $dateString
     * @return \DateTime
     */
    protected function transformDate($dateString)
    {
        return \DateTime::createFromFormat('d.m.Y', $dateString)->getTimestamp();
    }


}
