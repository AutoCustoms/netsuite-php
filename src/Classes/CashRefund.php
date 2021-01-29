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

class CashRefund extends Record {
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
    protected RecordRef $leadSource;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

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
     * @var string
     */
    protected string $salesEffectiveDate;

    /**
     * @var bool
     */
    protected bool $refundCheck;

    protected $toPrint2;
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
    protected RecordRef $account;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

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
     * @var RecordRef
     */
    protected RecordRef $paymentOption;

    /**
     * @var string
     */
    protected string $inputAuthCode;

    /**
     * @var string
     */
    protected string $inputReferenceCode;

    /**
     * @var string
     */
    protected string $checkNumber;

    /**
     * @var string
     */
    protected string $paymentCardCsc;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentProcessingProfile;

    /**
     * @var CashRefundHandlingMode
     */
    protected CashRefundHandlingMode $handlingMode;

    /**
     * @var string
     */
    protected string $outputAuthCode;

    /**
     * @var string
     */
    protected string $outputReferenceCode;

    /**
     * @var CashRefundPaymentOperation
     */
    protected CashRefundPaymentOperation $paymentOperation;

    /**
     * @var string
     */
    protected string $dynamicDescriptor;

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
     * @var RecordRef
     */
    protected RecordRef $shippingTaxCode;

    protected $shippingTax1Rate;
    protected $shippingTax2Rate;
    /**
     * @var float
     */
    protected float $shippingCost;

    /**
     * @var RecordRef
     */
    protected RecordRef $handlingTaxCode;

    protected $handlingTax1Rate;
    protected $handlingTax2Rate;
    /**
     * @var float
     */
    protected float $handlingCost;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesGroup;

    /**
     * @var bool
     */
    protected bool $syncSalesTeams;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

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
     * @var RecordRef
     */
    protected RecordRef $creditCard;

    /**
     * @var bool
     */
    protected bool $chargeIt;

    /**
     * @var string
     */
    protected string $ccNumber;

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
     * @var RecordRef
     */
    protected RecordRef $creditCardProcessor;

    /**
     * @var string
     */
    protected string $debitCardIssueNo;

    /**
     * @var string
     */
    protected string $pnRefNum;

    /**
     * @var string
     */
    protected string $validFrom;

    /**
     * @var string
     */
    protected string $payPalTranId;

    /**
     * @var float
     */
    protected float $subTotal;

    /**
     * @var bool
     */
    protected bool $ccIsPurchaseCardBin;

    /**
     * @var float
     */
    protected float $discountTotal;

    /**
     * @var bool
     */
    protected bool $ccProcessAsPurchaseCard;

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
     * @var string
     */
    protected string $payPalStatus;

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
    protected string $payPalAuthId;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var RecordRef
     */
    protected RecordRef $job;

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
    protected bool $payPalProcess;

    /**
     * @var bool
     */
    protected bool $vsoeAutoCalc;

    /**
     * @var bool
     */
    protected bool $syncPartnerTeams;

    /**
     * @var CashRefundItemList
     */
    protected CashRefundItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CashRefundSalesTeamList
     */
    protected CashRefundSalesTeamList $salesTeamList;

    /**
     * @var CashRefundPartnersList
     */
    protected CashRefundPartnersList $partnersList;

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
        "entity" => "RecordRef",
        "vatRegNum" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "source" => "string",
        "createdFrom" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "leadSource" => "RecordRef",
        "subsidiary" => "RecordRef",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "contribPct" => "string",
        "otherRefNum" => "string",
        "memo" => "string",
        "salesEffectiveDate" => "dateTime",
        "refundCheck" => "boolean",
        "toPrint2" => "boolean",
        "excludeCommission" => "boolean",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "account" => "RecordRef",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "messageSel" => "RecordRef",
        "message" => "string",
        "paymentOption" => "RecordRef",
        "inputAuthCode" => "string",
        "inputReferenceCode" => "string",
        "checkNumber" => "string",
        "paymentCardCsc" => "string",
        "paymentProcessingProfile" => "RecordRef",
        "handlingMode" => "CashRefundHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CashRefundPaymentOperation",
        "dynamicDescriptor" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shipMethod" => "RecordRef",
        "shippingTaxCode" => "RecordRef",
        "shippingTax1Rate" => "float",
        "shippingTax2Rate" => "string",
        "shippingCost" => "float",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingTax2Rate" => "string",
        "handlingCost" => "float",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "paymentMethod" => "RecordRef",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "creditCard" => "RecordRef",
        "chargeIt" => "boolean",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "creditCardProcessor" => "RecordRef",
        "debitCardIssueNo" => "string",
        "pnRefNum" => "string",
        "validFrom" => "dateTime",
        "payPalTranId" => "string",
        "subTotal" => "float",
        "ccIsPurchaseCardBin" => "boolean",
        "discountTotal" => "float",
        "ccProcessAsPurchaseCard" => "boolean",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "altShippingCost" => "float",
        "payPalStatus" => "string",
        "altHandlingCost" => "float",
        "total" => "float",
        "payPalAuthId" => "string",
        "status" => "string",
        "job" => "RecordRef",
        "giftCert" => "RecordRef",
        "giftCertTotal" => "float",
        "giftCertApplied" => "float",
        "giftCertAvailable" => "float",
        "tranIsVsoeBundle" => "boolean",
        "payPalProcess" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "itemList" => "CashRefundItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "CashRefundSalesTeamList",
        "partnersList" => "CashRefundPartnersList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CashRefund
     */
    public function setCreatedDate(string $createdDate): CashRefund
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
     * @return CashRefund
     */
    public function setLastModifiedDate(string $lastModifiedDate): CashRefund
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
     * @return CashRefund
     */
    public function setNexus(RecordRef $nexus): CashRefund
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
     * @return CashRefund
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): CashRefund
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
     * @return CashRefund
     */
    public function setTaxRegOverride(bool $taxRegOverride): CashRefund
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
     * @return CashRefund
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): CashRefund
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
     * @return CashRefund
     */
    public function setCustomForm(RecordRef $customForm): CashRefund
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
     * @return CashRefund
     */
    public function setEntity(RecordRef $entity): CashRefund
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
     * @return CashRefund
     */
    public function setVatRegNum(string $vatRegNum): CashRefund
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
     * @return CashRefund
     */
    public function setTranDate(string $tranDate): CashRefund
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
     * @return CashRefund
     */
    public function setTranId(string $tranId): CashRefund
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
     * @return CashRefund
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): CashRefund
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
     * @return CashRefund
     */
    public function setTaxPointDate(string $taxPointDate): CashRefund
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
     * @return CashRefund
     */
    public function setSource(string $source): CashRefund
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
     * @return CashRefund
     */
    public function setCreatedFrom(RecordRef $createdFrom): CashRefund
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
     * @return CashRefund
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CashRefund
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
     * @return CashRefund
     */
    public function setDepartment(RecordRef $department): CashRefund
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
     * @return CashRefund
     */
    public function setClass(RecordRef $class): CashRefund
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
     * @return CashRefund
     */
    public function setLocation(RecordRef $location): CashRefund
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
     * @param RecordRef $leadSource
     * @return CashRefund
     */
    public function setLeadSource(RecordRef $leadSource): CashRefund
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
     * @param RecordRef $subsidiary
     * @return CashRefund
     */
    public function setSubsidiary(RecordRef $subsidiary): CashRefund
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
     * @param RecordRef $salesRep
     * @return CashRefund
     */
    public function setSalesRep(RecordRef $salesRep): CashRefund
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
     * @return CashRefund
     */
    public function setPartner(RecordRef $partner): CashRefund
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
     * @return CashRefund
     */
    public function setContribPct(string $contribPct): CashRefund
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
     * @return CashRefund
     */
    public function setOtherRefNum(string $otherRefNum): CashRefund
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
     * @return CashRefund
     */
    public function setMemo(string $memo): CashRefund
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
     * @param string $salesEffectiveDate
     * @return CashRefund
     */
    public function setSalesEffectiveDate(string $salesEffectiveDate): CashRefund
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
     * @param bool $refundCheck
     * @return CashRefund
     */
    public function setRefundCheck(bool $refundCheck): CashRefund
    {
        $this->refundCheck = $refundCheck;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRefundCheck(): bool
    {
        return $this->refundCheck;
    }

    /**
     * @param bool $excludeCommission
     * @return CashRefund
     */
    public function setExcludeCommission(bool $excludeCommission): CashRefund
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
     * @return CashRefund
     */
    public function setTotalCostEstimate(float $totalCostEstimate): CashRefund
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
     * @return CashRefund
     */
    public function setEstGrossProfit(float $estGrossProfit): CashRefund
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
     * @return CashRefund
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): CashRefund
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
     * @param RecordRef $account
     * @return CashRefund
     */
    public function setAccount(RecordRef $account): CashRefund
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
     * @param RecordRef $currency
     * @return CashRefund
     */
    public function setCurrency(RecordRef $currency): CashRefund
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
     * @param float $exchangeRate
     * @return CashRefund
     */
    public function setExchangeRate(float $exchangeRate): CashRefund
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
     * @return CashRefund
     */
    public function setCurrencyName(string $currencyName): CashRefund
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
     * @return CashRefund
     */
    public function setPromoCode(RecordRef $promoCode): CashRefund
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
     * @return CashRefund
     */
    public function setDiscountItem(RecordRef $discountItem): CashRefund
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
     * @return CashRefund
     */
    public function setDiscountRate(string $discountRate): CashRefund
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
     * @return CashRefund
     */
    public function setIsTaxable(bool $isTaxable): CashRefund
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
     * @return CashRefund
     */
    public function setTaxItem(RecordRef $taxItem): CashRefund
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
     * @return CashRefund
     */
    public function setTaxRate(float $taxRate): CashRefund
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
     * @return CashRefund
     */
    public function setToBePrinted(bool $toBePrinted): CashRefund
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
     * @return CashRefund
     */
    public function setToBeEmailed(bool $toBeEmailed): CashRefund
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
     * @return CashRefund
     */
    public function setEmail(string $email): CashRefund
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
     * @return CashRefund
     */
    public function setToBeFaxed(bool $toBeFaxed): CashRefund
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
     * @return CashRefund
     */
    public function setFax(string $fax): CashRefund
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
     * @return CashRefund
     */
    public function setMessageSel(RecordRef $messageSel): CashRefund
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
     * @return CashRefund
     */
    public function setMessage(string $message): CashRefund
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
     * @param RecordRef $paymentOption
     * @return CashRefund
     */
    public function setPaymentOption(RecordRef $paymentOption): CashRefund
    {
        $this->paymentOption = $paymentOption;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentOption(): RecordRef
    {
        return $this->paymentOption;
    }

    /**
     * @param string $inputAuthCode
     * @return CashRefund
     */
    public function setInputAuthCode(string $inputAuthCode): CashRefund
    {
        $this->inputAuthCode = $inputAuthCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputAuthCode(): string
    {
        return $this->inputAuthCode;
    }

    /**
     * @param string $inputReferenceCode
     * @return CashRefund
     */
    public function setInputReferenceCode(string $inputReferenceCode): CashRefund
    {
        $this->inputReferenceCode = $inputReferenceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputReferenceCode(): string
    {
        return $this->inputReferenceCode;
    }

    /**
     * @param string $checkNumber
     * @return CashRefund
     */
    public function setCheckNumber(string $checkNumber): CashRefund
    {
        $this->checkNumber = $checkNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber(): string
    {
        return $this->checkNumber;
    }

    /**
     * @param string $paymentCardCsc
     * @return CashRefund
     */
    public function setPaymentCardCsc(string $paymentCardCsc): CashRefund
    {
        $this->paymentCardCsc = $paymentCardCsc;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCardCsc(): string
    {
        return $this->paymentCardCsc;
    }

    /**
     * @param RecordRef $paymentProcessingProfile
     * @return CashRefund
     */
    public function setPaymentProcessingProfile(RecordRef $paymentProcessingProfile): CashRefund
    {
        $this->paymentProcessingProfile = $paymentProcessingProfile;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentProcessingProfile(): RecordRef
    {
        return $this->paymentProcessingProfile;
    }

    /**
     * @param CashRefundHandlingMode $handlingMode
     * @return CashRefund
     */
    public function setHandlingMode(CashRefundHandlingMode $handlingMode): CashRefund
    {
        $this->handlingMode = $handlingMode;
        return $this;
    }

    /**
     * @return CashRefundHandlingMode
     */
    public function getHandlingMode(): CashRefundHandlingMode
    {
        return $this->handlingMode;
    }

    /**
     * @param string $outputAuthCode
     * @return CashRefund
     */
    public function setOutputAuthCode(string $outputAuthCode): CashRefund
    {
        $this->outputAuthCode = $outputAuthCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutputAuthCode(): string
    {
        return $this->outputAuthCode;
    }

    /**
     * @param string $outputReferenceCode
     * @return CashRefund
     */
    public function setOutputReferenceCode(string $outputReferenceCode): CashRefund
    {
        $this->outputReferenceCode = $outputReferenceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutputReferenceCode(): string
    {
        return $this->outputReferenceCode;
    }

    /**
     * @param CashRefundPaymentOperation $paymentOperation
     * @return CashRefund
     */
    public function setPaymentOperation(CashRefundPaymentOperation $paymentOperation): CashRefund
    {
        $this->paymentOperation = $paymentOperation;
        return $this;
    }

    /**
     * @return CashRefundPaymentOperation
     */
    public function getPaymentOperation(): CashRefundPaymentOperation
    {
        return $this->paymentOperation;
    }

    /**
     * @param string $dynamicDescriptor
     * @return CashRefund
     */
    public function setDynamicDescriptor(string $dynamicDescriptor): CashRefund
    {
        $this->dynamicDescriptor = $dynamicDescriptor;
        return $this;
    }

    /**
     * @return string
     */
    public function getDynamicDescriptor(): string
    {
        return $this->dynamicDescriptor;
    }

    /**
     * @param Address $billingAddress
     * @return CashRefund
     */
    public function setBillingAddress(Address $billingAddress): CashRefund
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
     * @return CashRefund
     */
    public function setBillAddressList(RecordRef $billAddressList): CashRefund
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
     * @return CashRefund
     */
    public function setShipMethod(RecordRef $shipMethod): CashRefund
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
     * @param RecordRef $shippingTaxCode
     * @return CashRefund
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): CashRefund
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
     * @param float $shippingCost
     * @return CashRefund
     */
    public function setShippingCost(float $shippingCost): CashRefund
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
     * @param RecordRef $handlingTaxCode
     * @return CashRefund
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): CashRefund
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
     * @return CashRefund
     */
    public function setHandlingCost(float $handlingCost): CashRefund
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
     * @param RecordRef $salesGroup
     * @return CashRefund
     */
    public function setSalesGroup(RecordRef $salesGroup): CashRefund
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
     * @return CashRefund
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): CashRefund
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
     * @param RecordRef $paymentMethod
     * @return CashRefund
     */
    public function setPaymentMethod(RecordRef $paymentMethod): CashRefund
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
     * @param RevenueStatus $revenueStatus
     * @return CashRefund
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus): CashRefund
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
     * @return CashRefund
     */
    public function setRecognizedRevenue(float $recognizedRevenue): CashRefund
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
     * @return CashRefund
     */
    public function setDeferredRevenue(float $deferredRevenue): CashRefund
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
     * @return CashRefund
     */
    public function setRevRecOnRevCommitment(bool $revRecOnRevCommitment): CashRefund
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
     * @param RecordRef $creditCard
     * @return CashRefund
     */
    public function setCreditCard(RecordRef $creditCard): CashRefund
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
     * @param bool $chargeIt
     * @return CashRefund
     */
    public function setChargeIt(bool $chargeIt): CashRefund
    {
        $this->chargeIt = $chargeIt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getChargeIt(): bool
    {
        return $this->chargeIt;
    }

    /**
     * @param string $ccNumber
     * @return CashRefund
     */
    public function setCcNumber(string $ccNumber): CashRefund
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
     * @param string $ccExpireDate
     * @return CashRefund
     */
    public function setCcExpireDate(string $ccExpireDate): CashRefund
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
     * @return CashRefund
     */
    public function setCcName(string $ccName): CashRefund
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
     * @return CashRefund
     */
    public function setCcStreet(string $ccStreet): CashRefund
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
     * @return CashRefund
     */
    public function setCcZipCode(string $ccZipCode): CashRefund
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
     * @return CashRefund
     */
    public function setCcApproved(bool $ccApproved): CashRefund
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
     * @param RecordRef $creditCardProcessor
     * @return CashRefund
     */
    public function setCreditCardProcessor(RecordRef $creditCardProcessor): CashRefund
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
     * @param string $debitCardIssueNo
     * @return CashRefund
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): CashRefund
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
     * @param string $pnRefNum
     * @return CashRefund
     */
    public function setPnRefNum(string $pnRefNum): CashRefund
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
     * @param string $validFrom
     * @return CashRefund
     */
    public function setValidFrom(string $validFrom): CashRefund
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
     * @param string $payPalTranId
     * @return CashRefund
     */
    public function setPayPalTranId(string $payPalTranId): CashRefund
    {
        $this->payPalTranId = $payPalTranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayPalTranId(): string
    {
        return $this->payPalTranId;
    }

    /**
     * @param float $subTotal
     * @return CashRefund
     */
    public function setSubTotal(float $subTotal): CashRefund
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
     * @param bool $ccIsPurchaseCardBin
     * @return CashRefund
     */
    public function setCcIsPurchaseCardBin(bool $ccIsPurchaseCardBin): CashRefund
    {
        $this->ccIsPurchaseCardBin = $ccIsPurchaseCardBin;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCcIsPurchaseCardBin(): bool
    {
        return $this->ccIsPurchaseCardBin;
    }

    /**
     * @param float $discountTotal
     * @return CashRefund
     */
    public function setDiscountTotal(float $discountTotal): CashRefund
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
     * @param bool $ccProcessAsPurchaseCard
     * @return CashRefund
     */
    public function setCcProcessAsPurchaseCard(bool $ccProcessAsPurchaseCard): CashRefund
    {
        $this->ccProcessAsPurchaseCard = $ccProcessAsPurchaseCard;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCcProcessAsPurchaseCard(): bool
    {
        return $this->ccProcessAsPurchaseCard;
    }

    /**
     * @param float $taxTotal
     * @return CashRefund
     */
    public function setTaxTotal(float $taxTotal): CashRefund
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
     * @return CashRefund
     */
    public function setAltShippingCost(float $altShippingCost): CashRefund
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
     * @param string $payPalStatus
     * @return CashRefund
     */
    public function setPayPalStatus(string $payPalStatus): CashRefund
    {
        $this->payPalStatus = $payPalStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayPalStatus(): string
    {
        return $this->payPalStatus;
    }

    /**
     * @param float $altHandlingCost
     * @return CashRefund
     */
    public function setAltHandlingCost(float $altHandlingCost): CashRefund
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
     * @return CashRefund
     */
    public function setTotal(float $total): CashRefund
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
     * @param string $payPalAuthId
     * @return CashRefund
     */
    public function setPayPalAuthId(string $payPalAuthId): CashRefund
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
     * @param string $status
     * @return CashRefund
     */
    public function setStatus(string $status): CashRefund
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
     * @return CashRefund
     */
    public function setJob(RecordRef $job): CashRefund
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
     * @param RecordRef $giftCert
     * @return CashRefund
     */
    public function setGiftCert(RecordRef $giftCert): CashRefund
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
     * @return CashRefund
     */
    public function setGiftCertTotal(float $giftCertTotal): CashRefund
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
     * @return CashRefund
     */
    public function setGiftCertApplied(float $giftCertApplied): CashRefund
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
     * @return CashRefund
     */
    public function setGiftCertAvailable(float $giftCertAvailable): CashRefund
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
     * @return CashRefund
     */
    public function setTranIsVsoeBundle(bool $tranIsVsoeBundle): CashRefund
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
     * @param bool $payPalProcess
     * @return CashRefund
     */
    public function setPayPalProcess(bool $payPalProcess): CashRefund
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
     * @param bool $vsoeAutoCalc
     * @return CashRefund
     */
    public function setVsoeAutoCalc(bool $vsoeAutoCalc): CashRefund
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
     * @return CashRefund
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): CashRefund
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
     * @param CashRefundItemList $itemList
     * @return CashRefund
     */
    public function setItemList(CashRefundItemList $itemList): CashRefund
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return CashRefundItemList
     */
    public function getItemList(): CashRefundItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CashRefund
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CashRefund
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
     * @param CashRefundSalesTeamList $salesTeamList
     * @return CashRefund
     */
    public function setSalesTeamList(CashRefundSalesTeamList $salesTeamList): CashRefund
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return CashRefundSalesTeamList
     */
    public function getSalesTeamList(): CashRefundSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param CashRefundPartnersList $partnersList
     * @return CashRefund
     */
    public function setPartnersList(CashRefundPartnersList $partnersList): CashRefund
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return CashRefundPartnersList
     */
    public function getPartnersList(): CashRefundPartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return CashRefund
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): CashRefund
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
     * @return CashRefund
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CashRefund
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
     * @return CashRefund
     */
    public function setInternalId(string $internalId): CashRefund
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
     * @return CashRefund
     */
    public function setExternalId(string $externalId): CashRefund
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
