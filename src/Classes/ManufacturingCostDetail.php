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

class ManufacturingCostDetail {
    /**
     * @var RecordRef
     */
    protected RecordRef $costCategory;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var float
     */
    protected float $fixedRate;

    /**
     * @var float
     */
    protected float $runRate;

    static $paramtypesmap = array(
        "costCategory" => "RecordRef",
        "item" => "RecordRef",
        "fixedRate" => "float",
        "runRate" => "float",
    );

    /**
     * @param RecordRef $costCategory
     * @return ManufacturingCostDetail
     */
    public function setCostCategory(RecordRef $costCategory): ManufacturingCostDetail
    {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCostCategory(): RecordRef
    {
        return $this->costCategory;
    }

    /**
     * @param RecordRef $item
     * @return ManufacturingCostDetail
     */
    public function setItem(RecordRef $item): ManufacturingCostDetail
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
     * @param float $fixedRate
     * @return ManufacturingCostDetail
     */
    public function setFixedRate(float $fixedRate): ManufacturingCostDetail
    {
        $this->fixedRate = $fixedRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getFixedRate(): float
    {
        return $this->fixedRate;
    }

    /**
     * @param float $runRate
     * @return ManufacturingCostDetail
     */
    public function setRunRate(float $runRate): ManufacturingCostDetail
    {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRunRate(): float
    {
        return $this->runRate;
    }

}
