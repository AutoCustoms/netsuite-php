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

class Deposit extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $toBePrinted;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var DepositPaymentList
     */
    protected DepositPaymentList $paymentList;

    /**
     * @var DepositOtherList
     */
    protected DepositOtherList $otherList;

    /**
     * @var DepositCashBackList
     */
    protected DepositCashBackList $cashBackList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "currencyName" => "string",
        "tranId" => "string",
        "account" => "RecordRef",
        "total" => "float",
        "exchangeRate" => "float",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "toBePrinted" => "boolean",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "paymentList" => "DepositPaymentList",
        "otherList" => "DepositOtherList",
        "cashBackList" => "DepositCashBackList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return Deposit
     */
    public function setCreatedDate(string $createdDate): Deposit
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return Deposit
     */
    public function setLastModifiedDate(string $lastModifiedDate): Deposit
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param RecordRef $customForm
     * @return Deposit
     */
    public function setCustomForm(RecordRef $customForm): Deposit
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param string $currencyName
     * @return Deposit
     */
    public function setCurrencyName(string $currencyName): Deposit
    {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }

    /**
     * @param string $tranId
     * @return Deposit
     */
    public function setTranId(string $tranId): Deposit
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranId(): string
    {
        return $this->tranId;
    }

    /**
     * @param RecordRef $account
     * @return Deposit
     */
    public function setAccount(RecordRef $account): Deposit
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount(): RecordRef
    {
        return $this->account;
    }

    /**
     * @param float $total
     * @return Deposit
     */
    public function setTotal(float $total): Deposit
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $exchangeRate
     * @return Deposit
     */
    public function setExchangeRate(float $exchangeRate): Deposit
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
     * @param string $tranDate
     * @return Deposit
     */
    public function setTranDate(string $tranDate): Deposit
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return Deposit
     */
    public function setPostingPeriod(RecordRef $postingPeriod): Deposit
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param string $memo
     * @return Deposit
     */
    public function setMemo(string $memo): Deposit
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param bool $toBePrinted
     * @return Deposit
     */
    public function setToBePrinted(bool $toBePrinted): Deposit
    {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToBePrinted(): bool
    {
        return $this->toBePrinted;
    }

    /**
     * @param RecordRef $subsidiary
     * @return Deposit
     */
    public function setSubsidiary(RecordRef $subsidiary): Deposit
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
     * @param RecordRef $department
     * @return Deposit
     */
    public function setDepartment(RecordRef $department): Deposit
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return Deposit
     */
    public function setClass(RecordRef $class): Deposit
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return Deposit
     */
    public function setLocation(RecordRef $location): Deposit
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param DepositPaymentList $paymentList
     * @return Deposit
     */
    public function setPaymentList(DepositPaymentList $paymentList): Deposit
    {
        $this->paymentList = $paymentList;
        return $this;
    }

    /**
     * @return DepositPaymentList
     */
    public function getPaymentList(): DepositPaymentList
    {
        return $this->paymentList;
    }

    /**
     * @param DepositOtherList $otherList
     * @return Deposit
     */
    public function setOtherList(DepositOtherList $otherList): Deposit
    {
        $this->otherList = $otherList;
        return $this;
    }

    /**
     * @return DepositOtherList
     */
    public function getOtherList(): DepositOtherList
    {
        return $this->otherList;
    }

    /**
     * @param DepositCashBackList $cashBackList
     * @return Deposit
     */
    public function setCashBackList(DepositCashBackList $cashBackList): Deposit
    {
        $this->cashBackList = $cashBackList;
        return $this;
    }

    /**
     * @return DepositCashBackList
     */
    public function getCashBackList(): DepositCashBackList
    {
        return $this->cashBackList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return Deposit
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): Deposit
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Deposit
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Deposit
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return Deposit
     */
    public function setInternalId(string $internalId): Deposit
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
     * @return Deposit
     */
    public function setExternalId(string $externalId): Deposit
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
