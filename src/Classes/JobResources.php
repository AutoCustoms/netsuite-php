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

class JobResources {
    /**
     * @var RecordRef
     */
    protected RecordRef $jobResource;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var RecordRef
     */
    protected RecordRef $role;

    static $paramtypesmap = array(
        "jobResource" => "RecordRef",
        "email" => "string",
        "role" => "RecordRef",
    );

    /**
     * @param RecordRef $jobResource
     * @return JobResources
     */
    public function setJobResource(RecordRef $jobResource): JobResources
    {
        $this->jobResource = $jobResource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJobResource(): RecordRef
    {
        return $this->jobResource;
    }

    /**
     * @param string $email
     * @return JobResources
     */
    public function setEmail(string $email): JobResources
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
     * @return JobResources
     */
    public function setRole(RecordRef $role): JobResources
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

}
