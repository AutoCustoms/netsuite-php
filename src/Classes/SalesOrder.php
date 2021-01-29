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

class SalesOrder extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

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
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

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
     * @var SalesOrderOrderStatus
     */
    protected SalesOrderOrderStatus $orderStatus;

    /**
     * @var string
     */
    protected string $nextBill;

    /**
     * @var RecordRef
     */
    protected RecordRef $opportunity;

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
    protected RecordRef $salesGroup;

    /**
     * @var bool
     */
    protected bool $syncSalesTeams;

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
     * @var RecordRef
     */
    protected RecordRef $promoCode;

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
     * @var SalesOrderHandlingMode
     */
    protected SalesOrderHandlingMode $handlingMode;

    /**
     * @var string
     */
    protected string $outputAuthCode;

    /**
     * @var string
     */
    protected string $outputReferenceCode;

    /**
     * @var SalesOrderPaymentOperation
     */
    protected SalesOrderPaymentOperation $paymentOperation;

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
     * @var string
     */
    protected string $actualShipDate;

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
     * @var bool
     */
    protected bool $isMultiShipTo;

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
    protected $handlingTax2Rate;
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
     * @var bool
     */
    protected bool $shipComplete;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var string
     */
    protected string $shopperIpAddress;

    /**
     * @var bool
     */
    protected bool $saveOnAuthDecline;

    /**
     * @var bool
     */
    protected bool $canHaveStackable;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCard;

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
     * @var string
     */
    protected string $payPalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCardProcessor;

    /**
     * @var string
     */
    protected string $payPalTranId;

    /**
     * @var bool
     */
    protected bool $ccApproved;

    /**
     * @var bool
     */
    protected bool $getAuth;

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
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccSecurityCodeMatch;

    /**
     * @var float
     */
    protected float $altSalesTotal;

    /**
     * @var bool
     */
    protected bool $ignoreAvs;

    /**
     * @var TransactionPaymentEventResult
     */
    protected TransactionPaymentEventResult $paymentEventResult;

    /**
     * @var TransactionPaymentEventHoldReason
     */
    protected TransactionPaymentEventHoldReason $paymentEventHoldReason;

    /**
     * @var TransactionPaymentEventType
     */
    protected TransactionPaymentEventType $paymentEventType;

    /**
     * @var string
     */
    protected string $paymentEventDate;

    /**
     * @var string
     */
    protected string $paymentEventUpdatedBy;

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
     * @var string
     */
    protected string $paypalAuthId;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var bool
     */
    protected bool $paypalProcess;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingSchedule;

    /**
     * @var string
     */
    protected string $ccSecurityCode;

    /**
     * @var string
     */
    protected string $threeDStatusCode;

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
     * @var string
     */
    protected string $debitCardIssueNo;

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
     * @var string
     */
    protected string $taxPointDate;

    /**
     * @var bool
     */
    protected bool $taxDetailsOverride;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var string
     */
    protected string $pnRefNum;

    /**
     * @var string
     */
    protected string $status;

    protected $tax2Total;
    /**
     * @var RecordRef
     */
    protected RecordRef $terms;

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
     * @var float
     */
    protected float $oneTime;

    /**
     * @var float
     */
    protected float $recurWeekly;

    /**
     * @var float
     */
    protected float $recurMonthly;

    /**
     * @var float
     */
    protected float $recurQuarterly;

    /**
     * @var float
     */
    protected float $recurAnnually;

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
     * @var SalesOrderSalesTeamList
     */
    protected SalesOrderSalesTeamList $salesTeamList;

    /**
     * @var SalesOrderPartnersList
     */
    protected SalesOrderPartnersList $partnersList;

    /**
     * @var GiftCertRedemptionList
     */
    protected GiftCertRedemptionList $giftCertRedemptionList;

    /**
     * @var PromotionsList
     */
    protected PromotionsList $promotionsList;

    /**
     * @var SalesOrderItemList
     */
    protected SalesOrderItemList $itemList;

    /**
     * @var SalesOrderShipGroupList
     */
    protected SalesOrderShipGroupList $shipGroupList;

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
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "currency" => "RecordRef",
        "drAccount" => "RecordRef",
        "fxAccount" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "createdFrom" => "RecordRef",
        "orderStatus" => "SalesOrderOrderStatus",
        "nextBill" => "dateTime",
        "opportunity" => "RecordRef",
        "salesRep" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "leadSource" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "salesEffectiveDate" => "dateTime",
        "excludeCommission" => "boolean",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "exchangeRate" => "float",
        "promoCode" => "RecordRef",
        "currencyName" => "string",
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
        "handlingMode" => "SalesOrderHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "SalesOrderPaymentOperation",
        "dynamicDescriptor" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "actualShipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "shippingTax1Rate" => "float",
        "isMultiShipTo" => "boolean",
        "shippingTax2Rate" => "string",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingTax2Rate" => "string",
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "shipComplete" => "boolean",
        "paymentMethod" => "RecordRef",
        "shopperIpAddress" => "string",
        "saveOnAuthDecline" => "boolean",
        "canHaveStackable" => "boolean",
        "creditCard" => "RecordRef",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "revCommitStatus" => "RevenueCommitStatus",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "payPalStatus" => "string",
        "creditCardProcessor" => "RecordRef",
        "payPalTranId" => "string",
        "ccApproved" => "boolean",
        "getAuth" => "boolean",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "altSalesTotal" => "float",
        "ignoreAvs" => "boolean",
        "paymentEventResult" => "TransactionPaymentEventResult",
        "paymentEventHoldReason" => "TransactionPaymentEventHoldReason",
        "paymentEventType" => "TransactionPaymentEventType",
        "paymentEventDate" => "dateTime",
        "paymentEventUpdatedBy" => "string",
        "subTotal" => "float",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "paypalAuthId" => "string",
        "balance" => "float",
        "paypalProcess" => "boolean",
        "billingSchedule" => "RecordRef",
        "ccSecurityCode" => "string",
        "threeDStatusCode" => "string",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "debitCardIssueNo" => "string",
        "lastModifiedDate" => "dateTime",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxPointDate" => "dateTime",
        "taxDetailsOverride" => "boolean",
        "location" => "RecordRef",
        "pnRefNum" => "string",
        "status" => "string",
        "tax2Total" => "float",
        "terms" => "RecordRef",
        "validFrom" => "dateTime",
        "vatRegNum" => "string",
        "giftCertApplied" => "float",
        "oneTime" => "float",
        "recurWeekly" => "float",
        "recurMonthly" => "float",
        "recurQuarterly" => "float",
        "recurAnnually" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "SalesOrderSalesTeamList",
        "partnersList" => "SalesOrderPartnersList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "promotionsList" => "PromotionsList",
        "itemList" => "SalesOrderItemList",
        "shipGroupList" => "SalesOrderShipGroupList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return SalesOrder
     */
    public function setCreatedDate(string $createdDate): SalesOrder
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
     * @param RecordRef $customForm
     * @return SalesOrder
     */
    public function setCustomForm(RecordRef $customForm): SalesOrder
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
     * @return SalesOrder
     */
    public function setEntity(RecordRef $entity): SalesOrder
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
     * @param RecordRef $job
     * @return SalesOrder
     */
    public function setJob(RecordRef $job): SalesOrder
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
     * @param RecordRef $currency
     * @return SalesOrder
     */
    public function setCurrency(RecordRef $currency): SalesOrder
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
     * @param RecordRef $drAccount
     * @return SalesOrder
     */
    public function setDrAccount(RecordRef $drAccount): SalesOrder
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
     * @return SalesOrder
     */
    public function setFxAccount(RecordRef $fxAccount): SalesOrder
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
     * @param string $tranDate
     * @return SalesOrder
     */
    public function setTranDate(string $tranDate): SalesOrder
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
     * @return SalesOrder
     */
    public function setTranId(string $tranId): SalesOrder
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
     * @return SalesOrder
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): SalesOrder
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
     * @return SalesOrder
     */
    public function setSource(string $source): SalesOrder
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
     * @return SalesOrder
     */
    public function setCreatedFrom(RecordRef $createdFrom): SalesOrder
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
     * @param SalesOrderOrderStatus $orderStatus
     * @return SalesOrder
     */
    public function setOrderStatus(SalesOrderOrderStatus $orderStatus): SalesOrder
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return SalesOrderOrderStatus
     */
    public function getOrderStatus(): SalesOrderOrderStatus
    {
        return $this->orderStatus;
    }

    /**
     * @param string $nextBill
     * @return SalesOrder
     */
    public function setNextBill(string $nextBill): SalesOrder
    {
        $this->nextBill = $nextBill;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextBill(): string
    {
        return $this->nextBill;
    }

    /**
     * @param RecordRef $opportunity
     * @return SalesOrder
     */
    public function setOpportunity(RecordRef $opportunity): SalesOrder
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
     * @param RecordRef $salesRep
     * @return SalesOrder
     */
    public function setSalesRep(RecordRef $salesRep): SalesOrder
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
     * @return SalesOrder
     */
    public function setContribPct(string $contribPct): SalesOrder
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
     * @return SalesOrder
     */
    public function setPartner(RecordRef $partner): SalesOrder
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
     * @param RecordRef $salesGroup
     * @return SalesOrder
     */
    public function setSalesGroup(RecordRef $salesGroup): SalesOrder
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
     * @return SalesOrder
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): SalesOrder
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
     * @param RecordRef $leadSource
     * @return SalesOrder
     */
    public function setLeadSource(RecordRef $leadSource): SalesOrder
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
     * @return SalesOrder
     */
    public function setStartDate(string $startDate): SalesOrder
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
     * @return SalesOrder
     */
    public function setEndDate(string $endDate): SalesOrder
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
     * @return SalesOrder
     */
    public function setOtherRefNum(string $otherRefNum): SalesOrder
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
     * @return SalesOrder
     */
    public function setMemo(string $memo): SalesOrder
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
     * @return SalesOrder
     */
    public function setSalesEffectiveDate(string $salesEffectiveDate): SalesOrder
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
     * @return SalesOrder
     */
    public function setExcludeCommission(bool $excludeCommission): SalesOrder
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
     * @return SalesOrder
     */
    public function setTotalCostEstimate(float $totalCostEstimate): SalesOrder
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
     * @return SalesOrder
     */
    public function setEstGrossProfit(float $estGrossProfit): SalesOrder
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
     * @return SalesOrder
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): SalesOrder
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
     * @return SalesOrder
     */
    public function setExchangeRate(float $exchangeRate): SalesOrder
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
     * @param RecordRef $promoCode
     * @return SalesOrder
     */
    public function setPromoCode(RecordRef $promoCode): SalesOrder
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
     * @param string $currencyName
     * @return SalesOrder
     */
    public function setCurrencyName(string $currencyName): SalesOrder
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
     * @return SalesOrder
     */
    public function setDiscountItem(RecordRef $discountItem): SalesOrder
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
     * @return SalesOrder
     */
    public function setDiscountRate(string $discountRate): SalesOrder
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
     * @return SalesOrder
     */
    public function setIsTaxable(bool $isTaxable): SalesOrder
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
     * @return SalesOrder
     */
    public function setTaxItem(RecordRef $taxItem): SalesOrder
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
     * @return SalesOrder
     */
    public function setTaxRate(float $taxRate): SalesOrder
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
     * @return SalesOrder
     */
    public function setToBePrinted(bool $toBePrinted): SalesOrder
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
     * @return SalesOrder
     */
    public function setToBeEmailed(bool $toBeEmailed): SalesOrder
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
     * @return SalesOrder
     */
    public function setEmail(string $email): SalesOrder
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
     * @return SalesOrder
     */
    public function setToBeFaxed(bool $toBeFaxed): SalesOrder
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
     * @return SalesOrder
     */
    public function setFax(string $fax): SalesOrder
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
     * @return SalesOrder
     */
    public function setMessageSel(RecordRef $messageSel): SalesOrder
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
     * @return SalesOrder
     */
    public function setMessage(string $message): SalesOrder
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
     * @return SalesOrder
     */
    public function setPaymentOption(RecordRef $paymentOption): SalesOrder
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
     * @return SalesOrder
     */
    public function setInputAuthCode(string $inputAuthCode): SalesOrder
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
     * @return SalesOrder
     */
    public function setInputReferenceCode(string $inputReferenceCode): SalesOrder
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
     * @return SalesOrder
     */
    public function setCheckNumber(string $checkNumber): SalesOrder
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
     * @return SalesOrder
     */
    public function setPaymentCardCsc(string $paymentCardCsc): SalesOrder
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
     * @return SalesOrder
     */
    public function setPaymentProcessingProfile(RecordRef $paymentProcessingProfile): SalesOrder
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
     * @param SalesOrderHandlingMode $handlingMode
     * @return SalesOrder
     */
    public function setHandlingMode(SalesOrderHandlingMode $handlingMode): SalesOrder
    {
        $this->handlingMode = $handlingMode;
        return $this;
    }

    /**
     * @return SalesOrderHandlingMode
     */
    public function getHandlingMode(): SalesOrderHandlingMode
    {
        return $this->handlingMode;
    }

    /**
     * @param string $outputAuthCode
     * @return SalesOrder
     */
    public function setOutputAuthCode(string $outputAuthCode): SalesOrder
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
     * @return SalesOrder
     */
    public function setOutputReferenceCode(string $outputReferenceCode): SalesOrder
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
     * @param SalesOrderPaymentOperation $paymentOperation
     * @return SalesOrder
     */
    public function setPaymentOperation(SalesOrderPaymentOperation $paymentOperation): SalesOrder
    {
        $this->paymentOperation = $paymentOperation;
        return $this;
    }

    /**
     * @return SalesOrderPaymentOperation
     */
    public function getPaymentOperation(): SalesOrderPaymentOperation
    {
        return $this->paymentOperation;
    }

    /**
     * @param string $dynamicDescriptor
     * @return SalesOrder
     */
    public function setDynamicDescriptor(string $dynamicDescriptor): SalesOrder
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
     * @return SalesOrder
     */
    public function setBillingAddress(Address $billingAddress): SalesOrder
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
     * @return SalesOrder
     */
    public function setBillAddressList(RecordRef $billAddressList): SalesOrder
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
     * @return SalesOrder
     */
    public function setShippingAddress(Address $shippingAddress): SalesOrder
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
     * @return SalesOrder
     */
    public function setShipIsResidential(bool $shipIsResidential): SalesOrder
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
     * @return SalesOrder
     */
    public function setShipAddressList(RecordRef $shipAddressList): SalesOrder
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
     * @return SalesOrder
     */
    public function setFob(string $fob): SalesOrder
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
     * @return SalesOrder
     */
    public function setShipDate(string $shipDate): SalesOrder
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
     * @param string $actualShipDate
     * @return SalesOrder
     */
    public function setActualShipDate(string $actualShipDate): SalesOrder
    {
        $this->actualShipDate = $actualShipDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualShipDate(): string
    {
        return $this->actualShipDate;
    }

    /**
     * @param RecordRef $shipMethod
     * @return SalesOrder
     */
    public function setShipMethod(RecordRef $shipMethod): SalesOrder
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
     * @return SalesOrder
     */
    public function setShippingCost(float $shippingCost): SalesOrder
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
     * @param bool $isMultiShipTo
     * @return SalesOrder
     */
    public function setIsMultiShipTo(bool $isMultiShipTo): SalesOrder
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
     * @param RecordRef $shippingTaxCode
     * @return SalesOrder
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): SalesOrder
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
     * @return SalesOrder
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): SalesOrder
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
     * @return SalesOrder
     */
    public function setHandlingCost(float $handlingCost): SalesOrder
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
     * @return SalesOrder
     */
    public function setTrackingNumbers(string $trackingNumbers): SalesOrder
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
     * @return SalesOrder
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): SalesOrder
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
     * @param bool $shipComplete
     * @return SalesOrder
     */
    public function setShipComplete(bool $shipComplete): SalesOrder
    {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipComplete(): bool
    {
        return $this->shipComplete;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return SalesOrder
     */
    public function setPaymentMethod(RecordRef $paymentMethod): SalesOrder
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
     * @param string $shopperIpAddress
     * @return SalesOrder
     */
    public function setShopperIpAddress(string $shopperIpAddress): SalesOrder
    {
        $this->shopperIpAddress = $shopperIpAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopperIpAddress(): string
    {
        return $this->shopperIpAddress;
    }

    /**
     * @param bool $saveOnAuthDecline
     * @return SalesOrder
     */
    public function setSaveOnAuthDecline(bool $saveOnAuthDecline): SalesOrder
    {
        $this->saveOnAuthDecline = $saveOnAuthDecline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSaveOnAuthDecline(): bool
    {
        return $this->saveOnAuthDecline;
    }

    /**
     * @param bool $canHaveStackable
     * @return SalesOrder
     */
    public function setCanHaveStackable(bool $canHaveStackable): SalesOrder
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
     * @param RecordRef $creditCard
     * @return SalesOrder
     */
    public function setCreditCard(RecordRef $creditCard): SalesOrder
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
     * @param RevenueStatus $revenueStatus
     * @return SalesOrder
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus): SalesOrder
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
     * @return SalesOrder
     */
    public function setRecognizedRevenue(float $recognizedRevenue): SalesOrder
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
     * @return SalesOrder
     */
    public function setDeferredRevenue(float $deferredRevenue): SalesOrder
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
     * @return SalesOrder
     */
    public function setRevRecOnRevCommitment(bool $revRecOnRevCommitment): SalesOrder
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
     * @return SalesOrder
     */
    public function setRevCommitStatus(RevenueCommitStatus $revCommitStatus): SalesOrder
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
     * @param string $ccNumber
     * @return SalesOrder
     */
    public function setCcNumber(string $ccNumber): SalesOrder
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
     * @return SalesOrder
     */
    public function setCcExpireDate(string $ccExpireDate): SalesOrder
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
     * @return SalesOrder
     */
    public function setCcName(string $ccName): SalesOrder
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
     * @return SalesOrder
     */
    public function setCcStreet(string $ccStreet): SalesOrder
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
     * @return SalesOrder
     */
    public function setCcZipCode(string $ccZipCode): SalesOrder
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
     * @param string $payPalStatus
     * @return SalesOrder
     */
    public function setPayPalStatus(string $payPalStatus): SalesOrder
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
     * @param RecordRef $creditCardProcessor
     * @return SalesOrder
     */
    public function setCreditCardProcessor(RecordRef $creditCardProcessor): SalesOrder
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
     * @param string $payPalTranId
     * @return SalesOrder
     */
    public function setPayPalTranId(string $payPalTranId): SalesOrder
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
     * @param bool $ccApproved
     * @return SalesOrder
     */
    public function setCcApproved(bool $ccApproved): SalesOrder
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
     * @param bool $getAuth
     * @return SalesOrder
     */
    public function setGetAuth(bool $getAuth): SalesOrder
    {
        $this->getAuth = $getAuth;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGetAuth(): bool
    {
        return $this->getAuth;
    }

    /**
     * @param string $authCode
     * @return SalesOrder
     */
    public function setAuthCode(string $authCode): SalesOrder
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
     * @return SalesOrder
     */
    public function setCcAvsStreetMatch(AvsMatchCode $ccAvsStreetMatch): SalesOrder
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
     * @return SalesOrder
     */
    public function setCcAvsZipMatch(AvsMatchCode $ccAvsZipMatch): SalesOrder
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
     * @return SalesOrder
     */
    public function setIsRecurringPayment(bool $isRecurringPayment): SalesOrder
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
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return SalesOrder
     */
    public function setCcSecurityCodeMatch(AvsMatchCode $ccSecurityCodeMatch): SalesOrder
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
     * @param float $altSalesTotal
     * @return SalesOrder
     */
    public function setAltSalesTotal(float $altSalesTotal): SalesOrder
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
     * @param bool $ignoreAvs
     * @return SalesOrder
     */
    public function setIgnoreAvs(bool $ignoreAvs): SalesOrder
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
     * @param TransactionPaymentEventResult $paymentEventResult
     * @return SalesOrder
     */
    public function setPaymentEventResult(TransactionPaymentEventResult $paymentEventResult): SalesOrder
    {
        $this->paymentEventResult = $paymentEventResult;
        return $this;
    }

    /**
     * @return TransactionPaymentEventResult
     */
    public function getPaymentEventResult(): TransactionPaymentEventResult
    {
        return $this->paymentEventResult;
    }

    /**
     * @param TransactionPaymentEventHoldReason $paymentEventHoldReason
     * @return SalesOrder
     */
    public function setPaymentEventHoldReason(TransactionPaymentEventHoldReason $paymentEventHoldReason): SalesOrder
    {
        $this->paymentEventHoldReason = $paymentEventHoldReason;
        return $this;
    }

    /**
     * @return TransactionPaymentEventHoldReason
     */
    public function getPaymentEventHoldReason(): TransactionPaymentEventHoldReason
    {
        return $this->paymentEventHoldReason;
    }

    /**
     * @param TransactionPaymentEventType $paymentEventType
     * @return SalesOrder
     */
    public function setPaymentEventType(TransactionPaymentEventType $paymentEventType): SalesOrder
    {
        $this->paymentEventType = $paymentEventType;
        return $this;
    }

    /**
     * @return TransactionPaymentEventType
     */
    public function getPaymentEventType(): TransactionPaymentEventType
    {
        return $this->paymentEventType;
    }

    /**
     * @param string $paymentEventDate
     * @return SalesOrder
     */
    public function setPaymentEventDate(string $paymentEventDate): SalesOrder
    {
        $this->paymentEventDate = $paymentEventDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentEventDate(): string
    {
        return $this->paymentEventDate;
    }

    /**
     * @param string $paymentEventUpdatedBy
     * @return SalesOrder
     */
    public function setPaymentEventUpdatedBy(string $paymentEventUpdatedBy): SalesOrder
    {
        $this->paymentEventUpdatedBy = $paymentEventUpdatedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentEventUpdatedBy(): string
    {
        return $this->paymentEventUpdatedBy;
    }

    /**
     * @param float $subTotal
     * @return SalesOrder
     */
    public function setSubTotal(float $subTotal): SalesOrder
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
     * @return SalesOrder
     */
    public function setDiscountTotal(float $discountTotal): SalesOrder
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
     * @return SalesOrder
     */
    public function setTaxTotal(float $taxTotal): SalesOrder
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
     * @return SalesOrder
     */
    public function setAltShippingCost(float $altShippingCost): SalesOrder
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
     * @return SalesOrder
     */
    public function setAltHandlingCost(float $altHandlingCost): SalesOrder
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
     * @return SalesOrder
     */
    public function setTotal(float $total): SalesOrder
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
     * @param RecordRef $revRecSchedule
     * @return SalesOrder
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): SalesOrder
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
     * @return SalesOrder
     */
    public function setRevRecStartDate(string $revRecStartDate): SalesOrder
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
     * @return SalesOrder
     */
    public function setRevRecEndDate(string $revRecEndDate): SalesOrder
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
     * @param string $paypalAuthId
     * @return SalesOrder
     */
    public function setPaypalAuthId(string $paypalAuthId): SalesOrder
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
     * @param float $balance
     * @return SalesOrder
     */
    public function setBalance(float $balance): SalesOrder
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
     * @param bool $paypalProcess
     * @return SalesOrder
     */
    public function setPaypalProcess(bool $paypalProcess): SalesOrder
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
     * @param RecordRef $billingSchedule
     * @return SalesOrder
     */
    public function setBillingSchedule(RecordRef $billingSchedule): SalesOrder
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
     * @param string $ccSecurityCode
     * @return SalesOrder
     */
    public function setCcSecurityCode(string $ccSecurityCode): SalesOrder
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
     * @param string $threeDStatusCode
     * @return SalesOrder
     */
    public function setThreeDStatusCode(string $threeDStatusCode): SalesOrder
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
     * @param RecordRef $class
     * @return SalesOrder
     */
    public function setClass(RecordRef $class): SalesOrder
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
     * @return SalesOrder
     */
    public function setDepartment(RecordRef $department): SalesOrder
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
     * @param RecordRef $subsidiary
     * @return SalesOrder
     */
    public function setSubsidiary(RecordRef $subsidiary): SalesOrder
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
     * @return SalesOrder
     */
    public function setIntercoTransaction(RecordRef $intercoTransaction): SalesOrder
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
     * @return SalesOrder
     */
    public function setIntercoStatus(IntercoStatus $intercoStatus): SalesOrder
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
     * @param string $debitCardIssueNo
     * @return SalesOrder
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): SalesOrder
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
     * @param string $lastModifiedDate
     * @return SalesOrder
     */
    public function setLastModifiedDate(string $lastModifiedDate): SalesOrder
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
     * @return SalesOrder
     */
    public function setNexus(RecordRef $nexus): SalesOrder
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
     * @return SalesOrder
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): SalesOrder
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
     * @return SalesOrder
     */
    public function setTaxRegOverride(bool $taxRegOverride): SalesOrder
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
     * @param string $taxPointDate
     * @return SalesOrder
     */
    public function setTaxPointDate(string $taxPointDate): SalesOrder
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
     * @param bool $taxDetailsOverride
     * @return SalesOrder
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): SalesOrder
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
     * @param RecordRef $location
     * @return SalesOrder
     */
    public function setLocation(RecordRef $location): SalesOrder
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
     * @param string $pnRefNum
     * @return SalesOrder
     */
    public function setPnRefNum(string $pnRefNum): SalesOrder
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
     * @param string $status
     * @return SalesOrder
     */
    public function setStatus(string $status): SalesOrder
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
     * @param RecordRef $terms
     * @return SalesOrder
     */
    public function setTerms(RecordRef $terms): SalesOrder
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
     * @param string $validFrom
     * @return SalesOrder
     */
    public function setValidFrom(string $validFrom): SalesOrder
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
     * @return SalesOrder
     */
    public function setVatRegNum(string $vatRegNum): SalesOrder
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
     * @return SalesOrder
     */
    public function setGiftCertApplied(float $giftCertApplied): SalesOrder
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
     * @param float $oneTime
     * @return SalesOrder
     */
    public function setOneTime(float $oneTime): SalesOrder
    {
        $this->oneTime = $oneTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getOneTime(): float
    {
        return $this->oneTime;
    }

    /**
     * @param float $recurWeekly
     * @return SalesOrder
     */
    public function setRecurWeekly(float $recurWeekly): SalesOrder
    {
        $this->recurWeekly = $recurWeekly;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecurWeekly(): float
    {
        return $this->recurWeekly;
    }

    /**
     * @param float $recurMonthly
     * @return SalesOrder
     */
    public function setRecurMonthly(float $recurMonthly): SalesOrder
    {
        $this->recurMonthly = $recurMonthly;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecurMonthly(): float
    {
        return $this->recurMonthly;
    }

    /**
     * @param float $recurQuarterly
     * @return SalesOrder
     */
    public function setRecurQuarterly(float $recurQuarterly): SalesOrder
    {
        $this->recurQuarterly = $recurQuarterly;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecurQuarterly(): float
    {
        return $this->recurQuarterly;
    }

    /**
     * @param float $recurAnnually
     * @return SalesOrder
     */
    public function setRecurAnnually(float $recurAnnually): SalesOrder
    {
        $this->recurAnnually = $recurAnnually;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecurAnnually(): float
    {
        return $this->recurAnnually;
    }

    /**
     * @param bool $tranIsVsoeBundle
     * @return SalesOrder
     */
    public function setTranIsVsoeBundle(bool $tranIsVsoeBundle): SalesOrder
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
     * @return SalesOrder
     */
    public function setVsoeAutoCalc(bool $vsoeAutoCalc): SalesOrder
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
     * @return SalesOrder
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): SalesOrder
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
     * @param SalesOrderSalesTeamList $salesTeamList
     * @return SalesOrder
     */
    public function setSalesTeamList(SalesOrderSalesTeamList $salesTeamList): SalesOrder
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return SalesOrderSalesTeamList
     */
    public function getSalesTeamList(): SalesOrderSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param SalesOrderPartnersList $partnersList
     * @return SalesOrder
     */
    public function setPartnersList(SalesOrderPartnersList $partnersList): SalesOrder
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return SalesOrderPartnersList
     */
    public function getPartnersList(): SalesOrderPartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return SalesOrder
     */
    public function setGiftCertRedemptionList(GiftCertRedemptionList $giftCertRedemptionList): SalesOrder
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
     * @return SalesOrder
     */
    public function setPromotionsList(PromotionsList $promotionsList): SalesOrder
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
     * @param SalesOrderItemList $itemList
     * @return SalesOrder
     */
    public function setItemList(SalesOrderItemList $itemList): SalesOrder
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return SalesOrderItemList
     */
    public function getItemList(): SalesOrderItemList
    {
        return $this->itemList;
    }

    /**
     * @param SalesOrderShipGroupList $shipGroupList
     * @return SalesOrder
     */
    public function setShipGroupList(SalesOrderShipGroupList $shipGroupList): SalesOrder
    {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * @return SalesOrderShipGroupList
     */
    public function getShipGroupList(): SalesOrderShipGroupList
    {
        return $this->shipGroupList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return SalesOrder
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): SalesOrder
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
     * @return SalesOrder
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): SalesOrder
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
     * @return SalesOrder
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): SalesOrder
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
     * @return SalesOrder
     */
    public function setInternalId(string $internalId): SalesOrder
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
     * @return SalesOrder
     */
    public function setExternalId(string $externalId): SalesOrder
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
