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

class CashSaleExpCost {
    /**
     * @var bool
     */
    protected bool $apply;

    /**
     * @var int
     */
    protected int $doc;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var string
     */
    protected string $billedDate;

    /**
     * @var string
     */
    protected string $jobDisp;

    /**
     * @var string
     */
    protected string $employeeDisp;

    /**
     * @var string
     */
    protected string $categoryDisp;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var string
     */
    protected string $department;

    /**
     * @var string
     */
    protected string $class;

    /**
     * @var string
     */
    protected string $location;

    /**
     * @var float
     */
    protected float $originalAmount;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var string
     */
    protected string $taxableDisp;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

    /**
     * @var string
     */
    protected string $revRecStartDate;

    /**
     * @var string
     */
    protected string $revRecEndDate;

    /**
     * @var float
     */
    protected float $grossAmt;

    protected $tax1Amt;
    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "taxDetailsReference" => "string",
        "billedDate" => "dateTime",
        "jobDisp" => "string",
        "employeeDisp" => "string",
        "categoryDisp" => "string",
        "memo" => "string",
        "department" => "string",
        "class" => "string",
        "location" => "string",
        "originalAmount" => "float",
        "amount" => "float",
        "taxAmount" => "float",
        "taxableDisp" => "string",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
    );

    /**
     * @param bool $apply
     * @return CashSaleExpCost
     */
    public function setApply(bool $apply): CashSaleExpCost
    {
        $this->apply = $apply;
        return $this;
    }

    /**
     * @return bool
     */
    public function getApply(): bool
    {
        return $this->apply;
    }

    /**
     * @param int $doc
     * @return CashSaleExpCost
     */
    public function setDoc(int $doc): CashSaleExpCost
    {
        $this->doc = $doc;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoc(): int
    {
        return $this->doc;
    }

    /**
     * @param int $line
     * @return CashSaleExpCost
     */
    public function setLine(int $line): CashSaleExpCost
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param string $taxDetailsReference
     * @return CashSaleExpCost
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CashSaleExpCost
    {
        $this->taxDetailsReference = $taxDetailsReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxDetailsReference(): string
    {
        return $this->taxDetailsReference;
    }

    /**
     * @param string $billedDate
     * @return CashSaleExpCost
     */
    public function setBilledDate(string $billedDate): CashSaleExpCost
    {
        $this->billedDate = $billedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getBilledDate(): string
    {
        return $this->billedDate;
    }

    /**
     * @param string $jobDisp
     * @return CashSaleExpCost
     */
    public function setJobDisp(string $jobDisp): CashSaleExpCost
    {
        $this->jobDisp = $jobDisp;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobDisp(): string
    {
        return $this->jobDisp;
    }

    /**
     * @param string $employeeDisp
     * @return CashSaleExpCost
     */
    public function setEmployeeDisp(string $employeeDisp): CashSaleExpCost
    {
        $this->employeeDisp = $employeeDisp;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeDisp(): string
    {
        return $this->employeeDisp;
    }

    /**
     * @param string $categoryDisp
     * @return CashSaleExpCost
     */
    public function setCategoryDisp(string $categoryDisp): CashSaleExpCost
    {
        $this->categoryDisp = $categoryDisp;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryDisp(): string
    {
        return $this->categoryDisp;
    }

    /**
     * @param string $memo
     * @return CashSaleExpCost
     */
    public function setMemo(string $memo): CashSaleExpCost
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
     * @param string $department
     * @return CashSaleExpCost
     */
    public function setDepartment(string $department): CashSaleExpCost
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $class
     * @return CashSaleExpCost
     */
    public function setClass(string $class): CashSaleExpCost
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $location
     * @return CashSaleExpCost
     */
    public function setLocation(string $location): CashSaleExpCost
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param float $originalAmount
     * @return CashSaleExpCost
     */
    public function setOriginalAmount(float $originalAmount): CashSaleExpCost
    {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOriginalAmount(): float
    {
        return $this->originalAmount;
    }

    /**
     * @param float $amount
     * @return CashSaleExpCost
     */
    public function setAmount(float $amount): CashSaleExpCost
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $taxAmount
     * @return CashSaleExpCost
     */
    public function setTaxAmount(float $taxAmount): CashSaleExpCost
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }

    /**
     * @param string $taxableDisp
     * @return CashSaleExpCost
     */
    public function setTaxableDisp(string $taxableDisp): CashSaleExpCost
    {
        $this->taxableDisp = $taxableDisp;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxableDisp(): string
    {
        return $this->taxableDisp;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return CashSaleExpCost
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CashSaleExpCost
    {
        $this->revRecSchedule = $revRecSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule(): RecordRef
    {
        return $this->revRecSchedule;
    }

    /**
     * @param string $revRecStartDate
     * @return CashSaleExpCost
     */
    public function setRevRecStartDate(string $revRecStartDate): CashSaleExpCost
    {
        $this->revRecStartDate = $revRecStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevRecStartDate(): string
    {
        return $this->revRecStartDate;
    }

    /**
     * @param string $revRecEndDate
     * @return CashSaleExpCost
     */
    public function setRevRecEndDate(string $revRecEndDate): CashSaleExpCost
    {
        $this->revRecEndDate = $revRecEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevRecEndDate(): string
    {
        return $this->revRecEndDate;
    }

    /**
     * @param float $grossAmt
     * @return CashSaleExpCost
     */
    public function setGrossAmt(float $grossAmt): CashSaleExpCost
    {
        $this->grossAmt = $grossAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmt(): float
    {
        return $this->grossAmt;
    }

    /**
     * @param RecordRef $taxCode
     * @return CashSaleExpCost
     */
    public function setTaxCode(RecordRef $taxCode): CashSaleExpCost
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode(): RecordRef
    {
        return $this->taxCode;
    }

}
