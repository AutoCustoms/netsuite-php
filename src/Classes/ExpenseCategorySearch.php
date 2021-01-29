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

class ExpenseCategorySearch extends SearchRecord {
    /**
     * @var ExpenseCategorySearchBasic
     */
    protected ExpenseCategorySearchBasic $basic;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ExpenseCategorySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ExpenseCategorySearchBasic $basic
     * @return ExpenseCategorySearch
     */
    public function setBasic(ExpenseCategorySearchBasic $basic): ExpenseCategorySearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ExpenseCategorySearchBasic
     */
    public function getBasic(): ExpenseCategorySearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ExpenseCategorySearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ExpenseCategorySearch
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

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return ExpenseCategorySearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ExpenseCategorySearch
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
