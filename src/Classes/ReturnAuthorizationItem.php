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

class ReturnAuthorizationItem {
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
     * @var float
     */
    protected float $quantityReceived;

    /**
     * @var float
     */
    protected float $quantityBilled;

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
     * @var bool
     */
    protected bool $deferRevRec;

    /**
     * @var bool
     */
    protected bool $isClosed;

    /**
     * @var bool
     */
    protected bool $isDropShipment;

    /**
     * @var RecordRef
     */
    protected RecordRef $inventoryLocation;

    /**
     * @var RecordRef
     */
    protected RecordRef $inventorySubsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $catchUpPeriod;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

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
    protected RecordRef $taxCode;

    protected $taxRate1;
    protected $taxRate2;
    protected $tax1Amt;
    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var bool
     */
    protected bool $isTaxable;

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
    protected float $altSalesAmt;

    /**
     * @var float
     */
    protected float $taxAmount;

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
        "job" => "RecordRef",
        "item" => "RecordRef",
        "orderLine" => "integer",
        "line" => "integer",
        "quantity" => "float",
        "quantityReceived" => "float",
        "quantityBilled" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "serialNumbers" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "amount" => "float",
        "options" => "CustomFieldList",
        "revRecTermInMonths" => "integer",
        "deferRevRec" => "boolean",
        "isClosed" => "boolean",
        "isDropShipment" => "boolean",
        "inventoryLocation" => "RecordRef",
        "inventorySubsidiary" => "RecordRef",
        "catchUpPeriod" => "RecordRef",
        "department" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "taxDetailsReference" => "string",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "tax1Amt" => "float",
        "grossAmt" => "float",
        "isTaxable" => "boolean",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
        "giftCertNumber" => "string",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeIsEstimate" => "boolean",
        "vsoePrice" => "float",
        "vsoeAmount" => "float",
        "altSalesAmt" => "float",
        "taxAmount" => "float",
        "vsoeAllocation" => "float",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $job
     * @return ReturnAuthorizationItem
     */
    public function setJob(RecordRef $job): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setItem(RecordRef $item): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setOrderLine(int $orderLine): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setLine(int $line): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setQuantity(float $quantity): ReturnAuthorizationItem
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
     * @param float $quantityReceived
     * @return ReturnAuthorizationItem
     */
    public function setQuantityReceived(float $quantityReceived): ReturnAuthorizationItem
    {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityReceived(): float
    {
        return $this->quantityReceived;
    }

    /**
     * @param float $quantityBilled
     * @return ReturnAuthorizationItem
     */
    public function setQuantityBilled(float $quantityBilled): ReturnAuthorizationItem
    {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBilled(): float
    {
        return $this->quantityBilled;
    }

    /**
     * @param RecordRef $units
     * @return ReturnAuthorizationItem
     */
    public function setUnits(RecordRef $units): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setDescription(string $description): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setSerialNumbers(string $serialNumbers): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setPrice(RecordRef $price): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setRate(string $rate): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setAmount(float $amount): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setOptions(CustomFieldList $options): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setRevRecTermInMonths(int $revRecTermInMonths): ReturnAuthorizationItem
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
     * @param bool $deferRevRec
     * @return ReturnAuthorizationItem
     */
    public function setDeferRevRec(bool $deferRevRec): ReturnAuthorizationItem
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
     * @param bool $isClosed
     * @return ReturnAuthorizationItem
     */
    public function setIsClosed(bool $isClosed): ReturnAuthorizationItem
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
     * @param bool $isDropShipment
     * @return ReturnAuthorizationItem
     */
    public function setIsDropShipment(bool $isDropShipment): ReturnAuthorizationItem
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
     * @param RecordRef $inventoryLocation
     * @return ReturnAuthorizationItem
     */
    public function setInventoryLocation(RecordRef $inventoryLocation): ReturnAuthorizationItem
    {
        $this->inventoryLocation = $inventoryLocation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInventoryLocation(): RecordRef
    {
        return $this->inventoryLocation;
    }

    /**
     * @param RecordRef $inventorySubsidiary
     * @return ReturnAuthorizationItem
     */
    public function setInventorySubsidiary(RecordRef $inventorySubsidiary): ReturnAuthorizationItem
    {
        $this->inventorySubsidiary = $inventorySubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInventorySubsidiary(): RecordRef
    {
        return $this->inventorySubsidiary;
    }

    /**
     * @param RecordRef $catchUpPeriod
     * @return ReturnAuthorizationItem
     */
    public function setCatchUpPeriod(RecordRef $catchUpPeriod): ReturnAuthorizationItem
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
     * @param RecordRef $department
     * @return ReturnAuthorizationItem
     */
    public function setDepartment(RecordRef $department): ReturnAuthorizationItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return ReturnAuthorizationItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setCostEstimate(float $costEstimate): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): ReturnAuthorizationItem
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
     * @param RecordRef $class
     * @return ReturnAuthorizationItem
     */
    public function setClass(RecordRef $class): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setLocation(RecordRef $location): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setRevRecStartDate(string $revRecStartDate): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setRevRecEndDate(string $revRecEndDate): ReturnAuthorizationItem
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
     * @param RecordRef $taxCode
     * @return ReturnAuthorizationItem
     */
    public function setTaxCode(RecordRef $taxCode): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setGrossAmt(float $grossAmt): ReturnAuthorizationItem
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
     * @param bool $isTaxable
     * @return ReturnAuthorizationItem
     */
    public function setIsTaxable(bool $isTaxable): ReturnAuthorizationItem
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
     * @param string $giftCertFrom
     * @return ReturnAuthorizationItem
     */
    public function setGiftCertFrom(string $giftCertFrom): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setGiftCertRecipientName(string $giftCertRecipientName): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setGiftCertRecipientEmail(string $giftCertRecipientEmail): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setGiftCertMessage(string $giftCertMessage): ReturnAuthorizationItem
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
     * @param string $giftCertNumber
     * @return ReturnAuthorizationItem
     */
    public function setGiftCertNumber(string $giftCertNumber): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setVsoeIsEstimate(bool $vsoeIsEstimate): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setVsoePrice(float $vsoePrice): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setVsoeAmount(float $vsoeAmount): ReturnAuthorizationItem
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
     * @param float $altSalesAmt
     * @return ReturnAuthorizationItem
     */
    public function setAltSalesAmt(float $altSalesAmt): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setTaxAmount(float $taxAmount): ReturnAuthorizationItem
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
     * @param float $vsoeAllocation
     * @return ReturnAuthorizationItem
     */
    public function setVsoeAllocation(float $vsoeAllocation): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): ReturnAuthorizationItem
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
     * @return ReturnAuthorizationItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ReturnAuthorizationItem
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
