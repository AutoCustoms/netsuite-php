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

class CurrencyRateSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $baseCurrency;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $effectiveDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $exchangeRate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $transactionCurrency;

    static $paramtypesmap = array(
        "baseCurrency" => "SearchMultiSelectField",
        "effectiveDate" => "SearchDateField",
        "exchangeRate" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "transactionCurrency" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $baseCurrency
     * @return CurrencyRateSearchBasic
     */
    public function setBaseCurrency(SearchMultiSelectField $baseCurrency): CurrencyRateSearchBasic
    {
        $this->baseCurrency = $baseCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBaseCurrency(): SearchMultiSelectField
    {
        return $this->baseCurrency;
    }

    /**
     * @param SearchDateField $effectiveDate
     * @return CurrencyRateSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate): CurrencyRateSearchBasic
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveDate(): SearchDateField
    {
        return $this->effectiveDate;
    }

    /**
     * @param SearchDoubleField $exchangeRate
     * @return CurrencyRateSearchBasic
     */
    public function setExchangeRate(SearchDoubleField $exchangeRate): CurrencyRateSearchBasic
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExchangeRate(): SearchDoubleField
    {
        return $this->exchangeRate;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return CurrencyRateSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CurrencyRateSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return CurrencyRateSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CurrencyRateSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchMultiSelectField $transactionCurrency
     * @return CurrencyRateSearchBasic
     */
    public function setTransactionCurrency(SearchMultiSelectField $transactionCurrency): CurrencyRateSearchBasic
    {
        $this->transactionCurrency = $transactionCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTransactionCurrency(): SearchMultiSelectField
    {
        return $this->transactionCurrency;
    }

}
