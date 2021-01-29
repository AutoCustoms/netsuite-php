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

class TimeBillSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $approvalStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $break;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $customer;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $date;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $durationDecimal;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $employee;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endTime;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $hours;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isBillable;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isExempt;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isProductive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isUtilized;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $item;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModified;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $paidExternally;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $payItem;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $payrollDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $rejectionNote;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startTime;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $status;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $supervisorApproval;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $temporaryLocalJurisdiction;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $temporaryStateJurisdiction;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $timeModified;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $timeSheet;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $type;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "approvalStatus" => "SearchColumnSelectField[]",
        "break" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "date" => "SearchColumnDateField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
        "durationDecimal" => "SearchColumnDoubleField[]",
        "employee" => "SearchColumnSelectField[]",
        "endTime" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hours" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isBillable" => "SearchColumnBooleanField[]",
        "isExempt" => "SearchColumnBooleanField[]",
        "isProductive" => "SearchColumnBooleanField[]",
        "isUtilized" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnStringField[]",
        "lastModified" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "paidExternally" => "SearchColumnBooleanField[]",
        "payItem" => "SearchColumnSelectField[]",
        "payrollDate" => "SearchColumnDateField[]",
        "rate" => "SearchColumnDoubleField[]",
        "rejectionNote" => "SearchColumnStringField[]",
        "startTime" => "SearchColumnDateField[]",
        "status" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "supervisorApproval" => "SearchColumnBooleanField[]",
        "temporaryLocalJurisdiction" => "SearchColumnStringField[]",
        "temporaryStateJurisdiction" => "SearchColumnStringField[]",
        "timeModified" => "SearchColumnBooleanField[]",
        "timeSheet" => "SearchColumnSelectField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $approvalStatus
     * @return TimeBillSearchRowBasic
     */
    public function setApprovalStatus(SearchColumnSelectField $approvalStatus): TimeBillSearchRowBasic
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
     * @param SearchColumnStringField[] $break
     * @return TimeBillSearchRowBasic
     */
    public function setBreak(SearchColumnStringField $break): TimeBillSearchRowBasic
    {
        $this->break[] = $break;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBreak(): array
    {
        return $this->break;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return TimeBillSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): TimeBillSearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return TimeBillSearchRowBasic
     */
    public function setCustomer(SearchColumnSelectField $customer): TimeBillSearchRowBasic
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }

    /**
     * @param SearchColumnDateField[] $date
     * @return TimeBillSearchRowBasic
     */
    public function setDate(SearchColumnDateField $date): TimeBillSearchRowBasic
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDate(): array
    {
        return $this->date;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return TimeBillSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): TimeBillSearchRowBasic
    {
        $this->dateCreated[] = $dateCreated;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated(): array
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return TimeBillSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): TimeBillSearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnDoubleField[] $durationDecimal
     * @return TimeBillSearchRowBasic
     */
    public function setDurationDecimal(SearchColumnDoubleField $durationDecimal): TimeBillSearchRowBasic
    {
        $this->durationDecimal[] = $durationDecimal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDurationDecimal(): array
    {
        return $this->durationDecimal;
    }

    /**
     * @param SearchColumnSelectField[] $employee
     * @return TimeBillSearchRowBasic
     */
    public function setEmployee(SearchColumnSelectField $employee): TimeBillSearchRowBasic
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
     * @param SearchColumnDateField[] $endTime
     * @return TimeBillSearchRowBasic
     */
    public function setEndTime(SearchColumnDateField $endTime): TimeBillSearchRowBasic
    {
        $this->endTime[] = $endTime;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndTime(): array
    {
        return $this->endTime;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return TimeBillSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TimeBillSearchRowBasic
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
     * @param SearchColumnStringField[] $hours
     * @return TimeBillSearchRowBasic
     */
    public function setHours(SearchColumnStringField $hours): TimeBillSearchRowBasic
    {
        $this->hours[] = $hours;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHours(): array
    {
        return $this->hours;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return TimeBillSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TimeBillSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isBillable
     * @return TimeBillSearchRowBasic
     */
    public function setIsBillable(SearchColumnBooleanField $isBillable): TimeBillSearchRowBasic
    {
        $this->isBillable[] = $isBillable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBillable(): array
    {
        return $this->isBillable;
    }

    /**
     * @param SearchColumnBooleanField[] $isExempt
     * @return TimeBillSearchRowBasic
     */
    public function setIsExempt(SearchColumnBooleanField $isExempt): TimeBillSearchRowBasic
    {
        $this->isExempt[] = $isExempt;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsExempt(): array
    {
        return $this->isExempt;
    }

    /**
     * @param SearchColumnBooleanField[] $isProductive
     * @return TimeBillSearchRowBasic
     */
    public function setIsProductive(SearchColumnBooleanField $isProductive): TimeBillSearchRowBasic
    {
        $this->isProductive[] = $isProductive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsProductive(): array
    {
        return $this->isProductive;
    }

    /**
     * @param SearchColumnBooleanField[] $isUtilized
     * @return TimeBillSearchRowBasic
     */
    public function setIsUtilized(SearchColumnBooleanField $isUtilized): TimeBillSearchRowBasic
    {
        $this->isUtilized[] = $isUtilized;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsUtilized(): array
    {
        return $this->isUtilized;
    }

    /**
     * @param SearchColumnStringField[] $item
     * @return TimeBillSearchRowBasic
     */
    public function setItem(SearchColumnStringField $item): TimeBillSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnDateField[] $lastModified
     * @return TimeBillSearchRowBasic
     */
    public function setLastModified(SearchColumnDateField $lastModified): TimeBillSearchRowBasic
    {
        $this->lastModified[] = $lastModified;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModified(): array
    {
        return $this->lastModified;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return TimeBillSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): TimeBillSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return TimeBillSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): TimeBillSearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnBooleanField[] $paidExternally
     * @return TimeBillSearchRowBasic
     */
    public function setPaidExternally(SearchColumnBooleanField $paidExternally): TimeBillSearchRowBasic
    {
        $this->paidExternally[] = $paidExternally;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaidExternally(): array
    {
        return $this->paidExternally;
    }

    /**
     * @param SearchColumnSelectField[] $payItem
     * @return TimeBillSearchRowBasic
     */
    public function setPayItem(SearchColumnSelectField $payItem): TimeBillSearchRowBasic
    {
        $this->payItem[] = $payItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayItem(): array
    {
        return $this->payItem;
    }

    /**
     * @param SearchColumnDateField[] $payrollDate
     * @return TimeBillSearchRowBasic
     */
    public function setPayrollDate(SearchColumnDateField $payrollDate): TimeBillSearchRowBasic
    {
        $this->payrollDate[] = $payrollDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPayrollDate(): array
    {
        return $this->payrollDate;
    }

    /**
     * @param SearchColumnDoubleField[] $rate
     * @return TimeBillSearchRowBasic
     */
    public function setRate(SearchColumnDoubleField $rate): TimeBillSearchRowBasic
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRate(): array
    {
        return $this->rate;
    }

    /**
     * @param SearchColumnStringField[] $rejectionNote
     * @return TimeBillSearchRowBasic
     */
    public function setRejectionNote(SearchColumnStringField $rejectionNote): TimeBillSearchRowBasic
    {
        $this->rejectionNote[] = $rejectionNote;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRejectionNote(): array
    {
        return $this->rejectionNote;
    }

    /**
     * @param SearchColumnDateField[] $startTime
     * @return TimeBillSearchRowBasic
     */
    public function setStartTime(SearchColumnDateField $startTime): TimeBillSearchRowBasic
    {
        $this->startTime[] = $startTime;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartTime(): array
    {
        return $this->startTime;
    }

    /**
     * @param SearchColumnStringField[] $status
     * @return TimeBillSearchRowBasic
     */
    public function setStatus(SearchColumnStringField $status): TimeBillSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnStringField[] $subsidiary
     * @return TimeBillSearchRowBasic
     */
    public function setSubsidiary(SearchColumnStringField $subsidiary): TimeBillSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnBooleanField[] $supervisorApproval
     * @return TimeBillSearchRowBasic
     */
    public function setSupervisorApproval(SearchColumnBooleanField $supervisorApproval): TimeBillSearchRowBasic
    {
        $this->supervisorApproval[] = $supervisorApproval;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSupervisorApproval(): array
    {
        return $this->supervisorApproval;
    }

    /**
     * @param SearchColumnStringField[] $temporaryLocalJurisdiction
     * @return TimeBillSearchRowBasic
     */
    public function setTemporaryLocalJurisdiction(SearchColumnStringField $temporaryLocalJurisdiction): TimeBillSearchRowBasic
    {
        $this->temporaryLocalJurisdiction[] = $temporaryLocalJurisdiction;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTemporaryLocalJurisdiction(): array
    {
        return $this->temporaryLocalJurisdiction;
    }

    /**
     * @param SearchColumnStringField[] $temporaryStateJurisdiction
     * @return TimeBillSearchRowBasic
     */
    public function setTemporaryStateJurisdiction(SearchColumnStringField $temporaryStateJurisdiction): TimeBillSearchRowBasic
    {
        $this->temporaryStateJurisdiction[] = $temporaryStateJurisdiction;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTemporaryStateJurisdiction(): array
    {
        return $this->temporaryStateJurisdiction;
    }

    /**
     * @param SearchColumnBooleanField[] $timeModified
     * @return TimeBillSearchRowBasic
     */
    public function setTimeModified(SearchColumnBooleanField $timeModified): TimeBillSearchRowBasic
    {
        $this->timeModified[] = $timeModified;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTimeModified(): array
    {
        return $this->timeModified;
    }

    /**
     * @param SearchColumnSelectField[] $timeSheet
     * @return TimeBillSearchRowBasic
     */
    public function setTimeSheet(SearchColumnSelectField $timeSheet): TimeBillSearchRowBasic
    {
        $this->timeSheet[] = $timeSheet;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTimeSheet(): array
    {
        return $this->timeSheet;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return TimeBillSearchRowBasic
     */
    public function setType(SearchColumnEnumSelectField $type): TimeBillSearchRowBasic
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getType(): array
    {
        return $this->type;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TimeBillSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): TimeBillSearchRowBasic
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
