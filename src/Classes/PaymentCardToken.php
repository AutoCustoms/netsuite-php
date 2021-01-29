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

class PaymentCardToken extends Record {
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
    protected string $token;

    /**
     * @var string
     */
    protected string $tokenExpirationDate;

    /**
     * @var TokenFamily
     */
    protected TokenFamily $tokenFamily;

    /**
     * @var string
     */
    protected string $tokenNamespace;

    /**
     * @var string
     */
    protected string $cardIssuerIdNumber;

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
    protected string $cardNameOnCard;

    /**
     * @var string
     */
    protected string $cardLastFourDigits;

    /**
     * @var string
     */
    protected string $cardExpirationDate;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "entity" => "RecordRef",
        "mask" => "string",
        "paymentMethod" => "RecordRef",
        "memo" => "string",
        "state" => "PaymentInstrumentState",
        "isInactive" => "boolean",
        "preserveOnFile" => "boolean",
        "isDefault" => "boolean",
        "token" => "string",
        "tokenExpirationDate" => "dateTime",
        "tokenFamily" => "TokenFamily",
        "tokenNamespace" => "string",
        "cardIssuerIdNumber" => "string",
        "cardBrand" => "PaymentCardBrand",
        "cardType" => "PaymentCardType",
        "cardNameOnCard" => "string",
        "cardLastFourDigits" => "string",
        "cardExpirationDate" => "dateTime",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $entity
     * @return PaymentCardToken
     */
    public function setEntity(RecordRef $entity): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setMask(string $mask): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setPaymentMethod(RecordRef $paymentMethod): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setMemo(string $memo): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setState(PaymentInstrumentState $state): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setIsInactive(bool $isInactive): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setPreserveOnFile(bool $preserveOnFile): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setIsDefault(bool $isDefault): PaymentCardToken
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
     * @param string $token
     * @return PaymentCardToken
     */
    public function setToken(string $token): PaymentCardToken
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $tokenExpirationDate
     * @return PaymentCardToken
     */
    public function setTokenExpirationDate(string $tokenExpirationDate): PaymentCardToken
    {
        $this->tokenExpirationDate = $tokenExpirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenExpirationDate(): string
    {
        return $this->tokenExpirationDate;
    }

    /**
     * @param TokenFamily $tokenFamily
     * @return PaymentCardToken
     */
    public function setTokenFamily(TokenFamily $tokenFamily): PaymentCardToken
    {
        $this->tokenFamily = $tokenFamily;
        return $this;
    }

    /**
     * @return TokenFamily
     */
    public function getTokenFamily(): TokenFamily
    {
        return $this->tokenFamily;
    }

    /**
     * @param string $tokenNamespace
     * @return PaymentCardToken
     */
    public function setTokenNamespace(string $tokenNamespace): PaymentCardToken
    {
        $this->tokenNamespace = $tokenNamespace;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenNamespace(): string
    {
        return $this->tokenNamespace;
    }

    /**
     * @param string $cardIssuerIdNumber
     * @return PaymentCardToken
     */
    public function setCardIssuerIdNumber(string $cardIssuerIdNumber): PaymentCardToken
    {
        $this->cardIssuerIdNumber = $cardIssuerIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardIssuerIdNumber(): string
    {
        return $this->cardIssuerIdNumber;
    }

    /**
     * @param PaymentCardBrand $cardBrand
     * @return PaymentCardToken
     */
    public function setCardBrand(PaymentCardBrand $cardBrand): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setCardType(PaymentCardType $cardType): PaymentCardToken
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
     * @param string $cardNameOnCard
     * @return PaymentCardToken
     */
    public function setCardNameOnCard(string $cardNameOnCard): PaymentCardToken
    {
        $this->cardNameOnCard = $cardNameOnCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNameOnCard(): string
    {
        return $this->cardNameOnCard;
    }

    /**
     * @param string $cardLastFourDigits
     * @return PaymentCardToken
     */
    public function setCardLastFourDigits(string $cardLastFourDigits): PaymentCardToken
    {
        $this->cardLastFourDigits = $cardLastFourDigits;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardLastFourDigits(): string
    {
        return $this->cardLastFourDigits;
    }

    /**
     * @param string $cardExpirationDate
     * @return PaymentCardToken
     */
    public function setCardExpirationDate(string $cardExpirationDate): PaymentCardToken
    {
        $this->cardExpirationDate = $cardExpirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardExpirationDate(): string
    {
        return $this->cardExpirationDate;
    }

    /**
     * @param string $internalId
     * @return PaymentCardToken
     */
    public function setInternalId(string $internalId): PaymentCardToken
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
     * @return PaymentCardToken
     */
    public function setExternalId(string $externalId): PaymentCardToken
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
