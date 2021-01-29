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

class VendorReturnAuthorization extends Record {
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
     * @var VendorReturnAuthorizationOrderStatus
     */
    protected VendorReturnAuthorizationOrderStatus $orderStatus;

    /**
     * @var string
     */
    protected string $tranDate;

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
     * @var RecordRef
     */
    protected RecordRef $billAddressList;

    /**
     * @var string
     */
    protected string $memo;

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
     * @var RecordRef
     */
    protected RecordRef $intercoTransaction;

    /**
     * @var IntercoStatus
     */
    protected IntercoStatus $intercoStatus;

    /**
     * @var VendorReturnAuthorizationExpenseList
     */
    protected VendorReturnAuthorizationExpenseList $expenseList;

    /**
     * @var VendorReturnAuthorizationItemList
     */
    protected VendorReturnAuthorizationItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

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
        "tranId" => "string",
        "createdFrom" => "RecordRef",
        "entity" => "RecordRef",
        "orderStatus" => "VendorReturnAuthorizationOrderStatus",
        "tranDate" => "dateTime",
        "userTotal" => "float",
        "currency" => "RecordRef",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "memo" => "string",
        "exchangeRate" => "float",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "userTaxTotal" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "expenseList" => "VendorReturnAuthorizationExpenseList",
        "itemList" => "VendorReturnAuthorizationItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return VendorReturnAuthorization
     */
    public function setCreatedDate(string $createdDate): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setLastModifiedDate(string $lastModifiedDate): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setNexus(RecordRef $nexus): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setTaxRegOverride(bool $taxRegOverride): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setCustomForm(RecordRef $customForm): VendorReturnAuthorization
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
     * @param string $tranId
     * @return VendorReturnAuthorization
     */
    public function setTranId(string $tranId): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setCreatedFrom(RecordRef $createdFrom): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setEntity(RecordRef $entity): VendorReturnAuthorization
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
     * @param VendorReturnAuthorizationOrderStatus $orderStatus
     * @return VendorReturnAuthorization
     */
    public function setOrderStatus(VendorReturnAuthorizationOrderStatus $orderStatus): VendorReturnAuthorization
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return VendorReturnAuthorizationOrderStatus
     */
    public function getOrderStatus(): VendorReturnAuthorizationOrderStatus
    {
        return $this->orderStatus;
    }

    /**
     * @param string $tranDate
     * @return VendorReturnAuthorization
     */
    public function setTranDate(string $tranDate): VendorReturnAuthorization
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
     * @param float $userTotal
     * @return VendorReturnAuthorization
     */
    public function setUserTotal(float $userTotal): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setCurrency(RecordRef $currency): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setCurrencyName(string $currencyName): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setBillingAddress(Address $billingAddress): VendorReturnAuthorization
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
     * @param RecordRef $billAddressList
     * @return VendorReturnAuthorization
     */
    public function setBillAddressList(RecordRef $billAddressList): VendorReturnAuthorization
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
     * @param string $memo
     * @return VendorReturnAuthorization
     */
    public function setMemo(string $memo): VendorReturnAuthorization
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
     * @param float $exchangeRate
     * @return VendorReturnAuthorization
     */
    public function setExchangeRate(float $exchangeRate): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setTaxPointDate(string $taxPointDate): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setUserTaxTotal(float $userTaxTotal): VendorReturnAuthorization
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
     * @param RecordRef $department
     * @return VendorReturnAuthorization
     */
    public function setDepartment(RecordRef $department): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setClass(RecordRef $class): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setLocation(RecordRef $location): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setSubsidiary(RecordRef $subsidiary): VendorReturnAuthorization
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
     * @param RecordRef $intercoTransaction
     * @return VendorReturnAuthorization
     */
    public function setIntercoTransaction(RecordRef $intercoTransaction): VendorReturnAuthorization
    {
        $this->intercoTransaction = $intercoTransaction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoTransaction(): RecordRef
    {
        return $this->intercoTransaction;
    }

    /**
     * @param IntercoStatus $intercoStatus
     * @return VendorReturnAuthorization
     */
    public function setIntercoStatus(IntercoStatus $intercoStatus): VendorReturnAuthorization
    {
        $this->intercoStatus = $intercoStatus;
        return $this;
    }

    /**
     * @return IntercoStatus
     */
    public function getIntercoStatus(): IntercoStatus
    {
        return $this->intercoStatus;
    }

    /**
     * @param VendorReturnAuthorizationExpenseList $expenseList
     * @return VendorReturnAuthorization
     */
    public function setExpenseList(VendorReturnAuthorizationExpenseList $expenseList): VendorReturnAuthorization
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return VendorReturnAuthorizationExpenseList
     */
    public function getExpenseList(): VendorReturnAuthorizationExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param VendorReturnAuthorizationItemList $itemList
     * @return VendorReturnAuthorization
     */
    public function setItemList(VendorReturnAuthorizationItemList $itemList): VendorReturnAuthorization
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return VendorReturnAuthorizationItemList
     */
    public function getItemList(): VendorReturnAuthorizationItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return VendorReturnAuthorization
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): VendorReturnAuthorization
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
     * @param TaxDetailsList $taxDetailsList
     * @return VendorReturnAuthorization
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setInternalId(string $internalId): VendorReturnAuthorization
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
     * @return VendorReturnAuthorization
     */
    public function setExternalId(string $externalId): VendorReturnAuthorization
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
