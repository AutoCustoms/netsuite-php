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

class TimeSheetSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $approvalStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $employee;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $id;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $timeSheetDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $totalHours;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "approvalStatus" => "SearchMultiSelectField",
        "employee" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "id" => "SearchLongField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "timeSheetDate" => "SearchDateField",
        "totalHours" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $approvalStatus
     * @return TimeSheetSearchBasic
     */
    public function setApprovalStatus(SearchMultiSelectField $approvalStatus): TimeSheetSearchBasic
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getApprovalStatus(): SearchMultiSelectField
    {
        return $this->approvalStatus;
    }

    /**
     * @param SearchMultiSelectField $employee
     * @return TimeSheetSearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee): TimeSheetSearchBasic
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployee(): SearchMultiSelectField
    {
        return $this->employee;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return TimeSheetSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TimeSheetSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return TimeSheetSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TimeSheetSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchLongField $id
     * @return TimeSheetSearchBasic
     */
    public function setId(SearchLongField $id): TimeSheetSearchBasic
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId(): SearchLongField
    {
        return $this->id;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return TimeSheetSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TimeSheetSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return TimeSheetSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TimeSheetSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchDateField $timeSheetDate
     * @return TimeSheetSearchBasic
     */
    public function setTimeSheetDate(SearchDateField $timeSheetDate): TimeSheetSearchBasic
    {
        $this->timeSheetDate = $timeSheetDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getTimeSheetDate(): SearchDateField
    {
        return $this->timeSheetDate;
    }

    /**
     * @param SearchDoubleField $totalHours
     * @return TimeSheetSearchBasic
     */
    public function setTotalHours(SearchDoubleField $totalHours): TimeSheetSearchBasic
    {
        $this->totalHours = $totalHours;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTotalHours(): SearchDoubleField
    {
        return $this->totalHours;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return TimeSheetSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): TimeSheetSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
