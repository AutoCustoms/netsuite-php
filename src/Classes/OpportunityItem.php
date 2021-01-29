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

class OpportunityItem {
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
     * @var float
     */
    protected float $altSalesAmt;

    /**
     * @var int
     */
    protected int $revRecTermInMonths;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var bool
     */
    protected bool $fromJob;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var bool
     */
    protected bool $isEstimate;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

    /**
     * @var float
     */
    protected float $costEstimate;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var float
     */
    protected float $grossAmt;

    protected $tax1Amt;
    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    /**
     * @var string
     */
    protected string $expectedShipDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscription;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "line" => "integer",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "description" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "altSalesAmt" => "float",
        "revRecTermInMonths" => "integer",
        "options" => "CustomFieldList",
        "fromJob" => "boolean",
        "department" => "RecordRef",
        "isEstimate" => "boolean",
        "location" => "RecordRef",
        "class" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "expectedShipDate" => "dateTime",
        "subscription" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $job
     * @return OpportunityItem
     */
    public function setJob(RecordRef $job): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setItem(RecordRef $item): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setLine(int $line): OpportunityItem
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
     * @param float $quantityAvailable
     * @return OpportunityItem
     */
    public function setQuantityAvailable(float $quantityAvailable): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setQuantityOnHand(float $quantityOnHand): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setQuantity(float $quantity): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setUnits(RecordRef $units): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setDescription(string $description): OpportunityItem
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
     * @param RecordRef $price
     * @return OpportunityItem
     */
    public function setPrice(RecordRef $price): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setRate(string $rate): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setAmount(float $amount): OpportunityItem
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
     * @param float $altSalesAmt
     * @return OpportunityItem
     */
    public function setAltSalesAmt(float $altSalesAmt): OpportunityItem
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
     * @param int $revRecTermInMonths
     * @return OpportunityItem
     */
    public function setRevRecTermInMonths(int $revRecTermInMonths): OpportunityItem
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
     * @param CustomFieldList $options
     * @return OpportunityItem
     */
    public function setOptions(CustomFieldList $options): OpportunityItem
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
     * @param bool $fromJob
     * @return OpportunityItem
     */
    public function setFromJob(bool $fromJob): OpportunityItem
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
     * @param RecordRef $department
     * @return OpportunityItem
     */
    public function setDepartment(RecordRef $department): OpportunityItem
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
     * @param bool $isEstimate
     * @return OpportunityItem
     */
    public function setIsEstimate(bool $isEstimate): OpportunityItem
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
     * @param RecordRef $location
     * @return OpportunityItem
     */
    public function setLocation(RecordRef $location): OpportunityItem
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
     * @param RecordRef $class
     * @return OpportunityItem
     */
    public function setClass(RecordRef $class): OpportunityItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return OpportunityItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setCostEstimate(float $costEstimate): OpportunityItem
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
     * @param float $taxAmount
     * @return OpportunityItem
     */
    public function setTaxAmount(float $taxAmount): OpportunityItem
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
     * @return OpportunityItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): OpportunityItem
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
     * @param float $grossAmt
     * @return OpportunityItem
     */
    public function setGrossAmt(float $grossAmt): OpportunityItem
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
     * @param RecordRef $taxCode
     * @return OpportunityItem
     */
    public function setTaxCode(RecordRef $taxCode): OpportunityItem
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
     * @param string $expectedShipDate
     * @return OpportunityItem
     */
    public function setExpectedShipDate(string $expectedShipDate): OpportunityItem
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
     * @param RecordRef $subscription
     * @return OpportunityItem
     */
    public function setSubscription(RecordRef $subscription): OpportunityItem
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
     * @param CustomFieldList $customFieldList
     * @return OpportunityItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): OpportunityItem
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
