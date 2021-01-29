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

class PostingTransactionSummaryFilter {
    /**
     * @var RecordRefList
     */
    protected RecordRefList $period;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $account;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $parentItem;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $item;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $entity;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $department;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $class;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $location;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiary;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $book;

    static $paramtypesmap = array(
        "period" => "RecordRefList",
        "account" => "RecordRefList",
        "parentItem" => "RecordRefList",
        "item" => "RecordRefList",
        "entity" => "RecordRefList",
        "department" => "RecordRefList",
        "class" => "RecordRefList",
        "location" => "RecordRefList",
        "subsidiary" => "RecordRefList",
        "book" => "RecordRefList",
    );

    /**
     * @param RecordRefList $period
     * @return PostingTransactionSummaryFilter
     */
    public function setPeriod(RecordRefList $period): PostingTransactionSummaryFilter
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getPeriod(): RecordRefList
    {
        return $this->period;
    }

    /**
     * @param RecordRefList $account
     * @return PostingTransactionSummaryFilter
     */
    public function setAccount(RecordRefList $account): PostingTransactionSummaryFilter
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getAccount(): RecordRefList
    {
        return $this->account;
    }

    /**
     * @param RecordRefList $parentItem
     * @return PostingTransactionSummaryFilter
     */
    public function setParentItem(RecordRefList $parentItem): PostingTransactionSummaryFilter
    {
        $this->parentItem = $parentItem;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getParentItem(): RecordRefList
    {
        return $this->parentItem;
    }

    /**
     * @param RecordRefList $item
     * @return PostingTransactionSummaryFilter
     */
    public function setItem(RecordRefList $item): PostingTransactionSummaryFilter
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItem(): RecordRefList
    {
        return $this->item;
    }

    /**
     * @param RecordRefList $entity
     * @return PostingTransactionSummaryFilter
     */
    public function setEntity(RecordRefList $entity): PostingTransactionSummaryFilter
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getEntity(): RecordRefList
    {
        return $this->entity;
    }

    /**
     * @param RecordRefList $department
     * @return PostingTransactionSummaryFilter
     */
    public function setDepartment(RecordRefList $department): PostingTransactionSummaryFilter
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getDepartment(): RecordRefList
    {
        return $this->department;
    }

    /**
     * @param RecordRefList $class
     * @return PostingTransactionSummaryFilter
     */
    public function setClass(RecordRefList $class): PostingTransactionSummaryFilter
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getClass(): RecordRefList
    {
        return $this->class;
    }

    /**
     * @param RecordRefList $location
     * @return PostingTransactionSummaryFilter
     */
    public function setLocation(RecordRefList $location): PostingTransactionSummaryFilter
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLocation(): RecordRefList
    {
        return $this->location;
    }

    /**
     * @param RecordRefList $subsidiary
     * @return PostingTransactionSummaryFilter
     */
    public function setSubsidiary(RecordRefList $subsidiary): PostingTransactionSummaryFilter
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiary(): RecordRefList
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRefList $book
     * @return PostingTransactionSummaryFilter
     */
    public function setBook(RecordRefList $book): PostingTransactionSummaryFilter
    {
        $this->book = $book;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getBook(): RecordRefList
    {
        return $this->book;
    }

}
