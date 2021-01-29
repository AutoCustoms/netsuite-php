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

class TaskSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $accessLevel;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $actualTime;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assigned;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $company;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $completedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $contact;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dueDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedTimeOverride;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isJobSummaryTask;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isJobTask;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $markdone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $milestone;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $order;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $percentComplete;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $percentTimeComplete;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $priority;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $startTime;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $timeRemaining;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $transaction;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accessLevel" => "SearchColumnStringField[]",
        "actualTime" => "SearchColumnDoubleField[]",
        "assigned" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "completedDate" => "SearchColumnDateField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "dueDate" => "SearchColumnDateField[]",
        "estimatedTime" => "SearchColumnDoubleField[]",
        "estimatedTimeOverride" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isJobSummaryTask" => "SearchColumnBooleanField[]",
        "isJobTask" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "markdone" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "milestone" => "SearchColumnSelectField[]",
        "order" => "SearchColumnLongField[]",
        "owner" => "SearchColumnSelectField[]",
        "percentComplete" => "SearchColumnDoubleField[]",
        "percentTimeComplete" => "SearchColumnDoubleField[]",
        "priority" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "startTime" => "SearchColumnStringField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "timeRemaining" => "SearchColumnDoubleField[]",
        "title" => "SearchColumnStringField[]",
        "transaction" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $accessLevel
     * @return TaskSearchRowBasic
     */
    public function setAccessLevel(SearchColumnStringField $accessLevel): TaskSearchRowBasic
    {
        $this->accessLevel[] = $accessLevel;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccessLevel(): array
    {
        return $this->accessLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $actualTime
     * @return TaskSearchRowBasic
     */
    public function setActualTime(SearchColumnDoubleField $actualTime): TaskSearchRowBasic
    {
        $this->actualTime[] = $actualTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualTime(): array
    {
        return $this->actualTime;
    }

    /**
     * @param SearchColumnSelectField[] $assigned
     * @return TaskSearchRowBasic
     */
    public function setAssigned(SearchColumnSelectField $assigned): TaskSearchRowBasic
    {
        $this->assigned[] = $assigned;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssigned(): array
    {
        return $this->assigned;
    }

    /**
     * @param SearchColumnSelectField[] $company
     * @return TaskSearchRowBasic
     */
    public function setCompany(SearchColumnSelectField $company): TaskSearchRowBasic
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
     * @param SearchColumnDateField[] $completedDate
     * @return TaskSearchRowBasic
     */
    public function setCompletedDate(SearchColumnDateField $completedDate): TaskSearchRowBasic
    {
        $this->completedDate[] = $completedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCompletedDate(): array
    {
        return $this->completedDate;
    }

    /**
     * @param SearchColumnSelectField[] $contact
     * @return TaskSearchRowBasic
     */
    public function setContact(SearchColumnSelectField $contact): TaskSearchRowBasic
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
     * @param SearchColumnDateField[] $createdDate
     * @return TaskSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): TaskSearchRowBasic
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
     * @param SearchColumnDateField[] $dueDate
     * @return TaskSearchRowBasic
     */
    public function setDueDate(SearchColumnDateField $dueDate): TaskSearchRowBasic
    {
        $this->dueDate[] = $dueDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDueDate(): array
    {
        return $this->dueDate;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTime
     * @return TaskSearchRowBasic
     */
    public function setEstimatedTime(SearchColumnDoubleField $estimatedTime): TaskSearchRowBasic
    {
        $this->estimatedTime[] = $estimatedTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTime(): array
    {
        return $this->estimatedTime;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTimeOverride
     * @return TaskSearchRowBasic
     */
    public function setEstimatedTimeOverride(SearchColumnDoubleField $estimatedTimeOverride): TaskSearchRowBasic
    {
        $this->estimatedTimeOverride[] = $estimatedTimeOverride;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTimeOverride(): array
    {
        return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return TaskSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TaskSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return TaskSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TaskSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isJobSummaryTask
     * @return TaskSearchRowBasic
     */
    public function setIsJobSummaryTask(SearchColumnBooleanField $isJobSummaryTask): TaskSearchRowBasic
    {
        $this->isJobSummaryTask[] = $isJobSummaryTask;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobSummaryTask(): array
    {
        return $this->isJobSummaryTask;
    }

    /**
     * @param SearchColumnBooleanField[] $isJobTask
     * @return TaskSearchRowBasic
     */
    public function setIsJobTask(SearchColumnBooleanField $isJobTask): TaskSearchRowBasic
    {
        $this->isJobTask[] = $isJobTask;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobTask(): array
    {
        return $this->isJobTask;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return TaskSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): TaskSearchRowBasic
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
     * @param SearchColumnStringField[] $markdone
     * @return TaskSearchRowBasic
     */
    public function setMarkdone(SearchColumnStringField $markdone): TaskSearchRowBasic
    {
        $this->markdone[] = $markdone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMarkdone(): array
    {
        return $this->markdone;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return TaskSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): TaskSearchRowBasic
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
     * @param SearchColumnSelectField[] $milestone
     * @return TaskSearchRowBasic
     */
    public function setMilestone(SearchColumnSelectField $milestone): TaskSearchRowBasic
    {
        $this->milestone[] = $milestone;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMilestone(): array
    {
        return $this->milestone;
    }

    /**
     * @param SearchColumnLongField[] $order
     * @return TaskSearchRowBasic
     */
    public function setOrder(SearchColumnLongField $order): TaskSearchRowBasic
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getOrder(): array
    {
        return $this->order;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return TaskSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): TaskSearchRowBasic
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
     * @param SearchColumnDoubleField[] $percentComplete
     * @return TaskSearchRowBasic
     */
    public function setPercentComplete(SearchColumnDoubleField $percentComplete): TaskSearchRowBasic
    {
        $this->percentComplete[] = $percentComplete;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentComplete(): array
    {
        return $this->percentComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $percentTimeComplete
     * @return TaskSearchRowBasic
     */
    public function setPercentTimeComplete(SearchColumnDoubleField $percentTimeComplete): TaskSearchRowBasic
    {
        $this->percentTimeComplete[] = $percentTimeComplete;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentTimeComplete(): array
    {
        return $this->percentTimeComplete;
    }

    /**
     * @param SearchColumnEnumSelectField[] $priority
     * @return TaskSearchRowBasic
     */
    public function setPriority(SearchColumnEnumSelectField $priority): TaskSearchRowBasic
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
     * @param SearchColumnDateField[] $startDate
     * @return TaskSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): TaskSearchRowBasic
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
     * @param SearchColumnStringField[] $startTime
     * @return TaskSearchRowBasic
     */
    public function setStartTime(SearchColumnStringField $startTime): TaskSearchRowBasic
    {
        $this->startTime[] = $startTime;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStartTime(): array
    {
        return $this->startTime;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return TaskSearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): TaskSearchRowBasic
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
     * @param SearchColumnDoubleField[] $timeRemaining
     * @return TaskSearchRowBasic
     */
    public function setTimeRemaining(SearchColumnDoubleField $timeRemaining): TaskSearchRowBasic
    {
        $this->timeRemaining[] = $timeRemaining;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTimeRemaining(): array
    {
        return $this->timeRemaining;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return TaskSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): TaskSearchRowBasic
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
     * @param SearchColumnSelectField[] $transaction
     * @return TaskSearchRowBasic
     */
    public function setTransaction(SearchColumnSelectField $transaction): TaskSearchRowBasic
    {
        $this->transaction[] = $transaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTransaction(): array
    {
        return $this->transaction;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TaskSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): TaskSearchRowBasic
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
