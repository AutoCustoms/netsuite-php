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

class ItemFulfillmentPackage {
    /**
     * @var float
     */
    protected float $packageWeight;

    /**
     * @var string
     */
    protected string $packageDescr;

    /**
     * @var string
     */
    protected string $packageTrackingNumber;

    static $paramtypesmap = array(
        "packageWeight" => "float",
        "packageDescr" => "string",
        "packageTrackingNumber" => "string",
    );

    /**
     * @param float $packageWeight
     * @return ItemFulfillmentPackage
     */
    public function setPackageWeight(float $packageWeight): ItemFulfillmentPackage
    {
        $this->packageWeight = $packageWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getPackageWeight(): float
    {
        return $this->packageWeight;
    }

    /**
     * @param string $packageDescr
     * @return ItemFulfillmentPackage
     */
    public function setPackageDescr(string $packageDescr): ItemFulfillmentPackage
    {
        $this->packageDescr = $packageDescr;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageDescr(): string
    {
        return $this->packageDescr;
    }

    /**
     * @param string $packageTrackingNumber
     * @return ItemFulfillmentPackage
     */
    public function setPackageTrackingNumber(string $packageTrackingNumber): ItemFulfillmentPackage
    {
        $this->packageTrackingNumber = $packageTrackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumber(): string
    {
        return $this->packageTrackingNumber;
    }

}
