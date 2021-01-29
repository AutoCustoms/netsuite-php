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

class BillingAccount extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $idNumber;

    /**
     * @var bool
     */
    protected bool $customerDefault;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $inactive;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $createdBy;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

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
    protected RecordRef $billingSchedule;

    /**
     * @var BillingAccountFrequency
     */
    protected BillingAccountFrequency $frequency;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $lastBillDate;

    /**
     * @var string
     */
    protected string $lastBillCycleDate;

    /**
     * @var string
     */
    protected string $nextBillCycleDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $invoiceForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $cashSaleForm;

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
        "customForm" => "RecordRef",
        "idNumber" => "string",
        "customerDefault" => "boolean",
        "customer" => "RecordRef",
        "subsidiary" => "RecordRef",
        "name" => "string",
        "inactive" => "boolean",
        "memo" => "string",
        "createdDate" => "dateTime",
        "createdBy" => "string",
        "currency" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "frequency" => "BillingAccountFrequency",
        "startDate" => "dateTime",
        "lastBillDate" => "dateTime",
        "lastBillCycleDate" => "dateTime",
        "nextBillCycleDate" => "dateTime",
        "invoiceForm" => "RecordRef",
        "cashSaleForm" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return BillingAccount
     */
    public function setCustomForm(RecordRef $customForm): BillingAccount
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
     * @param string $idNumber
     * @return BillingAccount
     */
    public function setIdNumber(string $idNumber): BillingAccount
    {
        $this->idNumber = $idNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdNumber(): string
    {
        return $this->idNumber;
    }

    /**
     * @param bool $customerDefault
     * @return BillingAccount
     */
    public function setCustomerDefault(bool $customerDefault): BillingAccount
    {
        $this->customerDefault = $customerDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCustomerDefault(): bool
    {
        return $this->customerDefault;
    }

    /**
     * @param RecordRef $customer
     * @return BillingAccount
     */
    public function setCustomer(RecordRef $customer): BillingAccount
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
     * @param RecordRef $subsidiary
     * @return BillingAccount
     */
    public function setSubsidiary(RecordRef $subsidiary): BillingAccount
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
     * @param string $name
     * @return BillingAccount
     */
    public function setName(string $name): BillingAccount
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param bool $inactive
     * @return BillingAccount
     */
    public function setInactive(bool $inactive): BillingAccount
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInactive(): bool
    {
        return $this->inactive;
    }

    /**
     * @param string $memo
     * @return BillingAccount
     */
    public function setMemo(string $memo): BillingAccount
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
     * @param string $createdDate
     * @return BillingAccount
     */
    public function setCreatedDate(string $createdDate): BillingAccount
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
     * @param string $createdBy
     * @return BillingAccount
     */
    public function setCreatedBy(string $createdBy): BillingAccount
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    /**
     * @param RecordRef $currency
     * @return BillingAccount
     */
    public function setCurrency(RecordRef $currency): BillingAccount
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
     * @param RecordRef $class
     * @return BillingAccount
     */
    public function setClass(RecordRef $class): BillingAccount
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
     * @param RecordRef $department
     * @return BillingAccount
     */
    public function setDepartment(RecordRef $department): BillingAccount
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
     * @return BillingAccount
     */
    public function setLocation(RecordRef $location): BillingAccount
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
     * @param RecordRef $billingSchedule
     * @return BillingAccount
     */
    public function setBillingSchedule(RecordRef $billingSchedule): BillingAccount
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule(): RecordRef
    {
        return $this->billingSchedule;
    }

    /**
     * @param BillingAccountFrequency $frequency
     * @return BillingAccount
     */
    public function setFrequency(BillingAccountFrequency $frequency): BillingAccount
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return BillingAccountFrequency
     */
    public function getFrequency(): BillingAccountFrequency
    {
        return $this->frequency;
    }

    /**
     * @param string $startDate
     * @return BillingAccount
     */
    public function setStartDate(string $startDate): BillingAccount
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $lastBillDate
     * @return BillingAccount
     */
    public function setLastBillDate(string $lastBillDate): BillingAccount
    {
        $this->lastBillDate = $lastBillDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastBillDate(): string
    {
        return $this->lastBillDate;
    }

    /**
     * @param string $lastBillCycleDate
     * @return BillingAccount
     */
    public function setLastBillCycleDate(string $lastBillCycleDate): BillingAccount
    {
        $this->lastBillCycleDate = $lastBillCycleDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastBillCycleDate(): string
    {
        return $this->lastBillCycleDate;
    }

    /**
     * @param string $nextBillCycleDate
     * @return BillingAccount
     */
    public function setNextBillCycleDate(string $nextBillCycleDate): BillingAccount
    {
        $this->nextBillCycleDate = $nextBillCycleDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextBillCycleDate(): string
    {
        return $this->nextBillCycleDate;
    }

    /**
     * @param RecordRef $invoiceForm
     * @return BillingAccount
     */
    public function setInvoiceForm(RecordRef $invoiceForm): BillingAccount
    {
        $this->invoiceForm = $invoiceForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInvoiceForm(): RecordRef
    {
        return $this->invoiceForm;
    }

    /**
     * @param RecordRef $cashSaleForm
     * @return BillingAccount
     */
    public function setCashSaleForm(RecordRef $cashSaleForm): BillingAccount
    {
        $this->cashSaleForm = $cashSaleForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCashSaleForm(): RecordRef
    {
        return $this->cashSaleForm;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return BillingAccount
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): BillingAccount
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
     * @return BillingAccount
     */
    public function setInternalId(string $internalId): BillingAccount
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
     * @return BillingAccount
     */
    public function setExternalId(string $externalId): BillingAccount
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
