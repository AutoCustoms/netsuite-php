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

class CampaignDirectMail {
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
     * @var CampaignCampaignDirectMailStatus
     */
    protected CampaignCampaignDirectMailStatus $status;

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
        "status" => "CampaignCampaignDirectMailStatus",
        "dateScheduled" => "dateTime",
        "promoCode" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param string $internalId
     * @return CampaignDirectMail
     */
    public function setInternalId(string $internalId): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setCampaignGroup(RecordRef $campaignGroup): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setTemplate(RecordRef $template): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setDescription(string $description): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setSubscription(RecordRef $subscription): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setChannel(RecordRef $channel): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setCost(float $cost): CampaignDirectMail
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
     * @param CampaignCampaignDirectMailStatus $status
     * @return CampaignDirectMail
     */
    public function setStatus(CampaignCampaignDirectMailStatus $status): CampaignDirectMail
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return CampaignCampaignDirectMailStatus
     */
    public function getStatus(): CampaignCampaignDirectMailStatus
    {
        return $this->status;
    }

    /**
     * @param string $dateScheduled
     * @return CampaignDirectMail
     */
    public function setDateScheduled(string $dateScheduled): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setPromoCode(RecordRef $promoCode): CampaignDirectMail
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
     * @return CampaignDirectMail
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CampaignDirectMail
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
