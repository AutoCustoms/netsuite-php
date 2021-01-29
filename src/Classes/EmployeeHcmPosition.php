<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-01-29 05:23:50 PM UTC
 */

namespace NetSuite\Classes;

class EmployeeHcmPosition {
    /**
     * @var RecordRef
     */
    protected RecordRef $position;

    /**
     * @var bool
     */
    protected bool $primaryPosition;

    /**
     * @var string
     */
    protected string $positionId;

    /**
     * @var float
     */
    protected float $positionAllocation;

    /**
     * @var float
     */
    protected float $fullTimeEquivalent;

    /**
     * @var RecordRef
     */
    protected RecordRef $employmentCategory;

    /**
     * @var RecordRef
     */
    protected RecordRef $reportsTo;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    static $paramtypesmap = array(
        "position" => "RecordRef",
        "primaryPosition" => "boolean",
        "positionId" => "string",
        "positionAllocation" => "float",
        "fullTimeEquivalent" => "float",
        "employmentCategory" => "RecordRef",
        "reportsTo" => "RecordRef",
        "subsidiary" => "RecordRef",
        "location" => "RecordRef",
    );

    /**
     * @param RecordRef $position
     * @return EmployeeHcmPosition
     */
    public function setPosition(RecordRef $position): EmployeeHcmPosition
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPosition(): RecordRef
    {
        return $this->position;
    }

    /**
     * @param bool $primaryPosition
     * @return EmployeeHcmPosition
     */
    public function setPrimaryPosition(bool $primaryPosition): EmployeeHcmPosition
    {
        $this->primaryPosition = $primaryPosition;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrimaryPosition(): bool
    {
        return $this->primaryPosition;
    }

    /**
     * @param string $positionId
     * @return EmployeeHcmPosition
     */
    public function setPositionId(string $positionId): EmployeeHcmPosition
    {
        $this->positionId = $positionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPositionId(): string
    {
        return $this->positionId;
    }

    /**
     * @param float $positionAllocation
     * @return EmployeeHcmPosition
     */
    public function setPositionAllocation(float $positionAllocation): EmployeeHcmPosition
    {
        $this->positionAllocation = $positionAllocation;
        return $this;
    }

    /**
     * @return float
     */
    public function getPositionAllocation(): float
    {
        return $this->positionAllocation;
    }

    /**
     * @param float $fullTimeEquivalent
     * @return EmployeeHcmPosition
     */
    public function setFullTimeEquivalent(float $fullTimeEquivalent): EmployeeHcmPosition
    {
        $this->fullTimeEquivalent = $fullTimeEquivalent;
        return $this;
    }

    /**
     * @return float
     */
    public function getFullTimeEquivalent(): float
    {
        return $this->fullTimeEquivalent;
    }

    /**
     * @param RecordRef $employmentCategory
     * @return EmployeeHcmPosition
     */
    public function setEmploymentCategory(RecordRef $employmentCategory): EmployeeHcmPosition
    {
        $this->employmentCategory = $employmentCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmploymentCategory(): RecordRef
    {
        return $this->employmentCategory;
    }

    /**
     * @param RecordRef $reportsTo
     * @return EmployeeHcmPosition
     */
    public function setReportsTo(RecordRef $reportsTo): EmployeeHcmPosition
    {
        $this->reportsTo = $reportsTo;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReportsTo(): RecordRef
    {
        return $this->reportsTo;
    }

    /**
     * @param RecordRef $subsidiary
     * @return EmployeeHcmPosition
     */
    public function setSubsidiary(RecordRef $subsidiary): EmployeeHcmPosition
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $location
     * @return EmployeeHcmPosition
     */
    public function setLocation(RecordRef $location): EmployeeHcmPosition
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

}
