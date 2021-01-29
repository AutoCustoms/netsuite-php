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

class JournalEntry extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

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
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiaryTaxRegNum;

    /**
     * @var string
     */
    protected string $taxPointDate;

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
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var JournalEntryLineList
     */
    protected JournalEntryLineList $lineList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

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
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "memo" => "string",
        "toSubsidiary" => "RecordRef",
        "approved" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "lineList" => "JournalEntryLineList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $postingPeriod
     * @return JournalEntry
     */
    public function setPostingPeriod(RecordRef $postingPeriod): JournalEntry
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
     * @param string $tranDate
     * @return JournalEntry
     */
    public function setTranDate(string $tranDate): JournalEntry
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
     * @return JournalEntry
     */
    public function setCurrency(RecordRef $currency): JournalEntry
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
     * @return JournalEntry
     */
    public function setExchangeRate(float $exchangeRate): JournalEntry
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
     * @return JournalEntry
     */
    public function setTranId(string $tranId): JournalEntry
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
     * @return JournalEntry
     */
    public function setReversalDate(string $reversalDate): JournalEntry
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
     * @return JournalEntry
     */
    public function setReversalDefer(bool $reversalDefer): JournalEntry
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
     * @return JournalEntry
     */
    public function setParentExpenseAlloc(RecordRef $parentExpenseAlloc): JournalEntry
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
     * @return JournalEntry
     */
    public function setIsBookSpecific(bool $isBookSpecific): JournalEntry
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
     * @return JournalEntry
     */
    public function setAccountingBook(RecordRef $accountingBook): JournalEntry
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
     * @return JournalEntry
     */
    public function setReversalEntry(string $reversalEntry): JournalEntry
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
     * @return JournalEntry
     */
    public function setCreatedFrom(RecordRef $createdFrom): JournalEntry
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
     * @return JournalEntry
     */
    public function setDepartment(RecordRef $department): JournalEntry
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
     * @return JournalEntry
     */
    public function setClass(RecordRef $class): JournalEntry
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
     * @return JournalEntry
     */
    public function setLocation(RecordRef $location): JournalEntry
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
     * @return JournalEntry
     */
    public function setSubsidiary(RecordRef $subsidiary): JournalEntry
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
     * @param RecordRef $nexus
     * @return JournalEntry
     */
    public function setNexus(RecordRef $nexus): JournalEntry
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus(): RecordRef
    {
        return $this->nexus;
    }

    /**
     * @param RecordRef $subsidiaryTaxRegNum
     * @return JournalEntry
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): JournalEntry
    {
        $this->subsidiaryTaxRegNum = $subsidiaryTaxRegNum;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiaryTaxRegNum(): RecordRef
    {
        return $this->subsidiaryTaxRegNum;
    }

    /**
     * @param string $taxPointDate
     * @return JournalEntry
     */
    public function setTaxPointDate(string $taxPointDate): JournalEntry
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxPointDate(): string
    {
        return $this->taxPointDate;
    }

    /**
     * @param string $memo
     * @return JournalEntry
     */
    public function setMemo(string $memo): JournalEntry
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
     * @return JournalEntry
     */
    public function setToSubsidiary(RecordRef $toSubsidiary): JournalEntry
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
     * @return JournalEntry
     */
    public function setApproved(bool $approved): JournalEntry
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
     * @return JournalEntry
     */
    public function setCreatedDate(string $createdDate): JournalEntry
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
     * @return JournalEntry
     */
    public function setLastModifiedDate(string $lastModifiedDate): JournalEntry
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
     * @param RecordRef $customForm
     * @return JournalEntry
     */
    public function setCustomForm(RecordRef $customForm): JournalEntry
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
     * @param JournalEntryLineList $lineList
     * @return JournalEntry
     */
    public function setLineList(JournalEntryLineList $lineList): JournalEntry
    {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * @return JournalEntryLineList
     */
    public function getLineList(): JournalEntryLineList
    {
        return $this->lineList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return JournalEntry
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): JournalEntry
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return JournalEntry
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): JournalEntry
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
     * @return JournalEntry
     */
    public function setInternalId(string $internalId): JournalEntry
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
     * @return JournalEntry
     */
    public function setExternalId(string $externalId): JournalEntry
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
