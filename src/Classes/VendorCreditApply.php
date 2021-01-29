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

class VendorCreditApply {
    /**
     * @var bool
     */
    protected bool $apply;

    /**
     * @var string
     */
    protected string $applyDate;

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

    static $paramtypesmap = array(
        "apply" => "boolean",
        "applyDate" => "dateTime",
        "doc" => "integer",
        "line" => "integer",
        "type" => "string",
        "refNum" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "amount" => "float",
    );

    /**
     * @param bool $apply
     * @return VendorCreditApply
     */
    public function setApply(bool $apply): VendorCreditApply
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
     * @return VendorCreditApply
     */
    public function setApplyDate(string $applyDate): VendorCreditApply
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
     * @param int $doc
     * @return VendorCreditApply
     */
    public function setDoc(int $doc): VendorCreditApply
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
     * @return VendorCreditApply
     */
    public function setLine(int $line): VendorCreditApply
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
     * @param string $type
     * @return VendorCreditApply
     */
    public function setType(string $type): VendorCreditApply
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
     * @return VendorCreditApply
     */
    public function setRefNum(string $refNum): VendorCreditApply
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
     * @return VendorCreditApply
     */
    public function setTotal(float $total): VendorCreditApply
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
     * @return VendorCreditApply
     */
    public function setDue(float $due): VendorCreditApply
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
     * @return VendorCreditApply
     */
    public function setCurrency(string $currency): VendorCreditApply
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
     * @return VendorCreditApply
     */
    public function setAmount(float $amount): VendorCreditApply
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
