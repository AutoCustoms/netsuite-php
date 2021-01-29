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

class Term extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $dateDriven;

    /**
     * @var int
     */
    protected int $daysUntilNetDue;

    /**
     * @var float
     */
    protected float $discountPercent;

    /**
     * @var int
     */
    protected int $daysUntilExpiry;

    /**
     * @var int
     */
    protected int $dayOfMonthNetDue;

    /**
     * @var int
     */
    protected int $dueNextMonthIfWithinDays;

    /**
     * @var float
     */
    protected float $discountPercentDateDriven;

    /**
     * @var int
     */
    protected int $dayDiscountExpires;

    /**
     * @var bool
     */
    protected bool $preferred;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $installment;

    /**
     * @var TermRecurrenceFrequency
     */
    protected TermRecurrenceFrequency $recurrenceFrequency;

    /**
     * @var int
     */
    protected int $recurrenceCount;

    /**
     * @var int
     */
    protected int $repeatEvery;

    /**
     * @var bool
     */
    protected bool $splitEvenly;

    /**
     * @var TermPercentagesList
     */
    protected TermPercentagesList $percentagesList;

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
        "dateDriven" => "boolean",
        "daysUntilNetDue" => "integer",
        "discountPercent" => "float",
        "daysUntilExpiry" => "integer",
        "dayOfMonthNetDue" => "integer",
        "dueNextMonthIfWithinDays" => "integer",
        "discountPercentDateDriven" => "float",
        "dayDiscountExpires" => "integer",
        "preferred" => "boolean",
        "isInactive" => "boolean",
        "installment" => "boolean",
        "recurrenceFrequency" => "TermRecurrenceFrequency",
        "recurrenceCount" => "integer",
        "repeatEvery" => "integer",
        "splitEvenly" => "boolean",
        "percentagesList" => "TermPercentagesList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return Term
     */
    public function setName(string $name): Term
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
     * @param bool $dateDriven
     * @return Term
     */
    public function setDateDriven(bool $dateDriven): Term
    {
        $this->dateDriven = $dateDriven;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDateDriven(): bool
    {
        return $this->dateDriven;
    }

    /**
     * @param int $daysUntilNetDue
     * @return Term
     */
    public function setDaysUntilNetDue(int $daysUntilNetDue): Term
    {
        $this->daysUntilNetDue = $daysUntilNetDue;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysUntilNetDue(): int
    {
        return $this->daysUntilNetDue;
    }

    /**
     * @param float $discountPercent
     * @return Term
     */
    public function setDiscountPercent(float $discountPercent): Term
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercent(): float
    {
        return $this->discountPercent;
    }

    /**
     * @param int $daysUntilExpiry
     * @return Term
     */
    public function setDaysUntilExpiry(int $daysUntilExpiry): Term
    {
        $this->daysUntilExpiry = $daysUntilExpiry;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysUntilExpiry(): int
    {
        return $this->daysUntilExpiry;
    }

    /**
     * @param int $dayOfMonthNetDue
     * @return Term
     */
    public function setDayOfMonthNetDue(int $dayOfMonthNetDue): Term
    {
        $this->dayOfMonthNetDue = $dayOfMonthNetDue;
        return $this;
    }

    /**
     * @return int
     */
    public function getDayOfMonthNetDue(): int
    {
        return $this->dayOfMonthNetDue;
    }

    /**
     * @param int $dueNextMonthIfWithinDays
     * @return Term
     */
    public function setDueNextMonthIfWithinDays(int $dueNextMonthIfWithinDays): Term
    {
        $this->dueNextMonthIfWithinDays = $dueNextMonthIfWithinDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getDueNextMonthIfWithinDays(): int
    {
        return $this->dueNextMonthIfWithinDays;
    }

    /**
     * @param float $discountPercentDateDriven
     * @return Term
     */
    public function setDiscountPercentDateDriven(float $discountPercentDateDriven): Term
    {
        $this->discountPercentDateDriven = $discountPercentDateDriven;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentDateDriven(): float
    {
        return $this->discountPercentDateDriven;
    }

    /**
     * @param int $dayDiscountExpires
     * @return Term
     */
    public function setDayDiscountExpires(int $dayDiscountExpires): Term
    {
        $this->dayDiscountExpires = $dayDiscountExpires;
        return $this;
    }

    /**
     * @return int
     */
    public function getDayDiscountExpires(): int
    {
        return $this->dayDiscountExpires;
    }

    /**
     * @param bool $preferred
     * @return Term
     */
    public function setPreferred(bool $preferred): Term
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreferred(): bool
    {
        return $this->preferred;
    }

    /**
     * @param bool $isInactive
     * @return Term
     */
    public function setIsInactive(bool $isInactive): Term
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
     * @param bool $installment
     * @return Term
     */
    public function setInstallment(bool $installment): Term
    {
        $this->installment = $installment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInstallment(): bool
    {
        return $this->installment;
    }

    /**
     * @param TermRecurrenceFrequency $recurrenceFrequency
     * @return Term
     */
    public function setRecurrenceFrequency(TermRecurrenceFrequency $recurrenceFrequency): Term
    {
        $this->recurrenceFrequency = $recurrenceFrequency;
        return $this;
    }

    /**
     * @return TermRecurrenceFrequency
     */
    public function getRecurrenceFrequency(): TermRecurrenceFrequency
    {
        return $this->recurrenceFrequency;
    }

    /**
     * @param int $recurrenceCount
     * @return Term
     */
    public function setRecurrenceCount(int $recurrenceCount): Term
    {
        $this->recurrenceCount = $recurrenceCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecurrenceCount(): int
    {
        return $this->recurrenceCount;
    }

    /**
     * @param int $repeatEvery
     * @return Term
     */
    public function setRepeatEvery(int $repeatEvery): Term
    {
        $this->repeatEvery = $repeatEvery;
        return $this;
    }

    /**
     * @return int
     */
    public function getRepeatEvery(): int
    {
        return $this->repeatEvery;
    }

    /**
     * @param bool $splitEvenly
     * @return Term
     */
    public function setSplitEvenly(bool $splitEvenly): Term
    {
        $this->splitEvenly = $splitEvenly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSplitEvenly(): bool
    {
        return $this->splitEvenly;
    }

    /**
     * @param TermPercentagesList $percentagesList
     * @return Term
     */
    public function setPercentagesList(TermPercentagesList $percentagesList): Term
    {
        $this->percentagesList = $percentagesList;
        return $this;
    }

    /**
     * @return TermPercentagesList
     */
    public function getPercentagesList(): TermPercentagesList
    {
        return $this->percentagesList;
    }

    /**
     * @param string $internalId
     * @return Term
     */
    public function setInternalId(string $internalId): Term
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
     * @return Term
     */
    public function setExternalId(string $externalId): Term
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
