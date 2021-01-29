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

class TimeEntrySearch extends SearchRecord {
    /**
     * @var TimeEntrySearchBasic
     */
    protected TimeEntrySearchBasic $basic;

    /**
     * @var PhoneCallSearchBasic
     */
    protected PhoneCallSearchBasic $callJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var ClassificationSearchBasic
     */
    protected ClassificationSearchBasic $classJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var DepartmentSearchBasic
     */
    protected DepartmentSearchBasic $departmentJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var CalendarEventSearchBasic
     */
    protected CalendarEventSearchBasic $eventJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $locationJoin;

    /**
     * @var ProjectTaskSearchBasic
     */
    protected ProjectTaskSearchBasic $projectTaskJoin;

    /**
     * @var ProjectTaskAssignmentSearchBasic
     */
    protected ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin;

    /**
     * @var ResourceAllocationSearchBasic
     */
    protected ResourceAllocationSearchBasic $resourceAllocationJoin;

    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $taskJoin;

    /**
     * @var TimeSheetSearchBasic
     */
    protected TimeSheetSearchBasic $timeSheetJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "TimeEntrySearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "classJoin" => "ClassificationSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "departmentJoin" => "DepartmentSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "timeSheetJoin" => "TimeSheetSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param TimeEntrySearchBasic $basic
     * @return TimeEntrySearch
     */
    public function setBasic(TimeEntrySearchBasic $basic): TimeEntrySearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TimeEntrySearchBasic
     */
    public function getBasic(): TimeEntrySearchBasic
    {
        return $this->basic;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return TimeEntrySearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin): TimeEntrySearch
    {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin(): PhoneCallSearchBasic
    {
        return $this->callJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return TimeEntrySearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): TimeEntrySearch
    {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin(): SupportCaseSearchBasic
    {
        return $this->caseJoin;
    }

    /**
     * @param ClassificationSearchBasic $classJoin
     * @return TimeEntrySearch
     */
    public function setClassJoin(ClassificationSearchBasic $classJoin): TimeEntrySearch
    {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * @return ClassificationSearchBasic
     */
    public function getClassJoin(): ClassificationSearchBasic
    {
        return $this->classJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return TimeEntrySearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): TimeEntrySearch
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin(): CustomerSearchBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return TimeEntrySearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin): TimeEntrySearch
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin(): DepartmentSearchBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return TimeEntrySearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): TimeEntrySearch
    {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin(): EmployeeSearchBasic
    {
        return $this->employeeJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return TimeEntrySearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin): TimeEntrySearch
    {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin(): CalendarEventSearchBasic
    {
        return $this->eventJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return TimeEntrySearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): TimeEntrySearch
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin(): ItemSearchBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return TimeEntrySearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): TimeEntrySearch
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobJoin(): JobSearchBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return TimeEntrySearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): TimeEntrySearch
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin(): LocationSearchBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return TimeEntrySearch
     */
    public function setProjectTaskJoin(ProjectTaskSearchBasic $projectTaskJoin): TimeEntrySearch
    {
        $this->projectTaskJoin = $projectTaskJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getProjectTaskJoin(): ProjectTaskSearchBasic
    {
        return $this->projectTaskJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     * @return TimeEntrySearch
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin): TimeEntrySearch
    {
        $this->projectTaskAssignmentJoin = $projectTaskAssignmentJoin;
        return $this;
    }

    /**
     * @return ProjectTaskAssignmentSearchBasic
     */
    public function getProjectTaskAssignmentJoin(): ProjectTaskAssignmentSearchBasic
    {
        return $this->projectTaskAssignmentJoin;
    }

    /**
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return TimeEntrySearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin): TimeEntrySearch
    {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * @return ResourceAllocationSearchBasic
     */
    public function getResourceAllocationJoin(): ResourceAllocationSearchBasic
    {
        return $this->resourceAllocationJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return TimeEntrySearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): TimeEntrySearch
    {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * @return TaskSearchBasic
     */
    public function getTaskJoin(): TaskSearchBasic
    {
        return $this->taskJoin;
    }

    /**
     * @param TimeSheetSearchBasic $timeSheetJoin
     * @return TimeEntrySearch
     */
    public function setTimeSheetJoin(TimeSheetSearchBasic $timeSheetJoin): TimeEntrySearch
    {
        $this->timeSheetJoin = $timeSheetJoin;
        return $this;
    }

    /**
     * @return TimeSheetSearchBasic
     */
    public function getTimeSheetJoin(): TimeSheetSearchBasic
    {
        return $this->timeSheetJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return TimeEntrySearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): TimeEntrySearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

    /**
     * @param VendorSearchBasic $vendorJoin
     * @return TimeEntrySearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): TimeEntrySearch
    {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorJoin(): VendorSearchBasic
    {
        return $this->vendorJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return TimeEntrySearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): TimeEntrySearch
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
