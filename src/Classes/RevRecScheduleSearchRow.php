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

class RevRecScheduleSearchRow extends SearchRow {
    /**
     * @var RevRecScheduleSearchRowBasic
     */
    protected RevRecScheduleSearchRowBasic $basic;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $appliedToTransactionJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "RevRecScheduleSearchRowBasic",
        "appliedToTransactionJoin" => "TransactionSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param RevRecScheduleSearchRowBasic $basic
     * @return RevRecScheduleSearchRow
     */
    public function setBasic(RevRecScheduleSearchRowBasic $basic): RevRecScheduleSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return RevRecScheduleSearchRowBasic
     */
    public function getBasic(): RevRecScheduleSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param TransactionSearchRowBasic $appliedToTransactionJoin
     * @return RevRecScheduleSearchRow
     */
    public function setAppliedToTransactionJoin(TransactionSearchRowBasic $appliedToTransactionJoin): RevRecScheduleSearchRow
    {
        $this->appliedToTransactionJoin = $appliedToTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getAppliedToTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->appliedToTransactionJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return RevRecScheduleSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): RevRecScheduleSearchRow
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
     * @param ItemSearchRowBasic $itemJoin
     * @return RevRecScheduleSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): RevRecScheduleSearchRow
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
     * @param TransactionSearchRowBasic $transactionJoin
     * @return RevRecScheduleSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): RevRecScheduleSearchRow
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
     * @param EmployeeSearchRowBasic $userJoin
     * @return RevRecScheduleSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): RevRecScheduleSearchRow
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

}
