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

class BudgetSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $account;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $accountingBook;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $category;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $class;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $classnohierarchy;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $customer;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $department;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $departmentnohierarchy;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $global;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $item;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $locationnohierarchy;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subsidiarynohierarchy;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $year;

    protected $year2;
    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "account" => "SearchColumnStringField[]",
        "accountingBook" => "SearchColumnStringField[]",
        "amount" => "SearchColumnDoubleField[]",
        "category" => "SearchColumnStringField[]",
        "class" => "SearchColumnStringField[]",
        "classnohierarchy" => "SearchColumnStringField[]",
        "currency" => "SearchColumnStringField[]",
        "customer" => "SearchColumnStringField[]",
        "department" => "SearchColumnStringField[]",
        "departmentnohierarchy" => "SearchColumnStringField[]",
        "global" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnStringField[]",
        "location" => "SearchColumnStringField[]",
        "locationnohierarchy" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "subsidiarynohierarchy" => "SearchColumnStringField[]",
        "year" => "SearchColumnStringField[]",
        "year2" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $account
     * @return BudgetSearchRowBasic
     */
    public function setAccount(SearchColumnStringField $account): BudgetSearchRowBasic
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccount(): array
    {
        return $this->account;
    }

    /**
     * @param SearchColumnStringField[] $accountingBook
     * @return BudgetSearchRowBasic
     */
    public function setAccountingBook(SearchColumnStringField $accountingBook): BudgetSearchRowBasic
    {
        $this->accountingBook[] = $accountingBook;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountingBook(): array
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return BudgetSearchRowBasic
     */
    public function setAmount(SearchColumnDoubleField $amount): BudgetSearchRowBasic
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param SearchColumnStringField[] $category
     * @return BudgetSearchRowBasic
     */
    public function setCategory(SearchColumnStringField $category): BudgetSearchRowBasic
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param SearchColumnStringField[] $class
     * @return BudgetSearchRowBasic
     */
    public function setClass(SearchColumnStringField $class): BudgetSearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnStringField[] $classnohierarchy
     * @return BudgetSearchRowBasic
     */
    public function setClassnohierarchy(SearchColumnStringField $classnohierarchy): BudgetSearchRowBasic
    {
        $this->classnohierarchy[] = $classnohierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getClassnohierarchy(): array
    {
        return $this->classnohierarchy;
    }

    /**
     * @param SearchColumnStringField[] $currency
     * @return BudgetSearchRowBasic
     */
    public function setCurrency(SearchColumnStringField $currency): BudgetSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnStringField[] $customer
     * @return BudgetSearchRowBasic
     */
    public function setCustomer(SearchColumnStringField $customer): BudgetSearchRowBasic
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }

    /**
     * @param SearchColumnStringField[] $department
     * @return BudgetSearchRowBasic
     */
    public function setDepartment(SearchColumnStringField $department): BudgetSearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnStringField[] $departmentnohierarchy
     * @return BudgetSearchRowBasic
     */
    public function setDepartmentnohierarchy(SearchColumnStringField $departmentnohierarchy): BudgetSearchRowBasic
    {
        $this->departmentnohierarchy[] = $departmentnohierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDepartmentnohierarchy(): array
    {
        return $this->departmentnohierarchy;
    }

    /**
     * @param SearchColumnBooleanField[] $global
     * @return BudgetSearchRowBasic
     */
    public function setGlobal(SearchColumnBooleanField $global): BudgetSearchRowBasic
    {
        $this->global[] = $global;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGlobal(): array
    {
        return $this->global;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return BudgetSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): BudgetSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnStringField[] $item
     * @return BudgetSearchRowBasic
     */
    public function setItem(SearchColumnStringField $item): BudgetSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnStringField[] $location
     * @return BudgetSearchRowBasic
     */
    public function setLocation(SearchColumnStringField $location): BudgetSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $locationnohierarchy
     * @return BudgetSearchRowBasic
     */
    public function setLocationnohierarchy(SearchColumnStringField $locationnohierarchy): BudgetSearchRowBasic
    {
        $this->locationnohierarchy[] = $locationnohierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocationnohierarchy(): array
    {
        return $this->locationnohierarchy;
    }

    /**
     * @param SearchColumnStringField[] $subsidiary
     * @return BudgetSearchRowBasic
     */
    public function setSubsidiary(SearchColumnStringField $subsidiary): BudgetSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnStringField[] $subsidiarynohierarchy
     * @return BudgetSearchRowBasic
     */
    public function setSubsidiarynohierarchy(SearchColumnStringField $subsidiarynohierarchy): BudgetSearchRowBasic
    {
        $this->subsidiarynohierarchy[] = $subsidiarynohierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiarynohierarchy(): array
    {
        return $this->subsidiarynohierarchy;
    }

    /**
     * @param SearchColumnStringField[] $year
     * @return BudgetSearchRowBasic
     */
    public function setYear(SearchColumnStringField $year): BudgetSearchRowBasic
    {
        $this->year[] = $year;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getYear(): array
    {
        return $this->year;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return BudgetSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): BudgetSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
