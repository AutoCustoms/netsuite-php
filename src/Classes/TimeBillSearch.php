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

class TimeBillSearch extends SearchRecord {
    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $basic;

    /**
     * @var PhoneCallSearchBasic
     */
    protected PhoneCallSearchBasic $callJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var ChargeSearchBasic
     */
    protected ChargeSearchBasic $chargeJoin;

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
        "basic" => "TimeBillSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "chargeJoin" => "ChargeSearchBasic",
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
     * @param TimeBillSearchBasic $basic
     * @return TimeBillSearch
     */
    public function setBasic(TimeBillSearchBasic $basic): TimeBillSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getBasic(): TimeBillSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return TimeBillSearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): TimeBillSearch
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
     * @param ChargeSearchBasic $chargeJoin
     * @return TimeBillSearch
     */
    public function setChargeJoin(ChargeSearchBasic $chargeJoin): TimeBillSearch
    {
        $this->chargeJoin = $chargeJoin;
        return $this;
    }

    /**
     * @return ChargeSearchBasic
     */
    public function getChargeJoin(): ChargeSearchBasic
    {
        return $this->chargeJoin;
    }

    /**
     * @param ClassificationSearchBasic $classJoin
     * @return TimeBillSearch
     */
    public function setClassJoin(ClassificationSearchBasic $classJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setProjectTaskJoin(ProjectTaskSearchBasic $projectTaskJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setTimeSheetJoin(TimeSheetSearchBasic $timeSheetJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): TimeBillSearch
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
     * @return TimeBillSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): TimeBillSearch
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
