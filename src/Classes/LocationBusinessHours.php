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

class LocationBusinessHours {
    /**
     * @var string
     */
    protected string $startTime;

    /**
     * @var string
     */
    protected string $endTime;

    /**
     * @var bool
     */
    protected bool $isSunday;

    /**
     * @var bool
     */
    protected bool $isMonday;

    /**
     * @var bool
     */
    protected bool $isTuesday;

    /**
     * @var bool
     */
    protected bool $isWednesday;

    /**
     * @var bool
     */
    protected bool $isThursday;

    /**
     * @var bool
     */
    protected bool $isFriday;

    /**
     * @var bool
     */
    protected bool $isSaturday;

    /**
     * @var string
     */
    protected string $sameDayPickupCutOffTime;

    static $paramtypesmap = array(
        "startTime" => "dateTime",
        "endTime" => "dateTime",
        "isSunday" => "boolean",
        "isMonday" => "boolean",
        "isTuesday" => "boolean",
        "isWednesday" => "boolean",
        "isThursday" => "boolean",
        "isFriday" => "boolean",
        "isSaturday" => "boolean",
        "sameDayPickupCutOffTime" => "dateTime",
    );

    /**
     * @param string $startTime
     * @return LocationBusinessHours
     */
    public function setStartTime(string $startTime): LocationBusinessHours
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * @param string $endTime
     * @return LocationBusinessHours
     */
    public function setEndTime(string $endTime): LocationBusinessHours
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * @param bool $isSunday
     * @return LocationBusinessHours
     */
    public function setIsSunday(bool $isSunday): LocationBusinessHours
    {
        $this->isSunday = $isSunday;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSunday(): bool
    {
        return $this->isSunday;
    }

    /**
     * @param bool $isMonday
     * @return LocationBusinessHours
     */
    public function setIsMonday(bool $isMonday): LocationBusinessHours
    {
        $this->isMonday = $isMonday;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMonday(): bool
    {
        return $this->isMonday;
    }

    /**
     * @param bool $isTuesday
     * @return LocationBusinessHours
     */
    public function setIsTuesday(bool $isTuesday): LocationBusinessHours
    {
        $this->isTuesday = $isTuesday;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTuesday(): bool
    {
        return $this->isTuesday;
    }

    /**
     * @param bool $isWednesday
     * @return LocationBusinessHours
     */
    public function setIsWednesday(bool $isWednesday): LocationBusinessHours
    {
        $this->isWednesday = $isWednesday;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsWednesday(): bool
    {
        return $this->isWednesday;
    }

    /**
     * @param bool $isThursday
     * @return LocationBusinessHours
     */
    public function setIsThursday(bool $isThursday): LocationBusinessHours
    {
        $this->isThursday = $isThursday;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsThursday(): bool
    {
        return $this->isThursday;
    }

    /**
     * @param bool $isFriday
     * @return LocationBusinessHours
     */
    public function setIsFriday(bool $isFriday): LocationBusinessHours
    {
        $this->isFriday = $isFriday;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFriday(): bool
    {
        return $this->isFriday;
    }

    /**
     * @param bool $isSaturday
     * @return LocationBusinessHours
     */
    public function setIsSaturday(bool $isSaturday): LocationBusinessHours
    {
        $this->isSaturday = $isSaturday;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSaturday(): bool
    {
        return $this->isSaturday;
    }

    /**
     * @param string $sameDayPickupCutOffTime
     * @return LocationBusinessHours
     */
    public function setSameDayPickupCutOffTime(string $sameDayPickupCutOffTime): LocationBusinessHours
    {
        $this->sameDayPickupCutOffTime = $sameDayPickupCutOffTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSameDayPickupCutOffTime(): string
    {
        return $this->sameDayPickupCutOffTime;
    }

}
