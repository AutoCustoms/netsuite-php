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

class CashSaleItem {
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
    protected float $quantityFulfilled;

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
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $binNumbers;

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
     * @var int
     */
    protected int $orderLine;

    /**
     * @var string
     */
    protected string $licenseCode;

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
    protected float $currentPercent;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var float
     */
    protected float $percentComplete;

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
     * @var string
     */
    protected string $revRecEndDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscriptionLine;

    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

    /**
     * @var bool
     */
    protected bool $excludeFromRateRequest;

    /**
     * @var RecordRef
     */
    protected RecordRef $catchUpPeriod;

    /**
     * @var float
     */
    protected float $costEstimate;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var float
     */
    protected float $amountOrdered;

    protected $tax1Amt;
    /**
     * @var float
     */
    protected float $quantityOrdered;

    /**
     * @var float
     */
    protected float $quantityRemaining;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
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
    protected RecordRef $chargeType;

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
        "line" => "integer",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "quantityFulfilled" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "description" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "orderLine" => "integer",
        "licenseCode" => "string",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "deferRevRec" => "boolean",
        "currentPercent" => "float",
        "department" => "RecordRef",
        "percentComplete" => "float",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "subscriptionLine" => "RecordRef",
        "grossAmt" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "excludeFromRateRequest" => "boolean",
        "catchUpPeriod" => "RecordRef",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "amountOrdered" => "float",
        "tax1Amt" => "float",
        "quantityOrdered" => "float",
        "quantityRemaining" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "taxAmount" => "float",
        "giftCertNumber" => "string",
        "shipGroup" => "integer",
        "itemIsFulfilled" => "boolean",
        "shipAddress" => "RecordRef",
        "shipMethod" => "RecordRef",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeIsEstimate" => "boolean",
        "vsoePrice" => "float",
        "vsoeAmount" => "float",
        "vsoeAllocation" => "float",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "chargeType" => "RecordRef",
        "chargesList" => "RecordRefList",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $job
     * @return CashSaleItem
     */
    public function setJob(RecordRef $job): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setItem(RecordRef $item): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setLine(int $line): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setQuantityAvailable(float $quantityAvailable): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setQuantityOnHand(float $quantityOnHand): CashSaleItem
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
     * @param float $quantityFulfilled
     * @return CashSaleItem
     */
    public function setQuantityFulfilled(float $quantityFulfilled): CashSaleItem
    {
        $this->quantityFulfilled = $quantityFulfilled;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityFulfilled(): float
    {
        return $this->quantityFulfilled;
    }

    /**
     * @param float $quantity
     * @return CashSaleItem
     */
    public function setQuantity(float $quantity): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setUnits(RecordRef $units): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setSerialNumbers(string $serialNumbers): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setBinNumbers(string $binNumbers): CashSaleItem
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
     * @param string $description
     * @return CashSaleItem
     */
    public function setDescription(string $description): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setPrice(RecordRef $price): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setRate(string $rate): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setAmount(float $amount): CashSaleItem
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
     * @param int $orderLine
     * @return CashSaleItem
     */
    public function setOrderLine(int $orderLine): CashSaleItem
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
     * @param string $licenseCode
     * @return CashSaleItem
     */
    public function setLicenseCode(string $licenseCode): CashSaleItem
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
     * @param bool $isTaxable
     * @return CashSaleItem
     */
    public function setIsTaxable(bool $isTaxable): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setOptions(CustomFieldList $options): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setDeferRevRec(bool $deferRevRec): CashSaleItem
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
     * @param float $currentPercent
     * @return CashSaleItem
     */
    public function setCurrentPercent(float $currentPercent): CashSaleItem
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
     * @param RecordRef $department
     * @return CashSaleItem
     */
    public function setDepartment(RecordRef $department): CashSaleItem
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
     * @param float $percentComplete
     * @return CashSaleItem
     */
    public function setPercentComplete(float $percentComplete): CashSaleItem
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
     * @param RecordRef $class
     * @return CashSaleItem
     */
    public function setClass(RecordRef $class): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setLocation(RecordRef $location): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setRevRecStartDate(string $revRecStartDate): CashSaleItem
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
     * @param string $revRecEndDate
     * @return CashSaleItem
     */
    public function setRevRecEndDate(string $revRecEndDate): CashSaleItem
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
     * @param RecordRef $subscriptionLine
     * @return CashSaleItem
     */
    public function setSubscriptionLine(RecordRef $subscriptionLine): CashSaleItem
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
     * @param float $grossAmt
     * @return CashSaleItem
     */
    public function setGrossAmt(float $grossAmt): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): CashSaleItem
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
     * @param bool $excludeFromRateRequest
     * @return CashSaleItem
     */
    public function setExcludeFromRateRequest(bool $excludeFromRateRequest): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setCatchUpPeriod(RecordRef $catchUpPeriod): CashSaleItem
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
     * @param float $costEstimate
     * @return CashSaleItem
     */
    public function setCostEstimate(float $costEstimate): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): CashSaleItem
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
     * @param float $amountOrdered
     * @return CashSaleItem
     */
    public function setAmountOrdered(float $amountOrdered): CashSaleItem
    {
        $this->amountOrdered = $amountOrdered;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountOrdered(): float
    {
        return $this->amountOrdered;
    }

    /**
     * @param float $quantityOrdered
     * @return CashSaleItem
     */
    public function setQuantityOrdered(float $quantityOrdered): CashSaleItem
    {
        $this->quantityOrdered = $quantityOrdered;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOrdered(): float
    {
        return $this->quantityOrdered;
    }

    /**
     * @param float $quantityRemaining
     * @return CashSaleItem
     */
    public function setQuantityRemaining(float $quantityRemaining): CashSaleItem
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
     * @param RecordRef $taxCode
     * @return CashSaleItem
     */
    public function setTaxCode(RecordRef $taxCode): CashSaleItem
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
     * @param string $giftCertFrom
     * @return CashSaleItem
     */
    public function setGiftCertFrom(string $giftCertFrom): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setGiftCertRecipientName(string $giftCertRecipientName): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setGiftCertRecipientEmail(string $giftCertRecipientEmail): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setGiftCertMessage(string $giftCertMessage): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setTaxAmount(float $taxAmount): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setGiftCertNumber(string $giftCertNumber): CashSaleItem
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
     * @param int $shipGroup
     * @return CashSaleItem
     */
    public function setShipGroup(int $shipGroup): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setItemIsFulfilled(bool $itemIsFulfilled): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setShipAddress(RecordRef $shipAddress): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setShipMethod(RecordRef $shipMethod): CashSaleItem
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
     * @param VsoeSopGroup $vsoeSopGroup
     * @return CashSaleItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setVsoeIsEstimate(bool $vsoeIsEstimate): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setVsoePrice(float $vsoePrice): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setVsoeAmount(float $vsoeAmount): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setVsoeAllocation(float $vsoeAllocation): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): CashSaleItem
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
     * @param RecordRef $chargeType
     * @return CashSaleItem
     */
    public function setChargeType(RecordRef $chargeType): CashSaleItem
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
     * @param RecordRefList $chargesList
     * @return CashSaleItem
     */
    public function setChargesList(RecordRefList $chargesList): CashSaleItem
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
     * @return CashSaleItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CashSaleItem
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
