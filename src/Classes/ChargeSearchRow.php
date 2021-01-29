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

class ChargeSearchRow extends SearchRow {
    /**
     * @var ChargeSearchRowBasic
     */
    protected ChargeSearchRowBasic $basic;

    /**
     * @var BillingAccountSearchRowBasic
     */
    protected BillingAccountSearchRowBasic $billingAccountJoin;

    /**
     * @var BillingScheduleSearchRowBasic
     */
    protected BillingScheduleSearchRowBasic $billingScheduleJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $chargeEmployeeJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $invoiceJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $salesOrderJoin;

    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $timeJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var UsageSearchRowBasic
     */
    protected UsageSearchRowBasic $usageJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ChargeSearchRowBasic",
        "billingAccountJoin" => "BillingAccountSearchRowBasic",
        "billingScheduleJoin" => "BillingScheduleSearchRowBasic",
        "chargeEmployeeJoin" => "EmployeeSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "invoiceJoin" => "TransactionSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "salesOrderJoin" => "TransactionSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "usageJoin" => "UsageSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ChargeSearchRowBasic $basic
     * @return ChargeSearchRow
     */
    public function setBasic(ChargeSearchRowBasic $basic): ChargeSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ChargeSearchRowBasic
     */
    public function getBasic(): ChargeSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param BillingAccountSearchRowBasic $billingAccountJoin
     * @return ChargeSearchRow
     */
    public function setBillingAccountJoin(BillingAccountSearchRowBasic $billingAccountJoin): ChargeSearchRow
    {
        $this->billingAccountJoin = $billingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getBillingAccountJoin(): BillingAccountSearchRowBasic
    {
        return $this->billingAccountJoin;
    }

    /**
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return ChargeSearchRow
     */
    public function setBillingScheduleJoin(BillingScheduleSearchRowBasic $billingScheduleJoin): ChargeSearchRow
    {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin(): BillingScheduleSearchRowBasic
    {
        return $this->billingScheduleJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $chargeEmployeeJoin
     * @return ChargeSearchRow
     */
    public function setChargeEmployeeJoin(EmployeeSearchRowBasic $chargeEmployeeJoin): ChargeSearchRow
    {
        $this->chargeEmployeeJoin = $chargeEmployeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getChargeEmployeeJoin(): EmployeeSearchRowBasic
    {
        return $this->chargeEmployeeJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return ChargeSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): ChargeSearchRow
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param TransactionSearchRowBasic $invoiceJoin
     * @return ChargeSearchRow
     */
    public function setInvoiceJoin(TransactionSearchRowBasic $invoiceJoin): ChargeSearchRow
    {
        $this->invoiceJoin = $invoiceJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getInvoiceJoin(): TransactionSearchRowBasic
    {
        return $this->invoiceJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return ChargeSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): ChargeSearchRow
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin(): ItemSearchRowBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return ChargeSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): ChargeSearchRow
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobJoin(): JobSearchRowBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param TransactionSearchRowBasic $salesOrderJoin
     * @return ChargeSearchRow
     */
    public function setSalesOrderJoin(TransactionSearchRowBasic $salesOrderJoin): ChargeSearchRow
    {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getSalesOrderJoin(): TransactionSearchRowBasic
    {
        return $this->salesOrderJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return ChargeSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): ChargeSearchRow
    {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin(): TimeBillSearchRowBasic
    {
        return $this->timeJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return ChargeSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): ChargeSearchRow
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param UsageSearchRowBasic $usageJoin
     * @return ChargeSearchRow
     */
    public function setUsageJoin(UsageSearchRowBasic $usageJoin): ChargeSearchRow
    {
        $this->usageJoin = $usageJoin;
        return $this;
    }

    /**
     * @return UsageSearchRowBasic
     */
    public function getUsageJoin(): UsageSearchRowBasic
    {
        return $this->usageJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ChargeSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ChargeSearchRow
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin(): EmployeeSearchRowBasic
    {
        return $this->userJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return ChargeSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ChargeSearchRow
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
