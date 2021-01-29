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

class BinWorksheetItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $itemName;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var string
     */
    protected string $itemOnHand;

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
    protected string $itemBins;

    /**
     * @var string
     */
    protected string $itemBinNumbers;

    /**
     * @var string
     */
    protected string $itemBinList;

    /**
     * @var string
     */
    protected string $itemPreferBin;

    /**
     * @var string
     */
    protected string $itemBlank;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "itemName" => "string",
        "description" => "string",
        "quantity" => "float",
        "itemOnHand" => "string",
        "itemUnitsLabel" => "string",
        "inventoryDetail" => "InventoryDetail",
        "itemBins" => "string",
        "itemBinNumbers" => "string",
        "itemBinList" => "string",
        "itemPreferBin" => "string",
        "itemBlank" => "string",
    );

    /**
     * @param RecordRef $item
     * @return BinWorksheetItem
     */
    public function setItem(RecordRef $item): BinWorksheetItem
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
     * @param string $itemName
     * @return BinWorksheetItem
     */
    public function setItemName(string $itemName): BinWorksheetItem
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
     * @return BinWorksheetItem
     */
    public function setDescription(string $description): BinWorksheetItem
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
     * @param float $quantity
     * @return BinWorksheetItem
     */
    public function setQuantity(float $quantity): BinWorksheetItem
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
     * @param string $itemOnHand
     * @return BinWorksheetItem
     */
    public function setItemOnHand(string $itemOnHand): BinWorksheetItem
    {
        $this->itemOnHand = $itemOnHand;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemOnHand(): string
    {
        return $this->itemOnHand;
    }

    /**
     * @param string $itemUnitsLabel
     * @return BinWorksheetItem
     */
    public function setItemUnitsLabel(string $itemUnitsLabel): BinWorksheetItem
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
     * @return BinWorksheetItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): BinWorksheetItem
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
     * @param string $itemBins
     * @return BinWorksheetItem
     */
    public function setItemBins(string $itemBins): BinWorksheetItem
    {
        $this->itemBins = $itemBins;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemBins(): string
    {
        return $this->itemBins;
    }

    /**
     * @param string $itemBinNumbers
     * @return BinWorksheetItem
     */
    public function setItemBinNumbers(string $itemBinNumbers): BinWorksheetItem
    {
        $this->itemBinNumbers = $itemBinNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemBinNumbers(): string
    {
        return $this->itemBinNumbers;
    }

    /**
     * @param string $itemBinList
     * @return BinWorksheetItem
     */
    public function setItemBinList(string $itemBinList): BinWorksheetItem
    {
        $this->itemBinList = $itemBinList;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemBinList(): string
    {
        return $this->itemBinList;
    }

    /**
     * @param string $itemPreferBin
     * @return BinWorksheetItem
     */
    public function setItemPreferBin(string $itemPreferBin): BinWorksheetItem
    {
        $this->itemPreferBin = $itemPreferBin;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemPreferBin(): string
    {
        return $this->itemPreferBin;
    }

    /**
     * @param string $itemBlank
     * @return BinWorksheetItem
     */
    public function setItemBlank(string $itemBlank): BinWorksheetItem
    {
        $this->itemBlank = $itemBlank;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemBlank(): string
    {
        return $this->itemBlank;
    }

}
