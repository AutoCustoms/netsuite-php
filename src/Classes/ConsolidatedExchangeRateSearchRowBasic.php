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

class ConsolidatedExchangeRateSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $accountingBook;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $averageRate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $closed;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $currentRate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fromCurrency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fromSubsidiary;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $historicalRate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $periodEndDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $periodName;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $periodStartDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $toCurrency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $toSubsidiary;

    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnStringField[]",
        "averageRate" => "SearchColumnStringField[]",
        "closed" => "SearchColumnBooleanField[]",
        "currentRate" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fromCurrency" => "SearchColumnStringField[]",
        "fromSubsidiary" => "SearchColumnStringField[]",
        "historicalRate" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "periodEndDate" => "SearchColumnDateField[]",
        "periodName" => "SearchColumnStringField[]",
        "periodStartDate" => "SearchColumnDateField[]",
        "toCurrency" => "SearchColumnStringField[]",
        "toSubsidiary" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnStringField[] $accountingBook
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setAccountingBook(SearchColumnStringField $accountingBook): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->accountingBook[] = $accountingBook;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountingBook(): array
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchColumnStringField[] $averageRate
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setAverageRate(SearchColumnStringField $averageRate): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->averageRate[] = $averageRate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAverageRate(): array
    {
        return $this->averageRate;
    }

    /**
     * @param SearchColumnBooleanField[] $closed
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setClosed(SearchColumnBooleanField $closed): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->closed[] = $closed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getClosed(): array
    {
        return $this->closed;
    }

    /**
     * @param SearchColumnStringField[] $currentRate
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setCurrentRate(SearchColumnStringField $currentRate): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->currentRate[] = $currentRate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCurrentRate(): array
    {
        return $this->currentRate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnStringField[] $fromCurrency
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setFromCurrency(SearchColumnStringField $fromCurrency): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->fromCurrency[] = $fromCurrency;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFromCurrency(): array
    {
        return $this->fromCurrency;
    }

    /**
     * @param SearchColumnStringField[] $fromSubsidiary
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setFromSubsidiary(SearchColumnStringField $fromSubsidiary): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->fromSubsidiary[] = $fromSubsidiary;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFromSubsidiary(): array
    {
        return $this->fromSubsidiary;
    }

    /**
     * @param SearchColumnStringField[] $historicalRate
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setHistoricalRate(SearchColumnStringField $historicalRate): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->historicalRate[] = $historicalRate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHistoricalRate(): array
    {
        return $this->historicalRate;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnDateField[] $periodEndDate
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setPeriodEndDate(SearchColumnDateField $periodEndDate): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->periodEndDate[] = $periodEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPeriodEndDate(): array
    {
        return $this->periodEndDate;
    }

    /**
     * @param SearchColumnStringField[] $periodName
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setPeriodName(SearchColumnStringField $periodName): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->periodName[] = $periodName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriodName(): array
    {
        return $this->periodName;
    }

    /**
     * @param SearchColumnDateField[] $periodStartDate
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setPeriodStartDate(SearchColumnDateField $periodStartDate): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->periodStartDate[] = $periodStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPeriodStartDate(): array
    {
        return $this->periodStartDate;
    }

    /**
     * @param SearchColumnStringField[] $toCurrency
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setToCurrency(SearchColumnStringField $toCurrency): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->toCurrency[] = $toCurrency;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getToCurrency(): array
    {
        return $this->toCurrency;
    }

    /**
     * @param SearchColumnStringField[] $toSubsidiary
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function setToSubsidiary(SearchColumnStringField $toSubsidiary): ConsolidatedExchangeRateSearchRowBasic
    {
        $this->toSubsidiary[] = $toSubsidiary;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getToSubsidiary(): array
    {
        return $this->toSubsidiary;
    }

}
