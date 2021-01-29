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

class PaymentInstrumentSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $cardBrand;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $cardExpDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $cardLastFourDigits;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $cardTokenCardBrand;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $cardTokenCardExpDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $cardTokenExpDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $cardTokenNameOnCard;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $default;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entity;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $generalTokenExpirationDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $lastFourDigits;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mask;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $nameOnCard;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $paymentInstrumentStateType;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $paymentInstrumentType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $paymentMethod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $preserveOnFile;

    static $paramtypesmap = array(
        "cardBrand" => "SearchColumnStringField[]",
        "cardExpDate" => "SearchColumnDateField[]",
        "cardLastFourDigits" => "SearchColumnStringField[]",
        "cardTokenCardBrand" => "SearchColumnStringField[]",
        "cardTokenCardExpDate" => "SearchColumnDateField[]",
        "cardTokenExpDate" => "SearchColumnDateField[]",
        "cardTokenNameOnCard" => "SearchColumnStringField[]",
        "default" => "SearchColumnStringField[]",
        "entity" => "SearchColumnSelectField[]",
        "generalTokenExpirationDate" => "SearchColumnDateField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnStringField[]",
        "lastFourDigits" => "SearchColumnStringField[]",
        "mask" => "SearchColumnStringField[]",
        "nameOnCard" => "SearchColumnStringField[]",
        "paymentInstrumentStateType" => "SearchColumnSelectField[]",
        "paymentInstrumentType" => "SearchColumnEnumSelectField[]",
        "paymentMethod" => "SearchColumnSelectField[]",
        "preserveOnFile" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnStringField[] $cardBrand
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setCardBrand(SearchColumnStringField $cardBrand): PaymentInstrumentSearchRowBasic
    {
        $this->cardBrand[] = $cardBrand;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCardBrand(): array
    {
        return $this->cardBrand;
    }

    /**
     * @param SearchColumnDateField[] $cardExpDate
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setCardExpDate(SearchColumnDateField $cardExpDate): PaymentInstrumentSearchRowBasic
    {
        $this->cardExpDate[] = $cardExpDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCardExpDate(): array
    {
        return $this->cardExpDate;
    }

    /**
     * @param SearchColumnStringField[] $cardLastFourDigits
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setCardLastFourDigits(SearchColumnStringField $cardLastFourDigits): PaymentInstrumentSearchRowBasic
    {
        $this->cardLastFourDigits[] = $cardLastFourDigits;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCardLastFourDigits(): array
    {
        return $this->cardLastFourDigits;
    }

    /**
     * @param SearchColumnStringField[] $cardTokenCardBrand
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setCardTokenCardBrand(SearchColumnStringField $cardTokenCardBrand): PaymentInstrumentSearchRowBasic
    {
        $this->cardTokenCardBrand[] = $cardTokenCardBrand;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCardTokenCardBrand(): array
    {
        return $this->cardTokenCardBrand;
    }

    /**
     * @param SearchColumnDateField[] $cardTokenCardExpDate
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setCardTokenCardExpDate(SearchColumnDateField $cardTokenCardExpDate): PaymentInstrumentSearchRowBasic
    {
        $this->cardTokenCardExpDate[] = $cardTokenCardExpDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCardTokenCardExpDate(): array
    {
        return $this->cardTokenCardExpDate;
    }

    /**
     * @param SearchColumnDateField[] $cardTokenExpDate
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setCardTokenExpDate(SearchColumnDateField $cardTokenExpDate): PaymentInstrumentSearchRowBasic
    {
        $this->cardTokenExpDate[] = $cardTokenExpDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCardTokenExpDate(): array
    {
        return $this->cardTokenExpDate;
    }

    /**
     * @param SearchColumnStringField[] $cardTokenNameOnCard
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setCardTokenNameOnCard(SearchColumnStringField $cardTokenNameOnCard): PaymentInstrumentSearchRowBasic
    {
        $this->cardTokenNameOnCard[] = $cardTokenNameOnCard;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCardTokenNameOnCard(): array
    {
        return $this->cardTokenNameOnCard;
    }

    /**
     * @param SearchColumnStringField[] $default
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setDefault(SearchColumnStringField $default): PaymentInstrumentSearchRowBasic
    {
        $this->default[] = $default;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDefault(): array
    {
        return $this->default;
    }

    /**
     * @param SearchColumnSelectField[] $entity
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setEntity(SearchColumnSelectField $entity): PaymentInstrumentSearchRowBasic
    {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntity(): array
    {
        return $this->entity;
    }

    /**
     * @param SearchColumnDateField[] $generalTokenExpirationDate
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setGeneralTokenExpirationDate(SearchColumnDateField $generalTokenExpirationDate): PaymentInstrumentSearchRowBasic
    {
        $this->generalTokenExpirationDate[] = $generalTokenExpirationDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getGeneralTokenExpirationDate(): array
    {
        return $this->generalTokenExpirationDate;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PaymentInstrumentSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnStringField[] $isInactive
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setIsInactive(SearchColumnStringField $isInactive): PaymentInstrumentSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnStringField[] $lastFourDigits
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setLastFourDigits(SearchColumnStringField $lastFourDigits): PaymentInstrumentSearchRowBasic
    {
        $this->lastFourDigits[] = $lastFourDigits;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLastFourDigits(): array
    {
        return $this->lastFourDigits;
    }

    /**
     * @param SearchColumnStringField[] $mask
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setMask(SearchColumnStringField $mask): PaymentInstrumentSearchRowBasic
    {
        $this->mask[] = $mask;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMask(): array
    {
        return $this->mask;
    }

    /**
     * @param SearchColumnStringField[] $nameOnCard
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setNameOnCard(SearchColumnStringField $nameOnCard): PaymentInstrumentSearchRowBasic
    {
        $this->nameOnCard[] = $nameOnCard;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNameOnCard(): array
    {
        return $this->nameOnCard;
    }

    /**
     * @param SearchColumnSelectField[] $paymentInstrumentStateType
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setPaymentInstrumentStateType(SearchColumnSelectField $paymentInstrumentStateType): PaymentInstrumentSearchRowBasic
    {
        $this->paymentInstrumentStateType[] = $paymentInstrumentStateType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaymentInstrumentStateType(): array
    {
        return $this->paymentInstrumentStateType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentInstrumentType
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setPaymentInstrumentType(SearchColumnEnumSelectField $paymentInstrumentType): PaymentInstrumentSearchRowBasic
    {
        $this->paymentInstrumentType[] = $paymentInstrumentType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentInstrumentType(): array
    {
        return $this->paymentInstrumentType;
    }

    /**
     * @param SearchColumnSelectField[] $paymentMethod
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setPaymentMethod(SearchColumnSelectField $paymentMethod): PaymentInstrumentSearchRowBasic
    {
        $this->paymentMethod[] = $paymentMethod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaymentMethod(): array
    {
        return $this->paymentMethod;
    }

    /**
     * @param SearchColumnStringField[] $preserveOnFile
     * @return PaymentInstrumentSearchRowBasic
     */
    public function setPreserveOnFile(SearchColumnStringField $preserveOnFile): PaymentInstrumentSearchRowBasic
    {
        $this->preserveOnFile[] = $preserveOnFile;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPreserveOnFile(): array
    {
        return $this->preserveOnFile;
    }

}
