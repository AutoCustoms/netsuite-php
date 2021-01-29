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

class PaymentMethod extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $creditCard;

    /**
     * @var bool
     */
    protected bool $undepFunds;

    /**
     * @var RecordRef
     */
    protected RecordRef $account;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $isOnline;

    /**
     * @var PaymentMethodVisualsList
     */
    protected PaymentMethodVisualsList $visualsList;

    /**
     * @var bool
     */
    protected bool $isDebitCard;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $merchantAccountsList;

    /**
     * @var string
     */
    protected string $payPalEmailAddress;

    /**
     * @var string
     */
    protected string $expressCheckoutArrangement;

    /**
     * @var bool
     */
    protected bool $useExpressCheckout;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "creditCard" => "boolean",
        "undepFunds" => "boolean",
        "account" => "RecordRef",
        "isInactive" => "boolean",
        "isOnline" => "boolean",
        "visualsList" => "PaymentMethodVisualsList",
        "isDebitCard" => "boolean",
        "merchantAccountsList" => "RecordRefList",
        "payPalEmailAddress" => "string",
        "expressCheckoutArrangement" => "string",
        "useExpressCheckout" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return PaymentMethod
     */
    public function setName(string $name): PaymentMethod
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param bool $creditCard
     * @return PaymentMethod
     */
    public function setCreditCard(bool $creditCard): PaymentMethod
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCreditCard(): bool
    {
        return $this->creditCard;
    }

    /**
     * @param bool $undepFunds
     * @return PaymentMethod
     */
    public function setUndepFunds(bool $undepFunds): PaymentMethod
    {
        $this->undepFunds = $undepFunds;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUndepFunds(): bool
    {
        return $this->undepFunds;
    }

    /**
     * @param RecordRef $account
     * @return PaymentMethod
     */
    public function setAccount(RecordRef $account): PaymentMethod
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
     * @param bool $isInactive
     * @return PaymentMethod
     */
    public function setIsInactive(bool $isInactive): PaymentMethod
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param bool $isOnline
     * @return PaymentMethod
     */
    public function setIsOnline(bool $isOnline): PaymentMethod
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): bool
    {
        return $this->isOnline;
    }

    /**
     * @param PaymentMethodVisualsList $visualsList
     * @return PaymentMethod
     */
    public function setVisualsList(PaymentMethodVisualsList $visualsList): PaymentMethod
    {
        $this->visualsList = $visualsList;
        return $this;
    }

    /**
     * @return PaymentMethodVisualsList
     */
    public function getVisualsList(): PaymentMethodVisualsList
    {
        return $this->visualsList;
    }

    /**
     * @param bool $isDebitCard
     * @return PaymentMethod
     */
    public function setIsDebitCard(bool $isDebitCard): PaymentMethod
    {
        $this->isDebitCard = $isDebitCard;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDebitCard(): bool
    {
        return $this->isDebitCard;
    }

    /**
     * @param RecordRefList $merchantAccountsList
     * @return PaymentMethod
     */
    public function setMerchantAccountsList(RecordRefList $merchantAccountsList): PaymentMethod
    {
        $this->merchantAccountsList = $merchantAccountsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getMerchantAccountsList(): RecordRefList
    {
        return $this->merchantAccountsList;
    }

    /**
     * @param string $payPalEmailAddress
     * @return PaymentMethod
     */
    public function setPayPalEmailAddress(string $payPalEmailAddress): PaymentMethod
    {
        $this->payPalEmailAddress = $payPalEmailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayPalEmailAddress(): string
    {
        return $this->payPalEmailAddress;
    }

    /**
     * @param string $expressCheckoutArrangement
     * @return PaymentMethod
     */
    public function setExpressCheckoutArrangement(string $expressCheckoutArrangement): PaymentMethod
    {
        $this->expressCheckoutArrangement = $expressCheckoutArrangement;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpressCheckoutArrangement(): string
    {
        return $this->expressCheckoutArrangement;
    }

    /**
     * @param bool $useExpressCheckout
     * @return PaymentMethod
     */
    public function setUseExpressCheckout(bool $useExpressCheckout): PaymentMethod
    {
        $this->useExpressCheckout = $useExpressCheckout;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseExpressCheckout(): bool
    {
        return $this->useExpressCheckout;
    }

    /**
     * @param string $internalId
     * @return PaymentMethod
     */
    public function setInternalId(string $internalId): PaymentMethod
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
     * @param string $externalId
     * @return PaymentMethod
     */
    public function setExternalId(string $externalId): PaymentMethod
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
