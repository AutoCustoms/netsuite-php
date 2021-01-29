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

class PaymentMethodSearchRow extends SearchRow {
    /**
     * @var PaymentMethodSearchRowBasic
     */
    protected PaymentMethodSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "PaymentMethodSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param PaymentMethodSearchRowBasic $basic
     * @return PaymentMethodSearchRow
     */
    public function setBasic(PaymentMethodSearchRowBasic $basic): PaymentMethodSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PaymentMethodSearchRowBasic
     */
    public function getBasic(): PaymentMethodSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return PaymentMethodSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): PaymentMethodSearchRow
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
