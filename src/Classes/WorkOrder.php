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

class WorkOrder extends Record {
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
    protected RecordRef $manufacturingRouting;

    /**
     * @var bool
     */
    protected bool $autoCalculateLag;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $assemblyItem;

    /**
     * @var bool
     */
    protected bool $expandAssembly;

    /**
     * @var bool
     */
    protected bool $isWip;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $billOfMaterials;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var WorkOrderOrderStatus
     */
    protected WorkOrderOrderStatus $orderStatus;

    /**
     * @var bool
     */
    protected bool $firmed;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var WorkOrderItemList
     */
    protected WorkOrderItemList $itemList;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var WorkOrderSchedulingMethod
     */
    protected WorkOrderSchedulingMethod $schedulingMethod;

    /**
     * @var SalesTeamList
     */
    protected SalesTeamList $salesTeamList;

    /**
     * @var PartnersList
     */
    protected PartnersList $partnersList;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var string
     */
    protected string $sourceTransactionId;

    /**
     * @var int
     */
    protected int $sourceTransactionLine;

    /**
     * @var bool
     */
    protected bool $specialOrder;

    /**
     * @var float
     */
    protected float $buildable;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $options;

    /**
     * @var float
     */
    protected float $built;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $revision;

    /**
     * @var RecordRef
     */
    protected RecordRef $billOfMaterialsRevision;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var string
     */
    protected string $requestedDate;

    /**
     * @var string
     */
    protected string $actualProductionStartDate;

    /**
     * @var string
     */
    protected string $actualProductionEndDate;

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
        "manufacturingRouting" => "RecordRef",
        "autoCalculateLag" => "boolean",
        "status" => "string",
        "tranId" => "string",
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "assemblyItem" => "RecordRef",
        "expandAssembly" => "boolean",
        "isWip" => "boolean",
        "quantity" => "float",
        "billOfMaterials" => "RecordRef",
        "units" => "RecordRef",
        "tranDate" => "dateTime",
        "orderStatus" => "WorkOrderOrderStatus",
        "firmed" => "boolean",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "itemList" => "WorkOrderItemList",
        "location" => "RecordRef",
        "schedulingMethod" => "WorkOrderSchedulingMethod",
        "salesTeamList" => "SalesTeamList",
        "partnersList" => "PartnersList",
        "createdFrom" => "RecordRef",
        "sourceTransactionId" => "string",
        "sourceTransactionLine" => "integer",
        "specialOrder" => "boolean",
        "buildable" => "float",
        "options" => "CustomFieldList",
        "built" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "revision" => "RecordRef",
        "billOfMaterialsRevision" => "RecordRef",
        "subsidiary" => "RecordRef",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "requestedDate" => "dateTime",
        "actualProductionStartDate" => "dateTime",
        "actualProductionEndDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return WorkOrder
     */
    public function setCreatedDate(string $createdDate): WorkOrder
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
     * @return WorkOrder
     */
    public function setLastModifiedDate(string $lastModifiedDate): WorkOrder
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
     * @return WorkOrder
     */
    public function setCustomForm(RecordRef $customForm): WorkOrder
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
     * @param RecordRef $manufacturingRouting
     * @return WorkOrder
     */
    public function setManufacturingRouting(RecordRef $manufacturingRouting): WorkOrder
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
     * @param bool $autoCalculateLag
     * @return WorkOrder
     */
    public function setAutoCalculateLag(bool $autoCalculateLag): WorkOrder
    {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoCalculateLag(): bool
    {
        return $this->autoCalculateLag;
    }

    /**
     * @param string $status
     * @return WorkOrder
     */
    public function setStatus(string $status): WorkOrder
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
     * @param string $tranId
     * @return WorkOrder
     */
    public function setTranId(string $tranId): WorkOrder
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
     * @param RecordRef $entity
     * @return WorkOrder
     */
    public function setEntity(RecordRef $entity): WorkOrder
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param RecordRef $job
     * @return WorkOrder
     */
    public function setJob(RecordRef $job): WorkOrder
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJob(): RecordRef
    {
        return $this->job;
    }

    /**
     * @param RecordRef $assemblyItem
     * @return WorkOrder
     */
    public function setAssemblyItem(RecordRef $assemblyItem): WorkOrder
    {
        $this->assemblyItem = $assemblyItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssemblyItem(): RecordRef
    {
        return $this->assemblyItem;
    }

    /**
     * @param bool $expandAssembly
     * @return WorkOrder
     */
    public function setExpandAssembly(bool $expandAssembly): WorkOrder
    {
        $this->expandAssembly = $expandAssembly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExpandAssembly(): bool
    {
        return $this->expandAssembly;
    }

    /**
     * @param bool $isWip
     * @return WorkOrder
     */
    public function setIsWip(bool $isWip): WorkOrder
    {
        $this->isWip = $isWip;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsWip(): bool
    {
        return $this->isWip;
    }

    /**
     * @param float $quantity
     * @return WorkOrder
     */
    public function setQuantity(float $quantity): WorkOrder
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
     * @param RecordRef $billOfMaterials
     * @return WorkOrder
     */
    public function setBillOfMaterials(RecordRef $billOfMaterials): WorkOrder
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterials(): RecordRef
    {
        return $this->billOfMaterials;
    }

    /**
     * @param RecordRef $units
     * @return WorkOrder
     */
    public function setUnits(RecordRef $units): WorkOrder
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
     * @param string $tranDate
     * @return WorkOrder
     */
    public function setTranDate(string $tranDate): WorkOrder
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
     * @param WorkOrderOrderStatus $orderStatus
     * @return WorkOrder
     */
    public function setOrderStatus(WorkOrderOrderStatus $orderStatus): WorkOrder
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return WorkOrderOrderStatus
     */
    public function getOrderStatus(): WorkOrderOrderStatus
    {
        return $this->orderStatus;
    }

    /**
     * @param bool $firmed
     * @return WorkOrder
     */
    public function setFirmed(bool $firmed): WorkOrder
    {
        $this->firmed = $firmed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFirmed(): bool
    {
        return $this->firmed;
    }

    /**
     * @param string $memo
     * @return WorkOrder
     */
    public function setMemo(string $memo): WorkOrder
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
     * @param RecordRef $department
     * @return WorkOrder
     */
    public function setDepartment(RecordRef $department): WorkOrder
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
     * @return WorkOrder
     */
    public function setClass(RecordRef $class): WorkOrder
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
     * @param WorkOrderItemList $itemList
     * @return WorkOrder
     */
    public function setItemList(WorkOrderItemList $itemList): WorkOrder
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return WorkOrderItemList
     */
    public function getItemList(): WorkOrderItemList
    {
        return $this->itemList;
    }

    /**
     * @param RecordRef $location
     * @return WorkOrder
     */
    public function setLocation(RecordRef $location): WorkOrder
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
     * @param WorkOrderSchedulingMethod $schedulingMethod
     * @return WorkOrder
     */
    public function setSchedulingMethod(WorkOrderSchedulingMethod $schedulingMethod): WorkOrder
    {
        $this->schedulingMethod = $schedulingMethod;
        return $this;
    }

    /**
     * @return WorkOrderSchedulingMethod
     */
    public function getSchedulingMethod(): WorkOrderSchedulingMethod
    {
        return $this->schedulingMethod;
    }

    /**
     * @param SalesTeamList $salesTeamList
     * @return WorkOrder
     */
    public function setSalesTeamList(SalesTeamList $salesTeamList): WorkOrder
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return SalesTeamList
     */
    public function getSalesTeamList(): SalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param PartnersList $partnersList
     * @return WorkOrder
     */
    public function setPartnersList(PartnersList $partnersList): WorkOrder
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return PartnersList
     */
    public function getPartnersList(): PartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param RecordRef $createdFrom
     * @return WorkOrder
     */
    public function setCreatedFrom(RecordRef $createdFrom): WorkOrder
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
     * @param string $sourceTransactionId
     * @return WorkOrder
     */
    public function setSourceTransactionId(string $sourceTransactionId): WorkOrder
    {
        $this->sourceTransactionId = $sourceTransactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceTransactionId(): string
    {
        return $this->sourceTransactionId;
    }

    /**
     * @param int $sourceTransactionLine
     * @return WorkOrder
     */
    public function setSourceTransactionLine(int $sourceTransactionLine): WorkOrder
    {
        $this->sourceTransactionLine = $sourceTransactionLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getSourceTransactionLine(): int
    {
        return $this->sourceTransactionLine;
    }

    /**
     * @param bool $specialOrder
     * @return WorkOrder
     */
    public function setSpecialOrder(bool $specialOrder): WorkOrder
    {
        $this->specialOrder = $specialOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSpecialOrder(): bool
    {
        return $this->specialOrder;
    }

    /**
     * @param float $buildable
     * @return WorkOrder
     */
    public function setBuildable(float $buildable): WorkOrder
    {
        $this->buildable = $buildable;
        return $this;
    }

    /**
     * @return float
     */
    public function getBuildable(): float
    {
        return $this->buildable;
    }

    /**
     * @param CustomFieldList $options
     * @return WorkOrder
     */
    public function setOptions(CustomFieldList $options): WorkOrder
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getOptions(): CustomFieldList
    {
        return $this->options;
    }

    /**
     * @param float $built
     * @return WorkOrder
     */
    public function setBuilt(float $built): WorkOrder
    {
        $this->built = $built;
        return $this;
    }

    /**
     * @return float
     */
    public function getBuilt(): float
    {
        return $this->built;
    }

    /**
     * @param string $startDate
     * @return WorkOrder
     */
    public function setStartDate(string $startDate): WorkOrder
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return WorkOrder
     */
    public function setEndDate(string $endDate): WorkOrder
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param RecordRef $revision
     * @return WorkOrder
     */
    public function setRevision(RecordRef $revision): WorkOrder
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
     * @param RecordRef $billOfMaterialsRevision
     * @return WorkOrder
     */
    public function setBillOfMaterialsRevision(RecordRef $billOfMaterialsRevision): WorkOrder
    {
        $this->billOfMaterialsRevision = $billOfMaterialsRevision;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterialsRevision(): RecordRef
    {
        return $this->billOfMaterialsRevision;
    }

    /**
     * @param RecordRef $subsidiary
     * @return WorkOrder
     */
    public function setSubsidiary(RecordRef $subsidiary): WorkOrder
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
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return WorkOrder
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): WorkOrder
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
     * @param string $requestedDate
     * @return WorkOrder
     */
    public function setRequestedDate(string $requestedDate): WorkOrder
    {
        $this->requestedDate = $requestedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedDate(): string
    {
        return $this->requestedDate;
    }

    /**
     * @param string $actualProductionStartDate
     * @return WorkOrder
     */
    public function setActualProductionStartDate(string $actualProductionStartDate): WorkOrder
    {
        $this->actualProductionStartDate = $actualProductionStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualProductionStartDate(): string
    {
        return $this->actualProductionStartDate;
    }

    /**
     * @param string $actualProductionEndDate
     * @return WorkOrder
     */
    public function setActualProductionEndDate(string $actualProductionEndDate): WorkOrder
    {
        $this->actualProductionEndDate = $actualProductionEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualProductionEndDate(): string
    {
        return $this->actualProductionEndDate;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return WorkOrder
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): WorkOrder
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
     * @return WorkOrder
     */
    public function setInternalId(string $internalId): WorkOrder
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
     * @return WorkOrder
     */
    public function setExternalId(string $externalId): WorkOrder
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
