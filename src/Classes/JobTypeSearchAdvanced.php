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

class JobTypeSearchAdvanced extends SearchRecord {
    /**
     * @var JobTypeSearch
     */
    protected JobTypeSearch $criteria;

    /**
     * @var JobTypeSearchRow
     */
    protected JobTypeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "JobTypeSearch",
        "columns" => "JobTypeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param JobTypeSearch $criteria
     * @return JobTypeSearchAdvanced
     */
    public function setCriteria(JobTypeSearch $criteria): JobTypeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return JobTypeSearch
     */
    public function getCriteria(): JobTypeSearch
    {
        return $this->criteria;
    }

    /**
     * @param JobTypeSearchRow $columns
     * @return JobTypeSearchAdvanced
     */
    public function setColumns(JobTypeSearchRow $columns): JobTypeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return JobTypeSearchRow
     */
    public function getColumns(): JobTypeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return JobTypeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): JobTypeSearchAdvanced
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
     * @return JobTypeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): JobTypeSearchAdvanced
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
