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

class Address extends Record {
    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var Country
     */
    protected Country $country;

    /**
     * @var string
     */
    protected string $attention;

    /**
     * @var string
     */
    protected string $addressee;

    /**
     * @var string
     */
    protected string $addrPhone;

    protected $addr1;
    protected $addr2;
    protected $addr3;
    /**
     * @var string
     */
    protected string $city;

    /**
     * @var string
     */
    protected string $state;

    /**
     * @var string
     */
    protected string $zip;

    /**
     * @var string
     */
    protected string $addrText;

    /**
     * @var bool
     */
    protected bool $override;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "internalId" => "string",
        "country" => "Country",
        "attention" => "string",
        "addressee" => "string",
        "addrPhone" => "string",
        "addr1" => "string",
        "addr2" => "string",
        "addr3" => "string",
        "city" => "string",
        "state" => "string",
        "zip" => "string",
        "addrText" => "string",
        "override" => "boolean",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param string $internalId
     * @return Address
     */
    public function setInternalId(string $internalId): Address
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
     * @param Country $country
     * @return Address
     */
    public function setCountry(Country $country): Address
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
     * @param string $attention
     * @return Address
     */
    public function setAttention(string $attention): Address
    {
        $this->attention = $attention;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttention(): string
    {
        return $this->attention;
    }

    /**
     * @param string $addressee
     * @return Address
     */
    public function setAddressee(string $addressee): Address
    {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressee(): string
    {
        return $this->addressee;
    }

    /**
     * @param string $addrPhone
     * @return Address
     */
    public function setAddrPhone(string $addrPhone): Address
    {
        $this->addrPhone = $addrPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddrPhone(): string
    {
        return $this->addrPhone;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
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
     * @param string $state
     * @return Address
     */
    public function setState(string $state): Address
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
     * @param string $zip
     * @return Address
     */
    public function setZip(string $zip): Address
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
     * @param string $addrText
     * @return Address
     */
    public function setAddrText(string $addrText): Address
    {
        $this->addrText = $addrText;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddrText(): string
    {
        return $this->addrText;
    }

    /**
     * @param bool $override
     * @return Address
     */
    public function setOverride(bool $override): Address
    {
        $this->override = $override;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverride(): bool
    {
        return $this->override;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Address
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Address
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

}
