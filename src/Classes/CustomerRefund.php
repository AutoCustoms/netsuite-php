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

class CustomerRefund extends Record {
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
     * @var string
     */
    protected string $transactionNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var RecordRef
     */
    protected RecordRef $arAcct;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

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
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

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
    protected string $debitCardIssueNo;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCardProcessor;

    /**
     * @var bool
     */
    protected bool $chargeIt;

    /**
     * @var string
     */
    protected string $pnRefNum;

    /**
     * @var string
     */
    protected string $validFrom;

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
     * @var RecordRef
     */
    protected RecordRef $paymentOption;

    /**
     * @var string
     */
    protected string $inputAuthCode;

    /**
     * @var string
     */
    protected string $inputReferenceCode;

    /**
     * @var string
     */
    protected string $checkNumber;

    /**
     * @var string
     */
    protected string $paymentCardCsc;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentProcessingProfile;

    /**
     * @var CustomerRefundHandlingMode
     */
    protected CustomerRefundHandlingMode $handlingMode;

    /**
     * @var string
     */
    protected string $outputAuthCode;

    /**
     * @var string
     */
    protected string $outputReferenceCode;

    /**
     * @var CustomerRefundPaymentOperation
     */
    protected CustomerRefundPaymentOperation $paymentOperation;

    /**
     * @var string
     */
    protected string $dynamicDescriptor;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCard;

    /**
     * @var bool
     */
    protected bool $ccIsPurchaseCardBin;

    /**
     * @var string
     */
    protected string $ccNumber;

    /**
     * @var bool
     */
    protected bool $ccProcessAsPurchaseCard;

    /**
     * @var string
     */
    protected string $ccExpireDate;

    /**
     * @var string
     */
    protected string $ccName;

    /**
     * @var string
     */
    protected string $ccStreet;

    /**
     * @var string
     */
    protected string $ccZipCode;

    /**
     * @var bool
     */
    protected bool $ccApproved;

    /**
     * @var CustomerRefundApplyList
     */
    protected CustomerRefundApplyList $applyList;

    /**
     * @var CustomerRefundDepositList
     */
    protected CustomerRefundDepositList $depositList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

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
        "transactionNumber" => "string",
        "customer" => "RecordRef",
        "customForm" => "RecordRef",
        "balance" => "float",
        "arAcct" => "RecordRef",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "total" => "float",
        "currency" => "RecordRef",
        "tranDate" => "dateTime",
        "voidJournal" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "paymentMethod" => "RecordRef",
        "account" => "RecordRef",
        "toBePrinted" => "boolean",
        "tranId" => "string",
        "debitCardIssueNo" => "string",
        "creditCardProcessor" => "RecordRef",
        "chargeIt" => "boolean",
        "pnRefNum" => "string",
        "validFrom" => "dateTime",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "paymentOption" => "RecordRef",
        "inputAuthCode" => "string",
        "inputReferenceCode" => "string",
        "checkNumber" => "string",
        "paymentCardCsc" => "string",
        "paymentProcessingProfile" => "RecordRef",
        "handlingMode" => "CustomerRefundHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CustomerRefundPaymentOperation",
        "dynamicDescriptor" => "string",
        "creditCard" => "RecordRef",
        "ccIsPurchaseCardBin" => "boolean",
        "ccNumber" => "string",
        "ccProcessAsPurchaseCard" => "boolean",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "applyList" => "CustomerRefundApplyList",
        "depositList" => "CustomerRefundDepositList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "payeeAddressList" => "RecordRef",
        "payeeAddress" => "Address",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CustomerRefund
     */
    public function setCreatedDate(string $createdDate): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setLastModifiedDate(string $lastModifiedDate): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setStatus(string $status): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setTransactionNumber(string $transactionNumber): CustomerRefund
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
     * @param RecordRef $customer
     * @return CustomerRefund
     */
    public function setCustomer(RecordRef $customer): CustomerRefund
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer(): RecordRef
    {
        return $this->customer;
    }

    /**
     * @param RecordRef $customForm
     * @return CustomerRefund
     */
    public function setCustomForm(RecordRef $customForm): CustomerRefund
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
     * @param float $balance
     * @return CustomerRefund
     */
    public function setBalance(float $balance): CustomerRefund
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
     * @param RecordRef $arAcct
     * @return CustomerRefund
     */
    public function setArAcct(RecordRef $arAcct): CustomerRefund
    {
        $this->arAcct = $arAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getArAcct(): RecordRef
    {
        return $this->arAcct;
    }

    /**
     * @param string $currencyName
     * @return CustomerRefund
     */
    public function setCurrencyName(string $currencyName): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setExchangeRate(float $exchangeRate): CustomerRefund
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
     * @param float $total
     * @return CustomerRefund
     */
    public function setTotal(float $total): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setCurrency(RecordRef $currency): CustomerRefund
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
     * @param string $tranDate
     * @return CustomerRefund
     */
    public function setTranDate(string $tranDate): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setVoidJournal(RecordRef $voidJournal): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setMemo(string $memo): CustomerRefund
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
     * @param RecordRef $paymentMethod
     * @return CustomerRefund
     */
    public function setPaymentMethod(RecordRef $paymentMethod): CustomerRefund
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentMethod(): RecordRef
    {
        return $this->paymentMethod;
    }

    /**
     * @param RecordRef $account
     * @return CustomerRefund
     */
    public function setAccount(RecordRef $account): CustomerRefund
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
     * @param bool $toBePrinted
     * @return CustomerRefund
     */
    public function setToBePrinted(bool $toBePrinted): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setTranId(string $tranId): CustomerRefund
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
     * @param string $debitCardIssueNo
     * @return CustomerRefund
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): CustomerRefund
    {
        $this->debitCardIssueNo = $debitCardIssueNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebitCardIssueNo(): string
    {
        return $this->debitCardIssueNo;
    }

    /**
     * @param RecordRef $creditCardProcessor
     * @return CustomerRefund
     */
    public function setCreditCardProcessor(RecordRef $creditCardProcessor): CustomerRefund
    {
        $this->creditCardProcessor = $creditCardProcessor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCardProcessor(): RecordRef
    {
        return $this->creditCardProcessor;
    }

    /**
     * @param bool $chargeIt
     * @return CustomerRefund
     */
    public function setChargeIt(bool $chargeIt): CustomerRefund
    {
        $this->chargeIt = $chargeIt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getChargeIt(): bool
    {
        return $this->chargeIt;
    }

    /**
     * @param string $pnRefNum
     * @return CustomerRefund
     */
    public function setPnRefNum(string $pnRefNum): CustomerRefund
    {
        $this->pnRefNum = $pnRefNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getPnRefNum(): string
    {
        return $this->pnRefNum;
    }

    /**
     * @param string $validFrom
     * @return CustomerRefund
     */
    public function setValidFrom(string $validFrom): CustomerRefund
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

    /**
     * @param RecordRef $subsidiary
     * @return CustomerRefund
     */
    public function setSubsidiary(RecordRef $subsidiary): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setDepartment(RecordRef $department): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setClass(RecordRef $class): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setLocation(RecordRef $location): CustomerRefund
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
     * @param RecordRef $paymentOption
     * @return CustomerRefund
     */
    public function setPaymentOption(RecordRef $paymentOption): CustomerRefund
    {
        $this->paymentOption = $paymentOption;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentOption(): RecordRef
    {
        return $this->paymentOption;
    }

    /**
     * @param string $inputAuthCode
     * @return CustomerRefund
     */
    public function setInputAuthCode(string $inputAuthCode): CustomerRefund
    {
        $this->inputAuthCode = $inputAuthCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputAuthCode(): string
    {
        return $this->inputAuthCode;
    }

    /**
     * @param string $inputReferenceCode
     * @return CustomerRefund
     */
    public function setInputReferenceCode(string $inputReferenceCode): CustomerRefund
    {
        $this->inputReferenceCode = $inputReferenceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInputReferenceCode(): string
    {
        return $this->inputReferenceCode;
    }

    /**
     * @param string $checkNumber
     * @return CustomerRefund
     */
    public function setCheckNumber(string $checkNumber): CustomerRefund
    {
        $this->checkNumber = $checkNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber(): string
    {
        return $this->checkNumber;
    }

    /**
     * @param string $paymentCardCsc
     * @return CustomerRefund
     */
    public function setPaymentCardCsc(string $paymentCardCsc): CustomerRefund
    {
        $this->paymentCardCsc = $paymentCardCsc;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCardCsc(): string
    {
        return $this->paymentCardCsc;
    }

    /**
     * @param RecordRef $paymentProcessingProfile
     * @return CustomerRefund
     */
    public function setPaymentProcessingProfile(RecordRef $paymentProcessingProfile): CustomerRefund
    {
        $this->paymentProcessingProfile = $paymentProcessingProfile;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentProcessingProfile(): RecordRef
    {
        return $this->paymentProcessingProfile;
    }

    /**
     * @param CustomerRefundHandlingMode $handlingMode
     * @return CustomerRefund
     */
    public function setHandlingMode(CustomerRefundHandlingMode $handlingMode): CustomerRefund
    {
        $this->handlingMode = $handlingMode;
        return $this;
    }

    /**
     * @return CustomerRefundHandlingMode
     */
    public function getHandlingMode(): CustomerRefundHandlingMode
    {
        return $this->handlingMode;
    }

    /**
     * @param string $outputAuthCode
     * @return CustomerRefund
     */
    public function setOutputAuthCode(string $outputAuthCode): CustomerRefund
    {
        $this->outputAuthCode = $outputAuthCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutputAuthCode(): string
    {
        return $this->outputAuthCode;
    }

    /**
     * @param string $outputReferenceCode
     * @return CustomerRefund
     */
    public function setOutputReferenceCode(string $outputReferenceCode): CustomerRefund
    {
        $this->outputReferenceCode = $outputReferenceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutputReferenceCode(): string
    {
        return $this->outputReferenceCode;
    }

    /**
     * @param CustomerRefundPaymentOperation $paymentOperation
     * @return CustomerRefund
     */
    public function setPaymentOperation(CustomerRefundPaymentOperation $paymentOperation): CustomerRefund
    {
        $this->paymentOperation = $paymentOperation;
        return $this;
    }

    /**
     * @return CustomerRefundPaymentOperation
     */
    public function getPaymentOperation(): CustomerRefundPaymentOperation
    {
        return $this->paymentOperation;
    }

    /**
     * @param string $dynamicDescriptor
     * @return CustomerRefund
     */
    public function setDynamicDescriptor(string $dynamicDescriptor): CustomerRefund
    {
        $this->dynamicDescriptor = $dynamicDescriptor;
        return $this;
    }

    /**
     * @return string
     */
    public function getDynamicDescriptor(): string
    {
        return $this->dynamicDescriptor;
    }

    /**
     * @param RecordRef $creditCard
     * @return CustomerRefund
     */
    public function setCreditCard(RecordRef $creditCard): CustomerRefund
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreditCard(): RecordRef
    {
        return $this->creditCard;
    }

    /**
     * @param bool $ccIsPurchaseCardBin
     * @return CustomerRefund
     */
    public function setCcIsPurchaseCardBin(bool $ccIsPurchaseCardBin): CustomerRefund
    {
        $this->ccIsPurchaseCardBin = $ccIsPurchaseCardBin;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCcIsPurchaseCardBin(): bool
    {
        return $this->ccIsPurchaseCardBin;
    }

    /**
     * @param string $ccNumber
     * @return CustomerRefund
     */
    public function setCcNumber(string $ccNumber): CustomerRefund
    {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcNumber(): string
    {
        return $this->ccNumber;
    }

    /**
     * @param bool $ccProcessAsPurchaseCard
     * @return CustomerRefund
     */
    public function setCcProcessAsPurchaseCard(bool $ccProcessAsPurchaseCard): CustomerRefund
    {
        $this->ccProcessAsPurchaseCard = $ccProcessAsPurchaseCard;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCcProcessAsPurchaseCard(): bool
    {
        return $this->ccProcessAsPurchaseCard;
    }

    /**
     * @param string $ccExpireDate
     * @return CustomerRefund
     */
    public function setCcExpireDate(string $ccExpireDate): CustomerRefund
    {
        $this->ccExpireDate = $ccExpireDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcExpireDate(): string
    {
        return $this->ccExpireDate;
    }

    /**
     * @param string $ccName
     * @return CustomerRefund
     */
    public function setCcName(string $ccName): CustomerRefund
    {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcName(): string
    {
        return $this->ccName;
    }

    /**
     * @param string $ccStreet
     * @return CustomerRefund
     */
    public function setCcStreet(string $ccStreet): CustomerRefund
    {
        $this->ccStreet = $ccStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcStreet(): string
    {
        return $this->ccStreet;
    }

    /**
     * @param string $ccZipCode
     * @return CustomerRefund
     */
    public function setCcZipCode(string $ccZipCode): CustomerRefund
    {
        $this->ccZipCode = $ccZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcZipCode(): string
    {
        return $this->ccZipCode;
    }

    /**
     * @param bool $ccApproved
     * @return CustomerRefund
     */
    public function setCcApproved(bool $ccApproved): CustomerRefund
    {
        $this->ccApproved = $ccApproved;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCcApproved(): bool
    {
        return $this->ccApproved;
    }

    /**
     * @param CustomerRefundApplyList $applyList
     * @return CustomerRefund
     */
    public function setApplyList(CustomerRefundApplyList $applyList): CustomerRefund
    {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * @return CustomerRefundApplyList
     */
    public function getApplyList(): CustomerRefundApplyList
    {
        return $this->applyList;
    }

    /**
     * @param CustomerRefundDepositList $depositList
     * @return CustomerRefund
     */
    public function setDepositList(CustomerRefundDepositList $depositList): CustomerRefund
    {
        $this->depositList = $depositList;
        return $this;
    }

    /**
     * @return CustomerRefundDepositList
     */
    public function getDepositList(): CustomerRefundDepositList
    {
        return $this->depositList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CustomerRefund
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CustomerRefund
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
     * @param RecordRef $payeeAddressList
     * @return CustomerRefund
     */
    public function setPayeeAddressList(RecordRef $payeeAddressList): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setPayeeAddress(Address $payeeAddress): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setInternalId(string $internalId): CustomerRefund
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
     * @return CustomerRefund
     */
    public function setExternalId(string $externalId): CustomerRefund
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
