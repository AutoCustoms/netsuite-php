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

class CustomRecordSearchAdvanced extends SearchRecord {
    /**
     * @var CustomRecordSearch
     */
    protected CustomRecordSearch $criteria;

    /**
     * @var CustomRecordSearchRow
     */
    protected CustomRecordSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CustomRecordSearch",
        "columns" => "CustomRecordSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CustomRecordSearch $criteria
     * @return CustomRecordSearchAdvanced
     */
    public function setCriteria(CustomRecordSearch $criteria): CustomRecordSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CustomRecordSearch
     */
    public function getCriteria(): CustomRecordSearch
    {
        return $this->criteria;
    }

    /**
     * @param CustomRecordSearchRow $columns
     * @return CustomRecordSearchAdvanced
     */
    public function setColumns(CustomRecordSearchRow $columns): CustomRecordSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CustomRecordSearchRow
     */
    public function getColumns(): CustomRecordSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CustomRecordSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CustomRecordSearchAdvanced
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
     * @return CustomRecordSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CustomRecordSearchAdvanced
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
