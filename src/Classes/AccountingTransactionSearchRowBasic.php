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

class AccountingTransactionSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $account;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBook;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $accountType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $altSalesAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $altSalesNetAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $baseCurrency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $catchUpPeriod;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $creditAmount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $customGL;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $debitAmount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $deferRevRec;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $exchangeRate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $grossAmount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $multiSubsidiary;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $netAmount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $posting;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityRevCommitted;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recognizedRevenue;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $revCommitStatus;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $revenueStatus;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $revRecEndDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $revRecOnRevCommitment;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $revRecStartDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $tranIsVsoeBundle;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $vsoeAllocation;

    static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "accountingBook" => "SearchColumnSelectField[]",
        "accountType" => "SearchColumnStringField[]",
        "altSalesAmount" => "SearchColumnDoubleField[]",
        "altSalesNetAmount" => "SearchColumnDoubleField[]",
        "amount" => "SearchColumnDoubleField[]",
        "baseCurrency" => "SearchColumnStringField[]",
        "catchUpPeriod" => "SearchColumnStringField[]",
        "creditAmount" => "SearchColumnDoubleField[]",
        "customGL" => "SearchColumnBooleanField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "debitAmount" => "SearchColumnDoubleField[]",
        "deferRevRec" => "SearchColumnBooleanField[]",
        "exchangeRate" => "SearchColumnDoubleField[]",
        "fxAmount" => "SearchColumnDoubleField[]",
        "grossAmount" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "multiSubsidiary" => "SearchColumnBooleanField[]",
        "netAmount" => "SearchColumnDoubleField[]",
        "posting" => "SearchColumnBooleanField[]",
        "quantityRevCommitted" => "SearchColumnDoubleField[]",
        "recognizedRevenue" => "SearchColumnDoubleField[]",
        "revCommitStatus" => "SearchColumnEnumSelectField[]",
        "revenueStatus" => "SearchColumnEnumSelectField[]",
        "revRecEndDate" => "SearchColumnDateField[]",
        "revRecOnRevCommitment" => "SearchColumnBooleanField[]",
        "revRecStartDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "tranIsVsoeBundle" => "SearchColumnBooleanField[]",
        "vsoeAllocation" => "SearchColumnDoubleField[]",
    );

    /**
     * @param SearchColumnSelectField[] $account
     * @return AccountingTransactionSearchRowBasic
     */
    public function setAccount(SearchColumnSelectField $account): AccountingTransactionSearchRowBasic
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount(): array
    {
        return $this->account;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return AccountingTransactionSearchRowBasic
     */
    public function setAccountingBook(SearchColumnSelectField $accountingBook): AccountingTransactionSearchRowBasic
    {
        $this->accountingBook[] = $accountingBook;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook(): array
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchColumnStringField[] $accountType
     * @return AccountingTransactionSearchRowBasic
     */
    public function setAccountType(SearchColumnStringField $accountType): AccountingTransactionSearchRowBasic
    {
        $this->accountType[] = $accountType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountType(): array
    {
        return $this->accountType;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesAmount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setAltSalesAmount(SearchColumnDoubleField $altSalesAmount): AccountingTransactionSearchRowBasic
    {
        $this->altSalesAmount[] = $altSalesAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesAmount(): array
    {
        return $this->altSalesAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesNetAmount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setAltSalesNetAmount(SearchColumnDoubleField $altSalesNetAmount): AccountingTransactionSearchRowBasic
    {
        $this->altSalesNetAmount[] = $altSalesNetAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesNetAmount(): array
    {
        return $this->altSalesNetAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setAmount(SearchColumnDoubleField $amount): AccountingTransactionSearchRowBasic
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param SearchColumnStringField[] $baseCurrency
     * @return AccountingTransactionSearchRowBasic
     */
    public function setBaseCurrency(SearchColumnStringField $baseCurrency): AccountingTransactionSearchRowBasic
    {
        $this->baseCurrency[] = $baseCurrency;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBaseCurrency(): array
    {
        return $this->baseCurrency;
    }

    /**
     * @param SearchColumnStringField[] $catchUpPeriod
     * @return AccountingTransactionSearchRowBasic
     */
    public function setCatchUpPeriod(SearchColumnStringField $catchUpPeriod): AccountingTransactionSearchRowBasic
    {
        $this->catchUpPeriod[] = $catchUpPeriod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCatchUpPeriod(): array
    {
        return $this->catchUpPeriod;
    }

    /**
     * @param SearchColumnDoubleField[] $creditAmount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setCreditAmount(SearchColumnDoubleField $creditAmount): AccountingTransactionSearchRowBasic
    {
        $this->creditAmount[] = $creditAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCreditAmount(): array
    {
        return $this->creditAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $customGL
     * @return AccountingTransactionSearchRowBasic
     */
    public function setCustomGL(SearchColumnBooleanField $customGL): AccountingTransactionSearchRowBasic
    {
        $this->customGL[] = $customGL;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCustomGL(): array
    {
        return $this->customGL;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return AccountingTransactionSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): AccountingTransactionSearchRowBasic
    {
        $this->dateCreated[] = $dateCreated;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated(): array
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchColumnDoubleField[] $debitAmount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setDebitAmount(SearchColumnDoubleField $debitAmount): AccountingTransactionSearchRowBasic
    {
        $this->debitAmount[] = $debitAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDebitAmount(): array
    {
        return $this->debitAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $deferRevRec
     * @return AccountingTransactionSearchRowBasic
     */
    public function setDeferRevRec(SearchColumnBooleanField $deferRevRec): AccountingTransactionSearchRowBasic
    {
        $this->deferRevRec[] = $deferRevRec;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDeferRevRec(): array
    {
        return $this->deferRevRec;
    }

    /**
     * @param SearchColumnDoubleField[] $exchangeRate
     * @return AccountingTransactionSearchRowBasic
     */
    public function setExchangeRate(SearchColumnDoubleField $exchangeRate): AccountingTransactionSearchRowBasic
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
     * @param SearchColumnDoubleField[] $fxAmount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setFxAmount(SearchColumnDoubleField $fxAmount): AccountingTransactionSearchRowBasic
    {
        $this->fxAmount[] = $fxAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxAmount(): array
    {
        return $this->fxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $grossAmount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setGrossAmount(SearchColumnDoubleField $grossAmount): AccountingTransactionSearchRowBasic
    {
        $this->grossAmount[] = $grossAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossAmount(): array
    {
        return $this->grossAmount;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return AccountingTransactionSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): AccountingTransactionSearchRowBasic
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
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return AccountingTransactionSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): AccountingTransactionSearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnBooleanField[] $multiSubsidiary
     * @return AccountingTransactionSearchRowBasic
     */
    public function setMultiSubsidiary(SearchColumnBooleanField $multiSubsidiary): AccountingTransactionSearchRowBasic
    {
        $this->multiSubsidiary[] = $multiSubsidiary;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMultiSubsidiary(): array
    {
        return $this->multiSubsidiary;
    }

    /**
     * @param SearchColumnDoubleField[] $netAmount
     * @return AccountingTransactionSearchRowBasic
     */
    public function setNetAmount(SearchColumnDoubleField $netAmount): AccountingTransactionSearchRowBasic
    {
        $this->netAmount[] = $netAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNetAmount(): array
    {
        return $this->netAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $posting
     * @return AccountingTransactionSearchRowBasic
     */
    public function setPosting(SearchColumnBooleanField $posting): AccountingTransactionSearchRowBasic
    {
        $this->posting[] = $posting;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPosting(): array
    {
        return $this->posting;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityRevCommitted
     * @return AccountingTransactionSearchRowBasic
     */
    public function setQuantityRevCommitted(SearchColumnDoubleField $quantityRevCommitted): AccountingTransactionSearchRowBasic
    {
        $this->quantityRevCommitted[] = $quantityRevCommitted;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityRevCommitted(): array
    {
        return $this->quantityRevCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $recognizedRevenue
     * @return AccountingTransactionSearchRowBasic
     */
    public function setRecognizedRevenue(SearchColumnDoubleField $recognizedRevenue): AccountingTransactionSearchRowBasic
    {
        $this->recognizedRevenue[] = $recognizedRevenue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecognizedRevenue(): array
    {
        return $this->recognizedRevenue;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revCommitStatus
     * @return AccountingTransactionSearchRowBasic
     */
    public function setRevCommitStatus(SearchColumnEnumSelectField $revCommitStatus): AccountingTransactionSearchRowBasic
    {
        $this->revCommitStatus[] = $revCommitStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevCommitStatus(): array
    {
        return $this->revCommitStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revenueStatus
     * @return AccountingTransactionSearchRowBasic
     */
    public function setRevenueStatus(SearchColumnEnumSelectField $revenueStatus): AccountingTransactionSearchRowBasic
    {
        $this->revenueStatus[] = $revenueStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevenueStatus(): array
    {
        return $this->revenueStatus;
    }

    /**
     * @param SearchColumnDateField[] $revRecEndDate
     * @return AccountingTransactionSearchRowBasic
     */
    public function setRevRecEndDate(SearchColumnDateField $revRecEndDate): AccountingTransactionSearchRowBasic
    {
        $this->revRecEndDate[] = $revRecEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecEndDate(): array
    {
        return $this->revRecEndDate;
    }

    /**
     * @param SearchColumnBooleanField[] $revRecOnRevCommitment
     * @return AccountingTransactionSearchRowBasic
     */
    public function setRevRecOnRevCommitment(SearchColumnBooleanField $revRecOnRevCommitment): AccountingTransactionSearchRowBasic
    {
        $this->revRecOnRevCommitment[] = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRevRecOnRevCommitment(): array
    {
        return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchColumnDateField[] $revRecStartDate
     * @return AccountingTransactionSearchRowBasic
     */
    public function setRevRecStartDate(SearchColumnDateField $revRecStartDate): AccountingTransactionSearchRowBasic
    {
        $this->revRecStartDate[] = $revRecStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecStartDate(): array
    {
        return $this->revRecStartDate;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return AccountingTransactionSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): AccountingTransactionSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnBooleanField[] $tranIsVsoeBundle
     * @return AccountingTransactionSearchRowBasic
     */
    public function setTranIsVsoeBundle(SearchColumnBooleanField $tranIsVsoeBundle): AccountingTransactionSearchRowBasic
    {
        $this->tranIsVsoeBundle[] = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTranIsVsoeBundle(): array
    {
        return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoeAllocation
     * @return AccountingTransactionSearchRowBasic
     */
    public function setVsoeAllocation(SearchColumnDoubleField $vsoeAllocation): AccountingTransactionSearchRowBasic
    {
        $this->vsoeAllocation[] = $vsoeAllocation;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoeAllocation(): array
    {
        return $this->vsoeAllocation;
    }

}
