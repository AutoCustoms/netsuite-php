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

class JobCreditCards {
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
     * @var string
     */
    protected string $ccMemo;

    /**
     * @var bool
     */
    protected bool $ccDefault;

    /**
     * @var string
     */
    protected string $debitCardIssueNo;

    /**
     * @var string
     */
    protected string $validFrom;

    static $paramtypesmap = array(
        "internalId" => "string",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "paymentMethod" => "RecordRef",
        "ccMemo" => "string",
        "ccDefault" => "boolean",
        "debitCardIssueNo" => "string",
        "validFrom" => "dateTime",
    );

    /**
     * @param string $internalId
     * @return JobCreditCards
     */
    public function setInternalId(string $internalId): JobCreditCards
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
     * @return JobCreditCards
     */
    public function setCcNumber(string $ccNumber): JobCreditCards
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
     * @return JobCreditCards
     */
    public function setCcExpireDate(string $ccExpireDate): JobCreditCards
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
     * @return JobCreditCards
     */
    public function setCcName(string $ccName): JobCreditCards
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
     * @return JobCreditCards
     */
    public function setPaymentMethod(RecordRef $paymentMethod): JobCreditCards
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
     * @param string $ccMemo
     * @return JobCreditCards
     */
    public function setCcMemo(string $ccMemo): JobCreditCards
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
     * @param bool $ccDefault
     * @return JobCreditCards
     */
    public function setCcDefault(bool $ccDefault): JobCreditCards
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

    /**
     * @param string $debitCardIssueNo
     * @return JobCreditCards
     */
    public function setDebitCardIssueNo(string $debitCardIssueNo): JobCreditCards
    {
        $this->debitCardIssueNo = $debitCardIssueNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebitCardIssueNo(): string
    {
        return $this->debitCardIssueNo;
    }

    /**
     * @param string $validFrom
     * @return JobCreditCards
     */
    public function setValidFrom(string $validFrom): JobCreditCards
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

}
