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

class PaymentInstrumentSearchRow extends SearchRow {
    /**
     * @var PaymentInstrumentSearchRowBasic
     */
    protected PaymentInstrumentSearchRowBasic $basic;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    static $paramtypesmap = array(
        "basic" => "PaymentInstrumentSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
    );

    /**
     * @param PaymentInstrumentSearchRowBasic $basic
     * @return PaymentInstrumentSearchRow
     */
    public function setBasic(PaymentInstrumentSearchRowBasic $basic): PaymentInstrumentSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PaymentInstrumentSearchRowBasic
     */
    public function getBasic(): PaymentInstrumentSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return PaymentInstrumentSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): PaymentInstrumentSearchRow
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
     * @param TransactionSearchRowBasic $transactionJoin
     * @return PaymentInstrumentSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): PaymentInstrumentSearchRow
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
