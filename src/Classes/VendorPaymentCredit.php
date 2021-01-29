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

class VendorPaymentCredit {
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
    protected string $creditDate;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var string
     */
    protected string $refNum;

    /**
     * @var string
     */
    protected string $appliedTo;

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
        "doc" => "integer",
        "line" => "integer",
        "creditDate" => "dateTime",
        "type" => "string",
        "refNum" => "string",
        "appliedTo" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "amount" => "float",
    );

    /**
     * @param bool $apply
     * @return VendorPaymentCredit
     */
    public function setApply(bool $apply): VendorPaymentCredit
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
     * @return VendorPaymentCredit
     */
    public function setDoc(int $doc): VendorPaymentCredit
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
     * @return VendorPaymentCredit
     */
    public function setLine(int $line): VendorPaymentCredit
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
     * @param string $creditDate
     * @return VendorPaymentCredit
     */
    public function setCreditDate(string $creditDate): VendorPaymentCredit
    {
        $this->creditDate = $creditDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditDate(): string
    {
        return $this->creditDate;
    }

    /**
     * @param string $type
     * @return VendorPaymentCredit
     */
    public function setType(string $type): VendorPaymentCredit
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
     * @return VendorPaymentCredit
     */
    public function setRefNum(string $refNum): VendorPaymentCredit
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
     * @param string $appliedTo
     * @return VendorPaymentCredit
     */
    public function setAppliedTo(string $appliedTo): VendorPaymentCredit
    {
        $this->appliedTo = $appliedTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppliedTo(): string
    {
        return $this->appliedTo;
    }

    /**
     * @param float $total
     * @return VendorPaymentCredit
     */
    public function setTotal(float $total): VendorPaymentCredit
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
     * @return VendorPaymentCredit
     */
    public function setDue(float $due): VendorPaymentCredit
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
     * @return VendorPaymentCredit
     */
    public function setCurrency(string $currency): VendorPaymentCredit
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
     * @return VendorPaymentCredit
     */
    public function setAmount(float $amount): VendorPaymentCredit
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
