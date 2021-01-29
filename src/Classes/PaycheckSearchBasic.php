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

class PaycheckSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $batchNumber;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $checkDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $employee;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $hasGLImpact;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $payrollItem;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $payrollItemType;

    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "batchNumber" => "SearchLongField",
        "checkDate" => "SearchDateField",
        "employee" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "hasGLImpact" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "payrollItem" => "SearchMultiSelectField",
        "payrollItemType" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $account
     * @return PaycheckSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): PaycheckSearchBasic
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount(): SearchMultiSelectField
    {
        return $this->account;
    }

    /**
     * @param SearchLongField $batchNumber
     * @return PaycheckSearchBasic
     */
    public function setBatchNumber(SearchLongField $batchNumber): PaycheckSearchBasic
    {
        $this->batchNumber = $batchNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getBatchNumber(): SearchLongField
    {
        return $this->batchNumber;
    }

    /**
     * @param SearchDateField $checkDate
     * @return PaycheckSearchBasic
     */
    public function setCheckDate(SearchDateField $checkDate): PaycheckSearchBasic
    {
        $this->checkDate = $checkDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCheckDate(): SearchDateField
    {
        return $this->checkDate;
    }

    /**
     * @param SearchMultiSelectField $employee
     * @return PaycheckSearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee): PaycheckSearchBasic
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployee(): SearchMultiSelectField
    {
        return $this->employee;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return PaycheckSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): PaycheckSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return PaycheckSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): PaycheckSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchBooleanField $hasGLImpact
     * @return PaycheckSearchBasic
     */
    public function setHasGLImpact(SearchBooleanField $hasGLImpact): PaycheckSearchBasic
    {
        $this->hasGLImpact = $hasGLImpact;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHasGLImpact(): SearchBooleanField
    {
        return $this->hasGLImpact;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return PaycheckSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PaycheckSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return PaycheckSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PaycheckSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchMultiSelectField $payrollItem
     * @return PaycheckSearchBasic
     */
    public function setPayrollItem(SearchMultiSelectField $payrollItem): PaycheckSearchBasic
    {
        $this->payrollItem = $payrollItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayrollItem(): SearchMultiSelectField
    {
        return $this->payrollItem;
    }

    /**
     * @param SearchMultiSelectField $payrollItemType
     * @return PaycheckSearchBasic
     */
    public function setPayrollItemType(SearchMultiSelectField $payrollItemType): PaycheckSearchBasic
    {
        $this->payrollItemType = $payrollItemType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayrollItemType(): SearchMultiSelectField
    {
        return $this->payrollItemType;
    }

}
