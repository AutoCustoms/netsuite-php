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

class BillingScheduleRecurrence {
    /**
     * @var int
     */
    protected int $recurrenceId;

    /**
     * @var int
     */
    protected int $count;

    /**
     * @var BillingScheduleRecurrenceRecurrenceUnits
     */
    protected BillingScheduleRecurrenceRecurrenceUnits $units;

    /**
     * @var bool
     */
    protected bool $relativeToPrevious;

    /**
     * @var string
     */
    protected string $recurrenceDate;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentTerms;

    static $paramtypesmap = array(
        "recurrenceId" => "integer",
        "count" => "integer",
        "units" => "BillingScheduleRecurrenceRecurrenceUnits",
        "relativeToPrevious" => "boolean",
        "recurrenceDate" => "dateTime",
        "amount" => "float",
        "paymentTerms" => "RecordRef",
    );

    /**
     * @param int $recurrenceId
     * @return BillingScheduleRecurrence
     */
    public function setRecurrenceId(int $recurrenceId): BillingScheduleRecurrence
    {
        $this->recurrenceId = $recurrenceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecurrenceId(): int
    {
        return $this->recurrenceId;
    }

    /**
     * @param int $count
     * @return BillingScheduleRecurrence
     */
    public function setCount(int $count): BillingScheduleRecurrence
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param BillingScheduleRecurrenceRecurrenceUnits $units
     * @return BillingScheduleRecurrence
     */
    public function setUnits(BillingScheduleRecurrenceRecurrenceUnits $units): BillingScheduleRecurrence
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return BillingScheduleRecurrenceRecurrenceUnits
     */
    public function getUnits(): BillingScheduleRecurrenceRecurrenceUnits
    {
        return $this->units;
    }

    /**
     * @param bool $relativeToPrevious
     * @return BillingScheduleRecurrence
     */
    public function setRelativeToPrevious(bool $relativeToPrevious): BillingScheduleRecurrence
    {
        $this->relativeToPrevious = $relativeToPrevious;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRelativeToPrevious(): bool
    {
        return $this->relativeToPrevious;
    }

    /**
     * @param string $recurrenceDate
     * @return BillingScheduleRecurrence
     */
    public function setRecurrenceDate(string $recurrenceDate): BillingScheduleRecurrence
    {
        $this->recurrenceDate = $recurrenceDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecurrenceDate(): string
    {
        return $this->recurrenceDate;
    }

    /**
     * @param float $amount
     * @return BillingScheduleRecurrence
     */
    public function setAmount(float $amount): BillingScheduleRecurrence
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param RecordRef $paymentTerms
     * @return BillingScheduleRecurrence
     */
    public function setPaymentTerms(RecordRef $paymentTerms): BillingScheduleRecurrence
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentTerms(): RecordRef
    {
        return $this->paymentTerms;
    }

}
