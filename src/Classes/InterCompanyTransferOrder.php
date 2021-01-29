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

class InterCompanyTransferOrder extends Record {
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
    protected RecordRef $toSubsidiary;

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
    protected $handlingTax1Rate;
    protected $shippingTax2Rate;
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
     * @var InterCompanyTransferOrderItemList
     */
    protected InterCompanyTransferOrderItemList $itemList;

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
        "toSubsidiary" => "RecordRef",
        "employee" => "RecordRef",
        "useItemCostAsTransferCost" => "boolean",
        "incoterm" => "RecordRef",
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
        "handlingTax1Rate" => "float",
        "shippingTax2Rate" => "float",
        "handlingTax2Rate" => "float",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "total" => "float",
        "itemList" => "InterCompanyTransferOrderItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return InterCompanyTransferOrder
     */
    public function setCreatedDate(string $createdDate): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setLastModifiedDate(string $lastModifiedDate): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setCustomForm(RecordRef $customForm): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShippingCost(float $shippingCost): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setSubTotal(float $subTotal): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setStatus(string $status): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShippingAddress(Address $shippingAddress): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShipIsResidential(bool $shipIsResidential): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShipAddressList(RecordRef $shipAddressList): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setFob(string $fob): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setTranDate(string $tranDate): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setTranId(string $tranId): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setSource(string $source): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setOrderStatus(TransferOrderOrderStatus $orderStatus): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setSubsidiary(RecordRef $subsidiary): InterCompanyTransferOrder
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
     * @param RecordRef $toSubsidiary
     * @return InterCompanyTransferOrder
     */
    public function setToSubsidiary(RecordRef $toSubsidiary): InterCompanyTransferOrder
    {
        $this->toSubsidiary = $toSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToSubsidiary(): RecordRef
    {
        return $this->toSubsidiary;
    }

    /**
     * @param RecordRef $employee
     * @return InterCompanyTransferOrder
     */
    public function setEmployee(RecordRef $employee): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setUseItemCostAsTransferCost(bool $useItemCostAsTransferCost): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setIncoterm(RecordRef $incoterm): InterCompanyTransferOrder
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
     * @param RecordRef $department
     * @return InterCompanyTransferOrder
     */
    public function setDepartment(RecordRef $department): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setClass(RecordRef $class): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setLocation(RecordRef $location): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setTransferLocation(RecordRef $transferLocation): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setMemo(string $memo): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShipDate(string $shipDate): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShipMethod(RecordRef $shipMethod): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setTrackingNumbers(string $trackingNumbers): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShipComplete(bool $shipComplete): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setAltShippingCost(float $altShippingCost): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setTotal(float $total): InterCompanyTransferOrder
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
     * @param InterCompanyTransferOrderItemList $itemList
     * @return InterCompanyTransferOrder
     */
    public function setItemList(InterCompanyTransferOrderItemList $itemList): InterCompanyTransferOrder
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return InterCompanyTransferOrderItemList
     */
    public function getItemList(): InterCompanyTransferOrderItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return InterCompanyTransferOrder
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setInternalId(string $internalId): InterCompanyTransferOrder
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
     * @return InterCompanyTransferOrder
     */
    public function setExternalId(string $externalId): InterCompanyTransferOrder
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
