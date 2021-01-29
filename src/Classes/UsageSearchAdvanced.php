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

class UsageSearchAdvanced extends SearchRecord {
    /**
     * @var UsageSearch
     */
    protected UsageSearch $criteria;

    /**
     * @var UsageSearchRow
     */
    protected UsageSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "UsageSearch",
        "columns" => "UsageSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param UsageSearch $criteria
     * @return UsageSearchAdvanced
     */
    public function setCriteria(UsageSearch $criteria): UsageSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return UsageSearch
     */
    public function getCriteria(): UsageSearch
    {
        return $this->criteria;
    }

    /**
     * @param UsageSearchRow $columns
     * @return UsageSearchAdvanced
     */
    public function setColumns(UsageSearchRow $columns): UsageSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return UsageSearchRow
     */
    public function getColumns(): UsageSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return UsageSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): UsageSearchAdvanced
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
     * @return UsageSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): UsageSearchAdvanced
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
