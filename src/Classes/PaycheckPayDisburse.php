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

class PaycheckPayDisburse {
    /**
     * @var string
     */
    protected string $method;

    /**
     * @var string
     */
    protected string $bankName;

    /**
     * @var string
     */
    protected string $bankAccountDecrypt;

    /**
     * @var string
     */
    protected string $statusName;

    /**
     * @var float
     */
    protected float $amount;

    static $paramtypesmap = array(
        "method" => "string",
        "bankName" => "string",
        "bankAccountDecrypt" => "string",
        "statusName" => "string",
        "amount" => "float",
    );

    /**
     * @param string $method
     * @return PaycheckPayDisburse
     */
    public function setMethod(string $method): PaycheckPayDisburse
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $bankName
     * @return PaycheckPayDisburse
     */
    public function setBankName(string $bankName): PaycheckPayDisburse
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankAccountDecrypt
     * @return PaycheckPayDisburse
     */
    public function setBankAccountDecrypt(string $bankAccountDecrypt): PaycheckPayDisburse
    {
        $this->bankAccountDecrypt = $bankAccountDecrypt;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountDecrypt(): string
    {
        return $this->bankAccountDecrypt;
    }

    /**
     * @param string $statusName
     * @return PaycheckPayDisburse
     */
    public function setStatusName(string $statusName): PaycheckPayDisburse
    {
        $this->statusName = $statusName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusName(): string
    {
        return $this->statusName;
    }

    /**
     * @param float $amount
     * @return PaycheckPayDisburse
     */
    public function setAmount(float $amount): PaycheckPayDisburse
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
