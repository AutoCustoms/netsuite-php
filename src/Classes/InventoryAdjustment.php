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

class InventoryAdjustment extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var float
     */
    protected float $estimatedTotalValue;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

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
    protected RecordRef $adjLocation;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var InventoryAdjustmentInventoryList
     */
    protected InventoryAdjustmentInventoryList $inventoryList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

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
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "createdDate" => "dateTime",
        "tranId" => "string",
        "lastModifiedDate" => "dateTime",
        "subsidiary" => "RecordRef",
        "account" => "RecordRef",
        "customForm" => "RecordRef",
        "estimatedTotalValue" => "float",
        "customer" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "adjLocation" => "RecordRef",
        "location" => "RecordRef",
        "memo" => "string",
        "inventoryList" => "InventoryAdjustmentInventoryList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $postingPeriod
     * @return InventoryAdjustment
     */
    public function setPostingPeriod(RecordRef $postingPeriod): InventoryAdjustment
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
     * @param string $tranDate
     * @return InventoryAdjustment
     */
    public function setTranDate(string $tranDate): InventoryAdjustment
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
     * @param string $createdDate
     * @return InventoryAdjustment
     */
    public function setCreatedDate(string $createdDate): InventoryAdjustment
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
     * @param string $tranId
     * @return InventoryAdjustment
     */
    public function setTranId(string $tranId): InventoryAdjustment
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
     * @param string $lastModifiedDate
     * @return InventoryAdjustment
     */
    public function setLastModifiedDate(string $lastModifiedDate): InventoryAdjustment
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
     * @param RecordRef $subsidiary
     * @return InventoryAdjustment
     */
    public function setSubsidiary(RecordRef $subsidiary): InventoryAdjustment
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
     * @param RecordRef $account
     * @return InventoryAdjustment
     */
    public function setAccount(RecordRef $account): InventoryAdjustment
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount(): RecordRef
    {
        return $this->account;
    }

    /**
     * @param RecordRef $customForm
     * @return InventoryAdjustment
     */
    public function setCustomForm(RecordRef $customForm): InventoryAdjustment
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
     * @param float $estimatedTotalValue
     * @return InventoryAdjustment
     */
    public function setEstimatedTotalValue(float $estimatedTotalValue): InventoryAdjustment
    {
        $this->estimatedTotalValue = $estimatedTotalValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedTotalValue(): float
    {
        return $this->estimatedTotalValue;
    }

    /**
     * @param RecordRef $customer
     * @return InventoryAdjustment
     */
    public function setCustomer(RecordRef $customer): InventoryAdjustment
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer(): RecordRef
    {
        return $this->customer;
    }

    /**
     * @param RecordRef $department
     * @return InventoryAdjustment
     */
    public function setDepartment(RecordRef $department): InventoryAdjustment
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
     * @return InventoryAdjustment
     */
    public function setClass(RecordRef $class): InventoryAdjustment
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
     * @param RecordRef $adjLocation
     * @return InventoryAdjustment
     */
    public function setAdjLocation(RecordRef $adjLocation): InventoryAdjustment
    {
        $this->adjLocation = $adjLocation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAdjLocation(): RecordRef
    {
        return $this->adjLocation;
    }

    /**
     * @param RecordRef $location
     * @return InventoryAdjustment
     */
    public function setLocation(RecordRef $location): InventoryAdjustment
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
     * @param string $memo
     * @return InventoryAdjustment
     */
    public function setMemo(string $memo): InventoryAdjustment
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
     * @param InventoryAdjustmentInventoryList $inventoryList
     * @return InventoryAdjustment
     */
    public function setInventoryList(InventoryAdjustmentInventoryList $inventoryList): InventoryAdjustment
    {
        $this->inventoryList = $inventoryList;
        return $this;
    }

    /**
     * @return InventoryAdjustmentInventoryList
     */
    public function getInventoryList(): InventoryAdjustmentInventoryList
    {
        return $this->inventoryList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return InventoryAdjustment
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): InventoryAdjustment
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return InventoryAdjustment
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InventoryAdjustment
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
     * @return InventoryAdjustment
     */
    public function setInternalId(string $internalId): InventoryAdjustment
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
     * @return InventoryAdjustment
     */
    public function setExternalId(string $externalId): InventoryAdjustment
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
