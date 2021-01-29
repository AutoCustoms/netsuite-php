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

class CustomRecordSearchRow extends SearchRow {
    /**
     * @var CustomRecordSearchRowBasic
     */
    protected CustomRecordSearchRowBasic $basic;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $ownerJoin;

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
        "basic" => "CustomRecordSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "ownerJoin" => "EmployeeSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param CustomRecordSearchRowBasic $basic
     * @return CustomRecordSearchRow
     */
    public function setBasic(CustomRecordSearchRowBasic $basic): CustomRecordSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CustomRecordSearchRowBasic
     */
    public function getBasic(): CustomRecordSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return CustomRecordSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): CustomRecordSearchRow
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
     * @return CustomRecordSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): CustomRecordSearchRow
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
     * @param EmployeeSearchRowBasic $ownerJoin
     * @return CustomRecordSearchRow
     */
    public function setOwnerJoin(EmployeeSearchRowBasic $ownerJoin): CustomRecordSearchRow
    {
        $this->ownerJoin = $ownerJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getOwnerJoin(): EmployeeSearchRowBasic
    {
        return $this->ownerJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return CustomRecordSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): CustomRecordSearchRow
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
     * @return CustomRecordSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): CustomRecordSearchRow
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
     * @return CustomRecordSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): CustomRecordSearchRow
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
