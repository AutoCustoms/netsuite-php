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

class CampaignEvent {
    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var RecordRef
     */
    protected RecordRef $campaignGroup;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscription;

    /**
     * @var RecordRef
     */
    protected RecordRef $channel;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var CampaignCampaignEventStatus
     */
    protected CampaignCampaignEventStatus $status;

    /**
     * @var string
     */
    protected string $dateScheduled;

    /**
     * @var RecordRef
     */
    protected RecordRef $promoCode;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "internalId" => "string",
        "campaignGroup" => "RecordRef",
        "description" => "string",
        "subscription" => "RecordRef",
        "channel" => "RecordRef",
        "cost" => "float",
        "status" => "CampaignCampaignEventStatus",
        "dateScheduled" => "dateTime",
        "promoCode" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param string $internalId
     * @return CampaignEvent
     */
    public function setInternalId(string $internalId): CampaignEvent
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
     * @param RecordRef $campaignGroup
     * @return CampaignEvent
     */
    public function setCampaignGroup(RecordRef $campaignGroup): CampaignEvent
    {
        $this->campaignGroup = $campaignGroup;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCampaignGroup(): RecordRef
    {
        return $this->campaignGroup;
    }

    /**
     * @param string $description
     * @return CampaignEvent
     */
    public function setDescription(string $description): CampaignEvent
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param RecordRef $subscription
     * @return CampaignEvent
     */
    public function setSubscription(RecordRef $subscription): CampaignEvent
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscription(): RecordRef
    {
        return $this->subscription;
    }

    /**
     * @param RecordRef $channel
     * @return CampaignEvent
     */
    public function setChannel(RecordRef $channel): CampaignEvent
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChannel(): RecordRef
    {
        return $this->channel;
    }

    /**
     * @param float $cost
     * @return CampaignEvent
     */
    public function setCost(float $cost): CampaignEvent
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
     * @param CampaignCampaignEventStatus $status
     * @return CampaignEvent
     */
    public function setStatus(CampaignCampaignEventStatus $status): CampaignEvent
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return CampaignCampaignEventStatus
     */
    public function getStatus(): CampaignCampaignEventStatus
    {
        return $this->status;
    }

    /**
     * @param string $dateScheduled
     * @return CampaignEvent
     */
    public function setDateScheduled(string $dateScheduled): CampaignEvent
    {
        $this->dateScheduled = $dateScheduled;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateScheduled(): string
    {
        return $this->dateScheduled;
    }

    /**
     * @param RecordRef $promoCode
     * @return CampaignEvent
     */
    public function setPromoCode(RecordRef $promoCode): CampaignEvent
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
     * @param CustomFieldList $customFieldList
     * @return CampaignEvent
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CampaignEvent
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

}
