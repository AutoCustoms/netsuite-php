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

class InventoryTransfer extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $transferLocation;

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
    protected RecordRef $subsidiary;

    /**
     * @var InventoryTransferInventoryList
     */
    protected InventoryTransferInventoryList $inventoryList;

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
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "memo" => "string",
        "location" => "RecordRef",
        "transferLocation" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "subsidiary" => "RecordRef",
        "inventoryList" => "InventoryTransferInventoryList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return InventoryTransfer
     */
    public function setCreatedDate(string $createdDate): InventoryTransfer
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
     * @return InventoryTransfer
     */
    public function setLastModifiedDate(string $lastModifiedDate): InventoryTransfer
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
     * @param string $tranDate
     * @return InventoryTransfer
     */
    public function setTranDate(string $tranDate): InventoryTransfer
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
     * @param RecordRef $postingPeriod
     * @return InventoryTransfer
     */
    public function setPostingPeriod(RecordRef $postingPeriod): InventoryTransfer
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param string $tranId
     * @return InventoryTransfer
     */
    public function setTranId(string $tranId): InventoryTransfer
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
     * @param string $memo
     * @return InventoryTransfer
     */
    public function setMemo(string $memo): InventoryTransfer
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
     * @param RecordRef $location
     * @return InventoryTransfer
     */
    public function setLocation(RecordRef $location): InventoryTransfer
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
     * @return InventoryTransfer
     */
    public function setTransferLocation(RecordRef $transferLocation): InventoryTransfer
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
     * @param RecordRef $department
     * @return InventoryTransfer
     */
    public function setDepartment(RecordRef $department): InventoryTransfer
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
     * @return InventoryTransfer
     */
    public function setClass(RecordRef $class): InventoryTransfer
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
     * @param RecordRef $subsidiary
     * @return InventoryTransfer
     */
    public function setSubsidiary(RecordRef $subsidiary): InventoryTransfer
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
     * @param InventoryTransferInventoryList $inventoryList
     * @return InventoryTransfer
     */
    public function setInventoryList(InventoryTransferInventoryList $inventoryList): InventoryTransfer
    {
        $this->inventoryList = $inventoryList;
        return $this;
    }

    /**
     * @return InventoryTransferInventoryList
     */
    public function getInventoryList(): InventoryTransferInventoryList
    {
        return $this->inventoryList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return InventoryTransfer
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InventoryTransfer
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
     * @return InventoryTransfer
     */
    public function setInternalId(string $internalId): InventoryTransfer
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
     * @return InventoryTransfer
     */
    public function setExternalId(string $externalId): InventoryTransfer
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
