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

class NoteSearchAdvanced extends SearchRecord {
    /**
     * @var NoteSearch
     */
    protected NoteSearch $criteria;

    /**
     * @var NoteSearchRow
     */
    protected NoteSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "NoteSearch",
        "columns" => "NoteSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param NoteSearch $criteria
     * @return NoteSearchAdvanced
     */
    public function setCriteria(NoteSearch $criteria): NoteSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return NoteSearch
     */
    public function getCriteria(): NoteSearch
    {
        return $this->criteria;
    }

    /**
     * @param NoteSearchRow $columns
     * @return NoteSearchAdvanced
     */
    public function setColumns(NoteSearchRow $columns): NoteSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return NoteSearchRow
     */
    public function getColumns(): NoteSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return NoteSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): NoteSearchAdvanced
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
     * @return NoteSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): NoteSearchAdvanced
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
