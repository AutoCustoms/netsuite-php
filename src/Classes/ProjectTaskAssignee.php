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

class ProjectTaskAssignee {
    /**
     * @var RecordRef
     */
    protected RecordRef $resource;

    /**
     * @var float
     */
    protected float $units;

    /**
     * @var RecordRef
     */
    protected RecordRef $serviceItem;

    /**
     * @var float
     */
    protected float $estimatedWork;

    /**
     * @var float
     */
    protected float $unitCost;

    /**
     * @var float
     */
    protected float $unitPrice;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var float
     */
    protected float $price;

    /**
     * @var float
     */
    protected float $plannedWork;

    static $paramtypesmap = array(
        "resource" => "RecordRef",
        "units" => "float",
        "serviceItem" => "RecordRef",
        "estimatedWork" => "float",
        "unitCost" => "float",
        "unitPrice" => "float",
        "cost" => "float",
        "price" => "float",
        "plannedWork" => "float",
    );

    /**
     * @param RecordRef $resource
     * @return ProjectTaskAssignee
     */
    public function setResource(RecordRef $resource): ProjectTaskAssignee
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getResource(): RecordRef
    {
        return $this->resource;
    }

    /**
     * @param float $units
     * @return ProjectTaskAssignee
     */
    public function setUnits(float $units): ProjectTaskAssignee
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnits(): float
    {
        return $this->units;
    }

    /**
     * @param RecordRef $serviceItem
     * @return ProjectTaskAssignee
     */
    public function setServiceItem(RecordRef $serviceItem): ProjectTaskAssignee
    {
        $this->serviceItem = $serviceItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getServiceItem(): RecordRef
    {
        return $this->serviceItem;
    }

    /**
     * @param float $estimatedWork
     * @return ProjectTaskAssignee
     */
    public function setEstimatedWork(float $estimatedWork): ProjectTaskAssignee
    {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWork(): float
    {
        return $this->estimatedWork;
    }

    /**
     * @param float $unitCost
     * @return ProjectTaskAssignee
     */
    public function setUnitCost(float $unitCost): ProjectTaskAssignee
    {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitCost(): float
    {
        return $this->unitCost;
    }

    /**
     * @param float $unitPrice
     * @return ProjectTaskAssignee
     */
    public function setUnitPrice(float $unitPrice): ProjectTaskAssignee
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * @param float $cost
     * @return ProjectTaskAssignee
     */
    public function setCost(float $cost): ProjectTaskAssignee
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $price
     * @return ProjectTaskAssignee
     */
    public function setPrice(float $price): ProjectTaskAssignee
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $plannedWork
     * @return ProjectTaskAssignee
     */
    public function setPlannedWork(float $plannedWork): ProjectTaskAssignee
    {
        $this->plannedWork = $plannedWork;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlannedWork(): float
    {
        return $this->plannedWork;
    }

}
