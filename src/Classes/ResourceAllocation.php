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

class ResourceAllocation extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $requestedby;

    /**
     * @var ResourceAllocationApprovalStatus
     */
    protected ResourceAllocationApprovalStatus $approvalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $nextApprover;

    /**
     * @var RecordRef
     */
    protected RecordRef $allocationResource;

    /**
     * @var RecordRef
     */
    protected RecordRef $project;

    /**
     * @var string
     */
    protected string $notes;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var float
     */
    protected float $allocationAmount;

    /**
     * @var ResourceAllocationAllocationUnit
     */
    protected ResourceAllocationAllocationUnit $allocationUnit;

    /**
     * @var float
     */
    protected float $numberHours;

    /**
     * @var float
     */
    protected float $percentOfTime;

    /**
     * @var RecordRef
     */
    protected RecordRef $allocationType;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "requestedby" => "RecordRef",
        "approvalStatus" => "ResourceAllocationApprovalStatus",
        "nextApprover" => "RecordRef",
        "allocationResource" => "RecordRef",
        "project" => "RecordRef",
        "notes" => "string",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "allocationAmount" => "float",
        "allocationUnit" => "ResourceAllocationAllocationUnit",
        "numberHours" => "float",
        "percentOfTime" => "float",
        "allocationType" => "RecordRef",
        "customForm" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $requestedby
     * @return ResourceAllocation
     */
    public function setRequestedby(RecordRef $requestedby): ResourceAllocation
    {
        $this->requestedby = $requestedby;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRequestedby(): RecordRef
    {
        return $this->requestedby;
    }

    /**
     * @param ResourceAllocationApprovalStatus $approvalStatus
     * @return ResourceAllocation
     */
    public function setApprovalStatus(ResourceAllocationApprovalStatus $approvalStatus): ResourceAllocation
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return ResourceAllocationApprovalStatus
     */
    public function getApprovalStatus(): ResourceAllocationApprovalStatus
    {
        return $this->approvalStatus;
    }

    /**
     * @param RecordRef $nextApprover
     * @return ResourceAllocation
     */
    public function setNextApprover(RecordRef $nextApprover): ResourceAllocation
    {
        $this->nextApprover = $nextApprover;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNextApprover(): RecordRef
    {
        return $this->nextApprover;
    }

    /**
     * @param RecordRef $allocationResource
     * @return ResourceAllocation
     */
    public function setAllocationResource(RecordRef $allocationResource): ResourceAllocation
    {
        $this->allocationResource = $allocationResource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAllocationResource(): RecordRef
    {
        return $this->allocationResource;
    }

    /**
     * @param RecordRef $project
     * @return ResourceAllocation
     */
    public function setProject(RecordRef $project): ResourceAllocation
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProject(): RecordRef
    {
        return $this->project;
    }

    /**
     * @param string $notes
     * @return ResourceAllocation
     */
    public function setNotes(string $notes): ResourceAllocation
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * @param string $startDate
     * @return ResourceAllocation
     */
    public function setStartDate(string $startDate): ResourceAllocation
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return ResourceAllocation
     */
    public function setEndDate(string $endDate): ResourceAllocation
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param float $allocationAmount
     * @return ResourceAllocation
     */
    public function setAllocationAmount(float $allocationAmount): ResourceAllocation
    {
        $this->allocationAmount = $allocationAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllocationAmount(): float
    {
        return $this->allocationAmount;
    }

    /**
     * @param ResourceAllocationAllocationUnit $allocationUnit
     * @return ResourceAllocation
     */
    public function setAllocationUnit(ResourceAllocationAllocationUnit $allocationUnit): ResourceAllocation
    {
        $this->allocationUnit = $allocationUnit;
        return $this;
    }

    /**
     * @return ResourceAllocationAllocationUnit
     */
    public function getAllocationUnit(): ResourceAllocationAllocationUnit
    {
        return $this->allocationUnit;
    }

    /**
     * @param float $numberHours
     * @return ResourceAllocation
     */
    public function setNumberHours(float $numberHours): ResourceAllocation
    {
        $this->numberHours = $numberHours;
        return $this;
    }

    /**
     * @return float
     */
    public function getNumberHours(): float
    {
        return $this->numberHours;
    }

    /**
     * @param float $percentOfTime
     * @return ResourceAllocation
     */
    public function setPercentOfTime(float $percentOfTime): ResourceAllocation
    {
        $this->percentOfTime = $percentOfTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentOfTime(): float
    {
        return $this->percentOfTime;
    }

    /**
     * @param RecordRef $allocationType
     * @return ResourceAllocation
     */
    public function setAllocationType(RecordRef $allocationType): ResourceAllocation
    {
        $this->allocationType = $allocationType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAllocationType(): RecordRef
    {
        return $this->allocationType;
    }

    /**
     * @param RecordRef $customForm
     * @return ResourceAllocation
     */
    public function setCustomForm(RecordRef $customForm): ResourceAllocation
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ResourceAllocation
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ResourceAllocation
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return ResourceAllocation
     */
    public function setInternalId(string $internalId): ResourceAllocation
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return ResourceAllocation
     */
    public function setExternalId(string $externalId): ResourceAllocation
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
