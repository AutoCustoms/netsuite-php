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

class CustomTransactionLine {
    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var float
     */
    protected float $debit;

    /**
     * @var float
     */
    protected float $credit;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

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
        "account" => "RecordRef",
        "line" => "integer",
        "debit" => "float",
        "credit" => "float",
        "amount" => "float",
        "memo" => "string",
        "entity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $account
     * @return CustomTransactionLine
     */
    public function setAccount(RecordRef $account): CustomTransactionLine
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccount(): RecordRef
    {
        return $this->account;
    }

    /**
     * @param int $line
     * @return CustomTransactionLine
     */
    public function setLine(int $line): CustomTransactionLine
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @param float $debit
     * @return CustomTransactionLine
     */
    public function setDebit(float $debit): CustomTransactionLine
    {
        $this->debit = $debit;
        return $this;
    }

    /**
     * @return float
     */
    public function getDebit(): float
    {
        return $this->debit;
    }

    /**
     * @param float $credit
     * @return CustomTransactionLine
     */
    public function setCredit(float $credit): CustomTransactionLine
    {
        $this->credit = $credit;
        return $this;
    }

    /**
     * @return float
     */
    public function getCredit(): float
    {
        return $this->credit;
    }

    /**
     * @param float $amount
     * @return CustomTransactionLine
     */
    public function setAmount(float $amount): CustomTransactionLine
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
     * @param string $memo
     * @return CustomTransactionLine
     */
    public function setMemo(string $memo): CustomTransactionLine
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param RecordRef $entity
     * @return CustomTransactionLine
     */
    public function setEntity(RecordRef $entity): CustomTransactionLine
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param RecordRef $department
     * @return CustomTransactionLine
     */
    public function setDepartment(RecordRef $department): CustomTransactionLine
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
     * @return CustomTransactionLine
     */
    public function setClass(RecordRef $class): CustomTransactionLine
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
     * @return CustomTransactionLine
     */
    public function setLocation(RecordRef $location): CustomTransactionLine
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
     * @return CustomTransactionLine
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomTransactionLine
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
