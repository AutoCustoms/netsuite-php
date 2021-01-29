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

class PeriodEndJournal extends Record {
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
    protected string $transactionNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $accountingBook;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var string
     */
    protected string $trandate;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceSubsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $mainAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $creditTotal;

    /**
     * @var float
     */
    protected float $debitTotal;

    /**
     * @var PeriodEndJournalLineList
     */
    protected PeriodEndJournalLineList $lineList;

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
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "transactionNumber" => "string",
        "accountingBook" => "RecordRef",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "trandate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "sourceSubsidiary" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "mainAccount" => "RecordRef",
        "currency" => "RecordRef",
        "creditTotal" => "float",
        "debitTotal" => "float",
        "lineList" => "PeriodEndJournalLineList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return PeriodEndJournal
     */
    public function setCreatedDate(string $createdDate): PeriodEndJournal
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
     * @return PeriodEndJournal
     */
    public function setLastModifiedDate(string $lastModifiedDate): PeriodEndJournal
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
     * @param string $transactionNumber
     * @return PeriodEndJournal
     */
    public function setTransactionNumber(string $transactionNumber): PeriodEndJournal
    {
        $this->transactionNumber = $transactionNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber(): string
    {
        return $this->transactionNumber;
    }

    /**
     * @param RecordRef $accountingBook
     * @return PeriodEndJournal
     */
    public function setAccountingBook(RecordRef $accountingBook): PeriodEndJournal
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
     * @param RecordRef $customForm
     * @return PeriodEndJournal
     */
    public function setCustomForm(RecordRef $customForm): PeriodEndJournal
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
     * @param string $tranId
     * @return PeriodEndJournal
     */
    public function setTranId(string $tranId): PeriodEndJournal
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
     * @param string $trandate
     * @return PeriodEndJournal
     */
    public function setTrandate(string $trandate): PeriodEndJournal
    {
        $this->trandate = $trandate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrandate(): string
    {
        return $this->trandate;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return PeriodEndJournal
     */
    public function setPostingPeriod(RecordRef $postingPeriod): PeriodEndJournal
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
     * @param string $memo
     * @return PeriodEndJournal
     */
    public function setMemo(string $memo): PeriodEndJournal
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
     * @param RecordRef $subsidiary
     * @return PeriodEndJournal
     */
    public function setSubsidiary(RecordRef $subsidiary): PeriodEndJournal
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
     * @param RecordRef $sourceSubsidiary
     * @return PeriodEndJournal
     */
    public function setSourceSubsidiary(RecordRef $sourceSubsidiary): PeriodEndJournal
    {
        $this->sourceSubsidiary = $sourceSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceSubsidiary(): RecordRef
    {
        return $this->sourceSubsidiary;
    }

    /**
     * @param RecordRef $class
     * @return PeriodEndJournal
     */
    public function setClass(RecordRef $class): PeriodEndJournal
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
     * @param RecordRef $department
     * @return PeriodEndJournal
     */
    public function setDepartment(RecordRef $department): PeriodEndJournal
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
     * @param RecordRef $location
     * @return PeriodEndJournal
     */
    public function setLocation(RecordRef $location): PeriodEndJournal
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
     * @param RecordRef $mainAccount
     * @return PeriodEndJournal
     */
    public function setMainAccount(RecordRef $mainAccount): PeriodEndJournal
    {
        $this->mainAccount = $mainAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMainAccount(): RecordRef
    {
        return $this->mainAccount;
    }

    /**
     * @param RecordRef $currency
     * @return PeriodEndJournal
     */
    public function setCurrency(RecordRef $currency): PeriodEndJournal
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
     * @param float $creditTotal
     * @return PeriodEndJournal
     */
    public function setCreditTotal(float $creditTotal): PeriodEndJournal
    {
        $this->creditTotal = $creditTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditTotal(): float
    {
        return $this->creditTotal;
    }

    /**
     * @param float $debitTotal
     * @return PeriodEndJournal
     */
    public function setDebitTotal(float $debitTotal): PeriodEndJournal
    {
        $this->debitTotal = $debitTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getDebitTotal(): float
    {
        return $this->debitTotal;
    }

    /**
     * @param PeriodEndJournalLineList $lineList
     * @return PeriodEndJournal
     */
    public function setLineList(PeriodEndJournalLineList $lineList): PeriodEndJournal
    {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * @return PeriodEndJournalLineList
     */
    public function getLineList(): PeriodEndJournalLineList
    {
        return $this->lineList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return PeriodEndJournal
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PeriodEndJournal
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
     * @return PeriodEndJournal
     */
    public function setInternalId(string $internalId): PeriodEndJournal
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
     * @return PeriodEndJournal
     */
    public function setExternalId(string $externalId): PeriodEndJournal
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
