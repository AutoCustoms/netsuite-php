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

class InventoryNumberLocations {
    /**
     * @var string
     */
    protected string $location;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var float
     */
    protected float $quantityOnOrder;

    /**
     * @var float
     */
    protected float $quantityInTransit;

    static $paramtypesmap = array(
        "location" => "string",
        "quantityOnHand" => "float",
        "quantityAvailable" => "float",
        "quantityOnOrder" => "float",
        "quantityInTransit" => "float",
    );

    /**
     * @param string $location
     * @return InventoryNumberLocations
     */
    public function setLocation(string $location): InventoryNumberLocations
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param float $quantityOnHand
     * @return InventoryNumberLocations
     */
    public function setQuantityOnHand(float $quantityOnHand): InventoryNumberLocations
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
     * @param float $quantityAvailable
     * @return InventoryNumberLocations
     */
    public function setQuantityAvailable(float $quantityAvailable): InventoryNumberLocations
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
     * @param float $quantityOnOrder
     * @return InventoryNumberLocations
     */
    public function setQuantityOnOrder(float $quantityOnOrder): InventoryNumberLocations
    {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder(): float
    {
        return $this->quantityOnOrder;
    }

    /**
     * @param float $quantityInTransit
     * @return InventoryNumberLocations
     */
    public function setQuantityInTransit(float $quantityInTransit): InventoryNumberLocations
    {
        $this->quantityInTransit = $quantityInTransit;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityInTransit(): float
    {
        return $this->quantityInTransit;
    }

}
