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

class CurrencyRate_core {
    /**
     * @var RecordRef
     */
    protected RecordRef $baseCurrency;

    /**
     * @var RecordRef
     */
    protected RecordRef $fromCurrency;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var string
     */
    protected string $effectiveDate;

    static $paramtypesmap = array(
        "baseCurrency" => "RecordRef",
        "fromCurrency" => "RecordRef",
        "exchangeRate" => "float",
        "effectiveDate" => "dateTime",
    );

    /**
     * @param RecordRef $baseCurrency
     * @return CurrencyRate_core
     */
    public function setBaseCurrency(RecordRef $baseCurrency): CurrencyRate_core
    {
        $this->baseCurrency = $baseCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBaseCurrency(): RecordRef
    {
        return $this->baseCurrency;
    }

    /**
     * @param RecordRef $fromCurrency
     * @return CurrencyRate_core
     */
    public function setFromCurrency(RecordRef $fromCurrency): CurrencyRate_core
    {
        $this->fromCurrency = $fromCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFromCurrency(): RecordRef
    {
        return $this->fromCurrency;
    }

    /**
     * @param float $exchangeRate
     * @return CurrencyRate_core
     */
    public function setExchangeRate(float $exchangeRate): CurrencyRate_core
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    /**
     * @param string $effectiveDate
     * @return CurrencyRate_core
     */
    public function setEffectiveDate(string $effectiveDate): CurrencyRate_core
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

}
