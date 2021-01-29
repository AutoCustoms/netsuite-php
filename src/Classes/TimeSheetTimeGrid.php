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

class TimeSheetTimeGrid {
    /**
     * @var TimeEntry
     */
    protected TimeEntry $sunday;

    /**
     * @var TimeEntry
     */
    protected TimeEntry $monday;

    /**
     * @var TimeEntry
     */
    protected TimeEntry $tuesday;

    /**
     * @var TimeEntry
     */
    protected TimeEntry $wednesday;

    /**
     * @var TimeEntry
     */
    protected TimeEntry $thursday;

    /**
     * @var TimeEntry
     */
    protected TimeEntry $friday;

    /**
     * @var TimeEntry
     */
    protected TimeEntry $saturday;

    static $paramtypesmap = array(
        "sunday" => "TimeEntry",
        "monday" => "TimeEntry",
        "tuesday" => "TimeEntry",
        "wednesday" => "TimeEntry",
        "thursday" => "TimeEntry",
        "friday" => "TimeEntry",
        "saturday" => "TimeEntry",
    );

    /**
     * @param TimeEntry $sunday
     * @return TimeSheetTimeGrid
     */
    public function setSunday(TimeEntry $sunday): TimeSheetTimeGrid
    {
        $this->sunday = $sunday;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getSunday(): TimeEntry
    {
        return $this->sunday;
    }

    /**
     * @param TimeEntry $monday
     * @return TimeSheetTimeGrid
     */
    public function setMonday(TimeEntry $monday): TimeSheetTimeGrid
    {
        $this->monday = $monday;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getMonday(): TimeEntry
    {
        return $this->monday;
    }

    /**
     * @param TimeEntry $tuesday
     * @return TimeSheetTimeGrid
     */
    public function setTuesday(TimeEntry $tuesday): TimeSheetTimeGrid
    {
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getTuesday(): TimeEntry
    {
        return $this->tuesday;
    }

    /**
     * @param TimeEntry $wednesday
     * @return TimeSheetTimeGrid
     */
    public function setWednesday(TimeEntry $wednesday): TimeSheetTimeGrid
    {
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getWednesday(): TimeEntry
    {
        return $this->wednesday;
    }

    /**
     * @param TimeEntry $thursday
     * @return TimeSheetTimeGrid
     */
    public function setThursday(TimeEntry $thursday): TimeSheetTimeGrid
    {
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getThursday(): TimeEntry
    {
        return $this->thursday;
    }

    /**
     * @param TimeEntry $friday
     * @return TimeSheetTimeGrid
     */
    public function setFriday(TimeEntry $friday): TimeSheetTimeGrid
    {
        $this->friday = $friday;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getFriday(): TimeEntry
    {
        return $this->friday;
    }

    /**
     * @param TimeEntry $saturday
     * @return TimeSheetTimeGrid
     */
    public function setSaturday(TimeEntry $saturday): TimeSheetTimeGrid
    {
        $this->saturday = $saturday;
        return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getSaturday(): TimeEntry
    {
        return $this->saturday;
    }

}
