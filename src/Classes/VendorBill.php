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

class VendorBill extends Record {
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
    protected RecordRef $approvalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $nextApprover;

    /**
     * @var string
     */
    protected string $vatRegNum;

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
     * @var string
     */
    protected string $taxPointDate;

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

    protected $tax2Total;
    /**
     * @var float
     */
    protected float $creditLimit;

    /**
     * @var float
     */
    protected float $availableVendorCredit;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

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
     * @var LandedCostMethod
     */
    protected LandedCostMethod $landedCostMethod;

    /**
     * @var bool
     */
    protected bool $landedCostPerLine;

    /**
     * @var string
     */
    protected string $transactionNumber;

    /**
     * @var VendorBillExpenseList
     */
    protected VendorBillExpenseList $expenseList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var VendorBillItemList
     */
    protected VendorBillItemList $itemList;

    /**
     * @var InstallmentList
     */
    protected InstallmentList $installmentList;

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
     * @var bool
     */
    protected bool $overrideInstallments;

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
        "billAddressList" => "RecordRef",
        "account" => "RecordRef",
        "entity" => "RecordRef",
        "subsidiary" => "RecordRef",
        "approvalStatus" => "RecordRef",
        "nextApprover" => "RecordRef",
        "vatRegNum" => "string",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "exchangeRate" => "float",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "discountDate" => "dateTime",
        "tranId" => "string",
        "userTotal" => "float",
        "discountAmount" => "float",
        "taxTotal" => "float",
        "paymentHold" => "boolean",
        "memo" => "string",
        "tax2Total" => "float",
        "creditLimit" => "float",
        "availableVendorCredit" => "float",
        "currency" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "status" => "string",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "transactionNumber" => "string",
        "expenseList" => "VendorBillExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "itemList" => "VendorBillItemList",
        "installmentList" => "InstallmentList",
        "landedCostsList" => "PurchLandedCostList",
        "purchaseOrderList" => "RecordRefList",
        "taxDetailsList" => "TaxDetailsList",
        "overrideInstallments" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return VendorBill
     */
    public function setCreatedDate(string $createdDate): VendorBill
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
     * @return VendorBill
     */
    public function setLastModifiedDate(string $lastModifiedDate): VendorBill
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
     * @return VendorBill
     */
    public function setNexus(RecordRef $nexus): VendorBill
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
     * @return VendorBill
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): VendorBill
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
     * @return VendorBill
     */
    public function setTaxRegOverride(bool $taxRegOverride): VendorBill
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
     * @return VendorBill
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): VendorBill
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
     * @return VendorBill
     */
    public function setCustomForm(RecordRef $customForm): VendorBill
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
     * @return VendorBill
     */
    public function setBillAddressList(RecordRef $billAddressList): VendorBill
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
     * @return VendorBill
     */
    public function setAccount(RecordRef $account): VendorBill
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
     * @return VendorBill
     */
    public function setEntity(RecordRef $entity): VendorBill
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
     * @return VendorBill
     */
    public function setSubsidiary(RecordRef $subsidiary): VendorBill
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
     * @param RecordRef $approvalStatus
     * @return VendorBill
     */
    public function setApprovalStatus(RecordRef $approvalStatus): VendorBill
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprovalStatus(): RecordRef
    {
        return $this->approvalStatus;
    }

    /**
     * @param RecordRef $nextApprover
     * @return VendorBill
     */
    public function setNextApprover(RecordRef $nextApprover): VendorBill
    {
        $this->nextApprover = $nextApprover;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNextApprover(): RecordRef
    {
        return $this->nextApprover;
    }

    /**
     * @param string $vatRegNum
     * @return VendorBill
     */
    public function setVatRegNum(string $vatRegNum): VendorBill
    {
        $this->vatRegNum = $vatRegNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatRegNum(): string
    {
        return $this->vatRegNum;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return VendorBill
     */
    public function setPostingPeriod(RecordRef $postingPeriod): VendorBill
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
     * @return VendorBill
     */
    public function setTranDate(string $tranDate): VendorBill
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
     * @return VendorBill
     */
    public function setCurrencyName(string $currencyName): VendorBill
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
     * @return VendorBill
     */
    public function setBillingAddress(Address $billingAddress): VendorBill
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
     * @return VendorBill
     */
    public function setExchangeRate(float $exchangeRate): VendorBill
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
     * @return VendorBill
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): VendorBill
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
     * @return VendorBill
     */
    public function setTaxPointDate(string $taxPointDate): VendorBill
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
     * @param RecordRef $terms
     * @return VendorBill
     */
    public function setTerms(RecordRef $terms): VendorBill
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
     * @return VendorBill
     */
    public function setDueDate(string $dueDate): VendorBill
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
     * @return VendorBill
     */
    public function setDiscountDate(string $discountDate): VendorBill
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
     * @return VendorBill
     */
    public function setTranId(string $tranId): VendorBill
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
     * @param float $userTotal
     * @return VendorBill
     */
    public function setUserTotal(float $userTotal): VendorBill
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
     * @return VendorBill
     */
    public function setDiscountAmount(float $discountAmount): VendorBill
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
     * @return VendorBill
     */
    public function setTaxTotal(float $taxTotal): VendorBill
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
     * @return VendorBill
     */
    public function setPaymentHold(bool $paymentHold): VendorBill
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
     * @return VendorBill
     */
    public function setMemo(string $memo): VendorBill
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
     * @param float $creditLimit
     * @return VendorBill
     */
    public function setCreditLimit(float $creditLimit): VendorBill
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit(): float
    {
        return $this->creditLimit;
    }

    /**
     * @param float $availableVendorCredit
     * @return VendorBill
     */
    public function setAvailableVendorCredit(float $availableVendorCredit): VendorBill
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
     * @param RecordRef $currency
     * @return VendorBill
     */
    public function setCurrency(RecordRef $currency): VendorBill
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
     * @param RecordRef $class
     * @return VendorBill
     */
    public function setClass(RecordRef $class): VendorBill
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
     * @return VendorBill
     */
    public function setDepartment(RecordRef $department): VendorBill
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
     * @return VendorBill
     */
    public function setLocation(RecordRef $location): VendorBill
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
     * @return VendorBill
     */
    public function setStatus(string $status): VendorBill
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
     * @param LandedCostMethod $landedCostMethod
     * @return VendorBill
     */
    public function setLandedCostMethod(LandedCostMethod $landedCostMethod): VendorBill
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
     * @return VendorBill
     */
    public function setLandedCostPerLine(bool $landedCostPerLine): VendorBill
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
     * @param string $transactionNumber
     * @return VendorBill
     */
    public function setTransactionNumber(string $transactionNumber): VendorBill
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
     * @param VendorBillExpenseList $expenseList
     * @return VendorBill
     */
    public function setExpenseList(VendorBillExpenseList $expenseList): VendorBill
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return VendorBillExpenseList
     */
    public function getExpenseList(): VendorBillExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return VendorBill
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): VendorBill
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
     * @param VendorBillItemList $itemList
     * @return VendorBill
     */
    public function setItemList(VendorBillItemList $itemList): VendorBill
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return VendorBillItemList
     */
    public function getItemList(): VendorBillItemList
    {
        return $this->itemList;
    }

    /**
     * @param InstallmentList $installmentList
     * @return VendorBill
     */
    public function setInstallmentList(InstallmentList $installmentList): VendorBill
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
     * @param PurchLandedCostList $landedCostsList
     * @return VendorBill
     */
    public function setLandedCostsList(PurchLandedCostList $landedCostsList): VendorBill
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
     * @return VendorBill
     */
    public function setPurchaseOrderList(RecordRefList $purchaseOrderList): VendorBill
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
     * @return VendorBill
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): VendorBill
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
     * @param bool $overrideInstallments
     * @return VendorBill
     */
    public function setOverrideInstallments(bool $overrideInstallments): VendorBill
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
     * @param CustomFieldList $customFieldList
     * @return VendorBill
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorBill
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
     * @return VendorBill
     */
    public function setInternalId(string $internalId): VendorBill
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
     * @return VendorBill
     */
    public function setExternalId(string $externalId): VendorBill
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
