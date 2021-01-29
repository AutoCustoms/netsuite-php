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

class Currency extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $symbol;

    /**
     * @var bool
     */
    protected bool $isBaseCurrency;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $overrideCurrencyFormat;

    /**
     * @var string
     */
    protected string $displaySymbol;

    /**
     * @var CurrencySymbolPlacement
     */
    protected CurrencySymbolPlacement $symbolPlacement;

    /**
     * @var CurrencyLocale
     */
    protected CurrencyLocale $locale;

    /**
     * @var string
     */
    protected string $formatSample;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var CurrencyFxRateUpdateTimezone
     */
    protected CurrencyFxRateUpdateTimezone $fxRateUpdateTimezone;

    /**
     * @var bool
     */
    protected bool $inclInFxRateUpdates;

    /**
     * @var CurrencyCurrencyPrecision
     */
    protected CurrencyCurrencyPrecision $currencyPrecision;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "symbol" => "string",
        "isBaseCurrency" => "boolean",
        "isInactive" => "boolean",
        "overrideCurrencyFormat" => "boolean",
        "displaySymbol" => "string",
        "symbolPlacement" => "CurrencySymbolPlacement",
        "locale" => "CurrencyLocale",
        "formatSample" => "string",
        "exchangeRate" => "float",
        "fxRateUpdateTimezone" => "CurrencyFxRateUpdateTimezone",
        "inclInFxRateUpdates" => "boolean",
        "currencyPrecision" => "CurrencyCurrencyPrecision",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return Currency
     */
    public function setName(string $name): Currency
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $symbol
     * @return Currency
     */
    public function setSymbol(string $symbol): Currency
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param bool $isBaseCurrency
     * @return Currency
     */
    public function setIsBaseCurrency(bool $isBaseCurrency): Currency
    {
        $this->isBaseCurrency = $isBaseCurrency;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBaseCurrency(): bool
    {
        return $this->isBaseCurrency;
    }

    /**
     * @param bool $isInactive
     * @return Currency
     */
    public function setIsInactive(bool $isInactive): Currency
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param bool $overrideCurrencyFormat
     * @return Currency
     */
    public function setOverrideCurrencyFormat(bool $overrideCurrencyFormat): Currency
    {
        $this->overrideCurrencyFormat = $overrideCurrencyFormat;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverrideCurrencyFormat(): bool
    {
        return $this->overrideCurrencyFormat;
    }

    /**
     * @param string $displaySymbol
     * @return Currency
     */
    public function setDisplaySymbol(string $displaySymbol): Currency
    {
        $this->displaySymbol = $displaySymbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplaySymbol(): string
    {
        return $this->displaySymbol;
    }

    /**
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return Currency
     */
    public function setSymbolPlacement(CurrencySymbolPlacement $symbolPlacement): Currency
    {
        $this->symbolPlacement = $symbolPlacement;
        return $this;
    }

    /**
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement(): CurrencySymbolPlacement
    {
        return $this->symbolPlacement;
    }

    /**
     * @param CurrencyLocale $locale
     * @return Currency
     */
    public function setLocale(CurrencyLocale $locale): Currency
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return CurrencyLocale
     */
    public function getLocale(): CurrencyLocale
    {
        return $this->locale;
    }

    /**
     * @param string $formatSample
     * @return Currency
     */
    public function setFormatSample(string $formatSample): Currency
    {
        $this->formatSample = $formatSample;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormatSample(): string
    {
        return $this->formatSample;
    }

    /**
     * @param float $exchangeRate
     * @return Currency
     */
    public function setExchangeRate(float $exchangeRate): Currency
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
     * @param CurrencyFxRateUpdateTimezone $fxRateUpdateTimezone
     * @return Currency
     */
    public function setFxRateUpdateTimezone(CurrencyFxRateUpdateTimezone $fxRateUpdateTimezone): Currency
    {
        $this->fxRateUpdateTimezone = $fxRateUpdateTimezone;
        return $this;
    }

    /**
     * @return CurrencyFxRateUpdateTimezone
     */
    public function getFxRateUpdateTimezone(): CurrencyFxRateUpdateTimezone
    {
        return $this->fxRateUpdateTimezone;
    }

    /**
     * @param bool $inclInFxRateUpdates
     * @return Currency
     */
    public function setInclInFxRateUpdates(bool $inclInFxRateUpdates): Currency
    {
        $this->inclInFxRateUpdates = $inclInFxRateUpdates;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInclInFxRateUpdates(): bool
    {
        return $this->inclInFxRateUpdates;
    }

    /**
     * @param CurrencyCurrencyPrecision $currencyPrecision
     * @return Currency
     */
    public function setCurrencyPrecision(CurrencyCurrencyPrecision $currencyPrecision): Currency
    {
        $this->currencyPrecision = $currencyPrecision;
        return $this;
    }

    /**
     * @return CurrencyCurrencyPrecision
     */
    public function getCurrencyPrecision(): CurrencyCurrencyPrecision
    {
        return $this->currencyPrecision;
    }

    /**
     * @param string $internalId
     * @return Currency
     */
    public function setInternalId(string $internalId): Currency
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

    /**
     * @param string $externalId
     * @return Currency
     */
    public function setExternalId(string $externalId): Currency
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
