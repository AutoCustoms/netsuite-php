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

class TaxType extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $doesNotAddToTotal;

    /**
     * @var bool
     */
    protected bool $postToItemCost;

    /**
     * @var bool
     */
    protected bool $taxInNetAmount;

    /**
     * @var bool
     */
    protected bool $reverseCharge;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var TaxTypeNexusAccountsList
     */
    protected TaxTypeNexusAccountsList $nexusAccountsList;

    /**
     * @var TaxTypeNexusesTaxList
     */
    protected TaxTypeNexusesTaxList $nexusesTaxList;

    /**
     * @var Country
     */
    protected Country $country;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "description" => "string",
        "doesNotAddToTotal" => "boolean",
        "postToItemCost" => "boolean",
        "taxInNetAmount" => "boolean",
        "reverseCharge" => "boolean",
        "isInactive" => "boolean",
        "nexusAccountsList" => "TaxTypeNexusAccountsList",
        "nexusesTaxList" => "TaxTypeNexusesTaxList",
        "country" => "Country",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return TaxType
     */
    public function setName(string $name): TaxType
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $description
     * @return TaxType
     */
    public function setDescription(string $description): TaxType
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
     * @param bool $doesNotAddToTotal
     * @return TaxType
     */
    public function setDoesNotAddToTotal(bool $doesNotAddToTotal): TaxType
    {
        $this->doesNotAddToTotal = $doesNotAddToTotal;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDoesNotAddToTotal(): bool
    {
        return $this->doesNotAddToTotal;
    }

    /**
     * @param bool $postToItemCost
     * @return TaxType
     */
    public function setPostToItemCost(bool $postToItemCost): TaxType
    {
        $this->postToItemCost = $postToItemCost;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPostToItemCost(): bool
    {
        return $this->postToItemCost;
    }

    /**
     * @param bool $taxInNetAmount
     * @return TaxType
     */
    public function setTaxInNetAmount(bool $taxInNetAmount): TaxType
    {
        $this->taxInNetAmount = $taxInNetAmount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxInNetAmount(): bool
    {
        return $this->taxInNetAmount;
    }

    /**
     * @param bool $reverseCharge
     * @return TaxType
     */
    public function setReverseCharge(bool $reverseCharge): TaxType
    {
        $this->reverseCharge = $reverseCharge;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReverseCharge(): bool
    {
        return $this->reverseCharge;
    }

    /**
     * @param bool $isInactive
     * @return TaxType
     */
    public function setIsInactive(bool $isInactive): TaxType
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
     * @param TaxTypeNexusAccountsList $nexusAccountsList
     * @return TaxType
     */
    public function setNexusAccountsList(TaxTypeNexusAccountsList $nexusAccountsList): TaxType
    {
        $this->nexusAccountsList = $nexusAccountsList;
        return $this;
    }

    /**
     * @return TaxTypeNexusAccountsList
     */
    public function getNexusAccountsList(): TaxTypeNexusAccountsList
    {
        return $this->nexusAccountsList;
    }

    /**
     * @param TaxTypeNexusesTaxList $nexusesTaxList
     * @return TaxType
     */
    public function setNexusesTaxList(TaxTypeNexusesTaxList $nexusesTaxList): TaxType
    {
        $this->nexusesTaxList = $nexusesTaxList;
        return $this;
    }

    /**
     * @return TaxTypeNexusesTaxList
     */
    public function getNexusesTaxList(): TaxTypeNexusesTaxList
    {
        return $this->nexusesTaxList;
    }

    /**
     * @param Country $country
     * @return TaxType
     */
    public function setCountry(Country $country): TaxType
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @param string $internalId
     * @return TaxType
     */
    public function setInternalId(string $internalId): TaxType
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
     * @return TaxType
     */
    public function setExternalId(string $externalId): TaxType
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
