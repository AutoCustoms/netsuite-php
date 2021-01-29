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

class ConsolidatedExchangeRateSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBook;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $fromSubsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isDerivedRate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $period;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $periodStartDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $toSubsidiary;

    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fromSubsidiary" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDerivedRate" => "SearchBooleanField",
        "period" => "SearchMultiSelectField",
        "periodStartDate" => "SearchDateField",
        "toSubsidiary" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): ConsolidatedExchangeRateSearchBasic
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook(): SearchMultiSelectField
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ConsolidatedExchangeRateSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ConsolidatedExchangeRateSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $fromSubsidiary
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setFromSubsidiary(SearchMultiSelectField $fromSubsidiary): ConsolidatedExchangeRateSearchBasic
    {
        $this->fromSubsidiary = $fromSubsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFromSubsidiary(): SearchMultiSelectField
    {
        return $this->fromSubsidiary;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ConsolidatedExchangeRateSearchBasic
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
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ConsolidatedExchangeRateSearchBasic
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
     * @param SearchBooleanField $isDerivedRate
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setIsDerivedRate(SearchBooleanField $isDerivedRate): ConsolidatedExchangeRateSearchBasic
    {
        $this->isDerivedRate = $isDerivedRate;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDerivedRate(): SearchBooleanField
    {
        return $this->isDerivedRate;
    }

    /**
     * @param SearchMultiSelectField $period
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setPeriod(SearchMultiSelectField $period): ConsolidatedExchangeRateSearchBasic
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPeriod(): SearchMultiSelectField
    {
        return $this->period;
    }

    /**
     * @param SearchDateField $periodStartDate
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setPeriodStartDate(SearchDateField $periodStartDate): ConsolidatedExchangeRateSearchBasic
    {
        $this->periodStartDate = $periodStartDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPeriodStartDate(): SearchDateField
    {
        return $this->periodStartDate;
    }

    /**
     * @param SearchMultiSelectField $toSubsidiary
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function setToSubsidiary(SearchMultiSelectField $toSubsidiary): ConsolidatedExchangeRateSearchBasic
    {
        $this->toSubsidiary = $toSubsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getToSubsidiary(): SearchMultiSelectField
    {
        return $this->toSubsidiary;
    }

}
