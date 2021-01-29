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

class ManufacturingOperationTaskPredecessor {
    /**
     * @var RecordRef
     */
    protected RecordRef $task;

    /**
     * @var ManufacturingOperationTaskPredecessorPredecessorType
     */
    protected ManufacturingOperationTaskPredecessorPredecessorType $type;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

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
        "task" => "RecordRef",
        "type" => "ManufacturingOperationTaskPredecessorPredecessorType",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "lagType" => "ManufacturingLagType",
        "lagAmount" => "integer",
        "lagUnits" => "string",
    );

    /**
     * @param RecordRef $task
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setTask(RecordRef $task): ManufacturingOperationTaskPredecessor
    {
        $this->task = $task;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTask(): RecordRef
    {
        return $this->task;
    }

    /**
     * @param ManufacturingOperationTaskPredecessorPredecessorType $type
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setType(ManufacturingOperationTaskPredecessorPredecessorType $type): ManufacturingOperationTaskPredecessor
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskPredecessorPredecessorType
     */
    public function getType(): ManufacturingOperationTaskPredecessorPredecessorType
    {
        return $this->type;
    }

    /**
     * @param string $startDate
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setStartDate(string $startDate): ManufacturingOperationTaskPredecessor
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
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setEndDate(string $endDate): ManufacturingOperationTaskPredecessor
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
     * @param ManufacturingLagType $lagType
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setLagType(ManufacturingLagType $lagType): ManufacturingOperationTaskPredecessor
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
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setLagAmount(int $lagAmount): ManufacturingOperationTaskPredecessor
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
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setLagUnits(string $lagUnits): ManufacturingOperationTaskPredecessor
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
