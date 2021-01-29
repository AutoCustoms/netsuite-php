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

class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $actualRunTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $actualSetupTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $completedQuantity;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedWork;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $id;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $inputQuantity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $laborResources;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $lagAmount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $lagType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $lagUnits;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $machineResources;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $manufacturingCostTemplate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $manufacturingWorkCenter;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $order;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $predecessor;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $predecessorType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $remainingQuantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $runRate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $runTime;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $sequence;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $setupTime;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $workOrder;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actualRunTime" => "SearchColumnDoubleField[]",
        "actualSetupTime" => "SearchColumnDoubleField[]",
        "completedQuantity" => "SearchColumnDoubleField[]",
        "endDate" => "SearchColumnDateField[]",
        "estimatedWork" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "inputQuantity" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "laborResources" => "SearchColumnDoubleField[]",
        "lagAmount" => "SearchColumnDoubleField[]",
        "lagType" => "SearchColumnEnumSelectField[]",
        "lagUnits" => "SearchColumnStringField[]",
        "machineResources" => "SearchColumnDoubleField[]",
        "manufacturingCostTemplate" => "SearchColumnSelectField[]",
        "manufacturingWorkCenter" => "SearchColumnSelectField[]",
        "message" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "order" => "SearchColumnDoubleField[]",
        "predecessor" => "SearchColumnSelectField[]",
        "predecessorType" => "SearchColumnStringField[]",
        "remainingQuantity" => "SearchColumnDoubleField[]",
        "runRate" => "SearchColumnDoubleField[]",
        "runTime" => "SearchColumnDoubleField[]",
        "sequence" => "SearchColumnLongField[]",
        "setupTime" => "SearchColumnDoubleField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnSelectField[]",
        "workOrder" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $actualRunTime
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setActualRunTime(SearchColumnDoubleField $actualRunTime): ManufacturingOperationTaskSearchRowBasic
    {
        $this->actualRunTime[] = $actualRunTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualRunTime(): array
    {
        return $this->actualRunTime;
    }

    /**
     * @param SearchColumnDoubleField[] $actualSetupTime
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setActualSetupTime(SearchColumnDoubleField $actualSetupTime): ManufacturingOperationTaskSearchRowBasic
    {
        $this->actualSetupTime[] = $actualSetupTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualSetupTime(): array
    {
        return $this->actualSetupTime;
    }

    /**
     * @param SearchColumnDoubleField[] $completedQuantity
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setCompletedQuantity(SearchColumnDoubleField $completedQuantity): ManufacturingOperationTaskSearchRowBasic
    {
        $this->completedQuantity[] = $completedQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCompletedQuantity(): array
    {
        return $this->completedQuantity;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): ManufacturingOperationTaskSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWork
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setEstimatedWork(SearchColumnDoubleField $estimatedWork): ManufacturingOperationTaskSearchRowBasic
    {
        $this->estimatedWork[] = $estimatedWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWork(): array
    {
        return $this->estimatedWork;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ManufacturingOperationTaskSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setId(SearchColumnLongField $id): ManufacturingOperationTaskSearchRowBasic
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    /**
     * @param SearchColumnDoubleField[] $inputQuantity
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setInputQuantity(SearchColumnDoubleField $inputQuantity): ManufacturingOperationTaskSearchRowBasic
    {
        $this->inputQuantity[] = $inputQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getInputQuantity(): array
    {
        return $this->inputQuantity;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ManufacturingOperationTaskSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnDoubleField[] $laborResources
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setLaborResources(SearchColumnDoubleField $laborResources): ManufacturingOperationTaskSearchRowBasic
    {
        $this->laborResources[] = $laborResources;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLaborResources(): array
    {
        return $this->laborResources;
    }

    /**
     * @param SearchColumnDoubleField[] $lagAmount
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setLagAmount(SearchColumnDoubleField $lagAmount): ManufacturingOperationTaskSearchRowBasic
    {
        $this->lagAmount[] = $lagAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLagAmount(): array
    {
        return $this->lagAmount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $lagType
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setLagType(SearchColumnEnumSelectField $lagType): ManufacturingOperationTaskSearchRowBasic
    {
        $this->lagType[] = $lagType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLagType(): array
    {
        return $this->lagType;
    }

    /**
     * @param SearchColumnStringField[] $lagUnits
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setLagUnits(SearchColumnStringField $lagUnits): ManufacturingOperationTaskSearchRowBasic
    {
        $this->lagUnits[] = $lagUnits;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLagUnits(): array
    {
        return $this->lagUnits;
    }

    /**
     * @param SearchColumnDoubleField[] $machineResources
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setMachineResources(SearchColumnDoubleField $machineResources): ManufacturingOperationTaskSearchRowBasic
    {
        $this->machineResources[] = $machineResources;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMachineResources(): array
    {
        return $this->machineResources;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingCostTemplate
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setManufacturingCostTemplate(SearchColumnSelectField $manufacturingCostTemplate): ManufacturingOperationTaskSearchRowBasic
    {
        $this->manufacturingCostTemplate[] = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingCostTemplate(): array
    {
        return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingWorkCenter
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setManufacturingWorkCenter(SearchColumnSelectField $manufacturingWorkCenter): ManufacturingOperationTaskSearchRowBasic
    {
        $this->manufacturingWorkCenter[] = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingWorkCenter(): array
    {
        return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): ManufacturingOperationTaskSearchRowBasic
    {
        $this->message[] = $message;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage(): array
    {
        return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): ManufacturingOperationTaskSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnDoubleField[] $order
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setOrder(SearchColumnDoubleField $order): ManufacturingOperationTaskSearchRowBasic
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOrder(): array
    {
        return $this->order;
    }

    /**
     * @param SearchColumnSelectField[] $predecessor
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setPredecessor(SearchColumnSelectField $predecessor): ManufacturingOperationTaskSearchRowBasic
    {
        $this->predecessor[] = $predecessor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPredecessor(): array
    {
        return $this->predecessor;
    }

    /**
     * @param SearchColumnStringField[] $predecessorType
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setPredecessorType(SearchColumnStringField $predecessorType): ManufacturingOperationTaskSearchRowBasic
    {
        $this->predecessorType[] = $predecessorType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPredecessorType(): array
    {
        return $this->predecessorType;
    }

    /**
     * @param SearchColumnDoubleField[] $remainingQuantity
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setRemainingQuantity(SearchColumnDoubleField $remainingQuantity): ManufacturingOperationTaskSearchRowBasic
    {
        $this->remainingQuantity[] = $remainingQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRemainingQuantity(): array
    {
        return $this->remainingQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $runRate
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setRunRate(SearchColumnDoubleField $runRate): ManufacturingOperationTaskSearchRowBasic
    {
        $this->runRate[] = $runRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRunRate(): array
    {
        return $this->runRate;
    }

    /**
     * @param SearchColumnDoubleField[] $runTime
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setRunTime(SearchColumnDoubleField $runTime): ManufacturingOperationTaskSearchRowBasic
    {
        $this->runTime[] = $runTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRunTime(): array
    {
        return $this->runTime;
    }

    /**
     * @param SearchColumnLongField[] $sequence
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setSequence(SearchColumnLongField $sequence): ManufacturingOperationTaskSearchRowBasic
    {
        $this->sequence[] = $sequence;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSequence(): array
    {
        return $this->sequence;
    }

    /**
     * @param SearchColumnDoubleField[] $setupTime
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setSetupTime(SearchColumnDoubleField $setupTime): ManufacturingOperationTaskSearchRowBasic
    {
        $this->setupTime[] = $setupTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSetupTime(): array
    {
        return $this->setupTime;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): ManufacturingOperationTaskSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnSelectField[] $status
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setStatus(SearchColumnSelectField $status): ManufacturingOperationTaskSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnStringField[] $workOrder
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setWorkOrder(SearchColumnStringField $workOrder): ManufacturingOperationTaskSearchRowBasic
    {
        $this->workOrder[] = $workOrder;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getWorkOrder(): array
    {
        return $this->workOrder;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ManufacturingOperationTaskSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
