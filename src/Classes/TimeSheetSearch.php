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

class TimeSheetSearch extends SearchRecord {
    /**
     * @var TimeSheetSearchBasic
     */
    protected TimeSheetSearchBasic $basic;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $timeBillJoin;

    /**
     * @var TimeEntrySearchBasic
     */
    protected TimeEntrySearchBasic $timeEntryJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "TimeSheetSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "timeBillJoin" => "TimeBillSearchBasic",
        "timeEntryJoin" => "TimeEntrySearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param TimeSheetSearchBasic $basic
     * @return TimeSheetSearch
     */
    public function setBasic(TimeSheetSearchBasic $basic): TimeSheetSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TimeSheetSearchBasic
     */
    public function getBasic(): TimeSheetSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return TimeSheetSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): TimeSheetSearch
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
     * @param TimeBillSearchBasic $timeBillJoin
     * @return TimeSheetSearch
     */
    public function setTimeBillJoin(TimeBillSearchBasic $timeBillJoin): TimeSheetSearch
    {
        $this->timeBillJoin = $timeBillJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeBillJoin(): TimeBillSearchBasic
    {
        return $this->timeBillJoin;
    }

    /**
     * @param TimeEntrySearchBasic $timeEntryJoin
     * @return TimeSheetSearch
     */
    public function setTimeEntryJoin(TimeEntrySearchBasic $timeEntryJoin): TimeSheetSearch
    {
        $this->timeEntryJoin = $timeEntryJoin;
        return $this;
    }

    /**
     * @return TimeEntrySearchBasic
     */
    public function getTimeEntryJoin(): TimeEntrySearchBasic
    {
        return $this->timeEntryJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return TimeSheetSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): TimeSheetSearch
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
