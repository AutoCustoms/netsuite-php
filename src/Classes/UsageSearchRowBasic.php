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

class UsageSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $customer;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $date;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscription;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscriptionLine;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscriptionPlan;

    static $paramtypesmap = array(
        "customer" => "SearchColumnSelectField[]",
        "date" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionLine" => "SearchColumnSelectField[]",
        "subscriptionPlan" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnSelectField[] $customer
     * @return UsageSearchRowBasic
     */
    public function setCustomer(SearchColumnSelectField $customer): UsageSearchRowBasic
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }

    /**
     * @param SearchColumnDateField[] $date
     * @return UsageSearchRowBasic
     */
    public function setDate(SearchColumnDateField $date): UsageSearchRowBasic
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDate(): array
    {
        return $this->date;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return UsageSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): UsageSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return UsageSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): UsageSearchRowBasic
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
     * @param SearchColumnSelectField[] $item
     * @return UsageSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): UsageSearchRowBasic
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
     * @param SearchColumnStringField[] $memo
     * @return UsageSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): UsageSearchRowBasic
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
     * @param SearchColumnDoubleField[] $quantity
     * @return UsageSearchRowBasic
     */
    public function setQuantity(SearchColumnDoubleField $quantity): UsageSearchRowBasic
    {
        $this->quantity[] = $quantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantity(): array
    {
        return $this->quantity;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return UsageSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): UsageSearchRowBasic
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
     * @param SearchColumnSelectField[] $subscriptionLine
     * @return UsageSearchRowBasic
     */
    public function setSubscriptionLine(SearchColumnSelectField $subscriptionLine): UsageSearchRowBasic
    {
        $this->subscriptionLine[] = $subscriptionLine;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscriptionLine(): array
    {
        return $this->subscriptionLine;
    }

    /**
     * @param SearchColumnSelectField[] $subscriptionPlan
     * @return UsageSearchRowBasic
     */
    public function setSubscriptionPlan(SearchColumnSelectField $subscriptionPlan): UsageSearchRowBasic
    {
        $this->subscriptionPlan[] = $subscriptionPlan;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscriptionPlan(): array
    {
        return $this->subscriptionPlan;
    }

}
