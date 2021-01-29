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

class SessionResponse {
    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var RecordRef
     */
    protected RecordRef $userId;

    /**
     * @var WsRoleList
     */
    protected WsRoleList $wsRoleList;

    static $paramtypesmap = array(
        "status" => "Status",
        "userId" => "RecordRef",
        "wsRoleList" => "WsRoleList",
    );

    /**
     * @param Status $status
     * @return SessionResponse
     */
    public function setStatus(Status $status): SessionResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param RecordRef $userId
     * @return SessionResponse
     */
    public function setUserId(RecordRef $userId): SessionResponse
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUserId(): RecordRef
    {
        return $this->userId;
    }

    /**
     * @param WsRoleList $wsRoleList
     * @return SessionResponse
     */
    public function setWsRoleList(WsRoleList $wsRoleList): SessionResponse
    {
        $this->wsRoleList = $wsRoleList;
        return $this;
    }

    /**
     * @return WsRoleList
     */
    public function getWsRoleList(): WsRoleList
    {
        return $this->wsRoleList;
    }

}
