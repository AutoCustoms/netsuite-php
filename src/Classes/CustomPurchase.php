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

class CustomPurchase extends Record {
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
    protected RecordRef $tranType;

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
    protected RecordRef $billAddressList;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var Address
     */
    protected Address $billingAddress;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $entityTaxRegNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $terms;

    /**
     * @var string
     */
    protected string $dueDate;

    /**
     * @var string
     */
    protected string $discountDate;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var float
     */
    protected float $userTotal;

    /**
     * @var float
     */
    protected float $discountAmount;

    /**
     * @var float
     */
    protected float $taxTotal;

    /**
     * @var bool
     */
    protected bool $paymentHold;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $tranStatus;

    /**
     * @var float
     */
    protected float $availableVendorCredit;

    /**
     * @var LandedCostMethod
     */
    protected LandedCostMethod $landedCostMethod;

    /**
     * @var bool
     */
    protected bool $landedCostPerLine;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $incoterm;

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
     * @var string
     */
    protected string $status;

    /**
     * @var string
     */
    protected string $transactionNumber;

    /**
     * @var bool
     */
    protected bool $overrideInstallments;

    /**
     * @var InstallmentList
     */
    protected InstallmentList $installmentList;

    /**
     * @var CustomPurchaseExpenseList
     */
    protected CustomPurchaseExpenseList $expenseList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CustomPurchaseItemList
     */
    protected CustomPurchaseItemList $itemList;

    /**
     * @var PurchLandedCostList
     */
    protected PurchLandedCostList $landedCostsList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $purchaseOrderList;

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
        "tranType" => "RecordRef",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "billAddressList" => "RecordRef",
        "account" => "RecordRef",
        "entity" => "RecordRef",
        "subsidiary" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "exchangeRate" => "float",
        "entityTaxRegNum" => "RecordRef",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "discountDate" => "dateTime",
        "tranId" => "string",
        "createdFrom" => "RecordRef",
        "userTotal" => "float",
        "discountAmount" => "float",
        "taxTotal" => "float",
        "paymentHold" => "boolean",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "availableVendorCredit" => "float",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "currency" => "RecordRef",
        "incoterm" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "status" => "string",
        "transactionNumber" => "string",
        "overrideInstallments" => "boolean",
        "installmentList" => "InstallmentList",
        "expenseList" => "CustomPurchaseExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "itemList" => "CustomPurchaseItemList",
        "landedCostsList" => "PurchLandedCostList",
        "purchaseOrderList" => "RecordRefList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CustomPurchase
     */
    public function setCreatedDate(string $createdDate): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setLastModifiedDate(string $lastModifiedDate): CustomPurchase
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
     * @param RecordRef $tranType
     * @return CustomPurchase
     */
    public function setTranType(RecordRef $tranType): CustomPurchase
    {
        $this->tranType = $tranType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTranType(): RecordRef
    {
        return $this->tranType;
    }

    /**
     * @param RecordRef $nexus
     * @return CustomPurchase
     */
    public function setNexus(RecordRef $nexus): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setTaxRegOverride(bool $taxRegOverride): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setCustomForm(RecordRef $customForm): CustomPurchase
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
     * @param RecordRef $billAddressList
     * @return CustomPurchase
     */
    public function setBillAddressList(RecordRef $billAddressList): CustomPurchase
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
     * @param RecordRef $account
     * @return CustomPurchase
     */
    public function setAccount(RecordRef $account): CustomPurchase
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
     * @param RecordRef $entity
     * @return CustomPurchase
     */
    public function setEntity(RecordRef $entity): CustomPurchase
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
     * @param RecordRef $subsidiary
     * @return CustomPurchase
     */
    public function setSubsidiary(RecordRef $subsidiary): CustomPurchase
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
     * @param RecordRef $postingPeriod
     * @return CustomPurchase
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CustomPurchase
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
     * @param string $tranDate
     * @return CustomPurchase
     */
    public function setTranDate(string $tranDate): CustomPurchase
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
     * @param string $currencyName
     * @return CustomPurchase
     */
    public function setCurrencyName(string $currencyName): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setBillingAddress(Address $billingAddress): CustomPurchase
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
     * @param float $exchangeRate
     * @return CustomPurchase
     */
    public function setExchangeRate(float $exchangeRate): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): CustomPurchase
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
     * @param RecordRef $terms
     * @return CustomPurchase
     */
    public function setTerms(RecordRef $terms): CustomPurchase
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerms(): RecordRef
    {
        return $this->terms;
    }

    /**
     * @param string $dueDate
     * @return CustomPurchase
     */
    public function setDueDate(string $dueDate): CustomPurchase
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param string $discountDate
     * @return CustomPurchase
     */
    public function setDiscountDate(string $discountDate): CustomPurchase
    {
        $this->discountDate = $discountDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountDate(): string
    {
        return $this->discountDate;
    }

    /**
     * @param string $tranId
     * @return CustomPurchase
     */
    public function setTranId(string $tranId): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setCreatedFrom(RecordRef $createdFrom): CustomPurchase
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
     * @param float $userTotal
     * @return CustomPurchase
     */
    public function setUserTotal(float $userTotal): CustomPurchase
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
     * @param float $discountAmount
     * @return CustomPurchase
     */
    public function setDiscountAmount(float $discountAmount): CustomPurchase
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }

    /**
     * @param float $taxTotal
     * @return CustomPurchase
     */
    public function setTaxTotal(float $taxTotal): CustomPurchase
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxTotal(): float
    {
        return $this->taxTotal;
    }

    /**
     * @param bool $paymentHold
     * @return CustomPurchase
     */
    public function setPaymentHold(bool $paymentHold): CustomPurchase
    {
        $this->paymentHold = $paymentHold;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPaymentHold(): bool
    {
        return $this->paymentHold;
    }

    /**
     * @param string $memo
     * @return CustomPurchase
     */
    public function setMemo(string $memo): CustomPurchase
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
     * @param RecordRef $tranStatus
     * @return CustomPurchase
     */
    public function setTranStatus(RecordRef $tranStatus): CustomPurchase
    {
        $this->tranStatus = $tranStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTranStatus(): RecordRef
    {
        return $this->tranStatus;
    }

    /**
     * @param float $availableVendorCredit
     * @return CustomPurchase
     */
    public function setAvailableVendorCredit(float $availableVendorCredit): CustomPurchase
    {
        $this->availableVendorCredit = $availableVendorCredit;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvailableVendorCredit(): float
    {
        return $this->availableVendorCredit;
    }

    /**
     * @param LandedCostMethod $landedCostMethod
     * @return CustomPurchase
     */
    public function setLandedCostMethod(LandedCostMethod $landedCostMethod): CustomPurchase
    {
        $this->landedCostMethod = $landedCostMethod;
        return $this;
    }

    /**
     * @return LandedCostMethod
     */
    public function getLandedCostMethod(): LandedCostMethod
    {
        return $this->landedCostMethod;
    }

    /**
     * @param bool $landedCostPerLine
     * @return CustomPurchase
     */
    public function setLandedCostPerLine(bool $landedCostPerLine): CustomPurchase
    {
        $this->landedCostPerLine = $landedCostPerLine;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLandedCostPerLine(): bool
    {
        return $this->landedCostPerLine;
    }

    /**
     * @param RecordRef $currency
     * @return CustomPurchase
     */
    public function setCurrency(RecordRef $currency): CustomPurchase
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
     * @param RecordRef $incoterm
     * @return CustomPurchase
     */
    public function setIncoterm(RecordRef $incoterm): CustomPurchase
    {
        $this->incoterm = $incoterm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncoterm(): RecordRef
    {
        return $this->incoterm;
    }

    /**
     * @param RecordRef $class
     * @return CustomPurchase
     */
    public function setClass(RecordRef $class): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setDepartment(RecordRef $department): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setLocation(RecordRef $location): CustomPurchase
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
     * @param string $status
     * @return CustomPurchase
     */
    public function setStatus(string $status): CustomPurchase
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $transactionNumber
     * @return CustomPurchase
     */
    public function setTransactionNumber(string $transactionNumber): CustomPurchase
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
     * @param bool $overrideInstallments
     * @return CustomPurchase
     */
    public function setOverrideInstallments(bool $overrideInstallments): CustomPurchase
    {
        $this->overrideInstallments = $overrideInstallments;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverrideInstallments(): bool
    {
        return $this->overrideInstallments;
    }

    /**
     * @param InstallmentList $installmentList
     * @return CustomPurchase
     */
    public function setInstallmentList(InstallmentList $installmentList): CustomPurchase
    {
        $this->installmentList = $installmentList;
        return $this;
    }

    /**
     * @return InstallmentList
     */
    public function getInstallmentList(): InstallmentList
    {
        return $this->installmentList;
    }

    /**
     * @param CustomPurchaseExpenseList $expenseList
     * @return CustomPurchase
     */
    public function setExpenseList(CustomPurchaseExpenseList $expenseList): CustomPurchase
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return CustomPurchaseExpenseList
     */
    public function getExpenseList(): CustomPurchaseExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CustomPurchase
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CustomPurchase
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
     * @param CustomPurchaseItemList $itemList
     * @return CustomPurchase
     */
    public function setItemList(CustomPurchaseItemList $itemList): CustomPurchase
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return CustomPurchaseItemList
     */
    public function getItemList(): CustomPurchaseItemList
    {
        return $this->itemList;
    }

    /**
     * @param PurchLandedCostList $landedCostsList
     * @return CustomPurchase
     */
    public function setLandedCostsList(PurchLandedCostList $landedCostsList): CustomPurchase
    {
        $this->landedCostsList = $landedCostsList;
        return $this;
    }

    /**
     * @return PurchLandedCostList
     */
    public function getLandedCostsList(): PurchLandedCostList
    {
        return $this->landedCostsList;
    }

    /**
     * @param RecordRefList $purchaseOrderList
     * @return CustomPurchase
     */
    public function setPurchaseOrderList(RecordRefList $purchaseOrderList): CustomPurchase
    {
        $this->purchaseOrderList = $purchaseOrderList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getPurchaseOrderList(): RecordRefList
    {
        return $this->purchaseOrderList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return CustomPurchase
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setInternalId(string $internalId): CustomPurchase
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
     * @return CustomPurchase
     */
    public function setExternalId(string $externalId): CustomPurchase
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
