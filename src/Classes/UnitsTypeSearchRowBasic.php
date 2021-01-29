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

class UnitsTypeSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $abbreviation;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $baseUnit;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $conversionRate;

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
    protected array $isInActive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pluralAbbreviation;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pluralName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $unitName;

    static $paramtypesmap = array(
        "abbreviation" => "SearchColumnStringField[]",
        "baseUnit" => "SearchColumnBooleanField[]",
        "conversionRate" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInActive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "pluralAbbreviation" => "SearchColumnStringField[]",
        "pluralName" => "SearchColumnStringField[]",
        "unitName" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnStringField[] $abbreviation
     * @return UnitsTypeSearchRowBasic
     */
    public function setAbbreviation(SearchColumnStringField $abbreviation): UnitsTypeSearchRowBasic
    {
        $this->abbreviation[] = $abbreviation;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAbbreviation(): array
    {
        return $this->abbreviation;
    }

    /**
     * @param SearchColumnBooleanField[] $baseUnit
     * @return UnitsTypeSearchRowBasic
     */
    public function setBaseUnit(SearchColumnBooleanField $baseUnit): UnitsTypeSearchRowBasic
    {
        $this->baseUnit[] = $baseUnit;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getBaseUnit(): array
    {
        return $this->baseUnit;
    }

    /**
     * @param SearchColumnStringField[] $conversionRate
     * @return UnitsTypeSearchRowBasic
     */
    public function setConversionRate(SearchColumnStringField $conversionRate): UnitsTypeSearchRowBasic
    {
        $this->conversionRate[] = $conversionRate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getConversionRate(): array
    {
        return $this->conversionRate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return UnitsTypeSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): UnitsTypeSearchRowBasic
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
     * @return UnitsTypeSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): UnitsTypeSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInActive
     * @return UnitsTypeSearchRowBasic
     */
    public function setIsInActive(SearchColumnBooleanField $isInActive): UnitsTypeSearchRowBasic
    {
        $this->isInActive[] = $isInActive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInActive(): array
    {
        return $this->isInActive;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return UnitsTypeSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): UnitsTypeSearchRowBasic
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
     * @param SearchColumnStringField[] $pluralAbbreviation
     * @return UnitsTypeSearchRowBasic
     */
    public function setPluralAbbreviation(SearchColumnStringField $pluralAbbreviation): UnitsTypeSearchRowBasic
    {
        $this->pluralAbbreviation[] = $pluralAbbreviation;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPluralAbbreviation(): array
    {
        return $this->pluralAbbreviation;
    }

    /**
     * @param SearchColumnStringField[] $pluralName
     * @return UnitsTypeSearchRowBasic
     */
    public function setPluralName(SearchColumnStringField $pluralName): UnitsTypeSearchRowBasic
    {
        $this->pluralName[] = $pluralName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPluralName(): array
    {
        return $this->pluralName;
    }

    /**
     * @param SearchColumnStringField[] $unitName
     * @return UnitsTypeSearchRowBasic
     */
    public function setUnitName(SearchColumnStringField $unitName): UnitsTypeSearchRowBasic
    {
        $this->unitName[] = $unitName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUnitName(): array
    {
        return $this->unitName;
    }

}
