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

class CustomSale extends Record {
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
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingAccount;

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
    protected string $source;

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
    protected RecordRef $opportunity;

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
    protected RecordRef $terms;

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
    protected RecordRef $currency;

    /**
     * @var string
     */
    protected string $dueDate;

    /**
     * @var string
     */
    protected string $discountDate;

    /**
     * @var float
     */
    protected float $discountAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesRep;

    /**
     * @var RecordRef
     */
    protected RecordRef $partner;

    /**
     * @var RecordRef
     */
    protected RecordRef $leadSource;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var string
     */
    protected string $otherRefNum;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $tranStatus;

    /**
     * @var string
     */
    protected string $salesEffectiveDate;

    /**
     * @var bool
     */
    protected bool $excludeCommission;

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
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

    /**
     * @var string
     */
    protected string $revRecStartDate;

    /**
     * @var string
     */
    protected string $revRecEndDate;

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
    protected string $currencyName;

    /**
     * @var RecordRef
     */
    protected RecordRef $promoCode;

    /**
     * @var RecordRef
     */
    protected RecordRef $discountItem;

    /**
     * @var string
     */
    protected string $discountRate;

    /**
     * @var bool
     */
    protected bool $isMultiShipTo;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var bool
     */
    protected bool $toBePrinted;

    /**
     * @var bool
     */
    protected bool $toBeEmailed;

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
     * @var Address
     */
    protected Address $shippingAddress;

    /**
     * @var bool
     */
    protected bool $shipIsResidential;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipAddressList;

    /**
     * @var string
     */
    protected string $fob;

    /**
     * @var string
     */
    protected string $shipDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var float
     */
    protected float $shippingCost;

    /**
     * @var float
     */
    protected float $handlingCost;

    /**
     * @var string
     */
    protected string $trackingNumbers;

    /**
     * @var string
     */
    protected string $linkedTrackingNumbers;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesGroup;

    /**
     * @var float
     */
    protected float $subTotal;

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
     * @var bool
     */
    protected bool $syncSalesTeams;

    /**
     * @var float
     */
    protected float $discountTotal;

    /**
     * @var float
     */
    protected float $taxTotal;

    /**
     * @var float
     */
    protected float $altShippingCost;

    /**
     * @var float
     */
    protected float $altHandlingCost;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var RecordRef
     */
    protected RecordRef $job;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var float
     */
    protected float $giftCertApplied;

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
     * @var CustomSaleShipGroupList
     */
    protected CustomSaleShipGroupList $shipGroupList;

    /**
     * @var bool
     */
    protected bool $overrideInstallments;

    /**
     * @var InstallmentList
     */
    protected InstallmentList $installmentList;

    /**
     * @var CustomSalePartnersList
     */
    protected CustomSalePartnersList $partnersList;

    /**
     * @var PromotionsList
     */
    protected PromotionsList $promotionsList;

    /**
     * @var CustomSaleItemList
     */
    protected CustomSaleItemList $itemList;

    /**
     * @var GiftCertRedemptionList
     */
    protected GiftCertRedemptionList $giftCertRedemptionList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CustomSaleSalesTeamList
     */
    protected CustomSaleSalesTeamList $salesTeamList;

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
        "entity" => "RecordRef",
        "billingAccount" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "createdFrom" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "terms" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "currency" => "RecordRef",
        "dueDate" => "dateTime",
        "discountDate" => "dateTime",
        "discountAmount" => "float",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "leadSource" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "salesEffectiveDate" => "dateTime",
        "excludeCommission" => "boolean",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "account" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isMultiShipTo" => "boolean",
        "isTaxable" => "boolean",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "messageSel" => "RecordRef",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "subTotal" => "float",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "syncSalesTeams" => "boolean",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "status" => "string",
        "job" => "RecordRef",
        "email" => "string",
        "giftCertApplied" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "shipGroupList" => "CustomSaleShipGroupList",
        "overrideInstallments" => "boolean",
        "installmentList" => "InstallmentList",
        "partnersList" => "CustomSalePartnersList",
        "promotionsList" => "PromotionsList",
        "itemList" => "CustomSaleItemList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "CustomSaleSalesTeamList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CustomSale
     */
    public function setCreatedDate(string $createdDate): CustomSale
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
     * @return CustomSale
     */
    public function setLastModifiedDate(string $lastModifiedDate): CustomSale
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
     * @return CustomSale
     */
    public function setTranType(RecordRef $tranType): CustomSale
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
     * @return CustomSale
     */
    public function setNexus(RecordRef $nexus): CustomSale
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
     * @return CustomSale
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): CustomSale
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
     * @return CustomSale
     */
    public function setTaxRegOverride(bool $taxRegOverride): CustomSale
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
     * @return CustomSale
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): CustomSale
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
     * @return CustomSale
     */
    public function setCustomForm(RecordRef $customForm): CustomSale
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
     * @param RecordRef $entity
     * @return CustomSale
     */
    public function setEntity(RecordRef $entity): CustomSale
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
     * @param RecordRef $billingAccount
     * @return CustomSale
     */
    public function setBillingAccount(RecordRef $billingAccount): CustomSale
    {
        $this->billingAccount = $billingAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingAccount(): RecordRef
    {
        return $this->billingAccount;
    }

    /**
     * @param string $tranDate
     * @return CustomSale
     */
    public function setTranDate(string $tranDate): CustomSale
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
     * @return CustomSale
     */
    public function setTranId(string $tranId): CustomSale
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
     * @return CustomSale
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): CustomSale
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
     * @param string $source
     * @return CustomSale
     */
    public function setSource(string $source): CustomSale
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
     * @param RecordRef $createdFrom
     * @return CustomSale
     */
    public function setCreatedFrom(RecordRef $createdFrom): CustomSale
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
     * @return CustomSale
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CustomSale
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
     * @param RecordRef $opportunity
     * @return CustomSale
     */
    public function setOpportunity(RecordRef $opportunity): CustomSale
    {
        $this->opportunity = $opportunity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOpportunity(): RecordRef
    {
        return $this->opportunity;
    }

    /**
     * @param RecordRef $department
     * @return CustomSale
     */
    public function setDepartment(RecordRef $department): CustomSale
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
     * @return CustomSale
     */
    public function setClass(RecordRef $class): CustomSale
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
     * @param RecordRef $terms
     * @return CustomSale
     */
    public function setTerms(RecordRef $terms): CustomSale
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
     * @param RecordRef $location
     * @return CustomSale
     */
    public function setLocation(RecordRef $location): CustomSale
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
     * @return CustomSale
     */
    public function setSubsidiary(RecordRef $subsidiary): CustomSale
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
     * @param RecordRef $currency
     * @return CustomSale
     */
    public function setCurrency(RecordRef $currency): CustomSale
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
     * @param string $dueDate
     * @return CustomSale
     */
    public function setDueDate(string $dueDate): CustomSale
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
     * @return CustomSale
     */
    public function setDiscountDate(string $discountDate): CustomSale
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
     * @param float $discountAmount
     * @return CustomSale
     */
    public function setDiscountAmount(float $discountAmount): CustomSale
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
     * @param RecordRef $salesRep
     * @return CustomSale
     */
    public function setSalesRep(RecordRef $salesRep): CustomSale
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
     * @return CustomSale
     */
    public function setPartner(RecordRef $partner): CustomSale
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
     * @param RecordRef $leadSource
     * @return CustomSale
     */
    public function setLeadSource(RecordRef $leadSource): CustomSale
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
     * @param string $startDate
     * @return CustomSale
     */
    public function setStartDate(string $startDate): CustomSale
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return CustomSale
     */
    public function setEndDate(string $endDate): CustomSale
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $otherRefNum
     * @return CustomSale
     */
    public function setOtherRefNum(string $otherRefNum): CustomSale
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
     * @return CustomSale
     */
    public function setMemo(string $memo): CustomSale
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
     * @return CustomSale
     */
    public function setTranStatus(RecordRef $tranStatus): CustomSale
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
     * @param string $salesEffectiveDate
     * @return CustomSale
     */
    public function setSalesEffectiveDate(string $salesEffectiveDate): CustomSale
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
     * @param bool $excludeCommission
     * @return CustomSale
     */
    public function setExcludeCommission(bool $excludeCommission): CustomSale
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
     * @param float $totalCostEstimate
     * @return CustomSale
     */
    public function setTotalCostEstimate(float $totalCostEstimate): CustomSale
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
     * @return CustomSale
     */
    public function setEstGrossProfit(float $estGrossProfit): CustomSale
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
     * @return CustomSale
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): CustomSale
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
     * @param RecordRef $revRecSchedule
     * @return CustomSale
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CustomSale
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
     * @param string $revRecStartDate
     * @return CustomSale
     */
    public function setRevRecStartDate(string $revRecStartDate): CustomSale
    {
        $this->revRecStartDate = $revRecStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevRecStartDate(): string
    {
        return $this->revRecStartDate;
    }

    /**
     * @param string $revRecEndDate
     * @return CustomSale
     */
    public function setRevRecEndDate(string $revRecEndDate): CustomSale
    {
        $this->revRecEndDate = $revRecEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevRecEndDate(): string
    {
        return $this->revRecEndDate;
    }

    /**
     * @param RecordRef $account
     * @return CustomSale
     */
    public function setAccount(RecordRef $account): CustomSale
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
     * @return CustomSale
     */
    public function setExchangeRate(float $exchangeRate): CustomSale
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
     * @param string $currencyName
     * @return CustomSale
     */
    public function setCurrencyName(string $currencyName): CustomSale
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
     * @return CustomSale
     */
    public function setPromoCode(RecordRef $promoCode): CustomSale
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
     * @param RecordRef $discountItem
     * @return CustomSale
     */
    public function setDiscountItem(RecordRef $discountItem): CustomSale
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
     * @param string $discountRate
     * @return CustomSale
     */
    public function setDiscountRate(string $discountRate): CustomSale
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
     * @param bool $isMultiShipTo
     * @return CustomSale
     */
    public function setIsMultiShipTo(bool $isMultiShipTo): CustomSale
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
     * @param bool $isTaxable
     * @return CustomSale
     */
    public function setIsTaxable(bool $isTaxable): CustomSale
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
     * @param bool $toBePrinted
     * @return CustomSale
     */
    public function setToBePrinted(bool $toBePrinted): CustomSale
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
     * @return CustomSale
     */
    public function setToBeEmailed(bool $toBeEmailed): CustomSale
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
     * @param bool $toBeFaxed
     * @return CustomSale
     */
    public function setToBeFaxed(bool $toBeFaxed): CustomSale
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
     * @return CustomSale
     */
    public function setFax(string $fax): CustomSale
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
     * @return CustomSale
     */
    public function setMessageSel(RecordRef $messageSel): CustomSale
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
     * @return CustomSale
     */
    public function setMessage(string $message): CustomSale
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
     * @return CustomSale
     */
    public function setBillingAddress(Address $billingAddress): CustomSale
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
     * @return CustomSale
     */
    public function setBillAddressList(RecordRef $billAddressList): CustomSale
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
     * @param Address $shippingAddress
     * @return CustomSale
     */
    public function setShippingAddress(Address $shippingAddress): CustomSale
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param bool $shipIsResidential
     * @return CustomSale
     */
    public function setShipIsResidential(bool $shipIsResidential): CustomSale
    {
        $this->shipIsResidential = $shipIsResidential;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipIsResidential(): bool
    {
        return $this->shipIsResidential;
    }

    /**
     * @param RecordRef $shipAddressList
     * @return CustomSale
     */
    public function setShipAddressList(RecordRef $shipAddressList): CustomSale
    {
        $this->shipAddressList = $shipAddressList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddressList(): RecordRef
    {
        return $this->shipAddressList;
    }

    /**
     * @param string $fob
     * @return CustomSale
     */
    public function setFob(string $fob): CustomSale
    {
        $this->fob = $fob;
        return $this;
    }

    /**
     * @return string
     */
    public function getFob(): string
    {
        return $this->fob;
    }

    /**
     * @param string $shipDate
     * @return CustomSale
     */
    public function setShipDate(string $shipDate): CustomSale
    {
        $this->shipDate = $shipDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipDate(): string
    {
        return $this->shipDate;
    }

    /**
     * @param RecordRef $shipMethod
     * @return CustomSale
     */
    public function setShipMethod(RecordRef $shipMethod): CustomSale
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
     * @return CustomSale
     */
    public function setShippingCost(float $shippingCost): CustomSale
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
     * @param float $handlingCost
     * @return CustomSale
     */
    public function setHandlingCost(float $handlingCost): CustomSale
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
     * @param string $trackingNumbers
     * @return CustomSale
     */
    public function setTrackingNumbers(string $trackingNumbers): CustomSale
    {
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumbers(): string
    {
        return $this->trackingNumbers;
    }

    /**
     * @param string $linkedTrackingNumbers
     * @return CustomSale
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): CustomSale
    {
        $this->linkedTrackingNumbers = $linkedTrackingNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedTrackingNumbers(): string
    {
        return $this->linkedTrackingNumbers;
    }

    /**
     * @param RecordRef $salesGroup
     * @return CustomSale
     */
    public function setSalesGroup(RecordRef $salesGroup): CustomSale
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
     * @param float $subTotal
     * @return CustomSale
     */
    public function setSubTotal(float $subTotal): CustomSale
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
     * @param RevenueStatus $revenueStatus
     * @return CustomSale
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus): CustomSale
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
     * @return CustomSale
     */
    public function setRecognizedRevenue(float $recognizedRevenue): CustomSale
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
     * @return CustomSale
     */
    public function setDeferredRevenue(float $deferredRevenue): CustomSale
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
     * @return CustomSale
     */
    public function setRevRecOnRevCommitment(bool $revRecOnRevCommitment): CustomSale
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
     * @param bool $syncSalesTeams
     * @return CustomSale
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): CustomSale
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
     * @param float $discountTotal
     * @return CustomSale
     */
    public function setDiscountTotal(float $discountTotal): CustomSale
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
     * @param float $taxTotal
     * @return CustomSale
     */
    public function setTaxTotal(float $taxTotal): CustomSale
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
     * @return CustomSale
     */
    public function setAltShippingCost(float $altShippingCost): CustomSale
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
     * @return CustomSale
     */
    public function setAltHandlingCost(float $altHandlingCost): CustomSale
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
     * @param float $total
     * @return CustomSale
     */
    public function setTotal(float $total): CustomSale
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
     * @param string $status
     * @return CustomSale
     */
    public function setStatus(string $status): CustomSale
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
     * @param RecordRef $job
     * @return CustomSale
     */
    public function setJob(RecordRef $job): CustomSale
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
     * @param string $email
     * @return CustomSale
     */
    public function setEmail(string $email): CustomSale
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
     * @param float $giftCertApplied
     * @return CustomSale
     */
    public function setGiftCertApplied(float $giftCertApplied): CustomSale
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
     * @param bool $tranIsVsoeBundle
     * @return CustomSale
     */
    public function setTranIsVsoeBundle(bool $tranIsVsoeBundle): CustomSale
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
     * @return CustomSale
     */
    public function setVsoeAutoCalc(bool $vsoeAutoCalc): CustomSale
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
     * @return CustomSale
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): CustomSale
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
     * @param CustomSaleShipGroupList $shipGroupList
     * @return CustomSale
     */
    public function setShipGroupList(CustomSaleShipGroupList $shipGroupList): CustomSale
    {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * @return CustomSaleShipGroupList
     */
    public function getShipGroupList(): CustomSaleShipGroupList
    {
        return $this->shipGroupList;
    }

    /**
     * @param bool $overrideInstallments
     * @return CustomSale
     */
    public function setOverrideInstallments(bool $overrideInstallments): CustomSale
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
     * @return CustomSale
     */
    public function setInstallmentList(InstallmentList $installmentList): CustomSale
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
     * @param CustomSalePartnersList $partnersList
     * @return CustomSale
     */
    public function setPartnersList(CustomSalePartnersList $partnersList): CustomSale
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return CustomSalePartnersList
     */
    public function getPartnersList(): CustomSalePartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param PromotionsList $promotionsList
     * @return CustomSale
     */
    public function setPromotionsList(PromotionsList $promotionsList): CustomSale
    {
        $this->promotionsList = $promotionsList;
        return $this;
    }

    /**
     * @return PromotionsList
     */
    public function getPromotionsList(): PromotionsList
    {
        return $this->promotionsList;
    }

    /**
     * @param CustomSaleItemList $itemList
     * @return CustomSale
     */
    public function setItemList(CustomSaleItemList $itemList): CustomSale
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return CustomSaleItemList
     */
    public function getItemList(): CustomSaleItemList
    {
        return $this->itemList;
    }

    /**
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return CustomSale
     */
    public function setGiftCertRedemptionList(GiftCertRedemptionList $giftCertRedemptionList): CustomSale
    {
        $this->giftCertRedemptionList = $giftCertRedemptionList;
        return $this;
    }

    /**
     * @return GiftCertRedemptionList
     */
    public function getGiftCertRedemptionList(): GiftCertRedemptionList
    {
        return $this->giftCertRedemptionList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CustomSale
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CustomSale
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
     * @param CustomSaleSalesTeamList $salesTeamList
     * @return CustomSale
     */
    public function setSalesTeamList(CustomSaleSalesTeamList $salesTeamList): CustomSale
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return CustomSaleSalesTeamList
     */
    public function getSalesTeamList(): CustomSaleSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return CustomSale
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): CustomSale
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
     * @return CustomSale
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomSale
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
     * @return CustomSale
     */
    public function setInternalId(string $internalId): CustomSale
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
     * @return CustomSale
     */
    public function setExternalId(string $externalId): CustomSale
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
