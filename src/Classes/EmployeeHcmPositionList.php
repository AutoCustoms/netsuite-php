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

class EmployeeHcmPositionList {
    /**
     * @var EmployeeHcmPosition[]
     */
    protected array $employeeHcmPosition;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "employeeHcmPosition" => "EmployeeHcmPosition[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param EmployeeHcmPosition[] $employeeHcmPosition
     * @return EmployeeHcmPositionList
     */
    public function setEmployeeHcmPosition(EmployeeHcmPosition $employeeHcmPosition): EmployeeHcmPositionList
    {
        $this->employeeHcmPosition[] = $employeeHcmPosition;
        return $this;
    }

    /**
     * @return EmployeeHcmPosition[]
     */
    public function getEmployeeHcmPosition(): array
    {
        return $this->employeeHcmPosition;
    }

    /**
     * @param bool $replaceAll
     * @return EmployeeHcmPositionList
     */
    public function setReplaceAll(bool $replaceAll): EmployeeHcmPositionList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
