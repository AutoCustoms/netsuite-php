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

class VendorReturnAuthorizationExpense {
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

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    protected $tax1Amt;
    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var string
     */
    protected string $memo;

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
        "orderLine" => "integer",
        "line" => "integer",
        "category" => "RecordRef",
        "account" => "RecordRef",
        "amount" => "float",
        "taxAmount" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "tax1Amt" => "float",
        "grossAmt" => "float",
        "taxDetailsReference" => "string",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $orderLine
     * @return VendorReturnAuthorizationExpense
     */
    public function setOrderLine(int $orderLine): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setLine(int $line): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setCategory(RecordRef $category): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setAccount(RecordRef $account): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setAmount(float $amount): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setTaxAmount(float $taxAmount): VendorReturnAuthorizationExpense
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
     * @param RecordRef $taxCode
     * @return VendorReturnAuthorizationExpense
     */
    public function setTaxCode(RecordRef $taxCode): VendorReturnAuthorizationExpense
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
     * @param float $grossAmt
     * @return VendorReturnAuthorizationExpense
     */
    public function setGrossAmt(float $grossAmt): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setTaxDetailsReference(string $taxDetailsReference): VendorReturnAuthorizationExpense
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
     * @param string $memo
     * @return VendorReturnAuthorizationExpense
     */
    public function setMemo(string $memo): VendorReturnAuthorizationExpense
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
     * @param RecordRef $department
     * @return VendorReturnAuthorizationExpense
     */
    public function setDepartment(RecordRef $department): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setClass(RecordRef $class): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setLocation(RecordRef $location): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setCustomer(RecordRef $customer): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setIsBillable(bool $isBillable): VendorReturnAuthorizationExpense
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
     * @param RecordRef $amortizationSched
     * @return VendorReturnAuthorizationExpense
     */
    public function setAmortizationSched(RecordRef $amortizationSched): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setAmortizStartDate(string $amortizStartDate): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setAmortizationEndDate(string $amortizationEndDate): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setAmortizationResidual(string $amortizationResidual): VendorReturnAuthorizationExpense
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
     * @return VendorReturnAuthorizationExpense
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorReturnAuthorizationExpense
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
