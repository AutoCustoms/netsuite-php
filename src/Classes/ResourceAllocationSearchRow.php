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

class ResourceAllocationSearchRow extends SearchRow {
    /**
     * @var ResourceAllocationSearchRowBasic
     */
    protected ResourceAllocationSearchRowBasic $basic;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var ProjectTaskSearchRowBasic
     */
    protected ProjectTaskSearchRowBasic $projectTaskJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $requestedByJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $resourceJoin;

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
        "basic" => "ResourceAllocationSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "projectTaskJoin" => "ProjectTaskSearchRowBasic",
        "requestedByJoin" => "EntitySearchRowBasic",
        "resourceJoin" => "EntitySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ResourceAllocationSearchRowBasic $basic
     * @return ResourceAllocationSearchRow
     */
    public function setBasic(ResourceAllocationSearchRowBasic $basic): ResourceAllocationSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ResourceAllocationSearchRowBasic
     */
    public function getBasic(): ResourceAllocationSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return ResourceAllocationSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): ResourceAllocationSearchRow
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
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return ResourceAllocationSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): ResourceAllocationSearchRow
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
     * @param JobSearchRowBasic $jobJoin
     * @return ResourceAllocationSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): ResourceAllocationSearchRow
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
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return ResourceAllocationSearchRow
     */
    public function setProjectTaskJoin(ProjectTaskSearchRowBasic $projectTaskJoin): ResourceAllocationSearchRow
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
     * @param EntitySearchRowBasic $requestedByJoin
     * @return ResourceAllocationSearchRow
     */
    public function setRequestedByJoin(EntitySearchRowBasic $requestedByJoin): ResourceAllocationSearchRow
    {
        $this->requestedByJoin = $requestedByJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getRequestedByJoin(): EntitySearchRowBasic
    {
        return $this->requestedByJoin;
    }

    /**
     * @param EntitySearchRowBasic $resourceJoin
     * @return ResourceAllocationSearchRow
     */
    public function setResourceJoin(EntitySearchRowBasic $resourceJoin): ResourceAllocationSearchRow
    {
        $this->resourceJoin = $resourceJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getResourceJoin(): EntitySearchRowBasic
    {
        return $this->resourceJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ResourceAllocationSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ResourceAllocationSearchRow
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
     * @return ResourceAllocationSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): ResourceAllocationSearchRow
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
     * @return ResourceAllocationSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ResourceAllocationSearchRow
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
