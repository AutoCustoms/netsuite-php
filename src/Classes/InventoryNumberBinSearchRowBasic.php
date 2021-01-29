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

class InventoryNumberBinSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $binNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $inventoryNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityAvailable;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityOnHand;

    static $paramtypesmap = array(
        "binNumber" => "SearchColumnSelectField[]",
        "inventoryNumber" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "quantityAvailable" => "SearchColumnDoubleField[]",
        "quantityOnHand" => "SearchColumnDoubleField[]",
    );

    /**
     * @param SearchColumnSelectField[] $binNumber
     * @return InventoryNumberBinSearchRowBasic
     */
    public function setBinNumber(SearchColumnSelectField $binNumber): InventoryNumberBinSearchRowBasic
    {
        $this->binNumber[] = $binNumber;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBinNumber(): array
    {
        return $this->binNumber;
    }

    /**
     * @param SearchColumnSelectField[] $inventoryNumber
     * @return InventoryNumberBinSearchRowBasic
     */
    public function setInventoryNumber(SearchColumnSelectField $inventoryNumber): InventoryNumberBinSearchRowBasic
    {
        $this->inventoryNumber[] = $inventoryNumber;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInventoryNumber(): array
    {
        return $this->inventoryNumber;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return InventoryNumberBinSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): InventoryNumberBinSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityAvailable
     * @return InventoryNumberBinSearchRowBasic
     */
    public function setQuantityAvailable(SearchColumnDoubleField $quantityAvailable): InventoryNumberBinSearchRowBasic
    {
        $this->quantityAvailable[] = $quantityAvailable;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityAvailable(): array
    {
        return $this->quantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityOnHand
     * @return InventoryNumberBinSearchRowBasic
     */
    public function setQuantityOnHand(SearchColumnDoubleField $quantityOnHand): InventoryNumberBinSearchRowBasic
    {
        $this->quantityOnHand[] = $quantityOnHand;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityOnHand(): array
    {
        return $this->quantityOnHand;
    }

}
