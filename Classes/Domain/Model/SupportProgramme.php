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
 * SupportProgramme
 *
 * @author Maximilian Fäßler <maximilian@faesslerweb.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_RkwManagementConsultancy
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class SupportProgramme extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * consulting
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RKW\RkwManagementConsultancy\Domain\Model\Consulting>
     */
    protected $consulting = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->consulting = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Adds a Consulting
     *
     * @param \RKW\RkwManagementConsultancy\Domain\Model\Consulting $consulting
     * @return void
     */
    public function addConsulting(\RKW\RkwManagementConsultancy\Domain\Model\Consulting $consulting)
    {
        $this->consulting->attach($consulting);
    }

    /**
     * Removes a Consulting
     *
     * @param \RKW\RkwManagementConsultancy\Domain\Model\Consulting $consultingToRemove The Consulting to be removed
     * @return void
     */
    public function removeConsulting(\RKW\RkwManagementConsultancy\Domain\Model\Consulting $consultingToRemove)
    {
        $this->consulting->detach($consultingToRemove);
    }

    /**
     * Returns the consulting
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RKW\RkwManagementConsultancy\Domain\Model\Consulting> $consulting
     */
    public function getConsulting()
    {
        return $this->consulting;
    }

    /**
     * Sets the consulting
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RKW\RkwManagementConsultancy\Domain\Model\Consulting> $consulting
     * @return void
     */
    public function setConsulting(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $consulting)
    {
        $this->consulting = $consulting;
    }
}
