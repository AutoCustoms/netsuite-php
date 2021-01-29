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

class MarkupItem extends Record {
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
     * @return MarkupItem
     */
    public function setCreatedDate(string $createdDate): MarkupItem
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
     * @return MarkupItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): MarkupItem
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
     * @return MarkupItem
     */
    public function setDescription(string $description): MarkupItem
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
     * @return MarkupItem
     */
    public function setNonPosting(bool $nonPosting): MarkupItem
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
     * @return MarkupItem
     */
    public function setAccount(RecordRef $account): MarkupItem
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
     * @return MarkupItem
     */
    public function setIncludeChildren(bool $includeChildren): MarkupItem
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
     * @return MarkupItem
     */
    public function setRate(string $rate): MarkupItem
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
     * @return MarkupItem
     */
    public function setIsPreTax(bool $isPreTax): MarkupItem
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
     * @return MarkupItem
     */
    public function setCustomForm(RecordRef $customForm): MarkupItem
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
     * @return MarkupItem
     */
    public function setItemId(string $itemId): MarkupItem
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
     * @return MarkupItem
     */
    public function setIssueProduct(RecordRef $issueProduct): MarkupItem
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
     * @return MarkupItem
     */
    public function setUpcCode(string $upcCode): MarkupItem
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
     * @return MarkupItem
     */
    public function setDisplayName(string $displayName): MarkupItem
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
     * @return MarkupItem
     */
    public function setVendorName(string $vendorName): MarkupItem
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
     * @return MarkupItem
     */
    public function setParent(RecordRef $parent): MarkupItem
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
     * @return MarkupItem
     */
    public function setIsInactive(bool $isInactive): MarkupItem
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
     * @return MarkupItem
     */
    public function setAvailableToPartners(bool $availableToPartners): MarkupItem
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
     * @return MarkupItem
     */
    public function setDepartment(RecordRef $department): MarkupItem
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
     * @return MarkupItem
     */
    public function setClass(RecordRef $class): MarkupItem
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
     * @return MarkupItem
     */
    public function setLocation(RecordRef $location): MarkupItem
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
     * @return MarkupItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): MarkupItem
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
     * @return MarkupItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): MarkupItem
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
     * @return MarkupItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): MarkupItem
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
     * @return MarkupItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): MarkupItem
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
     * @return MarkupItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): MarkupItem
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
     * @return MarkupItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): MarkupItem
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
     * @return MarkupItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): MarkupItem
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
     * @return MarkupItem
     */
    public function setTranslationsList(TranslationList $translationsList): MarkupItem
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
     * @return MarkupItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): MarkupItem
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
     * @return MarkupItem
     */
    public function setInternalId(string $internalId): MarkupItem
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
     * @return MarkupItem
     */
    public function setExternalId(string $externalId): MarkupItem
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
