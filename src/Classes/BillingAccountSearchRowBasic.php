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

class BillingAccountSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingSchedule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $cashSaleForm;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $customer;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $customerDefault;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $frequency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $idNumber;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $inactive;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $invoiceForm;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastBillCycleDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastBillDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $nextBillCycleDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "billingSchedule" => "SearchColumnSelectField[]",
        "cashSaleForm" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "customerDefault" => "SearchColumnBooleanField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "frequency" => "SearchColumnEnumSelectField[]",
        "idNumber" => "SearchColumnStringField[]",
        "inactive" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "invoiceForm" => "SearchColumnSelectField[]",
        "lastBillCycleDate" => "SearchColumnDateField[]",
        "lastBillDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "nextBillCycleDate" => "SearchColumnDateField[]",
        "startDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $billingSchedule
     * @return BillingAccountSearchRowBasic
     */
    public function setBillingSchedule(SearchColumnSelectField $billingSchedule): BillingAccountSearchRowBasic
    {
        $this->billingSchedule[] = $billingSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingSchedule(): array
    {
        return $this->billingSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $cashSaleForm
     * @return BillingAccountSearchRowBasic
     */
    public function setCashSaleForm(SearchColumnSelectField $cashSaleForm): BillingAccountSearchRowBasic
    {
        $this->cashSaleForm[] = $cashSaleForm;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCashSaleForm(): array
    {
        return $this->cashSaleForm;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return BillingAccountSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): BillingAccountSearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return BillingAccountSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): BillingAccountSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return BillingAccountSearchRowBasic
     */
    public function setCustomer(SearchColumnSelectField $customer): BillingAccountSearchRowBasic
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }

    /**
     * @param SearchColumnBooleanField[] $customerDefault
     * @return BillingAccountSearchRowBasic
     */
    public function setCustomerDefault(SearchColumnBooleanField $customerDefault): BillingAccountSearchRowBasic
    {
        $this->customerDefault[] = $customerDefault;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCustomerDefault(): array
    {
        return $this->customerDefault;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return BillingAccountSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): BillingAccountSearchRowBasic
    {
        $this->dateCreated[] = $dateCreated;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated(): array
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return BillingAccountSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): BillingAccountSearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return BillingAccountSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): BillingAccountSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $frequency
     * @return BillingAccountSearchRowBasic
     */
    public function setFrequency(SearchColumnEnumSelectField $frequency): BillingAccountSearchRowBasic
    {
        $this->frequency[] = $frequency;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFrequency(): array
    {
        return $this->frequency;
    }

    /**
     * @param SearchColumnStringField[] $idNumber
     * @return BillingAccountSearchRowBasic
     */
    public function setIdNumber(SearchColumnStringField $idNumber): BillingAccountSearchRowBasic
    {
        $this->idNumber[] = $idNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIdNumber(): array
    {
        return $this->idNumber;
    }

    /**
     * @param SearchColumnBooleanField[] $inactive
     * @return BillingAccountSearchRowBasic
     */
    public function setInactive(SearchColumnBooleanField $inactive): BillingAccountSearchRowBasic
    {
        $this->inactive[] = $inactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInactive(): array
    {
        return $this->inactive;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return BillingAccountSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): BillingAccountSearchRowBasic
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
     * @param SearchColumnSelectField[] $invoiceForm
     * @return BillingAccountSearchRowBasic
     */
    public function setInvoiceForm(SearchColumnSelectField $invoiceForm): BillingAccountSearchRowBasic
    {
        $this->invoiceForm[] = $invoiceForm;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInvoiceForm(): array
    {
        return $this->invoiceForm;
    }

    /**
     * @param SearchColumnDateField[] $lastBillCycleDate
     * @return BillingAccountSearchRowBasic
     */
    public function setLastBillCycleDate(SearchColumnDateField $lastBillCycleDate): BillingAccountSearchRowBasic
    {
        $this->lastBillCycleDate[] = $lastBillCycleDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastBillCycleDate(): array
    {
        return $this->lastBillCycleDate;
    }

    /**
     * @param SearchColumnDateField[] $lastBillDate
     * @return BillingAccountSearchRowBasic
     */
    public function setLastBillDate(SearchColumnDateField $lastBillDate): BillingAccountSearchRowBasic
    {
        $this->lastBillDate[] = $lastBillDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastBillDate(): array
    {
        return $this->lastBillDate;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return BillingAccountSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): BillingAccountSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return BillingAccountSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): BillingAccountSearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return BillingAccountSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): BillingAccountSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnDateField[] $nextBillCycleDate
     * @return BillingAccountSearchRowBasic
     */
    public function setNextBillCycleDate(SearchColumnDateField $nextBillCycleDate): BillingAccountSearchRowBasic
    {
        $this->nextBillCycleDate[] = $nextBillCycleDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextBillCycleDate(): array
    {
        return $this->nextBillCycleDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return BillingAccountSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): BillingAccountSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return BillingAccountSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): BillingAccountSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return BillingAccountSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): BillingAccountSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
