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

class ItemDemandPlanSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $alternateSourceItem;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $analysisDuration;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $demandDate;

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
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $projectionDuration;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $projectionInterval;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $projectionMethod;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $projectionStartDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $units;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "alternateSourceItem" => "SearchMultiSelectField",
        "analysisDuration" => "SearchLongField",
        "demandDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "projectionDuration" => "SearchLongField",
        "projectionInterval" => "SearchMultiSelectField",
        "projectionMethod" => "SearchEnumMultiSelectField",
        "projectionStartDate" => "SearchDateField",
        "quantity" => "SearchDoubleField",
        "subsidiary" => "SearchMultiSelectField",
        "units" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $alternateSourceItem
     * @return ItemDemandPlanSearchBasic
     */
    public function setAlternateSourceItem(SearchMultiSelectField $alternateSourceItem): ItemDemandPlanSearchBasic
    {
        $this->alternateSourceItem = $alternateSourceItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAlternateSourceItem(): SearchMultiSelectField
    {
        return $this->alternateSourceItem;
    }

    /**
     * @param SearchLongField $analysisDuration
     * @return ItemDemandPlanSearchBasic
     */
    public function setAnalysisDuration(SearchLongField $analysisDuration): ItemDemandPlanSearchBasic
    {
        $this->analysisDuration = $analysisDuration;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getAnalysisDuration(): SearchLongField
    {
        return $this->analysisDuration;
    }

    /**
     * @param SearchDateField $demandDate
     * @return ItemDemandPlanSearchBasic
     */
    public function setDemandDate(SearchDateField $demandDate): ItemDemandPlanSearchBasic
    {
        $this->demandDate = $demandDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDemandDate(): SearchDateField
    {
        return $this->demandDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ItemDemandPlanSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ItemDemandPlanSearchBasic
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
     * @return ItemDemandPlanSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ItemDemandPlanSearchBasic
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
     * @return ItemDemandPlanSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ItemDemandPlanSearchBasic
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
     * @return ItemDemandPlanSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ItemDemandPlanSearchBasic
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
     * @return ItemDemandPlanSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): ItemDemandPlanSearchBasic
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
     * @param SearchDateField $lastModifiedDate
     * @return ItemDemandPlanSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): ItemDemandPlanSearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return ItemDemandPlanSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): ItemDemandPlanSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $memo
     * @return ItemDemandPlanSearchBasic
     */
    public function setMemo(SearchStringField $memo): ItemDemandPlanSearchBasic
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
     * @param SearchLongField $projectionDuration
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionDuration(SearchLongField $projectionDuration): ItemDemandPlanSearchBasic
    {
        $this->projectionDuration = $projectionDuration;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getProjectionDuration(): SearchLongField
    {
        return $this->projectionDuration;
    }

    /**
     * @param SearchMultiSelectField $projectionInterval
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionInterval(SearchMultiSelectField $projectionInterval): ItemDemandPlanSearchBasic
    {
        $this->projectionInterval = $projectionInterval;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProjectionInterval(): SearchMultiSelectField
    {
        return $this->projectionInterval;
    }

    /**
     * @param SearchEnumMultiSelectField $projectionMethod
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionMethod(SearchEnumMultiSelectField $projectionMethod): ItemDemandPlanSearchBasic
    {
        $this->projectionMethod = $projectionMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getProjectionMethod(): SearchEnumMultiSelectField
    {
        return $this->projectionMethod;
    }

    /**
     * @param SearchDateField $projectionStartDate
     * @return ItemDemandPlanSearchBasic
     */
    public function setProjectionStartDate(SearchDateField $projectionStartDate): ItemDemandPlanSearchBasic
    {
        $this->projectionStartDate = $projectionStartDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getProjectionStartDate(): SearchDateField
    {
        return $this->projectionStartDate;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return ItemDemandPlanSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity): ItemDemandPlanSearchBasic
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
     * @param SearchMultiSelectField $subsidiary
     * @return ItemDemandPlanSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): ItemDemandPlanSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $units
     * @return ItemDemandPlanSearchBasic
     */
    public function setUnits(SearchMultiSelectField $units): ItemDemandPlanSearchBasic
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnits(): SearchMultiSelectField
    {
        return $this->units;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ItemDemandPlanSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ItemDemandPlanSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
