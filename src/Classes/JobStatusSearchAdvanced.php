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

class JobStatusSearchAdvanced extends SearchRecord {
    /**
     * @var JobStatusSearch
     */
    protected JobStatusSearch $criteria;

    /**
     * @var JobStatusSearchRow
     */
    protected JobStatusSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "JobStatusSearch",
        "columns" => "JobStatusSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param JobStatusSearch $criteria
     * @return JobStatusSearchAdvanced
     */
    public function setCriteria(JobStatusSearch $criteria): JobStatusSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return JobStatusSearch
     */
    public function getCriteria(): JobStatusSearch
    {
        return $this->criteria;
    }

    /**
     * @param JobStatusSearchRow $columns
     * @return JobStatusSearchAdvanced
     */
    public function setColumns(JobStatusSearchRow $columns): JobStatusSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return JobStatusSearchRow
     */
    public function getColumns(): JobStatusSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return JobStatusSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): JobStatusSearchAdvanced
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
     * @return JobStatusSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): JobStatusSearchAdvanced
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
