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

class PostingTransactionSummaryField {
    /**
     * @var bool
     */
    protected bool $period;

    /**
     * @var bool
     */
    protected bool $account;

    /**
     * @var bool
     */
    protected bool $parentItem;

    /**
     * @var bool
     */
    protected bool $item;

    /**
     * @var bool
     */
    protected bool $entity;

    /**
     * @var bool
     */
    protected bool $department;

    /**
     * @var bool
     */
    protected bool $class;

    /**
     * @var bool
     */
    protected bool $location;

    /**
     * @var bool
     */
    protected bool $subsidiary;

    /**
     * @var bool
     */
    protected bool $book;

    static $paramtypesmap = array(
        "period" => "boolean",
        "account" => "boolean",
        "parentItem" => "boolean",
        "item" => "boolean",
        "entity" => "boolean",
        "department" => "boolean",
        "class" => "boolean",
        "location" => "boolean",
        "subsidiary" => "boolean",
        "book" => "boolean",
    );

    /**
     * @param bool $period
     * @return PostingTransactionSummaryField
     */
    public function setPeriod(bool $period): PostingTransactionSummaryField
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPeriod(): bool
    {
        return $this->period;
    }

    /**
     * @param bool $account
     * @return PostingTransactionSummaryField
     */
    public function setAccount(bool $account): PostingTransactionSummaryField
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAccount(): bool
    {
        return $this->account;
    }

    /**
     * @param bool $parentItem
     * @return PostingTransactionSummaryField
     */
    public function setParentItem(bool $parentItem): PostingTransactionSummaryField
    {
        $this->parentItem = $parentItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getParentItem(): bool
    {
        return $this->parentItem;
    }

    /**
     * @param bool $item
     * @return PostingTransactionSummaryField
     */
    public function setItem(bool $item): PostingTransactionSummaryField
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return bool
     */
    public function getItem(): bool
    {
        return $this->item;
    }

    /**
     * @param bool $entity
     * @return PostingTransactionSummaryField
     */
    public function setEntity(bool $entity): PostingTransactionSummaryField
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEntity(): bool
    {
        return $this->entity;
    }

    /**
     * @param bool $department
     * @return PostingTransactionSummaryField
     */
    public function setDepartment(bool $department): PostingTransactionSummaryField
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDepartment(): bool
    {
        return $this->department;
    }

    /**
     * @param bool $class
     * @return PostingTransactionSummaryField
     */
    public function setClass(bool $class): PostingTransactionSummaryField
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return bool
     */
    public function getClass(): bool
    {
        return $this->class;
    }

    /**
     * @param bool $location
     * @return PostingTransactionSummaryField
     */
    public function setLocation(bool $location): PostingTransactionSummaryField
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLocation(): bool
    {
        return $this->location;
    }

    /**
     * @param bool $subsidiary
     * @return PostingTransactionSummaryField
     */
    public function setSubsidiary(bool $subsidiary): PostingTransactionSummaryField
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSubsidiary(): bool
    {
        return $this->subsidiary;
    }

    /**
     * @param bool $book
     * @return PostingTransactionSummaryField
     */
    public function setBook(bool $book): PostingTransactionSummaryField
    {
        $this->book = $book;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBook(): bool
    {
        return $this->book;
    }

}
