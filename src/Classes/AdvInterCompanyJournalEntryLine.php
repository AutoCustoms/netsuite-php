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

class AdvInterCompanyJournalEntryLine {
    /**
     * @var RecordRef
     */
    protected RecordRef $lineSubsidiary;

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
     * @var RecordRef
     */
    protected RecordRef $dueToFromSubsidiary;

    /**
     * @var float
     */
    protected float $grossAmt;

    /**
     * @var RecordRef
     */
    protected RecordRef $schedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var string
     */
    protected string $endDate;

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
     * @var string
     */
    protected string $residual;

    /**
     * @var RecordRef
     */
    protected RecordRef $amortizationSched;

    /**
     * @var RecordRef
     */
    protected RecordRef $scheduleNum;

    /**
     * @var string
     */
    protected string $amortizStartDate;

    /**
     * @var string
     */
    protected string $amortizationEndDate;

    /**
     * @var string
     */
    protected string $amortizationResidual;

    protected $tax1Amt;
    protected $tax1Acct;
    /**
     * @var float
     */
    protected float $lineFxRate;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "lineSubsidiary" => "RecordRef",
        "account" => "RecordRef",
        "line" => "integer",
        "debit" => "float",
        "credit" => "float",
        "taxCode" => "RecordRef",
        "memo" => "string",
        "taxRate1" => "float",
        "entity" => "RecordRef",
        "dueToFromSubsidiary" => "RecordRef",
        "grossAmt" => "float",
        "schedule" => "RecordRef",
        "department" => "RecordRef",
        "startDate" => "dateTime",
        "class" => "RecordRef",
        "endDate" => "dateTime",
        "location" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "eliminate" => "boolean",
        "residual" => "string",
        "amortizationSched" => "RecordRef",
        "scheduleNum" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "tax1Amt" => "float",
        "tax1Acct" => "RecordRef",
        "lineFxRate" => "float",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $lineSubsidiary
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setLineSubsidiary(RecordRef $lineSubsidiary): AdvInterCompanyJournalEntryLine
    {
        $this->lineSubsidiary = $lineSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLineSubsidiary(): RecordRef
    {
        return $this->lineSubsidiary;
    }

    /**
     * @param RecordRef $account
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setAccount(RecordRef $account): AdvInterCompanyJournalEntryLine
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
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setLine(int $line): AdvInterCompanyJournalEntryLine
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
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setDebit(float $debit): AdvInterCompanyJournalEntryLine
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
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setCredit(float $credit): AdvInterCompanyJournalEntryLine
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
     * @param RecordRef $taxCode
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setTaxCode(RecordRef $taxCode): AdvInterCompanyJournalEntryLine
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
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setMemo(string $memo): AdvInterCompanyJournalEntryLine
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
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setEntity(RecordRef $entity): AdvInterCompanyJournalEntryLine
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
     * @param RecordRef $dueToFromSubsidiary
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setDueToFromSubsidiary(RecordRef $dueToFromSubsidiary): AdvInterCompanyJournalEntryLine
    {
        $this->dueToFromSubsidiary = $dueToFromSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDueToFromSubsidiary(): RecordRef
    {
        return $this->dueToFromSubsidiary;
    }

    /**
     * @param float $grossAmt
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setGrossAmt(float $grossAmt): AdvInterCompanyJournalEntryLine
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
     * @param RecordRef $schedule
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setSchedule(RecordRef $schedule): AdvInterCompanyJournalEntryLine
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
     * @param RecordRef $department
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setDepartment(RecordRef $department): AdvInterCompanyJournalEntryLine
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
     * @param string $startDate
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setStartDate(string $startDate): AdvInterCompanyJournalEntryLine
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
     * @param RecordRef $class
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setClass(RecordRef $class): AdvInterCompanyJournalEntryLine
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
     * @param string $endDate
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setEndDate(string $endDate): AdvInterCompanyJournalEntryLine
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
     * @param RecordRef $location
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setLocation(RecordRef $location): AdvInterCompanyJournalEntryLine
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
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): AdvInterCompanyJournalEntryLine
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
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setEliminate(bool $eliminate): AdvInterCompanyJournalEntryLine
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
     * @param string $residual
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setResidual(string $residual): AdvInterCompanyJournalEntryLine
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
     * @param RecordRef $amortizationSched
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setAmortizationSched(RecordRef $amortizationSched): AdvInterCompanyJournalEntryLine
    {
        $this->amortizationSched = $amortizationSched;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationSched(): RecordRef
    {
        return $this->amortizationSched;
    }

    /**
     * @param RecordRef $scheduleNum
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setScheduleNum(RecordRef $scheduleNum): AdvInterCompanyJournalEntryLine
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
     * @param string $amortizStartDate
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setAmortizStartDate(string $amortizStartDate): AdvInterCompanyJournalEntryLine
    {
        $this->amortizStartDate = $amortizStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizStartDate(): string
    {
        return $this->amortizStartDate;
    }

    /**
     * @param string $amortizationEndDate
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setAmortizationEndDate(string $amortizationEndDate): AdvInterCompanyJournalEntryLine
    {
        $this->amortizationEndDate = $amortizationEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizationEndDate(): string
    {
        return $this->amortizationEndDate;
    }

    /**
     * @param string $amortizationResidual
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setAmortizationResidual(string $amortizationResidual): AdvInterCompanyJournalEntryLine
    {
        $this->amortizationResidual = $amortizationResidual;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmortizationResidual(): string
    {
        return $this->amortizationResidual;
    }

    /**
     * @param float $lineFxRate
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setLineFxRate(float $lineFxRate): AdvInterCompanyJournalEntryLine
    {
        $this->lineFxRate = $lineFxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineFxRate(): float
    {
        return $this->lineFxRate;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return AdvInterCompanyJournalEntryLine
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): AdvInterCompanyJournalEntryLine
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
