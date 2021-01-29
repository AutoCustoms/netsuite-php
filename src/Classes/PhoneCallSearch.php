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

class PhoneCallSearch extends SearchRecord {
    /**
     * @var PhoneCallSearchBasic
     */
    protected PhoneCallSearchBasic $basic;

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
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $participantJoin;

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
        "basic" => "PhoneCallSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "companyCustomerJoin" => "CustomerSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "participantJoin" => "EntitySearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param PhoneCallSearchBasic $basic
     * @return PhoneCallSearch
     */
    public function setBasic(PhoneCallSearchBasic $basic): PhoneCallSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PhoneCallSearchBasic
     */
    public function getBasic(): PhoneCallSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return PhoneCallSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setCompanyCustomerJoin(CustomerSearchBasic $companyCustomerJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): PhoneCallSearch
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
     * @param OpportunitySearchBasic $opportunityJoin
     * @return PhoneCallSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): PhoneCallSearch
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
     * @param EntitySearchBasic $participantJoin
     * @return PhoneCallSearch
     */
    public function setParticipantJoin(EntitySearchBasic $participantJoin): PhoneCallSearch
    {
        $this->participantJoin = $participantJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getParticipantJoin(): EntitySearchBasic
    {
        return $this->participantJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return PhoneCallSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): PhoneCallSearch
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
     * @return PhoneCallSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): PhoneCallSearch
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
