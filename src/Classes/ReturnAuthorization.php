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

class ReturnAuthorization extends Record {
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
     * @var string
     */
    protected string $source;

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
     * @var RecordRef
     */
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $partner;

    /**
     * @var string
     */
    protected string $otherRefNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $leadSource;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $drAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $fxAccount;

    /**
     * @var string
     */
    protected string $salesEffectiveDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

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
    protected string $revRecStartDate;

    /**
     * @var string
     */
    protected string $revRecEndDate;

    /**
     * @var bool
     */
    protected bool $excludeCommission;

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
    protected RecordRef $discountItem;

    /**
     * @var string
     */
    protected string $discountRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxItem;

    /**
     * @var float
     */
    protected float $taxRate;

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
    protected RecordRef $shipAddressList;

    /**
     * @var string
     */
    protected string $shipAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesGroup;

    /**
     * @var bool
     */
    protected bool $syncSalesTeams;

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
     * @var RevenueCommitStatus
     */
    protected RevenueCommitStatus $revCommitStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCard;

    /**
     * @var string
     */
    protected string $ccNumber;

    /**
     * @var float
     */
    protected float $altSalesTotal;

    /**
     * @var string
     */
    protected string $ccExpireDate;

    /**
     * @var string
     */
    protected string $ccName;

    /**
     * @var string
     */
    protected string $ccStreet;

    /**
     * @var string
     */
    protected string $ccZipCode;

    /**
     * @var bool
     */
    protected bool $ccApproved;

    /**
     * @var string
     */
    protected string $pnRefNum;

    /**
     * @var float
     */
    protected float $subTotal;

    /**
     * @var float
     */
    protected float $discountTotal;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCardProcessor;

    /**
     * @var string
     */
    protected string $payPalAuthId;

    /**
     * @var bool
     */
    protected bool $payPalProcess;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string
     */
    protected string $fax;

    /**
     * @var string
     */
    protected string $debitCardIssueNo;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var RecordRef
     */
    protected RecordRef $promoCode;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var float
     */
    protected float $taxTotal;

    protected $tax2Total;
    /**
     * @var string
     */
    protected string $validFrom;

    /**
     * @var ReturnAuthorizationOrderStatus
     */
    protected ReturnAuthorizationOrderStatus $orderStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesRep;

    /**
     * @var RecordRef
     */
    protected RecordRef $giftCert;

    /**
     * @var string
     */
    protected string $contribPct;

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
     * @var ReturnAuthorizationItemList
     */
    protected ReturnAuthorizationItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var ReturnAuthorizationSalesTeamList
     */
    protected ReturnAuthorizationSalesTeamList $salesTeamList;

    /**
     * @var ReturnAuthorizationPartnersList
     */
    protected ReturnAuthorizationPartnersList $partnersList;

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
        "source" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "job" => "RecordRef",
        "partner" => "RecordRef",
        "otherRefNum" => "string",
        "leadSource" => "RecordRef",
        "memo" => "string",
        "drAccount" => "RecordRef",
        "fxAccount" => "RecordRef",
        "salesEffectiveDate" => "dateTime",
        "createdFrom" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "excludeCommission" => "boolean",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "toBeFaxed" => "boolean",
        "messageSel" => "RecordRef",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shipAddressList" => "RecordRef",
        "shipAddress" => "string",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "revCommitStatus" => "RevenueCommitStatus",
        "paymentMethod" => "RecordRef",
        "creditCard" => "RecordRef",
        "ccNumber" => "string",
        "altSalesTotal" => "float",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "pnRefNum" => "string",
        "subTotal" => "float",
        "discountTotal" => "float",
        "total" => "float",
        "creditCardProcessor" => "RecordRef",
        "payPalAuthId" => "string",
        "payPalProcess" => "boolean",
        "email" => "string",
        "fax" => "string",
        "debitCardIssueNo" => "string",
        "isTaxable" => "boolean",
        "promoCode" => "RecordRef",
        "status" => "string",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "validFrom" => "dateTime",
        "orderStatus" => "ReturnAuthorizationOrderStatus",
        "salesRep" => "RecordRef",
        "giftCert" => "RecordRef",
        "contribPct" => "string",
        "giftCertTotal" => "float",
        "giftCertApplied" => "float",
        "giftCertAvailable" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "itemList" => "ReturnAuthorizationItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "ReturnAuthorizationSalesTeamList",
        "partnersList" => "ReturnAuthorizationPartnersList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return ReturnAuthorization
     */
    public function setCreatedDate(string $createdDate): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setLastModifiedDate(string $lastModifiedDate): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setNexus(RecordRef $nexus): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setTaxRegOverride(bool $taxRegOverride): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setCustomForm(RecordRef $customForm): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setCurrency(RecordRef $currency): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setEntity(RecordRef $entity): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setVatRegNum(string $vatRegNum): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setTranDate(string $tranDate): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setTranId(string $tranId): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setTaxPointDate(string $taxPointDate): ReturnAuthorization
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
     * @param string $source
     * @return ReturnAuthorization
     */
    public function setSource(string $source): ReturnAuthorization
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
     * @param RecordRef $department
     * @return ReturnAuthorization
     */
    public function setDepartment(RecordRef $department): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setClass(RecordRef $class): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setLocation(RecordRef $location): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setSubsidiary(RecordRef $subsidiary): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setIntercoTransaction(RecordRef $intercoTransaction): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setIntercoStatus(IntercoStatus $intercoStatus): ReturnAuthorization
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
     * @param RecordRef $job
     * @return ReturnAuthorization
     */
    public function setJob(RecordRef $job): ReturnAuthorization
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
     * @param RecordRef $partner
     * @return ReturnAuthorization
     */
    public function setPartner(RecordRef $partner): ReturnAuthorization
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
     * @param string $otherRefNum
     * @return ReturnAuthorization
     */
    public function setOtherRefNum(string $otherRefNum): ReturnAuthorization
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
     * @param RecordRef $leadSource
     * @return ReturnAuthorization
     */
    public function setLeadSource(RecordRef $leadSource): ReturnAuthorization
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
     * @param string $memo
     * @return ReturnAuthorization
     */
    public function setMemo(string $memo): ReturnAuthorization
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
     * @param RecordRef $drAccount
     * @return ReturnAuthorization
     */
    public function setDrAccount(RecordRef $drAccount): ReturnAuthorization
    {
        $this->drAccount = $drAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDrAccount(): RecordRef
    {
        return $this->drAccount;
    }

    /**
     * @param RecordRef $fxAccount
     * @return ReturnAuthorization
     */
    public function setFxAccount(RecordRef $fxAccount): ReturnAuthorization
    {
        $this->fxAccount = $fxAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFxAccount(): RecordRef
    {
        return $this->fxAccount;
    }

    /**
     * @param string $salesEffectiveDate
     * @return ReturnAuthorization
     */
    public function setSalesEffectiveDate(string $salesEffectiveDate): ReturnAuthorization
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
     * @param RecordRef $createdFrom
     * @return ReturnAuthorization
     */
    public function setCreatedFrom(RecordRef $createdFrom): ReturnAuthorization
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
     * @param RecordRef $revRecSchedule
     * @return ReturnAuthorization
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): ReturnAuthorization
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
     * @param float $totalCostEstimate
     * @return ReturnAuthorization
     */
    public function setTotalCostEstimate(float $totalCostEstimate): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setEstGrossProfit(float $estGrossProfit): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): ReturnAuthorization
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
     * @param string $revRecStartDate
     * @return ReturnAuthorization
     */
    public function setRevRecStartDate(string $revRecStartDate): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setRevRecEndDate(string $revRecEndDate): ReturnAuthorization
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
     * @param bool $excludeCommission
     * @return ReturnAuthorization
     */
    public function setExcludeCommission(bool $excludeCommission): ReturnAuthorization
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
     * @param float $exchangeRate
     * @return ReturnAuthorization
     */
    public function setExchangeRate(float $exchangeRate): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setCurrencyName(string $currencyName): ReturnAuthorization
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
     * @param RecordRef $discountItem
     * @return ReturnAuthorization
     */
    public function setDiscountItem(RecordRef $discountItem): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setDiscountRate(string $discountRate): ReturnAuthorization
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
     * @param RecordRef $taxItem
     * @return ReturnAuthorization
     */
    public function setTaxItem(RecordRef $taxItem): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setTaxRate(float $taxRate): ReturnAuthorization
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
     * @param bool $toBePrinted
     * @return ReturnAuthorization
     */
    public function setToBePrinted(bool $toBePrinted): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setToBeEmailed(bool $toBeEmailed): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setToBeFaxed(bool $toBeFaxed): ReturnAuthorization
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
     * @param RecordRef $messageSel
     * @return ReturnAuthorization
     */
    public function setMessageSel(RecordRef $messageSel): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setMessage(string $message): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setBillingAddress(Address $billingAddress): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setBillAddressList(RecordRef $billAddressList): ReturnAuthorization
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
     * @param RecordRef $shipAddressList
     * @return ReturnAuthorization
     */
    public function setShipAddressList(RecordRef $shipAddressList): ReturnAuthorization
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
     * @param string $shipAddress
     * @return ReturnAuthorization
     */
    public function setShipAddress(string $shipAddress): ReturnAuthorization
    {
        $this->shipAddress = $shipAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipAddress(): string
    {
        return $this->shipAddress;
    }

    /**
     * @param RecordRef $salesGroup
     * @return ReturnAuthorization
     */
    public function setSalesGroup(RecordRef $salesGroup): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): ReturnAuthorization
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
     * @param RevenueStatus $revenueStatus
     * @return ReturnAuthorization
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setRecognizedRevenue(float $recognizedRevenue): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setDeferredRevenue(float $deferredRevenue): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setRevRecOnRevCommitment(bool $revRecOnRevCommitment): ReturnAuthorization
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
     * @param RevenueCommitStatus $revCommitStatus
     * @return ReturnAuthorization
     */
    public function setRevCommitStatus(RevenueCommitStatus $revCommitStatus): ReturnAuthorization
    {
        $this->revCommitStatus = $revCommitStatus;
        return $this;
    }

    /**
     * @return RevenueCommitStatus
     */
    public function getRevCommitStatus(): RevenueCommitStatus
    {
        return $this->revCommitStatus;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return ReturnAuthorization
     */
    public function setPaymentMethod(RecordRef $paymentMethod): ReturnAuthorization
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentMethod(): RecordRef
    {
        return $this->paymentMethod;
    }

    /**
     * @param RecordRef $creditCard
     * @return ReturnAuthorization
     */
    public function setCreditCard(RecordRef $creditCard): ReturnAuthorization
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCard(): RecordRef
    {
        return $this->creditCard;
    }

    /**
     * @param string $ccNumber
     * @return ReturnAuthorization
     */
    public function setCcNumber(string $ccNumber): ReturnAuthorization
    {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcNumber(): string
    {
        return $this->ccNumber;
    }

    /**
     * @param float $altSalesTotal
     * @return ReturnAuthorization
     */
    public function setAltSalesTotal(float $altSalesTotal): ReturnAuthorization
    {
        $this->altSalesTotal = $altSalesTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesTotal(): float
    {
        return $this->altSalesTotal;
    }

    /**
     * @param string $ccExpireDate
     * @return ReturnAuthorization
     */
    public function setCcExpireDate(string $ccExpireDate): ReturnAuthorization
    {
        $this->ccExpireDate = $ccExpireDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcExpireDate(): string
    {
        return $this->ccExpireDate;
    }

    /**
     * @param string $ccName
     * @return ReturnAuthorization
     */
    public function setCcName(string $ccName): ReturnAuthorization
    {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcName(): string
    {
        return $this->ccName;
    }

    /**
     * @param string $ccStreet
     * @return ReturnAuthorization
     */
    public function setCcStreet(string $ccStreet): ReturnAuthorization
    {
        $this->ccStreet = $ccStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcStreet(): string
    {
        return $this->ccStreet;
    }

    /**
     * @param string $ccZipCode
     * @return ReturnAuthorization
     */
    public function setCcZipCode(string $ccZipCode): ReturnAuthorization
    {
        $this->ccZipCode = $ccZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcZipCode(): string
    {
        return $this->ccZipCode;
    }

    /**
     * @param bool $ccApproved
     * @return ReturnAuthorization
     */
    public function setCcApproved(bool $ccApproved): ReturnAuthorization
    {
        $this->ccApproved = $ccApproved;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCcApproved(): bool
    {
        return $this->ccApproved;
    }

    /**
     * @param string $pnRefNum
     * @return ReturnAuthorization
     */
    public function setPnRefNum(string $pnRefNum): ReturnAuthorization
    {
        $this->pnRefNum = $pnRefNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getPnRefNum(): string
    {
        return $this->pnRefNum;
    }

    /**
     * @param float $subTotal
     * @return ReturnAuthorization
     */
    public function setSubTotal(float $subTotal): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setDiscountTotal(float $discountTotal): ReturnAuthorization
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
     * @param float $total
     * @return ReturnAuthorization
     */
    public function setTotal(float $total): ReturnAuthorization
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
     * @param RecordRef $creditCardProcessor
     * @return ReturnAuthorization
     */
    public function setCreditCardProcessor(RecordRef $creditCardProcessor): ReturnAuthorization
    {
        $this->creditCardProcessor = $creditCardProcessor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCardProcessor(): RecordRef
    {
        return $this->creditCardProcessor;
    }

    /**
     * @param string $payPalAuthId
     * @return ReturnAuthorization
     */
    public function setPayPalAuthId(string $payPalAuthId): ReturnAuthorization
    {
        $this->payPalAuthId = $payPalAuthId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayPalAuthId(): string
    {
        return $this->payPalAuthId;
    }

    /**
     * @param bool $payPalProcess
     * @return ReturnAuthorization
     */
    public function setPayPalProcess(bool $payPalProcess): ReturnAuthorization
    {
        $this->payPalProcess = $payPalProcess;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPayPalProcess(): bool
    {
        return $this->payPalProcess;
    }

    /**
     * @param string $email
     * @return ReturnAuthorization
     */
    public function setEmail(string $email): ReturnAuthorization
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
     * @param string $fax
     * @return ReturnAuthorization
     */
    public function setFax(string $fax): ReturnAuthorization
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
     * @param string $debitCardIssueNo
     * @return ReturnAuthorization
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): ReturnAuthorization
    {
        $this->debitCardIssueNo = $debitCardIssueNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebitCardIssueNo(): string
    {
        return $this->debitCardIssueNo;
    }

    /**
     * @param bool $isTaxable
     * @return ReturnAuthorization
     */
    public function setIsTaxable(bool $isTaxable): ReturnAuthorization
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
     * @param RecordRef $promoCode
     * @return ReturnAuthorization
     */
    public function setPromoCode(RecordRef $promoCode): ReturnAuthorization
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
     * @param string $status
     * @return ReturnAuthorization
     */
    public function setStatus(string $status): ReturnAuthorization
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
     * @param float $taxTotal
     * @return ReturnAuthorization
     */
    public function setTaxTotal(float $taxTotal): ReturnAuthorization
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
     * @param string $validFrom
     * @return ReturnAuthorization
     */
    public function setValidFrom(string $validFrom): ReturnAuthorization
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

    /**
     * @param ReturnAuthorizationOrderStatus $orderStatus
     * @return ReturnAuthorization
     */
    public function setOrderStatus(ReturnAuthorizationOrderStatus $orderStatus): ReturnAuthorization
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return ReturnAuthorizationOrderStatus
     */
    public function getOrderStatus(): ReturnAuthorizationOrderStatus
    {
        return $this->orderStatus;
    }

    /**
     * @param RecordRef $salesRep
     * @return ReturnAuthorization
     */
    public function setSalesRep(RecordRef $salesRep): ReturnAuthorization
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
     * @param RecordRef $giftCert
     * @return ReturnAuthorization
     */
    public function setGiftCert(RecordRef $giftCert): ReturnAuthorization
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
     * @param string $contribPct
     * @return ReturnAuthorization
     */
    public function setContribPct(string $contribPct): ReturnAuthorization
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
     * @param float $giftCertTotal
     * @return ReturnAuthorization
     */
    public function setGiftCertTotal(float $giftCertTotal): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setGiftCertApplied(float $giftCertApplied): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setGiftCertAvailable(float $giftCertAvailable): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setTranIsVsoeBundle(bool $tranIsVsoeBundle): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setVsoeAutoCalc(bool $vsoeAutoCalc): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): ReturnAuthorization
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
     * @param ReturnAuthorizationItemList $itemList
     * @return ReturnAuthorization
     */
    public function setItemList(ReturnAuthorizationItemList $itemList): ReturnAuthorization
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return ReturnAuthorizationItemList
     */
    public function getItemList(): ReturnAuthorizationItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return ReturnAuthorization
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): ReturnAuthorization
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
     * @param ReturnAuthorizationSalesTeamList $salesTeamList
     * @return ReturnAuthorization
     */
    public function setSalesTeamList(ReturnAuthorizationSalesTeamList $salesTeamList): ReturnAuthorization
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return ReturnAuthorizationSalesTeamList
     */
    public function getSalesTeamList(): ReturnAuthorizationSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param ReturnAuthorizationPartnersList $partnersList
     * @return ReturnAuthorization
     */
    public function setPartnersList(ReturnAuthorizationPartnersList $partnersList): ReturnAuthorization
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return ReturnAuthorizationPartnersList
     */
    public function getPartnersList(): ReturnAuthorizationPartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return ReturnAuthorization
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setInternalId(string $internalId): ReturnAuthorization
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
     * @return ReturnAuthorization
     */
    public function setExternalId(string $externalId): ReturnAuthorization
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
