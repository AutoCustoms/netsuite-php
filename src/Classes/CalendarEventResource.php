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

class CalendarEventResource {
    /**
     * @var RecordRef
     */
    protected RecordRef $resource;

    /**
     * @var string
     */
    protected string $location;

    static $paramtypesmap = array(
        "resource" => "RecordRef",
        "location" => "string",
    );

    /**
     * @param RecordRef $resource
     * @return CalendarEventResource
     */
    public function setResource(RecordRef $resource): CalendarEventResource
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getResource(): RecordRef
    {
        return $this->resource;
    }

    /**
     * @param string $location
     * @return CalendarEventResource
     */
    public function setLocation(string $location): CalendarEventResource
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

}
