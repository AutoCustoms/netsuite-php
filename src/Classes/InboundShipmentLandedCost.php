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

class InboundShipmentLandedCost {
    /**
     * @var RecordRef
     */
    protected RecordRef $landedCostCostCategory;

    /**
     * @var float
     */
    protected float $landedCostAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $landedCostCurrency;

    /**
     * @var float
     */
    protected float $landedCostExchangeRate;

    /**
     * @var string
     */
    protected string $landedCostEffectiveDate;

    /**
     * @var InboundShipmentLandedCostAllocationMethod
     */
    protected InboundShipmentLandedCostAllocationMethod $landedCostAllocationMethod;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $landedCostShipmentItemsList;

    static $paramtypesmap = array(
        "landedCostCostCategory" => "RecordRef",
        "landedCostAmount" => "float",
        "landedCostCurrency" => "RecordRef",
        "landedCostExchangeRate" => "float",
        "landedCostEffectiveDate" => "dateTime",
        "landedCostAllocationMethod" => "InboundShipmentLandedCostAllocationMethod",
        "landedCostShipmentItemsList" => "RecordRefList",
    );

    /**
     * @param RecordRef $landedCostCostCategory
     * @return InboundShipmentLandedCost
     */
    public function setLandedCostCostCategory(RecordRef $landedCostCostCategory): InboundShipmentLandedCost
    {
        $this->landedCostCostCategory = $landedCostCostCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLandedCostCostCategory(): RecordRef
    {
        return $this->landedCostCostCategory;
    }

    /**
     * @param float $landedCostAmount
     * @return InboundShipmentLandedCost
     */
    public function setLandedCostAmount(float $landedCostAmount): InboundShipmentLandedCost
    {
        $this->landedCostAmount = $landedCostAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLandedCostAmount(): float
    {
        return $this->landedCostAmount;
    }

    /**
     * @param RecordRef $landedCostCurrency
     * @return InboundShipmentLandedCost
     */
    public function setLandedCostCurrency(RecordRef $landedCostCurrency): InboundShipmentLandedCost
    {
        $this->landedCostCurrency = $landedCostCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLandedCostCurrency(): RecordRef
    {
        return $this->landedCostCurrency;
    }

    /**
     * @param float $landedCostExchangeRate
     * @return InboundShipmentLandedCost
     */
    public function setLandedCostExchangeRate(float $landedCostExchangeRate): InboundShipmentLandedCost
    {
        $this->landedCostExchangeRate = $landedCostExchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getLandedCostExchangeRate(): float
    {
        return $this->landedCostExchangeRate;
    }

    /**
     * @param string $landedCostEffectiveDate
     * @return InboundShipmentLandedCost
     */
    public function setLandedCostEffectiveDate(string $landedCostEffectiveDate): InboundShipmentLandedCost
    {
        $this->landedCostEffectiveDate = $landedCostEffectiveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLandedCostEffectiveDate(): string
    {
        return $this->landedCostEffectiveDate;
    }

    /**
     * @param InboundShipmentLandedCostAllocationMethod $landedCostAllocationMethod
     * @return InboundShipmentLandedCost
     */
    public function setLandedCostAllocationMethod(InboundShipmentLandedCostAllocationMethod $landedCostAllocationMethod): InboundShipmentLandedCost
    {
        $this->landedCostAllocationMethod = $landedCostAllocationMethod;
        return $this;
    }

    /**
     * @return InboundShipmentLandedCostAllocationMethod
     */
    public function getLandedCostAllocationMethod(): InboundShipmentLandedCostAllocationMethod
    {
        return $this->landedCostAllocationMethod;
    }

    /**
     * @param RecordRefList $landedCostShipmentItemsList
     * @return InboundShipmentLandedCost
     */
    public function setLandedCostShipmentItemsList(RecordRefList $landedCostShipmentItemsList): InboundShipmentLandedCost
    {
        $this->landedCostShipmentItemsList = $landedCostShipmentItemsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLandedCostShipmentItemsList(): RecordRefList
    {
        return $this->landedCostShipmentItemsList;
    }

}
