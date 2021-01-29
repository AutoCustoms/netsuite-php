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

class RecordRef extends BaseRef {
    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    /**
     * @var RecordType
     */
    protected RecordType $type;

    static $paramtypesmap = array(
        "internalId" => "string",
        "externalId" => "string",
        "type" => "RecordType",
    );

    /**
     * @param string $internalId
     * @return RecordRef
     */
    public function setInternalId(string $internalId): RecordRef
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
     * @return RecordRef
     */
    public function setExternalId(string $externalId): RecordRef
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
     * @param RecordType $type
     * @return RecordRef
     */
    public function setType(RecordType $type): RecordRef
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return RecordType
     */
    public function getType(): RecordType
    {
        return $this->type;
    }

}
