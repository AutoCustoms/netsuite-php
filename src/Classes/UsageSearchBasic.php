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

class UsageSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $date;

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
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subscription;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subscriptionLine;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subscriptionPlan;

    static $paramtypesmap = array(
        "customer" => "SearchMultiSelectField",
        "date" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "quantity" => "SearchDoubleField",
        "subscription" => "SearchMultiSelectField",
        "subscriptionLine" => "SearchMultiSelectField",
        "subscriptionPlan" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $customer
     * @return UsageSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): UsageSearchBasic
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer(): SearchMultiSelectField
    {
        return $this->customer;
    }

    /**
     * @param SearchDateField $date
     * @return UsageSearchBasic
     */
    public function setDate(SearchDateField $date): UsageSearchBasic
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDate(): SearchDateField
    {
        return $this->date;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return UsageSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): UsageSearchBasic
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
     * @return UsageSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): UsageSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return UsageSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): UsageSearchBasic
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
     * @return UsageSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): UsageSearchBasic
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
     * @param SearchMultiSelectField $item
     * @return UsageSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): UsageSearchBasic
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
     * @param SearchStringField $memo
     * @return UsageSearchBasic
     */
    public function setMemo(SearchStringField $memo): UsageSearchBasic
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
     * @param SearchDoubleField $quantity
     * @return UsageSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity): UsageSearchBasic
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity(): SearchDoubleField
    {
        return $this->quantity;
    }

    /**
     * @param SearchMultiSelectField $subscription
     * @return UsageSearchBasic
     */
    public function setSubscription(SearchMultiSelectField $subscription): UsageSearchBasic
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
     * @param SearchMultiSelectField $subscriptionLine
     * @return UsageSearchBasic
     */
    public function setSubscriptionLine(SearchMultiSelectField $subscriptionLine): UsageSearchBasic
    {
        $this->subscriptionLine = $subscriptionLine;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscriptionLine(): SearchMultiSelectField
    {
        return $this->subscriptionLine;
    }

    /**
     * @param SearchMultiSelectField $subscriptionPlan
     * @return UsageSearchBasic
     */
    public function setSubscriptionPlan(SearchMultiSelectField $subscriptionPlan): UsageSearchBasic
    {
        $this->subscriptionPlan = $subscriptionPlan;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscriptionPlan(): SearchMultiSelectField
    {
        return $this->subscriptionPlan;
    }

}
