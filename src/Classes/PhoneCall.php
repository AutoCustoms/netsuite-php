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

class PhoneCall extends Record {
    /**
     * @var string
     */
    protected string $message;

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
    protected RecordRef $owner;

    /**
     * @var RecordRef
     */
    protected RecordRef $assigned;

    /**
     * @var bool
     */
    protected bool $sendEmail;

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
    protected bool $timedEvent;

    /**
     * @var string
     */
    protected string $completedDate;

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var PhoneCallStatus
     */
    protected PhoneCallStatus $status;

    /**
     * @var PhoneCallPriority
     */
    protected PhoneCallPriority $priority;

    /**
     * @var bool
     */
    protected bool $accessLevel;

    /**
     * @var PhoneCallReminderType
     */
    protected PhoneCallReminderType $reminderType;

    /**
     * @var PhoneCallReminderMinutes
     */
    protected PhoneCallReminderMinutes $reminderMinutes;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var PhoneCallContactList
     */
    protected PhoneCallContactList $contactList;

    /**
     * @var PhoneCallTimeItemList
     */
    protected PhoneCallTimeItemList $timeItemList;

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
        "message" => "string",
        "company" => "RecordRef",
        "contact" => "RecordRef",
        "supportCase" => "RecordRef",
        "transaction" => "RecordRef",
        "milestone" => "RecordRef",
        "customForm" => "RecordRef",
        "title" => "string",
        "owner" => "RecordRef",
        "assigned" => "RecordRef",
        "sendEmail" => "boolean",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "timedEvent" => "boolean",
        "completedDate" => "dateTime",
        "phone" => "string",
        "status" => "PhoneCallStatus",
        "priority" => "PhoneCallPriority",
        "accessLevel" => "boolean",
        "reminderType" => "PhoneCallReminderType",
        "reminderMinutes" => "PhoneCallReminderMinutes",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "contactList" => "PhoneCallContactList",
        "timeItemList" => "PhoneCallTimeItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $message
     * @return PhoneCall
     */
    public function setMessage(string $message): PhoneCall
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
     * @param RecordRef $company
     * @return PhoneCall
     */
    public function setCompany(RecordRef $company): PhoneCall
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
     * @return PhoneCall
     */
    public function setContact(RecordRef $contact): PhoneCall
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
     * @return PhoneCall
     */
    public function setSupportCase(RecordRef $supportCase): PhoneCall
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
     * @return PhoneCall
     */
    public function setTransaction(RecordRef $transaction): PhoneCall
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
     * @return PhoneCall
     */
    public function setMilestone(RecordRef $milestone): PhoneCall
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
     * @return PhoneCall
     */
    public function setCustomForm(RecordRef $customForm): PhoneCall
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
     * @return PhoneCall
     */
    public function setTitle(string $title): PhoneCall
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
     * @param RecordRef $owner
     * @return PhoneCall
     */
    public function setOwner(RecordRef $owner): PhoneCall
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
     * @param RecordRef $assigned
     * @return PhoneCall
     */
    public function setAssigned(RecordRef $assigned): PhoneCall
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
     * @return PhoneCall
     */
    public function setSendEmail(bool $sendEmail): PhoneCall
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
     * @param string $startDate
     * @return PhoneCall
     */
    public function setStartDate(string $startDate): PhoneCall
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
     * @return PhoneCall
     */
    public function setEndDate(string $endDate): PhoneCall
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
     * @param bool $timedEvent
     * @return PhoneCall
     */
    public function setTimedEvent(bool $timedEvent): PhoneCall
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
     * @param string $completedDate
     * @return PhoneCall
     */
    public function setCompletedDate(string $completedDate): PhoneCall
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
     * @param string $phone
     * @return PhoneCall
     */
    public function setPhone(string $phone): PhoneCall
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param PhoneCallStatus $status
     * @return PhoneCall
     */
    public function setStatus(PhoneCallStatus $status): PhoneCall
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return PhoneCallStatus
     */
    public function getStatus(): PhoneCallStatus
    {
        return $this->status;
    }

    /**
     * @param PhoneCallPriority $priority
     * @return PhoneCall
     */
    public function setPriority(PhoneCallPriority $priority): PhoneCall
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return PhoneCallPriority
     */
    public function getPriority(): PhoneCallPriority
    {
        return $this->priority;
    }

    /**
     * @param bool $accessLevel
     * @return PhoneCall
     */
    public function setAccessLevel(bool $accessLevel): PhoneCall
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
     * @param PhoneCallReminderType $reminderType
     * @return PhoneCall
     */
    public function setReminderType(PhoneCallReminderType $reminderType): PhoneCall
    {
        $this->reminderType = $reminderType;
        return $this;
    }

    /**
     * @return PhoneCallReminderType
     */
    public function getReminderType(): PhoneCallReminderType
    {
        return $this->reminderType;
    }

    /**
     * @param PhoneCallReminderMinutes $reminderMinutes
     * @return PhoneCall
     */
    public function setReminderMinutes(PhoneCallReminderMinutes $reminderMinutes): PhoneCall
    {
        $this->reminderMinutes = $reminderMinutes;
        return $this;
    }

    /**
     * @return PhoneCallReminderMinutes
     */
    public function getReminderMinutes(): PhoneCallReminderMinutes
    {
        return $this->reminderMinutes;
    }

    /**
     * @param string $createdDate
     * @return PhoneCall
     */
    public function setCreatedDate(string $createdDate): PhoneCall
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
     * @return PhoneCall
     */
    public function setLastModifiedDate(string $lastModifiedDate): PhoneCall
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
     * @param PhoneCallContactList $contactList
     * @return PhoneCall
     */
    public function setContactList(PhoneCallContactList $contactList): PhoneCall
    {
        $this->contactList = $contactList;
        return $this;
    }

    /**
     * @return PhoneCallContactList
     */
    public function getContactList(): PhoneCallContactList
    {
        return $this->contactList;
    }

    /**
     * @param PhoneCallTimeItemList $timeItemList
     * @return PhoneCall
     */
    public function setTimeItemList(PhoneCallTimeItemList $timeItemList): PhoneCall
    {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * @return PhoneCallTimeItemList
     */
    public function getTimeItemList(): PhoneCallTimeItemList
    {
        return $this->timeItemList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return PhoneCall
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PhoneCall
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
     * @return PhoneCall
     */
    public function setInternalId(string $internalId): PhoneCall
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
     * @return PhoneCall
     */
    public function setExternalId(string $externalId): PhoneCall
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
