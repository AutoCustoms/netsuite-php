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

class PostingTransactionSummary {
    /**
     * @var RecordRef
     */
    protected RecordRef $period;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentItem;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

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
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $book;

    /**
     * @var float
     */
    protected float $amount;

    static $paramtypesmap = array(
        "period" => "RecordRef",
        "account" => "RecordRef",
        "parentItem" => "RecordRef",
        "item" => "RecordRef",
        "entity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "book" => "RecordRef",
        "amount" => "float",
    );

    /**
     * @param RecordRef $period
     * @return PostingTransactionSummary
     */
    public function setPeriod(RecordRef $period): PostingTransactionSummary
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPeriod(): RecordRef
    {
        return $this->period;
    }

    /**
     * @param RecordRef $account
     * @return PostingTransactionSummary
     */
    public function setAccount(RecordRef $account): PostingTransactionSummary
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
     * @param RecordRef $parentItem
     * @return PostingTransactionSummary
     */
    public function setParentItem(RecordRef $parentItem): PostingTransactionSummary
    {
        $this->parentItem = $parentItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentItem(): RecordRef
    {
        return $this->parentItem;
    }

    /**
     * @param RecordRef $item
     * @return PostingTransactionSummary
     */
    public function setItem(RecordRef $item): PostingTransactionSummary
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $entity
     * @return PostingTransactionSummary
     */
    public function setEntity(RecordRef $entity): PostingTransactionSummary
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
     * @return PostingTransactionSummary
     */
    public function setDepartment(RecordRef $department): PostingTransactionSummary
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
     * @return PostingTransactionSummary
     */
    public function setClass(RecordRef $class): PostingTransactionSummary
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
     * @return PostingTransactionSummary
     */
    public function setLocation(RecordRef $location): PostingTransactionSummary
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
     * @param RecordRef $subsidiary
     * @return PostingTransactionSummary
     */
    public function setSubsidiary(RecordRef $subsidiary): PostingTransactionSummary
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $book
     * @return PostingTransactionSummary
     */
    public function setBook(RecordRef $book): PostingTransactionSummary
    {
        $this->book = $book;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBook(): RecordRef
    {
        return $this->book;
    }

    /**
     * @param float $amount
     * @return PostingTransactionSummary
     */
    public function setAmount(float $amount): PostingTransactionSummary
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

}
