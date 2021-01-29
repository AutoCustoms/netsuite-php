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

class InitializeAuxRef extends BaseRef {
    /**
     * @var InitializeAuxRefType
     */
    protected InitializeAuxRefType $type;

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
    protected string $scriptId;

    static $paramtypesmap = array(
        "type" => "InitializeAuxRefType",
        "internalId" => "string",
        "externalId" => "string",
        "scriptId" => "string",
    );

    /**
     * @param InitializeAuxRefType $type
     * @return InitializeAuxRef
     */
    public function setType(InitializeAuxRefType $type): InitializeAuxRef
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return InitializeAuxRefType
     */
    public function getType(): InitializeAuxRefType
    {
        return $this->type;
    }

    /**
     * @param string $internalId
     * @return InitializeAuxRef
     */
    public function setInternalId(string $internalId): InitializeAuxRef
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
     * @return InitializeAuxRef
     */
    public function setExternalId(string $externalId): InitializeAuxRef
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
     * @param string $scriptId
     * @return InitializeAuxRef
     */
    public function setScriptId(string $scriptId): InitializeAuxRef
    {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getScriptId(): string
    {
        return $this->scriptId;
    }

}
