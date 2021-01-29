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

class AccountingPeriodSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $allLocked;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $allowNonGLChanges;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $apLocked;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $arLocked;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $closed;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $closedOnDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isAdjust;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isQuarter;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isYear;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $parent;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $payrollLocked;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $periodName;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    static $paramtypesmap = array(
        "allLocked" => "SearchColumnBooleanField[]",
        "allowNonGLChanges" => "SearchColumnBooleanField[]",
        "apLocked" => "SearchColumnBooleanField[]",
        "arLocked" => "SearchColumnBooleanField[]",
        "closed" => "SearchColumnBooleanField[]",
        "closedOnDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isAdjust" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isQuarter" => "SearchColumnBooleanField[]",
        "isYear" => "SearchColumnBooleanField[]",
        "parent" => "SearchColumnSelectField[]",
        "payrollLocked" => "SearchColumnBooleanField[]",
        "periodName" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
    );

    /**
     * @param SearchColumnBooleanField[] $allLocked
     * @return AccountingPeriodSearchRowBasic
     */
    public function setAllLocked(SearchColumnBooleanField $allLocked): AccountingPeriodSearchRowBasic
    {
        $this->allLocked[] = $allLocked;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllLocked(): array
    {
        return $this->allLocked;
    }

    /**
     * @param SearchColumnBooleanField[] $allowNonGLChanges
     * @return AccountingPeriodSearchRowBasic
     */
    public function setAllowNonGLChanges(SearchColumnBooleanField $allowNonGLChanges): AccountingPeriodSearchRowBasic
    {
        $this->allowNonGLChanges[] = $allowNonGLChanges;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowNonGLChanges(): array
    {
        return $this->allowNonGLChanges;
    }

    /**
     * @param SearchColumnBooleanField[] $apLocked
     * @return AccountingPeriodSearchRowBasic
     */
    public function setApLocked(SearchColumnBooleanField $apLocked): AccountingPeriodSearchRowBasic
    {
        $this->apLocked[] = $apLocked;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getApLocked(): array
    {
        return $this->apLocked;
    }

    /**
     * @param SearchColumnBooleanField[] $arLocked
     * @return AccountingPeriodSearchRowBasic
     */
    public function setArLocked(SearchColumnBooleanField $arLocked): AccountingPeriodSearchRowBasic
    {
        $this->arLocked[] = $arLocked;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getArLocked(): array
    {
        return $this->arLocked;
    }

    /**
     * @param SearchColumnBooleanField[] $closed
     * @return AccountingPeriodSearchRowBasic
     */
    public function setClosed(SearchColumnBooleanField $closed): AccountingPeriodSearchRowBasic
    {
        $this->closed[] = $closed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getClosed(): array
    {
        return $this->closed;
    }

    /**
     * @param SearchColumnDateField[] $closedOnDate
     * @return AccountingPeriodSearchRowBasic
     */
    public function setClosedOnDate(SearchColumnDateField $closedOnDate): AccountingPeriodSearchRowBasic
    {
        $this->closedOnDate[] = $closedOnDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getClosedOnDate(): array
    {
        return $this->closedOnDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return AccountingPeriodSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): AccountingPeriodSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return AccountingPeriodSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): AccountingPeriodSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnBooleanField[] $isAdjust
     * @return AccountingPeriodSearchRowBasic
     */
    public function setIsAdjust(SearchColumnBooleanField $isAdjust): AccountingPeriodSearchRowBasic
    {
        $this->isAdjust[] = $isAdjust;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAdjust(): array
    {
        return $this->isAdjust;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return AccountingPeriodSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): AccountingPeriodSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isQuarter
     * @return AccountingPeriodSearchRowBasic
     */
    public function setIsQuarter(SearchColumnBooleanField $isQuarter): AccountingPeriodSearchRowBasic
    {
        $this->isQuarter[] = $isQuarter;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsQuarter(): array
    {
        return $this->isQuarter;
    }

    /**
     * @param SearchColumnBooleanField[] $isYear
     * @return AccountingPeriodSearchRowBasic
     */
    public function setIsYear(SearchColumnBooleanField $isYear): AccountingPeriodSearchRowBasic
    {
        $this->isYear[] = $isYear;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsYear(): array
    {
        return $this->isYear;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return AccountingPeriodSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): AccountingPeriodSearchRowBasic
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent(): array
    {
        return $this->parent;
    }

    /**
     * @param SearchColumnBooleanField[] $payrollLocked
     * @return AccountingPeriodSearchRowBasic
     */
    public function setPayrollLocked(SearchColumnBooleanField $payrollLocked): AccountingPeriodSearchRowBasic
    {
        $this->payrollLocked[] = $payrollLocked;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPayrollLocked(): array
    {
        return $this->payrollLocked;
    }

    /**
     * @param SearchColumnStringField[] $periodName
     * @return AccountingPeriodSearchRowBasic
     */
    public function setPeriodName(SearchColumnStringField $periodName): AccountingPeriodSearchRowBasic
    {
        $this->periodName[] = $periodName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriodName(): array
    {
        return $this->periodName;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return AccountingPeriodSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): AccountingPeriodSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

}
