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

class State extends Record {
    /**
     * @var Country
     */
    protected Country $country;

    /**
     * @var string
     */
    protected string $fullName;

    /**
     * @var string
     */
    protected string $shortname;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "country" => "Country",
        "fullName" => "string",
        "shortname" => "string",
        "internalId" => "string",
    );

    /**
     * @param Country $country
     * @return State
     */
    public function setCountry(Country $country): State
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
     * @param string $fullName
     * @return State
     */
    public function setFullName(string $fullName): State
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $shortname
     * @return State
     */
    public function setShortname(string $shortname): State
    {
        $this->shortname = $shortname;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortname(): string
    {
        return $this->shortname;
    }

    /**
     * @param string $internalId
     * @return State
     */
    public function setInternalId(string $internalId): State
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

}
