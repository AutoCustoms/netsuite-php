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

class PaycheckPayEarn {
    /**
     * @var RecordRef
     */
    protected RecordRef $payItem;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var float
     */
    protected float $count;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var RecordRef
     */
    protected RecordRef $serviceItem;

    /**
     * @var float
     */
    protected float $grossAmount;

    /**
     * @var bool
     */
    protected bool $manualEntry;

    static $paramtypesmap = array(
        "payItem" => "RecordRef",
        "line" => "integer",
        "count" => "float",
        "rate" => "string",
        "serviceItem" => "RecordRef",
        "grossAmount" => "float",
        "manualEntry" => "boolean",
    );

    /**
     * @param RecordRef $payItem
     * @return PaycheckPayEarn
     */
    public function setPayItem(RecordRef $payItem): PaycheckPayEarn
    {
        $this->payItem = $payItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayItem(): RecordRef
    {
        return $this->payItem;
    }

    /**
     * @param int $line
     * @return PaycheckPayEarn
     */
    public function setLine(int $line): PaycheckPayEarn
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
     * @param float $count
     * @return PaycheckPayEarn
     */
    public function setCount(float $count): PaycheckPayEarn
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return float
     */
    public function getCount(): float
    {
        return $this->count;
    }

    /**
     * @param string $rate
     * @return PaycheckPayEarn
     */
    public function setRate(string $rate): PaycheckPayEarn
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param RecordRef $serviceItem
     * @return PaycheckPayEarn
     */
    public function setServiceItem(RecordRef $serviceItem): PaycheckPayEarn
    {
        $this->serviceItem = $serviceItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getServiceItem(): RecordRef
    {
        return $this->serviceItem;
    }

    /**
     * @param float $grossAmount
     * @return PaycheckPayEarn
     */
    public function setGrossAmount(float $grossAmount): PaycheckPayEarn
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmount(): float
    {
        return $this->grossAmount;
    }

    /**
     * @param bool $manualEntry
     * @return PaycheckPayEarn
     */
    public function setManualEntry(bool $manualEntry): PaycheckPayEarn
    {
        $this->manualEntry = $manualEntry;
        return $this;
    }

    /**
     * @return bool
     */
    public function getManualEntry(): bool
    {
        return $this->manualEntry;
    }

}
