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

class Usage extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscriptionPlan;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $usageSubscription;

    /**
     * @var RecordRef
     */
    protected RecordRef $usageSubscriptionLine;

    /**
     * @var float
     */
    protected float $usageQuantity;

    /**
     * @var string
     */
    protected string $usageDate;

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
        "memo" => "string",
        "item" => "RecordRef",
        "subscriptionPlan" => "RecordRef",
        "customer" => "RecordRef",
        "usageSubscription" => "RecordRef",
        "usageSubscriptionLine" => "RecordRef",
        "usageQuantity" => "float",
        "usageDate" => "dateTime",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Usage
     */
    public function setCustomForm(RecordRef $customForm): Usage
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
     * @param string $memo
     * @return Usage
     */
    public function setMemo(string $memo): Usage
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
     * @param RecordRef $item
     * @return Usage
     */
    public function setItem(RecordRef $item): Usage
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $subscriptionPlan
     * @return Usage
     */
    public function setSubscriptionPlan(RecordRef $subscriptionPlan): Usage
    {
        $this->subscriptionPlan = $subscriptionPlan;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscriptionPlan(): RecordRef
    {
        return $this->subscriptionPlan;
    }

    /**
     * @param RecordRef $customer
     * @return Usage
     */
    public function setCustomer(RecordRef $customer): Usage
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer(): RecordRef
    {
        return $this->customer;
    }

    /**
     * @param RecordRef $usageSubscription
     * @return Usage
     */
    public function setUsageSubscription(RecordRef $usageSubscription): Usage
    {
        $this->usageSubscription = $usageSubscription;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUsageSubscription(): RecordRef
    {
        return $this->usageSubscription;
    }

    /**
     * @param RecordRef $usageSubscriptionLine
     * @return Usage
     */
    public function setUsageSubscriptionLine(RecordRef $usageSubscriptionLine): Usage
    {
        $this->usageSubscriptionLine = $usageSubscriptionLine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUsageSubscriptionLine(): RecordRef
    {
        return $this->usageSubscriptionLine;
    }

    /**
     * @param float $usageQuantity
     * @return Usage
     */
    public function setUsageQuantity(float $usageQuantity): Usage
    {
        $this->usageQuantity = $usageQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getUsageQuantity(): float
    {
        return $this->usageQuantity;
    }

    /**
     * @param string $usageDate
     * @return Usage
     */
    public function setUsageDate(string $usageDate): Usage
    {
        $this->usageDate = $usageDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsageDate(): string
    {
        return $this->usageDate;
    }

    /**
     * @param string $internalId
     * @return Usage
     */
    public function setInternalId(string $internalId): Usage
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
     * @return Usage
     */
    public function setExternalId(string $externalId): Usage
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
