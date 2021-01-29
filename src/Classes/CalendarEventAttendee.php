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

class CalendarEventAttendee {
    /**
     * @var bool
     */
    protected bool $sendEmail;

    /**
     * @var RecordRef
     */
    protected RecordRef $attendee;

    /**
     * @var CalendarEventAttendeeResponse
     */
    protected CalendarEventAttendeeResponse $response;

    /**
     * @var CalendarEventAttendeeAttendance
     */
    protected CalendarEventAttendeeAttendance $attendance;

    static $paramtypesmap = array(
        "sendEmail" => "boolean",
        "attendee" => "RecordRef",
        "response" => "CalendarEventAttendeeResponse",
        "attendance" => "CalendarEventAttendeeAttendance",
    );

    /**
     * @param bool $sendEmail
     * @return CalendarEventAttendee
     */
    public function setSendEmail(bool $sendEmail): CalendarEventAttendee
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendEmail(): bool
    {
        return $this->sendEmail;
    }

    /**
     * @param RecordRef $attendee
     * @return CalendarEventAttendee
     */
    public function setAttendee(RecordRef $attendee): CalendarEventAttendee
    {
        $this->attendee = $attendee;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAttendee(): RecordRef
    {
        return $this->attendee;
    }

    /**
     * @param CalendarEventAttendeeResponse $response
     * @return CalendarEventAttendee
     */
    public function setResponse(CalendarEventAttendeeResponse $response): CalendarEventAttendee
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return CalendarEventAttendeeResponse
     */
    public function getResponse(): CalendarEventAttendeeResponse
    {
        return $this->response;
    }

    /**
     * @param CalendarEventAttendeeAttendance $attendance
     * @return CalendarEventAttendee
     */
    public function setAttendance(CalendarEventAttendeeAttendance $attendance): CalendarEventAttendee
    {
        $this->attendance = $attendance;
        return $this;
    }

    /**
     * @return CalendarEventAttendeeAttendance
     */
    public function getAttendance(): CalendarEventAttendeeAttendance
    {
        return $this->attendance;
    }

}
