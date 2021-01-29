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

class CustomerPayment extends Record {
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
    protected RecordRef $arAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var float
     */
    protected float $pending;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $payment;

    /**
     * @var bool
     */
    protected bool $autoApply;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var bool
     */
    protected bool $ccIsPurchaseCardBin;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $ccProcessAsPurchaseCard;

    /**
     * @var string
     */
    protected string $checkNum;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCard;

    /**
     * @var bool
     */
    protected bool $chargeIt;

    /**
     * @var string
     */
    protected string $ccNumber;

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
     * @var string
     */
    protected string $authCode;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccAvsStreetMatch;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccAvsZipMatch;

    /**
     * @var bool
     */
    protected bool $isRecurringPayment;

    /**
     * @var string
     */
    protected string $ccSecurityCode;

    /**
     * @var bool
     */
    protected bool $ignoreAvs;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccSecurityCodeMatch;

    /**
     * @var string
     */
    protected string $threeDStatusCode;

    /**
     * @var string
     */
    protected string $pnRefNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCardProcessor;

    /**
     * @var string
     */
    protected string $debitCardIssueNo;

    /**
     * @var string
     */
    protected string $validFrom;

    /**
     * @var bool
     */
    protected bool $undepFunds;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var float
     */
    protected float $applied;

    /**
     * @var float
     */
    protected float $unapplied;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

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
     * @var CustomerPaymentHandlingMode
     */
    protected CustomerPaymentHandlingMode $handlingMode;

    /**
     * @var string
     */
    protected string $outputAuthCode;

    /**
     * @var string
     */
    protected string $outputReferenceCode;

    /**
     * @var CustomerPaymentPaymentOperation
     */
    protected CustomerPaymentPaymentOperation $paymentOperation;

    /**
     * @var string
     */
    protected string $dynamicDescriptor;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var CustomerPaymentApplyList
     */
    protected CustomerPaymentApplyList $applyList;

    /**
     * @var CustomerPaymentCreditList
     */
    protected CustomerPaymentCreditList $creditList;

    /**
     * @var CustomerPaymentDepositList
     */
    protected CustomerPaymentDepositList $depositList;

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
        "arAcct" => "RecordRef",
        "customer" => "RecordRef",
        "balance" => "float",
        "pending" => "float",
        "currency" => "RecordRef",
        "payment" => "float",
        "autoApply" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "postingPeriod" => "RecordRef",
        "paymentMethod" => "RecordRef",
        "ccIsPurchaseCardBin" => "boolean",
        "memo" => "string",
        "ccProcessAsPurchaseCard" => "boolean",
        "checkNum" => "string",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "creditCard" => "RecordRef",
        "chargeIt" => "boolean",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "ccSecurityCode" => "string",
        "ignoreAvs" => "boolean",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "threeDStatusCode" => "string",
        "pnRefNum" => "string",
        "creditCardProcessor" => "RecordRef",
        "debitCardIssueNo" => "string",
        "validFrom" => "dateTime",
        "undepFunds" => "boolean",
        "account" => "RecordRef",
        "total" => "float",
        "subsidiary" => "RecordRef",
        "applied" => "float",
        "unapplied" => "float",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "paymentOption" => "RecordRef",
        "inputAuthCode" => "string",
        "inputReferenceCode" => "string",
        "checkNumber" => "string",
        "paymentCardCsc" => "string",
        "paymentProcessingProfile" => "RecordRef",
        "handlingMode" => "CustomerPaymentHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CustomerPaymentPaymentOperation",
        "dynamicDescriptor" => "string",
        "status" => "string",
        "applyList" => "CustomerPaymentApplyList",
        "creditList" => "CustomerPaymentCreditList",
        "depositList" => "CustomerPaymentDepositList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CustomerPayment
     */
    public function setCreatedDate(string $createdDate): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setLastModifiedDate(string $lastModifiedDate): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setCustomForm(RecordRef $customForm): CustomerPayment
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
     * @param RecordRef $arAcct
     * @return CustomerPayment
     */
    public function setArAcct(RecordRef $arAcct): CustomerPayment
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
     * @param RecordRef $customer
     * @return CustomerPayment
     */
    public function setCustomer(RecordRef $customer): CustomerPayment
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
     * @param float $balance
     * @return CustomerPayment
     */
    public function setBalance(float $balance): CustomerPayment
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
     * @param float $pending
     * @return CustomerPayment
     */
    public function setPending(float $pending): CustomerPayment
    {
        $this->pending = $pending;
        return $this;
    }

    /**
     * @return float
     */
    public function getPending(): float
    {
        return $this->pending;
    }

    /**
     * @param RecordRef $currency
     * @return CustomerPayment
     */
    public function setCurrency(RecordRef $currency): CustomerPayment
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
     * @param float $payment
     * @return CustomerPayment
     */
    public function setPayment(float $payment): CustomerPayment
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayment(): float
    {
        return $this->payment;
    }

    /**
     * @param bool $autoApply
     * @return CustomerPayment
     */
    public function setAutoApply(bool $autoApply): CustomerPayment
    {
        $this->autoApply = $autoApply;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoApply(): bool
    {
        return $this->autoApply;
    }

    /**
     * @param string $tranDate
     * @return CustomerPayment
     */
    public function setTranDate(string $tranDate): CustomerPayment
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
     * @param string $tranId
     * @return CustomerPayment
     */
    public function setTranId(string $tranId): CustomerPayment
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
     * @param RecordRef $postingPeriod
     * @return CustomerPayment
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CustomerPayment
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
     * @param RecordRef $paymentMethod
     * @return CustomerPayment
     */
    public function setPaymentMethod(RecordRef $paymentMethod): CustomerPayment
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
     * @param bool $ccIsPurchaseCardBin
     * @return CustomerPayment
     */
    public function setCcIsPurchaseCardBin(bool $ccIsPurchaseCardBin): CustomerPayment
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
     * @param string $memo
     * @return CustomerPayment
     */
    public function setMemo(string $memo): CustomerPayment
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
     * @param bool $ccProcessAsPurchaseCard
     * @return CustomerPayment
     */
    public function setCcProcessAsPurchaseCard(bool $ccProcessAsPurchaseCard): CustomerPayment
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
     * @param string $checkNum
     * @return CustomerPayment
     */
    public function setCheckNum(string $checkNum): CustomerPayment
    {
        $this->checkNum = $checkNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckNum(): string
    {
        return $this->checkNum;
    }

    /**
     * @param string $currencyName
     * @return CustomerPayment
     */
    public function setCurrencyName(string $currencyName): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setExchangeRate(float $exchangeRate): CustomerPayment
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
     * @param RecordRef $creditCard
     * @return CustomerPayment
     */
    public function setCreditCard(RecordRef $creditCard): CustomerPayment
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
     * @param bool $chargeIt
     * @return CustomerPayment
     */
    public function setChargeIt(bool $chargeIt): CustomerPayment
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
     * @param string $ccNumber
     * @return CustomerPayment
     */
    public function setCcNumber(string $ccNumber): CustomerPayment
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
     * @param string $ccExpireDate
     * @return CustomerPayment
     */
    public function setCcExpireDate(string $ccExpireDate): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setCcName(string $ccName): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setCcStreet(string $ccStreet): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setCcZipCode(string $ccZipCode): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setCcApproved(bool $ccApproved): CustomerPayment
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
     * @param string $authCode
     * @return CustomerPayment
     */
    public function setAuthCode(string $authCode): CustomerPayment
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    /**
     * @param AvsMatchCode $ccAvsStreetMatch
     * @return CustomerPayment
     */
    public function setCcAvsStreetMatch(AvsMatchCode $ccAvsStreetMatch): CustomerPayment
    {
        $this->ccAvsStreetMatch = $ccAvsStreetMatch;
        return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsStreetMatch(): AvsMatchCode
    {
        return $this->ccAvsStreetMatch;
    }

    /**
     * @param AvsMatchCode $ccAvsZipMatch
     * @return CustomerPayment
     */
    public function setCcAvsZipMatch(AvsMatchCode $ccAvsZipMatch): CustomerPayment
    {
        $this->ccAvsZipMatch = $ccAvsZipMatch;
        return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcAvsZipMatch(): AvsMatchCode
    {
        return $this->ccAvsZipMatch;
    }

    /**
     * @param bool $isRecurringPayment
     * @return CustomerPayment
     */
    public function setIsRecurringPayment(bool $isRecurringPayment): CustomerPayment
    {
        $this->isRecurringPayment = $isRecurringPayment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRecurringPayment(): bool
    {
        return $this->isRecurringPayment;
    }

    /**
     * @param string $ccSecurityCode
     * @return CustomerPayment
     */
    public function setCcSecurityCode(string $ccSecurityCode): CustomerPayment
    {
        $this->ccSecurityCode = $ccSecurityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcSecurityCode(): string
    {
        return $this->ccSecurityCode;
    }

    /**
     * @param bool $ignoreAvs
     * @return CustomerPayment
     */
    public function setIgnoreAvs(bool $ignoreAvs): CustomerPayment
    {
        $this->ignoreAvs = $ignoreAvs;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIgnoreAvs(): bool
    {
        return $this->ignoreAvs;
    }

    /**
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return CustomerPayment
     */
    public function setCcSecurityCodeMatch(AvsMatchCode $ccSecurityCodeMatch): CustomerPayment
    {
        $this->ccSecurityCodeMatch = $ccSecurityCodeMatch;
        return $this;
    }

    /**
     * @return AvsMatchCode
     */
    public function getCcSecurityCodeMatch(): AvsMatchCode
    {
        return $this->ccSecurityCodeMatch;
    }

    /**
     * @param string $threeDStatusCode
     * @return CustomerPayment
     */
    public function setThreeDStatusCode(string $threeDStatusCode): CustomerPayment
    {
        $this->threeDStatusCode = $threeDStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreeDStatusCode(): string
    {
        return $this->threeDStatusCode;
    }

    /**
     * @param string $pnRefNum
     * @return CustomerPayment
     */
    public function setPnRefNum(string $pnRefNum): CustomerPayment
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
     * @param RecordRef $creditCardProcessor
     * @return CustomerPayment
     */
    public function setCreditCardProcessor(RecordRef $creditCardProcessor): CustomerPayment
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
     * @param string $debitCardIssueNo
     * @return CustomerPayment
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): CustomerPayment
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
     * @param string $validFrom
     * @return CustomerPayment
     */
    public function setValidFrom(string $validFrom): CustomerPayment
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
     * @param bool $undepFunds
     * @return CustomerPayment
     */
    public function setUndepFunds(bool $undepFunds): CustomerPayment
    {
        $this->undepFunds = $undepFunds;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUndepFunds(): bool
    {
        return $this->undepFunds;
    }

    /**
     * @param RecordRef $account
     * @return CustomerPayment
     */
    public function setAccount(RecordRef $account): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setTotal(float $total): CustomerPayment
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
     * @param RecordRef $subsidiary
     * @return CustomerPayment
     */
    public function setSubsidiary(RecordRef $subsidiary): CustomerPayment
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
     * @param float $applied
     * @return CustomerPayment
     */
    public function setApplied(float $applied): CustomerPayment
    {
        $this->applied = $applied;
        return $this;
    }

    /**
     * @return float
     */
    public function getApplied(): float
    {
        return $this->applied;
    }

    /**
     * @param float $unapplied
     * @return CustomerPayment
     */
    public function setUnapplied(float $unapplied): CustomerPayment
    {
        $this->unapplied = $unapplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnapplied(): float
    {
        return $this->unapplied;
    }

    /**
     * @param RecordRef $class
     * @return CustomerPayment
     */
    public function setClass(RecordRef $class): CustomerPayment
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
     * @param RecordRef $department
     * @return CustomerPayment
     */
    public function setDepartment(RecordRef $department): CustomerPayment
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
     * @param RecordRef $location
     * @return CustomerPayment
     */
    public function setLocation(RecordRef $location): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setPaymentOption(RecordRef $paymentOption): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setInputAuthCode(string $inputAuthCode): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setInputReferenceCode(string $inputReferenceCode): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setCheckNumber(string $checkNumber): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setPaymentCardCsc(string $paymentCardCsc): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setPaymentProcessingProfile(RecordRef $paymentProcessingProfile): CustomerPayment
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
     * @param CustomerPaymentHandlingMode $handlingMode
     * @return CustomerPayment
     */
    public function setHandlingMode(CustomerPaymentHandlingMode $handlingMode): CustomerPayment
    {
        $this->handlingMode = $handlingMode;
        return $this;
    }

    /**
     * @return CustomerPaymentHandlingMode
     */
    public function getHandlingMode(): CustomerPaymentHandlingMode
    {
        return $this->handlingMode;
    }

    /**
     * @param string $outputAuthCode
     * @return CustomerPayment
     */
    public function setOutputAuthCode(string $outputAuthCode): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setOutputReferenceCode(string $outputReferenceCode): CustomerPayment
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
     * @param CustomerPaymentPaymentOperation $paymentOperation
     * @return CustomerPayment
     */
    public function setPaymentOperation(CustomerPaymentPaymentOperation $paymentOperation): CustomerPayment
    {
        $this->paymentOperation = $paymentOperation;
        return $this;
    }

    /**
     * @return CustomerPaymentPaymentOperation
     */
    public function getPaymentOperation(): CustomerPaymentPaymentOperation
    {
        return $this->paymentOperation;
    }

    /**
     * @param string $dynamicDescriptor
     * @return CustomerPayment
     */
    public function setDynamicDescriptor(string $dynamicDescriptor): CustomerPayment
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
     * @param string $status
     * @return CustomerPayment
     */
    public function setStatus(string $status): CustomerPayment
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
     * @param CustomerPaymentApplyList $applyList
     * @return CustomerPayment
     */
    public function setApplyList(CustomerPaymentApplyList $applyList): CustomerPayment
    {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * @return CustomerPaymentApplyList
     */
    public function getApplyList(): CustomerPaymentApplyList
    {
        return $this->applyList;
    }

    /**
     * @param CustomerPaymentCreditList $creditList
     * @return CustomerPayment
     */
    public function setCreditList(CustomerPaymentCreditList $creditList): CustomerPayment
    {
        $this->creditList = $creditList;
        return $this;
    }

    /**
     * @return CustomerPaymentCreditList
     */
    public function getCreditList(): CustomerPaymentCreditList
    {
        return $this->creditList;
    }

    /**
     * @param CustomerPaymentDepositList $depositList
     * @return CustomerPayment
     */
    public function setDepositList(CustomerPaymentDepositList $depositList): CustomerPayment
    {
        $this->depositList = $depositList;
        return $this;
    }

    /**
     * @return CustomerPaymentDepositList
     */
    public function getDepositList(): CustomerPaymentDepositList
    {
        return $this->depositList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CustomerPayment
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setInternalId(string $internalId): CustomerPayment
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
     * @return CustomerPayment
     */
    public function setExternalId(string $externalId): CustomerPayment
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
