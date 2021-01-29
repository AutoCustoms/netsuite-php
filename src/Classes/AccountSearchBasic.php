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

class AccountSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingContext;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $balance;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $cashFlowRateType;

    protected $category1099Misc;
    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $displayName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $generalRateType;

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
    protected SearchStringField $legalName;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locale;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $localizedLegalName;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $localizedName;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $localizedNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $number;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountingContext" => "SearchMultiSelectField",
        "balance" => "SearchDoubleField",
        "cashFlowRateType" => "SearchEnumMultiSelectField",
        "category1099Misc" => "SearchMultiSelectField",
        "description" => "SearchStringField",
        "displayName" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "generalRateType" => "SearchEnumMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "legalName" => "SearchStringField",
        "locale" => "SearchEnumMultiSelectField",
        "localizedLegalName" => "SearchStringField",
        "localizedName" => "SearchStringField",
        "localizedNumber" => "SearchStringField",
        "name" => "SearchStringField",
        "number" => "SearchStringField",
        "parent" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "type" => "SearchEnumMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $accountingContext
     * @return AccountSearchBasic
     */
    public function setAccountingContext(SearchMultiSelectField $accountingContext): AccountSearchBasic
    {
        $this->accountingContext = $accountingContext;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingContext(): SearchMultiSelectField
    {
        return $this->accountingContext;
    }

    /**
     * @param SearchDoubleField $balance
     * @return AccountSearchBasic
     */
    public function setBalance(SearchDoubleField $balance): AccountSearchBasic
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBalance(): SearchDoubleField
    {
        return $this->balance;
    }

    /**
     * @param SearchEnumMultiSelectField $cashFlowRateType
     * @return AccountSearchBasic
     */
    public function setCashFlowRateType(SearchEnumMultiSelectField $cashFlowRateType): AccountSearchBasic
    {
        $this->cashFlowRateType = $cashFlowRateType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCashFlowRateType(): SearchEnumMultiSelectField
    {
        return $this->cashFlowRateType;
    }

    /**
     * @param SearchStringField $description
     * @return AccountSearchBasic
     */
    public function setDescription(SearchStringField $description): AccountSearchBasic
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
     * @param SearchStringField $displayName
     * @return AccountSearchBasic
     */
    public function setDisplayName(SearchStringField $displayName): AccountSearchBasic
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDisplayName(): SearchStringField
    {
        return $this->displayName;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return AccountSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): AccountSearchBasic
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
     * @return AccountSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): AccountSearchBasic
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
     * @param SearchEnumMultiSelectField $generalRateType
     * @return AccountSearchBasic
     */
    public function setGeneralRateType(SearchEnumMultiSelectField $generalRateType): AccountSearchBasic
    {
        $this->generalRateType = $generalRateType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGeneralRateType(): SearchEnumMultiSelectField
    {
        return $this->generalRateType;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return AccountSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): AccountSearchBasic
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
     * @return AccountSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): AccountSearchBasic
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
     * @return AccountSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): AccountSearchBasic
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
     * @param SearchStringField $legalName
     * @return AccountSearchBasic
     */
    public function setLegalName(SearchStringField $legalName): AccountSearchBasic
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLegalName(): SearchStringField
    {
        return $this->legalName;
    }

    /**
     * @param SearchEnumMultiSelectField $locale
     * @return AccountSearchBasic
     */
    public function setLocale(SearchEnumMultiSelectField $locale): AccountSearchBasic
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocale(): SearchEnumMultiSelectField
    {
        return $this->locale;
    }

    /**
     * @param SearchStringField $localizedLegalName
     * @return AccountSearchBasic
     */
    public function setLocalizedLegalName(SearchStringField $localizedLegalName): AccountSearchBasic
    {
        $this->localizedLegalName = $localizedLegalName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocalizedLegalName(): SearchStringField
    {
        return $this->localizedLegalName;
    }

    /**
     * @param SearchStringField $localizedName
     * @return AccountSearchBasic
     */
    public function setLocalizedName(SearchStringField $localizedName): AccountSearchBasic
    {
        $this->localizedName = $localizedName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocalizedName(): SearchStringField
    {
        return $this->localizedName;
    }

    /**
     * @param SearchStringField $localizedNumber
     * @return AccountSearchBasic
     */
    public function setLocalizedNumber(SearchStringField $localizedNumber): AccountSearchBasic
    {
        $this->localizedNumber = $localizedNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocalizedNumber(): SearchStringField
    {
        return $this->localizedNumber;
    }

    /**
     * @param SearchStringField $name
     * @return AccountSearchBasic
     */
    public function setName(SearchStringField $name): AccountSearchBasic
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
     * @param SearchStringField $number
     * @return AccountSearchBasic
     */
    public function setNumber(SearchStringField $number): AccountSearchBasic
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNumber(): SearchStringField
    {
        return $this->number;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return AccountSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): AccountSearchBasic
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent(): SearchMultiSelectField
    {
        return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return AccountSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): AccountSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return AccountSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): AccountSearchBasic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType(): SearchEnumMultiSelectField
    {
        return $this->type;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return AccountSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): AccountSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
