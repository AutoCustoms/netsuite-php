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

class Nexus extends Record {
    /**
     * @var Country
     */
    protected Country $country;

    /**
     * @var RecordRef
     */
    protected RecordRef $state;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxAgency;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxAgencyPst;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentNexus;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $taxDateFromFulfillment;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "country" => "Country",
        "state" => "RecordRef",
        "taxAgency" => "RecordRef",
        "taxAgencyPst" => "RecordRef",
        "taxCode" => "RecordRef",
        "description" => "string",
        "parentNexus" => "RecordRef",
        "isInactive" => "boolean",
        "taxDateFromFulfillment" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param Country $country
     * @return Nexus
     */
    public function setCountry(Country $country): Nexus
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
     * @param RecordRef $state
     * @return Nexus
     */
    public function setState(RecordRef $state): Nexus
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getState(): RecordRef
    {
        return $this->state;
    }

    /**
     * @param RecordRef $taxAgency
     * @return Nexus
     */
    public function setTaxAgency(RecordRef $taxAgency): Nexus
    {
        $this->taxAgency = $taxAgency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAgency(): RecordRef
    {
        return $this->taxAgency;
    }

    /**
     * @param RecordRef $taxAgencyPst
     * @return Nexus
     */
    public function setTaxAgencyPst(RecordRef $taxAgencyPst): Nexus
    {
        $this->taxAgencyPst = $taxAgencyPst;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAgencyPst(): RecordRef
    {
        return $this->taxAgencyPst;
    }

    /**
     * @param RecordRef $taxCode
     * @return Nexus
     */
    public function setTaxCode(RecordRef $taxCode): Nexus
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode(): RecordRef
    {
        return $this->taxCode;
    }

    /**
     * @param string $description
     * @return Nexus
     */
    public function setDescription(string $description): Nexus
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
     * @param RecordRef $parentNexus
     * @return Nexus
     */
    public function setParentNexus(RecordRef $parentNexus): Nexus
    {
        $this->parentNexus = $parentNexus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentNexus(): RecordRef
    {
        return $this->parentNexus;
    }

    /**
     * @param bool $isInactive
     * @return Nexus
     */
    public function setIsInactive(bool $isInactive): Nexus
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
     * @param bool $taxDateFromFulfillment
     * @return Nexus
     */
    public function setTaxDateFromFulfillment(bool $taxDateFromFulfillment): Nexus
    {
        $this->taxDateFromFulfillment = $taxDateFromFulfillment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxDateFromFulfillment(): bool
    {
        return $this->taxDateFromFulfillment;
    }

    /**
     * @param string $internalId
     * @return Nexus
     */
    public function setInternalId(string $internalId): Nexus
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
     * @return Nexus
     */
    public function setExternalId(string $externalId): Nexus
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
