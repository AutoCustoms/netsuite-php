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

class ProjectTaskSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $actualWork;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assignee;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $company;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $constraintType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $contact;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $cost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costBase;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costBaseBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costBaseVariance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costVariance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costVariancePercent;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDateBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $endDateVariance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedWork;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedWorkBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedWorkVariance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedWorkVariancePercent;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $finishByDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $id;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isMilestone;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isSummaryTask;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $nonBillableTask;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $owner;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $percentWorkComplete;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $plannedWork;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $plannedWorkBaseline;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $predecessor;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $predecessors;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $priority;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $remainingWork;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDateBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $startDateVariance;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $successor;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actualWork" => "SearchDoubleField",
        "assignee" => "SearchMultiSelectField",
        "company" => "SearchMultiSelectField",
        "constraintType" => "SearchEnumMultiSelectField",
        "contact" => "SearchMultiSelectField",
        "cost" => "SearchDoubleField",
        "costBase" => "SearchDoubleField",
        "costBaseBaseline" => "SearchDoubleField",
        "costBaseline" => "SearchDoubleField",
        "costBaseVariance" => "SearchDoubleField",
        "costVariance" => "SearchDoubleField",
        "costVariancePercent" => "SearchDoubleField",
        "createdDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "endDateBaseline" => "SearchDateField",
        "endDateVariance" => "SearchDoubleField",
        "estimatedWork" => "SearchDoubleField",
        "estimatedWorkBaseline" => "SearchDoubleField",
        "estimatedWorkVariance" => "SearchDoubleField",
        "estimatedWorkVariancePercent" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "finishByDate" => "SearchDateField",
        "id" => "SearchLongField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isMilestone" => "SearchBooleanField",
        "isSummaryTask" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "nonBillableTask" => "SearchBooleanField",
        "owner" => "SearchMultiSelectField",
        "parent" => "SearchMultiSelectField",
        "percentWorkComplete" => "SearchDoubleField",
        "plannedWork" => "SearchDoubleField",
        "plannedWorkBaseline" => "SearchDoubleField",
        "predecessor" => "SearchMultiSelectField",
        "predecessors" => "SearchStringField",
        "priority" => "SearchEnumMultiSelectField",
        "remainingWork" => "SearchDoubleField",
        "startDate" => "SearchDateField",
        "startDateBaseline" => "SearchDateField",
        "startDateVariance" => "SearchDoubleField",
        "status" => "SearchEnumMultiSelectField",
        "successor" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $actualWork
     * @return ProjectTaskSearchBasic
     */
    public function setActualWork(SearchDoubleField $actualWork): ProjectTaskSearchBasic
    {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualWork(): SearchDoubleField
    {
        return $this->actualWork;
    }

    /**
     * @param SearchMultiSelectField $assignee
     * @return ProjectTaskSearchBasic
     */
    public function setAssignee(SearchMultiSelectField $assignee): ProjectTaskSearchBasic
    {
        $this->assignee = $assignee;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssignee(): SearchMultiSelectField
    {
        return $this->assignee;
    }

    /**
     * @param SearchMultiSelectField $company
     * @return ProjectTaskSearchBasic
     */
    public function setCompany(SearchMultiSelectField $company): ProjectTaskSearchBasic
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCompany(): SearchMultiSelectField
    {
        return $this->company;
    }

    /**
     * @param SearchEnumMultiSelectField $constraintType
     * @return ProjectTaskSearchBasic
     */
    public function setConstraintType(SearchEnumMultiSelectField $constraintType): ProjectTaskSearchBasic
    {
        $this->constraintType = $constraintType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getConstraintType(): SearchEnumMultiSelectField
    {
        return $this->constraintType;
    }

    /**
     * @param SearchMultiSelectField $contact
     * @return ProjectTaskSearchBasic
     */
    public function setContact(SearchMultiSelectField $contact): ProjectTaskSearchBasic
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getContact(): SearchMultiSelectField
    {
        return $this->contact;
    }

    /**
     * @param SearchDoubleField $cost
     * @return ProjectTaskSearchBasic
     */
    public function setCost(SearchDoubleField $cost): ProjectTaskSearchBasic
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost(): SearchDoubleField
    {
        return $this->cost;
    }

    /**
     * @param SearchDoubleField $costBase
     * @return ProjectTaskSearchBasic
     */
    public function setCostBase(SearchDoubleField $costBase): ProjectTaskSearchBasic
    {
        $this->costBase = $costBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBase(): SearchDoubleField
    {
        return $this->costBase;
    }

    /**
     * @param SearchDoubleField $costBaseBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setCostBaseBaseline(SearchDoubleField $costBaseBaseline): ProjectTaskSearchBasic
    {
        $this->costBaseBaseline = $costBaseBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBaseBaseline(): SearchDoubleField
    {
        return $this->costBaseBaseline;
    }

    /**
     * @param SearchDoubleField $costBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setCostBaseline(SearchDoubleField $costBaseline): ProjectTaskSearchBasic
    {
        $this->costBaseline = $costBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBaseline(): SearchDoubleField
    {
        return $this->costBaseline;
    }

    /**
     * @param SearchDoubleField $costBaseVariance
     * @return ProjectTaskSearchBasic
     */
    public function setCostBaseVariance(SearchDoubleField $costBaseVariance): ProjectTaskSearchBasic
    {
        $this->costBaseVariance = $costBaseVariance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostBaseVariance(): SearchDoubleField
    {
        return $this->costBaseVariance;
    }

    /**
     * @param SearchDoubleField $costVariance
     * @return ProjectTaskSearchBasic
     */
    public function setCostVariance(SearchDoubleField $costVariance): ProjectTaskSearchBasic
    {
        $this->costVariance = $costVariance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostVariance(): SearchDoubleField
    {
        return $this->costVariance;
    }

    /**
     * @param SearchDoubleField $costVariancePercent
     * @return ProjectTaskSearchBasic
     */
    public function setCostVariancePercent(SearchDoubleField $costVariancePercent): ProjectTaskSearchBasic
    {
        $this->costVariancePercent = $costVariancePercent;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostVariancePercent(): SearchDoubleField
    {
        return $this->costVariancePercent;
    }

    /**
     * @param SearchDateField $createdDate
     * @return ProjectTaskSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): ProjectTaskSearchBasic
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate(): SearchDateField
    {
        return $this->createdDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return ProjectTaskSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): ProjectTaskSearchBasic
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
     * @param SearchDateField $endDateBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setEndDateBaseline(SearchDateField $endDateBaseline): ProjectTaskSearchBasic
    {
        $this->endDateBaseline = $endDateBaseline;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDateBaseline(): SearchDateField
    {
        return $this->endDateBaseline;
    }

    /**
     * @param SearchDoubleField $endDateVariance
     * @return ProjectTaskSearchBasic
     */
    public function setEndDateVariance(SearchDoubleField $endDateVariance): ProjectTaskSearchBasic
    {
        $this->endDateVariance = $endDateVariance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEndDateVariance(): SearchDoubleField
    {
        return $this->endDateVariance;
    }

    /**
     * @param SearchDoubleField $estimatedWork
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWork(SearchDoubleField $estimatedWork): ProjectTaskSearchBasic
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
     * @param SearchDoubleField $estimatedWorkBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWorkBaseline(SearchDoubleField $estimatedWorkBaseline): ProjectTaskSearchBasic
    {
        $this->estimatedWorkBaseline = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkBaseline(): SearchDoubleField
    {
        return $this->estimatedWorkBaseline;
    }

    /**
     * @param SearchDoubleField $estimatedWorkVariance
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWorkVariance(SearchDoubleField $estimatedWorkVariance): ProjectTaskSearchBasic
    {
        $this->estimatedWorkVariance = $estimatedWorkVariance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkVariance(): SearchDoubleField
    {
        return $this->estimatedWorkVariance;
    }

    /**
     * @param SearchDoubleField $estimatedWorkVariancePercent
     * @return ProjectTaskSearchBasic
     */
    public function setEstimatedWorkVariancePercent(SearchDoubleField $estimatedWorkVariancePercent): ProjectTaskSearchBasic
    {
        $this->estimatedWorkVariancePercent = $estimatedWorkVariancePercent;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedWorkVariancePercent(): SearchDoubleField
    {
        return $this->estimatedWorkVariancePercent;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ProjectTaskSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ProjectTaskSearchBasic
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
     * @return ProjectTaskSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ProjectTaskSearchBasic
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
     * @param SearchDateField $finishByDate
     * @return ProjectTaskSearchBasic
     */
    public function setFinishByDate(SearchDateField $finishByDate): ProjectTaskSearchBasic
    {
        $this->finishByDate = $finishByDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFinishByDate(): SearchDateField
    {
        return $this->finishByDate;
    }

    /**
     * @param SearchLongField $id
     * @return ProjectTaskSearchBasic
     */
    public function setId(SearchLongField $id): ProjectTaskSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return ProjectTaskSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ProjectTaskSearchBasic
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
     * @return ProjectTaskSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ProjectTaskSearchBasic
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
     * @param SearchBooleanField $isMilestone
     * @return ProjectTaskSearchBasic
     */
    public function setIsMilestone(SearchBooleanField $isMilestone): ProjectTaskSearchBasic
    {
        $this->isMilestone = $isMilestone;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsMilestone(): SearchBooleanField
    {
        return $this->isMilestone;
    }

    /**
     * @param SearchBooleanField $isSummaryTask
     * @return ProjectTaskSearchBasic
     */
    public function setIsSummaryTask(SearchBooleanField $isSummaryTask): ProjectTaskSearchBasic
    {
        $this->isSummaryTask = $isSummaryTask;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSummaryTask(): SearchBooleanField
    {
        return $this->isSummaryTask;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return ProjectTaskSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): ProjectTaskSearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchBooleanField $nonBillableTask
     * @return ProjectTaskSearchBasic
     */
    public function setNonBillableTask(SearchBooleanField $nonBillableTask): ProjectTaskSearchBasic
    {
        $this->nonBillableTask = $nonBillableTask;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNonBillableTask(): SearchBooleanField
    {
        return $this->nonBillableTask;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return ProjectTaskSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): ProjectTaskSearchBasic
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOwner(): SearchMultiSelectField
    {
        return $this->owner;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return ProjectTaskSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): ProjectTaskSearchBasic
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent(): SearchMultiSelectField
    {
        return $this->parent;
    }

    /**
     * @param SearchDoubleField $percentWorkComplete
     * @return ProjectTaskSearchBasic
     */
    public function setPercentWorkComplete(SearchDoubleField $percentWorkComplete): ProjectTaskSearchBasic
    {
        $this->percentWorkComplete = $percentWorkComplete;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPercentWorkComplete(): SearchDoubleField
    {
        return $this->percentWorkComplete;
    }

    /**
     * @param SearchDoubleField $plannedWork
     * @return ProjectTaskSearchBasic
     */
    public function setPlannedWork(SearchDoubleField $plannedWork): ProjectTaskSearchBasic
    {
        $this->plannedWork = $plannedWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPlannedWork(): SearchDoubleField
    {
        return $this->plannedWork;
    }

    /**
     * @param SearchDoubleField $plannedWorkBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setPlannedWorkBaseline(SearchDoubleField $plannedWorkBaseline): ProjectTaskSearchBasic
    {
        $this->plannedWorkBaseline = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPlannedWorkBaseline(): SearchDoubleField
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param SearchMultiSelectField $predecessor
     * @return ProjectTaskSearchBasic
     */
    public function setPredecessor(SearchMultiSelectField $predecessor): ProjectTaskSearchBasic
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
     * @param SearchStringField $predecessors
     * @return ProjectTaskSearchBasic
     */
    public function setPredecessors(SearchStringField $predecessors): ProjectTaskSearchBasic
    {
        $this->predecessors = $predecessors;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPredecessors(): SearchStringField
    {
        return $this->predecessors;
    }

    /**
     * @param SearchEnumMultiSelectField $priority
     * @return ProjectTaskSearchBasic
     */
    public function setPriority(SearchEnumMultiSelectField $priority): ProjectTaskSearchBasic
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPriority(): SearchEnumMultiSelectField
    {
        return $this->priority;
    }

    /**
     * @param SearchDoubleField $remainingWork
     * @return ProjectTaskSearchBasic
     */
    public function setRemainingWork(SearchDoubleField $remainingWork): ProjectTaskSearchBasic
    {
        $this->remainingWork = $remainingWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRemainingWork(): SearchDoubleField
    {
        return $this->remainingWork;
    }

    /**
     * @param SearchDateField $startDate
     * @return ProjectTaskSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): ProjectTaskSearchBasic
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
     * @param SearchDateField $startDateBaseline
     * @return ProjectTaskSearchBasic
     */
    public function setStartDateBaseline(SearchDateField $startDateBaseline): ProjectTaskSearchBasic
    {
        $this->startDateBaseline = $startDateBaseline;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDateBaseline(): SearchDateField
    {
        return $this->startDateBaseline;
    }

    /**
     * @param SearchDoubleField $startDateVariance
     * @return ProjectTaskSearchBasic
     */
    public function setStartDateVariance(SearchDoubleField $startDateVariance): ProjectTaskSearchBasic
    {
        $this->startDateVariance = $startDateVariance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getStartDateVariance(): SearchDoubleField
    {
        return $this->startDateVariance;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return ProjectTaskSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): ProjectTaskSearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus(): SearchEnumMultiSelectField
    {
        return $this->status;
    }

    /**
     * @param SearchMultiSelectField $successor
     * @return ProjectTaskSearchBasic
     */
    public function setSuccessor(SearchMultiSelectField $successor): ProjectTaskSearchBasic
    {
        $this->successor = $successor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSuccessor(): SearchMultiSelectField
    {
        return $this->successor;
    }

    /**
     * @param SearchStringField $title
     * @return ProjectTaskSearchBasic
     */
    public function setTitle(SearchStringField $title): ProjectTaskSearchBasic
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle(): SearchStringField
    {
        return $this->title;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ProjectTaskSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ProjectTaskSearchBasic
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
