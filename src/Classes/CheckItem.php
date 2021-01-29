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

class CheckItem {
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
    protected string $binNumbers;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    protected $taxRate1;
    protected $taxRate2;
    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    protected $tax1Amt;
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
        "binNumbers" => "string",
        "serialNumbers" => "string",
        "expirationDate" => "dateTime",
        "rate" => "string",
        "taxCode" => "RecordRef",
        "amount" => "float",
        "options" => "CustomFieldList",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "department" => "RecordRef",
        "grossAmt" => "float",
        "class" => "RecordRef",
        "tax1Amt" => "float",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "landedCost" => "LandedCost",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return CheckItem
     */
    public function setItem(RecordRef $item): CheckItem
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
     * @return CheckItem
     */
    public function setVendorName(string $vendorName): CheckItem
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
     * @return CheckItem
     */
    public function setLine(int $line): CheckItem
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
     * @return CheckItem
     */
    public function setQuantity(float $quantity): CheckItem
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
     * @return CheckItem
     */
    public function setUnits(RecordRef $units): CheckItem
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
     * @return CheckItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): CheckItem
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
     * @return CheckItem
     */
    public function setDescription(string $description): CheckItem
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
     * @return CheckItem
     */
    public function setBinNumbers(string $binNumbers): CheckItem
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
     * @param string $serialNumbers
     * @return CheckItem
     */
    public function setSerialNumbers(string $serialNumbers): CheckItem
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
     * @param string $expirationDate
     * @return CheckItem
     */
    public function setExpirationDate(string $expirationDate): CheckItem
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
     * @param string $rate
     * @return CheckItem
     */
    public function setRate(string $rate): CheckItem
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
     * @param RecordRef $taxCode
     * @return CheckItem
     */
    public function setTaxCode(RecordRef $taxCode): CheckItem
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
     * @param float $amount
     * @return CheckItem
     */
    public function setAmount(float $amount): CheckItem
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
     * @return CheckItem
     */
    public function setOptions(CustomFieldList $options): CheckItem
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
     * @return CheckItem
     */
    public function setDepartment(RecordRef $department): CheckItem
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
     * @param float $grossAmt
     * @return CheckItem
     */
    public function setGrossAmt(float $grossAmt): CheckItem
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
     * @param RecordRef $class
     * @return CheckItem
     */
    public function setClass(RecordRef $class): CheckItem
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
     * @return CheckItem
     */
    public function setLocation(RecordRef $location): CheckItem
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
     * @return CheckItem
     */
    public function setCustomer(RecordRef $customer): CheckItem
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
     * @return CheckItem
     */
    public function setIsBillable(bool $isBillable): CheckItem
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
     * @param LandedCost $landedCost
     * @return CheckItem
     */
    public function setLandedCost(LandedCost $landedCost): CheckItem
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
     * @return CheckItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CheckItem
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
