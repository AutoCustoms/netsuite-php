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

class TimeItem {
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var RecordRef
     */
    protected RecordRef $employee;

    /**
     * @var TimeItemTimeType
     */
    protected TimeItemTimeType $timeType;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var bool
     */
    protected bool $isBillable;

    /**
     * @var RecordRef
     */
    protected RecordRef $payrollItem;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $temporaryLocalJurisdiction;

    /**
     * @var RecordRef
     */
    protected RecordRef $temporaryStateJurisdiction;

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
     * @var float
     */
    protected float $rate;

    /**
     * @var bool
     */
    protected bool $overrideRate;

    /**
     * @var Duration
     */
    protected Duration $hoursTotal;

    /**
     * @var RecordRef
     */
    protected RecordRef $caseTaskEvent;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $isUtilized;

    /**
     * @var bool
     */
    protected bool $isProductive;

    /**
     * @var bool
     */
    protected bool $isExempt;

    static $paramtypesmap = array(
        "id" => "integer",
        "employee" => "RecordRef",
        "timeType" => "TimeItemTimeType",
        "tranDate" => "dateTime",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "payrollItem" => "RecordRef",
        "item" => "RecordRef",
        "temporaryLocalJurisdiction" => "RecordRef",
        "temporaryStateJurisdiction" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "hours" => "Duration",
        "price" => "RecordRef",
        "rate" => "float",
        "overrideRate" => "boolean",
        "hoursTotal" => "Duration",
        "caseTaskEvent" => "RecordRef",
        "memo" => "string",
        "isUtilized" => "boolean",
        "isProductive" => "boolean",
        "isExempt" => "boolean",
    );

    /**
     * @param int $id
     * @return TimeItem
     */
    public function setId(int $id): TimeItem
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param RecordRef $employee
     * @return TimeItem
     */
    public function setEmployee(RecordRef $employee): TimeItem
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
     * @param TimeItemTimeType $timeType
     * @return TimeItem
     */
    public function setTimeType(TimeItemTimeType $timeType): TimeItem
    {
        $this->timeType = $timeType;
        return $this;
    }

    /**
     * @return TimeItemTimeType
     */
    public function getTimeType(): TimeItemTimeType
    {
        return $this->timeType;
    }

    /**
     * @param string $tranDate
     * @return TimeItem
     */
    public function setTranDate(string $tranDate): TimeItem
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
     * @param RecordRef $customer
     * @return TimeItem
     */
    public function setCustomer(RecordRef $customer): TimeItem
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
     * @param bool $isBillable
     * @return TimeItem
     */
    public function setIsBillable(bool $isBillable): TimeItem
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
     * @return TimeItem
     */
    public function setPayrollItem(RecordRef $payrollItem): TimeItem
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
     * @param RecordRef $item
     * @return TimeItem
     */
    public function setItem(RecordRef $item): TimeItem
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
     * @param RecordRef $temporaryLocalJurisdiction
     * @return TimeItem
     */
    public function setTemporaryLocalJurisdiction(RecordRef $temporaryLocalJurisdiction): TimeItem
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
     * @return TimeItem
     */
    public function setTemporaryStateJurisdiction(RecordRef $temporaryStateJurisdiction): TimeItem
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
     * @param RecordRef $department
     * @return TimeItem
     */
    public function setDepartment(RecordRef $department): TimeItem
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
     * @return TimeItem
     */
    public function setClass(RecordRef $class): TimeItem
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
     * @return TimeItem
     */
    public function setLocation(RecordRef $location): TimeItem
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
     * @return TimeItem
     */
    public function setHours(Duration $hours): TimeItem
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
     * @return TimeItem
     */
    public function setPrice(RecordRef $price): TimeItem
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
     * @return TimeItem
     */
    public function setRate(float $rate): TimeItem
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
     * @return TimeItem
     */
    public function setOverrideRate(bool $overrideRate): TimeItem
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
     * @param Duration $hoursTotal
     * @return TimeItem
     */
    public function setHoursTotal(Duration $hoursTotal): TimeItem
    {
        $this->hoursTotal = $hoursTotal;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getHoursTotal(): Duration
    {
        return $this->hoursTotal;
    }

    /**
     * @param RecordRef $caseTaskEvent
     * @return TimeItem
     */
    public function setCaseTaskEvent(RecordRef $caseTaskEvent): TimeItem
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
     * @param string $memo
     * @return TimeItem
     */
    public function setMemo(string $memo): TimeItem
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
     * @param bool $isUtilized
     * @return TimeItem
     */
    public function setIsUtilized(bool $isUtilized): TimeItem
    {
        $this->isUtilized = $isUtilized;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsUtilized(): bool
    {
        return $this->isUtilized;
    }

    /**
     * @param bool $isProductive
     * @return TimeItem
     */
    public function setIsProductive(bool $isProductive): TimeItem
    {
        $this->isProductive = $isProductive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsProductive(): bool
    {
        return $this->isProductive;
    }

    /**
     * @param bool $isExempt
     * @return TimeItem
     */
    public function setIsExempt(bool $isExempt): TimeItem
    {
        $this->isExempt = $isExempt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsExempt(): bool
    {
        return $this->isExempt;
    }

}
