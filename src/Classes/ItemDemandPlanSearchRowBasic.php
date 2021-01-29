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

class ItemDemandPlanSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $alternateSourceItem;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $analysisDuration;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $demandDate;

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
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $projectionDuration;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $projectionInterval;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $projectionMethod;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $projectionStartDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityUom;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $units;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "alternateSourceItem" => "SearchColumnSelectField[]",
        "analysisDuration" => "SearchColumnLongField[]",
        "demandDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "projectionDuration" => "SearchColumnLongField[]",
        "projectionInterval" => "SearchColumnStringField[]",
        "projectionMethod" => "SearchColumnStringField[]",
        "projectionStartDate" => "SearchColumnDateField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "units" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $alternateSourceItem
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setAlternateSourceItem(SearchColumnSelectField $alternateSourceItem): ItemDemandPlanSearchRowBasic
    {
        $this->alternateSourceItem[] = $alternateSourceItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAlternateSourceItem(): array
    {
        return $this->alternateSourceItem;
    }

    /**
     * @param SearchColumnLongField[] $analysisDuration
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setAnalysisDuration(SearchColumnLongField $analysisDuration): ItemDemandPlanSearchRowBasic
    {
        $this->analysisDuration[] = $analysisDuration;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getAnalysisDuration(): array
    {
        return $this->analysisDuration;
    }

    /**
     * @param SearchColumnDateField[] $demandDate
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setDemandDate(SearchColumnDateField $demandDate): ItemDemandPlanSearchRowBasic
    {
        $this->demandDate[] = $demandDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDemandDate(): array
    {
        return $this->demandDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ItemDemandPlanSearchRowBasic
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
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ItemDemandPlanSearchRowBasic
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
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): ItemDemandPlanSearchRowBasic
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
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): ItemDemandPlanSearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): ItemDemandPlanSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): ItemDemandPlanSearchRowBasic
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
     * @param SearchColumnLongField[] $projectionDuration
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setProjectionDuration(SearchColumnLongField $projectionDuration): ItemDemandPlanSearchRowBasic
    {
        $this->projectionDuration[] = $projectionDuration;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getProjectionDuration(): array
    {
        return $this->projectionDuration;
    }

    /**
     * @param SearchColumnStringField[] $projectionInterval
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setProjectionInterval(SearchColumnStringField $projectionInterval): ItemDemandPlanSearchRowBasic
    {
        $this->projectionInterval[] = $projectionInterval;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getProjectionInterval(): array
    {
        return $this->projectionInterval;
    }

    /**
     * @param SearchColumnStringField[] $projectionMethod
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setProjectionMethod(SearchColumnStringField $projectionMethod): ItemDemandPlanSearchRowBasic
    {
        $this->projectionMethod[] = $projectionMethod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getProjectionMethod(): array
    {
        return $this->projectionMethod;
    }

    /**
     * @param SearchColumnDateField[] $projectionStartDate
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setProjectionStartDate(SearchColumnDateField $projectionStartDate): ItemDemandPlanSearchRowBasic
    {
        $this->projectionStartDate[] = $projectionStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProjectionStartDate(): array
    {
        return $this->projectionStartDate;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setQuantity(SearchColumnDoubleField $quantity): ItemDemandPlanSearchRowBasic
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
     * @param SearchColumnDoubleField[] $quantityUom
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setQuantityUom(SearchColumnDoubleField $quantityUom): ItemDemandPlanSearchRowBasic
    {
        $this->quantityUom[] = $quantityUom;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityUom(): array
    {
        return $this->quantityUom;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): ItemDemandPlanSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $units
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setUnits(SearchColumnSelectField $units): ItemDemandPlanSearchRowBasic
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
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ItemDemandPlanSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ItemDemandPlanSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
