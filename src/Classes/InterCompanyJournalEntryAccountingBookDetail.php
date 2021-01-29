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

class InterCompanyJournalEntryAccountingBookDetail {
    /**
     * @var RecordRef
     */
    protected RecordRef $accountingBook;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var float
     */
    protected float $exchangeRate;

    static $paramtypesmap = array(
        "accountingBook" => "RecordRef",
        "currency" => "RecordRef",
        "subsidiary" => "RecordRef",
        "exchangeRate" => "float",
    );

    /**
     * @param RecordRef $accountingBook
     * @return InterCompanyJournalEntryAccountingBookDetail
     */
    public function setAccountingBook(RecordRef $accountingBook): InterCompanyJournalEntryAccountingBookDetail
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook(): RecordRef
    {
        return $this->accountingBook;
    }

    /**
     * @param RecordRef $currency
     * @return InterCompanyJournalEntryAccountingBookDetail
     */
    public function setCurrency(RecordRef $currency): InterCompanyJournalEntryAccountingBookDetail
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param RecordRef $subsidiary
     * @return InterCompanyJournalEntryAccountingBookDetail
     */
    public function setSubsidiary(RecordRef $subsidiary): InterCompanyJournalEntryAccountingBookDetail
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param float $exchangeRate
     * @return InterCompanyJournalEntryAccountingBookDetail
     */
    public function setExchangeRate(float $exchangeRate): InterCompanyJournalEntryAccountingBookDetail
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

}
