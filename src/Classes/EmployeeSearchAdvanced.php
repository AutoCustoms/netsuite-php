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

class EmployeeSearchAdvanced extends SearchRecord {
    /**
     * @var EmployeeSearch
     */
    protected EmployeeSearch $criteria;

    /**
     * @var EmployeeSearchRow
     */
    protected EmployeeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "EmployeeSearch",
        "columns" => "EmployeeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param EmployeeSearch $criteria
     * @return EmployeeSearchAdvanced
     */
    public function setCriteria(EmployeeSearch $criteria): EmployeeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return EmployeeSearch
     */
    public function getCriteria(): EmployeeSearch
    {
        return $this->criteria;
    }

    /**
     * @param EmployeeSearchRow $columns
     * @return EmployeeSearchAdvanced
     */
    public function setColumns(EmployeeSearchRow $columns): EmployeeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return EmployeeSearchRow
     */
    public function getColumns(): EmployeeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return EmployeeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): EmployeeSearchAdvanced
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
     * @return EmployeeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): EmployeeSearchAdvanced
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
