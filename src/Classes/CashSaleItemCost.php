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

class CashSaleItemCost {
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
    protected string $itemDisp;

    /**
     * @var string
     */
    protected string $memo;

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
    protected string $unitDisp;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var string
     */
    protected string $itemCostCount;

    /**
     * @var string
     */
    protected string $quantity;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var float
     */
    protected float $amount;

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
        "itemDisp" => "string",
        "memo" => "string",
        "jobDisp" => "string",
        "department" => "string",
        "class" => "string",
        "location" => "string",
        "unitDisp" => "string",
        "options" => "CustomFieldList",
        "itemCostCount" => "string",
        "quantity" => "string",
        "serialNumbers" => "string",
        "cost" => "float",
        "amount" => "float",
        "taxAmount" => "float",
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
     * @return CashSaleItemCost
     */
    public function setApply(bool $apply): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setDoc(int $doc): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setLine(int $line): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setBilledDate(string $billedDate): CashSaleItemCost
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
     * @param string $itemDisp
     * @return CashSaleItemCost
     */
    public function setItemDisp(string $itemDisp): CashSaleItemCost
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
     * @param string $memo
     * @return CashSaleItemCost
     */
    public function setMemo(string $memo): CashSaleItemCost
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
     * @param string $jobDisp
     * @return CashSaleItemCost
     */
    public function setJobDisp(string $jobDisp): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setDepartment(string $department): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setClass(string $class): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setLocation(string $location): CashSaleItemCost
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
     * @param string $unitDisp
     * @return CashSaleItemCost
     */
    public function setUnitDisp(string $unitDisp): CashSaleItemCost
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
     * @param CustomFieldList $options
     * @return CashSaleItemCost
     */
    public function setOptions(CustomFieldList $options): CashSaleItemCost
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getOptions(): CustomFieldList
    {
        return $this->options;
    }

    /**
     * @param string $itemCostCount
     * @return CashSaleItemCost
     */
    public function setItemCostCount(string $itemCostCount): CashSaleItemCost
    {
        $this->itemCostCount = $itemCostCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemCostCount(): string
    {
        return $this->itemCostCount;
    }

    /**
     * @param string $quantity
     * @return CashSaleItemCost
     */
    public function setQuantity(string $quantity): CashSaleItemCost
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
     * @param string $serialNumbers
     * @return CashSaleItemCost
     */
    public function setSerialNumbers(string $serialNumbers): CashSaleItemCost
    {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers(): string
    {
        return $this->serialNumbers;
    }

    /**
     * @param float $cost
     * @return CashSaleItemCost
     */
    public function setCost(float $cost): CashSaleItemCost
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $amount
     * @return CashSaleItemCost
     */
    public function setAmount(float $amount): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setTaxAmount(float $taxAmount): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setRevRecStartDate(string $revRecStartDate): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setRevRecEndDate(string $revRecEndDate): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setGrossAmt(float $grossAmt): CashSaleItemCost
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
     * @return CashSaleItemCost
     */
    public function setTaxCode(RecordRef $taxCode): CashSaleItemCost
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
