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

class TaxGroupTaxItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $taxName;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var float
     */
    protected float $basis;

    /**
     * @var string
     */
    protected string $taxType;

    static $paramtypesmap = array(
        "taxName" => "RecordRef",
        "rate" => "float",
        "basis" => "float",
        "taxType" => "string",
    );

    /**
     * @param RecordRef $taxName
     * @return TaxGroupTaxItem
     */
    public function setTaxName(RecordRef $taxName): TaxGroupTaxItem
    {
        $this->taxName = $taxName;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxName(): RecordRef
    {
        return $this->taxName;
    }

    /**
     * @param float $rate
     * @return TaxGroupTaxItem
     */
    public function setRate(float $rate): TaxGroupTaxItem
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

    /**
     * @param float $basis
     * @return TaxGroupTaxItem
     */
    public function setBasis(float $basis): TaxGroupTaxItem
    {
        $this->basis = $basis;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasis(): float
    {
        return $this->basis;
    }

    /**
     * @param string $taxType
     * @return TaxGroupTaxItem
     */
    public function setTaxType(string $taxType): TaxGroupTaxItem
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxType(): string
    {
        return $this->taxType;
    }

}
