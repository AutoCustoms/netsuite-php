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

class InventoryNumberBinSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $binNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $inventoryNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityAvailable;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityOnHand;

    static $paramtypesmap = array(
        "binNumber" => "SearchMultiSelectField",
        "inventoryNumber" => "SearchStringField",
        "location" => "SearchMultiSelectField",
        "quantityAvailable" => "SearchDoubleField",
        "quantityOnHand" => "SearchDoubleField",
    );

    /**
     * @param SearchMultiSelectField $binNumber
     * @return InventoryNumberBinSearchBasic
     */
    public function setBinNumber(SearchMultiSelectField $binNumber): InventoryNumberBinSearchBasic
    {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBinNumber(): SearchMultiSelectField
    {
        return $this->binNumber;
    }

    /**
     * @param SearchStringField $inventoryNumber
     * @return InventoryNumberBinSearchBasic
     */
    public function setInventoryNumber(SearchStringField $inventoryNumber): InventoryNumberBinSearchBasic
    {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getInventoryNumber(): SearchStringField
    {
        return $this->inventoryNumber;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return InventoryNumberBinSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): InventoryNumberBinSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchDoubleField $quantityAvailable
     * @return InventoryNumberBinSearchBasic
     */
    public function setQuantityAvailable(SearchDoubleField $quantityAvailable): InventoryNumberBinSearchBasic
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityAvailable(): SearchDoubleField
    {
        return $this->quantityAvailable;
    }

    /**
     * @param SearchDoubleField $quantityOnHand
     * @return InventoryNumberBinSearchBasic
     */
    public function setQuantityOnHand(SearchDoubleField $quantityOnHand): InventoryNumberBinSearchBasic
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnHand(): SearchDoubleField
    {
        return $this->quantityOnHand;
    }

}
