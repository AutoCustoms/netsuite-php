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

class JobSearchRow extends SearchRow {
    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $basic;

    /**
     * @var BillingAccountSearchRowBasic
     */
    protected BillingAccountSearchRowBasic $billingAccountJoin;

    /**
     * @var BillingScheduleSearchRowBasic
     */
    protected BillingScheduleSearchRowBasic $billingScheduleJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactPrimaryJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $projectManagerJoin;

    /**
     * @var ProjectTaskSearchRowBasic
     */
    protected ProjectTaskSearchRowBasic $projectTaskJoin;

    /**
     * @var ResourceAllocationSearchRowBasic
     */
    protected ResourceAllocationSearchRowBasic $resourceAllocationJoin;

    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $taskJoin;

    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $timeJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "JobSearchRowBasic",
        "billingAccountJoin" => "BillingAccountSearchRowBasic",
        "billingScheduleJoin" => "BillingScheduleSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "projectManagerJoin" => "EmployeeSearchRowBasic",
        "projectTaskJoin" => "ProjectTaskSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param JobSearchRowBasic $basic
     * @return JobSearchRow
     */
    public function setBasic(JobSearchRowBasic $basic): JobSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getBasic(): JobSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param BillingAccountSearchRowBasic $billingAccountJoin
     * @return JobSearchRow
     */
    public function setBillingAccountJoin(BillingAccountSearchRowBasic $billingAccountJoin): JobSearchRow
    {
        $this->billingAccountJoin = $billingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getBillingAccountJoin(): BillingAccountSearchRowBasic
    {
        return $this->billingAccountJoin;
    }

    /**
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return JobSearchRow
     */
    public function setBillingScheduleJoin(BillingScheduleSearchRowBasic $billingScheduleJoin): JobSearchRow
    {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin(): BillingScheduleSearchRowBasic
    {
        return $this->billingScheduleJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return JobSearchRow
     */
    public function setContactPrimaryJoin(ContactSearchRowBasic $contactPrimaryJoin): JobSearchRow
    {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactPrimaryJoin(): ContactSearchRowBasic
    {
        return $this->contactPrimaryJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return JobSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): JobSearchRow
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
     * @param EmployeeSearchRowBasic $projectManagerJoin
     * @return JobSearchRow
     */
    public function setProjectManagerJoin(EmployeeSearchRowBasic $projectManagerJoin): JobSearchRow
    {
        $this->projectManagerJoin = $projectManagerJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getProjectManagerJoin(): EmployeeSearchRowBasic
    {
        return $this->projectManagerJoin;
    }

    /**
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return JobSearchRow
     */
    public function setProjectTaskJoin(ProjectTaskSearchRowBasic $projectTaskJoin): JobSearchRow
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
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return JobSearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin): JobSearchRow
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
     * @return JobSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): JobSearchRow
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
     * @param TimeBillSearchRowBasic $timeJoin
     * @return JobSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): JobSearchRow
    {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin(): TimeBillSearchRowBasic
    {
        return $this->timeJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return JobSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): JobSearchRow
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
