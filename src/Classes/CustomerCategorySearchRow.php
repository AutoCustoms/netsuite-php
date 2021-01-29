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

class CustomerCategorySearchRow extends SearchRow {
    /**
     * @var CustomerCategorySearchRowBasic
     */
    protected CustomerCategorySearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerCategorySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param CustomerCategorySearchRowBasic $basic
     * @return CustomerCategorySearchRow
     */
    public function setBasic(CustomerCategorySearchRowBasic $basic): CustomerCategorySearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CustomerCategorySearchRowBasic
     */
    public function getBasic(): CustomerCategorySearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return CustomerCategorySearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): CustomerCategorySearchRow
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
