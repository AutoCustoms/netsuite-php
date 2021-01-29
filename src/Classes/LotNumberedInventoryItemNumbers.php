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

class LotNumberedInventoryItemNumbers {
    /**
     * @var RecordRef
     */
    protected RecordRef $serialNumber;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var string
     */
    protected string $expirationDate;

    static $paramtypesmap = array(
        "serialNumber" => "RecordRef",
        "quantityOnHand" => "float",
        "expirationDate" => "dateTime",
    );

    /**
     * @param RecordRef $serialNumber
     * @return LotNumberedInventoryItemNumbers
     */
    public function setSerialNumber(RecordRef $serialNumber): LotNumberedInventoryItemNumbers
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSerialNumber(): RecordRef
    {
        return $this->serialNumber;
    }

    /**
     * @param float $quantityOnHand
     * @return LotNumberedInventoryItemNumbers
     */
    public function setQuantityOnHand(float $quantityOnHand): LotNumberedInventoryItemNumbers
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
     * @param string $expirationDate
     * @return LotNumberedInventoryItemNumbers
     */
    public function setExpirationDate(string $expirationDate): LotNumberedInventoryItemNumbers
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

}
