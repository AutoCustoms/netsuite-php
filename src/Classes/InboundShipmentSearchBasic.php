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

class InboundShipmentSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDateField
     */
    protected SearchDateField $actualDeliveryDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $actualShippingDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billOfLading;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $expectedDeliveryDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $expectedRate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $expectedShippingDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalDocumentNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $incoterm;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $itemEffectiveDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $itemExchangeRate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $landedCostAllocationMethod;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $landedCostAmount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $landedCostCostCategory;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $landedCostCurrency;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $landedCostEffectiveDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $landedCostExchangeRate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $poAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $poRate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $purchaseOrder;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityBilled;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityExpected;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityReceived;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityRemaining;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $receivingLocation;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $shipmentBaseCurrency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $shipmentNumber;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $totalUnitCost;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $unit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unitLandedCost;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $vendor;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $vesselNumber;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actualDeliveryDate" => "SearchDateField",
        "actualShippingDate" => "SearchDateField",
        "billOfLading" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "currency" => "SearchMultiSelectField",
        "description" => "SearchStringField",
        "expectedDeliveryDate" => "SearchDateField",
        "expectedRate" => "SearchDoubleField",
        "expectedShippingDate" => "SearchDateField",
        "externalDocumentNumber" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "incoterm" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "itemEffectiveDate" => "SearchDateField",
        "itemExchangeRate" => "SearchDoubleField",
        "landedCostAllocationMethod" => "SearchEnumMultiSelectField",
        "landedCostAmount" => "SearchDoubleField",
        "landedCostCostCategory" => "SearchMultiSelectField",
        "landedCostCurrency" => "SearchMultiSelectField",
        "landedCostEffectiveDate" => "SearchDateField",
        "landedCostExchangeRate" => "SearchDoubleField",
        "memo" => "SearchStringField",
        "poAmount" => "SearchDoubleField",
        "poRate" => "SearchDoubleField",
        "purchaseOrder" => "SearchMultiSelectField",
        "quantityBilled" => "SearchDoubleField",
        "quantityExpected" => "SearchDoubleField",
        "quantityReceived" => "SearchDoubleField",
        "quantityRemaining" => "SearchDoubleField",
        "receivingLocation" => "SearchMultiSelectField",
        "shipmentBaseCurrency" => "SearchMultiSelectField",
        "shipmentNumber" => "SearchMultiSelectField",
        "status" => "SearchEnumMultiSelectField",
        "totalUnitCost" => "SearchDoubleField",
        "unit" => "SearchMultiSelectField",
        "unitLandedCost" => "SearchDoubleField",
        "vendor" => "SearchMultiSelectField",
        "vesselNumber" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDateField $actualDeliveryDate
     * @return InboundShipmentSearchBasic
     */
    public function setActualDeliveryDate(SearchDateField $actualDeliveryDate): InboundShipmentSearchBasic
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getActualDeliveryDate(): SearchDateField
    {
        return $this->actualDeliveryDate;
    }

    /**
     * @param SearchDateField $actualShippingDate
     * @return InboundShipmentSearchBasic
     */
    public function setActualShippingDate(SearchDateField $actualShippingDate): InboundShipmentSearchBasic
    {
        $this->actualShippingDate = $actualShippingDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getActualShippingDate(): SearchDateField
    {
        return $this->actualShippingDate;
    }

    /**
     * @param SearchStringField $billOfLading
     * @return InboundShipmentSearchBasic
     */
    public function setBillOfLading(SearchStringField $billOfLading): InboundShipmentSearchBasic
    {
        $this->billOfLading = $billOfLading;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillOfLading(): SearchStringField
    {
        return $this->billOfLading;
    }

    /**
     * @param SearchDateField $createdDate
     * @return InboundShipmentSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): InboundShipmentSearchBasic
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate(): SearchDateField
    {
        return $this->createdDate;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return InboundShipmentSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): InboundShipmentSearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchStringField $description
     * @return InboundShipmentSearchBasic
     */
    public function setDescription(SearchStringField $description): InboundShipmentSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchDateField $expectedDeliveryDate
     * @return InboundShipmentSearchBasic
     */
    public function setExpectedDeliveryDate(SearchDateField $expectedDeliveryDate): InboundShipmentSearchBasic
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedDeliveryDate(): SearchDateField
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * @param SearchDoubleField $expectedRate
     * @return InboundShipmentSearchBasic
     */
    public function setExpectedRate(SearchDoubleField $expectedRate): InboundShipmentSearchBasic
    {
        $this->expectedRate = $expectedRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExpectedRate(): SearchDoubleField
    {
        return $this->expectedRate;
    }

    /**
     * @param SearchDateField $expectedShippingDate
     * @return InboundShipmentSearchBasic
     */
    public function setExpectedShippingDate(SearchDateField $expectedShippingDate): InboundShipmentSearchBasic
    {
        $this->expectedShippingDate = $expectedShippingDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedShippingDate(): SearchDateField
    {
        return $this->expectedShippingDate;
    }

    /**
     * @param SearchMultiSelectField $externalDocumentNumber
     * @return InboundShipmentSearchBasic
     */
    public function setExternalDocumentNumber(SearchMultiSelectField $externalDocumentNumber): InboundShipmentSearchBasic
    {
        $this->externalDocumentNumber = $externalDocumentNumber;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalDocumentNumber(): SearchMultiSelectField
    {
        return $this->externalDocumentNumber;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return InboundShipmentSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): InboundShipmentSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return InboundShipmentSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): InboundShipmentSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $incoterm
     * @return InboundShipmentSearchBasic
     */
    public function setIncoterm(SearchMultiSelectField $incoterm): InboundShipmentSearchBasic
    {
        $this->incoterm = $incoterm;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIncoterm(): SearchMultiSelectField
    {
        return $this->incoterm;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return InboundShipmentSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): InboundShipmentSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return InboundShipmentSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): InboundShipmentSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return InboundShipmentSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): InboundShipmentSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchDateField $itemEffectiveDate
     * @return InboundShipmentSearchBasic
     */
    public function setItemEffectiveDate(SearchDateField $itemEffectiveDate): InboundShipmentSearchBasic
    {
        $this->itemEffectiveDate = $itemEffectiveDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getItemEffectiveDate(): SearchDateField
    {
        return $this->itemEffectiveDate;
    }

    /**
     * @param SearchDoubleField $itemExchangeRate
     * @return InboundShipmentSearchBasic
     */
    public function setItemExchangeRate(SearchDoubleField $itemExchangeRate): InboundShipmentSearchBasic
    {
        $this->itemExchangeRate = $itemExchangeRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getItemExchangeRate(): SearchDoubleField
    {
        return $this->itemExchangeRate;
    }

    /**
     * @param SearchEnumMultiSelectField $landedCostAllocationMethod
     * @return InboundShipmentSearchBasic
     */
    public function setLandedCostAllocationMethod(SearchEnumMultiSelectField $landedCostAllocationMethod): InboundShipmentSearchBasic
    {
        $this->landedCostAllocationMethod = $landedCostAllocationMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLandedCostAllocationMethod(): SearchEnumMultiSelectField
    {
        return $this->landedCostAllocationMethod;
    }

    /**
     * @param SearchDoubleField $landedCostAmount
     * @return InboundShipmentSearchBasic
     */
    public function setLandedCostAmount(SearchDoubleField $landedCostAmount): InboundShipmentSearchBasic
    {
        $this->landedCostAmount = $landedCostAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLandedCostAmount(): SearchDoubleField
    {
        return $this->landedCostAmount;
    }

    /**
     * @param SearchMultiSelectField $landedCostCostCategory
     * @return InboundShipmentSearchBasic
     */
    public function setLandedCostCostCategory(SearchMultiSelectField $landedCostCostCategory): InboundShipmentSearchBasic
    {
        $this->landedCostCostCategory = $landedCostCostCategory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLandedCostCostCategory(): SearchMultiSelectField
    {
        return $this->landedCostCostCategory;
    }

    /**
     * @param SearchMultiSelectField $landedCostCurrency
     * @return InboundShipmentSearchBasic
     */
    public function setLandedCostCurrency(SearchMultiSelectField $landedCostCurrency): InboundShipmentSearchBasic
    {
        $this->landedCostCurrency = $landedCostCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLandedCostCurrency(): SearchMultiSelectField
    {
        return $this->landedCostCurrency;
    }

    /**
     * @param SearchDateField $landedCostEffectiveDate
     * @return InboundShipmentSearchBasic
     */
    public function setLandedCostEffectiveDate(SearchDateField $landedCostEffectiveDate): InboundShipmentSearchBasic
    {
        $this->landedCostEffectiveDate = $landedCostEffectiveDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLandedCostEffectiveDate(): SearchDateField
    {
        return $this->landedCostEffectiveDate;
    }

    /**
     * @param SearchDoubleField $landedCostExchangeRate
     * @return InboundShipmentSearchBasic
     */
    public function setLandedCostExchangeRate(SearchDoubleField $landedCostExchangeRate): InboundShipmentSearchBasic
    {
        $this->landedCostExchangeRate = $landedCostExchangeRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLandedCostExchangeRate(): SearchDoubleField
    {
        return $this->landedCostExchangeRate;
    }

    /**
     * @param SearchStringField $memo
     * @return InboundShipmentSearchBasic
     */
    public function setMemo(SearchStringField $memo): InboundShipmentSearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchDoubleField $poAmount
     * @return InboundShipmentSearchBasic
     */
    public function setPoAmount(SearchDoubleField $poAmount): InboundShipmentSearchBasic
    {
        $this->poAmount = $poAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPoAmount(): SearchDoubleField
    {
        return $this->poAmount;
    }

    /**
     * @param SearchDoubleField $poRate
     * @return InboundShipmentSearchBasic
     */
    public function setPoRate(SearchDoubleField $poRate): InboundShipmentSearchBasic
    {
        $this->poRate = $poRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPoRate(): SearchDoubleField
    {
        return $this->poRate;
    }

    /**
     * @param SearchMultiSelectField $purchaseOrder
     * @return InboundShipmentSearchBasic
     */
    public function setPurchaseOrder(SearchMultiSelectField $purchaseOrder): InboundShipmentSearchBasic
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrder(): SearchMultiSelectField
    {
        return $this->purchaseOrder;
    }

    /**
     * @param SearchDoubleField $quantityBilled
     * @return InboundShipmentSearchBasic
     */
    public function setQuantityBilled(SearchDoubleField $quantityBilled): InboundShipmentSearchBasic
    {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityBilled(): SearchDoubleField
    {
        return $this->quantityBilled;
    }

    /**
     * @param SearchDoubleField $quantityExpected
     * @return InboundShipmentSearchBasic
     */
    public function setQuantityExpected(SearchDoubleField $quantityExpected): InboundShipmentSearchBasic
    {
        $this->quantityExpected = $quantityExpected;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityExpected(): SearchDoubleField
    {
        return $this->quantityExpected;
    }

    /**
     * @param SearchDoubleField $quantityReceived
     * @return InboundShipmentSearchBasic
     */
    public function setQuantityReceived(SearchDoubleField $quantityReceived): InboundShipmentSearchBasic
    {
        $this->quantityReceived = $quantityReceived;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityReceived(): SearchDoubleField
    {
        return $this->quantityReceived;
    }

    /**
     * @param SearchDoubleField $quantityRemaining
     * @return InboundShipmentSearchBasic
     */
    public function setQuantityRemaining(SearchDoubleField $quantityRemaining): InboundShipmentSearchBasic
    {
        $this->quantityRemaining = $quantityRemaining;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityRemaining(): SearchDoubleField
    {
        return $this->quantityRemaining;
    }

    /**
     * @param SearchMultiSelectField $receivingLocation
     * @return InboundShipmentSearchBasic
     */
    public function setReceivingLocation(SearchMultiSelectField $receivingLocation): InboundShipmentSearchBasic
    {
        $this->receivingLocation = $receivingLocation;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReceivingLocation(): SearchMultiSelectField
    {
        return $this->receivingLocation;
    }

    /**
     * @param SearchMultiSelectField $shipmentBaseCurrency
     * @return InboundShipmentSearchBasic
     */
    public function setShipmentBaseCurrency(SearchMultiSelectField $shipmentBaseCurrency): InboundShipmentSearchBasic
    {
        $this->shipmentBaseCurrency = $shipmentBaseCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipmentBaseCurrency(): SearchMultiSelectField
    {
        return $this->shipmentBaseCurrency;
    }

    /**
     * @param SearchMultiSelectField $shipmentNumber
     * @return InboundShipmentSearchBasic
     */
    public function setShipmentNumber(SearchMultiSelectField $shipmentNumber): InboundShipmentSearchBasic
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipmentNumber(): SearchMultiSelectField
    {
        return $this->shipmentNumber;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return InboundShipmentSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): InboundShipmentSearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus(): SearchEnumMultiSelectField
    {
        return $this->status;
    }

    /**
     * @param SearchDoubleField $totalUnitCost
     * @return InboundShipmentSearchBasic
     */
    public function setTotalUnitCost(SearchDoubleField $totalUnitCost): InboundShipmentSearchBasic
    {
        $this->totalUnitCost = $totalUnitCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTotalUnitCost(): SearchDoubleField
    {
        return $this->totalUnitCost;
    }

    /**
     * @param SearchMultiSelectField $unit
     * @return InboundShipmentSearchBasic
     */
    public function setUnit(SearchMultiSelectField $unit): InboundShipmentSearchBasic
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnit(): SearchMultiSelectField
    {
        return $this->unit;
    }

    /**
     * @param SearchDoubleField $unitLandedCost
     * @return InboundShipmentSearchBasic
     */
    public function setUnitLandedCost(SearchDoubleField $unitLandedCost): InboundShipmentSearchBasic
    {
        $this->unitLandedCost = $unitLandedCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitLandedCost(): SearchDoubleField
    {
        return $this->unitLandedCost;
    }

    /**
     * @param SearchMultiSelectField $vendor
     * @return InboundShipmentSearchBasic
     */
    public function setVendor(SearchMultiSelectField $vendor): InboundShipmentSearchBasic
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendor(): SearchMultiSelectField
    {
        return $this->vendor;
    }

    /**
     * @param SearchStringField $vesselNumber
     * @return InboundShipmentSearchBasic
     */
    public function setVesselNumber(SearchStringField $vesselNumber): InboundShipmentSearchBasic
    {
        $this->vesselNumber = $vesselNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVesselNumber(): SearchStringField
    {
        return $this->vesselNumber;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return InboundShipmentSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): InboundShipmentSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
