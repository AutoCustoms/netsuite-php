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

class DemandPlan {
    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var float
     */
    protected float $calculatedQuantity;

    /**
     * @var PeriodDemandPlanList
     */
    protected PeriodDemandPlanList $periodDemandPlanList;

    static $paramtypesmap = array(
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "calculatedQuantity" => "float",
        "periodDemandPlanList" => "PeriodDemandPlanList",
    );

    /**
     * @param string $startDate
     * @return DemandPlan
     */
    public function setStartDate(string $startDate): DemandPlan
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return DemandPlan
     */
    public function setEndDate(string $endDate): DemandPlan
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param float $calculatedQuantity
     * @return DemandPlan
     */
    public function setCalculatedQuantity(float $calculatedQuantity): DemandPlan
    {
        $this->calculatedQuantity = $calculatedQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getCalculatedQuantity(): float
    {
        return $this->calculatedQuantity;
    }

    /**
     * @param PeriodDemandPlanList $periodDemandPlanList
     * @return DemandPlan
     */
    public function setPeriodDemandPlanList(PeriodDemandPlanList $periodDemandPlanList): DemandPlan
    {
        $this->periodDemandPlanList = $periodDemandPlanList;
        return $this;
    }

    /**
     * @return PeriodDemandPlanList
     */
    public function getPeriodDemandPlanList(): PeriodDemandPlanList
    {
        return $this->periodDemandPlanList;
    }

}
