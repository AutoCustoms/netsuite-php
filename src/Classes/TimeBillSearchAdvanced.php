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

class TimeBillSearchAdvanced extends SearchRecord {
    /**
     * @var TimeBillSearch
     */
    protected TimeBillSearch $criteria;

    /**
     * @var TimeBillSearchRow
     */
    protected TimeBillSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "TimeBillSearch",
        "columns" => "TimeBillSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param TimeBillSearch $criteria
     * @return TimeBillSearchAdvanced
     */
    public function setCriteria(TimeBillSearch $criteria): TimeBillSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return TimeBillSearch
     */
    public function getCriteria(): TimeBillSearch
    {
        return $this->criteria;
    }

    /**
     * @param TimeBillSearchRow $columns
     * @return TimeBillSearchAdvanced
     */
    public function setColumns(TimeBillSearchRow $columns): TimeBillSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return TimeBillSearchRow
     */
    public function getColumns(): TimeBillSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return TimeBillSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): TimeBillSearchAdvanced
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
     * @return TimeBillSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): TimeBillSearchAdvanced
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
