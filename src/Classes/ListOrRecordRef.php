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

class ListOrRecordRef {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    /**
     * @var string
     */
    protected string $typeId;

    static $paramtypesmap = array(
        "name" => "string",
        "internalId" => "string",
        "externalId" => "string",
        "typeId" => "string",
    );

    /**
     * @param string $name
     * @return ListOrRecordRef
     */
    public function setName(string $name): ListOrRecordRef
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
     * @param string $internalId
     * @return ListOrRecordRef
     */
    public function setInternalId(string $internalId): ListOrRecordRef
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
     * @return ListOrRecordRef
     */
    public function setExternalId(string $externalId): ListOrRecordRef
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

    /**
     * @param string $typeId
     * @return ListOrRecordRef
     */
    public function setTypeId(string $typeId): ListOrRecordRef
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeId(): string
    {
        return $this->typeId;
    }

}
