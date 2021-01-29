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

class Opportunity extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $estimatedBudget;

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
    protected string $title;

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
     * @var string
     */
    protected string $source;

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
     * @var RecordRef
     */
    protected RecordRef $entityStatus;

    /**
     * @var float
     */
    protected float $probability;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $expectedCloseDate;

    /**
     * @var int
     */
    protected int $daysOpen;

    /**
     * @var RecordRef
     */
    protected RecordRef $forecastType;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var float
     */
    protected float $projectedTotal;

    /**
     * @var float
     */
    protected float $rangeLow;

    /**
     * @var float
     */
    protected float $rangeHigh;

    /**
     * @var float
     */
    protected float $projAltSalesAmt;

    /**
     * @var float
     */
    protected float $altSalesRangeLow;

    /**
     * @var float
     */
    protected float $altSalesRangeHigh;

    /**
     * @var float
     */
    protected float $weightedTotal;

    /**
     * @var string
     */
    protected string $actionItem;

    /**
     * @var RecordRef
     */
    protected RecordRef $winLossReason;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var float
     */
    protected float $taxTotal;

    /**
     * @var bool
     */
    protected bool $isBudgetApproved;

    protected $tax2Total;
    /**
     * @var RecordRef
     */
    protected RecordRef $salesReadiness;

    /**
     * @var float
     */
    protected float $totalCostEstimate;

    /**
     * @var RecordRef
     */
    protected RecordRef $buyingTimeFrame;

    /**
     * @var float
     */
    protected float $estGrossProfit;

    /**
     * @var RecordRef
     */
    protected RecordRef $buyingReason;

    /**
     * @var float
     */
    protected float $estGrossProfitPercent;

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
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var string
     */
    protected string $closeDate;

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
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var string
     */
    protected string $vatRegNum;

    /**
     * @var bool
     */
    protected bool $syncPartnerTeams;

    /**
     * @var OpportunitySalesTeamList
     */
    protected OpportunitySalesTeamList $salesTeamList;

    /**
     * @var OpportunityPartnersList
     */
    protected OpportunityPartnersList $partnersList;

    /**
     * @var OpportunityItemList
     */
    protected OpportunityItemList $itemList;

    /**
     * @var OpportunityCompetitorsList
     */
    protected OpportunityCompetitorsList $competitorsList;

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
        "customForm" => "RecordRef",
        "currency" => "RecordRef",
        "estimatedBudget" => "float",
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "title" => "string",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "oneTime" => "float",
        "recurWeekly" => "float",
        "recurMonthly" => "float",
        "recurQuarterly" => "float",
        "recurAnnually" => "float",
        "source" => "string",
        "salesRep" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "leadSource" => "RecordRef",
        "entityStatus" => "RecordRef",
        "probability" => "float",
        "tranDate" => "dateTime",
        "expectedCloseDate" => "dateTime",
        "daysOpen" => "integer",
        "forecastType" => "RecordRef",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "projectedTotal" => "float",
        "rangeLow" => "float",
        "rangeHigh" => "float",
        "projAltSalesAmt" => "float",
        "altSalesRangeLow" => "float",
        "altSalesRangeHigh" => "float",
        "weightedTotal" => "float",
        "actionItem" => "string",
        "winLossReason" => "RecordRef",
        "memo" => "string",
        "taxTotal" => "float",
        "isBudgetApproved" => "boolean",
        "tax2Total" => "float",
        "salesReadiness" => "RecordRef",
        "totalCostEstimate" => "float",
        "buyingTimeFrame" => "RecordRef",
        "estGrossProfit" => "float",
        "buyingReason" => "RecordRef",
        "estGrossProfitPercent" => "float",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "class" => "RecordRef",
        "closeDate" => "dateTime",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "status" => "string",
        "vatRegNum" => "string",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "OpportunitySalesTeamList",
        "partnersList" => "OpportunityPartnersList",
        "itemList" => "OpportunityItemList",
        "competitorsList" => "OpportunityCompetitorsList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Opportunity
     */
    public function setCustomForm(RecordRef $customForm): Opportunity
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
     * @return Opportunity
     */
    public function setCurrency(RecordRef $currency): Opportunity
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
     * @param float $estimatedBudget
     * @return Opportunity
     */
    public function setEstimatedBudget(float $estimatedBudget): Opportunity
    {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedBudget(): float
    {
        return $this->estimatedBudget;
    }

    /**
     * @param RecordRef $entity
     * @return Opportunity
     */
    public function setEntity(RecordRef $entity): Opportunity
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
     * @return Opportunity
     */
    public function setJob(RecordRef $job): Opportunity
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
     * @param string $title
     * @return Opportunity
     */
    public function setTitle(string $title): Opportunity
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
     * @param string $tranId
     * @return Opportunity
     */
    public function setTranId(string $tranId): Opportunity
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
     * @return Opportunity
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): Opportunity
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
     * @return Opportunity
     */
    public function setTaxPointDate(string $taxPointDate): Opportunity
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
     * @param float $oneTime
     * @return Opportunity
     */
    public function setOneTime(float $oneTime): Opportunity
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
     * @return Opportunity
     */
    public function setRecurWeekly(float $recurWeekly): Opportunity
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
     * @return Opportunity
     */
    public function setRecurMonthly(float $recurMonthly): Opportunity
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
     * @return Opportunity
     */
    public function setRecurQuarterly(float $recurQuarterly): Opportunity
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
     * @return Opportunity
     */
    public function setRecurAnnually(float $recurAnnually): Opportunity
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
     * @param string $source
     * @return Opportunity
     */
    public function setSource(string $source): Opportunity
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
     * @param RecordRef $salesRep
     * @return Opportunity
     */
    public function setSalesRep(RecordRef $salesRep): Opportunity
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
     * @return Opportunity
     */
    public function setContribPct(string $contribPct): Opportunity
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
     * @return Opportunity
     */
    public function setPartner(RecordRef $partner): Opportunity
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
     * @return Opportunity
     */
    public function setSalesGroup(RecordRef $salesGroup): Opportunity
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
     * @return Opportunity
     */
    public function setSyncSalesTeams(bool $syncSalesTeams): Opportunity
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
     * @return Opportunity
     */
    public function setLeadSource(RecordRef $leadSource): Opportunity
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
     * @param RecordRef $entityStatus
     * @return Opportunity
     */
    public function setEntityStatus(RecordRef $entityStatus): Opportunity
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
     * @return Opportunity
     */
    public function setProbability(float $probability): Opportunity
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
     * @param string $tranDate
     * @return Opportunity
     */
    public function setTranDate(string $tranDate): Opportunity
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
     * @param string $expectedCloseDate
     * @return Opportunity
     */
    public function setExpectedCloseDate(string $expectedCloseDate): Opportunity
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
     * @param int $daysOpen
     * @return Opportunity
     */
    public function setDaysOpen(int $daysOpen): Opportunity
    {
        $this->daysOpen = $daysOpen;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysOpen(): int
    {
        return $this->daysOpen;
    }

    /**
     * @param RecordRef $forecastType
     * @return Opportunity
     */
    public function setForecastType(RecordRef $forecastType): Opportunity
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
     * @param string $currencyName
     * @return Opportunity
     */
    public function setCurrencyName(string $currencyName): Opportunity
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
     * @param float $exchangeRate
     * @return Opportunity
     */
    public function setExchangeRate(float $exchangeRate): Opportunity
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
     * @param float $projectedTotal
     * @return Opportunity
     */
    public function setProjectedTotal(float $projectedTotal): Opportunity
    {
        $this->projectedTotal = $projectedTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getProjectedTotal(): float
    {
        return $this->projectedTotal;
    }

    /**
     * @param float $rangeLow
     * @return Opportunity
     */
    public function setRangeLow(float $rangeLow): Opportunity
    {
        $this->rangeLow = $rangeLow;
        return $this;
    }

    /**
     * @return float
     */
    public function getRangeLow(): float
    {
        return $this->rangeLow;
    }

    /**
     * @param float $rangeHigh
     * @return Opportunity
     */
    public function setRangeHigh(float $rangeHigh): Opportunity
    {
        $this->rangeHigh = $rangeHigh;
        return $this;
    }

    /**
     * @return float
     */
    public function getRangeHigh(): float
    {
        return $this->rangeHigh;
    }

    /**
     * @param float $projAltSalesAmt
     * @return Opportunity
     */
    public function setProjAltSalesAmt(float $projAltSalesAmt): Opportunity
    {
        $this->projAltSalesAmt = $projAltSalesAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getProjAltSalesAmt(): float
    {
        return $this->projAltSalesAmt;
    }

    /**
     * @param float $altSalesRangeLow
     * @return Opportunity
     */
    public function setAltSalesRangeLow(float $altSalesRangeLow): Opportunity
    {
        $this->altSalesRangeLow = $altSalesRangeLow;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesRangeLow(): float
    {
        return $this->altSalesRangeLow;
    }

    /**
     * @param float $altSalesRangeHigh
     * @return Opportunity
     */
    public function setAltSalesRangeHigh(float $altSalesRangeHigh): Opportunity
    {
        $this->altSalesRangeHigh = $altSalesRangeHigh;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesRangeHigh(): float
    {
        return $this->altSalesRangeHigh;
    }

    /**
     * @param float $weightedTotal
     * @return Opportunity
     */
    public function setWeightedTotal(float $weightedTotal): Opportunity
    {
        $this->weightedTotal = $weightedTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeightedTotal(): float
    {
        return $this->weightedTotal;
    }

    /**
     * @param string $actionItem
     * @return Opportunity
     */
    public function setActionItem(string $actionItem): Opportunity
    {
        $this->actionItem = $actionItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionItem(): string
    {
        return $this->actionItem;
    }

    /**
     * @param RecordRef $winLossReason
     * @return Opportunity
     */
    public function setWinLossReason(RecordRef $winLossReason): Opportunity
    {
        $this->winLossReason = $winLossReason;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWinLossReason(): RecordRef
    {
        return $this->winLossReason;
    }

    /**
     * @param string $memo
     * @return Opportunity
     */
    public function setMemo(string $memo): Opportunity
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
     * @param float $taxTotal
     * @return Opportunity
     */
    public function setTaxTotal(float $taxTotal): Opportunity
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
     * @param bool $isBudgetApproved
     * @return Opportunity
     */
    public function setIsBudgetApproved(bool $isBudgetApproved): Opportunity
    {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBudgetApproved(): bool
    {
        return $this->isBudgetApproved;
    }

    /**
     * @param RecordRef $salesReadiness
     * @return Opportunity
     */
    public function setSalesReadiness(RecordRef $salesReadiness): Opportunity
    {
        $this->salesReadiness = $salesReadiness;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesReadiness(): RecordRef
    {
        return $this->salesReadiness;
    }

    /**
     * @param float $totalCostEstimate
     * @return Opportunity
     */
    public function setTotalCostEstimate(float $totalCostEstimate): Opportunity
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
     * @param RecordRef $buyingTimeFrame
     * @return Opportunity
     */
    public function setBuyingTimeFrame(RecordRef $buyingTimeFrame): Opportunity
    {
        $this->buyingTimeFrame = $buyingTimeFrame;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingTimeFrame(): RecordRef
    {
        return $this->buyingTimeFrame;
    }

    /**
     * @param float $estGrossProfit
     * @return Opportunity
     */
    public function setEstGrossProfit(float $estGrossProfit): Opportunity
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
     * @param RecordRef $buyingReason
     * @return Opportunity
     */
    public function setBuyingReason(RecordRef $buyingReason): Opportunity
    {
        $this->buyingReason = $buyingReason;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingReason(): RecordRef
    {
        return $this->buyingReason;
    }

    /**
     * @param float $estGrossProfitPercent
     * @return Opportunity
     */
    public function setEstGrossProfitPercent(float $estGrossProfitPercent): Opportunity
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
     * @param Address $billingAddress
     * @return Opportunity
     */
    public function setBillingAddress(Address $billingAddress): Opportunity
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
     * @return Opportunity
     */
    public function setBillAddressList(RecordRef $billAddressList): Opportunity
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
     * @return Opportunity
     */
    public function setShippingAddress(Address $shippingAddress): Opportunity
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
     * @return Opportunity
     */
    public function setShipIsResidential(bool $shipIsResidential): Opportunity
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
     * @return Opportunity
     */
    public function setShipAddressList(RecordRef $shipAddressList): Opportunity
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
     * @param RecordRef $class
     * @return Opportunity
     */
    public function setClass(RecordRef $class): Opportunity
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
     * @param string $closeDate
     * @return Opportunity
     */
    public function setCloseDate(string $closeDate): Opportunity
    {
        $this->closeDate = $closeDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseDate(): string
    {
        return $this->closeDate;
    }

    /**
     * @param string $createdDate
     * @return Opportunity
     */
    public function setCreatedDate(string $createdDate): Opportunity
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
     * @return Opportunity
     */
    public function setLastModifiedDate(string $lastModifiedDate): Opportunity
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
     * @return Opportunity
     */
    public function setNexus(RecordRef $nexus): Opportunity
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
     * @return Opportunity
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): Opportunity
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
     * @return Opportunity
     */
    public function setTaxRegOverride(bool $taxRegOverride): Opportunity
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
     * @return Opportunity
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): Opportunity
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
     * @param RecordRef $department
     * @return Opportunity
     */
    public function setDepartment(RecordRef $department): Opportunity
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
     * @return Opportunity
     */
    public function setLocation(RecordRef $location): Opportunity
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
     * @return Opportunity
     */
    public function setSubsidiary(RecordRef $subsidiary): Opportunity
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
     * @param string $status
     * @return Opportunity
     */
    public function setStatus(string $status): Opportunity
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
     * @param string $vatRegNum
     * @return Opportunity
     */
    public function setVatRegNum(string $vatRegNum): Opportunity
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
     * @param bool $syncPartnerTeams
     * @return Opportunity
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): Opportunity
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
     * @param OpportunitySalesTeamList $salesTeamList
     * @return Opportunity
     */
    public function setSalesTeamList(OpportunitySalesTeamList $salesTeamList): Opportunity
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return OpportunitySalesTeamList
     */
    public function getSalesTeamList(): OpportunitySalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param OpportunityPartnersList $partnersList
     * @return Opportunity
     */
    public function setPartnersList(OpportunityPartnersList $partnersList): Opportunity
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return OpportunityPartnersList
     */
    public function getPartnersList(): OpportunityPartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param OpportunityItemList $itemList
     * @return Opportunity
     */
    public function setItemList(OpportunityItemList $itemList): Opportunity
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return OpportunityItemList
     */
    public function getItemList(): OpportunityItemList
    {
        return $this->itemList;
    }

    /**
     * @param OpportunityCompetitorsList $competitorsList
     * @return Opportunity
     */
    public function setCompetitorsList(OpportunityCompetitorsList $competitorsList): Opportunity
    {
        $this->competitorsList = $competitorsList;
        return $this;
    }

    /**
     * @return OpportunityCompetitorsList
     */
    public function getCompetitorsList(): OpportunityCompetitorsList
    {
        return $this->competitorsList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return Opportunity
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): Opportunity
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
     * @return Opportunity
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): Opportunity
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
     * @return Opportunity
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Opportunity
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
     * @return Opportunity
     */
    public function setInternalId(string $internalId): Opportunity
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
     * @return Opportunity
     */
    public function setExternalId(string $externalId): Opportunity
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
