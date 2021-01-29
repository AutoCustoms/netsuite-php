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

class EmployeeAccruedTime {
    /**
     * @var RecordRef
     */
    protected RecordRef $payrollItem;

    /**
     * @var float
     */
    protected float $accruedHours;

    /**
     * @var float
     */
    protected float $accrualRate;

    /**
     * @var float
     */
    protected float $monetaryRate;

    /**
     * @var bool
     */
    protected bool $resetAccruedHoursAtYearEnd;

    /**
     * @var EmployeeAccruedTimeAccrualMethod
     */
    protected EmployeeAccruedTimeAccrualMethod $accrualMethod;

    /**
     * @var float
     */
    protected float $maximumAccruedHours;

    /**
     * @var bool
     */
    protected bool $inactive;

    /**
     * @var string
     */
    protected string $effectiveDate;

    /**
     * @var string
     */
    protected string $expirationDate;

    static $paramtypesmap = array(
        "payrollItem" => "RecordRef",
        "accruedHours" => "float",
        "accrualRate" => "float",
        "monetaryRate" => "float",
        "resetAccruedHoursAtYearEnd" => "boolean",
        "accrualMethod" => "EmployeeAccruedTimeAccrualMethod",
        "maximumAccruedHours" => "float",
        "inactive" => "boolean",
        "effectiveDate" => "dateTime",
        "expirationDate" => "dateTime",
    );

    /**
     * @param RecordRef $payrollItem
     * @return EmployeeAccruedTime
     */
    public function setPayrollItem(RecordRef $payrollItem): EmployeeAccruedTime
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
     * @param float $accruedHours
     * @return EmployeeAccruedTime
     */
    public function setAccruedHours(float $accruedHours): EmployeeAccruedTime
    {
        $this->accruedHours = $accruedHours;
        return $this;
    }

    /**
     * @return float
     */
    public function getAccruedHours(): float
    {
        return $this->accruedHours;
    }

    /**
     * @param float $accrualRate
     * @return EmployeeAccruedTime
     */
    public function setAccrualRate(float $accrualRate): EmployeeAccruedTime
    {
        $this->accrualRate = $accrualRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAccrualRate(): float
    {
        return $this->accrualRate;
    }

    /**
     * @param float $monetaryRate
     * @return EmployeeAccruedTime
     */
    public function setMonetaryRate(float $monetaryRate): EmployeeAccruedTime
    {
        $this->monetaryRate = $monetaryRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonetaryRate(): float
    {
        return $this->monetaryRate;
    }

    /**
     * @param bool $resetAccruedHoursAtYearEnd
     * @return EmployeeAccruedTime
     */
    public function setResetAccruedHoursAtYearEnd(bool $resetAccruedHoursAtYearEnd): EmployeeAccruedTime
    {
        $this->resetAccruedHoursAtYearEnd = $resetAccruedHoursAtYearEnd;
        return $this;
    }

    /**
     * @return bool
     */
    public function getResetAccruedHoursAtYearEnd(): bool
    {
        return $this->resetAccruedHoursAtYearEnd;
    }

    /**
     * @param EmployeeAccruedTimeAccrualMethod $accrualMethod
     * @return EmployeeAccruedTime
     */
    public function setAccrualMethod(EmployeeAccruedTimeAccrualMethod $accrualMethod): EmployeeAccruedTime
    {
        $this->accrualMethod = $accrualMethod;
        return $this;
    }

    /**
     * @return EmployeeAccruedTimeAccrualMethod
     */
    public function getAccrualMethod(): EmployeeAccruedTimeAccrualMethod
    {
        return $this->accrualMethod;
    }

    /**
     * @param float $maximumAccruedHours
     * @return EmployeeAccruedTime
     */
    public function setMaximumAccruedHours(float $maximumAccruedHours): EmployeeAccruedTime
    {
        $this->maximumAccruedHours = $maximumAccruedHours;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaximumAccruedHours(): float
    {
        return $this->maximumAccruedHours;
    }

    /**
     * @param bool $inactive
     * @return EmployeeAccruedTime
     */
    public function setInactive(bool $inactive): EmployeeAccruedTime
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInactive(): bool
    {
        return $this->inactive;
    }

    /**
     * @param string $effectiveDate
     * @return EmployeeAccruedTime
     */
    public function setEffectiveDate(string $effectiveDate): EmployeeAccruedTime
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    /**
     * @param string $expirationDate
     * @return EmployeeAccruedTime
     */
    public function setExpirationDate(string $expirationDate): EmployeeAccruedTime
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

}
