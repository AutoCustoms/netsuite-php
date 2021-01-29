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

class TimeSheetSearchAdvanced extends SearchRecord {
    /**
     * @var TimeSheetSearch
     */
    protected TimeSheetSearch $criteria;

    /**
     * @var TimeSheetSearchRow
     */
    protected TimeSheetSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "TimeSheetSearch",
        "columns" => "TimeSheetSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param TimeSheetSearch $criteria
     * @return TimeSheetSearchAdvanced
     */
    public function setCriteria(TimeSheetSearch $criteria): TimeSheetSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return TimeSheetSearch
     */
    public function getCriteria(): TimeSheetSearch
    {
        return $this->criteria;
    }

    /**
     * @param TimeSheetSearchRow $columns
     * @return TimeSheetSearchAdvanced
     */
    public function setColumns(TimeSheetSearchRow $columns): TimeSheetSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return TimeSheetSearchRow
     */
    public function getColumns(): TimeSheetSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return TimeSheetSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): TimeSheetSearchAdvanced
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
     * @return TimeSheetSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): TimeSheetSearchAdvanced
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
