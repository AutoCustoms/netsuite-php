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

class PaycheckJournal extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

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
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $employee;

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
    protected RecordRef $account;

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
     * @var PaycheckJournalCompanyContributionList
     */
    protected PaycheckJournalCompanyContributionList $companyContributionList;

    /**
     * @var PaycheckJournalDeductionList
     */
    protected PaycheckJournalDeductionList $deductionList;

    /**
     * @var PaycheckJournalEmployeeTaxList
     */
    protected PaycheckJournalEmployeeTaxList $employeeTaxList;

    /**
     * @var PaycheckJournalCompanyTaxList
     */
    protected PaycheckJournalCompanyTaxList $companyTaxList;

    /**
     * @var PaycheckJournalEarningList
     */
    protected PaycheckJournalEarningList $earningList;

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
        "subsidiary" => "RecordRef",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "employee" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "account" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "companyContributionList" => "PaycheckJournalCompanyContributionList",
        "deductionList" => "PaycheckJournalDeductionList",
        "employeeTaxList" => "PaycheckJournalEmployeeTaxList",
        "companyTaxList" => "PaycheckJournalCompanyTaxList",
        "earningList" => "PaycheckJournalEarningList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $subsidiary
     * @return PaycheckJournal
     */
    public function setSubsidiary(RecordRef $subsidiary): PaycheckJournal
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
     * @param RecordRef $currency
     * @return PaycheckJournal
     */
    public function setCurrency(RecordRef $currency): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setExchangeRate(float $exchangeRate): PaycheckJournal
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
     * @param string $createdDate
     * @return PaycheckJournal
     */
    public function setCreatedDate(string $createdDate): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setLastModifiedDate(string $lastModifiedDate): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setCustomForm(RecordRef $customForm): PaycheckJournal
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
     * @param string $tranId
     * @return PaycheckJournal
     */
    public function setTranId(string $tranId): PaycheckJournal
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
     * @param RecordRef $employee
     * @return PaycheckJournal
     */
    public function setEmployee(RecordRef $employee): PaycheckJournal
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployee(): RecordRef
    {
        return $this->employee;
    }

    /**
     * @param string $tranDate
     * @return PaycheckJournal
     */
    public function setTranDate(string $tranDate): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setPostingPeriod(RecordRef $postingPeriod): PaycheckJournal
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
     * @param RecordRef $account
     * @return PaycheckJournal
     */
    public function setAccount(RecordRef $account): PaycheckJournal
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
     * @param RecordRef $department
     * @return PaycheckJournal
     */
    public function setDepartment(RecordRef $department): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setClass(RecordRef $class): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setLocation(RecordRef $location): PaycheckJournal
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
     * @param PaycheckJournalCompanyContributionList $companyContributionList
     * @return PaycheckJournal
     */
    public function setCompanyContributionList(PaycheckJournalCompanyContributionList $companyContributionList): PaycheckJournal
    {
        $this->companyContributionList = $companyContributionList;
        return $this;
    }

    /**
     * @return PaycheckJournalCompanyContributionList
     */
    public function getCompanyContributionList(): PaycheckJournalCompanyContributionList
    {
        return $this->companyContributionList;
    }

    /**
     * @param PaycheckJournalDeductionList $deductionList
     * @return PaycheckJournal
     */
    public function setDeductionList(PaycheckJournalDeductionList $deductionList): PaycheckJournal
    {
        $this->deductionList = $deductionList;
        return $this;
    }

    /**
     * @return PaycheckJournalDeductionList
     */
    public function getDeductionList(): PaycheckJournalDeductionList
    {
        return $this->deductionList;
    }

    /**
     * @param PaycheckJournalEmployeeTaxList $employeeTaxList
     * @return PaycheckJournal
     */
    public function setEmployeeTaxList(PaycheckJournalEmployeeTaxList $employeeTaxList): PaycheckJournal
    {
        $this->employeeTaxList = $employeeTaxList;
        return $this;
    }

    /**
     * @return PaycheckJournalEmployeeTaxList
     */
    public function getEmployeeTaxList(): PaycheckJournalEmployeeTaxList
    {
        return $this->employeeTaxList;
    }

    /**
     * @param PaycheckJournalCompanyTaxList $companyTaxList
     * @return PaycheckJournal
     */
    public function setCompanyTaxList(PaycheckJournalCompanyTaxList $companyTaxList): PaycheckJournal
    {
        $this->companyTaxList = $companyTaxList;
        return $this;
    }

    /**
     * @return PaycheckJournalCompanyTaxList
     */
    public function getCompanyTaxList(): PaycheckJournalCompanyTaxList
    {
        return $this->companyTaxList;
    }

    /**
     * @param PaycheckJournalEarningList $earningList
     * @return PaycheckJournal
     */
    public function setEarningList(PaycheckJournalEarningList $earningList): PaycheckJournal
    {
        $this->earningList = $earningList;
        return $this;
    }

    /**
     * @return PaycheckJournalEarningList
     */
    public function getEarningList(): PaycheckJournalEarningList
    {
        return $this->earningList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return PaycheckJournal
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setInternalId(string $internalId): PaycheckJournal
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
     * @return PaycheckJournal
     */
    public function setExternalId(string $externalId): PaycheckJournal
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
