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

class AccountingPeriodSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $allLocked;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $allowNonGlChanges;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $apLocked;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $arLocked;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $closed;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $closedOnDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isAdjust;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isQuarter;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isYear;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $payrollLocked;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $periodName;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    static $paramtypesmap = array(
        "allLocked" => "SearchBooleanField",
        "allowNonGlChanges" => "SearchBooleanField",
        "apLocked" => "SearchBooleanField",
        "arLocked" => "SearchBooleanField",
        "closed" => "SearchBooleanField",
        "closedOnDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isAdjust" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isQuarter" => "SearchBooleanField",
        "isYear" => "SearchBooleanField",
        "parent" => "SearchMultiSelectField",
        "payrollLocked" => "SearchBooleanField",
        "periodName" => "SearchStringField",
        "startDate" => "SearchDateField",
    );

    /**
     * @param SearchBooleanField $allLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setAllLocked(SearchBooleanField $allLocked): AccountingPeriodSearchBasic
    {
        $this->allLocked = $allLocked;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllLocked(): SearchBooleanField
    {
        return $this->allLocked;
    }

    /**
     * @param SearchBooleanField $allowNonGlChanges
     * @return AccountingPeriodSearchBasic
     */
    public function setAllowNonGlChanges(SearchBooleanField $allowNonGlChanges): AccountingPeriodSearchBasic
    {
        $this->allowNonGlChanges = $allowNonGlChanges;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowNonGlChanges(): SearchBooleanField
    {
        return $this->allowNonGlChanges;
    }

    /**
     * @param SearchBooleanField $apLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setApLocked(SearchBooleanField $apLocked): AccountingPeriodSearchBasic
    {
        $this->apLocked = $apLocked;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApLocked(): SearchBooleanField
    {
        return $this->apLocked;
    }

    /**
     * @param SearchBooleanField $arLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setArLocked(SearchBooleanField $arLocked): AccountingPeriodSearchBasic
    {
        $this->arLocked = $arLocked;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getArLocked(): SearchBooleanField
    {
        return $this->arLocked;
    }

    /**
     * @param SearchBooleanField $closed
     * @return AccountingPeriodSearchBasic
     */
    public function setClosed(SearchBooleanField $closed): AccountingPeriodSearchBasic
    {
        $this->closed = $closed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getClosed(): SearchBooleanField
    {
        return $this->closed;
    }

    /**
     * @param SearchDateField $closedOnDate
     * @return AccountingPeriodSearchBasic
     */
    public function setClosedOnDate(SearchDateField $closedOnDate): AccountingPeriodSearchBasic
    {
        $this->closedOnDate = $closedOnDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getClosedOnDate(): SearchDateField
    {
        return $this->closedOnDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return AccountingPeriodSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): AccountingPeriodSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return AccountingPeriodSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): AccountingPeriodSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return AccountingPeriodSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): AccountingPeriodSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isAdjust
     * @return AccountingPeriodSearchBasic
     */
    public function setIsAdjust(SearchBooleanField $isAdjust): AccountingPeriodSearchBasic
    {
        $this->isAdjust = $isAdjust;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAdjust(): SearchBooleanField
    {
        return $this->isAdjust;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return AccountingPeriodSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): AccountingPeriodSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isQuarter
     * @return AccountingPeriodSearchBasic
     */
    public function setIsQuarter(SearchBooleanField $isQuarter): AccountingPeriodSearchBasic
    {
        $this->isQuarter = $isQuarter;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsQuarter(): SearchBooleanField
    {
        return $this->isQuarter;
    }

    /**
     * @param SearchBooleanField $isYear
     * @return AccountingPeriodSearchBasic
     */
    public function setIsYear(SearchBooleanField $isYear): AccountingPeriodSearchBasic
    {
        $this->isYear = $isYear;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsYear(): SearchBooleanField
    {
        return $this->isYear;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return AccountingPeriodSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): AccountingPeriodSearchBasic
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent(): SearchMultiSelectField
    {
        return $this->parent;
    }

    /**
     * @param SearchBooleanField $payrollLocked
     * @return AccountingPeriodSearchBasic
     */
    public function setPayrollLocked(SearchBooleanField $payrollLocked): AccountingPeriodSearchBasic
    {
        $this->payrollLocked = $payrollLocked;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPayrollLocked(): SearchBooleanField
    {
        return $this->payrollLocked;
    }

    /**
     * @param SearchStringField $periodName
     * @return AccountingPeriodSearchBasic
     */
    public function setPeriodName(SearchStringField $periodName): AccountingPeriodSearchBasic
    {
        $this->periodName = $periodName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPeriodName(): SearchStringField
    {
        return $this->periodName;
    }

    /**
     * @param SearchDateField $startDate
     * @return AccountingPeriodSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): AccountingPeriodSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

}
