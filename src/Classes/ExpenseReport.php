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

class ExpenseReport extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $expenseReportCurrency;

    /**
     * @var float
     */
    protected float $expenseReportExchangeRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var string
     */
    protected string $taxPointDate;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $acctCorpCardExp;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $dueDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $approvalStatus;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $nextApprover;

    /**
     * @var float
     */
    protected float $advance;

    protected $tax1Amt;
    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $complete;

    /**
     * @var bool
     */
    protected bool $supervisorApproval;

    /**
     * @var bool
     */
    protected bool $accountingApproval;

    /**
     * @var bool
     */
    protected bool $useMultiCurrency;

    protected $tax2Amt;
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
     * @var ExpenseReportExpenseList
     */
    protected ExpenseReportExpenseList $expenseList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var TaxDetailsList
     */
    protected TaxDetailsList $taxDetailsList;

    /**
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiaryTaxRegNum;

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
        "entity" => "RecordRef",
        "expenseReportCurrency" => "RecordRef",
        "expenseReportExchangeRate" => "float",
        "subsidiary" => "RecordRef",
        "taxPointDate" => "dateTime",
        "tranId" => "string",
        "acctCorpCardExp" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "dueDate" => "dateTime",
        "approvalStatus" => "RecordRef",
        "total" => "float",
        "nextApprover" => "RecordRef",
        "advance" => "float",
        "tax1Amt" => "float",
        "amount" => "float",
        "memo" => "string",
        "complete" => "boolean",
        "supervisorApproval" => "boolean",
        "accountingApproval" => "boolean",
        "useMultiCurrency" => "boolean",
        "tax2Amt" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "expenseList" => "ExpenseReportExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return ExpenseReport
     */
    public function setCreatedDate(string $createdDate): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setLastModifiedDate(string $lastModifiedDate): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setStatus(string $status): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setCustomForm(RecordRef $customForm): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setAccount(RecordRef $account): ExpenseReport
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
     * @param RecordRef $entity
     * @return ExpenseReport
     */
    public function setEntity(RecordRef $entity): ExpenseReport
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
     * @param RecordRef $expenseReportCurrency
     * @return ExpenseReport
     */
    public function setExpenseReportCurrency(RecordRef $expenseReportCurrency): ExpenseReport
    {
        $this->expenseReportCurrency = $expenseReportCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseReportCurrency(): RecordRef
    {
        return $this->expenseReportCurrency;
    }

    /**
     * @param float $expenseReportExchangeRate
     * @return ExpenseReport
     */
    public function setExpenseReportExchangeRate(float $expenseReportExchangeRate): ExpenseReport
    {
        $this->expenseReportExchangeRate = $expenseReportExchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getExpenseReportExchangeRate(): float
    {
        return $this->expenseReportExchangeRate;
    }

    /**
     * @param RecordRef $subsidiary
     * @return ExpenseReport
     */
    public function setSubsidiary(RecordRef $subsidiary): ExpenseReport
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
     * @param string $taxPointDate
     * @return ExpenseReport
     */
    public function setTaxPointDate(string $taxPointDate): ExpenseReport
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxPointDate(): string
    {
        return $this->taxPointDate;
    }

    /**
     * @param string $tranId
     * @return ExpenseReport
     */
    public function setTranId(string $tranId): ExpenseReport
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
     * @param RecordRef $acctCorpCardExp
     * @return ExpenseReport
     */
    public function setAcctCorpCardExp(RecordRef $acctCorpCardExp): ExpenseReport
    {
        $this->acctCorpCardExp = $acctCorpCardExp;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAcctCorpCardExp(): RecordRef
    {
        return $this->acctCorpCardExp;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return ExpenseReport
     */
    public function setPostingPeriod(RecordRef $postingPeriod): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setTranDate(string $tranDate): ExpenseReport
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
     * @param string $dueDate
     * @return ExpenseReport
     */
    public function setDueDate(string $dueDate): ExpenseReport
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
     * @param RecordRef $approvalStatus
     * @return ExpenseReport
     */
    public function setApprovalStatus(RecordRef $approvalStatus): ExpenseReport
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
     * @param float $total
     * @return ExpenseReport
     */
    public function setTotal(float $total): ExpenseReport
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
     * @param RecordRef $nextApprover
     * @return ExpenseReport
     */
    public function setNextApprover(RecordRef $nextApprover): ExpenseReport
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
     * @param float $advance
     * @return ExpenseReport
     */
    public function setAdvance(float $advance): ExpenseReport
    {
        $this->advance = $advance;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdvance(): float
    {
        return $this->advance;
    }

    /**
     * @param float $amount
     * @return ExpenseReport
     */
    public function setAmount(float $amount): ExpenseReport
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param string $memo
     * @return ExpenseReport
     */
    public function setMemo(string $memo): ExpenseReport
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
     * @param bool $complete
     * @return ExpenseReport
     */
    public function setComplete(bool $complete): ExpenseReport
    {
        $this->complete = $complete;
        return $this;
    }

    /**
     * @return bool
     */
    public function getComplete(): bool
    {
        return $this->complete;
    }

    /**
     * @param bool $supervisorApproval
     * @return ExpenseReport
     */
    public function setSupervisorApproval(bool $supervisorApproval): ExpenseReport
    {
        $this->supervisorApproval = $supervisorApproval;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSupervisorApproval(): bool
    {
        return $this->supervisorApproval;
    }

    /**
     * @param bool $accountingApproval
     * @return ExpenseReport
     */
    public function setAccountingApproval(bool $accountingApproval): ExpenseReport
    {
        $this->accountingApproval = $accountingApproval;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAccountingApproval(): bool
    {
        return $this->accountingApproval;
    }

    /**
     * @param bool $useMultiCurrency
     * @return ExpenseReport
     */
    public function setUseMultiCurrency(bool $useMultiCurrency): ExpenseReport
    {
        $this->useMultiCurrency = $useMultiCurrency;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseMultiCurrency(): bool
    {
        return $this->useMultiCurrency;
    }

    /**
     * @param RecordRef $department
     * @return ExpenseReport
     */
    public function setDepartment(RecordRef $department): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setClass(RecordRef $class): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setLocation(RecordRef $location): ExpenseReport
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
     * @param ExpenseReportExpenseList $expenseList
     * @return ExpenseReport
     */
    public function setExpenseList(ExpenseReportExpenseList $expenseList): ExpenseReport
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return ExpenseReportExpenseList
     */
    public function getExpenseList(): ExpenseReportExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return ExpenseReport
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): ExpenseReport
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
     * @param TaxDetailsList $taxDetailsList
     * @return ExpenseReport
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): ExpenseReport
    {
        $this->taxDetailsList = $taxDetailsList;
        return $this;
    }

    /**
     * @return TaxDetailsList
     */
    public function getTaxDetailsList(): TaxDetailsList
    {
        return $this->taxDetailsList;
    }

    /**
     * @param RecordRef $nexus
     * @return ExpenseReport
     */
    public function setNexus(RecordRef $nexus): ExpenseReport
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
     * @param RecordRef $subsidiaryTaxRegNum
     * @return ExpenseReport
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): ExpenseReport
    {
        $this->subsidiaryTaxRegNum = $subsidiaryTaxRegNum;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiaryTaxRegNum(): RecordRef
    {
        return $this->subsidiaryTaxRegNum;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ExpenseReport
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setInternalId(string $internalId): ExpenseReport
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
     * @return ExpenseReport
     */
    public function setExternalId(string $externalId): ExpenseReport
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
