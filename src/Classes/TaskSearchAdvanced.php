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

class TaskSearchAdvanced extends SearchRecord {
    /**
     * @var TaskSearch
     */
    protected TaskSearch $criteria;

    /**
     * @var TaskSearchRow
     */
    protected TaskSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "TaskSearch",
        "columns" => "TaskSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param TaskSearch $criteria
     * @return TaskSearchAdvanced
     */
    public function setCriteria(TaskSearch $criteria): TaskSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return TaskSearch
     */
    public function getCriteria(): TaskSearch
    {
        return $this->criteria;
    }

    /**
     * @param TaskSearchRow $columns
     * @return TaskSearchAdvanced
     */
    public function setColumns(TaskSearchRow $columns): TaskSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return TaskSearchRow
     */
    public function getColumns(): TaskSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return TaskSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): TaskSearchAdvanced
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
     * @return TaskSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): TaskSearchAdvanced
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
