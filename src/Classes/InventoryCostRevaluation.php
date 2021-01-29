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

class InventoryCostRevaluation extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

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
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

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
     * @var string
     */
    protected string $memo;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var float
     */
    protected float $inventoryValue;

    /**
     * @var float
     */
    protected float $unitCost;

    /**
     * @var InventoryCostRevaluationCostComponentList
     */
    protected InventoryCostRevaluationCostComponentList $costComponentList;

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
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "subsidiary" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "account" => "RecordRef",
        "item" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "memo" => "string",
        "total" => "float",
        "inventoryValue" => "float",
        "unitCost" => "float",
        "costComponentList" => "InventoryCostRevaluationCostComponentList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return InventoryCostRevaluation
     */
    public function setCreatedDate(string $createdDate): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setLastModifiedDate(string $lastModifiedDate): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setCustomForm(RecordRef $customForm): InventoryCostRevaluation
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
     * @param RecordRef $subsidiary
     * @return InventoryCostRevaluation
     */
    public function setSubsidiary(RecordRef $subsidiary): InventoryCostRevaluation
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
     * @param string $tranDate
     * @return InventoryCostRevaluation
     */
    public function setTranDate(string $tranDate): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setPostingPeriod(RecordRef $postingPeriod): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setTranId(string $tranId): InventoryCostRevaluation
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
     * @param RecordRef $account
     * @return InventoryCostRevaluation
     */
    public function setAccount(RecordRef $account): InventoryCostRevaluation
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
     * @param RecordRef $item
     * @return InventoryCostRevaluation
     */
    public function setItem(RecordRef $item): InventoryCostRevaluation
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
     * @param RecordRef $department
     * @return InventoryCostRevaluation
     */
    public function setDepartment(RecordRef $department): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setClass(RecordRef $class): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setLocation(RecordRef $location): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setMemo(string $memo): InventoryCostRevaluation
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
     * @param float $total
     * @return InventoryCostRevaluation
     */
    public function setTotal(float $total): InventoryCostRevaluation
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $inventoryValue
     * @return InventoryCostRevaluation
     */
    public function setInventoryValue(float $inventoryValue): InventoryCostRevaluation
    {
        $this->inventoryValue = $inventoryValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getInventoryValue(): float
    {
        return $this->inventoryValue;
    }

    /**
     * @param float $unitCost
     * @return InventoryCostRevaluation
     */
    public function setUnitCost(float $unitCost): InventoryCostRevaluation
    {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitCost(): float
    {
        return $this->unitCost;
    }

    /**
     * @param InventoryCostRevaluationCostComponentList $costComponentList
     * @return InventoryCostRevaluation
     */
    public function setCostComponentList(InventoryCostRevaluationCostComponentList $costComponentList): InventoryCostRevaluation
    {
        $this->costComponentList = $costComponentList;
        return $this;
    }

    /**
     * @return InventoryCostRevaluationCostComponentList
     */
    public function getCostComponentList(): InventoryCostRevaluationCostComponentList
    {
        return $this->costComponentList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return InventoryCostRevaluation
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setInternalId(string $internalId): InventoryCostRevaluation
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
     * @return InventoryCostRevaluation
     */
    public function setExternalId(string $externalId): InventoryCostRevaluation
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
