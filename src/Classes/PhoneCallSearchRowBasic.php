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

class PhoneCallSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $accessLevel;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assigned;

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
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

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
    protected array $markdone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phone;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $priority;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnDateField[]
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
        "accessLevel" => "SearchColumnStringField[]",
        "assigned" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "completedDate" => "SearchColumnDateField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "markdone" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "priority" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "startTime" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "title" => "SearchColumnStringField[]",
        "transaction" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $accessLevel
     * @return PhoneCallSearchRowBasic
     */
    public function setAccessLevel(SearchColumnStringField $accessLevel): PhoneCallSearchRowBasic
    {
        $this->accessLevel[] = $accessLevel;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccessLevel(): array
    {
        return $this->accessLevel;
    }

    /**
     * @param SearchColumnSelectField[] $assigned
     * @return PhoneCallSearchRowBasic
     */
    public function setAssigned(SearchColumnSelectField $assigned): PhoneCallSearchRowBasic
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
     * @param SearchColumnSelectField[] $company
     * @return PhoneCallSearchRowBasic
     */
    public function setCompany(SearchColumnSelectField $company): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setCompletedDate(SearchColumnDateField $completedDate): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setContact(SearchColumnSelectField $contact): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): PhoneCallSearchRowBasic
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
     * @param SearchColumnDateField[] $endDate
     * @return PhoneCallSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): PhoneCallSearchRowBasic
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
     * @param SearchColumnSelectField[] $externalId
     * @return PhoneCallSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): PhoneCallSearchRowBasic
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
     * @param SearchColumnStringField[] $markdone
     * @return PhoneCallSearchRowBasic
     */
    public function setMarkdone(SearchColumnStringField $markdone): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): PhoneCallSearchRowBasic
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
     * @param SearchColumnSelectField[] $owner
     * @return PhoneCallSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): PhoneCallSearchRowBasic
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
     * @param SearchColumnStringField[] $phone
     * @return PhoneCallSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): PhoneCallSearchRowBasic
    {
        $this->phone[] = $phone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhone(): array
    {
        return $this->phone;
    }

    /**
     * @param SearchColumnEnumSelectField[] $priority
     * @return PhoneCallSearchRowBasic
     */
    public function setPriority(SearchColumnEnumSelectField $priority): PhoneCallSearchRowBasic
    {
        $this->priority[] = $priority;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPriority(): array
    {
        return $this->priority;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return PhoneCallSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): PhoneCallSearchRowBasic
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
     * @param SearchColumnDateField[] $startTime
     * @return PhoneCallSearchRowBasic
     */
    public function setStartTime(SearchColumnDateField $startTime): PhoneCallSearchRowBasic
    {
        $this->startTime[] = $startTime;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartTime(): array
    {
        return $this->startTime;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return PhoneCallSearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setTransaction(SearchColumnSelectField $transaction): PhoneCallSearchRowBasic
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
     * @return PhoneCallSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): PhoneCallSearchRowBasic
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
