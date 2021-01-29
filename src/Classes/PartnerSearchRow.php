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

class PartnerSearchRow extends SearchRow {
    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $basic;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $campaignResponseJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactPrimaryJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

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
     * @var EntityTaxRegistrationSearchRowBasic
     */
    protected EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin;

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
        "basic" => "PartnerSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param PartnerSearchRowBasic $basic
     * @return PartnerSearchRow
     */
    public function setBasic(PartnerSearchRowBasic $basic): PartnerSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getBasic(): PartnerSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param CampaignSearchRowBasic $campaignResponseJoin
     * @return PartnerSearchRow
     */
    public function setCampaignResponseJoin(CampaignSearchRowBasic $campaignResponseJoin): PartnerSearchRow
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
     * @param ContactSearchRowBasic $contactJoin
     * @return PartnerSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): PartnerSearchRow
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
     * @return PartnerSearchRow
     */
    public function setContactPrimaryJoin(ContactSearchRowBasic $contactPrimaryJoin): PartnerSearchRow
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
     * @param CustomerSearchRowBasic $customerJoin
     * @return PartnerSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): PartnerSearchRow
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
     * @param FileSearchRowBasic $fileJoin
     * @return PartnerSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): PartnerSearchRow
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
     * @param MessageSearchRowBasic $messagesJoin
     * @return PartnerSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): PartnerSearchRow
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
     * @return PartnerSearchRow
     */
    public function setMessagesFromJoin(MessageSearchRowBasic $messagesFromJoin): PartnerSearchRow
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
     * @return PartnerSearchRow
     */
    public function setMessagesToJoin(MessageSearchRowBasic $messagesToJoin): PartnerSearchRow
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
     * @return PartnerSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): PartnerSearchRow
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
     * @param EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin
     * @return PartnerSearchRow
     */
    public function setTaxRegistrationJoin(EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin): PartnerSearchRow
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
     * @param TransactionSearchRowBasic $transactionJoin
     * @return PartnerSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): PartnerSearchRow
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
     * @return PartnerSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): PartnerSearchRow
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
     * @return PartnerSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): PartnerSearchRow
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
     * @return PartnerSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): PartnerSearchRow
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
