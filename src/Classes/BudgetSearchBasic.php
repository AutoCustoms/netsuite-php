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

class BudgetSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBook;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $category;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $global;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $year;

    protected $year2;
    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "accountingBook" => "SearchMultiSelectField",
        "amount" => "SearchDoubleField",
        "category" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "department" => "SearchMultiSelectField",
        "global" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "year" => "SearchMultiSelectField",
        "year2" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $account
     * @return BudgetSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): BudgetSearchBasic
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount(): SearchMultiSelectField
    {
        return $this->account;
    }

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return BudgetSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): BudgetSearchBasic
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook(): SearchMultiSelectField
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchDoubleField $amount
     * @return BudgetSearchBasic
     */
    public function setAmount(SearchDoubleField $amount): BudgetSearchBasic
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount(): SearchDoubleField
    {
        return $this->amount;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return BudgetSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): BudgetSearchBasic
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory(): SearchMultiSelectField
    {
        return $this->category;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return BudgetSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): BudgetSearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return BudgetSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): BudgetSearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return BudgetSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): BudgetSearchBasic
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer(): SearchMultiSelectField
    {
        return $this->customer;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return BudgetSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): BudgetSearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchBooleanField $global
     * @return BudgetSearchBasic
     */
    public function setGlobal(SearchBooleanField $global): BudgetSearchBasic
    {
        $this->global = $global;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGlobal(): SearchBooleanField
    {
        return $this->global;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return BudgetSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): BudgetSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return BudgetSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): BudgetSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return BudgetSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): BudgetSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return BudgetSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): BudgetSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return BudgetSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): BudgetSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $year
     * @return BudgetSearchBasic
     */
    public function setYear(SearchMultiSelectField $year): BudgetSearchBasic
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getYear(): SearchMultiSelectField
    {
        return $this->year;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return BudgetSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): BudgetSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
