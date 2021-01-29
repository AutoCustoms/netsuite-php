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

class ProjectTaskSearchAdvanced extends SearchRecord {
    /**
     * @var ProjectTaskSearch
     */
    protected ProjectTaskSearch $criteria;

    /**
     * @var ProjectTaskSearchRow
     */
    protected ProjectTaskSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ProjectTaskSearch",
        "columns" => "ProjectTaskSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ProjectTaskSearch $criteria
     * @return ProjectTaskSearchAdvanced
     */
    public function setCriteria(ProjectTaskSearch $criteria): ProjectTaskSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ProjectTaskSearch
     */
    public function getCriteria(): ProjectTaskSearch
    {
        return $this->criteria;
    }

    /**
     * @param ProjectTaskSearchRow $columns
     * @return ProjectTaskSearchAdvanced
     */
    public function setColumns(ProjectTaskSearchRow $columns): ProjectTaskSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ProjectTaskSearchRow
     */
    public function getColumns(): ProjectTaskSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ProjectTaskSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ProjectTaskSearchAdvanced
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
     * @return ProjectTaskSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ProjectTaskSearchAdvanced
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
