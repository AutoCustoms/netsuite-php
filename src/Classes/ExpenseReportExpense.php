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

class ExpenseReportExpense {
    /**
     * @var int
     */
    protected int $line;

    /**
     * @var string
     */
    protected string $expenseDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var float
     */
    protected float $foreignAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    /**
     * @var string
     */
    protected string $memo;

    protected $taxRate1;
    protected $tax1Amt;
    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var float
     */
    protected float $grossAmt;

    protected $taxRate2;
    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var bool
     */
    protected bool $isBillable;

    /**
     * @var RecordRef
     */
    protected RecordRef $expMediaItem;

    /**
     * @var bool
     */
    protected bool $isNonReimbursable;

    /**
     * @var bool
     */
    protected bool $corporateCreditCard;

    /**
     * @var bool
     */
    protected bool $receipt;

    /**
     * @var int
     */
    protected int $refNumber;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var RecordRef
     */
    protected RecordRef $expenseAccount;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "line" => "integer",
        "expenseDate" => "dateTime",
        "category" => "RecordRef",
        "quantity" => "float",
        "rate" => "float",
        "foreignAmount" => "float",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "memo" => "string",
        "taxRate1" => "float",
        "tax1Amt" => "float",
        "department" => "RecordRef",
        "grossAmt" => "float",
        "taxRate2" => "float",
        "class" => "RecordRef",
        "customer" => "RecordRef",
        "location" => "RecordRef",
        "isBillable" => "boolean",
        "expMediaItem" => "RecordRef",
        "isNonReimbursable" => "boolean",
        "corporateCreditCard" => "boolean",
        "receipt" => "boolean",
        "refNumber" => "integer",
        "taxDetailsReference" => "string",
        "expenseAccount" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $line
     * @return ExpenseReportExpense
     */
    public function setLine(int $line): ExpenseReportExpense
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
     * @param string $expenseDate
     * @return ExpenseReportExpense
     */
    public function setExpenseDate(string $expenseDate): ExpenseReportExpense
    {
        $this->expenseDate = $expenseDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpenseDate(): string
    {
        return $this->expenseDate;
    }

    /**
     * @param RecordRef $category
     * @return ExpenseReportExpense
     */
    public function setCategory(RecordRef $category): ExpenseReportExpense
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
     * @param float $quantity
     * @return ExpenseReportExpense
     */
    public function setQuantity(float $quantity): ExpenseReportExpense
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $rate
     * @return ExpenseReportExpense
     */
    public function setRate(float $rate): ExpenseReportExpense
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
     * @param float $foreignAmount
     * @return ExpenseReportExpense
     */
    public function setForeignAmount(float $foreignAmount): ExpenseReportExpense
    {
        $this->foreignAmount = $foreignAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getForeignAmount(): float
    {
        return $this->foreignAmount;
    }

    /**
     * @param RecordRef $currency
     * @return ExpenseReportExpense
     */
    public function setCurrency(RecordRef $currency): ExpenseReportExpense
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param float $exchangeRate
     * @return ExpenseReportExpense
     */
    public function setExchangeRate(float $exchangeRate): ExpenseReportExpense
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    /**
     * @param float $amount
     * @return ExpenseReportExpense
     */
    public function setAmount(float $amount): ExpenseReportExpense
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
     * @param RecordRef $taxCode
     * @return ExpenseReportExpense
     */
    public function setTaxCode(RecordRef $taxCode): ExpenseReportExpense
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
     * @param string $memo
     * @return ExpenseReportExpense
     */
    public function setMemo(string $memo): ExpenseReportExpense
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
     * @return ExpenseReportExpense
     */
    public function setDepartment(RecordRef $department): ExpenseReportExpense
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
     * @param float $grossAmt
     * @return ExpenseReportExpense
     */
    public function setGrossAmt(float $grossAmt): ExpenseReportExpense
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
     * @param RecordRef $class
     * @return ExpenseReportExpense
     */
    public function setClass(RecordRef $class): ExpenseReportExpense
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
     * @param RecordRef $customer
     * @return ExpenseReportExpense
     */
    public function setCustomer(RecordRef $customer): ExpenseReportExpense
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
     * @param RecordRef $location
     * @return ExpenseReportExpense
     */
    public function setLocation(RecordRef $location): ExpenseReportExpense
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
     * @param bool $isBillable
     * @return ExpenseReportExpense
     */
    public function setIsBillable(bool $isBillable): ExpenseReportExpense
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
     * @param RecordRef $expMediaItem
     * @return ExpenseReportExpense
     */
    public function setExpMediaItem(RecordRef $expMediaItem): ExpenseReportExpense
    {
        $this->expMediaItem = $expMediaItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpMediaItem(): RecordRef
    {
        return $this->expMediaItem;
    }

    /**
     * @param bool $isNonReimbursable
     * @return ExpenseReportExpense
     */
    public function setIsNonReimbursable(bool $isNonReimbursable): ExpenseReportExpense
    {
        $this->isNonReimbursable = $isNonReimbursable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNonReimbursable(): bool
    {
        return $this->isNonReimbursable;
    }

    /**
     * @param bool $corporateCreditCard
     * @return ExpenseReportExpense
     */
    public function setCorporateCreditCard(bool $corporateCreditCard): ExpenseReportExpense
    {
        $this->corporateCreditCard = $corporateCreditCard;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCorporateCreditCard(): bool
    {
        return $this->corporateCreditCard;
    }

    /**
     * @param bool $receipt
     * @return ExpenseReportExpense
     */
    public function setReceipt(bool $receipt): ExpenseReportExpense
    {
        $this->receipt = $receipt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReceipt(): bool
    {
        return $this->receipt;
    }

    /**
     * @param int $refNumber
     * @return ExpenseReportExpense
     */
    public function setRefNumber(int $refNumber): ExpenseReportExpense
    {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefNumber(): int
    {
        return $this->refNumber;
    }

    /**
     * @param string $taxDetailsReference
     * @return ExpenseReportExpense
     */
    public function setTaxDetailsReference(string $taxDetailsReference): ExpenseReportExpense
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
     * @param RecordRef $expenseAccount
     * @return ExpenseReportExpense
     */
    public function setExpenseAccount(RecordRef $expenseAccount): ExpenseReportExpense
    {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAccount(): RecordRef
    {
        return $this->expenseAccount;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ExpenseReportExpense
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ExpenseReportExpense
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
