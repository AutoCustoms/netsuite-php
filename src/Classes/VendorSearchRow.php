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

class VendorSearchRow extends SearchRow {
    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $basic;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $accountJoin;

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
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $expAccountJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $manufacturingLocationsJoin;

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
     * @var EntityTaxRegistrationSearchRowBasic
     */
    protected EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $timeApproverJoin;

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
        "basic" => "VendorSearchRowBasic",
        "accountJoin" => "AccountSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "expAccountJoin" => "AccountSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "manufacturingLocationsJoin" => "LocationSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "mseSubsidiaryJoin" => "MseSubsidiarySearchRowBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
        "timeApproverJoin" => "EmployeeSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param VendorSearchRowBasic $basic
     * @return VendorSearchRow
     */
    public function setBasic(VendorSearchRowBasic $basic): VendorSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getBasic(): VendorSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchRowBasic $accountJoin
     * @return VendorSearchRow
     */
    public function setAccountJoin(AccountSearchRowBasic $accountJoin): VendorSearchRow
    {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin(): AccountSearchRowBasic
    {
        return $this->accountJoin;
    }

    /**
     * @param CampaignSearchRowBasic $campaignResponseJoin
     * @return VendorSearchRow
     */
    public function setCampaignResponseJoin(CampaignSearchRowBasic $campaignResponseJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setContactPrimaryJoin(ContactSearchRowBasic $contactPrimaryJoin): VendorSearchRow
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
     * @param AccountSearchRowBasic $expAccountJoin
     * @return VendorSearchRow
     */
    public function setExpAccountJoin(AccountSearchRowBasic $expAccountJoin): VendorSearchRow
    {
        $this->expAccountJoin = $expAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getExpAccountJoin(): AccountSearchRowBasic
    {
        return $this->expAccountJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return VendorSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): VendorSearchRow
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
     * @param LocationSearchRowBasic $manufacturingLocationsJoin
     * @return VendorSearchRow
     */
    public function setManufacturingLocationsJoin(LocationSearchRowBasic $manufacturingLocationsJoin): VendorSearchRow
    {
        $this->manufacturingLocationsJoin = $manufacturingLocationsJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getManufacturingLocationsJoin(): LocationSearchRowBasic
    {
        return $this->manufacturingLocationsJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return VendorSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setMessagesFromJoin(MessageSearchRowBasic $messagesFromJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setMessagesToJoin(MessageSearchRowBasic $messagesToJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setMseSubsidiaryJoin(MseSubsidiarySearchRowBasic $mseSubsidiaryJoin): VendorSearchRow
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
     * @param EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin
     * @return VendorSearchRow
     */
    public function setTaxRegistrationJoin(EntityTaxRegistrationSearchRowBasic $taxRegistrationJoin): VendorSearchRow
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
     * @param EmployeeSearchRowBasic $timeApproverJoin
     * @return VendorSearchRow
     */
    public function setTimeApproverJoin(EmployeeSearchRowBasic $timeApproverJoin): VendorSearchRow
    {
        $this->timeApproverJoin = $timeApproverJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getTimeApproverJoin(): EmployeeSearchRowBasic
    {
        return $this->timeApproverJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return VendorSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): VendorSearchRow
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
     * @return VendorSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): VendorSearchRow
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
