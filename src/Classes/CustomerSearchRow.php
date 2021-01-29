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

class CustomerSearchRow extends SearchRow {
    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $basic;

    /**
     * @var BillingAccountSearchRowBasic
     */
    protected BillingAccountSearchRowBasic $billingAccountJoin;

    /**
     * @var BillingScheduleSearchRowBasic
     */
    protected BillingScheduleSearchRowBasic $billingScheduleJoin;

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
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactPrimaryJoin;

    /**
     * @var CalendarEventSearchRowBasic
     */
    protected CalendarEventSearchRowBasic $eventJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $hostedPageJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $leadSourceJoin;

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
     * @var MseSubsidiarySearchRowBasic
     */
    protected MseSubsidiarySearchRowBasic $mseSubsidiaryJoin;

    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $parentCustomerJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $partnerJoin;

    /**
     * @var PaymentInstrumentSearchRowBasic
     */
    protected PaymentInstrumentSearchRowBasic $paymentInstrumentJoin;

    /**
     * @var PricingSearchRowBasic
     */
    protected PricingSearchRowBasic $pricingJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $purchasedItemJoin;

    /**
     * @var ResourceAllocationSearchRowBasic
     */
    protected ResourceAllocationSearchRowBasic $resourceAllocationJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $salesRepJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $subCustomerJoin;

    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $taskJoin;

    /**
     * @var EntityTaxRegistrationSearchRowBasic
     */
    protected EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin;

    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $timeJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $topLevelParentJoin;

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
     * @var SiteCategorySearchRowBasic
     */
    protected SiteCategorySearchRowBasic $webSiteCategoryJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $webSiteItemJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerSearchRowBasic",
        "billingAccountJoin" => "BillingAccountSearchRowBasic",
        "billingScheduleJoin" => "BillingScheduleSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hostedPageJoin" => "FileSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "leadSourceJoin" => "CampaignSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "mseSubsidiaryJoin" => "MseSubsidiarySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "parentCustomerJoin" => "CustomerSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchRowBasic",
        "pricingJoin" => "PricingSearchRowBasic",
        "purchasedItemJoin" => "ItemSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "salesRepJoin" => "EmployeeSearchRowBasic",
        "subCustomerJoin" => "CustomerSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "topLevelParentJoin" => "CustomerSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "upsellItemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "webSiteCategoryJoin" => "SiteCategorySearchRowBasic",
        "webSiteItemJoin" => "ItemSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param CustomerSearchRowBasic $basic
     * @return CustomerSearchRow
     */
    public function setBasic(CustomerSearchRowBasic $basic): CustomerSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getBasic(): CustomerSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param BillingAccountSearchRowBasic $billingAccountJoin
     * @return CustomerSearchRow
     */
    public function setBillingAccountJoin(BillingAccountSearchRowBasic $billingAccountJoin): CustomerSearchRow
    {
        $this->billingAccountJoin = $billingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getBillingAccountJoin(): BillingAccountSearchRowBasic
    {
        return $this->billingAccountJoin;
    }

    /**
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return CustomerSearchRow
     */
    public function setBillingScheduleJoin(BillingScheduleSearchRowBasic $billingScheduleJoin): CustomerSearchRow
    {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin(): BillingScheduleSearchRowBasic
    {
        return $this->billingScheduleJoin;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return CustomerSearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setCampaignResponseJoin(CampaignSearchRowBasic $campaignResponseJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): CustomerSearchRow
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
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return CustomerSearchRow
     */
    public function setContactPrimaryJoin(ContactSearchRowBasic $contactPrimaryJoin): CustomerSearchRow
    {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactPrimaryJoin(): ContactSearchRowBasic
    {
        return $this->contactPrimaryJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return CustomerSearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): CustomerSearchRow
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
     * @param FileSearchRowBasic $hostedPageJoin
     * @return CustomerSearchRow
     */
    public function setHostedPageJoin(FileSearchRowBasic $hostedPageJoin): CustomerSearchRow
    {
        $this->hostedPageJoin = $hostedPageJoin;
        return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getHostedPageJoin(): FileSearchRowBasic
    {
        return $this->hostedPageJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return CustomerSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): CustomerSearchRow
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
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return CustomerSearchRow
     */
    public function setLeadSourceJoin(CampaignSearchRowBasic $leadSourceJoin): CustomerSearchRow
    {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getLeadSourceJoin(): CampaignSearchRowBasic
    {
        return $this->leadSourceJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return CustomerSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setMessagesFromJoin(MessageSearchRowBasic $messagesFromJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setMessagesToJoin(MessageSearchRowBasic $messagesToJoin): CustomerSearchRow
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
     * @param MseSubsidiarySearchRowBasic $mseSubsidiaryJoin
     * @return CustomerSearchRow
     */
    public function setMseSubsidiaryJoin(MseSubsidiarySearchRowBasic $mseSubsidiaryJoin): CustomerSearchRow
    {
        $this->mseSubsidiaryJoin = $mseSubsidiaryJoin;
        return $this;
    }

    /**
     * @return MseSubsidiarySearchRowBasic
     */
    public function getMseSubsidiaryJoin(): MseSubsidiarySearchRowBasic
    {
        return $this->mseSubsidiaryJoin;
    }

    /**
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return CustomerSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): CustomerSearchRow
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
     * @param CustomerSearchRowBasic $parentCustomerJoin
     * @return CustomerSearchRow
     */
    public function setParentCustomerJoin(CustomerSearchRowBasic $parentCustomerJoin): CustomerSearchRow
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
     * @param PartnerSearchRowBasic $partnerJoin
     * @return CustomerSearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin): CustomerSearchRow
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
     * @param PaymentInstrumentSearchRowBasic $paymentInstrumentJoin
     * @return CustomerSearchRow
     */
    public function setPaymentInstrumentJoin(PaymentInstrumentSearchRowBasic $paymentInstrumentJoin): CustomerSearchRow
    {
        $this->paymentInstrumentJoin = $paymentInstrumentJoin;
        return $this;
    }

    /**
     * @return PaymentInstrumentSearchRowBasic
     */
    public function getPaymentInstrumentJoin(): PaymentInstrumentSearchRowBasic
    {
        return $this->paymentInstrumentJoin;
    }

    /**
     * @param PricingSearchRowBasic $pricingJoin
     * @return CustomerSearchRow
     */
    public function setPricingJoin(PricingSearchRowBasic $pricingJoin): CustomerSearchRow
    {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * @return PricingSearchRowBasic
     */
    public function getPricingJoin(): PricingSearchRowBasic
    {
        return $this->pricingJoin;
    }

    /**
     * @param ItemSearchRowBasic $purchasedItemJoin
     * @return CustomerSearchRow
     */
    public function setPurchasedItemJoin(ItemSearchRowBasic $purchasedItemJoin): CustomerSearchRow
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
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return CustomerSearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin): CustomerSearchRow
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
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return CustomerSearchRow
     */
    public function setSalesRepJoin(EmployeeSearchRowBasic $salesRepJoin): CustomerSearchRow
    {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getSalesRepJoin(): EmployeeSearchRowBasic
    {
        return $this->salesRepJoin;
    }

    /**
     * @param CustomerSearchRowBasic $subCustomerJoin
     * @return CustomerSearchRow
     */
    public function setSubCustomerJoin(CustomerSearchRowBasic $subCustomerJoin): CustomerSearchRow
    {
        $this->subCustomerJoin = $subCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getSubCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->subCustomerJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return CustomerSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): CustomerSearchRow
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
     * @param EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin
     * @return CustomerSearchRow
     */
    public function setTaxRegistrationJoin(EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin): CustomerSearchRow
    {
        $this->taxRegistrationJoin = $taxRegistrationJoin;
        return $this;
    }

    /**
     * @return EntityTaxRegistrationSearchRowBasic
     */
    public function getTaxRegistrationJoin(): EntityTaxRegistrationSearchRowBasic
    {
        return $this->taxRegistrationJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return CustomerSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): CustomerSearchRow
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
     * @param CustomerSearchRowBasic $topLevelParentJoin
     * @return CustomerSearchRow
     */
    public function setTopLevelParentJoin(CustomerSearchRowBasic $topLevelParentJoin): CustomerSearchRow
    {
        $this->topLevelParentJoin = $topLevelParentJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getTopLevelParentJoin(): CustomerSearchRowBasic
    {
        return $this->topLevelParentJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return CustomerSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setUpsellItemJoin(ItemSearchRowBasic $upsellItemJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): CustomerSearchRow
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
     * @return CustomerSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): CustomerSearchRow
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
     * @param SiteCategorySearchRowBasic $webSiteCategoryJoin
     * @return CustomerSearchRow
     */
    public function setWebSiteCategoryJoin(SiteCategorySearchRowBasic $webSiteCategoryJoin): CustomerSearchRow
    {
        $this->webSiteCategoryJoin = $webSiteCategoryJoin;
        return $this;
    }

    /**
     * @return SiteCategorySearchRowBasic
     */
    public function getWebSiteCategoryJoin(): SiteCategorySearchRowBasic
    {
        return $this->webSiteCategoryJoin;
    }

    /**
     * @param ItemSearchRowBasic $webSiteItemJoin
     * @return CustomerSearchRow
     */
    public function setWebSiteItemJoin(ItemSearchRowBasic $webSiteItemJoin): CustomerSearchRow
    {
        $this->webSiteItemJoin = $webSiteItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getWebSiteItemJoin(): ItemSearchRowBasic
    {
        return $this->webSiteItemJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return CustomerSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): CustomerSearchRow
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
