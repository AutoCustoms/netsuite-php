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

class CustomRecordSearch extends SearchRecord {
    /**
     * @var CustomRecordSearchBasic
     */
    protected CustomRecordSearchBasic $basic;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $ownerJoin;

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
        "basic" => "CustomRecordSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "ownerJoin" => "EmployeeSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param CustomRecordSearchBasic $basic
     * @return CustomRecordSearch
     */
    public function setBasic(CustomRecordSearchBasic $basic): CustomRecordSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CustomRecordSearchBasic
     */
    public function getBasic(): CustomRecordSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return CustomRecordSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): CustomRecordSearch
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
     * @return CustomRecordSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): CustomRecordSearch
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
     * @param EmployeeSearchBasic $ownerJoin
     * @return CustomRecordSearch
     */
    public function setOwnerJoin(EmployeeSearchBasic $ownerJoin): CustomRecordSearch
    {
        $this->ownerJoin = $ownerJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getOwnerJoin(): EmployeeSearchBasic
    {
        return $this->ownerJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return CustomRecordSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): CustomRecordSearch
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
     * @return CustomRecordSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): CustomRecordSearch
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
     * @return CustomRecordSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): CustomRecordSearch
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
