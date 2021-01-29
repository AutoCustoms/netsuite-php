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

class CustomerCreditCards {
    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $ccNumber;

    /**
     * @var string
     */
    protected string $ccExpireDate;

    /**
     * @var string
     */
    protected string $ccName;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $cardState;

    /**
     * @var string
     */
    protected string $stateFrom;

    /**
     * @var string
     */
    protected string $debitcardIssueNo;

    /**
     * @var string
     */
    protected string $ccMemo;

    /**
     * @var string
     */
    protected string $validfrom;

    /**
     * @var bool
     */
    protected bool $ccDefault;

    static $paramtypesmap = array(
        "internalId" => "string",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "paymentMethod" => "RecordRef",
        "cardState" => "RecordRef",
        "stateFrom" => "dateTime",
        "debitcardIssueNo" => "string",
        "ccMemo" => "string",
        "validfrom" => "dateTime",
        "ccDefault" => "boolean",
    );

    /**
     * @param string $internalId
     * @return CustomerCreditCards
     */
    public function setInternalId(string $internalId): CustomerCreditCards
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $ccNumber
     * @return CustomerCreditCards
     */
    public function setCcNumber(string $ccNumber): CustomerCreditCards
    {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcNumber(): string
    {
        return $this->ccNumber;
    }

    /**
     * @param string $ccExpireDate
     * @return CustomerCreditCards
     */
    public function setCcExpireDate(string $ccExpireDate): CustomerCreditCards
    {
        $this->ccExpireDate = $ccExpireDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcExpireDate(): string
    {
        return $this->ccExpireDate;
    }

    /**
     * @param string $ccName
     * @return CustomerCreditCards
     */
    public function setCcName(string $ccName): CustomerCreditCards
    {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcName(): string
    {
        return $this->ccName;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return CustomerCreditCards
     */
    public function setPaymentMethod(RecordRef $paymentMethod): CustomerCreditCards
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
     * @param RecordRef $cardState
     * @return CustomerCreditCards
     */
    public function setCardState(RecordRef $cardState): CustomerCreditCards
    {
        $this->cardState = $cardState;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCardState(): RecordRef
    {
        return $this->cardState;
    }

    /**
     * @param string $stateFrom
     * @return CustomerCreditCards
     */
    public function setStateFrom(string $stateFrom): CustomerCreditCards
    {
        $this->stateFrom = $stateFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateFrom(): string
    {
        return $this->stateFrom;
    }

    /**
     * @param string $debitcardIssueNo
     * @return CustomerCreditCards
     */
    public function setDebitcardIssueNo(string $debitcardIssueNo): CustomerCreditCards
    {
        $this->debitcardIssueNo = $debitcardIssueNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebitcardIssueNo(): string
    {
        return $this->debitcardIssueNo;
    }

    /**
     * @param string $ccMemo
     * @return CustomerCreditCards
     */
    public function setCcMemo(string $ccMemo): CustomerCreditCards
    {
        $this->ccMemo = $ccMemo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCcMemo(): string
    {
        return $this->ccMemo;
    }

    /**
     * @param string $validfrom
     * @return CustomerCreditCards
     */
    public function setValidfrom(string $validfrom): CustomerCreditCards
    {
        $this->validfrom = $validfrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidfrom(): string
    {
        return $this->validfrom;
    }

    /**
     * @param bool $ccDefault
     * @return CustomerCreditCards
     */
    public function setCcDefault(bool $ccDefault): CustomerCreditCards
    {
        $this->ccDefault = $ccDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCcDefault(): bool
    {
        return $this->ccDefault;
    }

}
