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

class CalendarEventSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $accessLevel;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $attendee;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $calendar;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $completedDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

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
    protected SearchDateField $instanceStart;

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
    protected SearchBooleanField $isUpcomingEvent;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $message;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $organizer;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $owner;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $resource;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $response;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accessLevel" => "SearchEnumMultiSelectField",
        "attendee" => "SearchMultiSelectField",
        "calendar" => "SearchMultiSelectField",
        "completedDate" => "SearchDateField",
        "createdDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "instanceStart" => "SearchDateField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isUpcomingEvent" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "location" => "SearchStringField",
        "message" => "SearchStringField",
        "organizer" => "SearchMultiSelectField",
        "owner" => "SearchMultiSelectField",
        "resource" => "SearchMultiSelectField",
        "response" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchEnumMultiSelectField $accessLevel
     * @return CalendarEventSearchBasic
     */
    public function setAccessLevel(SearchEnumMultiSelectField $accessLevel): CalendarEventSearchBasic
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAccessLevel(): SearchEnumMultiSelectField
    {
        return $this->accessLevel;
    }

    /**
     * @param SearchMultiSelectField $attendee
     * @return CalendarEventSearchBasic
     */
    public function setAttendee(SearchMultiSelectField $attendee): CalendarEventSearchBasic
    {
        $this->attendee = $attendee;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAttendee(): SearchMultiSelectField
    {
        return $this->attendee;
    }

    /**
     * @param SearchMultiSelectField $calendar
     * @return CalendarEventSearchBasic
     */
    public function setCalendar(SearchMultiSelectField $calendar): CalendarEventSearchBasic
    {
        $this->calendar = $calendar;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCalendar(): SearchMultiSelectField
    {
        return $this->calendar;
    }

    /**
     * @param SearchDateField $completedDate
     * @return CalendarEventSearchBasic
     */
    public function setCompletedDate(SearchDateField $completedDate): CalendarEventSearchBasic
    {
        $this->completedDate = $completedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCompletedDate(): SearchDateField
    {
        return $this->completedDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return CalendarEventSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): CalendarEventSearchBasic
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
     * @param SearchMultiSelectField $externalId
     * @return CalendarEventSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): CalendarEventSearchBasic
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
     * @return CalendarEventSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): CalendarEventSearchBasic
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
     * @param SearchDateField $instanceStart
     * @return CalendarEventSearchBasic
     */
    public function setInstanceStart(SearchDateField $instanceStart): CalendarEventSearchBasic
    {
        $this->instanceStart = $instanceStart;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getInstanceStart(): SearchDateField
    {
        return $this->instanceStart;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return CalendarEventSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CalendarEventSearchBasic
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
     * @return CalendarEventSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CalendarEventSearchBasic
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
     * @param SearchBooleanField $isUpcomingEvent
     * @return CalendarEventSearchBasic
     */
    public function setIsUpcomingEvent(SearchBooleanField $isUpcomingEvent): CalendarEventSearchBasic
    {
        $this->isUpcomingEvent = $isUpcomingEvent;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsUpcomingEvent(): SearchBooleanField
    {
        return $this->isUpcomingEvent;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return CalendarEventSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): CalendarEventSearchBasic
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
     * @param SearchStringField $location
     * @return CalendarEventSearchBasic
     */
    public function setLocation(SearchStringField $location): CalendarEventSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocation(): SearchStringField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $message
     * @return CalendarEventSearchBasic
     */
    public function setMessage(SearchStringField $message): CalendarEventSearchBasic
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage(): SearchStringField
    {
        return $this->message;
    }

    /**
     * @param SearchMultiSelectField $organizer
     * @return CalendarEventSearchBasic
     */
    public function setOrganizer(SearchMultiSelectField $organizer): CalendarEventSearchBasic
    {
        $this->organizer = $organizer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOrganizer(): SearchMultiSelectField
    {
        return $this->organizer;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return CalendarEventSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): CalendarEventSearchBasic
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
     * @param SearchMultiSelectField $resource
     * @return CalendarEventSearchBasic
     */
    public function setResource(SearchMultiSelectField $resource): CalendarEventSearchBasic
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResource(): SearchMultiSelectField
    {
        return $this->resource;
    }

    /**
     * @param SearchEnumMultiSelectField $response
     * @return CalendarEventSearchBasic
     */
    public function setResponse(SearchEnumMultiSelectField $response): CalendarEventSearchBasic
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getResponse(): SearchEnumMultiSelectField
    {
        return $this->response;
    }

    /**
     * @param SearchDateField $startDate
     * @return CalendarEventSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): CalendarEventSearchBasic
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
     * @param SearchEnumMultiSelectField $status
     * @return CalendarEventSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): CalendarEventSearchBasic
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
     * @param SearchStringField $title
     * @return CalendarEventSearchBasic
     */
    public function setTitle(SearchStringField $title): CalendarEventSearchBasic
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
     * @return CalendarEventSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): CalendarEventSearchBasic
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
