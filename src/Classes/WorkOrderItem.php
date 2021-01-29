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

class WorkOrderItem {
    /**
     * @var int
     */
    protected int $line;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $operationSequenceNumber;

    /**
     * @var float
     */
    protected float $componentYield;

    /**
     * @var float
     */
    protected float $bomQuantity;

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

    /**
     * @var float
     */
    protected float $averageCost;

    /**
     * @var float
     */
    protected float $lastPurchasePrice;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var float
     */
    protected float $orderPriority;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var ItemSource
     */
    protected ItemSource $itemSource;

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
    protected RecordRef $poVendor;

    /**
     * @var float
     */
    protected float $poRate;

    /**
     * @var float
     */
    protected float $percentComplete;

    /**
     * @var float
     */
    protected float $contribution;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var WorkOrderItemItemCommitInventory
     */
    protected WorkOrderItemItemCommitInventory $commitInventory;

    /**
     * @var string
     */
    protected string $plannedIssueDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $orderAllocationStrategy;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "componentYield" => "float",
        "bomQuantity" => "float",
        "quantityCommitted" => "float",
        "quantityBackOrdered" => "float",
        "quantityAvailable" => "float",
        "averageCost" => "float",
        "lastPurchasePrice" => "float",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "orderPriority" => "float",
        "options" => "CustomFieldList",
        "itemSource" => "ItemSource",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "poVendor" => "RecordRef",
        "poRate" => "float",
        "percentComplete" => "float",
        "contribution" => "float",
        "description" => "string",
        "commitInventory" => "WorkOrderItemItemCommitInventory",
        "plannedIssueDate" => "dateTime",
        "orderAllocationStrategy" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $line
     * @return WorkOrderItem
     */
    public function setLine(int $line): WorkOrderItem
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
     * @param RecordRef $item
     * @return WorkOrderItem
     */
    public function setItem(RecordRef $item): WorkOrderItem
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
     * @param int $operationSequenceNumber
     * @return WorkOrderItem
     */
    public function setOperationSequenceNumber(int $operationSequenceNumber): WorkOrderItem
    {
        $this->operationSequenceNumber = $operationSequenceNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperationSequenceNumber(): int
    {
        return $this->operationSequenceNumber;
    }

    /**
     * @param float $componentYield
     * @return WorkOrderItem
     */
    public function setComponentYield(float $componentYield): WorkOrderItem
    {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * @return float
     */
    public function getComponentYield(): float
    {
        return $this->componentYield;
    }

    /**
     * @param float $bomQuantity
     * @return WorkOrderItem
     */
    public function setBomQuantity(float $bomQuantity): WorkOrderItem
    {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getBomQuantity(): float
    {
        return $this->bomQuantity;
    }

    /**
     * @param float $quantityCommitted
     * @return WorkOrderItem
     */
    public function setQuantityCommitted(float $quantityCommitted): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setQuantityAvailable(float $quantityAvailable): WorkOrderItem
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
     * @param float $averageCost
     * @return WorkOrderItem
     */
    public function setAverageCost(float $averageCost): WorkOrderItem
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
     * @param float $lastPurchasePrice
     * @return WorkOrderItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): WorkOrderItem
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
     * @param float $quantityOnHand
     * @return WorkOrderItem
     */
    public function setQuantityOnHand(float $quantityOnHand): WorkOrderItem
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
     * @param float $quantity
     * @return WorkOrderItem
     */
    public function setQuantity(float $quantity): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setUnits(RecordRef $units): WorkOrderItem
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
     * @param InventoryDetail $inventoryDetail
     * @return WorkOrderItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setSerialNumbers(string $serialNumbers): WorkOrderItem
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
     * @param float $orderPriority
     * @return WorkOrderItem
     */
    public function setOrderPriority(float $orderPriority): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setOptions(CustomFieldList $options): WorkOrderItem
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
     * @param ItemSource $itemSource
     * @return WorkOrderItem
     */
    public function setItemSource(ItemSource $itemSource): WorkOrderItem
    {
        $this->itemSource = $itemSource;
        return $this;
    }

    /**
     * @return ItemSource
     */
    public function getItemSource(): ItemSource
    {
        return $this->itemSource;
    }

    /**
     * @param RecordRef $department
     * @return WorkOrderItem
     */
    public function setDepartment(RecordRef $department): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setClass(RecordRef $class): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setLocation(RecordRef $location): WorkOrderItem
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
     * @param RecordRef $poVendor
     * @return WorkOrderItem
     */
    public function setPoVendor(RecordRef $poVendor): WorkOrderItem
    {
        $this->poVendor = $poVendor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoVendor(): RecordRef
    {
        return $this->poVendor;
    }

    /**
     * @param float $poRate
     * @return WorkOrderItem
     */
    public function setPoRate(float $poRate): WorkOrderItem
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
     * @param float $percentComplete
     * @return WorkOrderItem
     */
    public function setPercentComplete(float $percentComplete): WorkOrderItem
    {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete(): float
    {
        return $this->percentComplete;
    }

    /**
     * @param float $contribution
     * @return WorkOrderItem
     */
    public function setContribution(float $contribution): WorkOrderItem
    {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * @return float
     */
    public function getContribution(): float
    {
        return $this->contribution;
    }

    /**
     * @param string $description
     * @return WorkOrderItem
     */
    public function setDescription(string $description): WorkOrderItem
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
     * @param WorkOrderItemItemCommitInventory $commitInventory
     * @return WorkOrderItem
     */
    public function setCommitInventory(WorkOrderItemItemCommitInventory $commitInventory): WorkOrderItem
    {
        $this->commitInventory = $commitInventory;
        return $this;
    }

    /**
     * @return WorkOrderItemItemCommitInventory
     */
    public function getCommitInventory(): WorkOrderItemItemCommitInventory
    {
        return $this->commitInventory;
    }

    /**
     * @param string $plannedIssueDate
     * @return WorkOrderItem
     */
    public function setPlannedIssueDate(string $plannedIssueDate): WorkOrderItem
    {
        $this->plannedIssueDate = $plannedIssueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlannedIssueDate(): string
    {
        return $this->plannedIssueDate;
    }

    /**
     * @param RecordRef $orderAllocationStrategy
     * @return WorkOrderItem
     */
    public function setOrderAllocationStrategy(RecordRef $orderAllocationStrategy): WorkOrderItem
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
     * @return WorkOrderItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): WorkOrderItem
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
