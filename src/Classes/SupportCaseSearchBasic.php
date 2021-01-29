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

class SupportCaseSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assigned;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $awaitingReply;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $caseNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $category;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $closedDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $company;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $contact;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $escalateTo;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $helpDesk;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $inboundEmail;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $issue;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $lastMessage;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastReopenedDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $locked;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $message;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $messageAuthor;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $messageDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $messageType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $module;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $number;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $origin;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $priority;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $product;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $profile;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $serialNumber;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $stage;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

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
        "awaitingReply" => "SearchBooleanField",
        "caseNumber" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "closedDate" => "SearchDateField",
        "company" => "SearchStringField",
        "contact" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "email" => "SearchStringField",
        "escalateTo" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "helpDesk" => "SearchBooleanField",
        "inboundEmail" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "issue" => "SearchMultiSelectField",
        "item" => "SearchMultiSelectField",
        "lastMessage" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "lastReopenedDate" => "SearchDateField",
        "locked" => "SearchBooleanField",
        "message" => "SearchStringField",
        "messageAuthor" => "SearchMultiSelectField",
        "messageDate" => "SearchDateField",
        "messageType" => "SearchBooleanField",
        "module" => "SearchMultiSelectField",
        "number" => "SearchLongField",
        "origin" => "SearchMultiSelectField",
        "priority" => "SearchMultiSelectField",
        "product" => "SearchMultiSelectField",
        "profile" => "SearchMultiSelectField",
        "serialNumber" => "SearchStringField",
        "stage" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $assigned
     * @return SupportCaseSearchBasic
     */
    public function setAssigned(SearchMultiSelectField $assigned): SupportCaseSearchBasic
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
     * @param SearchBooleanField $awaitingReply
     * @return SupportCaseSearchBasic
     */
    public function setAwaitingReply(SearchBooleanField $awaitingReply): SupportCaseSearchBasic
    {
        $this->awaitingReply = $awaitingReply;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAwaitingReply(): SearchBooleanField
    {
        return $this->awaitingReply;
    }

    /**
     * @param SearchStringField $caseNumber
     * @return SupportCaseSearchBasic
     */
    public function setCaseNumber(SearchStringField $caseNumber): SupportCaseSearchBasic
    {
        $this->caseNumber = $caseNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCaseNumber(): SearchStringField
    {
        return $this->caseNumber;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return SupportCaseSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): SupportCaseSearchBasic
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory(): SearchMultiSelectField
    {
        return $this->category;
    }

    /**
     * @param SearchDateField $closedDate
     * @return SupportCaseSearchBasic
     */
    public function setClosedDate(SearchDateField $closedDate): SupportCaseSearchBasic
    {
        $this->closedDate = $closedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getClosedDate(): SearchDateField
    {
        return $this->closedDate;
    }

    /**
     * @param SearchStringField $company
     * @return SupportCaseSearchBasic
     */
    public function setCompany(SearchStringField $company): SupportCaseSearchBasic
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCompany(): SearchStringField
    {
        return $this->company;
    }

    /**
     * @param SearchStringField $contact
     * @return SupportCaseSearchBasic
     */
    public function setContact(SearchStringField $contact): SupportCaseSearchBasic
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getContact(): SearchStringField
    {
        return $this->contact;
    }

    /**
     * @param SearchDateField $createdDate
     * @return SupportCaseSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): SupportCaseSearchBasic
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
     * @param SearchStringField $email
     * @return SupportCaseSearchBasic
     */
    public function setEmail(SearchStringField $email): SupportCaseSearchBasic
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail(): SearchStringField
    {
        return $this->email;
    }

    /**
     * @param SearchMultiSelectField $escalateTo
     * @return SupportCaseSearchBasic
     */
    public function setEscalateTo(SearchMultiSelectField $escalateTo): SupportCaseSearchBasic
    {
        $this->escalateTo = $escalateTo;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEscalateTo(): SearchMultiSelectField
    {
        return $this->escalateTo;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return SupportCaseSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): SupportCaseSearchBasic
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
     * @param SearchBooleanField $helpDesk
     * @return SupportCaseSearchBasic
     */
    public function setHelpDesk(SearchBooleanField $helpDesk): SupportCaseSearchBasic
    {
        $this->helpDesk = $helpDesk;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHelpDesk(): SearchBooleanField
    {
        return $this->helpDesk;
    }

    /**
     * @param SearchStringField $inboundEmail
     * @return SupportCaseSearchBasic
     */
    public function setInboundEmail(SearchStringField $inboundEmail): SupportCaseSearchBasic
    {
        $this->inboundEmail = $inboundEmail;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getInboundEmail(): SearchStringField
    {
        return $this->inboundEmail;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return SupportCaseSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): SupportCaseSearchBasic
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
     * @param SearchMultiSelectField $issue
     * @return SupportCaseSearchBasic
     */
    public function setIssue(SearchMultiSelectField $issue): SupportCaseSearchBasic
    {
        $this->issue = $issue;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIssue(): SearchMultiSelectField
    {
        return $this->issue;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return SupportCaseSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): SupportCaseSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchBooleanField $lastMessage
     * @return SupportCaseSearchBasic
     */
    public function setLastMessage(SearchBooleanField $lastMessage): SupportCaseSearchBasic
    {
        $this->lastMessage = $lastMessage;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLastMessage(): SearchBooleanField
    {
        return $this->lastMessage;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return SupportCaseSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): SupportCaseSearchBasic
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
     * @param SearchDateField $lastReopenedDate
     * @return SupportCaseSearchBasic
     */
    public function setLastReopenedDate(SearchDateField $lastReopenedDate): SupportCaseSearchBasic
    {
        $this->lastReopenedDate = $lastReopenedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastReopenedDate(): SearchDateField
    {
        return $this->lastReopenedDate;
    }

    /**
     * @param SearchBooleanField $locked
     * @return SupportCaseSearchBasic
     */
    public function setLocked(SearchBooleanField $locked): SupportCaseSearchBasic
    {
        $this->locked = $locked;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLocked(): SearchBooleanField
    {
        return $this->locked;
    }

    /**
     * @param SearchStringField $message
     * @return SupportCaseSearchBasic
     */
    public function setMessage(SearchStringField $message): SupportCaseSearchBasic
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
     * @param SearchMultiSelectField $messageAuthor
     * @return SupportCaseSearchBasic
     */
    public function setMessageAuthor(SearchMultiSelectField $messageAuthor): SupportCaseSearchBasic
    {
        $this->messageAuthor = $messageAuthor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMessageAuthor(): SearchMultiSelectField
    {
        return $this->messageAuthor;
    }

    /**
     * @param SearchDateField $messageDate
     * @return SupportCaseSearchBasic
     */
    public function setMessageDate(SearchDateField $messageDate): SupportCaseSearchBasic
    {
        $this->messageDate = $messageDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getMessageDate(): SearchDateField
    {
        return $this->messageDate;
    }

    /**
     * @param SearchBooleanField $messageType
     * @return SupportCaseSearchBasic
     */
    public function setMessageType(SearchBooleanField $messageType): SupportCaseSearchBasic
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMessageType(): SearchBooleanField
    {
        return $this->messageType;
    }

    /**
     * @param SearchMultiSelectField $module
     * @return SupportCaseSearchBasic
     */
    public function setModule(SearchMultiSelectField $module): SupportCaseSearchBasic
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getModule(): SearchMultiSelectField
    {
        return $this->module;
    }

    /**
     * @param SearchLongField $number
     * @return SupportCaseSearchBasic
     */
    public function setNumber(SearchLongField $number): SupportCaseSearchBasic
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
     * @param SearchMultiSelectField $origin
     * @return SupportCaseSearchBasic
     */
    public function setOrigin(SearchMultiSelectField $origin): SupportCaseSearchBasic
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOrigin(): SearchMultiSelectField
    {
        return $this->origin;
    }

    /**
     * @param SearchMultiSelectField $priority
     * @return SupportCaseSearchBasic
     */
    public function setPriority(SearchMultiSelectField $priority): SupportCaseSearchBasic
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriority(): SearchMultiSelectField
    {
        return $this->priority;
    }

    /**
     * @param SearchMultiSelectField $product
     * @return SupportCaseSearchBasic
     */
    public function setProduct(SearchMultiSelectField $product): SupportCaseSearchBasic
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProduct(): SearchMultiSelectField
    {
        return $this->product;
    }

    /**
     * @param SearchMultiSelectField $profile
     * @return SupportCaseSearchBasic
     */
    public function setProfile(SearchMultiSelectField $profile): SupportCaseSearchBasic
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProfile(): SearchMultiSelectField
    {
        return $this->profile;
    }

    /**
     * @param SearchStringField $serialNumber
     * @return SupportCaseSearchBasic
     */
    public function setSerialNumber(SearchStringField $serialNumber): SupportCaseSearchBasic
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSerialNumber(): SearchStringField
    {
        return $this->serialNumber;
    }

    /**
     * @param SearchEnumMultiSelectField $stage
     * @return SupportCaseSearchBasic
     */
    public function setStage(SearchEnumMultiSelectField $stage): SupportCaseSearchBasic
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStage(): SearchEnumMultiSelectField
    {
        return $this->stage;
    }

    /**
     * @param SearchDateField $startDate
     * @return SupportCaseSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): SupportCaseSearchBasic
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
     * @param SearchMultiSelectField $status
     * @return SupportCaseSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status): SupportCaseSearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStatus(): SearchMultiSelectField
    {
        return $this->status;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return SupportCaseSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): SupportCaseSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchStringField $title
     * @return SupportCaseSearchBasic
     */
    public function setTitle(SearchStringField $title): SupportCaseSearchBasic
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
     * @return SupportCaseSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): SupportCaseSearchBasic
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
