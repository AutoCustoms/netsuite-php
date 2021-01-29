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

class CustomPurchaseExpense {
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
        "line" => "integer",
        "category" => "RecordRef",
        "account" => "RecordRef",
        "amount" => "float",
        "taxAmount" => "float",
        "memo" => "string",
        "grossAmt" => "float",
        "taxDetailsReference" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "projectTask" => "RecordRef",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $line
     * @return CustomPurchaseExpense
     */
    public function setLine(int $line): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setCategory(RecordRef $category): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setAccount(RecordRef $account): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setAmount(float $amount): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setTaxAmount(float $taxAmount): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setMemo(string $memo): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setGrossAmt(float $grossAmt): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setDepartment(RecordRef $department): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setClass(RecordRef $class): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setLocation(RecordRef $location): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setCustomer(RecordRef $customer): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setIsBillable(bool $isBillable): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setProjectTask(RecordRef $projectTask): CustomPurchaseExpense
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
     * @param RecordRef $amortizationSched
     * @return CustomPurchaseExpense
     */
    public function setAmortizationSched(RecordRef $amortizationSched): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setAmortizStartDate(string $amortizStartDate): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setAmortizationEndDate(string $amortizationEndDate): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setAmortizationResidual(string $amortizationResidual): CustomPurchaseExpense
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
     * @return CustomPurchaseExpense
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomPurchaseExpense
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
