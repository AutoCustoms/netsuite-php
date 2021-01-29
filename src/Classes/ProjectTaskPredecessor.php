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

class ProjectTaskPredecessor {
    /**
     * @var RecordRef
     */
    protected RecordRef $task;

    /**
     * @var ProjectTaskPredecessorPredecessorType
     */
    protected ProjectTaskPredecessorPredecessorType $type;

    /**
     * @var float
     */
    protected float $lagDays;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    static $paramtypesmap = array(
        "task" => "RecordRef",
        "type" => "ProjectTaskPredecessorPredecessorType",
        "lagDays" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
    );

    /**
     * @param RecordRef $task
     * @return ProjectTaskPredecessor
     */
    public function setTask(RecordRef $task): ProjectTaskPredecessor
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
     * @param ProjectTaskPredecessorPredecessorType $type
     * @return ProjectTaskPredecessor
     */
    public function setType(ProjectTaskPredecessorPredecessorType $type): ProjectTaskPredecessor
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return ProjectTaskPredecessorPredecessorType
     */
    public function getType(): ProjectTaskPredecessorPredecessorType
    {
        return $this->type;
    }

    /**
     * @param float $lagDays
     * @return ProjectTaskPredecessor
     */
    public function setLagDays(float $lagDays): ProjectTaskPredecessor
    {
        $this->lagDays = $lagDays;
        return $this;
    }

    /**
     * @return float
     */
    public function getLagDays(): float
    {
        return $this->lagDays;
    }

    /**
     * @param string $startDate
     * @return ProjectTaskPredecessor
     */
    public function setStartDate(string $startDate): ProjectTaskPredecessor
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
     * @return ProjectTaskPredecessor
     */
    public function setEndDate(string $endDate): ProjectTaskPredecessor
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

}
