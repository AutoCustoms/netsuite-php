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

class ItemSupplyPlanOrder {
    /**
     * @var int
     */
    protected int $orderLineId;

    /**
     * @var string
     */
    protected string $orderDate;

    /**
     * @var string
     */
    protected string $receiptDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceLocation;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var bool
     */
    protected bool $orderCreated;

    /**
     * @var ItemSupplyPlanOrderType
     */
    protected ItemSupplyPlanOrderType $orderType;

    static $paramtypesmap = array(
        "orderLineId" => "integer",
        "orderDate" => "dateTime",
        "receiptDate" => "dateTime",
        "sourceLocation" => "RecordRef",
        "quantity" => "float",
        "orderCreated" => "boolean",
        "orderType" => "ItemSupplyPlanOrderType",
    );

    /**
     * @param int $orderLineId
     * @return ItemSupplyPlanOrder
     */
    public function setOrderLineId(int $orderLineId): ItemSupplyPlanOrder
    {
        $this->orderLineId = $orderLineId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderLineId(): int
    {
        return $this->orderLineId;
    }

    /**
     * @param string $orderDate
     * @return ItemSupplyPlanOrder
     */
    public function setOrderDate(string $orderDate): ItemSupplyPlanOrder
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderDate(): string
    {
        return $this->orderDate;
    }

    /**
     * @param string $receiptDate
     * @return ItemSupplyPlanOrder
     */
    public function setReceiptDate(string $receiptDate): ItemSupplyPlanOrder
    {
        $this->receiptDate = $receiptDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptDate(): string
    {
        return $this->receiptDate;
    }

    /**
     * @param RecordRef $sourceLocation
     * @return ItemSupplyPlanOrder
     */
    public function setSourceLocation(RecordRef $sourceLocation): ItemSupplyPlanOrder
    {
        $this->sourceLocation = $sourceLocation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceLocation(): RecordRef
    {
        return $this->sourceLocation;
    }

    /**
     * @param float $quantity
     * @return ItemSupplyPlanOrder
     */
    public function setQuantity(float $quantity): ItemSupplyPlanOrder
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
     * @param bool $orderCreated
     * @return ItemSupplyPlanOrder
     */
    public function setOrderCreated(bool $orderCreated): ItemSupplyPlanOrder
    {
        $this->orderCreated = $orderCreated;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOrderCreated(): bool
    {
        return $this->orderCreated;
    }

    /**
     * @param ItemSupplyPlanOrderType $orderType
     * @return ItemSupplyPlanOrder
     */
    public function setOrderType(ItemSupplyPlanOrderType $orderType): ItemSupplyPlanOrder
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return ItemSupplyPlanOrderType
     */
    public function getOrderType(): ItemSupplyPlanOrderType
    {
        return $this->orderType;
    }

}
