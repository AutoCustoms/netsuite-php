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

class Invoice extends Record {
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
    protected RecordRef $nextApprover;

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
     * @var float
     */
    protected float $amountPaid;

    /**
     * @var float
     */
    protected float $amountRemaining;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var string
     */
    protected string $onCreditHold;

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
     * @var bool
     */
    protected bool $canHaveStackable;

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
    protected string $vatRegNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $expCostDiscount;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemCostDiscount;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeDiscount;

    /**
     * @var string
     */
    protected string $expCostDiscRate;

    /**
     * @var string
     */
    protected string $itemCostDiscRate;

    /**
     * @var string
     */
    protected string $timeDiscRate;

    /**
     * @var float
     */
    protected float $expCostDiscAmount;

    protected $expCostTaxRate1;
    protected $expCostTaxRate2;
    /**
     * @var float
     */
    protected float $itemCostDiscAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $expCostTaxCode;

    protected $expCostDiscTax1Amt;
    protected $itemCostTaxRate1;
    /**
     * @var float
     */
    protected float $timeDiscAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemCostTaxCode;

    /**
     * @var bool
     */
    protected bool $expCostDiscTaxable;

    /**
     * @var bool
     */
    protected bool $itemCostDiscTaxable;

    protected $itemCostTaxRate2;
    protected $itemCostDiscTax1Amt;
    /**
     * @var bool
     */
    protected bool $itemCostDiscPrint;

    /**
     * @var bool
     */
    protected bool $timeDiscTaxable;

    protected $timeTaxRate1;
    /**
     * @var bool
     */
    protected bool $expCostDiscPrint;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeTaxCode;

    /**
     * @var bool
     */
    protected bool $timeDiscPrint;

    /**
     * @var float
     */
    protected float $giftCertApplied;

    protected $timeDiscTax1Amt;
    /**
     * @var bool
     */
    protected bool $tranIsVsoeBundle;

    protected $timeTaxRate2;
    /**
     * @var bool
     */
    protected bool $vsoeAutoCalc;

    /**
     * @var bool
     */
    protected bool $syncPartnerTeams;

    /**
     * @var InvoiceSalesTeamList
     */
    protected InvoiceSalesTeamList $salesTeamList;

    /**
     * @var InvoicePartnersList
     */
    protected InvoicePartnersList $partnersList;

    /**
     * @var InvoiceItemList
     */
    protected InvoiceItemList $itemList;

    /**
     * @var InvoiceItemCostList
     */
    protected InvoiceItemCostList $itemCostList;

    /**
     * @var GiftCertRedemptionList
     */
    protected GiftCertRedemptionList $giftCertRedemptionList;

    /**
     * @var PromotionsList
     */
    protected PromotionsList $promotionsList;

    /**
     * @var InvoiceExpCostList
     */
    protected InvoiceExpCostList $expCostList;

    /**
     * @var InvoiceTimeList
     */
    protected InvoiceTimeList $timeList;

    /**
     * @var InvoiceShipGroupList
     */
    protected InvoiceShipGroupList $shipGroupList;

    /**
     * @var RecordRef
     */
    protected RecordRef $approvalStatus;

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
        "nextApprover" => "RecordRef",
        "entity" => "RecordRef",
        "billingAccount" => "RecordRef",
        "recurringBill" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
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
        "contribPct" => "string",
        "partner" => "RecordRef",
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
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "amountPaid" => "float",
        "amountRemaining" => "float",
        "balance" => "float",
        "account" => "RecordRef",
        "onCreditHold" => "string",
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
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "subTotal" => "float",
        "canHaveStackable" => "boolean",
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
        "billingSchedule" => "RecordRef",
        "email" => "string",
        "tax2Total" => "float",
        "vatRegNum" => "string",
        "expCostDiscount" => "RecordRef",
        "itemCostDiscount" => "RecordRef",
        "timeDiscount" => "RecordRef",
        "expCostDiscRate" => "string",
        "itemCostDiscRate" => "string",
        "timeDiscRate" => "string",
        "expCostDiscAmount" => "float",
        "expCostTaxRate1" => "float",
        "expCostTaxRate2" => "float",
        "itemCostDiscAmount" => "float",
        "expCostTaxCode" => "RecordRef",
        "expCostDiscTax1Amt" => "float",
        "itemCostTaxRate1" => "float",
        "timeDiscAmount" => "float",
        "itemCostTaxCode" => "RecordRef",
        "expCostDiscTaxable" => "boolean",
        "itemCostDiscTaxable" => "boolean",
        "itemCostTaxRate2" => "float",
        "itemCostDiscTax1Amt" => "float",
        "itemCostDiscPrint" => "boolean",
        "timeDiscTaxable" => "boolean",
        "timeTaxRate1" => "float",
        "expCostDiscPrint" => "boolean",
        "timeTaxCode" => "RecordRef",
        "timeDiscPrint" => "boolean",
        "giftCertApplied" => "float",
        "timeDiscTax1Amt" => "float",
        "tranIsVsoeBundle" => "boolean",
        "timeTaxRate2" => "float",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "InvoiceSalesTeamList",
        "partnersList" => "InvoicePartnersList",
        "itemList" => "InvoiceItemList",
        "itemCostList" => "InvoiceItemCostList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "promotionsList" => "PromotionsList",
        "expCostList" => "InvoiceExpCostList",
        "timeList" => "InvoiceTimeList",
        "shipGroupList" => "InvoiceShipGroupList",
        "approvalStatus" => "RecordRef",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return Invoice
     */
    public function setCreatedDate(string $createdDate): Invoice
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
     * @return Invoice
     */
    public function setLastModifiedDate(string $lastModifiedDate): Invoice
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
     * @return Invoice
     */
    public function setNexus(RecordRef $nexus): Invoice
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
     * @return Invoice
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): Invoice
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
     * @return Invoice
     */
    public function setTaxRegOverride(bool $taxRegOverride): Invoice
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
     * @return Invoice
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): Invoice
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
     * @return Invoice
     */
    public function setCustomForm(RecordRef $customForm): Invoice
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
     * @param RecordRef $nextApprover
     * @return Invoice
     */
    public function setNextApprover(RecordRef $nextApprover): Invoice
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
     * @param RecordRef $entity
     * @return Invoice
     */
    public function setEntity(RecordRef $entity): Invoice
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
     * @return Invoice
     */
    public function setBillingAccount(RecordRef $billingAccount): Invoice
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
     * @return Invoice
     */
    public function setRecurringBill(bool $recurringBill): Invoice
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
     * @return Invoice
     */
    public function setTranDate(string $tranDate): Invoice
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
     * @return Invoice
     */
    public function setTranId(string $tranId): Invoice
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
     * @return Invoice
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): Invoice
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
     * @return Invoice
     */
    public function setTaxPointDate(string $taxPointDate): Invoice
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
     * @return Invoice
     */
    public function setSource(string $source): Invoice
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
     * @return Invoice
     */
    public function setCreatedFrom(RecordRef $createdFrom): Invoice
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
     * @return Invoice
     */
    public function setPostingPeriod(RecordRef $postingPeriod): Invoice
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
     * @return Invoice
     */
    public function setOpportunity(RecordRef $opportunity): Invoice
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
     * @return Invoice
     */
    public function setDepartment(RecordRef $department): Invoice
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
     * @return Invoice
     */
    public function setClass(RecordRef $class): Invoice
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
     * @return Invoice
     */
    public function setTerms(RecordRef $terms): Invoice
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
     * @return Invoice
     */
    public function setLocation(RecordRef $location): Invoice
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
     * @return Invoice
     */
    public function setSubsidiary(RecordRef $subsidiary): Invoice
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
     * @return Invoice
     */
    public function setCurrency(RecordRef $currency): Invoice
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
     * @return Invoice
     */
    public function setDueDate(string $dueDate): Invoice
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
     * @return Invoice
     */
    public function setDiscountDate(string $discountDate): Invoice
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
     * @return Invoice
     */
    public function setDiscountAmount(float $discountAmount): Invoice
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
     * @return Invoice
     */
    public function setSalesRep(RecordRef $salesRep): Invoice
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
     * @return Invoice
     */
    public function setContribPct(string $contribPct): Invoice
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
     * @return Invoice
     */
    public function setPartner(RecordRef $partner): Invoice
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
     * @return Invoice
     */
    public function setLeadSource(RecordRef $leadSource): Invoice
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
     * @return Invoice
     */
    public function setStartDate(string $startDate): Invoice
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
     * @return Invoice
     */
    public function setEndDate(string $endDate): Invoice
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
     * @return Invoice
     */
    public function setOtherRefNum(string $otherRefNum): Invoice
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
     * @return Invoice
     */
    public function setMemo(string $memo): Invoice
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
     * @return Invoice
     */
    public function setSalesEffectiveDate(string $salesEffectiveDate): Invoice
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
     * @return Invoice
     */
    public function setExcludeCommission(bool $excludeCommission): Invoice
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
     * @return Invoice
     */
    public function setTotalCostEstimate(float $totalCostEstimate): Invoice
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
     * @return Invoice
     */
    public function setEstGrossProfit(float $estGrossProfit): Invoice
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
     * @return Invoice
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): Invoice
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
     * @return Invoice
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): Invoice
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
     * @return Invoice
     */
    public function setRevRecStartDate(string $revRecStartDate): Invoice
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
     * @return Invoice
     */
    public function setRevRecEndDate(string $revRecEndDate): Invoice
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
     * @param float $amountPaid
     * @return Invoice
     */
    public function setAmountPaid(float $amountPaid): Invoice
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
     * @param float $amountRemaining
     * @return Invoice
     */
    public function setAmountRemaining(float $amountRemaining): Invoice
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
     * @param float $balance
     * @return Invoice
     */
    public function setBalance(float $balance): Invoice
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
     * @return Invoice
     */
    public function setAccount(RecordRef $account): Invoice
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
     * @param string $onCreditHold
     * @return Invoice
     */
    public function setOnCreditHold(string $onCreditHold): Invoice
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
     * @param float $exchangeRate
     * @return Invoice
     */
    public function setExchangeRate(float $exchangeRate): Invoice
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
     * @return Invoice
     */
    public function setCurrencyName(string $currencyName): Invoice
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
     * @return Invoice
     */
    public function setPromoCode(RecordRef $promoCode): Invoice
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
     * @return Invoice
     */
    public function setDiscountItem(RecordRef $discountItem): Invoice
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
     * @return Invoice
     */
    public function setDiscountRate(string $discountRate): Invoice
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
     * @return Invoice
     */
    public function setIsTaxable(bool $isTaxable): Invoice
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
     * @return Invoice
     */
    public function setTaxItem(RecordRef $taxItem): Invoice
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
     * @return Invoice
     */
    public function setTaxRate(float $taxRate): Invoice
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
     * @return Invoice
     */
    public function setToBePrinted(bool $toBePrinted): Invoice
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
     * @return Invoice
     */
    public function setToBeEmailed(bool $toBeEmailed): Invoice
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
     * @return Invoice
     */
    public function setToBeFaxed(bool $toBeFaxed): Invoice
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
     * @return Invoice
     */
    public function setFax(string $fax): Invoice
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
     * @return Invoice
     */
    public function setMessageSel(RecordRef $messageSel): Invoice
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
     * @return Invoice
     */
    public function setMessage(string $message): Invoice
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
     * @return Invoice
     */
    public function setBillingAddress(Address $billingAddress): Invoice
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
     * @return Invoice
     */
    public function setBillAddressList(RecordRef $billAddressList): Invoice
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
     * @return Invoice
     */
    public function setShippingAddress(Address $shippingAddress): Invoice
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
     * @return Invoice
     */
    public function setShipIsResidential(bool $shipIsResidential): Invoice
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
     * @return Invoice
     */
    public function setShipAddressList(RecordRef $shipAddressList): Invoice
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
     * @return Invoice
     */
    public function setFob(string $fob): Invoice
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
     * @return Invoice
     */
    public function setShipDate(string $shipDate): Invoice
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
     * @return Invoice
     */
    public function setShipMethod(RecordRef $shipMethod): Invoice
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
     * @return Invoice
     */
    public function setShippingCost(float $shippingCost): Invoice
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
     * @return Invoice
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): Invoice
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
     * @return Invoice
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): Invoice
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
     * @return Invoice
     */
    public function setHandlingCost(float $handlingCost): Invoice
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
     * @return Invoice
     */
    public function setTrackingNumbers(string $trackingNumbers): Invoice
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
     * @return Invoice
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): Invoice
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
     * @return Invoice
     */
    public function setSalesGroup(RecordRef $salesGroup): Invoice
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
     * @return Invoice
     */
    public function setSubTotal(float $subTotal): Invoice
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
     * @param bool $canHaveStackable
     * @return Invoice
     */
    public function setCanHaveStackable(bool $canHaveStackable): Invoice
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
     * @param RevenueStatus $revenueStatus
     * @return Invoice
     */
    public function setRevenueStatus(RevenueStatus $revenueStatus): Invoice
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
     * @return Invoice
     */
    public function setRecognizedRevenue(float $recognizedRevenue): Invoice
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
     * @return Invoice
     */
    public function setDeferredRevenue(float $deferredRevenue): Invoice
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
     * @return Invoice
     */
    public function setRevRecOnRevCommitment(bool $revRecOnRevCommitment): Invoice
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
     * @return Invoice
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): Invoice
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
     * @return Invoice
     */
    public function setDiscountTotal(float $discountTotal): Invoice
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
     * @return Invoice
     */
    public function setTaxTotal(float $taxTotal): Invoice
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
     * @return Invoice
     */
    public function setAltShippingCost(float $altShippingCost): Invoice
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
     * @return Invoice
     */
    public function setAltHandlingCost(float $altHandlingCost): Invoice
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
     * @return Invoice
     */
    public function setTotal(float $total): Invoice
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
     * @return Invoice
     */
    public function setStatus(string $status): Invoice
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
     * @return Invoice
     */
    public function setJob(RecordRef $job): Invoice
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
     * @return Invoice
     */
    public function setBillingSchedule(RecordRef $billingSchedule): Invoice
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
     * @return Invoice
     */
    public function setEmail(string $email): Invoice
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
     * @param string $vatRegNum
     * @return Invoice
     */
    public function setVatRegNum(string $vatRegNum): Invoice
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
     * @param RecordRef $expCostDiscount
     * @return Invoice
     */
    public function setExpCostDiscount(RecordRef $expCostDiscount): Invoice
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
     * @param RecordRef $itemCostDiscount
     * @return Invoice
     */
    public function setItemCostDiscount(RecordRef $itemCostDiscount): Invoice
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
     * @param RecordRef $timeDiscount
     * @return Invoice
     */
    public function setTimeDiscount(RecordRef $timeDiscount): Invoice
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
     * @param string $expCostDiscRate
     * @return Invoice
     */
    public function setExpCostDiscRate(string $expCostDiscRate): Invoice
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
     * @param string $itemCostDiscRate
     * @return Invoice
     */
    public function setItemCostDiscRate(string $itemCostDiscRate): Invoice
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
     * @param string $timeDiscRate
     * @return Invoice
     */
    public function setTimeDiscRate(string $timeDiscRate): Invoice
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
     * @param float $expCostDiscAmount
     * @return Invoice
     */
    public function setExpCostDiscAmount(float $expCostDiscAmount): Invoice
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
     * @param float $itemCostDiscAmount
     * @return Invoice
     */
    public function setItemCostDiscAmount(float $itemCostDiscAmount): Invoice
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
     * @param RecordRef $expCostTaxCode
     * @return Invoice
     */
    public function setExpCostTaxCode(RecordRef $expCostTaxCode): Invoice
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
     * @param float $timeDiscAmount
     * @return Invoice
     */
    public function setTimeDiscAmount(float $timeDiscAmount): Invoice
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
     * @param RecordRef $itemCostTaxCode
     * @return Invoice
     */
    public function setItemCostTaxCode(RecordRef $itemCostTaxCode): Invoice
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
     * @param bool $expCostDiscTaxable
     * @return Invoice
     */
    public function setExpCostDiscTaxable(bool $expCostDiscTaxable): Invoice
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
     * @param bool $itemCostDiscTaxable
     * @return Invoice
     */
    public function setItemCostDiscTaxable(bool $itemCostDiscTaxable): Invoice
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
     * @param bool $itemCostDiscPrint
     * @return Invoice
     */
    public function setItemCostDiscPrint(bool $itemCostDiscPrint): Invoice
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
     * @param bool $timeDiscTaxable
     * @return Invoice
     */
    public function setTimeDiscTaxable(bool $timeDiscTaxable): Invoice
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
     * @param bool $expCostDiscPrint
     * @return Invoice
     */
    public function setExpCostDiscPrint(bool $expCostDiscPrint): Invoice
    {
        $this->expCostDiscPrint = $expCostDiscPrint;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExpCostDiscPrint(): bool
    {
        return $this->expCostDiscPrint;
    }

    /**
     * @param RecordRef $timeTaxCode
     * @return Invoice
     */
    public function setTimeTaxCode(RecordRef $timeTaxCode): Invoice
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
     * @param bool $timeDiscPrint
     * @return Invoice
     */
    public function setTimeDiscPrint(bool $timeDiscPrint): Invoice
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
     * @param float $giftCertApplied
     * @return Invoice
     */
    public function setGiftCertApplied(float $giftCertApplied): Invoice
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
     * @return Invoice
     */
    public function setTranIsVsoeBundle(bool $tranIsVsoeBundle): Invoice
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
     * @return Invoice
     */
    public function setVsoeAutoCalc(bool $vsoeAutoCalc): Invoice
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
     * @return Invoice
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): Invoice
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
     * @param InvoiceSalesTeamList $salesTeamList
     * @return Invoice
     */
    public function setSalesTeamList(InvoiceSalesTeamList $salesTeamList): Invoice
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return InvoiceSalesTeamList
     */
    public function getSalesTeamList(): InvoiceSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param InvoicePartnersList $partnersList
     * @return Invoice
     */
    public function setPartnersList(InvoicePartnersList $partnersList): Invoice
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return InvoicePartnersList
     */
    public function getPartnersList(): InvoicePartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param InvoiceItemList $itemList
     * @return Invoice
     */
    public function setItemList(InvoiceItemList $itemList): Invoice
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return InvoiceItemList
     */
    public function getItemList(): InvoiceItemList
    {
        return $this->itemList;
    }

    /**
     * @param InvoiceItemCostList $itemCostList
     * @return Invoice
     */
    public function setItemCostList(InvoiceItemCostList $itemCostList): Invoice
    {
        $this->itemCostList = $itemCostList;
        return $this;
    }

    /**
     * @return InvoiceItemCostList
     */
    public function getItemCostList(): InvoiceItemCostList
    {
        return $this->itemCostList;
    }

    /**
     * @param GiftCertRedemptionList $giftCertRedemptionList
     * @return Invoice
     */
    public function setGiftCertRedemptionList(GiftCertRedemptionList $giftCertRedemptionList): Invoice
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
     * @return Invoice
     */
    public function setPromotionsList(PromotionsList $promotionsList): Invoice
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
     * @param InvoiceExpCostList $expCostList
     * @return Invoice
     */
    public function setExpCostList(InvoiceExpCostList $expCostList): Invoice
    {
        $this->expCostList = $expCostList;
        return $this;
    }

    /**
     * @return InvoiceExpCostList
     */
    public function getExpCostList(): InvoiceExpCostList
    {
        return $this->expCostList;
    }

    /**
     * @param InvoiceTimeList $timeList
     * @return Invoice
     */
    public function setTimeList(InvoiceTimeList $timeList): Invoice
    {
        $this->timeList = $timeList;
        return $this;
    }

    /**
     * @return InvoiceTimeList
     */
    public function getTimeList(): InvoiceTimeList
    {
        return $this->timeList;
    }

    /**
     * @param InvoiceShipGroupList $shipGroupList
     * @return Invoice
     */
    public function setShipGroupList(InvoiceShipGroupList $shipGroupList): Invoice
    {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * @return InvoiceShipGroupList
     */
    public function getShipGroupList(): InvoiceShipGroupList
    {
        return $this->shipGroupList;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return Invoice
     */
    public function setApprovalStatus(RecordRef $approvalStatus): Invoice
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
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return Invoice
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): Invoice
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
     * @return Invoice
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): Invoice
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
     * @return Invoice
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Invoice
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
     * @return Invoice
     */
    public function setInternalId(string $internalId): Invoice
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
     * @return Invoice
     */
    public function setExternalId(string $externalId): Invoice
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
