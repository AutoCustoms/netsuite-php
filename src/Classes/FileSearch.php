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

class FileSearch extends SearchRecord {
    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $basic;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $shopperJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "FileSearchBasic",
        "shopperJoin" => "CustomerSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param FileSearchBasic $basic
     * @return FileSearch
     */
    public function setBasic(FileSearchBasic $basic): FileSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getBasic(): FileSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomerSearchBasic $shopperJoin
     * @return FileSearch
     */
    public function setShopperJoin(CustomerSearchBasic $shopperJoin): FileSearch
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
     * @return FileSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): FileSearch
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
