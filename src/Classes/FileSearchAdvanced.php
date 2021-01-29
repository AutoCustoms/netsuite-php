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

class FileSearchAdvanced extends SearchRecord {
    /**
     * @var FileSearch
     */
    protected FileSearch $criteria;

    /**
     * @var FileSearchRow
     */
    protected FileSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "FileSearch",
        "columns" => "FileSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param FileSearch $criteria
     * @return FileSearchAdvanced
     */
    public function setCriteria(FileSearch $criteria): FileSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return FileSearch
     */
    public function getCriteria(): FileSearch
    {
        return $this->criteria;
    }

    /**
     * @param FileSearchRow $columns
     * @return FileSearchAdvanced
     */
    public function setColumns(FileSearchRow $columns): FileSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return FileSearchRow
     */
    public function getColumns(): FileSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return FileSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): FileSearchAdvanced
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
     * @return FileSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): FileSearchAdvanced
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
