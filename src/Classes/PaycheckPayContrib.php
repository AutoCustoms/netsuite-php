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

class PaycheckPayContrib {
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
    protected float $wageBase;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var bool
     */
    protected bool $manualEntry;

    static $paramtypesmap = array(
        "payItem" => "RecordRef",
        "line" => "integer",
        "wageBase" => "float",
        "amount" => "float",
        "manualEntry" => "boolean",
    );

    /**
     * @param RecordRef $payItem
     * @return PaycheckPayContrib
     */
    public function setPayItem(RecordRef $payItem): PaycheckPayContrib
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
     * @return PaycheckPayContrib
     */
    public function setLine(int $line): PaycheckPayContrib
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
     * @param float $wageBase
     * @return PaycheckPayContrib
     */
    public function setWageBase(float $wageBase): PaycheckPayContrib
    {
        $this->wageBase = $wageBase;
        return $this;
    }

    /**
     * @return float
     */
    public function getWageBase(): float
    {
        return $this->wageBase;
    }

    /**
     * @param float $amount
     * @return PaycheckPayContrib
     */
    public function setAmount(float $amount): PaycheckPayContrib
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
     * @param bool $manualEntry
     * @return PaycheckPayContrib
     */
    public function setManualEntry(bool $manualEntry): PaycheckPayContrib
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
