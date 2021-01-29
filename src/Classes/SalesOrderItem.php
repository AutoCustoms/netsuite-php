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

class SalesOrderItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscription;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var bool
     */
    protected bool $expandItemGroup;

    /**
     * @var int
     */
    protected int $lineUniqueKey;

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
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

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
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var SalesOrderItemCommitInventory
     */
    protected SalesOrderItemCommitInventory $commitInventory;

    /**
     * @var float
     */
    protected float $orderPriority;

    /**
     * @var string
     */
    protected string $licenseCode;

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
     * @var SalesOrderItemCreatePo
     */
    protected SalesOrderItemCreatePo $createPo;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdPo;

    /**
     * @var float
     */
    protected float $altSalesAmt;

    /**
     * @var bool
     */
    protected bool $createWo;

    /**
     * @var RecordRef
     */
    protected RecordRef $poVendor;

    /**
     * @var string
     */
    protected string $poCurrency;

    /**
     * @var float
     */
    protected float $poRate;

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
     * @var bool
     */
    protected bool $deferRevRec;

    /**
     * @var bool
     */
    protected bool $isClosed;

    /**
     * @var SalesOrderItemFulfillmentChoice
     */
    protected SalesOrderItemFulfillmentChoice $itemFulfillmentChoice;

    /**
     * @var RecordRef
     */
    protected RecordRef $catchUpPeriod;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingSchedule;

    /**
     * @var bool
     */
    protected bool $fromJob;

    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var bool
     */
    protected bool $excludeFromRateRequest;

    /**
     * @var bool
     */
    protected bool $isEstimate;

    /**
     * @var RecordRef
     */
    protected RecordRef $inventoryLocation;

    /**
     * @var RecordRef
     */
    protected RecordRef $inventorySubsidiary;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var float
     */
    protected float $percentComplete;

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
    protected float $quantityBackOrdered;

    /**
     * @var float
     */
    protected float $quantityBilled;

    /**
     * @var float
     */
    protected float $quantityCommitted;

    /**
     * @var float
     */
    protected float $quantityFulfilled;

    /**
     * @var float
     */
    protected float $quantityPacked;

    /**
     * @var float
     */
    protected float $quantityPicked;

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
     * @var string
     */
    protected string $expectedShipDate;

    /**
     * @var bool
     */
    protected bool $noAutoAssignLocation;

    /**
     * @var bool
     */
    protected bool $locationAutoAssigned;

    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var RecordRef
     */
    protected RecordRef $chargeType;

    /**
     * @var RecordRef
     */
    protected RecordRef $orderAllocationStrategy;

    /**
     * @var string
     */
    protected string $requestedDate;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "job" => "RecordRef",
        "subscription" => "RecordRef",
        "item" => "RecordRef",
        "quantityAvailable" => "float",
        "expandItemGroup" => "boolean",
        "lineUniqueKey" => "integer",
        "quantityOnHand" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "description" => "string",
        "price" => "RecordRef",
        "rate" => "string",
        "serialNumbers" => "string",
        "amount" => "float",
        "isTaxable" => "boolean",
        "commitInventory" => "SalesOrderItemCommitInventory",
        "orderPriority" => "float",
        "licenseCode" => "string",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "createPo" => "SalesOrderItemCreatePo",
        "createdPo" => "RecordRef",
        "altSalesAmt" => "float",
        "createWo" => "boolean",
        "poVendor" => "RecordRef",
        "poCurrency" => "string",
        "poRate" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecTermInMonths" => "integer",
        "revRecEndDate" => "dateTime",
        "deferRevRec" => "boolean",
        "isClosed" => "boolean",
        "itemFulfillmentChoice" => "SalesOrderItemFulfillmentChoice",
        "catchUpPeriod" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "fromJob" => "boolean",
        "grossAmt" => "float",
        "taxAmount" => "float",
        "excludeFromRateRequest" => "boolean",
        "isEstimate" => "boolean",
        "inventoryLocation" => "RecordRef",
        "inventorySubsidiary" => "RecordRef",
        "line" => "integer",
        "percentComplete" => "float",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "quantityBackOrdered" => "float",
        "quantityBilled" => "float",
        "quantityCommitted" => "float",
        "quantityFulfilled" => "float",
        "quantityPacked" => "float",
        "quantityPicked" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "giftCertFrom" => "string",
        "giftCertRecipientName" => "string",
        "giftCertRecipientEmail" => "string",
        "giftCertMessage" => "string",
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
        "expectedShipDate" => "dateTime",
        "noAutoAssignLocation" => "boolean",
        "locationAutoAssigned" => "boolean",
        "taxDetailsReference" => "string",
        "chargeType" => "RecordRef",
        "orderAllocationStrategy" => "RecordRef",
        "requestedDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $job
     * @return SalesOrderItem
     */
    public function setJob(RecordRef $job): SalesOrderItem
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
     * @param RecordRef $subscription
     * @return SalesOrderItem
     */
    public function setSubscription(RecordRef $subscription): SalesOrderItem
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
     * @param RecordRef $item
     * @return SalesOrderItem
     */
    public function setItem(RecordRef $item): SalesOrderItem
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
     * @param float $quantityAvailable
     * @return SalesOrderItem
     */
    public function setQuantityAvailable(float $quantityAvailable): SalesOrderItem
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
     * @param bool $expandItemGroup
     * @return SalesOrderItem
     */
    public function setExpandItemGroup(bool $expandItemGroup): SalesOrderItem
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
     * @param int $lineUniqueKey
     * @return SalesOrderItem
     */
    public function setLineUniqueKey(int $lineUniqueKey): SalesOrderItem
    {
        $this->lineUniqueKey = $lineUniqueKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineUniqueKey(): int
    {
        return $this->lineUniqueKey;
    }

    /**
     * @param float $quantityOnHand
     * @return SalesOrderItem
     */
    public function setQuantityOnHand(float $quantityOnHand): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setQuantity(float $quantity): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setUnits(RecordRef $units): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setDescription(string $description): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setPrice(RecordRef $price): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setRate(string $rate): SalesOrderItem
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
     * @param string $serialNumbers
     * @return SalesOrderItem
     */
    public function setSerialNumbers(string $serialNumbers): SalesOrderItem
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
     * @param float $amount
     * @return SalesOrderItem
     */
    public function setAmount(float $amount): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setIsTaxable(bool $isTaxable): SalesOrderItem
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
     * @param SalesOrderItemCommitInventory $commitInventory
     * @return SalesOrderItem
     */
    public function setCommitInventory(SalesOrderItemCommitInventory $commitInventory): SalesOrderItem
    {
        $this->commitInventory = $commitInventory;
        return $this;
    }

    /**
     * @return SalesOrderItemCommitInventory
     */
    public function getCommitInventory(): SalesOrderItemCommitInventory
    {
        return $this->commitInventory;
    }

    /**
     * @param float $orderPriority
     * @return SalesOrderItem
     */
    public function setOrderPriority(float $orderPriority): SalesOrderItem
    {
        $this->orderPriority = $orderPriority;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderPriority(): float
    {
        return $this->orderPriority;
    }

    /**
     * @param string $licenseCode
     * @return SalesOrderItem
     */
    public function setLicenseCode(string $licenseCode): SalesOrderItem
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
     * @param CustomFieldList $options
     * @return SalesOrderItem
     */
    public function setOptions(CustomFieldList $options): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setDepartment(RecordRef $department): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setClass(RecordRef $class): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setLocation(RecordRef $location): SalesOrderItem
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
     * @param SalesOrderItemCreatePo $createPo
     * @return SalesOrderItem
     */
    public function setCreatePo(SalesOrderItemCreatePo $createPo): SalesOrderItem
    {
        $this->createPo = $createPo;
        return $this;
    }

    /**
     * @return SalesOrderItemCreatePo
     */
    public function getCreatePo(): SalesOrderItemCreatePo
    {
        return $this->createPo;
    }

    /**
     * @param RecordRef $createdPo
     * @return SalesOrderItem
     */
    public function setCreatedPo(RecordRef $createdPo): SalesOrderItem
    {
        $this->createdPo = $createdPo;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedPo(): RecordRef
    {
        return $this->createdPo;
    }

    /**
     * @param float $altSalesAmt
     * @return SalesOrderItem
     */
    public function setAltSalesAmt(float $altSalesAmt): SalesOrderItem
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
     * @param bool $createWo
     * @return SalesOrderItem
     */
    public function setCreateWo(bool $createWo): SalesOrderItem
    {
        $this->createWo = $createWo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCreateWo(): bool
    {
        return $this->createWo;
    }

    /**
     * @param RecordRef $poVendor
     * @return SalesOrderItem
     */
    public function setPoVendor(RecordRef $poVendor): SalesOrderItem
    {
        $this->poVendor = $poVendor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoVendor(): RecordRef
    {
        return $this->poVendor;
    }

    /**
     * @param string $poCurrency
     * @return SalesOrderItem
     */
    public function setPoCurrency(string $poCurrency): SalesOrderItem
    {
        $this->poCurrency = $poCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoCurrency(): string
    {
        return $this->poCurrency;
    }

    /**
     * @param float $poRate
     * @return SalesOrderItem
     */
    public function setPoRate(float $poRate): SalesOrderItem
    {
        $this->poRate = $poRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPoRate(): float
    {
        return $this->poRate;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return SalesOrderItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setRevRecStartDate(string $revRecStartDate): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setRevRecTermInMonths(int $revRecTermInMonths): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setRevRecEndDate(string $revRecEndDate): SalesOrderItem
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
     * @param bool $deferRevRec
     * @return SalesOrderItem
     */
    public function setDeferRevRec(bool $deferRevRec): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setIsClosed(bool $isClosed): SalesOrderItem
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
     * @param SalesOrderItemFulfillmentChoice $itemFulfillmentChoice
     * @return SalesOrderItem
     */
    public function setItemFulfillmentChoice(SalesOrderItemFulfillmentChoice $itemFulfillmentChoice): SalesOrderItem
    {
        $this->itemFulfillmentChoice = $itemFulfillmentChoice;
        return $this;
    }

    /**
     * @return SalesOrderItemFulfillmentChoice
     */
    public function getItemFulfillmentChoice(): SalesOrderItemFulfillmentChoice
    {
        return $this->itemFulfillmentChoice;
    }

    /**
     * @param RecordRef $catchUpPeriod
     * @return SalesOrderItem
     */
    public function setCatchUpPeriod(RecordRef $catchUpPeriod): SalesOrderItem
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
     * @param RecordRef $billingSchedule
     * @return SalesOrderItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): SalesOrderItem
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule(): RecordRef
    {
        return $this->billingSchedule;
    }

    /**
     * @param bool $fromJob
     * @return SalesOrderItem
     */
    public function setFromJob(bool $fromJob): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setGrossAmt(float $grossAmt): SalesOrderItem
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
     * @param float $taxAmount
     * @return SalesOrderItem
     */
    public function setTaxAmount(float $taxAmount): SalesOrderItem
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
     * @param bool $excludeFromRateRequest
     * @return SalesOrderItem
     */
    public function setExcludeFromRateRequest(bool $excludeFromRateRequest): SalesOrderItem
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
     * @param bool $isEstimate
     * @return SalesOrderItem
     */
    public function setIsEstimate(bool $isEstimate): SalesOrderItem
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
     * @param RecordRef $inventoryLocation
     * @return SalesOrderItem
     */
    public function setInventoryLocation(RecordRef $inventoryLocation): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setInventorySubsidiary(RecordRef $inventorySubsidiary): SalesOrderItem
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
     * @param int $line
     * @return SalesOrderItem
     */
    public function setLine(int $line): SalesOrderItem
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
     * @param float $percentComplete
     * @return SalesOrderItem
     */
    public function setPercentComplete(float $percentComplete): SalesOrderItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return SalesOrderItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setCostEstimate(float $costEstimate): SalesOrderItem
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
     * @param float $quantityBackOrdered
     * @return SalesOrderItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): SalesOrderItem
    {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered(): float
    {
        return $this->quantityBackOrdered;
    }

    /**
     * @param float $quantityBilled
     * @return SalesOrderItem
     */
    public function setQuantityBilled(float $quantityBilled): SalesOrderItem
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
     * @param float $quantityCommitted
     * @return SalesOrderItem
     */
    public function setQuantityCommitted(float $quantityCommitted): SalesOrderItem
    {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted(): float
    {
        return $this->quantityCommitted;
    }

    /**
     * @param float $quantityFulfilled
     * @return SalesOrderItem
     */
    public function setQuantityFulfilled(float $quantityFulfilled): SalesOrderItem
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
     * @param float $quantityPacked
     * @return SalesOrderItem
     */
    public function setQuantityPacked(float $quantityPacked): SalesOrderItem
    {
        $this->quantityPacked = $quantityPacked;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPacked(): float
    {
        return $this->quantityPacked;
    }

    /**
     * @param float $quantityPicked
     * @return SalesOrderItem
     */
    public function setQuantityPicked(float $quantityPicked): SalesOrderItem
    {
        $this->quantityPicked = $quantityPicked;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityPicked(): float
    {
        return $this->quantityPicked;
    }

    /**
     * @param RecordRef $taxCode
     * @return SalesOrderItem
     */
    public function setTaxCode(RecordRef $taxCode): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setGiftCertFrom(string $giftCertFrom): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setGiftCertRecipientName(string $giftCertRecipientName): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setGiftCertRecipientEmail(string $giftCertRecipientEmail): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setGiftCertMessage(string $giftCertMessage): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setGiftCertNumber(string $giftCertNumber): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setShipGroup(int $shipGroup): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setItemIsFulfilled(bool $itemIsFulfilled): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setShipAddress(RecordRef $shipAddress): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setShipMethod(RecordRef $shipMethod): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoeIsEstimate(bool $vsoeIsEstimate): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoePrice(float $vsoePrice): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoeAmount(float $vsoeAmount): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoeAllocation(float $vsoeAllocation): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): SalesOrderItem
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
     * @return SalesOrderItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): SalesOrderItem
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
     * @param string $expectedShipDate
     * @return SalesOrderItem
     */
    public function setExpectedShipDate(string $expectedShipDate): SalesOrderItem
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
     * @param bool $noAutoAssignLocation
     * @return SalesOrderItem
     */
    public function setNoAutoAssignLocation(bool $noAutoAssignLocation): SalesOrderItem
    {
        $this->noAutoAssignLocation = $noAutoAssignLocation;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNoAutoAssignLocation(): bool
    {
        return $this->noAutoAssignLocation;
    }

    /**
     * @param bool $locationAutoAssigned
     * @return SalesOrderItem
     */
    public function setLocationAutoAssigned(bool $locationAutoAssigned): SalesOrderItem
    {
        $this->locationAutoAssigned = $locationAutoAssigned;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLocationAutoAssigned(): bool
    {
        return $this->locationAutoAssigned;
    }

    /**
     * @param string $taxDetailsReference
     * @return SalesOrderItem
     */
    public function setTaxDetailsReference(string $taxDetailsReference): SalesOrderItem
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
     * @param RecordRef $chargeType
     * @return SalesOrderItem
     */
    public function setChargeType(RecordRef $chargeType): SalesOrderItem
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
     * @param RecordRef $orderAllocationStrategy
     * @return SalesOrderItem
     */
    public function setOrderAllocationStrategy(RecordRef $orderAllocationStrategy): SalesOrderItem
    {
        $this->orderAllocationStrategy = $orderAllocationStrategy;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrderAllocationStrategy(): RecordRef
    {
        return $this->orderAllocationStrategy;
    }

    /**
     * @param string $requestedDate
     * @return SalesOrderItem
     */
    public function setRequestedDate(string $requestedDate): SalesOrderItem
    {
        $this->requestedDate = $requestedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedDate(): string
    {
        return $this->requestedDate;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return SalesOrderItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): SalesOrderItem
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
