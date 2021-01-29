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

class Check extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $voidJournal;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var bool
     */
    protected bool $toBePrinted;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var float
     */
    protected float $taxTotal;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    protected $tax2Total;
    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var float
     */
    protected float $userTotal;

    /**
     * @var LandedCostMethod
     */
    protected LandedCostMethod $landedCostMethod;

    /**
     * @var bool
     */
    protected bool $landedCostPerLine;

    /**
     * @var string
     */
    protected string $transactionNumber;

    /**
     * @var CheckExpenseList
     */
    protected CheckExpenseList $expenseList;

    /**
     * @var CheckItemList
     */
    protected CheckItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CheckLandedCostList
     */
    protected CheckLandedCostList $landedCostsList;

    /**
     * @var bool
     */
    protected bool $billPay;

    /**
     * @var RecordRef
     */
    protected RecordRef $payeeAddressList;

    /**
     * @var Address
     */
    protected Address $payeeAddress;

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
        "status" => "string",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "balance" => "float",
        "entity" => "RecordRef",
        "subsidiary" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "currency" => "RecordRef",
        "voidJournal" => "RecordRef",
        "exchangeRate" => "float",
        "toBePrinted" => "boolean",
        "tranId" => "string",
        "memo" => "string",
        "department" => "RecordRef",
        "taxTotal" => "float",
        "class" => "RecordRef",
        "tax2Total" => "float",
        "location" => "RecordRef",
        "userTotal" => "float",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "transactionNumber" => "string",
        "expenseList" => "CheckExpenseList",
        "itemList" => "CheckItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "landedCostsList" => "CheckLandedCostList",
        "billPay" => "boolean",
        "payeeAddressList" => "RecordRef",
        "payeeAddress" => "Address",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return Check
     */
    public function setCreatedDate(string $createdDate): Check
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
     * @return Check
     */
    public function setLastModifiedDate(string $lastModifiedDate): Check
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
     * @param string $status
     * @return Check
     */
    public function setStatus(string $status): Check
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param RecordRef $customForm
     * @return Check
     */
    public function setCustomForm(RecordRef $customForm): Check
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
     * @param RecordRef $account
     * @return Check
     */
    public function setAccount(RecordRef $account): Check
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
     * @param float $balance
     * @return Check
     */
    public function setBalance(float $balance): Check
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param RecordRef $entity
     * @return Check
     */
    public function setEntity(RecordRef $entity): Check
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param RecordRef $subsidiary
     * @return Check
     */
    public function setSubsidiary(RecordRef $subsidiary): Check
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
     * @param RecordRef $postingPeriod
     * @return Check
     */
    public function setPostingPeriod(RecordRef $postingPeriod): Check
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
     * @param string $tranDate
     * @return Check
     */
    public function setTranDate(string $tranDate): Check
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
     * @param RecordRef $currency
     * @return Check
     */
    public function setCurrency(RecordRef $currency): Check
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
     * @param RecordRef $voidJournal
     * @return Check
     */
    public function setVoidJournal(RecordRef $voidJournal): Check
    {
        $this->voidJournal = $voidJournal;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVoidJournal(): RecordRef
    {
        return $this->voidJournal;
    }

    /**
     * @param float $exchangeRate
     * @return Check
     */
    public function setExchangeRate(float $exchangeRate): Check
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
     * @param bool $toBePrinted
     * @return Check
     */
    public function setToBePrinted(bool $toBePrinted): Check
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
     * @param string $tranId
     * @return Check
     */
    public function setTranId(string $tranId): Check
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
     * @param string $memo
     * @return Check
     */
    public function setMemo(string $memo): Check
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
     * @param RecordRef $department
     * @return Check
     */
    public function setDepartment(RecordRef $department): Check
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
     * @param float $taxTotal
     * @return Check
     */
    public function setTaxTotal(float $taxTotal): Check
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxTotal(): float
    {
        return $this->taxTotal;
    }

    /**
     * @param RecordRef $class
     * @return Check
     */
    public function setClass(RecordRef $class): Check
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
     * @return Check
     */
    public function setLocation(RecordRef $location): Check
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
     * @param float $userTotal
     * @return Check
     */
    public function setUserTotal(float $userTotal): Check
    {
        $this->userTotal = $userTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getUserTotal(): float
    {
        return $this->userTotal;
    }

    /**
     * @param LandedCostMethod $landedCostMethod
     * @return Check
     */
    public function setLandedCostMethod(LandedCostMethod $landedCostMethod): Check
    {
        $this->landedCostMethod = $landedCostMethod;
        return $this;
    }

    /**
     * @return LandedCostMethod
     */
    public function getLandedCostMethod(): LandedCostMethod
    {
        return $this->landedCostMethod;
    }

    /**
     * @param bool $landedCostPerLine
     * @return Check
     */
    public function setLandedCostPerLine(bool $landedCostPerLine): Check
    {
        $this->landedCostPerLine = $landedCostPerLine;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLandedCostPerLine(): bool
    {
        return $this->landedCostPerLine;
    }

    /**
     * @param string $transactionNumber
     * @return Check
     */
    public function setTransactionNumber(string $transactionNumber): Check
    {
        $this->transactionNumber = $transactionNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber(): string
    {
        return $this->transactionNumber;
    }

    /**
     * @param CheckExpenseList $expenseList
     * @return Check
     */
    public function setExpenseList(CheckExpenseList $expenseList): Check
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return CheckExpenseList
     */
    public function getExpenseList(): CheckExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param CheckItemList $itemList
     * @return Check
     */
    public function setItemList(CheckItemList $itemList): Check
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return CheckItemList
     */
    public function getItemList(): CheckItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return Check
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): Check
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
     * @param CheckLandedCostList $landedCostsList
     * @return Check
     */
    public function setLandedCostsList(CheckLandedCostList $landedCostsList): Check
    {
        $this->landedCostsList = $landedCostsList;
        return $this;
    }

    /**
     * @return CheckLandedCostList
     */
    public function getLandedCostsList(): CheckLandedCostList
    {
        return $this->landedCostsList;
    }

    /**
     * @param bool $billPay
     * @return Check
     */
    public function setBillPay(bool $billPay): Check
    {
        $this->billPay = $billPay;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBillPay(): bool
    {
        return $this->billPay;
    }

    /**
     * @param RecordRef $payeeAddressList
     * @return Check
     */
    public function setPayeeAddressList(RecordRef $payeeAddressList): Check
    {
        $this->payeeAddressList = $payeeAddressList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayeeAddressList(): RecordRef
    {
        return $this->payeeAddressList;
    }

    /**
     * @param Address $payeeAddress
     * @return Check
     */
    public function setPayeeAddress(Address $payeeAddress): Check
    {
        $this->payeeAddress = $payeeAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPayeeAddress(): Address
    {
        return $this->payeeAddress;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Check
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Check
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
     * @return Check
     */
    public function setInternalId(string $internalId): Check
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
     * @return Check
     */
    public function setExternalId(string $externalId): Check
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
