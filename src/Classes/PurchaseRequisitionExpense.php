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

class PurchaseRequisitionExpense {
    /**
     * @var int
     */
    protected int $line;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var bool
     */
    protected bool $isClosed;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var RecordRef
     */
    protected RecordRef $poVendor;

    /**
     * @var float
     */
    protected float $estimatedAmount;

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
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $customer;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $linkedOrderList;

    /**
     * @var string
     */
    protected string $linkedOrderStatus;

    /**
     * @var bool
     */
    protected bool $isBillable;

    static $paramtypesmap = array(
        "line" => "integer",
        "category" => "RecordRef",
        "location" => "RecordRef",
        "isClosed" => "boolean",
        "account" => "RecordRef",
        "poVendor" => "RecordRef",
        "estimatedAmount" => "float",
        "amount" => "float",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "customer" => "RecordRef",
        "linkedOrderList" => "RecordRefList",
        "linkedOrderStatus" => "string",
        "isBillable" => "boolean",
    );

    /**
     * @param int $line
     * @return PurchaseRequisitionExpense
     */
    public function setLine(int $line): PurchaseRequisitionExpense
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
     * @param RecordRef $category
     * @return PurchaseRequisitionExpense
     */
    public function setCategory(RecordRef $category): PurchaseRequisitionExpense
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param RecordRef $location
     * @return PurchaseRequisitionExpense
     */
    public function setLocation(RecordRef $location): PurchaseRequisitionExpense
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
     * @param bool $isClosed
     * @return PurchaseRequisitionExpense
     */
    public function setIsClosed(bool $isClosed): PurchaseRequisitionExpense
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * @param RecordRef $account
     * @return PurchaseRequisitionExpense
     */
    public function setAccount(RecordRef $account): PurchaseRequisitionExpense
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
     * @param RecordRef $poVendor
     * @return PurchaseRequisitionExpense
     */
    public function setPoVendor(RecordRef $poVendor): PurchaseRequisitionExpense
    {
        $this->poVendor = $poVendor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPoVendor(): RecordRef
    {
        return $this->poVendor;
    }

    /**
     * @param float $estimatedAmount
     * @return PurchaseRequisitionExpense
     */
    public function setEstimatedAmount(float $estimatedAmount): PurchaseRequisitionExpense
    {
        $this->estimatedAmount = $estimatedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedAmount(): float
    {
        return $this->estimatedAmount;
    }

    /**
     * @param float $amount
     * @return PurchaseRequisitionExpense
     */
    public function setAmount(float $amount): PurchaseRequisitionExpense
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
     * @return PurchaseRequisitionExpense
     */
    public function setMemo(string $memo): PurchaseRequisitionExpense
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
     * @param RecordRef $department
     * @return PurchaseRequisitionExpense
     */
    public function setDepartment(RecordRef $department): PurchaseRequisitionExpense
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
     * @return PurchaseRequisitionExpense
     */
    public function setClass(RecordRef $class): PurchaseRequisitionExpense
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
     * @param RecordRef $customer
     * @return PurchaseRequisitionExpense
     */
    public function setCustomer(RecordRef $customer): PurchaseRequisitionExpense
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomer(): RecordRef
    {
        return $this->customer;
    }

    /**
     * @param RecordRefList $linkedOrderList
     * @return PurchaseRequisitionExpense
     */
    public function setLinkedOrderList(RecordRefList $linkedOrderList): PurchaseRequisitionExpense
    {
        $this->linkedOrderList = $linkedOrderList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLinkedOrderList(): RecordRefList
    {
        return $this->linkedOrderList;
    }

    /**
     * @param string $linkedOrderStatus
     * @return PurchaseRequisitionExpense
     */
    public function setLinkedOrderStatus(string $linkedOrderStatus): PurchaseRequisitionExpense
    {
        $this->linkedOrderStatus = $linkedOrderStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedOrderStatus(): string
    {
        return $this->linkedOrderStatus;
    }

    /**
     * @param bool $isBillable
     * @return PurchaseRequisitionExpense
     */
    public function setIsBillable(bool $isBillable): PurchaseRequisitionExpense
    {
        $this->isBillable = $isBillable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBillable(): bool
    {
        return $this->isBillable;
    }

}
