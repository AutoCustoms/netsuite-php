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

class TimeEntrySearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $approvalStatus;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $billable;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingClass;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $billingStatus;

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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isCharged;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $nextApprover;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

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
        "billable" => "SearchBooleanField",
        "billingClass" => "SearchMultiSelectField",
        "billingStatus" => "SearchBooleanField",
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
        "isCharged" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "lastModified" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "nextApprover" => "SearchMultiSelectField",
        "paidByPayroll" => "SearchBooleanField",
        "paidExternally" => "SearchBooleanField",
        "payItem" => "SearchMultiSelectField",
        "productive" => "SearchBooleanField",
        "subsidiary" => "SearchMultiSelectField",
        "type" => "SearchEnumMultiSelectField",
        "utilized" => "SearchBooleanField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $approvalStatus
     * @return TimeEntrySearchBasic
     */
    public function setApprovalStatus(SearchMultiSelectField $approvalStatus): TimeEntrySearchBasic
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
     * @param SearchBooleanField $billable
     * @return TimeEntrySearchBasic
     */
    public function setBillable(SearchBooleanField $billable): TimeEntrySearchBasic
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
     * @param SearchMultiSelectField $billingClass
     * @return TimeEntrySearchBasic
     */
    public function setBillingClass(SearchMultiSelectField $billingClass): TimeEntrySearchBasic
    {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingClass(): SearchMultiSelectField
    {
        return $this->billingClass;
    }

    /**
     * @param SearchBooleanField $billingStatus
     * @return TimeEntrySearchBasic
     */
    public function setBillingStatus(SearchBooleanField $billingStatus): TimeEntrySearchBasic
    {
        $this->billingStatus = $billingStatus;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillingStatus(): SearchBooleanField
    {
        return $this->billingStatus;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return TimeEntrySearchBasic
     */
    public function setClass(SearchMultiSelectField $class): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setDate(SearchDateField $date): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setDuration(SearchDoubleField $duration): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setExempt(SearchBooleanField $exempt): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TimeEntrySearchBasic
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
     * @param SearchBooleanField $isCharged
     * @return TimeEntrySearchBasic
     */
    public function setIsCharged(SearchBooleanField $isCharged): TimeEntrySearchBasic
    {
        $this->isCharged = $isCharged;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsCharged(): SearchBooleanField
    {
        return $this->isCharged;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return TimeEntrySearchBasic
     */
    public function setItem(SearchMultiSelectField $item): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setLastModified(SearchDateField $lastModified): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setMemo(SearchStringField $memo): TimeEntrySearchBasic
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
     * @param SearchMultiSelectField $nextApprover
     * @return TimeEntrySearchBasic
     */
    public function setNextApprover(SearchMultiSelectField $nextApprover): TimeEntrySearchBasic
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
     * @param SearchBooleanField $paidByPayroll
     * @return TimeEntrySearchBasic
     */
    public function setPaidByPayroll(SearchBooleanField $paidByPayroll): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setPaidExternally(SearchBooleanField $paidExternally): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setPayItem(SearchMultiSelectField $payItem): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setProductive(SearchBooleanField $productive): TimeEntrySearchBasic
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
     * @param SearchMultiSelectField $subsidiary
     * @return TimeEntrySearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): TimeEntrySearchBasic
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
     * @param SearchEnumMultiSelectField $type
     * @return TimeEntrySearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setUtilized(SearchBooleanField $utilized): TimeEntrySearchBasic
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
     * @return TimeEntrySearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): TimeEntrySearchBasic
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
