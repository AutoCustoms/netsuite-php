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

class BinWorksheet extends Record {
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
     * @var string
     */
    protected string $tranId;

    /**
     * @var BinWorksheetItemList
     */
    protected BinWorksheetItemList $itemList;

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
        "tranId" => "string",
        "itemList" => "BinWorksheetItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return BinWorksheet
     */
    public function setCreatedDate(string $createdDate): BinWorksheet
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
     * @return BinWorksheet
     */
    public function setLastModifiedDate(string $lastModifiedDate): BinWorksheet
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
     * @return BinWorksheet
     */
    public function setTranDate(string $tranDate): BinWorksheet
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
     * @return BinWorksheet
     */
    public function setMemo(string $memo): BinWorksheet
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
     * @return BinWorksheet
     */
    public function setLocation(RecordRef $location): BinWorksheet
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
     * @param string $tranId
     * @return BinWorksheet
     */
    public function setTranId(string $tranId): BinWorksheet
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
     * @param BinWorksheetItemList $itemList
     * @return BinWorksheet
     */
    public function setItemList(BinWorksheetItemList $itemList): BinWorksheet
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return BinWorksheetItemList
     */
    public function getItemList(): BinWorksheetItemList
    {
        return $this->itemList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return BinWorksheet
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): BinWorksheet
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
     * @return BinWorksheet
     */
    public function setInternalId(string $internalId): BinWorksheet
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
     * @return BinWorksheet
     */
    public function setExternalId(string $externalId): BinWorksheet
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
