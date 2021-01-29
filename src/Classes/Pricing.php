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

class Pricing {
    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $priceLevel;

    /**
     * @var float
     */
    protected float $discount;

    /**
     * @var PriceList
     */
    protected PriceList $priceList;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "priceLevel" => "RecordRef",
        "discount" => "float",
        "priceList" => "PriceList",
    );

    /**
     * @param RecordRef $currency
     * @return Pricing
     */
    public function setCurrency(RecordRef $currency): Pricing
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param RecordRef $priceLevel
     * @return Pricing
     */
    public function setPriceLevel(RecordRef $priceLevel): Pricing
    {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriceLevel(): RecordRef
    {
        return $this->priceLevel;
    }

    /**
     * @param float $discount
     * @return Pricing
     */
    public function setDiscount(float $discount): Pricing
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param PriceList $priceList
     * @return Pricing
     */
    public function setPriceList(PriceList $priceList): Pricing
    {
        $this->priceList = $priceList;
        return $this;
    }

    /**
     * @return PriceList
     */
    public function getPriceList(): PriceList
    {
        return $this->priceList;
    }

}
