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

class InventoryTransferInventory {
    /**
     * @var int
     */
    protected int $line;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $description;

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
    protected float $adjustQtyBy;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $fromBinNumbers;

    /**
     * @var string
     */
    protected string $toBinNumbers;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "description" => "string",
        "units" => "RecordRef",
        "quantityOnHand" => "float",
        "adjustQtyBy" => "float",
        "serialNumbers" => "string",
        "fromBinNumbers" => "string",
        "toBinNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $line
     * @return InventoryTransferInventory
     */
    public function setLine(int $line): InventoryTransferInventory
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
     * @return InventoryTransferInventory
     */
    public function setItem(RecordRef $item): InventoryTransferInventory
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
     * @param string $description
     * @return InventoryTransferInventory
     */
    public function setDescription(string $description): InventoryTransferInventory
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
     * @param RecordRef $units
     * @return InventoryTransferInventory
     */
    public function setUnits(RecordRef $units): InventoryTransferInventory
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
     * @return InventoryTransferInventory
     */
    public function setQuantityOnHand(float $quantityOnHand): InventoryTransferInventory
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
     * @param float $adjustQtyBy
     * @return InventoryTransferInventory
     */
    public function setAdjustQtyBy(float $adjustQtyBy): InventoryTransferInventory
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
     * @param string $serialNumbers
     * @return InventoryTransferInventory
     */
    public function setSerialNumbers(string $serialNumbers): InventoryTransferInventory
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
     * @param string $fromBinNumbers
     * @return InventoryTransferInventory
     */
    public function setFromBinNumbers(string $fromBinNumbers): InventoryTransferInventory
    {
        $this->fromBinNumbers = $fromBinNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromBinNumbers(): string
    {
        return $this->fromBinNumbers;
    }

    /**
     * @param string $toBinNumbers
     * @return InventoryTransferInventory
     */
    public function setToBinNumbers(string $toBinNumbers): InventoryTransferInventory
    {
        $this->toBinNumbers = $toBinNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getToBinNumbers(): string
    {
        return $this->toBinNumbers;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return InventoryTransferInventory
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): InventoryTransferInventory
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
     * @param CustomFieldList $customFieldList
     * @return InventoryTransferInventory
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InventoryTransferInventory
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
