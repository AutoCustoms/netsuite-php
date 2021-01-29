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

class EmployeeCompanyContribution {
    /**
     * @var RecordRef
     */
    protected RecordRef $payrollItem;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var float
     */
    protected float $limit;

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
        "rate" => "string",
        "limit" => "float",
        "inactive" => "boolean",
        "effectiveDate" => "dateTime",
        "expirationDate" => "dateTime",
    );

    /**
     * @param RecordRef $payrollItem
     * @return EmployeeCompanyContribution
     */
    public function setPayrollItem(RecordRef $payrollItem): EmployeeCompanyContribution
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
     * @param string $rate
     * @return EmployeeCompanyContribution
     */
    public function setRate(string $rate): EmployeeCompanyContribution
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param float $limit
     * @return EmployeeCompanyContribution
     */
    public function setLimit(float $limit): EmployeeCompanyContribution
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return float
     */
    public function getLimit(): float
    {
        return $this->limit;
    }

    /**
     * @param bool $inactive
     * @return EmployeeCompanyContribution
     */
    public function setInactive(bool $inactive): EmployeeCompanyContribution
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
     * @return EmployeeCompanyContribution
     */
    public function setEffectiveDate(string $effectiveDate): EmployeeCompanyContribution
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
     * @return EmployeeCompanyContribution
     */
    public function setExpirationDate(string $expirationDate): EmployeeCompanyContribution
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
