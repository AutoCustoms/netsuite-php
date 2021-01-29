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

class BillingRates {
    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingClass;

    /**
     * @var RateList
     */
    protected RateList $rateList;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "billingClass" => "RecordRef",
        "rateList" => "RateList",
    );

    /**
     * @param RecordRef $currency
     * @return BillingRates
     */
    public function setCurrency(RecordRef $currency): BillingRates
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
     * @param RecordRef $billingClass
     * @return BillingRates
     */
    public function setBillingClass(RecordRef $billingClass): BillingRates
    {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingClass(): RecordRef
    {
        return $this->billingClass;
    }

    /**
     * @param RateList $rateList
     * @return BillingRates
     */
    public function setRateList(RateList $rateList): BillingRates
    {
        $this->rateList = $rateList;
        return $this;
    }

    /**
     * @return RateList
     */
    public function getRateList(): RateList
    {
        return $this->rateList;
    }

}
