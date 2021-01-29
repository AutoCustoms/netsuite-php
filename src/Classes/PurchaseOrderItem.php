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

class PurchaseOrderItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var float
     */
    protected float $quantityOnShipments;

    /**
     * @var string
     */
    protected string $vendorName;

    /**
     * @var float
     */
    protected float $quantityReceived;

    /**
     * @var float
     */
    protected float $quantityBilled;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    /**
     * @var float
     */
    protected float $quantity;

    protected $tax1Amt;
    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseContract;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var float
     */
    protected float $taxAmount;

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
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $landedCostCategory;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var bool
     */
    protected bool $isBillable;

    /**
     * @var TransactionBillVarianceStatus
     */
    protected TransactionBillVarianceStatus $billVarianceStatus;

    /**
     * @var bool
     */
    protected bool $matchBillToReceipt;

    /**
     * @var string
     */
    protected string $expectedReceiptDate;

    /**
     * @var bool
     */
    protected bool $isClosed;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $linkedOrderList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "quantityOnShipments" => "float",
        "vendorName" => "string",
        "quantityReceived" => "float",
        "quantityBilled" => "float",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "quantity" => "float",
        "tax1Amt" => "float",
        "grossAmt" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "description" => "string",
        "purchaseContract" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "taxAmount" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "landedCostCategory" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
        "matchBillToReceipt" => "boolean",
        "expectedReceiptDate" => "dateTime",
        "isClosed" => "boolean",
        "taxDetailsReference" => "string",
        "createdFrom" => "RecordRef",
        "linkedOrderList" => "RecordRefList",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return PurchaseOrderItem
     */
    public function setItem(RecordRef $item): PurchaseOrderItem
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
     * @param int $line
     * @return PurchaseOrderItem
     */
    public function setLine(int $line): PurchaseOrderItem
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
     * @param float $quantityOnShipments
     * @return PurchaseOrderItem
     */
    public function setQuantityOnShipments(float $quantityOnShipments): PurchaseOrderItem
    {
        $this->quantityOnShipments = $quantityOnShipments;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnShipments(): float
    {
        return $this->quantityOnShipments;
    }

    /**
     * @param string $vendorName
     * @return PurchaseOrderItem
     */
    public function setVendorName(string $vendorName): PurchaseOrderItem
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
     * @param float $quantityReceived
     * @return PurchaseOrderItem
     */
    public function setQuantityReceived(float $quantityReceived): PurchaseOrderItem
    {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityReceived(): float
    {
        return $this->quantityReceived;
    }

    /**
     * @param float $quantityBilled
     * @return PurchaseOrderItem
     */
    public function setQuantityBilled(float $quantityBilled): PurchaseOrderItem
    {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBilled(): float
    {
        return $this->quantityBilled;
    }

    /**
     * @param float $quantityAvailable
     * @return PurchaseOrderItem
     */
    public function setQuantityAvailable(float $quantityAvailable): PurchaseOrderItem
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
     * @param float $quantityOnHand
     * @return PurchaseOrderItem
     */
    public function setQuantityOnHand(float $quantityOnHand): PurchaseOrderItem
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
     * @param RecordRef $taxCode
     * @return PurchaseOrderItem
     */
    public function setTaxCode(RecordRef $taxCode): PurchaseOrderItem
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
     * @param float $quantity
     * @return PurchaseOrderItem
     */
    public function setQuantity(float $quantity): PurchaseOrderItem
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
     * @param float $grossAmt
     * @return PurchaseOrderItem
     */
    public function setGrossAmt(float $grossAmt): PurchaseOrderItem
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
     * @param RecordRef $units
     * @return PurchaseOrderItem
     */
    public function setUnits(RecordRef $units): PurchaseOrderItem
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
     * @param InventoryDetail $inventoryDetail
     * @return PurchaseOrderItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): PurchaseOrderItem
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
     * @param string $serialNumbers
     * @return PurchaseOrderItem
     */
    public function setSerialNumbers(string $serialNumbers): PurchaseOrderItem
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
     * @param string $description
     * @return PurchaseOrderItem
     */
    public function setDescription(string $description): PurchaseOrderItem
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
     * @param RecordRef $purchaseContract
     * @return PurchaseOrderItem
     */
    public function setPurchaseContract(RecordRef $purchaseContract): PurchaseOrderItem
    {
        $this->purchaseContract = $purchaseContract;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseContract(): RecordRef
    {
        return $this->purchaseContract;
    }

    /**
     * @param string $rate
     * @return PurchaseOrderItem
     */
    public function setRate(string $rate): PurchaseOrderItem
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
     * @return PurchaseOrderItem
     */
    public function setAmount(float $amount): PurchaseOrderItem
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
     * @param CustomFieldList $options
     * @return PurchaseOrderItem
     */
    public function setOptions(CustomFieldList $options): PurchaseOrderItem
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
     * @param float $taxAmount
     * @return PurchaseOrderItem
     */
    public function setTaxAmount(float $taxAmount): PurchaseOrderItem
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }

    /**
     * @param RecordRef $department
     * @return PurchaseOrderItem
     */
    public function setDepartment(RecordRef $department): PurchaseOrderItem
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
     * @return PurchaseOrderItem
     */
    public function setClass(RecordRef $class): PurchaseOrderItem
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
     * @param RecordRef $location
     * @return PurchaseOrderItem
     */
    public function setLocation(RecordRef $location): PurchaseOrderItem
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $landedCostCategory
     * @return PurchaseOrderItem
     */
    public function setLandedCostCategory(RecordRef $landedCostCategory): PurchaseOrderItem
    {
        $this->landedCostCategory = $landedCostCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLandedCostCategory(): RecordRef
    {
        return $this->landedCostCategory;
    }

    /**
     * @param RecordRef $customer
     * @return PurchaseOrderItem
     */
    public function setCustomer(RecordRef $customer): PurchaseOrderItem
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
     * @return PurchaseOrderItem
     */
    public function setIsBillable(bool $isBillable): PurchaseOrderItem
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
     * @param TransactionBillVarianceStatus $billVarianceStatus
     * @return PurchaseOrderItem
     */
    public function setBillVarianceStatus(TransactionBillVarianceStatus $billVarianceStatus): PurchaseOrderItem
    {
        $this->billVarianceStatus = $billVarianceStatus;
        return $this;
    }

    /**
     * @return TransactionBillVarianceStatus
     */
    public function getBillVarianceStatus(): TransactionBillVarianceStatus
    {
        return $this->billVarianceStatus;
    }

    /**
     * @param bool $matchBillToReceipt
     * @return PurchaseOrderItem
     */
    public function setMatchBillToReceipt(bool $matchBillToReceipt): PurchaseOrderItem
    {
        $this->matchBillToReceipt = $matchBillToReceipt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMatchBillToReceipt(): bool
    {
        return $this->matchBillToReceipt;
    }

    /**
     * @param string $expectedReceiptDate
     * @return PurchaseOrderItem
     */
    public function setExpectedReceiptDate(string $expectedReceiptDate): PurchaseOrderItem
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
     * @return PurchaseOrderItem
     */
    public function setIsClosed(bool $isClosed): PurchaseOrderItem
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
     * @param string $taxDetailsReference
     * @return PurchaseOrderItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): PurchaseOrderItem
    {
        $this->taxDetailsReference = $taxDetailsReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxDetailsReference(): string
    {
        return $this->taxDetailsReference;
    }

    /**
     * @param RecordRef $createdFrom
     * @return PurchaseOrderItem
     */
    public function setCreatedFrom(RecordRef $createdFrom): PurchaseOrderItem
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param RecordRefList $linkedOrderList
     * @return PurchaseOrderItem
     */
    public function setLinkedOrderList(RecordRefList $linkedOrderList): PurchaseOrderItem
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
     * @param CustomFieldList $customFieldList
     * @return PurchaseOrderItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PurchaseOrderItem
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

}
