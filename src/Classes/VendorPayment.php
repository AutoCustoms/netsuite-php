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

class VendorPayment extends Record {
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
    protected RecordRef $apAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $voidJournal;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var bool
     */
    protected bool $toAch;

    /**
     * @var bool
     */
    protected bool $toBePrinted;

    /**
     * @var bool
     */
    protected bool $printVoucher;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var string
     */
    protected string $transactionNumber;

    /**
     * @var VendorPaymentApplyList
     */
    protected VendorPaymentApplyList $applyList;

    /**
     * @var VendorPaymentCreditList
     */
    protected VendorPaymentCreditList $creditList;

    /**
     * @var bool
     */
    protected bool $billPay;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var float
     */
    protected float $availableBalance;

    /**
     * @var bool
     */
    protected bool $isInTransitPayment;

    /**
     * @var RecordRef
     */
    protected RecordRef $approvalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $nextApprover;

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
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "balance" => "float",
        "apAcct" => "RecordRef",
        "entity" => "RecordRef",
        "tranDate" => "dateTime",
        "voidJournal" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "toAch" => "boolean",
        "toBePrinted" => "boolean",
        "printVoucher" => "boolean",
        "tranId" => "string",
        "total" => "float",
        "currency" => "RecordRef",
        "department" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "status" => "string",
        "transactionNumber" => "string",
        "applyList" => "VendorPaymentApplyList",
        "creditList" => "VendorPaymentCreditList",
        "billPay" => "boolean",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "availableBalance" => "float",
        "isInTransitPayment" => "boolean",
        "approvalStatus" => "RecordRef",
        "nextApprover" => "RecordRef",
        "payeeAddressList" => "RecordRef",
        "payeeAddress" => "Address",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return VendorPayment
     */
    public function setCreatedDate(string $createdDate): VendorPayment
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
     * @return VendorPayment
     */
    public function setLastModifiedDate(string $lastModifiedDate): VendorPayment
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
     * @return VendorPayment
     */
    public function setCustomForm(RecordRef $customForm): VendorPayment
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
     * @return VendorPayment
     */
    public function setAccount(RecordRef $account): VendorPayment
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
     * @return VendorPayment
     */
    public function setBalance(float $balance): VendorPayment
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
     * @param RecordRef $apAcct
     * @return VendorPayment
     */
    public function setApAcct(RecordRef $apAcct): VendorPayment
    {
        $this->apAcct = $apAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApAcct(): RecordRef
    {
        return $this->apAcct;
    }

    /**
     * @param RecordRef $entity
     * @return VendorPayment
     */
    public function setEntity(RecordRef $entity): VendorPayment
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
     * @param string $tranDate
     * @return VendorPayment
     */
    public function setTranDate(string $tranDate): VendorPayment
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
     * @param RecordRef $voidJournal
     * @return VendorPayment
     */
    public function setVoidJournal(RecordRef $voidJournal): VendorPayment
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
     * @param RecordRef $postingPeriod
     * @return VendorPayment
     */
    public function setPostingPeriod(RecordRef $postingPeriod): VendorPayment
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
     * @param string $currencyName
     * @return VendorPayment
     */
    public function setCurrencyName(string $currencyName): VendorPayment
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
     * @param float $exchangeRate
     * @return VendorPayment
     */
    public function setExchangeRate(float $exchangeRate): VendorPayment
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
     * @param bool $toAch
     * @return VendorPayment
     */
    public function setToAch(bool $toAch): VendorPayment
    {
        $this->toAch = $toAch;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToAch(): bool
    {
        return $this->toAch;
    }

    /**
     * @param bool $toBePrinted
     * @return VendorPayment
     */
    public function setToBePrinted(bool $toBePrinted): VendorPayment
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
     * @param bool $printVoucher
     * @return VendorPayment
     */
    public function setPrintVoucher(bool $printVoucher): VendorPayment
    {
        $this->printVoucher = $printVoucher;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrintVoucher(): bool
    {
        return $this->printVoucher;
    }

    /**
     * @param string $tranId
     * @return VendorPayment
     */
    public function setTranId(string $tranId): VendorPayment
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
     * @param float $total
     * @return VendorPayment
     */
    public function setTotal(float $total): VendorPayment
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
     * @param RecordRef $currency
     * @return VendorPayment
     */
    public function setCurrency(RecordRef $currency): VendorPayment
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
     * @param RecordRef $department
     * @return VendorPayment
     */
    public function setDepartment(RecordRef $department): VendorPayment
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
     * @param string $memo
     * @return VendorPayment
     */
    public function setMemo(string $memo): VendorPayment
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
     * @param RecordRef $subsidiary
     * @return VendorPayment
     */
    public function setSubsidiary(RecordRef $subsidiary): VendorPayment
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
     * @param RecordRef $class
     * @return VendorPayment
     */
    public function setClass(RecordRef $class): VendorPayment
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
     * @return VendorPayment
     */
    public function setLocation(RecordRef $location): VendorPayment
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
     * @param string $status
     * @return VendorPayment
     */
    public function setStatus(string $status): VendorPayment
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
     * @param string $transactionNumber
     * @return VendorPayment
     */
    public function setTransactionNumber(string $transactionNumber): VendorPayment
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
     * @param VendorPaymentApplyList $applyList
     * @return VendorPayment
     */
    public function setApplyList(VendorPaymentApplyList $applyList): VendorPayment
    {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * @return VendorPaymentApplyList
     */
    public function getApplyList(): VendorPaymentApplyList
    {
        return $this->applyList;
    }

    /**
     * @param VendorPaymentCreditList $creditList
     * @return VendorPayment
     */
    public function setCreditList(VendorPaymentCreditList $creditList): VendorPayment
    {
        $this->creditList = $creditList;
        return $this;
    }

    /**
     * @return VendorPaymentCreditList
     */
    public function getCreditList(): VendorPaymentCreditList
    {
        return $this->creditList;
    }

    /**
     * @param bool $billPay
     * @return VendorPayment
     */
    public function setBillPay(bool $billPay): VendorPayment
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
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return VendorPayment
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): VendorPayment
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
     * @param float $availableBalance
     * @return VendorPayment
     */
    public function setAvailableBalance(float $availableBalance): VendorPayment
    {
        $this->availableBalance = $availableBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvailableBalance(): float
    {
        return $this->availableBalance;
    }

    /**
     * @param bool $isInTransitPayment
     * @return VendorPayment
     */
    public function setIsInTransitPayment(bool $isInTransitPayment): VendorPayment
    {
        $this->isInTransitPayment = $isInTransitPayment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInTransitPayment(): bool
    {
        return $this->isInTransitPayment;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return VendorPayment
     */
    public function setApprovalStatus(RecordRef $approvalStatus): VendorPayment
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprovalStatus(): RecordRef
    {
        return $this->approvalStatus;
    }

    /**
     * @param RecordRef $nextApprover
     * @return VendorPayment
     */
    public function setNextApprover(RecordRef $nextApprover): VendorPayment
    {
        $this->nextApprover = $nextApprover;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNextApprover(): RecordRef
    {
        return $this->nextApprover;
    }

    /**
     * @param RecordRef $payeeAddressList
     * @return VendorPayment
     */
    public function setPayeeAddressList(RecordRef $payeeAddressList): VendorPayment
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
     * @return VendorPayment
     */
    public function setPayeeAddress(Address $payeeAddress): VendorPayment
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
     * @return VendorPayment
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorPayment
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
     * @return VendorPayment
     */
    public function setInternalId(string $internalId): VendorPayment
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
     * @return VendorPayment
     */
    public function setExternalId(string $externalId): VendorPayment
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
