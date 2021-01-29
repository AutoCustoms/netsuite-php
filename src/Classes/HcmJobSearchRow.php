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

class HcmJobSearchRow extends SearchRow {
    /**
     * @var HcmJobSearchRowBasic
     */
    protected HcmJobSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "HcmJobSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param HcmJobSearchRowBasic $basic
     * @return HcmJobSearchRow
     */
    public function setBasic(HcmJobSearchRowBasic $basic): HcmJobSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return HcmJobSearchRowBasic
     */
    public function getBasic(): HcmJobSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return HcmJobSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): HcmJobSearchRow
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
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return HcmJobSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): HcmJobSearchRow
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
