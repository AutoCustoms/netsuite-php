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

class BinTransfer extends Record {
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
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var BinTransferInventoryList
     */
    protected BinTransferInventoryList $inventoryList;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var string
     */
    protected string $tranId;

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
        "memo" => "string",
        "location" => "RecordRef",
        "inventoryList" => "BinTransferInventoryList",
        "subsidiary" => "RecordRef",
        "tranId" => "string",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return BinTransfer
     */
    public function setCreatedDate(string $createdDate): BinTransfer
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
     * @return BinTransfer
     */
    public function setLastModifiedDate(string $lastModifiedDate): BinTransfer
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
     * @return BinTransfer
     */
    public function setTranDate(string $tranDate): BinTransfer
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
     * @param string $memo
     * @return BinTransfer
     */
    public function setMemo(string $memo): BinTransfer
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
     * @return BinTransfer
     */
    public function setLocation(RecordRef $location): BinTransfer
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
     * @param BinTransferInventoryList $inventoryList
     * @return BinTransfer
     */
    public function setInventoryList(BinTransferInventoryList $inventoryList): BinTransfer
    {
        $this->inventoryList = $inventoryList;
        return $this;
    }

    /**
     * @return BinTransferInventoryList
     */
    public function getInventoryList(): BinTransferInventoryList
    {
        return $this->inventoryList;
    }

    /**
     * @param RecordRef $subsidiary
     * @return BinTransfer
     */
    public function setSubsidiary(RecordRef $subsidiary): BinTransfer
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
     * @param string $tranId
     * @return BinTransfer
     */
    public function setTranId(string $tranId): BinTransfer
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
     * @param CustomFieldList $customFieldList
     * @return BinTransfer
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): BinTransfer
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
     * @return BinTransfer
     */
    public function setInternalId(string $internalId): BinTransfer
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
     * @return BinTransfer
     */
    public function setExternalId(string $externalId): BinTransfer
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
