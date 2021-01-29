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

class Budget extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $year;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var BudgetBudgetType
     */
    protected BudgetBudgetType $budgetType;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    protected $periodAmount1;
    protected $periodAmount2;
    protected $periodAmount3;
    protected $periodAmount4;
    protected $periodAmount5;
    protected $periodAmount6;
    protected $periodAmount7;
    protected $periodAmount8;
    protected $periodAmount9;
    protected $periodAmount10;
    protected $periodAmount11;
    protected $periodAmount12;
    protected $periodAmount13;
    protected $periodAmount14;
    protected $periodAmount15;
    protected $periodAmount16;
    protected $periodAmount17;
    protected $periodAmount18;
    protected $periodAmount19;
    protected $periodAmount20;
    protected $periodAmount21;
    protected $periodAmount22;
    protected $periodAmount23;
    protected $periodAmount24;
    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var RecordRef
     */
    protected RecordRef $accountingBook;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "year" => "RecordRef",
        "customer" => "RecordRef",
        "item" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "account" => "RecordRef",
        "subsidiary" => "RecordRef",
        "category" => "RecordRef",
        "budgetType" => "BudgetBudgetType",
        "currency" => "RecordRef",
        "periodAmount1" => "float",
        "periodAmount2" => "float",
        "periodAmount3" => "float",
        "periodAmount4" => "float",
        "periodAmount5" => "float",
        "periodAmount6" => "float",
        "periodAmount7" => "float",
        "periodAmount8" => "float",
        "periodAmount9" => "float",
        "periodAmount10" => "float",
        "periodAmount11" => "float",
        "periodAmount12" => "float",
        "periodAmount13" => "float",
        "periodAmount14" => "float",
        "periodAmount15" => "float",
        "periodAmount16" => "float",
        "periodAmount17" => "float",
        "periodAmount18" => "float",
        "periodAmount19" => "float",
        "periodAmount20" => "float",
        "periodAmount21" => "float",
        "periodAmount22" => "float",
        "periodAmount23" => "float",
        "periodAmount24" => "float",
        "amount" => "float",
        "accountingBook" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
    );

    /**
     * @param RecordRef $year
     * @return Budget
     */
    public function setYear(RecordRef $year): Budget
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getYear(): RecordRef
    {
        return $this->year;
    }

    /**
     * @param RecordRef $customer
     * @return Budget
     */
    public function setCustomer(RecordRef $customer): Budget
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
     * @param RecordRef $item
     * @return Budget
     */
    public function setItem(RecordRef $item): Budget
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $class
     * @return Budget
     */
    public function setClass(RecordRef $class): Budget
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
     * @param RecordRef $department
     * @return Budget
     */
    public function setDepartment(RecordRef $department): Budget
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
     * @param RecordRef $location
     * @return Budget
     */
    public function setLocation(RecordRef $location): Budget
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
     * @param RecordRef $account
     * @return Budget
     */
    public function setAccount(RecordRef $account): Budget
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
     * @param RecordRef $subsidiary
     * @return Budget
     */
    public function setSubsidiary(RecordRef $subsidiary): Budget
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $category
     * @return Budget
     */
    public function setCategory(RecordRef $category): Budget
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
     * @param BudgetBudgetType $budgetType
     * @return Budget
     */
    public function setBudgetType(BudgetBudgetType $budgetType): Budget
    {
        $this->budgetType = $budgetType;
        return $this;
    }

    /**
     * @return BudgetBudgetType
     */
    public function getBudgetType(): BudgetBudgetType
    {
        return $this->budgetType;
    }

    /**
     * @param RecordRef $currency
     * @return Budget
     */
    public function setCurrency(RecordRef $currency): Budget
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
     * @param float $amount
     * @return Budget
     */
    public function setAmount(float $amount): Budget
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
     * @param RecordRef $accountingBook
     * @return Budget
     */
    public function setAccountingBook(RecordRef $accountingBook): Budget
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook(): RecordRef
    {
        return $this->accountingBook;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Budget
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Budget
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

    /**
     * @param string $internalId
     * @return Budget
     */
    public function setInternalId(string $internalId): Budget
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

}
