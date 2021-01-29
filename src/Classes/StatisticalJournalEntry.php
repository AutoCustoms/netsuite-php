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

class StatisticalJournalEntry extends Record {
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
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentExpenseAlloc;

    /**
     * @var bool
     */
    protected bool $approved;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $reversalDate;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $reversalDefer;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $unitsType;

    /**
     * @var StatisticalJournalEntryLineList
     */
    protected StatisticalJournalEntryLineList $lineList;

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
        "customForm" => "RecordRef",
        "tranId" => "string",
        "parentExpenseAlloc" => "RecordRef",
        "approved" => "boolean",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "reversalDate" => "dateTime",
        "memo" => "string",
        "reversalDefer" => "boolean",
        "subsidiary" => "RecordRef",
        "unitsType" => "RecordRef",
        "lineList" => "StatisticalJournalEntryLineList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return StatisticalJournalEntry
     */
    public function setCreatedDate(string $createdDate): StatisticalJournalEntry
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
     * @return StatisticalJournalEntry
     */
    public function setLastModifiedDate(string $lastModifiedDate): StatisticalJournalEntry
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
     * @return StatisticalJournalEntry
     */
    public function setCustomForm(RecordRef $customForm): StatisticalJournalEntry
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
     * @return StatisticalJournalEntry
     */
    public function setTranId(string $tranId): StatisticalJournalEntry
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
     * @param RecordRef $parentExpenseAlloc
     * @return StatisticalJournalEntry
     */
    public function setParentExpenseAlloc(RecordRef $parentExpenseAlloc): StatisticalJournalEntry
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
     * @param bool $approved
     * @return StatisticalJournalEntry
     */
    public function setApproved(bool $approved): StatisticalJournalEntry
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
     * @param string $tranDate
     * @return StatisticalJournalEntry
     */
    public function setTranDate(string $tranDate): StatisticalJournalEntry
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
     * @param RecordRef $postingPeriod
     * @return StatisticalJournalEntry
     */
    public function setPostingPeriod(RecordRef $postingPeriod): StatisticalJournalEntry
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
     * @param string $reversalDate
     * @return StatisticalJournalEntry
     */
    public function setReversalDate(string $reversalDate): StatisticalJournalEntry
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
     * @param string $memo
     * @return StatisticalJournalEntry
     */
    public function setMemo(string $memo): StatisticalJournalEntry
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
     * @param bool $reversalDefer
     * @return StatisticalJournalEntry
     */
    public function setReversalDefer(bool $reversalDefer): StatisticalJournalEntry
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
     * @param RecordRef $subsidiary
     * @return StatisticalJournalEntry
     */
    public function setSubsidiary(RecordRef $subsidiary): StatisticalJournalEntry
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
     * @param RecordRef $unitsType
     * @return StatisticalJournalEntry
     */
    public function setUnitsType(RecordRef $unitsType): StatisticalJournalEntry
    {
        $this->unitsType = $unitsType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType(): RecordRef
    {
        return $this->unitsType;
    }

    /**
     * @param StatisticalJournalEntryLineList $lineList
     * @return StatisticalJournalEntry
     */
    public function setLineList(StatisticalJournalEntryLineList $lineList): StatisticalJournalEntry
    {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * @return StatisticalJournalEntryLineList
     */
    public function getLineList(): StatisticalJournalEntryLineList
    {
        return $this->lineList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return StatisticalJournalEntry
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): StatisticalJournalEntry
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
     * @return StatisticalJournalEntry
     */
    public function setInternalId(string $internalId): StatisticalJournalEntry
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
     * @return StatisticalJournalEntry
     */
    public function setExternalId(string $externalId): StatisticalJournalEntry
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
