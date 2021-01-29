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

class ItemAvailability {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $lastQtyAvailableChange;

    /**
     * @var RecordRef
     */
    protected RecordRef $locationId;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $onHandValueMli;

    /**
     * @var float
     */
    protected float $reorderPoint;

    /**
     * @var float
     */
    protected float $preferredStockLevel;

    /**
     * @var float
     */
    protected float $quantityOnOrder;

    /**
     * @var float
     */
    protected float $quantityCommitted;

    /**
     * @var float
     */
    protected float $quantityBackOrdered;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "lastQtyAvailableChange" => "dateTime",
        "locationId" => "RecordRef",
        "quantityOnHand" => "float",
        "onHandValueMli" => "float",
        "reorderPoint" => "float",
        "preferredStockLevel" => "float",
        "quantityOnOrder" => "float",
        "quantityCommitted" => "float",
        "quantityBackOrdered" => "float",
        "quantityAvailable" => "float",
    );

    /**
     * @param RecordRef $item
     * @return ItemAvailability
     */
    public function setItem(RecordRef $item): ItemAvailability
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
     * @param string $lastQtyAvailableChange
     * @return ItemAvailability
     */
    public function setLastQtyAvailableChange(string $lastQtyAvailableChange): ItemAvailability
    {
        $this->lastQtyAvailableChange = $lastQtyAvailableChange;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastQtyAvailableChange(): string
    {
        return $this->lastQtyAvailableChange;
    }

    /**
     * @param RecordRef $locationId
     * @return ItemAvailability
     */
    public function setLocationId(RecordRef $locationId): ItemAvailability
    {
        $this->locationId = $locationId;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocationId(): RecordRef
    {
        return $this->locationId;
    }

    /**
     * @param float $quantityOnHand
     * @return ItemAvailability
     */
    public function setQuantityOnHand(float $quantityOnHand): ItemAvailability
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand(): float
    {
        return $this->quantityOnHand;
    }

    /**
     * @param float $onHandValueMli
     * @return ItemAvailability
     */
    public function setOnHandValueMli(float $onHandValueMli): ItemAvailability
    {
        $this->onHandValueMli = $onHandValueMli;
        return $this;
    }

    /**
     * @return float
     */
    public function getOnHandValueMli(): float
    {
        return $this->onHandValueMli;
    }

    /**
     * @param float $reorderPoint
     * @return ItemAvailability
     */
    public function setReorderPoint(float $reorderPoint): ItemAvailability
    {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * @return float
     */
    public function getReorderPoint(): float
    {
        return $this->reorderPoint;
    }

    /**
     * @param float $preferredStockLevel
     * @return ItemAvailability
     */
    public function setPreferredStockLevel(float $preferredStockLevel): ItemAvailability
    {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevel(): float
    {
        return $this->preferredStockLevel;
    }

    /**
     * @param float $quantityOnOrder
     * @return ItemAvailability
     */
    public function setQuantityOnOrder(float $quantityOnOrder): ItemAvailability
    {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder(): float
    {
        return $this->quantityOnOrder;
    }

    /**
     * @param float $quantityCommitted
     * @return ItemAvailability
     */
    public function setQuantityCommitted(float $quantityCommitted): ItemAvailability
    {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted(): float
    {
        return $this->quantityCommitted;
    }

    /**
     * @param float $quantityBackOrdered
     * @return ItemAvailability
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): ItemAvailability
    {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered(): float
    {
        return $this->quantityBackOrdered;
    }

    /**
     * @param float $quantityAvailable
     * @return ItemAvailability
     */
    public function setQuantityAvailable(float $quantityAvailable): ItemAvailability
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable(): float
    {
        return $this->quantityAvailable;
    }

}
