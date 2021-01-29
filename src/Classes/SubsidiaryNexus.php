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

class SubsidiaryNexus {
    /**
     * @var RecordRef
     */
    protected RecordRef $nexusId;

    /**
     * @var string
     */
    protected string $country;

    static $paramtypesmap = array(
        "nexusId" => "RecordRef",
        "country" => "string",
    );

    /**
     * @param RecordRef $nexusId
     * @return SubsidiaryNexus
     */
    public function setNexusId(RecordRef $nexusId): SubsidiaryNexus
    {
        $this->nexusId = $nexusId;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexusId(): RecordRef
    {
        return $this->nexusId;
    }

    /**
     * @param string $country
     * @return SubsidiaryNexus
     */
    public function setCountry(string $country): SubsidiaryNexus
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

}
