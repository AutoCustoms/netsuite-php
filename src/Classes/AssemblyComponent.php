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

class AssemblyComponent {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $componentInventoryDetail;

    /**
     * @var string
     */
    protected string $componentNumbers;

    /**
     * @var string
     */
    protected string $binNumbers;

    /**
     * @var int
     */
    protected int $lineNumber;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "quantity" => "float",
        "quantityOnHand" => "float",
        "componentInventoryDetail" => "InventoryDetail",
        "componentNumbers" => "string",
        "binNumbers" => "string",
        "lineNumber" => "integer",
    );

    /**
     * @param RecordRef $item
     * @return AssemblyComponent
     */
    public function setItem(RecordRef $item): AssemblyComponent
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
     * @param float $quantity
     * @return AssemblyComponent
     */
    public function setQuantity(float $quantity): AssemblyComponent
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
     * @param float $quantityOnHand
     * @return AssemblyComponent
     */
    public function setQuantityOnHand(float $quantityOnHand): AssemblyComponent
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
     * @param InventoryDetail $componentInventoryDetail
     * @return AssemblyComponent
     */
    public function setComponentInventoryDetail(InventoryDetail $componentInventoryDetail): AssemblyComponent
    {
        $this->componentInventoryDetail = $componentInventoryDetail;
        return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getComponentInventoryDetail(): InventoryDetail
    {
        return $this->componentInventoryDetail;
    }

    /**
     * @param string $componentNumbers
     * @return AssemblyComponent
     */
    public function setComponentNumbers(string $componentNumbers): AssemblyComponent
    {
        $this->componentNumbers = $componentNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getComponentNumbers(): string
    {
        return $this->componentNumbers;
    }

    /**
     * @param string $binNumbers
     * @return AssemblyComponent
     */
    public function setBinNumbers(string $binNumbers): AssemblyComponent
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
     * @param int $lineNumber
     * @return AssemblyComponent
     */
    public function setLineNumber(int $lineNumber): AssemblyComponent
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber(): int
    {
        return $this->lineNumber;
    }

}
