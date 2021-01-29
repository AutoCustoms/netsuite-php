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

class ConsolidatedExchangeRate extends Record {
    /**
     * @var string
     */
    protected string $postingPeriod;

    /**
     * @var string
     */
    protected string $fromSubsidiary;

    /**
     * @var string
     */
    protected string $fromCurrency;

    /**
     * @var string
     */
    protected string $toSubsidiary;

    /**
     * @var string
     */
    protected string $toCurrency;

    /**
     * @var float
     */
    protected float $averageRate;

    /**
     * @var float
     */
    protected float $currentRate;

    /**
     * @var float
     */
    protected float $historicalRate;

    /**
     * @var string
     */
    protected string $accountingBook;

    /**
     * @var bool
     */
    protected bool $isPeriodClosed;

    /**
     * @var bool
     */
    protected bool $isDerived;

    /**
     * @var bool
     */
    protected bool $isEliminationSubsidiary;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "postingPeriod" => "string",
        "fromSubsidiary" => "string",
        "fromCurrency" => "string",
        "toSubsidiary" => "string",
        "toCurrency" => "string",
        "averageRate" => "float",
        "currentRate" => "float",
        "historicalRate" => "float",
        "accountingBook" => "string",
        "isPeriodClosed" => "boolean",
        "isDerived" => "boolean",
        "isEliminationSubsidiary" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $postingPeriod
     * @return ConsolidatedExchangeRate
     */
    public function setPostingPeriod(string $postingPeriod): ConsolidatedExchangeRate
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostingPeriod(): string
    {
        return $this->postingPeriod;
    }

    /**
     * @param string $fromSubsidiary
     * @return ConsolidatedExchangeRate
     */
    public function setFromSubsidiary(string $fromSubsidiary): ConsolidatedExchangeRate
    {
        $this->fromSubsidiary = $fromSubsidiary;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromSubsidiary(): string
    {
        return $this->fromSubsidiary;
    }

    /**
     * @param string $fromCurrency
     * @return ConsolidatedExchangeRate
     */
    public function setFromCurrency(string $fromCurrency): ConsolidatedExchangeRate
    {
        $this->fromCurrency = $fromCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromCurrency(): string
    {
        return $this->fromCurrency;
    }

    /**
     * @param string $toSubsidiary
     * @return ConsolidatedExchangeRate
     */
    public function setToSubsidiary(string $toSubsidiary): ConsolidatedExchangeRate
    {
        $this->toSubsidiary = $toSubsidiary;
        return $this;
    }

    /**
     * @return string
     */
    public function getToSubsidiary(): string
    {
        return $this->toSubsidiary;
    }

    /**
     * @param string $toCurrency
     * @return ConsolidatedExchangeRate
     */
    public function setToCurrency(string $toCurrency): ConsolidatedExchangeRate
    {
        $this->toCurrency = $toCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getToCurrency(): string
    {
        return $this->toCurrency;
    }

    /**
     * @param float $averageRate
     * @return ConsolidatedExchangeRate
     */
    public function setAverageRate(float $averageRate): ConsolidatedExchangeRate
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
     * @param float $currentRate
     * @return ConsolidatedExchangeRate
     */
    public function setCurrentRate(float $currentRate): ConsolidatedExchangeRate
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
     * @param float $historicalRate
     * @return ConsolidatedExchangeRate
     */
    public function setHistoricalRate(float $historicalRate): ConsolidatedExchangeRate
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

    /**
     * @param string $accountingBook
     * @return ConsolidatedExchangeRate
     */
    public function setAccountingBook(string $accountingBook): ConsolidatedExchangeRate
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountingBook(): string
    {
        return $this->accountingBook;
    }

    /**
     * @param bool $isPeriodClosed
     * @return ConsolidatedExchangeRate
     */
    public function setIsPeriodClosed(bool $isPeriodClosed): ConsolidatedExchangeRate
    {
        $this->isPeriodClosed = $isPeriodClosed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPeriodClosed(): bool
    {
        return $this->isPeriodClosed;
    }

    /**
     * @param bool $isDerived
     * @return ConsolidatedExchangeRate
     */
    public function setIsDerived(bool $isDerived): ConsolidatedExchangeRate
    {
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDerived(): bool
    {
        return $this->isDerived;
    }

    /**
     * @param bool $isEliminationSubsidiary
     * @return ConsolidatedExchangeRate
     */
    public function setIsEliminationSubsidiary(bool $isEliminationSubsidiary): ConsolidatedExchangeRate
    {
        $this->isEliminationSubsidiary = $isEliminationSubsidiary;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEliminationSubsidiary(): bool
    {
        return $this->isEliminationSubsidiary;
    }

    /**
     * @param string $internalId
     * @return ConsolidatedExchangeRate
     */
    public function setInternalId(string $internalId): ConsolidatedExchangeRate
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
     * @return ConsolidatedExchangeRate
     */
    public function setExternalId(string $externalId): ConsolidatedExchangeRate
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
