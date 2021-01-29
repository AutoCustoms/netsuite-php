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

class Task extends Record {
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
    protected RecordRef $supportCase;

    /**
     * @var RecordRef
     */
    protected RecordRef $transaction;

    /**
     * @var RecordRef
     */
    protected RecordRef $milestone;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var RecordRef
     */
    protected RecordRef $assigned;

    /**
     * @var bool
     */
    protected bool $sendEmail;

    /**
     * @var bool
     */
    protected bool $timedEvent;

    /**
     * @var Duration
     */
    protected Duration $estimatedTime;

    /**
     * @var Duration
     */
    protected Duration $estimatedTimeOverride;

    /**
     * @var Duration
     */
    protected Duration $actualTime;

    /**
     * @var Duration
     */
    protected Duration $timeRemaining;

    /**
     * @var float
     */
    protected float $percentTimeComplete;

    /**
     * @var float
     */
    protected float $percentComplete;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var string
     */
    protected string $dueDate;

    /**
     * @var string
     */
    protected string $completedDate;

    /**
     * @var TaskPriority
     */
    protected TaskPriority $priority;

    /**
     * @var TaskStatus
     */
    protected TaskStatus $status;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var bool
     */
    protected bool $accessLevel;

    /**
     * @var TaskReminderType
     */
    protected TaskReminderType $reminderType;

    /**
     * @var TaskReminderMinutes
     */
    protected TaskReminderMinutes $reminderMinutes;

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
    protected RecordRef $owner;

    /**
     * @var TaskContactList
     */
    protected TaskContactList $contactList;

    /**
     * @var TaskTimeItemList
     */
    protected TaskTimeItemList $timeItemList;

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
        "company" => "RecordRef",
        "contact" => "RecordRef",
        "supportCase" => "RecordRef",
        "transaction" => "RecordRef",
        "milestone" => "RecordRef",
        "customForm" => "RecordRef",
        "title" => "string",
        "assigned" => "RecordRef",
        "sendEmail" => "boolean",
        "timedEvent" => "boolean",
        "estimatedTime" => "Duration",
        "estimatedTimeOverride" => "Duration",
        "actualTime" => "Duration",
        "timeRemaining" => "Duration",
        "percentTimeComplete" => "float",
        "percentComplete" => "float",
        "parent" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "dueDate" => "dateTime",
        "completedDate" => "dateTime",
        "priority" => "TaskPriority",
        "status" => "TaskStatus",
        "message" => "string",
        "accessLevel" => "boolean",
        "reminderType" => "TaskReminderType",
        "reminderMinutes" => "TaskReminderMinutes",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "owner" => "RecordRef",
        "contactList" => "TaskContactList",
        "timeItemList" => "TaskTimeItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $company
     * @return Task
     */
    public function setCompany(RecordRef $company): Task
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
     * @return Task
     */
    public function setContact(RecordRef $contact): Task
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
     * @param RecordRef $supportCase
     * @return Task
     */
    public function setSupportCase(RecordRef $supportCase): Task
    {
        $this->supportCase = $supportCase;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupportCase(): RecordRef
    {
        return $this->supportCase;
    }

    /**
     * @param RecordRef $transaction
     * @return Task
     */
    public function setTransaction(RecordRef $transaction): Task
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction(): RecordRef
    {
        return $this->transaction;
    }

    /**
     * @param RecordRef $milestone
     * @return Task
     */
    public function setMilestone(RecordRef $milestone): Task
    {
        $this->milestone = $milestone;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMilestone(): RecordRef
    {
        return $this->milestone;
    }

    /**
     * @param RecordRef $customForm
     * @return Task
     */
    public function setCustomForm(RecordRef $customForm): Task
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
     * @param string $title
     * @return Task
     */
    public function setTitle(string $title): Task
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
     * @param RecordRef $assigned
     * @return Task
     */
    public function setAssigned(RecordRef $assigned): Task
    {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssigned(): RecordRef
    {
        return $this->assigned;
    }

    /**
     * @param bool $sendEmail
     * @return Task
     */
    public function setSendEmail(bool $sendEmail): Task
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendEmail(): bool
    {
        return $this->sendEmail;
    }

    /**
     * @param bool $timedEvent
     * @return Task
     */
    public function setTimedEvent(bool $timedEvent): Task
    {
        $this->timedEvent = $timedEvent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTimedEvent(): bool
    {
        return $this->timedEvent;
    }

    /**
     * @param Duration $estimatedTime
     * @return Task
     */
    public function setEstimatedTime(Duration $estimatedTime): Task
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTime(): Duration
    {
        return $this->estimatedTime;
    }

    /**
     * @param Duration $estimatedTimeOverride
     * @return Task
     */
    public function setEstimatedTimeOverride(Duration $estimatedTimeOverride): Task
    {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTimeOverride(): Duration
    {
        return $this->estimatedTimeOverride;
    }

    /**
     * @param Duration $actualTime
     * @return Task
     */
    public function setActualTime(Duration $actualTime): Task
    {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getActualTime(): Duration
    {
        return $this->actualTime;
    }

    /**
     * @param Duration $timeRemaining
     * @return Task
     */
    public function setTimeRemaining(Duration $timeRemaining): Task
    {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getTimeRemaining(): Duration
    {
        return $this->timeRemaining;
    }

    /**
     * @param float $percentTimeComplete
     * @return Task
     */
    public function setPercentTimeComplete(float $percentTimeComplete): Task
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
     * @param float $percentComplete
     * @return Task
     */
    public function setPercentComplete(float $percentComplete): Task
    {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete(): float
    {
        return $this->percentComplete;
    }

    /**
     * @param RecordRef $parent
     * @return Task
     */
    public function setParent(RecordRef $parent): Task
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
     * @param string $startDate
     * @return Task
     */
    public function setStartDate(string $startDate): Task
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
     * @return Task
     */
    public function setEndDate(string $endDate): Task
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
     * @param string $dueDate
     * @return Task
     */
    public function setDueDate(string $dueDate): Task
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param string $completedDate
     * @return Task
     */
    public function setCompletedDate(string $completedDate): Task
    {
        $this->completedDate = $completedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompletedDate(): string
    {
        return $this->completedDate;
    }

    /**
     * @param TaskPriority $priority
     * @return Task
     */
    public function setPriority(TaskPriority $priority): Task
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return TaskPriority
     */
    public function getPriority(): TaskPriority
    {
        return $this->priority;
    }

    /**
     * @param TaskStatus $status
     * @return Task
     */
    public function setStatus(TaskStatus $status): Task
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return TaskStatus
     */
    public function getStatus(): TaskStatus
    {
        return $this->status;
    }

    /**
     * @param string $message
     * @return Task
     */
    public function setMessage(string $message): Task
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
     * @param bool $accessLevel
     * @return Task
     */
    public function setAccessLevel(bool $accessLevel): Task
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAccessLevel(): bool
    {
        return $this->accessLevel;
    }

    /**
     * @param TaskReminderType $reminderType
     * @return Task
     */
    public function setReminderType(TaskReminderType $reminderType): Task
    {
        $this->reminderType = $reminderType;
        return $this;
    }

    /**
     * @return TaskReminderType
     */
    public function getReminderType(): TaskReminderType
    {
        return $this->reminderType;
    }

    /**
     * @param TaskReminderMinutes $reminderMinutes
     * @return Task
     */
    public function setReminderMinutes(TaskReminderMinutes $reminderMinutes): Task
    {
        $this->reminderMinutes = $reminderMinutes;
        return $this;
    }

    /**
     * @return TaskReminderMinutes
     */
    public function getReminderMinutes(): TaskReminderMinutes
    {
        return $this->reminderMinutes;
    }

    /**
     * @param string $createdDate
     * @return Task
     */
    public function setCreatedDate(string $createdDate): Task
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
     * @return Task
     */
    public function setLastModifiedDate(string $lastModifiedDate): Task
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
     * @param RecordRef $owner
     * @return Task
     */
    public function setOwner(RecordRef $owner): Task
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
     * @param TaskContactList $contactList
     * @return Task
     */
    public function setContactList(TaskContactList $contactList): Task
    {
        $this->contactList = $contactList;
        return $this;
    }

    /**
     * @return TaskContactList
     */
    public function getContactList(): TaskContactList
    {
        return $this->contactList;
    }

    /**
     * @param TaskTimeItemList $timeItemList
     * @return Task
     */
    public function setTimeItemList(TaskTimeItemList $timeItemList): Task
    {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * @return TaskTimeItemList
     */
    public function getTimeItemList(): TaskTimeItemList
    {
        return $this->timeItemList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Task
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Task
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
     * @return Task
     */
    public function setInternalId(string $internalId): Task
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
     * @return Task
     */
    public function setExternalId(string $externalId): Task
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
