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

class TimeEntrySearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $approvalStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingClass;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billingStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $break;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $caseTaskEvent;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $classNoHierarchy;

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
     * @var SearchColumnSelectField[]
     */
    protected array $departmentNoHierarchy;

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
     * @var SearchColumnSelectField[]
     */
    protected array $locationNoHierarchy;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $nextApprover;

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
     * @var SearchColumnDateField[]
     */
    protected array $startTime;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subsidiaryNoHierarchy;

    /**
     * @var SearchColumnStringField[]
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
        "billingClass" => "SearchColumnSelectField[]",
        "billingStatus" => "SearchColumnStringField[]",
        "break" => "SearchColumnStringField[]",
        "caseTaskEvent" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "classNoHierarchy" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "date" => "SearchColumnDateField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
        "departmentNoHierarchy" => "SearchColumnSelectField[]",
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
        "locationNoHierarchy" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "nextApprover" => "SearchColumnSelectField[]",
        "paidExternally" => "SearchColumnBooleanField[]",
        "payItem" => "SearchColumnSelectField[]",
        "payrollDate" => "SearchColumnDateField[]",
        "rate" => "SearchColumnDoubleField[]",
        "startTime" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "subsidiaryNoHierarchy" => "SearchColumnStringField[]",
        "timeSheet" => "SearchColumnStringField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $approvalStatus
     * @return TimeEntrySearchRowBasic
     */
    public function setApprovalStatus(SearchColumnSelectField $approvalStatus): TimeEntrySearchRowBasic
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
     * @param SearchColumnSelectField[] $billingClass
     * @return TimeEntrySearchRowBasic
     */
    public function setBillingClass(SearchColumnSelectField $billingClass): TimeEntrySearchRowBasic
    {
        $this->billingClass[] = $billingClass;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingClass(): array
    {
        return $this->billingClass;
    }

    /**
     * @param SearchColumnStringField[] $billingStatus
     * @return TimeEntrySearchRowBasic
     */
    public function setBillingStatus(SearchColumnStringField $billingStatus): TimeEntrySearchRowBasic
    {
        $this->billingStatus[] = $billingStatus;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillingStatus(): array
    {
        return $this->billingStatus;
    }

    /**
     * @param SearchColumnStringField[] $break
     * @return TimeEntrySearchRowBasic
     */
    public function setBreak(SearchColumnStringField $break): TimeEntrySearchRowBasic
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
     * @param SearchColumnSelectField[] $caseTaskEvent
     * @return TimeEntrySearchRowBasic
     */
    public function setCaseTaskEvent(SearchColumnSelectField $caseTaskEvent): TimeEntrySearchRowBasic
    {
        $this->caseTaskEvent[] = $caseTaskEvent;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCaseTaskEvent(): array
    {
        return $this->caseTaskEvent;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return TimeEntrySearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): TimeEntrySearchRowBasic
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
     * @param SearchColumnSelectField[] $classNoHierarchy
     * @return TimeEntrySearchRowBasic
     */
    public function setClassNoHierarchy(SearchColumnSelectField $classNoHierarchy): TimeEntrySearchRowBasic
    {
        $this->classNoHierarchy[] = $classNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClassNoHierarchy(): array
    {
        return $this->classNoHierarchy;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return TimeEntrySearchRowBasic
     */
    public function setCustomer(SearchColumnSelectField $customer): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setDate(SearchColumnDateField $date): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): TimeEntrySearchRowBasic
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
     * @param SearchColumnSelectField[] $departmentNoHierarchy
     * @return TimeEntrySearchRowBasic
     */
    public function setDepartmentNoHierarchy(SearchColumnSelectField $departmentNoHierarchy): TimeEntrySearchRowBasic
    {
        $this->departmentNoHierarchy[] = $departmentNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartmentNoHierarchy(): array
    {
        return $this->departmentNoHierarchy;
    }

    /**
     * @param SearchColumnDoubleField[] $durationDecimal
     * @return TimeEntrySearchRowBasic
     */
    public function setDurationDecimal(SearchColumnDoubleField $durationDecimal): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setEmployee(SearchColumnSelectField $employee): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setEndTime(SearchColumnDateField $endTime): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setHours(SearchColumnStringField $hours): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setIsBillable(SearchColumnBooleanField $isBillable): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setIsExempt(SearchColumnBooleanField $isExempt): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setIsProductive(SearchColumnBooleanField $isProductive): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setIsUtilized(SearchColumnBooleanField $isUtilized): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setItem(SearchColumnStringField $item): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setLastModified(SearchColumnDateField $lastModified): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): TimeEntrySearchRowBasic
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
     * @param SearchColumnSelectField[] $locationNoHierarchy
     * @return TimeEntrySearchRowBasic
     */
    public function setLocationNoHierarchy(SearchColumnSelectField $locationNoHierarchy): TimeEntrySearchRowBasic
    {
        $this->locationNoHierarchy[] = $locationNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocationNoHierarchy(): array
    {
        return $this->locationNoHierarchy;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return TimeEntrySearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): TimeEntrySearchRowBasic
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
     * @param SearchColumnSelectField[] $nextApprover
     * @return TimeEntrySearchRowBasic
     */
    public function setNextApprover(SearchColumnSelectField $nextApprover): TimeEntrySearchRowBasic
    {
        $this->nextApprover[] = $nextApprover;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNextApprover(): array
    {
        return $this->nextApprover;
    }

    /**
     * @param SearchColumnBooleanField[] $paidExternally
     * @return TimeEntrySearchRowBasic
     */
    public function setPaidExternally(SearchColumnBooleanField $paidExternally): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setPayItem(SearchColumnSelectField $payItem): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setPayrollDate(SearchColumnDateField $payrollDate): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setRate(SearchColumnDoubleField $rate): TimeEntrySearchRowBasic
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
     * @param SearchColumnDateField[] $startTime
     * @return TimeEntrySearchRowBasic
     */
    public function setStartTime(SearchColumnDateField $startTime): TimeEntrySearchRowBasic
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
     * @param SearchColumnStringField[] $subsidiary
     * @return TimeEntrySearchRowBasic
     */
    public function setSubsidiary(SearchColumnStringField $subsidiary): TimeEntrySearchRowBasic
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
     * @param SearchColumnStringField[] $subsidiaryNoHierarchy
     * @return TimeEntrySearchRowBasic
     */
    public function setSubsidiaryNoHierarchy(SearchColumnStringField $subsidiaryNoHierarchy): TimeEntrySearchRowBasic
    {
        $this->subsidiaryNoHierarchy[] = $subsidiaryNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiaryNoHierarchy(): array
    {
        return $this->subsidiaryNoHierarchy;
    }

    /**
     * @param SearchColumnStringField[] $timeSheet
     * @return TimeEntrySearchRowBasic
     */
    public function setTimeSheet(SearchColumnStringField $timeSheet): TimeEntrySearchRowBasic
    {
        $this->timeSheet[] = $timeSheet;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTimeSheet(): array
    {
        return $this->timeSheet;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return TimeEntrySearchRowBasic
     */
    public function setType(SearchColumnEnumSelectField $type): TimeEntrySearchRowBasic
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
     * @return TimeEntrySearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): TimeEntrySearchRowBasic
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
