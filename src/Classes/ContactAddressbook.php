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

class ContactAddressbook {
    /**
     * @var bool
     */
    protected bool $defaultShipping;

    /**
     * @var bool
     */
    protected bool $defaultBilling;

    /**
     * @var string
     */
    protected string $label;

    /**
     * @var Address
     */
    protected Address $addressbookAddress;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "defaultShipping" => "boolean",
        "defaultBilling" => "boolean",
        "label" => "string",
        "addressbookAddress" => "Address",
        "internalId" => "string",
    );

    /**
     * @param bool $defaultShipping
     * @return ContactAddressbook
     */
    public function setDefaultShipping(bool $defaultShipping): ContactAddressbook
    {
        $this->defaultShipping = $defaultShipping;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDefaultShipping(): bool
    {
        return $this->defaultShipping;
    }

    /**
     * @param bool $defaultBilling
     * @return ContactAddressbook
     */
    public function setDefaultBilling(bool $defaultBilling): ContactAddressbook
    {
        $this->defaultBilling = $defaultBilling;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDefaultBilling(): bool
    {
        return $this->defaultBilling;
    }

    /**
     * @param string $label
     * @return ContactAddressbook
     */
    public function setLabel(string $label): ContactAddressbook
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param Address $addressbookAddress
     * @return ContactAddressbook
     */
    public function setAddressbookAddress(Address $addressbookAddress): ContactAddressbook
    {
        $this->addressbookAddress = $addressbookAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddressbookAddress(): Address
    {
        return $this->addressbookAddress;
    }

    /**
     * @param string $internalId
     * @return ContactAddressbook
     */
    public function setInternalId(string $internalId): ContactAddressbook
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
