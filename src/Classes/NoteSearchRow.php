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

class NoteSearchRow extends SearchRow {
    /**
     * @var NoteSearchRowBasic
     */
    protected NoteSearchRowBasic $basic;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $authorJoin;

    /**
     * @var PhoneCallSearchRowBasic
     */
    protected PhoneCallSearchRowBasic $callJoin;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $campaignJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $entityJoin;

    /**
     * @var CalendarEventSearchRowBasic
     */
    protected CalendarEventSearchRowBasic $eventJoin;

    /**
     * @var IssueSearchRowBasic
     */
    protected IssueSearchRowBasic $issueJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $partnerJoin;

    /**
     * @var SolutionSearchRowBasic
     */
    protected SolutionSearchRowBasic $solutionJoin;

    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $taskJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

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
        "basic" => "NoteSearchRowBasic",
        "authorJoin" => "EmployeeSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "campaignJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "entityJoin" => "EntitySearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "issueJoin" => "IssueSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "solutionJoin" => "SolutionSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param NoteSearchRowBasic $basic
     * @return NoteSearchRow
     */
    public function setBasic(NoteSearchRowBasic $basic): NoteSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getBasic(): NoteSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $authorJoin
     * @return NoteSearchRow
     */
    public function setAuthorJoin(EmployeeSearchRowBasic $authorJoin): NoteSearchRow
    {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getAuthorJoin(): EmployeeSearchRowBasic
    {
        return $this->authorJoin;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return NoteSearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin): NoteSearchRow
    {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin(): PhoneCallSearchRowBasic
    {
        return $this->callJoin;
    }

    /**
     * @param CampaignSearchRowBasic $campaignJoin
     * @return NoteSearchRow
     */
    public function setCampaignJoin(CampaignSearchRowBasic $campaignJoin): NoteSearchRow
    {
        $this->campaignJoin = $campaignJoin;
        return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getCampaignJoin(): CampaignSearchRowBasic
    {
        return $this->campaignJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return NoteSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): NoteSearchRow
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
     * @param ContactSearchRowBasic $contactJoin
     * @return NoteSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): NoteSearchRow
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
     * @param CustomerSearchRowBasic $customerJoin
     * @return NoteSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): NoteSearchRow
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
     * @return NoteSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): NoteSearchRow
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
     * @param EntitySearchRowBasic $entityJoin
     * @return NoteSearchRow
     */
    public function setEntityJoin(EntitySearchRowBasic $entityJoin): NoteSearchRow
    {
        $this->entityJoin = $entityJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getEntityJoin(): EntitySearchRowBasic
    {
        return $this->entityJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return NoteSearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin): NoteSearchRow
    {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin(): CalendarEventSearchRowBasic
    {
        return $this->eventJoin;
    }

    /**
     * @param IssueSearchRowBasic $issueJoin
     * @return NoteSearchRow
     */
    public function setIssueJoin(IssueSearchRowBasic $issueJoin): NoteSearchRow
    {
        $this->issueJoin = $issueJoin;
        return $this;
    }

    /**
     * @return IssueSearchRowBasic
     */
    public function getIssueJoin(): IssueSearchRowBasic
    {
        return $this->issueJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return NoteSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): NoteSearchRow
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin(): ItemSearchRowBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return NoteSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): NoteSearchRow
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
     * @return NoteSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): NoteSearchRow
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
     * @param PartnerSearchRowBasic $partnerJoin
     * @return NoteSearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin): NoteSearchRow
    {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getPartnerJoin(): PartnerSearchRowBasic
    {
        return $this->partnerJoin;
    }

    /**
     * @param SolutionSearchRowBasic $solutionJoin
     * @return NoteSearchRow
     */
    public function setSolutionJoin(SolutionSearchRowBasic $solutionJoin): NoteSearchRow
    {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * @return SolutionSearchRowBasic
     */
    public function getSolutionJoin(): SolutionSearchRowBasic
    {
        return $this->solutionJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return NoteSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): NoteSearchRow
    {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin(): TaskSearchRowBasic
    {
        return $this->taskJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return NoteSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): NoteSearchRow
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
     * @return NoteSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): NoteSearchRow
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
     * @return NoteSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): NoteSearchRow
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
     * @return NoteSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): NoteSearchRow
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
