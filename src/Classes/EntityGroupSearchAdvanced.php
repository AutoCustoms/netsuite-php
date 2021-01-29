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

class EntityGroupSearchAdvanced extends SearchRecord {
    /**
     * @var EntityGroupSearch
     */
    protected EntityGroupSearch $criteria;

    /**
     * @var EntityGroupSearchRow
     */
    protected EntityGroupSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "EntityGroupSearch",
        "columns" => "EntityGroupSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param EntityGroupSearch $criteria
     * @return EntityGroupSearchAdvanced
     */
    public function setCriteria(EntityGroupSearch $criteria): EntityGroupSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return EntityGroupSearch
     */
    public function getCriteria(): EntityGroupSearch
    {
        return $this->criteria;
    }

    /**
     * @param EntityGroupSearchRow $columns
     * @return EntityGroupSearchAdvanced
     */
    public function setColumns(EntityGroupSearchRow $columns): EntityGroupSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return EntityGroupSearchRow
     */
    public function getColumns(): EntityGroupSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return EntityGroupSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): EntityGroupSearchAdvanced
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
     * @return EntityGroupSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): EntityGroupSearchAdvanced
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
