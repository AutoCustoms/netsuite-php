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

class SupportCaseSearch extends SearchRecord {
    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $basic;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $companyJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var IssueSearchBasic
     */
    protected IssueSearchBasic $issueJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesJoin;

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
        "basic" => "SupportCaseSearchBasic",
        "companyJoin" => "EntitySearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "issueJoin" => "IssueSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param SupportCaseSearchBasic $basic
     * @return SupportCaseSearch
     */
    public function setBasic(SupportCaseSearchBasic $basic): SupportCaseSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getBasic(): SupportCaseSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchBasic $companyJoin
     * @return SupportCaseSearch
     */
    public function setCompanyJoin(EntitySearchBasic $companyJoin): SupportCaseSearch
    {
        $this->companyJoin = $companyJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getCompanyJoin(): EntitySearchBasic
    {
        return $this->companyJoin;
    }

    /**
     * @param ContactSearchBasic $contactJoin
     * @return SupportCaseSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): SupportCaseSearch
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
     * @param CustomerSearchBasic $customerJoin
     * @return SupportCaseSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): SupportCaseSearch
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
     * @param EmployeeSearchBasic $employeeJoin
     * @return SupportCaseSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): SupportCaseSearch
    {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin(): EmployeeSearchBasic
    {
        return $this->employeeJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return SupportCaseSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): SupportCaseSearch
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
     * @param IssueSearchBasic $issueJoin
     * @return SupportCaseSearch
     */
    public function setIssueJoin(IssueSearchBasic $issueJoin): SupportCaseSearch
    {
        $this->issueJoin = $issueJoin;
        return $this;
    }

    /**
     * @return IssueSearchBasic
     */
    public function getIssueJoin(): IssueSearchBasic
    {
        return $this->issueJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return SupportCaseSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): SupportCaseSearch
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
     * @param MessageSearchBasic $messagesJoin
     * @return SupportCaseSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): SupportCaseSearch
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
     * @param TimeBillSearchBasic $timeJoin
     * @return SupportCaseSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): SupportCaseSearch
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
     * @return SupportCaseSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): SupportCaseSearch
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
     * @return SupportCaseSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): SupportCaseSearch
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
     * @return SupportCaseSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): SupportCaseSearch
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
     * @return SupportCaseSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): SupportCaseSearch
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
