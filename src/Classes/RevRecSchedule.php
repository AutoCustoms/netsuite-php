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

class RevRecSchedule extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RevRecScheduleAmortizationType
     */
    protected RevRecScheduleAmortizationType $amortizationType;

    /**
     * @var RevRecScheduleRecurrenceType
     */
    protected RevRecScheduleRecurrenceType $recurrenceType;

    /**
     * @var RevRecScheduleRecogIntervalSrc
     */
    protected RevRecScheduleRecogIntervalSrc $recogIntervalSrc;

    /**
     * @var int
     */
    protected int $amortizationPeriod;

    /**
     * @var int
     */
    protected int $periodOffset;

    /**
     * @var int
     */
    protected int $revRecOffset;

    /**
     * @var float
     */
    protected float $initialAmount;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RevRecScheduleRecurrenceList
     */
    protected RevRecScheduleRecurrenceList $recurrenceList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "amortizationType" => "RevRecScheduleAmortizationType",
        "recurrenceType" => "RevRecScheduleRecurrenceType",
        "recogIntervalSrc" => "RevRecScheduleRecogIntervalSrc",
        "amortizationPeriod" => "integer",
        "periodOffset" => "integer",
        "revRecOffset" => "integer",
        "initialAmount" => "float",
        "isInactive" => "boolean",
        "recurrenceList" => "RevRecScheduleRecurrenceList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return RevRecSchedule
     */
    public function setName(string $name): RevRecSchedule
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
     * @param RevRecScheduleAmortizationType $amortizationType
     * @return RevRecSchedule
     */
    public function setAmortizationType(RevRecScheduleAmortizationType $amortizationType): RevRecSchedule
    {
        $this->amortizationType = $amortizationType;
        return $this;
    }

    /**
     * @return RevRecScheduleAmortizationType
     */
    public function getAmortizationType(): RevRecScheduleAmortizationType
    {
        return $this->amortizationType;
    }

    /**
     * @param RevRecScheduleRecurrenceType $recurrenceType
     * @return RevRecSchedule
     */
    public function setRecurrenceType(RevRecScheduleRecurrenceType $recurrenceType): RevRecSchedule
    {
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    /**
     * @return RevRecScheduleRecurrenceType
     */
    public function getRecurrenceType(): RevRecScheduleRecurrenceType
    {
        return $this->recurrenceType;
    }

    /**
     * @param RevRecScheduleRecogIntervalSrc $recogIntervalSrc
     * @return RevRecSchedule
     */
    public function setRecogIntervalSrc(RevRecScheduleRecogIntervalSrc $recogIntervalSrc): RevRecSchedule
    {
        $this->recogIntervalSrc = $recogIntervalSrc;
        return $this;
    }

    /**
     * @return RevRecScheduleRecogIntervalSrc
     */
    public function getRecogIntervalSrc(): RevRecScheduleRecogIntervalSrc
    {
        return $this->recogIntervalSrc;
    }

    /**
     * @param int $amortizationPeriod
     * @return RevRecSchedule
     */
    public function setAmortizationPeriod(int $amortizationPeriod): RevRecSchedule
    {
        $this->amortizationPeriod = $amortizationPeriod;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmortizationPeriod(): int
    {
        return $this->amortizationPeriod;
    }

    /**
     * @param int $periodOffset
     * @return RevRecSchedule
     */
    public function setPeriodOffset(int $periodOffset): RevRecSchedule
    {
        $this->periodOffset = $periodOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getPeriodOffset(): int
    {
        return $this->periodOffset;
    }

    /**
     * @param int $revRecOffset
     * @return RevRecSchedule
     */
    public function setRevRecOffset(int $revRecOffset): RevRecSchedule
    {
        $this->revRecOffset = $revRecOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getRevRecOffset(): int
    {
        return $this->revRecOffset;
    }

    /**
     * @param float $initialAmount
     * @return RevRecSchedule
     */
    public function setInitialAmount(float $initialAmount): RevRecSchedule
    {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getInitialAmount(): float
    {
        return $this->initialAmount;
    }

    /**
     * @param bool $isInactive
     * @return RevRecSchedule
     */
    public function setIsInactive(bool $isInactive): RevRecSchedule
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
     * @param RevRecScheduleRecurrenceList $recurrenceList
     * @return RevRecSchedule
     */
    public function setRecurrenceList(RevRecScheduleRecurrenceList $recurrenceList): RevRecSchedule
    {
        $this->recurrenceList = $recurrenceList;
        return $this;
    }

    /**
     * @return RevRecScheduleRecurrenceList
     */
    public function getRecurrenceList(): RevRecScheduleRecurrenceList
    {
        return $this->recurrenceList;
    }

    /**
     * @param string $internalId
     * @return RevRecSchedule
     */
    public function setInternalId(string $internalId): RevRecSchedule
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
     * @return RevRecSchedule
     */
    public function setExternalId(string $externalId): RevRecSchedule
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
