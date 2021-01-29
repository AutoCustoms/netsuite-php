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

class CustomTransaction extends Record {
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
    protected RecordRef $tranType;

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
    protected RecordRef $voidJournal;

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
     * @var RecordRef
     */
    protected RecordRef $tranStatus;

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
     * @var CustomTransactionLineList
     */
    protected CustomTransactionLineList $lineList;

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
        "tranType" => "RecordRef",
        "tranId" => "string",
        "total" => "float",
        "currency" => "RecordRef",
        "voidJournal" => "RecordRef",
        "exchangeRate" => "float",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "lineList" => "CustomTransactionLineList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return CustomTransaction
     */
    public function setCreatedDate(string $createdDate): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setLastModifiedDate(string $lastModifiedDate): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setCustomForm(RecordRef $customForm): CustomTransaction
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
     * @param RecordRef $tranType
     * @return CustomTransaction
     */
    public function setTranType(RecordRef $tranType): CustomTransaction
    {
        $this->tranType = $tranType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTranType(): RecordRef
    {
        return $this->tranType;
    }

    /**
     * @param string $tranId
     * @return CustomTransaction
     */
    public function setTranId(string $tranId): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setTotal(float $total): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setCurrency(RecordRef $currency): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setVoidJournal(RecordRef $voidJournal): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setExchangeRate(float $exchangeRate): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setTranDate(string $tranDate): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setPostingPeriod(RecordRef $postingPeriod): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setMemo(string $memo): CustomTransaction
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
     * @param RecordRef $tranStatus
     * @return CustomTransaction
     */
    public function setTranStatus(RecordRef $tranStatus): CustomTransaction
    {
        $this->tranStatus = $tranStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTranStatus(): RecordRef
    {
        return $this->tranStatus;
    }

    /**
     * @param RecordRef $subsidiary
     * @return CustomTransaction
     */
    public function setSubsidiary(RecordRef $subsidiary): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setDepartment(RecordRef $department): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setClass(RecordRef $class): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setLocation(RecordRef $location): CustomTransaction
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
     * @param CustomTransactionLineList $lineList
     * @return CustomTransaction
     */
    public function setLineList(CustomTransactionLineList $lineList): CustomTransaction
    {
        $this->lineList = $lineList;
        return $this;
    }

    /**
     * @return CustomTransactionLineList
     */
    public function getLineList(): CustomTransactionLineList
    {
        return $this->lineList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return CustomTransaction
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setInternalId(string $internalId): CustomTransaction
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
     * @return CustomTransaction
     */
    public function setExternalId(string $externalId): CustomTransaction
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
