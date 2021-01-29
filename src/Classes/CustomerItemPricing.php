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

class CustomerItemPricing {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $level;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $price;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "level" => "RecordRef",
        "currency" => "RecordRef",
        "price" => "float",
    );

    /**
     * @param RecordRef $item
     * @return CustomerItemPricing
     */
    public function setItem(RecordRef $item): CustomerItemPricing
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $level
     * @return CustomerItemPricing
     */
    public function setLevel(RecordRef $level): CustomerItemPricing
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLevel(): RecordRef
    {
        return $this->level;
    }

    /**
     * @param RecordRef $currency
     * @return CustomerItemPricing
     */
    public function setCurrency(RecordRef $currency): CustomerItemPricing
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
     * @param float $price
     * @return CustomerItemPricing
     */
    public function setPrice(float $price): CustomerItemPricing
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

}
