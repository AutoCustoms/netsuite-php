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

class GetCustomizationIdRequest {
    /**
     * @var CustomizationType
     */
    protected CustomizationType $customizationType;

    /**
     * @var bool
     */
    protected bool $includeInactives;

    static $paramtypesmap = array(
        "customizationType" => "CustomizationType",
        "includeInactives" => "boolean",
    );

    /**
     * @param CustomizationType $customizationType
     * @return GetCustomizationIdRequest
     */
    public function setCustomizationType(CustomizationType $customizationType): GetCustomizationIdRequest
    {
        $this->customizationType = $customizationType;
        return $this;
    }

    /**
     * @return CustomizationType
     */
    public function getCustomizationType(): CustomizationType
    {
        return $this->customizationType;
    }

    /**
     * @param bool $includeInactives
     * @return GetCustomizationIdRequest
     */
    public function setIncludeInactives(bool $includeInactives): GetCustomizationIdRequest
    {
        $this->includeInactives = $includeInactives;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeInactives(): bool
    {
        return $this->includeInactives;
    }

}
