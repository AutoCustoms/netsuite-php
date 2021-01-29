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

class PaycheckPayTax {
    /**
     * @var int
     */
    protected int $line;

    /**
     * @var bool
     */
    protected bool $apply;

    /**
     * @var string
     */
    protected string $payTax;

    /**
     * @var int
     */
    protected int $payItem;

    /**
     * @var float
     */
    protected float $taxableWageBase;

    /**
     * @var float
     */
    protected float $taxedWageBase;

    /**
     * @var float
     */
    protected float $reportableWageBase;

    /**
     * @var bool
     */
    protected bool $isExempt;

    /**
     * @var bool
     */
    protected bool $isResidentTax;

    /**
     * @var float
     */
    protected float $amount;

    static $paramtypesmap = array(
        "line" => "integer",
        "apply" => "boolean",
        "payTax" => "string",
        "payItem" => "integer",
        "taxableWageBase" => "float",
        "taxedWageBase" => "float",
        "reportableWageBase" => "float",
        "isExempt" => "boolean",
        "isResidentTax" => "boolean",
        "amount" => "float",
    );

    /**
     * @param int $line
     * @return PaycheckPayTax
     */
    public function setLine(int $line): PaycheckPayTax
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
     * @param bool $apply
     * @return PaycheckPayTax
     */
    public function setApply(bool $apply): PaycheckPayTax
    {
        $this->apply = $apply;
        return $this;
    }

    /**
     * @return bool
     */
    public function getApply(): bool
    {
        return $this->apply;
    }

    /**
     * @param string $payTax
     * @return PaycheckPayTax
     */
    public function setPayTax(string $payTax): PaycheckPayTax
    {
        $this->payTax = $payTax;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayTax(): string
    {
        return $this->payTax;
    }

    /**
     * @param int $payItem
     * @return PaycheckPayTax
     */
    public function setPayItem(int $payItem): PaycheckPayTax
    {
        $this->payItem = $payItem;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayItem(): int
    {
        return $this->payItem;
    }

    /**
     * @param float $taxableWageBase
     * @return PaycheckPayTax
     */
    public function setTaxableWageBase(float $taxableWageBase): PaycheckPayTax
    {
        $this->taxableWageBase = $taxableWageBase;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxableWageBase(): float
    {
        return $this->taxableWageBase;
    }

    /**
     * @param float $taxedWageBase
     * @return PaycheckPayTax
     */
    public function setTaxedWageBase(float $taxedWageBase): PaycheckPayTax
    {
        $this->taxedWageBase = $taxedWageBase;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxedWageBase(): float
    {
        return $this->taxedWageBase;
    }

    /**
     * @param float $reportableWageBase
     * @return PaycheckPayTax
     */
    public function setReportableWageBase(float $reportableWageBase): PaycheckPayTax
    {
        $this->reportableWageBase = $reportableWageBase;
        return $this;
    }

    /**
     * @return float
     */
    public function getReportableWageBase(): float
    {
        return $this->reportableWageBase;
    }

    /**
     * @param bool $isExempt
     * @return PaycheckPayTax
     */
    public function setIsExempt(bool $isExempt): PaycheckPayTax
    {
        $this->isExempt = $isExempt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsExempt(): bool
    {
        return $this->isExempt;
    }

    /**
     * @param bool $isResidentTax
     * @return PaycheckPayTax
     */
    public function setIsResidentTax(bool $isResidentTax): PaycheckPayTax
    {
        $this->isResidentTax = $isResidentTax;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsResidentTax(): bool
    {
        return $this->isResidentTax;
    }

    /**
     * @param float $amount
     * @return PaycheckPayTax
     */
    public function setAmount(float $amount): PaycheckPayTax
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

}
