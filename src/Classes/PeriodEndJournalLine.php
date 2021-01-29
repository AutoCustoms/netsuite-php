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

class PeriodEndJournalLine {
    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var float
     */
    protected float $debit;

    /**
     * @var float
     */
    protected float $credit;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "account" => "RecordRef",
        "debit" => "float",
        "credit" => "float",
        "memo" => "string",
        "line" => "integer",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $account
     * @return PeriodEndJournalLine
     */
    public function setAccount(RecordRef $account): PeriodEndJournalLine
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
     * @param float $debit
     * @return PeriodEndJournalLine
     */
    public function setDebit(float $debit): PeriodEndJournalLine
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
     * @param float $credit
     * @return PeriodEndJournalLine
     */
    public function setCredit(float $credit): PeriodEndJournalLine
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * @return float
     */
    public function getCredit(): float
    {
        return $this->credit;
    }

    /**
     * @param string $memo
     * @return PeriodEndJournalLine
     */
    public function setMemo(string $memo): PeriodEndJournalLine
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
     * @param int $line
     * @return PeriodEndJournalLine
     */
    public function setLine(int $line): PeriodEndJournalLine
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
     * @param CustomFieldList $customFieldList
     * @return PeriodEndJournalLine
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PeriodEndJournalLine
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
