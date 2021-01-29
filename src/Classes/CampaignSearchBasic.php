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

class CampaignSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $audience;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $baseCost;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $campaignEventType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $campaignId;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $category;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $channel;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $cost;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $event;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $expectedRevenue;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $family;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $group;

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
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isSalesCampaign;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $keyword;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $manager;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $managerRole;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $number;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $offer;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $promoCode;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $recipient;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $response;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $responseCategory;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $responseCode;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $responseComments;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $responseDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $scheduleDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $searchEngine;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subscription;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $template;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $vertical;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "audience" => "SearchMultiSelectField",
        "baseCost" => "SearchDoubleField",
        "campaignEventType" => "SearchEnumMultiSelectField",
        "campaignId" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "channel" => "SearchMultiSelectField",
        "cost" => "SearchDoubleField",
        "createdDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "event" => "SearchStringField",
        "expectedRevenue" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "family" => "SearchMultiSelectField",
        "group" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isSalesCampaign" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "keyword" => "SearchStringField",
        "lastModifiedDate" => "SearchDateField",
        "manager" => "SearchMultiSelectField",
        "managerRole" => "SearchMultiSelectField",
        "number" => "SearchLongField",
        "offer" => "SearchMultiSelectField",
        "promoCode" => "SearchMultiSelectField",
        "recipient" => "SearchMultiSelectField",
        "response" => "SearchEnumMultiSelectField",
        "responseCategory" => "SearchEnumMultiSelectField",
        "responseCode" => "SearchLongField",
        "responseComments" => "SearchStringField",
        "responseDate" => "SearchDateField",
        "scheduleDate" => "SearchDateField",
        "searchEngine" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "subscription" => "SearchMultiSelectField",
        "template" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "vertical" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $audience
     * @return CampaignSearchBasic
     */
    public function setAudience(SearchMultiSelectField $audience): CampaignSearchBasic
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAudience(): SearchMultiSelectField
    {
        return $this->audience;
    }

    /**
     * @param SearchDoubleField $baseCost
     * @return CampaignSearchBasic
     */
    public function setBaseCost(SearchDoubleField $baseCost): CampaignSearchBasic
    {
        $this->baseCost = $baseCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBaseCost(): SearchDoubleField
    {
        return $this->baseCost;
    }

    /**
     * @param SearchEnumMultiSelectField $campaignEventType
     * @return CampaignSearchBasic
     */
    public function setCampaignEventType(SearchEnumMultiSelectField $campaignEventType): CampaignSearchBasic
    {
        $this->campaignEventType = $campaignEventType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCampaignEventType(): SearchEnumMultiSelectField
    {
        return $this->campaignEventType;
    }

    /**
     * @param SearchStringField $campaignId
     * @return CampaignSearchBasic
     */
    public function setCampaignId(SearchStringField $campaignId): CampaignSearchBasic
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCampaignId(): SearchStringField
    {
        return $this->campaignId;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return CampaignSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): CampaignSearchBasic
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory(): SearchMultiSelectField
    {
        return $this->category;
    }

    /**
     * @param SearchMultiSelectField $channel
     * @return CampaignSearchBasic
     */
    public function setChannel(SearchMultiSelectField $channel): CampaignSearchBasic
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getChannel(): SearchMultiSelectField
    {
        return $this->channel;
    }

    /**
     * @param SearchDoubleField $cost
     * @return CampaignSearchBasic
     */
    public function setCost(SearchDoubleField $cost): CampaignSearchBasic
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost(): SearchDoubleField
    {
        return $this->cost;
    }

    /**
     * @param SearchDateField $createdDate
     * @return CampaignSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): CampaignSearchBasic
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate(): SearchDateField
    {
        return $this->createdDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return CampaignSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): CampaignSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchStringField $event
     * @return CampaignSearchBasic
     */
    public function setEvent(SearchStringField $event): CampaignSearchBasic
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEvent(): SearchStringField
    {
        return $this->event;
    }

    /**
     * @param SearchDoubleField $expectedRevenue
     * @return CampaignSearchBasic
     */
    public function setExpectedRevenue(SearchDoubleField $expectedRevenue): CampaignSearchBasic
    {
        $this->expectedRevenue = $expectedRevenue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExpectedRevenue(): SearchDoubleField
    {
        return $this->expectedRevenue;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return CampaignSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): CampaignSearchBasic
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
     * @return CampaignSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): CampaignSearchBasic
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
     * @param SearchMultiSelectField $family
     * @return CampaignSearchBasic
     */
    public function setFamily(SearchMultiSelectField $family): CampaignSearchBasic
    {
        $this->family = $family;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFamily(): SearchMultiSelectField
    {
        return $this->family;
    }

    /**
     * @param SearchMultiSelectField $group
     * @return CampaignSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): CampaignSearchBasic
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroup(): SearchMultiSelectField
    {
        return $this->group;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return CampaignSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CampaignSearchBasic
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
     * @return CampaignSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CampaignSearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return CampaignSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): CampaignSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isSalesCampaign
     * @return CampaignSearchBasic
     */
    public function setIsSalesCampaign(SearchBooleanField $isSalesCampaign): CampaignSearchBasic
    {
        $this->isSalesCampaign = $isSalesCampaign;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSalesCampaign(): SearchBooleanField
    {
        return $this->isSalesCampaign;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return CampaignSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): CampaignSearchBasic
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
     * @param SearchStringField $keyword
     * @return CampaignSearchBasic
     */
    public function setKeyword(SearchStringField $keyword): CampaignSearchBasic
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getKeyword(): SearchStringField
    {
        return $this->keyword;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return CampaignSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): CampaignSearchBasic
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
     * @param SearchMultiSelectField $manager
     * @return CampaignSearchBasic
     */
    public function setManager(SearchMultiSelectField $manager): CampaignSearchBasic
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManager(): SearchMultiSelectField
    {
        return $this->manager;
    }

    /**
     * @param SearchMultiSelectField $managerRole
     * @return CampaignSearchBasic
     */
    public function setManagerRole(SearchMultiSelectField $managerRole): CampaignSearchBasic
    {
        $this->managerRole = $managerRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManagerRole(): SearchMultiSelectField
    {
        return $this->managerRole;
    }

    /**
     * @param SearchLongField $number
     * @return CampaignSearchBasic
     */
    public function setNumber(SearchLongField $number): CampaignSearchBasic
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
     * @param SearchMultiSelectField $offer
     * @return CampaignSearchBasic
     */
    public function setOffer(SearchMultiSelectField $offer): CampaignSearchBasic
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOffer(): SearchMultiSelectField
    {
        return $this->offer;
    }

    /**
     * @param SearchMultiSelectField $promoCode
     * @return CampaignSearchBasic
     */
    public function setPromoCode(SearchMultiSelectField $promoCode): CampaignSearchBasic
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromoCode(): SearchMultiSelectField
    {
        return $this->promoCode;
    }

    /**
     * @param SearchMultiSelectField $recipient
     * @return CampaignSearchBasic
     */
    public function setRecipient(SearchMultiSelectField $recipient): CampaignSearchBasic
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRecipient(): SearchMultiSelectField
    {
        return $this->recipient;
    }

    /**
     * @param SearchEnumMultiSelectField $response
     * @return CampaignSearchBasic
     */
    public function setResponse(SearchEnumMultiSelectField $response): CampaignSearchBasic
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getResponse(): SearchEnumMultiSelectField
    {
        return $this->response;
    }

    /**
     * @param SearchEnumMultiSelectField $responseCategory
     * @return CampaignSearchBasic
     */
    public function setResponseCategory(SearchEnumMultiSelectField $responseCategory): CampaignSearchBasic
    {
        $this->responseCategory = $responseCategory;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getResponseCategory(): SearchEnumMultiSelectField
    {
        return $this->responseCategory;
    }

    /**
     * @param SearchLongField $responseCode
     * @return CampaignSearchBasic
     */
    public function setResponseCode(SearchLongField $responseCode): CampaignSearchBasic
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getResponseCode(): SearchLongField
    {
        return $this->responseCode;
    }

    /**
     * @param SearchStringField $responseComments
     * @return CampaignSearchBasic
     */
    public function setResponseComments(SearchStringField $responseComments): CampaignSearchBasic
    {
        $this->responseComments = $responseComments;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getResponseComments(): SearchStringField
    {
        return $this->responseComments;
    }

    /**
     * @param SearchDateField $responseDate
     * @return CampaignSearchBasic
     */
    public function setResponseDate(SearchDateField $responseDate): CampaignSearchBasic
    {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getResponseDate(): SearchDateField
    {
        return $this->responseDate;
    }

    /**
     * @param SearchDateField $scheduleDate
     * @return CampaignSearchBasic
     */
    public function setScheduleDate(SearchDateField $scheduleDate): CampaignSearchBasic
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getScheduleDate(): SearchDateField
    {
        return $this->scheduleDate;
    }

    /**
     * @param SearchMultiSelectField $searchEngine
     * @return CampaignSearchBasic
     */
    public function setSearchEngine(SearchMultiSelectField $searchEngine): CampaignSearchBasic
    {
        $this->searchEngine = $searchEngine;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSearchEngine(): SearchMultiSelectField
    {
        return $this->searchEngine;
    }

    /**
     * @param SearchDateField $startDate
     * @return CampaignSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): CampaignSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return CampaignSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): CampaignSearchBasic
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
     * @param SearchMultiSelectField $subscription
     * @return CampaignSearchBasic
     */
    public function setSubscription(SearchMultiSelectField $subscription): CampaignSearchBasic
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscription(): SearchMultiSelectField
    {
        return $this->subscription;
    }

    /**
     * @param SearchMultiSelectField $template
     * @return CampaignSearchBasic
     */
    public function setTemplate(SearchMultiSelectField $template): CampaignSearchBasic
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTemplate(): SearchMultiSelectField
    {
        return $this->template;
    }

    /**
     * @param SearchStringField $title
     * @return CampaignSearchBasic
     */
    public function setTitle(SearchStringField $title): CampaignSearchBasic
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
     * @param SearchMultiSelectField $vertical
     * @return CampaignSearchBasic
     */
    public function setVertical(SearchMultiSelectField $vertical): CampaignSearchBasic
    {
        $this->vertical = $vertical;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVertical(): SearchMultiSelectField
    {
        return $this->vertical;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return CampaignSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): CampaignSearchBasic
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
