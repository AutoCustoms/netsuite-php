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

class CustomPurchaseItem {
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
     * @var float
     */
    protected float $grossAmt;

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
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "grossAmt" => "float",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "landedCostCategory" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "billVarianceStatus" => "TransactionBillVarianceStatus",
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
     * @return CustomPurchaseItem
     */
    public function setItem(RecordRef $item): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setVendorName(string $vendorName): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setLine(int $line): CustomPurchaseItem
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
     * @param float $quantity
     * @return CustomPurchaseItem
     */
    public function setQuantity(float $quantity): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setUnits(RecordRef $units): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setDescription(string $description): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setSerialNumbers(string $serialNumbers): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setBinNumbers(string $binNumbers): CustomPurchaseItem
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
     * @param float $grossAmt
     * @return CustomPurchaseItem
     */
    public function setGrossAmt(float $grossAmt): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setRate(string $rate): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setAmount(float $amount): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setOptions(CustomFieldList $options): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setDepartment(RecordRef $department): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setClass(RecordRef $class): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setLocation(RecordRef $location): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setLandedCostCategory(RecordRef $landedCostCategory): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setCustomer(RecordRef $customer): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setIsBillable(bool $isBillable): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setBillVarianceStatus(TransactionBillVarianceStatus $billVarianceStatus): CustomPurchaseItem
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
     * @param RecordRef $amortizationSched
     * @return CustomPurchaseItem
     */
    public function setAmortizationSched(RecordRef $amortizationSched): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setAmortizStartDate(string $amortizStartDate): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setAmortizationEndDate(string $amortizationEndDate): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setAmortizationResidual(string $amortizationResidual): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setTaxAmount(float $taxAmount): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setLandedCost(LandedCost $landedCost): CustomPurchaseItem
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
     * @return CustomPurchaseItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomPurchaseItem
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
