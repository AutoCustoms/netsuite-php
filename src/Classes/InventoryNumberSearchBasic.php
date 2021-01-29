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

class InventoryNumberSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDateField
     */
    protected SearchDateField $expirationDate;

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
     * @var SearchStringField
     */
    protected SearchStringField $inventoryNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isOnHand;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityAvailable;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityInTransit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityOnHand;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityOnOrder;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "expirationDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inventoryNumber" => "SearchStringField",
        "isOnHand" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "quantityAvailable" => "SearchDoubleField",
        "quantityInTransit" => "SearchDoubleField",
        "quantityOnHand" => "SearchDoubleField",
        "quantityOnOrder" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDateField $expirationDate
     * @return InventoryNumberSearchBasic
     */
    public function setExpirationDate(SearchDateField $expirationDate): InventoryNumberSearchBasic
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpirationDate(): SearchDateField
    {
        return $this->expirationDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return InventoryNumberSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): InventoryNumberSearchBasic
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
     * @param SearchStringField $inventoryNumber
     * @return InventoryNumberSearchBasic
     */
    public function setInventoryNumber(SearchStringField $inventoryNumber): InventoryNumberSearchBasic
    {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getInventoryNumber(): SearchStringField
    {
        return $this->inventoryNumber;
    }

    /**
     * @param SearchBooleanField $isOnHand
     * @return InventoryNumberSearchBasic
     */
    public function setIsOnHand(SearchBooleanField $isOnHand): InventoryNumberSearchBasic
    {
        $this->isOnHand = $isOnHand;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOnHand(): SearchBooleanField
    {
        return $this->isOnHand;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return InventoryNumberSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): InventoryNumberSearchBasic
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
     * @param SearchMultiSelectField $location
     * @return InventoryNumberSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): InventoryNumberSearchBasic
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
     * @return InventoryNumberSearchBasic
     */
    public function setMemo(SearchStringField $memo): InventoryNumberSearchBasic
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
     * @param SearchDoubleField $quantityAvailable
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityAvailable(SearchDoubleField $quantityAvailable): InventoryNumberSearchBasic
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityAvailable(): SearchDoubleField
    {
        return $this->quantityAvailable;
    }

    /**
     * @param SearchDoubleField $quantityInTransit
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityInTransit(SearchDoubleField $quantityInTransit): InventoryNumberSearchBasic
    {
        $this->quantityInTransit = $quantityInTransit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityInTransit(): SearchDoubleField
    {
        return $this->quantityInTransit;
    }

    /**
     * @param SearchDoubleField $quantityOnHand
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityOnHand(SearchDoubleField $quantityOnHand): InventoryNumberSearchBasic
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnHand(): SearchDoubleField
    {
        return $this->quantityOnHand;
    }

    /**
     * @param SearchDoubleField $quantityOnOrder
     * @return InventoryNumberSearchBasic
     */
    public function setQuantityOnOrder(SearchDoubleField $quantityOnOrder): InventoryNumberSearchBasic
    {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnOrder(): SearchDoubleField
    {
        return $this->quantityOnOrder;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return InventoryNumberSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): InventoryNumberSearchBasic
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
