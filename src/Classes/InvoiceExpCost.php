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

class InvoiceExpCost {
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
     * @return InvoiceExpCost
     */
    public function setApply(bool $apply): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setDoc(int $doc): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setLine(int $line): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setTaxDetailsReference(string $taxDetailsReference): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setBilledDate(string $billedDate): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setJobDisp(string $jobDisp): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setEmployeeDisp(string $employeeDisp): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setCategoryDisp(string $categoryDisp): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setMemo(string $memo): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setDepartment(string $department): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setClass(string $class): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setLocation(string $location): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setOriginalAmount(float $originalAmount): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setAmount(float $amount): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setTaxAmount(float $taxAmount): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setTaxableDisp(string $taxableDisp): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setRevRecStartDate(string $revRecStartDate): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setRevRecEndDate(string $revRecEndDate): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setGrossAmt(float $grossAmt): InvoiceExpCost
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
     * @return InvoiceExpCost
     */
    public function setTaxCode(RecordRef $taxCode): InvoiceExpCost
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
