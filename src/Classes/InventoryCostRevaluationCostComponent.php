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

class InventoryCostRevaluationCostComponent {
    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var RecordRef
     */
    protected RecordRef $componentItem;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var RecordRef
     */
    protected RecordRef $costCategory;

    static $paramtypesmap = array(
        "cost" => "float",
        "componentItem" => "RecordRef",
        "quantity" => "float",
        "units" => "RecordRef",
        "costCategory" => "RecordRef",
    );

    /**
     * @param float $cost
     * @return InventoryCostRevaluationCostComponent
     */
    public function setCost(float $cost): InventoryCostRevaluationCostComponent
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
     * @param RecordRef $componentItem
     * @return InventoryCostRevaluationCostComponent
     */
    public function setComponentItem(RecordRef $componentItem): InventoryCostRevaluationCostComponent
    {
        $this->componentItem = $componentItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getComponentItem(): RecordRef
    {
        return $this->componentItem;
    }

    /**
     * @param float $quantity
     * @return InventoryCostRevaluationCostComponent
     */
    public function setQuantity(float $quantity): InventoryCostRevaluationCostComponent
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param RecordRef $units
     * @return InventoryCostRevaluationCostComponent
     */
    public function setUnits(RecordRef $units): InventoryCostRevaluationCostComponent
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
     * @param RecordRef $costCategory
     * @return InventoryCostRevaluationCostComponent
     */
    public function setCostCategory(RecordRef $costCategory): InventoryCostRevaluationCostComponent
    {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCostCategory(): RecordRef
    {
        return $this->costCategory;
    }

}
