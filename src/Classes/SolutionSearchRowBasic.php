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

class SolutionSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assigned;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $caseCount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $displayOnline;

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
    protected array $isInactive;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $previewref;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $solutionCode;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "assigned" => "SearchColumnSelectField[]",
        "caseCount" => "SearchColumnLongField[]",
        "createdDate" => "SearchColumnDateField[]",
        "description" => "SearchColumnStringField[]",
        "displayOnline" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "message" => "SearchColumnStringField[]",
        "previewref" => "SearchColumnStringField[]",
        "solutionCode" => "SearchColumnStringField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $assigned
     * @return SolutionSearchRowBasic
     */
    public function setAssigned(SearchColumnSelectField $assigned): SolutionSearchRowBasic
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
     * @param SearchColumnLongField[] $caseCount
     * @return SolutionSearchRowBasic
     */
    public function setCaseCount(SearchColumnLongField $caseCount): SolutionSearchRowBasic
    {
        $this->caseCount[] = $caseCount;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getCaseCount(): array
    {
        return $this->caseCount;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return SolutionSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): SolutionSearchRowBasic
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
     * @param SearchColumnStringField[] $description
     * @return SolutionSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): SolutionSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnBooleanField[] $displayOnline
     * @return SolutionSearchRowBasic
     */
    public function setDisplayOnline(SearchColumnBooleanField $displayOnline): SolutionSearchRowBasic
    {
        $this->displayOnline[] = $displayOnline;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDisplayOnline(): array
    {
        return $this->displayOnline;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return SolutionSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): SolutionSearchRowBasic
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
     * @return SolutionSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): SolutionSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInactive
     * @return SolutionSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): SolutionSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return SolutionSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): SolutionSearchRowBasic
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
     * @param SearchColumnStringField[] $message
     * @return SolutionSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): SolutionSearchRowBasic
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
     * @param SearchColumnStringField[] $previewref
     * @return SolutionSearchRowBasic
     */
    public function setPreviewref(SearchColumnStringField $previewref): SolutionSearchRowBasic
    {
        $this->previewref[] = $previewref;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPreviewref(): array
    {
        return $this->previewref;
    }

    /**
     * @param SearchColumnStringField[] $solutionCode
     * @return SolutionSearchRowBasic
     */
    public function setSolutionCode(SearchColumnStringField $solutionCode): SolutionSearchRowBasic
    {
        $this->solutionCode[] = $solutionCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSolutionCode(): array
    {
        return $this->solutionCode;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return SolutionSearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): SolutionSearchRowBasic
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
     * @return SolutionSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): SolutionSearchRowBasic
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
     * @param SearchColumnCustomFieldList $customFieldList
     * @return SolutionSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): SolutionSearchRowBasic
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
