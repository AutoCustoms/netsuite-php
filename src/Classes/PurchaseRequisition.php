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

class PurchaseRequisition extends Record {
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
    protected string $source;

    /**
     * @var float
     */
    protected float $subTotal;

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
    protected string $vatRegNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxRegNum;

    /**
     * @var bool
     */
    protected bool $taxRegOverride;

    /**
     * @var float
     */
    protected float $estimatedTotal;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var string
     */
    protected string $dueDate;

    /**
     * @var string
     */
    protected string $tranDate;

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
    protected RecordRef $approvalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $nextApprover;

    /**
     * @var float
     */
    protected float $taxTotal;

    protected $tax2Total;
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
     * @var float
     */
    protected float $total;

    /**
     * @var PurchaseRequisitionItemList
     */
    protected PurchaseRequisitionItemList $itemList;

    /**
     * @var PurchaseRequisitionExpenseList
     */
    protected PurchaseRequisitionExpenseList $expenseList;

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
        "source" => "string",
        "subTotal" => "float",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "vatRegNum" => "string",
        "nexus" => "RecordRef",
        "taxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "estimatedTotal" => "float",
        "status" => "string",
        "currency" => "RecordRef",
        "entity" => "RecordRef",
        "dueDate" => "dateTime",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "memo" => "string",
        "approvalStatus" => "RecordRef",
        "nextApprover" => "RecordRef",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "total" => "float",
        "itemList" => "PurchaseRequisitionItemList",
        "expenseList" => "PurchaseRequisitionExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return PurchaseRequisition
     */
    public function setCreatedDate(string $createdDate): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setLastModifiedDate(string $lastModifiedDate): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setCustomForm(RecordRef $customForm): PurchaseRequisition
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
     * @param string $source
     * @return PurchaseRequisition
     */
    public function setSource(string $source): PurchaseRequisition
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param float $subTotal
     * @return PurchaseRequisition
     */
    public function setSubTotal(float $subTotal): PurchaseRequisition
    {
        $this->subTotal = $subTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal(): float
    {
        return $this->subTotal;
    }

    /**
     * @param string $currencyName
     * @return PurchaseRequisition
     */
    public function setCurrencyName(string $currencyName): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setExchangeRate(float $exchangeRate): PurchaseRequisition
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
     * @param string $vatRegNum
     * @return PurchaseRequisition
     */
    public function setVatRegNum(string $vatRegNum): PurchaseRequisition
    {
        $this->vatRegNum = $vatRegNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatRegNum(): string
    {
        return $this->vatRegNum;
    }

    /**
     * @param RecordRef $nexus
     * @return PurchaseRequisition
     */
    public function setNexus(RecordRef $nexus): PurchaseRequisition
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus(): RecordRef
    {
        return $this->nexus;
    }

    /**
     * @param RecordRef $taxRegNum
     * @return PurchaseRequisition
     */
    public function setTaxRegNum(RecordRef $taxRegNum): PurchaseRequisition
    {
        $this->taxRegNum = $taxRegNum;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxRegNum(): RecordRef
    {
        return $this->taxRegNum;
    }

    /**
     * @param bool $taxRegOverride
     * @return PurchaseRequisition
     */
    public function setTaxRegOverride(bool $taxRegOverride): PurchaseRequisition
    {
        $this->taxRegOverride = $taxRegOverride;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxRegOverride(): bool
    {
        return $this->taxRegOverride;
    }

    /**
     * @param float $estimatedTotal
     * @return PurchaseRequisition
     */
    public function setEstimatedTotal(float $estimatedTotal): PurchaseRequisition
    {
        $this->estimatedTotal = $estimatedTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedTotal(): float
    {
        return $this->estimatedTotal;
    }

    /**
     * @param string $status
     * @return PurchaseRequisition
     */
    public function setStatus(string $status): PurchaseRequisition
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
     * @param RecordRef $currency
     * @return PurchaseRequisition
     */
    public function setCurrency(RecordRef $currency): PurchaseRequisition
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
     * @param RecordRef $entity
     * @return PurchaseRequisition
     */
    public function setEntity(RecordRef $entity): PurchaseRequisition
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
     * @param string $dueDate
     * @return PurchaseRequisition
     */
    public function setDueDate(string $dueDate): PurchaseRequisition
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param string $tranDate
     * @return PurchaseRequisition
     */
    public function setTranDate(string $tranDate): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setTranId(string $tranId): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setMemo(string $memo): PurchaseRequisition
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
     * @param RecordRef $approvalStatus
     * @return PurchaseRequisition
     */
    public function setApprovalStatus(RecordRef $approvalStatus): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setNextApprover(RecordRef $nextApprover): PurchaseRequisition
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
     * @param float $taxTotal
     * @return PurchaseRequisition
     */
    public function setTaxTotal(float $taxTotal): PurchaseRequisition
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
     * @param RecordRef $subsidiary
     * @return PurchaseRequisition
     */
    public function setSubsidiary(RecordRef $subsidiary): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setDepartment(RecordRef $department): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setClass(RecordRef $class): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setLocation(RecordRef $location): PurchaseRequisition
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
     * @param float $total
     * @return PurchaseRequisition
     */
    public function setTotal(float $total): PurchaseRequisition
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
     * @param PurchaseRequisitionItemList $itemList
     * @return PurchaseRequisition
     */
    public function setItemList(PurchaseRequisitionItemList $itemList): PurchaseRequisition
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return PurchaseRequisitionItemList
     */
    public function getItemList(): PurchaseRequisitionItemList
    {
        return $this->itemList;
    }

    /**
     * @param PurchaseRequisitionExpenseList $expenseList
     * @return PurchaseRequisition
     */
    public function setExpenseList(PurchaseRequisitionExpenseList $expenseList): PurchaseRequisition
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return PurchaseRequisitionExpenseList
     */
    public function getExpenseList(): PurchaseRequisitionExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return PurchaseRequisition
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setInternalId(string $internalId): PurchaseRequisition
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
     * @return PurchaseRequisition
     */
    public function setExternalId(string $externalId): PurchaseRequisition
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
