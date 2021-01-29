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

class ResourceAllocationSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $allocationType;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $allocationUnit;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $approvalStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $customer;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $nextApprover;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $notes;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $numberHours;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $percentOfTime;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $project;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $requestedBy;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $resource;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "allocationType" => "SearchColumnSelectField[]",
        "allocationUnit" => "SearchColumnEnumSelectField[]",
        "approvalStatus" => "SearchColumnEnumSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "nextApprover" => "SearchColumnSelectField[]",
        "notes" => "SearchColumnStringField[]",
        "numberHours" => "SearchColumnDoubleField[]",
        "percentOfTime" => "SearchColumnDoubleField[]",
        "project" => "SearchColumnSelectField[]",
        "requestedBy" => "SearchColumnSelectField[]",
        "resource" => "SearchColumnSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $allocationType
     * @return ResourceAllocationSearchRowBasic
     */
    public function setAllocationType(SearchColumnSelectField $allocationType): ResourceAllocationSearchRowBasic
    {
        $this->allocationType[] = $allocationType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAllocationType(): array
    {
        return $this->allocationType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $allocationUnit
     * @return ResourceAllocationSearchRowBasic
     */
    public function setAllocationUnit(SearchColumnEnumSelectField $allocationUnit): ResourceAllocationSearchRowBasic
    {
        $this->allocationUnit[] = $allocationUnit;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAllocationUnit(): array
    {
        return $this->allocationUnit;
    }

    /**
     * @param SearchColumnEnumSelectField[] $approvalStatus
     * @return ResourceAllocationSearchRowBasic
     */
    public function setApprovalStatus(SearchColumnEnumSelectField $approvalStatus): ResourceAllocationSearchRowBasic
    {
        $this->approvalStatus[] = $approvalStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getApprovalStatus(): array
    {
        return $this->approvalStatus;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return ResourceAllocationSearchRowBasic
     */
    public function setCustomer(SearchColumnSelectField $customer): ResourceAllocationSearchRowBasic
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return ResourceAllocationSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): ResourceAllocationSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ResourceAllocationSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ResourceAllocationSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return ResourceAllocationSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ResourceAllocationSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $nextApprover
     * @return ResourceAllocationSearchRowBasic
     */
    public function setNextApprover(SearchColumnSelectField $nextApprover): ResourceAllocationSearchRowBasic
    {
        $this->nextApprover[] = $nextApprover;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNextApprover(): array
    {
        return $this->nextApprover;
    }

    /**
     * @param SearchColumnStringField[] $notes
     * @return ResourceAllocationSearchRowBasic
     */
    public function setNotes(SearchColumnStringField $notes): ResourceAllocationSearchRowBasic
    {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNotes(): array
    {
        return $this->notes;
    }

    /**
     * @param SearchColumnDoubleField[] $numberHours
     * @return ResourceAllocationSearchRowBasic
     */
    public function setNumberHours(SearchColumnDoubleField $numberHours): ResourceAllocationSearchRowBasic
    {
        $this->numberHours[] = $numberHours;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNumberHours(): array
    {
        return $this->numberHours;
    }

    /**
     * @param SearchColumnDoubleField[] $percentOfTime
     * @return ResourceAllocationSearchRowBasic
     */
    public function setPercentOfTime(SearchColumnDoubleField $percentOfTime): ResourceAllocationSearchRowBasic
    {
        $this->percentOfTime[] = $percentOfTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentOfTime(): array
    {
        return $this->percentOfTime;
    }

    /**
     * @param SearchColumnSelectField[] $project
     * @return ResourceAllocationSearchRowBasic
     */
    public function setProject(SearchColumnSelectField $project): ResourceAllocationSearchRowBasic
    {
        $this->project[] = $project;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProject(): array
    {
        return $this->project;
    }

    /**
     * @param SearchColumnSelectField[] $requestedBy
     * @return ResourceAllocationSearchRowBasic
     */
    public function setRequestedBy(SearchColumnSelectField $requestedBy): ResourceAllocationSearchRowBasic
    {
        $this->requestedBy[] = $requestedBy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRequestedBy(): array
    {
        return $this->requestedBy;
    }

    /**
     * @param SearchColumnSelectField[] $resource
     * @return ResourceAllocationSearchRowBasic
     */
    public function setResource(SearchColumnSelectField $resource): ResourceAllocationSearchRowBasic
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResource(): array
    {
        return $this->resource;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return ResourceAllocationSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): ResourceAllocationSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ResourceAllocationSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ResourceAllocationSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
