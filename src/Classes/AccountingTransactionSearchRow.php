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

class AccountingTransactionSearchRow extends SearchRow {
    /**
     * @var AccountingTransactionSearchRowBasic
     */
    protected AccountingTransactionSearchRowBasic $basic;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $accountJoin;

    /**
     * @var RevRecScheduleSearchRowBasic
     */
    protected RevRecScheduleSearchRowBasic $revRecScheduleJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    static $paramtypesmap = array(
        "basic" => "AccountingTransactionSearchRowBasic",
        "accountJoin" => "AccountSearchRowBasic",
        "revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
    );

    /**
     * @param AccountingTransactionSearchRowBasic $basic
     * @return AccountingTransactionSearchRow
     */
    public function setBasic(AccountingTransactionSearchRowBasic $basic): AccountingTransactionSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return AccountingTransactionSearchRowBasic
     */
    public function getBasic(): AccountingTransactionSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchRowBasic $accountJoin
     * @return AccountingTransactionSearchRow
     */
    public function setAccountJoin(AccountSearchRowBasic $accountJoin): AccountingTransactionSearchRow
    {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin(): AccountSearchRowBasic
    {
        return $this->accountJoin;
    }

    /**
     * @param RevRecScheduleSearchRowBasic $revRecScheduleJoin
     * @return AccountingTransactionSearchRow
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchRowBasic $revRecScheduleJoin): AccountingTransactionSearchRow
    {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * @return RevRecScheduleSearchRowBasic
     */
    public function getRevRecScheduleJoin(): RevRecScheduleSearchRowBasic
    {
        return $this->revRecScheduleJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return AccountingTransactionSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): AccountingTransactionSearchRow
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

}
