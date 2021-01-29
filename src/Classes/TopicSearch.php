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

class TopicSearch extends SearchRecord {
    /**
     * @var TopicSearchBasic
     */
    protected TopicSearchBasic $basic;

    /**
     * @var SolutionSearchBasic
     */
    protected SolutionSearchBasic $solutionJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "TopicSearchBasic",
        "solutionJoin" => "SolutionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param TopicSearchBasic $basic
     * @return TopicSearch
     */
    public function setBasic(TopicSearchBasic $basic): TopicSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TopicSearchBasic
     */
    public function getBasic(): TopicSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param SolutionSearchBasic $solutionJoin
     * @return TopicSearch
     */
    public function setSolutionJoin(SolutionSearchBasic $solutionJoin): TopicSearch
    {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * @return SolutionSearchBasic
     */
    public function getSolutionJoin(): SolutionSearchBasic
    {
        return $this->solutionJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return TopicSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): TopicSearch
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

}
