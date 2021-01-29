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

class CustomerSearch extends SearchRecord {
    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $basic;

    /**
     * @var BillingAccountSearchBasic
     */
    protected BillingAccountSearchBasic $billingAccountJoin;

    /**
     * @var BillingScheduleSearchBasic
     */
    protected BillingScheduleSearchBasic $billingScheduleJoin;

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
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactPrimaryJoin;

    /**
     * @var CalendarEventSearchBasic
     */
    protected CalendarEventSearchBasic $eventJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $hostedPageJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $leadSourceJoin;

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
     * @var MseSubsidiarySearchBasic
     */
    protected MseSubsidiarySearchBasic $mseSubsidiaryJoin;

    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $parentCustomerJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $partnerJoin;

    /**
     * @var PaymentInstrumentSearchBasic
     */
    protected PaymentInstrumentSearchBasic $paymentInstrumentJoin;

    /**
     * @var PricingSearchBasic
     */
    protected PricingSearchBasic $pricingJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $purchasedItemJoin;

    /**
     * @var ResourceAllocationSearchBasic
     */
    protected ResourceAllocationSearchBasic $resourceAllocationJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $salesRepJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $subCustomerJoin;

    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $taskJoin;

    /**
     * @var EntityTaxRegistrationSearchBasic
     */
    protected EntityTaxRegistrationSearchBasic $taxRegistrationJoin;

    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $timeJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $topLevelParentJoin;

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
     * @var SiteCategorySearchBasic
     */
    protected SiteCategorySearchBasic $webSiteCategoryJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $webSiteItemJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerSearchBasic",
        "billingAccountJoin" => "BillingAccountSearchBasic",
        "billingScheduleJoin" => "BillingScheduleSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "hostedPageJoin" => "FileSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "leadSourceJoin" => "CampaignSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "mseSubsidiaryJoin" => "MseSubsidiarySearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "parentCustomerJoin" => "CustomerSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchBasic",
        "pricingJoin" => "PricingSearchBasic",
        "purchasedItemJoin" => "ItemSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "subCustomerJoin" => "CustomerSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "topLevelParentJoin" => "CustomerSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "upsellItemJoin" => "ItemSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "webSiteCategoryJoin" => "SiteCategorySearchBasic",
        "webSiteItemJoin" => "ItemSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param CustomerSearchBasic $basic
     * @return CustomerSearch
     */
    public function setBasic(CustomerSearchBasic $basic): CustomerSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getBasic(): CustomerSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param BillingAccountSearchBasic $billingAccountJoin
     * @return CustomerSearch
     */
    public function setBillingAccountJoin(BillingAccountSearchBasic $billingAccountJoin): CustomerSearch
    {
        $this->billingAccountJoin = $billingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getBillingAccountJoin(): BillingAccountSearchBasic
    {
        return $this->billingAccountJoin;
    }

    /**
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return CustomerSearch
     */
    public function setBillingScheduleJoin(BillingScheduleSearchBasic $billingScheduleJoin): CustomerSearch
    {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin(): BillingScheduleSearchBasic
    {
        return $this->billingScheduleJoin;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return CustomerSearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setCampaignResponseJoin(CampaignSearchBasic $campaignResponseJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): CustomerSearch
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
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return CustomerSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin): CustomerSearch
    {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin(): ContactSearchBasic
    {
        return $this->contactPrimaryJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return CustomerSearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): CustomerSearch
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
     * @param FileSearchBasic $hostedPageJoin
     * @return CustomerSearch
     */
    public function setHostedPageJoin(FileSearchBasic $hostedPageJoin): CustomerSearch
    {
        $this->hostedPageJoin = $hostedPageJoin;
        return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getHostedPageJoin(): FileSearchBasic
    {
        return $this->hostedPageJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return CustomerSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): CustomerSearch
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
     * @param CampaignSearchBasic $leadSourceJoin
     * @return CustomerSearch
     */
    public function setLeadSourceJoin(CampaignSearchBasic $leadSourceJoin): CustomerSearch
    {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getLeadSourceJoin(): CampaignSearchBasic
    {
        return $this->leadSourceJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return CustomerSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setMessagesFromJoin(MessageSearchBasic $messagesFromJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setMessagesToJoin(MessageSearchBasic $messagesToJoin): CustomerSearch
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
     * @param MseSubsidiarySearchBasic $mseSubsidiaryJoin
     * @return CustomerSearch
     */
    public function setMseSubsidiaryJoin(MseSubsidiarySearchBasic $mseSubsidiaryJoin): CustomerSearch
    {
        $this->mseSubsidiaryJoin = $mseSubsidiaryJoin;
        return $this;
    }

    /**
     * @return MseSubsidiarySearchBasic
     */
    public function getMseSubsidiaryJoin(): MseSubsidiarySearchBasic
    {
        return $this->mseSubsidiaryJoin;
    }

    /**
     * @param OpportunitySearchBasic $opportunityJoin
     * @return CustomerSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): CustomerSearch
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
     * @param CustomerSearchBasic $parentCustomerJoin
     * @return CustomerSearch
     */
    public function setParentCustomerJoin(CustomerSearchBasic $parentCustomerJoin): CustomerSearch
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
     * @param PartnerSearchBasic $partnerJoin
     * @return CustomerSearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin): CustomerSearch
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
     * @param PaymentInstrumentSearchBasic $paymentInstrumentJoin
     * @return CustomerSearch
     */
    public function setPaymentInstrumentJoin(PaymentInstrumentSearchBasic $paymentInstrumentJoin): CustomerSearch
    {
        $this->paymentInstrumentJoin = $paymentInstrumentJoin;
        return $this;
    }

    /**
     * @return PaymentInstrumentSearchBasic
     */
    public function getPaymentInstrumentJoin(): PaymentInstrumentSearchBasic
    {
        return $this->paymentInstrumentJoin;
    }

    /**
     * @param PricingSearchBasic $pricingJoin
     * @return CustomerSearch
     */
    public function setPricingJoin(PricingSearchBasic $pricingJoin): CustomerSearch
    {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * @return PricingSearchBasic
     */
    public function getPricingJoin(): PricingSearchBasic
    {
        return $this->pricingJoin;
    }

    /**
     * @param ItemSearchBasic $purchasedItemJoin
     * @return CustomerSearch
     */
    public function setPurchasedItemJoin(ItemSearchBasic $purchasedItemJoin): CustomerSearch
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
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return CustomerSearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin): CustomerSearch
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
     * @param EmployeeSearchBasic $salesRepJoin
     * @return CustomerSearch
     */
    public function setSalesRepJoin(EmployeeSearchBasic $salesRepJoin): CustomerSearch
    {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getSalesRepJoin(): EmployeeSearchBasic
    {
        return $this->salesRepJoin;
    }

    /**
     * @param CustomerSearchBasic $subCustomerJoin
     * @return CustomerSearch
     */
    public function setSubCustomerJoin(CustomerSearchBasic $subCustomerJoin): CustomerSearch
    {
        $this->subCustomerJoin = $subCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getSubCustomerJoin(): CustomerSearchBasic
    {
        return $this->subCustomerJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return CustomerSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): CustomerSearch
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
     * @param EntityTaxRegistrationSearchBasic $taxRegistrationJoin
     * @return CustomerSearch
     */
    public function setTaxRegistrationJoin(EntityTaxRegistrationSearchBasic $taxRegistrationJoin): CustomerSearch
    {
        $this->taxRegistrationJoin = $taxRegistrationJoin;
        return $this;
    }

    /**
     * @return EntityTaxRegistrationSearchBasic
     */
    public function getTaxRegistrationJoin(): EntityTaxRegistrationSearchBasic
    {
        return $this->taxRegistrationJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return CustomerSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): CustomerSearch
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
     * @param CustomerSearchBasic $topLevelParentJoin
     * @return CustomerSearch
     */
    public function setTopLevelParentJoin(CustomerSearchBasic $topLevelParentJoin): CustomerSearch
    {
        $this->topLevelParentJoin = $topLevelParentJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getTopLevelParentJoin(): CustomerSearchBasic
    {
        return $this->topLevelParentJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return CustomerSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setUpsellItemJoin(ItemSearchBasic $upsellItemJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): CustomerSearch
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
     * @return CustomerSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): CustomerSearch
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
     * @param SiteCategorySearchBasic $webSiteCategoryJoin
     * @return CustomerSearch
     */
    public function setWebSiteCategoryJoin(SiteCategorySearchBasic $webSiteCategoryJoin): CustomerSearch
    {
        $this->webSiteCategoryJoin = $webSiteCategoryJoin;
        return $this;
    }

    /**
     * @return SiteCategorySearchBasic
     */
    public function getWebSiteCategoryJoin(): SiteCategorySearchBasic
    {
        return $this->webSiteCategoryJoin;
    }

    /**
     * @param ItemSearchBasic $webSiteItemJoin
     * @return CustomerSearch
     */
    public function setWebSiteItemJoin(ItemSearchBasic $webSiteItemJoin): CustomerSearch
    {
        $this->webSiteItemJoin = $webSiteItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getWebSiteItemJoin(): ItemSearchBasic
    {
        return $this->webSiteItemJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return CustomerSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): CustomerSearch
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
