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

class ContactSearch extends SearchRecord {
    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $basic;

    /**
     * @var PhoneCallSearchBasic
     */
    protected PhoneCallSearchBasic $callJoin;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $campaignResponseJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerPrimaryJoin;

    /**
     * @var CalendarEventSearchBasic
     */
    protected CalendarEventSearchBasic $eventJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobPrimaryJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesFromJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesToJoin;

    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $parentCustomerJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $parentJobJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $parentPartnerJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $parentVendorJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $partnerJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $partnerPrimaryJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $purchasedItemJoin;

    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $taskJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $upsellItemJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var NoteSearchBasic
     */
    protected NoteSearchBasic $userNotesJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorPrimaryJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ContactSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "customerPrimaryJoin" => "CustomerSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "jobPrimaryJoin" => "JobSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "parentCustomerJoin" => "CustomerSearchBasic",
        "parentJobJoin" => "JobSearchBasic",
        "parentPartnerJoin" => "PartnerSearchBasic",
        "parentVendorJoin" => "VendorSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "partnerPrimaryJoin" => "PartnerSearchBasic",
        "purchasedItemJoin" => "ItemSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "upsellItemJoin" => "ItemSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "vendorPrimaryJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ContactSearchBasic $basic
     * @return ContactSearch
     */
    public function setBasic(ContactSearchBasic $basic): ContactSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getBasic(): ContactSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return ContactSearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin): ContactSearch
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
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return ContactSearch
     */
    public function setCampaignResponseJoin(CampaignSearchBasic $campaignResponseJoin): ContactSearch
    {
        $this->campaignResponseJoin = $campaignResponseJoin;
        return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getCampaignResponseJoin(): CampaignSearchBasic
    {
        return $this->campaignResponseJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return ContactSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): ContactSearch
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
     * @param CustomerSearchBasic $customerJoin
     * @return ContactSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): ContactSearch
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
     * @param CustomerSearchBasic $customerPrimaryJoin
     * @return ContactSearch
     */
    public function setCustomerPrimaryJoin(CustomerSearchBasic $customerPrimaryJoin): ContactSearch
    {
        $this->customerPrimaryJoin = $customerPrimaryJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerPrimaryJoin(): CustomerSearchBasic
    {
        return $this->customerPrimaryJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return ContactSearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin): ContactSearch
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
     * @param FileSearchBasic $fileJoin
     * @return ContactSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): ContactSearch
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
     * @return ContactSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): ContactSearch
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
     * @param JobSearchBasic $jobPrimaryJoin
     * @return ContactSearch
     */
    public function setJobPrimaryJoin(JobSearchBasic $jobPrimaryJoin): ContactSearch
    {
        $this->jobPrimaryJoin = $jobPrimaryJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobPrimaryJoin(): JobSearchBasic
    {
        return $this->jobPrimaryJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return ContactSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): ContactSearch
    {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesJoin(): MessageSearchBasic
    {
        return $this->messagesJoin;
    }

    /**
     * @param MessageSearchBasic $messagesFromJoin
     * @return ContactSearch
     */
    public function setMessagesFromJoin(MessageSearchBasic $messagesFromJoin): ContactSearch
    {
        $this->messagesFromJoin = $messagesFromJoin;
        return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesFromJoin(): MessageSearchBasic
    {
        return $this->messagesFromJoin;
    }

    /**
     * @param MessageSearchBasic $messagesToJoin
     * @return ContactSearch
     */
    public function setMessagesToJoin(MessageSearchBasic $messagesToJoin): ContactSearch
    {
        $this->messagesToJoin = $messagesToJoin;
        return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesToJoin(): MessageSearchBasic
    {
        return $this->messagesToJoin;
    }

    /**
     * @param OpportunitySearchBasic $opportunityJoin
     * @return ContactSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): ContactSearch
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
     * @param CustomerSearchBasic $parentCustomerJoin
     * @return ContactSearch
     */
    public function setParentCustomerJoin(CustomerSearchBasic $parentCustomerJoin): ContactSearch
    {
        $this->parentCustomerJoin = $parentCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getParentCustomerJoin(): CustomerSearchBasic
    {
        return $this->parentCustomerJoin;
    }

    /**
     * @param JobSearchBasic $parentJobJoin
     * @return ContactSearch
     */
    public function setParentJobJoin(JobSearchBasic $parentJobJoin): ContactSearch
    {
        $this->parentJobJoin = $parentJobJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getParentJobJoin(): JobSearchBasic
    {
        return $this->parentJobJoin;
    }

    /**
     * @param PartnerSearchBasic $parentPartnerJoin
     * @return ContactSearch
     */
    public function setParentPartnerJoin(PartnerSearchBasic $parentPartnerJoin): ContactSearch
    {
        $this->parentPartnerJoin = $parentPartnerJoin;
        return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getParentPartnerJoin(): PartnerSearchBasic
    {
        return $this->parentPartnerJoin;
    }

    /**
     * @param VendorSearchBasic $parentVendorJoin
     * @return ContactSearch
     */
    public function setParentVendorJoin(VendorSearchBasic $parentVendorJoin): ContactSearch
    {
        $this->parentVendorJoin = $parentVendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getParentVendorJoin(): VendorSearchBasic
    {
        return $this->parentVendorJoin;
    }

    /**
     * @param PartnerSearchBasic $partnerJoin
     * @return ContactSearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin): ContactSearch
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
     * @param PartnerSearchBasic $partnerPrimaryJoin
     * @return ContactSearch
     */
    public function setPartnerPrimaryJoin(PartnerSearchBasic $partnerPrimaryJoin): ContactSearch
    {
        $this->partnerPrimaryJoin = $partnerPrimaryJoin;
        return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getPartnerPrimaryJoin(): PartnerSearchBasic
    {
        return $this->partnerPrimaryJoin;
    }

    /**
     * @param ItemSearchBasic $purchasedItemJoin
     * @return ContactSearch
     */
    public function setPurchasedItemJoin(ItemSearchBasic $purchasedItemJoin): ContactSearch
    {
        $this->purchasedItemJoin = $purchasedItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getPurchasedItemJoin(): ItemSearchBasic
    {
        return $this->purchasedItemJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return ContactSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): ContactSearch
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
     * @return ContactSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): ContactSearch
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
     * @param ItemSearchBasic $upsellItemJoin
     * @return ContactSearch
     */
    public function setUpsellItemJoin(ItemSearchBasic $upsellItemJoin): ContactSearch
    {
        $this->upsellItemJoin = $upsellItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getUpsellItemJoin(): ItemSearchBasic
    {
        return $this->upsellItemJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ContactSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ContactSearch
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
     * @return ContactSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): ContactSearch
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
     * @param VendorSearchBasic $vendorJoin
     * @return ContactSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): ContactSearch
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
     * @param VendorSearchBasic $vendorPrimaryJoin
     * @return ContactSearch
     */
    public function setVendorPrimaryJoin(VendorSearchBasic $vendorPrimaryJoin): ContactSearch
    {
        $this->vendorPrimaryJoin = $vendorPrimaryJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorPrimaryJoin(): VendorSearchBasic
    {
        return $this->vendorPrimaryJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return ContactSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ContactSearch
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
