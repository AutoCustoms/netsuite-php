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

class ContactCategorySearch extends SearchRecord {
    /**
     * @var ContactCategorySearchBasic
     */
    protected ContactCategorySearchBasic $basic;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "ContactCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param ContactCategorySearchBasic $basic
     * @return ContactCategorySearch
     */
    public function setBasic(ContactCategorySearchBasic $basic): ContactCategorySearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ContactCategorySearchBasic
     */
    public function getBasic(): ContactCategorySearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ContactCategorySearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ContactCategorySearch
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
