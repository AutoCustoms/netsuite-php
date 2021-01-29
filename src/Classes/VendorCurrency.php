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

class VendorCurrency {
    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var float
     */
    protected float $unbilledOrders;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "balance" => "float",
        "unbilledOrders" => "float",
    );

    /**
     * @param RecordRef $currency
     * @return VendorCurrency
     */
    public function setCurrency(RecordRef $currency): VendorCurrency
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
     * @param float $balance
     * @return VendorCurrency
     */
    public function setBalance(float $balance): VendorCurrency
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $unbilledOrders
     * @return VendorCurrency
     */
    public function setUnbilledOrders(float $unbilledOrders): VendorCurrency
    {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnbilledOrders(): float
    {
        return $this->unbilledOrders;
    }

}
