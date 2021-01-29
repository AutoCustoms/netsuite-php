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

class EmployeeEarning {
    /**
     * @var RecordRef
     */
    protected RecordRef $payrollItem;

    /**
     * @var string
     */
    protected string $payRate;

    /**
     * @var bool
     */
    protected bool $primaryEarning;

    /**
     * @var float
     */
    protected float $defaultHours;

    /**
     * @var bool
     */
    protected bool $inactive;

    /**
     * @var bool
     */
    protected bool $defaultEarning;

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
        "payRate" => "string",
        "primaryEarning" => "boolean",
        "defaultHours" => "float",
        "inactive" => "boolean",
        "defaultEarning" => "boolean",
        "effectiveDate" => "dateTime",
        "expirationDate" => "dateTime",
    );

    /**
     * @param RecordRef $payrollItem
     * @return EmployeeEarning
     */
    public function setPayrollItem(RecordRef $payrollItem): EmployeeEarning
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
     * @param string $payRate
     * @return EmployeeEarning
     */
    public function setPayRate(string $payRate): EmployeeEarning
    {
        $this->payRate = $payRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayRate(): string
    {
        return $this->payRate;
    }

    /**
     * @param bool $primaryEarning
     * @return EmployeeEarning
     */
    public function setPrimaryEarning(bool $primaryEarning): EmployeeEarning
    {
        $this->primaryEarning = $primaryEarning;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrimaryEarning(): bool
    {
        return $this->primaryEarning;
    }

    /**
     * @param float $defaultHours
     * @return EmployeeEarning
     */
    public function setDefaultHours(float $defaultHours): EmployeeEarning
    {
        $this->defaultHours = $defaultHours;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultHours(): float
    {
        return $this->defaultHours;
    }

    /**
     * @param bool $inactive
     * @return EmployeeEarning
     */
    public function setInactive(bool $inactive): EmployeeEarning
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
     * @param bool $defaultEarning
     * @return EmployeeEarning
     */
    public function setDefaultEarning(bool $defaultEarning): EmployeeEarning
    {
        $this->defaultEarning = $defaultEarning;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDefaultEarning(): bool
    {
        return $this->defaultEarning;
    }

    /**
     * @param string $effectiveDate
     * @return EmployeeEarning
     */
    public function setEffectiveDate(string $effectiveDate): EmployeeEarning
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
     * @return EmployeeEarning
     */
    public function setExpirationDate(string $expirationDate): EmployeeEarning
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
