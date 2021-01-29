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

class PaycheckPayPto {
    /**
     * @var int
     */
    protected int $payItem;

    /**
     * @var string
     */
    protected string $payItemName;

    /**
     * @var float
     */
    protected float $hoursAccrued;

    /**
     * @var float
     */
    protected float $hoursUsed;

    /**
     * @var float
     */
    protected float $hoursBalance;

    static $paramtypesmap = array(
        "payItem" => "integer",
        "payItemName" => "string",
        "hoursAccrued" => "float",
        "hoursUsed" => "float",
        "hoursBalance" => "float",
    );

    /**
     * @param int $payItem
     * @return PaycheckPayPto
     */
    public function setPayItem(int $payItem): PaycheckPayPto
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
     * @return PaycheckPayPto
     */
    public function setPayItemName(string $payItemName): PaycheckPayPto
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
     * @param float $hoursAccrued
     * @return PaycheckPayPto
     */
    public function setHoursAccrued(float $hoursAccrued): PaycheckPayPto
    {
        $this->hoursAccrued = $hoursAccrued;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursAccrued(): float
    {
        return $this->hoursAccrued;
    }

    /**
     * @param float $hoursUsed
     * @return PaycheckPayPto
     */
    public function setHoursUsed(float $hoursUsed): PaycheckPayPto
    {
        $this->hoursUsed = $hoursUsed;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursUsed(): float
    {
        return $this->hoursUsed;
    }

    /**
     * @param float $hoursBalance
     * @return PaycheckPayPto
     */
    public function setHoursBalance(float $hoursBalance): PaycheckPayPto
    {
        $this->hoursBalance = $hoursBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursBalance(): float
    {
        return $this->hoursBalance;
    }

}
