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

class CalendarEventSearch extends SearchRecord {
    /**
     * @var CalendarEventSearchBasic
     */
    protected CalendarEventSearchBasic $basic;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $attendeeJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $attendeeContactJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $attendeeCustomerJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

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
        "basic" => "CalendarEventSearchBasic",
        "attendeeJoin" => "EntitySearchBasic",
        "attendeeContactJoin" => "ContactSearchBasic",
        "attendeeCustomerJoin" => "CustomerSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param CalendarEventSearchBasic $basic
     * @return CalendarEventSearch
     */
    public function setBasic(CalendarEventSearchBasic $basic): CalendarEventSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CalendarEventSearchBasic
     */
    public function getBasic(): CalendarEventSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchBasic $attendeeJoin
     * @return CalendarEventSearch
     */
    public function setAttendeeJoin(EntitySearchBasic $attendeeJoin): CalendarEventSearch
    {
        $this->attendeeJoin = $attendeeJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getAttendeeJoin(): EntitySearchBasic
    {
        return $this->attendeeJoin;
    }

    /**
     * @param ContactSearchBasic $attendeeContactJoin
     * @return CalendarEventSearch
     */
    public function setAttendeeContactJoin(ContactSearchBasic $attendeeContactJoin): CalendarEventSearch
    {
        $this->attendeeContactJoin = $attendeeContactJoin;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getAttendeeContactJoin(): ContactSearchBasic
    {
        return $this->attendeeContactJoin;
    }

    /**
     * @param CustomerSearchBasic $attendeeCustomerJoin
     * @return CalendarEventSearch
     */
    public function setAttendeeCustomerJoin(CustomerSearchBasic $attendeeCustomerJoin): CalendarEventSearch
    {
        $this->attendeeCustomerJoin = $attendeeCustomerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getAttendeeCustomerJoin(): CustomerSearchBasic
    {
        return $this->attendeeCustomerJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return CalendarEventSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): CalendarEventSearch
    {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin(): SupportCaseSearchBasic
    {
        return $this->caseJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return CalendarEventSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): CalendarEventSearch
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
     * @param OpportunitySearchBasic $opportunityJoin
     * @return CalendarEventSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): CalendarEventSearch
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
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return CalendarEventSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): CalendarEventSearch
    {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * @return OriginatingLeadSearchBasic
     */
    public function getOriginatingLeadJoin(): OriginatingLeadSearchBasic
    {
        return $this->originatingLeadJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return CalendarEventSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): CalendarEventSearch
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
     * @return CalendarEventSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): CalendarEventSearch
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
     * @return CalendarEventSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): CalendarEventSearch
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
     * @return CalendarEventSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): CalendarEventSearch
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
     * @return CalendarEventSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): CalendarEventSearch
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
