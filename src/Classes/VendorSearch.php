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

class VendorSearch extends SearchRecord {
    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $basic;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $accountJoin;

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
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $expAccountJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $manufacturingLocationsJoin;

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
     * @var EntityTaxRegistrationSearchBasic
     */
    protected EntityTaxRegistrationSearchBasic $taxRegistrationJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $timeApproverJoin;

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
        "basic" => "VendorSearchBasic",
        "accountJoin" => "AccountSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "expAccountJoin" => "AccountSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "manufacturingLocationsJoin" => "LocationSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "mseSubsidiaryJoin" => "MseSubsidiarySearchBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchBasic",
        "timeApproverJoin" => "EmployeeSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param VendorSearchBasic $basic
     * @return VendorSearch
     */
    public function setBasic(VendorSearchBasic $basic): VendorSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getBasic(): VendorSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchBasic $accountJoin
     * @return VendorSearch
     */
    public function setAccountJoin(AccountSearchBasic $accountJoin): VendorSearch
    {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAccountJoin(): AccountSearchBasic
    {
        return $this->accountJoin;
    }

    /**
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return VendorSearch
     */
    public function setCampaignResponseJoin(CampaignSearchBasic $campaignResponseJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin): VendorSearch
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
     * @param AccountSearchBasic $expAccountJoin
     * @return VendorSearch
     */
    public function setExpAccountJoin(AccountSearchBasic $expAccountJoin): VendorSearch
    {
        $this->expAccountJoin = $expAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getExpAccountJoin(): AccountSearchBasic
    {
        return $this->expAccountJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return VendorSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): VendorSearch
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
     * @param LocationSearchBasic $manufacturingLocationsJoin
     * @return VendorSearch
     */
    public function setManufacturingLocationsJoin(LocationSearchBasic $manufacturingLocationsJoin): VendorSearch
    {
        $this->manufacturingLocationsJoin = $manufacturingLocationsJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getManufacturingLocationsJoin(): LocationSearchBasic
    {
        return $this->manufacturingLocationsJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return VendorSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setMessagesFromJoin(MessageSearchBasic $messagesFromJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setMessagesToJoin(MessageSearchBasic $messagesToJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setMseSubsidiaryJoin(MseSubsidiarySearchBasic $mseSubsidiaryJoin): VendorSearch
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
     * @param EntityTaxRegistrationSearchBasic $taxRegistrationJoin
     * @return VendorSearch
     */
    public function setTaxRegistrationJoin(EntityTaxRegistrationSearchBasic $taxRegistrationJoin): VendorSearch
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
     * @param EmployeeSearchBasic $timeApproverJoin
     * @return VendorSearch
     */
    public function setTimeApproverJoin(EmployeeSearchBasic $timeApproverJoin): VendorSearch
    {
        $this->timeApproverJoin = $timeApproverJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getTimeApproverJoin(): EmployeeSearchBasic
    {
        return $this->timeApproverJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return VendorSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): VendorSearch
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
     * @return VendorSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): VendorSearch
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
