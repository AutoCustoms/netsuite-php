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

class WorkOrderCompletion extends Record {
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
    protected float $scrapQuantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var bool
     */
    protected bool $isBackflush;

    /**
     * @var float
     */
    protected float $orderQuantity;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

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
     * @var RecordRef
     */
    protected RecordRef $startOperation;

    /**
     * @var RecordRef
     */
    protected RecordRef $endOperation;

    /**
     * @var float
     */
    protected float $completedQuantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $manufacturingRouting;

    /**
     * @var WorkOrderCompletionComponentList
     */
    protected WorkOrderCompletionComponentList $componentList;

    /**
     * @var WorkOrderCompletionOperationList
     */
    protected WorkOrderCompletionOperationList $operationList;

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
        "scrapQuantity" => "float",
        "units" => "RecordRef",
        "isBackflush" => "boolean",
        "orderQuantity" => "float",
        "total" => "float",
        "createdFrom" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "startOperation" => "RecordRef",
        "endOperation" => "RecordRef",
        "completedQuantity" => "float",
        "manufacturingRouting" => "RecordRef",
        "componentList" => "WorkOrderCompletionComponentList",
        "operationList" => "WorkOrderCompletionOperationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return WorkOrderCompletion
     */
    public function setCreatedDate(string $createdDate): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setLastModifiedDate(string $lastModifiedDate): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setCustomForm(RecordRef $customForm): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setTranId(string $tranId): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setItem(RecordRef $item): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setQuantity(float $quantity): WorkOrderCompletion
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
     * @param float $scrapQuantity
     * @return WorkOrderCompletion
     */
    public function setScrapQuantity(float $scrapQuantity): WorkOrderCompletion
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
     * @param RecordRef $units
     * @return WorkOrderCompletion
     */
    public function setUnits(RecordRef $units): WorkOrderCompletion
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits(): RecordRef
    {
        return $this->units;
    }

    /**
     * @param bool $isBackflush
     * @return WorkOrderCompletion
     */
    public function setIsBackflush(bool $isBackflush): WorkOrderCompletion
    {
        $this->isBackflush = $isBackflush;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBackflush(): bool
    {
        return $this->isBackflush;
    }

    /**
     * @param float $orderQuantity
     * @return WorkOrderCompletion
     */
    public function setOrderQuantity(float $orderQuantity): WorkOrderCompletion
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
     * @param float $total
     * @return WorkOrderCompletion
     */
    public function setTotal(float $total): WorkOrderCompletion
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
     * @param RecordRef $createdFrom
     * @return WorkOrderCompletion
     */
    public function setCreatedFrom(RecordRef $createdFrom): WorkOrderCompletion
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
     * @param InventoryDetail $inventoryDetail
     * @return WorkOrderCompletion
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): WorkOrderCompletion
    {
        $this->inventoryDetail = $inventoryDetail;
        return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getInventoryDetail(): InventoryDetail
    {
        return $this->inventoryDetail;
    }

    /**
     * @param string $tranDate
     * @return WorkOrderCompletion
     */
    public function setTranDate(string $tranDate): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setPostingPeriod(RecordRef $postingPeriod): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setMemo(string $memo): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setSubsidiary(RecordRef $subsidiary): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setDepartment(RecordRef $department): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setClass(RecordRef $class): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setLocation(RecordRef $location): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setRevision(RecordRef $revision): WorkOrderCompletion
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
     * @param RecordRef $startOperation
     * @return WorkOrderCompletion
     */
    public function setStartOperation(RecordRef $startOperation): WorkOrderCompletion
    {
        $this->startOperation = $startOperation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStartOperation(): RecordRef
    {
        return $this->startOperation;
    }

    /**
     * @param RecordRef $endOperation
     * @return WorkOrderCompletion
     */
    public function setEndOperation(RecordRef $endOperation): WorkOrderCompletion
    {
        $this->endOperation = $endOperation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEndOperation(): RecordRef
    {
        return $this->endOperation;
    }

    /**
     * @param float $completedQuantity
     * @return WorkOrderCompletion
     */
    public function setCompletedQuantity(float $completedQuantity): WorkOrderCompletion
    {
        $this->completedQuantity = $completedQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompletedQuantity(): float
    {
        return $this->completedQuantity;
    }

    /**
     * @param RecordRef $manufacturingRouting
     * @return WorkOrderCompletion
     */
    public function setManufacturingRouting(RecordRef $manufacturingRouting): WorkOrderCompletion
    {
        $this->manufacturingRouting = $manufacturingRouting;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingRouting(): RecordRef
    {
        return $this->manufacturingRouting;
    }

    /**
     * @param WorkOrderCompletionComponentList $componentList
     * @return WorkOrderCompletion
     */
    public function setComponentList(WorkOrderCompletionComponentList $componentList): WorkOrderCompletion
    {
        $this->componentList = $componentList;
        return $this;
    }

    /**
     * @return WorkOrderCompletionComponentList
     */
    public function getComponentList(): WorkOrderCompletionComponentList
    {
        return $this->componentList;
    }

    /**
     * @param WorkOrderCompletionOperationList $operationList
     * @return WorkOrderCompletion
     */
    public function setOperationList(WorkOrderCompletionOperationList $operationList): WorkOrderCompletion
    {
        $this->operationList = $operationList;
        return $this;
    }

    /**
     * @return WorkOrderCompletionOperationList
     */
    public function getOperationList(): WorkOrderCompletionOperationList
    {
        return $this->operationList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return WorkOrderCompletion
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setInternalId(string $internalId): WorkOrderCompletion
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
     * @return WorkOrderCompletion
     */
    public function setExternalId(string $externalId): WorkOrderCompletion
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
