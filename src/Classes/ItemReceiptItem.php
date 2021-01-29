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

class ItemReceiptItem {
    /**
     * @var bool
     */
    protected bool $itemReceive;

    /**
     * @var string
     */
    protected string $jobName;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $orderLine;

    /**
     * @var int
     */
    protected int $line;

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
    protected RecordRef $location;

    /**
     * @var float
     */
    protected float $onHand;

    /**
     * @var float
     */
    protected float $quantityRemaining;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var string
     */
    protected string $unitsDisplay;

    /**
     * @var float
     */
    protected float $unitCostOverride;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $binNumbers;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var bool
     */
    protected bool $restock;

    /**
     * @var TransactionBillVarianceStatus
     */
    protected TransactionBillVarianceStatus $billVarianceStatus;

    /**
     * @var bool
     */
    protected bool $isDropShipment;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var LandedCost
     */
    protected LandedCost $landedCost;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "itemReceive" => "boolean",
        "jobName" => "string",
        "item" => "RecordRef",
        "orderLine" => "integer",
        "line" => "integer",
        "itemName" => "string",
        "description" => "string",
        "location" => "RecordRef",
        "onHand" => "float",
        "quantityRemaining" => "float",
        "quantity" => "float",
        "unitsDisplay" => "string",
        "unitCostOverride" => "float",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "expirationDate" => "dateTime",
        "rate" => "string",
        "currency" => "string",
        "restock" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
        "isDropShipment" => "boolean",
        "options" => "CustomFieldList",
        "landedCost" => "LandedCost",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param bool $itemReceive
     * @return ItemReceiptItem
     */
    public function setItemReceive(bool $itemReceive): ItemReceiptItem
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
     * @param string $jobName
     * @return ItemReceiptItem
     */
    public function setJobName(string $jobName): ItemReceiptItem
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
     * @param RecordRef $item
     * @return ItemReceiptItem
     */
    public function setItem(RecordRef $item): ItemReceiptItem
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
     * @return ItemReceiptItem
     */
    public function setOrderLine(int $orderLine): ItemReceiptItem
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
     * @param int $line
     * @return ItemReceiptItem
     */
    public function setLine(int $line): ItemReceiptItem
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
     * @param string $itemName
     * @return ItemReceiptItem
     */
    public function setItemName(string $itemName): ItemReceiptItem
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
     * @return ItemReceiptItem
     */
    public function setDescription(string $description): ItemReceiptItem
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
     * @param RecordRef $location
     * @return ItemReceiptItem
     */
    public function setLocation(RecordRef $location): ItemReceiptItem
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
     * @return ItemReceiptItem
     */
    public function setOnHand(float $onHand): ItemReceiptItem
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
     * @param float $quantityRemaining
     * @return ItemReceiptItem
     */
    public function setQuantityRemaining(float $quantityRemaining): ItemReceiptItem
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
     * @param float $quantity
     * @return ItemReceiptItem
     */
    public function setQuantity(float $quantity): ItemReceiptItem
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
     * @return ItemReceiptItem
     */
    public function setUnitsDisplay(string $unitsDisplay): ItemReceiptItem
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
     * @param float $unitCostOverride
     * @return ItemReceiptItem
     */
    public function setUnitCostOverride(float $unitCostOverride): ItemReceiptItem
    {
        $this->unitCostOverride = $unitCostOverride;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitCostOverride(): float
    {
        return $this->unitCostOverride;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return ItemReceiptItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): ItemReceiptItem
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
     * @return ItemReceiptItem
     */
    public function setSerialNumbers(string $serialNumbers): ItemReceiptItem
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
     * @param string $binNumbers
     * @return ItemReceiptItem
     */
    public function setBinNumbers(string $binNumbers): ItemReceiptItem
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
     * @param string $expirationDate
     * @return ItemReceiptItem
     */
    public function setExpirationDate(string $expirationDate): ItemReceiptItem
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
     * @param string $rate
     * @return ItemReceiptItem
     */
    public function setRate(string $rate): ItemReceiptItem
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param string $currency
     * @return ItemReceiptItem
     */
    public function setCurrency(string $currency): ItemReceiptItem
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
     * @param bool $restock
     * @return ItemReceiptItem
     */
    public function setRestock(bool $restock): ItemReceiptItem
    {
        $this->restock = $restock;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRestock(): bool
    {
        return $this->restock;
    }

    /**
     * @param TransactionBillVarianceStatus $billVarianceStatus
     * @return ItemReceiptItem
     */
    public function setBillVarianceStatus(TransactionBillVarianceStatus $billVarianceStatus): ItemReceiptItem
    {
        $this->billVarianceStatus = $billVarianceStatus;
        return $this;
    }

    /**
     * @return TransactionBillVarianceStatus
     */
    public function getBillVarianceStatus(): TransactionBillVarianceStatus
    {
        return $this->billVarianceStatus;
    }

    /**
     * @param bool $isDropShipment
     * @return ItemReceiptItem
     */
    public function setIsDropShipment(bool $isDropShipment): ItemReceiptItem
    {
        $this->isDropShipment = $isDropShipment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDropShipment(): bool
    {
        return $this->isDropShipment;
    }

    /**
     * @param CustomFieldList $options
     * @return ItemReceiptItem
     */
    public function setOptions(CustomFieldList $options): ItemReceiptItem
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
     * @param LandedCost $landedCost
     * @return ItemReceiptItem
     */
    public function setLandedCost(LandedCost $landedCost): ItemReceiptItem
    {
        $this->landedCost = $landedCost;
        return $this;
    }

    /**
     * @return LandedCost
     */
    public function getLandedCost(): LandedCost
    {
        return $this->landedCost;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ItemReceiptItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemReceiptItem
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
