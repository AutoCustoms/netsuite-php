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

class CampaignSubscription extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $subscribedByDefault;

    /**
     * @var bool
     */
    protected bool $unsubscribed;

    /**
     * @var string
     */
    protected string $externalName;

    /**
     * @var string
     */
    protected string $externalDescription;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "description" => "string",
        "subscribedByDefault" => "boolean",
        "unsubscribed" => "boolean",
        "externalName" => "string",
        "externalDescription" => "string",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return CampaignSubscription
     */
    public function setName(string $name): CampaignSubscription
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $description
     * @return CampaignSubscription
     */
    public function setDescription(string $description): CampaignSubscription
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
     * @param bool $subscribedByDefault
     * @return CampaignSubscription
     */
    public function setSubscribedByDefault(bool $subscribedByDefault): CampaignSubscription
    {
        $this->subscribedByDefault = $subscribedByDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSubscribedByDefault(): bool
    {
        return $this->subscribedByDefault;
    }

    /**
     * @param bool $unsubscribed
     * @return CampaignSubscription
     */
    public function setUnsubscribed(bool $unsubscribed): CampaignSubscription
    {
        $this->unsubscribed = $unsubscribed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUnsubscribed(): bool
    {
        return $this->unsubscribed;
    }

    /**
     * @param string $externalName
     * @return CampaignSubscription
     */
    public function setExternalName(string $externalName): CampaignSubscription
    {
        $this->externalName = $externalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalName(): string
    {
        return $this->externalName;
    }

    /**
     * @param string $externalDescription
     * @return CampaignSubscription
     */
    public function setExternalDescription(string $externalDescription): CampaignSubscription
    {
        $this->externalDescription = $externalDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalDescription(): string
    {
        return $this->externalDescription;
    }

    /**
     * @param bool $isInactive
     * @return CampaignSubscription
     */
    public function setIsInactive(bool $isInactive): CampaignSubscription
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
     * @param string $internalId
     * @return CampaignSubscription
     */
    public function setInternalId(string $internalId): CampaignSubscription
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
     * @return CampaignSubscription
     */
    public function setExternalId(string $externalId): CampaignSubscription
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
