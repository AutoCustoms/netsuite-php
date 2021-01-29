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

class SupportCase extends Record {
    /**
     * @var string
     */
    protected string $escalationMessage;

    /**
     * @var string
     */
    protected string $lastReopenedDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var string
     */
    protected string $incomingMessage;

    /**
     * @var RecordRef
     */
    protected RecordRef $insertSolution;

    /**
     * @var string
     */
    protected string $outgoingMessage;

    /**
     * @var string
     */
    protected string $searchSolution;

    /**
     * @var bool
     */
    protected bool $emailForm;

    /**
     * @var string
     */
    protected string $newSolutionFromMsg;

    /**
     * @var bool
     */
    protected bool $internalOnly;

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
    protected string $caseNumber;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $lastMessageDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $company;

    /**
     * @var RecordRef
     */
    protected RecordRef $profile;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $contact;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var RecordRef
     */
    protected RecordRef $product;

    /**
     * @var RecordRef
     */
    protected RecordRef $module;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $serialNumber;

    /**
     * @var string
     */
    protected string $inboundEmail;

    /**
     * @var RecordRef
     */
    protected RecordRef $issue;

    /**
     * @var RecordRef
     */
    protected RecordRef $status;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RecordRef
     */
    protected RecordRef $priority;

    /**
     * @var RecordRef
     */
    protected RecordRef $origin;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var RecordRef
     */
    protected RecordRef $assigned;

    /**
     * @var bool
     */
    protected bool $helpDesk;

    /**
     * @var EmailEmployeesList
     */
    protected EmailEmployeesList $emailEmployeesList;

    /**
     * @var SupportCaseEscalateToList
     */
    protected SupportCaseEscalateToList $escalateToList;

    /**
     * @var SupportCaseTimeItemList
     */
    protected SupportCaseTimeItemList $timeItemList;

    /**
     * @var SupportCaseSolutionsList
     */
    protected SupportCaseSolutionsList $solutionsList;

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
        "escalationMessage" => "string",
        "lastReopenedDate" => "dateTime",
        "endDate" => "dateTime",
        "incomingMessage" => "string",
        "insertSolution" => "RecordRef",
        "outgoingMessage" => "string",
        "searchSolution" => "string",
        "emailForm" => "boolean",
        "newSolutionFromMsg" => "string",
        "internalOnly" => "boolean",
        "customForm" => "RecordRef",
        "title" => "string",
        "caseNumber" => "string",
        "startDate" => "dateTime",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "lastMessageDate" => "dateTime",
        "company" => "RecordRef",
        "profile" => "RecordRef",
        "subsidiary" => "RecordRef",
        "contact" => "RecordRef",
        "email" => "string",
        "phone" => "string",
        "product" => "RecordRef",
        "module" => "RecordRef",
        "item" => "RecordRef",
        "serialNumber" => "RecordRef",
        "inboundEmail" => "string",
        "issue" => "RecordRef",
        "status" => "RecordRef",
        "isInactive" => "boolean",
        "priority" => "RecordRef",
        "origin" => "RecordRef",
        "category" => "RecordRef",
        "assigned" => "RecordRef",
        "helpDesk" => "boolean",
        "emailEmployeesList" => "EmailEmployeesList",
        "escalateToList" => "SupportCaseEscalateToList",
        "timeItemList" => "SupportCaseTimeItemList",
        "solutionsList" => "SupportCaseSolutionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $escalationMessage
     * @return SupportCase
     */
    public function setEscalationMessage(string $escalationMessage): SupportCase
    {
        $this->escalationMessage = $escalationMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getEscalationMessage(): string
    {
        return $this->escalationMessage;
    }

    /**
     * @param string $lastReopenedDate
     * @return SupportCase
     */
    public function setLastReopenedDate(string $lastReopenedDate): SupportCase
    {
        $this->lastReopenedDate = $lastReopenedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastReopenedDate(): string
    {
        return $this->lastReopenedDate;
    }

    /**
     * @param string $endDate
     * @return SupportCase
     */
    public function setEndDate(string $endDate): SupportCase
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
     * @param string $incomingMessage
     * @return SupportCase
     */
    public function setIncomingMessage(string $incomingMessage): SupportCase
    {
        $this->incomingMessage = $incomingMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncomingMessage(): string
    {
        return $this->incomingMessage;
    }

    /**
     * @param RecordRef $insertSolution
     * @return SupportCase
     */
    public function setInsertSolution(RecordRef $insertSolution): SupportCase
    {
        $this->insertSolution = $insertSolution;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInsertSolution(): RecordRef
    {
        return $this->insertSolution;
    }

    /**
     * @param string $outgoingMessage
     * @return SupportCase
     */
    public function setOutgoingMessage(string $outgoingMessage): SupportCase
    {
        $this->outgoingMessage = $outgoingMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutgoingMessage(): string
    {
        return $this->outgoingMessage;
    }

    /**
     * @param string $searchSolution
     * @return SupportCase
     */
    public function setSearchSolution(string $searchSolution): SupportCase
    {
        $this->searchSolution = $searchSolution;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchSolution(): string
    {
        return $this->searchSolution;
    }

    /**
     * @param bool $emailForm
     * @return SupportCase
     */
    public function setEmailForm(bool $emailForm): SupportCase
    {
        $this->emailForm = $emailForm;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEmailForm(): bool
    {
        return $this->emailForm;
    }

    /**
     * @param string $newSolutionFromMsg
     * @return SupportCase
     */
    public function setNewSolutionFromMsg(string $newSolutionFromMsg): SupportCase
    {
        $this->newSolutionFromMsg = $newSolutionFromMsg;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewSolutionFromMsg(): string
    {
        return $this->newSolutionFromMsg;
    }

    /**
     * @param bool $internalOnly
     * @return SupportCase
     */
    public function setInternalOnly(bool $internalOnly): SupportCase
    {
        $this->internalOnly = $internalOnly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInternalOnly(): bool
    {
        return $this->internalOnly;
    }

    /**
     * @param RecordRef $customForm
     * @return SupportCase
     */
    public function setCustomForm(RecordRef $customForm): SupportCase
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
     * @return SupportCase
     */
    public function setTitle(string $title): SupportCase
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
     * @param string $caseNumber
     * @return SupportCase
     */
    public function setCaseNumber(string $caseNumber): SupportCase
    {
        $this->caseNumber = $caseNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaseNumber(): string
    {
        return $this->caseNumber;
    }

    /**
     * @param string $startDate
     * @return SupportCase
     */
    public function setStartDate(string $startDate): SupportCase
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
     * @param string $createdDate
     * @return SupportCase
     */
    public function setCreatedDate(string $createdDate): SupportCase
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
     * @return SupportCase
     */
    public function setLastModifiedDate(string $lastModifiedDate): SupportCase
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
     * @param string $lastMessageDate
     * @return SupportCase
     */
    public function setLastMessageDate(string $lastMessageDate): SupportCase
    {
        $this->lastMessageDate = $lastMessageDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastMessageDate(): string
    {
        return $this->lastMessageDate;
    }

    /**
     * @param RecordRef $company
     * @return SupportCase
     */
    public function setCompany(RecordRef $company): SupportCase
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
     * @param RecordRef $profile
     * @return SupportCase
     */
    public function setProfile(RecordRef $profile): SupportCase
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProfile(): RecordRef
    {
        return $this->profile;
    }

    /**
     * @param RecordRef $subsidiary
     * @return SupportCase
     */
    public function setSubsidiary(RecordRef $subsidiary): SupportCase
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $contact
     * @return SupportCase
     */
    public function setContact(RecordRef $contact): SupportCase
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
     * @param string $email
     * @return SupportCase
     */
    public function setEmail(string $email): SupportCase
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $phone
     * @return SupportCase
     */
    public function setPhone(string $phone): SupportCase
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
     * @param RecordRef $product
     * @return SupportCase
     */
    public function setProduct(RecordRef $product): SupportCase
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProduct(): RecordRef
    {
        return $this->product;
    }

    /**
     * @param RecordRef $module
     * @return SupportCase
     */
    public function setModule(RecordRef $module): SupportCase
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getModule(): RecordRef
    {
        return $this->module;
    }

    /**
     * @param RecordRef $item
     * @return SupportCase
     */
    public function setItem(RecordRef $item): SupportCase
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $serialNumber
     * @return SupportCase
     */
    public function setSerialNumber(RecordRef $serialNumber): SupportCase
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSerialNumber(): RecordRef
    {
        return $this->serialNumber;
    }

    /**
     * @param string $inboundEmail
     * @return SupportCase
     */
    public function setInboundEmail(string $inboundEmail): SupportCase
    {
        $this->inboundEmail = $inboundEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getInboundEmail(): string
    {
        return $this->inboundEmail;
    }

    /**
     * @param RecordRef $issue
     * @return SupportCase
     */
    public function setIssue(RecordRef $issue): SupportCase
    {
        $this->issue = $issue;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssue(): RecordRef
    {
        return $this->issue;
    }

    /**
     * @param RecordRef $status
     * @return SupportCase
     */
    public function setStatus(RecordRef $status): SupportCase
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStatus(): RecordRef
    {
        return $this->status;
    }

    /**
     * @param bool $isInactive
     * @return SupportCase
     */
    public function setIsInactive(bool $isInactive): SupportCase
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
     * @param RecordRef $priority
     * @return SupportCase
     */
    public function setPriority(RecordRef $priority): SupportCase
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriority(): RecordRef
    {
        return $this->priority;
    }

    /**
     * @param RecordRef $origin
     * @return SupportCase
     */
    public function setOrigin(RecordRef $origin): SupportCase
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOrigin(): RecordRef
    {
        return $this->origin;
    }

    /**
     * @param RecordRef $category
     * @return SupportCase
     */
    public function setCategory(RecordRef $category): SupportCase
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param RecordRef $assigned
     * @return SupportCase
     */
    public function setAssigned(RecordRef $assigned): SupportCase
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
     * @param bool $helpDesk
     * @return SupportCase
     */
    public function setHelpDesk(bool $helpDesk): SupportCase
    {
        $this->helpDesk = $helpDesk;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHelpDesk(): bool
    {
        return $this->helpDesk;
    }

    /**
     * @param EmailEmployeesList $emailEmployeesList
     * @return SupportCase
     */
    public function setEmailEmployeesList(EmailEmployeesList $emailEmployeesList): SupportCase
    {
        $this->emailEmployeesList = $emailEmployeesList;
        return $this;
    }

    /**
     * @return EmailEmployeesList
     */
    public function getEmailEmployeesList(): EmailEmployeesList
    {
        return $this->emailEmployeesList;
    }

    /**
     * @param SupportCaseEscalateToList $escalateToList
     * @return SupportCase
     */
    public function setEscalateToList(SupportCaseEscalateToList $escalateToList): SupportCase
    {
        $this->escalateToList = $escalateToList;
        return $this;
    }

    /**
     * @return SupportCaseEscalateToList
     */
    public function getEscalateToList(): SupportCaseEscalateToList
    {
        return $this->escalateToList;
    }

    /**
     * @param SupportCaseTimeItemList $timeItemList
     * @return SupportCase
     */
    public function setTimeItemList(SupportCaseTimeItemList $timeItemList): SupportCase
    {
        $this->timeItemList = $timeItemList;
        return $this;
    }

    /**
     * @return SupportCaseTimeItemList
     */
    public function getTimeItemList(): SupportCaseTimeItemList
    {
        return $this->timeItemList;
    }

    /**
     * @param SupportCaseSolutionsList $solutionsList
     * @return SupportCase
     */
    public function setSolutionsList(SupportCaseSolutionsList $solutionsList): SupportCase
    {
        $this->solutionsList = $solutionsList;
        return $this;
    }

    /**
     * @return SupportCaseSolutionsList
     */
    public function getSolutionsList(): SupportCaseSolutionsList
    {
        return $this->solutionsList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return SupportCase
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): SupportCase
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
     * @return SupportCase
     */
    public function setInternalId(string $internalId): SupportCase
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
     * @return SupportCase
     */
    public function setExternalId(string $externalId): SupportCase
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
