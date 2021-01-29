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

class OpportunitySearchRow extends SearchRow {
    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $basic;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $actualJoin;

    /**
     * @var PhoneCallSearchRowBasic
     */
    protected PhoneCallSearchRowBasic $callJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $decisionMakerJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $estimateJoin;

    /**
     * @var CalendarEventSearchRowBasic
     */
    protected CalendarEventSearchRowBasic $eventJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $leadSourceJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $orderJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $partnerJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $salesRepJoin;

    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $taskJoin;

    /**
     * @var NoteSearchRowBasic
     */
    protected NoteSearchRowBasic $userNotesJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "OpportunitySearchRowBasic",
        "actualJoin" => "TransactionSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "decisionMakerJoin" => "ContactSearchRowBasic",
        "estimateJoin" => "TransactionSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "leadSourceJoin" => "CampaignSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "orderJoin" => "TransactionSearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "salesRepJoin" => "EmployeeSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param OpportunitySearchRowBasic $basic
     * @return OpportunitySearchRow
     */
    public function setBasic(OpportunitySearchRowBasic $basic): OpportunitySearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return OpportunitySearchRowBasic
     */
    public function getBasic(): OpportunitySearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param TransactionSearchRowBasic $actualJoin
     * @return OpportunitySearchRow
     */
    public function setActualJoin(TransactionSearchRowBasic $actualJoin): OpportunitySearchRow
    {
        $this->actualJoin = $actualJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getActualJoin(): TransactionSearchRowBasic
    {
        return $this->actualJoin;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return OpportunitySearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin): OpportunitySearchRow
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
     * @param CustomerSearchRowBasic $customerJoin
     * @return OpportunitySearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): OpportunitySearchRow
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
     * @param ContactSearchRowBasic $decisionMakerJoin
     * @return OpportunitySearchRow
     */
    public function setDecisionMakerJoin(ContactSearchRowBasic $decisionMakerJoin): OpportunitySearchRow
    {
        $this->decisionMakerJoin = $decisionMakerJoin;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getDecisionMakerJoin(): ContactSearchRowBasic
    {
        return $this->decisionMakerJoin;
    }

    /**
     * @param TransactionSearchRowBasic $estimateJoin
     * @return OpportunitySearchRow
     */
    public function setEstimateJoin(TransactionSearchRowBasic $estimateJoin): OpportunitySearchRow
    {
        $this->estimateJoin = $estimateJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getEstimateJoin(): TransactionSearchRowBasic
    {
        return $this->estimateJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return OpportunitySearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin): OpportunitySearchRow
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
     * @return OpportunitySearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): OpportunitySearchRow
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
     * @param ItemSearchRowBasic $itemJoin
     * @return OpportunitySearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): OpportunitySearchRow
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
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return OpportunitySearchRow
     */
    public function setLeadSourceJoin(CampaignSearchRowBasic $leadSourceJoin): OpportunitySearchRow
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
     * @return OpportunitySearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): OpportunitySearchRow
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
     * @param TransactionSearchRowBasic $orderJoin
     * @return OpportunitySearchRow
     */
    public function setOrderJoin(TransactionSearchRowBasic $orderJoin): OpportunitySearchRow
    {
        $this->orderJoin = $orderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getOrderJoin(): TransactionSearchRowBasic
    {
        return $this->orderJoin;
    }

    /**
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return OpportunitySearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): OpportunitySearchRow
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
     * @return OpportunitySearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin): OpportunitySearchRow
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
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return OpportunitySearchRow
     */
    public function setSalesRepJoin(EmployeeSearchRowBasic $salesRepJoin): OpportunitySearchRow
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
     * @param TaskSearchRowBasic $taskJoin
     * @return OpportunitySearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): OpportunitySearchRow
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
     * @param NoteSearchRowBasic $userNotesJoin
     * @return OpportunitySearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): OpportunitySearchRow
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
     * @return OpportunitySearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): OpportunitySearchRow
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
