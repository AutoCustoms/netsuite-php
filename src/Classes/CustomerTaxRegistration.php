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

class CustomerTaxRegistration {
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
    protected RecordRef $address;

    /**
     * @var string
     */
    protected string $taxRegistrationNumber;

    /**
     * @var int
     */
    protected int $id;

    static $paramtypesmap = array(
        "nexusCountry" => "Country",
        "nexus" => "RecordRef",
        "address" => "RecordRef",
        "taxRegistrationNumber" => "string",
        "id" => "integer",
    );

    /**
     * @param Country $nexusCountry
     * @return CustomerTaxRegistration
     */
    public function setNexusCountry(Country $nexusCountry): CustomerTaxRegistration
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
     * @return CustomerTaxRegistration
     */
    public function setNexus(RecordRef $nexus): CustomerTaxRegistration
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
     * @param RecordRef $address
     * @return CustomerTaxRegistration
     */
    public function setAddress(RecordRef $address): CustomerTaxRegistration
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAddress(): RecordRef
    {
        return $this->address;
    }

    /**
     * @param string $taxRegistrationNumber
     * @return CustomerTaxRegistration
     */
    public function setTaxRegistrationNumber(string $taxRegistrationNumber): CustomerTaxRegistration
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
     * @param int $id
     * @return CustomerTaxRegistration
     */
    public function setId(int $id): CustomerTaxRegistration
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

}
