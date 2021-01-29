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

class SupportCaseEscalateTo {
    /**
     * @var RecordRef
     */
    protected RecordRef $escalatee;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string
     */
    protected string $phone;

    static $paramtypesmap = array(
        "escalatee" => "RecordRef",
        "email" => "string",
        "phone" => "string",
    );

    /**
     * @param RecordRef $escalatee
     * @return SupportCaseEscalateTo
     */
    public function setEscalatee(RecordRef $escalatee): SupportCaseEscalateTo
    {
        $this->escalatee = $escalatee;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEscalatee(): RecordRef
    {
        return $this->escalatee;
    }

    /**
     * @param string $email
     * @return SupportCaseEscalateTo
     */
    public function setEmail(string $email): SupportCaseEscalateTo
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
     * @param string $phone
     * @return SupportCaseEscalateTo
     */
    public function setPhone(string $phone): SupportCaseEscalateTo
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

}
