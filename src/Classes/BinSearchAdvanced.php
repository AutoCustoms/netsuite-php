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

class BinSearchAdvanced extends SearchRecord {
    /**
     * @var BinSearch
     */
    protected BinSearch $criteria;

    /**
     * @var BinSearchRow
     */
    protected BinSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "BinSearch",
        "columns" => "BinSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param BinSearch $criteria
     * @return BinSearchAdvanced
     */
    public function setCriteria(BinSearch $criteria): BinSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return BinSearch
     */
    public function getCriteria(): BinSearch
    {
        return $this->criteria;
    }

    /**
     * @param BinSearchRow $columns
     * @return BinSearchAdvanced
     */
    public function setColumns(BinSearchRow $columns): BinSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return BinSearchRow
     */
    public function getColumns(): BinSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return BinSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): BinSearchAdvanced
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
     * @return BinSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): BinSearchAdvanced
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
