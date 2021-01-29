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

class EntityGroupSearchRow extends SearchRow {
    /**
     * @var EntityGroupSearchRowBasic
     */
    protected EntityGroupSearchRowBasic $basic;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $groupMemberJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "EntityGroupSearchRowBasic",
        "groupMemberJoin" => "EntitySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param EntityGroupSearchRowBasic $basic
     * @return EntityGroupSearchRow
     */
    public function setBasic(EntityGroupSearchRowBasic $basic): EntityGroupSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return EntityGroupSearchRowBasic
     */
    public function getBasic(): EntityGroupSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchRowBasic $groupMemberJoin
     * @return EntityGroupSearchRow
     */
    public function setGroupMemberJoin(EntitySearchRowBasic $groupMemberJoin): EntityGroupSearchRow
    {
        $this->groupMemberJoin = $groupMemberJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getGroupMemberJoin(): EntitySearchRowBasic
    {
        return $this->groupMemberJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return EntityGroupSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): EntityGroupSearchRow
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
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return EntityGroupSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): EntityGroupSearchRow
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
