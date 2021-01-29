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

class InterCompanyTransferOrderItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $quantityBackOrdered;

    /**
     * @var float
     */
    protected float $quantityCommitted;

    /**
     * @var float
     */
    protected float $quantityFulfilled;

    /**
     * @var float
     */
    protected float $quantityReceived;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var TransferOrderItemCommitInventory
     */
    protected TransferOrderItemCommitInventory $commitInventory;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var float
     */
    protected float $lastPurchasePrice;

    /**
     * @var float
     */
    protected float $averageCost;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantityBackOrdered" => "float",
        "quantityCommitted" => "float",
        "quantityFulfilled" => "float",
        "quantityReceived" => "float",
        "quantity" => "float",
        "rate" => "float",
        "units" => "RecordRef",
        "amount" => "float",
        "description" => "string",
        "inventoryDetail" => "InventoryDetail",
        "commitInventory" => "TransferOrderItemCommitInventory",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "lastPurchasePrice" => "float",
        "averageCost" => "float",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return InterCompanyTransferOrderItem
     */
    public function setItem(RecordRef $item): InterCompanyTransferOrderItem
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
     * @return InterCompanyTransferOrderItem
     */
    public function setLine(int $line): InterCompanyTransferOrderItem
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
     * @param float $quantityAvailable
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityAvailable(float $quantityAvailable): InterCompanyTransferOrderItem
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

    /**
     * @param float $quantityOnHand
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityOnHand(float $quantityOnHand): InterCompanyTransferOrderItem
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
     * @param float $quantityBackOrdered
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): InterCompanyTransferOrderItem
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
     * @param float $quantityCommitted
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityCommitted(float $quantityCommitted): InterCompanyTransferOrderItem
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
     * @param float $quantityFulfilled
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityFulfilled(float $quantityFulfilled): InterCompanyTransferOrderItem
    {
        $this->quantityFulfilled = $quantityFulfilled;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityFulfilled(): float
    {
        return $this->quantityFulfilled;
    }

    /**
     * @param float $quantityReceived
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantityReceived(float $quantityReceived): InterCompanyTransferOrderItem
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
     * @param float $quantity
     * @return InterCompanyTransferOrderItem
     */
    public function setQuantity(float $quantity): InterCompanyTransferOrderItem
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
     * @param float $rate
     * @return InterCompanyTransferOrderItem
     */
    public function setRate(float $rate): InterCompanyTransferOrderItem
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param RecordRef $units
     * @return InterCompanyTransferOrderItem
     */
    public function setUnits(RecordRef $units): InterCompanyTransferOrderItem
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
     * @param float $amount
     * @return InterCompanyTransferOrderItem
     */
    public function setAmount(float $amount): InterCompanyTransferOrderItem
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param string $description
     * @return InterCompanyTransferOrderItem
     */
    public function setDescription(string $description): InterCompanyTransferOrderItem
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
     * @param InventoryDetail $inventoryDetail
     * @return InterCompanyTransferOrderItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): InterCompanyTransferOrderItem
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
     * @param TransferOrderItemCommitInventory $commitInventory
     * @return InterCompanyTransferOrderItem
     */
    public function setCommitInventory(TransferOrderItemCommitInventory $commitInventory): InterCompanyTransferOrderItem
    {
        $this->commitInventory = $commitInventory;
        return $this;
    }

    /**
     * @return TransferOrderItemCommitInventory
     */
    public function getCommitInventory(): TransferOrderItemCommitInventory
    {
        return $this->commitInventory;
    }

    /**
     * @param CustomFieldList $options
     * @return InterCompanyTransferOrderItem
     */
    public function setOptions(CustomFieldList $options): InterCompanyTransferOrderItem
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getOptions(): CustomFieldList
    {
        return $this->options;
    }

    /**
     * @param RecordRef $department
     * @return InterCompanyTransferOrderItem
     */
    public function setDepartment(RecordRef $department): InterCompanyTransferOrderItem
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
     * @return InterCompanyTransferOrderItem
     */
    public function setClass(RecordRef $class): InterCompanyTransferOrderItem
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
     * @param float $lastPurchasePrice
     * @return InterCompanyTransferOrderItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): InterCompanyTransferOrderItem
    {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getLastPurchasePrice(): float
    {
        return $this->lastPurchasePrice;
    }

    /**
     * @param float $averageCost
     * @return InterCompanyTransferOrderItem
     */
    public function setAverageCost(float $averageCost): InterCompanyTransferOrderItem
    {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAverageCost(): float
    {
        return $this->averageCost;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return InterCompanyTransferOrderItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InterCompanyTransferOrderItem
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

}
