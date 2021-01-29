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

class CalendarEvent extends Record {
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
     * @var int
     */
    protected int $period;

    /**
     * @var RecurrenceFrequency
     */
    protected RecurrenceFrequency $frequency;

    /**
     * @var RecurrenceDowMaskList
     */
    protected RecurrenceDowMaskList $recurrenceDowMaskList;

    /**
     * @var RecurrenceDow
     */
    protected RecurrenceDow $recurrenceDow;

    /**
     * @var RecurrenceDowim
     */
    protected RecurrenceDowim $recurrenceDowim;

    /**
     * @var string
     */
    protected string $seriesStartDate;

    /**
     * @var string
     */
    protected string $endByDate;

    /**
     * @var bool
     */
    protected bool $noEndDate;

    /**
     * @var bool
     */
    protected bool $sendEmail;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var string
     */
    protected string $recurrence;

    /**
     * @var string
     */
    protected string $location;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var bool
     */
    protected bool $allDayEvent;

    /**
     * @var bool
     */
    protected bool $timedEvent;

    /**
     * @var CalendarEventReminderType
     */
    protected CalendarEventReminderType $reminderType;

    /**
     * @var CalendarEventReminderMinutes
     */
    protected CalendarEventReminderMinutes $reminderMinutes;

    /**
     * @var CalendarEventStatus
     */
    protected CalendarEventStatus $status;

    /**
     * @var CalendarEventAccessLevel
     */
    protected CalendarEventAccessLevel $accessLevel;

    /**
     * @var RecordRef
     */
    protected RecordRef $organizer;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var ExclusionDateList
     */
    protected ExclusionDateList $exclusionDateList;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var CalendarEventAttendeeList
     */
    protected CalendarEventAttendeeList $attendeeList;

    /**
     * @var CalendarEventResourceList
     */
    protected CalendarEventResourceList $resourceList;

    /**
     * @var CalendarEventTimeItemList
     */
    protected CalendarEventTimeItemList $timeItemList;

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
        "period" => "integer",
        "frequency" => "RecurrenceFrequency",
        "recurrenceDowMaskList" => "RecurrenceDowMaskList",
        "recurrenceDow" => "RecurrenceDow",
        "recurrenceDowim" => "RecurrenceDowim",
        "seriesStartDate" => "dateTime",
        "endByDate" => "dateTime",
        "noEndDate" => "boolean",
        "sendEmail" => "boolean",
        "customForm" => "RecordRef",
        "title" => "string",
        "recurrence" => "string",
        "location" => "string",
        "startDate" => "dateTime",
        "allDayEvent" => "boolean",
        "timedEvent" => "boolean",
        "reminderType" => "CalendarEventReminderType",
        "reminderMinutes" => "CalendarEventReminderMinutes",
        "status" => "CalendarEventStatus",
        "accessLevel" => "CalendarEventAccessLevel",
        "organizer" => "RecordRef",
        "message" => "string",
        "createdDate" => "dateTime",
        "endDate" => "dateTime",
        "exclusionDateList" => "ExclusionDateList",
        "lastModifiedDate" => "dateTime",
        "owner" => "RecordRef",
        "attendeeList" => "CalendarEventAttendeeList",
        "resourceList" => "CalendarEventResourceList",
        "timeItemList" => "CalendarEventTimeItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $company
     * @return CalendarEvent
     */
    public function setCompany(RecordRef $company): CalendarEvent
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
     * @return CalendarEvent
     */
    public function setContact(RecordRef $contact): CalendarEvent
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
     * @return CalendarEvent
     */
    public function setSupportCase(RecordRef $supportCase): CalendarEvent
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
     * @return CalendarEvent
     */
    public function setTransaction(RecordRef $transaction): CalendarEvent
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
     * @param int $period
     * @return CalendarEvent
     */
    public function setPeriod(int $period): CalendarEvent
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return int
     */
    public function getPeriod(): int
    {
        return $this->period;
    }

    /**
     * @param RecurrenceFrequency $frequency
     * @return CalendarEvent
     */
    public function setFrequency(RecurrenceFrequency $frequency): CalendarEvent
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return RecurrenceFrequency
     */
    public function getFrequency(): RecurrenceFrequency
    {
        return $this->frequency;
    }

    /**
     * @param RecurrenceDowMaskList $recurrenceDowMaskList
     * @return CalendarEvent
     */
    public function setRecurrenceDowMaskList(RecurrenceDowMaskList $recurrenceDowMaskList): CalendarEvent
    {
        $this->recurrenceDowMaskList = $recurrenceDowMaskList;
        return $this;
    }

    /**
     * @return RecurrenceDowMaskList
     */
    public function getRecurrenceDowMaskList(): RecurrenceDowMaskList
    {
        return $this->recurrenceDowMaskList;
    }

    /**
     * @param RecurrenceDow $recurrenceDow
     * @return CalendarEvent
     */
    public function setRecurrenceDow(RecurrenceDow $recurrenceDow): CalendarEvent
    {
        $this->recurrenceDow = $recurrenceDow;
        return $this;
    }

    /**
     * @return RecurrenceDow
     */
    public function getRecurrenceDow(): RecurrenceDow
    {
        return $this->recurrenceDow;
    }

    /**
     * @param RecurrenceDowim $recurrenceDowim
     * @return CalendarEvent
     */
    public function setRecurrenceDowim(RecurrenceDowim $recurrenceDowim): CalendarEvent
    {
        $this->recurrenceDowim = $recurrenceDowim;
        return $this;
    }

    /**
     * @return RecurrenceDowim
     */
    public function getRecurrenceDowim(): RecurrenceDowim
    {
        return $this->recurrenceDowim;
    }

    /**
     * @param string $seriesStartDate
     * @return CalendarEvent
     */
    public function setSeriesStartDate(string $seriesStartDate): CalendarEvent
    {
        $this->seriesStartDate = $seriesStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeriesStartDate(): string
    {
        return $this->seriesStartDate;
    }

    /**
     * @param string $endByDate
     * @return CalendarEvent
     */
    public function setEndByDate(string $endByDate): CalendarEvent
    {
        $this->endByDate = $endByDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndByDate(): string
    {
        return $this->endByDate;
    }

    /**
     * @param bool $noEndDate
     * @return CalendarEvent
     */
    public function setNoEndDate(bool $noEndDate): CalendarEvent
    {
        $this->noEndDate = $noEndDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNoEndDate(): bool
    {
        return $this->noEndDate;
    }

    /**
     * @param bool $sendEmail
     * @return CalendarEvent
     */
    public function setSendEmail(bool $sendEmail): CalendarEvent
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
     * @param RecordRef $customForm
     * @return CalendarEvent
     */
    public function setCustomForm(RecordRef $customForm): CalendarEvent
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
     * @return CalendarEvent
     */
    public function setTitle(string $title): CalendarEvent
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
     * @param string $recurrence
     * @return CalendarEvent
     */
    public function setRecurrence(string $recurrence): CalendarEvent
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecurrence(): string
    {
        return $this->recurrence;
    }

    /**
     * @param string $location
     * @return CalendarEvent
     */
    public function setLocation(string $location): CalendarEvent
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $startDate
     * @return CalendarEvent
     */
    public function setStartDate(string $startDate): CalendarEvent
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
     * @param bool $allDayEvent
     * @return CalendarEvent
     */
    public function setAllDayEvent(bool $allDayEvent): CalendarEvent
    {
        $this->allDayEvent = $allDayEvent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllDayEvent(): bool
    {
        return $this->allDayEvent;
    }

    /**
     * @param bool $timedEvent
     * @return CalendarEvent
     */
    public function setTimedEvent(bool $timedEvent): CalendarEvent
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
     * @param CalendarEventReminderType $reminderType
     * @return CalendarEvent
     */
    public function setReminderType(CalendarEventReminderType $reminderType): CalendarEvent
    {
        $this->reminderType = $reminderType;
        return $this;
    }

    /**
     * @return CalendarEventReminderType
     */
    public function getReminderType(): CalendarEventReminderType
    {
        return $this->reminderType;
    }

    /**
     * @param CalendarEventReminderMinutes $reminderMinutes
     * @return CalendarEvent
     */
    public function setReminderMinutes(CalendarEventReminderMinutes $reminderMinutes): CalendarEvent
    {
        $this->reminderMinutes = $reminderMinutes;
        return $this;
    }

    /**
     * @return CalendarEventReminderMinutes
     */
    public function getReminderMinutes(): CalendarEventReminderMinutes
    {
        return $this->reminderMinutes;
    }

    /**
     * @param CalendarEventStatus $status
     * @return CalendarEvent
     */
    public function setStatus(CalendarEventStatus $status): CalendarEvent
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return CalendarEventStatus
     */
    public function getStatus(): CalendarEventStatus
    {
        return $this->status;
    }

    /**
     * @param CalendarEventAccessLevel $accessLevel
     * @return CalendarEvent
     */
    public function setAccessLevel(CalendarEventAccessLevel $accessLevel): CalendarEvent
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return CalendarEventAccessLevel
     */
    public function getAccessLevel(): CalendarEventAccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @param RecordRef $organizer
     * @return CalendarEvent
     */
    public function setOrganizer(RecordRef $organizer): CalendarEvent
    {
        $this->organizer = $organizer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrganizer(): RecordRef
    {
        return $this->organizer;
    }

    /**
     * @param string $message
     * @return CalendarEvent
     */
    public function setMessage(string $message): CalendarEvent
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
     * @param string $createdDate
     * @return CalendarEvent
     */
    public function setCreatedDate(string $createdDate): CalendarEvent
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
     * @param string $endDate
     * @return CalendarEvent
     */
    public function setEndDate(string $endDate): CalendarEvent
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
     * @param ExclusionDateList $exclusionDateList
     * @return CalendarEvent
     */
    public function setExclusionDateList(ExclusionDateList $exclusionDateList): CalendarEvent
    {
        $this->exclusionDateList = $exclusionDateList;
        return $this;
    }

    /**
     * @return ExclusionDateList
     */
    public function getExclusionDateList(): ExclusionDateList
    {
        return $this->exclusionDateList;
    }

    /**
     * @param string $lastModifiedDate
     * @return CalendarEvent
     */
    public function setLastModifiedDate(string $lastModifiedDate): CalendarEvent
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
     * @return CalendarEvent
     */
    public function setOwner(RecordRef $owner): CalendarEvent
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
     * @param CalendarEventAttendeeList $attendeeList
     * @return CalendarEvent
     */
    public function setAttendeeList(CalendarEventAttendeeList $attendeeList): CalendarEvent
    {
        $this->attendeeList = $attendeeList;
        return $this;
    }

    /**
     * @return CalendarEventAttendeeList
     */
    public function getAttendeeList(): CalendarEventAttendeeList
    {
        return $this->attendeeList;
    }

    /**
     * @param CalendarEventResourceList $resourceList
     * @return CalendarEvent
     */
    public function setResourceList(CalendarEventResourceList $resourceList): CalendarEvent
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * @return CalendarEventResourceList
     */
    public function getResourceList(): CalendarEventResourceList
    {
        return $this->resourceList;
    }

    /**
     * @param CalendarEventTimeItemList $timeItemList
     * @return CalendarEvent
     */
    public function setTimeItemList(CalendarEventTimeItemList $timeItemList): CalendarEvent
    {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * @return CalendarEventTimeItemList
     */
    public function getTimeItemList(): CalendarEventTimeItemList
    {
        return $this->timeItemList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return CalendarEvent
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CalendarEvent
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
     * @return CalendarEvent
     */
    public function setInternalId(string $internalId): CalendarEvent
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
     * @return CalendarEvent
     */
    public function setExternalId(string $externalId): CalendarEvent
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
