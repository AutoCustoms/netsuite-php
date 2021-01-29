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

class JobMilestones {
    /**
     * @var string
     */
    protected string $milestoneName;

    /**
     * @var string
     */
    protected string $milestoneOrder;

    /**
     * @var string
     */
    protected string $milestoneEstComplete;

    /**
     * @var bool
     */
    protected bool $milestoneCompleted;

    /**
     * @var string
     */
    protected string $milestoneComments;

    static $paramtypesmap = array(
        "milestoneName" => "string",
        "milestoneOrder" => "string",
        "milestoneEstComplete" => "dateTime",
        "milestoneCompleted" => "boolean",
        "milestoneComments" => "string",
    );

    /**
     * @param string $milestoneName
     * @return JobMilestones
     */
    public function setMilestoneName(string $milestoneName): JobMilestones
    {
        $this->milestoneName = $milestoneName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneName(): string
    {
        return $this->milestoneName;
    }

    /**
     * @param string $milestoneOrder
     * @return JobMilestones
     */
    public function setMilestoneOrder(string $milestoneOrder): JobMilestones
    {
        $this->milestoneOrder = $milestoneOrder;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneOrder(): string
    {
        return $this->milestoneOrder;
    }

    /**
     * @param string $milestoneEstComplete
     * @return JobMilestones
     */
    public function setMilestoneEstComplete(string $milestoneEstComplete): JobMilestones
    {
        $this->milestoneEstComplete = $milestoneEstComplete;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneEstComplete(): string
    {
        return $this->milestoneEstComplete;
    }

    /**
     * @param bool $milestoneCompleted
     * @return JobMilestones
     */
    public function setMilestoneCompleted(bool $milestoneCompleted): JobMilestones
    {
        $this->milestoneCompleted = $milestoneCompleted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMilestoneCompleted(): bool
    {
        return $this->milestoneCompleted;
    }

    /**
     * @param string $milestoneComments
     * @return JobMilestones
     */
    public function setMilestoneComments(string $milestoneComments): JobMilestones
    {
        $this->milestoneComments = $milestoneComments;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneComments(): string
    {
        return $this->milestoneComments;
    }

}
