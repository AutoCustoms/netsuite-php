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

class CustomerDepositApply {
    /**
     * @var int
     */
    protected int $doc;

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
    protected string $applyDate;

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
    protected float $amount;

    /**
     * @var string
     */
    protected string $job;

    static $paramtypesmap = array(
        "doc" => "integer",
        "line" => "integer",
        "apply" => "boolean",
        "applyDate" => "dateTime",
        "type" => "string",
        "refNum" => "string",
        "total" => "float",
        "amount" => "float",
        "job" => "string",
    );

    /**
     * @param int $doc
     * @return CustomerDepositApply
     */
    public function setDoc(int $doc): CustomerDepositApply
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
     * @return CustomerDepositApply
     */
    public function setLine(int $line): CustomerDepositApply
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
     * @return CustomerDepositApply
     */
    public function setApply(bool $apply): CustomerDepositApply
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
     * @param string $applyDate
     * @return CustomerDepositApply
     */
    public function setApplyDate(string $applyDate): CustomerDepositApply
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
     * @param string $type
     * @return CustomerDepositApply
     */
    public function setType(string $type): CustomerDepositApply
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
     * @return CustomerDepositApply
     */
    public function setRefNum(string $refNum): CustomerDepositApply
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
     * @return CustomerDepositApply
     */
    public function setTotal(float $total): CustomerDepositApply
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
     * @param float $amount
     * @return CustomerDepositApply
     */
    public function setAmount(float $amount): CustomerDepositApply
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
     * @param string $job
     * @return CustomerDepositApply
     */
    public function setJob(string $job): CustomerDepositApply
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

}
