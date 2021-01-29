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

class CostCategorySearch extends SearchRecord {
    /**
     * @var CostCategorySearchBasic
     */
    protected CostCategorySearchBasic $basic;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $accountJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    static $paramtypesmap = array(
        "basic" => "CostCategorySearchBasic",
        "accountJoin" => "AccountSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
    );

    /**
     * @param CostCategorySearchBasic $basic
     * @return CostCategorySearch
     */
    public function setBasic(CostCategorySearchBasic $basic): CostCategorySearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CostCategorySearchBasic
     */
    public function getBasic(): CostCategorySearchBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchBasic $accountJoin
     * @return CostCategorySearch
     */
    public function setAccountJoin(AccountSearchBasic $accountJoin): CostCategorySearch
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
     * @param TransactionSearchBasic $transactionJoin
     * @return CostCategorySearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): CostCategorySearch
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
