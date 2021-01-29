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

class ResourceAllocationSearch extends SearchRecord {
    /**
     * @var ResourceAllocationSearchBasic
     */
    protected ResourceAllocationSearchBasic $basic;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var ProjectTaskSearchBasic
     */
    protected ProjectTaskSearchBasic $projectTaskJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $requestedByJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $resourceJoin;

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
        "basic" => "ResourceAllocationSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "requestedByJoin" => "EntitySearchBasic",
        "resourceJoin" => "EntitySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ResourceAllocationSearchBasic $basic
     * @return ResourceAllocationSearch
     */
    public function setBasic(ResourceAllocationSearchBasic $basic): ResourceAllocationSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ResourceAllocationSearchBasic
     */
    public function getBasic(): ResourceAllocationSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return ResourceAllocationSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): ResourceAllocationSearch
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
     * @param EmployeeSearchBasic $employeeJoin
     * @return ResourceAllocationSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): ResourceAllocationSearch
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
     * @param JobSearchBasic $jobJoin
     * @return ResourceAllocationSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): ResourceAllocationSearch
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
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return ResourceAllocationSearch
     */
    public function setProjectTaskJoin(ProjectTaskSearchBasic $projectTaskJoin): ResourceAllocationSearch
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
     * @param EntitySearchBasic $requestedByJoin
     * @return ResourceAllocationSearch
     */
    public function setRequestedByJoin(EntitySearchBasic $requestedByJoin): ResourceAllocationSearch
    {
        $this->requestedByJoin = $requestedByJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getRequestedByJoin(): EntitySearchBasic
    {
        return $this->requestedByJoin;
    }

    /**
     * @param EntitySearchBasic $resourceJoin
     * @return ResourceAllocationSearch
     */
    public function setResourceJoin(EntitySearchBasic $resourceJoin): ResourceAllocationSearch
    {
        $this->resourceJoin = $resourceJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getResourceJoin(): EntitySearchBasic
    {
        return $this->resourceJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ResourceAllocationSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ResourceAllocationSearch
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
     * @return ResourceAllocationSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): ResourceAllocationSearch
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
     * @return ResourceAllocationSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ResourceAllocationSearch
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
