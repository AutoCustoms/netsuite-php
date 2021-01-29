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

class PaycheckPayExp {
    /**
     * @var bool
     */
    protected bool $apply;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var int
     */
    protected int $origDoc;

    /**
     * @var string
     */
    protected string $transaction;

    /**
     * @var float
     */
    protected float $amount;

    static $paramtypesmap = array(
        "apply" => "boolean",
        "line" => "integer",
        "origDoc" => "integer",
        "transaction" => "string",
        "amount" => "float",
    );

    /**
     * @param bool $apply
     * @return PaycheckPayExp
     */
    public function setApply(bool $apply): PaycheckPayExp
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
     * @param int $line
     * @return PaycheckPayExp
     */
    public function setLine(int $line): PaycheckPayExp
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
     * @param int $origDoc
     * @return PaycheckPayExp
     */
    public function setOrigDoc(int $origDoc): PaycheckPayExp
    {
        $this->origDoc = $origDoc;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrigDoc(): int
    {
        return $this->origDoc;
    }

    /**
     * @param string $transaction
     * @return PaycheckPayExp
     */
    public function setTransaction(string $transaction): PaycheckPayExp
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransaction(): string
    {
        return $this->transaction;
    }

    /**
     * @param float $amount
     * @return PaycheckPayExp
     */
    public function setAmount(float $amount): PaycheckPayExp
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
