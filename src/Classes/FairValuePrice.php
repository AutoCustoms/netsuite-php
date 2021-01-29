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

class FairValuePrice extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemRevenueCategory;

    /**
     * @var float
     */
    protected float $fairValue;

    /**
     * @var RecordRef
     */
    protected RecordRef $fairValueFormula;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $unitsType;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var FairValuePriceFairValueRangePolicy
     */
    protected FairValuePriceFairValueRangePolicy $fairValueRangePolicy;

    /**
     * @var float
     */
    protected float $lowValue;

    /**
     * @var float
     */
    protected float $lowValuePercent;

    /**
     * @var float
     */
    protected float $highValue;

    /**
     * @var float
     */
    protected float $highValuePercent;

    /**
     * @var bool
     */
    protected bool $isVsoePrice;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var DimensionList
     */
    protected DimensionList $dimensionList;

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
        "item" => "RecordRef",
        "itemRevenueCategory" => "RecordRef",
        "fairValue" => "float",
        "fairValueFormula" => "RecordRef",
        "currency" => "RecordRef",
        "unitsType" => "RecordRef",
        "units" => "RecordRef",
        "fairValueRangePolicy" => "FairValuePriceFairValueRangePolicy",
        "lowValue" => "float",
        "lowValuePercent" => "float",
        "highValue" => "float",
        "highValuePercent" => "float",
        "isVsoePrice" => "boolean",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
        "dimensionList" => "DimensionList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return FairValuePrice
     */
    public function setCustomForm(RecordRef $customForm): FairValuePrice
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
     * @param RecordRef $item
     * @return FairValuePrice
     */
    public function setItem(RecordRef $item): FairValuePrice
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
     * @param RecordRef $itemRevenueCategory
     * @return FairValuePrice
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): FairValuePrice
    {
        $this->itemRevenueCategory = $itemRevenueCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemRevenueCategory(): RecordRef
    {
        return $this->itemRevenueCategory;
    }

    /**
     * @param float $fairValue
     * @return FairValuePrice
     */
    public function setFairValue(float $fairValue): FairValuePrice
    {
        $this->fairValue = $fairValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getFairValue(): float
    {
        return $this->fairValue;
    }

    /**
     * @param RecordRef $fairValueFormula
     * @return FairValuePrice
     */
    public function setFairValueFormula(RecordRef $fairValueFormula): FairValuePrice
    {
        $this->fairValueFormula = $fairValueFormula;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFairValueFormula(): RecordRef
    {
        return $this->fairValueFormula;
    }

    /**
     * @param RecordRef $currency
     * @return FairValuePrice
     */
    public function setCurrency(RecordRef $currency): FairValuePrice
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param RecordRef $unitsType
     * @return FairValuePrice
     */
    public function setUnitsType(RecordRef $unitsType): FairValuePrice
    {
        $this->unitsType = $unitsType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType(): RecordRef
    {
        return $this->unitsType;
    }

    /**
     * @param RecordRef $units
     * @return FairValuePrice
     */
    public function setUnits(RecordRef $units): FairValuePrice
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits(): RecordRef
    {
        return $this->units;
    }

    /**
     * @param FairValuePriceFairValueRangePolicy $fairValueRangePolicy
     * @return FairValuePrice
     */
    public function setFairValueRangePolicy(FairValuePriceFairValueRangePolicy $fairValueRangePolicy): FairValuePrice
    {
        $this->fairValueRangePolicy = $fairValueRangePolicy;
        return $this;
    }

    /**
     * @return FairValuePriceFairValueRangePolicy
     */
    public function getFairValueRangePolicy(): FairValuePriceFairValueRangePolicy
    {
        return $this->fairValueRangePolicy;
    }

    /**
     * @param float $lowValue
     * @return FairValuePrice
     */
    public function setLowValue(float $lowValue): FairValuePrice
    {
        $this->lowValue = $lowValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getLowValue(): float
    {
        return $this->lowValue;
    }

    /**
     * @param float $lowValuePercent
     * @return FairValuePrice
     */
    public function setLowValuePercent(float $lowValuePercent): FairValuePrice
    {
        $this->lowValuePercent = $lowValuePercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getLowValuePercent(): float
    {
        return $this->lowValuePercent;
    }

    /**
     * @param float $highValue
     * @return FairValuePrice
     */
    public function setHighValue(float $highValue): FairValuePrice
    {
        $this->highValue = $highValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getHighValue(): float
    {
        return $this->highValue;
    }

    /**
     * @param float $highValuePercent
     * @return FairValuePrice
     */
    public function setHighValuePercent(float $highValuePercent): FairValuePrice
    {
        $this->highValuePercent = $highValuePercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getHighValuePercent(): float
    {
        return $this->highValuePercent;
    }

    /**
     * @param bool $isVsoePrice
     * @return FairValuePrice
     */
    public function setIsVsoePrice(bool $isVsoePrice): FairValuePrice
    {
        $this->isVsoePrice = $isVsoePrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsVsoePrice(): bool
    {
        return $this->isVsoePrice;
    }

    /**
     * @param string $startDate
     * @return FairValuePrice
     */
    public function setStartDate(string $startDate): FairValuePrice
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return FairValuePrice
     */
    public function setEndDate(string $endDate): FairValuePrice
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return FairValuePrice
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): FairValuePrice
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

    /**
     * @param DimensionList $dimensionList
     * @return FairValuePrice
     */
    public function setDimensionList(DimensionList $dimensionList): FairValuePrice
    {
        $this->dimensionList = $dimensionList;
        return $this;
    }

    /**
     * @return DimensionList
     */
    public function getDimensionList(): DimensionList
    {
        return $this->dimensionList;
    }

    /**
     * @param string $internalId
     * @return FairValuePrice
     */
    public function setInternalId(string $internalId): FairValuePrice
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
     * @return FairValuePrice
     */
    public function setExternalId(string $externalId): FairValuePrice
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
