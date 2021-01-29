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

class SupportCaseSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assigned;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $awaitingReply;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $category;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $company;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $contact;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $customerStage;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $escalatee;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $helpDesk;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $inboundEmail;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $issue;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $issueNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastMessageDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastReopenedDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $locked;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $module;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $origin;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $priority;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $product;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $profile;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $serialNumber;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $stage;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

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
        "awaitingReply" => "SearchColumnBooleanField[]",
        "caseNumber" => "SearchColumnStringField[]",
        "category" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "customerStage" => "SearchColumnEnumSelectField[]",
        "email" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "escalatee" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "helpDesk" => "SearchColumnBooleanField[]",
        "inboundEmail" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "issue" => "SearchColumnSelectField[]",
        "issueNumber" => "SearchColumnStringField[]",
        "item" => "SearchColumnSelectField[]",
        "lastMessageDate" => "SearchColumnDateField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastReopenedDate" => "SearchColumnDateField[]",
        "locked" => "SearchColumnBooleanField[]",
        "module" => "SearchColumnSelectField[]",
        "origin" => "SearchColumnSelectField[]",
        "priority" => "SearchColumnSelectField[]",
        "product" => "SearchColumnSelectField[]",
        "profile" => "SearchColumnSelectField[]",
        "serialNumber" => "SearchColumnStringField[]",
        "stage" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $assigned
     * @return SupportCaseSearchRowBasic
     */
    public function setAssigned(SearchColumnSelectField $assigned): SupportCaseSearchRowBasic
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
     * @param SearchColumnBooleanField[] $awaitingReply
     * @return SupportCaseSearchRowBasic
     */
    public function setAwaitingReply(SearchColumnBooleanField $awaitingReply): SupportCaseSearchRowBasic
    {
        $this->awaitingReply[] = $awaitingReply;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAwaitingReply(): array
    {
        return $this->awaitingReply;
    }

    /**
     * @param SearchColumnStringField[] $caseNumber
     * @return SupportCaseSearchRowBasic
     */
    public function setCaseNumber(SearchColumnStringField $caseNumber): SupportCaseSearchRowBasic
    {
        $this->caseNumber[] = $caseNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseNumber(): array
    {
        return $this->caseNumber;
    }

    /**
     * @param SearchColumnSelectField[] $category
     * @return SupportCaseSearchRowBasic
     */
    public function setCategory(SearchColumnSelectField $category): SupportCaseSearchRowBasic
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param SearchColumnSelectField[] $company
     * @return SupportCaseSearchRowBasic
     */
    public function setCompany(SearchColumnSelectField $company): SupportCaseSearchRowBasic
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
     * @param SearchColumnSelectField[] $contact
     * @return SupportCaseSearchRowBasic
     */
    public function setContact(SearchColumnSelectField $contact): SupportCaseSearchRowBasic
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
     * @return SupportCaseSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): SupportCaseSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $customerStage
     * @return SupportCaseSearchRowBasic
     */
    public function setCustomerStage(SearchColumnEnumSelectField $customerStage): SupportCaseSearchRowBasic
    {
        $this->customerStage[] = $customerStage;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCustomerStage(): array
    {
        return $this->customerStage;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return SupportCaseSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): SupportCaseSearchRowBasic
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail(): array
    {
        return $this->email;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return SupportCaseSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): SupportCaseSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $escalatee
     * @return SupportCaseSearchRowBasic
     */
    public function setEscalatee(SearchColumnSelectField $escalatee): SupportCaseSearchRowBasic
    {
        $this->escalatee[] = $escalatee;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEscalatee(): array
    {
        return $this->escalatee;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return SupportCaseSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): SupportCaseSearchRowBasic
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
     * @param SearchColumnBooleanField[] $helpDesk
     * @return SupportCaseSearchRowBasic
     */
    public function setHelpDesk(SearchColumnBooleanField $helpDesk): SupportCaseSearchRowBasic
    {
        $this->helpDesk[] = $helpDesk;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHelpDesk(): array
    {
        return $this->helpDesk;
    }

    /**
     * @param SearchColumnStringField[] $inboundEmail
     * @return SupportCaseSearchRowBasic
     */
    public function setInboundEmail(SearchColumnStringField $inboundEmail): SupportCaseSearchRowBasic
    {
        $this->inboundEmail[] = $inboundEmail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInboundEmail(): array
    {
        return $this->inboundEmail;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return SupportCaseSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): SupportCaseSearchRowBasic
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
     * @return SupportCaseSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): SupportCaseSearchRowBasic
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
     * @param SearchColumnSelectField[] $issue
     * @return SupportCaseSearchRowBasic
     */
    public function setIssue(SearchColumnSelectField $issue): SupportCaseSearchRowBasic
    {
        $this->issue[] = $issue;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIssue(): array
    {
        return $this->issue;
    }

    /**
     * @param SearchColumnStringField[] $issueNumber
     * @return SupportCaseSearchRowBasic
     */
    public function setIssueNumber(SearchColumnStringField $issueNumber): SupportCaseSearchRowBasic
    {
        $this->issueNumber[] = $issueNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIssueNumber(): array
    {
        return $this->issueNumber;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return SupportCaseSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): SupportCaseSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnDateField[] $lastMessageDate
     * @return SupportCaseSearchRowBasic
     */
    public function setLastMessageDate(SearchColumnDateField $lastMessageDate): SupportCaseSearchRowBasic
    {
        $this->lastMessageDate[] = $lastMessageDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastMessageDate(): array
    {
        return $this->lastMessageDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return SupportCaseSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): SupportCaseSearchRowBasic
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
     * @param SearchColumnDateField[] $lastReopenedDate
     * @return SupportCaseSearchRowBasic
     */
    public function setLastReopenedDate(SearchColumnDateField $lastReopenedDate): SupportCaseSearchRowBasic
    {
        $this->lastReopenedDate[] = $lastReopenedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastReopenedDate(): array
    {
        return $this->lastReopenedDate;
    }

    /**
     * @param SearchColumnBooleanField[] $locked
     * @return SupportCaseSearchRowBasic
     */
    public function setLocked(SearchColumnBooleanField $locked): SupportCaseSearchRowBasic
    {
        $this->locked[] = $locked;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLocked(): array
    {
        return $this->locked;
    }

    /**
     * @param SearchColumnSelectField[] $module
     * @return SupportCaseSearchRowBasic
     */
    public function setModule(SearchColumnSelectField $module): SupportCaseSearchRowBasic
    {
        $this->module[] = $module;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getModule(): array
    {
        return $this->module;
    }

    /**
     * @param SearchColumnSelectField[] $origin
     * @return SupportCaseSearchRowBasic
     */
    public function setOrigin(SearchColumnSelectField $origin): SupportCaseSearchRowBasic
    {
        $this->origin[] = $origin;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOrigin(): array
    {
        return $this->origin;
    }

    /**
     * @param SearchColumnSelectField[] $priority
     * @return SupportCaseSearchRowBasic
     */
    public function setPriority(SearchColumnSelectField $priority): SupportCaseSearchRowBasic
    {
        $this->priority[] = $priority;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriority(): array
    {
        return $this->priority;
    }

    /**
     * @param SearchColumnSelectField[] $product
     * @return SupportCaseSearchRowBasic
     */
    public function setProduct(SearchColumnSelectField $product): SupportCaseSearchRowBasic
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProduct(): array
    {
        return $this->product;
    }

    /**
     * @param SearchColumnSelectField[] $profile
     * @return SupportCaseSearchRowBasic
     */
    public function setProfile(SearchColumnSelectField $profile): SupportCaseSearchRowBasic
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProfile(): array
    {
        return $this->profile;
    }

    /**
     * @param SearchColumnStringField[] $serialNumber
     * @return SupportCaseSearchRowBasic
     */
    public function setSerialNumber(SearchColumnStringField $serialNumber): SupportCaseSearchRowBasic
    {
        $this->serialNumber[] = $serialNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumber(): array
    {
        return $this->serialNumber;
    }

    /**
     * @param SearchColumnEnumSelectField[] $stage
     * @return SupportCaseSearchRowBasic
     */
    public function setStage(SearchColumnEnumSelectField $stage): SupportCaseSearchRowBasic
    {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStage(): array
    {
        return $this->stage;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return SupportCaseSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): SupportCaseSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnSelectField[] $status
     * @return SupportCaseSearchRowBasic
     */
    public function setStatus(SearchColumnSelectField $status): SupportCaseSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return SupportCaseSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): SupportCaseSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return SupportCaseSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): SupportCaseSearchRowBasic
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
     * @return SupportCaseSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): SupportCaseSearchRowBasic
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
