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

class IssueSearchRow extends SearchRow {
    /**
     * @var IssueSearchRowBasic
     */
    protected IssueSearchRowBasic $basic;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var EntityGroupSearchRowBasic
     */
    protected EntityGroupSearchRowBasic $productTeamJoin;

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
        "basic" => "IssueSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "productTeamJoin" => "EntityGroupSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param IssueSearchRowBasic $basic
     * @return IssueSearchRow
     */
    public function setBasic(IssueSearchRowBasic $basic): IssueSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return IssueSearchRowBasic
     */
    public function getBasic(): IssueSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return IssueSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): IssueSearchRow
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
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return IssueSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): IssueSearchRow
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
     * @return IssueSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): IssueSearchRow
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
     * @param EntityGroupSearchRowBasic $productTeamJoin
     * @return IssueSearchRow
     */
    public function setProductTeamJoin(EntityGroupSearchRowBasic $productTeamJoin): IssueSearchRow
    {
        $this->productTeamJoin = $productTeamJoin;
        return $this;
    }

    /**
     * @return EntityGroupSearchRowBasic
     */
    public function getProductTeamJoin(): EntityGroupSearchRowBasic
    {
        return $this->productTeamJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return IssueSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): IssueSearchRow
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
     * @return IssueSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): IssueSearchRow
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
     * @return IssueSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): IssueSearchRow
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
