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

class OpportunitySearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $actionItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $availableOffline;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $buyingReason;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $buyingTimeFrame;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $closeDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $competitor;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $contribution;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $contributionPrimary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $custType;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysOpen;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysToClose;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $decisionMaker;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entityStatus;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedBudget;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $expectedCloseDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $forecastType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $foreignProjectedAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $foreignRangeHigh;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $foreignRangeLow;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxTranCostEstimate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isBudgetApproved;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $leadSource;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partner;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $partnerContribution;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partnerRole;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partnerTeamMember;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $period;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $probability;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $projAltSalesAmt;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $projectedTotal;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rangeHigh;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rangeHighAlt;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rangeLow;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rangeLowAlt;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $salesReadiness;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesRep;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesTeamMember;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesTeamRole;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxPeriod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $total;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $tranCostEstimate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $tranDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $tranEstGrossProfit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $tranEstGrossProfitPct;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $tranFxEstGrossProfit;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $tranId;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $weightedTotal;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $winLossReason;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $wonBy;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actionItem" => "SearchColumnStringField[]",
        "availableOffline" => "SearchColumnBooleanField[]",
        "buyingReason" => "SearchColumnStringField[]",
        "buyingTimeFrame" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "closeDate" => "SearchColumnDateField[]",
        "competitor" => "SearchColumnSelectField[]",
        "contribution" => "SearchColumnDoubleField[]",
        "contributionPrimary" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnSelectField[]",
        "custType" => "SearchColumnStringField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "daysOpen" => "SearchColumnLongField[]",
        "daysToClose" => "SearchColumnLongField[]",
        "decisionMaker" => "SearchColumnSelectField[]",
        "department" => "SearchColumnSelectField[]",
        "entity" => "SearchColumnSelectField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estimatedBudget" => "SearchColumnDoubleField[]",
        "expectedCloseDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "forecastType" => "SearchColumnEnumSelectField[]",
        "foreignProjectedAmount" => "SearchColumnDoubleField[]",
        "foreignRangeHigh" => "SearchColumnDoubleField[]",
        "foreignRangeLow" => "SearchColumnDoubleField[]",
        "fxTranCostEstimate" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isBudgetApproved" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "leadSource" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "partner" => "SearchColumnSelectField[]",
        "partnerContribution" => "SearchColumnDoubleField[]",
        "partnerRole" => "SearchColumnSelectField[]",
        "partnerTeamMember" => "SearchColumnSelectField[]",
        "period" => "SearchColumnStringField[]",
        "probability" => "SearchColumnDoubleField[]",
        "projAltSalesAmt" => "SearchColumnDoubleField[]",
        "projectedTotal" => "SearchColumnDoubleField[]",
        "rangeHigh" => "SearchColumnDoubleField[]",
        "rangeHighAlt" => "SearchColumnDoubleField[]",
        "rangeLow" => "SearchColumnDoubleField[]",
        "rangeLowAlt" => "SearchColumnDoubleField[]",
        "salesReadiness" => "SearchColumnStringField[]",
        "salesRep" => "SearchColumnSelectField[]",
        "salesTeamMember" => "SearchColumnSelectField[]",
        "salesTeamRole" => "SearchColumnSelectField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "taxPeriod" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "total" => "SearchColumnDoubleField[]",
        "tranCostEstimate" => "SearchColumnDoubleField[]",
        "tranDate" => "SearchColumnDateField[]",
        "tranEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranEstGrossProfitPct" => "SearchColumnDoubleField[]",
        "tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranId" => "SearchColumnStringField[]",
        "weightedTotal" => "SearchColumnDoubleField[]",
        "winLossReason" => "SearchColumnSelectField[]",
        "wonBy" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $actionItem
     * @return OpportunitySearchRowBasic
     */
    public function setActionItem(SearchColumnStringField $actionItem): OpportunitySearchRowBasic
    {
        $this->actionItem[] = $actionItem;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getActionItem(): array
    {
        return $this->actionItem;
    }

    /**
     * @param SearchColumnBooleanField[] $availableOffline
     * @return OpportunitySearchRowBasic
     */
    public function setAvailableOffline(SearchColumnBooleanField $availableOffline): OpportunitySearchRowBasic
    {
        $this->availableOffline[] = $availableOffline;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableOffline(): array
    {
        return $this->availableOffline;
    }

    /**
     * @param SearchColumnStringField[] $buyingReason
     * @return OpportunitySearchRowBasic
     */
    public function setBuyingReason(SearchColumnStringField $buyingReason): OpportunitySearchRowBasic
    {
        $this->buyingReason[] = $buyingReason;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingReason(): array
    {
        return $this->buyingReason;
    }

    /**
     * @param SearchColumnStringField[] $buyingTimeFrame
     * @return OpportunitySearchRowBasic
     */
    public function setBuyingTimeFrame(SearchColumnStringField $buyingTimeFrame): OpportunitySearchRowBasic
    {
        $this->buyingTimeFrame[] = $buyingTimeFrame;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingTimeFrame(): array
    {
        return $this->buyingTimeFrame;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return OpportunitySearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): OpportunitySearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnDateField[] $closeDate
     * @return OpportunitySearchRowBasic
     */
    public function setCloseDate(SearchColumnDateField $closeDate): OpportunitySearchRowBasic
    {
        $this->closeDate[] = $closeDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCloseDate(): array
    {
        return $this->closeDate;
    }

    /**
     * @param SearchColumnSelectField[] $competitor
     * @return OpportunitySearchRowBasic
     */
    public function setCompetitor(SearchColumnSelectField $competitor): OpportunitySearchRowBasic
    {
        $this->competitor[] = $competitor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCompetitor(): array
    {
        return $this->competitor;
    }

    /**
     * @param SearchColumnDoubleField[] $contribution
     * @return OpportunitySearchRowBasic
     */
    public function setContribution(SearchColumnDoubleField $contribution): OpportunitySearchRowBasic
    {
        $this->contribution[] = $contribution;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContribution(): array
    {
        return $this->contribution;
    }

    /**
     * @param SearchColumnDoubleField[] $contributionPrimary
     * @return OpportunitySearchRowBasic
     */
    public function setContributionPrimary(SearchColumnDoubleField $contributionPrimary): OpportunitySearchRowBasic
    {
        $this->contributionPrimary[] = $contributionPrimary;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContributionPrimary(): array
    {
        return $this->contributionPrimary;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return OpportunitySearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): OpportunitySearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnStringField[] $custType
     * @return OpportunitySearchRowBasic
     */
    public function setCustType(SearchColumnStringField $custType): OpportunitySearchRowBasic
    {
        $this->custType[] = $custType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCustType(): array
    {
        return $this->custType;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return OpportunitySearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): OpportunitySearchRowBasic
    {
        $this->dateCreated[] = $dateCreated;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated(): array
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchColumnLongField[] $daysOpen
     * @return OpportunitySearchRowBasic
     */
    public function setDaysOpen(SearchColumnLongField $daysOpen): OpportunitySearchRowBasic
    {
        $this->daysOpen[] = $daysOpen;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOpen(): array
    {
        return $this->daysOpen;
    }

    /**
     * @param SearchColumnLongField[] $daysToClose
     * @return OpportunitySearchRowBasic
     */
    public function setDaysToClose(SearchColumnLongField $daysToClose): OpportunitySearchRowBasic
    {
        $this->daysToClose[] = $daysToClose;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysToClose(): array
    {
        return $this->daysToClose;
    }

    /**
     * @param SearchColumnSelectField[] $decisionMaker
     * @return OpportunitySearchRowBasic
     */
    public function setDecisionMaker(SearchColumnSelectField $decisionMaker): OpportunitySearchRowBasic
    {
        $this->decisionMaker[] = $decisionMaker;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDecisionMaker(): array
    {
        return $this->decisionMaker;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return OpportunitySearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): OpportunitySearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $entity
     * @return OpportunitySearchRowBasic
     */
    public function setEntity(SearchColumnSelectField $entity): OpportunitySearchRowBasic
    {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntity(): array
    {
        return $this->entity;
    }

    /**
     * @param SearchColumnSelectField[] $entityStatus
     * @return OpportunitySearchRowBasic
     */
    public function setEntityStatus(SearchColumnSelectField $entityStatus): OpportunitySearchRowBasic
    {
        $this->entityStatus[] = $entityStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntityStatus(): array
    {
        return $this->entityStatus;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedBudget
     * @return OpportunitySearchRowBasic
     */
    public function setEstimatedBudget(SearchColumnDoubleField $estimatedBudget): OpportunitySearchRowBasic
    {
        $this->estimatedBudget[] = $estimatedBudget;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedBudget(): array
    {
        return $this->estimatedBudget;
    }

    /**
     * @param SearchColumnDateField[] $expectedCloseDate
     * @return OpportunitySearchRowBasic
     */
    public function setExpectedCloseDate(SearchColumnDateField $expectedCloseDate): OpportunitySearchRowBasic
    {
        $this->expectedCloseDate[] = $expectedCloseDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedCloseDate(): array
    {
        return $this->expectedCloseDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return OpportunitySearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): OpportunitySearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnEnumSelectField[] $forecastType
     * @return OpportunitySearchRowBasic
     */
    public function setForecastType(SearchColumnEnumSelectField $forecastType): OpportunitySearchRowBasic
    {
        $this->forecastType[] = $forecastType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getForecastType(): array
    {
        return $this->forecastType;
    }

    /**
     * @param SearchColumnDoubleField[] $foreignProjectedAmount
     * @return OpportunitySearchRowBasic
     */
    public function setForeignProjectedAmount(SearchColumnDoubleField $foreignProjectedAmount): OpportunitySearchRowBasic
    {
        $this->foreignProjectedAmount[] = $foreignProjectedAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getForeignProjectedAmount(): array
    {
        return $this->foreignProjectedAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $foreignRangeHigh
     * @return OpportunitySearchRowBasic
     */
    public function setForeignRangeHigh(SearchColumnDoubleField $foreignRangeHigh): OpportunitySearchRowBasic
    {
        $this->foreignRangeHigh[] = $foreignRangeHigh;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getForeignRangeHigh(): array
    {
        return $this->foreignRangeHigh;
    }

    /**
     * @param SearchColumnDoubleField[] $foreignRangeLow
     * @return OpportunitySearchRowBasic
     */
    public function setForeignRangeLow(SearchColumnDoubleField $foreignRangeLow): OpportunitySearchRowBasic
    {
        $this->foreignRangeLow[] = $foreignRangeLow;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getForeignRangeLow(): array
    {
        return $this->foreignRangeLow;
    }

    /**
     * @param SearchColumnDoubleField[] $fxTranCostEstimate
     * @return OpportunitySearchRowBasic
     */
    public function setFxTranCostEstimate(SearchColumnDoubleField $fxTranCostEstimate): OpportunitySearchRowBasic
    {
        $this->fxTranCostEstimate[] = $fxTranCostEstimate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxTranCostEstimate(): array
    {
        return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return OpportunitySearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): OpportunitySearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnBooleanField[] $isBudgetApproved
     * @return OpportunitySearchRowBasic
     */
    public function setIsBudgetApproved(SearchColumnBooleanField $isBudgetApproved): OpportunitySearchRowBasic
    {
        $this->isBudgetApproved[] = $isBudgetApproved;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBudgetApproved(): array
    {
        return $this->isBudgetApproved;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return OpportunitySearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): OpportunitySearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnSelectField[] $leadSource
     * @return OpportunitySearchRowBasic
     */
    public function setLeadSource(SearchColumnSelectField $leadSource): OpportunitySearchRowBasic
    {
        $this->leadSource[] = $leadSource;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLeadSource(): array
    {
        return $this->leadSource;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return OpportunitySearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): OpportunitySearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return OpportunitySearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): OpportunitySearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnSelectField[] $partner
     * @return OpportunitySearchRowBasic
     */
    public function setPartner(SearchColumnSelectField $partner): OpportunitySearchRowBasic
    {
        $this->partner[] = $partner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartner(): array
    {
        return $this->partner;
    }

    /**
     * @param SearchColumnDoubleField[] $partnerContribution
     * @return OpportunitySearchRowBasic
     */
    public function setPartnerContribution(SearchColumnDoubleField $partnerContribution): OpportunitySearchRowBasic
    {
        $this->partnerContribution[] = $partnerContribution;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPartnerContribution(): array
    {
        return $this->partnerContribution;
    }

    /**
     * @param SearchColumnSelectField[] $partnerRole
     * @return OpportunitySearchRowBasic
     */
    public function setPartnerRole(SearchColumnSelectField $partnerRole): OpportunitySearchRowBasic
    {
        $this->partnerRole[] = $partnerRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerRole(): array
    {
        return $this->partnerRole;
    }

    /**
     * @param SearchColumnSelectField[] $partnerTeamMember
     * @return OpportunitySearchRowBasic
     */
    public function setPartnerTeamMember(SearchColumnSelectField $partnerTeamMember): OpportunitySearchRowBasic
    {
        $this->partnerTeamMember[] = $partnerTeamMember;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerTeamMember(): array
    {
        return $this->partnerTeamMember;
    }

    /**
     * @param SearchColumnStringField[] $period
     * @return OpportunitySearchRowBasic
     */
    public function setPeriod(SearchColumnStringField $period): OpportunitySearchRowBasic
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriod(): array
    {
        return $this->period;
    }

    /**
     * @param SearchColumnDoubleField[] $probability
     * @return OpportunitySearchRowBasic
     */
    public function setProbability(SearchColumnDoubleField $probability): OpportunitySearchRowBasic
    {
        $this->probability[] = $probability;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProbability(): array
    {
        return $this->probability;
    }

    /**
     * @param SearchColumnDoubleField[] $projAltSalesAmt
     * @return OpportunitySearchRowBasic
     */
    public function setProjAltSalesAmt(SearchColumnDoubleField $projAltSalesAmt): OpportunitySearchRowBasic
    {
        $this->projAltSalesAmt[] = $projAltSalesAmt;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProjAltSalesAmt(): array
    {
        return $this->projAltSalesAmt;
    }

    /**
     * @param SearchColumnDoubleField[] $projectedTotal
     * @return OpportunitySearchRowBasic
     */
    public function setProjectedTotal(SearchColumnDoubleField $projectedTotal): OpportunitySearchRowBasic
    {
        $this->projectedTotal[] = $projectedTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProjectedTotal(): array
    {
        return $this->projectedTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeHigh
     * @return OpportunitySearchRowBasic
     */
    public function setRangeHigh(SearchColumnDoubleField $rangeHigh): OpportunitySearchRowBasic
    {
        $this->rangeHigh[] = $rangeHigh;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeHigh(): array
    {
        return $this->rangeHigh;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeHighAlt
     * @return OpportunitySearchRowBasic
     */
    public function setRangeHighAlt(SearchColumnDoubleField $rangeHighAlt): OpportunitySearchRowBasic
    {
        $this->rangeHighAlt[] = $rangeHighAlt;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeHighAlt(): array
    {
        return $this->rangeHighAlt;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeLow
     * @return OpportunitySearchRowBasic
     */
    public function setRangeLow(SearchColumnDoubleField $rangeLow): OpportunitySearchRowBasic
    {
        $this->rangeLow[] = $rangeLow;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeLow(): array
    {
        return $this->rangeLow;
    }

    /**
     * @param SearchColumnDoubleField[] $rangeLowAlt
     * @return OpportunitySearchRowBasic
     */
    public function setRangeLowAlt(SearchColumnDoubleField $rangeLowAlt): OpportunitySearchRowBasic
    {
        $this->rangeLowAlt[] = $rangeLowAlt;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRangeLowAlt(): array
    {
        return $this->rangeLowAlt;
    }

    /**
     * @param SearchColumnStringField[] $salesReadiness
     * @return OpportunitySearchRowBasic
     */
    public function setSalesReadiness(SearchColumnStringField $salesReadiness): OpportunitySearchRowBasic
    {
        $this->salesReadiness[] = $salesReadiness;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesReadiness(): array
    {
        return $this->salesReadiness;
    }

    /**
     * @param SearchColumnSelectField[] $salesRep
     * @return OpportunitySearchRowBasic
     */
    public function setSalesRep(SearchColumnSelectField $salesRep): OpportunitySearchRowBasic
    {
        $this->salesRep[] = $salesRep;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesRep(): array
    {
        return $this->salesRep;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamMember
     * @return OpportunitySearchRowBasic
     */
    public function setSalesTeamMember(SearchColumnSelectField $salesTeamMember): OpportunitySearchRowBasic
    {
        $this->salesTeamMember[] = $salesTeamMember;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamMember(): array
    {
        return $this->salesTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamRole
     * @return OpportunitySearchRowBasic
     */
    public function setSalesTeamRole(SearchColumnSelectField $salesTeamRole): OpportunitySearchRowBasic
    {
        $this->salesTeamRole[] = $salesTeamRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamRole(): array
    {
        return $this->salesTeamRole;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return OpportunitySearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): OpportunitySearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return OpportunitySearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): OpportunitySearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $taxPeriod
     * @return OpportunitySearchRowBasic
     */
    public function setTaxPeriod(SearchColumnSelectField $taxPeriod): OpportunitySearchRowBasic
    {
        $this->taxPeriod[] = $taxPeriod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxPeriod(): array
    {
        return $this->taxPeriod;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return OpportunitySearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): OpportunitySearchRowBasic
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param SearchColumnDoubleField[] $total
     * @return OpportunitySearchRowBasic
     */
    public function setTotal(SearchColumnDoubleField $total): OpportunitySearchRowBasic
    {
        $this->total[] = $total;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotal(): array
    {
        return $this->total;
    }

    /**
     * @param SearchColumnDoubleField[] $tranCostEstimate
     * @return OpportunitySearchRowBasic
     */
    public function setTranCostEstimate(SearchColumnDoubleField $tranCostEstimate): OpportunitySearchRowBasic
    {
        $this->tranCostEstimate[] = $tranCostEstimate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranCostEstimate(): array
    {
        return $this->tranCostEstimate;
    }

    /**
     * @param SearchColumnDateField[] $tranDate
     * @return OpportunitySearchRowBasic
     */
    public function setTranDate(SearchColumnDateField $tranDate): OpportunitySearchRowBasic
    {
        $this->tranDate[] = $tranDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getTranDate(): array
    {
        return $this->tranDate;
    }

    /**
     * @param SearchColumnDoubleField[] $tranEstGrossProfit
     * @return OpportunitySearchRowBasic
     */
    public function setTranEstGrossProfit(SearchColumnDoubleField $tranEstGrossProfit): OpportunitySearchRowBasic
    {
        $this->tranEstGrossProfit[] = $tranEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranEstGrossProfit(): array
    {
        return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $tranEstGrossProfitPct
     * @return OpportunitySearchRowBasic
     */
    public function setTranEstGrossProfitPct(SearchColumnDoubleField $tranEstGrossProfitPct): OpportunitySearchRowBasic
    {
        $this->tranEstGrossProfitPct[] = $tranEstGrossProfitPct;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranEstGrossProfitPct(): array
    {
        return $this->tranEstGrossProfitPct;
    }

    /**
     * @param SearchColumnDoubleField[] $tranFxEstGrossProfit
     * @return OpportunitySearchRowBasic
     */
    public function setTranFxEstGrossProfit(SearchColumnDoubleField $tranFxEstGrossProfit): OpportunitySearchRowBasic
    {
        $this->tranFxEstGrossProfit[] = $tranFxEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranFxEstGrossProfit(): array
    {
        return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchColumnStringField[] $tranId
     * @return OpportunitySearchRowBasic
     */
    public function setTranId(SearchColumnStringField $tranId): OpportunitySearchRowBasic
    {
        $this->tranId[] = $tranId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranId(): array
    {
        return $this->tranId;
    }

    /**
     * @param SearchColumnDoubleField[] $weightedTotal
     * @return OpportunitySearchRowBasic
     */
    public function setWeightedTotal(SearchColumnDoubleField $weightedTotal): OpportunitySearchRowBasic
    {
        $this->weightedTotal[] = $weightedTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getWeightedTotal(): array
    {
        return $this->weightedTotal;
    }

    /**
     * @param SearchColumnSelectField[] $winLossReason
     * @return OpportunitySearchRowBasic
     */
    public function setWinLossReason(SearchColumnSelectField $winLossReason): OpportunitySearchRowBasic
    {
        $this->winLossReason[] = $winLossReason;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWinLossReason(): array
    {
        return $this->winLossReason;
    }

    /**
     * @param SearchColumnSelectField[] $wonBy
     * @return OpportunitySearchRowBasic
     */
    public function setWonBy(SearchColumnSelectField $wonBy): OpportunitySearchRowBasic
    {
        $this->wonBy[] = $wonBy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWonBy(): array
    {
        return $this->wonBy;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return OpportunitySearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): OpportunitySearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
