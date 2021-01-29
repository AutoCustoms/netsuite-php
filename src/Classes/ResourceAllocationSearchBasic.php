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

class ResourceAllocationSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $allocationType;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $allocationUnit;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $approvalStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $nextApprover;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $notes;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $numberHours;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $percentOfTime;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $project;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $requestedBy;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $resource;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "allocationType" => "SearchMultiSelectField",
        "allocationUnit" => "SearchEnumMultiSelectField",
        "approvalStatus" => "SearchEnumMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "nextApprover" => "SearchMultiSelectField",
        "notes" => "SearchStringField",
        "numberHours" => "SearchDoubleField",
        "percentOfTime" => "SearchDoubleField",
        "project" => "SearchMultiSelectField",
        "requestedBy" => "SearchMultiSelectField",
        "resource" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $allocationType
     * @return ResourceAllocationSearchBasic
     */
    public function setAllocationType(SearchMultiSelectField $allocationType): ResourceAllocationSearchBasic
    {
        $this->allocationType = $allocationType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAllocationType(): SearchMultiSelectField
    {
        return $this->allocationType;
    }

    /**
     * @param SearchEnumMultiSelectField $allocationUnit
     * @return ResourceAllocationSearchBasic
     */
    public function setAllocationUnit(SearchEnumMultiSelectField $allocationUnit): ResourceAllocationSearchBasic
    {
        $this->allocationUnit = $allocationUnit;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAllocationUnit(): SearchEnumMultiSelectField
    {
        return $this->allocationUnit;
    }

    /**
     * @param SearchEnumMultiSelectField $approvalStatus
     * @return ResourceAllocationSearchBasic
     */
    public function setApprovalStatus(SearchEnumMultiSelectField $approvalStatus): ResourceAllocationSearchBasic
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApprovalStatus(): SearchEnumMultiSelectField
    {
        return $this->approvalStatus;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return ResourceAllocationSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): ResourceAllocationSearchBasic
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer(): SearchMultiSelectField
    {
        return $this->customer;
    }

    /**
     * @param SearchDateField $endDate
     * @return ResourceAllocationSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): ResourceAllocationSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ResourceAllocationSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ResourceAllocationSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return ResourceAllocationSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ResourceAllocationSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return ResourceAllocationSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ResourceAllocationSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return ResourceAllocationSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ResourceAllocationSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchMultiSelectField $nextApprover
     * @return ResourceAllocationSearchBasic
     */
    public function setNextApprover(SearchMultiSelectField $nextApprover): ResourceAllocationSearchBasic
    {
        $this->nextApprover = $nextApprover;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNextApprover(): SearchMultiSelectField
    {
        return $this->nextApprover;
    }

    /**
     * @param SearchStringField $notes
     * @return ResourceAllocationSearchBasic
     */
    public function setNotes(SearchStringField $notes): ResourceAllocationSearchBasic
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNotes(): SearchStringField
    {
        return $this->notes;
    }

    /**
     * @param SearchDoubleField $numberHours
     * @return ResourceAllocationSearchBasic
     */
    public function setNumberHours(SearchDoubleField $numberHours): ResourceAllocationSearchBasic
    {
        $this->numberHours = $numberHours;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNumberHours(): SearchDoubleField
    {
        return $this->numberHours;
    }

    /**
     * @param SearchDoubleField $percentOfTime
     * @return ResourceAllocationSearchBasic
     */
    public function setPercentOfTime(SearchDoubleField $percentOfTime): ResourceAllocationSearchBasic
    {
        $this->percentOfTime = $percentOfTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPercentOfTime(): SearchDoubleField
    {
        return $this->percentOfTime;
    }

    /**
     * @param SearchMultiSelectField $project
     * @return ResourceAllocationSearchBasic
     */
    public function setProject(SearchMultiSelectField $project): ResourceAllocationSearchBasic
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProject(): SearchMultiSelectField
    {
        return $this->project;
    }

    /**
     * @param SearchMultiSelectField $requestedBy
     * @return ResourceAllocationSearchBasic
     */
    public function setRequestedBy(SearchMultiSelectField $requestedBy): ResourceAllocationSearchBasic
    {
        $this->requestedBy = $requestedBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRequestedBy(): SearchMultiSelectField
    {
        return $this->requestedBy;
    }

    /**
     * @param SearchMultiSelectField $resource
     * @return ResourceAllocationSearchBasic
     */
    public function setResource(SearchMultiSelectField $resource): ResourceAllocationSearchBasic
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResource(): SearchMultiSelectField
    {
        return $this->resource;
    }

    /**
     * @param SearchDateField $startDate
     * @return ResourceAllocationSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): ResourceAllocationSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ResourceAllocationSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ResourceAllocationSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
