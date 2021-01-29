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

class ChangePassword {
    /**
     * @var string
     */
    protected string $currentPassword;

    /**
     * @var string
     */
    protected string $newPassword;

    protected $newPassword2;
    static $paramtypesmap = array(
        "currentPassword" => "string",
        "newPassword" => "string",
        "newPassword2" => "string",
    );

    /**
     * @param string $currentPassword
     * @return ChangePassword
     */
    public function setCurrentPassword(string $currentPassword): ChangePassword
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
     * @param string $newPassword
     * @return ChangePassword
     */
    public function setNewPassword(string $newPassword): ChangePassword
    {
        $this->newPassword = $newPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

}
