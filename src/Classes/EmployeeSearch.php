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

class EmployeeSearch extends SearchRecord {
    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $basic;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $campaignResponseJoin;

    /**
     * @var ChargeSearchBasic
     */
    protected ChargeSearchBasic $chargeJoin;

    /**
     * @var DepartmentSearchBasic
     */
    protected DepartmentSearchBasic $departmentJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var HcmJobSearchBasic
     */
    protected HcmJobSearchBasic $hcmJobJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $locationJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $managedJobJoin;

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
     * @var ResourceAllocationSearchBasic
     */
    protected ResourceAllocationSearchBasic $resourceAllocationJoin;

    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $subsidiaryJoin;

    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $timeJoin;

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
        "basic" => "EmployeeSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "chargeJoin" => "ChargeSearchBasic",
        "departmentJoin" => "DepartmentSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "hcmJobJoin" => "HcmJobSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "managedJobJoin" => "JobSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param EmployeeSearchBasic $basic
     * @return EmployeeSearch
     */
    public function setBasic(EmployeeSearchBasic $basic): EmployeeSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getBasic(): EmployeeSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return EmployeeSearch
     */
    public function setCampaignResponseJoin(CampaignSearchBasic $campaignResponseJoin): EmployeeSearch
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
     * @param ChargeSearchBasic $chargeJoin
     * @return EmployeeSearch
     */
    public function setChargeJoin(ChargeSearchBasic $chargeJoin): EmployeeSearch
    {
        $this->chargeJoin = $chargeJoin;
        return $this;
    }

    /**
     * @return ChargeSearchBasic
     */
    public function getChargeJoin(): ChargeSearchBasic
    {
        return $this->chargeJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return EmployeeSearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin): EmployeeSearch
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin(): DepartmentSearchBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return EmployeeSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): EmployeeSearch
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
     * @param HcmJobSearchBasic $hcmJobJoin
     * @return EmployeeSearch
     */
    public function setHcmJobJoin(HcmJobSearchBasic $hcmJobJoin): EmployeeSearch
    {
        $this->hcmJobJoin = $hcmJobJoin;
        return $this;
    }

    /**
     * @return HcmJobSearchBasic
     */
    public function getHcmJobJoin(): HcmJobSearchBasic
    {
        return $this->hcmJobJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return EmployeeSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): EmployeeSearch
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin(): LocationSearchBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param JobSearchBasic $managedJobJoin
     * @return EmployeeSearch
     */
    public function setManagedJobJoin(JobSearchBasic $managedJobJoin): EmployeeSearch
    {
        $this->managedJobJoin = $managedJobJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getManagedJobJoin(): JobSearchBasic
    {
        return $this->managedJobJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return EmployeeSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): EmployeeSearch
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
     * @return EmployeeSearch
     */
    public function setMessagesFromJoin(MessageSearchBasic $messagesFromJoin): EmployeeSearch
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
     * @return EmployeeSearch
     */
    public function setMessagesToJoin(MessageSearchBasic $messagesToJoin): EmployeeSearch
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
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return EmployeeSearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin): EmployeeSearch
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
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return EmployeeSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin): EmployeeSearch
    {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin(): SubsidiarySearchBasic
    {
        return $this->subsidiaryJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return EmployeeSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): EmployeeSearch
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
     * @param TransactionSearchBasic $transactionJoin
     * @return EmployeeSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): EmployeeSearch
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
     * @return EmployeeSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): EmployeeSearch
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
     * @return EmployeeSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): EmployeeSearch
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
     * @return EmployeeSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): EmployeeSearch
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
