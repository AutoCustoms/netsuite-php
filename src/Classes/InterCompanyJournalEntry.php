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

class InterCompanyJournalEntry extends Record {
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
     * @var float
     */
    protected float $exchangeRate;

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
     * @var RecordRef
     */
    protected RecordRef $toSubsidiary;

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
     * @var InterCompanyJournalEntryLineList
     */
    protected InterCompanyJournalEntryLineList $lineList;

    /**
     * @var InterCompanyJournalEntryAccountingBookDetailList
     */
    protected InterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList;

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
        "exchangeRate" => "float",
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
        "toSubsidiary" => "RecordRef",
        "approved" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "lineList" => "InterCompanyJournalEntryLineList",
        "accountingBookDetailList" => "InterCompanyJournalEntryAccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $postingPeriod
     * @return InterCompanyJournalEntry
     */
    public function setPostingPeriod(RecordRef $postingPeriod): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setCustomForm(RecordRef $customForm): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setTranDate(string $tranDate): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setCurrency(RecordRef $currency): InterCompanyJournalEntry
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
     * @param float $exchangeRate
     * @return InterCompanyJournalEntry
     */
    public function setExchangeRate(float $exchangeRate): InterCompanyJournalEntry
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    /**
     * @param string $tranId
     * @return InterCompanyJournalEntry
     */
    public function setTranId(string $tranId): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setReversalDate(string $reversalDate): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setReversalDefer(bool $reversalDefer): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setParentExpenseAlloc(RecordRef $parentExpenseAlloc): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setIsBookSpecific(bool $isBookSpecific): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setAccountingBook(RecordRef $accountingBook): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setReversalEntry(string $reversalEntry): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setCreatedFrom(RecordRef $createdFrom): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setDepartment(RecordRef $department): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setClass(RecordRef $class): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setLocation(RecordRef $location): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setSubsidiary(RecordRef $subsidiary): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setMemo(string $memo): InterCompanyJournalEntry
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
     * @param RecordRef $toSubsidiary
     * @return InterCompanyJournalEntry
     */
    public function setToSubsidiary(RecordRef $toSubsidiary): InterCompanyJournalEntry
    {
        $this->toSubsidiary = $toSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToSubsidiary(): RecordRef
    {
        return $this->toSubsidiary;
    }

    /**
     * @param bool $approved
     * @return InterCompanyJournalEntry
     */
    public function setApproved(bool $approved): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setCreatedDate(string $createdDate): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setLastModifiedDate(string $lastModifiedDate): InterCompanyJournalEntry
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
     * @param InterCompanyJournalEntryLineList $lineList
     * @return InterCompanyJournalEntry
     */
    public function setLineList(InterCompanyJournalEntryLineList $lineList): InterCompanyJournalEntry
    {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * @return InterCompanyJournalEntryLineList
     */
    public function getLineList(): InterCompanyJournalEntryLineList
    {
        return $this->lineList;
    }

    /**
     * @param InterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList
     * @return InterCompanyJournalEntry
     */
    public function setAccountingBookDetailList(InterCompanyJournalEntryAccountingBookDetailList $accountingBookDetailList): InterCompanyJournalEntry
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return InterCompanyJournalEntryAccountingBookDetailList
     */
    public function getAccountingBookDetailList(): InterCompanyJournalEntryAccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return InterCompanyJournalEntry
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setInternalId(string $internalId): InterCompanyJournalEntry
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
     * @return InterCompanyJournalEntry
     */
    public function setExternalId(string $externalId): InterCompanyJournalEntry
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
