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

class CampaignEmail {
    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var RecordRef
     */
    protected RecordRef $campaignGroup;

    /**
     * @var RecordRef
     */
    protected RecordRef $template;

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
     * @var CampaignCampaignEmailStatus
     */
    protected CampaignCampaignEmailStatus $status;

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
        "template" => "RecordRef",
        "description" => "string",
        "subscription" => "RecordRef",
        "channel" => "RecordRef",
        "cost" => "float",
        "status" => "CampaignCampaignEmailStatus",
        "dateScheduled" => "dateTime",
        "promoCode" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param string $internalId
     * @return CampaignEmail
     */
    public function setInternalId(string $internalId): CampaignEmail
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
     * @return CampaignEmail
     */
    public function setCampaignGroup(RecordRef $campaignGroup): CampaignEmail
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
     * @param RecordRef $template
     * @return CampaignEmail
     */
    public function setTemplate(RecordRef $template): CampaignEmail
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemplate(): RecordRef
    {
        return $this->template;
    }

    /**
     * @param string $description
     * @return CampaignEmail
     */
    public function setDescription(string $description): CampaignEmail
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
     * @return CampaignEmail
     */
    public function setSubscription(RecordRef $subscription): CampaignEmail
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
     * @return CampaignEmail
     */
    public function setChannel(RecordRef $channel): CampaignEmail
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
     * @return CampaignEmail
     */
    public function setCost(float $cost): CampaignEmail
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
     * @param CampaignCampaignEmailStatus $status
     * @return CampaignEmail
     */
    public function setStatus(CampaignCampaignEmailStatus $status): CampaignEmail
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return CampaignCampaignEmailStatus
     */
    public function getStatus(): CampaignCampaignEmailStatus
    {
        return $this->status;
    }

    /**
     * @param string $dateScheduled
     * @return CampaignEmail
     */
    public function setDateScheduled(string $dateScheduled): CampaignEmail
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
     * @return CampaignEmail
     */
    public function setPromoCode(RecordRef $promoCode): CampaignEmail
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
     * @return CampaignEmail
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CampaignEmail
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
