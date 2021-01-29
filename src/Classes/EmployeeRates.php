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

class EmployeeRates {
    /**
     * @var RecordRef
     */
    protected RecordRef $entityCurrency;

    /**
     * @var float
     */
    protected float $rate;

    static $paramtypesmap = array(
        "entityCurrency" => "RecordRef",
        "rate" => "float",
    );

    /**
     * @param RecordRef $entityCurrency
     * @return EmployeeRates
     */
    public function setEntityCurrency(RecordRef $entityCurrency): EmployeeRates
    {
        $this->entityCurrency = $entityCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityCurrency(): RecordRef
    {
        return $this->entityCurrency;
    }

    /**
     * @param float $rate
     * @return EmployeeRates
     */
    public function setRate(float $rate): EmployeeRates
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

}
