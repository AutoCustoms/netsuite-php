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

class BinTransferInventory {
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
     * @var string
     */
    protected string $preferredBin;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var string
     */
    protected string $itemUnitsLabel;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $fromBins;

    /**
     * @var string
     */
    protected string $toBins;

    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "description" => "string",
        "preferredBin" => "string",
        "quantity" => "float",
        "itemUnitsLabel" => "string",
        "inventoryDetail" => "InventoryDetail",
        "fromBins" => "string",
        "toBins" => "string",
    );

    /**
     * @param int $line
     * @return BinTransferInventory
     */
    public function setLine(int $line): BinTransferInventory
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
     * @return BinTransferInventory
     */
    public function setItem(RecordRef $item): BinTransferInventory
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
     * @return BinTransferInventory
     */
    public function setDescription(string $description): BinTransferInventory
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
     * @param string $preferredBin
     * @return BinTransferInventory
     */
    public function setPreferredBin(string $preferredBin): BinTransferInventory
    {
        $this->preferredBin = $preferredBin;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreferredBin(): string
    {
        return $this->preferredBin;
    }

    /**
     * @param float $quantity
     * @return BinTransferInventory
     */
    public function setQuantity(float $quantity): BinTransferInventory
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
     * @param string $itemUnitsLabel
     * @return BinTransferInventory
     */
    public function setItemUnitsLabel(string $itemUnitsLabel): BinTransferInventory
    {
        $this->itemUnitsLabel = $itemUnitsLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemUnitsLabel(): string
    {
        return $this->itemUnitsLabel;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return BinTransferInventory
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): BinTransferInventory
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
     * @param string $fromBins
     * @return BinTransferInventory
     */
    public function setFromBins(string $fromBins): BinTransferInventory
    {
        $this->fromBins = $fromBins;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromBins(): string
    {
        return $this->fromBins;
    }

    /**
     * @param string $toBins
     * @return BinTransferInventory
     */
    public function setToBins(string $toBins): BinTransferInventory
    {
        $this->toBins = $toBins;
        return $this;
    }

    /**
     * @return string
     */
    public function getToBins(): string
    {
        return $this->toBins;
    }

}
