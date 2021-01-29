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

class EmployeeEmergencyContact {
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $contact;

    /**
     * @var string
     */
    protected string $relationship;

    /**
     * @var string
     */
    protected string $address;

    /**
     * @var string
     */
    protected string $phone;

    static $paramtypesmap = array(
        "id" => "integer",
        "contact" => "string",
        "relationship" => "string",
        "address" => "string",
        "phone" => "string",
    );

    /**
     * @param int $id
     * @return EmployeeEmergencyContact
     */
    public function setId(int $id): EmployeeEmergencyContact
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $contact
     * @return EmployeeEmergencyContact
     */
    public function setContact(string $contact): EmployeeEmergencyContact
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * @param string $relationship
     * @return EmployeeEmergencyContact
     */
    public function setRelationship(string $relationship): EmployeeEmergencyContact
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelationship(): string
    {
        return $this->relationship;
    }

    /**
     * @param string $address
     * @return EmployeeEmergencyContact
     */
    public function setAddress(string $address): EmployeeEmergencyContact
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $phone
     * @return EmployeeEmergencyContact
     */
    public function setPhone(string $phone): EmployeeEmergencyContact
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
