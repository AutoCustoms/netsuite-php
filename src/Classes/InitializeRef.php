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

class InitializeRef extends BaseRef {
    /**
     * @var InitializeRefType
     */
    protected InitializeRefType $type;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "type" => "InitializeRefType",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param InitializeRefType $type
     * @return InitializeRef
     */
    public function setType(InitializeRefType $type): InitializeRef
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return InitializeRefType
     */
    public function getType(): InitializeRefType
    {
        return $this->type;
    }

    /**
     * @param string $internalId
     * @return InitializeRef
     */
    public function setInternalId(string $internalId): InitializeRef
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
     * @return InitializeRef
     */
    public function setExternalId(string $externalId): InitializeRef
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
