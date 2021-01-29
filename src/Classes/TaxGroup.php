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

class TaxGroup extends Record {
    /**
     * @var string
     */
    protected string $itemId;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $state;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    protected $taxitem1;
    protected $unitprice1;
    protected $taxitem2;
    protected $unitprice2;
    /**
     * @var bool
     */
    protected bool $piggyback;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxType;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var string
     */
    protected string $county;

    /**
     * @var string
     */
    protected string $city;

    /**
     * @var string
     */
    protected string $zip;

    /**
     * @var RecordRef
     */
    protected RecordRef $nexusCountry;

    /**
     * @var bool
     */
    protected bool $isDefault;

    /**
     * @var TaxGroupTaxItemList
     */
    protected TaxGroupTaxItemList $taxItemList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "itemId" => "string",
        "description" => "string",
        "state" => "string",
        "subsidiaryList" => "RecordRefList",
        "taxitem1" => "RecordRef",
        "unitprice1" => "string",
        "taxitem2" => "RecordRef",
        "unitprice2" => "string",
        "piggyback" => "boolean",
        "isInactive" => "boolean",
        "rate" => "float",
        "taxType" => "RecordRef",
        "includeChildren" => "boolean",
        "county" => "string",
        "city" => "string",
        "zip" => "string",
        "nexusCountry" => "RecordRef",
        "isDefault" => "boolean",
        "taxItemList" => "TaxGroupTaxItemList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $itemId
     * @return TaxGroup
     */
    public function setItemId(string $itemId): TaxGroup
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param string $description
     * @return TaxGroup
     */
    public function setDescription(string $description): TaxGroup
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $state
     * @return TaxGroup
     */
    public function setState(string $state): TaxGroup
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return TaxGroup
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): TaxGroup
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param bool $piggyback
     * @return TaxGroup
     */
    public function setPiggyback(bool $piggyback): TaxGroup
    {
        $this->piggyback = $piggyback;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPiggyback(): bool
    {
        return $this->piggyback;
    }

    /**
     * @param bool $isInactive
     * @return TaxGroup
     */
    public function setIsInactive(bool $isInactive): TaxGroup
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
     * @param float $rate
     * @return TaxGroup
     */
    public function setRate(float $rate): TaxGroup
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param RecordRef $taxType
     * @return TaxGroup
     */
    public function setTaxType(RecordRef $taxType): TaxGroup
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxType(): RecordRef
    {
        return $this->taxType;
    }

    /**
     * @param bool $includeChildren
     * @return TaxGroup
     */
    public function setIncludeChildren(bool $includeChildren): TaxGroup
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param string $county
     * @return TaxGroup
     */
    public function setCounty(string $county): TaxGroup
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return string
     */
    public function getCounty(): string
    {
        return $this->county;
    }

    /**
     * @param string $city
     * @return TaxGroup
     */
    public function setCity(string $city): TaxGroup
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $zip
     * @return TaxGroup
     */
    public function setZip(string $zip): TaxGroup
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param RecordRef $nexusCountry
     * @return TaxGroup
     */
    public function setNexusCountry(RecordRef $nexusCountry): TaxGroup
    {
        $this->nexusCountry = $nexusCountry;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexusCountry(): RecordRef
    {
        return $this->nexusCountry;
    }

    /**
     * @param bool $isDefault
     * @return TaxGroup
     */
    public function setIsDefault(bool $isDefault): TaxGroup
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
     * @param TaxGroupTaxItemList $taxItemList
     * @return TaxGroup
     */
    public function setTaxItemList(TaxGroupTaxItemList $taxItemList): TaxGroup
    {
        $this->taxItemList = $taxItemList;
        return $this;
    }

    /**
     * @return TaxGroupTaxItemList
     */
    public function getTaxItemList(): TaxGroupTaxItemList
    {
        return $this->taxItemList;
    }

    /**
     * @param string $internalId
     * @return TaxGroup
     */
    public function setInternalId(string $internalId): TaxGroup
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
     * @return TaxGroup
     */
    public function setExternalId(string $externalId): TaxGroup
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
