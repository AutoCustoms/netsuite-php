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

class TopicSearchRow extends SearchRow {
    /**
     * @var TopicSearchRowBasic
     */
    protected TopicSearchRowBasic $basic;

    /**
     * @var SolutionSearchRowBasic
     */
    protected SolutionSearchRowBasic $solutionJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "TopicSearchRowBasic",
        "solutionJoin" => "SolutionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param TopicSearchRowBasic $basic
     * @return TopicSearchRow
     */
    public function setBasic(TopicSearchRowBasic $basic): TopicSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TopicSearchRowBasic
     */
    public function getBasic(): TopicSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param SolutionSearchRowBasic $solutionJoin
     * @return TopicSearchRow
     */
    public function setSolutionJoin(SolutionSearchRowBasic $solutionJoin): TopicSearchRow
    {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * @return SolutionSearchRowBasic
     */
    public function getSolutionJoin(): SolutionSearchRowBasic
    {
        return $this->solutionJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return TopicSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): TopicSearchRow
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

}
