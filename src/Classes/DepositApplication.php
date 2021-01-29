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

class DepositApplication extends Record {
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
    protected RecordRef $arAcct;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

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
    protected RecordRef $deposit;

    /**
     * @var string
     */
    protected string $depDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var float
     */
    protected float $applied;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var float
     */
    protected float $unapplied;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var DepositApplicationApplyList
     */
    protected DepositApplicationApplyList $applyList;

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
        "arAcct" => "RecordRef",
        "status" => "string",
        "customer" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "deposit" => "RecordRef",
        "depDate" => "dateTime",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "total" => "float",
        "department" => "RecordRef",
        "applied" => "float",
        "class" => "RecordRef",
        "unapplied" => "float",
        "location" => "RecordRef",
        "tranId" => "string",
        "applyList" => "DepositApplicationApplyList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return DepositApplication
     */
    public function setCreatedDate(string $createdDate): DepositApplication
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
     * @return DepositApplication
     */
    public function setLastModifiedDate(string $lastModifiedDate): DepositApplication
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
     * @param RecordRef $arAcct
     * @return DepositApplication
     */
    public function setArAcct(RecordRef $arAcct): DepositApplication
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
     * @param string $status
     * @return DepositApplication
     */
    public function setStatus(string $status): DepositApplication
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
     * @return DepositApplication
     */
    public function setCustomer(RecordRef $customer): DepositApplication
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
     * @param string $tranDate
     * @return DepositApplication
     */
    public function setTranDate(string $tranDate): DepositApplication
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
     * @return DepositApplication
     */
    public function setPostingPeriod(RecordRef $postingPeriod): DepositApplication
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
     * @param RecordRef $deposit
     * @return DepositApplication
     */
    public function setDeposit(RecordRef $deposit): DepositApplication
    {
        $this->deposit = $deposit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeposit(): RecordRef
    {
        return $this->deposit;
    }

    /**
     * @param string $depDate
     * @return DepositApplication
     */
    public function setDepDate(string $depDate): DepositApplication
    {
        $this->depDate = $depDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepDate(): string
    {
        return $this->depDate;
    }

    /**
     * @param RecordRef $currency
     * @return DepositApplication
     */
    public function setCurrency(RecordRef $currency): DepositApplication
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
     * @param float $exchangeRate
     * @return DepositApplication
     */
    public function setExchangeRate(float $exchangeRate): DepositApplication
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
     * @param string $memo
     * @return DepositApplication
     */
    public function setMemo(string $memo): DepositApplication
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
     * @return DepositApplication
     */
    public function setSubsidiary(RecordRef $subsidiary): DepositApplication
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
     * @param float $total
     * @return DepositApplication
     */
    public function setTotal(float $total): DepositApplication
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
     * @param RecordRef $department
     * @return DepositApplication
     */
    public function setDepartment(RecordRef $department): DepositApplication
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
     * @param float $applied
     * @return DepositApplication
     */
    public function setApplied(float $applied): DepositApplication
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
     * @param RecordRef $class
     * @return DepositApplication
     */
    public function setClass(RecordRef $class): DepositApplication
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
     * @param float $unapplied
     * @return DepositApplication
     */
    public function setUnapplied(float $unapplied): DepositApplication
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
     * @param RecordRef $location
     * @return DepositApplication
     */
    public function setLocation(RecordRef $location): DepositApplication
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
     * @param string $tranId
     * @return DepositApplication
     */
    public function setTranId(string $tranId): DepositApplication
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
     * @param DepositApplicationApplyList $applyList
     * @return DepositApplication
     */
    public function setApplyList(DepositApplicationApplyList $applyList): DepositApplication
    {
        $this->applyList = $applyList;
        return $this;
    }

    /**
     * @return DepositApplicationApplyList
     */
    public function getApplyList(): DepositApplicationApplyList
    {
        return $this->applyList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return DepositApplication
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): DepositApplication
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
     * @return DepositApplication
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): DepositApplication
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
     * @return DepositApplication
     */
    public function setInternalId(string $internalId): DepositApplication
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
     * @return DepositApplication
     */
    public function setExternalId(string $externalId): DepositApplication
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
