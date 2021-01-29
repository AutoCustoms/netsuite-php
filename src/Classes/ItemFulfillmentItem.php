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

class ItemFulfillmentItem {
    /**
     * @var string
     */
    protected string $jobName;

    /**
     * @var bool
     */
    protected bool $itemReceive;

    /**
     * @var string
     */
    protected string $itemName;

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
     * @var float
     */
    protected float $onHand;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var string
     */
    protected string $unitsDisplay;

    /**
     * @var string
     */
    protected string $createPo;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $binNumbers;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $poNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $orderLine;

    /**
     * @var float
     */
    protected float $quantityRemaining;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var int
     */
    protected int $shipGroup;

    /**
     * @var bool
     */
    protected bool $itemIsFulfilled;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "jobName" => "string",
        "itemReceive" => "boolean",
        "itemName" => "string",
        "description" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "onHand" => "float",
        "quantity" => "float",
        "unitsDisplay" => "string",
        "createPo" => "string",
        "inventoryDetail" => "InventoryDetail",
        "binNumbers" => "string",
        "serialNumbers" => "string",
        "poNum" => "string",
        "item" => "RecordRef",
        "orderLine" => "integer",
        "quantityRemaining" => "float",
        "options" => "CustomFieldList",
        "shipGroup" => "integer",
        "itemIsFulfilled" => "boolean",
        "shipAddress" => "RecordRef",
        "shipMethod" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param string $jobName
     * @return ItemFulfillmentItem
     */
    public function setJobName(string $jobName): ItemFulfillmentItem
    {
        $this->jobName = $jobName;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobName(): string
    {
        return $this->jobName;
    }

    /**
     * @param bool $itemReceive
     * @return ItemFulfillmentItem
     */
    public function setItemReceive(bool $itemReceive): ItemFulfillmentItem
    {
        $this->itemReceive = $itemReceive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getItemReceive(): bool
    {
        return $this->itemReceive;
    }

    /**
     * @param string $itemName
     * @return ItemFulfillmentItem
     */
    public function setItemName(string $itemName): ItemFulfillmentItem
    {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemName(): string
    {
        return $this->itemName;
    }

    /**
     * @param string $description
     * @return ItemFulfillmentItem
     */
    public function setDescription(string $description): ItemFulfillmentItem
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
     * @return ItemFulfillmentItem
     */
    public function setDepartment(RecordRef $department): ItemFulfillmentItem
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
     * @return ItemFulfillmentItem
     */
    public function setClass(RecordRef $class): ItemFulfillmentItem
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
     * @return ItemFulfillmentItem
     */
    public function setLocation(RecordRef $location): ItemFulfillmentItem
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
     * @param float $onHand
     * @return ItemFulfillmentItem
     */
    public function setOnHand(float $onHand): ItemFulfillmentItem
    {
        $this->onHand = $onHand;
        return $this;
    }

    /**
     * @return float
     */
    public function getOnHand(): float
    {
        return $this->onHand;
    }

    /**
     * @param float $quantity
     * @return ItemFulfillmentItem
     */
    public function setQuantity(float $quantity): ItemFulfillmentItem
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
     * @param string $unitsDisplay
     * @return ItemFulfillmentItem
     */
    public function setUnitsDisplay(string $unitsDisplay): ItemFulfillmentItem
    {
        $this->unitsDisplay = $unitsDisplay;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitsDisplay(): string
    {
        return $this->unitsDisplay;
    }

    /**
     * @param string $createPo
     * @return ItemFulfillmentItem
     */
    public function setCreatePo(string $createPo): ItemFulfillmentItem
    {
        $this->createPo = $createPo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatePo(): string
    {
        return $this->createPo;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return ItemFulfillmentItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): ItemFulfillmentItem
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
     * @param string $binNumbers
     * @return ItemFulfillmentItem
     */
    public function setBinNumbers(string $binNumbers): ItemFulfillmentItem
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
     * @return ItemFulfillmentItem
     */
    public function setSerialNumbers(string $serialNumbers): ItemFulfillmentItem
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
     * @param string $poNum
     * @return ItemFulfillmentItem
     */
    public function setPoNum(string $poNum): ItemFulfillmentItem
    {
        $this->poNum = $poNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoNum(): string
    {
        return $this->poNum;
    }

    /**
     * @param RecordRef $item
     * @return ItemFulfillmentItem
     */
    public function setItem(RecordRef $item): ItemFulfillmentItem
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
     * @param int $orderLine
     * @return ItemFulfillmentItem
     */
    public function setOrderLine(int $orderLine): ItemFulfillmentItem
    {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderLine(): int
    {
        return $this->orderLine;
    }

    /**
     * @param float $quantityRemaining
     * @return ItemFulfillmentItem
     */
    public function setQuantityRemaining(float $quantityRemaining): ItemFulfillmentItem
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
     * @param CustomFieldList $options
     * @return ItemFulfillmentItem
     */
    public function setOptions(CustomFieldList $options): ItemFulfillmentItem
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
     * @param int $shipGroup
     * @return ItemFulfillmentItem
     */
    public function setShipGroup(int $shipGroup): ItemFulfillmentItem
    {
        $this->shipGroup = $shipGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipGroup(): int
    {
        return $this->shipGroup;
    }

    /**
     * @param bool $itemIsFulfilled
     * @return ItemFulfillmentItem
     */
    public function setItemIsFulfilled(bool $itemIsFulfilled): ItemFulfillmentItem
    {
        $this->itemIsFulfilled = $itemIsFulfilled;
        return $this;
    }

    /**
     * @return bool
     */
    public function getItemIsFulfilled(): bool
    {
        return $this->itemIsFulfilled;
    }

    /**
     * @param RecordRef $shipAddress
     * @return ItemFulfillmentItem
     */
    public function setShipAddress(RecordRef $shipAddress): ItemFulfillmentItem
    {
        $this->shipAddress = $shipAddress;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddress(): RecordRef
    {
        return $this->shipAddress;
    }

    /**
     * @param RecordRef $shipMethod
     * @return ItemFulfillmentItem
     */
    public function setShipMethod(RecordRef $shipMethod): ItemFulfillmentItem
    {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod(): RecordRef
    {
        return $this->shipMethod;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ItemFulfillmentItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemFulfillmentItem
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
