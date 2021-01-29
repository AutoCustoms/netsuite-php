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

class SolutionSearch extends SearchRecord {
    /**
     * @var SolutionSearchBasic
     */
    protected SolutionSearchBasic $basic;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var SolutionSearchBasic
     */
    protected SolutionSearchBasic $relatedSolutionJoin;

    /**
     * @var TopicSearchBasic
     */
    protected TopicSearchBasic $topicJoin;

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
        "basic" => "SolutionSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "relatedSolutionJoin" => "SolutionSearchBasic",
        "topicJoin" => "TopicSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param SolutionSearchBasic $basic
     * @return SolutionSearch
     */
    public function setBasic(SolutionSearchBasic $basic): SolutionSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SolutionSearchBasic
     */
    public function getBasic(): SolutionSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return SolutionSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): SolutionSearch
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
     * @param SolutionSearchBasic $relatedSolutionJoin
     * @return SolutionSearch
     */
    public function setRelatedSolutionJoin(SolutionSearchBasic $relatedSolutionJoin): SolutionSearch
    {
        $this->relatedSolutionJoin = $relatedSolutionJoin;
        return $this;
    }

    /**
     * @return SolutionSearchBasic
     */
    public function getRelatedSolutionJoin(): SolutionSearchBasic
    {
        return $this->relatedSolutionJoin;
    }

    /**
     * @param TopicSearchBasic $topicJoin
     * @return SolutionSearch
     */
    public function setTopicJoin(TopicSearchBasic $topicJoin): SolutionSearch
    {
        $this->topicJoin = $topicJoin;
        return $this;
    }

    /**
     * @return TopicSearchBasic
     */
    public function getTopicJoin(): TopicSearchBasic
    {
        return $this->topicJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return SolutionSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): SolutionSearch
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
     * @return SolutionSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): SolutionSearch
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
     * @return SolutionSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): SolutionSearch
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
