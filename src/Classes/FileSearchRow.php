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

class FileSearchRow extends SearchRow {
    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $basic;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $shopperJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "FileSearchRowBasic",
        "shopperJoin" => "CustomerSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param FileSearchRowBasic $basic
     * @return FileSearchRow
     */
    public function setBasic(FileSearchRowBasic $basic): FileSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getBasic(): FileSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomerSearchRowBasic $shopperJoin
     * @return FileSearchRow
     */
    public function setShopperJoin(CustomerSearchRowBasic $shopperJoin): FileSearchRow
    {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getShopperJoin(): CustomerSearchRowBasic
    {
        return $this->shopperJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return FileSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): FileSearchRow
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
