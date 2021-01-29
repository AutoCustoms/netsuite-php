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

class InstallmentSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amountPaid;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amountRemaining;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysOverdue;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dueDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxAmountPaid;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxAmountRemaining;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $installmentNumber;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "amount" => "SearchDoubleField",
        "amountPaid" => "SearchDoubleField",
        "amountRemaining" => "SearchDoubleField",
        "daysOverdue" => "SearchLongField",
        "dueDate" => "SearchDateField",
        "fxAmount" => "SearchDoubleField",
        "fxAmountPaid" => "SearchDoubleField",
        "fxAmountRemaining" => "SearchDoubleField",
        "installmentNumber" => "SearchLongField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $amount
     * @return InstallmentSearchBasic
     */
    public function setAmount(SearchDoubleField $amount): InstallmentSearchBasic
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount(): SearchDoubleField
    {
        return $this->amount;
    }

    /**
     * @param SearchDoubleField $amountPaid
     * @return InstallmentSearchBasic
     */
    public function setAmountPaid(SearchDoubleField $amountPaid): InstallmentSearchBasic
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountPaid(): SearchDoubleField
    {
        return $this->amountPaid;
    }

    /**
     * @param SearchDoubleField $amountRemaining
     * @return InstallmentSearchBasic
     */
    public function setAmountRemaining(SearchDoubleField $amountRemaining): InstallmentSearchBasic
    {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountRemaining(): SearchDoubleField
    {
        return $this->amountRemaining;
    }

    /**
     * @param SearchLongField $daysOverdue
     * @return InstallmentSearchBasic
     */
    public function setDaysOverdue(SearchLongField $daysOverdue): InstallmentSearchBasic
    {
        $this->daysOverdue = $daysOverdue;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOverdue(): SearchLongField
    {
        return $this->daysOverdue;
    }

    /**
     * @param SearchDateField $dueDate
     * @return InstallmentSearchBasic
     */
    public function setDueDate(SearchDateField $dueDate): InstallmentSearchBasic
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDueDate(): SearchDateField
    {
        return $this->dueDate;
    }

    /**
     * @param SearchDoubleField $fxAmount
     * @return InstallmentSearchBasic
     */
    public function setFxAmount(SearchDoubleField $fxAmount): InstallmentSearchBasic
    {
        $this->fxAmount = $fxAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxAmount(): SearchDoubleField
    {
        return $this->fxAmount;
    }

    /**
     * @param SearchDoubleField $fxAmountPaid
     * @return InstallmentSearchBasic
     */
    public function setFxAmountPaid(SearchDoubleField $fxAmountPaid): InstallmentSearchBasic
    {
        $this->fxAmountPaid = $fxAmountPaid;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxAmountPaid(): SearchDoubleField
    {
        return $this->fxAmountPaid;
    }

    /**
     * @param SearchDoubleField $fxAmountRemaining
     * @return InstallmentSearchBasic
     */
    public function setFxAmountRemaining(SearchDoubleField $fxAmountRemaining): InstallmentSearchBasic
    {
        $this->fxAmountRemaining = $fxAmountRemaining;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxAmountRemaining(): SearchDoubleField
    {
        return $this->fxAmountRemaining;
    }

    /**
     * @param SearchLongField $installmentNumber
     * @return InstallmentSearchBasic
     */
    public function setInstallmentNumber(SearchLongField $installmentNumber): InstallmentSearchBasic
    {
        $this->installmentNumber = $installmentNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInstallmentNumber(): SearchLongField
    {
        return $this->installmentNumber;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return InstallmentSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): InstallmentSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
