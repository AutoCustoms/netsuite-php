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

class UnitsTypeUom {
    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $unitName;

    /**
     * @var string
     */
    protected string $pluralName;

    /**
     * @var string
     */
    protected string $abbreviation;

    /**
     * @var string
     */
    protected string $pluralAbbreviation;

    /**
     * @var float
     */
    protected float $conversionRate;

    /**
     * @var bool
     */
    protected bool $baseUnit;

    static $paramtypesmap = array(
        "internalId" => "string",
        "unitName" => "string",
        "pluralName" => "string",
        "abbreviation" => "string",
        "pluralAbbreviation" => "string",
        "conversionRate" => "float",
        "baseUnit" => "boolean",
    );

    /**
     * @param string $internalId
     * @return UnitsTypeUom
     */
    public function setInternalId(string $internalId): UnitsTypeUom
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
     * @param string $unitName
     * @return UnitsTypeUom
     */
    public function setUnitName(string $unitName): UnitsTypeUom
    {
        $this->unitName = $unitName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @param string $pluralName
     * @return UnitsTypeUom
     */
    public function setPluralName(string $pluralName): UnitsTypeUom
    {
        $this->pluralName = $pluralName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPluralName(): string
    {
        return $this->pluralName;
    }

    /**
     * @param string $abbreviation
     * @return UnitsTypeUom
     */
    public function setAbbreviation(string $abbreviation): UnitsTypeUom
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    /**
     * @param string $pluralAbbreviation
     * @return UnitsTypeUom
     */
    public function setPluralAbbreviation(string $pluralAbbreviation): UnitsTypeUom
    {
        $this->pluralAbbreviation = $pluralAbbreviation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPluralAbbreviation(): string
    {
        return $this->pluralAbbreviation;
    }

    /**
     * @param float $conversionRate
     * @return UnitsTypeUom
     */
    public function setConversionRate(float $conversionRate): UnitsTypeUom
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate(): float
    {
        return $this->conversionRate;
    }

    /**
     * @param bool $baseUnit
     * @return UnitsTypeUom
     */
    public function setBaseUnit(bool $baseUnit): UnitsTypeUom
    {
        $this->baseUnit = $baseUnit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBaseUnit(): bool
    {
        return $this->baseUnit;
    }

}
