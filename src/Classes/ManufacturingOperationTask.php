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

class ManufacturingOperationTask extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $manufacturingWorkCenter;

    /**
     * @var RecordRef
     */
    protected RecordRef $manufacturingCostTemplate;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var int
     */
    protected int $operationSequence;

    /**
     * @var RecordRef
     */
    protected RecordRef $workOrder;

    /**
     * @var RecordRef
     */
    protected RecordRef $order;

    /**
     * @var ManufacturingOperationTaskStatus
     */
    protected ManufacturingOperationTaskStatus $status;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var float
     */
    protected float $estimatedWork;

    /**
     * @var float
     */
    protected float $actualWork;

    /**
     * @var float
     */
    protected float $remainingWork;

    /**
     * @var float
     */
    protected float $inputQuantity;

    /**
     * @var float
     */
    protected float $completedQuantity;

    /**
     * @var float
     */
    protected float $setupTime;

    /**
     * @var float
     */
    protected float $runRate;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var bool
     */
    protected bool $autoCalculateLag;

    /**
     * @var float
     */
    protected float $machineResources;

    /**
     * @var float
     */
    protected float $laborResources;

    /**
     * @var ManufacturingCostDetailList
     */
    protected ManufacturingCostDetailList $costDetailList;

    /**
     * @var ManufacturingOperationTaskPredecessorList
     */
    protected ManufacturingOperationTaskPredecessorList $predecessorList;

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
        "customForm" => "RecordRef",
        "manufacturingWorkCenter" => "RecordRef",
        "manufacturingCostTemplate" => "RecordRef",
        "title" => "string",
        "operationSequence" => "integer",
        "workOrder" => "RecordRef",
        "order" => "RecordRef",
        "status" => "ManufacturingOperationTaskStatus",
        "message" => "string",
        "estimatedWork" => "float",
        "actualWork" => "float",
        "remainingWork" => "float",
        "inputQuantity" => "float",
        "completedQuantity" => "float",
        "setupTime" => "float",
        "runRate" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "autoCalculateLag" => "boolean",
        "machineResources" => "float",
        "laborResources" => "float",
        "costDetailList" => "ManufacturingCostDetailList",
        "predecessorList" => "ManufacturingOperationTaskPredecessorList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return ManufacturingOperationTask
     */
    public function setCustomForm(RecordRef $customForm): ManufacturingOperationTask
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
     * @param RecordRef $manufacturingWorkCenter
     * @return ManufacturingOperationTask
     */
    public function setManufacturingWorkCenter(RecordRef $manufacturingWorkCenter): ManufacturingOperationTask
    {
        $this->manufacturingWorkCenter = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingWorkCenter(): RecordRef
    {
        return $this->manufacturingWorkCenter;
    }

    /**
     * @param RecordRef $manufacturingCostTemplate
     * @return ManufacturingOperationTask
     */
    public function setManufacturingCostTemplate(RecordRef $manufacturingCostTemplate): ManufacturingOperationTask
    {
        $this->manufacturingCostTemplate = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingCostTemplate(): RecordRef
    {
        return $this->manufacturingCostTemplate;
    }

    /**
     * @param string $title
     * @return ManufacturingOperationTask
     */
    public function setTitle(string $title): ManufacturingOperationTask
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param int $operationSequence
     * @return ManufacturingOperationTask
     */
    public function setOperationSequence(int $operationSequence): ManufacturingOperationTask
    {
        $this->operationSequence = $operationSequence;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperationSequence(): int
    {
        return $this->operationSequence;
    }

    /**
     * @param RecordRef $workOrder
     * @return ManufacturingOperationTask
     */
    public function setWorkOrder(RecordRef $workOrder): ManufacturingOperationTask
    {
        $this->workOrder = $workOrder;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkOrder(): RecordRef
    {
        return $this->workOrder;
    }

    /**
     * @param RecordRef $order
     * @return ManufacturingOperationTask
     */
    public function setOrder(RecordRef $order): ManufacturingOperationTask
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrder(): RecordRef
    {
        return $this->order;
    }

    /**
     * @param ManufacturingOperationTaskStatus $status
     * @return ManufacturingOperationTask
     */
    public function setStatus(ManufacturingOperationTaskStatus $status): ManufacturingOperationTask
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskStatus
     */
    public function getStatus(): ManufacturingOperationTaskStatus
    {
        return $this->status;
    }

    /**
     * @param string $message
     * @return ManufacturingOperationTask
     */
    public function setMessage(string $message): ManufacturingOperationTask
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param float $estimatedWork
     * @return ManufacturingOperationTask
     */
    public function setEstimatedWork(float $estimatedWork): ManufacturingOperationTask
    {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWork(): float
    {
        return $this->estimatedWork;
    }

    /**
     * @param float $actualWork
     * @return ManufacturingOperationTask
     */
    public function setActualWork(float $actualWork): ManufacturingOperationTask
    {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * @return float
     */
    public function getActualWork(): float
    {
        return $this->actualWork;
    }

    /**
     * @param float $remainingWork
     * @return ManufacturingOperationTask
     */
    public function setRemainingWork(float $remainingWork): ManufacturingOperationTask
    {
        $this->remainingWork = $remainingWork;
        return $this;
    }

    /**
     * @return float
     */
    public function getRemainingWork(): float
    {
        return $this->remainingWork;
    }

    /**
     * @param float $inputQuantity
     * @return ManufacturingOperationTask
     */
    public function setInputQuantity(float $inputQuantity): ManufacturingOperationTask
    {
        $this->inputQuantity = $inputQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getInputQuantity(): float
    {
        return $this->inputQuantity;
    }

    /**
     * @param float $completedQuantity
     * @return ManufacturingOperationTask
     */
    public function setCompletedQuantity(float $completedQuantity): ManufacturingOperationTask
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
     * @param float $setupTime
     * @return ManufacturingOperationTask
     */
    public function setSetupTime(float $setupTime): ManufacturingOperationTask
    {
        $this->setupTime = $setupTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getSetupTime(): float
    {
        return $this->setupTime;
    }

    /**
     * @param float $runRate
     * @return ManufacturingOperationTask
     */
    public function setRunRate(float $runRate): ManufacturingOperationTask
    {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRunRate(): float
    {
        return $this->runRate;
    }

    /**
     * @param string $startDate
     * @return ManufacturingOperationTask
     */
    public function setStartDate(string $startDate): ManufacturingOperationTask
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
     * @return ManufacturingOperationTask
     */
    public function setEndDate(string $endDate): ManufacturingOperationTask
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
     * @param bool $autoCalculateLag
     * @return ManufacturingOperationTask
     */
    public function setAutoCalculateLag(bool $autoCalculateLag): ManufacturingOperationTask
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
     * @param float $machineResources
     * @return ManufacturingOperationTask
     */
    public function setMachineResources(float $machineResources): ManufacturingOperationTask
    {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * @return float
     */
    public function getMachineResources(): float
    {
        return $this->machineResources;
    }

    /**
     * @param float $laborResources
     * @return ManufacturingOperationTask
     */
    public function setLaborResources(float $laborResources): ManufacturingOperationTask
    {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * @return float
     */
    public function getLaborResources(): float
    {
        return $this->laborResources;
    }

    /**
     * @param ManufacturingCostDetailList $costDetailList
     * @return ManufacturingOperationTask
     */
    public function setCostDetailList(ManufacturingCostDetailList $costDetailList): ManufacturingOperationTask
    {
        $this->costDetailList = $costDetailList;
        return $this;
    }

    /**
     * @return ManufacturingCostDetailList
     */
    public function getCostDetailList(): ManufacturingCostDetailList
    {
        return $this->costDetailList;
    }

    /**
     * @param ManufacturingOperationTaskPredecessorList $predecessorList
     * @return ManufacturingOperationTask
     */
    public function setPredecessorList(ManufacturingOperationTaskPredecessorList $predecessorList): ManufacturingOperationTask
    {
        $this->predecessorList = $predecessorList;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskPredecessorList
     */
    public function getPredecessorList(): ManufacturingOperationTaskPredecessorList
    {
        return $this->predecessorList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ManufacturingOperationTask
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ManufacturingOperationTask
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
     * @return ManufacturingOperationTask
     */
    public function setInternalId(string $internalId): ManufacturingOperationTask
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
     * @return ManufacturingOperationTask
     */
    public function setExternalId(string $externalId): ManufacturingOperationTask
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
