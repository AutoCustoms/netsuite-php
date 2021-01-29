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

class TaskSearch extends SearchRecord {
    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $basic;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $assignedJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $companyCustomerJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

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
        "basic" => "TaskSearchBasic",
        "assignedJoin" => "EmployeeSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "companyCustomerJoin" => "CustomerSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param TaskSearchBasic $basic
     * @return TaskSearch
     */
    public function setBasic(TaskSearchBasic $basic): TaskSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TaskSearchBasic
     */
    public function getBasic(): TaskSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchBasic $assignedJoin
     * @return TaskSearch
     */
    public function setAssignedJoin(EmployeeSearchBasic $assignedJoin): TaskSearch
    {
        $this->assignedJoin = $assignedJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getAssignedJoin(): EmployeeSearchBasic
    {
        return $this->assignedJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return TaskSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): TaskSearch
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
     * @param CustomerSearchBasic $companyCustomerJoin
     * @return TaskSearch
     */
    public function setCompanyCustomerJoin(CustomerSearchBasic $companyCustomerJoin): TaskSearch
    {
        $this->companyCustomerJoin = $companyCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCompanyCustomerJoin(): CustomerSearchBasic
    {
        return $this->companyCustomerJoin;
    }

    /**
     * @param ContactSearchBasic $contactJoin
     * @return TaskSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): TaskSearch
    {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactJoin(): ContactSearchBasic
    {
        return $this->contactJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return TaskSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): TaskSearch
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
     * @param FileSearchBasic $fileJoin
     * @return TaskSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): TaskSearch
    {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getFileJoin(): FileSearchBasic
    {
        return $this->fileJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return TaskSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): TaskSearch
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
     * @param OpportunitySearchBasic $opportunityJoin
     * @return TaskSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): TaskSearch
    {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * @return OpportunitySearchBasic
     */
    public function getOpportunityJoin(): OpportunitySearchBasic
    {
        return $this->opportunityJoin;
    }

    /**
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return TaskSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): TaskSearch
    {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * @return OriginatingLeadSearchBasic
     */
    public function getOriginatingLeadJoin(): OriginatingLeadSearchBasic
    {
        return $this->originatingLeadJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return TaskSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): TaskSearch
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
     * @return TaskSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): TaskSearch
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
     * @return TaskSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): TaskSearch
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
     * @return TaskSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): TaskSearch
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
     * @return TaskSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): TaskSearch
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
