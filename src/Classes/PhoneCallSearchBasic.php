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

class PhoneCallSearchBasic extends SearchRecordBasic {
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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $createdBy;

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
    protected SearchBooleanField $isPrivate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $owner;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phone;

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
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "assigned" => "SearchMultiSelectField",
        "company" => "SearchMultiSelectField",
        "completedDate" => "SearchDateField",
        "contact" => "SearchMultiSelectField",
        "createdBy" => "SearchMultiSelectField",
        "createdDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isPrivate" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "owner" => "SearchBooleanField",
        "phone" => "SearchStringField",
        "priority" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $assigned
     * @return PhoneCallSearchBasic
     */
    public function setAssigned(SearchMultiSelectField $assigned): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setCompany(SearchMultiSelectField $company): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setCompletedDate(SearchDateField $completedDate): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setContact(SearchMultiSelectField $contact): PhoneCallSearchBasic
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
     * @param SearchMultiSelectField $createdBy
     * @return PhoneCallSearchBasic
     */
    public function setCreatedBy(SearchMultiSelectField $createdBy): PhoneCallSearchBasic
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreatedBy(): SearchMultiSelectField
    {
        return $this->createdBy;
    }

    /**
     * @param SearchDateField $createdDate
     * @return PhoneCallSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PhoneCallSearchBasic
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
     * @param SearchBooleanField $isPrivate
     * @return PhoneCallSearchBasic
     */
    public function setIsPrivate(SearchBooleanField $isPrivate): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): PhoneCallSearchBasic
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
     * @param SearchBooleanField $owner
     * @return PhoneCallSearchBasic
     */
    public function setOwner(SearchBooleanField $owner): PhoneCallSearchBasic
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOwner(): SearchBooleanField
    {
        return $this->owner;
    }

    /**
     * @param SearchStringField $phone
     * @return PhoneCallSearchBasic
     */
    public function setPhone(SearchStringField $phone): PhoneCallSearchBasic
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhone(): SearchStringField
    {
        return $this->phone;
    }

    /**
     * @param SearchEnumMultiSelectField $priority
     * @return PhoneCallSearchBasic
     */
    public function setPriority(SearchEnumMultiSelectField $priority): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setTitle(SearchStringField $title): PhoneCallSearchBasic
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
     * @return PhoneCallSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): PhoneCallSearchBasic
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
