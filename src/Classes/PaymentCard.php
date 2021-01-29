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

class PaymentCard extends Record {
    /**
     * @var string
     */
    protected string $lastFourDigits;

    /**
     * @var string
     */
    protected string $issuerIdNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var string
     */
    protected string $mask;

    /**
     * @var RecordRef
     */
    protected RecordRef $paymentMethod;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var PaymentInstrumentState
     */
    protected PaymentInstrumentState $state;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $preserveOnFile;

    /**
     * @var bool
     */
    protected bool $isDefault;

    /**
     * @var string
     */
    protected string $cardNumber;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var PaymentCardBrand
     */
    protected PaymentCardBrand $cardBrand;

    /**
     * @var PaymentCardType
     */
    protected PaymentCardType $cardType;

    /**
     * @var string
     */
    protected string $nameOnCard;

    /**
     * @var string
     */
    protected string $street;

    /**
     * @var string
     */
    protected string $zipCode;

    /**
     * @var string
     */
    protected string $validFromDate;

    /**
     * @var string
     */
    protected string $issueNumber;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "lastFourDigits" => "string",
        "issuerIdNumber" => "string",
        "entity" => "RecordRef",
        "mask" => "string",
        "paymentMethod" => "RecordRef",
        "memo" => "string",
        "state" => "PaymentInstrumentState",
        "isInactive" => "boolean",
        "preserveOnFile" => "boolean",
        "isDefault" => "boolean",
        "cardNumber" => "string",
        "expirationDate" => "dateTime",
        "cardBrand" => "PaymentCardBrand",
        "cardType" => "PaymentCardType",
        "nameOnCard" => "string",
        "street" => "string",
        "zipCode" => "string",
        "validFromDate" => "dateTime",
        "issueNumber" => "string",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $lastFourDigits
     * @return PaymentCard
     */
    public function setLastFourDigits(string $lastFourDigits): PaymentCard
    {
        $this->lastFourDigits = $lastFourDigits;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastFourDigits(): string
    {
        return $this->lastFourDigits;
    }

    /**
     * @param string $issuerIdNumber
     * @return PaymentCard
     */
    public function setIssuerIdNumber(string $issuerIdNumber): PaymentCard
    {
        $this->issuerIdNumber = $issuerIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuerIdNumber(): string
    {
        return $this->issuerIdNumber;
    }

    /**
     * @param RecordRef $entity
     * @return PaymentCard
     */
    public function setEntity(RecordRef $entity): PaymentCard
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
     * @param string $mask
     * @return PaymentCard
     */
    public function setMask(string $mask): PaymentCard
    {
        $this->mask = $mask;
        return $this;
    }

    /**
     * @return string
     */
    public function getMask(): string
    {
        return $this->mask;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return PaymentCard
     */
    public function setPaymentMethod(RecordRef $paymentMethod): PaymentCard
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
     * @param string $memo
     * @return PaymentCard
     */
    public function setMemo(string $memo): PaymentCard
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
     * @param PaymentInstrumentState $state
     * @return PaymentCard
     */
    public function setState(PaymentInstrumentState $state): PaymentCard
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return PaymentInstrumentState
     */
    public function getState(): PaymentInstrumentState
    {
        return $this->state;
    }

    /**
     * @param bool $isInactive
     * @return PaymentCard
     */
    public function setIsInactive(bool $isInactive): PaymentCard
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
     * @param bool $preserveOnFile
     * @return PaymentCard
     */
    public function setPreserveOnFile(bool $preserveOnFile): PaymentCard
    {
        $this->preserveOnFile = $preserveOnFile;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreserveOnFile(): bool
    {
        return $this->preserveOnFile;
    }

    /**
     * @param bool $isDefault
     * @return PaymentCard
     */
    public function setIsDefault(bool $isDefault): PaymentCard
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param string $cardNumber
     * @return PaymentCard
     */
    public function setCardNumber(string $cardNumber): PaymentCard
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $expirationDate
     * @return PaymentCard
     */
    public function setExpirationDate(string $expirationDate): PaymentCard
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param PaymentCardBrand $cardBrand
     * @return PaymentCard
     */
    public function setCardBrand(PaymentCardBrand $cardBrand): PaymentCard
    {
        $this->cardBrand = $cardBrand;
        return $this;
    }

    /**
     * @return PaymentCardBrand
     */
    public function getCardBrand(): PaymentCardBrand
    {
        return $this->cardBrand;
    }

    /**
     * @param PaymentCardType $cardType
     * @return PaymentCard
     */
    public function setCardType(PaymentCardType $cardType): PaymentCard
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * @return PaymentCardType
     */
    public function getCardType(): PaymentCardType
    {
        return $this->cardType;
    }

    /**
     * @param string $nameOnCard
     * @return PaymentCard
     */
    public function setNameOnCard(string $nameOnCard): PaymentCard
    {
        $this->nameOnCard = $nameOnCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameOnCard(): string
    {
        return $this->nameOnCard;
    }

    /**
     * @param string $street
     * @return PaymentCard
     */
    public function setStreet(string $street): PaymentCard
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $zipCode
     * @return PaymentCard
     */
    public function setZipCode(string $zipCode): PaymentCard
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @param string $validFromDate
     * @return PaymentCard
     */
    public function setValidFromDate(string $validFromDate): PaymentCard
    {
        $this->validFromDate = $validFromDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidFromDate(): string
    {
        return $this->validFromDate;
    }

    /**
     * @param string $issueNumber
     * @return PaymentCard
     */
    public function setIssueNumber(string $issueNumber): PaymentCard
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssueNumber(): string
    {
        return $this->issueNumber;
    }

    /**
     * @param string $internalId
     * @return PaymentCard
     */
    public function setInternalId(string $internalId): PaymentCard
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
     * @return PaymentCard
     */
    public function setExternalId(string $externalId): PaymentCard
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
