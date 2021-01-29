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

class JournalEntryLine {
    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var float
     */
    protected float $debit;

    /**
     * @var float
     */
    protected float $credit;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $lineTaxCode;

    /**
     * @var float
     */
    protected float $lineTaxRate;

    /**
     * @var float
     */
    protected float $debitTax;

    /**
     * @var float
     */
    protected float $creditTax;

    /**
     * @var float
     */
    protected float $taxBasis;

    /**
     * @var float
     */
    protected float $totalAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    /**
     * @var string
     */
    protected string $memo;

    protected $taxRate1;
    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var float
     */
    protected float $grossAmt;

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
    protected RecordRef $revenueRecognitionRule;

    /**
     * @var bool
     */
    protected bool $eliminate;

    /**
     * @var RecordRef
     */
    protected RecordRef $schedule;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var string
     */
    protected string $residual;

    /**
     * @var RecordRef
     */
    protected RecordRef $scheduleNum;

    protected $tax1Amt;
    protected $tax1Acct;
    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "account" => "RecordRef",
        "line" => "integer",
        "debit" => "float",
        "credit" => "float",
        "taxAccount" => "RecordRef",
        "lineTaxCode" => "RecordRef",
        "lineTaxRate" => "float",
        "debitTax" => "float",
        "creditTax" => "float",
        "taxBasis" => "float",
        "totalAmount" => "float",
        "taxCode" => "RecordRef",
        "memo" => "string",
        "taxRate1" => "float",
        "entity" => "RecordRef",
        "grossAmt" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "eliminate" => "boolean",
        "schedule" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "residual" => "string",
        "scheduleNum" => "RecordRef",
        "tax1Amt" => "float",
        "tax1Acct" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $account
     * @return JournalEntryLine
     */
    public function setAccount(RecordRef $account): JournalEntryLine
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
     * @return JournalEntryLine
     */
    public function setLine(int $line): JournalEntryLine
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
     * @param float $debit
     * @return JournalEntryLine
     */
    public function setDebit(float $debit): JournalEntryLine
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
     * @return JournalEntryLine
     */
    public function setCredit(float $credit): JournalEntryLine
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
     * @param RecordRef $taxAccount
     * @return JournalEntryLine
     */
    public function setTaxAccount(RecordRef $taxAccount): JournalEntryLine
    {
        $this->taxAccount = $taxAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAccount(): RecordRef
    {
        return $this->taxAccount;
    }

    /**
     * @param RecordRef $lineTaxCode
     * @return JournalEntryLine
     */
    public function setLineTaxCode(RecordRef $lineTaxCode): JournalEntryLine
    {
        $this->lineTaxCode = $lineTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLineTaxCode(): RecordRef
    {
        return $this->lineTaxCode;
    }

    /**
     * @param float $lineTaxRate
     * @return JournalEntryLine
     */
    public function setLineTaxRate(float $lineTaxRate): JournalEntryLine
    {
        $this->lineTaxRate = $lineTaxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineTaxRate(): float
    {
        return $this->lineTaxRate;
    }

    /**
     * @param float $debitTax
     * @return JournalEntryLine
     */
    public function setDebitTax(float $debitTax): JournalEntryLine
    {
        $this->debitTax = $debitTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getDebitTax(): float
    {
        return $this->debitTax;
    }

    /**
     * @param float $creditTax
     * @return JournalEntryLine
     */
    public function setCreditTax(float $creditTax): JournalEntryLine
    {
        $this->creditTax = $creditTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditTax(): float
    {
        return $this->creditTax;
    }

    /**
     * @param float $taxBasis
     * @return JournalEntryLine
     */
    public function setTaxBasis(float $taxBasis): JournalEntryLine
    {
        $this->taxBasis = $taxBasis;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxBasis(): float
    {
        return $this->taxBasis;
    }

    /**
     * @param float $totalAmount
     * @return JournalEntryLine
     */
    public function setTotalAmount(float $totalAmount): JournalEntryLine
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount(): float
    {
        return $this->totalAmount;
    }

    /**
     * @param RecordRef $taxCode
     * @return JournalEntryLine
     */
    public function setTaxCode(RecordRef $taxCode): JournalEntryLine
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode(): RecordRef
    {
        return $this->taxCode;
    }

    /**
     * @param string $memo
     * @return JournalEntryLine
     */
    public function setMemo(string $memo): JournalEntryLine
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
     * @return JournalEntryLine
     */
    public function setEntity(RecordRef $entity): JournalEntryLine
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
     * @param float $grossAmt
     * @return JournalEntryLine
     */
    public function setGrossAmt(float $grossAmt): JournalEntryLine
    {
        $this->grossAmt = $grossAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmt(): float
    {
        return $this->grossAmt;
    }

    /**
     * @param RecordRef $department
     * @return JournalEntryLine
     */
    public function setDepartment(RecordRef $department): JournalEntryLine
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
     * @return JournalEntryLine
     */
    public function setClass(RecordRef $class): JournalEntryLine
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
     * @return JournalEntryLine
     */
    public function setLocation(RecordRef $location): JournalEntryLine
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
     * @param RecordRef $revenueRecognitionRule
     * @return JournalEntryLine
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): JournalEntryLine
    {
        $this->revenueRecognitionRule = $revenueRecognitionRule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueRecognitionRule(): RecordRef
    {
        return $this->revenueRecognitionRule;
    }

    /**
     * @param bool $eliminate
     * @return JournalEntryLine
     */
    public function setEliminate(bool $eliminate): JournalEntryLine
    {
        $this->eliminate = $eliminate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEliminate(): bool
    {
        return $this->eliminate;
    }

    /**
     * @param RecordRef $schedule
     * @return JournalEntryLine
     */
    public function setSchedule(RecordRef $schedule): JournalEntryLine
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSchedule(): RecordRef
    {
        return $this->schedule;
    }

    /**
     * @param string $startDate
     * @return JournalEntryLine
     */
    public function setStartDate(string $startDate): JournalEntryLine
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return JournalEntryLine
     */
    public function setEndDate(string $endDate): JournalEntryLine
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $residual
     * @return JournalEntryLine
     */
    public function setResidual(string $residual): JournalEntryLine
    {
        $this->residual = $residual;
        return $this;
    }

    /**
     * @return string
     */
    public function getResidual(): string
    {
        return $this->residual;
    }

    /**
     * @param RecordRef $scheduleNum
     * @return JournalEntryLine
     */
    public function setScheduleNum(RecordRef $scheduleNum): JournalEntryLine
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
     * @param CustomFieldList $customFieldList
     * @return JournalEntryLine
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): JournalEntryLine
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
