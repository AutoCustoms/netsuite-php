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

class ResourceAllocationSearchAdvanced extends SearchRecord {
    /**
     * @var ResourceAllocationSearch
     */
    protected ResourceAllocationSearch $criteria;

    /**
     * @var ResourceAllocationSearchRow
     */
    protected ResourceAllocationSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ResourceAllocationSearch",
        "columns" => "ResourceAllocationSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ResourceAllocationSearch $criteria
     * @return ResourceAllocationSearchAdvanced
     */
    public function setCriteria(ResourceAllocationSearch $criteria): ResourceAllocationSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ResourceAllocationSearch
     */
    public function getCriteria(): ResourceAllocationSearch
    {
        return $this->criteria;
    }

    /**
     * @param ResourceAllocationSearchRow $columns
     * @return ResourceAllocationSearchAdvanced
     */
    public function setColumns(ResourceAllocationSearchRow $columns): ResourceAllocationSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ResourceAllocationSearchRow
     */
    public function getColumns(): ResourceAllocationSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ResourceAllocationSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ResourceAllocationSearchAdvanced
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
     * @return ResourceAllocationSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ResourceAllocationSearchAdvanced
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
