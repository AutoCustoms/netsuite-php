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

class TransferOrderItem {
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
    protected float $quantityPacked;

    /**
     * @var float
     */
    protected float $quantityPicked;

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
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var TransferOrderItemCommitInventory
     */
    protected TransferOrderItemCommitInventory $commitInventory;

    /**
     * @var float
     */
    protected float $orderPriority;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var bool
     */
    protected bool $isClosed;

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
     * @var string
     */
    protected string $expectedShipDate;

    /**
     * @var string
     */
    protected string $expectedReceiptDate;

    /**
     * @var string
     */
    protected string $requestedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $orderAllocationStrategy;

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
        "quantityPacked" => "float",
        "quantityPicked" => "float",
        "quantityReceived" => "float",
        "quantity" => "float",
        "rate" => "float",
        "units" => "RecordRef",
        "amount" => "float",
        "description" => "string",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "commitInventory" => "TransferOrderItemCommitInventory",
        "orderPriority" => "float",
        "options" => "CustomFieldList",
        "isClosed" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "lastPurchasePrice" => "float",
        "averageCost" => "float",
        "expectedShipDate" => "dateTime",
        "expectedReceiptDate" => "dateTime",
        "requestedDate" => "dateTime",
        "orderAllocationStrategy" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return TransferOrderItem
     */
    public function setItem(RecordRef $item): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setLine(int $line): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setQuantityAvailable(float $quantityAvailable): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setQuantityOnHand(float $quantityOnHand): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setQuantityCommitted(float $quantityCommitted): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setQuantityFulfilled(float $quantityFulfilled): TransferOrderItem
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
     * @param float $quantityPacked
     * @return TransferOrderItem
     */
    public function setQuantityPacked(float $quantityPacked): TransferOrderItem
    {
        $this->quantityPacked = $quantityPacked;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPacked(): float
    {
        return $this->quantityPacked;
    }

    /**
     * @param float $quantityPicked
     * @return TransferOrderItem
     */
    public function setQuantityPicked(float $quantityPicked): TransferOrderItem
    {
        $this->quantityPicked = $quantityPicked;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPicked(): float
    {
        return $this->quantityPicked;
    }

    /**
     * @param float $quantityReceived
     * @return TransferOrderItem
     */
    public function setQuantityReceived(float $quantityReceived): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setQuantity(float $quantity): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setRate(float $rate): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setUnits(RecordRef $units): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setAmount(float $amount): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setDescription(string $description): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): TransferOrderItem
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
     * @param string $serialNumbers
     * @return TransferOrderItem
     */
    public function setSerialNumbers(string $serialNumbers): TransferOrderItem
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
     * @param TransferOrderItemCommitInventory $commitInventory
     * @return TransferOrderItem
     */
    public function setCommitInventory(TransferOrderItemCommitInventory $commitInventory): TransferOrderItem
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
     * @param float $orderPriority
     * @return TransferOrderItem
     */
    public function setOrderPriority(float $orderPriority): TransferOrderItem
    {
        $this->orderPriority = $orderPriority;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderPriority(): float
    {
        return $this->orderPriority;
    }

    /**
     * @param CustomFieldList $options
     * @return TransferOrderItem
     */
    public function setOptions(CustomFieldList $options): TransferOrderItem
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
     * @param bool $isClosed
     * @return TransferOrderItem
     */
    public function setIsClosed(bool $isClosed): TransferOrderItem
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * @param RecordRef $department
     * @return TransferOrderItem
     */
    public function setDepartment(RecordRef $department): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setClass(RecordRef $class): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): TransferOrderItem
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
     * @return TransferOrderItem
     */
    public function setAverageCost(float $averageCost): TransferOrderItem
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
     * @param string $expectedShipDate
     * @return TransferOrderItem
     */
    public function setExpectedShipDate(string $expectedShipDate): TransferOrderItem
    {
        $this->expectedShipDate = $expectedShipDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedShipDate(): string
    {
        return $this->expectedShipDate;
    }

    /**
     * @param string $expectedReceiptDate
     * @return TransferOrderItem
     */
    public function setExpectedReceiptDate(string $expectedReceiptDate): TransferOrderItem
    {
        $this->expectedReceiptDate = $expectedReceiptDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedReceiptDate(): string
    {
        return $this->expectedReceiptDate;
    }

    /**
     * @param string $requestedDate
     * @return TransferOrderItem
     */
    public function setRequestedDate(string $requestedDate): TransferOrderItem
    {
        $this->requestedDate = $requestedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedDate(): string
    {
        return $this->requestedDate;
    }

    /**
     * @param RecordRef $orderAllocationStrategy
     * @return TransferOrderItem
     */
    public function setOrderAllocationStrategy(RecordRef $orderAllocationStrategy): TransferOrderItem
    {
        $this->orderAllocationStrategy = $orderAllocationStrategy;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrderAllocationStrategy(): RecordRef
    {
        return $this->orderAllocationStrategy;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return TransferOrderItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): TransferOrderItem
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
