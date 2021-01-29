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

class BudgetExchangeRate {
    /**
     * @var RecordRef
     */
    protected RecordRef $period;

    /**
     * @var RecordRef
     */
    protected RecordRef $fromSubsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $toSubsidiary;

    /**
     * @var float
     */
    protected float $currentRate;

    /**
     * @var float
     */
    protected float $averageRate;

    /**
     * @var float
     */
    protected float $historicalRate;

    static $paramtypesmap = array(
        "period" => "RecordRef",
        "fromSubsidiary" => "RecordRef",
        "toSubsidiary" => "RecordRef",
        "currentRate" => "float",
        "averageRate" => "float",
        "historicalRate" => "float",
    );

    /**
     * @param RecordRef $period
     * @return BudgetExchangeRate
     */
    public function setPeriod(RecordRef $period): BudgetExchangeRate
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPeriod(): RecordRef
    {
        return $this->period;
    }

    /**
     * @param RecordRef $fromSubsidiary
     * @return BudgetExchangeRate
     */
    public function setFromSubsidiary(RecordRef $fromSubsidiary): BudgetExchangeRate
    {
        $this->fromSubsidiary = $fromSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFromSubsidiary(): RecordRef
    {
        return $this->fromSubsidiary;
    }

    /**
     * @param RecordRef $toSubsidiary
     * @return BudgetExchangeRate
     */
    public function setToSubsidiary(RecordRef $toSubsidiary): BudgetExchangeRate
    {
        $this->toSubsidiary = $toSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToSubsidiary(): RecordRef
    {
        return $this->toSubsidiary;
    }

    /**
     * @param float $currentRate
     * @return BudgetExchangeRate
     */
    public function setCurrentRate(float $currentRate): BudgetExchangeRate
    {
        $this->currentRate = $currentRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentRate(): float
    {
        return $this->currentRate;
    }

    /**
     * @param float $averageRate
     * @return BudgetExchangeRate
     */
    public function setAverageRate(float $averageRate): BudgetExchangeRate
    {
        $this->averageRate = $averageRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAverageRate(): float
    {
        return $this->averageRate;
    }

    /**
     * @param float $historicalRate
     * @return BudgetExchangeRate
     */
    public function setHistoricalRate(float $historicalRate): BudgetExchangeRate
    {
        $this->historicalRate = $historicalRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getHistoricalRate(): float
    {
        return $this->historicalRate;
    }

}
