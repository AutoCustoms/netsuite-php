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

class NoteSearch extends SearchRecord {
    /**
     * @var NoteSearchBasic
     */
    protected NoteSearchBasic $basic;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $authorJoin;

    /**
     * @var PhoneCallSearchBasic
     */
    protected PhoneCallSearchBasic $callJoin;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $campaignJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $entityJoin;

    /**
     * @var CalendarEventSearchBasic
     */
    protected CalendarEventSearchBasic $eventJoin;

    /**
     * @var IssueSearchBasic
     */
    protected IssueSearchBasic $issueJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $partnerJoin;

    /**
     * @var SolutionSearchBasic
     */
    protected SolutionSearchBasic $solutionJoin;

    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $taskJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

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
        "basic" => "NoteSearchBasic",
        "authorJoin" => "EmployeeSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "campaignJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "entityJoin" => "EntitySearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "issueJoin" => "IssueSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "solutionJoin" => "SolutionSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param NoteSearchBasic $basic
     * @return NoteSearch
     */
    public function setBasic(NoteSearchBasic $basic): NoteSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return NoteSearchBasic
     */
    public function getBasic(): NoteSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchBasic $authorJoin
     * @return NoteSearch
     */
    public function setAuthorJoin(EmployeeSearchBasic $authorJoin): NoteSearch
    {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getAuthorJoin(): EmployeeSearchBasic
    {
        return $this->authorJoin;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return NoteSearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin): NoteSearch
    {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin(): PhoneCallSearchBasic
    {
        return $this->callJoin;
    }

    /**
     * @param CampaignSearchBasic $campaignJoin
     * @return NoteSearch
     */
    public function setCampaignJoin(CampaignSearchBasic $campaignJoin): NoteSearch
    {
        $this->campaignJoin = $campaignJoin;
        return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getCampaignJoin(): CampaignSearchBasic
    {
        return $this->campaignJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return NoteSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): NoteSearch
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
     * @param ContactSearchBasic $contactJoin
     * @return NoteSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): NoteSearch
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
     * @param CustomerSearchBasic $customerJoin
     * @return NoteSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): NoteSearch
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
     * @return NoteSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): NoteSearch
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
     * @param EntitySearchBasic $entityJoin
     * @return NoteSearch
     */
    public function setEntityJoin(EntitySearchBasic $entityJoin): NoteSearch
    {
        $this->entityJoin = $entityJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getEntityJoin(): EntitySearchBasic
    {
        return $this->entityJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return NoteSearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin): NoteSearch
    {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin(): CalendarEventSearchBasic
    {
        return $this->eventJoin;
    }

    /**
     * @param IssueSearchBasic $issueJoin
     * @return NoteSearch
     */
    public function setIssueJoin(IssueSearchBasic $issueJoin): NoteSearch
    {
        $this->issueJoin = $issueJoin;
        return $this;
    }

    /**
     * @return IssueSearchBasic
     */
    public function getIssueJoin(): IssueSearchBasic
    {
        return $this->issueJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return NoteSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): NoteSearch
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin(): ItemSearchBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param OpportunitySearchBasic $opportunityJoin
     * @return NoteSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): NoteSearch
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
     * @return NoteSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): NoteSearch
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
     * @param PartnerSearchBasic $partnerJoin
     * @return NoteSearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin): NoteSearch
    {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getPartnerJoin(): PartnerSearchBasic
    {
        return $this->partnerJoin;
    }

    /**
     * @param SolutionSearchBasic $solutionJoin
     * @return NoteSearch
     */
    public function setSolutionJoin(SolutionSearchBasic $solutionJoin): NoteSearch
    {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * @return SolutionSearchBasic
     */
    public function getSolutionJoin(): SolutionSearchBasic
    {
        return $this->solutionJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return NoteSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): NoteSearch
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
     * @param TransactionSearchBasic $transactionJoin
     * @return NoteSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): NoteSearch
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
     * @return NoteSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): NoteSearch
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
     * @return NoteSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): NoteSearch
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
     * @return NoteSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): NoteSearch
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
