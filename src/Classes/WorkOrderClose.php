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

class WorkOrderClose extends Record {
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
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var float
     */
    protected float $orderQuantity;

    /**
     * @var float
     */
    protected float $scrapQuantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

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
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

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
    protected RecordRef $revision;

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
        "tranId" => "string",
        "item" => "RecordRef",
        "quantity" => "float",
        "orderQuantity" => "float",
        "scrapQuantity" => "float",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return WorkOrderClose
     */
    public function setCreatedDate(string $createdDate): WorkOrderClose
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
     * @return WorkOrderClose
     */
    public function setLastModifiedDate(string $lastModifiedDate): WorkOrderClose
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
     * @return WorkOrderClose
     */
    public function setCustomForm(RecordRef $customForm): WorkOrderClose
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
     * @param string $tranId
     * @return WorkOrderClose
     */
    public function setTranId(string $tranId): WorkOrderClose
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
     * @param RecordRef $item
     * @return WorkOrderClose
     */
    public function setItem(RecordRef $item): WorkOrderClose
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
     * @param float $quantity
     * @return WorkOrderClose
     */
    public function setQuantity(float $quantity): WorkOrderClose
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $orderQuantity
     * @return WorkOrderClose
     */
    public function setOrderQuantity(float $orderQuantity): WorkOrderClose
    {
        $this->orderQuantity = $orderQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderQuantity(): float
    {
        return $this->orderQuantity;
    }

    /**
     * @param float $scrapQuantity
     * @return WorkOrderClose
     */
    public function setScrapQuantity(float $scrapQuantity): WorkOrderClose
    {
        $this->scrapQuantity = $scrapQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getScrapQuantity(): float
    {
        return $this->scrapQuantity;
    }

    /**
     * @param RecordRef $createdFrom
     * @return WorkOrderClose
     */
    public function setCreatedFrom(RecordRef $createdFrom): WorkOrderClose
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param string $tranDate
     * @return WorkOrderClose
     */
    public function setTranDate(string $tranDate): WorkOrderClose
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
     * @return WorkOrderClose
     */
    public function setPostingPeriod(RecordRef $postingPeriod): WorkOrderClose
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
     * @param string $memo
     * @return WorkOrderClose
     */
    public function setMemo(string $memo): WorkOrderClose
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
     * @param RecordRef $subsidiary
     * @return WorkOrderClose
     */
    public function setSubsidiary(RecordRef $subsidiary): WorkOrderClose
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
     * @param RecordRef $department
     * @return WorkOrderClose
     */
    public function setDepartment(RecordRef $department): WorkOrderClose
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
     * @return WorkOrderClose
     */
    public function setClass(RecordRef $class): WorkOrderClose
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
     * @return WorkOrderClose
     */
    public function setLocation(RecordRef $location): WorkOrderClose
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
     * @param RecordRef $revision
     * @return WorkOrderClose
     */
    public function setRevision(RecordRef $revision): WorkOrderClose
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevision(): RecordRef
    {
        return $this->revision;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return WorkOrderClose
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): WorkOrderClose
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
     * @return WorkOrderClose
     */
    public function setInternalId(string $internalId): WorkOrderClose
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
     * @return WorkOrderClose
     */
    public function setExternalId(string $externalId): WorkOrderClose
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
