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

class VendorAddressbook {
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
     * @var string
     */
    protected string $internalId;

    /**
     * @var Address
     */
    protected Address $addressbookAddress;

    static $paramtypesmap = array(
        "defaultShipping" => "boolean",
        "defaultBilling" => "boolean",
        "label" => "string",
        "internalId" => "string",
        "addressbookAddress" => "Address",
    );

    /**
     * @param bool $defaultShipping
     * @return VendorAddressbook
     */
    public function setDefaultShipping(bool $defaultShipping): VendorAddressbook
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
     * @return VendorAddressbook
     */
    public function setDefaultBilling(bool $defaultBilling): VendorAddressbook
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
     * @return VendorAddressbook
     */
    public function setLabel(string $label): VendorAddressbook
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
     * @param string $internalId
     * @return VendorAddressbook
     */
    public function setInternalId(string $internalId): VendorAddressbook
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
     * @param Address $addressbookAddress
     * @return VendorAddressbook
     */
    public function setAddressbookAddress(Address $addressbookAddress): VendorAddressbook
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

}
