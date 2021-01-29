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

class Charge extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesOrder;

    /**
     * @var RecordRef
     */
    protected RecordRef $billTo;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingAccount;

    /**
     * @var ChargeStage
     */
    protected ChargeStage $stage;

    /**
     * @var string
     */
    protected string $chargeDate;

    /**
     * @var ChargeUse
     */
    protected ChargeUse $use;

    /**
     * @var RecordRef
     */
    protected RecordRef $chargeType;

    /**
     * @var RecordRef
     */
    protected RecordRef $projectTask;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeRecord;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingItem;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $transaction;

    /**
     * @var RecordRef
     */
    protected RecordRef $transactionLine;

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
    protected RecordRef $salesOrderLine;

    /**
     * @var RecordRef
     */
    protected RecordRef $subscriptionLine;

    /**
     * @var RecordRef
     */
    protected RecordRef $invoice;

    /**
     * @var RecordRef
     */
    protected RecordRef $invoiceLine;

    /**
     * @var RecordRef
     */
    protected RecordRef $rule;

    /**
     * @var string
     */
    protected string $runId;

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
        "salesOrder" => "RecordRef",
        "billTo" => "RecordRef",
        "billingAccount" => "RecordRef",
        "stage" => "ChargeStage",
        "chargeDate" => "dateTime",
        "use" => "ChargeUse",
        "chargeType" => "RecordRef",
        "projectTask" => "RecordRef",
        "description" => "string",
        "createdDate" => "dateTime",
        "timeRecord" => "RecordRef",
        "rate" => "string",
        "quantity" => "float",
        "amount" => "float",
        "billingItem" => "RecordRef",
        "currency" => "RecordRef",
        "transaction" => "RecordRef",
        "transactionLine" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "salesOrderLine" => "RecordRef",
        "subscriptionLine" => "RecordRef",
        "invoice" => "RecordRef",
        "invoiceLine" => "RecordRef",
        "rule" => "RecordRef",
        "runId" => "string",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Charge
     */
    public function setCustomForm(RecordRef $customForm): Charge
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
     * @param RecordRef $salesOrder
     * @return Charge
     */
    public function setSalesOrder(RecordRef $salesOrder): Charge
    {
        $this->salesOrder = $salesOrder;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesOrder(): RecordRef
    {
        return $this->salesOrder;
    }

    /**
     * @param RecordRef $billTo
     * @return Charge
     */
    public function setBillTo(RecordRef $billTo): Charge
    {
        $this->billTo = $billTo;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillTo(): RecordRef
    {
        return $this->billTo;
    }

    /**
     * @param RecordRef $billingAccount
     * @return Charge
     */
    public function setBillingAccount(RecordRef $billingAccount): Charge
    {
        $this->billingAccount = $billingAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingAccount(): RecordRef
    {
        return $this->billingAccount;
    }

    /**
     * @param ChargeStage $stage
     * @return Charge
     */
    public function setStage(ChargeStage $stage): Charge
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return ChargeStage
     */
    public function getStage(): ChargeStage
    {
        return $this->stage;
    }

    /**
     * @param string $chargeDate
     * @return Charge
     */
    public function setChargeDate(string $chargeDate): Charge
    {
        $this->chargeDate = $chargeDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeDate(): string
    {
        return $this->chargeDate;
    }

    /**
     * @param ChargeUse $use
     * @return Charge
     */
    public function setUse(ChargeUse $use): Charge
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @return ChargeUse
     */
    public function getUse(): ChargeUse
    {
        return $this->use;
    }

    /**
     * @param RecordRef $chargeType
     * @return Charge
     */
    public function setChargeType(RecordRef $chargeType): Charge
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChargeType(): RecordRef
    {
        return $this->chargeType;
    }

    /**
     * @param RecordRef $projectTask
     * @return Charge
     */
    public function setProjectTask(RecordRef $projectTask): Charge
    {
        $this->projectTask = $projectTask;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectTask(): RecordRef
    {
        return $this->projectTask;
    }

    /**
     * @param string $description
     * @return Charge
     */
    public function setDescription(string $description): Charge
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $createdDate
     * @return Charge
     */
    public function setCreatedDate(string $createdDate): Charge
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
     * @param RecordRef $timeRecord
     * @return Charge
     */
    public function setTimeRecord(RecordRef $timeRecord): Charge
    {
        $this->timeRecord = $timeRecord;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeRecord(): RecordRef
    {
        return $this->timeRecord;
    }

    /**
     * @param string $rate
     * @return Charge
     */
    public function setRate(string $rate): Charge
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param float $quantity
     * @return Charge
     */
    public function setQuantity(float $quantity): Charge
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $amount
     * @return Charge
     */
    public function setAmount(float $amount): Charge
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
     * @param RecordRef $billingItem
     * @return Charge
     */
    public function setBillingItem(RecordRef $billingItem): Charge
    {
        $this->billingItem = $billingItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingItem(): RecordRef
    {
        return $this->billingItem;
    }

    /**
     * @param RecordRef $currency
     * @return Charge
     */
    public function setCurrency(RecordRef $currency): Charge
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
     * @param RecordRef $transaction
     * @return Charge
     */
    public function setTransaction(RecordRef $transaction): Charge
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction(): RecordRef
    {
        return $this->transaction;
    }

    /**
     * @param RecordRef $transactionLine
     * @return Charge
     */
    public function setTransactionLine(RecordRef $transactionLine): Charge
    {
        $this->transactionLine = $transactionLine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransactionLine(): RecordRef
    {
        return $this->transactionLine;
    }

    /**
     * @param RecordRef $class
     * @return Charge
     */
    public function setClass(RecordRef $class): Charge
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
     * @return Charge
     */
    public function setDepartment(RecordRef $department): Charge
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
     * @return Charge
     */
    public function setLocation(RecordRef $location): Charge
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
     * @param RecordRef $salesOrderLine
     * @return Charge
     */
    public function setSalesOrderLine(RecordRef $salesOrderLine): Charge
    {
        $this->salesOrderLine = $salesOrderLine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesOrderLine(): RecordRef
    {
        return $this->salesOrderLine;
    }

    /**
     * @param RecordRef $subscriptionLine
     * @return Charge
     */
    public function setSubscriptionLine(RecordRef $subscriptionLine): Charge
    {
        $this->subscriptionLine = $subscriptionLine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubscriptionLine(): RecordRef
    {
        return $this->subscriptionLine;
    }

    /**
     * @param RecordRef $invoice
     * @return Charge
     */
    public function setInvoice(RecordRef $invoice): Charge
    {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInvoice(): RecordRef
    {
        return $this->invoice;
    }

    /**
     * @param RecordRef $invoiceLine
     * @return Charge
     */
    public function setInvoiceLine(RecordRef $invoiceLine): Charge
    {
        $this->invoiceLine = $invoiceLine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInvoiceLine(): RecordRef
    {
        return $this->invoiceLine;
    }

    /**
     * @param RecordRef $rule
     * @return Charge
     */
    public function setRule(RecordRef $rule): Charge
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRule(): RecordRef
    {
        return $this->rule;
    }

    /**
     * @param string $runId
     * @return Charge
     */
    public function setRunId(string $runId): Charge
    {
        $this->runId = $runId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRunId(): string
    {
        return $this->runId;
    }

    /**
     * @param string $internalId
     * @return Charge
     */
    public function setInternalId(string $internalId): Charge
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
     * @return Charge
     */
    public function setExternalId(string $externalId): Charge
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
