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

class ContactRoleSearchRow extends SearchRow {
    /**
     * @var ContactRoleSearchRowBasic
     */
    protected ContactRoleSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "ContactRoleSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param ContactRoleSearchRowBasic $basic
     * @return ContactRoleSearchRow
     */
    public function setBasic(ContactRoleSearchRowBasic $basic): ContactRoleSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ContactRoleSearchRowBasic
     */
    public function getBasic(): ContactRoleSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ContactRoleSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ContactRoleSearchRow
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
