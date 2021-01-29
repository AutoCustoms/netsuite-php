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

class ManufacturingRoutingRoutingComponent {
    /**
     * @var string
     */
    protected string $itemName;

    /**
     * @var string
     */
    protected string $revision;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var float
     */
    protected float $yield;

    /**
     * @var float
     */
    protected float $bomQuantity;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var string
     */
    protected string $units;

    /**
     * @var RecordRef
     */
    protected RecordRef $operationDisplayText;

    /**
     * @var int
     */
    protected int $operationSequenceNumber;

    /**
     * @var string
     */
    protected string $component;

    /**
     * @var string
     */
    protected string $item;

    static $paramtypesmap = array(
        "itemName" => "string",
        "revision" => "string",
        "description" => "string",
        "yield" => "float",
        "bomQuantity" => "float",
        "quantity" => "float",
        "units" => "string",
        "operationDisplayText" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "component" => "string",
        "item" => "string",
    );

    /**
     * @param string $itemName
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setItemName(string $itemName): ManufacturingRoutingRoutingComponent
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
     * @param string $revision
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setRevision(string $revision): ManufacturingRoutingRoutingComponent
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevision(): string
    {
        return $this->revision;
    }

    /**
     * @param string $description
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setDescription(string $description): ManufacturingRoutingRoutingComponent
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
     * @param float $yield
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setYield(float $yield): ManufacturingRoutingRoutingComponent
    {
        $this->yield = $yield;
        return $this;
    }

    /**
     * @return float
     */
    public function getYield(): float
    {
        return $this->yield;
    }

    /**
     * @param float $bomQuantity
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setBomQuantity(float $bomQuantity): ManufacturingRoutingRoutingComponent
    {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getBomQuantity(): float
    {
        return $this->bomQuantity;
    }

    /**
     * @param float $quantity
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setQuantity(float $quantity): ManufacturingRoutingRoutingComponent
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
     * @param string $units
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setUnits(string $units): ManufacturingRoutingRoutingComponent
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * @param RecordRef $operationDisplayText
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setOperationDisplayText(RecordRef $operationDisplayText): ManufacturingRoutingRoutingComponent
    {
        $this->operationDisplayText = $operationDisplayText;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOperationDisplayText(): RecordRef
    {
        return $this->operationDisplayText;
    }

    /**
     * @param int $operationSequenceNumber
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setOperationSequenceNumber(int $operationSequenceNumber): ManufacturingRoutingRoutingComponent
    {
        $this->operationSequenceNumber = $operationSequenceNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperationSequenceNumber(): int
    {
        return $this->operationSequenceNumber;
    }

    /**
     * @param string $component
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setComponent(string $component): ManufacturingRoutingRoutingComponent
    {
        $this->component = $component;
        return $this;
    }

    /**
     * @return string
     */
    public function getComponent(): string
    {
        return $this->component;
    }

    /**
     * @param string $item
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setItem(string $item): ManufacturingRoutingRoutingComponent
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->item;
    }

}
