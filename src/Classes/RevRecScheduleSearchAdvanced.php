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

class RevRecScheduleSearchAdvanced extends SearchRecord {
    /**
     * @var RevRecScheduleSearch
     */
    protected RevRecScheduleSearch $criteria;

    /**
     * @var RevRecScheduleSearchRow
     */
    protected RevRecScheduleSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "RevRecScheduleSearch",
        "columns" => "RevRecScheduleSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param RevRecScheduleSearch $criteria
     * @return RevRecScheduleSearchAdvanced
     */
    public function setCriteria(RevRecScheduleSearch $criteria): RevRecScheduleSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return RevRecScheduleSearch
     */
    public function getCriteria(): RevRecScheduleSearch
    {
        return $this->criteria;
    }

    /**
     * @param RevRecScheduleSearchRow $columns
     * @return RevRecScheduleSearchAdvanced
     */
    public function setColumns(RevRecScheduleSearchRow $columns): RevRecScheduleSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return RevRecScheduleSearchRow
     */
    public function getColumns(): RevRecScheduleSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return RevRecScheduleSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): RevRecScheduleSearchAdvanced
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
     * @return RevRecScheduleSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): RevRecScheduleSearchAdvanced
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
