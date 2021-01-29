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

class ProjectTask extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $eventId;

    /**
     * @var float
     */
    protected float $percentTimeComplete;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var RecordRef
     */
    protected RecordRef $company;

    /**
     * @var RecordRef
     */
    protected RecordRef $contact;

    /**
     * @var RecordRef
     */
    protected RecordRef $order;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var RecordRef
     */
    protected RecordRef $priority;

    /**
     * @var float
     */
    protected float $estimatedWork;

    /**
     * @var float
     */
    protected float $estimatedWorkBaseline;

    /**
     * @var ProjectTaskConstraintType
     */
    protected ProjectTaskConstraintType $constraintType;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $startDateBaseline;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var string
     */
    protected string $finishByDate;

    /**
     * @var string
     */
    protected string $endDateBaseline;

    /**
     * @var Duration
     */
    protected Duration $actualWork;

    /**
     * @var Duration
     */
    protected Duration $remainingWork;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var bool
     */
    protected bool $isMilestone;

    /**
     * @var string
     */
    protected string $isOnCriticalPath;

    /**
     * @var float
     */
    protected float $slackMinutes;

    /**
     * @var string
     */
    protected string $lateEnd;

    /**
     * @var string
     */
    protected string $lateStart;

    /**
     * @var ProjectTaskStatus
     */
    protected ProjectTaskStatus $status;

    /**
     * @var bool
     */
    protected bool $nonBillableTask;

    /**
     * @var ProjectTaskAssigneeList
     */
    protected ProjectTaskAssigneeList $assigneeList;

    /**
     * @var ProjectTaskPredecessorList
     */
    protected ProjectTaskPredecessorList $predecessorList;

    /**
     * @var ProjectTaskTimeItemList
     */
    protected ProjectTaskTimeItemList $timeItemList;

    /**
     * @var float
     */
    protected float $plannedWork;

    /**
     * @var float
     */
    protected float $plannedWorkBaseline;

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
        "eventId" => "RecordRef",
        "percentTimeComplete" => "float",
        "title" => "string",
        "company" => "RecordRef",
        "contact" => "RecordRef",
        "order" => "RecordRef",
        "owner" => "RecordRef",
        "parent" => "RecordRef",
        "priority" => "RecordRef",
        "estimatedWork" => "float",
        "estimatedWorkBaseline" => "float",
        "constraintType" => "ProjectTaskConstraintType",
        "startDate" => "dateTime",
        "startDateBaseline" => "dateTime",
        "endDate" => "dateTime",
        "finishByDate" => "dateTime",
        "endDateBaseline" => "dateTime",
        "actualWork" => "Duration",
        "remainingWork" => "Duration",
        "message" => "string",
        "isMilestone" => "boolean",
        "isOnCriticalPath" => "string",
        "slackMinutes" => "float",
        "lateEnd" => "dateTime",
        "lateStart" => "dateTime",
        "status" => "ProjectTaskStatus",
        "nonBillableTask" => "boolean",
        "assigneeList" => "ProjectTaskAssigneeList",
        "predecessorList" => "ProjectTaskPredecessorList",
        "timeItemList" => "ProjectTaskTimeItemList",
        "plannedWork" => "float",
        "plannedWorkBaseline" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return ProjectTask
     */
    public function setCustomForm(RecordRef $customForm): ProjectTask
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
     * @param RecordRef $eventId
     * @return ProjectTask
     */
    public function setEventId(RecordRef $eventId): ProjectTask
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEventId(): RecordRef
    {
        return $this->eventId;
    }

    /**
     * @param float $percentTimeComplete
     * @return ProjectTask
     */
    public function setPercentTimeComplete(float $percentTimeComplete): ProjectTask
    {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentTimeComplete(): float
    {
        return $this->percentTimeComplete;
    }

    /**
     * @param string $title
     * @return ProjectTask
     */
    public function setTitle(string $title): ProjectTask
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
     * @param RecordRef $company
     * @return ProjectTask
     */
    public function setCompany(RecordRef $company): ProjectTask
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCompany(): RecordRef
    {
        return $this->company;
    }

    /**
     * @param RecordRef $contact
     * @return ProjectTask
     */
    public function setContact(RecordRef $contact): ProjectTask
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContact(): RecordRef
    {
        return $this->contact;
    }

    /**
     * @param RecordRef $order
     * @return ProjectTask
     */
    public function setOrder(RecordRef $order): ProjectTask
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
     * @param RecordRef $owner
     * @return ProjectTask
     */
    public function setOwner(RecordRef $owner): ProjectTask
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner(): RecordRef
    {
        return $this->owner;
    }

    /**
     * @param RecordRef $parent
     * @return ProjectTask
     */
    public function setParent(RecordRef $parent): ProjectTask
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param RecordRef $priority
     * @return ProjectTask
     */
    public function setPriority(RecordRef $priority): ProjectTask
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriority(): RecordRef
    {
        return $this->priority;
    }

    /**
     * @param float $estimatedWork
     * @return ProjectTask
     */
    public function setEstimatedWork(float $estimatedWork): ProjectTask
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
     * @param float $estimatedWorkBaseline
     * @return ProjectTask
     */
    public function setEstimatedWorkBaseline(float $estimatedWorkBaseline): ProjectTask
    {
        $this->estimatedWorkBaseline = $estimatedWorkBaseline;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWorkBaseline(): float
    {
        return $this->estimatedWorkBaseline;
    }

    /**
     * @param ProjectTaskConstraintType $constraintType
     * @return ProjectTask
     */
    public function setConstraintType(ProjectTaskConstraintType $constraintType): ProjectTask
    {
        $this->constraintType = $constraintType;
        return $this;
    }

    /**
     * @return ProjectTaskConstraintType
     */
    public function getConstraintType(): ProjectTaskConstraintType
    {
        return $this->constraintType;
    }

    /**
     * @param string $startDate
     * @return ProjectTask
     */
    public function setStartDate(string $startDate): ProjectTask
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
     * @param string $startDateBaseline
     * @return ProjectTask
     */
    public function setStartDateBaseline(string $startDateBaseline): ProjectTask
    {
        $this->startDateBaseline = $startDateBaseline;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateBaseline(): string
    {
        return $this->startDateBaseline;
    }

    /**
     * @param string $endDate
     * @return ProjectTask
     */
    public function setEndDate(string $endDate): ProjectTask
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
     * @param string $finishByDate
     * @return ProjectTask
     */
    public function setFinishByDate(string $finishByDate): ProjectTask
    {
        $this->finishByDate = $finishByDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishByDate(): string
    {
        return $this->finishByDate;
    }

    /**
     * @param string $endDateBaseline
     * @return ProjectTask
     */
    public function setEndDateBaseline(string $endDateBaseline): ProjectTask
    {
        $this->endDateBaseline = $endDateBaseline;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDateBaseline(): string
    {
        return $this->endDateBaseline;
    }

    /**
     * @param Duration $actualWork
     * @return ProjectTask
     */
    public function setActualWork(Duration $actualWork): ProjectTask
    {
        $this->actualWork = $actualWork;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getActualWork(): Duration
    {
        return $this->actualWork;
    }

    /**
     * @param Duration $remainingWork
     * @return ProjectTask
     */
    public function setRemainingWork(Duration $remainingWork): ProjectTask
    {
        $this->remainingWork = $remainingWork;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getRemainingWork(): Duration
    {
        return $this->remainingWork;
    }

    /**
     * @param string $message
     * @return ProjectTask
     */
    public function setMessage(string $message): ProjectTask
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
     * @param bool $isMilestone
     * @return ProjectTask
     */
    public function setIsMilestone(bool $isMilestone): ProjectTask
    {
        $this->isMilestone = $isMilestone;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMilestone(): bool
    {
        return $this->isMilestone;
    }

    /**
     * @param string $isOnCriticalPath
     * @return ProjectTask
     */
    public function setIsOnCriticalPath(string $isOnCriticalPath): ProjectTask
    {
        $this->isOnCriticalPath = $isOnCriticalPath;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsOnCriticalPath(): string
    {
        return $this->isOnCriticalPath;
    }

    /**
     * @param float $slackMinutes
     * @return ProjectTask
     */
    public function setSlackMinutes(float $slackMinutes): ProjectTask
    {
        $this->slackMinutes = $slackMinutes;
        return $this;
    }

    /**
     * @return float
     */
    public function getSlackMinutes(): float
    {
        return $this->slackMinutes;
    }

    /**
     * @param string $lateEnd
     * @return ProjectTask
     */
    public function setLateEnd(string $lateEnd): ProjectTask
    {
        $this->lateEnd = $lateEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getLateEnd(): string
    {
        return $this->lateEnd;
    }

    /**
     * @param string $lateStart
     * @return ProjectTask
     */
    public function setLateStart(string $lateStart): ProjectTask
    {
        $this->lateStart = $lateStart;
        return $this;
    }

    /**
     * @return string
     */
    public function getLateStart(): string
    {
        return $this->lateStart;
    }

    /**
     * @param ProjectTaskStatus $status
     * @return ProjectTask
     */
    public function setStatus(ProjectTaskStatus $status): ProjectTask
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return ProjectTaskStatus
     */
    public function getStatus(): ProjectTaskStatus
    {
        return $this->status;
    }

    /**
     * @param bool $nonBillableTask
     * @return ProjectTask
     */
    public function setNonBillableTask(bool $nonBillableTask): ProjectTask
    {
        $this->nonBillableTask = $nonBillableTask;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNonBillableTask(): bool
    {
        return $this->nonBillableTask;
    }

    /**
     * @param ProjectTaskAssigneeList $assigneeList
     * @return ProjectTask
     */
    public function setAssigneeList(ProjectTaskAssigneeList $assigneeList): ProjectTask
    {
        $this->assigneeList = $assigneeList;
        return $this;
    }

    /**
     * @return ProjectTaskAssigneeList
     */
    public function getAssigneeList(): ProjectTaskAssigneeList
    {
        return $this->assigneeList;
    }

    /**
     * @param ProjectTaskPredecessorList $predecessorList
     * @return ProjectTask
     */
    public function setPredecessorList(ProjectTaskPredecessorList $predecessorList): ProjectTask
    {
        $this->predecessorList = $predecessorList;
        return $this;
    }

    /**
     * @return ProjectTaskPredecessorList
     */
    public function getPredecessorList(): ProjectTaskPredecessorList
    {
        return $this->predecessorList;
    }

    /**
     * @param ProjectTaskTimeItemList $timeItemList
     * @return ProjectTask
     */
    public function setTimeItemList(ProjectTaskTimeItemList $timeItemList): ProjectTask
    {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * @return ProjectTaskTimeItemList
     */
    public function getTimeItemList(): ProjectTaskTimeItemList
    {
        return $this->timeItemList;
    }

    /**
     * @param float $plannedWork
     * @return ProjectTask
     */
    public function setPlannedWork(float $plannedWork): ProjectTask
    {
        $this->plannedWork = $plannedWork;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlannedWork(): float
    {
        return $this->plannedWork;
    }

    /**
     * @param float $plannedWorkBaseline
     * @return ProjectTask
     */
    public function setPlannedWorkBaseline(float $plannedWorkBaseline): ProjectTask
    {
        $this->plannedWorkBaseline = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlannedWorkBaseline(): float
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ProjectTask
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ProjectTask
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
     * @return ProjectTask
     */
    public function setInternalId(string $internalId): ProjectTask
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
     * @return ProjectTask
     */
    public function setExternalId(string $externalId): ProjectTask
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
