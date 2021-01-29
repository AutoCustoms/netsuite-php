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

class ManufacturingRoutingRoutingStep {
    /**
     * @var int
     */
    protected int $operationSequence;

    /**
     * @var string
     */
    protected string $operationName;

    /**
     * @var RecordRef
     */
    protected RecordRef $manufacturingWorkCenter;

    /**
     * @var float
     */
    protected float $machineResources;

    /**
     * @var float
     */
    protected float $laborResources;

    /**
     * @var RecordRef
     */
    protected RecordRef $manufacturingCostTemplate;

    /**
     * @var float
     */
    protected float $setupTime;

    /**
     * @var float
     */
    protected float $runRate;

    /**
     * @var ManufacturingLagType
     */
    protected ManufacturingLagType $lagType;

    /**
     * @var int
     */
    protected int $lagAmount;

    /**
     * @var string
     */
    protected string $lagUnits;

    static $paramtypesmap = array(
        "operationSequence" => "integer",
        "operationName" => "string",
        "manufacturingWorkCenter" => "RecordRef",
        "machineResources" => "float",
        "laborResources" => "float",
        "manufacturingCostTemplate" => "RecordRef",
        "setupTime" => "float",
        "runRate" => "float",
        "lagType" => "ManufacturingLagType",
        "lagAmount" => "integer",
        "lagUnits" => "string",
    );

    /**
     * @param int $operationSequence
     * @return ManufacturingRoutingRoutingStep
     */
    public function setOperationSequence(int $operationSequence): ManufacturingRoutingRoutingStep
    {
        $this->operationSequence = $operationSequence;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperationSequence(): int
    {
        return $this->operationSequence;
    }

    /**
     * @param string $operationName
     * @return ManufacturingRoutingRoutingStep
     */
    public function setOperationName(string $operationName): ManufacturingRoutingRoutingStep
    {
        $this->operationName = $operationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationName(): string
    {
        return $this->operationName;
    }

    /**
     * @param RecordRef $manufacturingWorkCenter
     * @return ManufacturingRoutingRoutingStep
     */
    public function setManufacturingWorkCenter(RecordRef $manufacturingWorkCenter): ManufacturingRoutingRoutingStep
    {
        $this->manufacturingWorkCenter = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingWorkCenter(): RecordRef
    {
        return $this->manufacturingWorkCenter;
    }

    /**
     * @param float $machineResources
     * @return ManufacturingRoutingRoutingStep
     */
    public function setMachineResources(float $machineResources): ManufacturingRoutingRoutingStep
    {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * @return float
     */
    public function getMachineResources(): float
    {
        return $this->machineResources;
    }

    /**
     * @param float $laborResources
     * @return ManufacturingRoutingRoutingStep
     */
    public function setLaborResources(float $laborResources): ManufacturingRoutingRoutingStep
    {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * @return float
     */
    public function getLaborResources(): float
    {
        return $this->laborResources;
    }

    /**
     * @param RecordRef $manufacturingCostTemplate
     * @return ManufacturingRoutingRoutingStep
     */
    public function setManufacturingCostTemplate(RecordRef $manufacturingCostTemplate): ManufacturingRoutingRoutingStep
    {
        $this->manufacturingCostTemplate = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingCostTemplate(): RecordRef
    {
        return $this->manufacturingCostTemplate;
    }

    /**
     * @param float $setupTime
     * @return ManufacturingRoutingRoutingStep
     */
    public function setSetupTime(float $setupTime): ManufacturingRoutingRoutingStep
    {
        $this->setupTime = $setupTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getSetupTime(): float
    {
        return $this->setupTime;
    }

    /**
     * @param float $runRate
     * @return ManufacturingRoutingRoutingStep
     */
    public function setRunRate(float $runRate): ManufacturingRoutingRoutingStep
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

    /**
     * @param ManufacturingLagType $lagType
     * @return ManufacturingRoutingRoutingStep
     */
    public function setLagType(ManufacturingLagType $lagType): ManufacturingRoutingRoutingStep
    {
        $this->lagType = $lagType;
        return $this;
    }

    /**
     * @return ManufacturingLagType
     */
    public function getLagType(): ManufacturingLagType
    {
        return $this->lagType;
    }

    /**
     * @param int $lagAmount
     * @return ManufacturingRoutingRoutingStep
     */
    public function setLagAmount(int $lagAmount): ManufacturingRoutingRoutingStep
    {
        $this->lagAmount = $lagAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLagAmount(): int
    {
        return $this->lagAmount;
    }

    /**
     * @param string $lagUnits
     * @return ManufacturingRoutingRoutingStep
     */
    public function setLagUnits(string $lagUnits): ManufacturingRoutingRoutingStep
    {
        $this->lagUnits = $lagUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getLagUnits(): string
    {
        return $this->lagUnits;
    }

}
