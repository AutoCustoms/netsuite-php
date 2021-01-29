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

class TimeEntry extends Record {
    /**
     * @var Duration
     */
    protected Duration $hours;

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
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $caseTaskEvent;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

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
    protected RecordRef $price;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var bool
     */
    protected bool $overrideRate;

    /**
     * @var string
     */
    protected string $memo;

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
     * @var string
     */
    protected string $billingClass;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $approvalStatus;

    /**
     * @var TimeBillTimeType
     */
    protected TimeBillTimeType $timeType;

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
        "hours" => "Duration",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customer" => "RecordRef",
        "caseTaskEvent" => "RecordRef",
        "item" => "RecordRef",
        "isBillable" => "boolean",
        "payrollItem" => "RecordRef",
        "paidExternally" => "boolean",
        "price" => "RecordRef",
        "rate" => "float",
        "overrideRate" => "boolean",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "billingClass" => "string",
        "subsidiary" => "RecordRef",
        "approvalStatus" => "RecordRef",
        "timeType" => "TimeBillTimeType",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param Duration $hours
     * @return TimeEntry
     */
    public function setHours(Duration $hours): TimeEntry
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
     * @param string $createdDate
     * @return TimeEntry
     */
    public function setCreatedDate(string $createdDate): TimeEntry
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
     * @return TimeEntry
     */
    public function setLastModifiedDate(string $lastModifiedDate): TimeEntry
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
     * @param RecordRef $customer
     * @return TimeEntry
     */
    public function setCustomer(RecordRef $customer): TimeEntry
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
     * @return TimeEntry
     */
    public function setCaseTaskEvent(RecordRef $caseTaskEvent): TimeEntry
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
     * @param RecordRef $item
     * @return TimeEntry
     */
    public function setItem(RecordRef $item): TimeEntry
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
     * @param bool $isBillable
     * @return TimeEntry
     */
    public function setIsBillable(bool $isBillable): TimeEntry
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
     * @return TimeEntry
     */
    public function setPayrollItem(RecordRef $payrollItem): TimeEntry
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
     * @return TimeEntry
     */
    public function setPaidExternally(bool $paidExternally): TimeEntry
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
     * @param RecordRef $price
     * @return TimeEntry
     */
    public function setPrice(RecordRef $price): TimeEntry
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
     * @param float $rate
     * @return TimeEntry
     */
    public function setRate(float $rate): TimeEntry
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
     * @return TimeEntry
     */
    public function setOverrideRate(bool $overrideRate): TimeEntry
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
     * @param string $memo
     * @return TimeEntry
     */
    public function setMemo(string $memo): TimeEntry
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
     * @param RecordRef $department
     * @return TimeEntry
     */
    public function setDepartment(RecordRef $department): TimeEntry
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
     * @return TimeEntry
     */
    public function setClass(RecordRef $class): TimeEntry
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
     * @return TimeEntry
     */
    public function setLocation(RecordRef $location): TimeEntry
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
     * @param string $billingClass
     * @return TimeEntry
     */
    public function setBillingClass(string $billingClass): TimeEntry
    {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingClass(): string
    {
        return $this->billingClass;
    }

    /**
     * @param RecordRef $subsidiary
     * @return TimeEntry
     */
    public function setSubsidiary(RecordRef $subsidiary): TimeEntry
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
     * @param RecordRef $approvalStatus
     * @return TimeEntry
     */
    public function setApprovalStatus(RecordRef $approvalStatus): TimeEntry
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
     * @param TimeBillTimeType $timeType
     * @return TimeEntry
     */
    public function setTimeType(TimeBillTimeType $timeType): TimeEntry
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
     * @param CustomFieldList $customFieldList
     * @return TimeEntry
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): TimeEntry
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
     * @return TimeEntry
     */
    public function setInternalId(string $internalId): TimeEntry
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
     * @return TimeEntry
     */
    public function setExternalId(string $externalId): TimeEntry
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
