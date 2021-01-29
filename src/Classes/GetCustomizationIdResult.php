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

class GetCustomizationIdResult {
    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var int
     */
    protected int $totalRecords;

    /**
     * @var CustomizationRefList
     */
    protected CustomizationRefList $customizationRefList;

    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "customizationRefList" => "CustomizationRefList",
    );

    /**
     * @param Status $status
     * @return GetCustomizationIdResult
     */
    public function setStatus(Status $status): GetCustomizationIdResult
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param int $totalRecords
     * @return GetCustomizationIdResult
     */
    public function setTotalRecords(int $totalRecords): GetCustomizationIdResult
    {
        $this->totalRecords = $totalRecords;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords(): int
    {
        return $this->totalRecords;
    }

    /**
     * @param CustomizationRefList $customizationRefList
     * @return GetCustomizationIdResult
     */
    public function setCustomizationRefList(CustomizationRefList $customizationRefList): GetCustomizationIdResult
    {
        $this->customizationRefList = $customizationRefList;
        return $this;
    }

    /**
     * @return CustomizationRefList
     */
    public function getCustomizationRefList(): CustomizationRefList
    {
        return $this->customizationRefList;
    }

}
