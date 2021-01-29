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

class DiscountItem extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $nonPosting;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var bool
     */
    protected bool $isPreTax;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $itemId;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var string
     */
    protected string $upcCode;

    /**
     * @var string
     */
    protected string $displayName;

    /**
     * @var string
     */
    protected string $vendorName;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $availableToPartners;

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
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $deferredRevenueAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $expenseAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $incomeAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesTaxCode;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "description" => "string",
        "nonPosting" => "boolean",
        "account" => "RecordRef",
        "includeChildren" => "boolean",
        "rate" => "string",
        "isPreTax" => "boolean",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "issueProduct" => "RecordRef",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "taxSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "expenseAccount" => "RecordRef",
        "incomeAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "translationsList" => "TranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return DiscountItem
     */
    public function setCreatedDate(string $createdDate): DiscountItem
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return DiscountItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): DiscountItem
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param string $description
     * @return DiscountItem
     */
    public function setDescription(string $description): DiscountItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param bool $nonPosting
     * @return DiscountItem
     */
    public function setNonPosting(bool $nonPosting): DiscountItem
    {
        $this->nonPosting = $nonPosting;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNonPosting(): bool
    {
        return $this->nonPosting;
    }

    /**
     * @param RecordRef $account
     * @return DiscountItem
     */
    public function setAccount(RecordRef $account): DiscountItem
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
     * @param bool $includeChildren
     * @return DiscountItem
     */
    public function setIncludeChildren(bool $includeChildren): DiscountItem
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param string $rate
     * @return DiscountItem
     */
    public function setRate(string $rate): DiscountItem
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param bool $isPreTax
     * @return DiscountItem
     */
    public function setIsPreTax(bool $isPreTax): DiscountItem
    {
        $this->isPreTax = $isPreTax;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPreTax(): bool
    {
        return $this->isPreTax;
    }

    /**
     * @param RecordRef $customForm
     * @return DiscountItem
     */
    public function setCustomForm(RecordRef $customForm): DiscountItem
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param string $itemId
     * @return DiscountItem
     */
    public function setItemId(string $itemId): DiscountItem
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param RecordRef $issueProduct
     * @return DiscountItem
     */
    public function setIssueProduct(RecordRef $issueProduct): DiscountItem
    {
        $this->issueProduct = $issueProduct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueProduct(): RecordRef
    {
        return $this->issueProduct;
    }

    /**
     * @param string $upcCode
     * @return DiscountItem
     */
    public function setUpcCode(string $upcCode): DiscountItem
    {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpcCode(): string
    {
        return $this->upcCode;
    }

    /**
     * @param string $displayName
     * @return DiscountItem
     */
    public function setDisplayName(string $displayName): DiscountItem
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $vendorName
     * @return DiscountItem
     */
    public function setVendorName(string $vendorName): DiscountItem
    {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    /**
     * @param RecordRef $parent
     * @return DiscountItem
     */
    public function setParent(RecordRef $parent): DiscountItem
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param bool $isInactive
     * @return DiscountItem
     */
    public function setIsInactive(bool $isInactive): DiscountItem
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param bool $availableToPartners
     * @return DiscountItem
     */
    public function setAvailableToPartners(bool $availableToPartners): DiscountItem
    {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableToPartners(): bool
    {
        return $this->availableToPartners;
    }

    /**
     * @param RecordRef $department
     * @return DiscountItem
     */
    public function setDepartment(RecordRef $department): DiscountItem
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
     * @return DiscountItem
     */
    public function setClass(RecordRef $class): DiscountItem
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
     * @return DiscountItem
     */
    public function setLocation(RecordRef $location): DiscountItem
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
     * @param RecordRefList $subsidiaryList
     * @return DiscountItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): DiscountItem
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return DiscountItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): DiscountItem
    {
        $this->taxSchedule = $taxSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxSchedule(): RecordRef
    {
        return $this->taxSchedule;
    }

    /**
     * @param RecordRef $deferredRevenueAccount
     * @return DiscountItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): DiscountItem
    {
        $this->deferredRevenueAccount = $deferredRevenueAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferredRevenueAccount(): RecordRef
    {
        return $this->deferredRevenueAccount;
    }

    /**
     * @param RecordRef $expenseAccount
     * @return DiscountItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): DiscountItem
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
     * @param RecordRef $incomeAccount
     * @return DiscountItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): DiscountItem
    {
        $this->incomeAccount = $incomeAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncomeAccount(): RecordRef
    {
        return $this->incomeAccount;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return DiscountItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): DiscountItem
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
     * @param RecordRef $salesTaxCode
     * @return DiscountItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): DiscountItem
    {
        $this->salesTaxCode = $salesTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesTaxCode(): RecordRef
    {
        return $this->salesTaxCode;
    }

    /**
     * @param TranslationList $translationsList
     * @return DiscountItem
     */
    public function setTranslationsList(TranslationList $translationsList): DiscountItem
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return TranslationList
     */
    public function getTranslationsList(): TranslationList
    {
        return $this->translationsList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return DiscountItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): DiscountItem
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
     * @return DiscountItem
     */
    public function setInternalId(string $internalId): DiscountItem
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

    /**
     * @param string $externalId
     * @return DiscountItem
     */
    public function setExternalId(string $externalId): DiscountItem
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
