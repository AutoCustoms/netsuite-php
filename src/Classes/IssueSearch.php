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

class IssueSearch extends SearchRecord {
    /**
     * @var IssueSearchBasic
     */
    protected IssueSearchBasic $basic;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var EntityGroupSearchBasic
     */
    protected EntityGroupSearchBasic $productTeamJoin;

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
        "basic" => "IssueSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "productTeamJoin" => "EntityGroupSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param IssueSearchBasic $basic
     * @return IssueSearch
     */
    public function setBasic(IssueSearchBasic $basic): IssueSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return IssueSearchBasic
     */
    public function getBasic(): IssueSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return IssueSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): IssueSearch
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
     * @param EmployeeSearchBasic $employeeJoin
     * @return IssueSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): IssueSearch
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
     * @return IssueSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): IssueSearch
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
     * @param EntityGroupSearchBasic $productTeamJoin
     * @return IssueSearch
     */
    public function setProductTeamJoin(EntityGroupSearchBasic $productTeamJoin): IssueSearch
    {
        $this->productTeamJoin = $productTeamJoin;
        return $this;
    }

    /**
     * @return EntityGroupSearchBasic
     */
    public function getProductTeamJoin(): EntityGroupSearchBasic
    {
        return $this->productTeamJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return IssueSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): IssueSearch
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
     * @return IssueSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): IssueSearch
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
     * @return IssueSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): IssueSearch
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
