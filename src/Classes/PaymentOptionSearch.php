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

class PaymentOptionSearch extends SearchRecord {
    /**
     * @var PaymentOptionSearchBasic
     */
    protected PaymentOptionSearchBasic $basic;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    static $paramtypesmap = array(
        "basic" => "PaymentOptionSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
    );

    /**
     * @param PaymentOptionSearchBasic $basic
     * @return PaymentOptionSearch
     */
    public function setBasic(PaymentOptionSearchBasic $basic): PaymentOptionSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PaymentOptionSearchBasic
     */
    public function getBasic(): PaymentOptionSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return PaymentOptionSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): PaymentOptionSearch
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
