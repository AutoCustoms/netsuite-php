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

class BillingSchedule extends Record {
    /**
     * @var BillingScheduleType
     */
    protected BillingScheduleType $scheduleType;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var BillingScheduleRecurrencePattern
     */
    protected BillingScheduleRecurrencePattern $recurrencePattern;

    /**
     * @var RecordRef
     */
    protected RecordRef $project;

    /**
     * @var string
     */
    protected string $initialAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $initialTerms;

    /**
     * @var BillingScheduleFrequency
     */
    protected BillingScheduleFrequency $frequency;

    /**
     * @var RecurrenceDowMaskList
     */
    protected RecurrenceDowMaskList $recurrenceDowMaskList;

    /**
     * @var BillingScheduleRecurrenceMode
     */
    protected BillingScheduleRecurrenceMode $yearMode;

    /**
     * @var BillingScheduleYearDowim
     */
    protected BillingScheduleYearDowim $yearDowim;

    /**
     * @var BillingScheduleYearDow
     */
    protected BillingScheduleYearDow $yearDow;

    /**
     * @var BillingScheduleYearDowimMonth
     */
    protected BillingScheduleYearDowimMonth $yearDowimMonth;

    /**
     * @var BillingScheduleYearMonth
     */
    protected BillingScheduleYearMonth $yearMonth;

    /**
     * @var int
     */
    protected int $yearDom;

    /**
     * @var BillingScheduleRecurrenceMode
     */
    protected BillingScheduleRecurrenceMode $monthMode;

    /**
     * @var BillingScheduleMonthDowim
     */
    protected BillingScheduleMonthDowim $monthDowim;

    /**
     * @var BillingScheduleMonthDow
     */
    protected BillingScheduleMonthDow $monthDow;

    /**
     * @var int
     */
    protected int $monthDom;

    /**
     * @var int
     */
    protected int $dayPeriod;

    /**
     * @var BillingScheduleRepeatEvery
     */
    protected BillingScheduleRepeatEvery $repeatEvery;

    /**
     * @var bool
     */
    protected bool $billForActuals;

    /**
     * @var int
     */
    protected int $numberRemaining;

    /**
     * @var bool
     */
    protected bool $inArrears;

    /**
     * @var RecordRef
     */
    protected RecordRef $recurrenceTerms;

    /**
     * @var bool
     */
    protected bool $isPublic;

    /**
     * @var bool
     */
    protected bool $applyToSubtotal;

    /**
     * @var RecordRef
     */
    protected RecordRef $transaction;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $seriesStartDate;

    /**
     * @var BillingScheduleRecurrenceList
     */
    protected BillingScheduleRecurrenceList $recurrenceList;

    /**
     * @var BillingScheduleMilestoneList
     */
    protected BillingScheduleMilestoneList $milestoneList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "scheduleType" => "BillingScheduleType",
        "name" => "string",
        "recurrencePattern" => "BillingScheduleRecurrencePattern",
        "project" => "RecordRef",
        "initialAmount" => "string",
        "initialTerms" => "RecordRef",
        "frequency" => "BillingScheduleFrequency",
        "recurrenceDowMaskList" => "RecurrenceDowMaskList",
        "yearMode" => "BillingScheduleRecurrenceMode",
        "yearDowim" => "BillingScheduleYearDowim",
        "yearDow" => "BillingScheduleYearDow",
        "yearDowimMonth" => "BillingScheduleYearDowimMonth",
        "yearMonth" => "BillingScheduleYearMonth",
        "yearDom" => "integer",
        "monthMode" => "BillingScheduleRecurrenceMode",
        "monthDowim" => "BillingScheduleMonthDowim",
        "monthDow" => "BillingScheduleMonthDow",
        "monthDom" => "integer",
        "dayPeriod" => "integer",
        "repeatEvery" => "BillingScheduleRepeatEvery",
        "billForActuals" => "boolean",
        "numberRemaining" => "integer",
        "inArrears" => "boolean",
        "recurrenceTerms" => "RecordRef",
        "isPublic" => "boolean",
        "applyToSubtotal" => "boolean",
        "transaction" => "RecordRef",
        "isInactive" => "boolean",
        "seriesStartDate" => "dateTime",
        "recurrenceList" => "BillingScheduleRecurrenceList",
        "milestoneList" => "BillingScheduleMilestoneList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param BillingScheduleType $scheduleType
     * @return BillingSchedule
     */
    public function setScheduleType(BillingScheduleType $scheduleType): BillingSchedule
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return BillingScheduleType
     */
    public function getScheduleType(): BillingScheduleType
    {
        return $this->scheduleType;
    }

    /**
     * @param string $name
     * @return BillingSchedule
     */
    public function setName(string $name): BillingSchedule
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param BillingScheduleRecurrencePattern $recurrencePattern
     * @return BillingSchedule
     */
    public function setRecurrencePattern(BillingScheduleRecurrencePattern $recurrencePattern): BillingSchedule
    {
        $this->recurrencePattern = $recurrencePattern;
        return $this;
    }

    /**
     * @return BillingScheduleRecurrencePattern
     */
    public function getRecurrencePattern(): BillingScheduleRecurrencePattern
    {
        return $this->recurrencePattern;
    }

    /**
     * @param RecordRef $project
     * @return BillingSchedule
     */
    public function setProject(RecordRef $project): BillingSchedule
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProject(): RecordRef
    {
        return $this->project;
    }

    /**
     * @param string $initialAmount
     * @return BillingSchedule
     */
    public function setInitialAmount(string $initialAmount): BillingSchedule
    {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitialAmount(): string
    {
        return $this->initialAmount;
    }

    /**
     * @param RecordRef $initialTerms
     * @return BillingSchedule
     */
    public function setInitialTerms(RecordRef $initialTerms): BillingSchedule
    {
        $this->initialTerms = $initialTerms;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInitialTerms(): RecordRef
    {
        return $this->initialTerms;
    }

    /**
     * @param BillingScheduleFrequency $frequency
     * @return BillingSchedule
     */
    public function setFrequency(BillingScheduleFrequency $frequency): BillingSchedule
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return BillingScheduleFrequency
     */
    public function getFrequency(): BillingScheduleFrequency
    {
        return $this->frequency;
    }

    /**
     * @param RecurrenceDowMaskList $recurrenceDowMaskList
     * @return BillingSchedule
     */
    public function setRecurrenceDowMaskList(RecurrenceDowMaskList $recurrenceDowMaskList): BillingSchedule
    {
        $this->recurrenceDowMaskList = $recurrenceDowMaskList;
        return $this;
    }

    /**
     * @return RecurrenceDowMaskList
     */
    public function getRecurrenceDowMaskList(): RecurrenceDowMaskList
    {
        return $this->recurrenceDowMaskList;
    }

    /**
     * @param BillingScheduleRecurrenceMode $yearMode
     * @return BillingSchedule
     */
    public function setYearMode(BillingScheduleRecurrenceMode $yearMode): BillingSchedule
    {
        $this->yearMode = $yearMode;
        return $this;
    }

    /**
     * @return BillingScheduleRecurrenceMode
     */
    public function getYearMode(): BillingScheduleRecurrenceMode
    {
        return $this->yearMode;
    }

    /**
     * @param BillingScheduleYearDowim $yearDowim
     * @return BillingSchedule
     */
    public function setYearDowim(BillingScheduleYearDowim $yearDowim): BillingSchedule
    {
        $this->yearDowim = $yearDowim;
        return $this;
    }

    /**
     * @return BillingScheduleYearDowim
     */
    public function getYearDowim(): BillingScheduleYearDowim
    {
        return $this->yearDowim;
    }

    /**
     * @param BillingScheduleYearDow $yearDow
     * @return BillingSchedule
     */
    public function setYearDow(BillingScheduleYearDow $yearDow): BillingSchedule
    {
        $this->yearDow = $yearDow;
        return $this;
    }

    /**
     * @return BillingScheduleYearDow
     */
    public function getYearDow(): BillingScheduleYearDow
    {
        return $this->yearDow;
    }

    /**
     * @param BillingScheduleYearDowimMonth $yearDowimMonth
     * @return BillingSchedule
     */
    public function setYearDowimMonth(BillingScheduleYearDowimMonth $yearDowimMonth): BillingSchedule
    {
        $this->yearDowimMonth = $yearDowimMonth;
        return $this;
    }

    /**
     * @return BillingScheduleYearDowimMonth
     */
    public function getYearDowimMonth(): BillingScheduleYearDowimMonth
    {
        return $this->yearDowimMonth;
    }

    /**
     * @param BillingScheduleYearMonth $yearMonth
     * @return BillingSchedule
     */
    public function setYearMonth(BillingScheduleYearMonth $yearMonth): BillingSchedule
    {
        $this->yearMonth = $yearMonth;
        return $this;
    }

    /**
     * @return BillingScheduleYearMonth
     */
    public function getYearMonth(): BillingScheduleYearMonth
    {
        return $this->yearMonth;
    }

    /**
     * @param int $yearDom
     * @return BillingSchedule
     */
    public function setYearDom(int $yearDom): BillingSchedule
    {
        $this->yearDom = $yearDom;
        return $this;
    }

    /**
     * @return int
     */
    public function getYearDom(): int
    {
        return $this->yearDom;
    }

    /**
     * @param BillingScheduleRecurrenceMode $monthMode
     * @return BillingSchedule
     */
    public function setMonthMode(BillingScheduleRecurrenceMode $monthMode): BillingSchedule
    {
        $this->monthMode = $monthMode;
        return $this;
    }

    /**
     * @return BillingScheduleRecurrenceMode
     */
    public function getMonthMode(): BillingScheduleRecurrenceMode
    {
        return $this->monthMode;
    }

    /**
     * @param BillingScheduleMonthDowim $monthDowim
     * @return BillingSchedule
     */
    public function setMonthDowim(BillingScheduleMonthDowim $monthDowim): BillingSchedule
    {
        $this->monthDowim = $monthDowim;
        return $this;
    }

    /**
     * @return BillingScheduleMonthDowim
     */
    public function getMonthDowim(): BillingScheduleMonthDowim
    {
        return $this->monthDowim;
    }

    /**
     * @param BillingScheduleMonthDow $monthDow
     * @return BillingSchedule
     */
    public function setMonthDow(BillingScheduleMonthDow $monthDow): BillingSchedule
    {
        $this->monthDow = $monthDow;
        return $this;
    }

    /**
     * @return BillingScheduleMonthDow
     */
    public function getMonthDow(): BillingScheduleMonthDow
    {
        return $this->monthDow;
    }

    /**
     * @param int $monthDom
     * @return BillingSchedule
     */
    public function setMonthDom(int $monthDom): BillingSchedule
    {
        $this->monthDom = $monthDom;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonthDom(): int
    {
        return $this->monthDom;
    }

    /**
     * @param int $dayPeriod
     * @return BillingSchedule
     */
    public function setDayPeriod(int $dayPeriod): BillingSchedule
    {
        $this->dayPeriod = $dayPeriod;
        return $this;
    }

    /**
     * @return int
     */
    public function getDayPeriod(): int
    {
        return $this->dayPeriod;
    }

    /**
     * @param BillingScheduleRepeatEvery $repeatEvery
     * @return BillingSchedule
     */
    public function setRepeatEvery(BillingScheduleRepeatEvery $repeatEvery): BillingSchedule
    {
        $this->repeatEvery = $repeatEvery;
        return $this;
    }

    /**
     * @return BillingScheduleRepeatEvery
     */
    public function getRepeatEvery(): BillingScheduleRepeatEvery
    {
        return $this->repeatEvery;
    }

    /**
     * @param bool $billForActuals
     * @return BillingSchedule
     */
    public function setBillForActuals(bool $billForActuals): BillingSchedule
    {
        $this->billForActuals = $billForActuals;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBillForActuals(): bool
    {
        return $this->billForActuals;
    }

    /**
     * @param int $numberRemaining
     * @return BillingSchedule
     */
    public function setNumberRemaining(int $numberRemaining): BillingSchedule
    {
        $this->numberRemaining = $numberRemaining;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberRemaining(): int
    {
        return $this->numberRemaining;
    }

    /**
     * @param bool $inArrears
     * @return BillingSchedule
     */
    public function setInArrears(bool $inArrears): BillingSchedule
    {
        $this->inArrears = $inArrears;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInArrears(): bool
    {
        return $this->inArrears;
    }

    /**
     * @param RecordRef $recurrenceTerms
     * @return BillingSchedule
     */
    public function setRecurrenceTerms(RecordRef $recurrenceTerms): BillingSchedule
    {
        $this->recurrenceTerms = $recurrenceTerms;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecurrenceTerms(): RecordRef
    {
        return $this->recurrenceTerms;
    }

    /**
     * @param bool $isPublic
     * @return BillingSchedule
     */
    public function setIsPublic(bool $isPublic): BillingSchedule
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * @param bool $applyToSubtotal
     * @return BillingSchedule
     */
    public function setApplyToSubtotal(bool $applyToSubtotal): BillingSchedule
    {
        $this->applyToSubtotal = $applyToSubtotal;
        return $this;
    }

    /**
     * @return bool
     */
    public function getApplyToSubtotal(): bool
    {
        return $this->applyToSubtotal;
    }

    /**
     * @param RecordRef $transaction
     * @return BillingSchedule
     */
    public function setTransaction(RecordRef $transaction): BillingSchedule
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction(): RecordRef
    {
        return $this->transaction;
    }

    /**
     * @param bool $isInactive
     * @return BillingSchedule
     */
    public function setIsInactive(bool $isInactive): BillingSchedule
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $seriesStartDate
     * @return BillingSchedule
     */
    public function setSeriesStartDate(string $seriesStartDate): BillingSchedule
    {
        $this->seriesStartDate = $seriesStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeriesStartDate(): string
    {
        return $this->seriesStartDate;
    }

    /**
     * @param BillingScheduleRecurrenceList $recurrenceList
     * @return BillingSchedule
     */
    public function setRecurrenceList(BillingScheduleRecurrenceList $recurrenceList): BillingSchedule
    {
        $this->recurrenceList = $recurrenceList;
        return $this;
    }

    /**
     * @return BillingScheduleRecurrenceList
     */
    public function getRecurrenceList(): BillingScheduleRecurrenceList
    {
        return $this->recurrenceList;
    }

    /**
     * @param BillingScheduleMilestoneList $milestoneList
     * @return BillingSchedule
     */
    public function setMilestoneList(BillingScheduleMilestoneList $milestoneList): BillingSchedule
    {
        $this->milestoneList = $milestoneList;
        return $this;
    }

    /**
     * @return BillingScheduleMilestoneList
     */
    public function getMilestoneList(): BillingScheduleMilestoneList
    {
        return $this->milestoneList;
    }

    /**
     * @param string $internalId
     * @return BillingSchedule
     */
    public function setInternalId(string $internalId): BillingSchedule
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
     * @return BillingSchedule
     */
    public function setExternalId(string $externalId): BillingSchedule
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
