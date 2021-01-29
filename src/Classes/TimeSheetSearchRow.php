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

class TimeSheetSearchRow extends SearchRow {
    /**
     * @var TimeSheetSearchRowBasic
     */
    protected TimeSheetSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $timeBillJoin;

    /**
     * @var TimeEntrySearchRowBasic
     */
    protected TimeEntrySearchRowBasic $timeEntryJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "TimeSheetSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "timeBillJoin" => "TimeBillSearchRowBasic",
        "timeEntryJoin" => "TimeEntrySearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param TimeSheetSearchRowBasic $basic
     * @return TimeSheetSearchRow
     */
    public function setBasic(TimeSheetSearchRowBasic $basic): TimeSheetSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TimeSheetSearchRowBasic
     */
    public function getBasic(): TimeSheetSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return TimeSheetSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): TimeSheetSearchRow
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
     * @param TimeBillSearchRowBasic $timeBillJoin
     * @return TimeSheetSearchRow
     */
    public function setTimeBillJoin(TimeBillSearchRowBasic $timeBillJoin): TimeSheetSearchRow
    {
        $this->timeBillJoin = $timeBillJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeBillJoin(): TimeBillSearchRowBasic
    {
        return $this->timeBillJoin;
    }

    /**
     * @param TimeEntrySearchRowBasic $timeEntryJoin
     * @return TimeSheetSearchRow
     */
    public function setTimeEntryJoin(TimeEntrySearchRowBasic $timeEntryJoin): TimeSheetSearchRow
    {
        $this->timeEntryJoin = $timeEntryJoin;
        return $this;
    }

    /**
     * @return TimeEntrySearchRowBasic
     */
    public function getTimeEntryJoin(): TimeEntrySearchRowBasic
    {
        return $this->timeEntryJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return TimeSheetSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): TimeSheetSearchRow
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
