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

class CustomSaleItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var string
     */
    protected string $description;

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
     * @var bool
     */
    protected bool $deferRevRec;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var float
     */
    protected float $currentPercent;

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
    protected float $percentComplete;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var float
     */
    protected float $quantityRemaining;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var string
     */
    protected string $licenseCode;

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
     * @var float
     */
    protected float $grossAmt;

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
     * @var bool
     */
    protected bool $excludeFromRateRequest;

    /**
     * @var RecordRef
     */
    protected RecordRef $catchUpPeriod;

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
     * @var RecordRef
     */
    protected RecordRef $shipAddress;

    /**
     * @var Address
     */
    protected Address $shippingAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var int
     */
    protected int $shipGroup;

    /**
     * @var string
     */
    protected string $itemIsFulfilled;

    /**
     * @var string
     */
    protected string $giftCertNumber;

    /**
     * @var float
     */
    protected float $taxAmount;

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
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "line" => "integer",
        "description" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "deferRevRec" => "boolean",
        "quantity" => "float",
        "currentPercent" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "percentComplete" => "float",
        "quantityOnHand" => "float",
        "quantityAvailable" => "float",
        "quantityRemaining" => "float",
        "department" => "RecordRef",
        "licenseCode" => "string",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecTermInMonths" => "integer",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "excludeFromRateRequest" => "boolean",
        "catchUpPeriod" => "RecordRef",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "shipAddress" => "RecordRef",
        "shippingAddress" => "Address",
        "shipMethod" => "RecordRef",
        "shipGroup" => "integer",
        "itemIsFulfilled" => "string",
        "giftCertNumber" => "string",
        "taxAmount" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeIsEstimate" => "boolean",
        "vsoePrice" => "float",
        "vsoeAmount" => "float",
        "vsoeAllocation" => "float",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return CustomSaleItem
     */
    public function setItem(RecordRef $item): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setLine(int $line): CustomSaleItem
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
     * @param string $description
     * @return CustomSaleItem
     */
    public function setDescription(string $description): CustomSaleItem
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
     * @param float $amount
     * @return CustomSaleItem
     */
    public function setAmount(float $amount): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setIsTaxable(bool $isTaxable): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setOptions(CustomFieldList $options): CustomSaleItem
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
     * @param bool $deferRevRec
     * @return CustomSaleItem
     */
    public function setDeferRevRec(bool $deferRevRec): CustomSaleItem
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
     * @param float $quantity
     * @return CustomSaleItem
     */
    public function setQuantity(float $quantity): CustomSaleItem
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
     * @param float $currentPercent
     * @return CustomSaleItem
     */
    public function setCurrentPercent(float $currentPercent): CustomSaleItem
    {
        $this->currentPercent = $currentPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentPercent(): float
    {
        return $this->currentPercent;
    }

    /**
     * @param RecordRef $units
     * @return CustomSaleItem
     */
    public function setUnits(RecordRef $units): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setSerialNumbers(string $serialNumbers): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setBinNumbers(string $binNumbers): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setPrice(RecordRef $price): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setRate(string $rate): CustomSaleItem
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
     * @param float $percentComplete
     * @return CustomSaleItem
     */
    public function setPercentComplete(float $percentComplete): CustomSaleItem
    {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete(): float
    {
        return $this->percentComplete;
    }

    /**
     * @param float $quantityOnHand
     * @return CustomSaleItem
     */
    public function setQuantityOnHand(float $quantityOnHand): CustomSaleItem
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
     * @param float $quantityAvailable
     * @return CustomSaleItem
     */
    public function setQuantityAvailable(float $quantityAvailable): CustomSaleItem
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
     * @param float $quantityRemaining
     * @return CustomSaleItem
     */
    public function setQuantityRemaining(float $quantityRemaining): CustomSaleItem
    {
        $this->quantityRemaining = $quantityRemaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityRemaining(): float
    {
        return $this->quantityRemaining;
    }

    /**
     * @param RecordRef $department
     * @return CustomSaleItem
     */
    public function setDepartment(RecordRef $department): CustomSaleItem
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
     * @param string $licenseCode
     * @return CustomSaleItem
     */
    public function setLicenseCode(string $licenseCode): CustomSaleItem
    {
        $this->licenseCode = $licenseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseCode(): string
    {
        return $this->licenseCode;
    }

    /**
     * @param RecordRef $class
     * @return CustomSaleItem
     */
    public function setClass(RecordRef $class): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setLocation(RecordRef $location): CustomSaleItem
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
     * @param RecordRef $revRecSchedule
     * @return CustomSaleItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setRevRecStartDate(string $revRecStartDate): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setRevRecTermInMonths(int $revRecTermInMonths): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setRevRecEndDate(string $revRecEndDate): CustomSaleItem
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
     * @param float $grossAmt
     * @return CustomSaleItem
     */
    public function setGrossAmt(float $grossAmt): CustomSaleItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return CustomSaleItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setCostEstimate(float $costEstimate): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CustomSaleItem
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
     * @param bool $excludeFromRateRequest
     * @return CustomSaleItem
     */
    public function setExcludeFromRateRequest(bool $excludeFromRateRequest): CustomSaleItem
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
     * @param RecordRef $catchUpPeriod
     * @return CustomSaleItem
     */
    public function setCatchUpPeriod(RecordRef $catchUpPeriod): CustomSaleItem
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
     * @param string $giftCertFrom
     * @return CustomSaleItem
     */
    public function setGiftCertFrom(string $giftCertFrom): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setGiftCertRecipientName(string $giftCertRecipientName): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setGiftCertRecipientEmail(string $giftCertRecipientEmail): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setGiftCertMessage(string $giftCertMessage): CustomSaleItem
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
     * @param RecordRef $shipAddress
     * @return CustomSaleItem
     */
    public function setShipAddress(RecordRef $shipAddress): CustomSaleItem
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
     * @param Address $shippingAddress
     * @return CustomSaleItem
     */
    public function setShippingAddress(Address $shippingAddress): CustomSaleItem
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param RecordRef $shipMethod
     * @return CustomSaleItem
     */
    public function setShipMethod(RecordRef $shipMethod): CustomSaleItem
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
     * @param int $shipGroup
     * @return CustomSaleItem
     */
    public function setShipGroup(int $shipGroup): CustomSaleItem
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
     * @param string $itemIsFulfilled
     * @return CustomSaleItem
     */
    public function setItemIsFulfilled(string $itemIsFulfilled): CustomSaleItem
    {
        $this->itemIsFulfilled = $itemIsFulfilled;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemIsFulfilled(): string
    {
        return $this->itemIsFulfilled;
    }

    /**
     * @param string $giftCertNumber
     * @return CustomSaleItem
     */
    public function setGiftCertNumber(string $giftCertNumber): CustomSaleItem
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
     * @param float $taxAmount
     * @return CustomSaleItem
     */
    public function setTaxAmount(float $taxAmount): CustomSaleItem
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
     * @param VsoeSopGroup $vsoeSopGroup
     * @return CustomSaleItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setVsoeIsEstimate(bool $vsoeIsEstimate): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setVsoePrice(float $vsoePrice): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setVsoeAmount(float $vsoeAmount): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setVsoeAllocation(float $vsoeAllocation): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): CustomSaleItem
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
     * @return CustomSaleItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): CustomSaleItem
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
     * @param CustomFieldList $customFieldList
     * @return CustomSaleItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomSaleItem
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
