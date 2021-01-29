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

class TermSearchAdvanced extends SearchRecord {
    /**
     * @var TermSearch
     */
    protected TermSearch $criteria;

    /**
     * @var TermSearchRow
     */
    protected TermSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "TermSearch",
        "columns" => "TermSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param TermSearch $criteria
     * @return TermSearchAdvanced
     */
    public function setCriteria(TermSearch $criteria): TermSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return TermSearch
     */
    public function getCriteria(): TermSearch
    {
        return $this->criteria;
    }

    /**
     * @param TermSearchRow $columns
     * @return TermSearchAdvanced
     */
    public function setColumns(TermSearchRow $columns): TermSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return TermSearchRow
     */
    public function getColumns(): TermSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return TermSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): TermSearchAdvanced
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
     * @return TermSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): TermSearchAdvanced
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
