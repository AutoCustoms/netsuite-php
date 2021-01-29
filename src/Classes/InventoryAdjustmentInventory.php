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

class InventoryAdjustmentInventory {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $currentValue;

    /**
     * @var float
     */
    protected float $adjustQtyBy;

    /**
     * @var string
     */
    protected string $binNumbers;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var float
     */
    protected float $newQuantity;

    /**
     * @var float
     */
    protected float $unitCost;

    /**
     * @var float
     */
    protected float $foreignCurrencyUnitCost;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var float
     */
    protected float $exchangeRate;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "units" => "RecordRef",
        "quantityOnHand" => "float",
        "currentValue" => "float",
        "adjustQtyBy" => "float",
        "binNumbers" => "string",
        "serialNumbers" => "string",
        "newQuantity" => "float",
        "unitCost" => "float",
        "foreignCurrencyUnitCost" => "float",
        "memo" => "string",
        "currency" => "string",
        "expirationDate" => "dateTime",
        "exchangeRate" => "float",
    );

    /**
     * @param RecordRef $item
     * @return InventoryAdjustmentInventory
     */
    public function setItem(RecordRef $item): InventoryAdjustmentInventory
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
     * @param int $line
     * @return InventoryAdjustmentInventory
     */
    public function setLine(int $line): InventoryAdjustmentInventory
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return InventoryAdjustmentInventory
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): InventoryAdjustmentInventory
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

    /**
     * @param string $description
     * @return InventoryAdjustmentInventory
     */
    public function setDescription(string $description): InventoryAdjustmentInventory
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param RecordRef $department
     * @return InventoryAdjustmentInventory
     */
    public function setDepartment(RecordRef $department): InventoryAdjustmentInventory
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return InventoryAdjustmentInventory
     */
    public function setClass(RecordRef $class): InventoryAdjustmentInventory
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return InventoryAdjustmentInventory
     */
    public function setLocation(RecordRef $location): InventoryAdjustmentInventory
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $units
     * @return InventoryAdjustmentInventory
     */
    public function setUnits(RecordRef $units): InventoryAdjustmentInventory
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
     * @param float $quantityOnHand
     * @return InventoryAdjustmentInventory
     */
    public function setQuantityOnHand(float $quantityOnHand): InventoryAdjustmentInventory
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
     * @param float $currentValue
     * @return InventoryAdjustmentInventory
     */
    public function setCurrentValue(float $currentValue): InventoryAdjustmentInventory
    {
        $this->currentValue = $currentValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentValue(): float
    {
        return $this->currentValue;
    }

    /**
     * @param float $adjustQtyBy
     * @return InventoryAdjustmentInventory
     */
    public function setAdjustQtyBy(float $adjustQtyBy): InventoryAdjustmentInventory
    {
        $this->adjustQtyBy = $adjustQtyBy;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustQtyBy(): float
    {
        return $this->adjustQtyBy;
    }

    /**
     * @param string $binNumbers
     * @return InventoryAdjustmentInventory
     */
    public function setBinNumbers(string $binNumbers): InventoryAdjustmentInventory
    {
        $this->binNumbers = $binNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getBinNumbers(): string
    {
        return $this->binNumbers;
    }

    /**
     * @param string $serialNumbers
     * @return InventoryAdjustmentInventory
     */
    public function setSerialNumbers(string $serialNumbers): InventoryAdjustmentInventory
    {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers(): string
    {
        return $this->serialNumbers;
    }

    /**
     * @param float $newQuantity
     * @return InventoryAdjustmentInventory
     */
    public function setNewQuantity(float $newQuantity): InventoryAdjustmentInventory
    {
        $this->newQuantity = $newQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewQuantity(): float
    {
        return $this->newQuantity;
    }

    /**
     * @param float $unitCost
     * @return InventoryAdjustmentInventory
     */
    public function setUnitCost(float $unitCost): InventoryAdjustmentInventory
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
     * @param float $foreignCurrencyUnitCost
     * @return InventoryAdjustmentInventory
     */
    public function setForeignCurrencyUnitCost(float $foreignCurrencyUnitCost): InventoryAdjustmentInventory
    {
        $this->foreignCurrencyUnitCost = $foreignCurrencyUnitCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getForeignCurrencyUnitCost(): float
    {
        return $this->foreignCurrencyUnitCost;
    }

    /**
     * @param string $memo
     * @return InventoryAdjustmentInventory
     */
    public function setMemo(string $memo): InventoryAdjustmentInventory
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param string $currency
     * @return InventoryAdjustmentInventory
     */
    public function setCurrency(string $currency): InventoryAdjustmentInventory
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $expirationDate
     * @return InventoryAdjustmentInventory
     */
    public function setExpirationDate(string $expirationDate): InventoryAdjustmentInventory
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param float $exchangeRate
     * @return InventoryAdjustmentInventory
     */
    public function setExchangeRate(float $exchangeRate): InventoryAdjustmentInventory
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

}
