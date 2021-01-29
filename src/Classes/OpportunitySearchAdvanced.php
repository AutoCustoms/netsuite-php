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

class OpportunitySearchAdvanced extends SearchRecord {
    /**
     * @var OpportunitySearch
     */
    protected OpportunitySearch $criteria;

    /**
     * @var OpportunitySearchRow
     */
    protected OpportunitySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "OpportunitySearch",
        "columns" => "OpportunitySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param OpportunitySearch $criteria
     * @return OpportunitySearchAdvanced
     */
    public function setCriteria(OpportunitySearch $criteria): OpportunitySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return OpportunitySearch
     */
    public function getCriteria(): OpportunitySearch
    {
        return $this->criteria;
    }

    /**
     * @param OpportunitySearchRow $columns
     * @return OpportunitySearchAdvanced
     */
    public function setColumns(OpportunitySearchRow $columns): OpportunitySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return OpportunitySearchRow
     */
    public function getColumns(): OpportunitySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return OpportunitySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): OpportunitySearchAdvanced
    {
        $this->savedSearchId = $savedSearchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchId(): string
    {
        return $this->savedSearchId;
    }

    /**
     * @param string $savedSearchScriptId
     * @return OpportunitySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): OpportunitySearchAdvanced
    {
        $this->savedSearchScriptId = $savedSearchScriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchScriptId(): string
    {
        return $this->savedSearchScriptId;
    }

}
