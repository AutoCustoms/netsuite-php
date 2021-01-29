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

class CurrencyRate extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $baseCurrency;

    /**
     * @var RecordRef
     */
    protected RecordRef $transactionCurrency;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var string
     */
    protected string $effectiveDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $currencyRateType;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "baseCurrency" => "RecordRef",
        "transactionCurrency" => "RecordRef",
        "exchangeRate" => "float",
        "effectiveDate" => "dateTime",
        "currencyRateType" => "RecordRef",
        "internalId" => "string",
    );

    /**
     * @param RecordRef $baseCurrency
     * @return CurrencyRate
     */
    public function setBaseCurrency(RecordRef $baseCurrency): CurrencyRate
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
     * @param RecordRef $transactionCurrency
     * @return CurrencyRate
     */
    public function setTransactionCurrency(RecordRef $transactionCurrency): CurrencyRate
    {
        $this->transactionCurrency = $transactionCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransactionCurrency(): RecordRef
    {
        return $this->transactionCurrency;
    }

    /**
     * @param float $exchangeRate
     * @return CurrencyRate
     */
    public function setExchangeRate(float $exchangeRate): CurrencyRate
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
     * @return CurrencyRate
     */
    public function setEffectiveDate(string $effectiveDate): CurrencyRate
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

    /**
     * @param RecordRef $currencyRateType
     * @return CurrencyRate
     */
    public function setCurrencyRateType(RecordRef $currencyRateType): CurrencyRate
    {
        $this->currencyRateType = $currencyRateType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrencyRateType(): RecordRef
    {
        return $this->currencyRateType;
    }

    /**
     * @param string $internalId
     * @return CurrencyRate
     */
    public function setInternalId(string $internalId): CurrencyRate
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

}
