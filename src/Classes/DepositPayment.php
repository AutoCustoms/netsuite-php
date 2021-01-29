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

class DepositPayment {
    /**
     * @var bool
     */
    protected bool $deposit;

    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $docDate;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var string
     */
    protected string $docNumber;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var string
     */
    protected string $refNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $transactionAmount;

    /**
     * @var float
     */
    protected float $paymentAmount;

    /**
     * @var int
     */
    protected int $lineId;

    static $paramtypesmap = array(
        "deposit" => "boolean",
        "id" => "integer",
        "docDate" => "dateTime",
        "type" => "string",
        "docNumber" => "string",
        "memo" => "string",
        "paymentMethod" => "RecordRef",
        "refNum" => "string",
        "entity" => "RecordRef",
        "currency" => "RecordRef",
        "transactionAmount" => "float",
        "paymentAmount" => "float",
        "lineId" => "integer",
    );

    /**
     * @param bool $deposit
     * @return DepositPayment
     */
    public function setDeposit(bool $deposit): DepositPayment
    {
        $this->deposit = $deposit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDeposit(): bool
    {
        return $this->deposit;
    }

    /**
     * @param int $id
     * @return DepositPayment
     */
    public function setId(int $id): DepositPayment
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
     * @param string $docDate
     * @return DepositPayment
     */
    public function setDocDate(string $docDate): DepositPayment
    {
        $this->docDate = $docDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocDate(): string
    {
        return $this->docDate;
    }

    /**
     * @param string $type
     * @return DepositPayment
     */
    public function setType(string $type): DepositPayment
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $docNumber
     * @return DepositPayment
     */
    public function setDocNumber(string $docNumber): DepositPayment
    {
        $this->docNumber = $docNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocNumber(): string
    {
        return $this->docNumber;
    }

    /**
     * @param string $memo
     * @return DepositPayment
     */
    public function setMemo(string $memo): DepositPayment
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
     * @param RecordRef $paymentMethod
     * @return DepositPayment
     */
    public function setPaymentMethod(RecordRef $paymentMethod): DepositPayment
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentMethod(): RecordRef
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $refNum
     * @return DepositPayment
     */
    public function setRefNum(string $refNum): DepositPayment
    {
        $this->refNum = $refNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefNum(): string
    {
        return $this->refNum;
    }

    /**
     * @param RecordRef $entity
     * @return DepositPayment
     */
    public function setEntity(RecordRef $entity): DepositPayment
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
     * @param RecordRef $currency
     * @return DepositPayment
     */
    public function setCurrency(RecordRef $currency): DepositPayment
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param float $transactionAmount
     * @return DepositPayment
     */
    public function setTransactionAmount(float $transactionAmount): DepositPayment
    {
        $this->transactionAmount = $transactionAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTransactionAmount(): float
    {
        return $this->transactionAmount;
    }

    /**
     * @param float $paymentAmount
     * @return DepositPayment
     */
    public function setPaymentAmount(float $paymentAmount): DepositPayment
    {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPaymentAmount(): float
    {
        return $this->paymentAmount;
    }

    /**
     * @param int $lineId
     * @return DepositPayment
     */
    public function setLineId(int $lineId): DepositPayment
    {
        $this->lineId = $lineId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineId(): int
    {
        return $this->lineId;
    }

}
