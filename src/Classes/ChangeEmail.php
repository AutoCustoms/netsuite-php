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

class ChangeEmail {
    /**
     * @var string
     */
    protected string $currentPassword;

    /**
     * @var string
     */
    protected string $newEmail;

    protected $newEmail2;
    /**
     * @var bool
     */
    protected bool $justThisAccount;

    static $paramtypesmap = array(
        "currentPassword" => "string",
        "newEmail" => "string",
        "newEmail2" => "string",
        "justThisAccount" => "boolean",
    );

    /**
     * @param string $currentPassword
     * @return ChangeEmail
     */
    public function setCurrentPassword(string $currentPassword): ChangeEmail
    {
        $this->currentPassword = $currentPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentPassword(): string
    {
        return $this->currentPassword;
    }

    /**
     * @param string $newEmail
     * @return ChangeEmail
     */
    public function setNewEmail(string $newEmail): ChangeEmail
    {
        $this->newEmail = $newEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewEmail(): string
    {
        return $this->newEmail;
    }

    /**
     * @param bool $justThisAccount
     * @return ChangeEmail
     */
    public function setJustThisAccount(bool $justThisAccount): ChangeEmail
    {
        $this->justThisAccount = $justThisAccount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getJustThisAccount(): bool
    {
        return $this->justThisAccount;
    }

}
