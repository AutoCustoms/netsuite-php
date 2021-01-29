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

class SupportCaseSearchRow extends SearchRow {
    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $basic;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $companyJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var IssueSearchRowBasic
     */
    protected IssueSearchRowBasic $issueJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesJoin;

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
        "basic" => "SupportCaseSearchRowBasic",
        "companyJoin" => "EntitySearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "issueJoin" => "IssueSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param SupportCaseSearchRowBasic $basic
     * @return SupportCaseSearchRow
     */
    public function setBasic(SupportCaseSearchRowBasic $basic): SupportCaseSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getBasic(): SupportCaseSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchRowBasic $companyJoin
     * @return SupportCaseSearchRow
     */
    public function setCompanyJoin(EntitySearchRowBasic $companyJoin): SupportCaseSearchRow
    {
        $this->companyJoin = $companyJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getCompanyJoin(): EntitySearchRowBasic
    {
        return $this->companyJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactJoin
     * @return SupportCaseSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): SupportCaseSearchRow
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
     * @param CustomerSearchRowBasic $customerJoin
     * @return SupportCaseSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): SupportCaseSearchRow
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
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return SupportCaseSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): SupportCaseSearchRow
    {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin(): EmployeeSearchRowBasic
    {
        return $this->employeeJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return SupportCaseSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): SupportCaseSearchRow
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
     * @param IssueSearchRowBasic $issueJoin
     * @return SupportCaseSearchRow
     */
    public function setIssueJoin(IssueSearchRowBasic $issueJoin): SupportCaseSearchRow
    {
        $this->issueJoin = $issueJoin;
        return $this;
    }

    /**
     * @return IssueSearchRowBasic
     */
    public function getIssueJoin(): IssueSearchRowBasic
    {
        return $this->issueJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return SupportCaseSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): SupportCaseSearchRow
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
     * @param MessageSearchRowBasic $messagesJoin
     * @return SupportCaseSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): SupportCaseSearchRow
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
     * @param TimeBillSearchRowBasic $timeJoin
     * @return SupportCaseSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): SupportCaseSearchRow
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
     * @return SupportCaseSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): SupportCaseSearchRow
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
     * @return SupportCaseSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): SupportCaseSearchRow
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
     * @return SupportCaseSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): SupportCaseSearchRow
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
     * @return SupportCaseSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): SupportCaseSearchRow
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
