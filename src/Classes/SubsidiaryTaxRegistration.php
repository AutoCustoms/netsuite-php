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

class SubsidiaryTaxRegistration {
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var Country
     */
    protected Country $nexusCountry;

    /**
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxAgency;

    /**
     * @var string
     */
    protected string $taxRegistrationNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxEngine;

    /**
     * @var string
     */
    protected string $effectiveFrom;

    /**
     * @var string
     */
    protected string $validUntil;

    static $paramtypesmap = array(
        "id" => "integer",
        "nexusCountry" => "Country",
        "nexus" => "RecordRef",
        "taxAgency" => "RecordRef",
        "taxRegistrationNumber" => "string",
        "taxEngine" => "RecordRef",
        "effectiveFrom" => "dateTime",
        "validUntil" => "dateTime",
    );

    /**
     * @param int $id
     * @return SubsidiaryTaxRegistration
     */
    public function setId(int $id): SubsidiaryTaxRegistration
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param Country $nexusCountry
     * @return SubsidiaryTaxRegistration
     */
    public function setNexusCountry(Country $nexusCountry): SubsidiaryTaxRegistration
    {
        $this->nexusCountry = $nexusCountry;
        return $this;
    }

    /**
     * @return Country
     */
    public function getNexusCountry(): Country
    {
        return $this->nexusCountry;
    }

    /**
     * @param RecordRef $nexus
     * @return SubsidiaryTaxRegistration
     */
    public function setNexus(RecordRef $nexus): SubsidiaryTaxRegistration
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
     * @param RecordRef $taxAgency
     * @return SubsidiaryTaxRegistration
     */
    public function setTaxAgency(RecordRef $taxAgency): SubsidiaryTaxRegistration
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
     * @param string $taxRegistrationNumber
     * @return SubsidiaryTaxRegistration
     */
    public function setTaxRegistrationNumber(string $taxRegistrationNumber): SubsidiaryTaxRegistration
    {
        $this->taxRegistrationNumber = $taxRegistrationNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxRegistrationNumber(): string
    {
        return $this->taxRegistrationNumber;
    }

    /**
     * @param RecordRef $taxEngine
     * @return SubsidiaryTaxRegistration
     */
    public function setTaxEngine(RecordRef $taxEngine): SubsidiaryTaxRegistration
    {
        $this->taxEngine = $taxEngine;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxEngine(): RecordRef
    {
        return $this->taxEngine;
    }

    /**
     * @param string $effectiveFrom
     * @return SubsidiaryTaxRegistration
     */
    public function setEffectiveFrom(string $effectiveFrom): SubsidiaryTaxRegistration
    {
        $this->effectiveFrom = $effectiveFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveFrom(): string
    {
        return $this->effectiveFrom;
    }

    /**
     * @param string $validUntil
     * @return SubsidiaryTaxRegistration
     */
    public function setValidUntil(string $validUntil): SubsidiaryTaxRegistration
    {
        $this->validUntil = $validUntil;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidUntil(): string
    {
        return $this->validUntil;
    }

}
