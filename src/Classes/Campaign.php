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

class Campaign extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $campaignId;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

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
    protected string $url;

    /**
     * @var float
     */
    protected float $baseCost;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var float
     */
    protected float $expectedRevenue;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $local;

    /**
     * @var float
     */
    protected float $totalRevenue;

    /**
     * @var float
     */
    protected float $roi;

    /**
     * @var float
     */
    protected float $profit;

    /**
     * @var float
     */
    protected float $costPerCustomer;

    /**
     * @var float
     */
    protected float $convCostPerCustomer;

    /**
     * @var int
     */
    protected int $conversions;

    /**
     * @var int
     */
    protected int $leadsGenerated;

    /**
     * @var int
     */
    protected int $uniqueVisitors;

    /**
     * @var RecordRef
     */
    protected RecordRef $vertical;

    /**
     * @var RecordRef
     */
    protected RecordRef $audience;

    /**
     * @var RecordRef
     */
    protected RecordRef $offer;

    /**
     * @var RecordRef
     */
    protected RecordRef $promotionCode;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $itemList;

    /**
     * @var RecordRef
     */
    protected RecordRef $family;

    /**
     * @var RecordRef
     */
    protected RecordRef $searchEngine;

    /**
     * @var string
     */
    protected string $keyword;

    /**
     * @var CampaignEmailList
     */
    protected CampaignEmailList $campaignEmailList;

    /**
     * @var CampaignDirectMailList
     */
    protected CampaignDirectMailList $campaignDirectMailList;

    /**
     * @var CampaignEventList
     */
    protected CampaignEventList $campaignEventList;

    /**
     * @var CampaignEventResponseList
     */
    protected CampaignEventResponseList $eventResponseList;

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
        "campaignId" => "string",
        "title" => "string",
        "category" => "RecordRef",
        "owner" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "url" => "string",
        "baseCost" => "float",
        "cost" => "float",
        "expectedRevenue" => "float",
        "message" => "string",
        "isInactive" => "boolean",
        "local" => "boolean",
        "totalRevenue" => "float",
        "roi" => "float",
        "profit" => "float",
        "costPerCustomer" => "float",
        "convCostPerCustomer" => "float",
        "conversions" => "integer",
        "leadsGenerated" => "integer",
        "uniqueVisitors" => "integer",
        "vertical" => "RecordRef",
        "audience" => "RecordRef",
        "offer" => "RecordRef",
        "promotionCode" => "RecordRef",
        "itemList" => "RecordRefList",
        "family" => "RecordRef",
        "searchEngine" => "RecordRef",
        "keyword" => "string",
        "campaignEmailList" => "CampaignEmailList",
        "campaignDirectMailList" => "CampaignDirectMailList",
        "campaignEventList" => "CampaignEventList",
        "eventResponseList" => "CampaignEventResponseList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Campaign
     */
    public function setCustomForm(RecordRef $customForm): Campaign
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
     * @param string $campaignId
     * @return Campaign
     */
    public function setCampaignId(string $campaignId): Campaign
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    /**
     * @param string $title
     * @return Campaign
     */
    public function setTitle(string $title): Campaign
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
     * @param RecordRef $category
     * @return Campaign
     */
    public function setCategory(RecordRef $category): Campaign
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param RecordRef $owner
     * @return Campaign
     */
    public function setOwner(RecordRef $owner): Campaign
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner(): RecordRef
    {
        return $this->owner;
    }

    /**
     * @param string $startDate
     * @return Campaign
     */
    public function setStartDate(string $startDate): Campaign
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
     * @return Campaign
     */
    public function setEndDate(string $endDate): Campaign
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
     * @param string $url
     * @return Campaign
     */
    public function setUrl(string $url): Campaign
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param float $baseCost
     * @return Campaign
     */
    public function setBaseCost(float $baseCost): Campaign
    {
        $this->baseCost = $baseCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseCost(): float
    {
        return $this->baseCost;
    }

    /**
     * @param float $cost
     * @return Campaign
     */
    public function setCost(float $cost): Campaign
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $expectedRevenue
     * @return Campaign
     */
    public function setExpectedRevenue(float $expectedRevenue): Campaign
    {
        $this->expectedRevenue = $expectedRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getExpectedRevenue(): float
    {
        return $this->expectedRevenue;
    }

    /**
     * @param string $message
     * @return Campaign
     */
    public function setMessage(string $message): Campaign
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
     * @param bool $isInactive
     * @return Campaign
     */
    public function setIsInactive(bool $isInactive): Campaign
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param bool $local
     * @return Campaign
     */
    public function setLocal(bool $local): Campaign
    {
        $this->local = $local;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLocal(): bool
    {
        return $this->local;
    }

    /**
     * @param float $totalRevenue
     * @return Campaign
     */
    public function setTotalRevenue(float $totalRevenue): Campaign
    {
        $this->totalRevenue = $totalRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRevenue(): float
    {
        return $this->totalRevenue;
    }

    /**
     * @param float $roi
     * @return Campaign
     */
    public function setRoi(float $roi): Campaign
    {
        $this->roi = $roi;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoi(): float
    {
        return $this->roi;
    }

    /**
     * @param float $profit
     * @return Campaign
     */
    public function setProfit(float $profit): Campaign
    {
        $this->profit = $profit;
        return $this;
    }

    /**
     * @return float
     */
    public function getProfit(): float
    {
        return $this->profit;
    }

    /**
     * @param float $costPerCustomer
     * @return Campaign
     */
    public function setCostPerCustomer(float $costPerCustomer): Campaign
    {
        $this->costPerCustomer = $costPerCustomer;
        return $this;
    }

    /**
     * @return float
     */
    public function getCostPerCustomer(): float
    {
        return $this->costPerCustomer;
    }

    /**
     * @param float $convCostPerCustomer
     * @return Campaign
     */
    public function setConvCostPerCustomer(float $convCostPerCustomer): Campaign
    {
        $this->convCostPerCustomer = $convCostPerCustomer;
        return $this;
    }

    /**
     * @return float
     */
    public function getConvCostPerCustomer(): float
    {
        return $this->convCostPerCustomer;
    }

    /**
     * @param int $conversions
     * @return Campaign
     */
    public function setConversions(int $conversions): Campaign
    {
        $this->conversions = $conversions;
        return $this;
    }

    /**
     * @return int
     */
    public function getConversions(): int
    {
        return $this->conversions;
    }

    /**
     * @param int $leadsGenerated
     * @return Campaign
     */
    public function setLeadsGenerated(int $leadsGenerated): Campaign
    {
        $this->leadsGenerated = $leadsGenerated;
        return $this;
    }

    /**
     * @return int
     */
    public function getLeadsGenerated(): int
    {
        return $this->leadsGenerated;
    }

    /**
     * @param int $uniqueVisitors
     * @return Campaign
     */
    public function setUniqueVisitors(int $uniqueVisitors): Campaign
    {
        $this->uniqueVisitors = $uniqueVisitors;
        return $this;
    }

    /**
     * @return int
     */
    public function getUniqueVisitors(): int
    {
        return $this->uniqueVisitors;
    }

    /**
     * @param RecordRef $vertical
     * @return Campaign
     */
    public function setVertical(RecordRef $vertical): Campaign
    {
        $this->vertical = $vertical;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVertical(): RecordRef
    {
        return $this->vertical;
    }

    /**
     * @param RecordRef $audience
     * @return Campaign
     */
    public function setAudience(RecordRef $audience): Campaign
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAudience(): RecordRef
    {
        return $this->audience;
    }

    /**
     * @param RecordRef $offer
     * @return Campaign
     */
    public function setOffer(RecordRef $offer): Campaign
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOffer(): RecordRef
    {
        return $this->offer;
    }

    /**
     * @param RecordRef $promotionCode
     * @return Campaign
     */
    public function setPromotionCode(RecordRef $promotionCode): Campaign
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPromotionCode(): RecordRef
    {
        return $this->promotionCode;
    }

    /**
     * @param RecordRefList $itemList
     * @return Campaign
     */
    public function setItemList(RecordRefList $itemList): Campaign
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemList(): RecordRefList
    {
        return $this->itemList;
    }

    /**
     * @param RecordRef $family
     * @return Campaign
     */
    public function setFamily(RecordRef $family): Campaign
    {
        $this->family = $family;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFamily(): RecordRef
    {
        return $this->family;
    }

    /**
     * @param RecordRef $searchEngine
     * @return Campaign
     */
    public function setSearchEngine(RecordRef $searchEngine): Campaign
    {
        $this->searchEngine = $searchEngine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchEngine(): RecordRef
    {
        return $this->searchEngine;
    }

    /**
     * @param string $keyword
     * @return Campaign
     */
    public function setKeyword(string $keyword): Campaign
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * @param CampaignEmailList $campaignEmailList
     * @return Campaign
     */
    public function setCampaignEmailList(CampaignEmailList $campaignEmailList): Campaign
    {
        $this->campaignEmailList = $campaignEmailList;
        return $this;
    }

    /**
     * @return CampaignEmailList
     */
    public function getCampaignEmailList(): CampaignEmailList
    {
        return $this->campaignEmailList;
    }

    /**
     * @param CampaignDirectMailList $campaignDirectMailList
     * @return Campaign
     */
    public function setCampaignDirectMailList(CampaignDirectMailList $campaignDirectMailList): Campaign
    {
        $this->campaignDirectMailList = $campaignDirectMailList;
        return $this;
    }

    /**
     * @return CampaignDirectMailList
     */
    public function getCampaignDirectMailList(): CampaignDirectMailList
    {
        return $this->campaignDirectMailList;
    }

    /**
     * @param CampaignEventList $campaignEventList
     * @return Campaign
     */
    public function setCampaignEventList(CampaignEventList $campaignEventList): Campaign
    {
        $this->campaignEventList = $campaignEventList;
        return $this;
    }

    /**
     * @return CampaignEventList
     */
    public function getCampaignEventList(): CampaignEventList
    {
        return $this->campaignEventList;
    }

    /**
     * @param CampaignEventResponseList $eventResponseList
     * @return Campaign
     */
    public function setEventResponseList(CampaignEventResponseList $eventResponseList): Campaign
    {
        $this->eventResponseList = $eventResponseList;
        return $this;
    }

    /**
     * @return CampaignEventResponseList
     */
    public function getEventResponseList(): CampaignEventResponseList
    {
        return $this->eventResponseList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Campaign
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Campaign
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
     * @return Campaign
     */
    public function setInternalId(string $internalId): Campaign
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
     * @return Campaign
     */
    public function setExternalId(string $externalId): Campaign
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
