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

class TaxTypeSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $doesNotAddToTotal;

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
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $nexus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $payablesAccount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $postToItemCost;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $receivablesAccount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $reverseCharge;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $taxInNetAmount;

    static $paramtypesmap = array(
        "country" => "SearchEnumMultiSelectField",
        "description" => "SearchStringField",
        "doesNotAddToTotal" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "nexus" => "SearchMultiSelectField",
        "payablesAccount" => "SearchMultiSelectField",
        "postToItemCost" => "SearchBooleanField",
        "receivablesAccount" => "SearchMultiSelectField",
        "reverseCharge" => "SearchBooleanField",
        "taxInNetAmount" => "SearchBooleanField",
    );

    /**
     * @param SearchEnumMultiSelectField $country
     * @return TaxTypeSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): TaxTypeSearchBasic
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountry(): SearchEnumMultiSelectField
    {
        return $this->country;
    }

    /**
     * @param SearchStringField $description
     * @return TaxTypeSearchBasic
     */
    public function setDescription(SearchStringField $description): TaxTypeSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchBooleanField $doesNotAddToTotal
     * @return TaxTypeSearchBasic
     */
    public function setDoesNotAddToTotal(SearchBooleanField $doesNotAddToTotal): TaxTypeSearchBasic
    {
        $this->doesNotAddToTotal = $doesNotAddToTotal;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDoesNotAddToTotal(): SearchBooleanField
    {
        return $this->doesNotAddToTotal;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return TaxTypeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TaxTypeSearchBasic
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
     * @return TaxTypeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TaxTypeSearchBasic
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
     * @return TaxTypeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TaxTypeSearchBasic
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
     * @return TaxTypeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TaxTypeSearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return TaxTypeSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): TaxTypeSearchBasic
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
     * @return TaxTypeSearchBasic
     */
    public function setName(SearchStringField $name): TaxTypeSearchBasic
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

    /**
     * @param SearchMultiSelectField $nexus
     * @return TaxTypeSearchBasic
     */
    public function setNexus(SearchMultiSelectField $nexus): TaxTypeSearchBasic
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNexus(): SearchMultiSelectField
    {
        return $this->nexus;
    }

    /**
     * @param SearchMultiSelectField $payablesAccount
     * @return TaxTypeSearchBasic
     */
    public function setPayablesAccount(SearchMultiSelectField $payablesAccount): TaxTypeSearchBasic
    {
        $this->payablesAccount = $payablesAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayablesAccount(): SearchMultiSelectField
    {
        return $this->payablesAccount;
    }

    /**
     * @param SearchBooleanField $postToItemCost
     * @return TaxTypeSearchBasic
     */
    public function setPostToItemCost(SearchBooleanField $postToItemCost): TaxTypeSearchBasic
    {
        $this->postToItemCost = $postToItemCost;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPostToItemCost(): SearchBooleanField
    {
        return $this->postToItemCost;
    }

    /**
     * @param SearchMultiSelectField $receivablesAccount
     * @return TaxTypeSearchBasic
     */
    public function setReceivablesAccount(SearchMultiSelectField $receivablesAccount): TaxTypeSearchBasic
    {
        $this->receivablesAccount = $receivablesAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReceivablesAccount(): SearchMultiSelectField
    {
        return $this->receivablesAccount;
    }

    /**
     * @param SearchBooleanField $reverseCharge
     * @return TaxTypeSearchBasic
     */
    public function setReverseCharge(SearchBooleanField $reverseCharge): TaxTypeSearchBasic
    {
        $this->reverseCharge = $reverseCharge;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getReverseCharge(): SearchBooleanField
    {
        return $this->reverseCharge;
    }

    /**
     * @param SearchBooleanField $taxInNetAmount
     * @return TaxTypeSearchBasic
     */
    public function setTaxInNetAmount(SearchBooleanField $taxInNetAmount): TaxTypeSearchBasic
    {
        $this->taxInNetAmount = $taxInNetAmount;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTaxInNetAmount(): SearchBooleanField
    {
        return $this->taxInNetAmount;
    }

}
