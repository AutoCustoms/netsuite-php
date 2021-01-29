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

class LocationSearchAdvanced extends SearchRecord {
    /**
     * @var LocationSearch
     */
    protected LocationSearch $criteria;

    /**
     * @var LocationSearchRow
     */
    protected LocationSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "LocationSearch",
        "columns" => "LocationSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param LocationSearch $criteria
     * @return LocationSearchAdvanced
     */
    public function setCriteria(LocationSearch $criteria): LocationSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return LocationSearch
     */
    public function getCriteria(): LocationSearch
    {
        return $this->criteria;
    }

    /**
     * @param LocationSearchRow $columns
     * @return LocationSearchAdvanced
     */
    public function setColumns(LocationSearchRow $columns): LocationSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return LocationSearchRow
     */
    public function getColumns(): LocationSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return LocationSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): LocationSearchAdvanced
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
     * @return LocationSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): LocationSearchAdvanced
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
