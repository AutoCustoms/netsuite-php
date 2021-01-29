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

class PaycheckPaySummary {
    /**
     * @var string
     */
    protected string $payItem;

    /**
     * @var string
     */
    protected string $payItemType;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var float
     */
    protected float $ytdAmount;

    static $paramtypesmap = array(
        "payItem" => "string",
        "payItemType" => "string",
        "amount" => "float",
        "ytdAmount" => "float",
    );

    /**
     * @param string $payItem
     * @return PaycheckPaySummary
     */
    public function setPayItem(string $payItem): PaycheckPaySummary
    {
        $this->payItem = $payItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayItem(): string
    {
        return $this->payItem;
    }

    /**
     * @param string $payItemType
     * @return PaycheckPaySummary
     */
    public function setPayItemType(string $payItemType): PaycheckPaySummary
    {
        $this->payItemType = $payItemType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayItemType(): string
    {
        return $this->payItemType;
    }

    /**
     * @param float $amount
     * @return PaycheckPaySummary
     */
    public function setAmount(float $amount): PaycheckPaySummary
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
     * @param float $ytdAmount
     * @return PaycheckPaySummary
     */
    public function setYtdAmount(float $ytdAmount): PaycheckPaySummary
    {
        $this->ytdAmount = $ytdAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getYtdAmount(): float
    {
        return $this->ytdAmount;
    }

}
