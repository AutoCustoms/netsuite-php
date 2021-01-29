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

class PaymentMethodSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $creditCard;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isDebitCard;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "creditCard" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDebitCard" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
    );

    /**
     * @param SearchMultiSelectField $account
     * @return PaymentMethodSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): PaymentMethodSearchBasic
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount(): SearchMultiSelectField
    {
        return $this->account;
    }

    /**
     * @param SearchBooleanField $creditCard
     * @return PaymentMethodSearchBasic
     */
    public function setCreditCard(SearchBooleanField $creditCard): PaymentMethodSearchBasic
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCreditCard(): SearchBooleanField
    {
        return $this->creditCard;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return PaymentMethodSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): PaymentMethodSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return PaymentMethodSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): PaymentMethodSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return PaymentMethodSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PaymentMethodSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return PaymentMethodSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PaymentMethodSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isDebitCard
     * @return PaymentMethodSearchBasic
     */
    public function setIsDebitCard(SearchBooleanField $isDebitCard): PaymentMethodSearchBasic
    {
        $this->isDebitCard = $isDebitCard;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDebitCard(): SearchBooleanField
    {
        return $this->isDebitCard;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return PaymentMethodSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): PaymentMethodSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchStringField $name
     * @return PaymentMethodSearchBasic
     */
    public function setName(SearchStringField $name): PaymentMethodSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

}
