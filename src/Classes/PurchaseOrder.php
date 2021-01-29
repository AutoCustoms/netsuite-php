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

class PurchaseOrder extends Record {
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
    protected RecordRef $nexus;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiaryTaxRegNum;

    /**
     * @var bool
     */
    protected bool $taxRegOverride;

    /**
     * @var bool
     */
    protected bool $taxDetailsOverride;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseContract;

    /**
     * @var string
     */
    protected string $vatRegNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $employee;

    /**
     * @var bool
     */
    protected bool $supervisorApproval;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $entityTaxRegNum;

    /**
     * @var string
     */
    protected string $taxPointDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $terms;

    /**
     * @var string
     */
    protected string $dueDate;

    /**
     * @var string
     */
    protected string $otherRefNum;

    /**
     * @var float
     */
    protected float $availableVendorCredit;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $approvalStatus;

    /**
     * @var float
     */
    protected float $exchangeRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $nextApprover;

    /**
     * @var string
     */
    protected string $source;

    /**
     * @var string
     */
    protected string $currencyName;

    /**
     * @var bool
     */
    protected bool $toBePrinted;

    /**
     * @var bool
     */
    protected bool $toBeEmailed;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var bool
     */
    protected bool $toBeFaxed;

    /**
     * @var string
     */
    protected string $fax;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var Address
     */
    protected Address $billingAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $billAddressList;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipTo;

    /**
     * @var float
     */
    protected float $subTotal;

    /**
     * @var float
     */
    protected float $taxTotal;

    protected $tax2Total;
    /**
     * @var Address
     */
    protected Address $shippingAddress;

    /**
     * @var bool
     */
    protected bool $shipIsResidential;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipAddressList;

    /**
     * @var string
     */
    protected string $fob;

    /**
     * @var string
     */
    protected string $shipDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $incoterm;

    /**
     * @var string
     */
    protected string $trackingNumbers;

    /**
     * @var string
     */
    protected string $linkedTrackingNumbers;

    /**
     * @var float
     */
    protected float $total;

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
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $intercoTransaction;

    /**
     * @var IntercoStatus
     */
    protected IntercoStatus $intercoStatus;

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var PurchaseOrderOrderStatus
     */
    protected PurchaseOrderOrderStatus $orderStatus;

    /**
     * @var PurchaseOrderItemList
     */
    protected PurchaseOrderItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var PurchaseOrderExpenseList
     */
    protected PurchaseOrderExpenseList $expenseList;

    /**
     * @var TaxDetailsList
     */
    protected TaxDetailsList $taxDetailsList;

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
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "purchaseContract" => "RecordRef",
        "vatRegNum" => "string",
        "employee" => "RecordRef",
        "supervisorApproval" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "createdFrom" => "RecordRef",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "otherRefNum" => "string",
        "availableVendorCredit" => "float",
        "memo" => "string",
        "approvalStatus" => "RecordRef",
        "exchangeRate" => "float",
        "nextApprover" => "RecordRef",
        "source" => "string",
        "currencyName" => "string",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "currency" => "RecordRef",
        "shipTo" => "RecordRef",
        "subTotal" => "float",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "incoterm" => "RecordRef",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "total" => "float",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "status" => "string",
        "orderStatus" => "PurchaseOrderOrderStatus",
        "itemList" => "PurchaseOrderItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "expenseList" => "PurchaseOrderExpenseList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return PurchaseOrder
     */
    public function setCreatedDate(string $createdDate): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setLastModifiedDate(string $lastModifiedDate): PurchaseOrder
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
     * @param RecordRef $nexus
     * @return PurchaseOrder
     */
    public function setNexus(RecordRef $nexus): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setSubsidiaryTaxRegNum(RecordRef $subsidiaryTaxRegNum): PurchaseOrder
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
     * @param bool $taxRegOverride
     * @return PurchaseOrder
     */
    public function setTaxRegOverride(bool $taxRegOverride): PurchaseOrder
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
     * @param bool $taxDetailsOverride
     * @return PurchaseOrder
     */
    public function setTaxDetailsOverride(bool $taxDetailsOverride): PurchaseOrder
    {
        $this->taxDetailsOverride = $taxDetailsOverride;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxDetailsOverride(): bool
    {
        return $this->taxDetailsOverride;
    }

    /**
     * @param RecordRef $customForm
     * @return PurchaseOrder
     */
    public function setCustomForm(RecordRef $customForm): PurchaseOrder
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
     * @param RecordRef $entity
     * @return PurchaseOrder
     */
    public function setEntity(RecordRef $entity): PurchaseOrder
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
     * @param RecordRef $purchaseContract
     * @return PurchaseOrder
     */
    public function setPurchaseContract(RecordRef $purchaseContract): PurchaseOrder
    {
        $this->purchaseContract = $purchaseContract;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseContract(): RecordRef
    {
        return $this->purchaseContract;
    }

    /**
     * @param string $vatRegNum
     * @return PurchaseOrder
     */
    public function setVatRegNum(string $vatRegNum): PurchaseOrder
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
     * @param RecordRef $employee
     * @return PurchaseOrder
     */
    public function setEmployee(RecordRef $employee): PurchaseOrder
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
     * @param bool $supervisorApproval
     * @return PurchaseOrder
     */
    public function setSupervisorApproval(bool $supervisorApproval): PurchaseOrder
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
     * @param string $tranDate
     * @return PurchaseOrder
     */
    public function setTranDate(string $tranDate): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setTranId(string $tranId): PurchaseOrder
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
     * @param RecordRef $entityTaxRegNum
     * @return PurchaseOrder
     */
    public function setEntityTaxRegNum(RecordRef $entityTaxRegNum): PurchaseOrder
    {
        $this->entityTaxRegNum = $entityTaxRegNum;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityTaxRegNum(): RecordRef
    {
        return $this->entityTaxRegNum;
    }

    /**
     * @param string $taxPointDate
     * @return PurchaseOrder
     */
    public function setTaxPointDate(string $taxPointDate): PurchaseOrder
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
     * @param RecordRef $createdFrom
     * @return PurchaseOrder
     */
    public function setCreatedFrom(RecordRef $createdFrom): PurchaseOrder
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param RecordRef $terms
     * @return PurchaseOrder
     */
    public function setTerms(RecordRef $terms): PurchaseOrder
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerms(): RecordRef
    {
        return $this->terms;
    }

    /**
     * @param string $dueDate
     * @return PurchaseOrder
     */
    public function setDueDate(string $dueDate): PurchaseOrder
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
     * @param string $otherRefNum
     * @return PurchaseOrder
     */
    public function setOtherRefNum(string $otherRefNum): PurchaseOrder
    {
        $this->otherRefNum = $otherRefNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherRefNum(): string
    {
        return $this->otherRefNum;
    }

    /**
     * @param float $availableVendorCredit
     * @return PurchaseOrder
     */
    public function setAvailableVendorCredit(float $availableVendorCredit): PurchaseOrder
    {
        $this->availableVendorCredit = $availableVendorCredit;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvailableVendorCredit(): float
    {
        return $this->availableVendorCredit;
    }

    /**
     * @param string $memo
     * @return PurchaseOrder
     */
    public function setMemo(string $memo): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setApprovalStatus(RecordRef $approvalStatus): PurchaseOrder
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
     * @param float $exchangeRate
     * @return PurchaseOrder
     */
    public function setExchangeRate(float $exchangeRate): PurchaseOrder
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
     * @param RecordRef $nextApprover
     * @return PurchaseOrder
     */
    public function setNextApprover(RecordRef $nextApprover): PurchaseOrder
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
     * @param string $source
     * @return PurchaseOrder
     */
    public function setSource(string $source): PurchaseOrder
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
     * @param string $currencyName
     * @return PurchaseOrder
     */
    public function setCurrencyName(string $currencyName): PurchaseOrder
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
     * @param bool $toBePrinted
     * @return PurchaseOrder
     */
    public function setToBePrinted(bool $toBePrinted): PurchaseOrder
    {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToBePrinted(): bool
    {
        return $this->toBePrinted;
    }

    /**
     * @param bool $toBeEmailed
     * @return PurchaseOrder
     */
    public function setToBeEmailed(bool $toBeEmailed): PurchaseOrder
    {
        $this->toBeEmailed = $toBeEmailed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToBeEmailed(): bool
    {
        return $this->toBeEmailed;
    }

    /**
     * @param string $email
     * @return PurchaseOrder
     */
    public function setEmail(string $email): PurchaseOrder
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param bool $toBeFaxed
     * @return PurchaseOrder
     */
    public function setToBeFaxed(bool $toBeFaxed): PurchaseOrder
    {
        $this->toBeFaxed = $toBeFaxed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getToBeFaxed(): bool
    {
        return $this->toBeFaxed;
    }

    /**
     * @param string $fax
     * @return PurchaseOrder
     */
    public function setFax(string $fax): PurchaseOrder
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $message
     * @return PurchaseOrder
     */
    public function setMessage(string $message): PurchaseOrder
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param Address $billingAddress
     * @return PurchaseOrder
     */
    public function setBillingAddress(Address $billingAddress): PurchaseOrder
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    /**
     * @param RecordRef $billAddressList
     * @return PurchaseOrder
     */
    public function setBillAddressList(RecordRef $billAddressList): PurchaseOrder
    {
        $this->billAddressList = $billAddressList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillAddressList(): RecordRef
    {
        return $this->billAddressList;
    }

    /**
     * @param RecordRef $currency
     * @return PurchaseOrder
     */
    public function setCurrency(RecordRef $currency): PurchaseOrder
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
     * @param RecordRef $shipTo
     * @return PurchaseOrder
     */
    public function setShipTo(RecordRef $shipTo): PurchaseOrder
    {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipTo(): RecordRef
    {
        return $this->shipTo;
    }

    /**
     * @param float $subTotal
     * @return PurchaseOrder
     */
    public function setSubTotal(float $subTotal): PurchaseOrder
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
     * @param float $taxTotal
     * @return PurchaseOrder
     */
    public function setTaxTotal(float $taxTotal): PurchaseOrder
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
     * @param Address $shippingAddress
     * @return PurchaseOrder
     */
    public function setShippingAddress(Address $shippingAddress): PurchaseOrder
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param bool $shipIsResidential
     * @return PurchaseOrder
     */
    public function setShipIsResidential(bool $shipIsResidential): PurchaseOrder
    {
        $this->shipIsResidential = $shipIsResidential;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipIsResidential(): bool
    {
        return $this->shipIsResidential;
    }

    /**
     * @param RecordRef $shipAddressList
     * @return PurchaseOrder
     */
    public function setShipAddressList(RecordRef $shipAddressList): PurchaseOrder
    {
        $this->shipAddressList = $shipAddressList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddressList(): RecordRef
    {
        return $this->shipAddressList;
    }

    /**
     * @param string $fob
     * @return PurchaseOrder
     */
    public function setFob(string $fob): PurchaseOrder
    {
        $this->fob = $fob;
        return $this;
    }

    /**
     * @return string
     */
    public function getFob(): string
    {
        return $this->fob;
    }

    /**
     * @param string $shipDate
     * @return PurchaseOrder
     */
    public function setShipDate(string $shipDate): PurchaseOrder
    {
        $this->shipDate = $shipDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipDate(): string
    {
        return $this->shipDate;
    }

    /**
     * @param RecordRef $shipMethod
     * @return PurchaseOrder
     */
    public function setShipMethod(RecordRef $shipMethod): PurchaseOrder
    {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod(): RecordRef
    {
        return $this->shipMethod;
    }

    /**
     * @param RecordRef $incoterm
     * @return PurchaseOrder
     */
    public function setIncoterm(RecordRef $incoterm): PurchaseOrder
    {
        $this->incoterm = $incoterm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncoterm(): RecordRef
    {
        return $this->incoterm;
    }

    /**
     * @param string $trackingNumbers
     * @return PurchaseOrder
     */
    public function setTrackingNumbers(string $trackingNumbers): PurchaseOrder
    {
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumbers(): string
    {
        return $this->trackingNumbers;
    }

    /**
     * @param string $linkedTrackingNumbers
     * @return PurchaseOrder
     */
    public function setLinkedTrackingNumbers(string $linkedTrackingNumbers): PurchaseOrder
    {
        $this->linkedTrackingNumbers = $linkedTrackingNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedTrackingNumbers(): string
    {
        return $this->linkedTrackingNumbers;
    }

    /**
     * @param float $total
     * @return PurchaseOrder
     */
    public function setTotal(float $total): PurchaseOrder
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
     * @param RecordRef $class
     * @return PurchaseOrder
     */
    public function setClass(RecordRef $class): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setDepartment(RecordRef $department): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setLocation(RecordRef $location): PurchaseOrder
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
     * @param RecordRef $subsidiary
     * @return PurchaseOrder
     */
    public function setSubsidiary(RecordRef $subsidiary): PurchaseOrder
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
     * @param RecordRef $intercoTransaction
     * @return PurchaseOrder
     */
    public function setIntercoTransaction(RecordRef $intercoTransaction): PurchaseOrder
    {
        $this->intercoTransaction = $intercoTransaction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoTransaction(): RecordRef
    {
        return $this->intercoTransaction;
    }

    /**
     * @param IntercoStatus $intercoStatus
     * @return PurchaseOrder
     */
    public function setIntercoStatus(IntercoStatus $intercoStatus): PurchaseOrder
    {
        $this->intercoStatus = $intercoStatus;
        return $this;
    }

    /**
     * @return IntercoStatus
     */
    public function getIntercoStatus(): IntercoStatus
    {
        return $this->intercoStatus;
    }

    /**
     * @param string $status
     * @return PurchaseOrder
     */
    public function setStatus(string $status): PurchaseOrder
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
     * @param PurchaseOrderOrderStatus $orderStatus
     * @return PurchaseOrder
     */
    public function setOrderStatus(PurchaseOrderOrderStatus $orderStatus): PurchaseOrder
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return PurchaseOrderOrderStatus
     */
    public function getOrderStatus(): PurchaseOrderOrderStatus
    {
        return $this->orderStatus;
    }

    /**
     * @param PurchaseOrderItemList $itemList
     * @return PurchaseOrder
     */
    public function setItemList(PurchaseOrderItemList $itemList): PurchaseOrder
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return PurchaseOrderItemList
     */
    public function getItemList(): PurchaseOrderItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return PurchaseOrder
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): PurchaseOrder
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
     * @param PurchaseOrderExpenseList $expenseList
     * @return PurchaseOrder
     */
    public function setExpenseList(PurchaseOrderExpenseList $expenseList): PurchaseOrder
    {
        $this->expenseList = $expenseList;
        return $this;
    }

    /**
     * @return PurchaseOrderExpenseList
     */
    public function getExpenseList(): PurchaseOrderExpenseList
    {
        return $this->expenseList;
    }

    /**
     * @param TaxDetailsList $taxDetailsList
     * @return PurchaseOrder
     */
    public function setTaxDetailsList(TaxDetailsList $taxDetailsList): PurchaseOrder
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
     * @param CustomFieldList $customFieldList
     * @return PurchaseOrder
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setInternalId(string $internalId): PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setExternalId(string $externalId): PurchaseOrder
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
