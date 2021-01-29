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

class ContactSearchRow extends SearchRow {
    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $basic;

    /**
     * @var PhoneCallSearchRowBasic
     */
    protected PhoneCallSearchRowBasic $callJoin;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $campaignResponseJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerPrimaryJoin;

    /**
     * @var CalendarEventSearchRowBasic
     */
    protected CalendarEventSearchRowBasic $eventJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobPrimaryJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesFromJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesToJoin;

    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $parentCustomerJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $parentJobJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $parentPartnerJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $parentVendorJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $partnerJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $partnerPrimaryJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $purchasedItemJoin;

    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $taskJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $upsellItemJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var NoteSearchRowBasic
     */
    protected NoteSearchRowBasic $userNotesJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorPrimaryJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ContactSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "customerPrimaryJoin" => "CustomerSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "jobPrimaryJoin" => "JobSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "parentCustomerJoin" => "CustomerSearchRowBasic",
        "parentJobJoin" => "JobSearchRowBasic",
        "parentPartnerJoin" => "PartnerSearchRowBasic",
        "parentVendorJoin" => "VendorSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "partnerPrimaryJoin" => "PartnerSearchRowBasic",
        "purchasedItemJoin" => "ItemSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "upsellItemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "vendorPrimaryJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ContactSearchRowBasic $basic
     * @return ContactSearchRow
     */
    public function setBasic(ContactSearchRowBasic $basic): ContactSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getBasic(): ContactSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return ContactSearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin): ContactSearchRow
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
     * @param CampaignSearchRowBasic $campaignResponseJoin
     * @return ContactSearchRow
     */
    public function setCampaignResponseJoin(CampaignSearchRowBasic $campaignResponseJoin): ContactSearchRow
    {
        $this->campaignResponseJoin = $campaignResponseJoin;
        return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getCampaignResponseJoin(): CampaignSearchRowBasic
    {
        return $this->campaignResponseJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return ContactSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): ContactSearchRow
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
     * @param CustomerSearchRowBasic $customerJoin
     * @return ContactSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): ContactSearchRow
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
     * @param CustomerSearchRowBasic $customerPrimaryJoin
     * @return ContactSearchRow
     */
    public function setCustomerPrimaryJoin(CustomerSearchRowBasic $customerPrimaryJoin): ContactSearchRow
    {
        $this->customerPrimaryJoin = $customerPrimaryJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerPrimaryJoin(): CustomerSearchRowBasic
    {
        return $this->customerPrimaryJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return ContactSearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin): ContactSearchRow
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
     * @param FileSearchRowBasic $fileJoin
     * @return ContactSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): ContactSearchRow
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
     * @return ContactSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): ContactSearchRow
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
     * @param JobSearchRowBasic $jobPrimaryJoin
     * @return ContactSearchRow
     */
    public function setJobPrimaryJoin(JobSearchRowBasic $jobPrimaryJoin): ContactSearchRow
    {
        $this->jobPrimaryJoin = $jobPrimaryJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobPrimaryJoin(): JobSearchRowBasic
    {
        return $this->jobPrimaryJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return ContactSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): ContactSearchRow
    {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin(): MessageSearchRowBasic
    {
        return $this->messagesJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesFromJoin
     * @return ContactSearchRow
     */
    public function setMessagesFromJoin(MessageSearchRowBasic $messagesFromJoin): ContactSearchRow
    {
        $this->messagesFromJoin = $messagesFromJoin;
        return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesFromJoin(): MessageSearchRowBasic
    {
        return $this->messagesFromJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesToJoin
     * @return ContactSearchRow
     */
    public function setMessagesToJoin(MessageSearchRowBasic $messagesToJoin): ContactSearchRow
    {
        $this->messagesToJoin = $messagesToJoin;
        return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesToJoin(): MessageSearchRowBasic
    {
        return $this->messagesToJoin;
    }

    /**
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return ContactSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): ContactSearchRow
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
     * @param CustomerSearchRowBasic $parentCustomerJoin
     * @return ContactSearchRow
     */
    public function setParentCustomerJoin(CustomerSearchRowBasic $parentCustomerJoin): ContactSearchRow
    {
        $this->parentCustomerJoin = $parentCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getParentCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->parentCustomerJoin;
    }

    /**
     * @param JobSearchRowBasic $parentJobJoin
     * @return ContactSearchRow
     */
    public function setParentJobJoin(JobSearchRowBasic $parentJobJoin): ContactSearchRow
    {
        $this->parentJobJoin = $parentJobJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getParentJobJoin(): JobSearchRowBasic
    {
        return $this->parentJobJoin;
    }

    /**
     * @param PartnerSearchRowBasic $parentPartnerJoin
     * @return ContactSearchRow
     */
    public function setParentPartnerJoin(PartnerSearchRowBasic $parentPartnerJoin): ContactSearchRow
    {
        $this->parentPartnerJoin = $parentPartnerJoin;
        return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getParentPartnerJoin(): PartnerSearchRowBasic
    {
        return $this->parentPartnerJoin;
    }

    /**
     * @param VendorSearchRowBasic $parentVendorJoin
     * @return ContactSearchRow
     */
    public function setParentVendorJoin(VendorSearchRowBasic $parentVendorJoin): ContactSearchRow
    {
        $this->parentVendorJoin = $parentVendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getParentVendorJoin(): VendorSearchRowBasic
    {
        return $this->parentVendorJoin;
    }

    /**
     * @param PartnerSearchRowBasic $partnerJoin
     * @return ContactSearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin): ContactSearchRow
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
     * @param PartnerSearchRowBasic $partnerPrimaryJoin
     * @return ContactSearchRow
     */
    public function setPartnerPrimaryJoin(PartnerSearchRowBasic $partnerPrimaryJoin): ContactSearchRow
    {
        $this->partnerPrimaryJoin = $partnerPrimaryJoin;
        return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getPartnerPrimaryJoin(): PartnerSearchRowBasic
    {
        return $this->partnerPrimaryJoin;
    }

    /**
     * @param ItemSearchRowBasic $purchasedItemJoin
     * @return ContactSearchRow
     */
    public function setPurchasedItemJoin(ItemSearchRowBasic $purchasedItemJoin): ContactSearchRow
    {
        $this->purchasedItemJoin = $purchasedItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getPurchasedItemJoin(): ItemSearchRowBasic
    {
        return $this->purchasedItemJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return ContactSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): ContactSearchRow
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
     * @return ContactSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): ContactSearchRow
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
     * @param ItemSearchRowBasic $upsellItemJoin
     * @return ContactSearchRow
     */
    public function setUpsellItemJoin(ItemSearchRowBasic $upsellItemJoin): ContactSearchRow
    {
        $this->upsellItemJoin = $upsellItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getUpsellItemJoin(): ItemSearchRowBasic
    {
        return $this->upsellItemJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ContactSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ContactSearchRow
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
     * @return ContactSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): ContactSearchRow
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
     * @param VendorSearchRowBasic $vendorJoin
     * @return ContactSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): ContactSearchRow
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
     * @param VendorSearchRowBasic $vendorPrimaryJoin
     * @return ContactSearchRow
     */
    public function setVendorPrimaryJoin(VendorSearchRowBasic $vendorPrimaryJoin): ContactSearchRow
    {
        $this->vendorPrimaryJoin = $vendorPrimaryJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorPrimaryJoin(): VendorSearchRowBasic
    {
        return $this->vendorPrimaryJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return ContactSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ContactSearchRow
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
