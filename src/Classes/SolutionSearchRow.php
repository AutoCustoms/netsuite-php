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

class SolutionSearchRow extends SearchRow {
    /**
     * @var SolutionSearchRowBasic
     */
    protected SolutionSearchRowBasic $basic;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var SolutionSearchRowBasic
     */
    protected SolutionSearchRowBasic $relatedSolutionJoin;

    /**
     * @var TopicSearchRowBasic
     */
    protected TopicSearchRowBasic $topicJoin;

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
        "basic" => "SolutionSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "relatedSolutionJoin" => "SolutionSearchRowBasic",
        "topicJoin" => "TopicSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param SolutionSearchRowBasic $basic
     * @return SolutionSearchRow
     */
    public function setBasic(SolutionSearchRowBasic $basic): SolutionSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SolutionSearchRowBasic
     */
    public function getBasic(): SolutionSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return SolutionSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): SolutionSearchRow
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
     * @param SolutionSearchRowBasic $relatedSolutionJoin
     * @return SolutionSearchRow
     */
    public function setRelatedSolutionJoin(SolutionSearchRowBasic $relatedSolutionJoin): SolutionSearchRow
    {
        $this->relatedSolutionJoin = $relatedSolutionJoin;
        return $this;
    }

    /**
     * @return SolutionSearchRowBasic
     */
    public function getRelatedSolutionJoin(): SolutionSearchRowBasic
    {
        return $this->relatedSolutionJoin;
    }

    /**
     * @param TopicSearchRowBasic $topicJoin
     * @return SolutionSearchRow
     */
    public function setTopicJoin(TopicSearchRowBasic $topicJoin): SolutionSearchRow
    {
        $this->topicJoin = $topicJoin;
        return $this;
    }

    /**
     * @return TopicSearchRowBasic
     */
    public function getTopicJoin(): TopicSearchRowBasic
    {
        return $this->topicJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return SolutionSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): SolutionSearchRow
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
     * @return SolutionSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): SolutionSearchRow
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
     * @return SolutionSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): SolutionSearchRow
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
