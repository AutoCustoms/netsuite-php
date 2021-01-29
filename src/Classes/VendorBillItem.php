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

class VendorBillItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $vendorName;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var int
     */
    protected int $orderDoc;

    /**
     * @var int
     */
    protected int $orderLine;

    /**
     * @var float
     */
    protected float $quantity;

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
    protected string $description;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $binNumbers;

    /**
     * @var string
     */
    protected string $expirationDate;

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

    protected $tax1Amt;
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
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $landedCostCategory;

    /**
     * @var bool
     */
    protected bool $isBillable;

    /**
     * @var TransactionBillVarianceStatus
     */
    protected TransactionBillVarianceStatus $billVarianceStatus;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $billreceiptsList;

    /**
     * @var RecordRef
     */
    protected RecordRef $amortizationSched;

    /**
     * @var string
     */
    protected string $amortizStartDate;

    /**
     * @var string
     */
    protected string $amortizationEndDate;

    /**
     * @var string
     */
    protected string $amortizationResidual;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var LandedCost
     */
    protected LandedCost $landedCost;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "vendorName" => "string",
        "line" => "integer",
        "orderDoc" => "integer",
        "orderLine" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "expirationDate" => "dateTime",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "landedCostCategory" => "RecordRef",
        "isBillable" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
        "billreceiptsList" => "RecordRefList",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "landedCost" => "LandedCost",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return VendorBillItem
     */
    public function setItem(RecordRef $item): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setVendorName(string $vendorName): VendorBillItem
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
     * @param int $line
     * @return VendorBillItem
     */
    public function setLine(int $line): VendorBillItem
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
     * @param int $orderDoc
     * @return VendorBillItem
     */
    public function setOrderDoc(int $orderDoc): VendorBillItem
    {
        $this->orderDoc = $orderDoc;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderDoc(): int
    {
        return $this->orderDoc;
    }

    /**
     * @param int $orderLine
     * @return VendorBillItem
     */
    public function setOrderLine(int $orderLine): VendorBillItem
    {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderLine(): int
    {
        return $this->orderLine;
    }

    /**
     * @param float $quantity
     * @return VendorBillItem
     */
    public function setQuantity(float $quantity): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setUnits(RecordRef $units): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setDescription(string $description): VendorBillItem
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
     * @param string $serialNumbers
     * @return VendorBillItem
     */
    public function setSerialNumbers(string $serialNumbers): VendorBillItem
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
     * @param string $binNumbers
     * @return VendorBillItem
     */
    public function setBinNumbers(string $binNumbers): VendorBillItem
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
     * @param string $expirationDate
     * @return VendorBillItem
     */
    public function setExpirationDate(string $expirationDate): VendorBillItem
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
     * @param RecordRef $taxCode
     * @return VendorBillItem
     */
    public function setTaxCode(RecordRef $taxCode): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setGrossAmt(float $grossAmt): VendorBillItem
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
     * @param string $rate
     * @return VendorBillItem
     */
    public function setRate(string $rate): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setAmount(float $amount): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setOptions(CustomFieldList $options): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setDepartment(RecordRef $department): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setClass(RecordRef $class): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setLocation(RecordRef $location): VendorBillItem
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
     * @param RecordRef $customer
     * @return VendorBillItem
     */
    public function setCustomer(RecordRef $customer): VendorBillItem
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
     * @param RecordRef $landedCostCategory
     * @return VendorBillItem
     */
    public function setLandedCostCategory(RecordRef $landedCostCategory): VendorBillItem
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
     * @param bool $isBillable
     * @return VendorBillItem
     */
    public function setIsBillable(bool $isBillable): VendorBillItem
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
     * @return VendorBillItem
     */
    public function setBillVarianceStatus(TransactionBillVarianceStatus $billVarianceStatus): VendorBillItem
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
     * @param RecordRefList $billreceiptsList
     * @return VendorBillItem
     */
    public function setBillreceiptsList(RecordRefList $billreceiptsList): VendorBillItem
    {
        $this->billreceiptsList = $billreceiptsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getBillreceiptsList(): RecordRefList
    {
        return $this->billreceiptsList;
    }

    /**
     * @param RecordRef $amortizationSched
     * @return VendorBillItem
     */
    public function setAmortizationSched(RecordRef $amortizationSched): VendorBillItem
    {
        $this->amortizationSched = $amortizationSched;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationSched(): RecordRef
    {
        return $this->amortizationSched;
    }

    /**
     * @param string $amortizStartDate
     * @return VendorBillItem
     */
    public function setAmortizStartDate(string $amortizStartDate): VendorBillItem
    {
        $this->amortizStartDate = $amortizStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizStartDate(): string
    {
        return $this->amortizStartDate;
    }

    /**
     * @param string $amortizationEndDate
     * @return VendorBillItem
     */
    public function setAmortizationEndDate(string $amortizationEndDate): VendorBillItem
    {
        $this->amortizationEndDate = $amortizationEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizationEndDate(): string
    {
        return $this->amortizationEndDate;
    }

    /**
     * @param string $amortizationResidual
     * @return VendorBillItem
     */
    public function setAmortizationResidual(string $amortizationResidual): VendorBillItem
    {
        $this->amortizationResidual = $amortizationResidual;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizationResidual(): string
    {
        return $this->amortizationResidual;
    }

    /**
     * @param float $taxAmount
     * @return VendorBillItem
     */
    public function setTaxAmount(float $taxAmount): VendorBillItem
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
     * @param string $taxDetailsReference
     * @return VendorBillItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): VendorBillItem
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
     * @param LandedCost $landedCost
     * @return VendorBillItem
     */
    public function setLandedCost(LandedCost $landedCost): VendorBillItem
    {
        $this->landedCost = $landedCost;
        return $this;
    }

    /**
     * @return LandedCost
     */
    public function getLandedCost(): LandedCost
    {
        return $this->landedCost;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return VendorBillItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorBillItem
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
