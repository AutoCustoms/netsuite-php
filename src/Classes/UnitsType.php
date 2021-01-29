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

class UnitsType extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var UnitsTypeUomList
     */
    protected UnitsTypeUomList $uomList;

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
        "isInactive" => "boolean",
        "uomList" => "UnitsTypeUomList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return UnitsType
     */
    public function setName(string $name): UnitsType
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
     * @param bool $isInactive
     * @return UnitsType
     */
    public function setIsInactive(bool $isInactive): UnitsType
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
     * @param UnitsTypeUomList $uomList
     * @return UnitsType
     */
    public function setUomList(UnitsTypeUomList $uomList): UnitsType
    {
        $this->uomList = $uomList;
        return $this;
    }

    /**
     * @return UnitsTypeUomList
     */
    public function getUomList(): UnitsTypeUomList
    {
        return $this->uomList;
    }

    /**
     * @param string $internalId
     * @return UnitsType
     */
    public function setInternalId(string $internalId): UnitsType
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
     * @return UnitsType
     */
    public function setExternalId(string $externalId): UnitsType
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
