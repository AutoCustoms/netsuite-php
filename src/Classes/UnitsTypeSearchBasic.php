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

class UnitsTypeSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $abbreviation;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $baseUnit;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $conversionRate;

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
    protected SearchBooleanField $isInActive;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $pluralAbbreviation;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $pluralName;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $unitName;

    static $paramtypesmap = array(
        "abbreviation" => "SearchStringField",
        "baseUnit" => "SearchBooleanField",
        "conversionRate" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInActive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "pluralAbbreviation" => "SearchStringField",
        "pluralName" => "SearchStringField",
        "unitName" => "SearchStringField",
    );

    /**
     * @param SearchStringField $abbreviation
     * @return UnitsTypeSearchBasic
     */
    public function setAbbreviation(SearchStringField $abbreviation): UnitsTypeSearchBasic
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAbbreviation(): SearchStringField
    {
        return $this->abbreviation;
    }

    /**
     * @param SearchBooleanField $baseUnit
     * @return UnitsTypeSearchBasic
     */
    public function setBaseUnit(SearchBooleanField $baseUnit): UnitsTypeSearchBasic
    {
        $this->baseUnit = $baseUnit;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBaseUnit(): SearchBooleanField
    {
        return $this->baseUnit;
    }

    /**
     * @param SearchStringField $conversionRate
     * @return UnitsTypeSearchBasic
     */
    public function setConversionRate(SearchStringField $conversionRate): UnitsTypeSearchBasic
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getConversionRate(): SearchStringField
    {
        return $this->conversionRate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return UnitsTypeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): UnitsTypeSearchBasic
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
     * @return UnitsTypeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): UnitsTypeSearchBasic
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
     * @return UnitsTypeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): UnitsTypeSearchBasic
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
     * @return UnitsTypeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): UnitsTypeSearchBasic
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
     * @param SearchBooleanField $isInActive
     * @return UnitsTypeSearchBasic
     */
    public function setIsInActive(SearchBooleanField $isInActive): UnitsTypeSearchBasic
    {
        $this->isInActive = $isInActive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInActive(): SearchBooleanField
    {
        return $this->isInActive;
    }

    /**
     * @param SearchStringField $name
     * @return UnitsTypeSearchBasic
     */
    public function setName(SearchStringField $name): UnitsTypeSearchBasic
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
     * @param SearchStringField $pluralAbbreviation
     * @return UnitsTypeSearchBasic
     */
    public function setPluralAbbreviation(SearchStringField $pluralAbbreviation): UnitsTypeSearchBasic
    {
        $this->pluralAbbreviation = $pluralAbbreviation;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPluralAbbreviation(): SearchStringField
    {
        return $this->pluralAbbreviation;
    }

    /**
     * @param SearchStringField $pluralName
     * @return UnitsTypeSearchBasic
     */
    public function setPluralName(SearchStringField $pluralName): UnitsTypeSearchBasic
    {
        $this->pluralName = $pluralName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPluralName(): SearchStringField
    {
        return $this->pluralName;
    }

    /**
     * @param SearchStringField $unitName
     * @return UnitsTypeSearchBasic
     */
    public function setUnitName(SearchStringField $unitName): UnitsTypeSearchBasic
    {
        $this->unitName = $unitName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUnitName(): SearchStringField
    {
        return $this->unitName;
    }

}
