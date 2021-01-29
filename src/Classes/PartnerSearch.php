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

class PartnerSearch extends SearchRecord {
    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $basic;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $campaignResponseJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactPrimaryJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

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
     * @var EntityTaxRegistrationSearchBasic
     */
    protected EntityTaxRegistrationSearchBasic $taxRegistrationJoin;

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
        "basic" => "PartnerSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param PartnerSearchBasic $basic
     * @return PartnerSearch
     */
    public function setBasic(PartnerSearchBasic $basic): PartnerSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getBasic(): PartnerSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return PartnerSearch
     */
    public function setCampaignResponseJoin(CampaignSearchBasic $campaignResponseJoin): PartnerSearch
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
     * @param ContactSearchBasic $contactJoin
     * @return PartnerSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): PartnerSearch
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
     * @return PartnerSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin): PartnerSearch
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
     * @param CustomerSearchBasic $customerJoin
     * @return PartnerSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): PartnerSearch
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
     * @param FileSearchBasic $fileJoin
     * @return PartnerSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): PartnerSearch
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
     * @param MessageSearchBasic $messagesJoin
     * @return PartnerSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): PartnerSearch
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
     * @return PartnerSearch
     */
    public function setMessagesFromJoin(MessageSearchBasic $messagesFromJoin): PartnerSearch
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
     * @return PartnerSearch
     */
    public function setMessagesToJoin(MessageSearchBasic $messagesToJoin): PartnerSearch
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
     * @return PartnerSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): PartnerSearch
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
     * @param EntityTaxRegistrationSearchBasic $taxRegistrationJoin
     * @return PartnerSearch
     */
    public function setTaxRegistrationJoin(EntityTaxRegistrationSearchBasic $taxRegistrationJoin): PartnerSearch
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
     * @param TransactionSearchBasic $transactionJoin
     * @return PartnerSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): PartnerSearch
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
     * @return PartnerSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): PartnerSearch
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
     * @return PartnerSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): PartnerSearch
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
     * @return PartnerSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): PartnerSearch
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
