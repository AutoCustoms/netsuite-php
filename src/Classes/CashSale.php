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

class CashSale extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $billingAccount;

    /**
     * @var bool
     */
    protected bool $recurringBill;

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
    protected RecordRef $postingPeriod;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

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
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesRep;

    /**
     * @var string
     */
    protected string $contribPct;

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
     * @var string
     */
    protected string $salesEffectiveDate;

    /**
     * @var bool
     */
    protected bool $excludeCommission;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

    /**
     * @var bool
     */
    protected bool $undepFunds;

    /**
     * @var bool
     */
    protected bool $canHaveStackable;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var string
     */
    protected string $revRecStartDate;

    /**
     * @var string
     */
    protected string $revRecEndDate;

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
     * @var CashSaleHandlingMode
     */
    protected CashSaleHandlingMode $handlingMode;

    /**
     * @var string
     */
    protected string $outputAuthCode;

    /**
     * @var string
     */
    protected string $outputReferenceCode;

    /**
     * @var CashSalePaymentOperation
     */
    protected CashSalePaymentOperation $paymentOperation;

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

    protected $shippingTax1Rate;
    protected $shippingTax2Rate;
    /**
     * @var RecordRef
     */
    protected RecordRef $shippingTaxCode;

    /**
     * @var RecordRef
     */
    protected RecordRef $handlingTaxCode;

    protected $handlingTax1Rate;
    /**
     * @var float
     */
    protected float $handlingCost;

    protected $handlingTax2Rate;
    /**
     * @var string
     */
    protected string $linkedTrackingNumbers;

    /**
     * @var string
     */
    protected string $trackingNumbers;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesGroup;

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
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var string
     */
    protected string $payPalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCard;

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
     * @var RecordRef
     */
    protected RecordRef $creditCardProcessor;

    /**
     * @var bool
     */
    protected bool $ccApproved;

    /**
     * @var string
     */
    protected string $authCode;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccAvsStreetMatch;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccAvsZipMatch;

    /**
     * @var bool
     */
    protected bool $isRecurringPayment;

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
     * @var bool
     */
    protected bool $ignoreAvs;

    /**
     * @var bool
     */
    protected bool $ccProcessAsPurchaseCard;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemCostDiscount;

    /**
     * @var string
     */
    protected string $itemCostDiscRate;

    /**
     * @var float
     */
    protected float $itemCostDiscAmount;

    protected $itemCostTaxRate1;
    protected $itemCostTaxRate2;
    /**
     * @var bool
     */
    protected bool $itemCostDiscTaxable;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemCostTaxCode;

    protected $itemCostDiscTax1Amt;
    /**
     * @var bool
     */
    protected bool $itemCostDiscPrint;

    /**
     * @var RecordRef
     */
    protected RecordRef $expCostDiscount;

    /**
     * @var string
     */
    protected string $expCostDiscRate;

    /**
     * @var float
     */
    protected float $expCostDiscAmount;

    /**
     * @var bool
     */
    protected bool $expCostDiscTaxable;

    /**
     * @var bool
     */
    protected bool $expCostDiscprint;

    protected $expCostTaxRate1;
    /**
     * @var RecordRef
     */
    protected RecordRef $timeDiscount;

    /**
     * @var RecordRef
     */
    protected RecordRef $expCostTaxCode;

    /**
     * @var string
     */
    protected string $timeDiscRate;

    protected $expCostTaxRate2;
    protected $expCostDiscTax1Amt;
    /**
     * @var float
     */
    protected float $timeDiscAmount;

    /**
     * @var bool
     */
    protected bool $timeDiscTaxable;

    /**
     * @var bool
     */
    protected bool $timeDiscPrint;

    /**
     * @var float
     */
    protected float $discountTotal;

    /**
     * @var float
     */
    protected float $taxTotal;

    protected $timeTaxRate1;
    /**
     * @var float
     */
    protected float $altShippingCost;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeTaxCode;

    /**
     * @var float
     */
    protected float $altHandlingCost;

    /**
     * @var float
     */
    protected float $total;

    protected $timeDiscTax1Amt;
    /**
     * @var string
     */
    protected string $ccSecurityCode;

    protected $timeTaxRate2;
    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccSecurityCodeMatch;

    /**
     * @var bool
     */
    protected bool $chargeIt;

    /**
     * @var string
     */
    protected string $debitCardIssueNo;

    /**
     * @var string
     */
    protected string $threeDStatusCode;

    /**
     * @var string
     */
    protected string $pnRefNum;

    /**
     * @var string
     */
    protected string $paypalAuthId;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var bool
     */
    protected bool $paypalProcess;

    /**
     * @var RecordRef
     */
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingSchedule;

    /**
     * @var string
     */
    protected string $email;

    protected $tax2Total;
    /**
     * @var string
     */
    protected string $validFrom;

    /**
     * @var string
     */
    protected string $vatRegNum;

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
     * @var CashSaleSalesTeamList
     */
    protected CashSaleSalesTeamList $salesTeamList;

    /**
     * @var CashSalePartnersList
     */
    protected CashSalePartnersList $partnersList;

    /**
     * @var CashSaleItemList
     */
    protected CashSaleItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CashSaleItemCostList
     */
    protected CashSaleItemCostList $itemCostList;

    /**
     * @var GiftCertRedemptionList
     */
    protected GiftCertRedemptionList $giftCertRedemptionList;

    /**
     * @var PromotionsList
     */
    protected PromotionsList $promotionsList;

    /**
     * @var CashSaleExpCostList
     */
    protected CashSaleExpCostList $expCostList;

    /**
     * @var CashSaleTimeList
     */
    protected CashSaleTimeList $timeList;

    /**
     * @var CashSaleShipGroupList
     */
    protected CashSaleShipGroupList $shipGroupList;

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
        "billingAccount" => "RecordRef",
        "recurringBill" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "source" => "string",
        "postingPeriod" => "RecordRef",
        "createdFrom" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "salesRep" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "leadSource" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "salesEffectiveDate" => "dateTime",
        "excludeCommission" => "boolean",
        "revRecSchedule" => "RecordRef",
        "undepFunds" => "boolean",
        "canHaveStackable" => "boolean",
        "currency" => "RecordRef",
        "account" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
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
        "handlingMode" => "CashSaleHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CashSalePaymentOperation",
        "dynamicDescriptor" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "shippingTax1Rate" => "float",
        "shippingTax2Rate" => "string",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingCost" => "float",
        "handlingTax2Rate" => "string",
        "linkedTrackingNumbers" => "string",
        "trackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "syncSalesTeams" => "boolean",
        "paymentMethod" => "RecordRef",
        "payPalStatus" => "string",
        "creditCard" => "RecordRef",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "creditCardProcessor" => "RecordRef",
        "ccApproved" => "boolean",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "payPalTranId" => "string",
        "subTotal" => "float",
        "ccIsPurchaseCardBin" => "boolean",
        "ignoreAvs" => "boolean",
        "ccProcessAsPurchaseCard" => "boolean",
        "itemCostDiscount" => "RecordRef",
        "itemCostDiscRate" => "string",
        "itemCostDiscAmount" => "float",
        "itemCostTaxRate1" => "float",
        "itemCostTaxRate2" => "float",
        "itemCostDiscTaxable" => "boolean",
        "itemCostTaxCode" => "RecordRef",
        "itemCostDiscTax1Amt" => "float",
        "itemCostDiscPrint" => "boolean",
        "expCostDiscount" => "RecordRef",
        "expCostDiscRate" => "string",
        "expCostDiscAmount" => "float",
        "expCostDiscTaxable" => "boolean",
        "expCostDiscprint" => "boolean",
        "expCostTaxRate1" => "float",
        "timeDiscount" => "RecordRef",
        "expCostTaxCode" => "RecordRef",
        "timeDiscRate" => "string",
        "expCostTaxRate2" => "float",
        "expCostDiscTax1Amt" => "float",
        "timeDiscAmount" => "float",
        "timeDiscTaxable" => "boolean",
        "timeDiscPrint" => "boolean",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "timeTaxRate1" => "float",
        "altShippingCost" => "float",
        "timeTaxCode" => "RecordRef",
        "altHandlingCost" => "float",
        "total" => "float",
        "timeDiscTax1Amt" => "float",
        "ccSecurityCode" => "string",
        "timeTaxRate2" => "float",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "chargeIt" => "boolean",
        "debitCardIssueNo" => "string",
        "threeDStatusCode" => "string",
        "pnRefNum" => "string",
        "paypalAuthId" => "string",
        "status" => "string",
        "paypalProcess" => "boolean",
        "job" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "email" => "string",
        "tax2Total" => "float",
        "validFrom" => "dateTime",
        "vatRegNum" => "string",
        "giftCertApplied" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "CashSaleSalesTeamList",
        "partnersList" => "CashSalePartnersList",
        "itemList" => "CashSaleItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "itemCostList" => "CashSaleItemCostList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "promotionsList" => "PromotionsList",
        "expCostList" => "CashSaleExpCostList",
        "timeList" => "CashSaleTimeList",
        "shipGroupList" => "CashSaleShipGroupList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CashSale
     */
    public function setCreatedDate(string $createdDate): CashSale
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
     * @return CashSale
     */
    public function setLastModifiedDate(string $lastModifiedDate): CashSale
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
     * @return CashSale
     */
    public function setNexus(RecordRef $nexus): CashSale
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
     * @return CashSale
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): CashSale
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
     * @return CashSale
     */
    public function setTaxRegOverride(bool $taxRegOverride): CashSale
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
     * @return CashSale
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): CashSale
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
     * @return CashSale
     */
    public function setCustomForm(RecordRef $customForm): CashSale
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
     * @return CashSale
     */
    public function setEntity(RecordRef $entity): CashSale
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
     * @return CashSale
     */
    public function setBillingAccount(RecordRef $billingAccount): CashSale
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
     * @param bool $recurringBill
     * @return CashSale
     */
    public function setRecurringBill(bool $recurringBill): CashSale
    {
        $this->recurringBill = $recurringBill;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRecurringBill(): bool
    {
        return $this->recurringBill;
    }

    /**
     * @param string $tranDate
     * @return CashSale
     */
    public function setTranDate(string $tranDate): CashSale
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
     * @return CashSale
     */
    public function setTranId(string $tranId): CashSale
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
     * @return CashSale
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): CashSale
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
     * @return CashSale
     */
    public function setTaxPointDate(string $taxPointDate): CashSale
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
     * @return CashSale
     */
    public function setSource(string $source): CashSale
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
     * @param RecordRef $postingPeriod
     * @return CashSale
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CashSale
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
     * @param RecordRef $createdFrom
     * @return CashSale
     */
    public function setCreatedFrom(RecordRef $createdFrom): CashSale
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
     * @param RecordRef $opportunity
     * @return CashSale
     */
    public function setOpportunity(RecordRef $opportunity): CashSale
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
     * @return CashSale
     */
    public function setDepartment(RecordRef $department): CashSale
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
     * @return CashSale
     */
    public function setClass(RecordRef $class): CashSale
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
     * @return CashSale
     */
    public function setLocation(RecordRef $location): CashSale
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
     * @return CashSale
     */
    public function setSubsidiary(RecordRef $subsidiary): CashSale
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
     * @return CashSale
     */
    public function setSalesRep(RecordRef $salesRep): CashSale
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
     * @param string $contribPct
     * @return CashSale
     */
    public function setContribPct(string $contribPct): CashSale
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
     * @param RecordRef $partner
     * @return CashSale
     */
    public function setPartner(RecordRef $partner): CashSale
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
     * @return CashSale
     */
    public function setLeadSource(RecordRef $leadSource): CashSale
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
     * @return CashSale
     */
    public function setStartDate(string $startDate): CashSale
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
     * @return CashSale
     */
    public function setEndDate(string $endDate): CashSale
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
     * @return CashSale
     */
    public function setOtherRefNum(string $otherRefNum): CashSale
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
     * @return CashSale
     */
    public function setMemo(string $memo): CashSale
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
     * @return CashSale
     */
    public function setSalesEffectiveDate(string $salesEffectiveDate): CashSale
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
     * @return CashSale
     */
    public function setExcludeCommission(bool $excludeCommission): CashSale
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
     * @param RecordRef $revRecSchedule
     * @return CashSale
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CashSale
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
     * @param bool $undepFunds
     * @return CashSale
     */
    public function setUndepFunds(bool $undepFunds): CashSale
    {
        $this->undepFunds = $undepFunds;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUndepFunds(): bool
    {
        return $this->undepFunds;
    }

    /**
     * @param bool $canHaveStackable
     * @return CashSale
     */
    public function setCanHaveStackable(bool $canHaveStackable): CashSale
    {
        $this->canHaveStackable = $canHaveStackable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanHaveStackable(): bool
    {
        return $this->canHaveStackable;
    }

    /**
     * @param RecordRef $currency
     * @return CashSale
     */
    public function setCurrency(RecordRef $currency): CashSale
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
     * @param RecordRef $account
     * @return CashSale
     */
    public function setAccount(RecordRef $account): CashSale
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
     * @param string $revRecStartDate
     * @return CashSale
     */
    public function setRevRecStartDate(string $revRecStartDate): CashSale
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
     * @return CashSale
     */
    public function setRevRecEndDate(string $revRecEndDate): CashSale
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
     * @param float $totalCostEstimate
     * @return CashSale
     */
    public function setTotalCostEstimate(float $totalCostEstimate): CashSale
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
     * @return CashSale
     */
    public function setEstGrossProfit(float $estGrossProfit): CashSale
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
     * @return CashSale
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): CashSale
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
     * @param float $exchangeRate
     * @return CashSale
     */
    public function setExchangeRate(float $exchangeRate): CashSale
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
     * @return CashSale
     */
    public function setCurrencyName(string $currencyName): CashSale
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
     * @return CashSale
     */
    public function setPromoCode(RecordRef $promoCode): CashSale
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
     * @return CashSale
     */
    public function setDiscountItem(RecordRef $discountItem): CashSale
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
     * @return CashSale
     */
    public function setDiscountRate(string $discountRate): CashSale
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
     * @return CashSale
     */
    public function setIsTaxable(bool $isTaxable): CashSale
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
     * @return CashSale
     */
    public function setTaxItem(RecordRef $taxItem): CashSale
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
     * @return CashSale
     */
    public function setTaxRate(float $taxRate): CashSale
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
     * @return CashSale
     */
    public function setToBePrinted(bool $toBePrinted): CashSale
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
     * @return CashSale
     */
    public function setToBeEmailed(bool $toBeEmailed): CashSale
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
     * @return CashSale
     */
    public function setToBeFaxed(bool $toBeFaxed): CashSale
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
     * @return CashSale
     */
    public function setFax(string $fax): CashSale
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
     * @return CashSale
     */
    public function setMessageSel(RecordRef $messageSel): CashSale
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
     * @return CashSale
     */
    public function setMessage(string $message): CashSale
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
     * @return CashSale
     */
    public function setPaymentOption(RecordRef $paymentOption): CashSale
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
     * @return CashSale
     */
    public function setInputAuthCode(string $inputAuthCode): CashSale
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
     * @return CashSale
     */
    public function setInputReferenceCode(string $inputReferenceCode): CashSale
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
     * @return CashSale
     */
    public function setCheckNumber(string $checkNumber): CashSale
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
     * @return CashSale
     */
    public function setPaymentCardCsc(string $paymentCardCsc): CashSale
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
     * @return CashSale
     */
    public function setPaymentProcessingProfile(RecordRef $paymentProcessingProfile): CashSale
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
     * @param CashSaleHandlingMode $handlingMode
     * @return CashSale
     */
    public function setHandlingMode(CashSaleHandlingMode $handlingMode): CashSale
    {
        $this->handlingMode = $handlingMode;
        return $this;
    }

    /**
     * @return CashSaleHandlingMode
     */
    public function getHandlingMode(): CashSaleHandlingMode
    {
        return $this->handlingMode;
    }

    /**
     * @param string $outputAuthCode
     * @return CashSale
     */
    public function setOutputAuthCode(string $outputAuthCode): CashSale
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
     * @return CashSale
     */
    public function setOutputReferenceCode(string $outputReferenceCode): CashSale
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
     * @param CashSalePaymentOperation $paymentOperation
     * @return CashSale
     */
    public function setPaymentOperation(CashSalePaymentOperation $paymentOperation): CashSale
    {
        $this->paymentOperation = $paymentOperation;
        return $this;
    }

    /**
     * @return CashSalePaymentOperation
     */
    public function getPaymentOperation(): CashSalePaymentOperation
    {
        return $this->paymentOperation;
    }

    /**
     * @param string $dynamicDescriptor
     * @return CashSale
     */
    public function setDynamicDescriptor(string $dynamicDescriptor): CashSale
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
     * @return CashSale
     */
    public function setBillingAddress(Address $billingAddress): CashSale
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
     * @return CashSale
     */
    public function setBillAddressList(RecordRef $billAddressList): CashSale
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
     * @return CashSale
     */
    public function setShippingAddress(Address $shippingAddress): CashSale
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
     * @return CashSale
     */
    public function setShipIsResidential(bool $shipIsResidential): CashSale
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
     * @return CashSale
     */
    public function setShipAddressList(RecordRef $shipAddressList): CashSale
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
     * @return CashSale
     */
    public function setFob(string $fob): CashSale
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
     * @return CashSale
     */
    public function setShipDate(string $shipDate): CashSale
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
     * @return CashSale
     */
    public function setShipMethod(RecordRef $shipMethod): CashSale
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
     * @return CashSale
     */
    public function setShippingCost(float $shippingCost): CashSale
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
     * @return CashSale
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): CashSale
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
     * @return CashSale
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): CashSale
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
     * @return CashSale
     */
    public function setHandlingCost(float $handlingCost): CashSale
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
     * @param string $linkedTrackingNumbers
     * @return CashSale
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): CashSale
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
     * @param string $trackingNumbers
     * @return CashSale
     */
    public function setTrackingNumbers(string $trackingNumbers): CashSale
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
     * @param RecordRef $salesGroup
     * @return CashSale
     */
    public function setSalesGroup(RecordRef $salesGroup): CashSale
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
     * @param RevenueStatus $revenueStatus
     * @return CashSale
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus): CashSale
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
     * @return CashSale
     */
    public function setRecognizedRevenue(float $recognizedRevenue): CashSale
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
     * @return CashSale
     */
    public function setDeferredRevenue(float $deferredRevenue): CashSale
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
     * @return CashSale
     */
    public function setRevRecOnRevCommitment(bool $revRecOnRevCommitment): CashSale
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
     * @return CashSale
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): CashSale
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
     * @return CashSale
     */
    public function setPaymentMethod(RecordRef $paymentMethod): CashSale
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
     * @param string $payPalStatus
     * @return CashSale
     */
    public function setPayPalStatus(string $payPalStatus): CashSale
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
     * @param RecordRef $creditCard
     * @return CashSale
     */
    public function setCreditCard(RecordRef $creditCard): CashSale
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
     * @return CashSale
     */
    public function setCcNumber(string $ccNumber): CashSale
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
     * @return CashSale
     */
    public function setCcExpireDate(string $ccExpireDate): CashSale
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
     * @return CashSale
     */
    public function setCcName(string $ccName): CashSale
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
     * @return CashSale
     */
    public function setCcStreet(string $ccStreet): CashSale
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
     * @return CashSale
     */
    public function setCcZipCode(string $ccZipCode): CashSale
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
     * @param RecordRef $creditCardProcessor
     * @return CashSale
     */
    public function setCreditCardProcessor(RecordRef $creditCardProcessor): CashSale
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
     * @param bool $ccApproved
     * @return CashSale
     */
    public function setCcApproved(bool $ccApproved): CashSale
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
     * @param string $authCode
     * @return CashSale
     */
    public function setAuthCode(string $authCode): CashSale
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    /**
     * @param AvsMatchCode $ccAvsStreetMatch
     * @return CashSale
     */
    public function setCcAvsStreetMatch(AvsMatchCode $ccAvsStreetMatch): CashSale
    {
        $this->ccAvsStreetMatch = $ccAvsStreetMatch;
        return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsStreetMatch(): AvsMatchCode
    {
        return $this->ccAvsStreetMatch;
    }

    /**
     * @param AvsMatchCode $ccAvsZipMatch
     * @return CashSale
     */
    public function setCcAvsZipMatch(AvsMatchCode $ccAvsZipMatch): CashSale
    {
        $this->ccAvsZipMatch = $ccAvsZipMatch;
        return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsZipMatch(): AvsMatchCode
    {
        return $this->ccAvsZipMatch;
    }

    /**
     * @param bool $isRecurringPayment
     * @return CashSale
     */
    public function setIsRecurringPayment(bool $isRecurringPayment): CashSale
    {
        $this->isRecurringPayment = $isRecurringPayment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRecurringPayment(): bool
    {
        return $this->isRecurringPayment;
    }

    /**
     * @param string $payPalTranId
     * @return CashSale
     */
    public function setPayPalTranId(string $payPalTranId): CashSale
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
     * @return CashSale
     */
    public function setSubTotal(float $subTotal): CashSale
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
     * @return CashSale
     */
    public function setCcIsPurchaseCardBin(bool $ccIsPurchaseCardBin): CashSale
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
     * @param bool $ignoreAvs
     * @return CashSale
     */
    public function setIgnoreAvs(bool $ignoreAvs): CashSale
    {
        $this->ignoreAvs = $ignoreAvs;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIgnoreAvs(): bool
    {
        return $this->ignoreAvs;
    }

    /**
     * @param bool $ccProcessAsPurchaseCard
     * @return CashSale
     */
    public function setCcProcessAsPurchaseCard(bool $ccProcessAsPurchaseCard): CashSale
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
     * @param RecordRef $itemCostDiscount
     * @return CashSale
     */
    public function setItemCostDiscount(RecordRef $itemCostDiscount): CashSale
    {
        $this->itemCostDiscount = $itemCostDiscount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemCostDiscount(): RecordRef
    {
        return $this->itemCostDiscount;
    }

    /**
     * @param string $itemCostDiscRate
     * @return CashSale
     */
    public function setItemCostDiscRate(string $itemCostDiscRate): CashSale
    {
        $this->itemCostDiscRate = $itemCostDiscRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemCostDiscRate(): string
    {
        return $this->itemCostDiscRate;
    }

    /**
     * @param float $itemCostDiscAmount
     * @return CashSale
     */
    public function setItemCostDiscAmount(float $itemCostDiscAmount): CashSale
    {
        $this->itemCostDiscAmount = $itemCostDiscAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getItemCostDiscAmount(): float
    {
        return $this->itemCostDiscAmount;
    }

    /**
     * @param bool $itemCostDiscTaxable
     * @return CashSale
     */
    public function setItemCostDiscTaxable(bool $itemCostDiscTaxable): CashSale
    {
        $this->itemCostDiscTaxable = $itemCostDiscTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getItemCostDiscTaxable(): bool
    {
        return $this->itemCostDiscTaxable;
    }

    /**
     * @param RecordRef $itemCostTaxCode
     * @return CashSale
     */
    public function setItemCostTaxCode(RecordRef $itemCostTaxCode): CashSale
    {
        $this->itemCostTaxCode = $itemCostTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemCostTaxCode(): RecordRef
    {
        return $this->itemCostTaxCode;
    }

    /**
     * @param bool $itemCostDiscPrint
     * @return CashSale
     */
    public function setItemCostDiscPrint(bool $itemCostDiscPrint): CashSale
    {
        $this->itemCostDiscPrint = $itemCostDiscPrint;
        return $this;
    }

    /**
     * @return bool
     */
    public function getItemCostDiscPrint(): bool
    {
        return $this->itemCostDiscPrint;
    }

    /**
     * @param RecordRef $expCostDiscount
     * @return CashSale
     */
    public function setExpCostDiscount(RecordRef $expCostDiscount): CashSale
    {
        $this->expCostDiscount = $expCostDiscount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpCostDiscount(): RecordRef
    {
        return $this->expCostDiscount;
    }

    /**
     * @param string $expCostDiscRate
     * @return CashSale
     */
    public function setExpCostDiscRate(string $expCostDiscRate): CashSale
    {
        $this->expCostDiscRate = $expCostDiscRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpCostDiscRate(): string
    {
        return $this->expCostDiscRate;
    }

    /**
     * @param float $expCostDiscAmount
     * @return CashSale
     */
    public function setExpCostDiscAmount(float $expCostDiscAmount): CashSale
    {
        $this->expCostDiscAmount = $expCostDiscAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getExpCostDiscAmount(): float
    {
        return $this->expCostDiscAmount;
    }

    /**
     * @param bool $expCostDiscTaxable
     * @return CashSale
     */
    public function setExpCostDiscTaxable(bool $expCostDiscTaxable): CashSale
    {
        $this->expCostDiscTaxable = $expCostDiscTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExpCostDiscTaxable(): bool
    {
        return $this->expCostDiscTaxable;
    }

    /**
     * @param bool $expCostDiscprint
     * @return CashSale
     */
    public function setExpCostDiscprint(bool $expCostDiscprint): CashSale
    {
        $this->expCostDiscprint = $expCostDiscprint;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExpCostDiscprint(): bool
    {
        return $this->expCostDiscprint;
    }

    /**
     * @param RecordRef $timeDiscount
     * @return CashSale
     */
    public function setTimeDiscount(RecordRef $timeDiscount): CashSale
    {
        $this->timeDiscount = $timeDiscount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeDiscount(): RecordRef
    {
        return $this->timeDiscount;
    }

    /**
     * @param RecordRef $expCostTaxCode
     * @return CashSale
     */
    public function setExpCostTaxCode(RecordRef $expCostTaxCode): CashSale
    {
        $this->expCostTaxCode = $expCostTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpCostTaxCode(): RecordRef
    {
        return $this->expCostTaxCode;
    }

    /**
     * @param string $timeDiscRate
     * @return CashSale
     */
    public function setTimeDiscRate(string $timeDiscRate): CashSale
    {
        $this->timeDiscRate = $timeDiscRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeDiscRate(): string
    {
        return $this->timeDiscRate;
    }

    /**
     * @param float $timeDiscAmount
     * @return CashSale
     */
    public function setTimeDiscAmount(float $timeDiscAmount): CashSale
    {
        $this->timeDiscAmount = $timeDiscAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeDiscAmount(): float
    {
        return $this->timeDiscAmount;
    }

    /**
     * @param bool $timeDiscTaxable
     * @return CashSale
     */
    public function setTimeDiscTaxable(bool $timeDiscTaxable): CashSale
    {
        $this->timeDiscTaxable = $timeDiscTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTimeDiscTaxable(): bool
    {
        return $this->timeDiscTaxable;
    }

    /**
     * @param bool $timeDiscPrint
     * @return CashSale
     */
    public function setTimeDiscPrint(bool $timeDiscPrint): CashSale
    {
        $this->timeDiscPrint = $timeDiscPrint;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTimeDiscPrint(): bool
    {
        return $this->timeDiscPrint;
    }

    /**
     * @param float $discountTotal
     * @return CashSale
     */
    public function setDiscountTotal(float $discountTotal): CashSale
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
     * @return CashSale
     */
    public function setTaxTotal(float $taxTotal): CashSale
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
     * @return CashSale
     */
    public function setAltShippingCost(float $altShippingCost): CashSale
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
     * @param RecordRef $timeTaxCode
     * @return CashSale
     */
    public function setTimeTaxCode(RecordRef $timeTaxCode): CashSale
    {
        $this->timeTaxCode = $timeTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeTaxCode(): RecordRef
    {
        return $this->timeTaxCode;
    }

    /**
     * @param float $altHandlingCost
     * @return CashSale
     */
    public function setAltHandlingCost(float $altHandlingCost): CashSale
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
     * @return CashSale
     */
    public function setTotal(float $total): CashSale
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
     * @param string $ccSecurityCode
     * @return CashSale
     */
    public function setCcSecurityCode(string $ccSecurityCode): CashSale
    {
        $this->ccSecurityCode = $ccSecurityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcSecurityCode(): string
    {
        return $this->ccSecurityCode;
    }

    /**
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return CashSale
     */
    public function setCcSecurityCodeMatch(AvsMatchCode $ccSecurityCodeMatch): CashSale
    {
        $this->ccSecurityCodeMatch = $ccSecurityCodeMatch;
        return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcSecurityCodeMatch(): AvsMatchCode
    {
        return $this->ccSecurityCodeMatch;
    }

    /**
     * @param bool $chargeIt
     * @return CashSale
     */
    public function setChargeIt(bool $chargeIt): CashSale
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
     * @param string $debitCardIssueNo
     * @return CashSale
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): CashSale
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
     * @param string $threeDStatusCode
     * @return CashSale
     */
    public function setThreeDStatusCode(string $threeDStatusCode): CashSale
    {
        $this->threeDStatusCode = $threeDStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreeDStatusCode(): string
    {
        return $this->threeDStatusCode;
    }

    /**
     * @param string $pnRefNum
     * @return CashSale
     */
    public function setPnRefNum(string $pnRefNum): CashSale
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
     * @param string $paypalAuthId
     * @return CashSale
     */
    public function setPaypalAuthId(string $paypalAuthId): CashSale
    {
        $this->paypalAuthId = $paypalAuthId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaypalAuthId(): string
    {
        return $this->paypalAuthId;
    }

    /**
     * @param string $status
     * @return CashSale
     */
    public function setStatus(string $status): CashSale
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
     * @param bool $paypalProcess
     * @return CashSale
     */
    public function setPaypalProcess(bool $paypalProcess): CashSale
    {
        $this->paypalProcess = $paypalProcess;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPaypalProcess(): bool
    {
        return $this->paypalProcess;
    }

    /**
     * @param RecordRef $job
     * @return CashSale
     */
    public function setJob(RecordRef $job): CashSale
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
     * @param RecordRef $billingSchedule
     * @return CashSale
     */
    public function setBillingSchedule(RecordRef $billingSchedule): CashSale
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule(): RecordRef
    {
        return $this->billingSchedule;
    }

    /**
     * @param string $email
     * @return CashSale
     */
    public function setEmail(string $email): CashSale
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
     * @param string $validFrom
     * @return CashSale
     */
    public function setValidFrom(string $validFrom): CashSale
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
     * @param string $vatRegNum
     * @return CashSale
     */
    public function setVatRegNum(string $vatRegNum): CashSale
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
     * @param float $giftCertApplied
     * @return CashSale
     */
    public function setGiftCertApplied(float $giftCertApplied): CashSale
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
     * @return CashSale
     */
    public function setTranIsVsoeBundle(bool $tranIsVsoeBundle): CashSale
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
     * @return CashSale
     */
    public function setVsoeAutoCalc(bool $vsoeAutoCalc): CashSale
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
     * @return CashSale
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): CashSale
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
     * @param CashSaleSalesTeamList $salesTeamList
     * @return CashSale
     */
    public function setSalesTeamList(CashSaleSalesTeamList $salesTeamList): CashSale
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return CashSaleSalesTeamList
     */
    public function getSalesTeamList(): CashSaleSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param CashSalePartnersList $partnersList
     * @return CashSale
     */
    public function setPartnersList(CashSalePartnersList $partnersList): CashSale
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return CashSalePartnersList
     */
    public function getPartnersList(): CashSalePartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param CashSaleItemList $itemList
     * @return CashSale
     */
    public function setItemList(CashSaleItemList $itemList): CashSale
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return CashSaleItemList
     */
    public function getItemList(): CashSaleItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CashSale
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CashSale
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
     * @param CashSaleItemCostList $itemCostList
     * @return CashSale
     */
    public function setItemCostList(CashSaleItemCostList $itemCostList): CashSale
    {
        $this->itemCostList = $itemCostList;
        return $this;
    }

    /**
     * @return CashSaleItemCostList
     */
    public function getItemCostList(): CashSaleItemCostList
    {
        return $this->itemCostList;
    }

    /**
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return CashSale
     */
    public function setGiftCertRedemptionList(GiftCertRedemptionList $giftCertRedemptionList): CashSale
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
     * @param PromotionsList $promotionsList
     * @return CashSale
     */
    public function setPromotionsList(PromotionsList $promotionsList): CashSale
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
     * @param CashSaleExpCostList $expCostList
     * @return CashSale
     */
    public function setExpCostList(CashSaleExpCostList $expCostList): CashSale
    {
        $this->expCostList = $expCostList;
        return $this;
    }

    /**
     * @return CashSaleExpCostList
     */
    public function getExpCostList(): CashSaleExpCostList
    {
        return $this->expCostList;
    }

    /**
     * @param CashSaleTimeList $timeList
     * @return CashSale
     */
    public function setTimeList(CashSaleTimeList $timeList): CashSale
    {
        $this->timeList = $timeList;
        return $this;
    }

    /**
     * @return CashSaleTimeList
     */
    public function getTimeList(): CashSaleTimeList
    {
        return $this->timeList;
    }

    /**
     * @param CashSaleShipGroupList $shipGroupList
     * @return CashSale
     */
    public function setShipGroupList(CashSaleShipGroupList $shipGroupList): CashSale
    {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * @return CashSaleShipGroupList
     */
    public function getShipGroupList(): CashSaleShipGroupList
    {
        return $this->shipGroupList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return CashSale
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): CashSale
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
     * @return CashSale
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CashSale
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
     * @return CashSale
     */
    public function setInternalId(string $internalId): CashSale
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
     * @return CashSale
     */
    public function setExternalId(string $externalId): CashSale
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
