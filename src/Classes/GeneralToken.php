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

class GeneralToken extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var string
     */
    protected string $mask;

    /**
     * @var GeneralTokenSupportedOperationsListList
     */
    protected GeneralTokenSupportedOperationsListList $supportedOperationsList;

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
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "entity" => "RecordRef",
        "mask" => "string",
        "supportedOperationsList" => "GeneralTokenSupportedOperationsListList",
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
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $entity
     * @return GeneralToken
     */
    public function setEntity(RecordRef $entity): GeneralToken
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
     * @return GeneralToken
     */
    public function setMask(string $mask): GeneralToken
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
     * @param GeneralTokenSupportedOperationsListList $supportedOperationsList
     * @return GeneralToken
     */
    public function setSupportedOperationsList(GeneralTokenSupportedOperationsListList $supportedOperationsList): GeneralToken
    {
        $this->supportedOperationsList = $supportedOperationsList;
        return $this;
    }

    /**
     * @return GeneralTokenSupportedOperationsListList
     */
    public function getSupportedOperationsList(): GeneralTokenSupportedOperationsListList
    {
        return $this->supportedOperationsList;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return GeneralToken
     */
    public function setPaymentMethod(RecordRef $paymentMethod): GeneralToken
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
     * @return GeneralToken
     */
    public function setMemo(string $memo): GeneralToken
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
     * @return GeneralToken
     */
    public function setState(PaymentInstrumentState $state): GeneralToken
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
     * @return GeneralToken
     */
    public function setIsInactive(bool $isInactive): GeneralToken
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
     * @return GeneralToken
     */
    public function setPreserveOnFile(bool $preserveOnFile): GeneralToken
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
     * @return GeneralToken
     */
    public function setIsDefault(bool $isDefault): GeneralToken
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
     * @return GeneralToken
     */
    public function setToken(string $token): GeneralToken
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
     * @return GeneralToken
     */
    public function setTokenExpirationDate(string $tokenExpirationDate): GeneralToken
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
     * @return GeneralToken
     */
    public function setTokenFamily(TokenFamily $tokenFamily): GeneralToken
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
     * @return GeneralToken
     */
    public function setTokenNamespace(string $tokenNamespace): GeneralToken
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
     * @param string $internalId
     * @return GeneralToken
     */
    public function setInternalId(string $internalId): GeneralToken
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
     * @return GeneralToken
     */
    public function setExternalId(string $externalId): GeneralToken
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
