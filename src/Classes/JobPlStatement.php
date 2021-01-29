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

class JobPlStatement {
    /**
     * @var string
     */
    protected string $costCategory;

    /**
     * @var float
     */
    protected float $revenue;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var float
     */
    protected float $profit;

    /**
     * @var float
     */
    protected float $margin;

    static $paramtypesmap = array(
        "costCategory" => "string",
        "revenue" => "float",
        "cost" => "float",
        "profit" => "float",
        "margin" => "float",
    );

    /**
     * @param string $costCategory
     * @return JobPlStatement
     */
    public function setCostCategory(string $costCategory): JobPlStatement
    {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostCategory(): string
    {
        return $this->costCategory;
    }

    /**
     * @param float $revenue
     * @return JobPlStatement
     */
    public function setRevenue(float $revenue): JobPlStatement
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevenue(): float
    {
        return $this->revenue;
    }

    /**
     * @param float $cost
     * @return JobPlStatement
     */
    public function setCost(float $cost): JobPlStatement
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $profit
     * @return JobPlStatement
     */
    public function setProfit(float $profit): JobPlStatement
    {
        $this->profit = $profit;
        return $this;
    }

    /**
     * @return float
     */
    public function getProfit(): float
    {
        return $this->profit;
    }

    /**
     * @param float $margin
     * @return JobPlStatement
     */
    public function setMargin(float $margin): JobPlStatement
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getMargin(): float
    {
        return $this->margin;
    }

}
