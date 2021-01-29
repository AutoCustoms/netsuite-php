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

class SiteCategorySearch extends SearchRecord {
    /**
     * @var SiteCategorySearchBasic
     */
    protected SiteCategorySearchBasic $basic;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $shopperJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "SiteCategorySearchBasic",
        "shopperJoin" => "CustomerSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param SiteCategorySearchBasic $basic
     * @return SiteCategorySearch
     */
    public function setBasic(SiteCategorySearchBasic $basic): SiteCategorySearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SiteCategorySearchBasic
     */
    public function getBasic(): SiteCategorySearchBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomerSearchBasic $shopperJoin
     * @return SiteCategorySearch
     */
    public function setShopperJoin(CustomerSearchBasic $shopperJoin): SiteCategorySearch
    {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getShopperJoin(): CustomerSearchBasic
    {
        return $this->shopperJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return SiteCategorySearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): SiteCategorySearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

}
