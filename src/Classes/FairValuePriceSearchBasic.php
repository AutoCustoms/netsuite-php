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

class FairValuePriceSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fairValue;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $fairValueFormula;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $fairValueRangePolicy;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $highValue;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $highValuePercent;

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
    protected SearchBooleanField $isVsoePrice;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemRevenueCategory;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $lowValue;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $lowValuePercent;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $unitsType;

    static $paramtypesmap = array(
        "currency" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fairValue" => "SearchDoubleField",
        "fairValueFormula" => "SearchMultiSelectField",
        "fairValueRangePolicy" => "SearchEnumMultiSelectField",
        "highValue" => "SearchDoubleField",
        "highValuePercent" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isVsoePrice" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "itemRevenueCategory" => "SearchMultiSelectField",
        "lowValue" => "SearchDoubleField",
        "lowValuePercent" => "SearchDoubleField",
        "startDate" => "SearchDateField",
        "unitsType" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $currency
     * @return FairValuePriceSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): FairValuePriceSearchBasic
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
     * @param SearchDateField $endDate
     * @return FairValuePriceSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): FairValuePriceSearchBasic
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
     * @param SearchMultiSelectField $externalId
     * @return FairValuePriceSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): FairValuePriceSearchBasic
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
     * @return FairValuePriceSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): FairValuePriceSearchBasic
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
     * @param SearchDoubleField $fairValue
     * @return FairValuePriceSearchBasic
     */
    public function setFairValue(SearchDoubleField $fairValue): FairValuePriceSearchBasic
    {
        $this->fairValue = $fairValue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFairValue(): SearchDoubleField
    {
        return $this->fairValue;
    }

    /**
     * @param SearchMultiSelectField $fairValueFormula
     * @return FairValuePriceSearchBasic
     */
    public function setFairValueFormula(SearchMultiSelectField $fairValueFormula): FairValuePriceSearchBasic
    {
        $this->fairValueFormula = $fairValueFormula;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFairValueFormula(): SearchMultiSelectField
    {
        return $this->fairValueFormula;
    }

    /**
     * @param SearchEnumMultiSelectField $fairValueRangePolicy
     * @return FairValuePriceSearchBasic
     */
    public function setFairValueRangePolicy(SearchEnumMultiSelectField $fairValueRangePolicy): FairValuePriceSearchBasic
    {
        $this->fairValueRangePolicy = $fairValueRangePolicy;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFairValueRangePolicy(): SearchEnumMultiSelectField
    {
        return $this->fairValueRangePolicy;
    }

    /**
     * @param SearchDoubleField $highValue
     * @return FairValuePriceSearchBasic
     */
    public function setHighValue(SearchDoubleField $highValue): FairValuePriceSearchBasic
    {
        $this->highValue = $highValue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getHighValue(): SearchDoubleField
    {
        return $this->highValue;
    }

    /**
     * @param SearchDoubleField $highValuePercent
     * @return FairValuePriceSearchBasic
     */
    public function setHighValuePercent(SearchDoubleField $highValuePercent): FairValuePriceSearchBasic
    {
        $this->highValuePercent = $highValuePercent;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getHighValuePercent(): SearchDoubleField
    {
        return $this->highValuePercent;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return FairValuePriceSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): FairValuePriceSearchBasic
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
     * @return FairValuePriceSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): FairValuePriceSearchBasic
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
     * @param SearchBooleanField $isVsoePrice
     * @return FairValuePriceSearchBasic
     */
    public function setIsVsoePrice(SearchBooleanField $isVsoePrice): FairValuePriceSearchBasic
    {
        $this->isVsoePrice = $isVsoePrice;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsVsoePrice(): SearchBooleanField
    {
        return $this->isVsoePrice;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return FairValuePriceSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): FairValuePriceSearchBasic
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
     * @param SearchMultiSelectField $itemRevenueCategory
     * @return FairValuePriceSearchBasic
     */
    public function setItemRevenueCategory(SearchMultiSelectField $itemRevenueCategory): FairValuePriceSearchBasic
    {
        $this->itemRevenueCategory = $itemRevenueCategory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemRevenueCategory(): SearchMultiSelectField
    {
        return $this->itemRevenueCategory;
    }

    /**
     * @param SearchDoubleField $lowValue
     * @return FairValuePriceSearchBasic
     */
    public function setLowValue(SearchDoubleField $lowValue): FairValuePriceSearchBasic
    {
        $this->lowValue = $lowValue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLowValue(): SearchDoubleField
    {
        return $this->lowValue;
    }

    /**
     * @param SearchDoubleField $lowValuePercent
     * @return FairValuePriceSearchBasic
     */
    public function setLowValuePercent(SearchDoubleField $lowValuePercent): FairValuePriceSearchBasic
    {
        $this->lowValuePercent = $lowValuePercent;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLowValuePercent(): SearchDoubleField
    {
        return $this->lowValuePercent;
    }

    /**
     * @param SearchDateField $startDate
     * @return FairValuePriceSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): FairValuePriceSearchBasic
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
     * @param SearchMultiSelectField $unitsType
     * @return FairValuePriceSearchBasic
     */
    public function setUnitsType(SearchMultiSelectField $unitsType): FairValuePriceSearchBasic
    {
        $this->unitsType = $unitsType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnitsType(): SearchMultiSelectField
    {
        return $this->unitsType;
    }

}
