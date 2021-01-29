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

class CostCategorySearchRow extends SearchRow {
    /**
     * @var CostCategorySearchRowBasic
     */
    protected CostCategorySearchRowBasic $basic;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $accountJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    static $paramtypesmap = array(
        "basic" => "CostCategorySearchRowBasic",
        "accountJoin" => "AccountSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
    );

    /**
     * @param CostCategorySearchRowBasic $basic
     * @return CostCategorySearchRow
     */
    public function setBasic(CostCategorySearchRowBasic $basic): CostCategorySearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CostCategorySearchRowBasic
     */
    public function getBasic(): CostCategorySearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchRowBasic $accountJoin
     * @return CostCategorySearchRow
     */
    public function setAccountJoin(AccountSearchRowBasic $accountJoin): CostCategorySearchRow
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
     * @param TransactionSearchRowBasic $transactionJoin
     * @return CostCategorySearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): CostCategorySearchRow
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
