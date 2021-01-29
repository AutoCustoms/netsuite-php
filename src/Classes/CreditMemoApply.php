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

class CreditMemoApply {
    /**
     * @var bool
     */
    protected bool $apply;

    /**
     * @var int
     */
    protected int $doc;

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
     * @var float
     */
    protected float $amount;

    /**
     * @var int
     */
    protected int $line;

    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "applyDate" => "dateTime",
        "job" => "string",
        "type" => "string",
        "refNum" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "amount" => "float",
        "line" => "integer",
    );

    /**
     * @param bool $apply
     * @return CreditMemoApply
     */
    public function setApply(bool $apply): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setDoc(int $doc): CreditMemoApply
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
     * @param string $applyDate
     * @return CreditMemoApply
     */
    public function setApplyDate(string $applyDate): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setJob(string $job): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setType(string $type): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setRefNum(string $refNum): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setTotal(float $total): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setDue(float $due): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setCurrency(string $currency): CreditMemoApply
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
     * @return CreditMemoApply
     */
    public function setAmount(float $amount): CreditMemoApply
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
     * @param int $line
     * @return CreditMemoApply
     */
    public function setLine(int $line): CreditMemoApply
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

}
