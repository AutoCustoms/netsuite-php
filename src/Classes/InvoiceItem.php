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

class InvoiceItem {
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
     * @var RecordRef
     */
    protected RecordRef $subscriptionLine;

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
    protected float $quantityOrdered;

    /**
     * @var float
     */
    protected float $quantityRemaining;

    /**
     * @var float
     */
    protected float $quantityFulfilled;

    /**
     * @var float
     */
    protected float $amountOrdered;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var int
     */
    protected int $orderLine;

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
        "description" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "options" => "CustomFieldList",
        "subscriptionLine" => "RecordRef",
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
        "quantityOrdered" => "float",
        "quantityRemaining" => "float",
        "quantityFulfilled" => "float",
        "amountOrdered" => "float",
        "department" => "RecordRef",
        "orderLine" => "integer",
        "licenseCode" => "string",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "excludeFromRateRequest" => "boolean",
        "catchUpPeriod" => "RecordRef",
        "tax1Amt" => "float",
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
     * @return InvoiceItem
     */
    public function setJob(RecordRef $job): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setItem(RecordRef $item): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setLine(int $line): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setDescription(string $description): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setAmount(float $amount): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setIsTaxable(bool $isTaxable): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setOptions(CustomFieldList $options): InvoiceItem
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
     * @param RecordRef $subscriptionLine
     * @return InvoiceItem
     */
    public function setSubscriptionLine(RecordRef $subscriptionLine): InvoiceItem
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
     * @param bool $deferRevRec
     * @return InvoiceItem
     */
    public function setDeferRevRec(bool $deferRevRec): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setQuantity(float $quantity): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setCurrentPercent(float $currentPercent): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setUnits(RecordRef $units): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setSerialNumbers(string $serialNumbers): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setBinNumbers(string $binNumbers): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setPrice(RecordRef $price): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setRate(string $rate): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setPercentComplete(float $percentComplete): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setQuantityOnHand(float $quantityOnHand): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setQuantityAvailable(float $quantityAvailable): InvoiceItem
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
     * @param float $quantityOrdered
     * @return InvoiceItem
     */
    public function setQuantityOrdered(float $quantityOrdered): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setQuantityRemaining(float $quantityRemaining): InvoiceItem
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
     * @param float $quantityFulfilled
     * @return InvoiceItem
     */
    public function setQuantityFulfilled(float $quantityFulfilled): InvoiceItem
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
     * @param float $amountOrdered
     * @return InvoiceItem
     */
    public function setAmountOrdered(float $amountOrdered): InvoiceItem
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
     * @param RecordRef $department
     * @return InvoiceItem
     */
    public function setDepartment(RecordRef $department): InvoiceItem
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
     * @param int $orderLine
     * @return InvoiceItem
     */
    public function setOrderLine(int $orderLine): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setLicenseCode(string $licenseCode): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setClass(RecordRef $class): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setLocation(RecordRef $location): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setRevRecStartDate(string $revRecStartDate): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setRevRecEndDate(string $revRecEndDate): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setGrossAmt(float $grossAmt): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setCostEstimate(float $costEstimate): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setExcludeFromRateRequest(bool $excludeFromRateRequest): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setCatchUpPeriod(RecordRef $catchUpPeriod): InvoiceItem
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
     * @param RecordRef $taxCode
     * @return InvoiceItem
     */
    public function setTaxCode(RecordRef $taxCode): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setGiftCertFrom(string $giftCertFrom): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setGiftCertRecipientName(string $giftCertRecipientName): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setGiftCertRecipientEmail(string $giftCertRecipientEmail): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setGiftCertMessage(string $giftCertMessage): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setTaxAmount(float $taxAmount): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setGiftCertNumber(string $giftCertNumber): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setShipGroup(int $shipGroup): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setItemIsFulfilled(bool $itemIsFulfilled): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setShipAddress(RecordRef $shipAddress): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setShipMethod(RecordRef $shipMethod): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoeIsEstimate(bool $vsoeIsEstimate): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoePrice(float $vsoePrice): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoeAmount(float $vsoeAmount): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoeAllocation(float $vsoeAllocation): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setChargeType(RecordRef $chargeType): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setChargesList(RecordRefList $chargesList): InvoiceItem
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
     * @return InvoiceItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InvoiceItem
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
