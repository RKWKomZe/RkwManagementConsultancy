<?php
namespace RKW\RkwManagementConsultancy\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Maximilian Fäßler <maximilian@faesslerweb.de>
 */
class SupportRequestControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RKW\RkwManagementConsultancy\Controller\SupportRequestController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RKW\RkwManagementConsultancy\Controller\SupportRequestController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSupportRequestToSupportRequestRepository()
    {
        $supportRequest = new \RKW\RkwManagementConsultancy\Domain\Model\SupportRequest();

        $supportRequestRepository = $this->getMockBuilder(\RKW\RkwManagementConsultancy\Domain\Repository\SupportRequestRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $supportRequestRepository->expects(self::once())->method('add')->with($supportRequest);
        $this->inject($this->subject, 'supportRequestRepository', $supportRequestRepository);

        $this->subject->createAction($supportRequest);
    }
}
