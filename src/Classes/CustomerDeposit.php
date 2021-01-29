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

class CustomerDeposit extends Record {
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
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesOrder;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var float
     */
    protected float $payment;

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
    protected string $currencyName;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var string
     */
    protected string $checkNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCardProcessor;

    /**
     * @var RecordRef
     */
    protected RecordRef $creditCard;

    /**
     * @var string
     */
    protected string $ccSecurityCode;

    /**
     * @var string
     */
    protected string $ccNumber;

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
     * @var CustomerDepositHandlingMode
     */
    protected CustomerDepositHandlingMode $handlingMode;

    /**
     * @var string
     */
    protected string $outputAuthCode;

    /**
     * @var string
     */
    protected string $outputReferenceCode;

    /**
     * @var CustomerDepositPaymentOperation
     */
    protected CustomerDepositPaymentOperation $paymentOperation;

    /**
     * @var string
     */
    protected string $dynamicDescriptor;

    /**
     * @var string
     */
    protected string $ccExpireDate;

    /**
     * @var string
     */
    protected string $debitCardIssueNo;

    /**
     * @var string
     */
    protected string $validFrom;

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
    protected bool $chargeIt;

    /**
     * @var bool
     */
    protected bool $ccApproved;

    /**
     * @var string
     */
    protected string $pnRefNum;

    /**
     * @var string
     */
    protected string $authCode;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccAvsStreetMatch;

    /**
     * @var string
     */
    protected string $softDescriptor;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccAvsZipMatch;

    /**
     * @var bool
     */
    protected bool $isRecurringPayment;

    /**
     * @var AvsMatchCode
     */
    protected AvsMatchCode $ccSecurityCodeMatch;

    /**
     * @var string
     */
    protected string $threeDStatusCode;

    /**
     * @var bool
     */
    protected bool $ignoreAvs;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var bool
     */
    protected bool $undepFunds;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var CustomerDepositApplyList
     */
    protected CustomerDepositApplyList $applyList;

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
        "status" => "string",
        "customer" => "RecordRef",
        "salesOrder" => "RecordRef",
        "customForm" => "RecordRef",
        "payment" => "float",
        "currency" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "paymentMethod" => "RecordRef",
        "ccIsPurchaseCardBin" => "boolean",
        "memo" => "string",
        "ccProcessAsPurchaseCard" => "boolean",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "checkNum" => "string",
        "creditCardProcessor" => "RecordRef",
        "creditCard" => "RecordRef",
        "ccSecurityCode" => "string",
        "ccNumber" => "string",
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
        "handlingMode" => "CustomerDepositHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CustomerDepositPaymentOperation",
        "dynamicDescriptor" => "string",
        "ccExpireDate" => "dateTime",
        "debitCardIssueNo" => "string",
        "validFrom" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "chargeIt" => "boolean",
        "ccApproved" => "boolean",
        "pnRefNum" => "string",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "softDescriptor" => "string",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "threeDStatusCode" => "string",
        "ignoreAvs" => "boolean",
        "account" => "RecordRef",
        "undepFunds" => "boolean",
        "tranId" => "string",
        "applyList" => "CustomerDepositApplyList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CustomerDeposit
     */
    public function setCreatedDate(string $createdDate): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setLastModifiedDate(string $lastModifiedDate): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setStatus(string $status): CustomerDeposit
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
     * @param RecordRef $customer
     * @return CustomerDeposit
     */
    public function setCustomer(RecordRef $customer): CustomerDeposit
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
     * @param RecordRef $salesOrder
     * @return CustomerDeposit
     */
    public function setSalesOrder(RecordRef $salesOrder): CustomerDeposit
    {
        $this->salesOrder = $salesOrder;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesOrder(): RecordRef
    {
        return $this->salesOrder;
    }

    /**
     * @param RecordRef $customForm
     * @return CustomerDeposit
     */
    public function setCustomForm(RecordRef $customForm): CustomerDeposit
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
     * @param float $payment
     * @return CustomerDeposit
     */
    public function setPayment(float $payment): CustomerDeposit
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
     * @param RecordRef $currency
     * @return CustomerDeposit
     */
    public function setCurrency(RecordRef $currency): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setTranDate(string $tranDate): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setPaymentMethod(RecordRef $paymentMethod): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setCcIsPurchaseCardBin(bool $ccIsPurchaseCardBin): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setMemo(string $memo): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setCcProcessAsPurchaseCard(bool $ccProcessAsPurchaseCard): CustomerDeposit
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
     * @param string $currencyName
     * @return CustomerDeposit
     */
    public function setCurrencyName(string $currencyName): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setExchangeRate(float $exchangeRate): CustomerDeposit
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
     * @param string $checkNum
     * @return CustomerDeposit
     */
    public function setCheckNum(string $checkNum): CustomerDeposit
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
     * @param RecordRef $creditCardProcessor
     * @return CustomerDeposit
     */
    public function setCreditCardProcessor(RecordRef $creditCardProcessor): CustomerDeposit
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
     * @param RecordRef $creditCard
     * @return CustomerDeposit
     */
    public function setCreditCard(RecordRef $creditCard): CustomerDeposit
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
     * @param string $ccSecurityCode
     * @return CustomerDeposit
     */
    public function setCcSecurityCode(string $ccSecurityCode): CustomerDeposit
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
     * @param string $ccNumber
     * @return CustomerDeposit
     */
    public function setCcNumber(string $ccNumber): CustomerDeposit
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
     * @param RecordRef $subsidiary
     * @return CustomerDeposit
     */
    public function setSubsidiary(RecordRef $subsidiary): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setDepartment(RecordRef $department): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setClass(RecordRef $class): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setLocation(RecordRef $location): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setPaymentOption(RecordRef $paymentOption): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setInputAuthCode(string $inputAuthCode): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setInputReferenceCode(string $inputReferenceCode): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setCheckNumber(string $checkNumber): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setPaymentCardCsc(string $paymentCardCsc): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setPaymentProcessingProfile(RecordRef $paymentProcessingProfile): CustomerDeposit
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
     * @param CustomerDepositHandlingMode $handlingMode
     * @return CustomerDeposit
     */
    public function setHandlingMode(CustomerDepositHandlingMode $handlingMode): CustomerDeposit
    {
        $this->handlingMode = $handlingMode;
        return $this;
    }

    /**
     * @return CustomerDepositHandlingMode
     */
    public function getHandlingMode(): CustomerDepositHandlingMode
    {
        return $this->handlingMode;
    }

    /**
     * @param string $outputAuthCode
     * @return CustomerDeposit
     */
    public function setOutputAuthCode(string $outputAuthCode): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setOutputReferenceCode(string $outputReferenceCode): CustomerDeposit
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
     * @param CustomerDepositPaymentOperation $paymentOperation
     * @return CustomerDeposit
     */
    public function setPaymentOperation(CustomerDepositPaymentOperation $paymentOperation): CustomerDeposit
    {
        $this->paymentOperation = $paymentOperation;
        return $this;
    }

    /**
     * @return CustomerDepositPaymentOperation
     */
    public function getPaymentOperation(): CustomerDepositPaymentOperation
    {
        return $this->paymentOperation;
    }

    /**
     * @param string $dynamicDescriptor
     * @return CustomerDeposit
     */
    public function setDynamicDescriptor(string $dynamicDescriptor): CustomerDeposit
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
     * @param string $ccExpireDate
     * @return CustomerDeposit
     */
    public function setCcExpireDate(string $ccExpireDate): CustomerDeposit
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
     * @param string $debitCardIssueNo
     * @return CustomerDeposit
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setValidFrom(string $validFrom): CustomerDeposit
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
     * @param string $ccName
     * @return CustomerDeposit
     */
    public function setCcName(string $ccName): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setCcStreet(string $ccStreet): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setCcZipCode(string $ccZipCode): CustomerDeposit
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
     * @param bool $chargeIt
     * @return CustomerDeposit
     */
    public function setChargeIt(bool $chargeIt): CustomerDeposit
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
     * @param bool $ccApproved
     * @return CustomerDeposit
     */
    public function setCcApproved(bool $ccApproved): CustomerDeposit
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
     * @param string $pnRefNum
     * @return CustomerDeposit
     */
    public function setPnRefNum(string $pnRefNum): CustomerDeposit
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
     * @param string $authCode
     * @return CustomerDeposit
     */
    public function setAuthCode(string $authCode): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setCcAvsStreetMatch(AvsMatchCode $ccAvsStreetMatch): CustomerDeposit
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
     * @param string $softDescriptor
     * @return CustomerDeposit
     */
    public function setSoftDescriptor(string $softDescriptor): CustomerDeposit
    {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptor(): string
    {
        return $this->softDescriptor;
    }

    /**
     * @param AvsMatchCode $ccAvsZipMatch
     * @return CustomerDeposit
     */
    public function setCcAvsZipMatch(AvsMatchCode $ccAvsZipMatch): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setIsRecurringPayment(bool $isRecurringPayment): CustomerDeposit
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
     * @param AvsMatchCode $ccSecurityCodeMatch
     * @return CustomerDeposit
     */
    public function setCcSecurityCodeMatch(AvsMatchCode $ccSecurityCodeMatch): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setThreeDStatusCode(string $threeDStatusCode): CustomerDeposit
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
     * @param bool $ignoreAvs
     * @return CustomerDeposit
     */
    public function setIgnoreAvs(bool $ignoreAvs): CustomerDeposit
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
     * @param RecordRef $account
     * @return CustomerDeposit
     */
    public function setAccount(RecordRef $account): CustomerDeposit
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
     * @param bool $undepFunds
     * @return CustomerDeposit
     */
    public function setUndepFunds(bool $undepFunds): CustomerDeposit
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
     * @param string $tranId
     * @return CustomerDeposit
     */
    public function setTranId(string $tranId): CustomerDeposit
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
     * @param CustomerDepositApplyList $applyList
     * @return CustomerDeposit
     */
    public function setApplyList(CustomerDepositApplyList $applyList): CustomerDeposit
    {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * @return CustomerDepositApplyList
     */
    public function getApplyList(): CustomerDepositApplyList
    {
        return $this->applyList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CustomerDeposit
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setInternalId(string $internalId): CustomerDeposit
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
     * @return CustomerDeposit
     */
    public function setExternalId(string $externalId): CustomerDeposit
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
