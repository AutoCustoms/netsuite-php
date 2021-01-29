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

class TimeBill extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $employee;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $approvalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $caseTaskEvent;

    /**
     * @var bool
     */
    protected bool $isBillable;

    /**
     * @var RecordRef
     */
    protected RecordRef $payrollItem;

    /**
     * @var bool
     */
    protected bool $paidExternally;

    /**
     * @var RecordRef
     */
    protected RecordRef $workplace;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var Duration
     */
    protected Duration $hours;

    /**
     * @var RecordRef
     */
    protected RecordRef $price;

    /**
     * @var TimeBillTimeType
     */
    protected TimeBillTimeType $timeType;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var bool
     */
    protected bool $overrideRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $temporaryLocalJurisdiction;

    /**
     * @var RecordRef
     */
    protected RecordRef $temporaryStateJurisdiction;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var string
     */
    protected string $rejectionNote;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var bool
     */
    protected bool $supervisorApproval;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeSheet;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var bool
     */
    protected bool $timeModified;

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
        "customForm" => "RecordRef",
        "employee" => "RecordRef",
        "tranDate" => "dateTime",
        "approvalStatus" => "RecordRef",
        "customer" => "RecordRef",
        "caseTaskEvent" => "RecordRef",
        "isBillable" => "boolean",
        "payrollItem" => "RecordRef",
        "paidExternally" => "boolean",
        "workplace" => "RecordRef",
        "item" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "hours" => "Duration",
        "price" => "RecordRef",
        "timeType" => "TimeBillTimeType",
        "rate" => "float",
        "overrideRate" => "boolean",
        "temporaryLocalJurisdiction" => "RecordRef",
        "temporaryStateJurisdiction" => "RecordRef",
        "memo" => "string",
        "rejectionNote" => "string",
        "subsidiary" => "RecordRef",
        "supervisorApproval" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "timeSheet" => "RecordRef",
        "status" => "string",
        "timeModified" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return TimeBill
     */
    public function setCustomForm(RecordRef $customForm): TimeBill
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
     * @param RecordRef $employee
     * @return TimeBill
     */
    public function setEmployee(RecordRef $employee): TimeBill
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployee(): RecordRef
    {
        return $this->employee;
    }

    /**
     * @param string $tranDate
     * @return TimeBill
     */
    public function setTranDate(string $tranDate): TimeBill
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return TimeBill
     */
    public function setApprovalStatus(RecordRef $approvalStatus): TimeBill
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprovalStatus(): RecordRef
    {
        return $this->approvalStatus;
    }

    /**
     * @param RecordRef $customer
     * @return TimeBill
     */
    public function setCustomer(RecordRef $customer): TimeBill
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer(): RecordRef
    {
        return $this->customer;
    }

    /**
     * @param RecordRef $caseTaskEvent
     * @return TimeBill
     */
    public function setCaseTaskEvent(RecordRef $caseTaskEvent): TimeBill
    {
        $this->caseTaskEvent = $caseTaskEvent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCaseTaskEvent(): RecordRef
    {
        return $this->caseTaskEvent;
    }

    /**
     * @param bool $isBillable
     * @return TimeBill
     */
    public function setIsBillable(bool $isBillable): TimeBill
    {
        $this->isBillable = $isBillable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBillable(): bool
    {
        return $this->isBillable;
    }

    /**
     * @param RecordRef $payrollItem
     * @return TimeBill
     */
    public function setPayrollItem(RecordRef $payrollItem): TimeBill
    {
        $this->payrollItem = $payrollItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayrollItem(): RecordRef
    {
        return $this->payrollItem;
    }

    /**
     * @param bool $paidExternally
     * @return TimeBill
     */
    public function setPaidExternally(bool $paidExternally): TimeBill
    {
        $this->paidExternally = $paidExternally;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPaidExternally(): bool
    {
        return $this->paidExternally;
    }

    /**
     * @param RecordRef $workplace
     * @return TimeBill
     */
    public function setWorkplace(RecordRef $workplace): TimeBill
    {
        $this->workplace = $workplace;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkplace(): RecordRef
    {
        return $this->workplace;
    }

    /**
     * @param RecordRef $item
     * @return TimeBill
     */
    public function setItem(RecordRef $item): TimeBill
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $department
     * @return TimeBill
     */
    public function setDepartment(RecordRef $department): TimeBill
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return TimeBill
     */
    public function setClass(RecordRef $class): TimeBill
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return TimeBill
     */
    public function setLocation(RecordRef $location): TimeBill
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

    /**
     * @param Duration $hours
     * @return TimeBill
     */
    public function setHours(Duration $hours): TimeBill
    {
        $this->hours = $hours;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getHours(): Duration
    {
        return $this->hours;
    }

    /**
     * @param RecordRef $price
     * @return TimeBill
     */
    public function setPrice(RecordRef $price): TimeBill
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrice(): RecordRef
    {
        return $this->price;
    }

    /**
     * @param TimeBillTimeType $timeType
     * @return TimeBill
     */
    public function setTimeType(TimeBillTimeType $timeType): TimeBill
    {
        $this->timeType = $timeType;
        return $this;
    }

    /**
     * @return TimeBillTimeType
     */
    public function getTimeType(): TimeBillTimeType
    {
        return $this->timeType;
    }

    /**
     * @param float $rate
     * @return TimeBill
     */
    public function setRate(float $rate): TimeBill
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param bool $overrideRate
     * @return TimeBill
     */
    public function setOverrideRate(bool $overrideRate): TimeBill
    {
        $this->overrideRate = $overrideRate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverrideRate(): bool
    {
        return $this->overrideRate;
    }

    /**
     * @param RecordRef $temporaryLocalJurisdiction
     * @return TimeBill
     */
    public function setTemporaryLocalJurisdiction(RecordRef $temporaryLocalJurisdiction): TimeBill
    {
        $this->temporaryLocalJurisdiction = $temporaryLocalJurisdiction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemporaryLocalJurisdiction(): RecordRef
    {
        return $this->temporaryLocalJurisdiction;
    }

    /**
     * @param RecordRef $temporaryStateJurisdiction
     * @return TimeBill
     */
    public function setTemporaryStateJurisdiction(RecordRef $temporaryStateJurisdiction): TimeBill
    {
        $this->temporaryStateJurisdiction = $temporaryStateJurisdiction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemporaryStateJurisdiction(): RecordRef
    {
        return $this->temporaryStateJurisdiction;
    }

    /**
     * @param string $memo
     * @return TimeBill
     */
    public function setMemo(string $memo): TimeBill
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param string $rejectionNote
     * @return TimeBill
     */
    public function setRejectionNote(string $rejectionNote): TimeBill
    {
        $this->rejectionNote = $rejectionNote;
        return $this;
    }

    /**
     * @return string
     */
    public function getRejectionNote(): string
    {
        return $this->rejectionNote;
    }

    /**
     * @param RecordRef $subsidiary
     * @return TimeBill
     */
    public function setSubsidiary(RecordRef $subsidiary): TimeBill
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
     * @param bool $supervisorApproval
     * @return TimeBill
     */
    public function setSupervisorApproval(bool $supervisorApproval): TimeBill
    {
        $this->supervisorApproval = $supervisorApproval;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSupervisorApproval(): bool
    {
        return $this->supervisorApproval;
    }

    /**
     * @param string $createdDate
     * @return TimeBill
     */
    public function setCreatedDate(string $createdDate): TimeBill
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return TimeBill
     */
    public function setLastModifiedDate(string $lastModifiedDate): TimeBill
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param RecordRef $timeSheet
     * @return TimeBill
     */
    public function setTimeSheet(RecordRef $timeSheet): TimeBill
    {
        $this->timeSheet = $timeSheet;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeSheet(): RecordRef
    {
        return $this->timeSheet;
    }

    /**
     * @param string $status
     * @return TimeBill
     */
    public function setStatus(string $status): TimeBill
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param bool $timeModified
     * @return TimeBill
     */
    public function setTimeModified(bool $timeModified): TimeBill
    {
        $this->timeModified = $timeModified;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTimeModified(): bool
    {
        return $this->timeModified;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return TimeBill
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): TimeBill
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
     * @return TimeBill
     */
    public function setInternalId(string $internalId): TimeBill
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
     * @return TimeBill
     */
    public function setExternalId(string $externalId): TimeBill
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
