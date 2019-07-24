<?php
namespace RKW\RkwManagementConsultancy\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Maximilian Fäßler <maximilian@faesslerweb.de>
 */
class SupportProgrammeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RKW\RkwManagementConsultancy\Domain\Model\SupportProgramme
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RKW\RkwManagementConsultancy\Domain\Model\SupportProgramme();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getConsultingReturnsInitialValueForConsulting()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getConsulting()
        );

    }

    /**
     * @test
     */
    public function setConsultingForObjectStorageContainingConsultingSetsConsulting()
    {
        $consulting = new \RKW\RkwManagementConsultancy\Domain\Model\Consulting();
        $objectStorageHoldingExactlyOneConsulting = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneConsulting->attach($consulting);
        $this->subject->setConsulting($objectStorageHoldingExactlyOneConsulting);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneConsulting,
            'consulting',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addConsultingToObjectStorageHoldingConsulting()
    {
        $consulting = new \RKW\RkwManagementConsultancy\Domain\Model\Consulting();
        $consultingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $consultingObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($consulting));
        $this->inject($this->subject, 'consulting', $consultingObjectStorageMock);

        $this->subject->addConsulting($consulting);
    }

    /**
     * @test
     */
    public function removeConsultingFromObjectStorageHoldingConsulting()
    {
        $consulting = new \RKW\RkwManagementConsultancy\Domain\Model\Consulting();
        $consultingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $consultingObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($consulting));
        $this->inject($this->subject, 'consulting', $consultingObjectStorageMock);

        $this->subject->removeConsulting($consulting);

    }
}
