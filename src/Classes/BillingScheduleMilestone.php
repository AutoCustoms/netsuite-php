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

class BillingScheduleMilestone {
    /**
     * @var int
     */
    protected int $milestoneId;

    /**
     * @var float
     */
    protected float $milestoneAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $milestoneTerms;

    /**
     * @var RecordRef
     */
    protected RecordRef $projectTask;

    /**
     * @var string
     */
    protected string $milestoneDate;

    /**
     * @var bool
     */
    protected bool $milestoneCompleted;

    /**
     * @var string
     */
    protected string $milestoneActualCompletionDate;

    /**
     * @var string
     */
    protected string $comments;

    static $paramtypesmap = array(
        "milestoneId" => "integer",
        "milestoneAmount" => "float",
        "milestoneTerms" => "RecordRef",
        "projectTask" => "RecordRef",
        "milestoneDate" => "dateTime",
        "milestoneCompleted" => "boolean",
        "milestoneActualCompletionDate" => "dateTime",
        "comments" => "string",
    );

    /**
     * @param int $milestoneId
     * @return BillingScheduleMilestone
     */
    public function setMilestoneId(int $milestoneId): BillingScheduleMilestone
    {
        $this->milestoneId = $milestoneId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMilestoneId(): int
    {
        return $this->milestoneId;
    }

    /**
     * @param float $milestoneAmount
     * @return BillingScheduleMilestone
     */
    public function setMilestoneAmount(float $milestoneAmount): BillingScheduleMilestone
    {
        $this->milestoneAmount = $milestoneAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMilestoneAmount(): float
    {
        return $this->milestoneAmount;
    }

    /**
     * @param RecordRef $milestoneTerms
     * @return BillingScheduleMilestone
     */
    public function setMilestoneTerms(RecordRef $milestoneTerms): BillingScheduleMilestone
    {
        $this->milestoneTerms = $milestoneTerms;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMilestoneTerms(): RecordRef
    {
        return $this->milestoneTerms;
    }

    /**
     * @param RecordRef $projectTask
     * @return BillingScheduleMilestone
     */
    public function setProjectTask(RecordRef $projectTask): BillingScheduleMilestone
    {
        $this->projectTask = $projectTask;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectTask(): RecordRef
    {
        return $this->projectTask;
    }

    /**
     * @param string $milestoneDate
     * @return BillingScheduleMilestone
     */
    public function setMilestoneDate(string $milestoneDate): BillingScheduleMilestone
    {
        $this->milestoneDate = $milestoneDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneDate(): string
    {
        return $this->milestoneDate;
    }

    /**
     * @param bool $milestoneCompleted
     * @return BillingScheduleMilestone
     */
    public function setMilestoneCompleted(bool $milestoneCompleted): BillingScheduleMilestone
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
     * @param string $milestoneActualCompletionDate
     * @return BillingScheduleMilestone
     */
    public function setMilestoneActualCompletionDate(string $milestoneActualCompletionDate): BillingScheduleMilestone
    {
        $this->milestoneActualCompletionDate = $milestoneActualCompletionDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneActualCompletionDate(): string
    {
        return $this->milestoneActualCompletionDate;
    }

    /**
     * @param string $comments
     * @return BillingScheduleMilestone
     */
    public function setComments(string $comments): BillingScheduleMilestone
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): string
    {
        return $this->comments;
    }

}
