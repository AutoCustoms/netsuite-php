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

class TimeBillSearchRow extends SearchRow {
    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $basic;

    /**
     * @var PhoneCallSearchRowBasic
     */
    protected PhoneCallSearchRowBasic $callJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var ChargeSearchRowBasic
     */
    protected ChargeSearchRowBasic $chargeJoin;

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
        "basic" => "TimeBillSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "chargeJoin" => "ChargeSearchRowBasic",
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
     * @param TimeBillSearchRowBasic $basic
     * @return TimeBillSearchRow
     */
    public function setBasic(TimeBillSearchRowBasic $basic): TimeBillSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getBasic(): TimeBillSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return TimeBillSearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): TimeBillSearchRow
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
     * @param ChargeSearchRowBasic $chargeJoin
     * @return TimeBillSearchRow
     */
    public function setChargeJoin(ChargeSearchRowBasic $chargeJoin): TimeBillSearchRow
    {
        $this->chargeJoin = $chargeJoin;
        return $this;
    }

    /**
     * @return ChargeSearchRowBasic
     */
    public function getChargeJoin(): ChargeSearchRowBasic
    {
        return $this->chargeJoin;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return TimeBillSearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setProjectTaskJoin(ProjectTaskSearchRowBasic $projectTaskJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setTimeSheetJoin(TimeSheetSearchRowBasic $timeSheetJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): TimeBillSearchRow
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
     * @return TimeBillSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): TimeBillSearchRow
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
