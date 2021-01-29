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

class AsyncStatusResult {
    /**
     * @var string
     */
    protected string $jobId;

    /**
     * @var AsyncStatusType
     */
    protected AsyncStatusType $status;

    /**
     * @var float
     */
    protected float $percentCompleted;

    /**
     * @var float
     */
    protected float $estRemainingDuration;

    static $paramtypesmap = array(
        "jobId" => "string",
        "status" => "AsyncStatusType",
        "percentCompleted" => "float",
        "estRemainingDuration" => "float",
    );

    /**
     * @param string $jobId
     * @return AsyncStatusResult
     */
    public function setJobId(string $jobId): AsyncStatusResult
    {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobId(): string
    {
        return $this->jobId;
    }

    /**
     * @param AsyncStatusType $status
     * @return AsyncStatusResult
     */
    public function setStatus(AsyncStatusType $status): AsyncStatusResult
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return AsyncStatusType
     */
    public function getStatus(): AsyncStatusType
    {
        return $this->status;
    }

    /**
     * @param float $percentCompleted
     * @return AsyncStatusResult
     */
    public function setPercentCompleted(float $percentCompleted): AsyncStatusResult
    {
        $this->percentCompleted = $percentCompleted;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentCompleted(): float
    {
        return $this->percentCompleted;
    }

    /**
     * @param float $estRemainingDuration
     * @return AsyncStatusResult
     */
    public function setEstRemainingDuration(float $estRemainingDuration): AsyncStatusResult
    {
        $this->estRemainingDuration = $estRemainingDuration;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstRemainingDuration(): float
    {
        return $this->estRemainingDuration;
    }

}
