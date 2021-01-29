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

class StatisticalJournalEntryLine {
    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $scheduleNum;

    /**
     * @var float
     */
    protected float $debit;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

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
    protected RecordRef $lineUnit;

    /**
     * @var string
     */
    protected string $previewDebit;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "account" => "RecordRef",
        "line" => "integer",
        "location" => "RecordRef",
        "scheduleNum" => "RecordRef",
        "debit" => "float",
        "memo" => "string",
        "entity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "lineUnit" => "RecordRef",
        "previewDebit" => "string",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $account
     * @return StatisticalJournalEntryLine
     */
    public function setAccount(RecordRef $account): StatisticalJournalEntryLine
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount(): RecordRef
    {
        return $this->account;
    }

    /**
     * @param int $line
     * @return StatisticalJournalEntryLine
     */
    public function setLine(int $line): StatisticalJournalEntryLine
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param RecordRef $location
     * @return StatisticalJournalEntryLine
     */
    public function setLocation(RecordRef $location): StatisticalJournalEntryLine
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
     * @param RecordRef $scheduleNum
     * @return StatisticalJournalEntryLine
     */
    public function setScheduleNum(RecordRef $scheduleNum): StatisticalJournalEntryLine
    {
        $this->scheduleNum = $scheduleNum;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getScheduleNum(): RecordRef
    {
        return $this->scheduleNum;
    }

    /**
     * @param float $debit
     * @return StatisticalJournalEntryLine
     */
    public function setDebit(float $debit): StatisticalJournalEntryLine
    {
        $this->debit = $debit;
        return $this;
    }

    /**
     * @return float
     */
    public function getDebit(): float
    {
        return $this->debit;
    }

    /**
     * @param string $memo
     * @return StatisticalJournalEntryLine
     */
    public function setMemo(string $memo): StatisticalJournalEntryLine
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
     * @param RecordRef $entity
     * @return StatisticalJournalEntryLine
     */
    public function setEntity(RecordRef $entity): StatisticalJournalEntryLine
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param RecordRef $department
     * @return StatisticalJournalEntryLine
     */
    public function setDepartment(RecordRef $department): StatisticalJournalEntryLine
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
     * @return StatisticalJournalEntryLine
     */
    public function setClass(RecordRef $class): StatisticalJournalEntryLine
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
     * @param RecordRef $lineUnit
     * @return StatisticalJournalEntryLine
     */
    public function setLineUnit(RecordRef $lineUnit): StatisticalJournalEntryLine
    {
        $this->lineUnit = $lineUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLineUnit(): RecordRef
    {
        return $this->lineUnit;
    }

    /**
     * @param string $previewDebit
     * @return StatisticalJournalEntryLine
     */
    public function setPreviewDebit(string $previewDebit): StatisticalJournalEntryLine
    {
        $this->previewDebit = $previewDebit;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviewDebit(): string
    {
        return $this->previewDebit;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return StatisticalJournalEntryLine
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): StatisticalJournalEntryLine
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

}
