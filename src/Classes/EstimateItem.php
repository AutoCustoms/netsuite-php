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

class EstimateItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var bool
     */
    protected bool $expandItemGroup;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var float
     */
    protected float $quantityOnHand;

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
    protected string $description;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var RecordRef
     */
    protected RecordRef $price;

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
     * @var int
     */
    protected int $revRecTermInMonths;

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
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var float
     */
    protected float $altSalesAmt;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var bool
     */
    protected bool $fromJob;

    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var bool
     */
    protected bool $isEstimate;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscription;

    protected $tax1Amt;
    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    /**
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

    /**
     * @var float
     */
    protected float $costEstimate;

    /**
     * @var bool
     */
    protected bool $excludeFromRateRequest;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    protected $taxRate1;
    protected $taxRate2;
    /**
     * @var int
     */
    protected int $shipGroup;

    /**
     * @var bool
     */
    protected bool $itemIsFulfilled;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var string
     */
    protected string $expectedShipDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $chargeType;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "line" => "integer",
        "expandItemGroup" => "boolean",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "description" => "string",
        "serialNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "revRecTermInMonths" => "integer",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "isTaxable" => "boolean",
        "altSalesAmt" => "float",
        "taxAmount" => "float",
        "fromJob" => "boolean",
        "grossAmt" => "float",
        "isEstimate" => "boolean",
        "subscription" => "RecordRef",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "excludeFromRateRequest" => "boolean",
        "taxDetailsReference" => "string",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "shipGroup" => "integer",
        "itemIsFulfilled" => "boolean",
        "shipAddress" => "RecordRef",
        "shipMethod" => "RecordRef",
        "expectedShipDate" => "dateTime",
        "chargeType" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $job
     * @return EstimateItem
     */
    public function setJob(RecordRef $job): EstimateItem
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJob(): RecordRef
    {
        return $this->job;
    }

    /**
     * @param RecordRef $item
     * @return EstimateItem
     */
    public function setItem(RecordRef $item): EstimateItem
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
     * @return EstimateItem
     */
    public function setLine(int $line): EstimateItem
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
     * @param bool $expandItemGroup
     * @return EstimateItem
     */
    public function setExpandItemGroup(bool $expandItemGroup): EstimateItem
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

    /**
     * @param float $quantityAvailable
     * @return EstimateItem
     */
    public function setQuantityAvailable(float $quantityAvailable): EstimateItem
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
     * @return EstimateItem
     */
    public function setQuantityOnHand(float $quantityOnHand): EstimateItem
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
     * @param float $quantity
     * @return EstimateItem
     */
    public function setQuantity(float $quantity): EstimateItem
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
     * @return EstimateItem
     */
    public function setUnits(RecordRef $units): EstimateItem
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
     * @param string $description
     * @return EstimateItem
     */
    public function setDescription(string $description): EstimateItem
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
     * @return EstimateItem
     */
    public function setSerialNumbers(string $serialNumbers): EstimateItem
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
     * @param RecordRef $price
     * @return EstimateItem
     */
    public function setPrice(RecordRef $price): EstimateItem
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrice(): RecordRef
    {
        return $this->price;
    }

    /**
     * @param string $rate
     * @return EstimateItem
     */
    public function setRate(string $rate): EstimateItem
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
     * @return EstimateItem
     */
    public function setAmount(float $amount): EstimateItem
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
     * @return EstimateItem
     */
    public function setOptions(CustomFieldList $options): EstimateItem
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
     * @param int $revRecTermInMonths
     * @return EstimateItem
     */
    public function setRevRecTermInMonths(int $revRecTermInMonths): EstimateItem
    {
        $this->revRecTermInMonths = $revRecTermInMonths;
        return $this;
    }

    /**
     * @return int
     */
    public function getRevRecTermInMonths(): int
    {
        return $this->revRecTermInMonths;
    }

    /**
     * @param RecordRef $department
     * @return EstimateItem
     */
    public function setDepartment(RecordRef $department): EstimateItem
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
     * @return EstimateItem
     */
    public function setClass(RecordRef $class): EstimateItem
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
     * @return EstimateItem
     */
    public function setLocation(RecordRef $location): EstimateItem
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
     * @param bool $isTaxable
     * @return EstimateItem
     */
    public function setIsTaxable(bool $isTaxable): EstimateItem
    {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTaxable(): bool
    {
        return $this->isTaxable;
    }

    /**
     * @param float $altSalesAmt
     * @return EstimateItem
     */
    public function setAltSalesAmt(float $altSalesAmt): EstimateItem
    {
        $this->altSalesAmt = $altSalesAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltSalesAmt(): float
    {
        return $this->altSalesAmt;
    }

    /**
     * @param float $taxAmount
     * @return EstimateItem
     */
    public function setTaxAmount(float $taxAmount): EstimateItem
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
     * @param bool $fromJob
     * @return EstimateItem
     */
    public function setFromJob(bool $fromJob): EstimateItem
    {
        $this->fromJob = $fromJob;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFromJob(): bool
    {
        return $this->fromJob;
    }

    /**
     * @param float $grossAmt
     * @return EstimateItem
     */
    public function setGrossAmt(float $grossAmt): EstimateItem
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
     * @param bool $isEstimate
     * @return EstimateItem
     */
    public function setIsEstimate(bool $isEstimate): EstimateItem
    {
        $this->isEstimate = $isEstimate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEstimate(): bool
    {
        return $this->isEstimate;
    }

    /**
     * @param RecordRef $subscription
     * @return EstimateItem
     */
    public function setSubscription(RecordRef $subscription): EstimateItem
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscription(): RecordRef
    {
        return $this->subscription;
    }

    /**
     * @param RecordRef $taxCode
     * @return EstimateItem
     */
    public function setTaxCode(RecordRef $taxCode): EstimateItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return EstimateItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): EstimateItem
    {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType(): ItemCostEstimateType
    {
        return $this->costEstimateType;
    }

    /**
     * @param float $costEstimate
     * @return EstimateItem
     */
    public function setCostEstimate(float $costEstimate): EstimateItem
    {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCostEstimate(): float
    {
        return $this->costEstimate;
    }

    /**
     * @param bool $excludeFromRateRequest
     * @return EstimateItem
     */
    public function setExcludeFromRateRequest(bool $excludeFromRateRequest): EstimateItem
    {
        $this->excludeFromRateRequest = $excludeFromRateRequest;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExcludeFromRateRequest(): bool
    {
        return $this->excludeFromRateRequest;
    }

    /**
     * @param string $taxDetailsReference
     * @return EstimateItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): EstimateItem
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
     * @param int $shipGroup
     * @return EstimateItem
     */
    public function setShipGroup(int $shipGroup): EstimateItem
    {
        $this->shipGroup = $shipGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipGroup(): int
    {
        return $this->shipGroup;
    }

    /**
     * @param bool $itemIsFulfilled
     * @return EstimateItem
     */
    public function setItemIsFulfilled(bool $itemIsFulfilled): EstimateItem
    {
        $this->itemIsFulfilled = $itemIsFulfilled;
        return $this;
    }

    /**
     * @return bool
     */
    public function getItemIsFulfilled(): bool
    {
        return $this->itemIsFulfilled;
    }

    /**
     * @param RecordRef $shipAddress
     * @return EstimateItem
     */
    public function setShipAddress(RecordRef $shipAddress): EstimateItem
    {
        $this->shipAddress = $shipAddress;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddress(): RecordRef
    {
        return $this->shipAddress;
    }

    /**
     * @param RecordRef $shipMethod
     * @return EstimateItem
     */
    public function setShipMethod(RecordRef $shipMethod): EstimateItem
    {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod(): RecordRef
    {
        return $this->shipMethod;
    }

    /**
     * @param string $expectedShipDate
     * @return EstimateItem
     */
    public function setExpectedShipDate(string $expectedShipDate): EstimateItem
    {
        $this->expectedShipDate = $expectedShipDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedShipDate(): string
    {
        return $this->expectedShipDate;
    }

    /**
     * @param RecordRef $chargeType
     * @return EstimateItem
     */
    public function setChargeType(RecordRef $chargeType): EstimateItem
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChargeType(): RecordRef
    {
        return $this->chargeType;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return EstimateItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): EstimateItem
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
