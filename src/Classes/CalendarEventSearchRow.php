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

class CalendarEventSearchRow extends SearchRow {
    /**
     * @var CalendarEventSearchRowBasic
     */
    protected CalendarEventSearchRowBasic $basic;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $attendeeJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $attendeeContactJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $attendeeCustomerJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

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
        "basic" => "CalendarEventSearchRowBasic",
        "attendeeJoin" => "EntitySearchRowBasic",
        "attendeeContactJoin" => "ContactSearchRowBasic",
        "attendeeCustomerJoin" => "CustomerSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param CalendarEventSearchRowBasic $basic
     * @return CalendarEventSearchRow
     */
    public function setBasic(CalendarEventSearchRowBasic $basic): CalendarEventSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CalendarEventSearchRowBasic
     */
    public function getBasic(): CalendarEventSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchRowBasic $attendeeJoin
     * @return CalendarEventSearchRow
     */
    public function setAttendeeJoin(EntitySearchRowBasic $attendeeJoin): CalendarEventSearchRow
    {
        $this->attendeeJoin = $attendeeJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getAttendeeJoin(): EntitySearchRowBasic
    {
        return $this->attendeeJoin;
    }

    /**
     * @param ContactSearchRowBasic $attendeeContactJoin
     * @return CalendarEventSearchRow
     */
    public function setAttendeeContactJoin(ContactSearchRowBasic $attendeeContactJoin): CalendarEventSearchRow
    {
        $this->attendeeContactJoin = $attendeeContactJoin;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getAttendeeContactJoin(): ContactSearchRowBasic
    {
        return $this->attendeeContactJoin;
    }

    /**
     * @param CustomerSearchRowBasic $attendeeCustomerJoin
     * @return CalendarEventSearchRow
     */
    public function setAttendeeCustomerJoin(CustomerSearchRowBasic $attendeeCustomerJoin): CalendarEventSearchRow
    {
        $this->attendeeCustomerJoin = $attendeeCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getAttendeeCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->attendeeCustomerJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return CalendarEventSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): CalendarEventSearchRow
    {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin(): SupportCaseSearchRowBasic
    {
        return $this->caseJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return CalendarEventSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): CalendarEventSearchRow
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
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return CalendarEventSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): CalendarEventSearchRow
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
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return CalendarEventSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): CalendarEventSearchRow
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
     * @param TimeBillSearchRowBasic $timeJoin
     * @return CalendarEventSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): CalendarEventSearchRow
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
     * @return CalendarEventSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): CalendarEventSearchRow
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
     * @return CalendarEventSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): CalendarEventSearchRow
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
     * @return CalendarEventSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): CalendarEventSearchRow
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
     * @return CalendarEventSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): CalendarEventSearchRow
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
