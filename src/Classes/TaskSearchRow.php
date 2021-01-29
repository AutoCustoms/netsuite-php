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

class TaskSearchRow extends SearchRow {
    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $assignedJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $companyCustomerJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

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
        "basic" => "TaskSearchRowBasic",
        "assignedJoin" => "EmployeeSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "companyCustomerJoin" => "CustomerSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param TaskSearchRowBasic $basic
     * @return TaskSearchRow
     */
    public function setBasic(TaskSearchRowBasic $basic): TaskSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getBasic(): TaskSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $assignedJoin
     * @return TaskSearchRow
     */
    public function setAssignedJoin(EmployeeSearchRowBasic $assignedJoin): TaskSearchRow
    {
        $this->assignedJoin = $assignedJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getAssignedJoin(): EmployeeSearchRowBasic
    {
        return $this->assignedJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return TaskSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): TaskSearchRow
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
     * @param CustomerSearchRowBasic $companyCustomerJoin
     * @return TaskSearchRow
     */
    public function setCompanyCustomerJoin(CustomerSearchRowBasic $companyCustomerJoin): TaskSearchRow
    {
        $this->companyCustomerJoin = $companyCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCompanyCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->companyCustomerJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactJoin
     * @return TaskSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): TaskSearchRow
    {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactJoin(): ContactSearchRowBasic
    {
        return $this->contactJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return TaskSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): TaskSearchRow
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
     * @param FileSearchRowBasic $fileJoin
     * @return TaskSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): TaskSearchRow
    {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getFileJoin(): FileSearchRowBasic
    {
        return $this->fileJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return TaskSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): TaskSearchRow
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
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return TaskSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): TaskSearchRow
    {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * @return OpportunitySearchRowBasic
     */
    public function getOpportunityJoin(): OpportunitySearchRowBasic
    {
        return $this->opportunityJoin;
    }

    /**
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return TaskSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): TaskSearchRow
    {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * @return OriginatingLeadSearchRowBasic
     */
    public function getOriginatingLeadJoin(): OriginatingLeadSearchRowBasic
    {
        return $this->originatingLeadJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return TaskSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): TaskSearchRow
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
     * @return TaskSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): TaskSearchRow
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
     * @return TaskSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): TaskSearchRow
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
     * @return TaskSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): TaskSearchRow
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
     * @return TaskSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): TaskSearchRow
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
