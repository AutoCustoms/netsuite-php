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

class ItemReceiptExpense {
    /**
     * @var bool
     */
    protected bool $markReceived;

    /**
     * @var int
     */
    protected int $orderLine;

    /**
     * @var int
     */
    protected int $line;

    /**
     * @var string
     */
    protected string $account;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "markReceived" => "boolean",
        "orderLine" => "integer",
        "line" => "integer",
        "account" => "string",
        "memo" => "string",
        "amount" => "float",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param bool $markReceived
     * @return ItemReceiptExpense
     */
    public function setMarkReceived(bool $markReceived): ItemReceiptExpense
    {
        $this->markReceived = $markReceived;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMarkReceived(): bool
    {
        return $this->markReceived;
    }

    /**
     * @param int $orderLine
     * @return ItemReceiptExpense
     */
    public function setOrderLine(int $orderLine): ItemReceiptExpense
    {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderLine(): int
    {
        return $this->orderLine;
    }

    /**
     * @param int $line
     * @return ItemReceiptExpense
     */
    public function setLine(int $line): ItemReceiptExpense
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
     * @param string $account
     * @return ItemReceiptExpense
     */
    public function setAccount(string $account): ItemReceiptExpense
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $memo
     * @return ItemReceiptExpense
     */
    public function setMemo(string $memo): ItemReceiptExpense
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
     * @param float $amount
     * @return ItemReceiptExpense
     */
    public function setAmount(float $amount): ItemReceiptExpense
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
     * @param CustomFieldList $customFieldList
     * @return ItemReceiptExpense
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemReceiptExpense
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
