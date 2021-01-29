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

class CustomFieldRoleAccess {
    /**
     * @var RecordRef
     */
    protected RecordRef $role;

    /**
     * @var CustomizationAccessLevel
     */
    protected CustomizationAccessLevel $accessLevel;

    /**
     * @var CustomizationSearchLevel
     */
    protected CustomizationSearchLevel $searchLevel;

    static $paramtypesmap = array(
        "role" => "RecordRef",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
    );

    /**
     * @param RecordRef $role
     * @return CustomFieldRoleAccess
     */
    public function setRole(RecordRef $role): CustomFieldRoleAccess
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRole(): RecordRef
    {
        return $this->role;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return CustomFieldRoleAccess
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): CustomFieldRoleAccess
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel(): CustomizationAccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return CustomFieldRoleAccess
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): CustomFieldRoleAccess
    {
        $this->searchLevel = $searchLevel;
        return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel(): CustomizationSearchLevel
    {
        return $this->searchLevel;
    }

}
