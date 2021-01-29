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

class InvoiceItemCost {
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
     * @return InvoiceItemCost
     */
    public function setApply(bool $apply): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setDoc(int $doc): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setLine(int $line): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setTaxDetailsReference(string $taxDetailsReference): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setBilledDate(string $billedDate): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setItemDisp(string $itemDisp): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setMemo(string $memo): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setJobDisp(string $jobDisp): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setDepartment(string $department): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setClass(string $class): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setLocation(string $location): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setUnitDisp(string $unitDisp): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setOptions(CustomFieldList $options): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setItemCostCount(string $itemCostCount): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setQuantity(string $quantity): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setSerialNumbers(string $serialNumbers): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setCost(float $cost): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setAmount(float $amount): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setTaxAmount(float $taxAmount): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setRevRecStartDate(string $revRecStartDate): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setRevRecEndDate(string $revRecEndDate): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setGrossAmt(float $grossAmt): InvoiceItemCost
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
     * @return InvoiceItemCost
     */
    public function setTaxCode(RecordRef $taxCode): InvoiceItemCost
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
