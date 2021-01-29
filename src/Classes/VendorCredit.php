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

class VendorCredit extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiaryTaxRegNum;

    /**
     * @var bool
     */
    protected bool $taxRegOverride;

    /**
     * @var bool
     */
    protected bool $taxDetailsOverride;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var float
     */
    protected float $unApplied;

    /**
     * @var RecordRef
     */
    protected RecordRef $billAddressList;

    /**
     * @var bool
     */
    protected bool $autoApply;

    /**
     * @var float
     */
    protected float $applied;

    /**
     * @var string
     */
    protected string $transactionNumber;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var float
     */
    protected float $userTotal;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var Address
     */
    protected Address $billingAddress;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $entityTaxRegNum;

    /**
     * @var string
     */
    protected string $taxPointDate;

    /**
     * @var float
     */
    protected float $userTaxTotal;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

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
    protected RecordRef $subsidiary;

    /**
     * @var VendorCreditExpenseList
     */
    protected VendorCreditExpenseList $expenseList;

    /**
     * @var VendorCreditItemList
     */
    protected VendorCreditItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var VendorCreditApplyList
     */
    protected VendorCreditApplyList $applyList;

    /**
     * @var TaxDetailsList
     */
    protected TaxDetailsList $taxDetailsList;

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
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "unApplied" => "float",
        "billAddressList" => "RecordRef",
        "autoApply" => "boolean",
        "applied" => "float",
        "transactionNumber" => "string",
        "tranId" => "string",
        "createdFrom" => "RecordRef",
        "entity" => "RecordRef",
        "total" => "float",
        "userTotal" => "float",
        "currency" => "RecordRef",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "tranDate" => "dateTime",
        "exchangeRate" => "float",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "userTaxTotal" => "float",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "expenseList" => "VendorCreditExpenseList",
        "itemList" => "VendorCreditItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "applyList" => "VendorCreditApplyList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return VendorCredit
     */
    public function setCreatedDate(string $createdDate): VendorCredit
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
     * @return VendorCredit
     */
    public function setLastModifiedDate(string $lastModifiedDate): VendorCredit
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
     * @param RecordRef $nexus
     * @return VendorCredit
     */
    public function setNexus(RecordRef $nexus): VendorCredit
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus(): RecordRef
    {
        return $this->nexus;
    }

    /**
     * @param RecordRef $subsidiaryTaxRegNum
     * @return VendorCredit
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): VendorCredit
    {
        $this->subsidiaryTaxRegNum = $subsidiaryTaxRegNum;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiaryTaxRegNum(): RecordRef
    {
        return $this->subsidiaryTaxRegNum;
    }

    /**
     * @param bool $taxRegOverride
     * @return VendorCredit
     */
    public function setTaxRegOverride(bool $taxRegOverride): VendorCredit
    {
        $this->taxRegOverride = $taxRegOverride;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxRegOverride(): bool
    {
        return $this->taxRegOverride;
    }

    /**
     * @param bool $taxDetailsOverride
     * @return VendorCredit
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): VendorCredit
    {
        $this->taxDetailsOverride = $taxDetailsOverride;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxDetailsOverride(): bool
    {
        return $this->taxDetailsOverride;
    }

    /**
     * @param RecordRef $customForm
     * @return VendorCredit
     */
    public function setCustomForm(RecordRef $customForm): VendorCredit
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
     * @param RecordRef $account
     * @return VendorCredit
     */
    public function setAccount(RecordRef $account): VendorCredit
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
     * @param float $unApplied
     * @return VendorCredit
     */
    public function setUnApplied(float $unApplied): VendorCredit
    {
        $this->unApplied = $unApplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnApplied(): float
    {
        return $this->unApplied;
    }

    /**
     * @param RecordRef $billAddressList
     * @return VendorCredit
     */
    public function setBillAddressList(RecordRef $billAddressList): VendorCredit
    {
        $this->billAddressList = $billAddressList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillAddressList(): RecordRef
    {
        return $this->billAddressList;
    }

    /**
     * @param bool $autoApply
     * @return VendorCredit
     */
    public function setAutoApply(bool $autoApply): VendorCredit
    {
        $this->autoApply = $autoApply;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoApply(): bool
    {
        return $this->autoApply;
    }

    /**
     * @param float $applied
     * @return VendorCredit
     */
    public function setApplied(float $applied): VendorCredit
    {
        $this->applied = $applied;
        return $this;
    }

    /**
     * @return float
     */
    public function getApplied(): float
    {
        return $this->applied;
    }

    /**
     * @param string $transactionNumber
     * @return VendorCredit
     */
    public function setTransactionNumber(string $transactionNumber): VendorCredit
    {
        $this->transactionNumber = $transactionNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber(): string
    {
        return $this->transactionNumber;
    }

    /**
     * @param string $tranId
     * @return VendorCredit
     */
    public function setTranId(string $tranId): VendorCredit
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranId(): string
    {
        return $this->tranId;
    }

    /**
     * @param RecordRef $createdFrom
     * @return VendorCredit
     */
    public function setCreatedFrom(RecordRef $createdFrom): VendorCredit
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param RecordRef $entity
     * @return VendorCredit
     */
    public function setEntity(RecordRef $entity): VendorCredit
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param float $total
     * @return VendorCredit
     */
    public function setTotal(float $total): VendorCredit
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $userTotal
     * @return VendorCredit
     */
    public function setUserTotal(float $userTotal): VendorCredit
    {
        $this->userTotal = $userTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getUserTotal(): float
    {
        return $this->userTotal;
    }

    /**
     * @param RecordRef $currency
     * @return VendorCredit
     */
    public function setCurrency(RecordRef $currency): VendorCredit
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
     * @param string $currencyName
     * @return VendorCredit
     */
    public function setCurrencyName(string $currencyName): VendorCredit
    {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }

    /**
     * @param Address $billingAddress
     * @return VendorCredit
     */
    public function setBillingAddress(Address $billingAddress): VendorCredit
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    /**
     * @param string $tranDate
     * @return VendorCredit
     */
    public function setTranDate(string $tranDate): VendorCredit
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param float $exchangeRate
     * @return VendorCredit
     */
    public function setExchangeRate(float $exchangeRate): VendorCredit
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
     * @param RecordRef $entityTaxRegNum
     * @return VendorCredit
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): VendorCredit
    {
        $this->entityTaxRegNum = $entityTaxRegNum;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityTaxRegNum(): RecordRef
    {
        return $this->entityTaxRegNum;
    }

    /**
     * @param string $taxPointDate
     * @return VendorCredit
     */
    public function setTaxPointDate(string $taxPointDate): VendorCredit
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxPointDate(): string
    {
        return $this->taxPointDate;
    }

    /**
     * @param float $userTaxTotal
     * @return VendorCredit
     */
    public function setUserTaxTotal(float $userTaxTotal): VendorCredit
    {
        $this->userTaxTotal = $userTaxTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getUserTaxTotal(): float
    {
        return $this->userTaxTotal;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return VendorCredit
     */
    public function setPostingPeriod(RecordRef $postingPeriod): VendorCredit
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param string $memo
     * @return VendorCredit
     */
    public function setMemo(string $memo): VendorCredit
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
     * @return VendorCredit
     */
    public function setDepartment(RecordRef $department): VendorCredit
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
     * @return VendorCredit
     */
    public function setClass(RecordRef $class): VendorCredit
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
     * @return VendorCredit
     */
    public function setLocation(RecordRef $location): VendorCredit
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
     * @param RecordRef $subsidiary
     * @return VendorCredit
     */
    public function setSubsidiary(RecordRef $subsidiary): VendorCredit
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
     * @param VendorCreditExpenseList $expenseList
     * @return VendorCredit
     */
    public function setExpenseList(VendorCreditExpenseList $expenseList): VendorCredit
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return VendorCreditExpenseList
     */
    public function getExpenseList(): VendorCreditExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param VendorCreditItemList $itemList
     * @return VendorCredit
     */
    public function setItemList(VendorCreditItemList $itemList): VendorCredit
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return VendorCreditItemList
     */
    public function getItemList(): VendorCreditItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return VendorCredit
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): VendorCredit
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param VendorCreditApplyList $applyList
     * @return VendorCredit
     */
    public function setApplyList(VendorCreditApplyList $applyList): VendorCredit
    {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * @return VendorCreditApplyList
     */
    public function getApplyList(): VendorCreditApplyList
    {
        return $this->applyList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return VendorCredit
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): VendorCredit
    {
        $this->taxDetailsList = $taxDetailsList;
        return $this;
    }

    /**
     * @return TaxDetailsList
     */
    public function getTaxDetailsList(): TaxDetailsList
    {
        return $this->taxDetailsList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return VendorCredit
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorCredit
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
     * @return VendorCredit
     */
    public function setInternalId(string $internalId): VendorCredit
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
     * @return VendorCredit
     */
    public function setExternalId(string $externalId): VendorCredit
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
