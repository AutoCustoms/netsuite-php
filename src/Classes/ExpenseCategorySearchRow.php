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

class ExpenseCategorySearchRow extends SearchRow {
    /**
     * @var ExpenseCategorySearchRowBasic
     */
    protected ExpenseCategorySearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ExpenseCategorySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ExpenseCategorySearchRowBasic $basic
     * @return ExpenseCategorySearchRow
     */
    public function setBasic(ExpenseCategorySearchRowBasic $basic): ExpenseCategorySearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ExpenseCategorySearchRowBasic
     */
    public function getBasic(): ExpenseCategorySearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ExpenseCategorySearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ExpenseCategorySearchRow
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

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return ExpenseCategorySearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ExpenseCategorySearchRow
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
