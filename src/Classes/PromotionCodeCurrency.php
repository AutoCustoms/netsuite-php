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

class PromotionCodeCurrency {
    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $minimumOrderAmount;

    static $paramtypesmap = array(
        "currency" => "RecordRef",
        "minimumOrderAmount" => "float",
    );

    /**
     * @param RecordRef $currency
     * @return PromotionCodeCurrency
     */
    public function setCurrency(RecordRef $currency): PromotionCodeCurrency
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
     * @param float $minimumOrderAmount
     * @return PromotionCodeCurrency
     */
    public function setMinimumOrderAmount(float $minimumOrderAmount): PromotionCodeCurrency
    {
        $this->minimumOrderAmount = $minimumOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrderAmount(): float
    {
        return $this->minimumOrderAmount;
    }

}
