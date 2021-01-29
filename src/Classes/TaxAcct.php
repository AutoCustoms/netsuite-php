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

class TaxAcct extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var Country
     */
    protected Country $country;

    /**
     * @var TaxAcctType
     */
    protected TaxAcctType $taxAcctType;

    /**
     * @var bool
     */
    protected bool $isInactive;

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
        "nexus" => "RecordRef",
        "country" => "Country",
        "taxAcctType" => "TaxAcctType",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return TaxAcct
     */
    public function setName(string $name): TaxAcct
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
     * @return TaxAcct
     */
    public function setDescription(string $description): TaxAcct
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
     * @param RecordRef $nexus
     * @return TaxAcct
     */
    public function setNexus(RecordRef $nexus): TaxAcct
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus(): RecordRef
    {
        return $this->nexus;
    }

    /**
     * @param Country $country
     * @return TaxAcct
     */
    public function setCountry(Country $country): TaxAcct
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
     * @param TaxAcctType $taxAcctType
     * @return TaxAcct
     */
    public function setTaxAcctType(TaxAcctType $taxAcctType): TaxAcct
    {
        $this->taxAcctType = $taxAcctType;
        return $this;
    }

    /**
     * @return TaxAcctType
     */
    public function getTaxAcctType(): TaxAcctType
    {
        return $this->taxAcctType;
    }

    /**
     * @param bool $isInactive
     * @return TaxAcct
     */
    public function setIsInactive(bool $isInactive): TaxAcct
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
     * @param string $internalId
     * @return TaxAcct
     */
    public function setInternalId(string $internalId): TaxAcct
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
     * @return TaxAcct
     */
    public function setExternalId(string $externalId): TaxAcct
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
