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

class AccountingPeriod extends Record {
    /**
     * @var string
     */
    protected string $periodName;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $fiscalCalendar;

    /**
     * @var string
     */
    protected string $closedOnDate;

    /**
     * @var bool
     */
    protected bool $isAdjust;

    /**
     * @var AccountingPeriodFiscalCalendarsList
     */
    protected AccountingPeriodFiscalCalendarsList $fiscalCalendarsList;

    /**
     * @var bool
     */
    protected bool $isQuarter;

    /**
     * @var bool
     */
    protected bool $isYear;

    /**
     * @var bool
     */
    protected bool $closed;

    /**
     * @var bool
     */
    protected bool $apLocked;

    /**
     * @var bool
     */
    protected bool $arLocked;

    /**
     * @var bool
     */
    protected bool $payrollLocked;

    /**
     * @var bool
     */
    protected bool $allLocked;

    /**
     * @var bool
     */
    protected bool $allowNonGLChanges;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "periodName" => "string",
        "parent" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "fiscalCalendar" => "RecordRef",
        "closedOnDate" => "dateTime",
        "isAdjust" => "boolean",
        "fiscalCalendarsList" => "AccountingPeriodFiscalCalendarsList",
        "isQuarter" => "boolean",
        "isYear" => "boolean",
        "closed" => "boolean",
        "apLocked" => "boolean",
        "arLocked" => "boolean",
        "payrollLocked" => "boolean",
        "allLocked" => "boolean",
        "allowNonGLChanges" => "boolean",
        "internalId" => "string",
    );

    /**
     * @param string $periodName
     * @return AccountingPeriod
     */
    public function setPeriodName(string $periodName): AccountingPeriod
    {
        $this->periodName = $periodName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriodName(): string
    {
        return $this->periodName;
    }

    /**
     * @param RecordRef $parent
     * @return AccountingPeriod
     */
    public function setParent(RecordRef $parent): AccountingPeriod
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param string $startDate
     * @return AccountingPeriod
     */
    public function setStartDate(string $startDate): AccountingPeriod
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
     * @return AccountingPeriod
     */
    public function setEndDate(string $endDate): AccountingPeriod
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
     * @param RecordRef $fiscalCalendar
     * @return AccountingPeriod
     */
    public function setFiscalCalendar(RecordRef $fiscalCalendar): AccountingPeriod
    {
        $this->fiscalCalendar = $fiscalCalendar;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFiscalCalendar(): RecordRef
    {
        return $this->fiscalCalendar;
    }

    /**
     * @param string $closedOnDate
     * @return AccountingPeriod
     */
    public function setClosedOnDate(string $closedOnDate): AccountingPeriod
    {
        $this->closedOnDate = $closedOnDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getClosedOnDate(): string
    {
        return $this->closedOnDate;
    }

    /**
     * @param bool $isAdjust
     * @return AccountingPeriod
     */
    public function setIsAdjust(bool $isAdjust): AccountingPeriod
    {
        $this->isAdjust = $isAdjust;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAdjust(): bool
    {
        return $this->isAdjust;
    }

    /**
     * @param AccountingPeriodFiscalCalendarsList $fiscalCalendarsList
     * @return AccountingPeriod
     */
    public function setFiscalCalendarsList(AccountingPeriodFiscalCalendarsList $fiscalCalendarsList): AccountingPeriod
    {
        $this->fiscalCalendarsList = $fiscalCalendarsList;
        return $this;
    }

    /**
     * @return AccountingPeriodFiscalCalendarsList
     */
    public function getFiscalCalendarsList(): AccountingPeriodFiscalCalendarsList
    {
        return $this->fiscalCalendarsList;
    }

    /**
     * @param bool $isQuarter
     * @return AccountingPeriod
     */
    public function setIsQuarter(bool $isQuarter): AccountingPeriod
    {
        $this->isQuarter = $isQuarter;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsQuarter(): bool
    {
        return $this->isQuarter;
    }

    /**
     * @param bool $isYear
     * @return AccountingPeriod
     */
    public function setIsYear(bool $isYear): AccountingPeriod
    {
        $this->isYear = $isYear;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsYear(): bool
    {
        return $this->isYear;
    }

    /**
     * @param bool $closed
     * @return AccountingPeriod
     */
    public function setClosed(bool $closed): AccountingPeriod
    {
        $this->closed = $closed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getClosed(): bool
    {
        return $this->closed;
    }

    /**
     * @param bool $apLocked
     * @return AccountingPeriod
     */
    public function setApLocked(bool $apLocked): AccountingPeriod
    {
        $this->apLocked = $apLocked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getApLocked(): bool
    {
        return $this->apLocked;
    }

    /**
     * @param bool $arLocked
     * @return AccountingPeriod
     */
    public function setArLocked(bool $arLocked): AccountingPeriod
    {
        $this->arLocked = $arLocked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getArLocked(): bool
    {
        return $this->arLocked;
    }

    /**
     * @param bool $payrollLocked
     * @return AccountingPeriod
     */
    public function setPayrollLocked(bool $payrollLocked): AccountingPeriod
    {
        $this->payrollLocked = $payrollLocked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPayrollLocked(): bool
    {
        return $this->payrollLocked;
    }

    /**
     * @param bool $allLocked
     * @return AccountingPeriod
     */
    public function setAllLocked(bool $allLocked): AccountingPeriod
    {
        $this->allLocked = $allLocked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllLocked(): bool
    {
        return $this->allLocked;
    }

    /**
     * @param bool $allowNonGLChanges
     * @return AccountingPeriod
     */
    public function setAllowNonGLChanges(bool $allowNonGLChanges): AccountingPeriod
    {
        $this->allowNonGLChanges = $allowNonGLChanges;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowNonGLChanges(): bool
    {
        return $this->allowNonGLChanges;
    }

    /**
     * @param string $internalId
     * @return AccountingPeriod
     */
    public function setInternalId(string $internalId): AccountingPeriod
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

}
