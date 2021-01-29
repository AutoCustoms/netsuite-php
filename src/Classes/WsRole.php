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

class WsRole {
    /**
     * @var RecordRef
     */
    protected RecordRef $role;

    /**
     * @var bool
     */
    protected bool $isDefault;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $isLoggedInRole;

    static $paramtypesmap = array(
        "role" => "RecordRef",
        "isDefault" => "boolean",
        "isInactive" => "boolean",
        "isLoggedInRole" => "boolean",
    );

    /**
     * @param RecordRef $role
     * @return WsRole
     */
    public function setRole(RecordRef $role): WsRole
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
     * @param bool $isDefault
     * @return WsRole
     */
    public function setIsDefault(bool $isDefault): WsRole
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isInactive
     * @return WsRole
     */
    public function setIsInactive(bool $isInactive): WsRole
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param bool $isLoggedInRole
     * @return WsRole
     */
    public function setIsLoggedInRole(bool $isLoggedInRole): WsRole
    {
        $this->isLoggedInRole = $isLoggedInRole;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsLoggedInRole(): bool
    {
        return $this->isLoggedInRole;
    }

}
