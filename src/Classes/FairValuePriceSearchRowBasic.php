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

class FairValuePriceSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fairValue;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $fairValueFormula;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $fairValueRangePolicy;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $highValue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $highValuePercent;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isVsoePrice;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $itemRevenueCategory;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $lowValue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $lowValuePercent;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $units;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $unitsType;

    static $paramtypesmap = array(
        "currency" => "SearchColumnSelectField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fairValue" => "SearchColumnDoubleField[]",
        "fairValueFormula" => "SearchColumnSelectField[]",
        "fairValueRangePolicy" => "SearchColumnEnumSelectField[]",
        "highValue" => "SearchColumnDoubleField[]",
        "highValuePercent" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isVsoePrice" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "itemRevenueCategory" => "SearchColumnSelectField[]",
        "lowValue" => "SearchColumnDoubleField[]",
        "lowValuePercent" => "SearchColumnDoubleField[]",
        "startDate" => "SearchColumnDateField[]",
        "units" => "SearchColumnSelectField[]",
        "unitsType" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnSelectField[] $currency
     * @return FairValuePriceSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): FairValuePriceSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return FairValuePriceSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): FairValuePriceSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return FairValuePriceSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): FairValuePriceSearchRowBasic
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
     * @param SearchColumnDoubleField[] $fairValue
     * @return FairValuePriceSearchRowBasic
     */
    public function setFairValue(SearchColumnDoubleField $fairValue): FairValuePriceSearchRowBasic
    {
        $this->fairValue[] = $fairValue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFairValue(): array
    {
        return $this->fairValue;
    }

    /**
     * @param SearchColumnSelectField[] $fairValueFormula
     * @return FairValuePriceSearchRowBasic
     */
    public function setFairValueFormula(SearchColumnSelectField $fairValueFormula): FairValuePriceSearchRowBasic
    {
        $this->fairValueFormula[] = $fairValueFormula;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFairValueFormula(): array
    {
        return $this->fairValueFormula;
    }

    /**
     * @param SearchColumnEnumSelectField[] $fairValueRangePolicy
     * @return FairValuePriceSearchRowBasic
     */
    public function setFairValueRangePolicy(SearchColumnEnumSelectField $fairValueRangePolicy): FairValuePriceSearchRowBasic
    {
        $this->fairValueRangePolicy[] = $fairValueRangePolicy;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFairValueRangePolicy(): array
    {
        return $this->fairValueRangePolicy;
    }

    /**
     * @param SearchColumnDoubleField[] $highValue
     * @return FairValuePriceSearchRowBasic
     */
    public function setHighValue(SearchColumnDoubleField $highValue): FairValuePriceSearchRowBasic
    {
        $this->highValue[] = $highValue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getHighValue(): array
    {
        return $this->highValue;
    }

    /**
     * @param SearchColumnDoubleField[] $highValuePercent
     * @return FairValuePriceSearchRowBasic
     */
    public function setHighValuePercent(SearchColumnDoubleField $highValuePercent): FairValuePriceSearchRowBasic
    {
        $this->highValuePercent[] = $highValuePercent;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getHighValuePercent(): array
    {
        return $this->highValuePercent;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return FairValuePriceSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): FairValuePriceSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isVsoePrice
     * @return FairValuePriceSearchRowBasic
     */
    public function setIsVsoePrice(SearchColumnBooleanField $isVsoePrice): FairValuePriceSearchRowBasic
    {
        $this->isVsoePrice[] = $isVsoePrice;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsVsoePrice(): array
    {
        return $this->isVsoePrice;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return FairValuePriceSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): FairValuePriceSearchRowBasic
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
     * @param SearchColumnSelectField[] $itemRevenueCategory
     * @return FairValuePriceSearchRowBasic
     */
    public function setItemRevenueCategory(SearchColumnSelectField $itemRevenueCategory): FairValuePriceSearchRowBasic
    {
        $this->itemRevenueCategory[] = $itemRevenueCategory;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItemRevenueCategory(): array
    {
        return $this->itemRevenueCategory;
    }

    /**
     * @param SearchColumnDoubleField[] $lowValue
     * @return FairValuePriceSearchRowBasic
     */
    public function setLowValue(SearchColumnDoubleField $lowValue): FairValuePriceSearchRowBasic
    {
        $this->lowValue[] = $lowValue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLowValue(): array
    {
        return $this->lowValue;
    }

    /**
     * @param SearchColumnDoubleField[] $lowValuePercent
     * @return FairValuePriceSearchRowBasic
     */
    public function setLowValuePercent(SearchColumnDoubleField $lowValuePercent): FairValuePriceSearchRowBasic
    {
        $this->lowValuePercent[] = $lowValuePercent;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLowValuePercent(): array
    {
        return $this->lowValuePercent;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return FairValuePriceSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): FairValuePriceSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnSelectField[] $units
     * @return FairValuePriceSearchRowBasic
     */
    public function setUnits(SearchColumnSelectField $units): FairValuePriceSearchRowBasic
    {
        $this->units[] = $units;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnits(): array
    {
        return $this->units;
    }

    /**
     * @param SearchColumnSelectField[] $unitsType
     * @return FairValuePriceSearchRowBasic
     */
    public function setUnitsType(SearchColumnSelectField $unitsType): FairValuePriceSearchRowBasic
    {
        $this->unitsType[] = $unitsType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnitsType(): array
    {
        return $this->unitsType;
    }

}
