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

class TimeSheetSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $approvalStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $employee;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $id;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $totalHours;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "approvalStatus" => "SearchColumnSelectField[]",
        "employee" => "SearchColumnSelectField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "totalHours" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $approvalStatus
     * @return TimeSheetSearchRowBasic
     */
    public function setApprovalStatus(SearchColumnSelectField $approvalStatus): TimeSheetSearchRowBasic
    {
        $this->approvalStatus[] = $approvalStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getApprovalStatus(): array
    {
        return $this->approvalStatus;
    }

    /**
     * @param SearchColumnSelectField[] $employee
     * @return TimeSheetSearchRowBasic
     */
    public function setEmployee(SearchColumnSelectField $employee): TimeSheetSearchRowBasic
    {
        $this->employee[] = $employee;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployee(): array
    {
        return $this->employee;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return TimeSheetSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): TimeSheetSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return TimeSheetSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TimeSheetSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return TimeSheetSearchRowBasic
     */
    public function setId(SearchColumnLongField $id): TimeSheetSearchRowBasic
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return TimeSheetSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TimeSheetSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return TimeSheetSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): TimeSheetSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnStringField[] $totalHours
     * @return TimeSheetSearchRowBasic
     */
    public function setTotalHours(SearchColumnStringField $totalHours): TimeSheetSearchRowBasic
    {
        $this->totalHours[] = $totalHours;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTotalHours(): array
    {
        return $this->totalHours;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TimeSheetSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): TimeSheetSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
