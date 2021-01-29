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

class SerializedInventoryItemLocationsList {
    /**
     * @var SerializedInventoryItemLocations[]
     */
    protected array $locations;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "locations" => "SerializedInventoryItemLocations[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param SerializedInventoryItemLocations[] $locations
     * @return SerializedInventoryItemLocationsList
     */
    public function setLocations(SerializedInventoryItemLocations $locations): SerializedInventoryItemLocationsList
    {
        $this->locations[] = $locations;
        return $this;
    }

    /**
     * @return SerializedInventoryItemLocations[]
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

    /**
     * @param bool $replaceAll
     * @return SerializedInventoryItemLocationsList
     */
    public function setReplaceAll(bool $replaceAll): SerializedInventoryItemLocationsList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
