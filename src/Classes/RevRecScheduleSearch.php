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

class RevRecScheduleSearch extends SearchRecord {
    /**
     * @var RevRecScheduleSearchBasic
     */
    protected RevRecScheduleSearchBasic $basic;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $appliedToTransactionJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "RevRecScheduleSearchBasic",
        "appliedToTransactionJoin" => "TransactionSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param RevRecScheduleSearchBasic $basic
     * @return RevRecScheduleSearch
     */
    public function setBasic(RevRecScheduleSearchBasic $basic): RevRecScheduleSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return RevRecScheduleSearchBasic
     */
    public function getBasic(): RevRecScheduleSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param TransactionSearchBasic $appliedToTransactionJoin
     * @return RevRecScheduleSearch
     */
    public function setAppliedToTransactionJoin(TransactionSearchBasic $appliedToTransactionJoin): RevRecScheduleSearch
    {
        $this->appliedToTransactionJoin = $appliedToTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getAppliedToTransactionJoin(): TransactionSearchBasic
    {
        return $this->appliedToTransactionJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return RevRecScheduleSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): RevRecScheduleSearch
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
     * @param ItemSearchBasic $itemJoin
     * @return RevRecScheduleSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): RevRecScheduleSearch
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
     * @param TransactionSearchBasic $transactionJoin
     * @return RevRecScheduleSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): RevRecScheduleSearch
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
     * @param EmployeeSearchBasic $userJoin
     * @return RevRecScheduleSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): RevRecScheduleSearch
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

}
