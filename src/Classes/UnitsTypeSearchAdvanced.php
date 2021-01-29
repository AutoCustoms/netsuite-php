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

class UnitsTypeSearchAdvanced extends SearchRecord {
    /**
     * @var UnitsTypeSearch
     */
    protected UnitsTypeSearch $criteria;

    /**
     * @var UnitsTypeSearchRow
     */
    protected UnitsTypeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "UnitsTypeSearch",
        "columns" => "UnitsTypeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param UnitsTypeSearch $criteria
     * @return UnitsTypeSearchAdvanced
     */
    public function setCriteria(UnitsTypeSearch $criteria): UnitsTypeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return UnitsTypeSearch
     */
    public function getCriteria(): UnitsTypeSearch
    {
        return $this->criteria;
    }

    /**
     * @param UnitsTypeSearchRow $columns
     * @return UnitsTypeSearchAdvanced
     */
    public function setColumns(UnitsTypeSearchRow $columns): UnitsTypeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return UnitsTypeSearchRow
     */
    public function getColumns(): UnitsTypeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return UnitsTypeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): UnitsTypeSearchAdvanced
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
     * @return UnitsTypeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): UnitsTypeSearchAdvanced
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
