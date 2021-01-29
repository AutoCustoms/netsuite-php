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

class WorkOrderIssueComponent {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $operationSequenceNumber;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $componentInventoryDetail;

    /**
     * @var int
     */
    protected int $lineNumber;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "quantity" => "float",
        "componentInventoryDetail" => "InventoryDetail",
        "lineNumber" => "integer",
    );

    /**
     * @param RecordRef $item
     * @return WorkOrderIssueComponent
     */
    public function setItem(RecordRef $item): WorkOrderIssueComponent
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
     * @param int $operationSequenceNumber
     * @return WorkOrderIssueComponent
     */
    public function setOperationSequenceNumber(int $operationSequenceNumber): WorkOrderIssueComponent
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
     * @param float $quantity
     * @return WorkOrderIssueComponent
     */
    public function setQuantity(float $quantity): WorkOrderIssueComponent
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
     * @param InventoryDetail $componentInventoryDetail
     * @return WorkOrderIssueComponent
     */
    public function setComponentInventoryDetail(InventoryDetail $componentInventoryDetail): WorkOrderIssueComponent
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
     * @param int $lineNumber
     * @return WorkOrderIssueComponent
     */
    public function setLineNumber(int $lineNumber): WorkOrderIssueComponent
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
