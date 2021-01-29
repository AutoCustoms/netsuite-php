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

class PurchaseRequisitionItem {
    /**
     * @var int
     */
    protected int $line;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $vendorName;

    /**
     * @var RecordRef
     */
    protected RecordRef $poVendor;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var float
     */
    protected float $estimatedRate;

    /**
     * @var float
     */
    protected float $estimatedAmount;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var bool
     */
    protected bool $isBillable;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $linkedOrderList;

    /**
     * @var string
     */
    protected string $linkedOrderStatus;

    /**
     * @var string
     */
    protected string $expectedReceiptDate;

    /**
     * @var bool
     */
    protected bool $isClosed;

    /**
     * @var bool
     */
    protected bool $expandItemGroup;

    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "vendorName" => "string",
        "poVendor" => "RecordRef",
        "quantity" => "float",
        "units" => "RecordRef",
        "serialNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "estimatedRate" => "float",
        "estimatedAmount" => "float",
        "rate" => "string",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "linkedOrderList" => "RecordRefList",
        "linkedOrderStatus" => "string",
        "expectedReceiptDate" => "dateTime",
        "isClosed" => "boolean",
        "expandItemGroup" => "boolean",
    );

    /**
     * @param int $line
     * @return PurchaseRequisitionItem
     */
    public function setLine(int $line): PurchaseRequisitionItem
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param RecordRef $item
     * @return PurchaseRequisitionItem
     */
    public function setItem(RecordRef $item): PurchaseRequisitionItem
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
     * @param string $vendorName
     * @return PurchaseRequisitionItem
     */
    public function setVendorName(string $vendorName): PurchaseRequisitionItem
    {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    /**
     * @param RecordRef $poVendor
     * @return PurchaseRequisitionItem
     */
    public function setPoVendor(RecordRef $poVendor): PurchaseRequisitionItem
    {
        $this->poVendor = $poVendor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoVendor(): RecordRef
    {
        return $this->poVendor;
    }

    /**
     * @param float $quantity
     * @return PurchaseRequisitionItem
     */
    public function setQuantity(float $quantity): PurchaseRequisitionItem
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
     * @param RecordRef $units
     * @return PurchaseRequisitionItem
     */
    public function setUnits(RecordRef $units): PurchaseRequisitionItem
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits(): RecordRef
    {
        return $this->units;
    }

    /**
     * @param string $serialNumbers
     * @return PurchaseRequisitionItem
     */
    public function setSerialNumbers(string $serialNumbers): PurchaseRequisitionItem
    {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers(): string
    {
        return $this->serialNumbers;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return PurchaseRequisitionItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): PurchaseRequisitionItem
    {
        $this->inventoryDetail = $inventoryDetail;
        return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getInventoryDetail(): InventoryDetail
    {
        return $this->inventoryDetail;
    }

    /**
     * @param string $description
     * @return PurchaseRequisitionItem
     */
    public function setDescription(string $description): PurchaseRequisitionItem
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
     * @param float $estimatedRate
     * @return PurchaseRequisitionItem
     */
    public function setEstimatedRate(float $estimatedRate): PurchaseRequisitionItem
    {
        $this->estimatedRate = $estimatedRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedRate(): float
    {
        return $this->estimatedRate;
    }

    /**
     * @param float $estimatedAmount
     * @return PurchaseRequisitionItem
     */
    public function setEstimatedAmount(float $estimatedAmount): PurchaseRequisitionItem
    {
        $this->estimatedAmount = $estimatedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedAmount(): float
    {
        return $this->estimatedAmount;
    }

    /**
     * @param string $rate
     * @return PurchaseRequisitionItem
     */
    public function setRate(string $rate): PurchaseRequisitionItem
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param float $amount
     * @return PurchaseRequisitionItem
     */
    public function setAmount(float $amount): PurchaseRequisitionItem
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param RecordRef $taxCode
     * @return PurchaseRequisitionItem
     */
    public function setTaxCode(RecordRef $taxCode): PurchaseRequisitionItem
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode(): RecordRef
    {
        return $this->taxCode;
    }

    /**
     * @param float $grossAmt
     * @return PurchaseRequisitionItem
     */
    public function setGrossAmt(float $grossAmt): PurchaseRequisitionItem
    {
        $this->grossAmt = $grossAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmt(): float
    {
        return $this->grossAmt;
    }

    /**
     * @param CustomFieldList $options
     * @return PurchaseRequisitionItem
     */
    public function setOptions(CustomFieldList $options): PurchaseRequisitionItem
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getOptions(): CustomFieldList
    {
        return $this->options;
    }

    /**
     * @param RecordRef $department
     * @return PurchaseRequisitionItem
     */
    public function setDepartment(RecordRef $department): PurchaseRequisitionItem
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return PurchaseRequisitionItem
     */
    public function setClass(RecordRef $class): PurchaseRequisitionItem
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $customer
     * @return PurchaseRequisitionItem
     */
    public function setCustomer(RecordRef $customer): PurchaseRequisitionItem
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer(): RecordRef
    {
        return $this->customer;
    }

    /**
     * @param bool $isBillable
     * @return PurchaseRequisitionItem
     */
    public function setIsBillable(bool $isBillable): PurchaseRequisitionItem
    {
        $this->isBillable = $isBillable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBillable(): bool
    {
        return $this->isBillable;
    }

    /**
     * @param RecordRefList $linkedOrderList
     * @return PurchaseRequisitionItem
     */
    public function setLinkedOrderList(RecordRefList $linkedOrderList): PurchaseRequisitionItem
    {
        $this->linkedOrderList = $linkedOrderList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLinkedOrderList(): RecordRefList
    {
        return $this->linkedOrderList;
    }

    /**
     * @param string $linkedOrderStatus
     * @return PurchaseRequisitionItem
     */
    public function setLinkedOrderStatus(string $linkedOrderStatus): PurchaseRequisitionItem
    {
        $this->linkedOrderStatus = $linkedOrderStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedOrderStatus(): string
    {
        return $this->linkedOrderStatus;
    }

    /**
     * @param string $expectedReceiptDate
     * @return PurchaseRequisitionItem
     */
    public function setExpectedReceiptDate(string $expectedReceiptDate): PurchaseRequisitionItem
    {
        $this->expectedReceiptDate = $expectedReceiptDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedReceiptDate(): string
    {
        return $this->expectedReceiptDate;
    }

    /**
     * @param bool $isClosed
     * @return PurchaseRequisitionItem
     */
    public function setIsClosed(bool $isClosed): PurchaseRequisitionItem
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * @param bool $expandItemGroup
     * @return PurchaseRequisitionItem
     */
    public function setExpandItemGroup(bool $expandItemGroup): PurchaseRequisitionItem
    {
        $this->expandItemGroup = $expandItemGroup;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExpandItemGroup(): bool
    {
        return $this->expandItemGroup;
    }

}
