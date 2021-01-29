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

class CalendarEventSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $accessLevel;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $attendee;

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
     * @var SearchColumnStringField[]
     */
    protected array $endTime;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $instanceEnd;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $instanceStart;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $location;

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
    protected array $organizer;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $recurrence;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $resource;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $response;

    /**
     * @var SearchColumnStringField[]
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
        "accessLevel" => "SearchColumnEnumSelectField[]",
        "attendee" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "completedDate" => "SearchColumnDateField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endTime" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "instanceEnd" => "SearchColumnDateField[]",
        "instanceStart" => "SearchColumnDateField[]",
        "internalId" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnStringField[]",
        "markdone" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "organizer" => "SearchColumnSelectField[]",
        "owner" => "SearchColumnSelectField[]",
        "recurrence" => "SearchColumnStringField[]",
        "resource" => "SearchColumnSelectField[]",
        "response" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnStringField[]",
        "startTime" => "SearchColumnStringField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "title" => "SearchColumnStringField[]",
        "transaction" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnEnumSelectField[] $accessLevel
     * @return CalendarEventSearchRowBasic
     */
    public function setAccessLevel(SearchColumnEnumSelectField $accessLevel): CalendarEventSearchRowBasic
    {
        $this->accessLevel[] = $accessLevel;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAccessLevel(): array
    {
        return $this->accessLevel;
    }

    /**
     * @param SearchColumnSelectField[] $attendee
     * @return CalendarEventSearchRowBasic
     */
    public function setAttendee(SearchColumnSelectField $attendee): CalendarEventSearchRowBasic
    {
        $this->attendee[] = $attendee;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAttendee(): array
    {
        return $this->attendee;
    }

    /**
     * @param SearchColumnSelectField[] $company
     * @return CalendarEventSearchRowBasic
     */
    public function setCompany(SearchColumnSelectField $company): CalendarEventSearchRowBasic
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
     * @return CalendarEventSearchRowBasic
     */
    public function setCompletedDate(SearchColumnDateField $completedDate): CalendarEventSearchRowBasic
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
     * @return CalendarEventSearchRowBasic
     */
    public function setContact(SearchColumnSelectField $contact): CalendarEventSearchRowBasic
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
     * @return CalendarEventSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): CalendarEventSearchRowBasic
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
     * @param SearchColumnStringField[] $endTime
     * @return CalendarEventSearchRowBasic
     */
    public function setEndTime(SearchColumnStringField $endTime): CalendarEventSearchRowBasic
    {
        $this->endTime[] = $endTime;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEndTime(): array
    {
        return $this->endTime;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return CalendarEventSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): CalendarEventSearchRowBasic
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
     * @param SearchColumnDateField[] $instanceEnd
     * @return CalendarEventSearchRowBasic
     */
    public function setInstanceEnd(SearchColumnDateField $instanceEnd): CalendarEventSearchRowBasic
    {
        $this->instanceEnd[] = $instanceEnd;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getInstanceEnd(): array
    {
        return $this->instanceEnd;
    }

    /**
     * @param SearchColumnDateField[] $instanceStart
     * @return CalendarEventSearchRowBasic
     */
    public function setInstanceStart(SearchColumnDateField $instanceStart): CalendarEventSearchRowBasic
    {
        $this->instanceStart[] = $instanceStart;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getInstanceStart(): array
    {
        return $this->instanceStart;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return CalendarEventSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CalendarEventSearchRowBasic
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
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return CalendarEventSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): CalendarEventSearchRowBasic
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
     * @param SearchColumnStringField[] $location
     * @return CalendarEventSearchRowBasic
     */
    public function setLocation(SearchColumnStringField $location): CalendarEventSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $markdone
     * @return CalendarEventSearchRowBasic
     */
    public function setMarkdone(SearchColumnStringField $markdone): CalendarEventSearchRowBasic
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
     * @return CalendarEventSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): CalendarEventSearchRowBasic
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
     * @param SearchColumnSelectField[] $organizer
     * @return CalendarEventSearchRowBasic
     */
    public function setOrganizer(SearchColumnSelectField $organizer): CalendarEventSearchRowBasic
    {
        $this->organizer[] = $organizer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOrganizer(): array
    {
        return $this->organizer;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return CalendarEventSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): CalendarEventSearchRowBasic
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
     * @param SearchColumnStringField[] $recurrence
     * @return CalendarEventSearchRowBasic
     */
    public function setRecurrence(SearchColumnStringField $recurrence): CalendarEventSearchRowBasic
    {
        $this->recurrence[] = $recurrence;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecurrence(): array
    {
        return $this->recurrence;
    }

    /**
     * @param SearchColumnSelectField[] $resource
     * @return CalendarEventSearchRowBasic
     */
    public function setResource(SearchColumnSelectField $resource): CalendarEventSearchRowBasic
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResource(): array
    {
        return $this->resource;
    }

    /**
     * @param SearchColumnEnumSelectField[] $response
     * @return CalendarEventSearchRowBasic
     */
    public function setResponse(SearchColumnEnumSelectField $response): CalendarEventSearchRowBasic
    {
        $this->response[] = $response;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getResponse(): array
    {
        return $this->response;
    }

    /**
     * @param SearchColumnStringField[] $startDate
     * @return CalendarEventSearchRowBasic
     */
    public function setStartDate(SearchColumnStringField $startDate): CalendarEventSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnStringField[] $startTime
     * @return CalendarEventSearchRowBasic
     */
    public function setStartTime(SearchColumnStringField $startTime): CalendarEventSearchRowBasic
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
     * @return CalendarEventSearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): CalendarEventSearchRowBasic
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
     * @param SearchColumnStringField[] $title
     * @return CalendarEventSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): CalendarEventSearchRowBasic
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
     * @return CalendarEventSearchRowBasic
     */
    public function setTransaction(SearchColumnSelectField $transaction): CalendarEventSearchRowBasic
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
     * @return CalendarEventSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): CalendarEventSearchRowBasic
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
