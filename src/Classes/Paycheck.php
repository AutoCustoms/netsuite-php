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

class Paycheck extends Record {
    /**
     * @var string
     */
    protected string $batchNumber;

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
    protected RecordRef $entity;

    /**
     * @var string
     */
    protected string $address;

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
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $workplace;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var float
     */
    protected float $userAmount;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var string
     */
    protected string $payFrequency;

    /**
     * @var float
     */
    protected float $balance;

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
    protected string $periodEnding;

    /**
     * @var PaycheckPayEarnList
     */
    protected PaycheckPayEarnList $payEarnList;

    /**
     * @var PaycheckPayTimeList
     */
    protected PaycheckPayTimeList $payTimeList;

    /**
     * @var PaycheckPayExpList
     */
    protected PaycheckPayExpList $payExpList;

    /**
     * @var PaycheckPayPtoList
     */
    protected PaycheckPayPtoList $payPtoList;

    /**
     * @var PaycheckPayDeductList
     */
    protected PaycheckPayDeductList $payDeductList;

    /**
     * @var PaycheckPayContribList
     */
    protected PaycheckPayContribList $payContribList;

    /**
     * @var PaycheckPayTaxList
     */
    protected PaycheckPayTaxList $payTaxList;

    /**
     * @var PaycheckPaySummaryList
     */
    protected PaycheckPaySummaryList $paySummaryList;

    /**
     * @var PaycheckPayDisburseList
     */
    protected PaycheckPayDisburseList $payDisburseList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "batchNumber" => "string",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "status" => "string",
        "entity" => "RecordRef",
        "address" => "string",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "class" => "RecordRef",
        "workplace" => "RecordRef",
        "tranId" => "string",
        "userAmount" => "float",
        "memo" => "string",
        "account" => "RecordRef",
        "payFrequency" => "string",
        "balance" => "float",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "periodEnding" => "dateTime",
        "payEarnList" => "PaycheckPayEarnList",
        "payTimeList" => "PaycheckPayTimeList",
        "payExpList" => "PaycheckPayExpList",
        "payPtoList" => "PaycheckPayPtoList",
        "payDeductList" => "PaycheckPayDeductList",
        "payContribList" => "PaycheckPayContribList",
        "payTaxList" => "PaycheckPayTaxList",
        "paySummaryList" => "PaycheckPaySummaryList",
        "payDisburseList" => "PaycheckPayDisburseList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $batchNumber
     * @return Paycheck
     */
    public function setBatchNumber(string $batchNumber): Paycheck
    {
        $this->batchNumber = $batchNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBatchNumber(): string
    {
        return $this->batchNumber;
    }

    /**
     * @param string $createdDate
     * @return Paycheck
     */
    public function setCreatedDate(string $createdDate): Paycheck
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
     * @return Paycheck
     */
    public function setLastModifiedDate(string $lastModifiedDate): Paycheck
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
     * @return Paycheck
     */
    public function setStatus(string $status): Paycheck
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
     * @param RecordRef $entity
     * @return Paycheck
     */
    public function setEntity(RecordRef $entity): Paycheck
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
     * @param string $address
     * @return Paycheck
     */
    public function setAddress(string $address): Paycheck
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param RecordRef $department
     * @return Paycheck
     */
    public function setDepartment(RecordRef $department): Paycheck
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
     * @return Paycheck
     */
    public function setLocation(RecordRef $location): Paycheck
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
     * @param RecordRef $class
     * @return Paycheck
     */
    public function setClass(RecordRef $class): Paycheck
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
     * @param RecordRef $workplace
     * @return Paycheck
     */
    public function setWorkplace(RecordRef $workplace): Paycheck
    {
        $this->workplace = $workplace;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkplace(): RecordRef
    {
        return $this->workplace;
    }

    /**
     * @param string $tranId
     * @return Paycheck
     */
    public function setTranId(string $tranId): Paycheck
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
     * @param float $userAmount
     * @return Paycheck
     */
    public function setUserAmount(float $userAmount): Paycheck
    {
        $this->userAmount = $userAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getUserAmount(): float
    {
        return $this->userAmount;
    }

    /**
     * @param string $memo
     * @return Paycheck
     */
    public function setMemo(string $memo): Paycheck
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
     * @param RecordRef $account
     * @return Paycheck
     */
    public function setAccount(RecordRef $account): Paycheck
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
     * @param string $payFrequency
     * @return Paycheck
     */
    public function setPayFrequency(string $payFrequency): Paycheck
    {
        $this->payFrequency = $payFrequency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayFrequency(): string
    {
        return $this->payFrequency;
    }

    /**
     * @param float $balance
     * @return Paycheck
     */
    public function setBalance(float $balance): Paycheck
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
     * @param string $tranDate
     * @return Paycheck
     */
    public function setTranDate(string $tranDate): Paycheck
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
     * @return Paycheck
     */
    public function setPostingPeriod(RecordRef $postingPeriod): Paycheck
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
     * @param string $periodEnding
     * @return Paycheck
     */
    public function setPeriodEnding(string $periodEnding): Paycheck
    {
        $this->periodEnding = $periodEnding;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriodEnding(): string
    {
        return $this->periodEnding;
    }

    /**
     * @param PaycheckPayEarnList $payEarnList
     * @return Paycheck
     */
    public function setPayEarnList(PaycheckPayEarnList $payEarnList): Paycheck
    {
        $this->payEarnList = $payEarnList;
        return $this;
    }

    /**
     * @return PaycheckPayEarnList
     */
    public function getPayEarnList(): PaycheckPayEarnList
    {
        return $this->payEarnList;
    }

    /**
     * @param PaycheckPayTimeList $payTimeList
     * @return Paycheck
     */
    public function setPayTimeList(PaycheckPayTimeList $payTimeList): Paycheck
    {
        $this->payTimeList = $payTimeList;
        return $this;
    }

    /**
     * @return PaycheckPayTimeList
     */
    public function getPayTimeList(): PaycheckPayTimeList
    {
        return $this->payTimeList;
    }

    /**
     * @param PaycheckPayExpList $payExpList
     * @return Paycheck
     */
    public function setPayExpList(PaycheckPayExpList $payExpList): Paycheck
    {
        $this->payExpList = $payExpList;
        return $this;
    }

    /**
     * @return PaycheckPayExpList
     */
    public function getPayExpList(): PaycheckPayExpList
    {
        return $this->payExpList;
    }

    /**
     * @param PaycheckPayPtoList $payPtoList
     * @return Paycheck
     */
    public function setPayPtoList(PaycheckPayPtoList $payPtoList): Paycheck
    {
        $this->payPtoList = $payPtoList;
        return $this;
    }

    /**
     * @return PaycheckPayPtoList
     */
    public function getPayPtoList(): PaycheckPayPtoList
    {
        return $this->payPtoList;
    }

    /**
     * @param PaycheckPayDeductList $payDeductList
     * @return Paycheck
     */
    public function setPayDeductList(PaycheckPayDeductList $payDeductList): Paycheck
    {
        $this->payDeductList = $payDeductList;
        return $this;
    }

    /**
     * @return PaycheckPayDeductList
     */
    public function getPayDeductList(): PaycheckPayDeductList
    {
        return $this->payDeductList;
    }

    /**
     * @param PaycheckPayContribList $payContribList
     * @return Paycheck
     */
    public function setPayContribList(PaycheckPayContribList $payContribList): Paycheck
    {
        $this->payContribList = $payContribList;
        return $this;
    }

    /**
     * @return PaycheckPayContribList
     */
    public function getPayContribList(): PaycheckPayContribList
    {
        return $this->payContribList;
    }

    /**
     * @param PaycheckPayTaxList $payTaxList
     * @return Paycheck
     */
    public function setPayTaxList(PaycheckPayTaxList $payTaxList): Paycheck
    {
        $this->payTaxList = $payTaxList;
        return $this;
    }

    /**
     * @return PaycheckPayTaxList
     */
    public function getPayTaxList(): PaycheckPayTaxList
    {
        return $this->payTaxList;
    }

    /**
     * @param PaycheckPaySummaryList $paySummaryList
     * @return Paycheck
     */
    public function setPaySummaryList(PaycheckPaySummaryList $paySummaryList): Paycheck
    {
        $this->paySummaryList = $paySummaryList;
        return $this;
    }

    /**
     * @return PaycheckPaySummaryList
     */
    public function getPaySummaryList(): PaycheckPaySummaryList
    {
        return $this->paySummaryList;
    }

    /**
     * @param PaycheckPayDisburseList $payDisburseList
     * @return Paycheck
     */
    public function setPayDisburseList(PaycheckPayDisburseList $payDisburseList): Paycheck
    {
        $this->payDisburseList = $payDisburseList;
        return $this;
    }

    /**
     * @return PaycheckPayDisburseList
     */
    public function getPayDisburseList(): PaycheckPayDisburseList
    {
        return $this->payDisburseList;
    }

    /**
     * @param string $internalId
     * @return Paycheck
     */
    public function setInternalId(string $internalId): Paycheck
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
     * @return Paycheck
     */
    public function setExternalId(string $externalId): Paycheck
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
