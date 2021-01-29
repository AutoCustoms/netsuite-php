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

class TimeEntrySearchRow extends SearchRow {
    /**
     * @var TimeEntrySearchRowBasic
     */
    protected TimeEntrySearchRowBasic $basic;

    /**
     * @var PhoneCallSearchRowBasic
     */
    protected PhoneCallSearchRowBasic $callJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var ClassificationSearchRowBasic
     */
    protected ClassificationSearchRowBasic $classJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var DepartmentSearchRowBasic
     */
    protected DepartmentSearchRowBasic $departmentJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var CalendarEventSearchRowBasic
     */
    protected CalendarEventSearchRowBasic $eventJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $locationJoin;

    /**
     * @var ProjectTaskSearchRowBasic
     */
    protected ProjectTaskSearchRowBasic $projectTaskJoin;

    /**
     * @var ProjectTaskAssignmentSearchRowBasic
     */
    protected ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin;

    /**
     * @var ResourceAllocationSearchRowBasic
     */
    protected ResourceAllocationSearchRowBasic $resourceAllocationJoin;

    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $taskJoin;

    /**
     * @var TimeSheetSearchRowBasic
     */
    protected TimeSheetSearchRowBasic $timeSheetJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "TimeEntrySearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "classJoin" => "ClassificationSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "projectTaskJoin" => "ProjectTaskSearchRowBasic",
        "projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "timeSheetJoin" => "TimeSheetSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param TimeEntrySearchRowBasic $basic
     * @return TimeEntrySearchRow
     */
    public function setBasic(TimeEntrySearchRowBasic $basic): TimeEntrySearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TimeEntrySearchRowBasic
     */
    public function getBasic(): TimeEntrySearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return TimeEntrySearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin): TimeEntrySearchRow
    {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin(): PhoneCallSearchRowBasic
    {
        return $this->callJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return TimeEntrySearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): TimeEntrySearchRow
    {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin(): SupportCaseSearchRowBasic
    {
        return $this->caseJoin;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return TimeEntrySearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin): TimeEntrySearchRow
    {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin(): ClassificationSearchRowBasic
    {
        return $this->classJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return TimeEntrySearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): TimeEntrySearchRow
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return TimeEntrySearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin): TimeEntrySearchRow
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin(): DepartmentSearchRowBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return TimeEntrySearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): TimeEntrySearchRow
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
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return TimeEntrySearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin): TimeEntrySearchRow
    {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin(): CalendarEventSearchRowBasic
    {
        return $this->eventJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return TimeEntrySearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): TimeEntrySearchRow
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin(): ItemSearchRowBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return TimeEntrySearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): TimeEntrySearchRow
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobJoin(): JobSearchRowBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return TimeEntrySearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): TimeEntrySearchRow
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin(): LocationSearchRowBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return TimeEntrySearchRow
     */
    public function setProjectTaskJoin(ProjectTaskSearchRowBasic $projectTaskJoin): TimeEntrySearchRow
    {
        $this->projectTaskJoin = $projectTaskJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getProjectTaskJoin(): ProjectTaskSearchRowBasic
    {
        return $this->projectTaskJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     * @return TimeEntrySearchRow
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin): TimeEntrySearchRow
    {
        $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
        return $this;
    }

    /**
     * @return ProjectTaskAssignmentSearchRowBasic
     */
    public function getProjectTaskAssignmentJoin(): ProjectTaskAssignmentSearchRowBasic
    {
        return $this->projectTaskAssignmentJoin;
    }

    /**
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return TimeEntrySearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin): TimeEntrySearchRow
    {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * @return ResourceAllocationSearchRowBasic
     */
    public function getResourceAllocationJoin(): ResourceAllocationSearchRowBasic
    {
        return $this->resourceAllocationJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return TimeEntrySearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): TimeEntrySearchRow
    {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin(): TaskSearchRowBasic
    {
        return $this->taskJoin;
    }

    /**
     * @param TimeSheetSearchRowBasic $timeSheetJoin
     * @return TimeEntrySearchRow
     */
    public function setTimeSheetJoin(TimeSheetSearchRowBasic $timeSheetJoin): TimeEntrySearchRow
    {
        $this->timeSheetJoin = $timeSheetJoin;
        return $this;
    }

    /**
     * @return TimeSheetSearchRowBasic
     */
    public function getTimeSheetJoin(): TimeSheetSearchRowBasic
    {
        return $this->timeSheetJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return TimeEntrySearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): TimeEntrySearchRow
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin(): EmployeeSearchRowBasic
    {
        return $this->userJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return TimeEntrySearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): TimeEntrySearchRow
    {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin(): VendorSearchRowBasic
    {
        return $this->vendorJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return TimeEntrySearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): TimeEntrySearchRow
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
