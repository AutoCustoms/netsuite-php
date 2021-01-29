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

class PaycheckSearchRow extends SearchRow {
    /**
     * @var PaycheckSearchRowBasic
     */
    protected PaycheckSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var PayrollItemSearchRowBasic
     */
    protected PayrollItemSearchRowBasic $payrollItemJoin;

    static $paramtypesmap = array(
        "basic" => "PaycheckSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "payrollItemJoin" => "PayrollItemSearchRowBasic",
    );

    /**
     * @param PaycheckSearchRowBasic $basic
     * @return PaycheckSearchRow
     */
    public function setBasic(PaycheckSearchRowBasic $basic): PaycheckSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PaycheckSearchRowBasic
     */
    public function getBasic(): PaycheckSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return PaycheckSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): PaycheckSearchRow
    {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin(): EmployeeSearchRowBasic
    {
        return $this->employeeJoin;
    }

    /**
     * @param PayrollItemSearchRowBasic $payrollItemJoin
     * @return PaycheckSearchRow
     */
    public function setPayrollItemJoin(PayrollItemSearchRowBasic $payrollItemJoin): PaycheckSearchRow
    {
        $this->payrollItemJoin = $payrollItemJoin;
        return $this;
    }

    /**
     * @return PayrollItemSearchRowBasic
     */
    public function getPayrollItemJoin(): PayrollItemSearchRowBasic
    {
        return $this->payrollItemJoin;
    }

}
