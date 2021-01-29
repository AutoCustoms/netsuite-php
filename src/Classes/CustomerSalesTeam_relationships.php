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

class CustomerSalesTeam_relationships {
    /**
     * @var RecordRef
     */
    protected RecordRef $employee;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesRole;

    /**
     * @var bool
     */
    protected bool $isPrimary;

    /**
     * @var float
     */
    protected float $contribution;

    static $paramtypesmap = array(
        "employee" => "RecordRef",
        "salesRole" => "RecordRef",
        "isPrimary" => "boolean",
        "contribution" => "float",
    );

    /**
     * @param RecordRef $employee
     * @return CustomerSalesTeam_relationships
     */
    public function setEmployee(RecordRef $employee): CustomerSalesTeam_relationships
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployee(): RecordRef
    {
        return $this->employee;
    }

    /**
     * @param RecordRef $salesRole
     * @return CustomerSalesTeam_relationships
     */
    public function setSalesRole(RecordRef $salesRole): CustomerSalesTeam_relationships
    {
        $this->salesRole = $salesRole;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRole(): RecordRef
    {
        return $this->salesRole;
    }

    /**
     * @param bool $isPrimary
     * @return CustomerSalesTeam_relationships
     */
    public function setIsPrimary(bool $isPrimary): CustomerSalesTeam_relationships
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    /**
     * @param float $contribution
     * @return CustomerSalesTeam_relationships
     */
    public function setContribution(float $contribution): CustomerSalesTeam_relationships
    {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * @return float
     */
    public function getContribution(): float
    {
        return $this->contribution;
    }

}
