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

class PaymentMethodSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $account;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $creditCard;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isDebitCard;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "creditCard" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDebitCard" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnSelectField[] $account
     * @return PaymentMethodSearchRowBasic
     */
    public function setAccount(SearchColumnSelectField $account): PaymentMethodSearchRowBasic
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount(): array
    {
        return $this->account;
    }

    /**
     * @param SearchColumnBooleanField[] $creditCard
     * @return PaymentMethodSearchRowBasic
     */
    public function setCreditCard(SearchColumnBooleanField $creditCard): PaymentMethodSearchRowBasic
    {
        $this->creditCard[] = $creditCard;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCreditCard(): array
    {
        return $this->creditCard;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return PaymentMethodSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): PaymentMethodSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return PaymentMethodSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PaymentMethodSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isDebitCard
     * @return PaymentMethodSearchRowBasic
     */
    public function setIsDebitCard(SearchColumnBooleanField $isDebitCard): PaymentMethodSearchRowBasic
    {
        $this->isDebitCard[] = $isDebitCard;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDebitCard(): array
    {
        return $this->isDebitCard;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return PaymentMethodSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): PaymentMethodSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return PaymentMethodSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): PaymentMethodSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

}
