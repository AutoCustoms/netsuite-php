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

class Installment {
    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var string
     */
    protected string $dueDate;

    /**
     * @var float
     */
    protected float $amountDue;

    /**
     * @var int
     */
    protected int $seqNum;

    /**
     * @var string
     */
    protected string $status;

    static $paramtypesmap = array(
        "amount" => "float",
        "dueDate" => "dateTime",
        "amountDue" => "float",
        "seqNum" => "integer",
        "status" => "string",
    );

    /**
     * @param float $amount
     * @return Installment
     */
    public function setAmount(float $amount): Installment
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
     * @param string $dueDate
     * @return Installment
     */
    public function setDueDate(string $dueDate): Installment
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param float $amountDue
     * @return Installment
     */
    public function setAmountDue(float $amountDue): Installment
    {
        $this->amountDue = $amountDue;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountDue(): float
    {
        return $this->amountDue;
    }

    /**
     * @param int $seqNum
     * @return Installment
     */
    public function setSeqNum(int $seqNum): Installment
    {
        $this->seqNum = $seqNum;
        return $this;
    }

    /**
     * @return int
     */
    public function getSeqNum(): int
    {
        return $this->seqNum;
    }

    /**
     * @param string $status
     * @return Installment
     */
    public function setStatus(string $status): Installment
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

}
