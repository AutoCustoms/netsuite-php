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

class PaycheckJournalCompanyContribution {
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var RecordRef
     */
    protected RecordRef $payrollItem;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "id" => "integer",
        "payrollItem" => "RecordRef",
        "amount" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $id
     * @return PaycheckJournalCompanyContribution
     */
    public function setId(int $id): PaycheckJournalCompanyContribution
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param RecordRef $payrollItem
     * @return PaycheckJournalCompanyContribution
     */
    public function setPayrollItem(RecordRef $payrollItem): PaycheckJournalCompanyContribution
    {
        $this->payrollItem = $payrollItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayrollItem(): RecordRef
    {
        return $this->payrollItem;
    }

    /**
     * @param float $amount
     * @return PaycheckJournalCompanyContribution
     */
    public function setAmount(float $amount): PaycheckJournalCompanyContribution
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param RecordRef $department
     * @return PaycheckJournalCompanyContribution
     */
    public function setDepartment(RecordRef $department): PaycheckJournalCompanyContribution
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return PaycheckJournalCompanyContribution
     */
    public function setClass(RecordRef $class): PaycheckJournalCompanyContribution
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return PaycheckJournalCompanyContribution
     */
    public function setLocation(RecordRef $location): PaycheckJournalCompanyContribution
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return PaycheckJournalCompanyContribution
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PaycheckJournalCompanyContribution
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

}
