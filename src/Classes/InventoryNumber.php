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

class InventoryNumber extends Record {
    /**
     * @var string
     */
    protected string $inventoryNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var string
     */
    protected string $units;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var InventoryNumberLocationsList
     */
    protected InventoryNumberLocationsList $locationsList;

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
        "inventoryNumber" => "string",
        "item" => "RecordRef",
        "status" => "string",
        "units" => "string",
        "expirationDate" => "dateTime",
        "memo" => "string",
        "locationsList" => "InventoryNumberLocationsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $inventoryNumber
     * @return InventoryNumber
     */
    public function setInventoryNumber(string $inventoryNumber): InventoryNumber
    {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInventoryNumber(): string
    {
        return $this->inventoryNumber;
    }

    /**
     * @param RecordRef $item
     * @return InventoryNumber
     */
    public function setItem(RecordRef $item): InventoryNumber
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
     * @param string $status
     * @return InventoryNumber
     */
    public function setStatus(string $status): InventoryNumber
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
     * @param string $units
     * @return InventoryNumber
     */
    public function setUnits(string $units): InventoryNumber
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * @param string $expirationDate
     * @return InventoryNumber
     */
    public function setExpirationDate(string $expirationDate): InventoryNumber
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param string $memo
     * @return InventoryNumber
     */
    public function setMemo(string $memo): InventoryNumber
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
     * @param InventoryNumberLocationsList $locationsList
     * @return InventoryNumber
     */
    public function setLocationsList(InventoryNumberLocationsList $locationsList): InventoryNumber
    {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * @return InventoryNumberLocationsList
     */
    public function getLocationsList(): InventoryNumberLocationsList
    {
        return $this->locationsList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return InventoryNumber
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InventoryNumber
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
     * @return InventoryNumber
     */
    public function setInternalId(string $internalId): InventoryNumber
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
     * @return InventoryNumber
     */
    public function setExternalId(string $externalId): InventoryNumber
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
