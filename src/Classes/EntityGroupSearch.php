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

class EntityGroupSearch extends SearchRecord {
    /**
     * @var EntityGroupSearchBasic
     */
    protected EntityGroupSearchBasic $basic;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $groupMemberJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "EntityGroupSearchBasic",
        "groupMemberJoin" => "EntitySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param EntityGroupSearchBasic $basic
     * @return EntityGroupSearch
     */
    public function setBasic(EntityGroupSearchBasic $basic): EntityGroupSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return EntityGroupSearchBasic
     */
    public function getBasic(): EntityGroupSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchBasic $groupMemberJoin
     * @return EntityGroupSearch
     */
    public function setGroupMemberJoin(EntitySearchBasic $groupMemberJoin): EntityGroupSearch
    {
        $this->groupMemberJoin = $groupMemberJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getGroupMemberJoin(): EntitySearchBasic
    {
        return $this->groupMemberJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return EntityGroupSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): EntityGroupSearch
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
     * @param CustomSearchJoin[] $customSearchJoin
     * @return EntityGroupSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): EntityGroupSearch
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
