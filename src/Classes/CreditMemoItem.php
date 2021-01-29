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

class CreditMemoItem {
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
    protected int $orderLine;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $binNumbers;

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
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipAddress;

    /**
     * @var ShippingCarrier
     */
    protected ShippingCarrier $shipCarrier;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    protected $tax1Amt;
    /**
     * @var float
     */
    protected float $grossAmt;

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
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

    /**
     * @var float
     */
    protected float $costEstimate;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

    /**
     * @var string
     */
    protected string $revRecStartDate;

    /**
     * @var int
     */
    protected int $revRecTermInMonths;

    /**
     * @var string
     */
    protected string $revRecEndDate;

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
     * @var bool
     */
    protected bool $deferRevRec;

    /**
     * @var string
     */
    protected string $giftCertFrom;

    /**
     * @var string
     */
    protected string $giftCertRecipientName;

    /**
     * @var string
     */
    protected string $giftCertRecipientEmail;

    /**
     * @var string
     */
    protected string $giftCertMessage;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var string
     */
    protected string $giftCertNumber;

    /**
     * @var VsoeSopGroup
     */
    protected VsoeSopGroup $vsoeSopGroup;

    /**
     * @var bool
     */
    protected bool $vsoeIsEstimate;

    /**
     * @var float
     */
    protected float $vsoePrice;

    /**
     * @var float
     */
    protected float $vsoeAmount;

    /**
     * @var float
     */
    protected float $vsoeAllocation;

    /**
     * @var VsoeDeferral
     */
    protected VsoeDeferral $vsoeDeferral;

    /**
     * @var VsoePermitDiscount
     */
    protected VsoePermitDiscount $vsoePermitDiscount;

    /**
     * @var bool
     */
    protected bool $vsoeDelivered;

    /**
     * @var RecordRef
     */
    protected RecordRef $catchUpPeriod;

    /**
     * @var RecordRef
     */
    protected RecordRef $chargeType;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscriptionLine;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $chargesList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "job" => "RecordRef",
        "item" => "RecordRef",
        "orderLine" => "integer",
        "line" => "integer",
        "quantity" => "float",
        "description" => "string",
        "binNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "shipAddress" => "RecordRef",
        "shipCarrier" => "ShippingCarrier",
        "shipMethod" => "RecordRef",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "tax1Amt" => "float",
        "grossAmt" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecTermInMonths" => "integer",
        "revRecEndDate" => "dateTime",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "deferRevRec" => "boolean",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "taxAmount" => "float",
        "giftCertNumber" => "string",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeIsEstimate" => "boolean",
        "vsoePrice" => "float",
        "vsoeAmount" => "float",
        "vsoeAllocation" => "float",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "catchUpPeriod" => "RecordRef",
        "chargeType" => "RecordRef",
        "subscriptionLine" => "RecordRef",
        "chargesList" => "RecordRefList",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $job
     * @return CreditMemoItem
     */
    public function setJob(RecordRef $job): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setItem(RecordRef $item): CreditMemoItem
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
     * @param int $orderLine
     * @return CreditMemoItem
     */
    public function setOrderLine(int $orderLine): CreditMemoItem
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
     * @param int $line
     * @return CreditMemoItem
     */
    public function setLine(int $line): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setQuantity(float $quantity): CreditMemoItem
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
     * @param string $description
     * @return CreditMemoItem
     */
    public function setDescription(string $description): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setBinNumbers(string $binNumbers): CreditMemoItem
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
     * @param RecordRef $price
     * @return CreditMemoItem
     */
    public function setPrice(RecordRef $price): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setRate(string $rate): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setAmount(float $amount): CreditMemoItem
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
     * @param bool $isTaxable
     * @return CreditMemoItem
     */
    public function setIsTaxable(bool $isTaxable): CreditMemoItem
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
     * @param CustomFieldList $options
     * @return CreditMemoItem
     */
    public function setOptions(CustomFieldList $options): CreditMemoItem
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
     * @param RecordRef $shipAddress
     * @return CreditMemoItem
     */
    public function setShipAddress(RecordRef $shipAddress): CreditMemoItem
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
     * @param ShippingCarrier $shipCarrier
     * @return CreditMemoItem
     */
    public function setShipCarrier(ShippingCarrier $shipCarrier): CreditMemoItem
    {
        $this->shipCarrier = $shipCarrier;
        return $this;
    }

    /**
     * @return ShippingCarrier
     */
    public function getShipCarrier(): ShippingCarrier
    {
        return $this->shipCarrier;
    }

    /**
     * @param RecordRef $shipMethod
     * @return CreditMemoItem
     */
    public function setShipMethod(RecordRef $shipMethod): CreditMemoItem
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
     * @param RecordRef $taxCode
     * @return CreditMemoItem
     */
    public function setTaxCode(RecordRef $taxCode): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setGrossAmt(float $grossAmt): CreditMemoItem
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
     * @param RecordRef $department
     * @return CreditMemoItem
     */
    public function setDepartment(RecordRef $department): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setClass(RecordRef $class): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setLocation(RecordRef $location): CreditMemoItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return CreditMemoItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setCostEstimate(float $costEstimate): CreditMemoItem
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
     * @param string $taxDetailsReference
     * @return CreditMemoItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CreditMemoItem
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
     * @param RecordRef $revRecSchedule
     * @return CreditMemoItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CreditMemoItem
    {
        $this->revRecSchedule = $revRecSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule(): RecordRef
    {
        return $this->revRecSchedule;
    }

    /**
     * @param string $revRecStartDate
     * @return CreditMemoItem
     */
    public function setRevRecStartDate(string $revRecStartDate): CreditMemoItem
    {
        $this->revRecStartDate = $revRecStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevRecStartDate(): string
    {
        return $this->revRecStartDate;
    }

    /**
     * @param int $revRecTermInMonths
     * @return CreditMemoItem
     */
    public function setRevRecTermInMonths(int $revRecTermInMonths): CreditMemoItem
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
     * @param string $revRecEndDate
     * @return CreditMemoItem
     */
    public function setRevRecEndDate(string $revRecEndDate): CreditMemoItem
    {
        $this->revRecEndDate = $revRecEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevRecEndDate(): string
    {
        return $this->revRecEndDate;
    }

    /**
     * @param RecordRef $units
     * @return CreditMemoItem
     */
    public function setUnits(RecordRef $units): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): CreditMemoItem
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
     * @return CreditMemoItem
     */
    public function setSerialNumbers(string $serialNumbers): CreditMemoItem
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
     * @param bool $deferRevRec
     * @return CreditMemoItem
     */
    public function setDeferRevRec(bool $deferRevRec): CreditMemoItem
    {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDeferRevRec(): bool
    {
        return $this->deferRevRec;
    }

    /**
     * @param string $giftCertFrom
     * @return CreditMemoItem
     */
    public function setGiftCertFrom(string $giftCertFrom): CreditMemoItem
    {
        $this->giftCertFrom = $giftCertFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertFrom(): string
    {
        return $this->giftCertFrom;
    }

    /**
     * @param string $giftCertRecipientName
     * @return CreditMemoItem
     */
    public function setGiftCertRecipientName(string $giftCertRecipientName): CreditMemoItem
    {
        $this->giftCertRecipientName = $giftCertRecipientName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertRecipientName(): string
    {
        return $this->giftCertRecipientName;
    }

    /**
     * @param string $giftCertRecipientEmail
     * @return CreditMemoItem
     */
    public function setGiftCertRecipientEmail(string $giftCertRecipientEmail): CreditMemoItem
    {
        $this->giftCertRecipientEmail = $giftCertRecipientEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertRecipientEmail(): string
    {
        return $this->giftCertRecipientEmail;
    }

    /**
     * @param string $giftCertMessage
     * @return CreditMemoItem
     */
    public function setGiftCertMessage(string $giftCertMessage): CreditMemoItem
    {
        $this->giftCertMessage = $giftCertMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertMessage(): string
    {
        return $this->giftCertMessage;
    }

    /**
     * @param float $taxAmount
     * @return CreditMemoItem
     */
    public function setTaxAmount(float $taxAmount): CreditMemoItem
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
     * @param string $giftCertNumber
     * @return CreditMemoItem
     */
    public function setGiftCertNumber(string $giftCertNumber): CreditMemoItem
    {
        $this->giftCertNumber = $giftCertNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertNumber(): string
    {
        return $this->giftCertNumber;
    }

    /**
     * @param VsoeSopGroup $vsoeSopGroup
     * @return CreditMemoItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): CreditMemoItem
    {
        $this->vsoeSopGroup = $vsoeSopGroup;
        return $this;
    }

    /**
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup(): VsoeSopGroup
    {
        return $this->vsoeSopGroup;
    }

    /**
     * @param bool $vsoeIsEstimate
     * @return CreditMemoItem
     */
    public function setVsoeIsEstimate(bool $vsoeIsEstimate): CreditMemoItem
    {
        $this->vsoeIsEstimate = $vsoeIsEstimate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVsoeIsEstimate(): bool
    {
        return $this->vsoeIsEstimate;
    }

    /**
     * @param float $vsoePrice
     * @return CreditMemoItem
     */
    public function setVsoePrice(float $vsoePrice): CreditMemoItem
    {
        $this->vsoePrice = $vsoePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getVsoePrice(): float
    {
        return $this->vsoePrice;
    }

    /**
     * @param float $vsoeAmount
     * @return CreditMemoItem
     */
    public function setVsoeAmount(float $vsoeAmount): CreditMemoItem
    {
        $this->vsoeAmount = $vsoeAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getVsoeAmount(): float
    {
        return $this->vsoeAmount;
    }

    /**
     * @param float $vsoeAllocation
     * @return CreditMemoItem
     */
    public function setVsoeAllocation(float $vsoeAllocation): CreditMemoItem
    {
        $this->vsoeAllocation = $vsoeAllocation;
        return $this;
    }

    /**
     * @return float
     */
    public function getVsoeAllocation(): float
    {
        return $this->vsoeAllocation;
    }

    /**
     * @param VsoeDeferral $vsoeDeferral
     * @return CreditMemoItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): CreditMemoItem
    {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * @return VsoeDeferral
     */
    public function getVsoeDeferral(): VsoeDeferral
    {
        return $this->vsoeDeferral;
    }

    /**
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return CreditMemoItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): CreditMemoItem
    {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount(): VsoePermitDiscount
    {
        return $this->vsoePermitDiscount;
    }

    /**
     * @param bool $vsoeDelivered
     * @return CreditMemoItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): CreditMemoItem
    {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVsoeDelivered(): bool
    {
        return $this->vsoeDelivered;
    }

    /**
     * @param RecordRef $catchUpPeriod
     * @return CreditMemoItem
     */
    public function setCatchUpPeriod(RecordRef $catchUpPeriod): CreditMemoItem
    {
        $this->catchUpPeriod = $catchUpPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCatchUpPeriod(): RecordRef
    {
        return $this->catchUpPeriod;
    }

    /**
     * @param RecordRef $chargeType
     * @return CreditMemoItem
     */
    public function setChargeType(RecordRef $chargeType): CreditMemoItem
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
     * @param RecordRef $subscriptionLine
     * @return CreditMemoItem
     */
    public function setSubscriptionLine(RecordRef $subscriptionLine): CreditMemoItem
    {
        $this->subscriptionLine = $subscriptionLine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscriptionLine(): RecordRef
    {
        return $this->subscriptionLine;
    }

    /**
     * @param RecordRefList $chargesList
     * @return CreditMemoItem
     */
    public function setChargesList(RecordRefList $chargesList): CreditMemoItem
    {
        $this->chargesList = $chargesList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getChargesList(): RecordRefList
    {
        return $this->chargesList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return CreditMemoItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CreditMemoItem
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
