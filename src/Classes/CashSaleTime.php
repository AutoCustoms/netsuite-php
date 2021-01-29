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

class CashSaleTime {
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
    protected string $billedDate;

    /**
     * @var string
     */
    protected string $employeeDisp;

    /**
     * @var string
     */
    protected string $itemDisp;

    /**
     * @var string
     */
    protected string $jobDisp;

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
     * @var string
     */
    protected string $quantity;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var string
     */
    protected string $unitDisp;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var float
     */
    protected float $taxAmount;

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

    /**
     * @var string
     */
    protected string $taxDetailsReference;

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
        "billedDate" => "dateTime",
        "employeeDisp" => "string",
        "itemDisp" => "string",
        "jobDisp" => "string",
        "department" => "string",
        "class" => "string",
        "location" => "string",
        "quantity" => "string",
        "rate" => "float",
        "unitDisp" => "string",
        "amount" => "float",
        "memo" => "string",
        "taxAmount" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "taxDetailsReference" => "string",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
    );

    /**
     * @param bool $apply
     * @return CashSaleTime
     */
    public function setApply(bool $apply): CashSaleTime
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
     * @return CashSaleTime
     */
    public function setDoc(int $doc): CashSaleTime
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
     * @return CashSaleTime
     */
    public function setLine(int $line): CashSaleTime
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
     * @param string $billedDate
     * @return CashSaleTime
     */
    public function setBilledDate(string $billedDate): CashSaleTime
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
     * @param string $employeeDisp
     * @return CashSaleTime
     */
    public function setEmployeeDisp(string $employeeDisp): CashSaleTime
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
     * @param string $itemDisp
     * @return CashSaleTime
     */
    public function setItemDisp(string $itemDisp): CashSaleTime
    {
        $this->itemDisp = $itemDisp;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDisp(): string
    {
        return $this->itemDisp;
    }

    /**
     * @param string $jobDisp
     * @return CashSaleTime
     */
    public function setJobDisp(string $jobDisp): CashSaleTime
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
     * @param string $department
     * @return CashSaleTime
     */
    public function setDepartment(string $department): CashSaleTime
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
     * @return CashSaleTime
     */
    public function setClass(string $class): CashSaleTime
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
     * @return CashSaleTime
     */
    public function setLocation(string $location): CashSaleTime
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
     * @param string $quantity
     * @return CashSaleTime
     */
    public function setQuantity(string $quantity): CashSaleTime
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @param float $rate
     * @return CashSaleTime
     */
    public function setRate(float $rate): CashSaleTime
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
     * @param string $unitDisp
     * @return CashSaleTime
     */
    public function setUnitDisp(string $unitDisp): CashSaleTime
    {
        $this->unitDisp = $unitDisp;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitDisp(): string
    {
        return $this->unitDisp;
    }

    /**
     * @param float $amount
     * @return CashSaleTime
     */
    public function setAmount(float $amount): CashSaleTime
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
     * @param string $memo
     * @return CashSaleTime
     */
    public function setMemo(string $memo): CashSaleTime
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
     * @param float $taxAmount
     * @return CashSaleTime
     */
    public function setTaxAmount(float $taxAmount): CashSaleTime
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
     * @param RecordRef $revRecSchedule
     * @return CashSaleTime
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CashSaleTime
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
     * @return CashSaleTime
     */
    public function setRevRecStartDate(string $revRecStartDate): CashSaleTime
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
     * @return CashSaleTime
     */
    public function setRevRecEndDate(string $revRecEndDate): CashSaleTime
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
     * @return CashSaleTime
     */
    public function setGrossAmt(float $grossAmt): CashSaleTime
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
     * @param string $taxDetailsReference
     * @return CashSaleTime
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CashSaleTime
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
     * @param RecordRef $taxCode
     * @return CashSaleTime
     */
    public function setTaxCode(RecordRef $taxCode): CashSaleTime
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
