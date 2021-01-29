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

class ProjectTaskSearchRow extends SearchRow {
    /**
     * @var ProjectTaskSearchRowBasic
     */
    protected ProjectTaskSearchRowBasic $basic;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var ProjectTaskSearchRowBasic
     */
    protected ProjectTaskSearchRowBasic $predecessorJoin;

    /**
     * @var ProjectTaskAssignmentSearchRowBasic
     */
    protected ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin;

    /**
     * @var ResourceAllocationSearchRowBasic
     */
    protected ResourceAllocationSearchRowBasic $resourceAllocationJoin;

    /**
     * @var ProjectTaskSearchRowBasic
     */
    protected ProjectTaskSearchRowBasic $successorJoin;

    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $timeJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var NoteSearchRowBasic
     */
    protected NoteSearchRowBasic $userNotesJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ProjectTaskSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "predecessorJoin" => "ProjectTaskSearchRowBasic",
        "projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "successorJoin" => "ProjectTaskSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ProjectTaskSearchRowBasic $basic
     * @return ProjectTaskSearchRow
     */
    public function setBasic(ProjectTaskSearchRowBasic $basic): ProjectTaskSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getBasic(): ProjectTaskSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return ProjectTaskSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): ProjectTaskSearchRow
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
     * @param ProjectTaskSearchRowBasic $predecessorJoin
     * @return ProjectTaskSearchRow
     */
    public function setPredecessorJoin(ProjectTaskSearchRowBasic $predecessorJoin): ProjectTaskSearchRow
    {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getPredecessorJoin(): ProjectTaskSearchRowBasic
    {
        return $this->predecessorJoin;
    }

    /**
     * @param ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin
     * @return ProjectTaskSearchRow
     */
    public function setProjectTaskAssignmentJoin(ProjectTaskAssignmentSearchRowBasic $projectTaskAssignmentJoin): ProjectTaskSearchRow
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
     * @return ProjectTaskSearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin): ProjectTaskSearchRow
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
     * @param ProjectTaskSearchRowBasic $successorJoin
     * @return ProjectTaskSearchRow
     */
    public function setSuccessorJoin(ProjectTaskSearchRowBasic $successorJoin): ProjectTaskSearchRow
    {
        $this->successorJoin = $successorJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getSuccessorJoin(): ProjectTaskSearchRowBasic
    {
        return $this->successorJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return ProjectTaskSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): ProjectTaskSearchRow
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
     * @param TransactionSearchRowBasic $transactionJoin
     * @return ProjectTaskSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): ProjectTaskSearchRow
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ProjectTaskSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ProjectTaskSearchRow
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
     * @param NoteSearchRowBasic $userNotesJoin
     * @return ProjectTaskSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): ProjectTaskSearchRow
    {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin(): NoteSearchRowBasic
    {
        return $this->userNotesJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return ProjectTaskSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ProjectTaskSearchRow
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
