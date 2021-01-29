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

class AdvInterCompanyJournalEntry extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var string
     */
    protected string $reversalDate;

    /**
     * @var bool
     */
    protected bool $reversalDefer;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentExpenseAlloc;

    /**
     * @var bool
     */
    protected bool $isBookSpecific;

    /**
     * @var RecordRef
     */
    protected RecordRef $accountingBook;

    /**
     * @var string
     */
    protected string $reversalEntry;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $approved;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var bool
     */
    protected bool $performAutoBalance;

    /**
     * @var AdvInterCompanyJournalEntryLineList
     */
    protected AdvInterCompanyJournalEntryLineList $lineList;

    /**
     * @var AdvInterCompanyJournalEntryAccountingBookDetailList
     */
    protected AdvInterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList;

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
        "postingPeriod" => "RecordRef",
        "customForm" => "RecordRef",
        "tranDate" => "dateTime",
        "currency" => "RecordRef",
        "tranId" => "string",
        "reversalDate" => "dateTime",
        "reversalDefer" => "boolean",
        "parentExpenseAlloc" => "RecordRef",
        "isBookSpecific" => "boolean",
        "accountingBook" => "RecordRef",
        "reversalEntry" => "string",
        "createdFrom" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "memo" => "string",
        "approved" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "performAutoBalance" => "boolean",
        "lineList" => "AdvInterCompanyJournalEntryLineList",
        "accountingBookDetailList" => "AdvInterCompanyJournalEntryAccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $postingPeriod
     * @return AdvInterCompanyJournalEntry
     */
    public function setPostingPeriod(RecordRef $postingPeriod): AdvInterCompanyJournalEntry
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param RecordRef $customForm
     * @return AdvInterCompanyJournalEntry
     */
    public function setCustomForm(RecordRef $customForm): AdvInterCompanyJournalEntry
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
     * @param string $tranDate
     * @return AdvInterCompanyJournalEntry
     */
    public function setTranDate(string $tranDate): AdvInterCompanyJournalEntry
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param RecordRef $currency
     * @return AdvInterCompanyJournalEntry
     */
    public function setCurrency(RecordRef $currency): AdvInterCompanyJournalEntry
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param string $tranId
     * @return AdvInterCompanyJournalEntry
     */
    public function setTranId(string $tranId): AdvInterCompanyJournalEntry
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranId(): string
    {
        return $this->tranId;
    }

    /**
     * @param string $reversalDate
     * @return AdvInterCompanyJournalEntry
     */
    public function setReversalDate(string $reversalDate): AdvInterCompanyJournalEntry
    {
        $this->reversalDate = $reversalDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReversalDate(): string
    {
        return $this->reversalDate;
    }

    /**
     * @param bool $reversalDefer
     * @return AdvInterCompanyJournalEntry
     */
    public function setReversalDefer(bool $reversalDefer): AdvInterCompanyJournalEntry
    {
        $this->reversalDefer = $reversalDefer;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReversalDefer(): bool
    {
        return $this->reversalDefer;
    }

    /**
     * @param RecordRef $parentExpenseAlloc
     * @return AdvInterCompanyJournalEntry
     */
    public function setParentExpenseAlloc(RecordRef $parentExpenseAlloc): AdvInterCompanyJournalEntry
    {
        $this->parentExpenseAlloc = $parentExpenseAlloc;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentExpenseAlloc(): RecordRef
    {
        return $this->parentExpenseAlloc;
    }

    /**
     * @param bool $isBookSpecific
     * @return AdvInterCompanyJournalEntry
     */
    public function setIsBookSpecific(bool $isBookSpecific): AdvInterCompanyJournalEntry
    {
        $this->isBookSpecific = $isBookSpecific;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBookSpecific(): bool
    {
        return $this->isBookSpecific;
    }

    /**
     * @param RecordRef $accountingBook
     * @return AdvInterCompanyJournalEntry
     */
    public function setAccountingBook(RecordRef $accountingBook): AdvInterCompanyJournalEntry
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook(): RecordRef
    {
        return $this->accountingBook;
    }

    /**
     * @param string $reversalEntry
     * @return AdvInterCompanyJournalEntry
     */
    public function setReversalEntry(string $reversalEntry): AdvInterCompanyJournalEntry
    {
        $this->reversalEntry = $reversalEntry;
        return $this;
    }

    /**
     * @return string
     */
    public function getReversalEntry(): string
    {
        return $this->reversalEntry;
    }

    /**
     * @param RecordRef $createdFrom
     * @return AdvInterCompanyJournalEntry
     */
    public function setCreatedFrom(RecordRef $createdFrom): AdvInterCompanyJournalEntry
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param RecordRef $department
     * @return AdvInterCompanyJournalEntry
     */
    public function setDepartment(RecordRef $department): AdvInterCompanyJournalEntry
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return AdvInterCompanyJournalEntry
     */
    public function setClass(RecordRef $class): AdvInterCompanyJournalEntry
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return AdvInterCompanyJournalEntry
     */
    public function setLocation(RecordRef $location): AdvInterCompanyJournalEntry
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $subsidiary
     * @return AdvInterCompanyJournalEntry
     */
    public function setSubsidiary(RecordRef $subsidiary): AdvInterCompanyJournalEntry
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
     * @param string $memo
     * @return AdvInterCompanyJournalEntry
     */
    public function setMemo(string $memo): AdvInterCompanyJournalEntry
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param bool $approved
     * @return AdvInterCompanyJournalEntry
     */
    public function setApproved(bool $approved): AdvInterCompanyJournalEntry
    {
        $this->approved = $approved;
        return $this;
    }

    /**
     * @return bool
     */
    public function getApproved(): bool
    {
        return $this->approved;
    }

    /**
     * @param string $createdDate
     * @return AdvInterCompanyJournalEntry
     */
    public function setCreatedDate(string $createdDate): AdvInterCompanyJournalEntry
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
     * @return AdvInterCompanyJournalEntry
     */
    public function setLastModifiedDate(string $lastModifiedDate): AdvInterCompanyJournalEntry
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
     * @param bool $performAutoBalance
     * @return AdvInterCompanyJournalEntry
     */
    public function setPerformAutoBalance(bool $performAutoBalance): AdvInterCompanyJournalEntry
    {
        $this->performAutoBalance = $performAutoBalance;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPerformAutoBalance(): bool
    {
        return $this->performAutoBalance;
    }

    /**
     * @param AdvInterCompanyJournalEntryLineList $lineList
     * @return AdvInterCompanyJournalEntry
     */
    public function setLineList(AdvInterCompanyJournalEntryLineList $lineList): AdvInterCompanyJournalEntry
    {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * @return AdvInterCompanyJournalEntryLineList
     */
    public function getLineList(): AdvInterCompanyJournalEntryLineList
    {
        return $this->lineList;
    }

    /**
     * @param AdvInterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList
     * @return AdvInterCompanyJournalEntry
     */
    public function setAccountingBookDetailList(AdvInterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList): AdvInterCompanyJournalEntry
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AdvInterCompanyJournalEntryAccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AdvInterCompanyJournalEntryAccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return AdvInterCompanyJournalEntry
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): AdvInterCompanyJournalEntry
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
     * @return AdvInterCompanyJournalEntry
     */
    public function setInternalId(string $internalId): AdvInterCompanyJournalEntry
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
     * @return AdvInterCompanyJournalEntry
     */
    public function setExternalId(string $externalId): AdvInterCompanyJournalEntry
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
