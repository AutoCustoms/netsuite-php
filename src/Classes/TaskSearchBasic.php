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

class TaskSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $actualTime;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assigned;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $company;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $completedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $contact;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedTime;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedTimeOverride;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

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
    protected SearchBooleanField $isJobSummaryTask;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isJobTask;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPrivate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $milestone;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $owner;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $percentComplete;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $percentTimeComplete;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $priority;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $timeRemaining;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "actualTime" => "SearchDoubleField",
        "assigned" => "SearchMultiSelectField",
        "company" => "SearchMultiSelectField",
        "completedDate" => "SearchDateField",
        "contact" => "SearchMultiSelectField",
        "createdDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "estimatedTime" => "SearchDoubleField",
        "estimatedTimeOverride" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isJobSummaryTask" => "SearchBooleanField",
        "isJobTask" => "SearchBooleanField",
        "isPrivate" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "milestone" => "SearchLongField",
        "owner" => "SearchMultiSelectField",
        "percentComplete" => "SearchLongField",
        "percentTimeComplete" => "SearchLongField",
        "priority" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "timeRemaining" => "SearchDoubleField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $actualTime
     * @return TaskSearchBasic
     */
    public function setActualTime(SearchDoubleField $actualTime): TaskSearchBasic
    {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualTime(): SearchDoubleField
    {
        return $this->actualTime;
    }

    /**
     * @param SearchMultiSelectField $assigned
     * @return TaskSearchBasic
     */
    public function setAssigned(SearchMultiSelectField $assigned): TaskSearchBasic
    {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssigned(): SearchMultiSelectField
    {
        return $this->assigned;
    }

    /**
     * @param SearchMultiSelectField $company
     * @return TaskSearchBasic
     */
    public function setCompany(SearchMultiSelectField $company): TaskSearchBasic
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
     * @param SearchDateField $completedDate
     * @return TaskSearchBasic
     */
    public function setCompletedDate(SearchDateField $completedDate): TaskSearchBasic
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
     * @param SearchMultiSelectField $contact
     * @return TaskSearchBasic
     */
    public function setContact(SearchMultiSelectField $contact): TaskSearchBasic
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
     * @param SearchDateField $createdDate
     * @return TaskSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): TaskSearchBasic
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
     * @return TaskSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): TaskSearchBasic
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
     * @param SearchDoubleField $estimatedTime
     * @return TaskSearchBasic
     */
    public function setEstimatedTime(SearchDoubleField $estimatedTime): TaskSearchBasic
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTime(): SearchDoubleField
    {
        return $this->estimatedTime;
    }

    /**
     * @param SearchDoubleField $estimatedTimeOverride
     * @return TaskSearchBasic
     */
    public function setEstimatedTimeOverride(SearchDoubleField $estimatedTimeOverride): TaskSearchBasic
    {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverride(): SearchDoubleField
    {
        return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return TaskSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TaskSearchBasic
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
     * @return TaskSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TaskSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return TaskSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TaskSearchBasic
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
     * @return TaskSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TaskSearchBasic
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
     * @param SearchBooleanField $isJobSummaryTask
     * @return TaskSearchBasic
     */
    public function setIsJobSummaryTask(SearchBooleanField $isJobSummaryTask): TaskSearchBasic
    {
        $this->isJobSummaryTask = $isJobSummaryTask;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobSummaryTask(): SearchBooleanField
    {
        return $this->isJobSummaryTask;
    }

    /**
     * @param SearchBooleanField $isJobTask
     * @return TaskSearchBasic
     */
    public function setIsJobTask(SearchBooleanField $isJobTask): TaskSearchBasic
    {
        $this->isJobTask = $isJobTask;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobTask(): SearchBooleanField
    {
        return $this->isJobTask;
    }

    /**
     * @param SearchBooleanField $isPrivate
     * @return TaskSearchBasic
     */
    public function setIsPrivate(SearchBooleanField $isPrivate): TaskSearchBasic
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPrivate(): SearchBooleanField
    {
        return $this->isPrivate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return TaskSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): TaskSearchBasic
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
     * @param SearchLongField $milestone
     * @return TaskSearchBasic
     */
    public function setMilestone(SearchLongField $milestone): TaskSearchBasic
    {
        $this->milestone = $milestone;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getMilestone(): SearchLongField
    {
        return $this->milestone;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return TaskSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): TaskSearchBasic
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
     * @param SearchLongField $percentComplete
     * @return TaskSearchBasic
     */
    public function setPercentComplete(SearchLongField $percentComplete): TaskSearchBasic
    {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPercentComplete(): SearchLongField
    {
        return $this->percentComplete;
    }

    /**
     * @param SearchLongField $percentTimeComplete
     * @return TaskSearchBasic
     */
    public function setPercentTimeComplete(SearchLongField $percentTimeComplete): TaskSearchBasic
    {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPercentTimeComplete(): SearchLongField
    {
        return $this->percentTimeComplete;
    }

    /**
     * @param SearchEnumMultiSelectField $priority
     * @return TaskSearchBasic
     */
    public function setPriority(SearchEnumMultiSelectField $priority): TaskSearchBasic
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
     * @param SearchDateField $startDate
     * @return TaskSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): TaskSearchBasic
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
     * @return TaskSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): TaskSearchBasic
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
     * @param SearchDoubleField $timeRemaining
     * @return TaskSearchBasic
     */
    public function setTimeRemaining(SearchDoubleField $timeRemaining): TaskSearchBasic
    {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTimeRemaining(): SearchDoubleField
    {
        return $this->timeRemaining;
    }

    /**
     * @param SearchStringField $title
     * @return TaskSearchBasic
     */
    public function setTitle(SearchStringField $title): TaskSearchBasic
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
     * @return TaskSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): TaskSearchBasic
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
