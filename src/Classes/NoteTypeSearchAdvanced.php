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

class NoteTypeSearchAdvanced extends SearchRecord {
    /**
     * @var NoteTypeSearch
     */
    protected NoteTypeSearch $criteria;

    /**
     * @var NoteTypeSearchRow
     */
    protected NoteTypeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "NoteTypeSearch",
        "columns" => "NoteTypeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param NoteTypeSearch $criteria
     * @return NoteTypeSearchAdvanced
     */
    public function setCriteria(NoteTypeSearch $criteria): NoteTypeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return NoteTypeSearch
     */
    public function getCriteria(): NoteTypeSearch
    {
        return $this->criteria;
    }

    /**
     * @param NoteTypeSearchRow $columns
     * @return NoteTypeSearchAdvanced
     */
    public function setColumns(NoteTypeSearchRow $columns): NoteTypeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return NoteTypeSearchRow
     */
    public function getColumns(): NoteTypeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return NoteTypeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): NoteTypeSearchAdvanced
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
     * @return NoteTypeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): NoteTypeSearchAdvanced
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
