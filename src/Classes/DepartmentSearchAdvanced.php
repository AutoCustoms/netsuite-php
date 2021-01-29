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

class DepartmentSearchAdvanced extends SearchRecord {
    /**
     * @var DepartmentSearch
     */
    protected DepartmentSearch $criteria;

    /**
     * @var DepartmentSearchRow
     */
    protected DepartmentSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "DepartmentSearch",
        "columns" => "DepartmentSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param DepartmentSearch $criteria
     * @return DepartmentSearchAdvanced
     */
    public function setCriteria(DepartmentSearch $criteria): DepartmentSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return DepartmentSearch
     */
    public function getCriteria(): DepartmentSearch
    {
        return $this->criteria;
    }

    /**
     * @param DepartmentSearchRow $columns
     * @return DepartmentSearchAdvanced
     */
    public function setColumns(DepartmentSearchRow $columns): DepartmentSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return DepartmentSearchRow
     */
    public function getColumns(): DepartmentSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return DepartmentSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): DepartmentSearchAdvanced
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
     * @return DepartmentSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): DepartmentSearchAdvanced
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
