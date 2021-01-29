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

class ContactAccessRoles {
    /**
     * @var bool
     */
    protected bool $giveAccess;

    /**
     * @var RecordRef
     */
    protected RecordRef $contact;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var RecordRef
     */
    protected RecordRef $role;

    /**
     * @var string
     */
    protected string $password;

    protected $password2;
    /**
     * @var bool
     */
    protected bool $sendEmail;

    static $paramtypesmap = array(
        "giveAccess" => "boolean",
        "contact" => "RecordRef",
        "email" => "string",
        "role" => "RecordRef",
        "password" => "string",
        "password2" => "string",
        "sendEmail" => "boolean",
    );

    /**
     * @param bool $giveAccess
     * @return ContactAccessRoles
     */
    public function setGiveAccess(bool $giveAccess): ContactAccessRoles
    {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGiveAccess(): bool
    {
        return $this->giveAccess;
    }

    /**
     * @param RecordRef $contact
     * @return ContactAccessRoles
     */
    public function setContact(RecordRef $contact): ContactAccessRoles
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContact(): RecordRef
    {
        return $this->contact;
    }

    /**
     * @param string $email
     * @return ContactAccessRoles
     */
    public function setEmail(string $email): ContactAccessRoles
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param RecordRef $role
     * @return ContactAccessRoles
     */
    public function setRole(RecordRef $role): ContactAccessRoles
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
     * @param string $password
     * @return ContactAccessRoles
     */
    public function setPassword(string $password): ContactAccessRoles
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param bool $sendEmail
     * @return ContactAccessRoles
     */
    public function setSendEmail(bool $sendEmail): ContactAccessRoles
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendEmail(): bool
    {
        return $this->sendEmail;
    }

}
