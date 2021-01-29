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

class ChargeSearch extends SearchRecord {
    /**
     * @var ChargeSearchBasic
     */
    protected ChargeSearchBasic $basic;

    /**
     * @var BillingAccountSearchBasic
     */
    protected BillingAccountSearchBasic $billingAccountJoin;

    /**
     * @var BillingScheduleSearchBasic
     */
    protected BillingScheduleSearchBasic $billingScheduleJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $chargeEmployeeJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $invoiceJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $salesOrderJoin;

    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $timeJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var UsageSearchBasic
     */
    protected UsageSearchBasic $usageJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ChargeSearchBasic",
        "billingAccountJoin" => "BillingAccountSearchBasic",
        "billingScheduleJoin" => "BillingScheduleSearchBasic",
        "chargeEmployeeJoin" => "EmployeeSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "invoiceJoin" => "TransactionSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "salesOrderJoin" => "TransactionSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "usageJoin" => "UsageSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ChargeSearchBasic $basic
     * @return ChargeSearch
     */
    public function setBasic(ChargeSearchBasic $basic): ChargeSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ChargeSearchBasic
     */
    public function getBasic(): ChargeSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param BillingAccountSearchBasic $billingAccountJoin
     * @return ChargeSearch
     */
    public function setBillingAccountJoin(BillingAccountSearchBasic $billingAccountJoin): ChargeSearch
    {
        $this->billingAccountJoin = $billingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getBillingAccountJoin(): BillingAccountSearchBasic
    {
        return $this->billingAccountJoin;
    }

    /**
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return ChargeSearch
     */
    public function setBillingScheduleJoin(BillingScheduleSearchBasic $billingScheduleJoin): ChargeSearch
    {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin(): BillingScheduleSearchBasic
    {
        return $this->billingScheduleJoin;
    }

    /**
     * @param EmployeeSearchBasic $chargeEmployeeJoin
     * @return ChargeSearch
     */
    public function setChargeEmployeeJoin(EmployeeSearchBasic $chargeEmployeeJoin): ChargeSearch
    {
        $this->chargeEmployeeJoin = $chargeEmployeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getChargeEmployeeJoin(): EmployeeSearchBasic
    {
        return $this->chargeEmployeeJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return ChargeSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): ChargeSearch
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin(): CustomerSearchBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param TransactionSearchBasic $invoiceJoin
     * @return ChargeSearch
     */
    public function setInvoiceJoin(TransactionSearchBasic $invoiceJoin): ChargeSearch
    {
        $this->invoiceJoin = $invoiceJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getInvoiceJoin(): TransactionSearchBasic
    {
        return $this->invoiceJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return ChargeSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): ChargeSearch
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin(): ItemSearchBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return ChargeSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): ChargeSearch
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobJoin(): JobSearchBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param TransactionSearchBasic $salesOrderJoin
     * @return ChargeSearch
     */
    public function setSalesOrderJoin(TransactionSearchBasic $salesOrderJoin): ChargeSearch
    {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getSalesOrderJoin(): TransactionSearchBasic
    {
        return $this->salesOrderJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return ChargeSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): ChargeSearch
    {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin(): TimeBillSearchBasic
    {
        return $this->timeJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return ChargeSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): ChargeSearch
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin(): TransactionSearchBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param UsageSearchBasic $usageJoin
     * @return ChargeSearch
     */
    public function setUsageJoin(UsageSearchBasic $usageJoin): ChargeSearch
    {
        $this->usageJoin = $usageJoin;
        return $this;
    }

    /**
     * @return UsageSearchBasic
     */
    public function getUsageJoin(): UsageSearchBasic
    {
        return $this->usageJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ChargeSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ChargeSearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return ChargeSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ChargeSearch
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
