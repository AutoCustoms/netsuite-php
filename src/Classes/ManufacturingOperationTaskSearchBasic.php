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

class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $actualRunTime;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $actualSetupTime;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $completedQuantity;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedWork;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $id;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $inputQuantity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $laborResources;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $lagAmount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $lagType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $lagUnits;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $machineResources;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $manufacturingCostTemplate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $manufacturingWorkCenter;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $order;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $predecessor;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $remainingQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $runRate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $runTime;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $sequence;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $setupTime;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $workOrder;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actualRunTime" => "SearchDoubleField",
        "actualSetupTime" => "SearchDoubleField",
        "completedQuantity" => "SearchDoubleField",
        "endDate" => "SearchDateField",
        "estimatedWork" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "id" => "SearchLongField",
        "inputQuantity" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "laborResources" => "SearchDoubleField",
        "lagAmount" => "SearchDoubleField",
        "lagType" => "SearchEnumMultiSelectField",
        "lagUnits" => "SearchStringField",
        "machineResources" => "SearchDoubleField",
        "manufacturingCostTemplate" => "SearchMultiSelectField",
        "manufacturingWorkCenter" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "order" => "SearchDoubleField",
        "predecessor" => "SearchMultiSelectField",
        "remainingQuantity" => "SearchDoubleField",
        "runRate" => "SearchDoubleField",
        "runTime" => "SearchDoubleField",
        "sequence" => "SearchLongField",
        "setupTime" => "SearchDoubleField",
        "startDate" => "SearchDateField",
        "status" => "SearchMultiSelectField",
        "workOrder" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $actualRunTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setActualRunTime(SearchDoubleField $actualRunTime): ManufacturingOperationTaskSearchBasic
    {
        $this->actualRunTime = $actualRunTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualRunTime(): SearchDoubleField
    {
        return $this->actualRunTime;
    }

    /**
     * @param SearchDoubleField $actualSetupTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setActualSetupTime(SearchDoubleField $actualSetupTime): ManufacturingOperationTaskSearchBasic
    {
        $this->actualSetupTime = $actualSetupTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualSetupTime(): SearchDoubleField
    {
        return $this->actualSetupTime;
    }

    /**
     * @param SearchDoubleField $completedQuantity
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setCompletedQuantity(SearchDoubleField $completedQuantity): ManufacturingOperationTaskSearchBasic
    {
        $this->completedQuantity = $completedQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCompletedQuantity(): SearchDoubleField
    {
        return $this->completedQuantity;
    }

    /**
     * @param SearchDateField $endDate
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): ManufacturingOperationTaskSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchDoubleField $estimatedWork
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setEstimatedWork(SearchDoubleField $estimatedWork): ManufacturingOperationTaskSearchBasic
    {
        $this->estimatedWork = $estimatedWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWork(): SearchDoubleField
    {
        return $this->estimatedWork;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ManufacturingOperationTaskSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ManufacturingOperationTaskSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchLongField $id
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setId(SearchLongField $id): ManufacturingOperationTaskSearchBasic
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId(): SearchLongField
    {
        return $this->id;
    }

    /**
     * @param SearchDoubleField $inputQuantity
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setInputQuantity(SearchDoubleField $inputQuantity): ManufacturingOperationTaskSearchBasic
    {
        $this->inputQuantity = $inputQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInputQuantity(): SearchDoubleField
    {
        return $this->inputQuantity;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ManufacturingOperationTaskSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ManufacturingOperationTaskSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchDoubleField $laborResources
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLaborResources(SearchDoubleField $laborResources): ManufacturingOperationTaskSearchBasic
    {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLaborResources(): SearchDoubleField
    {
        return $this->laborResources;
    }

    /**
     * @param SearchDoubleField $lagAmount
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLagAmount(SearchDoubleField $lagAmount): ManufacturingOperationTaskSearchBasic
    {
        $this->lagAmount = $lagAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLagAmount(): SearchDoubleField
    {
        return $this->lagAmount;
    }

    /**
     * @param SearchEnumMultiSelectField $lagType
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLagType(SearchEnumMultiSelectField $lagType): ManufacturingOperationTaskSearchBasic
    {
        $this->lagType = $lagType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLagType(): SearchEnumMultiSelectField
    {
        return $this->lagType;
    }

    /**
     * @param SearchStringField $lagUnits
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setLagUnits(SearchStringField $lagUnits): ManufacturingOperationTaskSearchBasic
    {
        $this->lagUnits = $lagUnits;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLagUnits(): SearchStringField
    {
        return $this->lagUnits;
    }

    /**
     * @param SearchDoubleField $machineResources
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setMachineResources(SearchDoubleField $machineResources): ManufacturingOperationTaskSearchBasic
    {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getMachineResources(): SearchDoubleField
    {
        return $this->machineResources;
    }

    /**
     * @param SearchMultiSelectField $manufacturingCostTemplate
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setManufacturingCostTemplate(SearchMultiSelectField $manufacturingCostTemplate): ManufacturingOperationTaskSearchBasic
    {
        $this->manufacturingCostTemplate = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingCostTemplate(): SearchMultiSelectField
    {
        return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchMultiSelectField $manufacturingWorkCenter
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setManufacturingWorkCenter(SearchMultiSelectField $manufacturingWorkCenter): ManufacturingOperationTaskSearchBasic
    {
        $this->manufacturingWorkCenter = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingWorkCenter(): SearchMultiSelectField
    {
        return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchStringField $name
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setName(SearchStringField $name): ManufacturingOperationTaskSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchDoubleField $order
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setOrder(SearchDoubleField $order): ManufacturingOperationTaskSearchBasic
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOrder(): SearchDoubleField
    {
        return $this->order;
    }

    /**
     * @param SearchMultiSelectField $predecessor
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setPredecessor(SearchMultiSelectField $predecessor): ManufacturingOperationTaskSearchBasic
    {
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPredecessor(): SearchMultiSelectField
    {
        return $this->predecessor;
    }

    /**
     * @param SearchDoubleField $remainingQuantity
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setRemainingQuantity(SearchDoubleField $remainingQuantity): ManufacturingOperationTaskSearchBasic
    {
        $this->remainingQuantity = $remainingQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRemainingQuantity(): SearchDoubleField
    {
        return $this->remainingQuantity;
    }

    /**
     * @param SearchDoubleField $runRate
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setRunRate(SearchDoubleField $runRate): ManufacturingOperationTaskSearchBasic
    {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRunRate(): SearchDoubleField
    {
        return $this->runRate;
    }

    /**
     * @param SearchDoubleField $runTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setRunTime(SearchDoubleField $runTime): ManufacturingOperationTaskSearchBasic
    {
        $this->runTime = $runTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRunTime(): SearchDoubleField
    {
        return $this->runTime;
    }

    /**
     * @param SearchLongField $sequence
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setSequence(SearchLongField $sequence): ManufacturingOperationTaskSearchBasic
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSequence(): SearchLongField
    {
        return $this->sequence;
    }

    /**
     * @param SearchDoubleField $setupTime
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setSetupTime(SearchDoubleField $setupTime): ManufacturingOperationTaskSearchBasic
    {
        $this->setupTime = $setupTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSetupTime(): SearchDoubleField
    {
        return $this->setupTime;
    }

    /**
     * @param SearchDateField $startDate
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): ManufacturingOperationTaskSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

    /**
     * @param SearchMultiSelectField $status
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status): ManufacturingOperationTaskSearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStatus(): SearchMultiSelectField
    {
        return $this->status;
    }

    /**
     * @param SearchMultiSelectField $workOrder
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setWorkOrder(SearchMultiSelectField $workOrder): ManufacturingOperationTaskSearchBasic
    {
        $this->workOrder = $workOrder;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkOrder(): SearchMultiSelectField
    {
        return $this->workOrder;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ManufacturingOperationTaskSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
