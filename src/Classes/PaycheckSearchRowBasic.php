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

class PaycheckSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $account;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $amendedDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amount;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $batchNumber;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $checkDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $employee;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $hasGLImpact;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $hours;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $payrollItem;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $payrollItemType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $subjectWages;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $taxableWages;

    static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "amendedDate" => "SearchColumnDateField[]",
        "amount" => "SearchColumnDoubleField[]",
        "batchNumber" => "SearchColumnLongField[]",
        "checkDate" => "SearchColumnDateField[]",
        "employee" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hasGLImpact" => "SearchColumnBooleanField[]",
        "hours" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "payrollItem" => "SearchColumnSelectField[]",
        "payrollItemType" => "SearchColumnSelectField[]",
        "subjectWages" => "SearchColumnDoubleField[]",
        "taxableWages" => "SearchColumnDoubleField[]",
    );

    /**
     * @param SearchColumnSelectField[] $account
     * @return PaycheckSearchRowBasic
     */
    public function setAccount(SearchColumnSelectField $account): PaycheckSearchRowBasic
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount(): array
    {
        return $this->account;
    }

    /**
     * @param SearchColumnDateField[] $amendedDate
     * @return PaycheckSearchRowBasic
     */
    public function setAmendedDate(SearchColumnDateField $amendedDate): PaycheckSearchRowBasic
    {
        $this->amendedDate[] = $amendedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getAmendedDate(): array
    {
        return $this->amendedDate;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return PaycheckSearchRowBasic
     */
    public function setAmount(SearchColumnDoubleField $amount): PaycheckSearchRowBasic
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param SearchColumnLongField[] $batchNumber
     * @return PaycheckSearchRowBasic
     */
    public function setBatchNumber(SearchColumnLongField $batchNumber): PaycheckSearchRowBasic
    {
        $this->batchNumber[] = $batchNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getBatchNumber(): array
    {
        return $this->batchNumber;
    }

    /**
     * @param SearchColumnDateField[] $checkDate
     * @return PaycheckSearchRowBasic
     */
    public function setCheckDate(SearchColumnDateField $checkDate): PaycheckSearchRowBasic
    {
        $this->checkDate[] = $checkDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCheckDate(): array
    {
        return $this->checkDate;
    }

    /**
     * @param SearchColumnSelectField[] $employee
     * @return PaycheckSearchRowBasic
     */
    public function setEmployee(SearchColumnSelectField $employee): PaycheckSearchRowBasic
    {
        $this->employee[] = $employee;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployee(): array
    {
        return $this->employee;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return PaycheckSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): PaycheckSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnBooleanField[] $hasGLImpact
     * @return PaycheckSearchRowBasic
     */
    public function setHasGLImpact(SearchColumnBooleanField $hasGLImpact): PaycheckSearchRowBasic
    {
        $this->hasGLImpact[] = $hasGLImpact;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHasGLImpact(): array
    {
        return $this->hasGLImpact;
    }

    /**
     * @param SearchColumnDoubleField[] $hours
     * @return PaycheckSearchRowBasic
     */
    public function setHours(SearchColumnDoubleField $hours): PaycheckSearchRowBasic
    {
        $this->hours[] = $hours;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getHours(): array
    {
        return $this->hours;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return PaycheckSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PaycheckSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $payrollItem
     * @return PaycheckSearchRowBasic
     */
    public function setPayrollItem(SearchColumnSelectField $payrollItem): PaycheckSearchRowBasic
    {
        $this->payrollItem[] = $payrollItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayrollItem(): array
    {
        return $this->payrollItem;
    }

    /**
     * @param SearchColumnSelectField[] $payrollItemType
     * @return PaycheckSearchRowBasic
     */
    public function setPayrollItemType(SearchColumnSelectField $payrollItemType): PaycheckSearchRowBasic
    {
        $this->payrollItemType[] = $payrollItemType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayrollItemType(): array
    {
        return $this->payrollItemType;
    }

    /**
     * @param SearchColumnDoubleField[] $subjectWages
     * @return PaycheckSearchRowBasic
     */
    public function setSubjectWages(SearchColumnDoubleField $subjectWages): PaycheckSearchRowBasic
    {
        $this->subjectWages[] = $subjectWages;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSubjectWages(): array
    {
        return $this->subjectWages;
    }

    /**
     * @param SearchColumnDoubleField[] $taxableWages
     * @return PaycheckSearchRowBasic
     */
    public function setTaxableWages(SearchColumnDoubleField $taxableWages): PaycheckSearchRowBasic
    {
        $this->taxableWages[] = $taxableWages;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxableWages(): array
    {
        return $this->taxableWages;
    }

}
