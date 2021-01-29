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

class PaycheckPayTime {
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
    protected int $payItem;

    /**
     * @var string
     */
    protected string $payItemName;

    /**
     * @var string
     */
    protected string $ddate;

    /**
     * @var string
     */
    protected string $custJob;

    /**
     * @var string
     */
    protected string $serviceItem;

    /**
     * @var float
     */
    protected float $count;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var float
     */
    protected float $amount;

    static $paramtypesmap = array(
        "apply" => "boolean",
        "line" => "integer",
        "payItem" => "integer",
        "payItemName" => "string",
        "ddate" => "dateTime",
        "custJob" => "string",
        "serviceItem" => "string",
        "count" => "float",
        "rate" => "float",
        "amount" => "float",
    );

    /**
     * @param bool $apply
     * @return PaycheckPayTime
     */
    public function setApply(bool $apply): PaycheckPayTime
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
     * @return PaycheckPayTime
     */
    public function setLine(int $line): PaycheckPayTime
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
     * @param int $payItem
     * @return PaycheckPayTime
     */
    public function setPayItem(int $payItem): PaycheckPayTime
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
     * @param string $payItemName
     * @return PaycheckPayTime
     */
    public function setPayItemName(string $payItemName): PaycheckPayTime
    {
        $this->payItemName = $payItemName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayItemName(): string
    {
        return $this->payItemName;
    }

    /**
     * @param string $ddate
     * @return PaycheckPayTime
     */
    public function setDdate(string $ddate): PaycheckPayTime
    {
        $this->ddate = $ddate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDdate(): string
    {
        return $this->ddate;
    }

    /**
     * @param string $custJob
     * @return PaycheckPayTime
     */
    public function setCustJob(string $custJob): PaycheckPayTime
    {
        $this->custJob = $custJob;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustJob(): string
    {
        return $this->custJob;
    }

    /**
     * @param string $serviceItem
     * @return PaycheckPayTime
     */
    public function setServiceItem(string $serviceItem): PaycheckPayTime
    {
        $this->serviceItem = $serviceItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceItem(): string
    {
        return $this->serviceItem;
    }

    /**
     * @param float $count
     * @return PaycheckPayTime
     */
    public function setCount(float $count): PaycheckPayTime
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return float
     */
    public function getCount(): float
    {
        return $this->count;
    }

    /**
     * @param float $rate
     * @return PaycheckPayTime
     */
    public function setRate(float $rate): PaycheckPayTime
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $amount
     * @return PaycheckPayTime
     */
    public function setAmount(float $amount): PaycheckPayTime
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
