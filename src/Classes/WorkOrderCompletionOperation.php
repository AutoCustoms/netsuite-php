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

class WorkOrderCompletionOperation {
    /**
     * @var int
     */
    protected int $operationSequence;

    /**
     * @var string
     */
    protected string $operationName;

    /**
     * @var string
     */
    protected string $workCenter;

    /**
     * @var float
     */
    protected float $machineResources;

    /**
     * @var float
     */
    protected float $laborResources;

    /**
     * @var float
     */
    protected float $inputQuantity;

    /**
     * @var float
     */
    protected float $quantityRemaining;

    /**
     * @var float
     */
    protected float $predecessorCompletedQuantity;

    /**
     * @var float
     */
    protected float $completedQuantity;

    /**
     * @var bool
     */
    protected bool $recordSetup;

    /**
     * @var float
     */
    protected float $machineSetupTime;

    /**
     * @var float
     */
    protected float $laborSetupTime;

    /**
     * @var float
     */
    protected float $machineRunTime;

    /**
     * @var float
     */
    protected float $laborRunTime;

    static $paramtypesmap = array(
        "operationSequence" => "integer",
        "operationName" => "string",
        "workCenter" => "string",
        "machineResources" => "float",
        "laborResources" => "float",
        "inputQuantity" => "float",
        "quantityRemaining" => "float",
        "predecessorCompletedQuantity" => "float",
        "completedQuantity" => "float",
        "recordSetup" => "boolean",
        "machineSetupTime" => "float",
        "laborSetupTime" => "float",
        "machineRunTime" => "float",
        "laborRunTime" => "float",
    );

    /**
     * @param int $operationSequence
     * @return WorkOrderCompletionOperation
     */
    public function setOperationSequence(int $operationSequence): WorkOrderCompletionOperation
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
     * @return WorkOrderCompletionOperation
     */
    public function setOperationName(string $operationName): WorkOrderCompletionOperation
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
     * @param string $workCenter
     * @return WorkOrderCompletionOperation
     */
    public function setWorkCenter(string $workCenter): WorkOrderCompletionOperation
    {
        $this->workCenter = $workCenter;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkCenter(): string
    {
        return $this->workCenter;
    }

    /**
     * @param float $machineResources
     * @return WorkOrderCompletionOperation
     */
    public function setMachineResources(float $machineResources): WorkOrderCompletionOperation
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
     * @return WorkOrderCompletionOperation
     */
    public function setLaborResources(float $laborResources): WorkOrderCompletionOperation
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
     * @param float $inputQuantity
     * @return WorkOrderCompletionOperation
     */
    public function setInputQuantity(float $inputQuantity): WorkOrderCompletionOperation
    {
        $this->inputQuantity = $inputQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getInputQuantity(): float
    {
        return $this->inputQuantity;
    }

    /**
     * @param float $quantityRemaining
     * @return WorkOrderCompletionOperation
     */
    public function setQuantityRemaining(float $quantityRemaining): WorkOrderCompletionOperation
    {
        $this->quantityRemaining = $quantityRemaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityRemaining(): float
    {
        return $this->quantityRemaining;
    }

    /**
     * @param float $predecessorCompletedQuantity
     * @return WorkOrderCompletionOperation
     */
    public function setPredecessorCompletedQuantity(float $predecessorCompletedQuantity): WorkOrderCompletionOperation
    {
        $this->predecessorCompletedQuantity = $predecessorCompletedQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPredecessorCompletedQuantity(): float
    {
        return $this->predecessorCompletedQuantity;
    }

    /**
     * @param float $completedQuantity
     * @return WorkOrderCompletionOperation
     */
    public function setCompletedQuantity(float $completedQuantity): WorkOrderCompletionOperation
    {
        $this->completedQuantity = $completedQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompletedQuantity(): float
    {
        return $this->completedQuantity;
    }

    /**
     * @param bool $recordSetup
     * @return WorkOrderCompletionOperation
     */
    public function setRecordSetup(bool $recordSetup): WorkOrderCompletionOperation
    {
        $this->recordSetup = $recordSetup;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRecordSetup(): bool
    {
        return $this->recordSetup;
    }

    /**
     * @param float $machineSetupTime
     * @return WorkOrderCompletionOperation
     */
    public function setMachineSetupTime(float $machineSetupTime): WorkOrderCompletionOperation
    {
        $this->machineSetupTime = $machineSetupTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getMachineSetupTime(): float
    {
        return $this->machineSetupTime;
    }

    /**
     * @param float $laborSetupTime
     * @return WorkOrderCompletionOperation
     */
    public function setLaborSetupTime(float $laborSetupTime): WorkOrderCompletionOperation
    {
        $this->laborSetupTime = $laborSetupTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getLaborSetupTime(): float
    {
        return $this->laborSetupTime;
    }

    /**
     * @param float $machineRunTime
     * @return WorkOrderCompletionOperation
     */
    public function setMachineRunTime(float $machineRunTime): WorkOrderCompletionOperation
    {
        $this->machineRunTime = $machineRunTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getMachineRunTime(): float
    {
        return $this->machineRunTime;
    }

    /**
     * @param float $laborRunTime
     * @return WorkOrderCompletionOperation
     */
    public function setLaborRunTime(float $laborRunTime): WorkOrderCompletionOperation
    {
        $this->laborRunTime = $laborRunTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getLaborRunTime(): float
    {
        return $this->laborRunTime;
    }

}
