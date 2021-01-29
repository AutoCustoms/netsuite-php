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

class InstallmentSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amountPaid;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amountRemaining;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysOverdue;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dueDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxAmountPaid;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxAmountRemaining;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $installmentNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $status;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "amount" => "SearchColumnDoubleField[]",
        "amountPaid" => "SearchColumnDoubleField[]",
        "amountRemaining" => "SearchColumnDoubleField[]",
        "daysOverdue" => "SearchColumnLongField[]",
        "dueDate" => "SearchColumnDateField[]",
        "fxAmount" => "SearchColumnDoubleField[]",
        "fxAmountPaid" => "SearchColumnDoubleField[]",
        "fxAmountRemaining" => "SearchColumnDoubleField[]",
        "installmentNumber" => "SearchColumnLongField[]",
        "status" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return InstallmentSearchRowBasic
     */
    public function setAmount(SearchColumnDoubleField $amount): InstallmentSearchRowBasic
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param SearchColumnDoubleField[] $amountPaid
     * @return InstallmentSearchRowBasic
     */
    public function setAmountPaid(SearchColumnDoubleField $amountPaid): InstallmentSearchRowBasic
    {
        $this->amountPaid[] = $amountPaid;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountPaid(): array
    {
        return $this->amountPaid;
    }

    /**
     * @param SearchColumnDoubleField[] $amountRemaining
     * @return InstallmentSearchRowBasic
     */
    public function setAmountRemaining(SearchColumnDoubleField $amountRemaining): InstallmentSearchRowBasic
    {
        $this->amountRemaining[] = $amountRemaining;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountRemaining(): array
    {
        return $this->amountRemaining;
    }

    /**
     * @param SearchColumnLongField[] $daysOverdue
     * @return InstallmentSearchRowBasic
     */
    public function setDaysOverdue(SearchColumnLongField $daysOverdue): InstallmentSearchRowBasic
    {
        $this->daysOverdue[] = $daysOverdue;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOverdue(): array
    {
        return $this->daysOverdue;
    }

    /**
     * @param SearchColumnDateField[] $dueDate
     * @return InstallmentSearchRowBasic
     */
    public function setDueDate(SearchColumnDateField $dueDate): InstallmentSearchRowBasic
    {
        $this->dueDate[] = $dueDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDueDate(): array
    {
        return $this->dueDate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxAmount
     * @return InstallmentSearchRowBasic
     */
    public function setFxAmount(SearchColumnDoubleField $fxAmount): InstallmentSearchRowBasic
    {
        $this->fxAmount[] = $fxAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxAmount(): array
    {
        return $this->fxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $fxAmountPaid
     * @return InstallmentSearchRowBasic
     */
    public function setFxAmountPaid(SearchColumnDoubleField $fxAmountPaid): InstallmentSearchRowBasic
    {
        $this->fxAmountPaid[] = $fxAmountPaid;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxAmountPaid(): array
    {
        return $this->fxAmountPaid;
    }

    /**
     * @param SearchColumnDoubleField[] $fxAmountRemaining
     * @return InstallmentSearchRowBasic
     */
    public function setFxAmountRemaining(SearchColumnDoubleField $fxAmountRemaining): InstallmentSearchRowBasic
    {
        $this->fxAmountRemaining[] = $fxAmountRemaining;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxAmountRemaining(): array
    {
        return $this->fxAmountRemaining;
    }

    /**
     * @param SearchColumnLongField[] $installmentNumber
     * @return InstallmentSearchRowBasic
     */
    public function setInstallmentNumber(SearchColumnLongField $installmentNumber): InstallmentSearchRowBasic
    {
        $this->installmentNumber[] = $installmentNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getInstallmentNumber(): array
    {
        return $this->installmentNumber;
    }

    /**
     * @param SearchColumnStringField[] $status
     * @return InstallmentSearchRowBasic
     */
    public function setStatus(SearchColumnStringField $status): InstallmentSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return InstallmentSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): InstallmentSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
