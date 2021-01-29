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

class CustomerPaymentApply {
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
    protected string $applyDate;

    /**
     * @var string
     */
    protected string $job;

    /**
     * @var string
     */
    protected string $type;

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
    protected float $due;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var string
     */
    protected string $discDate;

    /**
     * @var float
     */
    protected float $discAmt;

    /**
     * @var float
     */
    protected float $disc;

    /**
     * @var float
     */
    protected float $amount;

    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "applyDate" => "dateTime",
        "job" => "string",
        "type" => "string",
        "refNum" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "discDate" => "dateTime",
        "discAmt" => "float",
        "disc" => "float",
        "amount" => "float",
    );

    /**
     * @param bool $apply
     * @return CustomerPaymentApply
     */
    public function setApply(bool $apply): CustomerPaymentApply
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
     * @return CustomerPaymentApply
     */
    public function setDoc(int $doc): CustomerPaymentApply
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
     * @return CustomerPaymentApply
     */
    public function setLine(int $line): CustomerPaymentApply
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
     * @param string $applyDate
     * @return CustomerPaymentApply
     */
    public function setApplyDate(string $applyDate): CustomerPaymentApply
    {
        $this->applyDate = $applyDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplyDate(): string
    {
        return $this->applyDate;
    }

    /**
     * @param string $job
     * @return CustomerPaymentApply
     */
    public function setJob(string $job): CustomerPaymentApply
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @param string $type
     * @return CustomerPaymentApply
     */
    public function setType(string $type): CustomerPaymentApply
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $refNum
     * @return CustomerPaymentApply
     */
    public function setRefNum(string $refNum): CustomerPaymentApply
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
     * @return CustomerPaymentApply
     */
    public function setTotal(float $total): CustomerPaymentApply
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
     * @param float $due
     * @return CustomerPaymentApply
     */
    public function setDue(float $due): CustomerPaymentApply
    {
        $this->due = $due;
        return $this;
    }

    /**
     * @return float
     */
    public function getDue(): float
    {
        return $this->due;
    }

    /**
     * @param string $currency
     * @return CustomerPaymentApply
     */
    public function setCurrency(string $currency): CustomerPaymentApply
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
     * @param string $discDate
     * @return CustomerPaymentApply
     */
    public function setDiscDate(string $discDate): CustomerPaymentApply
    {
        $this->discDate = $discDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscDate(): string
    {
        return $this->discDate;
    }

    /**
     * @param float $discAmt
     * @return CustomerPaymentApply
     */
    public function setDiscAmt(float $discAmt): CustomerPaymentApply
    {
        $this->discAmt = $discAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscAmt(): float
    {
        return $this->discAmt;
    }

    /**
     * @param float $disc
     * @return CustomerPaymentApply
     */
    public function setDisc(float $disc): CustomerPaymentApply
    {
        $this->disc = $disc;
        return $this;
    }

    /**
     * @return float
     */
    public function getDisc(): float
    {
        return $this->disc;
    }

    /**
     * @param float $amount
     * @return CustomerPaymentApply
     */
    public function setAmount(float $amount): CustomerPaymentApply
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
