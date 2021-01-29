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

class JobSearchAdvanced extends SearchRecord {
    /**
     * @var JobSearch
     */
    protected JobSearch $criteria;

    /**
     * @var JobSearchRow
     */
    protected JobSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "JobSearch",
        "columns" => "JobSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param JobSearch $criteria
     * @return JobSearchAdvanced
     */
    public function setCriteria(JobSearch $criteria): JobSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return JobSearch
     */
    public function getCriteria(): JobSearch
    {
        return $this->criteria;
    }

    /**
     * @param JobSearchRow $columns
     * @return JobSearchAdvanced
     */
    public function setColumns(JobSearchRow $columns): JobSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return JobSearchRow
     */
    public function getColumns(): JobSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return JobSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): JobSearchAdvanced
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
     * @return JobSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): JobSearchAdvanced
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
