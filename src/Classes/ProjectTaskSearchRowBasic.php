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

class ProjectTaskSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $actualWork;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $company;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $constraintType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $contact;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $cost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costBase;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costBaseBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costBaseVariance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costVariance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costVariancePercent;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDateBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $endDateVariance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedWork;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedWorkBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedWorkVariance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedWorkVariancePercent;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $finishByDate;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $id;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isMilestone;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSummaryTask;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $nonBillableTask;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $parent;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $percentWorkComplete;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $plannedWork;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $plannedWorkBaseline;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $predecessor;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $predecessorLagDays;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $predecessors;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $predecessorType;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $priority;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $remainingWork;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDateBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $startDateVariance;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $successor;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $successorType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actualWork" => "SearchColumnDoubleField[]",
        "company" => "SearchColumnSelectField[]",
        "constraintType" => "SearchColumnEnumSelectField[]",
        "contact" => "SearchColumnSelectField[]",
        "cost" => "SearchColumnDoubleField[]",
        "costBase" => "SearchColumnDoubleField[]",
        "costBaseBaseline" => "SearchColumnDoubleField[]",
        "costBaseline" => "SearchColumnDoubleField[]",
        "costBaseVariance" => "SearchColumnDoubleField[]",
        "costVariance" => "SearchColumnDoubleField[]",
        "costVariancePercent" => "SearchColumnDoubleField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "endDateBaseline" => "SearchColumnDateField[]",
        "endDateVariance" => "SearchColumnDoubleField[]",
        "estimatedWork" => "SearchColumnDoubleField[]",
        "estimatedWorkBaseline" => "SearchColumnDoubleField[]",
        "estimatedWorkVariance" => "SearchColumnDoubleField[]",
        "estimatedWorkVariancePercent" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "finishByDate" => "SearchColumnDateField[]",
        "id" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isMilestone" => "SearchColumnBooleanField[]",
        "isSummaryTask" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "message" => "SearchColumnStringField[]",
        "nonBillableTask" => "SearchColumnBooleanField[]",
        "owner" => "SearchColumnSelectField[]",
        "parent" => "SearchColumnSelectField[]",
        "percentWorkComplete" => "SearchColumnDoubleField[]",
        "plannedWork" => "SearchColumnDoubleField[]",
        "plannedWorkBaseline" => "SearchColumnDoubleField[]",
        "predecessor" => "SearchColumnSelectField[]",
        "predecessorLagDays" => "SearchColumnDoubleField[]",
        "predecessors" => "SearchColumnStringField[]",
        "predecessorType" => "SearchColumnStringField[]",
        "priority" => "SearchColumnEnumSelectField[]",
        "remainingWork" => "SearchColumnDoubleField[]",
        "startDate" => "SearchColumnDateField[]",
        "startDateBaseline" => "SearchColumnDateField[]",
        "startDateVariance" => "SearchColumnDoubleField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "successor" => "SearchColumnSelectField[]",
        "successorType" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $actualWork
     * @return ProjectTaskSearchRowBasic
     */
    public function setActualWork(SearchColumnDoubleField $actualWork): ProjectTaskSearchRowBasic
    {
        $this->actualWork[] = $actualWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualWork(): array
    {
        return $this->actualWork;
    }

    /**
     * @param SearchColumnSelectField[] $company
     * @return ProjectTaskSearchRowBasic
     */
    public function setCompany(SearchColumnSelectField $company): ProjectTaskSearchRowBasic
    {
        $this->company[] = $company;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCompany(): array
    {
        return $this->company;
    }

    /**
     * @param SearchColumnEnumSelectField[] $constraintType
     * @return ProjectTaskSearchRowBasic
     */
    public function setConstraintType(SearchColumnEnumSelectField $constraintType): ProjectTaskSearchRowBasic
    {
        $this->constraintType[] = $constraintType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getConstraintType(): array
    {
        return $this->constraintType;
    }

    /**
     * @param SearchColumnSelectField[] $contact
     * @return ProjectTaskSearchRowBasic
     */
    public function setContact(SearchColumnSelectField $contact): ProjectTaskSearchRowBasic
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getContact(): array
    {
        return $this->contact;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return ProjectTaskSearchRowBasic
     */
    public function setCost(SearchColumnDoubleField $cost): ProjectTaskSearchRowBasic
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost(): array
    {
        return $this->cost;
    }

    /**
     * @param SearchColumnDoubleField[] $costBase
     * @return ProjectTaskSearchRowBasic
     */
    public function setCostBase(SearchColumnDoubleField $costBase): ProjectTaskSearchRowBasic
    {
        $this->costBase[] = $costBase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBase(): array
    {
        return $this->costBase;
    }

    /**
     * @param SearchColumnDoubleField[] $costBaseBaseline
     * @return ProjectTaskSearchRowBasic
     */
    public function setCostBaseBaseline(SearchColumnDoubleField $costBaseBaseline): ProjectTaskSearchRowBasic
    {
        $this->costBaseBaseline[] = $costBaseBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBaseBaseline(): array
    {
        return $this->costBaseBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $costBaseline
     * @return ProjectTaskSearchRowBasic
     */
    public function setCostBaseline(SearchColumnDoubleField $costBaseline): ProjectTaskSearchRowBasic
    {
        $this->costBaseline[] = $costBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBaseline(): array
    {
        return $this->costBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $costBaseVariance
     * @return ProjectTaskSearchRowBasic
     */
    public function setCostBaseVariance(SearchColumnDoubleField $costBaseVariance): ProjectTaskSearchRowBasic
    {
        $this->costBaseVariance[] = $costBaseVariance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostBaseVariance(): array
    {
        return $this->costBaseVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $costVariance
     * @return ProjectTaskSearchRowBasic
     */
    public function setCostVariance(SearchColumnDoubleField $costVariance): ProjectTaskSearchRowBasic
    {
        $this->costVariance[] = $costVariance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostVariance(): array
    {
        return $this->costVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $costVariancePercent
     * @return ProjectTaskSearchRowBasic
     */
    public function setCostVariancePercent(SearchColumnDoubleField $costVariancePercent): ProjectTaskSearchRowBasic
    {
        $this->costVariancePercent[] = $costVariancePercent;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostVariancePercent(): array
    {
        return $this->costVariancePercent;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return ProjectTaskSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): ProjectTaskSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return ProjectTaskSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): ProjectTaskSearchRowBasic
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
     * @param SearchColumnDateField[] $endDateBaseline
     * @return ProjectTaskSearchRowBasic
     */
    public function setEndDateBaseline(SearchColumnDateField $endDateBaseline): ProjectTaskSearchRowBasic
    {
        $this->endDateBaseline[] = $endDateBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDateBaseline(): array
    {
        return $this->endDateBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $endDateVariance
     * @return ProjectTaskSearchRowBasic
     */
    public function setEndDateVariance(SearchColumnDoubleField $endDateVariance): ProjectTaskSearchRowBasic
    {
        $this->endDateVariance[] = $endDateVariance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEndDateVariance(): array
    {
        return $this->endDateVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWork
     * @return ProjectTaskSearchRowBasic
     */
    public function setEstimatedWork(SearchColumnDoubleField $estimatedWork): ProjectTaskSearchRowBasic
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
     * @param SearchColumnDoubleField[] $estimatedWorkBaseline
     * @return ProjectTaskSearchRowBasic
     */
    public function setEstimatedWorkBaseline(SearchColumnDoubleField $estimatedWorkBaseline): ProjectTaskSearchRowBasic
    {
        $this->estimatedWorkBaseline[] = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkBaseline(): array
    {
        return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWorkVariance
     * @return ProjectTaskSearchRowBasic
     */
    public function setEstimatedWorkVariance(SearchColumnDoubleField $estimatedWorkVariance): ProjectTaskSearchRowBasic
    {
        $this->estimatedWorkVariance[] = $estimatedWorkVariance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkVariance(): array
    {
        return $this->estimatedWorkVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedWorkVariancePercent
     * @return ProjectTaskSearchRowBasic
     */
    public function setEstimatedWorkVariancePercent(SearchColumnDoubleField $estimatedWorkVariancePercent): ProjectTaskSearchRowBasic
    {
        $this->estimatedWorkVariancePercent[] = $estimatedWorkVariancePercent;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedWorkVariancePercent(): array
    {
        return $this->estimatedWorkVariancePercent;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ProjectTaskSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ProjectTaskSearchRowBasic
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
     * @param SearchColumnDateField[] $finishByDate
     * @return ProjectTaskSearchRowBasic
     */
    public function setFinishByDate(SearchColumnDateField $finishByDate): ProjectTaskSearchRowBasic
    {
        $this->finishByDate[] = $finishByDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFinishByDate(): array
    {
        return $this->finishByDate;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return ProjectTaskSearchRowBasic
     */
    public function setId(SearchColumnLongField $id): ProjectTaskSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return ProjectTaskSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ProjectTaskSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isMilestone
     * @return ProjectTaskSearchRowBasic
     */
    public function setIsMilestone(SearchColumnBooleanField $isMilestone): ProjectTaskSearchRowBasic
    {
        $this->isMilestone[] = $isMilestone;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsMilestone(): array
    {
        return $this->isMilestone;
    }

    /**
     * @param SearchColumnBooleanField[] $isSummaryTask
     * @return ProjectTaskSearchRowBasic
     */
    public function setIsSummaryTask(SearchColumnBooleanField $isSummaryTask): ProjectTaskSearchRowBasic
    {
        $this->isSummaryTask[] = $isSummaryTask;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSummaryTask(): array
    {
        return $this->isSummaryTask;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return ProjectTaskSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): ProjectTaskSearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return ProjectTaskSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): ProjectTaskSearchRowBasic
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
     * @param SearchColumnBooleanField[] $nonBillableTask
     * @return ProjectTaskSearchRowBasic
     */
    public function setNonBillableTask(SearchColumnBooleanField $nonBillableTask): ProjectTaskSearchRowBasic
    {
        $this->nonBillableTask[] = $nonBillableTask;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNonBillableTask(): array
    {
        return $this->nonBillableTask;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return ProjectTaskSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): ProjectTaskSearchRowBasic
    {
        $this->owner[] = $owner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner(): array
    {
        return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return ProjectTaskSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): ProjectTaskSearchRowBasic
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent(): array
    {
        return $this->parent;
    }

    /**
     * @param SearchColumnDoubleField[] $percentWorkComplete
     * @return ProjectTaskSearchRowBasic
     */
    public function setPercentWorkComplete(SearchColumnDoubleField $percentWorkComplete): ProjectTaskSearchRowBasic
    {
        $this->percentWorkComplete[] = $percentWorkComplete;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentWorkComplete(): array
    {
        return $this->percentWorkComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $plannedWork
     * @return ProjectTaskSearchRowBasic
     */
    public function setPlannedWork(SearchColumnDoubleField $plannedWork): ProjectTaskSearchRowBasic
    {
        $this->plannedWork[] = $plannedWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPlannedWork(): array
    {
        return $this->plannedWork;
    }

    /**
     * @param SearchColumnDoubleField[] $plannedWorkBaseline
     * @return ProjectTaskSearchRowBasic
     */
    public function setPlannedWorkBaseline(SearchColumnDoubleField $plannedWorkBaseline): ProjectTaskSearchRowBasic
    {
        $this->plannedWorkBaseline[] = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPlannedWorkBaseline(): array
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param SearchColumnSelectField[] $predecessor
     * @return ProjectTaskSearchRowBasic
     */
    public function setPredecessor(SearchColumnSelectField $predecessor): ProjectTaskSearchRowBasic
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
     * @param SearchColumnDoubleField[] $predecessorLagDays
     * @return ProjectTaskSearchRowBasic
     */
    public function setPredecessorLagDays(SearchColumnDoubleField $predecessorLagDays): ProjectTaskSearchRowBasic
    {
        $this->predecessorLagDays[] = $predecessorLagDays;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPredecessorLagDays(): array
    {
        return $this->predecessorLagDays;
    }

    /**
     * @param SearchColumnStringField[] $predecessors
     * @return ProjectTaskSearchRowBasic
     */
    public function setPredecessors(SearchColumnStringField $predecessors): ProjectTaskSearchRowBasic
    {
        $this->predecessors[] = $predecessors;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPredecessors(): array
    {
        return $this->predecessors;
    }

    /**
     * @param SearchColumnStringField[] $predecessorType
     * @return ProjectTaskSearchRowBasic
     */
    public function setPredecessorType(SearchColumnStringField $predecessorType): ProjectTaskSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $priority
     * @return ProjectTaskSearchRowBasic
     */
    public function setPriority(SearchColumnEnumSelectField $priority): ProjectTaskSearchRowBasic
    {
        $this->priority[] = $priority;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPriority(): array
    {
        return $this->priority;
    }

    /**
     * @param SearchColumnDoubleField[] $remainingWork
     * @return ProjectTaskSearchRowBasic
     */
    public function setRemainingWork(SearchColumnDoubleField $remainingWork): ProjectTaskSearchRowBasic
    {
        $this->remainingWork[] = $remainingWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRemainingWork(): array
    {
        return $this->remainingWork;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return ProjectTaskSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): ProjectTaskSearchRowBasic
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
     * @param SearchColumnDateField[] $startDateBaseline
     * @return ProjectTaskSearchRowBasic
     */
    public function setStartDateBaseline(SearchColumnDateField $startDateBaseline): ProjectTaskSearchRowBasic
    {
        $this->startDateBaseline[] = $startDateBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDateBaseline(): array
    {
        return $this->startDateBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $startDateVariance
     * @return ProjectTaskSearchRowBasic
     */
    public function setStartDateVariance(SearchColumnDoubleField $startDateVariance): ProjectTaskSearchRowBasic
    {
        $this->startDateVariance[] = $startDateVariance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getStartDateVariance(): array
    {
        return $this->startDateVariance;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return ProjectTaskSearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): ProjectTaskSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnSelectField[] $successor
     * @return ProjectTaskSearchRowBasic
     */
    public function setSuccessor(SearchColumnSelectField $successor): ProjectTaskSearchRowBasic
    {
        $this->successor[] = $successor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSuccessor(): array
    {
        return $this->successor;
    }

    /**
     * @param SearchColumnStringField[] $successorType
     * @return ProjectTaskSearchRowBasic
     */
    public function setSuccessorType(SearchColumnStringField $successorType): ProjectTaskSearchRowBasic
    {
        $this->successorType[] = $successorType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSuccessorType(): array
    {
        return $this->successorType;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return ProjectTaskSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): ProjectTaskSearchRowBasic
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ProjectTaskSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ProjectTaskSearchRowBasic
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
