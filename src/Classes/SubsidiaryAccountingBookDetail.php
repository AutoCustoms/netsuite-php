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

class SubsidiaryAccountingBookDetail {
    /**
     * @var RecordRef
     */
    protected RecordRef $accountingBook;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var AccountingBookStatus
     */
    protected AccountingBookStatus $bookStatus;

    static $paramtypesmap = array(
        "accountingBook" => "RecordRef",
        "currency" => "RecordRef",
        "bookStatus" => "AccountingBookStatus",
    );

    /**
     * @param RecordRef $accountingBook
     * @return SubsidiaryAccountingBookDetail
     */
    public function setAccountingBook(RecordRef $accountingBook): SubsidiaryAccountingBookDetail
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook(): RecordRef
    {
        return $this->accountingBook;
    }

    /**
     * @param RecordRef $currency
     * @return SubsidiaryAccountingBookDetail
     */
    public function setCurrency(RecordRef $currency): SubsidiaryAccountingBookDetail
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param AccountingBookStatus $bookStatus
     * @return SubsidiaryAccountingBookDetail
     */
    public function setBookStatus(AccountingBookStatus $bookStatus): SubsidiaryAccountingBookDetail
    {
        $this->bookStatus = $bookStatus;
        return $this;
    }

    /**
     * @return AccountingBookStatus
     */
    public function getBookStatus(): AccountingBookStatus
    {
        return $this->bookStatus;
    }

}
