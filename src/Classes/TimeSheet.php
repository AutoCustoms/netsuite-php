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

class TimeSheet extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $employee;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var Duration
     */
    protected Duration $totalHours;

    /**
     * @var RecordRef
     */
    protected RecordRef $approvalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var TimeSheetTimeGridList
     */
    protected TimeSheetTimeGridList $timeGridList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "employee" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "totalHours" => "Duration",
        "approvalStatus" => "RecordRef",
        "subsidiary" => "RecordRef",
        "timeGridList" => "TimeSheetTimeGridList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return TimeSheet
     */
    public function setCustomForm(RecordRef $customForm): TimeSheet
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param RecordRef $employee
     * @return TimeSheet
     */
    public function setEmployee(RecordRef $employee): TimeSheet
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployee(): RecordRef
    {
        return $this->employee;
    }

    /**
     * @param string $startDate
     * @return TimeSheet
     */
    public function setStartDate(string $startDate): TimeSheet
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return TimeSheet
     */
    public function setEndDate(string $endDate): TimeSheet
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param Duration $totalHours
     * @return TimeSheet
     */
    public function setTotalHours(Duration $totalHours): TimeSheet
    {
        $this->totalHours = $totalHours;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getTotalHours(): Duration
    {
        return $this->totalHours;
    }

    /**
     * @param RecordRef $approvalStatus
     * @return TimeSheet
     */
    public function setApprovalStatus(RecordRef $approvalStatus): TimeSheet
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprovalStatus(): RecordRef
    {
        return $this->approvalStatus;
    }

    /**
     * @param RecordRef $subsidiary
     * @return TimeSheet
     */
    public function setSubsidiary(RecordRef $subsidiary): TimeSheet
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param TimeSheetTimeGridList $timeGridList
     * @return TimeSheet
     */
    public function setTimeGridList(TimeSheetTimeGridList $timeGridList): TimeSheet
    {
        $this->timeGridList = $timeGridList;
        return $this;
    }

    /**
     * @return TimeSheetTimeGridList
     */
    public function getTimeGridList(): TimeSheetTimeGridList
    {
        return $this->timeGridList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return TimeSheet
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): TimeSheet
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return TimeSheet
     */
    public function setInternalId(string $internalId): TimeSheet
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return TimeSheet
     */
    public function setExternalId(string $externalId): TimeSheet
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
