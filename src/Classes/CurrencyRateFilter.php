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

class CurrencyRateFilter {
    /**
     * @var RecordRef
     */
    protected RecordRef $baseCurrency;

    /**
     * @var RecordRef
     */
    protected RecordRef $fromCurrency;

    /**
     * @var string
     */
    protected string $effectiveDate;

    static $paramtypesmap = array(
        "baseCurrency" => "RecordRef",
        "fromCurrency" => "RecordRef",
        "effectiveDate" => "dateTime",
    );

    /**
     * @param RecordRef $baseCurrency
     * @return CurrencyRateFilter
     */
    public function setBaseCurrency(RecordRef $baseCurrency): CurrencyRateFilter
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
     * @return CurrencyRateFilter
     */
    public function setFromCurrency(RecordRef $fromCurrency): CurrencyRateFilter
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
     * @param string $effectiveDate
     * @return CurrencyRateFilter
     */
    public function setEffectiveDate(string $effectiveDate): CurrencyRateFilter
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
