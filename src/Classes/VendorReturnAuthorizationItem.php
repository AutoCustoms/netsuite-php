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

class VendorReturnAuthorizationItem {
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
     * @var RecordRefList
     */
    protected RecordRefList $serialNumbersList;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $binNumbers;

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

    protected $tax1Amt;
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
     * @var bool
     */
    protected bool $isBillable;

    /**
     * @var bool
     */
    protected bool $isClosed;

    /**
     * @var RecordRef
     */
    protected RecordRef $amortizationSched;

    /**
     * @var bool
     */
    protected bool $isDropShipment;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

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
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "vendorName" => "string",
        "line" => "integer",
        "orderLine" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbersList" => "RecordRefList",
        "description" => "string",
        "binNumbers" => "string",
        "rate" => "string",
        "amount" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "isClosed" => "boolean",
        "amortizationSched" => "RecordRef",
        "isDropShipment" => "boolean",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return VendorReturnAuthorizationItem
     */
    public function setItem(RecordRef $item): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setVendorName(string $vendorName): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setLine(int $line): VendorReturnAuthorizationItem
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
     * @param int $orderLine
     * @return VendorReturnAuthorizationItem
     */
    public function setOrderLine(int $orderLine): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setQuantity(float $quantity): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setUnits(RecordRef $units): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): VendorReturnAuthorizationItem
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
     * @param RecordRefList $serialNumbersList
     * @return VendorReturnAuthorizationItem
     */
    public function setSerialNumbersList(RecordRefList $serialNumbersList): VendorReturnAuthorizationItem
    {
        $this->serialNumbersList = $serialNumbersList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSerialNumbersList(): RecordRefList
    {
        return $this->serialNumbersList;
    }

    /**
     * @param string $description
     * @return VendorReturnAuthorizationItem
     */
    public function setDescription(string $description): VendorReturnAuthorizationItem
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
     * @param string $binNumbers
     * @return VendorReturnAuthorizationItem
     */
    public function setBinNumbers(string $binNumbers): VendorReturnAuthorizationItem
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
     * @param string $rate
     * @return VendorReturnAuthorizationItem
     */
    public function setRate(string $rate): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setAmount(float $amount): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setTaxCode(RecordRef $taxCode): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setGrossAmt(float $grossAmt): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setOptions(CustomFieldList $options): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setDepartment(RecordRef $department): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setClass(RecordRef $class): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setLocation(RecordRef $location): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setCustomer(RecordRef $customer): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setIsBillable(bool $isBillable): VendorReturnAuthorizationItem
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
     * @param bool $isClosed
     * @return VendorReturnAuthorizationItem
     */
    public function setIsClosed(bool $isClosed): VendorReturnAuthorizationItem
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
     * @param RecordRef $amortizationSched
     * @return VendorReturnAuthorizationItem
     */
    public function setAmortizationSched(RecordRef $amortizationSched): VendorReturnAuthorizationItem
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
     * @param bool $isDropShipment
     * @return VendorReturnAuthorizationItem
     */
    public function setIsDropShipment(bool $isDropShipment): VendorReturnAuthorizationItem
    {
        $this->isDropShipment = $isDropShipment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDropShipment(): bool
    {
        return $this->isDropShipment;
    }

    /**
     * @param float $taxAmount
     * @return VendorReturnAuthorizationItem
     */
    public function setTaxAmount(float $taxAmount): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): VendorReturnAuthorizationItem
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
     * @param string $amortizStartDate
     * @return VendorReturnAuthorizationItem
     */
    public function setAmortizStartDate(string $amortizStartDate): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setAmortizationEndDate(string $amortizationEndDate): VendorReturnAuthorizationItem
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
     * @return VendorReturnAuthorizationItem
     */
    public function setAmortizationResidual(string $amortizationResidual): VendorReturnAuthorizationItem
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
     * @param CustomFieldList $customFieldList
     * @return VendorReturnAuthorizationItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorReturnAuthorizationItem
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
