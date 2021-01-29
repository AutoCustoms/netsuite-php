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

class InventoryItemBinNumber {
    /**
     * @var RecordRef
     */
    protected RecordRef $binNumber;

    /**
     * @var string
     */
    protected string $onHand;

    /**
     * @var string
     */
    protected string $onHandAvail;

    /**
     * @var string
     */
    protected string $location;

    /**
     * @var bool
     */
    protected bool $preferredBin;

    static $paramtypesmap = array(
        "binNumber" => "RecordRef",
        "onHand" => "string",
        "onHandAvail" => "string",
        "location" => "string",
        "preferredBin" => "boolean",
    );

    /**
     * @param RecordRef $binNumber
     * @return InventoryItemBinNumber
     */
    public function setBinNumber(RecordRef $binNumber): InventoryItemBinNumber
    {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBinNumber(): RecordRef
    {
        return $this->binNumber;
    }

    /**
     * @param string $onHand
     * @return InventoryItemBinNumber
     */
    public function setOnHand(string $onHand): InventoryItemBinNumber
    {
        $this->onHand = $onHand;
        return $this;
    }

    /**
     * @return string
     */
    public function getOnHand(): string
    {
        return $this->onHand;
    }

    /**
     * @param string $onHandAvail
     * @return InventoryItemBinNumber
     */
    public function setOnHandAvail(string $onHandAvail): InventoryItemBinNumber
    {
        $this->onHandAvail = $onHandAvail;
        return $this;
    }

    /**
     * @return string
     */
    public function getOnHandAvail(): string
    {
        return $this->onHandAvail;
    }

    /**
     * @param string $location
     * @return InventoryItemBinNumber
     */
    public function setLocation(string $location): InventoryItemBinNumber
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
     * @param bool $preferredBin
     * @return InventoryItemBinNumber
     */
    public function setPreferredBin(bool $preferredBin): InventoryItemBinNumber
    {
        $this->preferredBin = $preferredBin;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreferredBin(): bool
    {
        return $this->preferredBin;
    }

}
