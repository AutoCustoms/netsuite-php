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

class ProjectTaskAssignmentSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $actualWork;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $cost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costBase;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedWork;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedWorkBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $grossProfit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $grossProfitBase;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $plannedWork;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $plannedWorkBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $price;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $priceBase;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $resource;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $resourceName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $serviceItem;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $serviceItemDesc;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unitCost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unitCostBase;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unitPrice;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unitPriceBase;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $units;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $workCalendar;

    static $paramtypesmap = array(
        "actualWork" => "SearchColumnDoubleField[]",
        "cost" => "SearchColumnDoubleField[]",
        "costBase" => "SearchColumnDoubleField[]",
        "endDate" => "SearchColumnDateField[]",
        "estimatedWork" => "SearchColumnDoubleField[]",
        "estimatedWorkBaseline" => "SearchColumnDoubleField[]",
        "grossProfit" => "SearchColumnDoubleField[]",
        "grossProfitBase" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "plannedWork" => "SearchColumnDoubleField[]",
        "plannedWorkBaseline" => "SearchColumnDoubleField[]",
        "price" => "SearchColumnDoubleField[]",
        "priceBase" => "SearchColumnDoubleField[]",
        "resource" => "SearchColumnSelectField[]",
        "resourceName" => "SearchColumnStringField[]",
        "serviceItem" => "SearchColumnStringField[]",
        "serviceItemDesc" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "unitCost" => "SearchColumnDoubleField[]",
        "unitCostBase" => "SearchColumnDoubleField[]",
        "unitPrice" => "SearchColumnDoubleField[]",
        "unitPriceBase" => "SearchColumnDoubleField[]",
        "units" => "SearchColumnDoubleField[]",
        "workCalendar" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnDoubleField[] $actualWork
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setActualWork(SearchColumnDoubleField $actualWork): ProjectTaskAssignmentSearchRowBasic
    {
        $this->actualWork[] = $actualWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualWork(): array
    {
        return $this->actualWork;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setCost(SearchColumnDoubleField $cost): ProjectTaskAssignmentSearchRowBasic
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost(): array
    {
        return $this->cost;
    }

    /**
     * @param SearchColumnDoubleField[] $costBase
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setCostBase(SearchColumnDoubleField $costBase): ProjectTaskAssignmentSearchRowBasic
    {
        $this->costBase[] = $costBase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBase(): array
    {
        return $this->costBase;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): ProjectTaskAssignmentSearchRowBasic
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
     * @param SearchColumnDoubleField[] $estimatedWork
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setEstimatedWork(SearchColumnDoubleField $estimatedWork): ProjectTaskAssignmentSearchRowBasic
    {
        $this->estimatedWork[] = $estimatedWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWork(): array
    {
        return $this->estimatedWork;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWorkBaseline
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setEstimatedWorkBaseline(SearchColumnDoubleField $estimatedWorkBaseline): ProjectTaskAssignmentSearchRowBasic
    {
        $this->estimatedWorkBaseline[] = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkBaseline(): array
    {
        return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $grossProfit
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setGrossProfit(SearchColumnDoubleField $grossProfit): ProjectTaskAssignmentSearchRowBasic
    {
        $this->grossProfit[] = $grossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossProfit(): array
    {
        return $this->grossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $grossProfitBase
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setGrossProfitBase(SearchColumnDoubleField $grossProfitBase): ProjectTaskAssignmentSearchRowBasic
    {
        $this->grossProfitBase[] = $grossProfitBase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossProfitBase(): array
    {
        return $this->grossProfitBase;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ProjectTaskAssignmentSearchRowBasic
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
     * @param SearchColumnDoubleField[] $plannedWork
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setPlannedWork(SearchColumnDoubleField $plannedWork): ProjectTaskAssignmentSearchRowBasic
    {
        $this->plannedWork[] = $plannedWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPlannedWork(): array
    {
        return $this->plannedWork;
    }

    /**
     * @param SearchColumnDoubleField[] $plannedWorkBaseline
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setPlannedWorkBaseline(SearchColumnDoubleField $plannedWorkBaseline): ProjectTaskAssignmentSearchRowBasic
    {
        $this->plannedWorkBaseline[] = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPlannedWorkBaseline(): array
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $price
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setPrice(SearchColumnDoubleField $price): ProjectTaskAssignmentSearchRowBasic
    {
        $this->price[] = $price;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPrice(): array
    {
        return $this->price;
    }

    /**
     * @param SearchColumnDoubleField[] $priceBase
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setPriceBase(SearchColumnDoubleField $priceBase): ProjectTaskAssignmentSearchRowBasic
    {
        $this->priceBase[] = $priceBase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPriceBase(): array
    {
        return $this->priceBase;
    }

    /**
     * @param SearchColumnSelectField[] $resource
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setResource(SearchColumnSelectField $resource): ProjectTaskAssignmentSearchRowBasic
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResource(): array
    {
        return $this->resource;
    }

    /**
     * @param SearchColumnStringField[] $resourceName
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setResourceName(SearchColumnStringField $resourceName): ProjectTaskAssignmentSearchRowBasic
    {
        $this->resourceName[] = $resourceName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getResourceName(): array
    {
        return $this->resourceName;
    }

    /**
     * @param SearchColumnStringField[] $serviceItem
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setServiceItem(SearchColumnStringField $serviceItem): ProjectTaskAssignmentSearchRowBasic
    {
        $this->serviceItem[] = $serviceItem;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getServiceItem(): array
    {
        return $this->serviceItem;
    }

    /**
     * @param SearchColumnStringField[] $serviceItemDesc
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setServiceItemDesc(SearchColumnStringField $serviceItemDesc): ProjectTaskAssignmentSearchRowBasic
    {
        $this->serviceItemDesc[] = $serviceItemDesc;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getServiceItemDesc(): array
    {
        return $this->serviceItemDesc;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): ProjectTaskAssignmentSearchRowBasic
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
     * @param SearchColumnDoubleField[] $unitCost
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitCost(SearchColumnDoubleField $unitCost): ProjectTaskAssignmentSearchRowBasic
    {
        $this->unitCost[] = $unitCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitCost(): array
    {
        return $this->unitCost;
    }

    /**
     * @param SearchColumnDoubleField[] $unitCostBase
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitCostBase(SearchColumnDoubleField $unitCostBase): ProjectTaskAssignmentSearchRowBasic
    {
        $this->unitCostBase[] = $unitCostBase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitCostBase(): array
    {
        return $this->unitCostBase;
    }

    /**
     * @param SearchColumnDoubleField[] $unitPrice
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitPrice(SearchColumnDoubleField $unitPrice): ProjectTaskAssignmentSearchRowBasic
    {
        $this->unitPrice[] = $unitPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitPrice(): array
    {
        return $this->unitPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $unitPriceBase
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnitPriceBase(SearchColumnDoubleField $unitPriceBase): ProjectTaskAssignmentSearchRowBasic
    {
        $this->unitPriceBase[] = $unitPriceBase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitPriceBase(): array
    {
        return $this->unitPriceBase;
    }

    /**
     * @param SearchColumnDoubleField[] $units
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setUnits(SearchColumnDoubleField $units): ProjectTaskAssignmentSearchRowBasic
    {
        $this->units[] = $units;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnits(): array
    {
        return $this->units;
    }

    /**
     * @param SearchColumnSelectField[] $workCalendar
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function setWorkCalendar(SearchColumnSelectField $workCalendar): ProjectTaskAssignmentSearchRowBasic
    {
        $this->workCalendar[] = $workCalendar;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkCalendar(): array
    {
        return $this->workCalendar;
    }

}
