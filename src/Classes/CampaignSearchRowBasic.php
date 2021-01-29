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

class CampaignSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $audience;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $baseCost;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $campaignId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $category;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $channel;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $cost;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $event;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $executedDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $expectedRevenue;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $family;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSalesCampaign;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $keyword;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $managerRole;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $offer;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $promoCode;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $recipient;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $response;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $responseCategory;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $responseCode;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $responseDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $responseNotes;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $revenue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $roi;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $scheduledDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $searchEngine;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscription;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $url;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $vertical;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "audience" => "SearchColumnSelectField[]",
        "baseCost" => "SearchColumnDoubleField[]",
        "campaignId" => "SearchColumnStringField[]",
        "category" => "SearchColumnSelectField[]",
        "channel" => "SearchColumnSelectField[]",
        "cost" => "SearchColumnDoubleField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "event" => "SearchColumnStringField[]",
        "executedDate" => "SearchColumnDateField[]",
        "expectedRevenue" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "family" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isSalesCampaign" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "keyword" => "SearchColumnStringField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "managerRole" => "SearchColumnSelectField[]",
        "message" => "SearchColumnStringField[]",
        "offer" => "SearchColumnSelectField[]",
        "owner" => "SearchColumnSelectField[]",
        "promoCode" => "SearchColumnStringField[]",
        "recipient" => "SearchColumnSelectField[]",
        "response" => "SearchColumnEnumSelectField[]",
        "responseCategory" => "SearchColumnEnumSelectField[]",
        "responseCode" => "SearchColumnLongField[]",
        "responseDate" => "SearchColumnDateField[]",
        "responseNotes" => "SearchColumnStringField[]",
        "revenue" => "SearchColumnDoubleField[]",
        "roi" => "SearchColumnDoubleField[]",
        "scheduledDate" => "SearchColumnDateField[]",
        "searchEngine" => "SearchColumnSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "url" => "SearchColumnStringField[]",
        "vertical" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $audience
     * @return CampaignSearchRowBasic
     */
    public function setAudience(SearchColumnSelectField $audience): CampaignSearchRowBasic
    {
        $this->audience[] = $audience;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAudience(): array
    {
        return $this->audience;
    }

    /**
     * @param SearchColumnDoubleField[] $baseCost
     * @return CampaignSearchRowBasic
     */
    public function setBaseCost(SearchColumnDoubleField $baseCost): CampaignSearchRowBasic
    {
        $this->baseCost[] = $baseCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBaseCost(): array
    {
        return $this->baseCost;
    }

    /**
     * @param SearchColumnStringField[] $campaignId
     * @return CampaignSearchRowBasic
     */
    public function setCampaignId(SearchColumnStringField $campaignId): CampaignSearchRowBasic
    {
        $this->campaignId[] = $campaignId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCampaignId(): array
    {
        return $this->campaignId;
    }

    /**
     * @param SearchColumnSelectField[] $category
     * @return CampaignSearchRowBasic
     */
    public function setCategory(SearchColumnSelectField $category): CampaignSearchRowBasic
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param SearchColumnSelectField[] $channel
     * @return CampaignSearchRowBasic
     */
    public function setChannel(SearchColumnSelectField $channel): CampaignSearchRowBasic
    {
        $this->channel[] = $channel;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getChannel(): array
    {
        return $this->channel;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return CampaignSearchRowBasic
     */
    public function setCost(SearchColumnDoubleField $cost): CampaignSearchRowBasic
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost(): array
    {
        return $this->cost;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return CampaignSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): CampaignSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return CampaignSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): CampaignSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnStringField[] $event
     * @return CampaignSearchRowBasic
     */
    public function setEvent(SearchColumnStringField $event): CampaignSearchRowBasic
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEvent(): array
    {
        return $this->event;
    }

    /**
     * @param SearchColumnDateField[] $executedDate
     * @return CampaignSearchRowBasic
     */
    public function setExecutedDate(SearchColumnDateField $executedDate): CampaignSearchRowBasic
    {
        $this->executedDate[] = $executedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExecutedDate(): array
    {
        return $this->executedDate;
    }

    /**
     * @param SearchColumnDoubleField[] $expectedRevenue
     * @return CampaignSearchRowBasic
     */
    public function setExpectedRevenue(SearchColumnDoubleField $expectedRevenue): CampaignSearchRowBasic
    {
        $this->expectedRevenue[] = $expectedRevenue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExpectedRevenue(): array
    {
        return $this->expectedRevenue;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return CampaignSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): CampaignSearchRowBasic
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
     * @param SearchColumnSelectField[] $family
     * @return CampaignSearchRowBasic
     */
    public function setFamily(SearchColumnSelectField $family): CampaignSearchRowBasic
    {
        $this->family[] = $family;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFamily(): array
    {
        return $this->family;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return CampaignSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CampaignSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInactive
     * @return CampaignSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): CampaignSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isSalesCampaign
     * @return CampaignSearchRowBasic
     */
    public function setIsSalesCampaign(SearchColumnBooleanField $isSalesCampaign): CampaignSearchRowBasic
    {
        $this->isSalesCampaign[] = $isSalesCampaign;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSalesCampaign(): array
    {
        return $this->isSalesCampaign;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return CampaignSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): CampaignSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnStringField[] $keyword
     * @return CampaignSearchRowBasic
     */
    public function setKeyword(SearchColumnStringField $keyword): CampaignSearchRowBasic
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getKeyword(): array
    {
        return $this->keyword;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return CampaignSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): CampaignSearchRowBasic
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
     * @param SearchColumnSelectField[] $managerRole
     * @return CampaignSearchRowBasic
     */
    public function setManagerRole(SearchColumnSelectField $managerRole): CampaignSearchRowBasic
    {
        $this->managerRole[] = $managerRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManagerRole(): array
    {
        return $this->managerRole;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return CampaignSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): CampaignSearchRowBasic
    {
        $this->message[] = $message;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage(): array
    {
        return $this->message;
    }

    /**
     * @param SearchColumnSelectField[] $offer
     * @return CampaignSearchRowBasic
     */
    public function setOffer(SearchColumnSelectField $offer): CampaignSearchRowBasic
    {
        $this->offer[] = $offer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOffer(): array
    {
        return $this->offer;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return CampaignSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): CampaignSearchRowBasic
    {
        $this->owner[] = $owner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner(): array
    {
        return $this->owner;
    }

    /**
     * @param SearchColumnStringField[] $promoCode
     * @return CampaignSearchRowBasic
     */
    public function setPromoCode(SearchColumnStringField $promoCode): CampaignSearchRowBasic
    {
        $this->promoCode[] = $promoCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPromoCode(): array
    {
        return $this->promoCode;
    }

    /**
     * @param SearchColumnSelectField[] $recipient
     * @return CampaignSearchRowBasic
     */
    public function setRecipient(SearchColumnSelectField $recipient): CampaignSearchRowBasic
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRecipient(): array
    {
        return $this->recipient;
    }

    /**
     * @param SearchColumnEnumSelectField[] $response
     * @return CampaignSearchRowBasic
     */
    public function setResponse(SearchColumnEnumSelectField $response): CampaignSearchRowBasic
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getResponse(): array
    {
        return $this->response;
    }

    /**
     * @param SearchColumnEnumSelectField[] $responseCategory
     * @return CampaignSearchRowBasic
     */
    public function setResponseCategory(SearchColumnEnumSelectField $responseCategory): CampaignSearchRowBasic
    {
        $this->responseCategory[] = $responseCategory;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getResponseCategory(): array
    {
        return $this->responseCategory;
    }

    /**
     * @param SearchColumnLongField[] $responseCode
     * @return CampaignSearchRowBasic
     */
    public function setResponseCode(SearchColumnLongField $responseCode): CampaignSearchRowBasic
    {
        $this->responseCode[] = $responseCode;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getResponseCode(): array
    {
        return $this->responseCode;
    }

    /**
     * @param SearchColumnDateField[] $responseDate
     * @return CampaignSearchRowBasic
     */
    public function setResponseDate(SearchColumnDateField $responseDate): CampaignSearchRowBasic
    {
        $this->responseDate[] = $responseDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getResponseDate(): array
    {
        return $this->responseDate;
    }

    /**
     * @param SearchColumnStringField[] $responseNotes
     * @return CampaignSearchRowBasic
     */
    public function setResponseNotes(SearchColumnStringField $responseNotes): CampaignSearchRowBasic
    {
        $this->responseNotes[] = $responseNotes;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getResponseNotes(): array
    {
        return $this->responseNotes;
    }

    /**
     * @param SearchColumnDoubleField[] $revenue
     * @return CampaignSearchRowBasic
     */
    public function setRevenue(SearchColumnDoubleField $revenue): CampaignSearchRowBasic
    {
        $this->revenue[] = $revenue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRevenue(): array
    {
        return $this->revenue;
    }

    /**
     * @param SearchColumnDoubleField[] $roi
     * @return CampaignSearchRowBasic
     */
    public function setRoi(SearchColumnDoubleField $roi): CampaignSearchRowBasic
    {
        $this->roi[] = $roi;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRoi(): array
    {
        return $this->roi;
    }

    /**
     * @param SearchColumnDateField[] $scheduledDate
     * @return CampaignSearchRowBasic
     */
    public function setScheduledDate(SearchColumnDateField $scheduledDate): CampaignSearchRowBasic
    {
        $this->scheduledDate[] = $scheduledDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getScheduledDate(): array
    {
        return $this->scheduledDate;
    }

    /**
     * @param SearchColumnSelectField[] $searchEngine
     * @return CampaignSearchRowBasic
     */
    public function setSearchEngine(SearchColumnSelectField $searchEngine): CampaignSearchRowBasic
    {
        $this->searchEngine[] = $searchEngine;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSearchEngine(): array
    {
        return $this->searchEngine;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return CampaignSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): CampaignSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return CampaignSearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): CampaignSearchRowBasic
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
     * @param SearchColumnSelectField[] $subscription
     * @return CampaignSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): CampaignSearchRowBasic
    {
        $this->subscription[] = $subscription;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscription(): array
    {
        return $this->subscription;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return CampaignSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): CampaignSearchRowBasic
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
     * @param SearchColumnStringField[] $url
     * @return CampaignSearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): CampaignSearchRowBasic
    {
        $this->url[] = $url;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrl(): array
    {
        return $this->url;
    }

    /**
     * @param SearchColumnSelectField[] $vertical
     * @return CampaignSearchRowBasic
     */
    public function setVertical(SearchColumnSelectField $vertical): CampaignSearchRowBasic
    {
        $this->vertical[] = $vertical;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVertical(): array
    {
        return $this->vertical;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return CampaignSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): CampaignSearchRowBasic
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
