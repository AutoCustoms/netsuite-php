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

class JobSearch extends SearchRecord {
    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $basic;

    /**
     * @var BillingAccountSearchBasic
     */
    protected BillingAccountSearchBasic $billingAccountJoin;

    /**
     * @var BillingScheduleSearchBasic
     */
    protected BillingScheduleSearchBasic $billingScheduleJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactPrimaryJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $projectManagerJoin;

    /**
     * @var ProjectTaskSearchBasic
     */
    protected ProjectTaskSearchBasic $projectTaskJoin;

    /**
     * @var ResourceAllocationSearchBasic
     */
    protected ResourceAllocationSearchBasic $resourceAllocationJoin;

    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $taskJoin;

    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $timeJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "JobSearchBasic",
        "billingAccountJoin" => "BillingAccountSearchBasic",
        "billingScheduleJoin" => "BillingScheduleSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "projectManagerJoin" => "EmployeeSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param JobSearchBasic $basic
     * @return JobSearch
     */
    public function setBasic(JobSearchBasic $basic): JobSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getBasic(): JobSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param BillingAccountSearchBasic $billingAccountJoin
     * @return JobSearch
     */
    public function setBillingAccountJoin(BillingAccountSearchBasic $billingAccountJoin): JobSearch
    {
        $this->billingAccountJoin = $billingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getBillingAccountJoin(): BillingAccountSearchBasic
    {
        return $this->billingAccountJoin;
    }

    /**
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return JobSearch
     */
    public function setBillingScheduleJoin(BillingScheduleSearchBasic $billingScheduleJoin): JobSearch
    {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin(): BillingScheduleSearchBasic
    {
        return $this->billingScheduleJoin;
    }

    /**
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return JobSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin): JobSearch
    {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin(): ContactSearchBasic
    {
        return $this->contactPrimaryJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return JobSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): JobSearch
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
     * @param EmployeeSearchBasic $projectManagerJoin
     * @return JobSearch
     */
    public function setProjectManagerJoin(EmployeeSearchBasic $projectManagerJoin): JobSearch
    {
        $this->projectManagerJoin = $projectManagerJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getProjectManagerJoin(): EmployeeSearchBasic
    {
        return $this->projectManagerJoin;
    }

    /**
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return JobSearch
     */
    public function setProjectTaskJoin(ProjectTaskSearchBasic $projectTaskJoin): JobSearch
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
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return JobSearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin): JobSearch
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
     * @return JobSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): JobSearch
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
     * @param TimeBillSearchBasic $timeJoin
     * @return JobSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): JobSearch
    {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin(): TimeBillSearchBasic
    {
        return $this->timeJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return JobSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): JobSearch
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
