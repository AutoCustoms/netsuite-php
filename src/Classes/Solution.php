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

class Solution extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $solutionCode;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var SolutionStatus
     */
    protected SolutionStatus $status;

    /**
     * @var bool
     */
    protected bool $displayOnline;

    /**
     * @var RecordRef
     */
    protected RecordRef $assigned;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $longDescription;

    /**
     * @var SolutionTopicsList
     */
    protected SolutionTopicsList $topicsList;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var SolutionsList
     */
    protected SolutionsList $solutionsList;

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
        "customForm" => "RecordRef",
        "solutionCode" => "string",
        "title" => "string",
        "message" => "string",
        "status" => "SolutionStatus",
        "displayOnline" => "boolean",
        "assigned" => "RecordRef",
        "isInactive" => "boolean",
        "longDescription" => "string",
        "topicsList" => "SolutionTopicsList",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "solutionsList" => "SolutionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Solution
     */
    public function setCustomForm(RecordRef $customForm): Solution
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
     * @param string $solutionCode
     * @return Solution
     */
    public function setSolutionCode(string $solutionCode): Solution
    {
        $this->solutionCode = $solutionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSolutionCode(): string
    {
        return $this->solutionCode;
    }

    /**
     * @param string $title
     * @return Solution
     */
    public function setTitle(string $title): Solution
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
     * @param string $message
     * @return Solution
     */
    public function setMessage(string $message): Solution
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
     * @param SolutionStatus $status
     * @return Solution
     */
    public function setStatus(SolutionStatus $status): Solution
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SolutionStatus
     */
    public function getStatus(): SolutionStatus
    {
        return $this->status;
    }

    /**
     * @param bool $displayOnline
     * @return Solution
     */
    public function setDisplayOnline(bool $displayOnline): Solution
    {
        $this->displayOnline = $displayOnline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayOnline(): bool
    {
        return $this->displayOnline;
    }

    /**
     * @param RecordRef $assigned
     * @return Solution
     */
    public function setAssigned(RecordRef $assigned): Solution
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
     * @param bool $isInactive
     * @return Solution
     */
    public function setIsInactive(bool $isInactive): Solution
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $longDescription
     * @return Solution
     */
    public function setLongDescription(string $longDescription): Solution
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription(): string
    {
        return $this->longDescription;
    }

    /**
     * @param SolutionTopicsList $topicsList
     * @return Solution
     */
    public function setTopicsList(SolutionTopicsList $topicsList): Solution
    {
        $this->topicsList = $topicsList;
        return $this;
    }

    /**
     * @return SolutionTopicsList
     */
    public function getTopicsList(): SolutionTopicsList
    {
        return $this->topicsList;
    }

    /**
     * @param string $createdDate
     * @return Solution
     */
    public function setCreatedDate(string $createdDate): Solution
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
     * @return Solution
     */
    public function setLastModifiedDate(string $lastModifiedDate): Solution
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
     * @param SolutionsList $solutionsList
     * @return Solution
     */
    public function setSolutionsList(SolutionsList $solutionsList): Solution
    {
        $this->solutionsList = $solutionsList;
        return $this;
    }

    /**
     * @return SolutionsList
     */
    public function getSolutionsList(): SolutionsList
    {
        return $this->solutionsList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Solution
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Solution
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
     * @return Solution
     */
    public function setInternalId(string $internalId): Solution
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
     * @return Solution
     */
    public function setExternalId(string $externalId): Solution
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
