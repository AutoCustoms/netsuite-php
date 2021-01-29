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

class TransferOrder extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var float
     */
    protected float $shippingCost;

    /**
     * @var float
     */
    protected float $subTotal;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var Address
     */
    protected Address $shippingAddress;

    /**
     * @var bool
     */
    protected bool $shipIsResidential;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipAddressList;

    /**
     * @var string
     */
    protected string $fob;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var string
     */
    protected string $source;

    /**
     * @var TransferOrderOrderStatus
     */
    protected TransferOrderOrderStatus $orderStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $employee;

    /**
     * @var bool
     */
    protected bool $useItemCostAsTransferCost;

    /**
     * @var RecordRef
     */
    protected RecordRef $incoterm;

    /**
     * @var bool
     */
    protected bool $firmed;

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
    protected RecordRef $transferLocation;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var string
     */
    protected string $shipDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var string
     */
    protected string $trackingNumbers;

    /**
     * @var string
     */
    protected string $linkedTrackingNumbers;

    /**
     * @var bool
     */
    protected bool $shipComplete;

    /**
     * @var float
     */
    protected float $altShippingCost;

    protected $shippingTax1Rate;
    protected $shippingTax2Rate;
    protected $handlingTax1Rate;
    protected $handlingTax2Rate;
    /**
     * @var RecordRef
     */
    protected RecordRef $shippingTaxCode;

    /**
     * @var RecordRef
     */
    protected RecordRef $handlingTaxCode;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var TransferOrderItemList
     */
    protected TransferOrderItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "shippingCost" => "float",
        "subTotal" => "float",
        "status" => "string",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "source" => "string",
        "orderStatus" => "TransferOrderOrderStatus",
        "subsidiary" => "RecordRef",
        "employee" => "RecordRef",
        "useItemCostAsTransferCost" => "boolean",
        "incoterm" => "RecordRef",
        "firmed" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "transferLocation" => "RecordRef",
        "memo" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "shipComplete" => "boolean",
        "altShippingCost" => "float",
        "shippingTax1Rate" => "float",
        "shippingTax2Rate" => "float",
        "handlingTax1Rate" => "float",
        "handlingTax2Rate" => "float",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "total" => "float",
        "itemList" => "TransferOrderItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return TransferOrder
     */
    public function setCreatedDate(string $createdDate): TransferOrder
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return TransferOrder
     */
    public function setLastModifiedDate(string $lastModifiedDate): TransferOrder
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param RecordRef $customForm
     * @return TransferOrder
     */
    public function setCustomForm(RecordRef $customForm): TransferOrder
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param float $shippingCost
     * @return TransferOrder
     */
    public function setShippingCost(float $shippingCost): TransferOrder
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    /**
     * @param float $subTotal
     * @return TransferOrder
     */
    public function setSubTotal(float $subTotal): TransferOrder
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal(): float
    {
        return $this->subTotal;
    }

    /**
     * @param string $status
     * @return TransferOrder
     */
    public function setStatus(string $status): TransferOrder
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param Address $shippingAddress
     * @return TransferOrder
     */
    public function setShippingAddress(Address $shippingAddress): TransferOrder
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
     * @param bool $shipIsResidential
     * @return TransferOrder
     */
    public function setShipIsResidential(bool $shipIsResidential): TransferOrder
    {
        $this->shipIsResidential = $shipIsResidential;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipIsResidential(): bool
    {
        return $this->shipIsResidential;
    }

    /**
     * @param RecordRef $shipAddressList
     * @return TransferOrder
     */
    public function setShipAddressList(RecordRef $shipAddressList): TransferOrder
    {
        $this->shipAddressList = $shipAddressList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddressList(): RecordRef
    {
        return $this->shipAddressList;
    }

    /**
     * @param string $fob
     * @return TransferOrder
     */
    public function setFob(string $fob): TransferOrder
    {
        $this->fob = $fob;
        return $this;
    }

    /**
     * @return string
     */
    public function getFob(): string
    {
        return $this->fob;
    }

    /**
     * @param string $tranDate
     * @return TransferOrder
     */
    public function setTranDate(string $tranDate): TransferOrder
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param string $tranId
     * @return TransferOrder
     */
    public function setTranId(string $tranId): TransferOrder
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranId(): string
    {
        return $this->tranId;
    }

    /**
     * @param string $source
     * @return TransferOrder
     */
    public function setSource(string $source): TransferOrder
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param TransferOrderOrderStatus $orderStatus
     * @return TransferOrder
     */
    public function setOrderStatus(TransferOrderOrderStatus $orderStatus): TransferOrder
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return TransferOrderOrderStatus
     */
    public function getOrderStatus(): TransferOrderOrderStatus
    {
        return $this->orderStatus;
    }

    /**
     * @param RecordRef $subsidiary
     * @return TransferOrder
     */
    public function setSubsidiary(RecordRef $subsidiary): TransferOrder
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $employee
     * @return TransferOrder
     */
    public function setEmployee(RecordRef $employee): TransferOrder
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployee(): RecordRef
    {
        return $this->employee;
    }

    /**
     * @param bool $useItemCostAsTransferCost
     * @return TransferOrder
     */
    public function setUseItemCostAsTransferCost(bool $useItemCostAsTransferCost): TransferOrder
    {
        $this->useItemCostAsTransferCost = $useItemCostAsTransferCost;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseItemCostAsTransferCost(): bool
    {
        return $this->useItemCostAsTransferCost;
    }

    /**
     * @param RecordRef $incoterm
     * @return TransferOrder
     */
    public function setIncoterm(RecordRef $incoterm): TransferOrder
    {
        $this->incoterm = $incoterm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncoterm(): RecordRef
    {
        return $this->incoterm;
    }

    /**
     * @param bool $firmed
     * @return TransferOrder
     */
    public function setFirmed(bool $firmed): TransferOrder
    {
        $this->firmed = $firmed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFirmed(): bool
    {
        return $this->firmed;
    }

    /**
     * @param RecordRef $department
     * @return TransferOrder
     */
    public function setDepartment(RecordRef $department): TransferOrder
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
     * @return TransferOrder
     */
    public function setClass(RecordRef $class): TransferOrder
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
     * @return TransferOrder
     */
    public function setLocation(RecordRef $location): TransferOrder
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
     * @param RecordRef $transferLocation
     * @return TransferOrder
     */
    public function setTransferLocation(RecordRef $transferLocation): TransferOrder
    {
        $this->transferLocation = $transferLocation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransferLocation(): RecordRef
    {
        return $this->transferLocation;
    }

    /**
     * @param string $memo
     * @return TransferOrder
     */
    public function setMemo(string $memo): TransferOrder
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param string $shipDate
     * @return TransferOrder
     */
    public function setShipDate(string $shipDate): TransferOrder
    {
        $this->shipDate = $shipDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipDate(): string
    {
        return $this->shipDate;
    }

    /**
     * @param RecordRef $shipMethod
     * @return TransferOrder
     */
    public function setShipMethod(RecordRef $shipMethod): TransferOrder
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
     * @param string $trackingNumbers
     * @return TransferOrder
     */
    public function setTrackingNumbers(string $trackingNumbers): TransferOrder
    {
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumbers(): string
    {
        return $this->trackingNumbers;
    }

    /**
     * @param string $linkedTrackingNumbers
     * @return TransferOrder
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): TransferOrder
    {
        $this->linkedTrackingNumbers = $linkedTrackingNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedTrackingNumbers(): string
    {
        return $this->linkedTrackingNumbers;
    }

    /**
     * @param bool $shipComplete
     * @return TransferOrder
     */
    public function setShipComplete(bool $shipComplete): TransferOrder
    {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipComplete(): bool
    {
        return $this->shipComplete;
    }

    /**
     * @param float $altShippingCost
     * @return TransferOrder
     */
    public function setAltShippingCost(float $altShippingCost): TransferOrder
    {
        $this->altShippingCost = $altShippingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltShippingCost(): float
    {
        return $this->altShippingCost;
    }

    /**
     * @param RecordRef $shippingTaxCode
     * @return TransferOrder
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): TransferOrder
    {
        $this->shippingTaxCode = $shippingTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingTaxCode(): RecordRef
    {
        return $this->shippingTaxCode;
    }

    /**
     * @param RecordRef $handlingTaxCode
     * @return TransferOrder
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): TransferOrder
    {
        $this->handlingTaxCode = $handlingTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHandlingTaxCode(): RecordRef
    {
        return $this->handlingTaxCode;
    }

    /**
     * @param float $total
     * @return TransferOrder
     */
    public function setTotal(float $total): TransferOrder
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param TransferOrderItemList $itemList
     * @return TransferOrder
     */
    public function setItemList(TransferOrderItemList $itemList): TransferOrder
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return TransferOrderItemList
     */
    public function getItemList(): TransferOrderItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return TransferOrder
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): TransferOrder
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return TransferOrder
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): TransferOrder
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

    /**
     * @param string $internalId
     * @return TransferOrder
     */
    public function setInternalId(string $internalId): TransferOrder
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return TransferOrder
     */
    public function setExternalId(string $externalId): TransferOrder
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
