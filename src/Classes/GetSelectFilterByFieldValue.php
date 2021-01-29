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

class GetSelectFilterByFieldValue {
    /**
     * @var string
     */
    protected string $sublist;

    /**
     * @var string
     */
    protected string $field;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "sublist" => "string",
        "field" => "string",
        "internalId" => "string",
    );

    /**
     * @param string $sublist
     * @return GetSelectFilterByFieldValue
     */
    public function setSublist(string $sublist): GetSelectFilterByFieldValue
    {
        $this->sublist = $sublist;
        return $this;
    }

    /**
     * @return string
     */
    public function getSublist(): string
    {
        return $this->sublist;
    }

    /**
     * @param string $field
     * @return GetSelectFilterByFieldValue
     */
    public function setField(string $field): GetSelectFilterByFieldValue
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param string $internalId
     * @return GetSelectFilterByFieldValue
     */
    public function setInternalId(string $internalId): GetSelectFilterByFieldValue
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
