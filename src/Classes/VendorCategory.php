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

class VendorCategory extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $isTaxAgency;

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
        "isTaxAgency" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return VendorCategory
     */
    public function setName(string $name): VendorCategory
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
     * @param bool $isTaxAgency
     * @return VendorCategory
     */
    public function setIsTaxAgency(bool $isTaxAgency): VendorCategory
    {
        $this->isTaxAgency = $isTaxAgency;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTaxAgency(): bool
    {
        return $this->isTaxAgency;
    }

    /**
     * @param bool $isInactive
     * @return VendorCategory
     */
    public function setIsInactive(bool $isInactive): VendorCategory
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
     * @return VendorCategory
     */
    public function setInternalId(string $internalId): VendorCategory
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
     * @return VendorCategory
     */
    public function setExternalId(string $externalId): VendorCategory
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
