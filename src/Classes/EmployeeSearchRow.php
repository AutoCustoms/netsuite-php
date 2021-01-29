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

class EmployeeSearchRow extends SearchRow {
    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $basic;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $campaignResponseJoin;

    /**
     * @var ChargeSearchRowBasic
     */
    protected ChargeSearchRowBasic $chargeJoin;

    /**
     * @var DepartmentSearchRowBasic
     */
    protected DepartmentSearchRowBasic $departmentJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var HcmJobSearchRowBasic
     */
    protected HcmJobSearchRowBasic $hcmJobJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $locationJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $managedJobJoin;

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
     * @var ResourceAllocationSearchRowBasic
     */
    protected ResourceAllocationSearchRowBasic $resourceAllocationJoin;

    /**
     * @var SubsidiarySearchRowBasic
     */
    protected SubsidiarySearchRowBasic $subsidiaryJoin;

    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $timeJoin;

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
        "basic" => "EmployeeSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "chargeJoin" => "ChargeSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hcmJobJoin" => "HcmJobSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "managedJobJoin" => "JobSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param EmployeeSearchRowBasic $basic
     * @return EmployeeSearchRow
     */
    public function setBasic(EmployeeSearchRowBasic $basic): EmployeeSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getBasic(): EmployeeSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param CampaignSearchRowBasic $campaignResponseJoin
     * @return EmployeeSearchRow
     */
    public function setCampaignResponseJoin(CampaignSearchRowBasic $campaignResponseJoin): EmployeeSearchRow
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
     * @param ChargeSearchRowBasic $chargeJoin
     * @return EmployeeSearchRow
     */
    public function setChargeJoin(ChargeSearchRowBasic $chargeJoin): EmployeeSearchRow
    {
        $this->chargeJoin = $chargeJoin;
        return $this;
    }

    /**
     * @return ChargeSearchRowBasic
     */
    public function getChargeJoin(): ChargeSearchRowBasic
    {
        return $this->chargeJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return EmployeeSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin): EmployeeSearchRow
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin(): DepartmentSearchRowBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return EmployeeSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): EmployeeSearchRow
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
     * @param HcmJobSearchRowBasic $hcmJobJoin
     * @return EmployeeSearchRow
     */
    public function setHcmJobJoin(HcmJobSearchRowBasic $hcmJobJoin): EmployeeSearchRow
    {
        $this->hcmJobJoin = $hcmJobJoin;
        return $this;
    }

    /**
     * @return HcmJobSearchRowBasic
     */
    public function getHcmJobJoin(): HcmJobSearchRowBasic
    {
        return $this->hcmJobJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return EmployeeSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): EmployeeSearchRow
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin(): LocationSearchRowBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param JobSearchRowBasic $managedJobJoin
     * @return EmployeeSearchRow
     */
    public function setManagedJobJoin(JobSearchRowBasic $managedJobJoin): EmployeeSearchRow
    {
        $this->managedJobJoin = $managedJobJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getManagedJobJoin(): JobSearchRowBasic
    {
        return $this->managedJobJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return EmployeeSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): EmployeeSearchRow
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
     * @return EmployeeSearchRow
     */
    public function setMessagesFromJoin(MessageSearchRowBasic $messagesFromJoin): EmployeeSearchRow
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
     * @return EmployeeSearchRow
     */
    public function setMessagesToJoin(MessageSearchRowBasic $messagesToJoin): EmployeeSearchRow
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
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return EmployeeSearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin): EmployeeSearchRow
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
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return EmployeeSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin): EmployeeSearchRow
    {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin(): SubsidiarySearchRowBasic
    {
        return $this->subsidiaryJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return EmployeeSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): EmployeeSearchRow
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
     * @param TransactionSearchRowBasic $transactionJoin
     * @return EmployeeSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): EmployeeSearchRow
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
     * @return EmployeeSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): EmployeeSearchRow
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
     * @return EmployeeSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): EmployeeSearchRow
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
     * @return EmployeeSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): EmployeeSearchRow
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
