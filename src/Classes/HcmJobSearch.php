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

class HcmJobSearch extends SearchRecord {
    /**
     * @var HcmJobSearchBasic
     */
    protected HcmJobSearchBasic $basic;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "HcmJobSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param HcmJobSearchBasic $basic
     * @return HcmJobSearch
     */
    public function setBasic(HcmJobSearchBasic $basic): HcmJobSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return HcmJobSearchBasic
     */
    public function getBasic(): HcmJobSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return HcmJobSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): HcmJobSearch
    {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin(): EmployeeSearchBasic
    {
        return $this->employeeJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return HcmJobSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): HcmJobSearch
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
