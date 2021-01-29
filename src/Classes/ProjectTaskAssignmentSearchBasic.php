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

class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $actualWork;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $cost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costBase;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedWork;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedWorkBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $grossProfit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $grossProfitBase;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $plannedWork;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $plannedWorkBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $price;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $priceBase;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $resource;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $resourceName;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $serviceItem;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $serviceItemDesc;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unitCost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unitCostBase;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unitPrice;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unitPriceBase;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $units;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $workCalendar;

    static $paramtypesmap = array(
        "actualWork" => "SearchDoubleField",
        "cost" => "SearchDoubleField",
        "costBase" => "SearchDoubleField",
        "endDate" => "SearchDateField",
        "estimatedWork" => "SearchDoubleField",
        "estimatedWorkBaseline" => "SearchDoubleField",
        "grossProfit" => "SearchDoubleField",
        "grossProfitBase" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "plannedWork" => "SearchDoubleField",
        "plannedWorkBaseline" => "SearchDoubleField",
        "price" => "SearchDoubleField",
        "priceBase" => "SearchDoubleField",
        "resource" => "SearchMultiSelectField",
        "resourceName" => "SearchStringField",
        "serviceItem" => "SearchStringField",
        "serviceItemDesc" => "SearchStringField",
        "startDate" => "SearchDateField",
        "unitCost" => "SearchDoubleField",
        "unitCostBase" => "SearchDoubleField",
        "unitPrice" => "SearchDoubleField",
        "unitPriceBase" => "SearchDoubleField",
        "units" => "SearchDoubleField",
        "workCalendar" => "SearchMultiSelectField",
    );

    /**
     * @param SearchDoubleField $actualWork
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setActualWork(SearchDoubleField $actualWork): ProjectTaskAssignmentSearchBasic
    {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualWork(): SearchDoubleField
    {
        return $this->actualWork;
    }

    /**
     * @param SearchDoubleField $cost
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setCost(SearchDoubleField $cost): ProjectTaskAssignmentSearchBasic
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost(): SearchDoubleField
    {
        return $this->cost;
    }

    /**
     * @param SearchDoubleField $costBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setCostBase(SearchDoubleField $costBase): ProjectTaskAssignmentSearchBasic
    {
        $this->costBase = $costBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBase(): SearchDoubleField
    {
        return $this->costBase;
    }

    /**
     * @param SearchDateField $endDate
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): ProjectTaskAssignmentSearchBasic
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
     * @param SearchDoubleField $estimatedWork
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setEstimatedWork(SearchDoubleField $estimatedWork): ProjectTaskAssignmentSearchBasic
    {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWork(): SearchDoubleField
    {
        return $this->estimatedWork;
    }

    /**
     * @param SearchDoubleField $estimatedWorkBaseline
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setEstimatedWorkBaseline(SearchDoubleField $estimatedWorkBaseline): ProjectTaskAssignmentSearchBasic
    {
        $this->estimatedWorkBaseline = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkBaseline(): SearchDoubleField
    {
        return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchDoubleField $grossProfit
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setGrossProfit(SearchDoubleField $grossProfit): ProjectTaskAssignmentSearchBasic
    {
        $this->grossProfit = $grossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossProfit(): SearchDoubleField
    {
        return $this->grossProfit;
    }

    /**
     * @param SearchDoubleField $grossProfitBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setGrossProfitBase(SearchDoubleField $grossProfitBase): ProjectTaskAssignmentSearchBasic
    {
        $this->grossProfitBase = $grossProfitBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossProfitBase(): SearchDoubleField
    {
        return $this->grossProfitBase;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ProjectTaskAssignmentSearchBasic
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
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ProjectTaskAssignmentSearchBasic
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
     * @param SearchDoubleField $plannedWork
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setPlannedWork(SearchDoubleField $plannedWork): ProjectTaskAssignmentSearchBasic
    {
        $this->plannedWork = $plannedWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPlannedWork(): SearchDoubleField
    {
        return $this->plannedWork;
    }

    /**
     * @param SearchDoubleField $plannedWorkBaseline
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setPlannedWorkBaseline(SearchDoubleField $plannedWorkBaseline): ProjectTaskAssignmentSearchBasic
    {
        $this->plannedWorkBaseline = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPlannedWorkBaseline(): SearchDoubleField
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param SearchDoubleField $price
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setPrice(SearchDoubleField $price): ProjectTaskAssignmentSearchBasic
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPrice(): SearchDoubleField
    {
        return $this->price;
    }

    /**
     * @param SearchDoubleField $priceBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setPriceBase(SearchDoubleField $priceBase): ProjectTaskAssignmentSearchBasic
    {
        $this->priceBase = $priceBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPriceBase(): SearchDoubleField
    {
        return $this->priceBase;
    }

    /**
     * @param SearchMultiSelectField $resource
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setResource(SearchMultiSelectField $resource): ProjectTaskAssignmentSearchBasic
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResource(): SearchMultiSelectField
    {
        return $this->resource;
    }

    /**
     * @param SearchStringField $resourceName
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setResourceName(SearchStringField $resourceName): ProjectTaskAssignmentSearchBasic
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getResourceName(): SearchStringField
    {
        return $this->resourceName;
    }

    /**
     * @param SearchStringField $serviceItem
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setServiceItem(SearchStringField $serviceItem): ProjectTaskAssignmentSearchBasic
    {
        $this->serviceItem = $serviceItem;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getServiceItem(): SearchStringField
    {
        return $this->serviceItem;
    }

    /**
     * @param SearchStringField $serviceItemDesc
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setServiceItemDesc(SearchStringField $serviceItemDesc): ProjectTaskAssignmentSearchBasic
    {
        $this->serviceItemDesc = $serviceItemDesc;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getServiceItemDesc(): SearchStringField
    {
        return $this->serviceItemDesc;
    }

    /**
     * @param SearchDateField $startDate
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): ProjectTaskAssignmentSearchBasic
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
     * @param SearchDoubleField $unitCost
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitCost(SearchDoubleField $unitCost): ProjectTaskAssignmentSearchBasic
    {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitCost(): SearchDoubleField
    {
        return $this->unitCost;
    }

    /**
     * @param SearchDoubleField $unitCostBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitCostBase(SearchDoubleField $unitCostBase): ProjectTaskAssignmentSearchBasic
    {
        $this->unitCostBase = $unitCostBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitCostBase(): SearchDoubleField
    {
        return $this->unitCostBase;
    }

    /**
     * @param SearchDoubleField $unitPrice
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitPrice(SearchDoubleField $unitPrice): ProjectTaskAssignmentSearchBasic
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitPrice(): SearchDoubleField
    {
        return $this->unitPrice;
    }

    /**
     * @param SearchDoubleField $unitPriceBase
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnitPriceBase(SearchDoubleField $unitPriceBase): ProjectTaskAssignmentSearchBasic
    {
        $this->unitPriceBase = $unitPriceBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitPriceBase(): SearchDoubleField
    {
        return $this->unitPriceBase;
    }

    /**
     * @param SearchDoubleField $units
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setUnits(SearchDoubleField $units): ProjectTaskAssignmentSearchBasic
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnits(): SearchDoubleField
    {
        return $this->units;
    }

    /**
     * @param SearchMultiSelectField $workCalendar
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar): ProjectTaskAssignmentSearchBasic
    {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar(): SearchMultiSelectField
    {
        return $this->workCalendar;
    }

}
