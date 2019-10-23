<?php
namespace RKW\RkwManagementConsultancy\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Maximilian Fäßler <maximilian@faesslerweb.de>
 */
class SupportRequestTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RKW\RkwManagementConsultancy\Domain\Model\SupportRequest
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RKW\RkwManagementConsultancy\Domain\Model\SupportRequest();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );

    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );

    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setZipForIntSetsZip()
    {
    }

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );

    }

    /**
     * @test
     */
    public function setCityForStringSetsCity()
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'city',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFoundationDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getFoundationDate()
        );

    }

    /**
     * @test
     */
    public function setFoundationDateForDateTimeSetsFoundationDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setFoundationDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'foundationDate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSalesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSales()
        );

    }

    /**
     * @test
     */
    public function setSalesForStringSetsSales()
    {
        $this->subject->setSales('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'sales',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBalanceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBalance()
        );

    }

    /**
     * @test
     */
    public function setBalanceForStringSetsBalance()
    {
        $this->subject->setBalance('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'balance',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEmployeesCountReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setEmployeesCountForIntSetsEmployeesCount()
    {
    }

    /**
     * @test
     */
    public function getManagerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getManager()
        );

    }

    /**
     * @test
     */
    public function setManagerForStringSetsManager()
    {
        $this->subject->setManager('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'manager',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSingleRepresentativeReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setSingleRepresentativeForIntSetsSingleRepresentative()
    {
    }

    /**
     * @test
     */
    public function getPreTaxDeductionReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPreTaxDeductionForIntSetsPreTaxDeduction()
    {
    }

    /**
     * @test
     */
    public function getBusinessPurposeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBusinessPurpose()
        );

    }

    /**
     * @test
     */
    public function setBusinessPurposeForStringSetsBusinessPurpose()
    {
        $this->subject->setBusinessPurpose('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'businessPurpose',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCompanySharesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCompanyShares()
        );

    }

    /**
     * @test
     */
    public function setCompanySharesForStringSetsCompanyShares()
    {
        $this->subject->setCompanyShares('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'companyShares',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPrincipalBankReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrincipalBank()
        );

    }

    /**
     * @test
     */
    public function setPrincipalBankForStringSetsPrincipalBank()
    {
        $this->subject->setPrincipalBank('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'principalBank',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getBicReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBic()
        );

    }

    /**
     * @test
     */
    public function setBicForStringSetsBic()
    {
        $this->subject->setBic('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bic',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIbanReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIban()
        );

    }

    /**
     * @test
     */
    public function setIbanForStringSetsIban()
    {
        $this->subject->setIban('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'iban',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getContactPersonNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContactPersonName()
        );

    }

    /**
     * @test
     */
    public function setContactPersonNameForStringSetsContactPersonName()
    {
        $this->subject->setContactPersonName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contactPersonName',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getContactPersonPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContactPersonPhone()
        );

    }

    /**
     * @test
     */
    public function setContactPersonPhoneForStringSetsContactPersonPhone()
    {
        $this->subject->setContactPersonPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contactPersonPhone',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getContactPersonFaxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContactPersonFax()
        );

    }

    /**
     * @test
     */
    public function setContactPersonFaxForStringSetsContactPersonFax()
    {
        $this->subject->setContactPersonFax('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contactPersonFax',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getContactPersonEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContactPersonEmail()
        );

    }

    /**
     * @test
     */
    public function setContactPersonEmailForStringSetsContactPersonEmail()
    {
        $this->subject->setContactPersonEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contactPersonEmail',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStartUpFoundationDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStartUpFoundationDate()
        );

    }

    /**
     * @test
     */
    public function setStartUpFoundationDateForDateTimeSetsStartUpFoundationDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStartUpFoundationDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'startUpFoundationDate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPreFoundationEmploymentReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPreFoundationEmploymentForIntSetsPreFoundationEmployment()
    {
    }

    /**
     * @test
     */
    public function getPreFoundationSelfEmploymentReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPreFoundationSelfEmploymentForIntSetsPreFoundationSelfEmployment()
    {
    }

    /**
     * @test
     */
    public function getConsultingDateFromReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getConsultingDateFrom()
        );

    }

    /**
     * @test
     */
    public function setConsultingDateFromForDateTimeSetsConsultingDateFrom()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setConsultingDateFrom($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'consultingDateFrom',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultingDateToReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getConsultingDateTo()
        );

    }

    /**
     * @test
     */
    public function setConsultingDateToForDateTimeSetsConsultingDateTo()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setConsultingDateTo($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'consultingDateTo',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultingContentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultingContent()
        );

    }

    /**
     * @test
     */
    public function setConsultingContentForStringSetsConsultingContent()
    {
        $this->subject->setConsultingContent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultingContent',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultantTypeReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setConsultantTypeForIntSetsConsultantType()
    {
    }

    /**
     * @test
     */
    public function getConsultantCompanyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultantCompany()
        );

    }

    /**
     * @test
     */
    public function setConsultantCompanyForStringSetsConsultantCompany()
    {
        $this->subject->setConsultantCompany('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultantCompany',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultantName1ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultantName1()
        );

    }

    /**
     * @test
     */
    public function setConsultantName1ForStringSetsConsultantName1()
    {
        $this->subject->setConsultantName1('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultantName1',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultantName2ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultantName2()
        );

    }

    /**
     * @test
     */
    public function setConsultantName2ForStringSetsConsultantName2()
    {
        $this->subject->setConsultantName2('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultantName2',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultant1AccreditationNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultant1AccreditationNumber()
        );

    }

    /**
     * @test
     */
    public function setConsultant1AccreditationNumberForStringSetsConsultant1AccreditationNumber()
    {
        $this->subject->setConsultant1AccreditationNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultant1AccreditationNumber',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultant2AccreditationNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultant2AccreditationNumber()
        );

    }

    /**
     * @test
     */
    public function setConsultant2AccreditationNumberForStringSetsConsultant2AccreditationNumber()
    {
        $this->subject->setConsultant2AccreditationNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultant2AccreditationNumber',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultantFeeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultantFee()
        );

    }

    /**
     * @test
     */
    public function setConsultantFeeForStringSetsConsultantFee()
    {
        $this->subject->setConsultantFee('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultantFee',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultantPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultantPhone()
        );

    }

    /**
     * @test
     */
    public function setConsultantPhoneForStringSetsConsultantPhone()
    {
        $this->subject->setConsultantPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultantPhone',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultantEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getConsultantEmail()
        );

    }

    /**
     * @test
     */
    public function setConsultantEmailForStringSetsConsultantEmail()
    {
        $this->subject->setConsultantEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'consultantEmail',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPrematureStartReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPrematureStartForIntSetsPrematureStart()
    {
    }

    /**
     * @test
     */
    public function getSendDocumentsReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setSendDocumentsForIntSetsSendDocuments()
    {
    }

    /**
     * @test
     */
    public function getSupportProgrammeReturnsInitialValueForSupportProgramme()
    {
        self::assertEquals(
            null,
            $this->subject->getSupportProgramme()
        );

    }

    /**
     * @test
     */
    public function setSupportProgrammeForSupportProgrammeSetsSupportProgramme()
    {
        $supportProgrammeFixture = new \RKW\RkwManagementConsultancy\Domain\Model\SupportProgramme();
        $this->subject->setSupportProgramme($supportProgrammeFixture);

        self::assertAttributeEquals(
            $supportProgrammeFixture,
            'supportProgramme',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getConsultingReturnsInitialValueForConsulting()
    {
        self::assertEquals(
            null,
            $this->subject->getConsulting()
        );

    }

    /**
     * @test
     */
    public function setConsultingForConsultingSetsConsulting()
    {
        $consultingFixture = new \RKW\RkwManagementConsultancy\Domain\Model\Consulting();
        $this->subject->setConsulting($consultingFixture);

        self::assertAttributeEquals(
            $consultingFixture,
            'consulting',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCompanyTypeReturnsInitialValueForCompanyType()
    {
        self::assertEquals(
            null,
            $this->subject->getCompanyType()
        );

    }

    /**
     * @test
     */
    public function setCompanyTypeForCompanyTypeSetsCompanyType()
    {
        $companyTypeFixture = new \RKW\RkwBasics\Domain\Model\CompanyType();
        $this->subject->setCompanyType($companyTypeFixture);

        self::assertAttributeEquals(
            $companyTypeFixture,
            'companyType',
            $this->subject
        );

    }
}
