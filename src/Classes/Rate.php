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

class Rate {
    /**
     * @var float
     */
    protected float $value;

    /**
     * @var RecordRef
     */
    protected RecordRef $priceLevel;

    static $paramtypesmap = array(
        "value" => "float",
        "priceLevel" => "RecordRef",
    );

    /**
     * @param float $value
     * @return Rate
     */
    public function setValue(float $value): Rate
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param RecordRef $priceLevel
     * @return Rate
     */
    public function setPriceLevel(RecordRef $priceLevel): Rate
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

}
