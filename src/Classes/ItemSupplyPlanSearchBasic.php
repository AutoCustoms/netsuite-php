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

class ItemSupplyPlanSearchBasic extends SearchRecordBasic {
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
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $orderCreated;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $orderDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $orderType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantity;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $receiptDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $units;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "orderCreated" => "SearchBooleanField",
        "orderDate" => "SearchDateField",
        "orderType" => "SearchMultiSelectField",
        "quantity" => "SearchDoubleField",
        "receiptDate" => "SearchDateField",
        "subsidiary" => "SearchMultiSelectField",
        "units" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $externalId
     * @return ItemSupplyPlanSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ItemSupplyPlanSearchBasic
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
     * @return ItemSupplyPlanSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ItemSupplyPlanSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return ItemSupplyPlanSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ItemSupplyPlanSearchBasic
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
     * @return ItemSupplyPlanSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ItemSupplyPlanSearchBasic
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
     * @return ItemSupplyPlanSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): ItemSupplyPlanSearchBasic
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
     * @param SearchDateField $lastModifiedDate
     * @return ItemSupplyPlanSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): ItemSupplyPlanSearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return ItemSupplyPlanSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): ItemSupplyPlanSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $memo
     * @return ItemSupplyPlanSearchBasic
     */
    public function setMemo(SearchStringField $memo): ItemSupplyPlanSearchBasic
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
     * @param SearchBooleanField $orderCreated
     * @return ItemSupplyPlanSearchBasic
     */
    public function setOrderCreated(SearchBooleanField $orderCreated): ItemSupplyPlanSearchBasic
    {
        $this->orderCreated = $orderCreated;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOrderCreated(): SearchBooleanField
    {
        return $this->orderCreated;
    }

    /**
     * @param SearchDateField $orderDate
     * @return ItemSupplyPlanSearchBasic
     */
    public function setOrderDate(SearchDateField $orderDate): ItemSupplyPlanSearchBasic
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getOrderDate(): SearchDateField
    {
        return $this->orderDate;
    }

    /**
     * @param SearchMultiSelectField $orderType
     * @return ItemSupplyPlanSearchBasic
     */
    public function setOrderType(SearchMultiSelectField $orderType): ItemSupplyPlanSearchBasic
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOrderType(): SearchMultiSelectField
    {
        return $this->orderType;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return ItemSupplyPlanSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity): ItemSupplyPlanSearchBasic
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity(): SearchDoubleField
    {
        return $this->quantity;
    }

    /**
     * @param SearchDateField $receiptDate
     * @return ItemSupplyPlanSearchBasic
     */
    public function setReceiptDate(SearchDateField $receiptDate): ItemSupplyPlanSearchBasic
    {
        $this->receiptDate = $receiptDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReceiptDate(): SearchDateField
    {
        return $this->receiptDate;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return ItemSupplyPlanSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): ItemSupplyPlanSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $units
     * @return ItemSupplyPlanSearchBasic
     */
    public function setUnits(SearchMultiSelectField $units): ItemSupplyPlanSearchBasic
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnits(): SearchMultiSelectField
    {
        return $this->units;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ItemSupplyPlanSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ItemSupplyPlanSearchBasic
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
