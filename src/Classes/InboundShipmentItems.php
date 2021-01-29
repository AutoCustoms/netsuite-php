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

class InboundShipmentItems {
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseOrder;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipmentItem;

    /**
     * @var string
     */
    protected string $shipmentItemDescription;

    /**
     * @var string
     */
    protected string $poVendor;

    /**
     * @var RecordRef
     */
    protected RecordRef $receivingLocation;

    /**
     * @var float
     */
    protected float $quantityReceived;

    /**
     * @var float
     */
    protected float $quantityExpected;

    /**
     * @var float
     */
    protected float $quantityRemaining;

    /**
     * @var RecordRef
     */
    protected RecordRef $unit;

    /**
     * @var float
     */
    protected float $poRate;

    /**
     * @var float
     */
    protected float $expectedRate;

    /**
     * @var float
     */
    protected float $shipmentItemExchangeRate;

    /**
     * @var string
     */
    protected string $shipmentItemEffectiveDate;

    /**
     * @var float
     */
    protected float $unitLandedCost;

    /**
     * @var float
     */
    protected float $totalUnitCost;

    /**
     * @var float
     */
    protected float $shipmentItemAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $poCurrency;

    /**
     * @var RecordRef
     */
    protected RecordRef $incoterm;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    static $paramtypesmap = array(
        "id" => "integer",
        "purchaseOrder" => "RecordRef",
        "shipmentItem" => "RecordRef",
        "shipmentItemDescription" => "string",
        "poVendor" => "string",
        "receivingLocation" => "RecordRef",
        "quantityReceived" => "float",
        "quantityExpected" => "float",
        "quantityRemaining" => "float",
        "unit" => "RecordRef",
        "poRate" => "float",
        "expectedRate" => "float",
        "shipmentItemExchangeRate" => "float",
        "shipmentItemEffectiveDate" => "dateTime",
        "unitLandedCost" => "float",
        "totalUnitCost" => "float",
        "shipmentItemAmount" => "float",
        "poCurrency" => "RecordRef",
        "incoterm" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
    );

    /**
     * @param int $id
     * @return InboundShipmentItems
     */
    public function setId(int $id): InboundShipmentItems
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param RecordRef $purchaseOrder
     * @return InboundShipmentItems
     */
    public function setPurchaseOrder(RecordRef $purchaseOrder): InboundShipmentItems
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseOrder(): RecordRef
    {
        return $this->purchaseOrder;
    }

    /**
     * @param RecordRef $shipmentItem
     * @return InboundShipmentItems
     */
    public function setShipmentItem(RecordRef $shipmentItem): InboundShipmentItems
    {
        $this->shipmentItem = $shipmentItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipmentItem(): RecordRef
    {
        return $this->shipmentItem;
    }

    /**
     * @param string $shipmentItemDescription
     * @return InboundShipmentItems
     */
    public function setShipmentItemDescription(string $shipmentItemDescription): InboundShipmentItems
    {
        $this->shipmentItemDescription = $shipmentItemDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentItemDescription(): string
    {
        return $this->shipmentItemDescription;
    }

    /**
     * @param string $poVendor
     * @return InboundShipmentItems
     */
    public function setPoVendor(string $poVendor): InboundShipmentItems
    {
        $this->poVendor = $poVendor;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoVendor(): string
    {
        return $this->poVendor;
    }

    /**
     * @param RecordRef $receivingLocation
     * @return InboundShipmentItems
     */
    public function setReceivingLocation(RecordRef $receivingLocation): InboundShipmentItems
    {
        $this->receivingLocation = $receivingLocation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReceivingLocation(): RecordRef
    {
        return $this->receivingLocation;
    }

    /**
     * @param float $quantityReceived
     * @return InboundShipmentItems
     */
    public function setQuantityReceived(float $quantityReceived): InboundShipmentItems
    {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityReceived(): float
    {
        return $this->quantityReceived;
    }

    /**
     * @param float $quantityExpected
     * @return InboundShipmentItems
     */
    public function setQuantityExpected(float $quantityExpected): InboundShipmentItems
    {
        $this->quantityExpected = $quantityExpected;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityExpected(): float
    {
        return $this->quantityExpected;
    }

    /**
     * @param float $quantityRemaining
     * @return InboundShipmentItems
     */
    public function setQuantityRemaining(float $quantityRemaining): InboundShipmentItems
    {
        $this->quantityRemaining = $quantityRemaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityRemaining(): float
    {
        return $this->quantityRemaining;
    }

    /**
     * @param RecordRef $unit
     * @return InboundShipmentItems
     */
    public function setUnit(RecordRef $unit): InboundShipmentItems
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnit(): RecordRef
    {
        return $this->unit;
    }

    /**
     * @param float $poRate
     * @return InboundShipmentItems
     */
    public function setPoRate(float $poRate): InboundShipmentItems
    {
        $this->poRate = $poRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPoRate(): float
    {
        return $this->poRate;
    }

    /**
     * @param float $expectedRate
     * @return InboundShipmentItems
     */
    public function setExpectedRate(float $expectedRate): InboundShipmentItems
    {
        $this->expectedRate = $expectedRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getExpectedRate(): float
    {
        return $this->expectedRate;
    }

    /**
     * @param float $shipmentItemExchangeRate
     * @return InboundShipmentItems
     */
    public function setShipmentItemExchangeRate(float $shipmentItemExchangeRate): InboundShipmentItems
    {
        $this->shipmentItemExchangeRate = $shipmentItemExchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getShipmentItemExchangeRate(): float
    {
        return $this->shipmentItemExchangeRate;
    }

    /**
     * @param string $shipmentItemEffectiveDate
     * @return InboundShipmentItems
     */
    public function setShipmentItemEffectiveDate(string $shipmentItemEffectiveDate): InboundShipmentItems
    {
        $this->shipmentItemEffectiveDate = $shipmentItemEffectiveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentItemEffectiveDate(): string
    {
        return $this->shipmentItemEffectiveDate;
    }

    /**
     * @param float $unitLandedCost
     * @return InboundShipmentItems
     */
    public function setUnitLandedCost(float $unitLandedCost): InboundShipmentItems
    {
        $this->unitLandedCost = $unitLandedCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitLandedCost(): float
    {
        return $this->unitLandedCost;
    }

    /**
     * @param float $totalUnitCost
     * @return InboundShipmentItems
     */
    public function setTotalUnitCost(float $totalUnitCost): InboundShipmentItems
    {
        $this->totalUnitCost = $totalUnitCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalUnitCost(): float
    {
        return $this->totalUnitCost;
    }

    /**
     * @param float $shipmentItemAmount
     * @return InboundShipmentItems
     */
    public function setShipmentItemAmount(float $shipmentItemAmount): InboundShipmentItems
    {
        $this->shipmentItemAmount = $shipmentItemAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getShipmentItemAmount(): float
    {
        return $this->shipmentItemAmount;
    }

    /**
     * @param RecordRef $poCurrency
     * @return InboundShipmentItems
     */
    public function setPoCurrency(RecordRef $poCurrency): InboundShipmentItems
    {
        $this->poCurrency = $poCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoCurrency(): RecordRef
    {
        return $this->poCurrency;
    }

    /**
     * @param RecordRef $incoterm
     * @return InboundShipmentItems
     */
    public function setIncoterm(RecordRef $incoterm): InboundShipmentItems
    {
        $this->incoterm = $incoterm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncoterm(): RecordRef
    {
        return $this->incoterm;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return InboundShipmentItems
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): InboundShipmentItems
    {
        $this->inventoryDetail = $inventoryDetail;
        return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getInventoryDetail(): InventoryDetail
    {
        return $this->inventoryDetail;
    }

}
