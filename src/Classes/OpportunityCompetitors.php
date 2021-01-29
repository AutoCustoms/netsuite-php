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

class OpportunityCompetitors {
    /**
     * @var RecordRef
     */
    protected RecordRef $competitor;

    /**
     * @var string
     */
    protected string $url;

    /**
     * @var string
     */
    protected string $notes;

    /**
     * @var string
     */
    protected string $strategy;

    /**
     * @var bool
     */
    protected bool $winner;

    static $paramtypesmap = array(
        "competitor" => "RecordRef",
        "url" => "string",
        "notes" => "string",
        "strategy" => "string",
        "winner" => "boolean",
    );

    /**
     * @param RecordRef $competitor
     * @return OpportunityCompetitors
     */
    public function setCompetitor(RecordRef $competitor): OpportunityCompetitors
    {
        $this->competitor = $competitor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCompetitor(): RecordRef
    {
        return $this->competitor;
    }

    /**
     * @param string $url
     * @return OpportunityCompetitors
     */
    public function setUrl(string $url): OpportunityCompetitors
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $notes
     * @return OpportunityCompetitors
     */
    public function setNotes(string $notes): OpportunityCompetitors
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * @param string $strategy
     * @return OpportunityCompetitors
     */
    public function setStrategy(string $strategy): OpportunityCompetitors
    {
        $this->strategy = $strategy;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrategy(): string
    {
        return $this->strategy;
    }

    /**
     * @param bool $winner
     * @return OpportunityCompetitors
     */
    public function setWinner(bool $winner): OpportunityCompetitors
    {
        $this->winner = $winner;
        return $this;
    }

    /**
     * @return bool
     */
    public function getWinner(): bool
    {
        return $this->winner;
    }

}
