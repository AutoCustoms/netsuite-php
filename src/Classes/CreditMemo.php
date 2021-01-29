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

class CreditMemo extends Record {
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
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var string
     */
    protected string $vatRegNum;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $tranId;

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
    protected RecordRef $createdFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

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
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesRep;

    /**
     * @var RecordRef
     */
    protected RecordRef $partner;

    /**
     * @var string
     */
    protected string $contribPct;

    /**
     * @var string
     */
    protected string $otherRefNum;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $excludeCommission;

    /**
     * @var RecordRef
     */
    protected RecordRef $leadSource;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var string
     */
    protected string $onCreditHold;

    /**
     * @var float
     */
    protected float $amountPaid;

    /**
     * @var string
     */
    protected string $salesEffectiveDate;

    /**
     * @var float
     */
    protected float $totalCostEstimate;

    /**
     * @var float
     */
    protected float $estGrossProfit;

    /**
     * @var float
     */
    protected float $estGrossProfitPercent;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var RecordRef
     */
    protected RecordRef $promoCode;

    /**
     * @var float
     */
    protected float $amountRemaining;

    /**
     * @var RecordRef
     */
    protected RecordRef $discountItem;

    /**
     * @var string
     */
    protected string $source;

    /**
     * @var string
     */
    protected string $discountRate;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxItem;

    /**
     * @var float
     */
    protected float $taxRate;

    /**
     * @var float
     */
    protected float $unapplied;

    /**
     * @var bool
     */
    protected bool $autoApply;

    /**
     * @var float
     */
    protected float $applied;

    /**
     * @var bool
     */
    protected bool $toBePrinted;

    /**
     * @var bool
     */
    protected bool $toBeEmailed;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var bool
     */
    protected bool $toBeFaxed;

    /**
     * @var string
     */
    protected string $fax;

    /**
     * @var RecordRef
     */
    protected RecordRef $messageSel;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var Address
     */
    protected Address $billingAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $billAddressList;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var float
     */
    protected float $shippingCost;

    protected $shippingTax1Rate;
    /**
     * @var RecordRef
     */
    protected RecordRef $shippingTaxCode;

    /**
     * @var RecordRef
     */
    protected RecordRef $handlingTaxCode;

    protected $shippingTax2Rate;
    protected $handlingTax1Rate;
    protected $handlingTax2Rate;
    /**
     * @var float
     */
    protected float $handlingCost;

    /**
     * @var float
     */
    protected float $subTotal;

    /**
     * @var float
     */
    protected float $discountTotal;

    /**
     * @var RevenueStatus
     */
    protected RevenueStatus $revenueStatus;

    /**
     * @var float
     */
    protected float $recognizedRevenue;

    /**
     * @var float
     */
    protected float $deferredRevenue;

    /**
     * @var bool
     */
    protected bool $revRecOnRevCommitment;

    /**
     * @var float
     */
    protected float $taxTotal;

    protected $tax2Total;
    /**
     * @var float
     */
    protected float $altShippingCost;

    /**
     * @var float
     */
    protected float $altHandlingCost;

    /**
     * @var bool
     */
    protected bool $isMultiShipTo;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesGroup;

    /**
     * @var bool
     */
    protected bool $syncSalesTeams;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var RecordRef
     */
    protected RecordRef $giftCert;

    /**
     * @var float
     */
    protected float $giftCertTotal;

    /**
     * @var float
     */
    protected float $giftCertApplied;

    /**
     * @var float
     */
    protected float $giftCertAvailable;

    /**
     * @var bool
     */
    protected bool $tranIsVsoeBundle;

    /**
     * @var bool
     */
    protected bool $vsoeAutoCalc;

    /**
     * @var bool
     */
    protected bool $syncPartnerTeams;

    /**
     * @var CreditMemoSalesTeamList
     */
    protected CreditMemoSalesTeamList $salesTeamList;

    /**
     * @var CreditMemoItemList
     */
    protected CreditMemoItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CreditMemoPartnersList
     */
    protected CreditMemoPartnersList $partnersList;

    /**
     * @var CreditMemoApplyList
     */
    protected CreditMemoApplyList $applyList;

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
        "currency" => "RecordRef",
        "entity" => "RecordRef",
        "vatRegNum" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "createdFrom" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "job" => "RecordRef",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "contribPct" => "string",
        "otherRefNum" => "string",
        "memo" => "string",
        "excludeCommission" => "boolean",
        "leadSource" => "RecordRef",
        "balance" => "float",
        "account" => "RecordRef",
        "exchangeRate" => "float",
        "onCreditHold" => "string",
        "amountPaid" => "float",
        "salesEffectiveDate" => "dateTime",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "amountRemaining" => "float",
        "discountItem" => "RecordRef",
        "source" => "string",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "unapplied" => "float",
        "autoApply" => "boolean",
        "applied" => "float",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "messageSel" => "RecordRef",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "shippingTax1Rate" => "float",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "shippingTax2Rate" => "string",
        "handlingTax1Rate" => "float",
        "handlingTax2Rate" => "string",
        "handlingCost" => "float",
        "subTotal" => "float",
        "discountTotal" => "float",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "isMultiShipTo" => "boolean",
        "total" => "float",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "status" => "string",
        "giftCert" => "RecordRef",
        "giftCertTotal" => "float",
        "giftCertApplied" => "float",
        "giftCertAvailable" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "CreditMemoSalesTeamList",
        "itemList" => "CreditMemoItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "partnersList" => "CreditMemoPartnersList",
        "applyList" => "CreditMemoApplyList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CreditMemo
     */
    public function setCreatedDate(string $createdDate): CreditMemo
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
     * @return CreditMemo
     */
    public function setLastModifiedDate(string $lastModifiedDate): CreditMemo
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
     * @return CreditMemo
     */
    public function setNexus(RecordRef $nexus): CreditMemo
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
     * @return CreditMemo
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): CreditMemo
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
     * @return CreditMemo
     */
    public function setTaxRegOverride(bool $taxRegOverride): CreditMemo
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
     * @return CreditMemo
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): CreditMemo
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
     * @return CreditMemo
     */
    public function setCustomForm(RecordRef $customForm): CreditMemo
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
     * @param RecordRef $currency
     * @return CreditMemo
     */
    public function setCurrency(RecordRef $currency): CreditMemo
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
     * @param RecordRef $entity
     * @return CreditMemo
     */
    public function setEntity(RecordRef $entity): CreditMemo
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
     * @param string $vatRegNum
     * @return CreditMemo
     */
    public function setVatRegNum(string $vatRegNum): CreditMemo
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
     * @param string $tranDate
     * @return CreditMemo
     */
    public function setTranDate(string $tranDate): CreditMemo
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
     * @param string $tranId
     * @return CreditMemo
     */
    public function setTranId(string $tranId): CreditMemo
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
     * @param RecordRef $entityTaxRegNum
     * @return CreditMemo
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): CreditMemo
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
     * @return CreditMemo
     */
    public function setTaxPointDate(string $taxPointDate): CreditMemo
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
     * @param RecordRef $createdFrom
     * @return CreditMemo
     */
    public function setCreatedFrom(RecordRef $createdFrom): CreditMemo
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
     * @param RecordRef $postingPeriod
     * @return CreditMemo
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CreditMemo
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
     * @param RecordRef $department
     * @return CreditMemo
     */
    public function setDepartment(RecordRef $department): CreditMemo
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
     * @return CreditMemo
     */
    public function setClass(RecordRef $class): CreditMemo
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
     * @return CreditMemo
     */
    public function setLocation(RecordRef $location): CreditMemo
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
     * @return CreditMemo
     */
    public function setSubsidiary(RecordRef $subsidiary): CreditMemo
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
     * @param RecordRef $job
     * @return CreditMemo
     */
    public function setJob(RecordRef $job): CreditMemo
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJob(): RecordRef
    {
        return $this->job;
    }

    /**
     * @param RecordRef $salesRep
     * @return CreditMemo
     */
    public function setSalesRep(RecordRef $salesRep): CreditMemo
    {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRep(): RecordRef
    {
        return $this->salesRep;
    }

    /**
     * @param RecordRef $partner
     * @return CreditMemo
     */
    public function setPartner(RecordRef $partner): CreditMemo
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartner(): RecordRef
    {
        return $this->partner;
    }

    /**
     * @param string $contribPct
     * @return CreditMemo
     */
    public function setContribPct(string $contribPct): CreditMemo
    {
        $this->contribPct = $contribPct;
        return $this;
    }

    /**
     * @return string
     */
    public function getContribPct(): string
    {
        return $this->contribPct;
    }

    /**
     * @param string $otherRefNum
     * @return CreditMemo
     */
    public function setOtherRefNum(string $otherRefNum): CreditMemo
    {
        $this->otherRefNum = $otherRefNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherRefNum(): string
    {
        return $this->otherRefNum;
    }

    /**
     * @param string $memo
     * @return CreditMemo
     */
    public function setMemo(string $memo): CreditMemo
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
     * @param bool $excludeCommission
     * @return CreditMemo
     */
    public function setExcludeCommission(bool $excludeCommission): CreditMemo
    {
        $this->excludeCommission = $excludeCommission;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExcludeCommission(): bool
    {
        return $this->excludeCommission;
    }

    /**
     * @param RecordRef $leadSource
     * @return CreditMemo
     */
    public function setLeadSource(RecordRef $leadSource): CreditMemo
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLeadSource(): RecordRef
    {
        return $this->leadSource;
    }

    /**
     * @param float $balance
     * @return CreditMemo
     */
    public function setBalance(float $balance): CreditMemo
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param RecordRef $account
     * @return CreditMemo
     */
    public function setAccount(RecordRef $account): CreditMemo
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
     * @param float $exchangeRate
     * @return CreditMemo
     */
    public function setExchangeRate(float $exchangeRate): CreditMemo
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
     * @param string $onCreditHold
     * @return CreditMemo
     */
    public function setOnCreditHold(string $onCreditHold): CreditMemo
    {
        $this->onCreditHold = $onCreditHold;
        return $this;
    }

    /**
     * @return string
     */
    public function getOnCreditHold(): string
    {
        return $this->onCreditHold;
    }

    /**
     * @param float $amountPaid
     * @return CreditMemo
     */
    public function setAmountPaid(float $amountPaid): CreditMemo
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountPaid(): float
    {
        return $this->amountPaid;
    }

    /**
     * @param string $salesEffectiveDate
     * @return CreditMemo
     */
    public function setSalesEffectiveDate(string $salesEffectiveDate): CreditMemo
    {
        $this->salesEffectiveDate = $salesEffectiveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesEffectiveDate(): string
    {
        return $this->salesEffectiveDate;
    }

    /**
     * @param float $totalCostEstimate
     * @return CreditMemo
     */
    public function setTotalCostEstimate(float $totalCostEstimate): CreditMemo
    {
        $this->totalCostEstimate = $totalCostEstimate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCostEstimate(): float
    {
        return $this->totalCostEstimate;
    }

    /**
     * @param float $estGrossProfit
     * @return CreditMemo
     */
    public function setEstGrossProfit(float $estGrossProfit): CreditMemo
    {
        $this->estGrossProfit = $estGrossProfit;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstGrossProfit(): float
    {
        return $this->estGrossProfit;
    }

    /**
     * @param float $estGrossProfitPercent
     * @return CreditMemo
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): CreditMemo
    {
        $this->estGrossProfitPercent = $estGrossProfitPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstGrossProfitPercent(): float
    {
        return $this->estGrossProfitPercent;
    }

    /**
     * @param string $currencyName
     * @return CreditMemo
     */
    public function setCurrencyName(string $currencyName): CreditMemo
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
     * @param RecordRef $promoCode
     * @return CreditMemo
     */
    public function setPromoCode(RecordRef $promoCode): CreditMemo
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPromoCode(): RecordRef
    {
        return $this->promoCode;
    }

    /**
     * @param float $amountRemaining
     * @return CreditMemo
     */
    public function setAmountRemaining(float $amountRemaining): CreditMemo
    {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountRemaining(): float
    {
        return $this->amountRemaining;
    }

    /**
     * @param RecordRef $discountItem
     * @return CreditMemo
     */
    public function setDiscountItem(RecordRef $discountItem): CreditMemo
    {
        $this->discountItem = $discountItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDiscountItem(): RecordRef
    {
        return $this->discountItem;
    }

    /**
     * @param string $source
     * @return CreditMemo
     */
    public function setSource(string $source): CreditMemo
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $discountRate
     * @return CreditMemo
     */
    public function setDiscountRate(string $discountRate): CreditMemo
    {
        $this->discountRate = $discountRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountRate(): string
    {
        return $this->discountRate;
    }

    /**
     * @param bool $isTaxable
     * @return CreditMemo
     */
    public function setIsTaxable(bool $isTaxable): CreditMemo
    {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTaxable(): bool
    {
        return $this->isTaxable;
    }

    /**
     * @param RecordRef $taxItem
     * @return CreditMemo
     */
    public function setTaxItem(RecordRef $taxItem): CreditMemo
    {
        $this->taxItem = $taxItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxItem(): RecordRef
    {
        return $this->taxItem;
    }

    /**
     * @param float $taxRate
     * @return CreditMemo
     */
    public function setTaxRate(float $taxRate): CreditMemo
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    /**
     * @param float $unapplied
     * @return CreditMemo
     */
    public function setUnapplied(float $unapplied): CreditMemo
    {
        $this->unapplied = $unapplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnapplied(): float
    {
        return $this->unapplied;
    }

    /**
     * @param bool $autoApply
     * @return CreditMemo
     */
    public function setAutoApply(bool $autoApply): CreditMemo
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
     * @return CreditMemo
     */
    public function setApplied(float $applied): CreditMemo
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
     * @param bool $toBePrinted
     * @return CreditMemo
     */
    public function setToBePrinted(bool $toBePrinted): CreditMemo
    {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToBePrinted(): bool
    {
        return $this->toBePrinted;
    }

    /**
     * @param bool $toBeEmailed
     * @return CreditMemo
     */
    public function setToBeEmailed(bool $toBeEmailed): CreditMemo
    {
        $this->toBeEmailed = $toBeEmailed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToBeEmailed(): bool
    {
        return $this->toBeEmailed;
    }

    /**
     * @param string $email
     * @return CreditMemo
     */
    public function setEmail(string $email): CreditMemo
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param bool $toBeFaxed
     * @return CreditMemo
     */
    public function setToBeFaxed(bool $toBeFaxed): CreditMemo
    {
        $this->toBeFaxed = $toBeFaxed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToBeFaxed(): bool
    {
        return $this->toBeFaxed;
    }

    /**
     * @param string $fax
     * @return CreditMemo
     */
    public function setFax(string $fax): CreditMemo
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param RecordRef $messageSel
     * @return CreditMemo
     */
    public function setMessageSel(RecordRef $messageSel): CreditMemo
    {
        $this->messageSel = $messageSel;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMessageSel(): RecordRef
    {
        return $this->messageSel;
    }

    /**
     * @param string $message
     * @return CreditMemo
     */
    public function setMessage(string $message): CreditMemo
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param Address $billingAddress
     * @return CreditMemo
     */
    public function setBillingAddress(Address $billingAddress): CreditMemo
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
     * @return CreditMemo
     */
    public function setBillAddressList(RecordRef $billAddressList): CreditMemo
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
     * @param RecordRef $shipMethod
     * @return CreditMemo
     */
    public function setShipMethod(RecordRef $shipMethod): CreditMemo
    {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod(): RecordRef
    {
        return $this->shipMethod;
    }

    /**
     * @param float $shippingCost
     * @return CreditMemo
     */
    public function setShippingCost(float $shippingCost): CreditMemo
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    /**
     * @param RecordRef $shippingTaxCode
     * @return CreditMemo
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): CreditMemo
    {
        $this->shippingTaxCode = $shippingTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingTaxCode(): RecordRef
    {
        return $this->shippingTaxCode;
    }

    /**
     * @param RecordRef $handlingTaxCode
     * @return CreditMemo
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): CreditMemo
    {
        $this->handlingTaxCode = $handlingTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHandlingTaxCode(): RecordRef
    {
        return $this->handlingTaxCode;
    }

    /**
     * @param float $handlingCost
     * @return CreditMemo
     */
    public function setHandlingCost(float $handlingCost): CreditMemo
    {
        $this->handlingCost = $handlingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getHandlingCost(): float
    {
        return $this->handlingCost;
    }

    /**
     * @param float $subTotal
     * @return CreditMemo
     */
    public function setSubTotal(float $subTotal): CreditMemo
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal(): float
    {
        return $this->subTotal;
    }

    /**
     * @param float $discountTotal
     * @return CreditMemo
     */
    public function setDiscountTotal(float $discountTotal): CreditMemo
    {
        $this->discountTotal = $discountTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountTotal(): float
    {
        return $this->discountTotal;
    }

    /**
     * @param RevenueStatus $revenueStatus
     * @return CreditMemo
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus): CreditMemo
    {
        $this->revenueStatus = $revenueStatus;
        return $this;
    }

    /**
     * @return RevenueStatus
     */
    public function getRevenueStatus(): RevenueStatus
    {
        return $this->revenueStatus;
    }

    /**
     * @param float $recognizedRevenue
     * @return CreditMemo
     */
    public function setRecognizedRevenue(float $recognizedRevenue): CreditMemo
    {
        $this->recognizedRevenue = $recognizedRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecognizedRevenue(): float
    {
        return $this->recognizedRevenue;
    }

    /**
     * @param float $deferredRevenue
     * @return CreditMemo
     */
    public function setDeferredRevenue(float $deferredRevenue): CreditMemo
    {
        $this->deferredRevenue = $deferredRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeferredRevenue(): float
    {
        return $this->deferredRevenue;
    }

    /**
     * @param bool $revRecOnRevCommitment
     * @return CreditMemo
     */
    public function setRevRecOnRevCommitment(bool $revRecOnRevCommitment): CreditMemo
    {
        $this->revRecOnRevCommitment = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRevRecOnRevCommitment(): bool
    {
        return $this->revRecOnRevCommitment;
    }

    /**
     * @param float $taxTotal
     * @return CreditMemo
     */
    public function setTaxTotal(float $taxTotal): CreditMemo
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
     * @param float $altShippingCost
     * @return CreditMemo
     */
    public function setAltShippingCost(float $altShippingCost): CreditMemo
    {
        $this->altShippingCost = $altShippingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltShippingCost(): float
    {
        return $this->altShippingCost;
    }

    /**
     * @param float $altHandlingCost
     * @return CreditMemo
     */
    public function setAltHandlingCost(float $altHandlingCost): CreditMemo
    {
        $this->altHandlingCost = $altHandlingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltHandlingCost(): float
    {
        return $this->altHandlingCost;
    }

    /**
     * @param bool $isMultiShipTo
     * @return CreditMemo
     */
    public function setIsMultiShipTo(bool $isMultiShipTo): CreditMemo
    {
        $this->isMultiShipTo = $isMultiShipTo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMultiShipTo(): bool
    {
        return $this->isMultiShipTo;
    }

    /**
     * @param float $total
     * @return CreditMemo
     */
    public function setTotal(float $total): CreditMemo
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
     * @param RecordRef $salesGroup
     * @return CreditMemo
     */
    public function setSalesGroup(RecordRef $salesGroup): CreditMemo
    {
        $this->salesGroup = $salesGroup;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesGroup(): RecordRef
    {
        return $this->salesGroup;
    }

    /**
     * @param bool $syncSalesTeams
     * @return CreditMemo
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): CreditMemo
    {
        $this->syncSalesTeams = $syncSalesTeams;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSyncSalesTeams(): bool
    {
        return $this->syncSalesTeams;
    }

    /**
     * @param string $status
     * @return CreditMemo
     */
    public function setStatus(string $status): CreditMemo
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
     * @param RecordRef $giftCert
     * @return CreditMemo
     */
    public function setGiftCert(RecordRef $giftCert): CreditMemo
    {
        $this->giftCert = $giftCert;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGiftCert(): RecordRef
    {
        return $this->giftCert;
    }

    /**
     * @param float $giftCertTotal
     * @return CreditMemo
     */
    public function setGiftCertTotal(float $giftCertTotal): CreditMemo
    {
        $this->giftCertTotal = $giftCertTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertTotal(): float
    {
        return $this->giftCertTotal;
    }

    /**
     * @param float $giftCertApplied
     * @return CreditMemo
     */
    public function setGiftCertApplied(float $giftCertApplied): CreditMemo
    {
        $this->giftCertApplied = $giftCertApplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertApplied(): float
    {
        return $this->giftCertApplied;
    }

    /**
     * @param float $giftCertAvailable
     * @return CreditMemo
     */
    public function setGiftCertAvailable(float $giftCertAvailable): CreditMemo
    {
        $this->giftCertAvailable = $giftCertAvailable;
        return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertAvailable(): float
    {
        return $this->giftCertAvailable;
    }

    /**
     * @param bool $tranIsVsoeBundle
     * @return CreditMemo
     */
    public function setTranIsVsoeBundle(bool $tranIsVsoeBundle): CreditMemo
    {
        $this->tranIsVsoeBundle = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTranIsVsoeBundle(): bool
    {
        return $this->tranIsVsoeBundle;
    }

    /**
     * @param bool $vsoeAutoCalc
     * @return CreditMemo
     */
    public function setVsoeAutoCalc(bool $vsoeAutoCalc): CreditMemo
    {
        $this->vsoeAutoCalc = $vsoeAutoCalc;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVsoeAutoCalc(): bool
    {
        return $this->vsoeAutoCalc;
    }

    /**
     * @param bool $syncPartnerTeams
     * @return CreditMemo
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): CreditMemo
    {
        $this->syncPartnerTeams = $syncPartnerTeams;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSyncPartnerTeams(): bool
    {
        return $this->syncPartnerTeams;
    }

    /**
     * @param CreditMemoSalesTeamList $salesTeamList
     * @return CreditMemo
     */
    public function setSalesTeamList(CreditMemoSalesTeamList $salesTeamList): CreditMemo
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return CreditMemoSalesTeamList
     */
    public function getSalesTeamList(): CreditMemoSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param CreditMemoItemList $itemList
     * @return CreditMemo
     */
    public function setItemList(CreditMemoItemList $itemList): CreditMemo
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return CreditMemoItemList
     */
    public function getItemList(): CreditMemoItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CreditMemo
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CreditMemo
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
     * @param CreditMemoPartnersList $partnersList
     * @return CreditMemo
     */
    public function setPartnersList(CreditMemoPartnersList $partnersList): CreditMemo
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return CreditMemoPartnersList
     */
    public function getPartnersList(): CreditMemoPartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param CreditMemoApplyList $applyList
     * @return CreditMemo
     */
    public function setApplyList(CreditMemoApplyList $applyList): CreditMemo
    {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * @return CreditMemoApplyList
     */
    public function getApplyList(): CreditMemoApplyList
    {
        return $this->applyList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return CreditMemo
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): CreditMemo
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
     * @return CreditMemo
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CreditMemo
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
     * @return CreditMemo
     */
    public function setInternalId(string $internalId): CreditMemo
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
     * @return CreditMemo
     */
    public function setExternalId(string $externalId): CreditMemo
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
