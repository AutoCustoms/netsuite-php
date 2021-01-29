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

class GlobalAccountMappingSearchAdvanced extends SearchRecord {
    /**
     * @var GlobalAccountMappingSearch
     */
    protected GlobalAccountMappingSearch $criteria;

    /**
     * @var GlobalAccountMappingSearchRow
     */
    protected GlobalAccountMappingSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "GlobalAccountMappingSearch",
        "columns" => "GlobalAccountMappingSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param GlobalAccountMappingSearch $criteria
     * @return GlobalAccountMappingSearchAdvanced
     */
    public function setCriteria(GlobalAccountMappingSearch $criteria): GlobalAccountMappingSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return GlobalAccountMappingSearch
     */
    public function getCriteria(): GlobalAccountMappingSearch
    {
        return $this->criteria;
    }

    /**
     * @param GlobalAccountMappingSearchRow $columns
     * @return GlobalAccountMappingSearchAdvanced
     */
    public function setColumns(GlobalAccountMappingSearchRow $columns): GlobalAccountMappingSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return GlobalAccountMappingSearchRow
     */
    public function getColumns(): GlobalAccountMappingSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return GlobalAccountMappingSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): GlobalAccountMappingSearchAdvanced
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
     * @return GlobalAccountMappingSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): GlobalAccountMappingSearchAdvanced
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
