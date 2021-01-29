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

class PaycheckJournalEarning {
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
    protected float $hours;

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
        "hours" => "float",
        "amount" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param int $id
     * @return PaycheckJournalEarning
     */
    public function setId(int $id): PaycheckJournalEarning
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
     * @return PaycheckJournalEarning
     */
    public function setPayrollItem(RecordRef $payrollItem): PaycheckJournalEarning
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
     * @param float $hours
     * @return PaycheckJournalEarning
     */
    public function setHours(float $hours): PaycheckJournalEarning
    {
        $this->hours = $hours;
        return $this;
    }

    /**
     * @return float
     */
    public function getHours(): float
    {
        return $this->hours;
    }

    /**
     * @param float $amount
     * @return PaycheckJournalEarning
     */
    public function setAmount(float $amount): PaycheckJournalEarning
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
     * @return PaycheckJournalEarning
     */
    public function setDepartment(RecordRef $department): PaycheckJournalEarning
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
     * @return PaycheckJournalEarning
     */
    public function setClass(RecordRef $class): PaycheckJournalEarning
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
     * @return PaycheckJournalEarning
     */
    public function setLocation(RecordRef $location): PaycheckJournalEarning
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
     * @return PaycheckJournalEarning
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PaycheckJournalEarning
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
