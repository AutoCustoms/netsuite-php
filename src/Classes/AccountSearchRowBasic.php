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

class AccountSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $accountingContext;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $balance;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $cashFlowRateType;

    protected $category1099Misc;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $displayName;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $generalRateType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $legalName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $locale;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $localizedLegalName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $localizedName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $localizedNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $number;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $type;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountingContext" => "SearchColumnStringField[]",
        "balance" => "SearchColumnDoubleField[]",
        "cashFlowRateType" => "SearchColumnEnumSelectField[]",
        "category1099Misc" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "displayName" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "generalRateType" => "SearchColumnEnumSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "legalName" => "SearchColumnStringField[]",
        "locale" => "SearchColumnStringField[]",
        "localizedLegalName" => "SearchColumnStringField[]",
        "localizedName" => "SearchColumnStringField[]",
        "localizedNumber" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "number" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $accountingContext
     * @return AccountSearchRowBasic
     */
    public function setAccountingContext(SearchColumnStringField $accountingContext): AccountSearchRowBasic
    {
        $this->accountingContext[] = $accountingContext;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountingContext(): array
    {
        return $this->accountingContext;
    }

    /**
     * @param SearchColumnDoubleField[] $balance
     * @return AccountSearchRowBasic
     */
    public function setBalance(SearchColumnDoubleField $balance): AccountSearchRowBasic
    {
        $this->balance[] = $balance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBalance(): array
    {
        return $this->balance;
    }

    /**
     * @param SearchColumnEnumSelectField[] $cashFlowRateType
     * @return AccountSearchRowBasic
     */
    public function setCashFlowRateType(SearchColumnEnumSelectField $cashFlowRateType): AccountSearchRowBasic
    {
        $this->cashFlowRateType[] = $cashFlowRateType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCashFlowRateType(): array
    {
        return $this->cashFlowRateType;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return AccountSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): AccountSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $displayName
     * @return AccountSearchRowBasic
     */
    public function setDisplayName(SearchColumnStringField $displayName): AccountSearchRowBasic
    {
        $this->displayName[] = $displayName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDisplayName(): array
    {
        return $this->displayName;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return AccountSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): AccountSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $generalRateType
     * @return AccountSearchRowBasic
     */
    public function setGeneralRateType(SearchColumnEnumSelectField $generalRateType): AccountSearchRowBasic
    {
        $this->generalRateType[] = $generalRateType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGeneralRateType(): array
    {
        return $this->generalRateType;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return AccountSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): AccountSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInactive
     * @return AccountSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): AccountSearchRowBasic
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
     * @param SearchColumnStringField[] $legalName
     * @return AccountSearchRowBasic
     */
    public function setLegalName(SearchColumnStringField $legalName): AccountSearchRowBasic
    {
        $this->legalName[] = $legalName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLegalName(): array
    {
        return $this->legalName;
    }

    /**
     * @param SearchColumnStringField[] $locale
     * @return AccountSearchRowBasic
     */
    public function setLocale(SearchColumnStringField $locale): AccountSearchRowBasic
    {
        $this->locale[] = $locale;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocale(): array
    {
        return $this->locale;
    }

    /**
     * @param SearchColumnStringField[] $localizedLegalName
     * @return AccountSearchRowBasic
     */
    public function setLocalizedLegalName(SearchColumnStringField $localizedLegalName): AccountSearchRowBasic
    {
        $this->localizedLegalName[] = $localizedLegalName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocalizedLegalName(): array
    {
        return $this->localizedLegalName;
    }

    /**
     * @param SearchColumnStringField[] $localizedName
     * @return AccountSearchRowBasic
     */
    public function setLocalizedName(SearchColumnStringField $localizedName): AccountSearchRowBasic
    {
        $this->localizedName[] = $localizedName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocalizedName(): array
    {
        return $this->localizedName;
    }

    /**
     * @param SearchColumnStringField[] $localizedNumber
     * @return AccountSearchRowBasic
     */
    public function setLocalizedNumber(SearchColumnStringField $localizedNumber): AccountSearchRowBasic
    {
        $this->localizedNumber[] = $localizedNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocalizedNumber(): array
    {
        return $this->localizedNumber;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return AccountSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): AccountSearchRowBasic
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

    /**
     * @param SearchColumnStringField[] $number
     * @return AccountSearchRowBasic
     */
    public function setNumber(SearchColumnStringField $number): AccountSearchRowBasic
    {
        $this->number[] = $number;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNumber(): array
    {
        return $this->number;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return AccountSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): AccountSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return AccountSearchRowBasic
     */
    public function setType(SearchColumnEnumSelectField $type): AccountSearchRowBasic
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getType(): array
    {
        return $this->type;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return AccountSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): AccountSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
