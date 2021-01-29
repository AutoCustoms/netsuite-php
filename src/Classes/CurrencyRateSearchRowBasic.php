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

class CurrencyRateSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $baseCurrency;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $effectiveDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $exchangeRate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $transactionCurrency;

    static $paramtypesmap = array(
        "baseCurrency" => "SearchColumnSelectField[]",
        "effectiveDate" => "SearchColumnDateField[]",
        "exchangeRate" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "transactionCurrency" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnSelectField[] $baseCurrency
     * @return CurrencyRateSearchRowBasic
     */
    public function setBaseCurrency(SearchColumnSelectField $baseCurrency): CurrencyRateSearchRowBasic
    {
        $this->baseCurrency[] = $baseCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBaseCurrency(): array
    {
        return $this->baseCurrency;
    }

    /**
     * @param SearchColumnDateField[] $effectiveDate
     * @return CurrencyRateSearchRowBasic
     */
    public function setEffectiveDate(SearchColumnDateField $effectiveDate): CurrencyRateSearchRowBasic
    {
        $this->effectiveDate[] = $effectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveDate(): array
    {
        return $this->effectiveDate;
    }

    /**
     * @param SearchColumnDoubleField[] $exchangeRate
     * @return CurrencyRateSearchRowBasic
     */
    public function setExchangeRate(SearchColumnDoubleField $exchangeRate): CurrencyRateSearchRowBasic
    {
        $this->exchangeRate[] = $exchangeRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExchangeRate(): array
    {
        return $this->exchangeRate;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return CurrencyRateSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CurrencyRateSearchRowBasic
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
     * @param SearchColumnSelectField[] $transactionCurrency
     * @return CurrencyRateSearchRowBasic
     */
    public function setTransactionCurrency(SearchColumnSelectField $transactionCurrency): CurrencyRateSearchRowBasic
    {
        $this->transactionCurrency[] = $transactionCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTransactionCurrency(): array
    {
        return $this->transactionCurrency;
    }

}
