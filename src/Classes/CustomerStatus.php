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

class CustomerStatus extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var CustomerStatusStage
     */
    protected CustomerStatusStage $stage;

    /**
     * @var float
     */
    protected float $probability;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $includeInLeadReports;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "stage" => "CustomerStatusStage",
        "probability" => "float",
        "description" => "string",
        "includeInLeadReports" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return CustomerStatus
     */
    public function setName(string $name): CustomerStatus
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param CustomerStatusStage $stage
     * @return CustomerStatus
     */
    public function setStage(CustomerStatusStage $stage): CustomerStatus
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return CustomerStatusStage
     */
    public function getStage(): CustomerStatusStage
    {
        return $this->stage;
    }

    /**
     * @param float $probability
     * @return CustomerStatus
     */
    public function setProbability(float $probability): CustomerStatus
    {
        $this->probability = $probability;
        return $this;
    }

    /**
     * @return float
     */
    public function getProbability(): float
    {
        return $this->probability;
    }

    /**
     * @param string $description
     * @return CustomerStatus
     */
    public function setDescription(string $description): CustomerStatus
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param bool $includeInLeadReports
     * @return CustomerStatus
     */
    public function setIncludeInLeadReports(bool $includeInLeadReports): CustomerStatus
    {
        $this->includeInLeadReports = $includeInLeadReports;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeInLeadReports(): bool
    {
        return $this->includeInLeadReports;
    }

    /**
     * @param bool $isInactive
     * @return CustomerStatus
     */
    public function setIsInactive(bool $isInactive): CustomerStatus
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $internalId
     * @return CustomerStatus
     */
    public function setInternalId(string $internalId): CustomerStatus
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return CustomerStatus
     */
    public function setExternalId(string $externalId): CustomerStatus
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
