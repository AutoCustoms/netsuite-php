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

class CustomerPaymentDeposit {
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
     * @return CustomerPaymentDeposit
     */
    public function setApply(bool $apply): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setDoc(int $doc): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setLine(int $line): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setDepositDate(string $depositDate): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setRefNum(string $refNum): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setTotal(float $total): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setRemaining(float $remaining): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setCurrency(string $currency): CustomerPaymentDeposit
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
     * @return CustomerPaymentDeposit
     */
    public function setAmount(float $amount): CustomerPaymentDeposit
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
