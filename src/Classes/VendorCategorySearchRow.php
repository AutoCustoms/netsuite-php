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

class VendorCategorySearchRow extends SearchRow {
    /**
     * @var VendorCategorySearchRowBasic
     */
    protected VendorCategorySearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "VendorCategorySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param VendorCategorySearchRowBasic $basic
     * @return VendorCategorySearchRow
     */
    public function setBasic(VendorCategorySearchRowBasic $basic): VendorCategorySearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return VendorCategorySearchRowBasic
     */
    public function getBasic(): VendorCategorySearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return VendorCategorySearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): VendorCategorySearchRow
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin(): EmployeeSearchRowBasic
    {
        return $this->userJoin;
    }

}
