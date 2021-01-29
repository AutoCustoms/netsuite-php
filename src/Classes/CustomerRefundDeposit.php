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

class CustomerRefundDeposit {
    /**
     * @var bool
     */
    protected bool $apply;

    /**
     * @var int
     */
    protected int $doc;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var string
     */
    protected string $depositDate;

    /**
     * @var string
     */
    protected string $refNum;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var float
     */
    protected float $remaining;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var float
     */
    protected float $amount;

    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "depositDate" => "dateTime",
        "refNum" => "string",
        "total" => "float",
        "remaining" => "float",
        "currency" => "string",
        "amount" => "float",
    );

    /**
     * @param bool $apply
     * @return CustomerRefundDeposit
     */
    public function setApply(bool $apply): CustomerRefundDeposit
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
     * @param int $doc
     * @return CustomerRefundDeposit
     */
    public function setDoc(int $doc): CustomerRefundDeposit
    {
        $this->doc = $doc;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoc(): int
    {
        return $this->doc;
    }

    /**
     * @param int $line
     * @return CustomerRefundDeposit
     */
    public function setLine(int $line): CustomerRefundDeposit
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
     * @param string $depositDate
     * @return CustomerRefundDeposit
     */
    public function setDepositDate(string $depositDate): CustomerRefundDeposit
    {
        $this->depositDate = $depositDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepositDate(): string
    {
        return $this->depositDate;
    }

    /**
     * @param string $refNum
     * @return CustomerRefundDeposit
     */
    public function setRefNum(string $refNum): CustomerRefundDeposit
    {
        $this->refNum = $refNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefNum(): string
    {
        return $this->refNum;
    }

    /**
     * @param float $total
     * @return CustomerRefundDeposit
     */
    public function setTotal(float $total): CustomerRefundDeposit
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $remaining
     * @return CustomerRefundDeposit
     */
    public function setRemaining(float $remaining): CustomerRefundDeposit
    {
        $this->remaining = $remaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getRemaining(): float
    {
        return $this->remaining;
    }

    /**
     * @param string $currency
     * @return CustomerRefundDeposit
     */
    public function setCurrency(string $currency): CustomerRefundDeposit
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param float $amount
     * @return CustomerRefundDeposit
     */
    public function setAmount(float $amount): CustomerRefundDeposit
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
