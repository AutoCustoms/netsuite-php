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

class InventoryAssignment {
    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueInventoryNumber;

    /**
     * @var string
     */
    protected string $receiptInventoryNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $binNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $toBinNumber;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var RecordRef
     */
    protected RecordRef $inventoryStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $toInventoryStatus;

    static $paramtypesmap = array(
        "internalId" => "string",
        "issueInventoryNumber" => "RecordRef",
        "receiptInventoryNumber" => "string",
        "binNumber" => "RecordRef",
        "toBinNumber" => "RecordRef",
        "quantity" => "float",
        "expirationDate" => "dateTime",
        "quantityAvailable" => "float",
        "inventoryStatus" => "RecordRef",
        "toInventoryStatus" => "RecordRef",
    );

    /**
     * @param string $internalId
     * @return InventoryAssignment
     */
    public function setInternalId(string $internalId): InventoryAssignment
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param RecordRef $issueInventoryNumber
     * @return InventoryAssignment
     */
    public function setIssueInventoryNumber(RecordRef $issueInventoryNumber): InventoryAssignment
    {
        $this->issueInventoryNumber = $issueInventoryNumber;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueInventoryNumber(): RecordRef
    {
        return $this->issueInventoryNumber;
    }

    /**
     * @param string $receiptInventoryNumber
     * @return InventoryAssignment
     */
    public function setReceiptInventoryNumber(string $receiptInventoryNumber): InventoryAssignment
    {
        $this->receiptInventoryNumber = $receiptInventoryNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptInventoryNumber(): string
    {
        return $this->receiptInventoryNumber;
    }

    /**
     * @param RecordRef $binNumber
     * @return InventoryAssignment
     */
    public function setBinNumber(RecordRef $binNumber): InventoryAssignment
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
     * @param RecordRef $toBinNumber
     * @return InventoryAssignment
     */
    public function setToBinNumber(RecordRef $toBinNumber): InventoryAssignment
    {
        $this->toBinNumber = $toBinNumber;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToBinNumber(): RecordRef
    {
        return $this->toBinNumber;
    }

    /**
     * @param float $quantity
     * @return InventoryAssignment
     */
    public function setQuantity(float $quantity): InventoryAssignment
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
     * @param string $expirationDate
     * @return InventoryAssignment
     */
    public function setExpirationDate(string $expirationDate): InventoryAssignment
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
     * @param float $quantityAvailable
     * @return InventoryAssignment
     */
    public function setQuantityAvailable(float $quantityAvailable): InventoryAssignment
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
     * @param RecordRef $inventoryStatus
     * @return InventoryAssignment
     */
    public function setInventoryStatus(RecordRef $inventoryStatus): InventoryAssignment
    {
        $this->inventoryStatus = $inventoryStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInventoryStatus(): RecordRef
    {
        return $this->inventoryStatus;
    }

    /**
     * @param RecordRef $toInventoryStatus
     * @return InventoryAssignment
     */
    public function setToInventoryStatus(RecordRef $toInventoryStatus): InventoryAssignment
    {
        $this->toInventoryStatus = $toInventoryStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToInventoryStatus(): RecordRef
    {
        return $this->toInventoryStatus;
    }

}
