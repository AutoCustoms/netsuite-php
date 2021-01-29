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

class OpportunitySearch extends SearchRecord {
    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $basic;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $actualJoin;

    /**
     * @var PhoneCallSearchBasic
     */
    protected PhoneCallSearchBasic $callJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $decisionMakerJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $estimateJoin;

    /**
     * @var CalendarEventSearchBasic
     */
    protected CalendarEventSearchBasic $eventJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $leadSourceJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $orderJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $partnerJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $salesRepJoin;

    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $taskJoin;

    /**
     * @var NoteSearchBasic
     */
    protected NoteSearchBasic $userNotesJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "OpportunitySearchBasic",
        "actualJoin" => "TransactionSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "decisionMakerJoin" => "ContactSearchBasic",
        "estimateJoin" => "TransactionSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "leadSourceJoin" => "CampaignSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "orderJoin" => "TransactionSearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param OpportunitySearchBasic $basic
     * @return OpportunitySearch
     */
    public function setBasic(OpportunitySearchBasic $basic): OpportunitySearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return OpportunitySearchBasic
     */
    public function getBasic(): OpportunitySearchBasic
    {
        return $this->basic;
    }

    /**
     * @param TransactionSearchBasic $actualJoin
     * @return OpportunitySearch
     */
    public function setActualJoin(TransactionSearchBasic $actualJoin): OpportunitySearch
    {
        $this->actualJoin = $actualJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getActualJoin(): TransactionSearchBasic
    {
        return $this->actualJoin;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return OpportunitySearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin): OpportunitySearch
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
     * @param CustomerSearchBasic $customerJoin
     * @return OpportunitySearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): OpportunitySearch
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
     * @param ContactSearchBasic $decisionMakerJoin
     * @return OpportunitySearch
     */
    public function setDecisionMakerJoin(ContactSearchBasic $decisionMakerJoin): OpportunitySearch
    {
        $this->decisionMakerJoin = $decisionMakerJoin;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getDecisionMakerJoin(): ContactSearchBasic
    {
        return $this->decisionMakerJoin;
    }

    /**
     * @param TransactionSearchBasic $estimateJoin
     * @return OpportunitySearch
     */
    public function setEstimateJoin(TransactionSearchBasic $estimateJoin): OpportunitySearch
    {
        $this->estimateJoin = $estimateJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getEstimateJoin(): TransactionSearchBasic
    {
        return $this->estimateJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return OpportunitySearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin): OpportunitySearch
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
     * @return OpportunitySearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): OpportunitySearch
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
     * @param ItemSearchBasic $itemJoin
     * @return OpportunitySearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): OpportunitySearch
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
     * @param CampaignSearchBasic $leadSourceJoin
     * @return OpportunitySearch
     */
    public function setLeadSourceJoin(CampaignSearchBasic $leadSourceJoin): OpportunitySearch
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
     * @return OpportunitySearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): OpportunitySearch
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
     * @param TransactionSearchBasic $orderJoin
     * @return OpportunitySearch
     */
    public function setOrderJoin(TransactionSearchBasic $orderJoin): OpportunitySearch
    {
        $this->orderJoin = $orderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getOrderJoin(): TransactionSearchBasic
    {
        return $this->orderJoin;
    }

    /**
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return OpportunitySearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): OpportunitySearch
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
     * @return OpportunitySearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin): OpportunitySearch
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
     * @param EmployeeSearchBasic $salesRepJoin
     * @return OpportunitySearch
     */
    public function setSalesRepJoin(EmployeeSearchBasic $salesRepJoin): OpportunitySearch
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
     * @param TaskSearchBasic $taskJoin
     * @return OpportunitySearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): OpportunitySearch
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
     * @param NoteSearchBasic $userNotesJoin
     * @return OpportunitySearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): OpportunitySearch
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
     * @return OpportunitySearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): OpportunitySearch
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
