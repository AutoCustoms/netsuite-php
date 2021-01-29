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

class SolutionSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $abstract;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assigned;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $caseCount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $code;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $find;

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
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isOnline;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $number;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $topic;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "abstract" => "SearchStringField",
        "assigned" => "SearchMultiSelectField",
        "caseCount" => "SearchLongField",
        "code" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "find" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isOnline" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "number" => "SearchLongField",
        "status" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "topic" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $abstract
     * @return SolutionSearchBasic
     */
    public function setAbstract(SearchStringField $abstract): SolutionSearchBasic
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAbstract(): SearchStringField
    {
        return $this->abstract;
    }

    /**
     * @param SearchMultiSelectField $assigned
     * @return SolutionSearchBasic
     */
    public function setAssigned(SearchMultiSelectField $assigned): SolutionSearchBasic
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
     * @param SearchLongField $caseCount
     * @return SolutionSearchBasic
     */
    public function setCaseCount(SearchLongField $caseCount): SolutionSearchBasic
    {
        $this->caseCount = $caseCount;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getCaseCount(): SearchLongField
    {
        return $this->caseCount;
    }

    /**
     * @param SearchStringField $code
     * @return SolutionSearchBasic
     */
    public function setCode(SearchStringField $code): SolutionSearchBasic
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCode(): SearchStringField
    {
        return $this->code;
    }

    /**
     * @param SearchDateField $createdDate
     * @return SolutionSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): SolutionSearchBasic
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
     * @param SearchStringField $description
     * @return SolutionSearchBasic
     */
    public function setDescription(SearchStringField $description): SolutionSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return SolutionSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): SolutionSearchBasic
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
     * @return SolutionSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): SolutionSearchBasic
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
     * @param SearchStringField $find
     * @return SolutionSearchBasic
     */
    public function setFind(SearchStringField $find): SolutionSearchBasic
    {
        $this->find = $find;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFind(): SearchStringField
    {
        return $this->find;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return SolutionSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): SolutionSearchBasic
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
     * @return SolutionSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): SolutionSearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return SolutionSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): SolutionSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isOnline
     * @return SolutionSearchBasic
     */
    public function setIsOnline(SearchBooleanField $isOnline): SolutionSearchBasic
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOnline(): SearchBooleanField
    {
        return $this->isOnline;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return SolutionSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): SolutionSearchBasic
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
     * @param SearchLongField $number
     * @return SolutionSearchBasic
     */
    public function setNumber(SearchLongField $number): SolutionSearchBasic
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber(): SearchLongField
    {
        return $this->number;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return SolutionSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): SolutionSearchBasic
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
     * @return SolutionSearchBasic
     */
    public function setTitle(SearchStringField $title): SolutionSearchBasic
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
     * @param SearchMultiSelectField $topic
     * @return SolutionSearchBasic
     */
    public function setTopic(SearchMultiSelectField $topic): SolutionSearchBasic
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTopic(): SearchMultiSelectField
    {
        return $this->topic;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return SolutionSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): SolutionSearchBasic
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
