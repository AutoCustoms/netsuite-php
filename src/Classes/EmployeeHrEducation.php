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

class EmployeeHrEducation {
    /**
     * @var RecordRef
     */
    protected RecordRef $education;

    /**
     * @var string
     */
    protected string $degree;

    /**
     * @var string
     */
    protected string $degreeDate;

    static $paramtypesmap = array(
        "education" => "RecordRef",
        "degree" => "string",
        "degreeDate" => "dateTime",
    );

    /**
     * @param RecordRef $education
     * @return EmployeeHrEducation
     */
    public function setEducation(RecordRef $education): EmployeeHrEducation
    {
        $this->education = $education;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEducation(): RecordRef
    {
        return $this->education;
    }

    /**
     * @param string $degree
     * @return EmployeeHrEducation
     */
    public function setDegree(string $degree): EmployeeHrEducation
    {
        $this->degree = $degree;
        return $this;
    }

    /**
     * @return string
     */
    public function getDegree(): string
    {
        return $this->degree;
    }

    /**
     * @param string $degreeDate
     * @return EmployeeHrEducation
     */
    public function setDegreeDate(string $degreeDate): EmployeeHrEducation
    {
        $this->degreeDate = $degreeDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDegreeDate(): string
    {
        return $this->degreeDate;
    }

}
