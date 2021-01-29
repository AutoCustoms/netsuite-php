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

class CalendarEventSearchAdvanced extends SearchRecord {
    /**
     * @var CalendarEventSearch
     */
    protected CalendarEventSearch $criteria;

    /**
     * @var CalendarEventSearchRow
     */
    protected CalendarEventSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CalendarEventSearch",
        "columns" => "CalendarEventSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CalendarEventSearch $criteria
     * @return CalendarEventSearchAdvanced
     */
    public function setCriteria(CalendarEventSearch $criteria): CalendarEventSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CalendarEventSearch
     */
    public function getCriteria(): CalendarEventSearch
    {
        return $this->criteria;
    }

    /**
     * @param CalendarEventSearchRow $columns
     * @return CalendarEventSearchAdvanced
     */
    public function setColumns(CalendarEventSearchRow $columns): CalendarEventSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CalendarEventSearchRow
     */
    public function getColumns(): CalendarEventSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CalendarEventSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CalendarEventSearchAdvanced
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
     * @return CalendarEventSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CalendarEventSearchAdvanced
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
