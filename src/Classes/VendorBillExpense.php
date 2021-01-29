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

class VendorBillExpense {
    /**
     * @var int
     */
    protected int $orderDoc;

    /**
     * @var int
     */
    protected int $orderLine;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var float
     */
    protected float $taxAmount;

    protected $tax1Amt;
    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

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
    protected RecordRef $projectTask;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    /**
     * @var RecordRef
     */
    protected RecordRef $amortizationSched;

    /**
     * @var string
     */
    protected string $amortizStartDate;

    /**
     * @var string
     */
    protected string $amortizationEndDate;

    /**
     * @var string
     */
    protected string $amortizationResidual;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "orderDoc" => "integer",
        "orderLine" => "integer",
        "line" => "integer",
        "category" => "RecordRef",
        "account" => "RecordRef",
        "amount" => "float",
        "taxAmount" => "float",
        "tax1Amt" => "float",
        "memo" => "string",
        "grossAmt" => "float",
        "taxDetailsReference" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "projectTask" => "RecordRef",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $orderDoc
     * @return VendorBillExpense
     */
    public function setOrderDoc(int $orderDoc): VendorBillExpense
    {
        $this->orderDoc = $orderDoc;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderDoc(): int
    {
        return $this->orderDoc;
    }

    /**
     * @param int $orderLine
     * @return VendorBillExpense
     */
    public function setOrderLine(int $orderLine): VendorBillExpense
    {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderLine(): int
    {
        return $this->orderLine;
    }

    /**
     * @param int $line
     * @return VendorBillExpense
     */
    public function setLine(int $line): VendorBillExpense
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
     * @param RecordRef $category
     * @return VendorBillExpense
     */
    public function setCategory(RecordRef $category): VendorBillExpense
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param RecordRef $account
     * @return VendorBillExpense
     */
    public function setAccount(RecordRef $account): VendorBillExpense
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount(): RecordRef
    {
        return $this->account;
    }

    /**
     * @param float $amount
     * @return VendorBillExpense
     */
    public function setAmount(float $amount): VendorBillExpense
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
     * @return VendorBillExpense
     */
    public function setTaxAmount(float $taxAmount): VendorBillExpense
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
     * @param string $memo
     * @return VendorBillExpense
     */
    public function setMemo(string $memo): VendorBillExpense
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
     * @param float $grossAmt
     * @return VendorBillExpense
     */
    public function setGrossAmt(float $grossAmt): VendorBillExpense
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
     * @return VendorBillExpense
     */
    public function setTaxDetailsReference(string $taxDetailsReference): VendorBillExpense
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
     * @param RecordRef $department
     * @return VendorBillExpense
     */
    public function setDepartment(RecordRef $department): VendorBillExpense
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
     * @return VendorBillExpense
     */
    public function setClass(RecordRef $class): VendorBillExpense
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
     * @return VendorBillExpense
     */
    public function setLocation(RecordRef $location): VendorBillExpense
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
     * @param RecordRef $customer
     * @return VendorBillExpense
     */
    public function setCustomer(RecordRef $customer): VendorBillExpense
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
     * @return VendorBillExpense
     */
    public function setIsBillable(bool $isBillable): VendorBillExpense
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
     * @param RecordRef $projectTask
     * @return VendorBillExpense
     */
    public function setProjectTask(RecordRef $projectTask): VendorBillExpense
    {
        $this->projectTask = $projectTask;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectTask(): RecordRef
    {
        return $this->projectTask;
    }

    /**
     * @param RecordRef $taxCode
     * @return VendorBillExpense
     */
    public function setTaxCode(RecordRef $taxCode): VendorBillExpense
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

    /**
     * @param RecordRef $amortizationSched
     * @return VendorBillExpense
     */
    public function setAmortizationSched(RecordRef $amortizationSched): VendorBillExpense
    {
        $this->amortizationSched = $amortizationSched;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationSched(): RecordRef
    {
        return $this->amortizationSched;
    }

    /**
     * @param string $amortizStartDate
     * @return VendorBillExpense
     */
    public function setAmortizStartDate(string $amortizStartDate): VendorBillExpense
    {
        $this->amortizStartDate = $amortizStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizStartDate(): string
    {
        return $this->amortizStartDate;
    }

    /**
     * @param string $amortizationEndDate
     * @return VendorBillExpense
     */
    public function setAmortizationEndDate(string $amortizationEndDate): VendorBillExpense
    {
        $this->amortizationEndDate = $amortizationEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizationEndDate(): string
    {
        return $this->amortizationEndDate;
    }

    /**
     * @param string $amortizationResidual
     * @return VendorBillExpense
     */
    public function setAmortizationResidual(string $amortizationResidual): VendorBillExpense
    {
        $this->amortizationResidual = $amortizationResidual;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizationResidual(): string
    {
        return $this->amortizationResidual;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return VendorBillExpense
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorBillExpense
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

}
