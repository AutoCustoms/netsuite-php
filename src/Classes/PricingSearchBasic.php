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

class PricingSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $assignedPriceLevel;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

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
     * @var SearchDoubleField
     */
    protected SearchDoubleField $maximumQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $minimumQuantity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $priceLevel;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $rate;

    static $paramtypesmap = array(
        "assignedPriceLevel" => "SearchBooleanField",
        "currency" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "maximumQuantity" => "SearchDoubleField",
        "minimumQuantity" => "SearchDoubleField",
        "priceLevel" => "SearchMultiSelectField",
        "rate" => "SearchDoubleField",
    );

    /**
     * @param SearchBooleanField $assignedPriceLevel
     * @return PricingSearchBasic
     */
    public function setAssignedPriceLevel(SearchBooleanField $assignedPriceLevel): PricingSearchBasic
    {
        $this->assignedPriceLevel = $assignedPriceLevel;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAssignedPriceLevel(): SearchBooleanField
    {
        return $this->assignedPriceLevel;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return PricingSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): PricingSearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return PricingSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): PricingSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return PricingSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PricingSearchBasic
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
     * @return PricingSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PricingSearchBasic
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
     * @return PricingSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): PricingSearchBasic
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
     * @param SearchDoubleField $maximumQuantity
     * @return PricingSearchBasic
     */
    public function setMaximumQuantity(SearchDoubleField $maximumQuantity): PricingSearchBasic
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getMaximumQuantity(): SearchDoubleField
    {
        return $this->maximumQuantity;
    }

    /**
     * @param SearchDoubleField $minimumQuantity
     * @return PricingSearchBasic
     */
    public function setMinimumQuantity(SearchDoubleField $minimumQuantity): PricingSearchBasic
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getMinimumQuantity(): SearchDoubleField
    {
        return $this->minimumQuantity;
    }

    /**
     * @param SearchMultiSelectField $priceLevel
     * @return PricingSearchBasic
     */
    public function setPriceLevel(SearchMultiSelectField $priceLevel): PricingSearchBasic
    {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriceLevel(): SearchMultiSelectField
    {
        return $this->priceLevel;
    }

    /**
     * @param SearchDoubleField $rate
     * @return PricingSearchBasic
     */
    public function setRate(SearchDoubleField $rate): PricingSearchBasic
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRate(): SearchDoubleField
    {
        return $this->rate;
    }

}
