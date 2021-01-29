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

class SalesRole extends Record {
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
    protected bool $isSalesRep;

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
        "isSalesRep" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return SalesRole
     */
    public function setName(string $name): SalesRole
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
     * @return SalesRole
     */
    public function setDescription(string $description): SalesRole
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
     * @param bool $isSalesRep
     * @return SalesRole
     */
    public function setIsSalesRep(bool $isSalesRep): SalesRole
    {
        $this->isSalesRep = $isSalesRep;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSalesRep(): bool
    {
        return $this->isSalesRep;
    }

    /**
     * @param bool $isInactive
     * @return SalesRole
     */
    public function setIsInactive(bool $isInactive): SalesRole
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
     * @return SalesRole
     */
    public function setInternalId(string $internalId): SalesRole
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
     * @return SalesRole
     */
    public function setExternalId(string $externalId): SalesRole
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
