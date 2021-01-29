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

class OpportunitySearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableOffline;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $buyingReason;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $buyingTimeFrame;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $closeDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $competitor;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $contribution;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $custType;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysOpen;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysToClose;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $entity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $entityStatus;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedBudget;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $expectedCloseDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $forecastType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $foreignProjectedAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $foreignRangeHigh;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $foreignRangeLow;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxTranCostEstimate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isBudgetApproved;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $leadSource;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $number;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $partner;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $partnerContribution;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $partnerRole;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $partnerTeamMember;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var PostingPeriodDate
     */
    protected PostingPeriodDate $postingPeriodRelative;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $probability;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $projAltSalesAmt;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $projectedTotal;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $rangeHigh;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $rangeHighAlt;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $rangeLow;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $rangeLowAlt;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesReadiness;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesRep;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesTeamMember;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesTeamRole;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxPeriod;

    /**
     * @var PostingPeriodDate
     */
    protected PostingPeriodDate $taxPeriodRelative;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranCostEstimate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $tranDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranEstGrossProfit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranEstGrossProfitPct;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranFxEstGrossProfit;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $tranId;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $winLossReason;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $wonBy;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "amount" => "SearchDoubleField",
        "availableOffline" => "SearchBooleanField",
        "buyingReason" => "SearchMultiSelectField",
        "buyingTimeFrame" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "closeDate" => "SearchDateField",
        "competitor" => "SearchMultiSelectField",
        "contribution" => "SearchLongField",
        "currency" => "SearchMultiSelectField",
        "custType" => "SearchMultiSelectField",
        "dateCreated" => "SearchDateField",
        "daysOpen" => "SearchLongField",
        "daysToClose" => "SearchLongField",
        "department" => "SearchMultiSelectField",
        "entity" => "SearchMultiSelectField",
        "entityStatus" => "SearchMultiSelectField",
        "estimatedBudget" => "SearchDoubleField",
        "expectedCloseDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "forecastType" => "SearchEnumMultiSelectField",
        "foreignProjectedAmount" => "SearchDoubleField",
        "foreignRangeHigh" => "SearchDoubleField",
        "foreignRangeLow" => "SearchDoubleField",
        "fxTranCostEstimate" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isBudgetApproved" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "leadSource" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "number" => "SearchLongField",
        "partner" => "SearchMultiSelectField",
        "partnerContribution" => "SearchLongField",
        "partnerRole" => "SearchMultiSelectField",
        "partnerTeamMember" => "SearchMultiSelectField",
        "postingPeriod" => "RecordRef",
        "postingPeriodRelative" => "PostingPeriodDate",
        "probability" => "SearchLongField",
        "projAltSalesAmt" => "SearchDoubleField",
        "projectedTotal" => "SearchDoubleField",
        "rangeHigh" => "SearchDoubleField",
        "rangeHighAlt" => "SearchDoubleField",
        "rangeLow" => "SearchDoubleField",
        "rangeLowAlt" => "SearchDoubleField",
        "salesReadiness" => "SearchMultiSelectField",
        "salesRep" => "SearchMultiSelectField",
        "salesTeamMember" => "SearchMultiSelectField",
        "salesTeamRole" => "SearchMultiSelectField",
        "status" => "SearchEnumMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxPeriod" => "RecordRef",
        "taxPeriodRelative" => "PostingPeriodDate",
        "title" => "SearchStringField",
        "tranCostEstimate" => "SearchDoubleField",
        "tranDate" => "SearchDateField",
        "tranEstGrossProfit" => "SearchDoubleField",
        "tranEstGrossProfitPct" => "SearchDoubleField",
        "tranFxEstGrossProfit" => "SearchDoubleField",
        "tranId" => "SearchStringField",
        "winLossReason" => "SearchMultiSelectField",
        "wonBy" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $amount
     * @return OpportunitySearchBasic
     */
    public function setAmount(SearchDoubleField $amount): OpportunitySearchBasic
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount(): SearchDoubleField
    {
        return $this->amount;
    }

    /**
     * @param SearchBooleanField $availableOffline
     * @return OpportunitySearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline): OpportunitySearchBasic
    {
        $this->availableOffline = $availableOffline;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableOffline(): SearchBooleanField
    {
        return $this->availableOffline;
    }

    /**
     * @param SearchMultiSelectField $buyingReason
     * @return OpportunitySearchBasic
     */
    public function setBuyingReason(SearchMultiSelectField $buyingReason): OpportunitySearchBasic
    {
        $this->buyingReason = $buyingReason;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingReason(): SearchMultiSelectField
    {
        return $this->buyingReason;
    }

    /**
     * @param SearchMultiSelectField $buyingTimeFrame
     * @return OpportunitySearchBasic
     */
    public function setBuyingTimeFrame(SearchMultiSelectField $buyingTimeFrame): OpportunitySearchBasic
    {
        $this->buyingTimeFrame = $buyingTimeFrame;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingTimeFrame(): SearchMultiSelectField
    {
        return $this->buyingTimeFrame;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return OpportunitySearchBasic
     */
    public function setClass(SearchMultiSelectField $class): OpportunitySearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchDateField $closeDate
     * @return OpportunitySearchBasic
     */
    public function setCloseDate(SearchDateField $closeDate): OpportunitySearchBasic
    {
        $this->closeDate = $closeDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCloseDate(): SearchDateField
    {
        return $this->closeDate;
    }

    /**
     * @param SearchMultiSelectField $competitor
     * @return OpportunitySearchBasic
     */
    public function setCompetitor(SearchMultiSelectField $competitor): OpportunitySearchBasic
    {
        $this->competitor = $competitor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCompetitor(): SearchMultiSelectField
    {
        return $this->competitor;
    }

    /**
     * @param SearchLongField $contribution
     * @return OpportunitySearchBasic
     */
    public function setContribution(SearchLongField $contribution): OpportunitySearchBasic
    {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getContribution(): SearchLongField
    {
        return $this->contribution;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return OpportunitySearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): OpportunitySearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $custType
     * @return OpportunitySearchBasic
     */
    public function setCustType(SearchMultiSelectField $custType): OpportunitySearchBasic
    {
        $this->custType = $custType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustType(): SearchMultiSelectField
    {
        return $this->custType;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return OpportunitySearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): OpportunitySearchBasic
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated(): SearchDateField
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchLongField $daysOpen
     * @return OpportunitySearchBasic
     */
    public function setDaysOpen(SearchLongField $daysOpen): OpportunitySearchBasic
    {
        $this->daysOpen = $daysOpen;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOpen(): SearchLongField
    {
        return $this->daysOpen;
    }

    /**
     * @param SearchLongField $daysToClose
     * @return OpportunitySearchBasic
     */
    public function setDaysToClose(SearchLongField $daysToClose): OpportunitySearchBasic
    {
        $this->daysToClose = $daysToClose;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysToClose(): SearchLongField
    {
        return $this->daysToClose;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return OpportunitySearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): OpportunitySearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchMultiSelectField $entity
     * @return OpportunitySearchBasic
     */
    public function setEntity(SearchMultiSelectField $entity): OpportunitySearchBasic
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntity(): SearchMultiSelectField
    {
        return $this->entity;
    }

    /**
     * @param SearchMultiSelectField $entityStatus
     * @return OpportunitySearchBasic
     */
    public function setEntityStatus(SearchMultiSelectField $entityStatus): OpportunitySearchBasic
    {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntityStatus(): SearchMultiSelectField
    {
        return $this->entityStatus;
    }

    /**
     * @param SearchDoubleField $estimatedBudget
     * @return OpportunitySearchBasic
     */
    public function setEstimatedBudget(SearchDoubleField $estimatedBudget): OpportunitySearchBasic
    {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedBudget(): SearchDoubleField
    {
        return $this->estimatedBudget;
    }

    /**
     * @param SearchDateField $expectedCloseDate
     * @return OpportunitySearchBasic
     */
    public function setExpectedCloseDate(SearchDateField $expectedCloseDate): OpportunitySearchBasic
    {
        $this->expectedCloseDate = $expectedCloseDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedCloseDate(): SearchDateField
    {
        return $this->expectedCloseDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return OpportunitySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): OpportunitySearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return OpportunitySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): OpportunitySearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchEnumMultiSelectField $forecastType
     * @return OpportunitySearchBasic
     */
    public function setForecastType(SearchEnumMultiSelectField $forecastType): OpportunitySearchBasic
    {
        $this->forecastType = $forecastType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getForecastType(): SearchEnumMultiSelectField
    {
        return $this->forecastType;
    }

    /**
     * @param SearchDoubleField $foreignProjectedAmount
     * @return OpportunitySearchBasic
     */
    public function setForeignProjectedAmount(SearchDoubleField $foreignProjectedAmount): OpportunitySearchBasic
    {
        $this->foreignProjectedAmount = $foreignProjectedAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getForeignProjectedAmount(): SearchDoubleField
    {
        return $this->foreignProjectedAmount;
    }

    /**
     * @param SearchDoubleField $foreignRangeHigh
     * @return OpportunitySearchBasic
     */
    public function setForeignRangeHigh(SearchDoubleField $foreignRangeHigh): OpportunitySearchBasic
    {
        $this->foreignRangeHigh = $foreignRangeHigh;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getForeignRangeHigh(): SearchDoubleField
    {
        return $this->foreignRangeHigh;
    }

    /**
     * @param SearchDoubleField $foreignRangeLow
     * @return OpportunitySearchBasic
     */
    public function setForeignRangeLow(SearchDoubleField $foreignRangeLow): OpportunitySearchBasic
    {
        $this->foreignRangeLow = $foreignRangeLow;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getForeignRangeLow(): SearchDoubleField
    {
        return $this->foreignRangeLow;
    }

    /**
     * @param SearchDoubleField $fxTranCostEstimate
     * @return OpportunitySearchBasic
     */
    public function setFxTranCostEstimate(SearchDoubleField $fxTranCostEstimate): OpportunitySearchBasic
    {
        $this->fxTranCostEstimate = $fxTranCostEstimate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxTranCostEstimate(): SearchDoubleField
    {
        return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return OpportunitySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): OpportunitySearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return OpportunitySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): OpportunitySearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isBudgetApproved
     * @return OpportunitySearchBasic
     */
    public function setIsBudgetApproved(SearchBooleanField $isBudgetApproved): OpportunitySearchBasic
    {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsBudgetApproved(): SearchBooleanField
    {
        return $this->isBudgetApproved;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return OpportunitySearchBasic
     */
    public function setItem(SearchMultiSelectField $item): OpportunitySearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return OpportunitySearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): OpportunitySearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchMultiSelectField $leadSource
     * @return OpportunitySearchBasic
     */
    public function setLeadSource(SearchMultiSelectField $leadSource): OpportunitySearchBasic
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLeadSource(): SearchMultiSelectField
    {
        return $this->leadSource;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return OpportunitySearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): OpportunitySearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $memo
     * @return OpportunitySearchBasic
     */
    public function setMemo(SearchStringField $memo): OpportunitySearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchLongField $number
     * @return OpportunitySearchBasic
     */
    public function setNumber(SearchLongField $number): OpportunitySearchBasic
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber(): SearchLongField
    {
        return $this->number;
    }

    /**
     * @param SearchMultiSelectField $partner
     * @return OpportunitySearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner): OpportunitySearchBasic
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartner(): SearchMultiSelectField
    {
        return $this->partner;
    }

    /**
     * @param SearchLongField $partnerContribution
     * @return OpportunitySearchBasic
     */
    public function setPartnerContribution(SearchLongField $partnerContribution): OpportunitySearchBasic
    {
        $this->partnerContribution = $partnerContribution;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPartnerContribution(): SearchLongField
    {
        return $this->partnerContribution;
    }

    /**
     * @param SearchMultiSelectField $partnerRole
     * @return OpportunitySearchBasic
     */
    public function setPartnerRole(SearchMultiSelectField $partnerRole): OpportunitySearchBasic
    {
        $this->partnerRole = $partnerRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerRole(): SearchMultiSelectField
    {
        return $this->partnerRole;
    }

    /**
     * @param SearchMultiSelectField $partnerTeamMember
     * @return OpportunitySearchBasic
     */
    public function setPartnerTeamMember(SearchMultiSelectField $partnerTeamMember): OpportunitySearchBasic
    {
        $this->partnerTeamMember = $partnerTeamMember;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember(): SearchMultiSelectField
    {
        return $this->partnerTeamMember;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return OpportunitySearchBasic
     */
    public function setPostingPeriod(RecordRef $postingPeriod): OpportunitySearchBasic
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
     * @param PostingPeriodDate $postingPeriodRelative
     * @return OpportunitySearchBasic
     */
    public function setPostingPeriodRelative(PostingPeriodDate $postingPeriodRelative): OpportunitySearchBasic
    {
        $this->postingPeriodRelative = $postingPeriodRelative;
        return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative(): PostingPeriodDate
    {
        return $this->postingPeriodRelative;
    }

    /**
     * @param SearchLongField $probability
     * @return OpportunitySearchBasic
     */
    public function setProbability(SearchLongField $probability): OpportunitySearchBasic
    {
        $this->probability = $probability;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getProbability(): SearchLongField
    {
        return $this->probability;
    }

    /**
     * @param SearchDoubleField $projAltSalesAmt
     * @return OpportunitySearchBasic
     */
    public function setProjAltSalesAmt(SearchDoubleField $projAltSalesAmt): OpportunitySearchBasic
    {
        $this->projAltSalesAmt = $projAltSalesAmt;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getProjAltSalesAmt(): SearchDoubleField
    {
        return $this->projAltSalesAmt;
    }

    /**
     * @param SearchDoubleField $projectedTotal
     * @return OpportunitySearchBasic
     */
    public function setProjectedTotal(SearchDoubleField $projectedTotal): OpportunitySearchBasic
    {
        $this->projectedTotal = $projectedTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getProjectedTotal(): SearchDoubleField
    {
        return $this->projectedTotal;
    }

    /**
     * @param SearchDoubleField $rangeHigh
     * @return OpportunitySearchBasic
     */
    public function setRangeHigh(SearchDoubleField $rangeHigh): OpportunitySearchBasic
    {
        $this->rangeHigh = $rangeHigh;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeHigh(): SearchDoubleField
    {
        return $this->rangeHigh;
    }

    /**
     * @param SearchDoubleField $rangeHighAlt
     * @return OpportunitySearchBasic
     */
    public function setRangeHighAlt(SearchDoubleField $rangeHighAlt): OpportunitySearchBasic
    {
        $this->rangeHighAlt = $rangeHighAlt;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeHighAlt(): SearchDoubleField
    {
        return $this->rangeHighAlt;
    }

    /**
     * @param SearchDoubleField $rangeLow
     * @return OpportunitySearchBasic
     */
    public function setRangeLow(SearchDoubleField $rangeLow): OpportunitySearchBasic
    {
        $this->rangeLow = $rangeLow;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeLow(): SearchDoubleField
    {
        return $this->rangeLow;
    }

    /**
     * @param SearchDoubleField $rangeLowAlt
     * @return OpportunitySearchBasic
     */
    public function setRangeLowAlt(SearchDoubleField $rangeLowAlt): OpportunitySearchBasic
    {
        $this->rangeLowAlt = $rangeLowAlt;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRangeLowAlt(): SearchDoubleField
    {
        return $this->rangeLowAlt;
    }

    /**
     * @param SearchMultiSelectField $salesReadiness
     * @return OpportunitySearchBasic
     */
    public function setSalesReadiness(SearchMultiSelectField $salesReadiness): OpportunitySearchBasic
    {
        $this->salesReadiness = $salesReadiness;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesReadiness(): SearchMultiSelectField
    {
        return $this->salesReadiness;
    }

    /**
     * @param SearchMultiSelectField $salesRep
     * @return OpportunitySearchBasic
     */
    public function setSalesRep(SearchMultiSelectField $salesRep): OpportunitySearchBasic
    {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesRep(): SearchMultiSelectField
    {
        return $this->salesRep;
    }

    /**
     * @param SearchMultiSelectField $salesTeamMember
     * @return OpportunitySearchBasic
     */
    public function setSalesTeamMember(SearchMultiSelectField $salesTeamMember): OpportunitySearchBasic
    {
        $this->salesTeamMember = $salesTeamMember;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember(): SearchMultiSelectField
    {
        return $this->salesTeamMember;
    }

    /**
     * @param SearchMultiSelectField $salesTeamRole
     * @return OpportunitySearchBasic
     */
    public function setSalesTeamRole(SearchMultiSelectField $salesTeamRole): OpportunitySearchBasic
    {
        $this->salesTeamRole = $salesTeamRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole(): SearchMultiSelectField
    {
        return $this->salesTeamRole;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return OpportunitySearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): OpportunitySearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus(): SearchEnumMultiSelectField
    {
        return $this->status;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return OpportunitySearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): OpportunitySearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $taxPeriod
     * @return OpportunitySearchBasic
     */
    public function setTaxPeriod(RecordRef $taxPeriod): OpportunitySearchBasic
    {
        $this->taxPeriod = $taxPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxPeriod(): RecordRef
    {
        return $this->taxPeriod;
    }

    /**
     * @param PostingPeriodDate $taxPeriodRelative
     * @return OpportunitySearchBasic
     */
    public function setTaxPeriodRelative(PostingPeriodDate $taxPeriodRelative): OpportunitySearchBasic
    {
        $this->taxPeriodRelative = $taxPeriodRelative;
        return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getTaxPeriodRelative(): PostingPeriodDate
    {
        return $this->taxPeriodRelative;
    }

    /**
     * @param SearchStringField $title
     * @return OpportunitySearchBasic
     */
    public function setTitle(SearchStringField $title): OpportunitySearchBasic
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle(): SearchStringField
    {
        return $this->title;
    }

    /**
     * @param SearchDoubleField $tranCostEstimate
     * @return OpportunitySearchBasic
     */
    public function setTranCostEstimate(SearchDoubleField $tranCostEstimate): OpportunitySearchBasic
    {
        $this->tranCostEstimate = $tranCostEstimate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranCostEstimate(): SearchDoubleField
    {
        return $this->tranCostEstimate;
    }

    /**
     * @param SearchDateField $tranDate
     * @return OpportunitySearchBasic
     */
    public function setTranDate(SearchDateField $tranDate): OpportunitySearchBasic
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getTranDate(): SearchDateField
    {
        return $this->tranDate;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfit
     * @return OpportunitySearchBasic
     */
    public function setTranEstGrossProfit(SearchDoubleField $tranEstGrossProfit): OpportunitySearchBasic
    {
        $this->tranEstGrossProfit = $tranEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfit(): SearchDoubleField
    {
        return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfitPct
     * @return OpportunitySearchBasic
     */
    public function setTranEstGrossProfitPct(SearchDoubleField $tranEstGrossProfitPct): OpportunitySearchBasic
    {
        $this->tranEstGrossProfitPct = $tranEstGrossProfitPct;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfitPct(): SearchDoubleField
    {
        return $this->tranEstGrossProfitPct;
    }

    /**
     * @param SearchDoubleField $tranFxEstGrossProfit
     * @return OpportunitySearchBasic
     */
    public function setTranFxEstGrossProfit(SearchDoubleField $tranFxEstGrossProfit): OpportunitySearchBasic
    {
        $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranFxEstGrossProfit(): SearchDoubleField
    {
        return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchStringField $tranId
     * @return OpportunitySearchBasic
     */
    public function setTranId(SearchStringField $tranId): OpportunitySearchBasic
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranId(): SearchStringField
    {
        return $this->tranId;
    }

    /**
     * @param SearchMultiSelectField $winLossReason
     * @return OpportunitySearchBasic
     */
    public function setWinLossReason(SearchMultiSelectField $winLossReason): OpportunitySearchBasic
    {
        $this->winLossReason = $winLossReason;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWinLossReason(): SearchMultiSelectField
    {
        return $this->winLossReason;
    }

    /**
     * @param SearchMultiSelectField $wonBy
     * @return OpportunitySearchBasic
     */
    public function setWonBy(SearchMultiSelectField $wonBy): OpportunitySearchBasic
    {
        $this->wonBy = $wonBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWonBy(): SearchMultiSelectField
    {
        return $this->wonBy;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return OpportunitySearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): OpportunitySearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
