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

class InboundShipment extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $shipmentNumber;

    /**
     * @var string
     */
    protected string $externalDocumentNumber;

    /**
     * @var InboundShipmentShipmentStatus
     */
    protected InboundShipmentShipmentStatus $shipmentStatus;

    /**
     * @var string
     */
    protected string $expectedShippingDate;

    /**
     * @var string
     */
    protected string $actualShippingDate;

    /**
     * @var string
     */
    protected string $expectedDeliveryDate;

    /**
     * @var string
     */
    protected string $actualDeliveryDate;

    /**
     * @var string
     */
    protected string $shipmentMemo;

    /**
     * @var string
     */
    protected string $vesselNumber;

    /**
     * @var string
     */
    protected string $billOfLading;

    /**
     * @var InboundShipmentLandedCostList
     */
    protected InboundShipmentLandedCostList $landedCostList;

    /**
     * @var InboundShipmentItemsList
     */
    protected InboundShipmentItemsList $itemsList;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipmentBaseCurrency;

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
        "customForm" => "RecordRef",
        "shipmentNumber" => "string",
        "externalDocumentNumber" => "string",
        "shipmentStatus" => "InboundShipmentShipmentStatus",
        "expectedShippingDate" => "dateTime",
        "actualShippingDate" => "dateTime",
        "expectedDeliveryDate" => "dateTime",
        "actualDeliveryDate" => "dateTime",
        "shipmentMemo" => "string",
        "vesselNumber" => "string",
        "billOfLading" => "string",
        "landedCostList" => "InboundShipmentLandedCostList",
        "itemsList" => "InboundShipmentItemsList",
        "shipmentBaseCurrency" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return InboundShipment
     */
    public function setCustomForm(RecordRef $customForm): InboundShipment
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
     * @param string $shipmentNumber
     * @return InboundShipment
     */
    public function setShipmentNumber(string $shipmentNumber): InboundShipment
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentNumber(): string
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $externalDocumentNumber
     * @return InboundShipment
     */
    public function setExternalDocumentNumber(string $externalDocumentNumber): InboundShipment
    {
        $this->externalDocumentNumber = $externalDocumentNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalDocumentNumber(): string
    {
        return $this->externalDocumentNumber;
    }

    /**
     * @param InboundShipmentShipmentStatus $shipmentStatus
     * @return InboundShipment
     */
    public function setShipmentStatus(InboundShipmentShipmentStatus $shipmentStatus): InboundShipment
    {
        $this->shipmentStatus = $shipmentStatus;
        return $this;
    }

    /**
     * @return InboundShipmentShipmentStatus
     */
    public function getShipmentStatus(): InboundShipmentShipmentStatus
    {
        return $this->shipmentStatus;
    }

    /**
     * @param string $expectedShippingDate
     * @return InboundShipment
     */
    public function setExpectedShippingDate(string $expectedShippingDate): InboundShipment
    {
        $this->expectedShippingDate = $expectedShippingDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedShippingDate(): string
    {
        return $this->expectedShippingDate;
    }

    /**
     * @param string $actualShippingDate
     * @return InboundShipment
     */
    public function setActualShippingDate(string $actualShippingDate): InboundShipment
    {
        $this->actualShippingDate = $actualShippingDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualShippingDate(): string
    {
        return $this->actualShippingDate;
    }

    /**
     * @param string $expectedDeliveryDate
     * @return InboundShipment
     */
    public function setExpectedDeliveryDate(string $expectedDeliveryDate): InboundShipment
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedDeliveryDate(): string
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * @param string $actualDeliveryDate
     * @return InboundShipment
     */
    public function setActualDeliveryDate(string $actualDeliveryDate): InboundShipment
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualDeliveryDate(): string
    {
        return $this->actualDeliveryDate;
    }

    /**
     * @param string $shipmentMemo
     * @return InboundShipment
     */
    public function setShipmentMemo(string $shipmentMemo): InboundShipment
    {
        $this->shipmentMemo = $shipmentMemo;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentMemo(): string
    {
        return $this->shipmentMemo;
    }

    /**
     * @param string $vesselNumber
     * @return InboundShipment
     */
    public function setVesselNumber(string $vesselNumber): InboundShipment
    {
        $this->vesselNumber = $vesselNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getVesselNumber(): string
    {
        return $this->vesselNumber;
    }

    /**
     * @param string $billOfLading
     * @return InboundShipment
     */
    public function setBillOfLading(string $billOfLading): InboundShipment
    {
        $this->billOfLading = $billOfLading;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillOfLading(): string
    {
        return $this->billOfLading;
    }

    /**
     * @param InboundShipmentLandedCostList $landedCostList
     * @return InboundShipment
     */
    public function setLandedCostList(InboundShipmentLandedCostList $landedCostList): InboundShipment
    {
        $this->landedCostList = $landedCostList;
        return $this;
    }

    /**
     * @return InboundShipmentLandedCostList
     */
    public function getLandedCostList(): InboundShipmentLandedCostList
    {
        return $this->landedCostList;
    }

    /**
     * @param InboundShipmentItemsList $itemsList
     * @return InboundShipment
     */
    public function setItemsList(InboundShipmentItemsList $itemsList): InboundShipment
    {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * @return InboundShipmentItemsList
     */
    public function getItemsList(): InboundShipmentItemsList
    {
        return $this->itemsList;
    }

    /**
     * @param RecordRef $shipmentBaseCurrency
     * @return InboundShipment
     */
    public function setShipmentBaseCurrency(RecordRef $shipmentBaseCurrency): InboundShipment
    {
        $this->shipmentBaseCurrency = $shipmentBaseCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipmentBaseCurrency(): RecordRef
    {
        return $this->shipmentBaseCurrency;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return InboundShipment
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InboundShipment
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
     * @return InboundShipment
     */
    public function setInternalId(string $internalId): InboundShipment
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
     * @return InboundShipment
     */
    public function setExternalId(string $externalId): InboundShipment
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
