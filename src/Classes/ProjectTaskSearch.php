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

class ProjectTaskSearch extends SearchRecord {
    /**
     * @var ProjectTaskSearchBasic
     */
    protected ProjectTaskSearchBasic $basic;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var ProjectTaskSearchBasic
     */
    protected ProjectTaskSearchBasic $predecessorJoin;

    /**
     * @var ProjectTaskAssignmentSearchBasic
     */
    protected ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin;

    /**
     * @var ResourceAllocationSearchBasic
     */
    protected ResourceAllocationSearchBasic $resourceAllocationJoin;

    /**
     * @var ProjectTaskSearchBasic
     */
    protected ProjectTaskSearchBasic $successorJoin;

    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $timeJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var NoteSearchBasic
     */
    protected NoteSearchBasic $userNotesJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ProjectTaskSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "predecessorJoin" => "ProjectTaskSearchBasic",
        "projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "successorJoin" => "ProjectTaskSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ProjectTaskSearchBasic $basic
     * @return ProjectTaskSearch
     */
    public function setBasic(ProjectTaskSearchBasic $basic): ProjectTaskSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getBasic(): ProjectTaskSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return ProjectTaskSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): ProjectTaskSearch
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
     * @param ProjectTaskSearchBasic $predecessorJoin
     * @return ProjectTaskSearch
     */
    public function setPredecessorJoin(ProjectTaskSearchBasic $predecessorJoin): ProjectTaskSearch
    {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getPredecessorJoin(): ProjectTaskSearchBasic
    {
        return $this->predecessorJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin
     * @return ProjectTaskSearch
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchBasic $projectTaskAssignmentJoin): ProjectTaskSearch
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
     * @return ProjectTaskSearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin): ProjectTaskSearch
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
     * @param ProjectTaskSearchBasic $successorJoin
     * @return ProjectTaskSearch
     */
    public function setSuccessorJoin(ProjectTaskSearchBasic $successorJoin): ProjectTaskSearch
    {
        $this->successorJoin = $successorJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getSuccessorJoin(): ProjectTaskSearchBasic
    {
        return $this->successorJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return ProjectTaskSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): ProjectTaskSearch
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
     * @param TransactionSearchBasic $transactionJoin
     * @return ProjectTaskSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): ProjectTaskSearch
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin(): TransactionSearchBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ProjectTaskSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ProjectTaskSearch
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
     * @param NoteSearchBasic $userNotesJoin
     * @return ProjectTaskSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): ProjectTaskSearch
    {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin(): NoteSearchBasic
    {
        return $this->userNotesJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return ProjectTaskSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ProjectTaskSearch
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
