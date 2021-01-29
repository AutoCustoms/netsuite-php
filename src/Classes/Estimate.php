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

class Estimate extends Record {
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
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $job;

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
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var RecordRef
     */
    protected RecordRef $entityStatus;

    /**
     * @var float
     */
    protected float $probability;

    /**
     * @var bool
     */
    protected bool $includeInForecast;

    /**
     * @var RecordRef
     */
    protected RecordRef $forecastType;

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
     * @var string
     */
    protected string $dueDate;

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
    protected RecordRef $billingSchedule;

    /**
     * @var string
     */
    protected string $status;

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
     * @var RecordRef
     */
    protected RecordRef $leadSource;

    /**
     * @var string
     */
    protected string $expectedCloseDate;

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
    protected string $endDate;

    /**
     * @var string
     */
    protected string $startDate;

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
    protected RecordRef $createdFrom;

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
     * @var string
     */
    protected string $vatRegNum;

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
     * @var bool
     */
    protected bool $visibleToCustomer;

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
    /**
     * @var RecordRef
     */
    protected RecordRef $shippingTaxCode;

    protected $shippingTax2Rate;
    /**
     * @var RecordRef
     */
    protected RecordRef $handlingTaxCode;

    protected $handlingTax1Rate;
    /**
     * @var float
     */
    protected float $handlingCost;

    /**
     * @var string
     */
    protected string $trackingNumbers;

    protected $handlingTax2Rate;
    /**
     * @var string
     */
    protected string $linkedTrackingNumbers;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesGroup;

    /**
     * @var bool
     */
    protected bool $syncSalesTeams;

    /**
     * @var float
     */
    protected float $altSalesTotal;

    /**
     * @var bool
     */
    protected bool $canHaveStackable;

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

    protected $tax2Total;
    /**
     * @var EstimateItemList
     */
    protected EstimateItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var EstimateSalesTeamList
     */
    protected EstimateSalesTeamList $salesTeamList;

    /**
     * @var bool
     */
    protected bool $syncPartnerTeams;

    /**
     * @var EstimatePartnersList
     */
    protected EstimatePartnersList $partnersList;

    /**
     * @var PromotionsList
     */
    protected PromotionsList $promotionsList;

    /**
     * @var EstimateShipGroupList
     */
    protected EstimateShipGroupList $shipGroupList;

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
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "source" => "string",
        "customForm" => "RecordRef",
        "currency" => "RecordRef",
        "title" => "string",
        "entityStatus" => "RecordRef",
        "probability" => "float",
        "includeInForecast" => "boolean",
        "forecastType" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "status" => "string",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "contribPct" => "string",
        "leadSource" => "RecordRef",
        "expectedCloseDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "endDate" => "dateTime",
        "startDate" => "dateTime",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "createdFrom" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "vatRegNum" => "string",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "visibleToCustomer" => "boolean",
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
        "shippingTaxCode" => "RecordRef",
        "shippingTax2Rate" => "string",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "handlingTax2Rate" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "altSalesTotal" => "float",
        "canHaveStackable" => "boolean",
        "oneTime" => "float",
        "recurWeekly" => "float",
        "recurMonthly" => "float",
        "recurQuarterly" => "float",
        "recurAnnually" => "float",
        "subTotal" => "float",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "tax2Total" => "float",
        "itemList" => "EstimateItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "EstimateSalesTeamList",
        "syncPartnerTeams" => "boolean",
        "partnersList" => "EstimatePartnersList",
        "promotionsList" => "PromotionsList",
        "shipGroupList" => "EstimateShipGroupList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return Estimate
     */
    public function setCreatedDate(string $createdDate): Estimate
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
     * @return Estimate
     */
    public function setLastModifiedDate(string $lastModifiedDate): Estimate
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
     * @return Estimate
     */
    public function setNexus(RecordRef $nexus): Estimate
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
     * @return Estimate
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): Estimate
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
     * @return Estimate
     */
    public function setTaxRegOverride(bool $taxRegOverride): Estimate
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
     * @return Estimate
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): Estimate
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
     * @param RecordRef $entity
     * @return Estimate
     */
    public function setEntity(RecordRef $entity): Estimate
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
     * @return Estimate
     */
    public function setJob(RecordRef $job): Estimate
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
     * @param string $tranDate
     * @return Estimate
     */
    public function setTranDate(string $tranDate): Estimate
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
     * @return Estimate
     */
    public function setTranId(string $tranId): Estimate
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
     * @return Estimate
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): Estimate
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
     * @return Estimate
     */
    public function setTaxPointDate(string $taxPointDate): Estimate
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
     * @return Estimate
     */
    public function setSource(string $source): Estimate
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
     * @param RecordRef $customForm
     * @return Estimate
     */
    public function setCustomForm(RecordRef $customForm): Estimate
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
     * @return Estimate
     */
    public function setCurrency(RecordRef $currency): Estimate
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
     * @param string $title
     * @return Estimate
     */
    public function setTitle(string $title): Estimate
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param RecordRef $entityStatus
     * @return Estimate
     */
    public function setEntityStatus(RecordRef $entityStatus): Estimate
    {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityStatus(): RecordRef
    {
        return $this->entityStatus;
    }

    /**
     * @param float $probability
     * @return Estimate
     */
    public function setProbability(float $probability): Estimate
    {
        $this->probability = $probability;
        return $this;
    }

    /**
     * @return float
     */
    public function getProbability(): float
    {
        return $this->probability;
    }

    /**
     * @param bool $includeInForecast
     * @return Estimate
     */
    public function setIncludeInForecast(bool $includeInForecast): Estimate
    {
        $this->includeInForecast = $includeInForecast;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeInForecast(): bool
    {
        return $this->includeInForecast;
    }

    /**
     * @param RecordRef $forecastType
     * @return Estimate
     */
    public function setForecastType(RecordRef $forecastType): Estimate
    {
        $this->forecastType = $forecastType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getForecastType(): RecordRef
    {
        return $this->forecastType;
    }

    /**
     * @param RecordRef $opportunity
     * @return Estimate
     */
    public function setOpportunity(RecordRef $opportunity): Estimate
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
     * @return Estimate
     */
    public function setDepartment(RecordRef $department): Estimate
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
     * @return Estimate
     */
    public function setClass(RecordRef $class): Estimate
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
     * @return Estimate
     */
    public function setTerms(RecordRef $terms): Estimate
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
     * @return Estimate
     */
    public function setDueDate(string $dueDate): Estimate
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
     * @param RecordRef $location
     * @return Estimate
     */
    public function setLocation(RecordRef $location): Estimate
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
     * @return Estimate
     */
    public function setSubsidiary(RecordRef $subsidiary): Estimate
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
     * @param RecordRef $billingSchedule
     * @return Estimate
     */
    public function setBillingSchedule(RecordRef $billingSchedule): Estimate
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
     * @param string $status
     * @return Estimate
     */
    public function setStatus(string $status): Estimate
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
     * @param RecordRef $salesRep
     * @return Estimate
     */
    public function setSalesRep(RecordRef $salesRep): Estimate
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
     * @return Estimate
     */
    public function setPartner(RecordRef $partner): Estimate
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
     * @return Estimate
     */
    public function setContribPct(string $contribPct): Estimate
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
     * @param RecordRef $leadSource
     * @return Estimate
     */
    public function setLeadSource(RecordRef $leadSource): Estimate
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
     * @param string $expectedCloseDate
     * @return Estimate
     */
    public function setExpectedCloseDate(string $expectedCloseDate): Estimate
    {
        $this->expectedCloseDate = $expectedCloseDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedCloseDate(): string
    {
        return $this->expectedCloseDate;
    }

    /**
     * @param string $otherRefNum
     * @return Estimate
     */
    public function setOtherRefNum(string $otherRefNum): Estimate
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
     * @return Estimate
     */
    public function setMemo(string $memo): Estimate
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
     * @param string $endDate
     * @return Estimate
     */
    public function setEndDate(string $endDate): Estimate
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
     * @param string $startDate
     * @return Estimate
     */
    public function setStartDate(string $startDate): Estimate
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
     * @param float $totalCostEstimate
     * @return Estimate
     */
    public function setTotalCostEstimate(float $totalCostEstimate): Estimate
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
     * @return Estimate
     */
    public function setEstGrossProfit(float $estGrossProfit): Estimate
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
     * @return Estimate
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): Estimate
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
     * @param RecordRef $createdFrom
     * @return Estimate
     */
    public function setCreatedFrom(RecordRef $createdFrom): Estimate
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
     * @param float $exchangeRate
     * @return Estimate
     */
    public function setExchangeRate(float $exchangeRate): Estimate
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
     * @return Estimate
     */
    public function setCurrencyName(string $currencyName): Estimate
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
     * @return Estimate
     */
    public function setPromoCode(RecordRef $promoCode): Estimate
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
     * @return Estimate
     */
    public function setDiscountItem(RecordRef $discountItem): Estimate
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
     * @return Estimate
     */
    public function setDiscountRate(string $discountRate): Estimate
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
     * @return Estimate
     */
    public function setIsTaxable(bool $isTaxable): Estimate
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
     * @return Estimate
     */
    public function setTaxItem(RecordRef $taxItem): Estimate
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
     * @return Estimate
     */
    public function setTaxRate(float $taxRate): Estimate
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
     * @param string $vatRegNum
     * @return Estimate
     */
    public function setVatRegNum(string $vatRegNum): Estimate
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
     * @param bool $toBePrinted
     * @return Estimate
     */
    public function setToBePrinted(bool $toBePrinted): Estimate
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
     * @return Estimate
     */
    public function setToBeEmailed(bool $toBeEmailed): Estimate
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
     * @return Estimate
     */
    public function setEmail(string $email): Estimate
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
     * @return Estimate
     */
    public function setToBeFaxed(bool $toBeFaxed): Estimate
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
     * @return Estimate
     */
    public function setFax(string $fax): Estimate
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
     * @param bool $visibleToCustomer
     * @return Estimate
     */
    public function setVisibleToCustomer(bool $visibleToCustomer): Estimate
    {
        $this->visibleToCustomer = $visibleToCustomer;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVisibleToCustomer(): bool
    {
        return $this->visibleToCustomer;
    }

    /**
     * @param RecordRef $messageSel
     * @return Estimate
     */
    public function setMessageSel(RecordRef $messageSel): Estimate
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
     * @return Estimate
     */
    public function setMessage(string $message): Estimate
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
     * @return Estimate
     */
    public function setBillingAddress(Address $billingAddress): Estimate
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
     * @return Estimate
     */
    public function setBillAddressList(RecordRef $billAddressList): Estimate
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
     * @return Estimate
     */
    public function setShippingAddress(Address $shippingAddress): Estimate
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
     * @return Estimate
     */
    public function setShipIsResidential(bool $shipIsResidential): Estimate
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
     * @return Estimate
     */
    public function setShipAddressList(RecordRef $shipAddressList): Estimate
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
     * @return Estimate
     */
    public function setFob(string $fob): Estimate
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
     * @return Estimate
     */
    public function setShipDate(string $shipDate): Estimate
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
     * @return Estimate
     */
    public function setShipMethod(RecordRef $shipMethod): Estimate
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
     * @return Estimate
     */
    public function setShippingCost(float $shippingCost): Estimate
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
     * @return Estimate
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): Estimate
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
     * @return Estimate
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): Estimate
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
     * @return Estimate
     */
    public function setHandlingCost(float $handlingCost): Estimate
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
     * @return Estimate
     */
    public function setTrackingNumbers(string $trackingNumbers): Estimate
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
     * @return Estimate
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): Estimate
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
     * @return Estimate
     */
    public function setSalesGroup(RecordRef $salesGroup): Estimate
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
     * @return Estimate
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): Estimate
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
     * @param float $altSalesTotal
     * @return Estimate
     */
    public function setAltSalesTotal(float $altSalesTotal): Estimate
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
     * @param bool $canHaveStackable
     * @return Estimate
     */
    public function setCanHaveStackable(bool $canHaveStackable): Estimate
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
     * @param float $oneTime
     * @return Estimate
     */
    public function setOneTime(float $oneTime): Estimate
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
     * @return Estimate
     */
    public function setRecurWeekly(float $recurWeekly): Estimate
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
     * @return Estimate
     */
    public function setRecurMonthly(float $recurMonthly): Estimate
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
     * @return Estimate
     */
    public function setRecurQuarterly(float $recurQuarterly): Estimate
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
     * @return Estimate
     */
    public function setRecurAnnually(float $recurAnnually): Estimate
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
     * @param float $subTotal
     * @return Estimate
     */
    public function setSubTotal(float $subTotal): Estimate
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
     * @return Estimate
     */
    public function setDiscountTotal(float $discountTotal): Estimate
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
     * @return Estimate
     */
    public function setTaxTotal(float $taxTotal): Estimate
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
     * @return Estimate
     */
    public function setAltShippingCost(float $altShippingCost): Estimate
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
     * @return Estimate
     */
    public function setAltHandlingCost(float $altHandlingCost): Estimate
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
     * @return Estimate
     */
    public function setTotal(float $total): Estimate
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
     * @param EstimateItemList $itemList
     * @return Estimate
     */
    public function setItemList(EstimateItemList $itemList): Estimate
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return EstimateItemList
     */
    public function getItemList(): EstimateItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return Estimate
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): Estimate
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
     * @param EstimateSalesTeamList $salesTeamList
     * @return Estimate
     */
    public function setSalesTeamList(EstimateSalesTeamList $salesTeamList): Estimate
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return EstimateSalesTeamList
     */
    public function getSalesTeamList(): EstimateSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param bool $syncPartnerTeams
     * @return Estimate
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): Estimate
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
     * @param EstimatePartnersList $partnersList
     * @return Estimate
     */
    public function setPartnersList(EstimatePartnersList $partnersList): Estimate
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return EstimatePartnersList
     */
    public function getPartnersList(): EstimatePartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param PromotionsList $promotionsList
     * @return Estimate
     */
    public function setPromotionsList(PromotionsList $promotionsList): Estimate
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
     * @param EstimateShipGroupList $shipGroupList
     * @return Estimate
     */
    public function setShipGroupList(EstimateShipGroupList $shipGroupList): Estimate
    {
        $this->shipGroupList = $shipGroupList;
        return $this;
    }

    /**
     * @return EstimateShipGroupList
     */
    public function getShipGroupList(): EstimateShipGroupList
    {
        return $this->shipGroupList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return Estimate
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): Estimate
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
     * @return Estimate
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Estimate
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
     * @return Estimate
     */
    public function setInternalId(string $internalId): Estimate
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
     * @return Estimate
     */
    public function setExternalId(string $externalId): Estimate
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
