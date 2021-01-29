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

class TimeBillSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $approvalStatus;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $approved;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $billable;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $date;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $duration;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $employee;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $exempt;

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
    protected SearchMultiSelectField $item;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModified;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $paidByPayroll;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $paidExternally;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $payItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $productive;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $rejectionNote;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $temporaryLocalJurisdiction;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $temporaryStateJurisdiction;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $timeModified;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $timeSheet;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $utilized;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "approvalStatus" => "SearchMultiSelectField",
        "approved" => "SearchBooleanField",
        "billable" => "SearchBooleanField",
        "class" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "date" => "SearchDateField",
        "dateCreated" => "SearchDateField",
        "department" => "SearchMultiSelectField",
        "duration" => "SearchDoubleField",
        "employee" => "SearchMultiSelectField",
        "exempt" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "lastModified" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "paidByPayroll" => "SearchBooleanField",
        "paidExternally" => "SearchBooleanField",
        "payItem" => "SearchMultiSelectField",
        "productive" => "SearchBooleanField",
        "rejectionNote" => "SearchStringField",
        "status" => "SearchBooleanField",
        "subsidiary" => "SearchMultiSelectField",
        "temporaryLocalJurisdiction" => "SearchMultiSelectField",
        "temporaryStateJurisdiction" => "SearchMultiSelectField",
        "timeModified" => "SearchBooleanField",
        "timeSheet" => "SearchMultiSelectField",
        "type" => "SearchEnumMultiSelectField",
        "utilized" => "SearchBooleanField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $approvalStatus
     * @return TimeBillSearchBasic
     */
    public function setApprovalStatus(SearchMultiSelectField $approvalStatus): TimeBillSearchBasic
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getApprovalStatus(): SearchMultiSelectField
    {
        return $this->approvalStatus;
    }

    /**
     * @param SearchBooleanField $approved
     * @return TimeBillSearchBasic
     */
    public function setApproved(SearchBooleanField $approved): TimeBillSearchBasic
    {
        $this->approved = $approved;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApproved(): SearchBooleanField
    {
        return $this->approved;
    }

    /**
     * @param SearchBooleanField $billable
     * @return TimeBillSearchBasic
     */
    public function setBillable(SearchBooleanField $billable): TimeBillSearchBasic
    {
        $this->billable = $billable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillable(): SearchBooleanField
    {
        return $this->billable;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return TimeBillSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): TimeBillSearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return TimeBillSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): TimeBillSearchBasic
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
     * @param SearchDateField $date
     * @return TimeBillSearchBasic
     */
    public function setDate(SearchDateField $date): TimeBillSearchBasic
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDate(): SearchDateField
    {
        return $this->date;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return TimeBillSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): TimeBillSearchBasic
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated(): SearchDateField
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return TimeBillSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): TimeBillSearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchDoubleField $duration
     * @return TimeBillSearchBasic
     */
    public function setDuration(SearchDoubleField $duration): TimeBillSearchBasic
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDuration(): SearchDoubleField
    {
        return $this->duration;
    }

    /**
     * @param SearchMultiSelectField $employee
     * @return TimeBillSearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee): TimeBillSearchBasic
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployee(): SearchMultiSelectField
    {
        return $this->employee;
    }

    /**
     * @param SearchBooleanField $exempt
     * @return TimeBillSearchBasic
     */
    public function setExempt(SearchBooleanField $exempt): TimeBillSearchBasic
    {
        $this->exempt = $exempt;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExempt(): SearchBooleanField
    {
        return $this->exempt;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return TimeBillSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TimeBillSearchBasic
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
     * @return TimeBillSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TimeBillSearchBasic
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
     * @param SearchMultiSelectField $item
     * @return TimeBillSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): TimeBillSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchDateField $lastModified
     * @return TimeBillSearchBasic
     */
    public function setLastModified(SearchDateField $lastModified): TimeBillSearchBasic
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModified(): SearchDateField
    {
        return $this->lastModified;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return TimeBillSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): TimeBillSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $memo
     * @return TimeBillSearchBasic
     */
    public function setMemo(SearchStringField $memo): TimeBillSearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchBooleanField $paidByPayroll
     * @return TimeBillSearchBasic
     */
    public function setPaidByPayroll(SearchBooleanField $paidByPayroll): TimeBillSearchBasic
    {
        $this->paidByPayroll = $paidByPayroll;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaidByPayroll(): SearchBooleanField
    {
        return $this->paidByPayroll;
    }

    /**
     * @param SearchBooleanField $paidExternally
     * @return TimeBillSearchBasic
     */
    public function setPaidExternally(SearchBooleanField $paidExternally): TimeBillSearchBasic
    {
        $this->paidExternally = $paidExternally;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaidExternally(): SearchBooleanField
    {
        return $this->paidExternally;
    }

    /**
     * @param SearchMultiSelectField $payItem
     * @return TimeBillSearchBasic
     */
    public function setPayItem(SearchMultiSelectField $payItem): TimeBillSearchBasic
    {
        $this->payItem = $payItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayItem(): SearchMultiSelectField
    {
        return $this->payItem;
    }

    /**
     * @param SearchBooleanField $productive
     * @return TimeBillSearchBasic
     */
    public function setProductive(SearchBooleanField $productive): TimeBillSearchBasic
    {
        $this->productive = $productive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getProductive(): SearchBooleanField
    {
        return $this->productive;
    }

    /**
     * @param SearchStringField $rejectionNote
     * @return TimeBillSearchBasic
     */
    public function setRejectionNote(SearchStringField $rejectionNote): TimeBillSearchBasic
    {
        $this->rejectionNote = $rejectionNote;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRejectionNote(): SearchStringField
    {
        return $this->rejectionNote;
    }

    /**
     * @param SearchBooleanField $status
     * @return TimeBillSearchBasic
     */
    public function setStatus(SearchBooleanField $status): TimeBillSearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getStatus(): SearchBooleanField
    {
        return $this->status;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return TimeBillSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): TimeBillSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $temporaryLocalJurisdiction
     * @return TimeBillSearchBasic
     */
    public function setTemporaryLocalJurisdiction(SearchMultiSelectField $temporaryLocalJurisdiction): TimeBillSearchBasic
    {
        $this->temporaryLocalJurisdiction = $temporaryLocalJurisdiction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTemporaryLocalJurisdiction(): SearchMultiSelectField
    {
        return $this->temporaryLocalJurisdiction;
    }

    /**
     * @param SearchMultiSelectField $temporaryStateJurisdiction
     * @return TimeBillSearchBasic
     */
    public function setTemporaryStateJurisdiction(SearchMultiSelectField $temporaryStateJurisdiction): TimeBillSearchBasic
    {
        $this->temporaryStateJurisdiction = $temporaryStateJurisdiction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTemporaryStateJurisdiction(): SearchMultiSelectField
    {
        return $this->temporaryStateJurisdiction;
    }

    /**
     * @param SearchBooleanField $timeModified
     * @return TimeBillSearchBasic
     */
    public function setTimeModified(SearchBooleanField $timeModified): TimeBillSearchBasic
    {
        $this->timeModified = $timeModified;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTimeModified(): SearchBooleanField
    {
        return $this->timeModified;
    }

    /**
     * @param SearchMultiSelectField $timeSheet
     * @return TimeBillSearchBasic
     */
    public function setTimeSheet(SearchMultiSelectField $timeSheet): TimeBillSearchBasic
    {
        $this->timeSheet = $timeSheet;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTimeSheet(): SearchMultiSelectField
    {
        return $this->timeSheet;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return TimeBillSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): TimeBillSearchBasic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType(): SearchEnumMultiSelectField
    {
        return $this->type;
    }

    /**
     * @param SearchBooleanField $utilized
     * @return TimeBillSearchBasic
     */
    public function setUtilized(SearchBooleanField $utilized): TimeBillSearchBasic
    {
        $this->utilized = $utilized;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUtilized(): SearchBooleanField
    {
        return $this->utilized;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return TimeBillSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): TimeBillSearchBasic
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
