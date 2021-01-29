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

class InboundShipmentSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDateField[]
     */
    protected array $actualDeliveryDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $actualShippingDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billOfLading;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $expectedDeliveryDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $expectedRate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $expectedShippingDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $externalDocumentNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $incoterm;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $itemEffectiveDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $itemExchangeRate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $landedCostAllocationMethod;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $landedCostAmount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $landedCostCostCategory;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $landedCostCurrency;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $landedCostEffectiveDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $landedCostExchangeRate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $poAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $poRate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $purchaseOrder;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityBilled;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityExpected;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityReceived;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityRemaining;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $receivingLocation;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $shipmentBaseCurrency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipmentNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $status;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $totalUnitCost;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $unit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unitLandedCost;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $vendor;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $vesselNumber;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actualDeliveryDate" => "SearchColumnDateField[]",
        "actualShippingDate" => "SearchColumnDateField[]",
        "billOfLading" => "SearchColumnStringField[]",
        "createdDate" => "SearchColumnDateField[]",
        "currency" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "expectedDeliveryDate" => "SearchColumnDateField[]",
        "expectedRate" => "SearchColumnDoubleField[]",
        "expectedShippingDate" => "SearchColumnDateField[]",
        "externalDocumentNumber" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "incoterm" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "itemEffectiveDate" => "SearchColumnDateField[]",
        "itemExchangeRate" => "SearchColumnDoubleField[]",
        "landedCostAllocationMethod" => "SearchColumnEnumSelectField[]",
        "landedCostAmount" => "SearchColumnDoubleField[]",
        "landedCostCostCategory" => "SearchColumnSelectField[]",
        "landedCostCurrency" => "SearchColumnSelectField[]",
        "landedCostEffectiveDate" => "SearchColumnDateField[]",
        "landedCostExchangeRate" => "SearchColumnDoubleField[]",
        "memo" => "SearchColumnStringField[]",
        "poAmount" => "SearchColumnDoubleField[]",
        "poRate" => "SearchColumnDoubleField[]",
        "purchaseOrder" => "SearchColumnSelectField[]",
        "quantityBilled" => "SearchColumnDoubleField[]",
        "quantityExpected" => "SearchColumnDoubleField[]",
        "quantityReceived" => "SearchColumnDoubleField[]",
        "quantityRemaining" => "SearchColumnDoubleField[]",
        "receivingLocation" => "SearchColumnSelectField[]",
        "shipmentBaseCurrency" => "SearchColumnSelectField[]",
        "shipmentNumber" => "SearchColumnStringField[]",
        "status" => "SearchColumnStringField[]",
        "totalUnitCost" => "SearchColumnDoubleField[]",
        "unit" => "SearchColumnSelectField[]",
        "unitLandedCost" => "SearchColumnDoubleField[]",
        "vendor" => "SearchColumnSelectField[]",
        "vesselNumber" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDateField[] $actualDeliveryDate
     * @return InboundShipmentSearchRowBasic
     */
    public function setActualDeliveryDate(SearchColumnDateField $actualDeliveryDate): InboundShipmentSearchRowBasic
    {
        $this->actualDeliveryDate[] = $actualDeliveryDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getActualDeliveryDate(): array
    {
        return $this->actualDeliveryDate;
    }

    /**
     * @param SearchColumnDateField[] $actualShippingDate
     * @return InboundShipmentSearchRowBasic
     */
    public function setActualShippingDate(SearchColumnDateField $actualShippingDate): InboundShipmentSearchRowBasic
    {
        $this->actualShippingDate[] = $actualShippingDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getActualShippingDate(): array
    {
        return $this->actualShippingDate;
    }

    /**
     * @param SearchColumnStringField[] $billOfLading
     * @return InboundShipmentSearchRowBasic
     */
    public function setBillOfLading(SearchColumnStringField $billOfLading): InboundShipmentSearchRowBasic
    {
        $this->billOfLading[] = $billOfLading;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillOfLading(): array
    {
        return $this->billOfLading;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return InboundShipmentSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): InboundShipmentSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return InboundShipmentSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): InboundShipmentSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return InboundShipmentSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): InboundShipmentSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnDateField[] $expectedDeliveryDate
     * @return InboundShipmentSearchRowBasic
     */
    public function setExpectedDeliveryDate(SearchColumnDateField $expectedDeliveryDate): InboundShipmentSearchRowBasic
    {
        $this->expectedDeliveryDate[] = $expectedDeliveryDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedDeliveryDate(): array
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * @param SearchColumnDoubleField[] $expectedRate
     * @return InboundShipmentSearchRowBasic
     */
    public function setExpectedRate(SearchColumnDoubleField $expectedRate): InboundShipmentSearchRowBasic
    {
        $this->expectedRate[] = $expectedRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExpectedRate(): array
    {
        return $this->expectedRate;
    }

    /**
     * @param SearchColumnDateField[] $expectedShippingDate
     * @return InboundShipmentSearchRowBasic
     */
    public function setExpectedShippingDate(SearchColumnDateField $expectedShippingDate): InboundShipmentSearchRowBasic
    {
        $this->expectedShippingDate[] = $expectedShippingDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedShippingDate(): array
    {
        return $this->expectedShippingDate;
    }

    /**
     * @param SearchColumnStringField[] $externalDocumentNumber
     * @return InboundShipmentSearchRowBasic
     */
    public function setExternalDocumentNumber(SearchColumnStringField $externalDocumentNumber): InboundShipmentSearchRowBasic
    {
        $this->externalDocumentNumber[] = $externalDocumentNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalDocumentNumber(): array
    {
        return $this->externalDocumentNumber;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return InboundShipmentSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): InboundShipmentSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $incoterm
     * @return InboundShipmentSearchRowBasic
     */
    public function setIncoterm(SearchColumnSelectField $incoterm): InboundShipmentSearchRowBasic
    {
        $this->incoterm[] = $incoterm;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIncoterm(): array
    {
        return $this->incoterm;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return InboundShipmentSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): InboundShipmentSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return InboundShipmentSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): InboundShipmentSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnDateField[] $itemEffectiveDate
     * @return InboundShipmentSearchRowBasic
     */
    public function setItemEffectiveDate(SearchColumnDateField $itemEffectiveDate): InboundShipmentSearchRowBasic
    {
        $this->itemEffectiveDate[] = $itemEffectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getItemEffectiveDate(): array
    {
        return $this->itemEffectiveDate;
    }

    /**
     * @param SearchColumnDoubleField[] $itemExchangeRate
     * @return InboundShipmentSearchRowBasic
     */
    public function setItemExchangeRate(SearchColumnDoubleField $itemExchangeRate): InboundShipmentSearchRowBasic
    {
        $this->itemExchangeRate[] = $itemExchangeRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getItemExchangeRate(): array
    {
        return $this->itemExchangeRate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $landedCostAllocationMethod
     * @return InboundShipmentSearchRowBasic
     */
    public function setLandedCostAllocationMethod(SearchColumnEnumSelectField $landedCostAllocationMethod): InboundShipmentSearchRowBasic
    {
        $this->landedCostAllocationMethod[] = $landedCostAllocationMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLandedCostAllocationMethod(): array
    {
        return $this->landedCostAllocationMethod;
    }

    /**
     * @param SearchColumnDoubleField[] $landedCostAmount
     * @return InboundShipmentSearchRowBasic
     */
    public function setLandedCostAmount(SearchColumnDoubleField $landedCostAmount): InboundShipmentSearchRowBasic
    {
        $this->landedCostAmount[] = $landedCostAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLandedCostAmount(): array
    {
        return $this->landedCostAmount;
    }

    /**
     * @param SearchColumnSelectField[] $landedCostCostCategory
     * @return InboundShipmentSearchRowBasic
     */
    public function setLandedCostCostCategory(SearchColumnSelectField $landedCostCostCategory): InboundShipmentSearchRowBasic
    {
        $this->landedCostCostCategory[] = $landedCostCostCategory;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLandedCostCostCategory(): array
    {
        return $this->landedCostCostCategory;
    }

    /**
     * @param SearchColumnSelectField[] $landedCostCurrency
     * @return InboundShipmentSearchRowBasic
     */
    public function setLandedCostCurrency(SearchColumnSelectField $landedCostCurrency): InboundShipmentSearchRowBasic
    {
        $this->landedCostCurrency[] = $landedCostCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLandedCostCurrency(): array
    {
        return $this->landedCostCurrency;
    }

    /**
     * @param SearchColumnDateField[] $landedCostEffectiveDate
     * @return InboundShipmentSearchRowBasic
     */
    public function setLandedCostEffectiveDate(SearchColumnDateField $landedCostEffectiveDate): InboundShipmentSearchRowBasic
    {
        $this->landedCostEffectiveDate[] = $landedCostEffectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLandedCostEffectiveDate(): array
    {
        return $this->landedCostEffectiveDate;
    }

    /**
     * @param SearchColumnDoubleField[] $landedCostExchangeRate
     * @return InboundShipmentSearchRowBasic
     */
    public function setLandedCostExchangeRate(SearchColumnDoubleField $landedCostExchangeRate): InboundShipmentSearchRowBasic
    {
        $this->landedCostExchangeRate[] = $landedCostExchangeRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLandedCostExchangeRate(): array
    {
        return $this->landedCostExchangeRate;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return InboundShipmentSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): InboundShipmentSearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnDoubleField[] $poAmount
     * @return InboundShipmentSearchRowBasic
     */
    public function setPoAmount(SearchColumnDoubleField $poAmount): InboundShipmentSearchRowBasic
    {
        $this->poAmount[] = $poAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPoAmount(): array
    {
        return $this->poAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $poRate
     * @return InboundShipmentSearchRowBasic
     */
    public function setPoRate(SearchColumnDoubleField $poRate): InboundShipmentSearchRowBasic
    {
        $this->poRate[] = $poRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPoRate(): array
    {
        return $this->poRate;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseOrder
     * @return InboundShipmentSearchRowBasic
     */
    public function setPurchaseOrder(SearchColumnSelectField $purchaseOrder): InboundShipmentSearchRowBasic
    {
        $this->purchaseOrder[] = $purchaseOrder;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseOrder(): array
    {
        return $this->purchaseOrder;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityBilled
     * @return InboundShipmentSearchRowBasic
     */
    public function setQuantityBilled(SearchColumnDoubleField $quantityBilled): InboundShipmentSearchRowBasic
    {
        $this->quantityBilled[] = $quantityBilled;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityBilled(): array
    {
        return $this->quantityBilled;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityExpected
     * @return InboundShipmentSearchRowBasic
     */
    public function setQuantityExpected(SearchColumnDoubleField $quantityExpected): InboundShipmentSearchRowBasic
    {
        $this->quantityExpected[] = $quantityExpected;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityExpected(): array
    {
        return $this->quantityExpected;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityReceived
     * @return InboundShipmentSearchRowBasic
     */
    public function setQuantityReceived(SearchColumnDoubleField $quantityReceived): InboundShipmentSearchRowBasic
    {
        $this->quantityReceived[] = $quantityReceived;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityReceived(): array
    {
        return $this->quantityReceived;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityRemaining
     * @return InboundShipmentSearchRowBasic
     */
    public function setQuantityRemaining(SearchColumnDoubleField $quantityRemaining): InboundShipmentSearchRowBasic
    {
        $this->quantityRemaining[] = $quantityRemaining;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityRemaining(): array
    {
        return $this->quantityRemaining;
    }

    /**
     * @param SearchColumnSelectField[] $receivingLocation
     * @return InboundShipmentSearchRowBasic
     */
    public function setReceivingLocation(SearchColumnSelectField $receivingLocation): InboundShipmentSearchRowBasic
    {
        $this->receivingLocation[] = $receivingLocation;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReceivingLocation(): array
    {
        return $this->receivingLocation;
    }

    /**
     * @param SearchColumnSelectField[] $shipmentBaseCurrency
     * @return InboundShipmentSearchRowBasic
     */
    public function setShipmentBaseCurrency(SearchColumnSelectField $shipmentBaseCurrency): InboundShipmentSearchRowBasic
    {
        $this->shipmentBaseCurrency[] = $shipmentBaseCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShipmentBaseCurrency(): array
    {
        return $this->shipmentBaseCurrency;
    }

    /**
     * @param SearchColumnStringField[] $shipmentNumber
     * @return InboundShipmentSearchRowBasic
     */
    public function setShipmentNumber(SearchColumnStringField $shipmentNumber): InboundShipmentSearchRowBasic
    {
        $this->shipmentNumber[] = $shipmentNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipmentNumber(): array
    {
        return $this->shipmentNumber;
    }

    /**
     * @param SearchColumnStringField[] $status
     * @return InboundShipmentSearchRowBasic
     */
    public function setStatus(SearchColumnStringField $status): InboundShipmentSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnDoubleField[] $totalUnitCost
     * @return InboundShipmentSearchRowBasic
     */
    public function setTotalUnitCost(SearchColumnDoubleField $totalUnitCost): InboundShipmentSearchRowBasic
    {
        $this->totalUnitCost[] = $totalUnitCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotalUnitCost(): array
    {
        return $this->totalUnitCost;
    }

    /**
     * @param SearchColumnSelectField[] $unit
     * @return InboundShipmentSearchRowBasic
     */
    public function setUnit(SearchColumnSelectField $unit): InboundShipmentSearchRowBasic
    {
        $this->unit[] = $unit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnit(): array
    {
        return $this->unit;
    }

    /**
     * @param SearchColumnDoubleField[] $unitLandedCost
     * @return InboundShipmentSearchRowBasic
     */
    public function setUnitLandedCost(SearchColumnDoubleField $unitLandedCost): InboundShipmentSearchRowBasic
    {
        $this->unitLandedCost[] = $unitLandedCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitLandedCost(): array
    {
        return $this->unitLandedCost;
    }

    /**
     * @param SearchColumnSelectField[] $vendor
     * @return InboundShipmentSearchRowBasic
     */
    public function setVendor(SearchColumnSelectField $vendor): InboundShipmentSearchRowBasic
    {
        $this->vendor[] = $vendor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendor(): array
    {
        return $this->vendor;
    }

    /**
     * @param SearchColumnStringField[] $vesselNumber
     * @return InboundShipmentSearchRowBasic
     */
    public function setVesselNumber(SearchColumnStringField $vesselNumber): InboundShipmentSearchRowBasic
    {
        $this->vesselNumber[] = $vesselNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVesselNumber(): array
    {
        return $this->vesselNumber;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return InboundShipmentSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): InboundShipmentSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
