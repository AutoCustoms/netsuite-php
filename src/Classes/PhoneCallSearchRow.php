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

class PhoneCallSearchRow extends SearchRow {
    /**
     * @var PhoneCallSearchRowBasic
     */
    protected PhoneCallSearchRowBasic $basic;

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
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $participantJoin;

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
        "basic" => "PhoneCallSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "companyCustomerJoin" => "CustomerSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "participantJoin" => "EntitySearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param PhoneCallSearchRowBasic $basic
     * @return PhoneCallSearchRow
     */
    public function setBasic(PhoneCallSearchRowBasic $basic): PhoneCallSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PhoneCallSearchRowBasic
     */
    public function getBasic(): PhoneCallSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return PhoneCallSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setCompanyCustomerJoin(CustomerSearchRowBasic $companyCustomerJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): PhoneCallSearchRow
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
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return PhoneCallSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): PhoneCallSearchRow
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
     * @param EntitySearchRowBasic $participantJoin
     * @return PhoneCallSearchRow
     */
    public function setParticipantJoin(EntitySearchRowBasic $participantJoin): PhoneCallSearchRow
    {
        $this->participantJoin = $participantJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getParticipantJoin(): EntitySearchRowBasic
    {
        return $this->participantJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return PhoneCallSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): PhoneCallSearchRow
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
     * @return PhoneCallSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): PhoneCallSearchRow
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
