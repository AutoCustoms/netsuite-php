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

class BillingAccountSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingSchedule;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $cashSaleForm;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $customerDefault;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $frequency;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $idNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $inactive;

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
    protected SearchMultiSelectField $invoiceForm;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastBillCycleDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastBillDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $nextBillCycleDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "billingSchedule" => "SearchMultiSelectField",
        "cashSaleForm" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "customerDefault" => "SearchBooleanField",
        "dateCreated" => "SearchDateField",
        "department" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "frequency" => "SearchEnumMultiSelectField",
        "idNumber" => "SearchStringField",
        "inactive" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "invoiceForm" => "SearchMultiSelectField",
        "lastBillCycleDate" => "SearchDateField",
        "lastBillDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
        "nextBillCycleDate" => "SearchDateField",
        "startDate" => "SearchDateField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $billingSchedule
     * @return BillingAccountSearchBasic
     */
    public function setBillingSchedule(SearchMultiSelectField $billingSchedule): BillingAccountSearchBasic
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule(): SearchMultiSelectField
    {
        return $this->billingSchedule;
    }

    /**
     * @param SearchMultiSelectField $cashSaleForm
     * @return BillingAccountSearchBasic
     */
    public function setCashSaleForm(SearchMultiSelectField $cashSaleForm): BillingAccountSearchBasic
    {
        $this->cashSaleForm = $cashSaleForm;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCashSaleForm(): SearchMultiSelectField
    {
        return $this->cashSaleForm;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return BillingAccountSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): BillingAccountSearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return BillingAccountSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): BillingAccountSearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return BillingAccountSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): BillingAccountSearchBasic
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer(): SearchMultiSelectField
    {
        return $this->customer;
    }

    /**
     * @param SearchBooleanField $customerDefault
     * @return BillingAccountSearchBasic
     */
    public function setCustomerDefault(SearchBooleanField $customerDefault): BillingAccountSearchBasic
    {
        $this->customerDefault = $customerDefault;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCustomerDefault(): SearchBooleanField
    {
        return $this->customerDefault;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return BillingAccountSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): BillingAccountSearchBasic
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated(): SearchDateField
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return BillingAccountSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): BillingAccountSearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return BillingAccountSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): BillingAccountSearchBasic
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
     * @return BillingAccountSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): BillingAccountSearchBasic
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
     * @param SearchEnumMultiSelectField $frequency
     * @return BillingAccountSearchBasic
     */
    public function setFrequency(SearchEnumMultiSelectField $frequency): BillingAccountSearchBasic
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFrequency(): SearchEnumMultiSelectField
    {
        return $this->frequency;
    }

    /**
     * @param SearchStringField $idNumber
     * @return BillingAccountSearchBasic
     */
    public function setIdNumber(SearchStringField $idNumber): BillingAccountSearchBasic
    {
        $this->idNumber = $idNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getIdNumber(): SearchStringField
    {
        return $this->idNumber;
    }

    /**
     * @param SearchBooleanField $inactive
     * @return BillingAccountSearchBasic
     */
    public function setInactive(SearchBooleanField $inactive): BillingAccountSearchBasic
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInactive(): SearchBooleanField
    {
        return $this->inactive;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return BillingAccountSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): BillingAccountSearchBasic
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
     * @return BillingAccountSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): BillingAccountSearchBasic
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
     * @param SearchMultiSelectField $invoiceForm
     * @return BillingAccountSearchBasic
     */
    public function setInvoiceForm(SearchMultiSelectField $invoiceForm): BillingAccountSearchBasic
    {
        $this->invoiceForm = $invoiceForm;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInvoiceForm(): SearchMultiSelectField
    {
        return $this->invoiceForm;
    }

    /**
     * @param SearchDateField $lastBillCycleDate
     * @return BillingAccountSearchBasic
     */
    public function setLastBillCycleDate(SearchDateField $lastBillCycleDate): BillingAccountSearchBasic
    {
        $this->lastBillCycleDate = $lastBillCycleDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastBillCycleDate(): SearchDateField
    {
        return $this->lastBillCycleDate;
    }

    /**
     * @param SearchDateField $lastBillDate
     * @return BillingAccountSearchBasic
     */
    public function setLastBillDate(SearchDateField $lastBillDate): BillingAccountSearchBasic
    {
        $this->lastBillDate = $lastBillDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastBillDate(): SearchDateField
    {
        return $this->lastBillDate;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return BillingAccountSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): BillingAccountSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $memo
     * @return BillingAccountSearchBasic
     */
    public function setMemo(SearchStringField $memo): BillingAccountSearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchStringField $name
     * @return BillingAccountSearchBasic
     */
    public function setName(SearchStringField $name): BillingAccountSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchDateField $nextBillCycleDate
     * @return BillingAccountSearchBasic
     */
    public function setNextBillCycleDate(SearchDateField $nextBillCycleDate): BillingAccountSearchBasic
    {
        $this->nextBillCycleDate = $nextBillCycleDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextBillCycleDate(): SearchDateField
    {
        return $this->nextBillCycleDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return BillingAccountSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): BillingAccountSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return BillingAccountSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): BillingAccountSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return BillingAccountSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): BillingAccountSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
