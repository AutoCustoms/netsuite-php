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

class AccountingTransactionSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBook;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $altSalesAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $altSalesNetAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $bookSpecificTransaction;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $catchUpPeriod;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $creditAmount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $customGL;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $debitAmount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $deferRevRec;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $exchangeRate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $grossAmount;

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
    protected SearchBooleanField $multiSubsidiary;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $netAmount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $posting;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityRevCommitted;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $recognizedRevenue;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $revCommitStatus;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $revenueStatus;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $revRecEndDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $revRecOnRevCommitment;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $revRecStartDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $tranIsVsoeBundle;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $vsoeAllocation;

    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "accountingBook" => "SearchMultiSelectField",
        "accountType" => "SearchMultiSelectField",
        "altSalesAmount" => "SearchDoubleField",
        "altSalesNetAmount" => "SearchDoubleField",
        "amount" => "SearchDoubleField",
        "bookSpecificTransaction" => "SearchBooleanField",
        "catchUpPeriod" => "SearchMultiSelectField",
        "creditAmount" => "SearchDoubleField",
        "customGL" => "SearchBooleanField",
        "debitAmount" => "SearchDoubleField",
        "deferRevRec" => "SearchBooleanField",
        "exchangeRate" => "SearchDoubleField",
        "grossAmount" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "multiSubsidiary" => "SearchBooleanField",
        "netAmount" => "SearchDoubleField",
        "posting" => "SearchBooleanField",
        "quantityRevCommitted" => "SearchDoubleField",
        "recognizedRevenue" => "SearchDoubleField",
        "revCommitStatus" => "SearchEnumMultiSelectField",
        "revenueStatus" => "SearchEnumMultiSelectField",
        "revRecEndDate" => "SearchDateField",
        "revRecOnRevCommitment" => "SearchBooleanField",
        "revRecStartDate" => "SearchDateField",
        "subsidiary" => "SearchMultiSelectField",
        "tranIsVsoeBundle" => "SearchBooleanField",
        "type" => "SearchEnumMultiSelectField",
        "vsoeAllocation" => "SearchDoubleField",
    );

    /**
     * @param SearchMultiSelectField $account
     * @return AccountingTransactionSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): AccountingTransactionSearchBasic
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount(): SearchMultiSelectField
    {
        return $this->account;
    }

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return AccountingTransactionSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): AccountingTransactionSearchBasic
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
     * @param SearchMultiSelectField $accountType
     * @return AccountingTransactionSearchBasic
     */
    public function setAccountType(SearchMultiSelectField $accountType): AccountingTransactionSearchBasic
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountType(): SearchMultiSelectField
    {
        return $this->accountType;
    }

    /**
     * @param SearchDoubleField $altSalesAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setAltSalesAmount(SearchDoubleField $altSalesAmount): AccountingTransactionSearchBasic
    {
        $this->altSalesAmount = $altSalesAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesAmount(): SearchDoubleField
    {
        return $this->altSalesAmount;
    }

    /**
     * @param SearchDoubleField $altSalesNetAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setAltSalesNetAmount(SearchDoubleField $altSalesNetAmount): AccountingTransactionSearchBasic
    {
        $this->altSalesNetAmount = $altSalesNetAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesNetAmount(): SearchDoubleField
    {
        return $this->altSalesNetAmount;
    }

    /**
     * @param SearchDoubleField $amount
     * @return AccountingTransactionSearchBasic
     */
    public function setAmount(SearchDoubleField $amount): AccountingTransactionSearchBasic
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount(): SearchDoubleField
    {
        return $this->amount;
    }

    /**
     * @param SearchBooleanField $bookSpecificTransaction
     * @return AccountingTransactionSearchBasic
     */
    public function setBookSpecificTransaction(SearchBooleanField $bookSpecificTransaction): AccountingTransactionSearchBasic
    {
        $this->bookSpecificTransaction = $bookSpecificTransaction;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBookSpecificTransaction(): SearchBooleanField
    {
        return $this->bookSpecificTransaction;
    }

    /**
     * @param SearchMultiSelectField $catchUpPeriod
     * @return AccountingTransactionSearchBasic
     */
    public function setCatchUpPeriod(SearchMultiSelectField $catchUpPeriod): AccountingTransactionSearchBasic
    {
        $this->catchUpPeriod = $catchUpPeriod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCatchUpPeriod(): SearchMultiSelectField
    {
        return $this->catchUpPeriod;
    }

    /**
     * @param SearchDoubleField $creditAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setCreditAmount(SearchDoubleField $creditAmount): AccountingTransactionSearchBasic
    {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCreditAmount(): SearchDoubleField
    {
        return $this->creditAmount;
    }

    /**
     * @param SearchBooleanField $customGL
     * @return AccountingTransactionSearchBasic
     */
    public function setCustomGL(SearchBooleanField $customGL): AccountingTransactionSearchBasic
    {
        $this->customGL = $customGL;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCustomGL(): SearchBooleanField
    {
        return $this->customGL;
    }

    /**
     * @param SearchDoubleField $debitAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setDebitAmount(SearchDoubleField $debitAmount): AccountingTransactionSearchBasic
    {
        $this->debitAmount = $debitAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDebitAmount(): SearchDoubleField
    {
        return $this->debitAmount;
    }

    /**
     * @param SearchBooleanField $deferRevRec
     * @return AccountingTransactionSearchBasic
     */
    public function setDeferRevRec(SearchBooleanField $deferRevRec): AccountingTransactionSearchBasic
    {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDeferRevRec(): SearchBooleanField
    {
        return $this->deferRevRec;
    }

    /**
     * @param SearchDoubleField $exchangeRate
     * @return AccountingTransactionSearchBasic
     */
    public function setExchangeRate(SearchDoubleField $exchangeRate): AccountingTransactionSearchBasic
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
     * @param SearchDoubleField $grossAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setGrossAmount(SearchDoubleField $grossAmount): AccountingTransactionSearchBasic
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossAmount(): SearchDoubleField
    {
        return $this->grossAmount;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return AccountingTransactionSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): AccountingTransactionSearchBasic
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
     * @return AccountingTransactionSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): AccountingTransactionSearchBasic
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
     * @param SearchBooleanField $multiSubsidiary
     * @return AccountingTransactionSearchBasic
     */
    public function setMultiSubsidiary(SearchBooleanField $multiSubsidiary): AccountingTransactionSearchBasic
    {
        $this->multiSubsidiary = $multiSubsidiary;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMultiSubsidiary(): SearchBooleanField
    {
        return $this->multiSubsidiary;
    }

    /**
     * @param SearchDoubleField $netAmount
     * @return AccountingTransactionSearchBasic
     */
    public function setNetAmount(SearchDoubleField $netAmount): AccountingTransactionSearchBasic
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNetAmount(): SearchDoubleField
    {
        return $this->netAmount;
    }

    /**
     * @param SearchBooleanField $posting
     * @return AccountingTransactionSearchBasic
     */
    public function setPosting(SearchBooleanField $posting): AccountingTransactionSearchBasic
    {
        $this->posting = $posting;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPosting(): SearchBooleanField
    {
        return $this->posting;
    }

    /**
     * @param SearchDoubleField $quantityRevCommitted
     * @return AccountingTransactionSearchBasic
     */
    public function setQuantityRevCommitted(SearchDoubleField $quantityRevCommitted): AccountingTransactionSearchBasic
    {
        $this->quantityRevCommitted = $quantityRevCommitted;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityRevCommitted(): SearchDoubleField
    {
        return $this->quantityRevCommitted;
    }

    /**
     * @param SearchDoubleField $recognizedRevenue
     * @return AccountingTransactionSearchBasic
     */
    public function setRecognizedRevenue(SearchDoubleField $recognizedRevenue): AccountingTransactionSearchBasic
    {
        $this->recognizedRevenue = $recognizedRevenue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecognizedRevenue(): SearchDoubleField
    {
        return $this->recognizedRevenue;
    }

    /**
     * @param SearchEnumMultiSelectField $revCommitStatus
     * @return AccountingTransactionSearchBasic
     */
    public function setRevCommitStatus(SearchEnumMultiSelectField $revCommitStatus): AccountingTransactionSearchBasic
    {
        $this->revCommitStatus = $revCommitStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevCommitStatus(): SearchEnumMultiSelectField
    {
        return $this->revCommitStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $revenueStatus
     * @return AccountingTransactionSearchBasic
     */
    public function setRevenueStatus(SearchEnumMultiSelectField $revenueStatus): AccountingTransactionSearchBasic
    {
        $this->revenueStatus = $revenueStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevenueStatus(): SearchEnumMultiSelectField
    {
        return $this->revenueStatus;
    }

    /**
     * @param SearchDateField $revRecEndDate
     * @return AccountingTransactionSearchBasic
     */
    public function setRevRecEndDate(SearchDateField $revRecEndDate): AccountingTransactionSearchBasic
    {
        $this->revRecEndDate = $revRecEndDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecEndDate(): SearchDateField
    {
        return $this->revRecEndDate;
    }

    /**
     * @param SearchBooleanField $revRecOnRevCommitment
     * @return AccountingTransactionSearchBasic
     */
    public function setRevRecOnRevCommitment(SearchBooleanField $revRecOnRevCommitment): AccountingTransactionSearchBasic
    {
        $this->revRecOnRevCommitment = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRevRecOnRevCommitment(): SearchBooleanField
    {
        return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchDateField $revRecStartDate
     * @return AccountingTransactionSearchBasic
     */
    public function setRevRecStartDate(SearchDateField $revRecStartDate): AccountingTransactionSearchBasic
    {
        $this->revRecStartDate = $revRecStartDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecStartDate(): SearchDateField
    {
        return $this->revRecStartDate;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return AccountingTransactionSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): AccountingTransactionSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchBooleanField $tranIsVsoeBundle
     * @return AccountingTransactionSearchBasic
     */
    public function setTranIsVsoeBundle(SearchBooleanField $tranIsVsoeBundle): AccountingTransactionSearchBasic
    {
        $this->tranIsVsoeBundle = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTranIsVsoeBundle(): SearchBooleanField
    {
        return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return AccountingTransactionSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): AccountingTransactionSearchBasic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType(): SearchEnumMultiSelectField
    {
        return $this->type;
    }

    /**
     * @param SearchDoubleField $vsoeAllocation
     * @return AccountingTransactionSearchBasic
     */
    public function setVsoeAllocation(SearchDoubleField $vsoeAllocation): AccountingTransactionSearchBasic
    {
        $this->vsoeAllocation = $vsoeAllocation;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoeAllocation(): SearchDoubleField
    {
        return $this->vsoeAllocation;
    }

}
