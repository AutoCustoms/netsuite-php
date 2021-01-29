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

class AccountingTransactionSearch extends SearchRecord {
    /**
     * @var AccountingTransactionSearchBasic
     */
    protected AccountingTransactionSearchBasic $basic;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $accountJoin;

    /**
     * @var RevRecScheduleSearchBasic
     */
    protected RevRecScheduleSearchBasic $revRecScheduleJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    static $paramtypesmap = array(
        "basic" => "AccountingTransactionSearchBasic",
        "accountJoin" => "AccountSearchBasic",
        "revRecScheduleJoin" => "RevRecScheduleSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
    );

    /**
     * @param AccountingTransactionSearchBasic $basic
     * @return AccountingTransactionSearch
     */
    public function setBasic(AccountingTransactionSearchBasic $basic): AccountingTransactionSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return AccountingTransactionSearchBasic
     */
    public function getBasic(): AccountingTransactionSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchBasic $accountJoin
     * @return AccountingTransactionSearch
     */
    public function setAccountJoin(AccountSearchBasic $accountJoin): AccountingTransactionSearch
    {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAccountJoin(): AccountSearchBasic
    {
        return $this->accountJoin;
    }

    /**
     * @param RevRecScheduleSearchBasic $revRecScheduleJoin
     * @return AccountingTransactionSearch
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchBasic $revRecScheduleJoin): AccountingTransactionSearch
    {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * @return RevRecScheduleSearchBasic
     */
    public function getRevRecScheduleJoin(): RevRecScheduleSearchBasic
    {
        return $this->revRecScheduleJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return AccountingTransactionSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): AccountingTransactionSearch
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

}
