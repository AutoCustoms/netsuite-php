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

class RevRecTemplate extends Record {
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
     * @var RevRecTemplateRecurrenceList
     */
    protected RevRecTemplateRecurrenceList $recurrenceList;

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
        "recurrenceList" => "RevRecTemplateRecurrenceList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return RevRecTemplate
     */
    public function setName(string $name): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setAmortizationType(RevRecScheduleAmortizationType $amortizationType): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setRecurrenceType(RevRecScheduleRecurrenceType $recurrenceType): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setRecogIntervalSrc(RevRecScheduleRecogIntervalSrc $recogIntervalSrc): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setAmortizationPeriod(int $amortizationPeriod): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setPeriodOffset(int $periodOffset): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setRevRecOffset(int $revRecOffset): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setInitialAmount(float $initialAmount): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setIsInactive(bool $isInactive): RevRecTemplate
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
     * @param RevRecTemplateRecurrenceList $recurrenceList
     * @return RevRecTemplate
     */
    public function setRecurrenceList(RevRecTemplateRecurrenceList $recurrenceList): RevRecTemplate
    {
        $this->recurrenceList = $recurrenceList;
        return $this;
    }

    /**
     * @return RevRecTemplateRecurrenceList
     */
    public function getRecurrenceList(): RevRecTemplateRecurrenceList
    {
        return $this->recurrenceList;
    }

    /**
     * @param string $internalId
     * @return RevRecTemplate
     */
    public function setInternalId(string $internalId): RevRecTemplate
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
     * @return RevRecTemplate
     */
    public function setExternalId(string $externalId): RevRecTemplate
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
